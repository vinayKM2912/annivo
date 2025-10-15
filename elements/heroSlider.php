<?php
$desktop = [
    "banner/1.png",
    "banner/2.png",
    "banner/3.png",
    "banner/4.png",
];
$mobile = [
    "banner/6.png",
    "banner/7.png",
    "banner/8.png",
    "banner/9.png",
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