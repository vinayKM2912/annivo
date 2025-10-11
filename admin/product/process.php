<?php

// --- Configuration ---
// These paths are relative to the script's location (admin/product/process.php)
$categories_file = '../../data/categories.php';
$products_file = '../../data/products.php';
// The upload directory is now organized by category slug
$base_upload_dir = 'uploads/products/';

// Function to safely sanitize and create a slug
function create_slug($text)
{
    $text = strtolower($text);
    $text = preg_replace('/[^a-z0-9]+/', '-', $text);
    $text = trim($text, '-');
    return $text;
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 1. Collect and Auto-Generate Product Data
    $category_slug = filter_input(INPUT_POST, 'category_slug', FILTER_SANITIZE_STRING);
    $title = filter_input(INPUT_POST, 'product_title', FILTER_SANITIZE_STRING);
    $price = filter_input(INPUT_POST, 'product_price', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    // Auto-Generate Fields
    $product_slug = create_slug($title);
    $product_id = uniqid(); // Still use a unique ID for the internal index
    $variant_id = $product_id;

    if (empty($category_slug) || empty($title) || empty($price)) {
        http_response_code(500);
        die('Error: Missing required product fields (Title, Price, Category).');
    }

    // --- 2. Handle Single Image Upload (SLUG-BASED LOGIC) ---
    $image_path = null;
    $upload_dir = $base_upload_dir . $category_slug . '/'; // Path: uploads/products/category-slug/

    if (!empty($_FILES['product_image']['name'])) {
        $file = $_FILES['product_image'];

        // Calculate the project root (two directories up from admin/product/)
        $project_root = dirname(__DIR__, 2) . '/';

        // Calculate the full absolute path for the directory creation
        $absolute_upload_dir = $project_root . $upload_dir;

        if (!is_dir($absolute_upload_dir)) {
            // Create directory with full permissions recursively
            if (!mkdir($absolute_upload_dir, 0777, true)) {
                http_response_code(500);
                // Added check for directory creation failure
                die("Error: Failed to create upload directory: **{$absolute_upload_dir}**.");
            }
        }

        $file_name = $file['name'];
        $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // **New Filename:** Uses the product slug for clarity (e.g., personalized-keychain.jpg)
        $new_file_name = $product_slug . '.' . $ext;
        $destination = $upload_dir . $new_file_name;

        // **CRITICAL FIX:** Use the absolute path for move_uploaded_file
        $absolute_destination = $project_root . $destination;

        if (move_uploaded_file($file['tmp_name'], $absolute_destination)) {
            // Store the relative path in the database/file for web access
            $image_path = $destination;
        } else {
            // Error handling for file move failure (Added more detail for debugging)
            $last_error = error_get_last();
            $log_message = "File upload failed. move_uploaded_file error: " .
                ($last_error ? $last_error['message'] : 'Unknown error.') .
                " Attempted destination: " . $absolute_destination;
            error_log($log_message);

            http_response_code(500);
            die("Error: Failed to upload and move image **{$file_name}**. Please check server permissions and error logs.");
        }
    } else {
        http_response_code(500);
        die('Error: Product image is required.');
    }

    // 3. Load Existing Data
    // Use @ to suppress 'require' warnings if file doesn't exist
    $products = @file_exists($products_file) ? require $products_file : [];
    $categories = @file_exists($categories_file) ? require $categories_file : [];

    // 4. Create New Product Data Structure
    $new_product = [
        'product_title' => $title,
        'product_slug' => $product_slug,
        'product_price' => $price,
        'variant_id' => $variant_id,
        'category_slug' => $category_slug,
        // Single image path, stored as a string
        'image' => $image_path,
    ];

    // Add to the main products array, indexed by the product_id
    $products[$product_id] = $new_product;

    // 5. Update the Categories List (Link the new product to its category)
    if (isset($categories[$category_slug])) {
        if (!isset($categories[$category_slug]['product_ids']) || !is_array($categories[$category_slug]['product_ids'])) {
            $categories[$category_slug]['product_ids'] = [];
        }
        $categories[$category_slug]['product_ids'][] = $product_id;

        $php_cat_data = '<?php return ' . var_export($categories, true) . ';';
        file_put_contents($categories_file, $php_cat_data);
    }

    // 6. Save the Updated Products Array
    $php_prod_data = '<?php return ' . var_export($products, true) . ';';

    if (file_put_contents($products_file, $php_prod_data) !== false) {
        // Success message
        echo "Product **'{$title}'** added successfully (Slug: **{$product_slug}**).";
    } else {
        http_response_code(500);
        echo 'Error: Failed to save product data to file.';
    }

} else {
    http_response_code(405);
    die('Method Not Allowed.');
}
