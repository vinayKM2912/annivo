<?php
$desktop = [
    "BoxFoxHoliday-564_a4bd19a8-d68c-4b3e-8d2f-447bf1ee74f7.jpg",
    "Screenshot_2025-04-30_at_9.36.29_PM_74c37e46-0710-499e-b219-f62e6b8aacd3.png",
    "Screenshot_2025-06-30_at_11.26.31_AM.png",
];
$mobile = ["BoxFoxHoliday-564_a4bd19a8-d68c-4b3e-8d2f-447bf1ee74f7.jpg", "Screenshot_2025-04-30_at_9.36.29_PM_74c37e46-0710-499e-b219-f62e6b8aacd3.png", "Screenshot_2025-06-30_at_11.26.31_AM.png"];
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