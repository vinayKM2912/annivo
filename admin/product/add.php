<?php include_once "../../config.php"; ?>
<?php
// --- Configuration & Data Loading ---
$categories_file = '../../data/categories.php';
$categories = [];

// 1. Load Categories for the dropdown
$categories = @file_exists($categories_file) ? require $categories_file : [];

// 2. Check for URL parameter (pre-selected category Slug)
$slug = null;
if (isset($_GET["slug"])) {
    $slug = filter_input(INPUT_GET, 'slug', FILTER_SANITIZE_STRING);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Product</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Basic styling for clarity */
        fieldset { border: 1px solid #ccc; padding: 15px; margin-bottom: 20px; }
        legend { font-weight: bold; padding: 0 10px; }
        label { display: block; margin-top: 10px; }
        input[type="text"], input[type="number"], input[type="file"], select { width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; }
        input[type="submit"] { padding: 10px 15px; background-color: #007bff; color: white; border: none; cursor: pointer; margin-top: 10px; }
        #status-message-prod { margin-top: 15px; padding: 10px; border: 1px solid #ccc; display: none; }
        .success { background-color: #d4edda; color: #155724; border-color: #c3e6cb; }
        .error { background-color: #f8d7da; color: #721c24; border-color: #f5c6cb; }
    </style>
</head>
<body>

    <h1>Add New Product</h1>

    <form id="productForm" action="<?php echo BASE_URL; ?>admin/product/process" method="POST" enctype="multipart/form-data">

        <fieldset>
            <legend>Product Details</legend>

            <label for="product_title">Product Title (Required - used to generate slug):</label>
            <input type="text" id="product_title" name="product_title" required>

            <label for="product_price">Product Price ($):</label>
            <input type="number" id="product_price" name="product_price" step="0.01" min="0" required>
        </fieldset>

        <fieldset>
            <legend>Category Selection</legend>
            <?php if ($slug) {
    $category_name = $categories[$slug]['category_title'] ?? 'Selected Category (Not Found)';
    ?>
                <p>Adding product to category: **<?php echo htmlspecialchars($category_name); ?>**</p>
                <input type="hidden" name="category_slug" value="<?php echo htmlspecialchars($slug); ?>">
            <?php
} else {?>
                <label for="category_slug_select">Product Category (Required):</label>
                <select id="category_slug_select" name="category_slug" required>
                    <option value="">-- Select Category --</option>
                    <?php
foreach ($categories as $slug => $category) {
    echo '<option value="' . htmlspecialchars($slug) . '">' . htmlspecialchars($category['category_title']) . '</option>';
}
    ?>
                </select>
            <?php }?>
        </fieldset>

        <fieldset>
            <legend>Product Image</legend>
            <label for="product_image">Image (Select a single file):</label>
            <input type="file" id="product_image" name="product_image" accept="image/*" required>
        </fieldset>

        <input type="submit" value="Submit Product">
    </form>

    <div id="status-message-prod"></div>

    <script>
    $(document).ready(function() {
        $('#productForm').on('submit', function(e) {
            e.preventDefault();

            var form = $(this);
            var url = form.attr('action');
            var statusDiv = $('#status-message-prod');

            $.ajax({
                type: "POST",
                url: url,
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    statusDiv.removeClass('error').addClass('success').html(response).fadeIn();
                    // Clear fields after successful submission
                    $('#product_title, #product_price, #product_image').val('');
                },
                error: function(jqXHR) {
                    var errorMessage = jqXHR.responseText || 'An unknown error occurred.';
                    statusDiv.removeClass('success').addClass('error').html('Error: ' + errorMessage).fadeIn();
                }
            });
        });
    });
    </script>
</body>
</html>