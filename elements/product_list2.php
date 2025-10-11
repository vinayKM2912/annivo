<?php
$products = include './admin/bestProducts.php'; // Adjust path if needed

foreach ($products as $product) {
    $title = htmlspecialchars($product['product_title']);
    $price = htmlspecialchars($product['product_price']);
    $handle = htmlspecialchars($product['product_id']);
    $productId = htmlspecialchars($product['product_id']);
    $variantId = htmlspecialchars($product['variant_id']);
    $ariaLabel = htmlspecialchars($product['aria_label'] ?: $title);
    $images = $product['images'];

    echo <<<HTML
<product-grid-item aria-label="{$ariaLabel}"
    class="product-grid-item product-grid-item-dynamic">

    <!-- /snippets/product-grid-item-variant.liquid -->

    <product-grid-item-variant class="product-grid-item__content is-slideshow"
        data-grid-item="{$productId}" data-slideshow-style="cycle_images"
        data-grid-item-variant="{$variantId}" aria-label="Default Title" tabindex="0">

        <div class="product-grid-item__container" data-error-boundary="">
            <div data-error-display="" class="product-grid-item__error-display">&nbsp;</div>

            <a
            href="/products/{$handle}" data-grid-link="" aria-label="{$ariaLabel}">
                <div class="product-grid-item__images" data-grid-images="" data-grid-slide="" style="aspect-ratio: 1;">
HTML;

    foreach ($images as $i => $img) {
        $original = BASE_URL . 'admin/' . htmlspecialchars($img['original']);
        echo <<<HTML

                    <product-grid-item-image
                        class="product-grid-item__image-wrapper" data-grid-image="{$i}"
                        data-grid-image-target="{$variantId}_{$i}" data-variant-id=""
                        loading="lazy" data-grid-current-image="">

                        <img src="{$original}"
                            alt="{$title}" width="3024" height="3024"
                            loading="lazy"
                            class="tw-block tw-overflow-hidden tw-object-contain tw-w-full tw-h-full product-grid-item__image"
                            sizes="(min-width: 1024px) calc(min(px, 100vw) / 1),
                                   (min-width: 768px) calc(min(px, 100vw) / 1),
                                   calc(min(px, 100vw) / 1.0)"
                            fetchpriority="high"
                       >
                    </product-grid-item-image>
HTML;
    }

    echo <<<HTML
                </div>
            </a>

            <div class="product-grid-item__actions">
                <!-- /snippets/button-instant-add.liquid -->
                <!-- <form method="post" action="/cart/add" id="product_form_{$productId}"
                    accept-charset="UTF-8" class="shopify-product-form"
                    enctype="multipart/form-data">

                    <input type="hidden" name="form_type" value="product">
                    <input type="hidden" name="utf8" value="✓">
                    <input type="hidden" name="id" value="{$variantId}">

                    <product-add-button class="bf-btn" data-id="{$variantId}">
                        <button class="bf-add product-grid-item__btn 1"
                            data-id="{$variantId}">
                            <span class="btn-state-ready">Enquiry Now</span>
                        </button>
                    </product-add-button>

                    <input type="hidden" name="product-id" value="{$productId}">
                    <input type="hidden" name="section-id"
                        value="template--14655948128374__be424ce9-435e-4178-81b6-d74fd52dc84a">
                </form> -->
            </div>
        </div>

        <!-- <div class="moniker product__badge">PERSONALIZE ME</div> -->
    </product-grid-item-variant>

    <div class="product__grid__info text-center">
        <a href="/collections/homepage-thoughtstarters/products/{$handle}" data-grid-link="" aria-label="{$ariaLabel}">
            <p class="visually-hidden">{$title}</p>

            <div class="product__grid__title__wrapper">
                <p id="product-{$productId}-title" class="product__grid__title">{$title}</p>
            </div>

            <!-- <div class="product__grid__price product__grid__price--nowrap">
                <span class="product__grid__cutline"></span>
                <span class="price">AED {$price}</span>
            </div> -->
        </a>
    </div>
</product-grid-item>
HTML;
}
