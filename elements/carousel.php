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

if (empty($all_images)) {

} else {
    $image_urls = array_map(function ($filesystem_path) {

        $normalized_path = str_replace('\\', '/', $filesystem_path);
        $relative_path = str_replace(
            str_replace('\\', '/', PROJECT_ROOT),
            '',
            $normalized_path
        );
        return BASE_URL . ltrim($relative_path, '/');
    }, $all_images);
    $images_json = json_encode($image_urls);
    ?>
    <div class="carousel-wrapper">
        <div class="carousel-container">
            <div class="carousel-track" id="carousel-track"></div>
        </div>
    </div>
    <script src="<?php echo BASE_URL; ?>js/80codes-slider.js" type="text/javascript"></script>

    <script>

    var images_list = <?php echo $images_json; ?>;

    initLocationCarousel(images_list);
    </script>
    <?php
}