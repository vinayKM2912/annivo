<?php
$desktop = [
    "banner/banner4.webp",
    "banner/banner2.jpg",
    "banner/banner1.jpg",
    "banner/banner2.jpg",
];
$mobile = [
   "banner/banner4.webp",
    "banner/banner2.jpg",
    "banner/banner1.jpg",
    "banner/banner4.webp",
];
?>
<link rel="stylesheet" type="text/css" href="wowslider/style.css" />
<script type="text/javascript" src="wowslider/jquery.js"></script>
<div id="wowslider-container1" class="desktop-wow">
    <div class="ws_images">
        <ul>
            <?php foreach ($desktop as $item) {?>
            <li>
                <img src="images/<?php echo $item; ?>" alt="Screenshot_2025-06-30_at_11.26.31_AM"
                    title="Screenshot_2025-06-30_at_11.26.31_AM" id="wows1_0" />
            </li>
            <?php }?>

        </ul>
    </div>
    <div class="ws_shadow"></div>
</div>
<div id="wowslider-container1" class="mobile-wow">
    <div class="ws_images">
        <ul>

            <?php foreach ($mobile as $item) {?>
            <li>
                <img src="images/<?php echo $item; ?>" alt="Screenshot_2025-06-30_at_11.26.31_AM"
                    title="Screenshot_2025-06-30_at_11.26.31_AM" id="wows1_0" />
            </li>
            <?php }?>

        </ul>
    </div>
    <div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="wowslider/wowslider.js"></script>
<script type="text/javascript" src="wowslider/script.js"></script>