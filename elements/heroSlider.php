<?php
$desktop = [
    "banner/1.webp",
    "banner/d2.webp",
    "banner/2.webp",
    "banner/d3.webp",
];
$mobile = [
    "banner/m5.webp",
    "banner/m2.webp",
    "banner/m4.webp",
    "banner/m3.webp",
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