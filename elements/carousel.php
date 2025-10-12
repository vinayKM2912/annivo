<?php
$images_dir = PROJECT_ROOT . '/uploads/products/';

$all_images = [];
if (is_dir($images_dir)) {
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($images_dir, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::LEAVES_ONLY
    );
    foreach ($iterator as $file) {
        if ($file->isFile()) {
            $extension = strtolower($file->getExtension());

            if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                $all_images[] = $file->getPathname();
            }
        }
    }
}

if (!empty($all_images)) {
    ?>
    <div class="carousel-wrapper">
        <div class="carousel-container">
            <div class="carousel-track" id="carousel-track">
                <?php
foreach ($all_images as $filesystem_path) {
        // Convert filesystem path to URL
        $normalized_path = str_replace('\\', '/', $filesystem_path);
        $relative_path = str_replace(
            str_replace('\\', '/', PROJECT_ROOT),
            '',
            $normalized_path
        );
        $image_url = BASE_URL . ltrim($relative_path, '/');
        ?>
                    <div class="location-card">
                        <img src="<?php echo htmlspecialchars($image_url); ?>" alt="Product Image">
                    </div>
                    <?php
}
    ?>
            </div>
        </div>
    </div>
    <script src="<?php echo BASE_URL; ?>js/80codes-slider.js" type="text/javascript"></script>
    <script>
        // Initialize carousel if needed (for navigation/autoplay functionality)
        initLocationCarousel();
    </script>
    <?php
}
?>