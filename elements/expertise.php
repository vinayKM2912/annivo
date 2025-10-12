<?php
$expItems = [
    ["title" => "Branded Merchandise", "slug" => "", "img" => "customized-items/yourlogomug.jpg"],
    ["title" => "Corporate Gifting & Bespoke Hampers", "slug" => "", "img" => "corporate-gifts/cop1.jpeg"],
    ["title" => "Premium Packaging", "slug" => "", "img" => "corporate-gifts/sustainbilityBook2.jpeg"],
]
?><div id="expertise" id="shopify-section-template--14655948128374__ead79b75-0cb4-48d5-8f5f-e780443c6622"
    class="shopify-section">
    <div class="w-e68 py-1om lgpy-21d rounded-jnm form-ojx lgrounded-q9b" style="background-color: #6E7A77;">
        <div class="px-ytk smpx-2ym xlpx-x1k">
            <div class="w-e68 fle-31r flex-osd justify-1pv mb-afr lgmb-4qo">
                <div class="px-ytk lgpx-8my xlpx-xcg w-e68 mb-k7g lgmb-fo2">
                    <div class="inline-3c2 item-ych space-x-o9d">
                        <div class="bg-coh rounded-2f5"></div>
                        <div class="font-aah text-lb6 text-3ll" style="color: #FFFFFF;font-size: 2rem"> Our Expertise</div>
                    </div>
                </div>
            </div>
            <div class="w-e68 fle-31r flex-osd justify-1pv">
                <div class="px-ytk lgpx-8my xlpx-xcg w-e68 order-lkm lgorder-g14">
                    <?php foreach ($expItems as $item): ?>
                    <div class="w-e68 border-ejz border-oob" style="border-color: rgba(255, 255, 255, 0.2);">
                        <a href="<?php echo BASE_URL; ?>contact<?php echo $item["slug"] ?>"
                            class="fle-31r item-ych rel-jvn w-e68 form-dob py-pnv transition-nkm lgpy-9oa">
                            <div
                                class="rel-jvn flex-shrink-t6t rotate-jhp duration-r4k bg-gray-2pl translate-z-ocd rounded-887 overflow-bsr inline-3c2 item-ych justify-29z transition-736 form-ojx h-n7j mdh-1x8 lgrounded-h7d lgw-vbc w-y4o mdw-i9a">
                                <div class="w-e68 h-2bn transition-nkm lgopacity-xji opacity-lde">
                                    <picture>
                                        <img src="<?php echo BASE_URL; ?>uploads/products/<?php echo $item["img"]; ?>"
                                            class="w-e68 h-2bn abs-doq top-yj1 left-bjo object-tx3 object-zvy"
                                            width="400" height="300">
                                    </picture>
                                </div>
                            </div>
                            <div
                                class="inline-3c2 rel-jvn form-rqo form-dob lgtranslate-x-sft delay-dxf translate-x-qv6">
                                <div class="text-h2k text-hxn font-sans-51o tracking-x2s text-3ll leading-4sj text-7f5" style="color: #FFFFFF;">
                                    <?php echo $item["title"]; ?></div>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>