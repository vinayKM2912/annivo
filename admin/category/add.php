<?php include_once "../../config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Category</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Basic styling for clarity */
        fieldset { border: 1px solid #ccc; padding: 15px; margin-bottom: 20px; }
        legend { font-weight: bold; padding: 0 10px; }
        label { display: block; margin-top: 10px; }
        input[type="text"] { width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; }
        input[type="submit"] { padding: 10px 15px; background-color: #4CAF50; color: white; border: none; cursor: pointer; margin-top: 10px; }
        #status-message { margin-top: 15px; padding: 10px; border: 1px solid #ccc; display: none; }
        .success { background-color: #d4edda; color: #155724; border-color: #c3e6cb; }
        .error { background-color: #f8d7da; color: #721c24; border-color: #f5c6cb; }
    </style>
</head>
<body>

    <h1>Add New Product Category</h1>

    <form id="categoryForm" action="<?php echo BASE_URL; ?>admin/category/process" method="POST" enctype="multipart/form-data">

        <fieldset>
            <legend>Category Details</legend>

            <label for="category_title">Category Title (Required):</label>
            <input type="text" id="category_title" name="category_title" required>
            <label for="category_content">Category Content (Required):</label>
            <textarea id="category_content" name="category_content" required></textarea>
            <!-- <input type="text" id="category_title" name="category_title" required> -->


            </fieldset>
            <fieldset>
            <legend>Product Image</legend>
            <label for="category_cover">Image (Select a single file):</label>
            <input type="file" id="category_cover" name="category_cover" accept="image/*" required>
        </fieldset>

        <input type="submit" value="Submit Category">

    </form>

    <div id="status-message"></div>

    <script>
    $(document).ready(function() {
    $('#categoryForm').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);
        var url = form.attr('action');
        var statusDiv = $('#status-message');

        // 1. CREATE FormData object
        // This is the CRITICAL change: it includes file data
        var formData = new FormData(this);

        statusDiv.fadeOut(); // Hide previous message

        $.ajax({
            type: "POST",
            url: url,
            // 2. Pass the FormData object instead of form.serialize()
            data: formData,

            // 3. IMPORTANT: Required settings for file uploads with jQuery/AJAX
            processData: false, // Tells jQuery not to process the data (leave the file data intact)
            contentType: false, // Tells jQuery not to set a Content-Type header (let the browser set the boundary)

            success: function(response) {
                statusDiv.removeClass('error').addClass('success').html(response).fadeIn();
                // Optionally clear the form, but sometimes better to keep text input for review
                // form[0].reset();
                // Note: File input must be cleared explicitly if you want to reset it:
                $('#category_cover').val('');
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
