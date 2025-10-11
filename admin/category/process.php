<?php
// --- Configuration ---
$categories_file = 'data/categories.php';
$base_upload_dir = 'uploads/cover/';

// Function to safely sanitize and create a slug
function create_slug($text)
{
    // Sanitize to remove potentially problematic characters before slug creation
    $text = filter_var($text, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $text = strtolower($text);
    $text = preg_replace('/[^a-z0-9]+/', '-', $text);
    $text = trim($text, '-');
    return $text;
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Calculate the project root
    // If this file is at /admin/category/process.php, we need to go up 2 levels
    $project_root = dirname(__DIR__, 2) . '/';

    // Debug: Log the project root path
    error_log("Project Root: " . $project_root);
    error_log("Categories File Path: " . $project_root . $categories_file);

    // 1. Collect and Sanitize Data
    $title = filter_input(INPUT_POST, 'category_title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_content = filter_input(INPUT_POST, 'category_content', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $slug = create_slug($title);

    // Check for required fields BEFORE file upload attempts
    if (empty($title) || empty($category_content) || empty($slug)) {
        http_response_code(400);
        die('Error: Missing required category fields (Title, category_content).');
    }

    // --- 2. Handle Single Image Upload (SLUG-BASED LOGIC) ---
    $image_path = null;
    $upload_dir = $base_upload_dir . $slug . '/'; // Path: uploads/cover/category-slug/

    if (!empty($_FILES['category_cover']['name'])) {
        $file = $_FILES['category_cover'];

        // Calculate the full absolute path for the directory creation
        $absolute_upload_dir = $project_root . $upload_dir;

        error_log("Upload Directory: " . $absolute_upload_dir);

        if (!is_dir($absolute_upload_dir)) {
            // Create directory with full permissions recursively
            if (!mkdir($absolute_upload_dir, 0777, true)) {
                http_response_code(500);
                error_log("Failed to create upload directory: {$absolute_upload_dir}");
                die("Error: Failed to create upload directory. Check server permissions.");
            }
        }

        $file_name = $file['name'];
        $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // New Filename: Uses the category slug for clarity
        $new_file_name = $slug . '.' . $ext;
        $destination = $upload_dir . $new_file_name;

        // Use the absolute path for move_uploaded_file
        $absolute_destination = $project_root . $destination;

        error_log("Moving file to: " . $absolute_destination);

        if (move_uploaded_file($file['tmp_name'], $absolute_destination)) {
            // Store the relative path in the database/file for web access
            $image_path = $destination;
            error_log("File uploaded successfully: " . $image_path);
        } else {
            $last_error = error_get_last();
            $log_message = "File upload failed. move_uploaded_file error: " .
                ($last_error ? $last_error['message'] : 'Unknown error.') .
                " Attempted destination: " . $absolute_destination;
            error_log($log_message);

            http_response_code(500);
            die("Error: Failed to upload and move image {$file_name}. Please check server permissions and error logs.");
        }
    } else {
        http_response_code(400);
        die('Error: Category cover image is required.');
    }

    // --- Auto-Generate Fields ---
    $id = uniqid();

    // Auto-populate redundant metadata based on the title
    $aria_label = $title;
    $variant_title = $title;

    // 3. Load Existing Categories
    $absolute_categories_file = $project_root . $categories_file;

    error_log("Loading categories from: " . $absolute_categories_file);

    $categories = file_exists($absolute_categories_file) ? (require $absolute_categories_file) : [];

    // Ensure $categories is an array
    if (!is_array($categories)) {
        $categories = [];
    }

    // 4. Check for Duplicate Slug
    if (isset($categories[$slug])) {
        http_response_code(409);
        die("Error: Category with slug '{$slug}' already exists. Please choose a different title.");
    }

    // 5. Create New Category Data Structure
    $new_category = [
        'id' => $id,
        'category_title' => $title,
        'category_content' => $category_content,
        'variant_title' => $variant_title,
        'aria_label' => $aria_label,
        'category_ids' => [],
        'cover' => $image_path,
        'slug' => $slug,
    ];

    // 6. Add to the main array, indexed by the SLUG
    $categories[$slug] = $new_category;

    // 7. Save the Updated Categories Array
    $php_data = "<?php\nreturn " . var_export($categories, true) . ";\n";

    // Ensure the data directory exists
    $data_dir = dirname($absolute_categories_file);

    error_log("Ensuring data directory exists: " . $data_dir);

    if (!is_dir($data_dir)) {
        if (!mkdir($data_dir, 0777, true)) {
            http_response_code(500);
            error_log("Failed to create data directory: " . $data_dir);
            die("Error: Failed to create data directory. Check server permissions.");
        }
    }

    error_log("Saving categories to: " . $absolute_categories_file);

    if (file_put_contents($absolute_categories_file, $php_data) !== false) {
        http_response_code(201);
        error_log("Category '{$title}' added successfully with slug: {$slug}");
        echo "Category '{$title}' added successfully with slug: {$slug}.";
    } else {
        http_response_code(500);
        error_log("Failed to write to categories file: {$absolute_categories_file}");
        echo 'Error: Failed to save category data to file. Check file permissions.';
    }

} else {
    http_response_code(405);
    die('Method Not Allowed.');
}
