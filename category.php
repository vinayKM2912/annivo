<?php
include_once "config.php";
$categories = include_once "data/categories.php";
$products = include_once "data/products.php";
$category = null;
if (isset($_GET["slug"])) {
    $category = $categories[$_GET["slug"]];
    $keyFilter = array_flip($category["product_ids"]);

    $category_products = array_intersect_key($products, $keyFilter);
}
?>
<!DOCTYPE html>
<html class="js aos-initialized" lang="en"
    style="--full-screen: 738px; --three-quarters: 553.5px; --two-thirds: 487.08000000000004px; --one-half: 369px; --one-third: 243.54000000000002px; --one-fifth: 147.6px; --menu-height: 105px; --scrollbar-width: 15px; --footer-logo: 80px; --announcement-height: 0px; --toolbar-height: 20px; --header-height: 105px; --footer-height: 396px; --content-full: 593px; --menu-height-sticky: 105px; --menu-backfill-height: 105px;">
    <head>
    <meta http-equiv="origin-trial"
        content="A7vZI3v+Gz7JfuRolKNM4Aff6zaGuT7X0mf3wtoZTnKv6497cVMnhy03KDqX7kBz/q/iidW7srW31oQbBt4VhgoAAACUeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGUuY29tOjQ0MyIsImZlYXR1cmUiOiJEaXNhYmxlVGhpcmRQYXJ0eVN0b3JhZ2VQYXJ0aXRpb25pbmczIiwiZXhwaXJ5IjoxNzU3OTgwODAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
    <!-- Start of Booster Apps Seo-0.1-->
    <title>Custom &amp; Curated Gift Boxes | BOXFOX</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="description"
        content="Shop BOXFOX's expertly curated gift boxes, build a fully custom gift set, or put together a corporate gift box. Free shipping over $125.">
    <script type="text/javascript" async="" src="https://omnisnippet1.com/inshop/launcher-v2.js?v=2025-09-28T08">
    </script>
    <script type="text/javascript" async=""
        src="https://omnisnippet1.com/platforms/shopify.js?source=scriptTag&amp;v=2025-05-15T12&amp;shop=boxfox.myshopify.com">
    </script>
    <script type="text/javascript" async="" src="https://tag.rmp.rakuten.com/126912.ct.js?shop=boxfox.myshopify.com">
    </script>
    <script type="text/javascript" async=""
        src="https://ecom-app.rakutenadvertising.io/rakuten_advertising.js?shop=boxfox.myshopify.com"></script>
    <script type="text/javascript" async=""
        src="https://d18eg7dreypte5.cloudfront.net/browse-abandonment/smsbump_timer.js?shop=boxfox.myshopify.com">
    </script>
    <script type="text/javascript" async=""
        src="//cdn.shopify.com/proxy/7b77e7c073cad42d003746bad94601101a03e02aa1839a1a4f4137b88615e267/app.retention.com/shopify/shopify_app_add_to_cart_script.js?shop=boxfox.myshopify.com&amp;sp-cache-control=cHVibGljLCBtYXgtYWdlPTkwMA">
    </script>
    <script type="text/javascript" async=""
        src="//cdn.shopify.com/proxy/5250fbbf317c4ce8fe41fee646be4a4dfdfeb966cee73553459f76bc66d680cf/s3-us-west-2.amazonaws.com/jsstore/a/V3VHOY8/ge.js?shop=boxfox.myshopify.com&amp;sp-cache-control=cHVibGljLCBtYXgtYWdlPTkwMA">
    </script>
    <script type="text/javascript" async="" src="https://strn.rise-ai.com/?shop=boxfox.myshopify.com"></script>
    <script type="text/javascript" async="" src="https://str.rise-ai.com/?shop=boxfox.myshopify.com"></script>
    <script type="text/javascript" async=""
        src="https://cdn-loyalty.yotpo.com/loader/dVowcn9YO0WgpMuqSCXRkQ.js?shop=boxfox.myshopify.com"></script>
    <script async="" src="https://scripts.clarity.ms/0.8.30/clarity.js"></script>
    <script async="true" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script type="text/javascript" async=""
        src="https://www.googletagmanager.com/gtag/js?id=G-14XZQ2NV23&amp;cx=c&amp;gtm=4e59n2"></script>
    <script type="text/javascript" async=""
        src="<?php echo BASE_URL; ?>cdn/s/trekkie.storefront.ae499d7c18801354d4ba37cec962a2ab045df942.min.js"></script>
    <script type="text/javascript" async="" charset="utf-8"
        src="https://www.gstatic.com/recaptcha/releases/XrIDux0s7SoNe6_IHkjGC92W/recaptcha__en.js"
        crossorigin="anonymous" integrity="sha384-QqfebjEuIgnKX+GxU4cN+byIJWmt6PLd1Lhx1lDrZnC9qHnUqKxROgib38rfVJzS">
    </script>
    <script async="" src="//djnf6e5yyirys.cloudfront.net/js/friendbuy.min.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-5T2CXRW"></script>
    <script async="" src="https://www.clarity.ms/tag/aj1jtgxmow"></script>
    <script
        src="https://connect.facebook.net/signals/config/368842887375545?v=2.9.232&amp;r=stable&amp;domain=boxfox.com&amp;hme=dcbbef44c997927c5af260dbc0059090127dce285cd316734e66d01ffe06084e&amp;ex_m=88%2C150%2C130%2C19%2C123%2C62%2C42%2C124%2C69%2C61%2C137%2C77%2C13%2C87%2C27%2C118%2C109%2C67%2C70%2C117%2C134%2C96%2C139%2C7%2C3%2C4%2C6%2C5%2C2%2C78%2C86%2C140%2C214%2C162%2C56%2C219%2C216%2C217%2C49%2C177%2C26%2C66%2C223%2C222%2C165%2C29%2C55%2C8%2C58%2C82%2C83%2C84%2C89%2C113%2C28%2C25%2C116%2C112%2C111%2C131%2C68%2C133%2C132%2C44%2C114%2C54%2C106%2C12%2C136%2C39%2C205%2C207%2C172%2C22%2C23%2C24%2C16%2C17%2C38%2C34%2C36%2C35%2C73%2C79%2C81%2C94%2C122%2C125%2C40%2C95%2C20%2C18%2C100%2C63%2C32%2C127%2C126%2C128%2C119%2C21%2C31%2C53%2C93%2C135%2C64%2C15%2C30%2C187%2C158%2C265%2C203%2C148%2C190%2C183%2C91%2C115%2C72%2C104%2C48%2C41%2C102%2C103%2C108%2C52%2C14%2C110%2C101%2C59%2C43%2C97%2C47%2C50%2C46%2C85%2C138%2C0%2C107%2C11%2C105%2C9%2C1%2C51%2C80%2C57%2C129%2C60%2C99%2C76%2C75%2C45%2C120%2C74%2C71%2C65%2C98%2C90%2C37%2C121%2C33%2C92%2C10%2C141"
        async=""></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "BOXFOX",
        "url": "https://aanvio.com",
        "description": "Shop BOXFOX's expertly curated gift boxes, build a fully custom gift set, or put together a corporate gift box. Free shipping over $125.",
        "image": "https://aanvio.com/cdn/shop/t/153/assets/logo.png?75168",
        "logo": "https://aanvio.com/cdn/shop/t/153/assets/logo.png?75168",
        "sameAs": ["https://facebook.com/shopboxfox", "https://facebook.com/shopboxfox",
            "https://pinterest.com/shopboxfox"
        ],
        "telephone": "5622370130",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "3355 W EL SEGUNDO BLVD, STE B",
            "addressLocality": "HAWTHORNE",
            "addressRegion": "California",
            "postalCode": "90250",
            "addressCountry": "United States"
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "BOXFOX",
        "url": "https://aanvio.com",
        "potentialAction": {
            "@type": "SearchAction",
            "query-input": "required name=query",
            "target": "https://aanvio.com/search?q={query}"
        }
    }
    </script>
    <!-- end of Booster Apps SEO -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="theme-color" content="#568eae">
    <link rel="canonical" href="https://aanvio.com/">
    <script type="text/javascript">
    window.showEmbroidery = false;
    window.embroideryProducts = [];
    window.discountedProducts = [];
    window.neverDiscountedProducts = [];
    window.embroideryProducts.push(8144033414);
    window.embroideryProducts.push(8143886022);
    window.embroideryProducts.push(749953745014);
    window.embroideryProducts.push(6881679310966);
    window.embroideryProducts.push(2615432249462);
    window.embroideryProducts.push(6876731801718);
    window.embroideryProducts.push(6876732129398);
    window.embroideryProducts.push(4353672478838);
    window.embroideryProducts.push(6881686782070);
    window.embroideryProducts.push(2615429890166);
    window.embroideryProducts.push(7508491403382);
    window.embroideryProducts.push(7351128817782);
    window.embroideryProducts.push(7198691754102);
    window.embroideryProducts.push(7558686572662);
    window.embroideryProducts.push(7753043771510);
    window.embroideryProducts.push(7558591348854);
    window.embroideryProducts.push(7558678413430);
    window.embroideryProducts.push(7753179660406);
    window.embroideryProducts.push(7790209400950);
    window.embroideryProducts.push(7796392951926);
    window.embroideryProducts.push(7782246318198);
    window.embroideryProducts.push(7796392984694);
    window.embroideryProducts.push(7756420120694);
    window.embroideryProducts.push(7796392689782);
    window.embroideryProducts.push(7804551954550);
    window.embroideryProducts.push(7810387116150);
    window.discountedProducts.push({
        id: 7741641523318,
        compareAtPrice: '$' + (950 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7692808323190,
        compareAtPrice: '$' + (950 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7741623140470,
        compareAtPrice: '$' + (950 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7692805963894,
        compareAtPrice: '$' + (950 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7732422213750,
        compareAtPrice: '$' + (3900 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7741614293110,
        compareAtPrice: '$' + (950 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7692803932278,
        compareAtPrice: '$' + (950 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 6540133630070,
        compareAtPrice: '$' + (950 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7692844466294,
        compareAtPrice: '$' + (950 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7741609541750,
        compareAtPrice: '$' + (950 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7692988678262,
        compareAtPrice: '$' + (950 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7741632839798,
        compareAtPrice: '$' + (950 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7759504310390,
        compareAtPrice: '$' + (1000 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 9976340556,
        compareAtPrice: '$' + (950 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 6856326217846,
        compareAtPrice: '$' + (1000 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 6653626482806,
        compareAtPrice: '$' + (600 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7692852920438,
        compareAtPrice: '$' + (3200 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7692999262326,
        compareAtPrice: '$' + (950 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7692856721526,
        compareAtPrice: '$' + (1100 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7692989923446,
        compareAtPrice: '$' + (950 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7692858490998,
        compareAtPrice: '$' + (1100 / 100).toFixed(2)
    });
    window.discountedProducts.push({
        id: 7692987269238,
        compareAtPrice: '$' + (950 / 100).toFixed(2)
    });
    window.checkReEncap = function() {
        console.log('CHECK_REENCAPHERE');
        const eventualReEncap = localStorage.getItem('check_reencap_2');

        if (eventualReEncap) {
            let lineItemKeys = JSON.parse(eventualReEncap);

            console.log('eventualReEncap', lineItemKeys, eventualReEncap);

            if (lineItemKeys.length > 0) {
                const firstKey = `build_box2_${lineItemKeys[0]}`;
                const firstPayload = localStorage.getItem(firstKey);

                console.log('firstKey', firstKey, firstPayload);

                if (firstPayload) {
                    window.submitBoxToCart(null, JSON.parse(firstPayload));

                    window.addEventListener('boxAddedToCart', (e) => {
                        console.log('I GOT IT');
                        window.checkReEncap();
                    });
                }

                localStorage.setItem('check_reencap_2', JSON.stringify(lineItemKeys.filter((k) => k !==
                    lineItemKeys[0])));
            } else {
                localStorage.removeItem('check_reencap');
                localStorage.removeItem('check_reencap_2');
                window.location.reload();
            }
        }
    }

    if (localStorage.getItem('check_reencap_2')) {
        window.addEventListener('load', function() {
            fetch('/cart/clear.js', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                }
            }).then(res => res.json()).then(data => {
                window.checkReEncap();
            }).catch(err => console.error('Error clearing cart:', err));
        });
    }
    </script>

    <style type="text/css">
    #dummy-chat-button-iframe {
        bottom: 64px !important;
    }
    </style>

    <!-- ============================ Tracking Start  ============================== -->
    <!-- Meta Pixel Code -->
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '368842887375545');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=368842887375545&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->



    <!-- Microsoft Clarity -->
    <script type="text/javascript">
    (function(c, l, a, r, i, t, y) {
        c[a] = c[a] || function() {
            (c[a].q = c[a].q || []).push(arguments)
        };
        t = l.createElement(r);
        t.async = 1;
        t.src = "https://www.clarity.ms/tag/" + i;
        y = l.getElementsByTagName(r)[0];
        y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "aj1jtgxmow");
    </script>
    <!-- end Microsoft Clarity -->

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5T2CXRW');
    </script>
    <!-- End Google Tag Manager -->
    <script>
    window['friendbuy'] = window['friendbuy'] || [];
    window['friendbuy'].push(['site', 'site-827b1eb4-www.shopboxfox.com']);
    window['friendbuy'].push(['track', 'customer',
        {
            id: '',
            email: '',
            first_name: '',
            last_name: ''
        }
    ]);
    (function(f, r, n, d, b, y) {
        b = f.createElement(r), y = f.getElementsByTagName(r)[0];
        b.async = 1;
        b.src = n;
        y.parentNode.insertBefore(b, y);
    })(document, 'script', '//djnf6e5yyirys.cloudfront.net/js/friendbuy.min.js');
    </script>
    <!-- ============================ Tracking END  ============================== -->


    <!-- ======================= Pipeline Theme V7.0.2 ========================= -->

    <!-- Preloading ================================================================== -->

    <link rel="preconnect" href="https://cdn.shopify.com" crossorigin="">
    <link rel="dns-prefetch" href="https://cdn.shopify.com">
    <link rel="preconnect" href="https://fonts.shopify.com" crossorigin="">
    <link rel="dns-prefetch" href="https://fonts.shopifycdn.com">
    <link rel="preconnect" href="https://monorail-edge.shopifysvc.com" crossorigin="">
    <link href="./cdn/shop/t/143/assets/custom.min.css?v=157410497244315396081687474333" rel="stylesheet"
        type="text/css" media="all">
    <link href="https://cdn.shopify.com/s/files/1/0558/2845/files/style.css?v=1689360025" rel="stylesheet"
        type="text/css" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="<?php echo BASE_URL; ?>cdn/shop/t/153/assets/custom.min.css?v=84317606038158820251719225295" rel="stylesheet" type="text/css"
        media="all">
    <link href="<?php echo BASE_URL; ?>cdn/shop/t/153/assets/style.css?v=17456553023576434171720490045" rel="stylesheet" type="text/css"
        media="all">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">


    <link rel="preload"
        href="<?php echo BASE_URL; ?>cdn/fonts/figtree/figtree_n4.3c0838aba1701047e60be6a99a1b0a40ce9b8419.woff2?h1=c2hvcGJveGZveC5jb20&amp;h2=Ym94Zm94LmNvbQ&amp;h3=Ym94Zm94LmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;hmac=ec94f8754ca24d5864129f1314bf025a36972aedfaae2a4197e5c0c46347d7dc"
        as="font" type="font/woff2" crossorigin="">
    <link rel="preload"
        href="<?php echo BASE_URL; ?>cdn/fonts/ovo/ovo_n4.cbcdfe6a371e62394cce345894111238d5c755fe.woff2?h1=c2hvcGJveGZveC5jb20&amp;h2=Ym94Zm94LmNvbQ&amp;h3=Ym94Zm94LmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;hmac=f4987fa021c064d04b0fed8797b109a94e565ed388fc4e4ec9fc543bf8303c0c"
        as="font" type="font/woff2" crossorigin="">
    <link rel="preload"
        href="<?php echo BASE_URL; ?>cdn/fonts/figtree/figtree_n5.3b6b7df38aa5986536945796e1f947445832047c.woff2?h1=c2hvcGJveGZveC5jb20&amp;h2=Ym94Zm94LmNvbQ&amp;h3=Ym94Zm94LmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;hmac=7af76c9ad9098c40a9983ed0fd789e0b757e35d7e7fe3fb42342045200569853"
        as="font" type="font/woff2" crossorigin="">


    <link href="<?php echo BASE_URL; ?>cdn/shop/t/153/assets/vendor.js?v=131139509784942254651698607520" as="script" rel="preload">
    <link href="<?php echo BASE_URL; ?>cdn/shop/t/153/assets/theme.js?v=103721613404558466171723558553" as="script" rel="preload">
    <link href="<?php echo BASE_URL; ?>cdn/shop/t/153/assets/theme.css?v=125382239175603153071757012009" as="script" rel="preload">
    <link href="<?php echo BASE_URL; ?>cdn/shop/t/153/assets/boxfox.js?v=71093816292999086851698607520" as="script" rel="preload">
    <link href="<?php echo BASE_URL; ?>cdn/shop/t/153/assets/app.min.js?v=98382192138131028181698607520" as="script" rel="preload">

    <!-- Title and description ================================================ -->
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>images/FAVICONFINAL_32x32.png?v=1613509506" type="image/png">

    <!-- /snippets/social-meta-tags.liquid -->
    <meta property="og:site_name" content="BOXFOX">
    <meta property="og:url" content="https://aanvio.com/">
    <meta property="og:title" content="Custom &amp; Curated Gift Boxes | BOXFOX">
    <meta property="og:type" content="website">
    <meta property="og:description"
        content="Shop BOXFOX's expertly curated gift boxes, build a fully custom gift set, or put together a corporate gift box. Free shipping over $125.">
    <meta property="og:image"
        content="http:<?php echo BASE_URL; ?>images/Screen_Shot_2022-07-11_at_4.51.37_PM.png?v=1658172387">
    <meta property="og:image:secure_url"
        content="https:<?php echo BASE_URL; ?>images/Screen_Shot_2022-07-11_at_4.51.37_PM.png?v=1658172387">
    <meta property="og:image:width" content="412">
    <meta property="og:image:height" content="386">


    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Custom &amp; Curated Gift Boxes | BOXFOX">
    <meta name="twitter:description"
        content="Shop BOXFOX's expertly curated gift boxes, build a fully custom gift set, or put together a corporate gift box. Free shipping over $125.">
    <!-- CSS ================================================================== -->

    <link href="<?php echo BASE_URL; ?>cdn/shop/t/153/assets/font-settings.css?v=123918970589651187951698607520" rel="stylesheet"
        type="text/css" media="all">
    <style>
    @font-face {
        font-family: "BrandonText";
        src: url("<?php echo BASE_URL; ?>cdn/shop/t/153/assets/BrandonText.otf?75168") format(".otf");
    }

    @font-face {
        font-family: "BrandonText";
        src: url("<?php echo BASE_URL; ?>images/BrandonText.otf?v=11168972761688216017") format(".otf");
    }
    </style>

    <!-- /snippets/css-variables.liquid -->


    <style data-shopify="">
    :root {
        /* ================ Layout Variables ================ */






        --LAYOUT-WIDTH: 1450px;
        --LAYOUT-GUTTER: 20px;
        --LAYOUT-GUTTER-OFFSET: -20px;
        --NAV-GUTTER: 15px;
        --LAYOUT-OUTER: 36px;

        /* ================ Product video ================ */

        --COLOR-VIDEO-BG: #f2f2f2;


        /* ================ Color Variables ================ */

        /* === Backgrounds ===*/
        --COLOR-BG: #ffffff;
        --COLOR-BG-ACCENT: #fdf0e2;

        /* === Text colors ===*/
        --COLOR-TEXT-DARK: #111c19;
        --COLOR-TEXT: #334641;
        --COLOR-TEXT-LIGHT: #707e7a;

        /* === Bright color ===*/
        --COLOR-PRIMARY: #d2815f;
        --COLOR-PRIMARY-HOVER: #c35121;
        --COLOR-PRIMARY-FADE: rgba(210, 129, 95, 0.05);
        --COLOR-PRIMARY-FADE-HOVER: rgba(210, 129, 95, 0.1);
        --COLOR-PRIMARY-OPPOSITE: #ffffff;

        /* === Secondary/link Color ===*/
        --COLOR-SECONDARY: #568eae;
        --COLOR-SECONDARY-HOVER: #2e688a;
        --COLOR-SECONDARY-FADE: rgba(86, 142, 174, 0.05);
        --COLOR-SECONDARY-FADE-HOVER: rgba(86, 142, 174, 0.1);
        --COLOR-SECONDARY-OPPOSITE: #ffffff;

        /* === Shades of grey ===*/
        --COLOR-A5: rgba(51, 70, 65, 0.05);
        --COLOR-A10: rgba(51, 70, 65, 0.1);
        --COLOR-A20: rgba(51, 70, 65, 0.2);
        --COLOR-A35: rgba(51, 70, 65, 0.35);
        --COLOR-A50: rgba(51, 70, 65, 0.5);
        --COLOR-A80: rgba(51, 70, 65, 0.8);
        --COLOR-A90: rgba(51, 70, 65, 0.9);
        --COLOR-A95: rgba(51, 70, 65, 0.95);


        /* ================ Inverted Color Variables ================ */

        --INVERSE-BG: #000000;
        --INVERSE-BG-ACCENT: #1d1d1d;

        /* === Text colors ===*/
        --INVERSE-TEXT-DARK: #ffffff;
        --INVERSE-TEXT: #ffffff;
        --INVERSE-TEXT-LIGHT: #b3b3b3;

        /* === Bright color ===*/
        --INVERSE-PRIMARY: #ffe5da;
        --INVERSE-PRIMARY-HOVER: #ffaf8e;
        --INVERSE-PRIMARY-FADE: rgba(255, 229, 218, 0.05);
        --INVERSE-PRIMARY-FADE-HOVER: rgba(255, 229, 218, 0.1);
        --INVERSE-PRIMARY-OPPOSITE: #000000;


        /* === Second Color ===*/
        --INVERSE-SECONDARY: #dff3fd;
        --INVERSE-SECONDARY-HOVER: #91dbff;
        --INVERSE-SECONDARY-FADE: rgba(223, 243, 253, 0.05);
        --INVERSE-SECONDARY-FADE-HOVER: rgba(223, 243, 253, 0.1);
        --INVERSE-SECONDARY-OPPOSITE: #000000;


        /* === Shades of grey ===*/
        --INVERSE-A5: rgba(255, 255, 255, 0.05);
        --INVERSE-A10: rgba(255, 255, 255, 0.1);
        --INVERSE-A20: rgba(255, 255, 255, 0.2);
        --INVERSE-A35: rgba(255, 255, 255, 0.3);
        --INVERSE-A80: rgba(255, 255, 255, 0.8);
        --INVERSE-A90: rgba(255, 255, 255, 0.9);
        --INVERSE-A95: rgba(255, 255, 255, 0.95);


        /* ================ Bright Color Variables ================ */

        --BRIGHT-BG: #e7caac;
        --BRIGHT-BG-ACCENT: #ff4b00;

        /* === Text colors ===*/
        --BRIGHT-TEXT-DARK: #a1a1a1;
        --BRIGHT-TEXT: #616161;
        --BRIGHT-TEXT-LIGHT: #898178;

        /* === Bright color ===*/
        --BRIGHT-PRIMARY: #ff4b00;
        --BRIGHT-PRIMARY-HOVER: #b33500;
        --BRIGHT-PRIMARY-FADE: rgba(255, 75, 0, 0.05);
        --BRIGHT-PRIMARY-FADE-HOVER: rgba(255, 75, 0, 0.1);
        --BRIGHT-PRIMARY-OPPOSITE: #000000;


        /* === Second Color ===*/
        --BRIGHT-SECONDARY: #3f9f85;
        --BRIGHT-SECONDARY-HOVER: #1e735c;
        --BRIGHT-SECONDARY-FADE: rgba(63, 159, 133, 0.05);
        --BRIGHT-SECONDARY-FADE-HOVER: rgba(63, 159, 133, 0.1);
        --BRIGHT-SECONDARY-OPPOSITE: #000000;


        /* === Shades of grey ===*/
        --BRIGHT-A5: rgba(97, 97, 97, 0.05);
        --BRIGHT-A10: rgba(97, 97, 97, 0.1);
        --BRIGHT-A20: rgba(97, 97, 97, 0.2);
        --BRIGHT-A35: rgba(97, 97, 97, 0.3);
        --BRIGHT-A80: rgba(97, 97, 97, 0.8);
        --BRIGHT-A90: rgba(97, 97, 97, 0.9);
        --BRIGHT-A95: rgba(97, 97, 97, 0.95);


        /* === Account Bar ===*/
        --COLOR-ANNOUNCEMENT-BG: #5894b3;
        --COLOR-ANNOUNCEMENT-TEXT: #ffffff;

        /* === Nav and dropdown link background ===*/
        --COLOR-NAV: #ffffff;
        --COLOR-NAV-TEXT: #000000;
        --COLOR-NAV-TEXT-DARK: #000000;
        --COLOR-NAV-TEXT-LIGHT: #4d4d4d;
        --COLOR-NAV-BORDER: #fdf0e2;
        --COLOR-NAV-A10: rgba(0, 0, 0, 0.1);
        --COLOR-NAV-A50: rgba(0, 0, 0, 0.5);
        --COLOR-HIGHLIGHT-LINK: #ff1d1d;

        /* === Site Footer ===*/
        --COLOR-FOOTER-BG: #6E7A77;
        --COLOR-FOOTER-TEXT: #ffffff;
        --COLOR-FOOTER-A5: rgba(255, 255, 255, 0.05);
        --COLOR-FOOTER-A15: rgba(255, 255, 255, 0.15);
        --COLOR-FOOTER-A90: rgba(255, 255, 255, 0.9);

        /* === Sub-Footer ===*/
        --COLOR-SUB-FOOTER-BG: #6E7A77;
        --COLOR-SUB-FOOTER-TEXT: #ffffff;
        --COLOR-SUB-FOOTER-A5: rgba(255, 255, 255, 0.05);
        --COLOR-SUB-FOOTER-A15: rgba(255, 255, 255, 0.15);
        --COLOR-SUB-FOOTER-A90: rgba(255, 255, 255, 0.9);

        /* === Products ===*/
        --PRODUCT-GRID-ASPECT-RATIO: 100%;

        /* === Product badges ===*/
        --COLOR-BADGE: #ffffff;
        --COLOR-BADGE-TEXT: #656565;
        --COLOR-BADGE-TEXT-DARK: #453939;
        --COLOR-BADGE-TEXT-HOVER: #8b8b8b;
        --COLOR-BADGE-HAIRLINE: #f7f7f7;

        /* === Product item slider ===*/
        --COLOR-PRODUCT-SLIDER: #ffffff;
        --COLOR-PRODUCT-SLIDER-OPPOSITE: rgba(13, 13, 13, 0.06);
        /* === disabled form colors ===*/
        --COLOR-DISABLED-BG: #ebedec;
        --COLOR-DISABLED-TEXT: #b8bebd;

        --INVERSE-DISABLED-BG: #1a1a1a;
        --INVERSE-DISABLED-TEXT: #595959;

        /* === Button Radius === */
        --BUTTON-RADIUS: 0px;


        /* ================ Typography ================ */

        --FONT-STACK-BODY: 'Brandon Text', Arial, Helvetica, sans-serif;
        --FONT-STYLE-BODY: normal;
        --FONT-WEIGHT-BODY: 400;
        --FONT-WEIGHT-BODY-BOLD: 500;
        --FONT-ADJUST-BODY: 1.0;

        --FONT-BODY-TRANSFORM: none;
        --FONT-BODY-LETTER-SPACING: normal;


        --FONT-STACK-HEADING: 'TT Ramillas', 'Times New Roman', Times, serif;
        --FONT-STYLE-HEADING: normal;
        --FONT-WEIGHT-HEADING: 400;
        --FONT-WEIGHT-HEADING-BOLD: 700;
        --FONT-ADJUST-HEADING: 1.0;

        --FONT-HEADING-TRANSFORM: none;
        --FONT-HEADING-LETTER-SPACING: normal;


        --FONT-STACK-ACCENT: 'Brandon Text', Arial, Helvetica, sans-serif;
        --FONT-STYLE-ACCENT: normal;
        --FONT-WEIGHT-ACCENT: 500;
        --FONT-WEIGHT-ACCENT-BOLD: 600;
        --FONT-ADJUST-ACCENT: 1.0;

        --FONT-ACCENT-TRANSFORM: uppercase;
        --FONT-ACCENT-LETTER-SPACING: 0.09em;

        --TYPE-STACK-NAV: 'Brandon Text', Arial, Helvetica, sans-serif;
        --TYPE-STYLE-NAV: normal;
        --TYPE-ADJUST-NAV: 1.0;
        --TYPE-WEIGHT-NAV: 500;

        --FONT-NAV-TRANSFORM: uppercase;
        --FONT-NAV-LETTER-SPACING: 0.09em;

        --TYPE-STACK-BUTTON: 'Brandon Text', Arial, Helvetica, sans-serif;
        --TYPE-STYLE-BUTTON: normal;
        --TYPE-ADJUST-BUTTON: 1.0;
        --TYPE-WEIGHT-BUTTON: 600;

        --FONT-BUTTON-TRANSFORM: uppercase;
        --FONT-BUTTON-LETTER-SPACING: 0.09em;

        --TYPE-STACK-KICKER: 'Brandon Text', Arial, Helvetica, sans-serif;
        --TYPE-STYLE-KICKER: normal;
        --TYPE-ADJUST-KICKER: 1.0;
        --TYPE-WEIGHT-KICKER: 600;

        --FONT-KICKER-TRANSFORM: uppercase;
        --FONT-KICKER-LETTER-SPACING: 0.09em;


        --ICO-SELECT: url('//boxfox.com/cdn/shop/t/153/assets/ico-select.svg?v=97468889256403365861698607520');

        /* ================ Photo correction ================ */
        --PHOTO-CORRECTION: 100%;



    }

    :root {
        --font-1: 10.00px;
        --font-2: 11.33px;
        --font-3: 12.00px;
        --font-4: 13.14px;
        --font-5: 15.51px;
        --font-6: 17.49px;
        --font-7: 20.29px;
        --font-8: 23.54px;
        --font-9: 27.30px;
        --font-10: 31.67px;
        --font-11: 36.74px;
        --font-12: 42.62px;
        --font-13: 49.44px;
        --font-14: 57.35px;
        --font-15: 66.52px;
    }

    @media only screen and (min-width: 480px) and (max-width: 1099px) {
        :root {
            --font-1: 10.00px;
            --font-2: 11.50px;
            --font-3: 12.33px;
            --font-4: 13.70px;
            --font-5: 16.00px;
            --font-6: 17.95px;
            --font-7: 21.09px;
            --font-8: 24.78px;
            --font-9: 29.12px;
            --font-10: 34.21px;
            --font-11: 40.20px;
            --font-12: 47.23px;
            --font-13: 55.50px;
            --font-14: 65.21px;
            --font-15: 76.62px;
        }
    }

    @media only screen and (min-width: 1100px) {
        :root {
            --font-1: 10.00px;
            --font-2: 11.50px;
            --font-3: 12.75px;
            --font-4: 14.53px;
            --font-5: 17.69px;
            --font-6: 21.58px;
            --font-7: 26.33px;
            --font-8: 32.12px;
            --font-9: 39.19px;
            --font-10: 47.81px;
            --font-11: 58.33px;
            --font-12: 71.16px;
            --font-13: 86.82px;
            --font-14: 105.92px;
            --font-15: 129.22px;
        }
    }
    </style>


    <link href="<?php echo BASE_URL; ?>cdn/shop/t/153/assets/theme.css?v=125382239175603153071757012009" rel="stylesheet" type="text/css"
        media="all">

    <script>
    document.documentElement.className = document.documentElement.className.replace('no-js', 'js');


    document.documentElement.classList.add('aos-initialized');
    let root = '/';
    if (root[root.length - 1] !== '/') {
        root = `${root}/`;
    }
    var theme = {
        routes: {
            root_url: root,
            cart: '/cart',
            cart_add_url: '/cart/add',
            product_recommendations_url: '/recommendations/products',
            account_addresses_url: '/account/addresses',
            predictive_search_url: '/search/suggest'
        },
        state: {
            cartOpen: null,
        },
        sizes: {
            small: 480,
            medium: 768,
            large: 1100,
            widescreen: 1400
        },
        assets: {
            photoswipe: '//boxfox.com/cdn/shop/t/153/assets/photoswipe.js?v=162613001030112971491698607520',
            smoothscroll: '//boxfox.com/cdn/shop/t/153/assets/smoothscroll.js?v=37906625415260927261698607520',
            swatches: '//boxfox.com/cdn/shop/t/153/assets/swatches.json?v=153957835706168506561698607520',
            noImage: '//boxfox.com/cdn/shopifycloud/storefront/assets/no-image-2048-a2addb12.gif',
            base: '//boxfox.com/cdn/shop/t/153/assets/'
        },
        strings: {
            swatchesKey: "Color, Colour, AANVIO Color",
            addToCart: "Enquiry Now",
            estimateShipping: "Estimate shipping",
            noShippingAvailable: "We do not ship to this destination.",
            free: "Free",
            from: "From",
            preOrder: "Pre-order",
            soldOut: "Back Soon",
            sale: "Sale",
            subscription: "Subscription",
            unavailable: "Unavailable",
            unitPrice: "Unit price",
            unitPriceSeparator: "per",
            stockout: "All available stock is in cart",
            products: "Products",
            pages: "Pages",
            collections: "Collections",
            resultsFor: "Results for",
            noResultsFor: "No results for",
            articles: "Articles",
            successMessage: "Link copied to clipboard",
        },
        settings: {
            badge_sale_type: "dollar",
            animate_hover: true,
            animate_scroll: true,
            show_locale_desktop: null,
            show_locale_mobile: null,
            show_currency_desktop: null,
            show_currency_mobile: null,
            currency_select_type: "country",
            currency_code_enable: false,
            cycle_images_hover_delay: 1.5
        },
        info: {
            name: 'pipeline'
        },
        version: '7.0.2',
        moneyFormat: "${{amount}}",
        shopCurrency: "USD",
        currencyCode: "USD"
    }
    let windowInnerHeight = window.innerHeight;
    document.documentElement.style.setProperty('--full-screen', `${windowInnerHeight}px`);
    document.documentElement.style.setProperty('--three-quarters', `${windowInnerHeight * 0.75}px`);
    document.documentElement.style.setProperty('--two-thirds', `${windowInnerHeight * 0.66}px`);
    document.documentElement.style.setProperty('--one-half', `${windowInnerHeight * 0.5}px`);
    document.documentElement.style.setProperty('--one-third', `${windowInnerHeight * 0.33}px`);
    document.documentElement.style.setProperty('--one-fifth', `${windowInnerHeight * 0.2}px`);

    window.isRTL = document.documentElement.getAttribute('dir') === 'rtl';
    </script><!-- Theme Javascript ============================================================== -->


    <script src="<?php echo BASE_URL; ?>cdn/shop/t/153/assets/vendor.js?v=131139509784942254651698607520" defer="defer"></script>
    <script src="<?php echo BASE_URL; ?>cdn/shop/t/153/assets/theme.js?v=103721613404558466171723558553" defer="defer"></script>


    <script>
    (function() {
        function onPageShowEvents() {
            if ('requestIdleCallback' in window) {
                requestIdleCallback(initCartEvent, {
                    timeout: 500
                })
            } else {
                initCartEvent()
            }

            function initCartEvent() {
                window.fetch(window.theme.routes.cart + '.js')
                    .then((response) => {
                        if (!response.ok) {
                            throw {
                                status: response.statusText
                            };
                        }
                        return response.json();
                    })
                    .then((response) => {
                        document.dispatchEvent(new CustomEvent('theme:cart:change', {
                            detail: {
                                cart: response,
                            },
                            bubbles: true,
                        }));
                        return response;
                    })
                    .catch((e) => {
                        console.error(e);
                    });
            }
        };
        window.onpageshow = onPageShowEvents;
    })();
    </script>

    <script type="text/javascript">
    if (window.MSInputMethodContext && document.documentMode) {
        var scripts = document.getElementsByTagName('script')[0];
        var polyfill = document.createElement("script");
        polyfill.defer = true;
        polyfill.src = "<?php echo BASE_URL; ?>cdn/shop/t/153/assets/ie11.js?v=144489047535103983231698607520";

        scripts.parentNode.insertBefore(polyfill, scripts);
    }
    </script>

    <!-- Shopify app scripts =========================================================== -->
    <script>
    window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');
    </script>
    <meta name="facebook-domain-verification" content="9g87w11j94qrefcysiqi3wtfp2p5om">
    <meta name="facebook-domain-verification" content="qhykvgtbdfu4uuspzt4y65mu0pzz1l">
    <meta name="facebook-domain-verification" content="timqeeoud2i8czq7r21ow1bormcl2z">
    <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/5582845/digital_wallets/dialog">
    <meta name="shopify-checkout-api-token" content="f9cf6052db1fced376ab405d52687e6e">
    <meta id="in-context-paypal-metadata" data-shop-id="5582845" data-venmo-supported="false"
        data-environment="production" data-locale="en_US" data-paypal-v4="true" data-currency="USD">
    <script async="async" src="/checkouts/internal/preloads.js?locale=en-US"></script>
    <script id="apple-pay-shop-capabilities" type="application/json">
    {
        "shopId": 5582845,
        "countryCode": "US",
        "currencyCode": "USD",
        "merchantCapabilities": ["supports3DS"],
        "merchantId": "gid:\/\/shopify\/Shop\/5582845",
        "merchantName": "BOXFOX",
        "requiredBillingContactFields": ["postalAddress", "email"],
        "requiredShippingContactFields": ["postalAddress", "email"],
        "shippingType": "shipping",
        "supportedNetworks": ["visa", "masterCard", "amex", "discover", "elo", "jcb"],
        "total": {
            "type": "pending",
            "label": "BOXFOX",
            "amount": "1.00"
        },
        "shopifyPaymentsEnabled": true,
        "supportsSubscriptions": true
    }
    </script>
    <script id="shopify-features" type="application/json">
    {
        "accessToken": "f9cf6052db1fced376ab405d52687e6e",
        "betas": ["rich-media-storefront-analytics"],
        "domain": "boxfox.com",
        "predictiveSearch": true,
        "shopId": 5582845,
        "locale": "en"
    }
    </script>
    <script>
    var Shopify = Shopify || {};
    Shopify.shop = "boxfox.myshopify.com";
    Shopify.locale = "en";
    Shopify.currency = {
        "active": "USD",
        "rate": "1.0"
    };
    Shopify.country = "US";
    Shopify.theme = {
        "name": "Pipeline - NEW",
        "id": 122801422454,
        "schema_name": "Pipeline",
        "schema_version": "7.0.2",
        "theme_store_id": 739,
        "role": "main"
    };
    Shopify.theme.handle = "null";
    Shopify.theme.style = {
        "id": null,
        "handle": null
    };
    Shopify.cdnHost = "boxfox.com/cdn";
    Shopify.routes = Shopify.routes || {};
    Shopify.routes.root = "/";
    </script>
    <script type="module">
    ! function(o) {
        (o.Shopify = o.Shopify || {}).modules = !0
    }(window);
    </script>
    <script>
    ! function(o) {
        function n() {
            var o = [];

            function n() {
                o.push(Array.prototype.slice.apply(arguments))
            }
            return n.q = o, n
        }
        var t = o.Shopify = o.Shopify || {};
        t.loadFeatures = n(), t.autoloadFeatures = n()
    }(window);
    </script>
    <script id="shop-js-analytics" type="application/json">
    {
        "pageType": "index"
    }
    </script>
    <script defer="defer" async="async" src="<?php echo BASE_URL; ?>cdn/shopifycloud/shop-js/client.js" onload="window.Shopify.SignInWithShop?.initShopCartSync?.({&quot;fedCMEnabled&quot;:true,&quot;windoidEnabled&quot;:true});
  "></script>
    <script>
    (function() {
        var isLoaded = false;

        function asyncLoad() {
            if (isLoaded) return;
            isLoaded = true;
            var urls = [
                "https:\/\/cdn-loyalty.yotpo.com\/loader\/dVowcn9YO0WgpMuqSCXRkQ.js?shop=boxfox.myshopify.com",
                "https:\/\/str.rise-ai.com\/?shop=boxfox.myshopify.com",
                "https:\/\/strn.rise-ai.com\/?shop=boxfox.myshopify.com",
                "\/\/cdn.shopify.com\/proxy\/5250fbbf317c4ce8fe41fee646be4a4dfdfeb966cee73553459f76bc66d680cf\/s3-us-west-2.amazonaws.com\/jsstore\/a\/V3VHOY8\/ge.js?shop=boxfox.myshopify.com\u0026sp-cache-control=cHVibGljLCBtYXgtYWdlPTkwMA",
                "\/\/cdn.shopify.com\/proxy\/7b77e7c073cad42d003746bad94601101a03e02aa1839a1a4f4137b88615e267\/app.retention.com\/shopify\/shopify_app_add_to_cart_script.js?shop=boxfox.myshopify.com\u0026sp-cache-control=cHVibGljLCBtYXgtYWdlPTkwMA",
                "https:\/\/d18eg7dreypte5.cloudfront.net\/browse-abandonment\/smsbump_timer.js?shop=boxfox.myshopify.com",
                "https:\/\/ecom-app.rakutenadvertising.io\/rakuten_advertising.js?shop=boxfox.myshopify.com",
                "https:\/\/tag.rmp.rakuten.com\/126912.ct.js?shop=boxfox.myshopify.com",
                "https:\/\/omnisnippet1.com\/platforms\/shopify.js?source=scriptTag\u0026v=2025-05-15T12\u0026shop=boxfox.myshopify.com"
            ];
            for (var i = 0; i < urls.length; i++) {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = urls[i];
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }
        };
        if (window.attachEvent) {
            window.attachEvent('onload', asyncLoad);
        } else {
            window.addEventListener('load', asyncLoad, false);
        }
    })();
    </script>
    <script id="__st">
    var __st = {
        "a": 5582845,
        "offset": -25200,
        "reqid": "275f1186-b65d-4605-9b4c-52397fd605a4-1759047099",
        "pageurl": "boxfox.com\/",
        "u": "e561df546923",
        "p": "home"
    };
    </script>
    <script>
    window.ShopifyPaypalV4VisibilityTracking = true;
    </script>
    <script id="captcha-bootstrap">
    ! function() {
        'use strict';
        const t = 'contact',
            e = 'account',
            n = 'new_comment',
            o = [
                [t, t],
                ['blogs', n],
                ['comments', n],
                [t, 'customer']
            ],
            c = [
                [e, 'customer_login'],
                [e, 'guest_login'],
                [e, 'recover_customer_password'],
                [e, 'create_customer']
            ],
            r = t => t.map((([t, e]) =>
                `form[action*='/${t}']:not([data-nocaptcha='true']) input[name='form_type'][value='${e}']`)).join(','),
            a = t => () => t ? [...document.querySelectorAll(t)].map((t => t.form)) : [];

        function s() {
            const t = [...o],
                e = r(t);
            return a(e)
        }
        const i = 'password',
            u = 'form_key',
            d = ['recaptcha-v3-token', 'g-recaptcha-response', 'h-captcha-response', i],
            f = () => {
                try {
                    return window.sessionStorage
                } catch {
                    return
                }
            },
            m = '__shopify_v',
            _ = t => t.elements[u];

        function p(t, e, n = !1) {
            try {
                const o = window.sessionStorage,
                    c = JSON.parse(o.getItem(e)),
                    {
                        data: r
                    } = function(t) {
                        const {
                            data: e,
                            action: n
                        } = t;
                        return t[m] || n ? {
                            data: e,
                            action: n
                        } : {
                            data: t,
                            action: n
                        }
                    }(c);
                for (const [e, n] of Object.entries(r)) t.elements[e] && (t.elements[e].value = n);
                n && o.removeItem(e)
            } catch (o) {
                console.error('form repopulation failed', {
                    error: o
                })
            }
        }
        const l = 'form_type',
            E = 'cptcha';

        function T(t) {
            t.dataset[E] = !0
        }
        const w = window,
            h = w.document,
            L = 'Shopify',
            v = 'ce_forms',
            y = 'captcha';
        let A = !1;
        ((t, e) => {
            const n = (g = 'f06e6c50-85a8-45c8-87d0-21a2b65856fe', I =
                'https://cdn.shopify.com/shopifycloud/storefront-forms-hcaptcha/ce_storefront_forms_captcha_hcaptcha.v1.5.2.iife.js',
                D = {
                    infoText: 'Protected by hCaptcha',
                    privacyText: 'Privacy',
                    termsText: 'Terms'
                }, (t, e, n) => {
                    const o = w[L][v],
                        c = o.bindForm;
                    if (c) return c(t, g, e, D).then(n);
                    var r;
                    o.q.push([
                        [t, g, e, D], n
                    ]), r = I, A || (h.body.append(Object.assign(h.createElement('script'), {
                        id: 'captcha-provider',
                        async: !0,
                        src: r
                    })), A = !0)
                });
            var g, I, D;
            w[L] = w[L] || {}, w[L][v] = w[L][v] || {}, w[L][v].q = [], w[L][y] = w[L][y] || {}, w[L][y].protect =
                function(t, e) {
                    n(t, void 0, e), T(t)
                }, Object.freeze(w[L][y]),
                function(t, e, n, w, h, L) {
                    const [v, y, A, g] = function(t, e, n) {
                        const i = e ? o : [],
                            u = t ? c : [],
                            d = [...i, ...u],
                            f = r(d),
                            m = r(i),
                            _ = r(d.filter((([t, e]) => n.includes(e))));
                        return [a(f), a(m), a(_), s()]
                    }(w, h, L), I = t => {
                        const e = t.target;
                        return e instanceof HTMLFormElement ? e : e && e.form
                    }, D = t => v().includes(t);
                    t.addEventListener('submit', (t => {
                        const e = I(t);
                        if (!e) return;
                        const n = D(e) && !e.dataset.hcaptchaBound && !e.dataset.recaptchaBound,
                            o = _(e),
                            c = g().includes(e) && (!o || !o.value);
                        (n || c) && t.preventDefault(), c && !n && (function(t) {
                            try {
                                if (!f()) return;
                                ! function(t) {
                                    const e = f();
                                    if (!e) return;
                                    const n = _(t);
                                    if (!n) return;
                                    const o = n.value;
                                    o && e.removeItem(o)
                                }(t);
                                const e = Array.from(Array(32), (() => Math.random().toString(
                                    36)[2])).join('');
                                ! function(t, e) {
                                    _(t) || t.append(Object.assign(document.createElement(
                                        'input'), {
                                        type: 'hidden',
                                        name: u
                                    })), t.elements[u].value = e
                                }(t, e),
                                function(t, e) {
                                    const n = f();
                                    if (!n) return;
                                    const o = [...t.querySelectorAll(`input[type='${i}']`)].map(
                                            (({
                                                name: t
                                            }) => t)),
                                        c = [...d, ...o],
                                        r = {};
                                    for (const [a, s] of new FormData(t).entries()) c.includes(
                                        a) || (r[a] = s);
                                    n.setItem(e, JSON.stringify({
                                        [m]: 1,
                                        action: t.action,
                                        data: r
                                    }))
                                }(t, e)
                            } catch (e) {
                                console.error('failed to persist form', e)
                            }
                        }(e), e.submit())
                    }));
                    const S = (t, e) => {
                        t && !t.dataset[E] && (n(t, e.some((e => e === t))), T(t))
                    };
                    for (const o of ['focusin', 'change']) t.addEventListener(o, (t => {
                        const e = I(t);
                        D(e) && S(e, y())
                    }));
                    const B = e.get('form_key'),
                        M = e.get(l),
                        P = B && M;
                    t.addEventListener('DOMContentLoaded', (() => {
                        const t = y();
                        if (P)
                            for (const e of t) e.elements[l].value === M && p(e, B);
                        [...new Set([...A(), ...v().filter((t => 'true' === t.dataset
                            .shopifyCaptcha))])].forEach((e => S(e, t)))
                    }))
                }(h, new URLSearchParams(w.location.search), n, t, e, ['guest_login'])
        })(!1, !0)
    }();
    </script>
    <script integrity="sha256-52AcMU7V7pcBOXWImdc/TAGTFKeNjmkeM1Pvks/DTgc="
        data-source-attribution="shopify.loadfeatures" defer="defer"
        src="<?php echo BASE_URL; ?>cdn/shopifycloud/storefront/assets/storefront/load_feature-81c60534.js" crossorigin="anonymous"></script>
    <script data-source-attribution="shopify.dynamic_checkout.dynamic.init">
    var Shopify = Shopify || {};
    Shopify.PaymentButton = Shopify.PaymentButton || {
        isStorefrontPortableWallets: !0,
        init: function() {
            window.Shopify.PaymentButton.init = function() {};
            var t = document.createElement("script");
            t.src = "https://aanvio.com/cdn/shopifycloud/portable-wallets/latest/portable-wallets.en.js", t
                .type = "module", document.head.appendChild(t)
        }
    };
    </script>
    <script data-source-attribution="shopify.dynamic_checkout.buyer_consent">
    function portableWalletsHideBuyerConsent(e) {
        var t = document.getElementById("shopify-buyer-consent"),
            n = document.getElementById("shopify-subscription-policy-button");
        t && n && (t.classList.add("hidden"), t.setAttribute("aria-hidden", "true"), n.removeEventListener("click", e))
    }

    function portableWalletsShowBuyerConsent(e) {
        var t = document.getElementById("shopify-buyer-consent"),
            n = document.getElementById("shopify-subscription-policy-button");
        t && n && (t.classList.remove("hidden"), t.removeAttribute("aria-hidden"), n.addEventListener("click", e))
    }
    window.Shopify?.PaymentButton && (window.Shopify.PaymentButton.hideBuyerConsent = portableWalletsHideBuyerConsent,
        window.Shopify.PaymentButton.showBuyerConsent = portableWalletsShowBuyerConsent);
    </script>
    <script data-source-attribution="shopify.dynamic_checkout.cart.bootstrap">
    document.addEventListener("DOMContentLoaded", (function() {
        function t() {
            return document.querySelector("shopify-accelerated-checkout-cart, shopify-accelerated-checkout")
        }
        if (t()) Shopify.PaymentButton.init();
        else {
            new MutationObserver((function(e, n) {
                t() && (Shopify.PaymentButton.init(), n.disconnect())
            })).observe(document.body, {
                childList: !0,
                subtree: !0
            })
        }
    }));
    </script>
    <script id="scb4127" type="text/javascript" async=""
        src="https://aanvio.com/cdn/shopifycloud/privacy-banner/storefront-banner.js"></script>
    <link id="shopify-accelerated-checkout-styles" rel="stylesheet" media="screen"
        href="https://aanvio.com/cdn/shopifycloud/portable-wallets/latest/accelerated-checkout-backwards-compat.css"
        crossorigin="anonymous">
    <style id="shopify-accelerated-checkout-cart">
    #shopify-buyer-consent {
        margin-top: 1em;
        display: inline-block;
        width: 100%;
    }

    #shopify-buyer-consent.hidden {
        display: none;
    }

    #shopify-subscription-policy-button {
        background: none;
        border: none;
        padding: 0;
        text-decoration: underline;
        font-size: inherit;
        cursor: pointer;
    }

    #shopify-subscription-policy-button::before {
        box-shadow: none;
    }
    </style>

    <script>
    window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');
    </script>
    <script src="https://cdn-widgetsrepository.yotpo.com/v1/loader/dVowcn9YO0WgpMuqSCXRkQ" async=""></script>

    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
    function timestamp() {
        var response = document.getElementById("g-recaptcha-response");
        if (response == null || response.value.trim() == "") {
            if (document.getElementsByName("captcha_settings")[0]) {
                var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);
                elems["ts"] = JSON.stringify(new Date().getTime());
                document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems);
            }
        }
    }
    setInterval(timestamp, 500);
    </script>


    <!-- BEGIN app block: shopify://apps/easy-profile-editor/blocks/edit-profile/fa7e2622-7360-4890-9ee6-d7e16991c434 -->
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const target = getTargetLink();
        if (!target) return;

        const editProfileEl = document.createElement('a');
        editProfileEl.style.display = 'block';

        editProfileEl.href = '/a/edit-profile';
        editProfileEl.className = `${target.className} cf-edit-account-link`;
        editProfileEl.innerText = 'Edit Profile';

        target.insertAdjacentElement('afterend', editProfileEl);

        function getTargetLink() {
            const main = document.querySelector('main') || document;
            const addressesHref = main.querySelector('[href*="/account/addresses"]');
            const logoutHref = main.querySelector('[href*="/account/logout"]');

            return addressesHref || logoutHref;
        }
    });
    </script>


    <!-- END app block -->
    <!-- BEGIN app block: shopify://apps/klaviyo-email-marketing-sms/blocks/klaviyo-onsite-embed/2632fe16-c075-4321-a88b-50b567f42507 -->












    <script async="" src="https://static.klaviyo.com/onsite/js/NwRvKq/klaviyo.js?company_id=NwRvKq"></script>
    <script>
    ! function() {
        if (!window.klaviyo) {
            window._klOnsite = window._klOnsite || [];
            try {
                window.klaviyo = new Proxy({}, {
                    get: function(n, i) {
                        return "push" === i ? function() {
                            var n;
                            (n = window._klOnsite).push.apply(n, arguments)
                        } : function() {
                            for (var n = arguments.length, o = new Array(n), w = 0; w < n; w++) o[w] =
                                arguments[w];
                            var t = "function" == typeof o[o.length - 1] ? o.pop() : void 0,
                                e = new Promise((function(n) {
                                    window._klOnsite.push([i].concat(o, [function(i) {
                                        t && t(i), n(i)
                                    }]))
                                }));
                            return e
                        }
                    }
                })
            } catch (n) {
                window.klaviyo = window.klaviyo || [], window.klaviyo.push = function() {
                    var n;
                    (n = window._klOnsite).push.apply(n, arguments)
                }
            }
        }
    }();
    </script>






    <script>
    window.klaviyoReviewsProductDesignMode = false
    </script>







    <!-- END app block -->
    <!-- BEGIN app block: shopify://apps/yotpo-loyalty-rewards/blocks/loader-app-embed-block/2f9660df-5018-4e02-9868-ee1fb88d6ccd -->
    <script src="https://cdn-widgetsrepository.yotpo.com/v1/loader/dVowcn9YO0WgpMuqSCXRkQ" async=""></script>



    <script src="https://cdn-loyalty.yotpo.com/loader/dVowcn9YO0WgpMuqSCXRkQ.js?shop=boxfox.com" async=""></script>


    <!-- END app block -->
    <!-- BEGIN app block: shopify://apps/black-crow-ai-that-delivers/blocks/blackcrow_ai_script/3e73f597-cb71-47a1-8a06-0c931482ecd2 -->

    <script type="text/javascript" async=""
        src="https://shopify-init.blackcrow.ai/js/core/boxfox.js?shop=boxfox.myshopify.com&amp;tagSrc=ShopifyThemeAppExtension">
    </script>


    <!-- END app block -->
    <link href="./css/expertise.css" rel="stylesheet" type="text/css" media="all">

    <link href="https://cdn.shopify.com/extensions/5e57487f-b5b3-4cc7-987f-b86c2e529733/boxfox-build-381/assets/app.css"
        rel="stylesheet" type="text/css" media="all">
    <script
        src="https://cdn.shopify.com/extensions/c6defb98-55a3-4757-8c1c-9616760c9bd7/inbox-1247/assets/inbox-chat-loader.js"
        type="text/javascript" defer="defer"></script>
    <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
    <script>
    (function() {
        if ("sendBeacon" in navigator && "performance" in window) {
            try {
                var session_token_from_headers = performance.getEntriesByType('navigation')[0].serverTiming.find(
                    x => x.name == '_s').description;
            } catch {
                var session_token_from_headers = undefined;
            }
            var session_cookie_matches = document.cookie.match(/_shopify_s=([^;]*)/);
            var session_token_from_cookie = session_cookie_matches && session_cookie_matches.length === 2 ?
                session_cookie_matches[1] : "";
            var session_token = session_token_from_headers || session_token_from_cookie || "";

            function handle_abandonment_event(e) {
                var entries = performance.getEntries().filter(function(entry) {
                    return /monorail-edge.shopifysvc.com/.test(entry.name);
                });
                if (!window.abandonment_tracked && entries.length === 0) {
                    window.abandonment_tracked = true;
                    var currentMs = Date.now();
                    var navigation_start = performance.timing.navigationStart;
                    var payload = {
                        shop_id: 5582845,
                        url: window.location.href,
                        navigation_start,
                        duration: currentMs - navigation_start,
                        session_token,
                        page_type: "index"
                    };
                    window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({
                        schema_id: "online_store_buyer_site_abandonment/1.1",
                        payload: payload,
                        metadata: {
                            event_created_at_ms: currentMs,
                            event_sent_at_ms: currentMs
                        }
                    }));
                }
            }
            window.addEventListener('pagehide', handle_abandonment_event);
        }
    }());
    </script>
    <script id="web-pixels-manager-setup">
    (function e(e, d, r, n, o) {
        if (void 0 === o && (o = {}), !Boolean(null === (a = null === (i = window.Shopify) || void 0 === i ?
                void 0 : i.analytics) || void 0 === a ? void 0 : a.replayQueue)) {
            var i, a;
            window.Shopify = window.Shopify || {};
            var t = window.Shopify;
            t.analytics = t.analytics || {};
            var s = t.analytics;
            s.replayQueue = [], s.publish = function(e, d, r) {
                return s.replayQueue.push([e, d, r]), !0
            };
            try {
                self.performance.mark("wpm:start")
            } catch (e) {}
            var l = function() {
                    var e = {
                            modern: /Edge?\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Firefox\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Chrom(ium|e)\/(9{2}|\d{3,})\.\d+(\.\d+|)|(Maci|X1{2}).+ Version\/(15\.\d+|(1[6-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(9{2}|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(15[._]\d+|(1[6-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](13[3-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Android.+Firefox\/(13[5-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(13[3-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|SamsungBrowser\/([2-9]\d|\d{3,})\.\d+/,
                            legacy: /Edge?\/(1[6-9]|[2-9]\d|\d{3,})\.\d+(\.\d+|)|Firefox\/(5[4-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)|Chrom(ium|e)\/(5[1-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)([\d.]+$|.*Safari\/(?![\d.]+ Edge\/[\d.]+$))|(Maci|X1{2}).+ Version\/(10\.\d+|(1[1-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(3[89]|[4-9]\d|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(10[._]\d+|(1[1-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](13[3-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Mobile Safari.+OPR\/([89]\d|\d{3,})\.\d+\.\d+|Android.+Firefox\/(13[5-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(13[3-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+(UC? ?Browser|UCWEB|U3)[ /]?(15\.([5-9]|\d{2,})|(1[6-9]|[2-9]\d|\d{3,})\.\d+)\.\d+|SamsungBrowser\/(5\.\d+|([6-9]|\d{2,})\.\d+)|Android.+MQ{2}Browser\/(14(\.(9|\d{2,})|)|(1[5-9]|[2-9]\d|\d{3,})(\.\d+|))(\.\d+|)|K[Aa][Ii]OS\/(3\.\d+|([4-9]|\d{2,})\.\d+)(\.\d+|)/
                        },
                        d = e.modern,
                        r = e.legacy,
                        n = navigator.userAgent;
                    return n.match(d) ? "modern" : n.match(r) ? "legacy" : "unknown"
                }(),
                u = "modern" === l ? "modern" : "legacy",
                c = (null != n ? n : {
                    modern: "",
                    legacy: ""
                })[u],
                f = function(e) {
                    return [e.baseUrl, "/wpm", "/b", e.hashVersion, "modern" === e.buildTarget ? "m" : "l", ".js"]
                        .join("")
                }({
                    baseUrl: d,
                    hashVersion: r,
                    buildTarget: u
                }),
                m = function(e) {
                    var d = e.version,
                        r = e.bundleTarget,
                        n = e.surface,
                        o = e.pageUrl,
                        i = e.monorailEndpoint;
                    return {
                        emit: function(e) {
                            var a = e.status,
                                t = e.errorMsg,
                                s = (new Date).getTime(),
                                l = JSON.stringify({
                                    metadata: {
                                        event_sent_at_ms: s
                                    },
                                    events: [{
                                        schema_id: "web_pixels_manager_load/3.1",
                                        payload: {
                                            version: d,
                                            bundle_target: r,
                                            page_url: o,
                                            status: a,
                                            surface: n,
                                            error_msg: t
                                        },
                                        metadata: {
                                            event_created_at_ms: s
                                        }
                                    }]
                                });
                            if (!i) return console && console.warn && console.warn(
                                "[Web Pixels Manager] No Monorail endpoint provided, skipping logging."
                            ), !1;
                            try {
                                return self.navigator.sendBeacon.bind(self.navigator)(i, l)
                            } catch (e) {}
                            var u = new XMLHttpRequest;
                            try {
                                return u.open("POST", i, !0), u.setRequestHeader("Content-Type", "text/plain"),
                                    u.send(l), !0
                            } catch (e) {
                                return console && console.warn && console.warn(
                                    "[Web Pixels Manager] Got an unhandled error while logging to Monorail."
                                ), !1
                            }
                        }
                    }
                }({
                    version: r,
                    bundleTarget: l,
                    surface: e.surface,
                    pageUrl: self.location.href,
                    monorailEndpoint: e.monorailEndpoint
                });
            try {
                o.browserTarget = l,
                    function(e) {
                        var d = e.src,
                            r = e.async,
                            n = void 0 === r || r,
                            o = e.onload,
                            i = e.onerror,
                            a = e.sri,
                            t = e.scriptDataAttributes,
                            s = void 0 === t ? {} : t,
                            l = document.createElement("script"),
                            u = document.querySelector("head"),
                            c = document.querySelector("body");
                        if (l.async = n, l.src = d, a && (l.integrity = a, l.crossOrigin = "anonymous"), s)
                            for (var f in s)
                                if (Object.prototype.hasOwnProperty.call(s, f)) try {
                                    l.dataset[f] = s[f]
                                } catch (e) {}
                        if (o && l.addEventListener("load", o), i && l.addEventListener("error", i), u) u
                            .appendChild(l);
                        else {
                            if (!c) throw new Error("Did not find a head or body element to append the script");
                            c.appendChild(l)
                        }
                    }({
                        src: f,
                        async: !0,
                        onload: function() {
                            if (! function() {
                                    var e, d;
                                    return Boolean(null === (d = null === (e = window.Shopify) || void 0 ===
                                            e ? void 0 : e.analytics) || void 0 === d ? void 0 : d
                                        .initialized)
                                }()) {
                                var d = window.webPixelsManager.init(e) || void 0;
                                if (d) {
                                    var r = window.Shopify.analytics;
                                    r.replayQueue.forEach((function(e) {
                                            var r = e[0],
                                                n = e[1],
                                                o = e[2];
                                            d.publishCustomEvent(r, n, o)
                                        })), r.replayQueue = [], r.publish = d.publishCustomEvent, r
                                        .visitor = d.visitor, r.initialized = !0
                                }
                            }
                        },
                        onerror: function() {
                            return m.emit({
                                status: "failed",
                                errorMsg: "".concat(f, " has failed to load")
                            })
                        },
                        sri: function(e) {
                            var d = /^sha384-[A-Za-z0-9+/=]+$/;
                            return "string" == typeof e && d.test(e)
                        }(c) ? c : "",
                        scriptDataAttributes: o
                    }), m.emit({
                        status: "loading"
                    })
            } catch (e) {
                m.emit({
                    status: "failed",
                    errorMsg: (null == e ? void 0 : e.message) || "Unknown error"
                })
            }
        }
    })({
        shopId: 5582845,
        storefrontBaseUrl: "https://aanvio.com",
        extensionsBaseUrl: "https://extensions.shopifycdn.com/cdn/shopifycloud/web-pixels-manager",
        monorailEndpoint: "https://monorail-edge.shopifysvc.com/unstable/produce_batch",
        surface: "storefront-renderer",
        enabledBetaFlags: [],
        webPixelsConfigList: [{
            "id": "430014582",
            "configuration": "{\"loggingEnabled\":\"false\", \"ranMid\":\"53528\", \"serverPixelEnabled\":\"true\",  \"useShopifyItemLevelTax\":\"false\"}",
            "eventPayloadVersion": "v1",
            "runtimeContext": "STRICT",
            "scriptVersion": "43f728f1c6f64271197c39a6cabd2211",
            "type": "APP",
            "apiClientId": 2531653,
            "privacyPurposes": ["ANALYTICS"]
        }, {
            "id": "329252982",
            "configuration": "{\"config\":\"{\\\"pixel_id\\\":\\\"G-14XZQ2NV23\\\",\\\"gtag_events\\\":[{\\\"type\\\":\\\"begin_checkout\\\",\\\"action_label\\\":\\\"G-14XZQ2NV23\\\"},{\\\"type\\\":\\\"search\\\",\\\"action_label\\\":\\\"G-14XZQ2NV23\\\"},{\\\"type\\\":\\\"view_item\\\",\\\"action_label\\\":\\\"G-14XZQ2NV23\\\"},{\\\"type\\\":\\\"purchase\\\",\\\"action_label\\\":\\\"G-14XZQ2NV23\\\"},{\\\"type\\\":\\\"page_view\\\",\\\"action_label\\\":\\\"G-14XZQ2NV23\\\"},{\\\"type\\\":\\\"add_payment_info\\\",\\\"action_label\\\":\\\"G-14XZQ2NV23\\\"},{\\\"type\\\":\\\"add_to_cart\\\",\\\"action_label\\\":\\\"G-14XZQ2NV23\\\"}],\\\"enable_monitoring_mode\\\":false}\"}",
            "eventPayloadVersion": "v1",
            "runtimeContext": "OPEN",
            "scriptVersion": "b2a88bafab3e21179ed38636efcd8a93",
            "type": "APP",
            "apiClientId": 1780363,
            "privacyPurposes": []
        }, {
            "id": "251887734",
            "configuration": "{\"apiURL\":\"https:\/\/api.omnisend.com\",\"appURL\":\"https:\/\/app.omnisend.com\",\"brandID\":\"651c4e564a7798b9cbd3e48b\",\"trackingURL\":\"https:\/\/wt.omnisendlink.com\"}",
            "eventPayloadVersion": "v1",
            "runtimeContext": "STRICT",
            "scriptVersion": "aa9feb15e63a302383aa48b053211bbb",
            "type": "APP",
            "apiClientId": 186001,
            "privacyPurposes": ["ANALYTICS", "MARKETING", "SALE_OF_DATA"]
        }, {
            "id": "107380854",
            "configuration": "{\"pixel_id\":\"368842887375545\",\"pixel_type\":\"facebook_pixel\",\"metaapp_system_user_token\":\"-\"}",
            "eventPayloadVersion": "v1",
            "runtimeContext": "OPEN",
            "scriptVersion": "6d8c3ef0426b37b2a9b717daeb719f58",
            "type": "APP",
            "apiClientId": 2329312,
            "privacyPurposes": ["ANALYTICS", "MARKETING", "SALE_OF_DATA"]
        }, {
            "id": "67010678",
            "configuration": "{\"store\":\"boxfox.myshopify.com\"}",
            "eventPayloadVersion": "v1",
            "runtimeContext": "STRICT",
            "scriptVersion": "8450b52b59e80bfb2255f1e069ee1acd",
            "type": "APP",
            "apiClientId": 740217,
            "privacyPurposes": ["ANALYTICS", "MARKETING", "SALE_OF_DATA"]
        }, {
            "id": "59179126",
            "configuration": "{\"tagID\":\"2614005532469\"}",
            "eventPayloadVersion": "v1",
            "runtimeContext": "STRICT",
            "scriptVersion": "a89c2bcc8138c8634a19a76241c7876a",
            "type": "APP",
            "apiClientId": 3009811,
            "privacyPurposes": ["ANALYTICS", "MARKETING", "SALE_OF_DATA"]
        }, {
            "id": "48758902",
            "configuration": "{ \"bundleName\": \"boxfox\" }",
            "eventPayloadVersion": "v1",
            "runtimeContext": "STRICT",
            "scriptVersion": "ae3d89679fc8c29d06fb26348903e6c7",
            "type": "APP",
            "apiClientId": 5106349,
            "privacyPurposes": ["ANALYTICS", "MARKETING", "SALE_OF_DATA"]
        }, {
            "id": "26706038",
            "eventPayloadVersion": "1",
            "runtimeContext": "LAX",
            "scriptVersion": "1",
            "type": "CUSTOM",
            "privacyPurposes": ["ANALYTICS", "MARKETING", "SALE_OF_DATA"],
            "name": "GTM App Pixels"
        }, {
            "id": "shopify-app-pixel",
            "configuration": "{}",
            "eventPayloadVersion": "v1",
            "runtimeContext": "STRICT",
            "scriptVersion": "0450",
            "apiClientId": "shopify-pixel",
            "type": "APP",
            "privacyPurposes": ["ANALYTICS", "MARKETING"]
        }, {
            "id": "shopify-custom-pixel",
            "eventPayloadVersion": "v1",
            "runtimeContext": "LAX",
            "scriptVersion": "0450",
            "apiClientId": "shopify-pixel",
            "type": "CUSTOM",
            "privacyPurposes": ["ANALYTICS", "MARKETING"]
        }],
        isMerchantRequest: false,
        initData: {
            "shop": {
                "name": "BOXFOX",
                "paymentSettings": {
                    "currencyCode": "USD"
                },
                "myshopifyDomain": "boxfox.myshopify.com",
                "countryCode": "US",
                "storefrontUrl": "https:\/\/boxfox.com"
            },
            "customer": null,
            "cart": null,
            "checkout": null,
            "productVariants": [],
            "purchasingCompany": null
        },
    }, "https://aanvio.com/cdn", "a678f985wf512d8e4p074b229bma05a5fb0", {
        "modern": "",
        "legacy": ""
    }, {
        "shopId": "5582845",
        "storefrontBaseUrl": "https:\/\/boxfox.com",
        "extensionBaseUrl": "https:\/\/extensions.shopifycdn.com\/cdn\/shopifycloud\/web-pixels-manager",
        "surface": "storefront-renderer",
        "enabledBetaFlags": "[]",
        "isMerchantRequest": "false",
        "hashVersion": "a678f985wf512d8e4p074b229bma05a5fb0",
        "publish": "custom",
        "events": "[[\"page_viewed\",{}]]"
    });
    </script>
    <script async="" src="https://aanvio.com/cdn/wpm/ba678f985wf512d8e4p074b229bma05a5fb0m.js" data-shop-id="5582845"
        data-storefront-base-url="https://aanvio.com"
        data-extension-base-url="https://extensions.shopifycdn.com/cdn/shopifycloud/web-pixels-manager"
        data-surface="storefront-renderer" data-enabled-beta-flags="[]" data-is-merchant-request="false"
        data-hash-version="a678f985wf512d8e4p074b229bma05a5fb0" data-publish="custom"
        data-events="[[&quot;page_viewed&quot;,{}]]" data-browser-target="modern"></script>
    <script>
    window.ShopifyAnalytics = window.ShopifyAnalytics || {};
    window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
    window.ShopifyAnalytics.meta.currency = 'USD';
    var meta = {
        "page": {
            "pageType": "home"
        }
    };
    for (var attr in meta) {
        window.ShopifyAnalytics.meta[attr] = meta[attr];
    }
    </script>
    <script class="analytics">
    (function() {
        var customDocumentWrite = function(content) {
            var jquery = null;

            if (window.jQuery) {
                jquery = window.jQuery;
            } else if (window.Checkout && window.Checkout.$) {
                jquery = window.Checkout.$;
            }

            if (jquery) {
                jquery('body').append(content);
            }
        };

        var hasLoggedConversion = function(token) {
            if (token) {
                return document.cookie.indexOf('loggedConversion=' + token) !== -1;
            }
            return false;
        }

        var setCookieIfConversion = function(token) {
            if (token) {
                var twoMonthsFromNow = new Date(Date.now());
                twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

                document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
            }
        }

        var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
        if (trekkie.integrations) {
            return;
        }
        trekkie.methods = [
            'identify',
            'page',
            'ready',
            'track',
            'trackForm',
            'trackLink'
        ];
        trekkie.factory = function(method) {
            return function() {
                var args = Array.prototype.slice.call(arguments);
                args.unshift(method);
                trekkie.push(args);
                return trekkie;
            };
        };
        for (var i = 0; i < trekkie.methods.length; i++) {
            var key = trekkie.methods[i];
            trekkie[key] = trekkie.factory(key);
        }
        trekkie.load = function(config) {
            trekkie.config = config || {};
            trekkie.config.initialDocumentCookie = document.cookie;
            var first = document.getElementsByTagName('script')[0];
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.onerror = function(e) {
                var scriptFallback = document.createElement('script');
                scriptFallback.type = 'text/javascript';
                scriptFallback.onerror = function(error) {
                    var Monorail = {
                        produce: function produce(monorailDomain, schemaId, payload) {
                            var currentMs = new Date().getTime();
                            var event = {
                                schema_id: schemaId,
                                payload: payload,
                                metadata: {
                                    event_created_at_ms: currentMs,
                                    event_sent_at_ms: currentMs
                                }
                            };
                            return Monorail.sendRequest("https://" + monorailDomain +
                                "/v1/produce", JSON.stringify(event));
                        },
                        sendRequest: function sendRequest(endpointUrl, payload) {
                            // Try the sendBeacon API
                            if (window && window.navigator && typeof window.navigator
                                .sendBeacon === 'function' && typeof window.Blob ===
                                'function' && !Monorail.isIos12()) {
                                var blobData = new window.Blob([payload], {
                                    type: 'text/plain'
                                });

                                if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                                    return true;
                                } // sendBeacon was not successful

                            } // XHR beacon

                            var xhr = new XMLHttpRequest();

                            try {
                                xhr.open('POST', endpointUrl);
                                xhr.setRequestHeader('Content-Type', 'text/plain');
                                xhr.send(payload);
                            } catch (e) {
                                console.log(e);
                            }

                            return false;
                        },
                        isIos12: function isIos12() {
                            return window.navigator.userAgent.lastIndexOf(
                                    'iPhone; CPU iPhone OS 12_') !== -1 || window.navigator
                                .userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
                        }
                    };
                    Monorail.produce('monorail-edge.shopifysvc.com',
                        'trekkie_storefront_load_errors/1.1', {
                            shop_id: 5582845,
                            theme_id: 122801422454,
                            app_name: "storefront",
                            context_url: window.location.href,
                            source_url: "<?php echo BASE_URL; ?>cdn/s/trekkie.storefront.ae499d7c18801354d4ba37cec962a2ab045df942.min.js"
                        });

                };
                scriptFallback.async = true;
                scriptFallback.src =
                    '//boxfox.com/cdn/s/trekkie.storefront.ae499d7c18801354d4ba37cec962a2ab045df942.min.js';
                first.parentNode.insertBefore(scriptFallback, first);
            };
            script.async = true;
            script.src =
                '//boxfox.com/cdn/s/trekkie.storefront.ae499d7c18801354d4ba37cec962a2ab045df942.min.js';
            first.parentNode.insertBefore(script, first);
        };
        trekkie.load({
            "Trekkie": {
                "appName": "storefront",
                "development": false,
                "defaultAttributes": {
                    "shopId": 5582845,
                    "isMerchantRequest": null,
                    "themeId": 122801422454,
                    "themeCityHash": "7087051497998298818",
                    "contentLanguage": "en",
                    "currency": "USD"
                },
                "isServerSideCookieWritingEnabled": true,
                "monorailRegion": "shop_domain"
            },
            "Session Attribution": {},
            "S2S": {
                "facebookCapiEnabled": true,
                "source": "trekkie-storefront-renderer",
                "apiClientId": 580111
            }
        });

        var loaded = false;
        trekkie.ready(function() {
            if (loaded) return;
            loaded = true;

            window.ShopifyAnalytics.lib = window.trekkie;

            var originalDocumentWrite = document.write;
            document.write = customDocumentWrite;
            try {
                window.ShopifyAnalytics.merchantGoogleAnalytics.call(this);
            } catch (error) {};
            document.write = originalDocumentWrite;

            window.ShopifyAnalytics.lib.page(null, {
                "pageType": "home",
                "shopifyEmitted": true
            });

            var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
            var token = match ? match[1] : undefined;
            if (!hasLoggedConversion(token)) {
                setCookieIfConversion(token);

            }
        });


        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        eventsListenerScript.src = "<?php echo BASE_URL; ?>cdn/shopifycloud/storefront/assets/shop_events_listener-abeef7a0.js";
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

    })();
    </script>
    <script async="" src="<?php echo BASE_URL; ?>cdn/shopifycloud/storefront/assets/shop_events_listener-abeef7a0.js"></script>
    <script defer="" src="https://aanvio.com/cdn/shopifycloud/perf-kit/shopify-perf-kit-2.0.8.min.js"
        data-application="storefront-renderer" data-shop-id="5582845" data-render-region="gcp-asia-southeast1"
        data-page-type="index" data-theme-instance-id="122801422454" data-theme-name="Pipeline"
        data-theme-version="7.0.2" data-monorail-region="shop_domain" data-resource-timing-sampling-rate="10"
        data-shs="true" data-shs-beacon="true"></script>
    <script src="https://cdn-widgetsrepository.yotpo.com/widget-assets/yotpo-pixel/2024-04-18_14-53-12/bundle.js"
        defer="" type="text/javascript" charset="utf-8"></script>
    <script src="https://cdn-widgetsrepository.yotpo.com/widget-assets/widgets-initializer/app.v0.9.6-7348.js" async=""
        type="text/javascript" charset="utf-8"></script>
    <link rel="preconnect" href="https://api.blackcrow.ai/">
    <link rel="dns-prefetch" href="https://api.blackcrow.ai/">
    <link rel="preconnect" href="https://shopify-init.blackcrow.ai/">
    <link rel="dns-prefetch" href="https://shopify-init.blackcrow.ai/">
    <script
        src="https://aanvio.com/web-pixels@a678f985wf512d8e4p074b229bma05a5fb0/app/web-pixel-329252982@b2a88bafab3e21179ed38636efcd8a93/pixel.modern.js"
        async="" data-pixel-id="329252982" data-pixel-type="APP"></script>
    <script
        src="https://aanvio.com/web-pixels@a678f985wf512d8e4p074b229bma05a5fb0/app/web-pixel-107380854@6d8c3ef0426b37b2a9b717daeb719f58/pixel.modern.js"
        async="" data-pixel-id="107380854" data-pixel-type="APP"></script>
    <style>
    .yotpo-widget-empty-placeholder {
        display: block !important;
    }
    </style>
    <script type="text/javascript" async=""
        src="https://static-tracking.klaviyo.com/onsite/js/fender_analytics.a116df7a9612dbffcd90.js?cb=2"
        crossorigin="anonymous"></script>
    <script type="text/javascript" async=""
        src="https://static-tracking.klaviyo.com/onsite/js/static.45264a1e53c737929610.js?cb=2" crossorigin="anonymous">
    </script>
    <script type="text/javascript" async=""
        src="https://static.klaviyo.com/onsite/js/runtime.3fdab0acb5ba483cb532.js?cb=2" crossorigin="anonymous">
    </script>
    <script type="text/javascript" async=""
        src="https://static.klaviyo.com/onsite/js/sharedUtils.e6e1802ef4206e0f3136.js?cb=2" crossorigin="anonymous">
    </script>
    <script type="text/javascript" async=""
        src="https://static.klaviyo.com/onsite/js/vendors~in_app_forms~signup_forms~reviews~event_adapter~telemetry~onsite-triggering~customerHubRoot~renderFavoritesButton~renderFavoritesIconButton~renderFaqWidget.c4a654aeb90c3b558d39.js?cb=2"
        crossorigin="anonymous"></script>
    <script type="text/javascript" async=""
        src="https://static.klaviyo.com/onsite/js/vendors~in_app_forms~signup_forms~client_identity~event_adapter~telemetry~onsite-triggering.4768afcea6fedb2d7bdb.js?cb=2"
        crossorigin="anonymous"></script>
    <script type="text/javascript" async=""
        src="https://static.klaviyo.com/onsite/js/vendors~in_app_forms~signup_forms~reviews~atlas.0201e888d834a3782e3a.js?cb=2"
        crossorigin="anonymous"></script>
    <script type="text/javascript" async=""
        src="https://static.klaviyo.com/onsite/js/vendors~in_app_forms~signup_forms.8a6cb5252157eea5176a.js?cb=2"
        crossorigin="anonymous"></script>
    <script type="text/javascript" async=""
        src="https://static.klaviyo.com/onsite/js/default~in_app_forms~signup_forms~onsite-triggering.c8a93296cc550bb31dbc.js?cb=2"
        crossorigin="anonymous"></script>
    <script type="text/javascript" async=""
        src="https://static.klaviyo.com/onsite/js/default~in_app_forms~signup_forms.8e9aaa71c62130b45ced.js?cb=2"
        crossorigin="anonymous"></script>
    <script type="text/javascript" async=""
        src="https://static.klaviyo.com/onsite/js/signup_forms.9dfcc3510f2d875d87a5.js?cb=2" crossorigin="anonymous">
    </script>
    <script type="text/javascript" async=""
        src="https://static-tracking.klaviyo.com/onsite/js/post_identification_sync.88c7596746348dcaf43a.js?cb=2"
        crossorigin="anonymous"></script>
    <script type="text/javascript" async=""
        src="https://static.klaviyo.com/onsite/js/vendors~event_adapter~onsite-back-in-stock~Render~ClientStore~.3107525c2fe4964fa98b.js?cb=2"
        crossorigin="anonymous"></script>
    <script type="text/javascript" async=""
        src="https://static.klaviyo.com/onsite/js/event_adapter.7b9b31cd9fb89b49cf5d.js?cb=2" crossorigin="anonymous">
    </script>
    <script type="text/javascript" async=""
        src="https://static-tracking.klaviyo.com/onsite/js/vendors~in_app_forms~signup_forms~reviews~event_adapter~telemetry~onsite-triggering~customerHubRoot~renderFavoritesButton~renderFavoritesIconButton~renderFaqWidget.c4a654aeb90c3b558d39.js?cb=2"
        crossorigin="anonymous"></script>
    <script type="text/javascript" async=""
        src="https://static-tracking.klaviyo.com/onsite/js/vendors~in_app_forms~signup_forms~client_identity~event_adapter~telemetry~onsite-triggering.4768afcea6fedb2d7bdb.js?cb=2"
        crossorigin="anonymous"></script>
    <script type="text/javascript" async=""
        src="https://static-tracking.klaviyo.com/onsite/js/telemetry.a1d6e25971b01f8b50b9.js?cb=2"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn-swell-assets.yotpo.com/app.v1.0.368.js"></script>
    <style id="kl-custom-fonts">
    @import 'https://fonts.googleapis.com/css2?family=Baskervville:ital,wght@0,400&display=swap';
    @import 'https://use.typekit.net/gmv5kip.css';

    @font-face {
        font-family: 'BrandonBold';
        src: url(https://pro.fontawesome.com/releases/v5.10.0/webfonts/fa-regular-400.woff2);
        font-weight: 100;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'Notsure';
        src: url(https://pro.fontawesome.com/releases/v5.10.0/webfonts/fa-solid-900.woff2);
        font-weight: 300;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'Poppins-Klaviyo-Hosted';
        src: url(https://static.klaviyo.com/onsite/hosted-fonts/Poppins/latin/poppins_latin_italic_400.woff2);
        font-weight: 400;
        font-style: italic;
        font-display: swap;
    }

    @font-face {
        font-family: 'Poppins-Klaviyo-Hosted';
        src: url(https://static.klaviyo.com/onsite/hosted-fonts/Poppins/latin/poppins_latin_italic_700.woff2);
        font-weight: 700;
        font-style: italic;
        font-display: swap;
    }

    @font-face {
        font-family: 'Poppins-Klaviyo-Hosted';
        src: url(https://static.klaviyo.com/onsite/hosted-fonts/Poppins/latin/poppins_latin_regular_400_2.woff2);
        font-weight: 400;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'Poppins-Klaviyo-Hosted';
        src: url(https://static.klaviyo.com/onsite/hosted-fonts/Poppins/latin/poppins_latin_regular_700.woff2);
        font-weight: 700;
        font-style: normal;
        font-display: swap;
    }
    </style>
    <script type="module" defer=""
        src="https://aanvio.com/cdn/shopifycloud/consent-tracking-api/v0.1/consent-tracking-api.js"></script>
    <script src="https://cdn-widgetsrepository.yotpo.com/widget-assets/widget-loyalty-floater/app.v0.40.0-7321.js"
        async=""></script>
    <style type="text/css">
    body {
        margin: 0;
    }

    #swell-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        opacity: .5;
        z-index: 2147483645 !important;
    }

    #swell-popup {
        display: none;
        position: fixed;
        width: 540px;
        height: 400px;
        font-family: sans-serif;
        font-size: 16px;
        border: 0;
        left: 50%;
        top: 50%;
        transform: translateX(-50%) translateY(-50%);
        background-color: #fff;
        box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.5);
        z-index: 2147483647 !important;
        color: black;
        max-width: inherit;
    }

    #swell-rewards-popup {
        display: none;
        position: fixed;
        width: 866px;
        height: 700px;
        font-family: "Open Sans";
        font-size: 16px;
        left: 50%;
        top: 50%;
        transform: translateX(-50%) translateY(-50%);
        background-color: #fff;
        box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.5);
        z-index: 2147483646 !important;
        opacity: 1
    }

    #swell-popup-error-container {
        font-weight: 700;
        border: 1px solid #000;
        background-color: rgba(245, 245, 245, 1);
        display: none;
        color: #a94442;
        z-index: 2147483647;
        padding: 15px;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        width: 90%;
        margin: 0 auto;
        text-align: center;
        border-radius: 5px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-top: 0
    }

    #swell-popup-items-container {
        position: relative
    }

    #swell-popup-close {
        position: absolute;
        width: 24px;
        height: 24px;
        top: 7px;
        right: 10px;
        text-align: center;
        border-radius: 50%;
        background: rgba(0, 0, 0, 0.3);
        cursor: pointer;
        z-index: 999999999999999;
    }

    #swell-popup-close-x {
        width: 100%;
        margin: auto;
        line-height: 20px !important;
        vertical-align: middle;
        color: rgba(255, 255, 255, 0.9);
        font-size: 22px;
        font-weight: 300;
        text-align: center
    }

    #swell-popup-close-x i {
        font-size: 16px;
        line-height: 22px;
    }

    .swell-popup-item-wrapper {
        line-height: normal;
        box-sizing: content-box !important;
        position: absolute
    }

    .swell-popup-item {
        line-height: normal;
        box-sizing: content-box !important;
        position: relative;
        width: 100% !important;
        height: 100% !important;
    }

    .swell-text-item {
        background-color: transparent
    }

    .swell-tab {
        position: fixed;
        z-index: 2147483644
    }

    .swell-loader,
    .swell-loader:before,
    .swell-loader:after {
        background: #fff;
        -webkit-animation: swell-loader-1 1s infinite ease-in-out;
        animation: swell-loader-1 1s infinite ease-in-out;
        width: 1em;
        height: 4em
    }

    .swell-loader:before,
    .swell-loader:after {
        position: absolute;
        top: 0;
        content: ''
    }

    .swell-loader:before {
        left: -1.5em;
        -webkit-animation-delay: -.32s;
        animation-delay: -.32s
    }

    .swell-loader {
        text-indent: -9999em;
        margin: 0 auto;
        position: relative;
        font-size: 5px;
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-animation-delay: -.16s;
        animation-delay: -.16s
    }

    .swell-loader:after {
        left: 1.5em
    }

    @-webkit-keyframes swell-loader-1 {

        0%,
        80%,
        100% {
            box-shadow: 0 0 #fff;
            height: 4em
        }

        40% {
            box-shadow: 0 -2em #fff;
            height: 5em
        }
    }

    @keyframes swell-loader-1 {

        0%,
        80%,
        100% {
            box-shadow: 0 0 #fff;
            height: 4em
        }

        40% {
            box-shadow: 0 -2em #fff;
            height: 5em
        }
    }

    .swell-standalone-modal .swell-modal .modal-body {
        background-color: white;
        color: black;
    }

    .swell-standalone-modal .swell-modal .modal-header {
        color: white;
    }

    .swell-standalone-modal .swell-modal .modal-title {
        text-align: center;
    }

    .swell-standalone-modal .swell-modal .modal-header .close {
        background-image: none;
        position: absolute;
        top: 0px;
        right: 10px;
        color: white;
        font-size: 45px;
        font-weight: 100;
        opacity: 1;
        cursor: pointer;
    }

    .swell-embedded-popup {
        position: relative;
        margin: 0 auto;
        max-width: inherit;
    }

    .swell-embedded-popup #swell-sidebar {
        position: static;
    }

    .swell-embedded-popup #swell-popup-close {
        display: none;
    }
    </style>
    <style type="text/css">
    /*!
   * jquery-confirm v3.3.2 (http://craftpip.github.io/jquery-confirm/)
   * Author: boniface pereira
   * Website: www.craftpip.com
   * Contact: hey@craftpip.com
   *
   * Copyright 2013-2017 jquery-confirm
   * Licensed under MIT (https://github.com/craftpip/jquery-confirm/blob/master/LICENSE)
   */
    @-webkit-keyframes jconfirm-spin {
        from {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes jconfirm-spin {
        from {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    body[class*=jconfirm-no-scroll-] {
        overflow: hidden !important;
    }

    .jconfirm {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 99999999;
        font-family: inherit;
        overflow: hidden;
    }

    .jconfirm .jconfirm-bg {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        -webkit-transition: opacity .4s;
        transition: opacity .4s;
    }

    .jconfirm .jconfirm-bg.jconfirm-bg-h {
        opacity: 0 !important;
    }

    .jconfirm .jconfirm-scrollpane {
        -webkit-perspective: 500px;
        perspective: 500px;
        -webkit-perspective-origin: center;
        perspective-origin: center;
        display: table;
        width: 100%;
        height: 100%;
    }

    .jconfirm .jconfirm-row {
        display: table-row;
        width: 100%;
    }

    .jconfirm .jconfirm-cell {
        display: table-cell;
        vertical-align: middle;
    }

    .jconfirm .jconfirm-holder {
        max-height: 100%;
        padding: 50px 0;
    }

    .jconfirm .jconfirm-box-container {
        -webkit-transition: -webkit-transform;
        transition: -webkit-transform;
        transition: transform;
        transition: transform, -webkit-transform;
        max-width: 95%;
        margin: auto;
    }

    @media screen and (min-width: 564px) {
        .jconfirm .jconfirm-box-container {
            max-width: 564px;
        }
    }

    .jconfirm .jconfirm-box-container.jconfirm-no-transition {
        -webkit-transition: none !important;
        transition: none !important;
    }

    .jconfirm .jconfirm-box {
        background: white;
        border-radius: 4px;
        position: relative;
        outline: none;
        padding: 15px 15px 0;
        overflow: hidden;
        margin-left: auto;
        margin-right: auto;
    }

    @-webkit-keyframes type-blue {

        1%,
        100% {
            border-color: #3498db;
        }

        50% {
            border-color: #5faee3;
        }
    }

    @keyframes type-blue {

        1%,
        100% {
            border-color: #3498db;
        }

        50% {
            border-color: #5faee3;
        }
    }

    @-webkit-keyframes type-green {

        1%,
        100% {
            border-color: #2ecc71;
        }

        50% {
            border-color: #54d98c;
        }
    }

    @keyframes type-green {

        1%,
        100% {
            border-color: #2ecc71;
        }

        50% {
            border-color: #54d98c;
        }
    }

    @-webkit-keyframes type-red {

        1%,
        100% {
            border-color: #e74c3c;
        }

        50% {
            border-color: #ed7669;
        }
    }

    @keyframes type-red {

        1%,
        100% {
            border-color: #e74c3c;
        }

        50% {
            border-color: #ed7669;
        }
    }

    @-webkit-keyframes type-orange {

        1%,
        100% {
            border-color: #f1c40f;
        }

        50% {
            border-color: #f4d03f;
        }
    }

    @keyframes type-orange {

        1%,
        100% {
            border-color: #f1c40f;
        }

        50% {
            border-color: #f4d03f;
        }
    }

    @-webkit-keyframes type-purple {

        1%,
        100% {
            border-color: #9b59b6;
        }

        50% {
            border-color: #b07cc6;
        }
    }

    @keyframes type-purple {

        1%,
        100% {
            border-color: #9b59b6;
        }

        50% {
            border-color: #b07cc6;
        }
    }

    @-webkit-keyframes type-dark {

        1%,
        100% {
            border-color: #34495e;
        }

        50% {
            border-color: #46627f;
        }
    }

    @keyframes type-dark {

        1%,
        100% {
            border-color: #34495e;
        }

        50% {
            border-color: #46627f;
        }
    }

    .jconfirm .jconfirm-box.jconfirm-type-animated {
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
    }

    .jconfirm .jconfirm-box.jconfirm-type-blue {
        border-top: solid 7px #3498db;
        -webkit-animation-name: type-blue;
        animation-name: type-blue;
    }

    .jconfirm .jconfirm-box.jconfirm-type-green {
        border-top: solid 7px #2ecc71;
        -webkit-animation-name: type-green;
        animation-name: type-green;
    }

    .jconfirm .jconfirm-box.jconfirm-type-red {
        border-top: solid 7px #e74c3c;
        -webkit-animation-name: type-red;
        animation-name: type-red;
    }

    .jconfirm .jconfirm-box.jconfirm-type-orange {
        border-top: solid 7px #f1c40f;
        -webkit-animation-name: type-orange;
        animation-name: type-orange;
    }

    .jconfirm .jconfirm-box.jconfirm-type-purple {
        border-top: solid 7px #9b59b6;
        -webkit-animation-name: type-purple;
        animation-name: type-purple;
    }

    .jconfirm .jconfirm-box.jconfirm-type-dark {
        border-top: solid 7px #34495e;
        -webkit-animation-name: type-dark;
        animation-name: type-dark;
    }

    .jconfirm .jconfirm-box.loading {
        height: 120px;
    }

    .jconfirm .jconfirm-box.loading:before {
        content: '';
        position: absolute;
        left: 0;
        background: white;
        right: 0;
        top: 0;
        bottom: 0;
        border-radius: 10px;
        z-index: 1;
    }

    .jconfirm .jconfirm-box.loading:after {
        opacity: 0.6;
        content: '';
        height: 30px;
        width: 30px;
        border: solid 3px transparent;
        position: absolute;
        left: 50%;
        margin-left: -15px;
        border-radius: 50%;
        -webkit-animation: jconfirm-spin 1s infinite linear;
        animation: jconfirm-spin 1s infinite linear;
        border-bottom-color: dodgerblue;
        top: 50%;
        margin-top: -15px;
        z-index: 2;
    }

    .jconfirm .jconfirm-box div.jconfirm-closeIcon {
        height: 20px;
        width: 20px;
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        opacity: .6;
        text-align: center;
        font-size: 27px !important;
        line-height: 14px !important;
        display: none;
        z-index: 1;
    }

    .jconfirm .jconfirm-box div.jconfirm-closeIcon:empty {
        display: none;
    }

    .jconfirm .jconfirm-box div.jconfirm-closeIcon .fa {
        font-size: 16px;
    }

    .jconfirm .jconfirm-box div.jconfirm-closeIcon .glyphicon {
        font-size: 16px;
    }

    .jconfirm .jconfirm-box div.jconfirm-closeIcon .zmdi {
        font-size: 16px;
    }

    .jconfirm .jconfirm-box div.jconfirm-closeIcon:hover {
        opacity: 1;
    }

    .jconfirm .jconfirm-box div.jconfirm-title-c {
        display: block;
        font-size: 22px;
        line-height: 20px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: default;
        padding-bottom: 15px;
    }

    .jconfirm .jconfirm-box div.jconfirm-title-c.jconfirm-hand {
        cursor: move;
    }

    .jconfirm .jconfirm-box div.jconfirm-title-c .jconfirm-icon-c {
        font-size: inherit;
        display: inline-block;
        vertical-align: middle;
    }

    .jconfirm .jconfirm-box div.jconfirm-title-c .jconfirm-icon-c i {
        vertical-align: middle;
    }

    .jconfirm .jconfirm-box div.jconfirm-title-c .jconfirm-icon-c:empty {
        display: none;
    }

    .jconfirm .jconfirm-box div.jconfirm-title-c .jconfirm-title {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        font-size: inherit;
        font-family: inherit;
        display: inline-block;
        vertical-align: middle;
    }

    .jconfirm .jconfirm-box div.jconfirm-title-c .jconfirm-title:empty {
        display: none;
    }

    .jconfirm .jconfirm-box div.jconfirm-content-pane {
        margin-bottom: 15px;
        height: auto;
        -webkit-transition: height 0.4s ease-in;
        transition: height 0.4s ease-in;
        display: inline-block;
        width: 100%;
        position: relative;
    }

    .jconfirm .jconfirm-box div.jconfirm-content-pane.no-scroll {
        overflow-y: hidden;
    }

    .jconfirm .jconfirm-box div.jconfirm-content-pane::-webkit-scrollbar {
        width: 3px;
    }

    .jconfirm .jconfirm-box div.jconfirm-content-pane::-webkit-scrollbar-track {
        background: rgba(0, 0, 0, 0.1);
    }

    .jconfirm .jconfirm-box div.jconfirm-content-pane::-webkit-scrollbar-thumb {
        background: #666;
        border-radius: 3px;
    }

    .jconfirm .jconfirm-box div.jconfirm-content-pane .jconfirm-content {
        overflow: auto;
    }

    .jconfirm .jconfirm-box div.jconfirm-content-pane .jconfirm-content img {
        max-width: 100%;
        height: auto;
    }

    .jconfirm .jconfirm-box div.jconfirm-content-pane .jconfirm-content:empty {
        display: none;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons {
        padding-bottom: 11px;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons>button {
        margin-bottom: 4px;
        margin-left: 2px;
        margin-right: 2px;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons button {
        display: inline-block;
        padding: 6px 12px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border-radius: 4px;
        min-height: 1em;
        -webkit-transition: opacity 0.1s ease, background-color 0.1s ease, color 0.1s ease, background 0.1s ease, -webkit-box-shadow 0.1s ease;
        transition: opacity 0.1s ease, background-color 0.1s ease, color 0.1s ease, background 0.1s ease, -webkit-box-shadow 0.1s ease;
        transition: opacity 0.1s ease, background-color 0.1s ease, color 0.1s ease, box-shadow 0.1s ease, background 0.1s ease;
        transition: opacity 0.1s ease, background-color 0.1s ease, color 0.1s ease, box-shadow 0.1s ease, background 0.1s ease, -webkit-box-shadow 0.1s ease;
        -webkit-tap-highlight-color: transparent;
        border: none;
        background-image: none;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons button.btn-blue {
        background-color: #3498db;
        color: #FFF;
        text-shadow: none;
        -webkit-transition: background .2s;
        transition: background .2s;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons button.btn-blue:hover {
        background-color: #2980b9;
        color: #FFF;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons button.btn-green {
        background-color: #2ecc71;
        color: #FFF;
        text-shadow: none;
        -webkit-transition: background .2s;
        transition: background .2s;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons button.btn-green:hover {
        background-color: #27ae60;
        color: #FFF;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons button.btn-red {
        background-color: #e74c3c;
        color: #FFF;
        text-shadow: none;
        -webkit-transition: background .2s;
        transition: background .2s;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons button.btn-red:hover {
        background-color: #c0392b;
        color: #FFF;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons button.btn-orange {
        background-color: #f1c40f;
        color: #FFF;
        text-shadow: none;
        -webkit-transition: background .2s;
        transition: background .2s;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons button.btn-orange:hover {
        background-color: #f39c12;
        color: #FFF;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons button.btn-default {
        background-color: #ecf0f1;
        color: #000;
        text-shadow: none;
        -webkit-transition: background .2s;
        transition: background .2s;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons button.btn-default:hover {
        background-color: #bdc3c7;
        color: #000;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons button.btn-purple {
        background-color: #9b59b6;
        color: #FFF;
        text-shadow: none;
        -webkit-transition: background .2s;
        transition: background .2s;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons button.btn-purple:hover {
        background-color: #8e44ad;
        color: #FFF;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons button.btn-dark {
        background-color: #34495e;
        color: #FFF;
        text-shadow: none;
        -webkit-transition: background .2s;
        transition: background .2s;
    }

    .jconfirm .jconfirm-box .jconfirm-buttons button.btn-dark:hover {
        background-color: #2c3e50;
        color: #FFF;
    }

    .jconfirm .jconfirm-box.jconfirm-type-red .jconfirm-title-c .jconfirm-icon-c {
        color: #e74c3c !important;
    }

    .jconfirm .jconfirm-box.jconfirm-type-blue .jconfirm-title-c .jconfirm-icon-c {
        color: #3498db !important;
    }

    .jconfirm .jconfirm-box.jconfirm-type-green .jconfirm-title-c .jconfirm-icon-c {
        color: #2ecc71 !important;
    }

    .jconfirm .jconfirm-box.jconfirm-type-purple .jconfirm-title-c .jconfirm-icon-c {
        color: #9b59b6 !important;
    }

    .jconfirm .jconfirm-box.jconfirm-type-orange .jconfirm-title-c .jconfirm-icon-c {
        color: #f1c40f !important;
    }

    .jconfirm .jconfirm-box.jconfirm-type-dark .jconfirm-title-c .jconfirm-icon-c {
        color: #34495e !important;
    }

    .jconfirm .jconfirm-clear {
        clear: both;
    }

    .jconfirm.jconfirm-rtl {
        direction: rtl;
    }

    .jconfirm.jconfirm-rtl div.jconfirm-closeIcon {
        left: 5px;
        right: auto;
    }

    .jconfirm.jconfirm-white .jconfirm-bg,
    .jconfirm.jconfirm-light .jconfirm-bg {
        background-color: #444;
        opacity: .2;
    }

    .jconfirm.jconfirm-white .jconfirm-box,
    .jconfirm.jconfirm-light .jconfirm-box {
        -webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }

    .jconfirm.jconfirm-white .jconfirm-box .jconfirm-title-c .jconfirm-icon-c,
    .jconfirm.jconfirm-light .jconfirm-box .jconfirm-title-c .jconfirm-icon-c {
        margin-right: 8px;
        margin-left: 0px;
    }

    .jconfirm.jconfirm-white .jconfirm-box .jconfirm-buttons,
    .jconfirm.jconfirm-light .jconfirm-box .jconfirm-buttons {
        float: right;
    }

    .jconfirm.jconfirm-white .jconfirm-box .jconfirm-buttons button,
    .jconfirm.jconfirm-light .jconfirm-box .jconfirm-buttons button {
        text-transform: uppercase;
        font-size: 14px;
        font-weight: bold;
        text-shadow: none;
    }

    .jconfirm.jconfirm-white .jconfirm-box .jconfirm-buttons button.btn-default,
    .jconfirm.jconfirm-light .jconfirm-box .jconfirm-buttons button.btn-default {
        -webkit-box-shadow: none;
        box-shadow: none;
        color: #333;
    }

    .jconfirm.jconfirm-white .jconfirm-box .jconfirm-buttons button.btn-default:hover,
    .jconfirm.jconfirm-light .jconfirm-box .jconfirm-buttons button.btn-default:hover {
        background: #ddd;
    }

    .jconfirm.jconfirm-white.jconfirm-rtl .jconfirm-title-c .jconfirm-icon-c,
    .jconfirm.jconfirm-light.jconfirm-rtl .jconfirm-title-c .jconfirm-icon-c {
        margin-left: 8px;
        margin-right: 0px;
    }

    .jconfirm.jconfirm-black .jconfirm-bg,
    .jconfirm.jconfirm-dark .jconfirm-bg {
        background-color: darkslategray;
        opacity: .4;
    }

    .jconfirm.jconfirm-black .jconfirm-box,
    .jconfirm.jconfirm-dark .jconfirm-box {
        -webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        background: #444;
        border-radius: 5px;
        color: white;
    }

    .jconfirm.jconfirm-black .jconfirm-box .jconfirm-title-c .jconfirm-icon-c,
    .jconfirm.jconfirm-dark .jconfirm-box .jconfirm-title-c .jconfirm-icon-c {
        margin-right: 8px;
        margin-left: 0px;
    }

    .jconfirm.jconfirm-black .jconfirm-box .jconfirm-buttons,
    .jconfirm.jconfirm-dark .jconfirm-box .jconfirm-buttons {
        float: right;
    }

    .jconfirm.jconfirm-black .jconfirm-box .jconfirm-buttons button,
    .jconfirm.jconfirm-dark .jconfirm-box .jconfirm-buttons button {
        border: none;
        background-image: none;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: bold;
        text-shadow: none;
        -webkit-transition: background .1s;
        transition: background .1s;
        color: white;
    }

    .jconfirm.jconfirm-black .jconfirm-box .jconfirm-buttons button.btn-default,
    .jconfirm.jconfirm-dark .jconfirm-box .jconfirm-buttons button.btn-default {
        -webkit-box-shadow: none;
        box-shadow: none;
        color: #fff;
        background: none;
    }

    .jconfirm.jconfirm-black .jconfirm-box .jconfirm-buttons button.btn-default:hover,
    .jconfirm.jconfirm-dark .jconfirm-box .jconfirm-buttons button.btn-default:hover {
        background: #666;
    }

    .jconfirm.jconfirm-black.jconfirm-rtl .jconfirm-title-c .jconfirm-icon-c,
    .jconfirm.jconfirm-dark.jconfirm-rtl .jconfirm-title-c .jconfirm-icon-c {
        margin-left: 8px;
        margin-right: 0px;
    }

    .jconfirm .jconfirm-box.hilight.jconfirm-hilight-shake {
        -webkit-animation: shake 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
        animation: shake 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .jconfirm .jconfirm-box.hilight.jconfirm-hilight-glow {
        -webkit-animation: glow 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
        animation: glow 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    @-webkit-keyframes shake {

        10%,
        90% {
            -webkit-transform: translate3d(-2px, 0, 0);
            transform: translate3d(-2px, 0, 0);
        }

        20%,
        80% {
            -webkit-transform: translate3d(4px, 0, 0);
            transform: translate3d(4px, 0, 0);
        }

        30%,
        50%,
        70% {
            -webkit-transform: translate3d(-8px, 0, 0);
            transform: translate3d(-8px, 0, 0);
        }

        40%,
        60% {
            -webkit-transform: translate3d(8px, 0, 0);
            transform: translate3d(8px, 0, 0);
        }
    }

    @keyframes shake {

        10%,
        90% {
            -webkit-transform: translate3d(-2px, 0, 0);
            transform: translate3d(-2px, 0, 0);
        }

        20%,
        80% {
            -webkit-transform: translate3d(4px, 0, 0);
            transform: translate3d(4px, 0, 0);
        }

        30%,
        50%,
        70% {
            -webkit-transform: translate3d(-8px, 0, 0);
            transform: translate3d(-8px, 0, 0);
        }

        40%,
        60% {
            -webkit-transform: translate3d(8px, 0, 0);
            transform: translate3d(8px, 0, 0);
        }
    }

    @-webkit-keyframes glow {

        0%,
        100% {
            -webkit-box-shadow: 0 0 0px red;
            box-shadow: 0 0 0px red;
        }

        50% {
            -webkit-box-shadow: 0 0 30px red;
            box-shadow: 0 0 30px red;
        }
    }

    @keyframes glow {

        0%,
        100% {
            -webkit-box-shadow: 0 0 0px red;
            box-shadow: 0 0 0px red;
        }

        50% {
            -webkit-box-shadow: 0 0 30px red;
            box-shadow: 0 0 30px red;
        }
    }

    /*Transition rules*/
    .jconfirm {
        -webkit-perspective: 400px;
        perspective: 400px;
    }

    .jconfirm .jconfirm-box {
        opacity: 1;
        -webkit-transition-property: all;
        transition-property: all;
    }

    .jconfirm .jconfirm-box.jconfirm-animation-top,
    .jconfirm .jconfirm-box.jconfirm-animation-left,
    .jconfirm .jconfirm-box.jconfirm-animation-right,
    .jconfirm .jconfirm-box.jconfirm-animation-bottom,
    .jconfirm .jconfirm-box.jconfirm-animation-opacity,
    .jconfirm .jconfirm-box.jconfirm-animation-zoom,
    .jconfirm .jconfirm-box.jconfirm-animation-scale,
    .jconfirm .jconfirm-box.jconfirm-animation-none,
    .jconfirm .jconfirm-box.jconfirm-animation-rotate,
    .jconfirm .jconfirm-box.jconfirm-animation-rotatex,
    .jconfirm .jconfirm-box.jconfirm-animation-rotatey,
    .jconfirm .jconfirm-box.jconfirm-animation-scaley,
    .jconfirm .jconfirm-box.jconfirm-animation-scalex {
        opacity: 0;
    }

    .jconfirm .jconfirm-box.jconfirm-animation-rotate {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .jconfirm .jconfirm-box.jconfirm-animation-rotatex {
        -webkit-transform: rotateX(90deg);
        transform: rotateX(90deg);
        -webkit-transform-origin: center;
        transform-origin: center;
    }

    .jconfirm .jconfirm-box.jconfirm-animation-rotatexr {
        -webkit-transform: rotateX(-90deg);
        transform: rotateX(-90deg);
        -webkit-transform-origin: center;
        transform-origin: center;
    }

    .jconfirm .jconfirm-box.jconfirm-animation-rotatey {
        -webkit-transform: rotatey(90deg);
        transform: rotatey(90deg);
        -webkit-transform-origin: center;
        transform-origin: center;
    }

    .jconfirm .jconfirm-box.jconfirm-animation-rotateyr {
        -webkit-transform: rotatey(-90deg);
        transform: rotatey(-90deg);
        -webkit-transform-origin: center;
        transform-origin: center;
    }

    .jconfirm .jconfirm-box.jconfirm-animation-scaley {
        -webkit-transform: scaley(1.5);
        transform: scaley(1.5);
        -webkit-transform-origin: center;
        transform-origin: center;
    }

    .jconfirm .jconfirm-box.jconfirm-animation-scalex {
        -webkit-transform: scalex(1.5);
        transform: scalex(1.5);
        -webkit-transform-origin: center;
        transform-origin: center;
    }

    .jconfirm .jconfirm-box.jconfirm-animation-top {
        -webkit-transform: translate(0px, -100px);
        transform: translate(0px, -100px);
    }

    .jconfirm .jconfirm-box.jconfirm-animation-left {
        -webkit-transform: translate(-100px, 0px);
        transform: translate(-100px, 0px);
    }

    .jconfirm .jconfirm-box.jconfirm-animation-right {
        -webkit-transform: translate(100px, 0px);
        transform: translate(100px, 0px);
    }

    .jconfirm .jconfirm-box.jconfirm-animation-bottom {
        -webkit-transform: translate(0px, 100px);
        transform: translate(0px, 100px);
    }

    .jconfirm .jconfirm-box.jconfirm-animation-zoom {
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
    }

    .jconfirm .jconfirm-box.jconfirm-animation-scale {
        -webkit-transform: scale(0.5);
        transform: scale(0.5);
    }

    .jconfirm .jconfirm-box.jconfirm-animation-none {
        visibility: hidden;
    }

    .jconfirm.jconfirm-supervan .jconfirm-bg {
        background-color: rgba(54, 70, 93, 0.95);
    }

    .jconfirm.jconfirm-supervan .jconfirm-box {
        background-color: transparent;
    }

    .jconfirm.jconfirm-supervan .jconfirm-box.jconfirm-type-blue {
        border: none;
    }

    .jconfirm.jconfirm-supervan .jconfirm-box.jconfirm-type-green {
        border: none;
    }

    .jconfirm.jconfirm-supervan .jconfirm-box.jconfirm-type-red {
        border: none;
    }

    .jconfirm.jconfirm-supervan .jconfirm-box.jconfirm-type-orange {
        border: none;
    }

    .jconfirm.jconfirm-supervan .jconfirm-box.jconfirm-type-purple {
        border: none;
    }

    .jconfirm.jconfirm-supervan .jconfirm-box.jconfirm-type-dark {
        border: none;
    }

    .jconfirm.jconfirm-supervan .jconfirm-box div.jconfirm-closeIcon {
        color: white;
    }

    .jconfirm.jconfirm-supervan .jconfirm-box div.jconfirm-title-c {
        text-align: center;
        color: white;
        font-size: 28px;
        font-weight: normal;
    }

    .jconfirm.jconfirm-supervan .jconfirm-box div.jconfirm-title-c>* {
        padding-bottom: 25px;
    }

    .jconfirm.jconfirm-supervan .jconfirm-box div.jconfirm-title-c .jconfirm-icon-c {
        margin-right: 8px;
        margin-left: 0px;
    }

    .jconfirm.jconfirm-supervan .jconfirm-box div.jconfirm-content-pane {
        margin-bottom: 25px;
    }

    .jconfirm.jconfirm-supervan .jconfirm-box div.jconfirm-content {
        text-align: center;
        color: white;
    }

    .jconfirm.jconfirm-supervan .jconfirm-box .jconfirm-buttons {
        text-align: center;
    }

    .jconfirm.jconfirm-supervan .jconfirm-box .jconfirm-buttons button {
        font-size: 16px;
        border-radius: 2px;
        background: #303f53;
        text-shadow: none;
        border: none;
        color: white;
        padding: 10px;
        min-width: 100px;
    }

    .jconfirm.jconfirm-supervan.jconfirm-rtl .jconfirm-box div.jconfirm-title-c .jconfirm-icon-c {
        margin-left: 8px;
        margin-right: 0px;
    }

    .jconfirm.jconfirm-material .jconfirm-bg {
        background-color: rgba(0, 0, 0, 0.67);
    }

    .jconfirm.jconfirm-material .jconfirm-box {
        background-color: white;
        -webkit-box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2), 0 13px 19px 2px rgba(0, 0, 0, 0.14), 0 5px 24px 4px rgba(0, 0, 0, 0.12);
        box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2), 0 13px 19px 2px rgba(0, 0, 0, 0.14), 0 5px 24px 4px rgba(0, 0, 0, 0.12);
        padding: 30px 25px 10px 25px;
    }

    .jconfirm.jconfirm-material .jconfirm-box .jconfirm-title-c .jconfirm-icon-c {
        margin-right: 8px;
        margin-left: 0px;
    }

    .jconfirm.jconfirm-material .jconfirm-box div.jconfirm-closeIcon {
        color: rgba(0, 0, 0, 0.87);
    }

    .jconfirm.jconfirm-material .jconfirm-box div.jconfirm-title-c {
        color: rgba(0, 0, 0, 0.87);
        font-size: 22px;
        font-weight: bold;
    }

    .jconfirm.jconfirm-material .jconfirm-box div.jconfirm-content {
        color: rgba(0, 0, 0, 0.87);
    }

    .jconfirm.jconfirm-material .jconfirm-box .jconfirm-buttons {
        text-align: right;
    }

    .jconfirm.jconfirm-material .jconfirm-box .jconfirm-buttons button {
        text-transform: uppercase;
        font-weight: 500;
    }

    .jconfirm.jconfirm-material.jconfirm-rtl .jconfirm-title-c .jconfirm-icon-c {
        margin-left: 8px;
        margin-right: 0px;
    }

    .jconfirm.jconfirm-bootstrap .jconfirm-bg {
        background-color: rgba(0, 0, 0, 0.21);
    }

    .jconfirm.jconfirm-bootstrap .jconfirm-box {
        background-color: white;
        -webkit-box-shadow: 0 3px 8px 0px rgba(0, 0, 0, 0.2);
        box-shadow: 0 3px 8px 0px rgba(0, 0, 0, 0.2);
        border: solid 1px rgba(0, 0, 0, 0.4);
        padding: 15px 0 0;
    }

    .jconfirm.jconfirm-bootstrap .jconfirm-box .jconfirm-title-c .jconfirm-icon-c {
        margin-right: 8px;
        margin-left: 0px;
    }

    .jconfirm.jconfirm-bootstrap .jconfirm-box div.jconfirm-closeIcon {
        color: rgba(0, 0, 0, 0.87);
    }

    .jconfirm.jconfirm-bootstrap .jconfirm-box div.jconfirm-title-c {
        color: rgba(0, 0, 0, 0.87);
        font-size: 22px;
        font-weight: bold;
        padding-left: 15px;
        padding-right: 15px;
    }

    .jconfirm.jconfirm-bootstrap .jconfirm-box div.jconfirm-content {
        color: rgba(0, 0, 0, 0.87);
        padding: 0px 15px;
    }

    .jconfirm.jconfirm-bootstrap .jconfirm-box .jconfirm-buttons {
        text-align: right;
        padding: 10px;
        margin: -5px 0 0px;
        border-top: solid 1px #ddd;
        overflow: hidden;
        border-radius: 0 0 4px 4px;
    }

    .jconfirm.jconfirm-bootstrap .jconfirm-box .jconfirm-buttons button {
        font-weight: 500;
    }

    .jconfirm.jconfirm-bootstrap.jconfirm-rtl .jconfirm-title-c .jconfirm-icon-c {
        margin-left: 8px;
        margin-right: 0px;
    }

    .jconfirm.jconfirm-modern .jconfirm-bg {
        background-color: slategray;
        opacity: .6;
    }

    .jconfirm.jconfirm-modern .jconfirm-box {
        background-color: white;
        -webkit-box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2), 0 13px 19px 2px rgba(0, 0, 0, 0.14), 0 5px 24px 4px rgba(0, 0, 0, 0.12);
        box-shadow: 0 7px 8px -4px rgba(0, 0, 0, 0.2), 0 13px 19px 2px rgba(0, 0, 0, 0.14), 0 5px 24px 4px rgba(0, 0, 0, 0.12);
        padding: 30px 30px 15px;
    }

    .jconfirm.jconfirm-modern .jconfirm-box div.jconfirm-closeIcon {
        color: rgba(0, 0, 0, 0.87);
        top: 15px;
        right: 15px;
    }

    .jconfirm.jconfirm-modern .jconfirm-box div.jconfirm-title-c {
        color: rgba(0, 0, 0, 0.87);
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 10px;
    }

    .jconfirm.jconfirm-modern .jconfirm-box div.jconfirm-title-c .jconfirm-icon-c {
        -webkit-transition: -webkit-transform .5s;
        transition: -webkit-transform .5s;
        transition: transform .5s;
        transition: transform .5s, -webkit-transform .5s;
        -webkit-transform: scale(0);
        transform: scale(0);
        display: block;
        margin-right: 0px;
        margin-left: 0px;
        margin-bottom: 10px;
        font-size: 69px;
        color: #aaa;
    }

    .jconfirm.jconfirm-modern .jconfirm-box div.jconfirm-content {
        text-align: center;
        font-size: 15px;
        color: #777;
        margin-bottom: 25px;
    }

    .jconfirm.jconfirm-modern .jconfirm-box .jconfirm-buttons {
        text-align: center;
    }

    .jconfirm.jconfirm-modern .jconfirm-box .jconfirm-buttons button {
        font-weight: bold;
        text-transform: uppercase;
        -webkit-transition: background .1s;
        transition: background .1s;
        padding: 10px 20px;
    }

    .jconfirm.jconfirm-modern .jconfirm-box .jconfirm-buttons button+button {
        margin-left: 4px;
    }

    .jconfirm.jconfirm-modern.jconfirm-open .jconfirm-box .jconfirm-title-c .jconfirm-icon-c {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    </style>
    <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
    <style type="text/css">
    .yotpo-widget-loyalty-floater-widget .yotpo-point-balance-text {
        display: inline
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-point-balance-text-part {
        cursor: inherit
    }
    </style>
    <style type="text/css">
    .yotpo-widget-loyalty-floater-widget .yotpo-banner-layout {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 50%;
        text-align: center
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-banner-layout,
    .yotpo-widget-loyalty-floater-widget .yotpo-banner-up-down-icon {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        cursor: pointer
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-banner-up-down-icon {
        margin-left: 7px;
        width: 10px;
        height: 5.61px
    }

    .yotpo-trasnform-180-degrees {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-banner-low {
        height: 40px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-banner-medium {
        height: 50px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-banner-high {
        height: 60px
    }
    </style>
    <style type="text/css">
    .yotpo-widget-loyalty-floater-widget .yotpo-action-button-widget {
        position: relative
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-action-button-widget .yotpo-default-cursor {
        cursor: default
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-action-button-widget .yotpo-pointer-cursor {
        cursor: pointer
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-action-button-widget .yotpo-button-style {
        line-height: normal;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-action-button-widget .yotpo-button-style:focus {
        outline: none
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-action-button-widget .yotpo-button-style:hover:not(:disabled) {
        opacity: .85
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-action-button-widget .yotpo-button-small-size {
        width: 35%
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-action-button-widget .yotpo-button-standard-size {
        width: 65%
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-action-button-widget .yotpo-button-large-size {
        width: 100%
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-action-button-widget.yotpo-rounded-btn-type {
        border-radius: 6px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-action-button-widget.yotpo-capsule-btn-type {
        border-radius: 83px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-action-button-widget .yotpo-filled-button {
        border: none
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-action-button-widget .yopto-widget-button-icon {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
    }
    </style>
    <style type="text/css">
    .yotpo-widget-loyalty-floater-widget .yotpo-widget-mini-spinner {
        position: relative;
        display: inline-block;
        width: 28px;
        height: 28px;
        border: 2px solid transparent;
        border-top-color: var(--spinner-color);
        border-radius: 50%;
        -webkit-animation: yotpo-widget-mini-spinner-spin .75s linear infinite;
        animation: yotpo-widget-mini-spinner-spin .75s linear infinite
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-widget-mini-spinner:after,
    .yotpo-widget-loyalty-floater-widget .yotpo-widget-mini-spinner:before {
        left: -2px;
        top: -2px;
        display: none;
        position: absolute;
        content: "";
        width: inherit;
        height: inherit;
        border: inherit;
        border-radius: inherit
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-widget-mini-spinner:before {
        display: inline-block;
        border-color: transparent;
        border-top-color: var(--spinner-color);
        -webkit-animation: yotpo-widget-mini-spinner-spin 1.5s ease infinite;
        animation: yotpo-widget-mini-spinner-spin 1.5s ease infinite
    }

    @-webkit-keyframes yotpo-widget-mini-spinner-spin {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        to {
            -webkit-transform: rotate(1turn);
            transform: rotate(1turn)
        }
    }

    @keyframes yotpo-widget-mini-spinner-spin {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        to {
            -webkit-transform: rotate(1turn);
            transform: rotate(1turn)
        }
    }
    </style>
    <style type="text/css">
    .yotpo-widget-loyalty-floater-widget .yotpo-redemption-option-item {
        border: 1px solid var(--border-color);
        border-radius: 6px;
        padding: 0 20px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-redemption-option-redeem-container {
        display: grid;
        grid-template-columns: auto auto 1fr;
        -webkit-column-gap: 6px;
        -moz-column-gap: 6px;
        column-gap: 6px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        height: 100%;
        width: 100%
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-redemption-option-reward {
        text-transform: uppercase
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-redemption-option-insufficient-points,
    .yotpo-widget-loyalty-floater-widget .yotpo-redemption-option-redeem {
        justify-self: end
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-redemption-option-confirmation-container {
        display: grid;
        grid-template-columns: 1fr auto 76px;
        -webkit-column-gap: 16px;
        -moz-column-gap: 16px;
        column-gap: 16px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        height: 100%;
        width: 100%
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-redemption-confirmation-text {
        justify-self: start
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-confirmation-yes-button {
        width: 74px;
        height: 37px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-mini-spinner {
        justify-self: center
    }
    </style>
    <style type="text/css">
    .yotpo-widget-loyalty-floater-widget .yotpo-redemption-options-list {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        gap: 14px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-mobile .yotpo-redemption-options-list {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-redemption-option-cursor-pointer {
        cursor: pointer
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-redemption-option {
        width: 354px;
        height: 67px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-mobile .yotpo-redemption-option {
        width: 100%
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-show-more-options {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-column-gap: 7px;
        -moz-column-gap: 7px;
        column-gap: 7px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        text-align: start
    }
    </style>
    <style type="text/css">
    .yotpo-widget-loyalty-floater-widget .yotpo-copy-icon {
        width: 22px;
        height: 22px
    }
    </style>
    <style type="text/css">
    .yotpo-widget-loyalty-floater-widget .yotpo-copy-code-button {
        height: 100%;
        text-transform: uppercase;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        cursor: pointer;
        padding: 0 14px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-copy-code-button.yotpo-rounded-btn-type {
        border-radius: 6px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-copy-code-button.yotpo-capsule-btn-type {
        border-radius: 83px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-copy-code-button.yotpo-filled-button {
        border: none
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-copy-code-button .yotpo-copy-code-text {
        width: calc(100% - 22px);
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-copy-code-button .yotpo-copied-text {
        margin-left: 8px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-copy-code-disabled {
        pointer-events: none
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-copy-code-tab-anchor:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 0
    }
    </style>
    <style type="text/css">
    .yotpo-widget-loyalty-floater-widget .yotpo-coupon-layout {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -ms-flex-line-pack: center;
        align-content: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-coupon-headline-text {
        margin-bottom: 14px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-copy-coupon-code-button {
        margin: auto auto 32px auto;
        width: 166px;
        height: 40px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-coupon-instructions-text {
        margin: 0 auto;
        max-width: 267px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-mobile .yotpo-coupon-instructions-text {
        max-width: 281px
    }
    </style>
    <style type="text/css">
    .yotpo-widgets-action-button[data-v-ecede0fe] {
        box-sizing: border-box;
        cursor: pointer;
        font-size: var(--font-size);
        font-weight: var(--font-weight);
        font-family: var(--font-family);
        display: grid;
        align-items: center
    }

    .yotpo-widgets-action-button.yotpo-button-with-padding[data-v-ecede0fe] {
        padding: 0 20px
    }

    .yotpo-widgets-action-button.yotpo-with-justify-items[data-v-ecede0fe] {
        justify-items: center
    }

    .yotpo-widgets-action-button.yotpo-button-with-width-limits[data-v-ecede0fe] {
        min-width: 100px;
        max-width: 180px
    }

    .yotpo-widgets-action-button[data-v-ecede0fe]:not(.yotpo-button-loading) {
        transition: .3s
    }

    .yotpo-widgets-action-button.yotpo-small-button[data-v-ecede0fe] {
        height: 26px
    }

    .yotpo-widgets-action-button.yotpo-medium-button[data-v-ecede0fe] {
        height: 34px
    }

    .yotpo-widgets-action-button.yotpo-large-button[data-v-ecede0fe] {
        height: 40px
    }

    .yotpo-widgets-action-button[data-v-ecede0fe]:focus {
        box-shadow: 0 0 3px 3px #76bffd
    }

    .yotpo-widgets-action-button[data-v-ecede0fe]:disabled {
        cursor: not-allowed
    }

    .yotpo-widgets-action-button.yotpo-filled-button[data-v-ecede0fe] {
        background: var(--color);
        color: var(--text-color);
        border: 1px solid var(--color)
    }

    .yotpo-widgets-action-button.yotpo-filled-button[data-v-ecede0fe]:hover:not(:disabled):not(.yotpo-button-loading) {
        background: none;
        color: var(--color)
    }

    .yotpo-widgets-action-button.yotpo-filled-button[data-v-ecede0fe]:disabled {
        background: #929292;
        border: 1px solid #929292;
        color: #fff
    }

    .yotpo-widgets-action-button.yotpo-outlined-button[data-v-ecede0fe] {
        background: none;
        color: var(--text-color);
        border: 1px solid var(--color)
    }

    .yotpo-widgets-action-button.yotpo-outlined-button[data-v-ecede0fe]:hover:not(:disabled):not(.yotpo-button-loading) {
        background-color: color-mix(in srgb, var(--color) 30%, transparent)
    }

    .yotpo-widgets-action-button.yotpo-outlined-button[data-v-ecede0fe]:disabled {
        background: none;
        border: 1px solid #929292;
        color: #929292
    }

    .yotpo-widgets-action-button.yotpo-rounded-btn-type[data-v-ecede0fe] {
        border-radius: 4px
    }

    .yotpo-widgets-action-button.yotpo-capsule-btn-type[data-v-ecede0fe] {
        border-radius: 32.6px
    }

    .yotpo-widgets-action-button.yotpo-block-button[data-v-ecede0fe] {
        width: 100%;
        max-width: none
    }

    .yotpo-widgets-action-button .yotpo-button-label[data-v-ecede0fe] {
        grid-area: 1/1/2/2
    }

    .yotpo-widgets-action-button.yotpo-button-loading .yotpo-button-label[data-v-ecede0fe] {
        visibility: hidden
    }

    .yotpo-widgets-action-button.yotpo-button-loading[data-v-ecede0fe] {
        cursor: wait
    }

    .yotpo-widgets-action-button .yotpo-button-loader[data-v-ecede0fe] {
        grid-area: 1/1/2/2;
        display: inline-block;
        width: 14px;
        height: 14px;
        border: 2px solid color-mix(in srgb, var(--text-color) 30%, transparent);
        border-radius: 50%;
        border-top-color: var(--text-color);
        animation: yotpo-button-loader-spin-data-v-ecede0fe 1s ease-in-out infinite
    }

    .yotpo-widgets-action-button.yotpo-small-button .yotpo-button-loader[data-v-ecede0fe] {
        width: 12px;
        height: 12px
    }

    @keyframes yotpo-button-loader-spin-data-v-ecede0fe {
        to {
            transform: rotate(1turn)
        }
    }
    </style>
    <style type="text/css">
    .yotpo-custom-checkbox[data-v-0a00a258] {
        display: flex;
        align-items: center;
        cursor: pointer;
        font-size: 16px
    }

    .yotpo-custom-checkbox.text-only[data-v-0a00a258] {
        cursor: default
    }

    input[type=checkbox][data-v-0a00a258] {
        display: none
    }

    .yotpo-custom-checkbox.text-only label[data-v-0a00a258] {
        cursor: default
    }

    label[data-v-0a00a258] {
        cursor: pointer;
        text-align: left;
        color: var(--checkbox-color);
        font-size: var(--checkbox-font-size);
        font-style: var(--checkbox-font-style);
        font-weight: var(--checkbox-font-weight);
        font-family: var(--checkbox-font-family)
    }

    .checkmark[data-v-0a00a258] {
        min-width: var(--checkbox-size);
        min-height: var(--checkbox-size);
        background-color: #fff;
        border: 1px solid #000;
        border-radius: 4px;
        margin-right: var(--checkbox-gap);
        position: relative;
        transition: background-color .3s;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .check-icon[data-v-0a00a258] {
        fill: #fff;
        display: none
    }

    input[type=checkbox]:checked+.checkmark[data-v-0a00a258] {
        background-color: #000
    }

    input[type=checkbox]:checked+.checkmark .check-icon[data-v-0a00a258] {
        display: block
    }
    </style>
    <style type="text/css">
    .yotpo-logged-in-layout.yotpo-logged-in-layout-non-member {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        height: 100%;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .yotpo-logged-in-layout.yotpo-logged-in-layout-non-member,
    .yotpo-logged-in-layout.yotpo-logged-in-layout-non-member>div {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .yotpo-logged-in-layout.yotpo-logged-in-layout-non-member>div {
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-mobile .yotpo-logged-in-layout.yotpo-logged-in-layout-non-member>div {
        text-align: left
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-sign-up-button-non-member-button-wrapper {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        margin: 23px 0 31px 0;
        width: 364px;
        max-width: 100%
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-sign-up-button-non-member-button-wrapper.no-disclaimer {
        margin: 59px 0 31px 0
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-mobile .yotpo-drawer-sign-up-button-non-member-button-wrapper {
        margin: 9px 0 0 0
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-mobile .yotpo-drawer-sign-up-button-non-member-button-wrapper.no-disclaimer {
        margin: 11px 0 0 0
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-sign-up-button-non-member {
        height: 66px !important;
        max-width: 354px !important;
        width: 100% !important;
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-sign-up-button-non-member:disabled {
        border-color: var(--borderColor) !important
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-mobile .yotpo-drawer-sign-up-button-non-member {
        max-width: 354px !important;
        width: 100% !important;
        text-wrap: nowrap
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-sign-up-button-non-member .yotpo-button-label {
        width: 100%
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-sign-up-button-non-member .button-inner-wrapper {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-sign-up-button-non-member .button-inner-wrapper .button-text-wrapper {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-customer-with-redemption-options {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        grid-template-rows: repeat(3, auto);
        row-gap: 12px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-checkbox-wrapper {
        padding: 11px 0
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-non-member-disclaimer-with-checkbox-wrapper {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        gap: 6px;
        -webkit-box-align: end;
        -ms-flex-align: end;
        align-items: flex-end
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-mobile .yotpo-non-member-disclaimer-with-checkbox-wrapper.no-checkbox {
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        gap: 0
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-non-member-disclaimer-with-checkbox-wrapper input:before {
        border-radius: 2px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-non-member-disclaimer-text a {
        color: inherit
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-non-member-disclaimer-text .no-checkbox {
        text-align: start
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-logged-in-layout .yotpo-drawer-sign-up-icon {
        margin-right: 6px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-mobile .yotpo-customer-with-redemption-options {
        grid-template-columns: auto 1fr auto
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-customer-details-container {
        justify-self: start;
        grid-column: 2;
        width: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-customer-details {
        text-align: start
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-missing-points-desktop {
        -ms-flex-item-align: end;
        align-self: flex-end
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-redemption-options-container {
        grid-row: 2;
        grid-column: 2
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-missing-points-mobile {
        grid-row: 3;
        grid-column: 2
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-coupon-back-icon {
        cursor: pointer;
        position: absolute;
        height: 19px;
        width: 26px;
        left: 25px;
        top: 25px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-non-member-wrapper {
        max-width: 100%
    }
    </style>
    <style type="text/css">
    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-layout {
        -webkit-box-shadow: 0 -6px 18px rgba(0, 0, 0, .12);
        box-shadow: 0 -6px 18px rgba(0, 0, 0, .12);
        border-radius: 14px 14px 0 0;
        margin: 0;
        text-align: center;
        width: 100%;
        overflow: hidden;
        height: 209px;
        position: relative
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-header .yotpo-drawer-layout {
        border-radius: 0 0 14px 14px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-mobile .yotpo-drawer-layout {
        position: absolute;
        display: block;
        -webkit-animation-duration: .5s;
        animation-duration: .5s;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
        height: auto
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-read-only .yotpo-drawer-layout {
        -webkit-animation-duration: 0s;
        animation-duration: 0s
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-header .yotpo-drawer-layout {
        -webkit-box-shadow: 0 0 0 transparent, 0 6px 7px 0 rgba(0, 0, 0, .12);
        box-shadow: 0 0 0 transparent, 0 6px 7px 0 rgba(0, 0, 0, .12)
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-mobile .yotpo-drawer-layout {
        -webkit-animation-name: yotpo-widget-open-drawer-top;
        animation-name: yotpo-widget-open-drawer-top;
        border-radius: 8px 8px 0 0;
        border-top: 8px solid var(--drawerColor)
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-mobile.yotpo-is-header .yotpo-drawer-layout {
        -webkit-animation: none;
        animation: none;
        border-radius: 0 0 8px 8px;
        border-top: none;
        border-bottom: 8px solid var(--drawerColor)
    }

    @-webkit-keyframes yotpo-widget-open-drawer-top {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }

        to {
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%)
        }
    }

    @keyframes yotpo-widget-open-drawer-top {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }

        to {
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%)
        }
    }

    @-webkit-keyframes yotpo-widget-open-drawer-bottom {
        0% {
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%)
        }

        to {
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }
    }

    @keyframes yotpo-widget-open-drawer-bottom {
        0% {
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%)
        }

        to {
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-layout .yotpo-close-icon {
        cursor: pointer;
        position: absolute;
        right: 30px;
        top: 30px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-mobile .yotpo-drawer-layout .yotpo-close-icon {
        right: 25px;
        top: 17px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-logged-out-headline-text {
        padding: 0 20px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-account-connect .yotpo-account-connect-link {
        padding: 10px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-container {
        padding: 27px 30px 27px 30px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-mobile .yotpo-drawer-container {
        padding: 17px 30px 24px 30px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-mobile .yotpo-drawer-container.yotpo-logged-in-layout-non-member-wrapper {
        min-height: var(--container-min-height);
        height: var(--container-min-height);
        padding: 17px 30px 30px 30px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-sign-up-item {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 354px;
        height: 66px;
        margin: 24px auto 20px;
        border: 1px solid var(--border-color);
        border-radius: 6px;
        cursor: pointer
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-is-mobile .yotpo-drawer-sign-up-item {
        width: 100%;
        max-width: 354px;
        margin: 20px auto 25px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-sign-up-text {
        margin-left: 20px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-sign-up-icon {
        margin-right: 26px
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-sign-in {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        height: 18px;
        margin: 8px auto
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-drawer-sign-in-link {
        padding-left: 8px;
        text-decoration: underline;
        cursor: pointer
    }

    .yotpo-drawer-sign-up-titles {
        text-align: left;
        margin-left: 20px
    }
    </style>
    <style type="text/css">
    .yotpo-widget-loyalty-floater-widget .yotpo-floater-widget-layout {
        z-index: 10000;
        width: 100%;
        bottom: 0
    }

    .yotpo-widget-loyalty-floater-widget .yotpo-floater-widget-layout.yotpo-is-header {
        top: 0;
        bottom: auto
    }
    </style>
    <style type="text/css">
    .yotpo-widget-loyalty-floater-widget {
        font-family: NunitoSans, Avenir, Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #373330
    }

    .yotpo-widget-clear,
    .yotpo-widget-clear button,
    .yotpo-widget-clear form input,
    .yotpo-widget-clear span {
        -webkit-animation: none;
        animation: none;
        -webkit-animation-delay: 0;
        animation-delay: 0;
        -webkit-animation-direction: normal;
        animation-direction: normal;
        -webkit-animation-duration: 0;
        animation-duration: 0;
        -webkit-animation-fill-mode: none;
        animation-fill-mode: none;
        -webkit-animation-iteration-count: 1;
        animation-iteration-count: 1;
        -webkit-animation-name: none;
        animation-name: none;
        -webkit-animation-play-state: running;
        animation-play-state: running;
        -webkit-animation-timing-function: ease;
        animation-timing-function: ease;
        -webkit-backface-visibility: visible;
        backface-visibility: visible;
        background: 0;
        background-attachment: scroll;
        background-clip: border-box;
        background-color: transparent;
        background-image: none;
        background-origin: padding-box;
        background-position: 0 0;
        background-position-x: 0;
        background-position-y: 0;
        background-repeat: repeat;
        background-size: auto auto;
        border: 0;
        border-style: none;
        border-width: medium;
        border-color: inherit;
        border-bottom: 0;
        border-bottom-color: inherit;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        border-bottom-style: none;
        border-bottom-width: medium;
        border-collapse: separate;
        -o-border-image: none;
        border-image: none;
        border-left: 0;
        border-left-color: inherit;
        border-left-style: none;
        border-left-width: medium;
        border-radius: 0;
        border-right: 0;
        border-right-color: inherit;
        border-right-style: none;
        border-right-width: medium;
        border-spacing: 0;
        border-top: 0;
        border-top-color: inherit;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-top-style: none;
        border-top-width: medium;
        bottom: auto;
        -webkit-box-shadow: none;
        box-shadow: none;
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        caption-side: top;
        clear: none;
        clip: auto;
        color: inherit;
        -webkit-columns: auto;
        -moz-columns: auto;
        columns: auto;
        -webkit-column-count: auto;
        -moz-column-count: auto;
        column-count: auto;
        -webkit-column-fill: balance;
        -moz-column-fill: balance;
        column-fill: balance;
        -webkit-column-gap: normal;
        -moz-column-gap: normal;
        column-gap: normal;
        -webkit-column-rule: medium none currentColor;
        -moz-column-rule: medium none currentColor;
        column-rule: medium none currentColor;
        -webkit-column-rule-color: currentColor;
        -moz-column-rule-color: currentColor;
        column-rule-color: currentColor;
        -webkit-column-rule-style: none;
        -moz-column-rule-style: none;
        column-rule-style: none;
        -webkit-column-rule-width: none;
        -moz-column-rule-width: none;
        column-rule-width: none;
        -webkit-column-span: 1;
        -moz-column-span: 1;
        column-span: 1;
        -webkit-column-width: auto;
        -moz-column-width: auto;
        column-width: auto;
        content: normal;
        counter-increment: none;
        counter-reset: none;
        cursor: auto;
        direction: ltr;
        display: inline;
        empty-cells: show;
        float: none;
        font: normal;
        font-family: inherit;
        font-size: medium;
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        height: auto;
        -ms-hyphens: none;
        hyphens: none;
        left: auto;
        letter-spacing: normal;
        line-height: normal;
        list-style: none;
        list-style-image: none;
        list-style-position: outside;
        list-style-type: disc;
        margin: 0;
        margin-bottom: 0;
        margin-left: 0;
        margin-right: 0;
        margin-top: 0;
        max-height: none;
        max-width: none;
        min-height: 0;
        min-width: 0;
        opacity: 1;
        orphans: 0;
        outline: 0;
        outline-color: invert;
        outline-style: none;
        outline-width: medium;
        overflow: visible;
        overflow-x: visible;
        overflow-y: visible;
        padding: 0;
        padding-bottom: 0;
        padding-left: 0;
        padding-right: 0;
        padding-top: 0;
        page-break-after: auto;
        page-break-before: auto;
        page-break-inside: auto;
        -webkit-perspective: none;
        perspective: none;
        -webkit-perspective-origin: 50% 50%;
        perspective-origin: 50% 50%;
        position: static;
        right: auto;
        -moz-tab-size: 8;
        -o-tab-size: 8;
        tab-size: 8;
        table-layout: auto;
        text-align: inherit;
        -moz-text-align-last: auto;
        text-align-last: auto;
        text-decoration: none;
        -webkit-text-decoration-color: inherit;
        text-decoration-color: inherit;
        -webkit-text-decoration-line: none;
        text-decoration-line: none;
        -webkit-text-decoration-style: solid;
        text-decoration-style: solid;
        text-indent: 0;
        text-shadow: none;
        text-transform: none;
        top: auto;
        -webkit-transform: none;
        transform: none;
        -webkit-transform-style: flat;
        transform-style: flat;
        -webkit-transition: none;
        transition: none;
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
        -webkit-transition-duration: 0s;
        transition-duration: 0s;
        -webkit-transition-property: none;
        transition-property: none;
        -webkit-transition-timing-function: ease;
        transition-timing-function: ease;
        unicode-bidi: normal;
        vertical-align: baseline;
        visibility: visible;
        white-space: normal;
        word-break: normal;
        widows: 0;
        width: auto;
        word-spacing: normal;
        z-index: auto
    }
    </style>
    <link href="//fonts.googleapis.com/css?family=Open Sans:300,400,700,bold,normal" type="text/css" rel="stylesheet">
    <style type="text/css">
    #swell-bootstrap .rewards-templete h1,
    #swell-bootstrap .rewards-templete h2,
    #swell-bootstrap .rewards-templete h3,
    #swell-bootstrap .rewards-templete h4,
    #swell-bootstrap .rewards-templete h5,
    #swell-bootstrap .rewards-templete h6 {
        padding: 0px !important;
        font-style: normal;
    }
    </style>
    <link rel="stylesheet" type="text/css" href="https://static.klaviyo.com/onsite/js/532.2b466375368d63ab1cb6.css"
        crossorigin="anonymous">
    <style>
    .clockify-integration-popup {
        background: #eff4f7;
        box-shadow: rgba(0, 0, 0, .12) 0px 1px 3px, rgba(0, 0, 0, .24) 0px 1px 2px;
        width: 350px;
        position: fixed;
        top: 3vh;
        right: 3vw;
        max-height: 90vh;
        overflow-y: auto;
        z-index: 2147483647 !important;
        color: #333;
        font-size: 14px
    }

    .clockify-integration-popup *::selection {
        background: highlight;
        color: highlighttext
    }

    .clockify-integration-popup img,
    .clockify-integration-popup svg {
        vertical-align: inherit
    }

    .clockify-integration-popup input:not([type=image i]) {
        box-sizing: border-box
    }

    .clockify-integration-popup input,
    .clockify-integration-popup textarea {
        box-shadow: none
    }

    .clockify-integration-popup label {
        display: inline-block !important;
        font-weight: normal
    }

    .clockify-integration-popup span {
        float: none
    }

    .clockify-integration-popup-close-icon {
        width: 18px;
        height: 18px;
        cursor: pointer;
        position: absolute;
        top: 16px;
        right: 20px
    }

    .clockify-integration-popup-header {
        height: 20px;
        width: fit-content
    }

    .clockify-integration-popup .toaster__container {
        position: absolute !important
    }

    .clockify-integration-popup .projects-list {
        display: block
    }

    .clockify-integration-popup .ant-switch {
        min-height: auto
    }

    #clockifyButton,
    #clockifySmallButton {
        font-size: 14px;
        cursor: pointer
    }

    #clockifyButton img,
    #clockifyButton svg,
    #clockifySmallButton img,
    #clockifySmallButton svg {
        vertical-align: inherit
    }

    #clockifyButton {
        display: flex !important;
        align-items: center !important
    }

    #clockifyButton>div {
        display: flex !important;
        align-items: center !important;
        justify-content: center
    }

    #clockifyButton>div>span {
        margin-left: 5px
    }

    .clockify-button-active {
        color: #03a9f4
    }

    .clockify-button-inactive {
        color: #444
    }

    .clockify-button-active-span,
    .clockify-button-inactive-span {
        margin-left: 5px;
        float: none;
        position: relative
    }

    .clockify-input {
        border: 1px solid #c6d2d9;
        border-radius: 2px;
        width: 136px;
        padding-left: 4px;
        height: 30px;
        font-size: 14px
    }

    .clockify-input:focus,
    .clockify-input:hover {
        outline: none;
        box-shadow: 0 0 4px rgba(0, 0, 0, .05);
        border: 1px solid #03a9f4;
        background-color: #fff
    }

    .clockify-input.clockify-input-default {
        border-color: #c6d2d9;
        color: #333;
        background-color: #fff
    }

    .clockify-input.clockify-input-success {
        border-color: #cde9ce;
        color: #285b2a;
        background-color: #dbefdc
    }

    .clockify-input.clockify-input-error {
        border-color: #fccac7;
        color: #7f231c;
        background-color: #fdd9d7
    }

    .clockify-manual-entry-header-text {
        margin-left: 20px
    }

    .clockify-trello-card .clockifyButton {
        visibility: hidden
    }

    .clockify-trello-card:hover .clockifyButton {
        visibility: visible
    }

    .clockify-trello-card:not(:hover) .clockifyButton {
        visibility: hidden
    }

    .clockify-trello-card:not(:hover) .clockifyButton.active {
        visibility: visible
    }

    .clockify-trello-card:not(:hover) .clockifyButton:not(.active) {
        visibility: hidden
    }

    .clockify-copy-as-entry-container {
        display: flex;
        align-items: center;
        gap: 3px;
        cursor: pointer;
        width: fit-content;
        color: #444
    }

    .clockify-integration-popup {
        @import'~@fontsource/roboto/400.css';
        @import'~@fontsource/roboto/700.css'
    }

    .clockify-integration-popup .ant-switch {
        margin: 0;
        padding: 0;
        color: rgba(0, 0, 0, 0.85);
        font-size: 14px;
        font-variant: tabular-nums;
        line-height: 1.5715;
        list-style: none;
        font-feature-settings: "tnum";
        position: relative;
        display: inline-block;
        box-sizing: border-box;
        min-width: 44px;
        height: 22px;
        line-height: 22px;
        vertical-align: middle;
        background-color: rgba(0, 0, 0, 0.25);
        border: 0;
        border-radius: 100px;
        cursor: pointer;
        transition: all .2s;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .clockify-integration-popup .ant-switch:focus {
        outline: 0;
        box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.1)
    }

    .clockify-integration-popup .ant-switch-checked:focus {
        box-shadow: 0 0 0 2px #e6f7ff
    }

    .clockify-integration-popup .ant-switch:focus:hover {
        box-shadow: none
    }

    .clockify-integration-popup .ant-switch-checked {
        background-color: #1890ff
    }

    .clockify-integration-popup .ant-switch-loading,
    .clockify-integration-popup .ant-switch-disabled {
        cursor: not-allowed;
        opacity: .4
    }

    .clockify-integration-popup .ant-switch-loading *,
    .clockify-integration-popup .ant-switch-disabled * {
        box-shadow: none;
        cursor: not-allowed
    }

    .clockify-integration-popup .ant-switch-inner {
        display: block;
        margin: 0 7px 0 25px;
        color: #fff;
        font-size: 12px;
        transition: margin .2s
    }

    .clockify-integration-popup .ant-switch-checked .ant-switch-inner {
        margin: 0 25px 0 7px
    }

    .clockify-integration-popup .ant-switch-handle {
        position: absolute;
        top: 2px;
        left: 2px;
        width: 18px;
        height: 18px;
        transition: all .2s ease-in-out
    }

    .clockify-integration-popup .ant-switch-handle::before {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: #fff;
        border-radius: 9px;
        box-shadow: 0 2px 4px 0 rgba(0, 35, 11, 0.2);
        transition: all .2s ease-in-out;
        content: ""
    }

    .clockify-integration-popup .ant-switch-checked .ant-switch-handle {
        left: calc(100% - 18px - 2px)
    }

    .clockify-integration-popup .ant-switch:not(.ant-switch-disabled):active .ant-switch-handle::before {
        right: -30%;
        left: 0
    }

    .clockify-integration-popup .ant-switch:not(.ant-switch-disabled):active.ant-switch-checked .ant-switch-handle::before {
        right: 0;
        left: -30%
    }

    .clockify-integration-popup .ant-switch-loading-icon.anticon {
        position: relative;
        top: 2px;
        color: rgba(0, 0, 0, 0.65);
        vertical-align: top
    }

    .clockify-integration-popup .ant-switch-checked .ant-switch-loading-icon {
        color: #1890ff
    }

    .clockify-integration-popup .ant-switch-small {
        min-width: 28px;
        height: 16px;
        line-height: 16px
    }

    .clockify-integration-popup .ant-switch-small .ant-switch-inner {
        margin: 0 5px 0 18px;
        font-size: 12px
    }

    .clockify-integration-popup .ant-switch-small .ant-switch-handle {
        width: 12px;
        height: 12px
    }

    .clockify-integration-popup .ant-switch-small .ant-switch-loading-icon {
        top: 1.5px;
        font-size: 9px
    }

    .clockify-integration-popup .ant-switch-small.ant-switch-checked .ant-switch-inner {
        margin: 0 18px 0 5px
    }

    .clockify-integration-popup .ant-switch-small.ant-switch-checked .ant-switch-handle {
        left: calc(100% - 12px - 2px)
    }

    .clockify-integration-popup .ant-switch-rtl {
        direction: rtl
    }

    .clockify-integration-popup .ant-switch-rtl .ant-switch-inner {
        margin: 0 25px 0 7px
    }

    .clockify-integration-popup .ant-switch-rtl .ant-switch-handle {
        right: 2px;
        left: auto
    }

    .clockify-integration-popup .ant-switch-rtl:not(.ant-switch-rtl-disabled):active .ant-switch-handle::before {
        right: 0;
        left: -30%
    }

    .clockify-integration-popup .ant-switch-rtl:not(.ant-switch-rtl-disabled):active.ant-switch-checked .ant-switch-handle::before {
        right: -30%;
        left: 0
    }

    .clockify-integration-popup .ant-switch-rtl.ant-switch-checked .ant-switch-inner {
        margin: 0 7px 0 25px
    }

    .clockify-integration-popup .ant-switch-rtl.ant-switch-checked .ant-switch-handle {
        right: calc(100% - 18px - 2px)
    }

    .clockify-integration-popup .ant-switch-rtl.ant-switch-small.ant-switch-checked .ant-switch-handle {
        right: calc(100% - 12px - 2px)
    }

    .clockify-integration-popup .start-timer {
        position: relative;
        display: flex;
        justify-content: space-between;
        height: 50px;
        margin: 10px 20px;
        background: #fff;
        border: 1px solid #c6d2d9;
        border-radius: 2px
    }

    .clockify-integration-popup .start-timer_button-red {
        width: 110px;
        height: 40px;
        margin: 5px;
        border: none;
        border-radius: 2px;
        background: #f44336;
        color: #eff4f7;
        cursor: pointer
    }

    .clockify-integration-popup .start-timer_button-red:hover .button_timer {
        display: none
    }

    .clockify-integration-popup .start-timer_button-red:hover .button_stop {
        display: block
    }

    .clockify-integration-popup .button_stop {
        display: none
    }

    .clockify-integration-popup .start-timer_button-start {
        width: 110px;
        height: 40px;
        margin: 5px;
        border: none;
        border-radius: 2px;
        background: #03a9f4;
        color: #eff4f7;
        cursor: pointer
    }

    .clockify-integration-popup .start-timer_button-start:hover {
        background: #0091ea
    }

    .clockify-integration-popup .start-timer_description-input {
        height: 95%;
        width: 100%;
        padding-left: 10px;
        border: 0;
        outline: none
    }

    .clockify-integration-popup .start-timer_description-input::-ms-clear {
        display: none
    }

    .clockify-integration-popup .start-timer_placeholder {
        position: absolute;
        pointer-events: none;
        top: 0;
        bottom: 0;
        height: fit-content;
        font-size: 14px;
        left: 10px;
        margin: auto;
        color: #777
    }

    .clockify-integration-popup .start-timer_description {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 10px;
        font-size: 14px;
        cursor: pointer;
        overflow: hidden;
        white-space: nowrap;
        width: 57%;
        text-overflow: ellipsis
    }

    .clockify-integration-popup .start-timer_description_grey {
        position: absolute;
        width: 47%;
        margin-top: 17px;
        margin-bottom: 17px;
        margin-left: 17px;
        font-size: 14px;
        color: #999;
        cursor: pointer
    }

    .clockify-integration-popup .start-timer-description {
        flex: 1
    }

    .clockify-integration-popup .start-timer-description .react-autocomplete {
        height: 100%;
        width: 100%
    }

    .clockify-integration-popup .react-autocomplete {
        display: inline-block;
        position: relative;
        width: 100%
    }

    .clockify-integration-popup .react-autocomplete-menu {
        box-sizing: border-box;
        position: absolute;
        max-height: 250px;
        overflow-y: auto;
        overflow-x: hidden;
        background: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, .1019607843);
        z-index: 25
    }

    .clockify-integration-popup .autocomplete-dropdown-item {
        box-sizing: border-box;
        display: flex;
        flex-wrap: nowrap;
        align-items: center;
        row-gap: 5px;
        width: 314px;
        font-size: 14px;
        padding: 10px;
        cursor: pointer;
        background-color: #fff
    }

    .clockify-integration-popup .autocomplete-dropdown-item:hover {
        background-color: #eee
    }

    .clockify-integration-popup .autocomplete-dropdown-item .dot {
        margin-right: 5px;
        margin-left: 5px;
        align-self: center
    }

    .clockify-integration-popup .autocomplete-dropdown-item__tag {
        color: #02567e;
        background: #e1f5fe;
        padding: 2px 8px;
        margin-left: 5px;
        max-width: 136px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }

    .clockify-integration-popup .autocomplete-dropdown-item__tag:hover {
        background: #b3e5fc
    }

    .clockify-integration-popup .autocomplete-dropdown-item__tag-dots {
        align-self: flex-end
    }

    .clockify-integration-popup .autocomplete-dropdown-item__description,
    .clockify-integration-popup .autocomplete-dropdown-item__project-task>span,
    .clockify-integration-popup .autocomplete-dropdown-item__client-name {
        display: inline-block;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        min-width: 30px
    }

    .clockify-integration-popup .autocomplete-dropdown-item__project-task {
        display: flex;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        min-width: 80px
    }

    .clockify-integration-popup .autocomplete-dropdown-item__project-task>span:last-child {
        min-width: 50px
    }

    .clockify-integration-popup .autocomplete-dropdown-item__client-name {
        color: #999;
        margin-left: 5px
    }

    .clockify-integration-popup .duration {
        height: 50px;
        margin: 10px 20px;
        background: #fff;
        border: 1px solid #c6d2d9;
        border-radius: 2px
    }

    .clockify-integration-popup .duration__date-picker {
        padding: 13px 4px
    }

    .clockify-integration-popup .duration .ant-time-picker {
        width: 85px
    }

    .clockify-integration-popup .duration .ant-time-picker-input {
        background: rgba(0, 0, 0, 0);
        border: none;
        text-align: center;
        width: 100%
    }

    .clockify-integration-popup .duration .ant-time-picker-icon {
        display: none
    }

    .clockify-integration-popup .duration .ant-time-picker-clear {
        display: none
    }

    .clockify-integration-popup .duration .ant-time-picker .ant-time-picker-input::placeholder {
        font-size: 11px
    }

    .clockify-integration-popup .duration.copy-as-entry {
        background: none;
        border: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: fit-content;
        margin: 0 0 10px 0
    }

    .clockify-integration-popup .duration.copy-as-entry input:focus {
        border: 1px solid #a9a9a9 !important;
        outline: none
    }

    .clockify-integration-popup .duration.copy-as-entry #durationTimePicker {
        font-weight: 500
    }

    .clockify-integration-popup .duration.copy-as-entry #durationTimePicker,
    .clockify-integration-popup .duration.copy-as-entry #startTimePicker,
    .clockify-integration-popup .duration.copy-as-entry #endTimePicker {
        width: 70px;
        height: 40px;
        border: 1px solid #c6d2d9;
        margin: 0
    }

    .clockify-integration-popup .duration.copy-as-entry .react-datepicker__input-container {
        cursor: pointer
    }

    .clockify-integration-popup .duration.copy-as-entry .react-datepicker__day--disabled {
        color: #ccc;
        text-decoration: line-through !important;
        cursor: not-allowed !important
    }

    .clockify-integration-popup .duration-time {
        display: flex;
        margin-left: 5px;
        justify-content: center;
        align-items: center;
        font-size: 14px;
        color: #999
    }

    .clockify-integration-popup .duration-start {
        padding-top: 13px;
        padding-bottom: 13px;
        position: relative;
        top: 0px;
        width: 65px;
        outline: none;
        border: none;
        color: #666;
        font-size: 14px;
        margin-left: 5px;
        text-align: center
    }

    .clockify-integration-popup .duration-end {
        display: block
    }

    .clockify-integration-popup .duration-duration {
        position: relative;
        padding: 6px 2px;
        border: none;
        width: 85px;
        font-size: 18px;
        color: #333;
        outline: none
    }

    .clockify-integration-popup .duration-dash {
        position: relative;
        top: 2px
    }

    .clockify-integration-popup .duration-label {
        margin-left: 7px;
        word-break: keep-all;
        position: relative;
        top: 1px
    }

    .clockify-integration-popup .duration-divider {
        position: relative;
        height: 50px;
        border-left: 1px dotted #cacaca;
        background-color: rgba(0, 0, 0, 0);
        width: 3px
    }

    .clockify-integration-popup .edit-form {
        padding: 20px
    }

    .clockify-integration-popup .edit-form__project_list {
        margin-bottom: 10px
    }

    .clockify-integration-popup .edit-form__break-label {
        background: #c6d2d9;
        color: #333;
        padding: 14px 21px;
        font-size: 14px
    }

    .clockify-integration-popup .edit-form__break-label .break-icon {
        display: inline-block;
        position: relative;
        top: 2px;
        margin-right: 10px;
        width: 14px;
        height: 14px;
        background-repeat: no-repeat;
        background-size: 14px 14px
    }

    .clockify-integration-popup .edit-form-description {
        position: relative;
        width: 100%;
        height: 65px;
        border: none;
        resize: none;
        box-shadow: none;
        background: none !important;
        font-size: 14px;
        outline: none;
        color: #333
    }

    .clockify-integration-popup .edit-form-description+div {
        z-index: 20
    }

    .clockify-integration-popup .description-textarea {
        margin-bottom: 10px;
        border: 1px solid #c6d2d9;
        background: #fff;
        border-radius: 2px
    }

    .clockify-integration-popup .description-textarea:has(.react-autocomplete textarea:focus) {
        border: 1px solid #a9a9a9 !important
    }

    .clockify-integration-popup .description-textarea-required {
        margin-bottom: 10px;
        border: 1px solid #f44336;
        padding: 10px;
        background: #fff;
        border-radius: 2px
    }

    .clockify-integration-popup .description-textarea:focus-within {
        border: 1px solid #90a4ae !important;
        border-radius: 2px !important
    }

    .clockify-integration-popup .description-textarea>textarea {
        padding: 6px 6px;
        box-sizing: border-box
    }

    .clockify-integration-popup .edit-form-checkbox {
        display: inline-block;
        width: 16px;
        height: 16px;
        top: 13px;
        background: #fff;
        border: 1px solid #c6d2d9;
        border-radius: 2px;
        cursor: pointer
    }

    .clockify-integration-popup .edit-form-buttons {
        margin-top: 0
    }

    .clockify-integration-popup .edit-form-buttons__billable {
        margin: 15px 0;
        line-height: 1;
        display: flex;
        align-items: center
    }

    .clockify-integration-popup .edit-form-billable-img {
        margin-top: 2px;
        margin-left: 1px
    }

    .clockify-integration-popup .edit-form-billable-img-hidden {
        margin-top: 2px;
        margin-left: 1px;
        visibility: hidden
    }

    .clockify-integration-popup .edit-form-billable {
        top: 13px;
        margin-left: 10px;
        color: #666;
        font-size: 14px;
        cursor: pointer
    }

    .clockify-integration-popup .edit-form-right-buttons {
        margin-top: 20px
    }

    .clockify-integration-popup .edit-form-right-buttons__back_and_delete {
        margin-top: 20px;
        justify-content: space-between;
        text-align: center
    }

    .clockify-integration-popup .edit-form-right-buttons__back {
        color: #03a9f4;
        cursor: pointer
    }

    .clockify-integration-popup .edit-form-delete {
        color: red;
        cursor: pointer
    }

    .clockify-integration-popup .edit-form-done-disabled {
        text-align: center
    }

    .clockify-integration-popup .edit-form-done {
        width: 100%;
        height: 50px;
        border: none;
        border-radius: 3px;
        color: #fff;
        background: #03a9f4;
        cursor: pointer;
        text-align: center
    }

    .clockify-integration-popup .edit-form-done:hover {
        background-color: #0091ea;
        border-color: #0091ea;
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    .clockify-integration-popup .edit-form-done-disabled {
        width: 100%;
        height: 50px;
        border: none;
        border-radius: 3px;
        color: #fff;
        background: #999
    }

    .clockify-integration-popup .shake-heartache {
        animation: kf_shake .5s 1 linear;
        -webkit-animation: kf_shake .5s 1 linear;
        -moz-animation: kf_shake .5s 1 linear;
        -o-animation: kf_shake .5s 1 linear
    }

    .clockify-integration-popup .field-required-message {
        color: #f44336;
        font-size: 10px;
        text-align: end;
        padding: 0;
        margin: 0
    }

    @keyframes kf_shake {
        0% {
            -webkit-transform: translate(20px)
        }

        20% {
            -webkit-transform: translate(-20px)
        }

        40% {
            -webkit-transform: translate(10px)
        }

        60% {
            -webkit-transform: translate(-10px)
        }

        80% {
            -webkit-transform: translate(8px)
        }

        100% {
            -webkit-transform: translate(0px)
        }
    }

    @-webkit-keyframes kf_shake {
        0% {
            -webkit-transform: translate(0px)
        }

        20% {
            -webkit-transform: translate(0px)
        }

        40% {
            -webkit-transform: translate(10px)
        }

        60% {
            -webkit-transform: translate(-10px)
        }

        80% {
            -webkit-transform: translate(8px)
        }

        100% {
            -webkit-transform: translate(0px)
        }
    }

    @-moz-keyframes kf_shake {
        0% {
            -moz-transform: translate(20px)
        }

        20% {
            -moz-transform: translate(-20px)
        }

        40% {
            -moz-transform: translate(10px)
        }

        60% {
            -moz-transform: translate(-10px)
        }

        80% {
            -moz-transform: translate(8px)
        }

        100% {
            -moz-transform: translate(0px)
        }
    }

    @-o-keyframes kf_shake {
        0% {
            -o-transform: translate(20px)
        }

        20% {
            -o-transform: translate(-20px)
        }

        40% {
            -o-transform: translate(10px)
        }

        60% {
            -o-transform: translate(-10px)
        }

        80% {
            -o-transform: translate(8px)
        }

        100% {
            -o-origin-transform: translate(0px)
        }
    }

    .clockify-integration-popup .project-list-button {
        padding: 0 6px;
        background: #fff;
        border: 1px solid #c6d2d9;
        border-radius: 2px;
        cursor: pointer;
        align-items: center;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        height: 38px
    }

    .clockify-integration-popup .project-list-button-required {
        padding: 0px 6px;
        background: #fff;
        border: 1px solid #f44336;
        border-radius: 2px;
        cursor: pointer;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        height: 38px
    }

    .clockify-integration-popup .project-list__spec_filter_no_task_or_project {
        margin-left: auto;
        margin-right: auto;
        width: 80%;
        text-align: center
    }

    .clockify-integration-popup .project-list-button-offline {
        width: 100%;
        height: 40px;
        background: #eff4f7;
        margin: 10px 0;
        border: 1px solid #c6d2d9;
        border-radius: 2px;
        cursor: not-allowed;
        padding: 0px 6px;
        display: flex;
        align-items: center;
        box-sizing: border-box
    }

    .clockify-integration-popup .project-list-name {
        display: inline-flex;
        width: 85%;
        font-size: 14px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: #333;
        text-overflow: ellipsis;
        display: inline-block
    }

    .clockify-integration-popup span.project-list-name-client {
        color: #999;
        text-overflow: ellipsis
    }

    .clockify-integration-popup .project-list-arrow {
        width: 10px;
        height: 5px;
        margin-left: auto;
        display: flex;
        align-items: center;
        padding: 0px 10px 0px 10px;
        content: url(assets/images/arrow-light-mode.png)
    }

    .clockify-integration-popup .project-list-arrow-up {
        width: 10px;
        height: 5px;
        margin-left: auto;
        display: flex;
        align-items: center;
        padding: 0px 10px 0px 10px;
        content: url(assets/images/arrow-light-mode-up.png)
    }

    .clockify-integration-popup .project-list-dropdown {
        position: absolute;
        width: 100%;
        left: 0;
        top: 39px;
        background: #fff;
        z-index: 2;
        box-shadow: 0 5px 7px #ccc;
        font-size: 14px;
        border-radius: 2px
    }

    .clockify-integration-popup .project-list-dropdown--content {
        height: 269px;
        overflow-y: auto
    }

    .clockify-integration-popup .project-list-input {
        background: #fff;
        padding: 10px
    }

    .clockify-integration-popup .project-list-input input {
        background-color: #fff !important
    }

    .clockify-integration-popup .project-list-input--border {
        position: relative
    }

    .clockify-integration-popup .project-list-filter {
        width: 100%;
        height: 40px;
        padding: 10px;
        border: 1px solid #c6d2d9;
        border-radius: 2px;
        background-color: #fff !important
    }

    .clockify-integration-popup .project-list-filter__clear {
        position: absolute;
        right: 10px;
        top: 14px;
        height: 12px;
        width: 12px;
        content: url(assets/images/x.png);
        cursor: pointer
    }

    .clockify-integration-popup .project-list-filter:focus {
        outline: none;
        border: 1px solid #90a4ae !important;
        border-radius: 3px !important
    }

    .clockify-integration-popup .tasks-arrow-down {
        margin-left: 5px
    }

    .clockify-integration-popup .tasks-arrow-right {
        position: relative;
        top: -1px;
        margin-left: 5px;
        vertical-align: middle
    }

    .clockify-integration-popup ul.project-item {
        padding: 7px 5px 8px 10px;
        cursor: pointer;
        font-size: 16px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin: 0;
        list-style-type: none;
        border-top: 1px dotted #c6d2d9
    }

    .clockify-integration-popup ul.project-item:hover {
        background-color: #e4eaee
    }

    .clockify-integration-popup li.project-item-dot {
        flex: 0 0 5px;
        width: 5px;
        height: 5px;
        border-radius: 5px;
        display: inline-block;
        margin-right: 5px
    }

    .clockify-integration-popup li.project-item-name {
        display: inline-block;
        flex: 1 1;
        text-overflow: ellipsis;
        overflow: hidden;
        font-size: 14px;
        white-space: nowrap;
        color: #333
    }

    .clockify-integration-popup li.project-item-tasks {
        display: flex;
        color: #999;
        font-size: 13px;
        flex: 0 0 90px
    }

    .clockify-integration-popup li.project-item-tasks>span {
        color: #999
    }

    .clockify-integration-popup li.project-item-tasks>span img {
        width: auto
    }

    .clockify-integration-popup li.project-item-favorite {
        flex: 0 0 20px
    }

    .clockify-integration-popup .project-item-create-task {
        color: #03a9f4;
        cursor: pointer;
        font-size: 14px;
        margin-right: 10px
    }

    .clockify-integration-popup .project-item-create-task:hover {
        text-decoration: underline
    }

    .clockify-integration-popup .task-item {
        padding: 7px 0 7px 25px;
        background-color: #f2f6f8;
        color: #333;
        font-size: 14px
    }

    .clockify-integration-popup .task-item:hover {
        background-color: #e4eaee;
        cursor: pointer
    }

    .clockify-integration-popup .task-item:first-child {
        padding-top: 10px
    }

    .clockify-integration-popup .task-item:last-child {
        padding-bottom: 10px
    }

    .clockify-integration-popup .project-list-load {
        text-align: center;
        margin-top: 15px;
        color: #666;
        cursor: pointer
    }

    .clockify-integration-popup .project-list-client {
        margin: 10px;
        padding-top: 5px;
        font-size: 14px;
        color: #999
    }

    .clockify-integration-popup .projects-list {
        position: relative
    }

    .clockify-integration-popup .projects-list__create-project,
    .clockify-integration-popup .projects-list__create-task {
        position: absolute;
        display: flex;
        align-items: center;
        padding-top: 17px;
        padding-bottom: 17px;
        bottom: 0px;
        width: 320px;
        background: #fff;
        box-shadow: 0 -5px 10px rgba(0, 0, 0, .1);
        cursor: pointer
    }

    .clockify-integration-popup .projects-list__create-project--icon,
    .clockify-integration-popup .projects-list__create-task--icon {
        width: 19px;
        height: 19px;
        margin-right: 7px;
        margin-left: 10px
    }

    .clockify-integration-popup .projects-list__create-project--text,
    .clockify-integration-popup .projects-list__create-task--text {
        color: #03a9f4;
        font-size: 14px
    }

    .clockify-integration-popup .projects-list__bottom-padding {
        padding-bottom: 54px;
        width: 100%
    }

    .clockify-integration-popup .projects-list__create-task {
        box-sizing: border-box;
        position: relative;
        padding-left: 10px;
        width: 100%
    }

    .clockify-integration-popup .clockify-error {
        color: red;
        font-size: 14px
    }

    .clockify-integration-popup .cl-dropdown-star {
        width: 16px;
        height: 16px;
        margin: 5px 3px 0px 5px
    }

    .clockify-integration-popup .tag-list {
        box-sizing: border-box;
        position: relative;
        width: 100%;
        margin-bottom: 10px
    }

    .clockify-integration-popup .tag-list.custom-field-required {
        border: 1px solid #f44336 !important
    }

    .clockify-integration-popup .tag-list.custom-field-required>.tag-list-button {
        border: none !important
    }

    .clockify-integration-popup .tag-list-name {
        display: inline-block !important;
        padding: 0 !important;
        width: 85% !important;
        font-size: 14px !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        white-space: nowrap !important
    }

    .clockify-integration-popup .tag-list-button {
        padding: 0px 7px;
        background: #fff;
        border: 1px solid #c6d2d9;
        border-radius: 2px;
        cursor: pointer;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        height: 38px
    }

    .clockify-integration-popup .tag-list-button-required {
        padding: 0px 6px;
        background: #fff;
        border: 1px solid #f44336;
        border-radius: 2px;
        cursor: pointer;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        height: 38px
    }

    .clockify-integration-popup .tag-list-button-offline {
        width: 100%;
        height: 38px;
        background: disabled;
        border: 1px solid #c6d2d9;
        border-radius: 2px;
        cursor: not-allowed;
        box-sizing: border-box;
        padding: 0px 6px;
        display: flex;
        align-items: center
    }

    .clockify-integration-popup .tag-list-button-disabled {
        width: 100%;
        height: 38px;
        background: #eff4f7;
        border: 1px solid #c6d2d9;
        border-radius: 2px;
        cursor: not-allowed;
        padding: 0px 6px;
        box-sizing: border-box;
        display: flex;
        align-items: center
    }

    .clockify-integration-popup .tag-list-arrow {
        width: 10px;
        height: 5px;
        margin-left: auto;
        display: flex;
        align-items: center;
        padding: 0px 10px 0px 10px;
        content: url(assets/images/arrow-light-mode.png)
    }

    .clockify-integration-popup .tag-list-arrow-up {
        width: 10px;
        height: 5px;
        margin-left: auto;
        display: flex;
        align-items: center;
        padding: 0px 10px 0px 10px;
        content: url(assets/images/arrow-light-mode-up.png)
    }

    .clockify-integration-popup .tag-list-add {
        display: inline-block;
        padding: 5px 10px 5px 0px;
        font-size: 14px;
        color: #666
    }

    .clockify-integration-popup .tag-list-selected {
        display: inline-block;
        max-width: 260px;
        border-radius: 2px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .clockify-integration-popup .tag-list-selected-item {
        display: inline-block;
        padding: 5px 2px;
        border-radius: 3px;
        font-size: 14px;
        font-weight: 400;
        color: #333
    }

    .clockify-integration-popup .tag-list-selected-item:first-child {
        padding-left: 0px !important
    }

    .clockify-integration-popup .tag-list-input {
        background: #fff !important;
        padding: 10px
    }

    .clockify-integration-popup .tag-list-input--border {
        position: relative
    }

    .clockify-integration-popup .tag-list-input .tag-list-filter {
        background-color: #fff
    }

    .clockify-integration-popup .tag-list-input .tag-list-filter:focus {
        outline: none;
        border: 1px solid #90a4ae !important;
        border-radius: 3px !important
    }

    .clockify-integration-popup .tag-list-load {
        text-align: center;
        margin-top: 15px;
        margin-bottom: 10px;
        color: #666;
        cursor: pointer
    }

    .clockify-integration-popup .tag-list-dropdown {
        position: absolute;
        width: 100%;
        top: 40px;
        background: #fff;
        box-shadow: 0 5px 7px #ccc;
        z-index: 2;
        font-size: 14px;
        border-radius: 2px
    }

    .clockify-integration-popup .tag-list-dropdown--content {
        height: 217px;
        overflow-y: auto
    }

    .clockify-integration-popup .tag-list-filter {
        width: 100%;
        height: 40px;
        padding: 10px 32px 10px 10px;
        border: 1px solid #c6d2d9;
        border-radius: 2px
    }

    .clockify-integration-popup .tag-list-filter__clear {
        position: absolute;
        right: 10px;
        top: 14px;
        height: 12px;
        width: 12px;
        content: url(assets/images/x.png);
        cursor: pointer
    }

    .clockify-integration-popup .tag-list-checked {
        margin-top: 2px;
        margin-left: 1px
    }

    .clockify-integration-popup .tag-list-checked-hidden {
        margin-top: 2px;
        margin-left: 1px;
        visibility: hidden
    }

    .clockify-integration-popup .tag-list-checkbox {
        display: inline-block;
        width: 16px;
        height: 16px;
        border: 1px solid #c6d2d9
    }

    .clockify-integration-popup .tag-list-item {
        font-size: 14px;
        margin-left: 10px
    }

    .clockify-integration-popup .tag-list-item-row {
        color: #666;
        padding: 7px 15px;
        cursor: pointer;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        line-height: 1
    }

    .clockify-integration-popup .tag-list-item-row:hover {
        background-color: #e4eaee
    }

    .clockify-integration-popup .tag-list-item-row label {
        color: #666
    }

    .clockify-integration-popup .tag-list--not_tags {
        margin-left: 10px
    }

    .clockify-integration-popup .tag-list__create-tag {
        position: absolute;
        display: flex;
        align-items: center;
        padding-top: 17px;
        padding-bottom: 17px;
        bottom: 0;
        width: 320px;
        background: #fff;
        box-shadow: 0 -5px 10px rgba(0, 0, 0, .1);
        cursor: pointer
    }

    .clockify-integration-popup .tag-list__create-tag--icon {
        width: 19px;
        height: 19px;
        margin-right: 7px;
        margin-left: 10px
    }

    .clockify-integration-popup .tag-list__create-tag--text {
        color: #03a9f4;
        font-size: 14px
    }

    .clockify-integration-popup .tag-list__bottom-padding {
        padding-bottom: 65px;
        width: 100%
    }

    .clockify-integration-popup .tag-list__create-form {
        position: relative;
        display: flex;
        flex-direction: column;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 320px;
        height: 240px;
        background: #fff;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, .25);
        border-radius: 2px;
        text-align: center;
        align-items: center
    }

    .clockify-integration-popup .tag-list__create-form__title-and-close {
        display: flex;
        margin-bottom: 20px;
        width: 100%
    }

    .clockify-integration-popup .tag-list__create-form__close {
        position: absolute;
        right: 20px;
        top: 25px;
        height: 12px;
        width: 12px;
        content: url(assets/images/x.png);
        cursor: pointer
    }

    .clockify-integration-popup .tag-list__create-form--open {
        background-color: rgba(0, 0, 0, .8);
        position: fixed;
        width: 100vw;
        height: 100vh;
        left: 0;
        top: 0;
        z-index: 999
    }

    .clockify-integration-popup .tag-list__create-form--divider {
        width: 100%;
        height: 1px;
        border-bottom: 1px dotted #c6d2d9;
        margin-bottom: 20px
    }

    .clockify-integration-popup .tag-list__create-form--title {
        margin-top: 20px;
        margin-left: 20px;
        font-size: 18px;
        color: #666
    }

    .clockify-integration-popup .tag-list__create-form--tag-name {
        margin-bottom: 20px;
        padding-left: 10px;
        border: 1px solid #c6d2d9;
        border-radius: 2px;
        width: 280px;
        height: 40px
    }

    .clockify-integration-popup .tag-list__create-form--tag-name::placeholder {
        color: #999
    }

    .clockify-integration-popup .tag-list__create-form--tag-name:focus {
        outline: none;
        border: 2px solid #0f3beb;
        border-radius: 5px
    }

    .clockify-integration-popup .tag-list__create-form--confirmation_button {
        margin-bottom: 20px;
        padding-top: 12px;
        width: 280px;
        height: 28px;
        border-radius: 2px;
        background: #03a9f4;
        color: #fff;
        font-size: 14px;
        text-transform: uppercase;
        cursor: pointer
    }

    .clockify-integration-popup .tag-list__create-form--cancel {
        font-size: 14px;
        color: #03a9f4;
        cursor: pointer
    }

    .clockify-integration-popup .poppup-modal {
        cursor: default;
        box-sizing: border-box;
        position: relative;
        width: 100%;
        position: relative;
        display: flex;
        flex-direction: column;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 320px;
        background: #fff;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, .25);
        border-radius: 2px;
        text-align: center;
        align-items: center
    }

    .clockify-integration-popup .poppup-modal__title-and-close {
        display: flex;
        margin-bottom: 20px;
        width: 100%
    }

    .clockify-integration-popup .poppup-modal__close {
        position: absolute;
        right: 20px;
        top: 25px;
        height: 12px;
        width: 12px;
        content: url(assets/images/x.png);
        cursor: pointer
    }

    .clockify-integration-popup .poppup-modal--open {
        background-color: rgba(0, 0, 0, .8);
        position: fixed;
        width: 100vw;
        height: 100vh;
        left: 0;
        top: 0;
        z-index: 2147483647 !important
    }

    .clockify-integration-popup .poppup-modal--divider {
        width: 100%;
        height: 1px;
        border-bottom: 1px dotted #c6d2d9;
        margin-bottom: 20px
    }

    .clockify-integration-popup .poppup-modal--title {
        margin-top: 20px;
        margin-left: 20px;
        font-size: 18px;
        line-height: 21px;
        color: #666
    }

    .clockify-integration-popup .poppup-modal--tag-name {
        margin-bottom: 20px;
        padding-left: 10px;
        border: 1px solid #c6d2d9;
        border-radius: 2px;
        width: 280px;
        height: 40px
    }

    .clockify-integration-popup .poppup-modal--tag-name::placeholder {
        color: #999
    }

    .clockify-integration-popup .poppup-modal--confirmation_button {
        margin-bottom: 20px;
        padding-top: 12px;
        width: 280px;
        height: 28px;
        border-radius: 2px;
        background: #03a9f4;
        color: #fff;
        font-size: 14px;
        line-height: 16px;
        text-transform: uppercase;
        cursor: pointer
    }

    .clockify-integration-popup .poppup-modal--cancel {
        font-size: 14px;
        line-height: 16px;
        color: #03a9f4;
        cursor: pointer
    }

    .clockify-integration-popup .poppup-modal--text {
        max-width: 90%;
        word-break: break-word
    }

    .clockify-integration-popup .custom-fields {
        padding: 0px !important;
        border: 0px solid #c6d2d9 !important;
        background-color: #eff4f7 !important;
        margin: 0 !important;
        width: 100%
    }

    .clockify-integration-popup .custom-fields input:focus {
        outline: none;
        box-shadow: none;
        border: 1px solid #90a4ae !important;
        border-radius: 2px !important
    }

    .clockify-integration-popup .custom-fields input:hover {
        box-shadow: none
    }

    .clockify-integration-popup .custom-field {
        box-sizing: border-box;
        padding: 0px !important;
        border-image-width: 0 !important;
        border: 0px solid #c6d2d9 !important;
        margin: 8px 0px 0px 0px !important;
        height: 40px !important;
        overflow: visible
    }

    .clockify-integration-popup .custom-field-disabled {
        box-sizing: border-box;
        padding: 0px !important;
        border-image-width: 0 !important;
        background-color: #eff4f7 !important;
        margin: 8px 0px 0px 0px !important;
        height: 40px !important;
        display: flex;
        align-items: center
    }

    .clockify-integration-popup .custom-field-number {
        position: relative;
        font-size: 14px
    }

    .clockify-integration-popup .custom-field-number .input-stepper {
        position: absolute;
        top: 11px;
        right: 16px;
        width: 13px;
        height: 14px
    }

    .clockify-integration-popup .custom-field-number .input-stepper .input-stepper-wrapper {
        display: flex;
        justify-content: center;
        background: #f1f1f1;
        width: 16px;
        height: 8px
    }

    .clockify-integration-popup .custom-field-number .input-stepper .input-stepper-wrapper:hover {
        background: #c1c1c1
    }

    .clockify-integration-popup .custom-field-number .input-stepper .input-stepper-wrapper:active {
        background: #a1a1a1
    }

    .clockify-integration-popup .custom-field-number .input-stepper .input-stepper-up,
    .clockify-integration-popup .custom-field-number .input-stepper .input-stepper-down {
        position: relative;
        top: 2px;
        height: 4px
    }

    .clockify-integration-popup div.custom-field-ta {
        box-sizing: border-box;
        padding: 0px !important;
        border: 0px solid #c6d2d9 !important;
        border-image-width: 0 !important;
        margin: 8px 0px 0px 0px !important;
        height: 40px !important
    }

    .clockify-integration-popup div.custom-field-ta-disabled {
        box-sizing: border-box;
        padding: 0px !important;
        border-image-width: 0 !important;
        margin: 8px 0px 0px 0px !important;
        height: 45px !important
    }

    .clockify-integration-popup div.custom-field-inner {
        box-sizing: border-box;
        padding: 0px 7px !important;
        display: flex !important;
        align-items: center !important;
        width: 100% !important;
        height: 100% !important;
        margin: 0 !important;
        border: 0px solid #c6d2d9 !important
    }

    .clockify-integration-popup div.custom-field-inner-disabled {
        box-sizing: border-box;
        padding: 0px 7px !important;
        display: flex !important;
        align-items: center !important;
        width: 100% !important;
        height: 100% !important;
        margin: 0 !important
    }

    .clockify-integration-popup div.custom-field-inner-checkbox {
        box-sizing: border-box;
        padding: 0px !important;
        display: flex !important;
        align-items: center !important;
        background-color: #eff4f7 !important;
        width: 100% !important;
        height: 100% !important;
        margin: 0 !important;
        border: 0px solid #c6d2d9 !important
    }

    .clockify-integration-popup div.custom-field-inner-checkbox-disabled {
        box-sizing: border-box;
        display: flex !important;
        align-items: center !important;
        width: 100% !important;
        height: 100% !important;
        margin: 0 !important;
        background-color: #eff4f7 !important
    }

    .clockify-integration-popup div.custom-field-inner-checkbox-disabled .clockify-switch-label {
        color: #9c9c9c !important
    }

    .clockify-integration-popup textarea.custom-field-text {
        box-sizing: border-box;
        width: 100% !important;
        height: 100% !important;
        min-height: 40px !important;
        border: 1px solid #c6d2d9;
        margin: 0 !important;
        line-height: 27px !important;
        resize: none !important;
        font-size: 14px !important;
        outline: none !important;
        color: #333;
        padding: 5px 8px !important;
        word-wrap: break-word !important;
        background-color: #fff;
        border-image-width: 0 !important;
        text-overflow: ellipsis !important
    }

    .clockify-integration-popup textarea.custom-field-text::placeholder {
        color: #999;
        opacity: 1
    }

    .clockify-integration-popup textarea.custom-field-text:focus {
        border: 1px solid #90a4ae !important;
        border-radius: 2px !important
    }

    .clockify-integration-popup textarea.custom-field-text-disabled {
        box-sizing: border-box;
        width: 100% !important;
        height: 45px !important;
        min-height: 45px !important;
        border: 0 !important;
        margin: 0 !important;
        resize: none !important;
        font-size: 14px !important;
        outline: none !important;
        color: #333;
        padding: 5px 10px !important;
        word-wrap: break-word !important;
        border: 1px solid #c6d2d9
    }

    .clockify-integration-popup textarea.custom-field-text-disabled::placeholder {
        color: #9c9c9c !important
    }

    .clockify-integration-popup textarea.custom-field-text.custom-field-required {
        border: 1px solid #f44336 !important
    }

    .clockify-integration-popup input.custom-field-number {
        box-sizing: border-box;
        width: 100% !important;
        height: 100% !important;
        padding: 5px 8px !important;
        margin: 0 !important;
        line-height: 20px !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        border: 1px solid #c6d2d9;
        color: #333;
        background-color: #fff !important
    }

    .clockify-integration-popup input.custom-field-number::placeholder {
        color: #999;
        opacity: 1
    }

    .clockify-integration-popup input.custom-field-number-disabled {
        box-sizing: border-box;
        border: 1px solid #c6d2d9;
        width: 100% !important;
        height: 100% !important;
        padding: 5px 8px !important;
        margin: 0 !important;
        background-color: #fff !important;
        line-height: 20px !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        border: 1px solid #c6d2d9 !important;
        background-color: #eff4f7 !important
    }

    .clockify-integration-popup input.custom-field-number.custom-field-required {
        border: 1px solid #f44336 !important
    }

    .clockify-integration-popup .custom-field-link {
        box-sizing: border-box;
        width: 100% !important
    }

    .clockify-integration-popup .custom-field-link::placeholder {
        color: #999;
        opacity: 1
    }

    .clockify-integration-popup .custom-field-link.custom-field-required {
        border: 1px solid #f44336 !important
    }

    .clockify-integration-popup div.custom-field-link-label {
        box-sizing: border-box;
        padding: 5px 0px !important;
        line-height: 21px !important;
        font-size: 14px !important;
        font-weight: 400px !important;
        margin: 0 !important
    }

    .clockify-integration-popup .cf-container {
        box-sizing: border-box;
        display: block !important;
        position: relative !important;
        padding-left: 35px !important;
        line-height: 21px !important;
        cursor: pointer !important;
        font-size: 14px !important;
        -webkit-user-select: none !important;
        -moz-user-select: none !important;
        -ms-user-select: none !important;
        user-select: none !important;
        margin: 0 !important
    }

    .clockify-integration-popup .cf-container input {
        box-sizing: border-box;
        position: absolute !important;
        opacity: 0 !important;
        cursor: pointer !important
    }

    .clockify-integration-popup .clockify-switch-label {
        box-sizing: border-box;
        color: #333 !important;
        font-size: 14px !important;
        white-space: nowrap !important;
        margin: 0px 0px 0px 10px !important;
        width: 230px;
        overflow: hidden !important;
        text-overflow: ellipsis !important
    }

    .clockify-integration-popup .checkmark {
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        height: 21px !important;
        width: 21px !important;
        border: 1px solid gray !important;
        border-radius: 50% !important
    }

    .clockify-integration-popup .cf-container:hover input~.checkmark {
        background-color: #ccc !important
    }

    .clockify-integration-popup .cf-container input:checked~.checkmark {
        background-color: #2196f3 !important
    }

    .clockify-integration-popup .checkmark:after {
        content: "" !important;
        position: absolute !important;
        display: none !important
    }

    .clockify-integration-popup .cf-container input:checked~.checkmark:after {
        display: block !important
    }

    .clockify-integration-popup .cf-container .checkmark:after {
        top: 5px !important;
        left: 6px !important;
        width: 8px !important;
        height: 8px !important;
        border-radius: 50% !important;
        background: #fff !important
    }

    .clockify-integration-popup .clockify-modal {
        box-sizing: border-box !important;
        -webkit-box-sizing: border-box !important;
        font-family: "Roboto", sans-serif !important;
        font-weight: normal !important;
        position: fixed !important;
        z-index: 9999999 !important;
        padding-top: 100px !important;
        left: 0 !important;
        top: 0 !important;
        width: 100% !important;
        height: 100% !important;
        overflow: auto !important;
        background-color: #000 !important;
        background-color: rgba(0, 0, 0, .4) !important
    }

    .clockify-integration-popup .clockify-modal-content {
        box-sizing: border-box;
        background-color: #fefefe;
        margin: auto !important;
        border-radius: 2px;
        width: 84% !important
    }

    .clockify-integration-popup .cl-close {
        background-color: #fff;
        border: 0 !important
    }

    .clockify-integration-popup .clockify-close:hover {
        opacity: .75
    }

    .clockify-integration-popup .cl-form-control {
        margin: 0 !important
    }

    .clockify-integration-popup input.clockify-link-input {
        box-sizing: border-box;
        display: block !important;
        flex: 1;
        margin: 0 !important;
        height: 40px !important;
        padding: 7px !important;
        font-size: 14px !important;
        font-weight: 400 !important;
        line-height: 21px !important;
        color: #333;
        background-color: #fff !important;
        background-clip: padding-box !important;
        border: 1px solid #c6d2d9;
        border-radius: 0px !important;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out !important;
        box-shadow: none !important
    }

    .clockify-integration-popup input.clockify-link-input::placeholder {
        color: #999;
        opacity: 1
    }

    .clockify-integration-popup input.clockify-link-input-disabled {
        box-sizing: border-box;
        display: block !important;
        flex: 1;
        margin: 0 !important;
        height: 40px !important;
        padding: 7px !important;
        font-size: 14px !important;
        font-weight: 400 !important;
        line-height: 21px !important;
        color: #333 !important;
        background-clip: padding-box !important;
        border-radius: 0px !important;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out !important;
        box-shadow: none !important;
        border: 1px solid #c6d2d9 !important;
        background-color: #eff4f7 !important
    }

    .clockify-integration-popup input.clockify-link-input:focus {
        border: 1px solid #90a4ae !important;
        border-radius: 2px !important
    }

    .clockify-integration-popup input.clockify-link-input-modal {
        display: block !important;
        flex: 1;
        margin: 0px 0px 0px 10px !important;
        height: 40px !important;
        padding: 7px !important;
        font-size: 14px !important;
        font-weight: 400 !important;
        line-height: 21px !important;
        color: #333;
        background-color: #fff;
        background-clip: padding-box !important;
        border: 1px solid #c6d2d9 !important;
        border-radius: 2px;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out !important;
        box-shadow: none !important
    }

    .clockify-integration-popup input.clockify-link-input-modal:focus {
        border: 1px solid #90a4ae !important;
        border-radius: 2px !important
    }

    .clockify-integration-popup .modal-content {
        box-sizing: border-box;
        position: relative !important;
        display: flex !important;
        flex-direction: column !important;
        width: 100% !important;
        pointer-events: auto !important;
        background-color: #fff !important;
        background-clip: padding-box !important;
        outline: 0 !important
    }

    .clockify-integration-popup .cl-modal-header {
        align-items: center !important;
        display: flex !important;
        justify-content: space-between !important;
        padding: 20px !important;
        border-bottom: 1px solid #c6d2d9;
        border-top-left-radius: 2px !important;
        border-top-right-radius: 2px !important
    }

    .clockify-integration-popup .cl-modal-title {
        font-size: 24px !important;
        font-weight: 100 !important;
        line-height: 36px !important;
        color: #666;
        margin: 0 !important
    }

    .clockify-integration-popup .cl-modal-body {
        position: relative !important;
        display: flex !important;
        padding: 21px !important;
        align-items: center !important
    }

    .clockify-integration-popup .cl-modal-footer {
        display: flex !important;
        align-items: center !important;
        justify-content: flex-end !important;
        padding: 20px !important;
        border-top: 1px solid #c6d2d9;
        border-bottom-right-radius: 2px !important;
        border-bottom-left-radius: 2px !important
    }

    .clockify-integration-popup .clockify-cancel {
        color: #2196f3 !important
    }

    .clockify-integration-popup .clockify-cancel:hover {
        text-decoration: underline
    }

    .clockify-integration-popup .clockify-save {
        color: #fff;
        background-color: #2196f3 !important;
        margin-left: 30px;
        padding: 10px;
        min-width: 67px;
        text-align: center;
        border-radius: 2px
    }

    .clockify-integration-popup .clockify-save--disabled {
        opacity: .65;
        cursor: default !important
    }

    .clockify-integration-popup a.clockify-cancel,
    .clockify-integration-popup a.clockify-save {
        cursor: pointer
    }

    .clockify-integration-popup .checkmark {
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        height: 21px !important;
        width: 21px !important;
        border: 1px solid gray !important;
        border-radius: 50% !important
    }

    .clockify-integration-popup .cf-container:hover input~.checkmark {
        background-color: #ccc !important
    }

    .clockify-integration-popup .cf-container input:checked~.checkmark {
        background-color: #2196f3 !important
    }

    .clockify-integration-popup .checkmark:after {
        content: "" !important;
        position: absolute !important;
        display: none !important
    }

    .clockify-integration-popup .cf-container input:checked~.checkmark:after {
        display: block !important
    }

    .clockify-integration-popup .cf-container .checkmark:after {
        top: 6px !important;
        left: 7px !important;
        width: 8px !important;
        height: 8px !important;
        border-radius: 50% !important;
        background: #fff !important
    }

    .clockify-integration-popup .required-fields {
        text-align: center
    }

    .clockify-integration-popup .required-fields button {
        width: 105px;
        height: 45px;
        background-color: #f44336;
        color: #fff;
        border: 1px solid #f44336;
        text-transform: uppercase;
        border-radius: 2px;
        cursor: pointer
    }

    .clockify-integration-popup .required-fields span {
        display: block;
        margin: 50px;
        font-size: 17px
    }

    .clockify-integration-popup .toaster__container {
        position: fixed;
        width: calc(100% - 25px);
        left: 15px;
        bottom: 15px;
        z-index: 1112
    }

    .clockify-integration-popup .toaster__message--container_success,
    .clockify-integration-popup .toaster__message--container_info,
    .clockify-integration-popup .toaster__message--container_error {
        padding: 15px;
        margin-top: 5px;
        box-sizing: border-box;
        color: #fff;
        border-radius: 2px;
        font-size: 14px;
        line-height: 16px;
        position: relative;
        bottom: 15px;
        left: 0
    }

    .clockify-integration-popup .toaster__message--container_success {
        background-color: #8bc34a
    }

    .clockify-integration-popup .toaster__message--container_error {
        background-color: #f44336
    }

    .clockify-integration-popup .toaster__message--container_info {
        background-color: #ff9800
    }

    @keyframes toaster-fadein {
        from {
            bottom: 0;
            opacity: 0
        }

        to {
            bottom: 15px;
            opacity: 1
        }
    }

    @keyframes toaster-fadeout {
        from {
            left: 0;
            opacity: 1
        }

        to {
            left: 100%;
            opacity: 0
        }
    }

    @-webkit-keyframes rotation {
        from {
            -webkit-transform: rotate(0deg)
        }

        to {
            -webkit-transform: rotate(359deg)
        }
    }

    .clockify-integration-popup html {
        min-height: 600px
    }

    .clockify-integration-popup body {
        background-color: #eff4f7;
        margin: 0px;
        overflow-y: overlay;
        overflow-x: hidden;
        user-select: none;
        font-size: 12px
    }

    .clockify-integration-popup * {
        font-family: "Roboto", Arial, sans-serif !important;
        box-sizing: revert;
        isolation: unset
    }

    .clockify-integration-popup p {
        margin-top: revert
    }

    .clockify-integration-popup button {
        text-transform: uppercase
    }

    .clockify-integration-popup input {
        box-sizing: border-box
    }

    .clockify-integration-popup hr {
        padding-top: 0px;
        margin: 0px;
        border-top: 0px;
        border-bottom: 1px dotted #cacaca
    }

    .clockify-integration-popup .home_page {
        padding-top: 134px
    }

    .clockify-integration-popup .home_page .clockify-subscription-expired-overlay {
        position: fixed;
        top: 50px;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(198, 210, 217, .2);
        z-index: 1110
    }

    .clockify-integration-popup .home_page .clockify-subscription-expired-message {
        background: #ffeacc;
        color: #854f00;
        font-size: 14px;
        border: 1px solid #ffe2b8;
        border-radius: 8px;
        width: 320px;
        margin: auto
    }

    .clockify-integration-popup .home_page .clockify-subscription-expired-message img {
        float: left;
        padding: 7px 8px
    }

    .clockify-integration-popup .home_page .clockify-subscription-expired-message p {
        margin-top: 5px;
        margin-bottom: 5px;
        padding-left: 37px
    }

    .clockify-integration-popup .modalBackground {
        display: none;
        position: fixed;
        width: 100vw;
        height: 100vh;
        background-color: rgba(0, 0, 0, .8);
        left: 0;
        top: 0;
        justify-content: center;
        align-items: center;
        z-index: 1040
    }

    .clockify-integration-popup .modalBackground.show {
        display: flex
    }

    .clockify-integration-popup .dot {
        padding: 2px;
        border-radius: 50%;
        display: inline-block;
        width: 2px;
        height: 2px
    }

    .clockify-integration-popup .ptr-element {
        height: 0
    }

    .clockify-integration-popup ::-webkit-scrollbar {
        width: 5px
    }

    .clockify-integration-popup ::-webkit-scrollbar-thumb {
        background: #03a9f4
    }

    .clockify-integration-popup .invisible {
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 2
    }

    .clockify-integration-popup .invisible-menu {
        position: absolute;
        top: 0;
        width: 100%;
        height: 100vh;
        z-index: 1050
    }

    .clockify-integration-popup .loading-gif {
        position: relative;
        top: 110px;
        text-align: center
    }

    .clockify-integration-popup .loading-gif img {
        content: url(assets/images/loading.gif)
    }

    .clockify-integration-popup .loading-gif-before-load {
        content: url(assets/images/loading.gif);
        position: relative;
        margin-left: auto;
        margin-right: auto;
        top: 110px
    }

    .clockify-integration-popup .loading-entries-gif {
        padding-bottom: 20px;
        text-align: center
    }

    .clockify-integration-popup .loading-entries-gif img {
        content: url(assets/images/loading.gif)
    }

    .clockify-integration-popup .disabled {
        display: none
    }

    .clockify-integration-popup .pull-loading {
        display: inline-block;
        position: relative;
        top: 35px;
        left: 50%;
        transform: translate(-50%, 0);
        z-index: -1
    }

    .clockify-integration-popup .pull-loading-entries {
        display: inline-block;
        position: relative;
        top: 0;
        left: 50%;
        transform: translate(-50%, 0);
        z-index: -1
    }

    .clockify-integration-popup .pull-loading-img1 {
        content: url(assets/images/circle_1.svg);
        width: 50px;
        height: 50px;
        position: relative;
        left: 0;
        top: 0
    }

    .clockify-integration-popup .pull-loading-img2 {
        content: url(assets/images/circle_2.svg);
        width: 4px;
        height: 50px;
        position: absolute;
        left: 23px;
        top: 1px;
        -webkit-animation: rotation 2s infinite linear
    }

    .clockify-integration-popup .time-entry-list {
        position: relative;
        top: 15px
    }

    .clockify-integration-popup .time-entry-list__offline {
        position: relative
    }

    .clockify-integration-popup .expandContainer {
        max-height: 0;
        overflow: hidden;
        transition: max-height .3s linear
    }

    .clockify-integration-popup .checked {
        width: 18px;
        height: 18px;
        background: #03a9f4;
        border: none
    }

    .clockify-integration-popup .checked img {
        margin-top: 3px;
        margin-left: 2px
    }

    .clockify-integration-popup .day-active {
        background: #03a9f4;
        border: 1px solid #03a9f4
    }

    .clockify-integration-popup .day-active span {
        color: #fff
    }

    .clockify-integration-popup .list-disabled {
        opacity: .4;
        cursor: default
    }

    .clockify-integration-popup .ant-picker-time-panel-column::after {
        height: 0 !important
    }

    .clockify-integration-popup .ant-picker-time-panel-column .ant-picker-time-panel-cell-inner {
        width: auto !important
    }

    body.clockify-dark-mode,
    .clockify-dark-mode {
        background-color: #37474f
    }

    body.clockify-dark-mode .logo,
    .clockify-dark-mode .logo {
        width: 98px;
        background-image: url(assets/images/clockify_logo_dark.svg) !important;
        background-size: contain;
        background-repeat: no-repeat
    }

    body.clockify-dark-mode .header_and_timer,
    .clockify-dark-mode .header_and_timer {
        background-color: #37474f
    }

    body.clockify-dark-mode .settings_page__header,
    .clockify-dark-mode .settings_page__header {
        background-color: #37474f
    }

    body.clockify-dark-mode .start-timer,
    .clockify-dark-mode .start-timer {
        background-color: #1d272c;
        border: 1px solid #12191d
    }

    body.clockify-dark-mode .start-timer_description_grey,
    .clockify-dark-mode .start-timer_description_grey {
        color: #90a4ae
    }

    body.clockify-dark-mode .start-timer_description,
    .clockify-dark-mode .start-timer_description {
        color: #e4eaee
    }

    body.clockify-dark-mode .start-timer_description-input,
    .clockify-dark-mode .start-timer_description-input {
        background-color: #1d272c;
        color: #e4eaee
    }

    body.clockify-dark-mode .start-timer_description-input::placeholder,
    body.clockify-dark-mode .start-timer_placeholder,
    .clockify-dark-mode .start-timer_description-input::placeholder,
    .clockify-dark-mode .start-timer_placeholder {
        color: #90a4ae
    }

    body.clockify-dark-mode .dropdown-menu,
    .clockify-dark-mode .dropdown-menu {
        background-color: #12191d;
        box-shadow: none
    }

    body.clockify-dark-mode .dropdown-header,
    body.clockify-dark-mode .dropdown-item,
    body.clockify-dark-mode .dropdown-subitem,
    .clockify-dark-mode .dropdown-header,
    .clockify-dark-mode .dropdown-item,
    .clockify-dark-mode .dropdown-subitem {
        color: #90a4ae
    }

    body.clockify-dark-mode .dropdown-divider,
    .clockify-dark-mode .dropdown-divider {
        border-bottom: 1px dotted #263238
    }

    body.clockify-dark-mode .rectangle,
    .clockify-dark-mode .rectangle {
        background-color: #12191d;
        box-shadow: none
    }

    body.clockify-dark-mode .time-entries-list,
    .clockify-dark-mode .time-entries-list {
        border: 1px solid #12191d
    }

    body.clockify-dark-mode .time-entries-list-time,
    .clockify-dark-mode .time-entries-list-time {
        background-color: #12191d;
        border-bottom: 1px solid #12191d
    }

    body.clockify-dark-mode .time-entries-list-total,
    body.clockify-dark-mode .time-entries-list-day,
    .clockify-dark-mode .time-entries-list-total,
    .clockify-dark-mode .time-entries-list-day {
        color: #90a4ae
    }

    body.clockify-dark-mode .time-entries-list-total-time,
    .clockify-dark-mode .time-entries-list-total-time {
        color: #c6d2d9
    }

    body.clockify-dark-mode .time-entry,
    body.clockify-dark-mode .time-entry-locked,
    .clockify-dark-mode .time-entry,
    .clockify-dark-mode .time-entry-locked {
        background: #1d272c;
        border: 1px solid #12191d
    }

    body.clockify-dark-mode .time-entry--collapsed,
    .clockify-dark-mode .time-entry--collapsed {
        background-color: #36464f
    }

    body.clockify-dark-mode .time-entry-group-number,
    .clockify-dark-mode .time-entry-group-number {
        background-color: #12191d;
        color: #90a4ae
    }

    body.clockify-dark-mode .time-entry-group-number:hover,
    .clockify-dark-mode .time-entry-group-number:hover {
        background-color: #37474f
    }

    body.clockify-dark-mode .week-header,
    .clockify-dark-mode .week-header {
        color: #c6d2d9
    }

    body.clockify-dark-mode .week-header-total-time,
    .clockify-dark-mode .week-header-total-time {
        color: #c6d2d9
    }

    body.clockify-dark-mode .week-header-total-label,
    .clockify-dark-mode .week-header-total-label {
        color: #90a4ae
    }

    body.clockify-dark-mode .description,
    .clockify-dark-mode .description {
        color: #e4eaee
    }

    body.clockify-dark-mode .time-entry__task-name,
    body.clockify-dark-mode .time-entry__client-name,
    body.clockify-dark-mode .time-entry__right-side--duration,
    .clockify-dark-mode .time-entry__task-name,
    .clockify-dark-mode .time-entry__client-name,
    .clockify-dark-mode .time-entry__right-side--duration {
        color: #c6d2d9
    }

    body.clockify-dark-mode .no-description,
    .clockify-dark-mode .no-description {
        color: #90a4ae
    }

    body.clockify-dark-mode .dropdown-item:hover,
    body.clockify-dark-mode .dropdown-subitem:hover,
    .clockify-dark-mode .dropdown-item:hover,
    .clockify-dark-mode .dropdown-subitem:hover {
        background: #263238
    }

    body.clockify-dark-mode .duration,
    body.clockify-dark-mode .description-textarea,
    .clockify-dark-mode .duration,
    .clockify-dark-mode .description-textarea {
        border: 1px solid #12191d;
        background-color: #263238
    }

    body.clockify-dark-mode .ant-time-picker-input,
    .clockify-dark-mode .ant-time-picker-input {
        background-color: #263238;
        color: #c6d2d9
    }

    body.clockify-dark-mode .duration-duration,
    .clockify-dark-mode .duration-duration {
        background-color: #263238;
        color: #c6d2d9
    }

    body.clockify-dark-mode .duration-label,
    .clockify-dark-mode .duration-label {
        color: #90a4ae
    }

    body.clockify-dark-mode .edit-form-description,
    .clockify-dark-mode .edit-form-description {
        background-color: #263238;
        color: #c6d2d9
    }

    body.clockify-dark-mode .edit-form-description::placeholder,
    .clockify-dark-mode .edit-form-description::placeholder {
        color: #90a4ae
    }

    body.clockify-dark-mode textarea.custom-field-text,
    .clockify-dark-mode textarea.custom-field-text {
        color: #c6d2d9;
        background-color: #263238;
        border: 1px solid #12191d
    }

    body.clockify-dark-mode textarea.custom-field-text-disabled,
    .clockify-dark-mode textarea.custom-field-text-disabled {
        border: 1px solid #12191d !important;
        background-color: #36464f !important;
        cursor: not-allowed;
        color: #90a4ae !important
    }

    body.clockify-dark-mode textarea.custom-field-text-disabled::placeholder,
    .clockify-dark-mode textarea.custom-field-text-disabled::placeholder {
        color: #90a4ae !important
    }

    body.clockify-dark-mode textarea.custom-field-text::placeholder,
    .clockify-dark-mode textarea.custom-field-text::placeholder {
        color: #607d8b !important;
        opacity: 1
    }

    body.clockify-dark-mode .clockify-switch-label,
    .clockify-dark-mode .clockify-switch-label {
        color: #8fa2ad !important
    }

    body.clockify-dark-mode div.custom-field-inner-checkbox,
    .clockify-dark-mode div.custom-field-inner-checkbox {
        background-color: #36464f !important
    }

    body.clockify-dark-mode div.custom-field-inner-checkbox-disabled,
    .clockify-dark-mode div.custom-field-inner-checkbox-disabled {
        border: none !important;
        background-color: initial !important
    }

    body.clockify-dark-mode .clockify-link-input-disabled,
    body.clockify-dark-mode .custom-field-number-disabled,
    .clockify-dark-mode .clockify-link-input-disabled,
    .clockify-dark-mode .custom-field-number-disabled {
        border: 1px solid #12191d !important;
        background-color: #36464f !important;
        cursor: not-allowed;
        color: #90a4ae !important
    }

    body.clockify-dark-mode .clockify-link-input-disabled::placeholder,
    body.clockify-dark-mode .custom-field-number-disabled::placeholder,
    .clockify-dark-mode .clockify-link-input-disabled::placeholder,
    .clockify-dark-mode .custom-field-number-disabled::placeholder {
        color: #90a4ae !important
    }

    body.clockify-dark-mode .tag-list-item-row,
    .clockify-dark-mode .tag-list-item-row {
        color: #fff !important
    }

    body.clockify-dark-mode .custom-fields,
    .clockify-dark-mode .custom-fields {
        background-color: #36464f !important
    }

    body.clockify-dark-mode .custom-field,
    .clockify-dark-mode .custom-field {
        background-color: rgba(0, 0, 0, 0) !important
    }

    body.clockify-dark-mode .custom-field input,
    .clockify-dark-mode .custom-field input {
        background-color: #263238 !important;
        color: #c6d2d9 !important;
        border: 1px solid #12191d;
        outline: none !important
    }

    body.clockify-dark-mode .custom-field input::placeholder,
    .clockify-dark-mode .custom-field input::placeholder {
        color: #607d8b !important;
        opacity: 1
    }

    body.clockify-dark-mode .custom-field-disabled,
    .clockify-dark-mode .custom-field-disabled {
        border: none !important;
        background-color: initial !important
    }

    body.clockify-dark-mode .description-textarea-required,
    body.clockify-dark-mode .project-list-button-required,
    body.clockify-dark-mode .tag-list-button-required,
    .clockify-dark-mode .description-textarea-required,
    .clockify-dark-mode .project-list-button-required,
    .clockify-dark-mode .tag-list-button-required {
        background-color: #263238
    }

    body.clockify-dark-mode .project-list-button,
    body.clockify-dark-mode .tag-list-button,
    body.clockify-dark-mode .edit-form-checkbox,
    body.clockify-dark-mode .tag-list-checkbox,
    body.clockify-dark-mode .default-project-checkbox,
    body.clockify-dark-mode .dark-mode__checkbox,
    body.clockify-dark-mode .settings__send-errors__checkbox,
    body.clockify-dark-mode .settings__auto_start_on_browser_start__checkbox,
    body.clockify-dark-mode .settings__auto_stop_on_browser_close__checkbox,
    body.clockify-dark-mode .settings__reminder__section__checkbox,
    body.clockify-dark-mode .settings__context_menu__section__checkbox,
    body.clockify-dark-mode .settings__idle-detection__checkbox,
    body.clockify-dark-mode .settings__stop_timer__section__checkbox,
    body.clockify-dark-mode .pomodoro__checkbox,
    body.clockify-dark-mode .create-project__checkbox,
    .clockify-dark-mode .project-list-button,
    .clockify-dark-mode .tag-list-button,
    .clockify-dark-mode .edit-form-checkbox,
    .clockify-dark-mode .tag-list-checkbox,
    .clockify-dark-mode .default-project-checkbox,
    .clockify-dark-mode .dark-mode__checkbox,
    .clockify-dark-mode .settings__send-errors__checkbox,
    .clockify-dark-mode .settings__auto_start_on_browser_start__checkbox,
    .clockify-dark-mode .settings__auto_stop_on_browser_close__checkbox,
    .clockify-dark-mode .settings__reminder__section__checkbox,
    .clockify-dark-mode .settings__context_menu__section__checkbox,
    .clockify-dark-mode .settings__idle-detection__checkbox,
    .clockify-dark-mode .settings__stop_timer__section__checkbox,
    .clockify-dark-mode .pomodoro__checkbox,
    .clockify-dark-mode .create-project__checkbox {
        background-color: #263238;
        border: 1px solid #12191d;
        flex-shrink: 0
    }

    body.clockify-dark-mode .project-list-button-disabled,
    body.clockify-dark-mode .tag-list-button-disabled,
    body.clockify-dark-mode .edit-form-checkbox-disabled,
    body.clockify-dark-mode .tag-list-checkbox-disabled,
    body.clockify-dark-mode .default-project-checkbox-disabled,
    body.clockify-dark-mode .dark-mode__checkbox-disabled,
    body.clockify-dark-mode .settings__send-errors__checkbox-disabled,
    body.clockify-dark-mode .settings__auto_start_on_browser_start__checkbox-disabled,
    body.clockify-dark-mode .settings__auto_stop_on_browser_close__checkbox-disabled,
    body.clockify-dark-mode .settings__reminder__section__checkbox-disabled,
    body.clockify-dark-mode .settings__context_menu__section__checkbox-disabled,
    body.clockify-dark-mode .settings__idle-detection__checkbox-disabled,
    body.clockify-dark-mode .settings__stop_timer__section__checkbox-disabled,
    body.clockify-dark-mode .pomodoro__checkbox-disabled,
    body.clockify-dark-mode .create-project__checkbox-disabled,
    .clockify-dark-mode .project-list-button-disabled,
    .clockify-dark-mode .tag-list-button-disabled,
    .clockify-dark-mode .edit-form-checkbox-disabled,
    .clockify-dark-mode .tag-list-checkbox-disabled,
    .clockify-dark-mode .default-project-checkbox-disabled,
    .clockify-dark-mode .dark-mode__checkbox-disabled,
    .clockify-dark-mode .settings__send-errors__checkbox-disabled,
    .clockify-dark-mode .settings__auto_start_on_browser_start__checkbox-disabled,
    .clockify-dark-mode .settings__auto_stop_on_browser_close__checkbox-disabled,
    .clockify-dark-mode .settings__reminder__section__checkbox-disabled,
    .clockify-dark-mode .settings__context_menu__section__checkbox-disabled,
    .clockify-dark-mode .settings__idle-detection__checkbox-disabled,
    .clockify-dark-mode .settings__stop_timer__section__checkbox-disabled,
    .clockify-dark-mode .pomodoro__checkbox-disabled,
    .clockify-dark-mode .create-project__checkbox-disabled {
        background-color: initial !important;
        border: 1px solid #12191d
    }

    body.clockify-dark-mode .project-list-button-disabled .tag-list-selected-item,
    body.clockify-dark-mode .project-list-button-disabled .tag-list-add,
    body.clockify-dark-mode .tag-list-button-disabled .tag-list-selected-item,
    body.clockify-dark-mode .tag-list-button-disabled .tag-list-add,
    body.clockify-dark-mode .edit-form-checkbox-disabled .tag-list-selected-item,
    body.clockify-dark-mode .edit-form-checkbox-disabled .tag-list-add,
    body.clockify-dark-mode .tag-list-checkbox-disabled .tag-list-selected-item,
    body.clockify-dark-mode .tag-list-checkbox-disabled .tag-list-add,
    body.clockify-dark-mode .default-project-checkbox-disabled .tag-list-selected-item,
    body.clockify-dark-mode .default-project-checkbox-disabled .tag-list-add,
    body.clockify-dark-mode .dark-mode__checkbox-disabled .tag-list-selected-item,
    body.clockify-dark-mode .dark-mode__checkbox-disabled .tag-list-add,
    body.clockify-dark-mode .settings__send-errors__checkbox-disabled .tag-list-selected-item,
    body.clockify-dark-mode .settings__send-errors__checkbox-disabled .tag-list-add,
    body.clockify-dark-mode .settings__auto_start_on_browser_start__checkbox-disabled .tag-list-selected-item,
    body.clockify-dark-mode .settings__auto_start_on_browser_start__checkbox-disabled .tag-list-add,
    body.clockify-dark-mode .settings__auto_stop_on_browser_close__checkbox-disabled .tag-list-selected-item,
    body.clockify-dark-mode .settings__auto_stop_on_browser_close__checkbox-disabled .tag-list-add,
    body.clockify-dark-mode .settings__reminder__section__checkbox-disabled .tag-list-selected-item,
    body.clockify-dark-mode .settings__reminder__section__checkbox-disabled .tag-list-add,
    body.clockify-dark-mode .settings__context_menu__section__checkbox-disabled .tag-list-selected-item,
    body.clockify-dark-mode .settings__context_menu__section__checkbox-disabled .tag-list-add,
    body.clockify-dark-mode .settings__idle-detection__checkbox-disabled .tag-list-selected-item,
    body.clockify-dark-mode .settings__idle-detection__checkbox-disabled .tag-list-add,
    body.clockify-dark-mode .settings__stop_timer__section__checkbox-disabled .tag-list-selected-item,
    body.clockify-dark-mode .settings__stop_timer__section__checkbox-disabled .tag-list-add,
    body.clockify-dark-mode .pomodoro__checkbox-disabled .tag-list-selected-item,
    body.clockify-dark-mode .pomodoro__checkbox-disabled .tag-list-add,
    body.clockify-dark-mode .create-project__checkbox-disabled .tag-list-selected-item,
    body.clockify-dark-mode .create-project__checkbox-disabled .tag-list-add,
    .clockify-dark-mode .project-list-button-disabled .tag-list-selected-item,
    .clockify-dark-mode .project-list-button-disabled .tag-list-add,
    .clockify-dark-mode .tag-list-button-disabled .tag-list-selected-item,
    .clockify-dark-mode .tag-list-button-disabled .tag-list-add,
    .clockify-dark-mode .edit-form-checkbox-disabled .tag-list-selected-item,
    .clockify-dark-mode .edit-form-checkbox-disabled .tag-list-add,
    .clockify-dark-mode .tag-list-checkbox-disabled .tag-list-selected-item,
    .clockify-dark-mode .tag-list-checkbox-disabled .tag-list-add,
    .clockify-dark-mode .default-project-checkbox-disabled .tag-list-selected-item,
    .clockify-dark-mode .default-project-checkbox-disabled .tag-list-add,
    .clockify-dark-mode .dark-mode__checkbox-disabled .tag-list-selected-item,
    .clockify-dark-mode .dark-mode__checkbox-disabled .tag-list-add,
    .clockify-dark-mode .settings__send-errors__checkbox-disabled .tag-list-selected-item,
    .clockify-dark-mode .settings__send-errors__checkbox-disabled .tag-list-add,
    .clockify-dark-mode .settings__auto_start_on_browser_start__checkbox-disabled .tag-list-selected-item,
    .clockify-dark-mode .settings__auto_start_on_browser_start__checkbox-disabled .tag-list-add,
    .clockify-dark-mode .settings__auto_stop_on_browser_close__checkbox-disabled .tag-list-selected-item,
    .clockify-dark-mode .settings__auto_stop_on_browser_close__checkbox-disabled .tag-list-add,
    .clockify-dark-mode .settings__reminder__section__checkbox-disabled .tag-list-selected-item,
    .clockify-dark-mode .settings__reminder__section__checkbox-disabled .tag-list-add,
    .clockify-dark-mode .settings__context_menu__section__checkbox-disabled .tag-list-selected-item,
    .clockify-dark-mode .settings__context_menu__section__checkbox-disabled .tag-list-add,
    .clockify-dark-mode .settings__idle-detection__checkbox-disabled .tag-list-selected-item,
    .clockify-dark-mode .settings__idle-detection__checkbox-disabled .tag-list-add,
    .clockify-dark-mode .settings__stop_timer__section__checkbox-disabled .tag-list-selected-item,
    .clockify-dark-mode .settings__stop_timer__section__checkbox-disabled .tag-list-add,
    .clockify-dark-mode .pomodoro__checkbox-disabled .tag-list-selected-item,
    .clockify-dark-mode .pomodoro__checkbox-disabled .tag-list-add,
    .clockify-dark-mode .create-project__checkbox-disabled .tag-list-selected-item,
    .clockify-dark-mode .create-project__checkbox-disabled .tag-list-add {
        color: #90a4ae
    }

    body.clockify-dark-mode .tag-list-add,
    body.clockify-dark-mode .edit-form-billable,
    .clockify-dark-mode .tag-list-add,
    .clockify-dark-mode .edit-form-billable {
        color: #c6d2d9 !important
    }

    body.clockify-dark-mode .checked,
    .clockify-dark-mode .checked {
        width: 18px;
        height: 18px;
        background: #03a9f4;
        border: none
    }

    body.clockify-dark-mode .checked img,
    .clockify-dark-mode .checked img {
        margin-top: 3px;
        margin-left: 2px
    }

    body.clockify-dark-mode .delete-entry-confirmation-dialog,
    .clockify-dark-mode .delete-entry-confirmation-dialog {
        background-color: #263238
    }

    body.clockify-dark-mode .delete-entry-confirmation-dialog-open,
    .clockify-dark-mode .delete-entry-confirmation-dialog-open {
        background-color: rgba(0, 0, 0, .8)
    }

    body.clockify-dark-mode .delete-entry-confirmation-dialog__question,
    .clockify-dark-mode .delete-entry-confirmation-dialog__question {
        color: #90a4ae
    }

    body.clockify-dark-mode .project-list-dropdown,
    body.clockify-dark-mode .tag-list-dropdown,
    .clockify-dark-mode .project-list-dropdown,
    .clockify-dark-mode .tag-list-dropdown {
        background: #12191d;
        box-shadow: none
    }

    body.clockify-dark-mode .project-list-input,
    body.clockify-dark-mode .tag-list-input,
    .clockify-dark-mode .project-list-input,
    .clockify-dark-mode .tag-list-input {
        background: #12191d !important
    }

    body.clockify-dark-mode .project-list-input input,
    body.clockify-dark-mode .tag-list-input input,
    .clockify-dark-mode .project-list-input input,
    .clockify-dark-mode .tag-list-input input {
        background: #263238 !important;
        border: 1px solid #12191d;
        color: #90a4ae
    }

    body.clockify-dark-mode .project-list-input input::placeholder,
    body.clockify-dark-mode .tag-list-input input::placeholder,
    .clockify-dark-mode .project-list-input input::placeholder,
    .clockify-dark-mode .tag-list-input input::placeholder {
        color: #90a4ae
    }

    body.clockify-dark-mode .project-list-client,
    .clockify-dark-mode .project-list-client {
        color: #90a4ae;
        border-top: 1px dotted #263238
    }

    body.clockify-dark-mode .tag-list-item,
    body.clockify-dark-mode .tag-list-load,
    .clockify-dark-mode .tag-list-item,
    .clockify-dark-mode .tag-list-load {
        color: #90a4ae
    }

    body.clockify-dark-mode hr,
    .clockify-dark-mode hr {
        border-bottom: 1px dotted #12191d
    }

    body.clockify-dark-mode .user-settings:last-child,
    .clockify-dark-mode .user-settings:last-child {
        color: #90a4ae
    }

    body.clockify-dark-mode .time-entries-list-not-synced,
    .clockify-dark-mode .time-entries-list-not-synced {
        border: 1px solid #12191d;
        border-radius: 2px
    }

    body.clockify-dark-mode .time-entry-not-synced,
    .clockify-dark-mode .time-entry-not-synced {
        background: #263238;
        border-bottom: 1px solid #12191d
    }

    body.clockify-dark-mode .time-entry-not-synced span,
    .clockify-dark-mode .time-entry-not-synced span {
        color: #90a4ae
    }

    body.clockify-dark-mode .user-settings,
    .clockify-dark-mode .user-settings {
        border-top: 1px dotted #12191d;
        border-bottom: 1px dotted #12191d
    }

    body.clockify-dark-mode .user-settings span,
    .clockify-dark-mode .user-settings span {
        color: #90a4ae
    }

    body.clockify-dark-mode .workspace-list-title,
    body.clockify-dark-mode .default-project-title,
    body.clockify-dark-mode .dark-mode__title,
    body.clockify-dark-mode .settings__send-errors__title,
    body.clockify-dark-mode .settings__send-errors__title--shortcut,
    body.clockify-dark-mode .settings__auto_start_on_browser_start__title,
    body.clockify-dark-mode .settings__auto_stop_on_browser_close__title,
    body.clockify-dark-mode .pomodoro__title,
    .clockify-dark-mode .workspace-list-title,
    .clockify-dark-mode .default-project-title,
    .clockify-dark-mode .dark-mode__title,
    .clockify-dark-mode .settings__send-errors__title,
    .clockify-dark-mode .settings__send-errors__title--shortcut,
    .clockify-dark-mode .settings__auto_start_on_browser_start__title,
    .clockify-dark-mode .settings__auto_stop_on_browser_close__title,
    .clockify-dark-mode .pomodoro__title {
        color: #e4eaee
    }

    body.clockify-dark-mode .workspace-list-selection,
    .clockify-dark-mode .workspace-list-selection {
        background: #263238;
        border: 1px solid #12191d
    }

    body.clockify-dark-mode .workspace-list-default,
    .clockify-dark-mode .workspace-list-default {
        color: #90a4ae
    }

    body.clockify-dark-mode .settings__reminder,
    body.clockify-dark-mode .settings__stop_timer,
    .clockify-dark-mode .settings__reminder,
    .clockify-dark-mode .settings__stop_timer {
        background: #12191d
    }

    body.clockify-dark-mode .settings__stop_timer p,
    .clockify-dark-mode .settings__stop_timer p {
        color: #90a4ae
    }

    body.clockify-dark-mode .settings__reminder__week__day,
    .clockify-dark-mode .settings__reminder__week__day {
        background: #263238;
        border: 1px solid #263238
    }

    body.clockify-dark-mode .settings__reminder__week__day span,
    .clockify-dark-mode .settings__reminder__week__day span {
        color: #90a4ae
    }

    body.clockify-dark-mode .day-active,
    .clockify-dark-mode .day-active {
        background: #03a9f4;
        border: 1px solid #03a9f4
    }

    body.clockify-dark-mode .day-active span,
    .clockify-dark-mode .day-active span {
        color: #fff
    }

    body.clockify-dark-mode .settings__reminder__times--from p,
    body.clockify-dark-mode .settings__reminder__times--to p,
    body.clockify-dark-mode .stop_timer__times--picker p,
    .clockify-dark-mode .settings__reminder__times--from p,
    .clockify-dark-mode .settings__reminder__times--to p,
    .clockify-dark-mode .stop_timer__times--picker p {
        color: #90a4ae
    }

    body.clockify-dark-mode .settings__reminder__time_picker .ant-time-picker-input,
    body.clockify-dark-mode .settings__stop_timer__time_picker .ant-time-picker-input,
    .clockify-dark-mode .settings__reminder__time_picker .ant-time-picker-input,
    .clockify-dark-mode .settings__stop_timer__time_picker .ant-time-picker-input {
        border: 1px solid #12191d
    }

    body.clockify-dark-mode .settings__reminder__times--minutes_since_last_entry input,
    .clockify-dark-mode .settings__reminder__times--minutes_since_last_entry input {
        background: #263238;
        border: 1px solid #12191d;
        color: #e4eaee
    }

    body.clockify-dark-mode .settings__reminder__times--minutes_since_last_entry p,
    .clockify-dark-mode .settings__reminder__times--minutes_since_last_entry p {
        color: #90a4ae
    }

    body.clockify-dark-mode .settings__idle-detection__box,
    .clockify-dark-mode .settings__idle-detection__box {
        background-color: #12191d
    }

    body.clockify-dark-mode .settings__idle-detection__box__content p,
    .clockify-dark-mode .settings__idle-detection__box__content p {
        color: #90a4ae
    }

    body.clockify-dark-mode .settings__idle-detection__box__content input,
    .clockify-dark-mode .settings__idle-detection__box__content input {
        background: #263238;
        border: 1px solid #12191d;
        color: #e4eaee
    }

    body.clockify-dark-mode .pomodoro__content,
    .clockify-dark-mode .pomodoro__content {
        background: #12191d
    }

    body.clockify-dark-mode .pomodoro__border,
    .clockify-dark-mode .pomodoro__border {
        border-bottom: 1px solid #263238
    }

    body.clockify-dark-mode .pomodoro__switch,
    .clockify-dark-mode .pomodoro__switch {
        background-color: #263238;
        border: 1px solid #12191d
    }

    body.clockify-dark-mode .pomodoro__switch::after,
    .clockify-dark-mode .pomodoro__switch::after {
        background-color: #90a4ae
    }

    body.clockify-dark-mode .ant-switch-checked,
    .clockify-dark-mode .ant-switch-checked {
        background-color: #03a9f4
    }

    body.clockify-dark-mode .ant-switch-checked::after,
    .clockify-dark-mode .ant-switch-checked::after {
        background-color: #fff
    }

    body.clockify-dark-mode .pomodoro__box__content p,
    .clockify-dark-mode .pomodoro__box__content p {
        color: #90a4ae
    }

    body.clockify-dark-mode .pomodoro__box__content input,
    .clockify-dark-mode .pomodoro__box__content input {
        background: #263238;
        border: 1px solid #12191d;
        color: #e4eaee
    }

    body.clockify-dark-mode .default-project__project-list,
    .clockify-dark-mode .default-project__project-list {
        background: #12191d
    }

    body.clockify-dark-mode .project-list-arrow,
    body.clockify-dark-mode .tag-list-arrow,
    .clockify-dark-mode .project-list-arrow,
    .clockify-dark-mode .tag-list-arrow {
        width: 10px;
        height: 5px;
        content: url(assets/images/arrow-dark-mode.png)
    }

    body.clockify-dark-mode .project-list-arrow-up,
    body.clockify-dark-mode .tag-list-arrow-up,
    .clockify-dark-mode .project-list-arrow-up,
    .clockify-dark-mode .tag-list-arrow-up {
        width: 10px;
        height: 5px;
        content: url(assets/images/arrow-dark-mode-up.png)
    }

    body.clockify-dark-mode .dropdown-item:hover,
    body.clockify-dark-mode .dropdown-subitem:hover,
    .clockify-dark-mode .dropdown-item:hover,
    .clockify-dark-mode .dropdown-subitem:hover {
        background: #263238
    }

    body.clockify-dark-mode .workspace-list-item:hover,
    .clockify-dark-mode .workspace-list-item:hover {
        background-color: #263238
    }

    body.clockify-dark-mode .workspace-list-dropdown,
    .clockify-dark-mode .workspace-list-dropdown {
        background: #12191d;
        box-shadow: 0 5px 7px #000
    }

    body.clockify-dark-mode .workspace-list-item__name,
    .clockify-dark-mode .workspace-list-item__name {
        color: #90a4ae
    }

    body.clockify-dark-mode .duration-divider,
    .clockify-dark-mode .duration-divider {
        border-left: 1px dotted #12191d;
        background-color: #12191d
    }

    body.clockify-dark-mode ul.project-item:hover,
    .clockify-dark-mode ul.project-item:hover {
        background-color: #263238
    }

    body.clockify-dark-mode li.project-item-name,
    .clockify-dark-mode li.project-item-name {
        color: #fff
    }

    body.clockify-dark-mode .project-list-name,
    .clockify-dark-mode .project-list-name {
        color: #90a4ae
    }

    body.clockify-dark-mode .project-name,
    .clockify-dark-mode .project-name {
        color: #90a4ae
    }

    body.clockify-dark-mode .task-item,
    .clockify-dark-mode .task-item {
        color: #90a4ae;
        background-color: #263238
    }

    body.clockify-dark-mode .task-item:hover,
    .clockify-dark-mode .task-item:hover {
        background-color: #37474f
    }

    body.clockify-dark-mode .tag-list-item,
    .clockify-dark-mode .tag-list-item {
        color: #90a4ae
    }

    body.clockify-dark-mode .tag-list-item-row:hover,
    .clockify-dark-mode .tag-list-item-row:hover {
        background-color: #263238
    }

    body.clockify-dark-mode .tag-list-selected-item,
    .clockify-dark-mode .tag-list-selected-item {
        color: #c6d2d9
    }

    body.clockify-dark-mode .projects-list__create-task,
    .clockify-dark-mode .projects-list__create-task {
        background-color: #263238
    }

    body.clockify-dark-mode .projects-list__create-project,
    body.clockify-dark-mode .tag-list__create-tag,
    body.clockify-dark-mode .client-list__create-client,
    body.clockify-dark-mode .client-list-dropdown,
    .clockify-dark-mode .projects-list__create-project,
    .clockify-dark-mode .tag-list__create-tag,
    .clockify-dark-mode .client-list__create-client,
    .clockify-dark-mode .client-list-dropdown {
        background-color: #12191d;
        box-shadow: none
    }

    body.clockify-dark-mode .create-project,
    body.clockify-dark-mode .create-task,
    .clockify-dark-mode .create-project,
    .clockify-dark-mode .create-task {
        background-color: #37474f
    }

    body.clockify-dark-mode .create-project__title,
    body.clockify-dark-mode .create-task__title,
    .clockify-dark-mode .create-project__title,
    .clockify-dark-mode .create-task__title {
        color: #c6d2d9
    }

    body.clockify-dark-mode .create-project__project-name,
    body.clockify-dark-mode .create-task__task-name,
    .clockify-dark-mode .create-project__project-name,
    .clockify-dark-mode .create-task__task-name {
        border: 1px solid #12191d;
        background-color: #263238;
        color: #c6d2d9
    }

    body.clockify-dark-mode .create-project__project-name::placeholder,
    body.clockify-dark-mode .create-task__task-name::placeholder,
    .clockify-dark-mode .create-project__project-name::placeholder,
    .clockify-dark-mode .create-task__task-name::placeholder {
        color: #90a4ae
    }

    body.clockify-dark-mode .create-project__project-name:focus,
    body.clockify-dark-mode .create-task__task-name:focus,
    .clockify-dark-mode .create-project__project-name:focus,
    .clockify-dark-mode .create-task__task-name:focus {
        outline: none;
        border: 2px solid #0f3beb;
        border-radius: 5px
    }

    body.clockify-dark-mode .color-picker__title,
    body.clockify-dark-mode .create-project__billable-title,
    body.clockify-dark-mode .create-project__public-title,
    .clockify-dark-mode .color-picker__title,
    .clockify-dark-mode .create-project__billable-title,
    .clockify-dark-mode .create-project__public-title {
        color: #90a4ae
    }

    body.clockify-dark-mode .create-project__divider,
    .clockify-dark-mode .create-project__divider {
        border-bottom: 1px dotted #12191d
    }

    body.clockify-dark-mode .client-list-button,
    .clockify-dark-mode .client-list-button {
        border: 1px solid #12191d;
        background-color: #263238
    }

    body.clockify-dark-mode .client-list-name,
    .clockify-dark-mode .client-list-name {
        color: #90a4ae
    }

    body.clockify-dark-mode .client-list-arrow,
    .clockify-dark-mode .client-list-arrow {
        content: url(assets/images/arrow-dark-mode.png)
    }

    body.clockify-dark-mode .client-list-input,
    .clockify-dark-mode .client-list-input {
        background: #12191d
    }

    body.clockify-dark-mode .client-list-filter,
    .clockify-dark-mode .client-list-filter {
        background-color: #263238;
        border: none
    }

    body.clockify-dark-mode .client-list-filter::placeholder,
    .clockify-dark-mode .client-list-filter::placeholder {
        color: #c6d2d9
    }

    body.clockify-dark-mode .client-list-client,
    .clockify-dark-mode .client-list-client {
        color: #90a4ae
    }

    body.clockify-dark-mode .client-list__create-form,
    .clockify-dark-mode .client-list__create-form {
        background-color: #37474f
    }

    body.clockify-dark-mode .client-list__create-form--open,
    .clockify-dark-mode .client-list__create-form--open {
        background-color: rgba(0, 0, 0, .5)
    }

    body.clockify-dark-mode .client-list__create-form--divider,
    .clockify-dark-mode .client-list__create-form--divider {
        border-bottom: 1px dotted #12191d
    }

    body.clockify-dark-mode .client-list__create-form--title,
    .clockify-dark-mode .client-list__create-form--title {
        color: #c6d2d9
    }

    body.clockify-dark-mode .client-list__create-form--client-name,
    .clockify-dark-mode .client-list__create-form--client-name {
        border: 1px solid #12191d;
        background-color: #263238;
        color: #c6d2d9
    }

    body.clockify-dark-mode .client-list__create-form--client-name::placeholder,
    .clockify-dark-mode .client-list__create-form--client-name::placeholder {
        color: #90a4ae
    }

    body.clockify-dark-mode .tag-list--not_tags,
    .clockify-dark-mode .tag-list--not_tags {
        color: #8c9fa9
    }

    body.clockify-dark-mode .tag-list__create-form,
    body.clockify-dark-mode .poppup-modal,
    .clockify-dark-mode .tag-list__create-form,
    .clockify-dark-mode .poppup-modal {
        background-color: #37474f
    }

    body.clockify-dark-mode .tag-list__create-form--open,
    body.clockify-dark-mode .poppup-modal--open,
    .clockify-dark-mode .tag-list__create-form--open,
    .clockify-dark-mode .poppup-modal--open {
        background-color: rgba(0, 0, 0, .5)
    }

    body.clockify-dark-mode .tag-list__create-form--divider,
    body.clockify-dark-mode .poppup-modal--divider,
    .clockify-dark-mode .tag-list__create-form--divider,
    .clockify-dark-mode .poppup-modal--divider {
        border-bottom: 1px dotted #12191d
    }

    body.clockify-dark-mode .tag-list__create-form--title,
    body.clockify-dark-mode .tag-list__create-form p,
    body.clockify-dark-mode .poppup-modal--title,
    body.clockify-dark-mode .poppup-modal p,
    .clockify-dark-mode .tag-list__create-form--title,
    .clockify-dark-mode .tag-list__create-form p,
    .clockify-dark-mode .poppup-modal--title,
    .clockify-dark-mode .poppup-modal p {
        color: #c6d2d9
    }

    body.clockify-dark-mode .tag-list__create-form--tag-name,
    body.clockify-dark-mode .poppup-modal--tag-name,
    .clockify-dark-mode .tag-list__create-form--tag-name,
    .clockify-dark-mode .poppup-modal--tag-name {
        border: 1px solid #12191d;
        background-color: #263238;
        color: #c6d2d9
    }

    body.clockify-dark-mode .tag-list__create-form--tag-name::placeholder,
    body.clockify-dark-mode .poppup-modal--tag-name::placeholder,
    .clockify-dark-mode .tag-list__create-form--tag-name::placeholder,
    .clockify-dark-mode .poppup-modal--tag-name::placeholder {
        color: #90a4ae
    }

    body.clockify-dark-mode .clockify-modal-content,
    .clockify-dark-mode .clockify-modal-content {
        background-color: #37474f;
        border: none;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, .25)
    }

    body.clockify-dark-mode .clockify-modal-content .cl-modal-title,
    body.clockify-dark-mode .clockify-modal-content .custom-field-link-label,
    .clockify-dark-mode .clockify-modal-content .cl-modal-title,
    .clockify-dark-mode .clockify-modal-content .custom-field-link-label {
        color: #c6d2d9
    }

    body.clockify-dark-mode .clockify-modal-content .custom-field-link,
    .clockify-dark-mode .clockify-modal-content .custom-field-link {
        background-color: #263238;
        color: #c6d2d9
    }

    body.clockify-dark-mode .clockify-modal-content .cl-close,
    .clockify-dark-mode .clockify-modal-content .cl-close {
        background: none
    }

    body.clockify-dark-mode .clockify-modal-content .cl-close .clockify-close,
    .clockify-dark-mode .clockify-modal-content .cl-close .clockify-close {
        background: none
    }

    body.clockify-dark-mode .clockify-modal-content .cl-modal-header,
    .clockify-dark-mode .clockify-modal-content .cl-modal-header {
        border-bottom: 1px dotted #12191d
    }

    body.clockify-dark-mode .clockify-modal-content .cl-modal-footer,
    .clockify-dark-mode .clockify-modal-content .cl-modal-footer {
        border-top: 1px dotted #12191d
    }

    body.clockify-dark-mode .tag-list-item--comma,
    .clockify-dark-mode .tag-list-item--comma {
        color: #fff
    }

    body.clockify-dark-mode .app-version,
    .clockify-dark-mode .app-version {
        color: #c6d2d9
    }

    body.clockify-dark-mode .clockify-error,
    .clockify-dark-mode .clockify-error {
        color: red;
        font-size: 14px
    }

    body.clockify-dark-mode .loading-entries,
    .clockify-dark-mode .loading-entries {
        color: #c6d2d9
    }

    body.clockify-dark-mode .autocomplete-dropdown-item,
    .clockify-dark-mode .autocomplete-dropdown-item {
        color: #90a4ae;
        background-color: #1d272c
    }

    body.clockify-dark-mode .autocomplete-dropdown-item:hover,
    .clockify-dark-mode .autocomplete-dropdown-item:hover {
        background-color: #263238
    }

    body.clockify-dark-mode .autocomplete-dropdown-item__tag,
    .clockify-dark-mode .autocomplete-dropdown-item__tag {
        color: #90a4ae;
        background: #12191d
    }

    body.clockify-dark-mode .autocomplete-dropdown-item__tag:hover,
    .clockify-dark-mode .autocomplete-dropdown-item__tag:hover {
        background: #37474f
    }

    body.clockify-dark-mode .react-autocomplete>div,
    .clockify-dark-mode .react-autocomplete>div {
        background: #1d272c !important
    }

    body.clockify-dark-mode .edit-form__break-label,
    .clockify-dark-mode .edit-form__break-label {
        background: #263238;
        color: #c6d2d9
    }

    body.clockify-dark-mode.clockify-integration-popup,
    .clockify-dark-mode.clockify-integration-popup {
        color: #c6d2d9
    }

    body.clockify-dark-mode div.custom-field-ta,
    .clockify-dark-mode div.custom-field-ta {
        background-color: #37474f !important
    }

    body.clockify-dark-mode .clockify-manual-entry-header-text,
    .clockify-dark-mode .clockify-manual-entry-header-text {
        color: #f4f4f4
    }

    body.clockify-dark-mode .notification .notification-title,
    .clockify-dark-mode .notification .notification-title {
        color: #c6d2d9 !important
    }

    body.clockify-dark-mode .notification .notification-message,
    .clockify-dark-mode .notification .notification-message {
        color: #c6d2d9 !important
    }

    body.clockify-dark-mode .notification:hover,
    .clockify-dark-mode .notification:hover {
        background-color: #263238 !important
    }

    style {
        display: none
    }

    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3Nhc3MvX2ludGVncmF0aW9uLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zYXNzL3ZhcmlhYmxlcy9fY29sb3JzLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zYXNzL21haW4taW50ZWdyYXRpb24uc2NzcyIsIndlYnBhY2s6Ly8uL3Nhc3MvX2dsb2JhbC5zY3NzIiwid2VicGFjazovLy4vbm9kZV9tb2R1bGVzL2FudGQvbGliL3N3aXRjaC9zdHlsZS9pbmRleC5jc3MiLCJ3ZWJwYWNrOi8vLi9zYXNzL19zdGFydC10aW1lci5zY3NzIiwid2VicGFjazovLy4vc2Fzcy9fZHVyYXRpb24uc2NzcyIsIndlYnBhY2s6Ly8uL3Nhc3MvX2VkaXQtZm9ybS5zY3NzIiwid2VicGFjazovLy4vc2Fzcy9fcHJvamVjdHMtbGlzdC5zY3NzIiwid2VicGFjazovLy4vc2Fzcy9fdGFnLWxpc3Quc2NzcyIsIndlYnBhY2s6Ly8uL3Nhc3MvX3BvcHB1cC1tb2RhbC5zY3NzIiwid2VicGFjazovLy4vc2Fzcy9fY3VzdG9tLWZpZWxkcy5zY3NzIiwid2VicGFjazovLy4vc2Fzcy9fcmVxdWlyZWQtZmllbGRzLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zYXNzL190b2FzdGVyLnNjc3MiLCJ3ZWJwYWNrOi8vLi9zYXNzL19kYXJrLW1vZGUuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFFQSw0QkFDQyxrQkFBQSxDQUNBLGtFQUFBLENBQ0EsV0FBQSxDQUNBLGNBQUEsQ0FDQSxPQUFBLENBQ0EsU0FBQSxDQUNBLGVBQUEsQ0FDQSxlQUFBLENBQ0EsNkJBQUEsQ0FDQSxVQ0dXLENERlgsY0FBQSxDQUVBLHlDQUNDLG9CQUFBLENBQ0EsbUJBQUEsQ0FHRCxnRUFFQyxzQkFBQSxDQUdELHNEQUNDLHFCQUFBLENBRUQsdUVBRUMsZUFBQSxDQUVELGtDQUNDLCtCQUFBLENBQ0Esa0JBQUEsQ0FFRCxpQ0FDQyxVQUFBLENBR0QsdUNBQ0MsVUFBQSxDQUNBLFdBQUEsQ0FDQSxjQUFBLENBQ0EsaUJBQUEsQ0FDQSxRQUFBLENBQ0EsVUFBQSxDQUVELG1DQUNDLFdBQUEsQ0FDQSxpQkFBQSxDQUdELGdEQUNDLDRCQUFBLENBRUQsMkNBQ0MsYUFBQSxDQUVELHdDQUNDLGVBQUEsQ0FJRixxQ0FFQyxjQUFBLENBQ0EsY0FBQSxDQUNBLDBGQUVDLHNCQUFBLENBSUYsZ0JBQ0MsdUJBQUEsQ0FDQSw2QkFBQSxDQUdELG9CQUNDLHVCQUFBLENBQ0EsNkJBQUEsQ0FDQSxzQkFBQSxDQUdELHlCQUNDLGVBQUEsQ0FHRCx3QkFDQyxhQUFBLENBR0QsMEJBQ0MsVUFBQSxDQUdELDREQUVDLGVBQUEsQ0FDQSxVQUFBLENBQ0EsaUJBQUEsQ0FHRCxnQkFDQyx3QkFBQSxDQUNBLGlCQUFBLENBQ0EsV0FBQSxDQUNBLGdCQUFBLENBQ0EsV0FBQSxDQUNBLGNBQUEsQ0FHRCw0Q0FFQyxZQUFBLENBQ0Esa0NBQUEsQ0FDQSx3QkFBQSxDQUNBLHFCQUFBLENBR0QsdUNBQ0Msb0JBQUEsQ0FDQSxVQUFBLENBQ0EscUJBQUEsQ0FHRCx1Q0FDQyxvQkFBQSxDQUNBLGFBQUEsQ0FDQSx3QkFBQSxDQUdELHFDQUNDLG9CQUFBLENBQ0EsYUFBQSxDQUNBLHdCQUFBLENBR0QsbUNBQ0MsZ0JBQUEsQ0FJQSxzQ0FDQyxpQkFBQSxDQUlBLDRDQUNDLGtCQUFBLENBSUQsa0RBQ0MsaUJBQUEsQ0FFQSx5REFDQyxrQkFBQSxDQUdELCtEQUNDLGlCQUFBLENBTUosa0NBQ0MsWUFBQSxDQUNBLGtCQUFBLENBQ0EsT0FBQSxDQUNBLGNBQUEsQ0FDQSxpQkFBQSxDQUNBLFVBQUEsQ0U1S0QsNEJDRFEsb0NBQUEsQ0FDQSxvQ0FBQSxDQ0VSLHdDQUNFLFFBQUEsQ0FDQSxTQUFBLENBQ0EseUJBQUEsQ0FDQSxjQUFBLENBQ0EseUJBQUEsQ0FDQSxrQkFBQSxDQUNBLGVBQUEsQ0FDQSw0QkFBQSxDQUNBLGlCQUFBLENBQ0Esb0JBQUEsQ0FDQSxxQkFBQSxDQUNBLGNBQUEsQ0FDQSxXQUFBLENBQ0EsZ0JBQUEsQ0FDQSxxQkFBQSxDQUNBLG9DQUFBLENBQ0EsUUFBQSxDQUNBLG1CQUFBLENBQ0EsY0FBQSxDQUNBLGtCQUFBLENBQ0Esd0JBQUEsQ0FDRyxxQkFBQSxDQUNDLG9CQUFBLENBQ0ksZ0JBQUEsQ0FFViw4Q0FDRSxTQUFBLENBQ0EsdUNBQUEsQ0FFRixzREFDRSw0QkFBQSxDQUVGLG9EQUNFLGVBQUEsQ0FFRixnREFDRSx3QkFBQSxDQUVGLGlHQUVFLGtCQUFBLENBQ0EsVUFBQSxDQUVGLHFHQUVFLGVBQUEsQ0FDQSxrQkFBQSxDQUVGLDhDQUNFLGFBQUEsQ0FDQSxtQkFBQSxDQUNBLFVBQUEsQ0FDQSxjQUFBLENBQ0EscUJBQUEsQ0FFRixrRUFDRSxtQkFBQSxDQUVGLCtDQUNFLGlCQUFBLENBQ0EsT0FBQSxDQUNBLFFBQUEsQ0FDQSxVQUFBLENBQ0EsV0FBQSxDQUNBLDhCQUFBLENBRUYsdURBQ0UsaUJBQUEsQ0FDQSxLQUFBLENBQ0EsT0FBQSxDQUNBLFFBQUEsQ0FDQSxNQUFBLENBQ0EscUJBQUEsQ0FDQSxpQkFBQSxDQUNBLDJDQUFBLENBQ0EsOEJBQUEsQ0FDQSxVQUFBLENBRUYsbUVBQ0UsNEJBQUEsQ0FFRixvR0FDRSxVQUFBLENBQ0EsTUFBQSxDQUVGLHVIQUNFLE9BQUEsQ0FDQSxTQUFBLENBRUYsNkRBQ0UsaUJBQUEsQ0FDQSxPQUFBLENBQ0EseUJBQUEsQ0FDQSxrQkFBQSxDQUVGLHlFQUNFLGFBQUEsQ0FFRiw4Q0FDRSxjQUFBLENBQ0EsV0FBQSxDQUNBLGdCQUFBLENBRUYsZ0VBQ0UsbUJBQUEsQ0FDQSxjQUFBLENBRUYsaUVBQ0UsVUFBQSxDQUNBLFdBQUEsQ0FFRix1RUFDRSxTQUFBLENBQ0EsYUFBQSxDQUVGLG1GQUNFLG1CQUFBLENBRUYsb0ZBQ0UsNEJBQUEsQ0FFRiw0Q0FDRSxhQUFBLENBRUYsOERBQ0UsbUJBQUEsQ0FFRiwrREFDRSxTQUFBLENBQ0EsU0FBQSxDQUVGLDRHQUNFLE9BQUEsQ0FDQSxTQUFBLENBRUYsK0hBQ0UsVUFBQSxDQUNBLE1BQUEsQ0FFRixpRkFDRSxtQkFBQSxDQUVGLGtGQUNFLDZCQUFBLENBRUYsbUdBQ0UsNkJBQUEsQ0NySkYseUNBQ0UsaUJBQUEsQ0FDQSxZQUFBLENBQ0EsNkJBQUEsQ0FDQSxXQUFBLENBQ0EsZ0JBQUEsQ0FDQSxlQUFBLENBQ0Esd0JBQUEsQ0FDQSxpQkFBQSxDQUdGLG9EQUNFLFdBQUEsQ0FDQSxXQUFBLENBQ0EsVUFBQSxDQUNBLFdBQUEsQ0FDQSxpQkFBQSxDQUNBLGtCSm5CSSxDSW9CSixhSlpXLENJYVgsY0FBQSxDQUdGLHdFQUNFLFlBQUEsQ0FHRix1RUFDRSxhQUFBLENBR0YseUNBQ0UsWUFBQSxDQUdGLHNEQUNFLFdBQUEsQ0FDQSxXQUFBLENBQ0EsVUFBQSxDQUNBLFdBQUEsQ0FDQSxpQkFBQSxDQUNBLGtCSnZDSyxDSXdDTCxhSm5DVyxDSW9DWCxjQUFBLENBR0YsNERBQ0Usa0JKMUNXLENJNkNiLDJEQUNFLFVBQUEsQ0FDQSxVQUFBLENBQ0EsaUJBQUEsQ0FDQSxRQUFBLENBQ0EsWUFBQSxDQUdGLHNFQUNFLFlBQUEsQ0FHRixxREFDRSxpQkFBQSxDQUNBLG1CQUFBLENBQ0EsS0FBQSxDQUNBLFFBQUEsQ0FDQSxrQkFBQSxDQUNBLGNBQUEsQ0FDQSxTQUFBLENBQ0EsV0FBQSxDQUNBLFVBQUEsQ0FHRixxREFDRSxpQkFBQSxDQUNBLE9BQUEsQ0FDQSwwQkFBQSxDQUNBLFNBQUEsQ0FDQSxjQUFBLENBQ0EsY0FBQSxDQUNBLGVBQUEsQ0FDQSxrQkFBQSxDQUNBLFNBQUEsQ0FDQSxzQkFBQSxDQUdGLDBEQUNFLGlCQUFBLENBQ0EsU0FBQSxDQUNBLGVBQUEsQ0FDQSxrQkFBQSxDQUNBLGdCQUFBLENBQ0EsY0FBQSxDQUNBLFVKbkZhLENJb0ZiLGNBQUEsQ0FHRixxREFDRSxNQUFBLENBR0YseUVBQ0UsV0FBQSxDQUNBLFVBQUEsQ0FHRixnREFDRSxvQkFBQSxDQUNBLGlCQUFBLENBQ0EsVUFBQSxDQUdGLHFEQUNFLHFCQUFBLENBQ0EsaUJBQUEsQ0FDQSxnQkFBQSxDQUNBLGVBQUEsQ0FDQSxpQkFBQSxDQUNBLGVBQUEsQ0FDQSw2Q0FBQSxDQUNBLFVBQUEsQ0FHRix3REFDRSxxQkFBQSxDQUNBLFlBQUEsQ0FDQSxnQkFBQSxDQUNBLGtCQUFBLENBQ0EsV0FBQSxDQUNBLFdBQUEsQ0FDQSxjQUFBLENBQ0EsWUFBQSxDQUNBLGNBQUEsQ0FDQSxxQkFBQSxDQUVBLDhEQUNFLHFCQUFBLENBR0YsNkRBQ0UsZ0JBQUEsQ0FDQSxlQUFBLENBQ0EsaUJBQUEsQ0FHRiw2REFDRSxhQUFBLENBQ0Esa0JBQUEsQ0FDQSxlQUFBLENBQ0EsZUFBQSxDQUNBLGVBQUEsQ0FDQSxrQkFBQSxDQUNBLGVBQUEsQ0FDQSxzQkFBQSxDQUVBLG1FQUNFLGtCQUFBLENBR0Ysa0VBQ0UsbUJBQUEsQ0FJSixxTkFHRSxvQkFBQSxDQUNBLGVBQUEsQ0FDQSxrQkFBQSxDQUNBLHNCQUFBLENBQ0EsY0FBQSxDQUdGLHNFQUNFLFlBQUEsQ0FDQSxlQUFBLENBQ0Esa0JBQUEsQ0FDQSxzQkFBQSxDQUNBLGNBQUEsQ0FFQSxzRkFDRSxjQUFBLENBSUoscUVBQ0UsVUFBQSxDQUNBLGVBQUEsQ0M1TEosc0NBQ0MsV0FBQSxDQUNBLGdCQUFBLENBQ0EsZUFBQSxDQUNBLHdCQUFBLENBQ0EsaUJBQUEsQ0FFQSxtREFDQyxnQkFBQSxDQUdELHVEQUNDLFVBQUEsQ0FFQSw2REFDQyx3QkFBQSxDQUNBLFdBQUEsQ0FDQSxpQkFBQSxDQUNBLFVBQUEsQ0FHRCw0REFDQyxZQUFBLENBR0QsNkRBQ0MsWUFBQSxDQUdELDJGQUNDLGNBQUEsQ0FJRixvREFDQyxlQUFBLENBQ0EsV0FBQSxDQUNBLFlBQUEsQ0FDQSw2QkFBQSxDQUNBLGtCQUFBLENBQ0Esa0JBQUEsQ0FDQSxpQkFBQSxDQUVBLGdFQUNDLG1DQUFBLENBQ0EsWUFBQSxDQUdELHdFQUNDLGVBQUEsQ0FHRCxnTkFHQyxVQUFBLENBQ0EsV0FBQSxDQUNBLHdCQUFBLENBQ0EsUUFBQSxDQUdELHVGQUNDLGNBQUEsQ0FHRCxxRkFDQyxVQUFBLENBQ0EsdUNBQUEsQ0FDQSw2QkFBQSxDQUtILDJDQUNDLFlBQUEsQ0FDQSxlQUFBLENBQ0Esc0JBQUEsQ0FDQSxrQkFBQSxDQUNBLGNBQUEsQ0FDQSxVTHJFYyxDS3dFZiw0Q0FDQyxnQkFBQSxDQUNBLG1CQUFBLENBQ0EsaUJBQUEsQ0FDQSxPQUFBLENBQ0EsVUFBQSxDQUNBLFlBQUEsQ0FDQSxXQUFBLENBQ0EsVUwvRW1CLENLZ0ZuQixjQUFBLENBQ0EsZUFBQSxDQUNBLGlCQUFBLENBR0QsMENBQ0MsYUFBQSxDQUdELCtDQUNDLGlCQUFBLENBQ0EsZUFBQSxDQUNBLFdBQUEsQ0FDQSxVQUFBLENBQ0EsY0FBQSxDQUNBLFVMN0ZXLENLOEZYLFlBQUEsQ0FHRCwyQ0FDQyxpQkFBQSxDQUNBLE9BQUEsQ0FHRCw0Q0FDQyxlQUFBLENBQ0EsbUJBQUEsQ0FDQSxpQkFBQSxDQUNBLE9BQUEsQ0FHRCw4Q0FDQyxpQkFBQSxDQUNBLFdBQUEsQ0FDQSw4QkFBQSxDQUNBLDhCQUFBLENBQ0EsU0FBQSxDQy9IRCx1Q0FDRSxZQUFBLENBRUEscURBQ0Usa0JBQUEsQ0FHRixvREFDRSxrQkFBQSxDQUNBLFVBQUEsQ0FDQSxpQkFBQSxDQUNBLGNBQUEsQ0FFQSxnRUFDRSxvQkFBQSxDQUNBLGlCQUFBLENBQ0EsT0FBQSxDQUVBLGlCQUFBLENBQ0EsVUFBQSxDQUNBLFdBQUEsQ0FDQSwyQkFBQSxDQUNBLHlCQUFBLENBS04sbURBQ0UsaUJBQUEsQ0FDQSxVQUFBLENBQ0EsV0FBQSxDQUNBLFdBQUEsQ0FDQSxXQUFBLENBQ0EsZUFBQSxDQUNBLDBCQUFBLENBQ0EsY0FBQSxDQUNBLFlBQUEsQ0FDQSxVTnhCVSxDTTBCVix1REFDRSxVQUFBLENBSUosa0RBQ0Usa0JBQUEsQ0FDQSx3QkFBQSxDQUNBLGVBQUEsQ0FDQSxpQkFBQSxDQUVELDBGQUNDLG1DQUFBLENBR0QsMkRBQ0Msa0JBQUEsQ0FDQSx3QkFBQSxDQUNBLFlBQUEsQ0FDQSxlQUFBLENBQ0EsaUJBQUEsQ0FFRCwrREFDQyxtQ0FBQSxDQUNBLDRCQUFBLENBSUYsMkRBQ0UsZUFBQSxDQUNBLHFCQUFBLENBR0YsZ0RBQ0Usb0JBQUEsQ0FDQSxVQUFBLENBQ0EsV0FBQSxDQUNBLFFBQUEsQ0FDQSxlQUFBLENBQ0Esd0JBQUEsQ0FDQSxpQkFBQSxDQUNBLGNBQUEsQ0FHRiwrQ0FDQyxZQUFBLENBRUEseURBQ0MsYUFBQSxDQUNBLGFBQUEsQ0FDQSxZQUFBLENBQ0Esa0JBQUEsQ0FJRixvREFFRSxjQUFBLENBQ0EsZUFBQSxDQUdGLDJEQUVFLGNBQUEsQ0FDQSxlQUFBLENBQ0EsaUJBQUEsQ0FHRixnREFDRSxRQUFBLENBQ0EsZ0JBQUEsQ0FDQSxVTm5Ha0IsQ01vR2xCLGNBQUEsQ0FDQSxjQUFBLENBR0YscURBQ0UsZUFBQSxDQUVBLHNFQUNFLGVBQUEsQ0FDQSw2QkFBQSxDQUNBLGlCQUFBLENBR0YsMkRBQ0UsYU41SEcsQ002SEgsY0FBQSxDQUlKLDhDQUNFLFNBQUEsQ0FDQSxjQUFBLENBR0YscURBQ0UsaUJBQUEsQ0FHRiw0Q0FDRSxVQUFBLENBQ0EsV0FBQSxDQUNBLFdBQUEsQ0FDQSxpQkFBQSxDQUNBLFVBQUEsQ0FDQSxrQk5oSkssQ01pSkwsY0FBQSxDQUNBLGlCQUFBLENBRUQsa0RBQ0Msd0JObEpXLENNbUpYLG9CTm5KVyxDTW9KWCxzR0FBQSxDQUlELHFEQUNDLFVBQUEsQ0FDQSxXQUFBLENBQ0EsV0FBQSxDQUNBLGlCQUFBLENBQ0EsVUFBQSxDQUNBLGVOeEphLENNNEpmLDZDQUNFLCtCQUFBLENBQ0EsdUNBQUEsQ0FDQSxvQ0FBQSxDQUNBLGtDQUFBLENBR0Ysb0RBQ0UsYU5oTEksQ01pTEosY0FBQSxDQUNBLGNBQUEsQ0FDQSxTQUFBLENBQ0EsUUFBQSxDQUdGLG9CQUNFLEdBQ0UsaUNBQUEsQ0FFRixJQUNFLGtDQUFBLENBRUYsSUFDRSxpQ0FBQSxDQUVGLElBQ0Usa0NBQUEsQ0FFRixJQUNFLGdDQUFBLENBRUYsS0FDRSxnQ0FBQSxDQUFBLENBSUosNEJBQ0UsR0FDRSxnQ0FBQSxDQUVGLElBQ0UsZ0NBQUEsQ0FFRixJQUNFLGlDQUFBLENBRUYsSUFDRSxrQ0FBQSxDQUVGLElBQ0UsZ0NBQUEsQ0FFRixLQUNFLGdDQUFBLENBQUEsQ0FJSix5QkFDRSxHQUNFLDhCQUFBLENBRUYsSUFDRSwrQkFBQSxDQUVGLElBQ0UsOEJBQUEsQ0FFRixJQUNFLCtCQUFBLENBRUYsSUFDRSw2QkFBQSxDQUVGLEtBQ0UsNkJBQUEsQ0FBQSxDQUlKLHVCQUNFLEdBQ0UsNEJBQUEsQ0FFRixJQUNFLDZCQUFBLENBRUYsSUFDRSw0QkFBQSxDQUVGLElBQ0UsNkJBQUEsQ0FFRixJQUNFLDJCQUFBLENBRUYsS0FDRSxrQ0FBQSxDQUFBLENDblFKLGlEQUNDLGFBQUEsQ0FFQSxlQUFBLENBQ0Esd0JBQUEsQ0FDQSxpQkFBQSxDQUNBLGNBQUEsQ0FDQSxrQkFBQSxDQUNBLHFCQUFBLENBQ0EsWUFBQSxDQUNBLGtCQUFBLENBQ0EsV0FBQSxDQUVBLDBEQUVDLGVBQUEsQ0FDQSxlQUFBLENBQ0Esd0JBQUEsQ0FDQSxpQkFBQSxDQUNBLGNBQUEsQ0FDQSxxQkFBQSxDQUNBLFlBQUEsQ0FDQSxrQkFBQSxDQUNBLFdBQUEsQ0FJRiwwRUFDQyxnQkFBQSxDQUNBLGlCQUFBLENBQ0EsU0FBQSxDQUNBLGlCQUFBLENBR0QseURBQ0MsVUFBQSxDQUNBLFdBQUEsQ0FDQSxrQkFBQSxDQUNBLGFBQUEsQ0FDQSx3QkFBQSxDQUNBLGlCQUFBLENBQ0Esa0JBQUEsQ0FDQSxlQUFBLENBQ0EsWUFBQSxDQUNBLGtCQUFBLENBQ0EscUJBQUEsQ0FHRCwrQ0FDQyxtQkFBQSxDQUdBLFNBQUEsQ0FDQSxjQUFBLENBQ0EsZUFBQSxDQUNBLHNCQUFBLENBQ0Esa0JBQUEsQ0FDQSxVQUFBLENBQ0Esc0JBQUEsQ0FDQSxvQkFBQSxDQUdELDBEQUNDLFVBQUEsQ0FDQSxzQkFBQSxDQUdELGdEQUVDLFVBQUEsQ0FDQSxVQUFBLENBSUEsZ0JBQUEsQ0FDQSxZQUFBLENBQ0Esa0JBQUEsQ0FDQSx5QkFBQSxDQUNBLCtDQUFBLENBR0QsbURBRUMsVUFBQSxDQUNBLFVBQUEsQ0FJQSxnQkFBQSxDQUNBLFlBQUEsQ0FDQSxrQkFBQSxDQUNBLHlCQUFBLENBQ0EsK0NBQUEsQ0FHRCxtREFDQyxpQkFBQSxDQUNBLFVBQUEsQ0FDQSxNQUFBLENBQ0EsUUFBQSxDQUNBLGVBQUEsQ0FDQSxTQUFBLENBQ0EseUJBQUEsQ0FDQSxjQUFBLENBQ0EsaUJBQUEsQ0FDQSw0REFDQyxZQUFBLENBQ0EsZUFBQSxDQUlGLGdEQUNDLGVBQUEsQ0FDQSxZQUFBLENBRUEsc0RBQ0MsZ0NBQUEsQ0FHRCx3REFDQyxpQkFBQSxDQUlGLGlEQUNDLFVBQUEsQ0FDQSxXQUFBLENBQ0EsWUFBQSxDQUNBLHdCQUFBLENBQ0EsaUJBQUEsQ0FDQSxnQ0FBQSxDQUVBLHdEQUNDLGlCQUFBLENBQ0EsVUFBQSxDQUNBLFFBQUEsQ0FDQSxXQUFBLENBQ0EsVUFBQSxDQUNBLCtDQUFBLENBQ0EsY0FBQSxDQUVELHVEQUNDLFlBQUEsQ0FDQSxtQ0FBQSxDQUNBLDRCQUFBLENBSUYsOENBRUMsZUFBQSxDQUdELCtDQUVDLGlCQUFBLENBQ0EsUUFBQSxDQUNBLGVBQUEsQ0FDQSxxQkFBQSxDQUdELDRDQUNDLHdCQUFBLENBQ0EsY0FBQSxDQUNBLGNBQUEsQ0FDQSxZQUFBLENBQ0Esa0JBQUEsQ0FDQSwwQkFBQSxDQUNBLFFBQUEsQ0FFQSxvQkFBQSxDQUNBLDZCQUFBLENBRUEsa0RBQ0Msd0JQcEtlLENPd0tqQixnREFDQyxZQUFBLENBQ0EsU0FBQSxDQUNBLFVBQUEsQ0FDQSxpQkFBQSxDQUNBLG9CQUFBLENBQ0EsZ0JBQUEsQ0FHRCxpREFDQyxvQkFBQSxDQUNBLFFBQUEsQ0FDQSxzQkFBQSxDQUNBLGVBQUEsQ0FDQSxjQUFBLENBRUEsa0JBQUEsQ0FDQSxVUHhMVyxDTzJMWixrREFDQyxZQUFBLENBQ0EsVVBoTWMsQ09pTWQsY0FBQSxDQUNBLGFBQUEsQ0FHRCx1REFDQyxVUHRNYyxDT3VNZCwyREFDQyxVQUFBLENBSUYscURBQ0MsYUFBQSxDQUdELHNEQUNDLGFBQUEsQ0FDQSxjQUFBLENBQ0EsY0FBQSxDQUNBLGlCQUFBLENBQ0EsNERBQ0MseUJBQUEsQ0FJRix1Q0FDQyxzQkFBQSxDQUNBLHdCUG5OaUIsQ09vTmpCLFVQMU5XLENPMk5YLGNBQUEsQ0FFQSw2Q0FDQyx3QlAvTmUsQ09nT2YsY0FBQSxDQUVELG1EQUNDLGdCQUFBLENBRUQsa0RBQ0MsbUJBQUEsQ0FHRiwrQ0FDQyxpQkFBQSxDQUNBLGVBQUEsQ0FDQSxVUDdPbUIsQ084T25CLGNBQUEsQ0FFRCxpREFDQyxXQUFBLENBQ0EsZUFBQSxDQUVBLGNBQUEsQ0FDQSxVUHRQYyxDT3dQZiwyQ0FDQyxpQkFBQSxDQUVBLG1IQUVDLGlCQUFBLENBQ0EsWUFBQSxDQUNBLGtCQUFBLENBQ0EsZ0JBQUEsQ0FDQSxtQkFBQSxDQUNBLFVBQUEsQ0FDQSxXQUFBLENBQ0EsZUFBQSxDQUNBLHFDQUFBLENBQ0EsY0FBQSxDQUNBLCtIQUNDLFVBQUEsQ0FDQSxXQUFBLENBQ0EsZ0JBQUEsQ0FDQSxnQkFBQSxDQUdELCtIQUNDLGFQeFJJLENPeVJKLGNBQUEsQ0FJRiwyREFDQyxtQkFBQSxDQUNBLFVBQUEsQ0FFRCx3REFDQyxxQkFBQSxDQUNBLGlCQUFBLENBQ0EsaUJBQUEsQ0FDQSxVQUFBLENBSUYsNENBQ0MsU0FBQSxDQUNBLGNBQUEsQ0FHRCw4Q0FDQyxVQUFBLENBQ0EsV0FBQSxDQUNBLHNCQUFBLENDbFRELHNDQUNDLHFCQUFBLENBQ0EsaUJBQUEsQ0FDQSxVQUFBLENBQ0Esa0JBQUEsQ0FFQSw0REFDQyxtQ0FBQSxDQUVBLDZFQUNDLHNCQUFBLENBSUYsMkNBQ0MsK0JBQUEsQ0FDQSxvQkFBQSxDQUNBLG9CQUFBLENBQ0EseUJBQUEsQ0FDQSwwQkFBQSxDQUNBLGlDQUFBLENBQ0EsNkJBQUEsQ0FHRCw2Q0FFQyxlQUFBLENBQ0EsZUFBQSxDQUNBLHdCQUFBLENBQ0EsaUJBQUEsQ0FDQSxjQUFBLENBQ0EscUJBQUEsQ0FDQSxZQUFBLENBQ0Esa0JBQUEsQ0FDQSxXQUFBLENBRUEsc0RBRUMsZUFBQSxDQUNBLGVBQUEsQ0FDQSx3QkFBQSxDQUNBLGlCQUFBLENBQ0EsY0FBQSxDQUNBLHFCQUFBLENBQ0EsWUFBQSxDQUNBLGtCQUFBLENBQ0EsV0FBQSxDQUdELHFEQUNDLFVBQUEsQ0FDQSxXQUFBLENBRUEsbUJBQUEsQ0FDQSx3QkFBQSxDQUNBLGlCQUFBLENBQ0Esa0JBQUEsQ0FDQSxxQkFBQSxDQUNBLGVBQUEsQ0FDQSxZQUFBLENBQ0Esa0JBQUEsQ0FHRCxzREFDQyxVQUFBLENBRUEsV0FBQSxDQUNBLGtCQUFBLENBQ0Esd0JBQUEsQ0FDQSxpQkFBQSxDQUNBLGtCQUFBLENBQ0EsZUFBQSxDQUNBLHFCQUFBLENBQ0EsWUFBQSxDQUNBLGtCQUFBLENBSUYsNENBRUMsVUFBQSxDQUNBLFVBQUEsQ0FJQSxnQkFBQSxDQUNBLFlBQUEsQ0FDQSxrQkFBQSxDQUNBLHlCQUFBLENBQ0EsK0NBQUEsQ0FHRCwrQ0FFQyxVQUFBLENBQ0EsVUFBQSxDQUlBLGdCQUFBLENBQ0EsWUFBQSxDQUNBLGtCQUFBLENBRUEseUJBQUEsQ0FDQSwrQ0FBQSxDQUdELDBDQUNDLG9CQUFBLENBQ0Esd0JBQUEsQ0FDQSxjQUFBLENBQ0EsVUFBQSxDQUdELCtDQUNDLG9CQUFBLENBQ0EsZUFBQSxDQUVBLGlCQUFBLENBRUEsZUFBQSxDQUNBLHNCQUFBLENBQ0Esa0JBQUEsQ0FFQSxvREFDQyxvQkFBQSxDQUNBLGVBQUEsQ0FDQSxpQkFBQSxDQUVBLGNBQUEsQ0FDQSxlQUFBLENBQ0EsVUFBQSxDQUdELGdFQUNDLDJCQUFBLENBR0YsNENBQ0MsMEJBQUEsQ0FDQSxZQUFBLENBRUEsb0RBQ0MsaUJBQUEsQ0FFRCw2REFDQyxxQkFBQSxDQUNBLG1FQUNDLFlBQUEsQ0FDQSxtQ0FBQSxDQUNBLDRCQUFBLENBSUgsMkNBQ0MsaUJBQUEsQ0FDQSxlQUFBLENBQ0Esa0JBQUEsQ0FDQSxVUm5Ka0IsQ1FvSmxCLGNBQUEsQ0FFRCwrQ0FDQyxpQkFBQSxDQUNBLFVBQUEsQ0FDQSxRQUFBLENBQ0EsZUFBQSxDQUNBLHlCQUFBLENBQ0EsU0FBQSxDQUNBLGNBQUEsQ0FDQSxpQkFBQSxDQUNBLHdEQUNDLFlBQUEsQ0FDQSxlQUFBLENBR0YsNkNBQ0MsVUFBQSxDQUNBLFdBQUEsQ0FDQSwyQkFBQSxDQUNBLHdCQUFBLENBQ0EsaUJBQUEsQ0FFQSxvREFDQyxpQkFBQSxDQUNBLFVBQUEsQ0FDQSxRQUFBLENBQ0EsV0FBQSxDQUNBLFVBQUEsQ0FDQSwrQ0FBQSxDQUNBLGNBQUEsQ0FHRiw4Q0FDQyxjQUFBLENBQ0EsZUFBQSxDQUVBLHFEQUNDLGNBQUEsQ0FDQSxlQUFBLENBRUEsaUJBQUEsQ0FHRiwrQ0FDQyxvQkFBQSxDQUNBLFVBQUEsQ0FDQSxXQUFBLENBQ0Esd0JBQUEsQ0FFRCwyQ0FDQyxjQUFBLENBRUEsZ0JBQUEsQ0FDQSwrQ0FDQyxVUjNNaUIsQ1E0TWpCLGdCQUFBLENBQ0EsY0FBQSxDQUNBLHNCQUFBLENBQ0EsZUFBQSxDQUNBLGtCQUFBLENBQ0EsYUFBQSxDQUNBLHFEQUNDLHdCUmxOYSxDUW9OZCxxREFDQyxVUnROZ0IsQ1EwTm5CLGdEQUNDLGdCQUFBLENBRUQsa0RBQ0MsaUJBQUEsQ0FDQSxZQUFBLENBQ0Esa0JBQUEsQ0FDQSxnQkFBQSxDQUNBLG1CQUFBLENBQ0EsUUFBQSxDQUNBLFdBQUEsQ0FDQSxlQUFBLENBQ0EscUNBQUEsQ0FDQSxjQUFBLENBQ0Esd0RBQ0MsVUFBQSxDQUNBLFdBQUEsQ0FDQSxnQkFBQSxDQUNBLGdCQUFBLENBR0Qsd0RBQ0MsYVIxUEksQ1EyUEosY0FBQSxDQUlGLHNEQUNDLG1CQUFBLENBQ0EsVUFBQSxDQUVELG1EQUNDLGlCQUFBLENBQ0EsWUFBQSxDQUNBLHFCQUFBLENBQ0EsT0FBQSxDQUNBLFFBQUEsQ0FDQSwrQkFBQSxDQUNBLFdBQUEsQ0FDQSxZQUFBLENBQ0EsZVI1UGlCLENRNlBqQixzQ0FBQSxDQUNBLGlCQUFBLENBQ0EsaUJBQUEsQ0FDQSxrQkFBQSxDQUNBLG9FQUNDLFlBQUEsQ0FDQSxrQkFBQSxDQUNBLFVBQUEsQ0FFRCwwREFDQyxpQkFBQSxDQUNBLFVBQUEsQ0FDQSxRQUFBLENBQ0EsV0FBQSxDQUNBLFVBQUEsQ0FDQSwrQ0FBQSxDQUNBLGNBQUEsQ0FFRCx5REFDQywrQkFBQSxDQUNBLGNBQUEsQ0FDQSxXQUFBLENBQ0EsWUFBQSxDQUNBLE1BQUEsQ0FDQSxLQUFBLENBQ0EsV0FBQSxDQUVELDREQUNDLFVBQUEsQ0FDQSxVQUFBLENBQ0EsZ0NBQUEsQ0FDQSxrQkFBQSxDQUVELDBEQUNDLGVBQUEsQ0FDQSxnQkFBQSxDQUNBLGNBQUEsQ0FFQSxVUnpTaUIsQ1EyU2xCLDZEQUNDLGtCQUFBLENBQ0EsaUJBQUEsQ0FDQSx3QkFBQSxDQUNBLGlCQUFBLENBQ0EsV0FBQSxDQUNBLFdBQUEsQ0FDQSwwRUFDQyxVUnBUVyxDUXNUWixtRUFDQyxZQUFBLENBQ0Esd0JBQUEsQ0FDQSxpQkFBQSxDQUdGLHdFQUNDLGtCQUFBLENBQ0EsZ0JBQUEsQ0FDQSxXQUFBLENBQ0EsV0FBQSxDQUNBLGlCQUFBLENBQ0Esa0JSM1VJLENRNFVKLFVSNVRnQixDUTZUaEIsY0FBQSxDQUVBLHdCQUFBLENBQ0EsY0FBQSxDQUdELDJEQUNDLGNBQUEsQ0FFQSxhUnRWSSxDUXVWSixjQUFBLENDeFZILDBDQUNDLGNBQUEsQ0FDQSxxQkFBQSxDQUNBLGlCQUFBLENBQ0EsVUFBQSxDQUNBLGlCQUFBLENBQ0EsWUFBQSxDQUNBLHFCQUFBLENBQ0EsT0FBQSxDQUNBLFFBQUEsQ0FDQSwrQkFBQSxDQUNBLFdBQUEsQ0FDQSxlVEtrQixDU0psQixzQ0FBQSxDQUNBLGlCQUFBLENBQ0EsaUJBQUEsQ0FDQSxrQkFBQSxDQUNBLDJEQUNDLFlBQUEsQ0FDQSxrQkFBQSxDQUNBLFVBQUEsQ0FFRCxpREFDQyxpQkFBQSxDQUNBLFVBQUEsQ0FDQSxRQUFBLENBQ0EsV0FBQSxDQUNBLFVBQUEsQ0FDQSwrQ0FBQSxDQUNBLGNBQUEsQ0FFRCxnREFDQywrQkFBQSxDQUNBLGNBQUEsQ0FDQSxXQUFBLENBQ0EsWUFBQSxDQUNBLE1BQUEsQ0FDQSxLQUFBLENBQ0EsNkJBQUEsQ0FFRCxtREFDQyxVQUFBLENBQ0EsVUFBQSxDQUNBLGdDQUFBLENBQ0Esa0JBQUEsQ0FFRCxpREFDQyxlQUFBLENBQ0EsZ0JBQUEsQ0FDQSxjQUFBLENBQ0EsZ0JBQUEsQ0FDQSxVVHhDa0IsQ1MwQ25CLG9EQUNDLGtCQUFBLENBQ0EsaUJBQUEsQ0FDQSx3QkFBQSxDQUNBLGlCQUFBLENBQ0EsV0FBQSxDQUNBLFdBQUEsQ0FDQSxpRUFDQyxVVG5EWSxDU3NEZCwrREFDQyxrQkFBQSxDQUNBLGdCQUFBLENBQ0EsV0FBQSxDQUNBLFdBQUEsQ0FDQSxpQkFBQSxDQUNBLGtCVHJFSyxDU3NFTCxVVHREaUIsQ1N1RGpCLGNBQUEsQ0FDQSxnQkFBQSxDQUNBLHdCQUFBLENBQ0EsY0FBQSxDQUdELGtEQUNDLGNBQUEsQ0FDQSxnQkFBQSxDQUNBLGFUaEZLLENTaUZMLGNBQUEsQ0FHRCxnREFDQyxhQUFBLENBQ0EscUJBQUEsQ0N2RkYsMkNBQ0Msc0JBQUEsQ0FDQSxtQ0FBQSxDQUNBLG1DQUFBLENBQ0EsbUJBQUEsQ0FDQSxVQUFBLENBQ0EsdURBQ0MsWUFBQSxDQUNBLGVBQUEsQ0FDQSxtQ0FBQSxDQUNBLDRCQUFBLENBRUQsdURBQ0MsZUFBQSxDQUlGLDBDQUNDLHFCQUFBLENBQ0Esc0JBQUEsQ0FDQSwrQkFBQSxDQUNBLG1DQUFBLENBQ0EsaUNBQUEsQ0FDQSxzQkFBQSxDQUNBLGdCQUFBLENBQ0EsbURBQ0MscUJBQUEsQ0FDQSxzQkFBQSxDQUNBLCtCQUFBLENBQ0EsbUNBQUEsQ0FDQSxpQ0FBQSxDQUNBLHNCQUFBLENBQ0EsWUFBQSxDQUNBLGtCQUFBLENBSUYsaURBQ0MsaUJBQUEsQ0FDQSxjQUFBLENBQ0EsZ0VBQ0MsaUJBQUEsQ0FDQSxRQUFBLENBQ0EsVUFBQSxDQUNBLFVBQUEsQ0FDQSxXQUFBLENBQ0EsdUZBQ0MsWUFBQSxDQUNBLHNCQUFBLENBQ0Esa0JBQUEsQ0FDQSxVQUFBLENBQ0EsVUFBQSxDQUNBLDZGQUNDLGtCQUFBLENBRUQsOEZBQ0Msa0JBQUEsQ0FHRixzS0FFQyxpQkFBQSxDQUNBLE9BQUEsQ0FDQSxVQUFBLENBS0gsZ0RBQ0MscUJBQUEsQ0FDQSxzQkFBQSxDQUNBLG1DQUFBLENBQ0EsK0JBQUEsQ0FDQSxpQ0FBQSxDQUNBLHNCQUFBLENBRUEseURBQ0MscUJBQUEsQ0FDQSxzQkFBQSxDQUNBLCtCQUFBLENBQ0EsaUNBQUEsQ0FDQSxzQkFBQSxDQUtGLG1EQUNDLHFCQUFBLENBQ0EsMEJBQUEsQ0FDQSx1QkFBQSxDQUNBLDZCQUFBLENBQ0EscUJBQUEsQ0FDQSxzQkFBQSxDQUNBLG1CQUFBLENBQ0EsbUNBQUEsQ0FDQSw0REFDQyxxQkFBQSxDQUNBLDBCQUFBLENBQ0EsdUJBQUEsQ0FDQSw2QkFBQSxDQUNBLHFCQUFBLENBQ0Esc0JBQUEsQ0FDQSxtQkFBQSxDQUlGLDREQUNDLHFCQUFBLENBQ0Esc0JBQUEsQ0FDQSx1QkFBQSxDQUNBLDZCQUFBLENBQ0EsbUNBQUEsQ0FDQSxxQkFBQSxDQUNBLHNCQUFBLENBQ0EsbUJBQUEsQ0FDQSxtQ0FBQSxDQUNBLHFFQUNDLHFCQUFBLENBQ0EsdUJBQUEsQ0FDQSw2QkFBQSxDQUNBLHFCQUFBLENBQ0Esc0JBQUEsQ0FDQSxtQkFBQSxDQUNBLG1DQUFBLENBQ0EsNEZBQ0Msd0JBQUEsQ0FLSCx1REFDQyxxQkFBQSxDQUNBLHFCQUFBLENBQ0Esc0JBQUEsQ0FDQSwwQkFBQSxDQUNBLHdCQUFBLENBQ0EsbUJBQUEsQ0FDQSwyQkFBQSxDQUNBLHNCQUFBLENBQ0EseUJBQUEsQ0FDQSx1QkFBQSxDQUNBLFVWaElXLENVaUlYLDBCQUFBLENBQ0EsK0JBQUEsQ0FDQSxxQkFBQSxDQUNBLCtCQUFBLENBQ0EsaUNBQUEsQ0FDQSxvRUFDQyxVVjFJYSxDVTJJYixTQUFBLENBRUQsNkRBQ0MsbUNBQUEsQ0FDQSw0QkFBQSxDQUdELGdFQUNDLHFCQUFBLENBQ0EscUJBQUEsQ0FDQSxzQkFBQSxDQUNBLDBCQUFBLENBQ0EsbUJBQUEsQ0FDQSxtQkFBQSxDQUNBLHNCQUFBLENBQ0EseUJBQUEsQ0FDQSx1QkFBQSxDQUNBLFVBQUEsQ0FDQSwyQkFBQSxDQUNBLCtCQUFBLENBQ0Esd0JBQUEsQ0FDQSw2RUFDQyx3QkFBQSxDQUlGLDZFQUNDLG1DQUFBLENBSUYsc0RBQ0MscUJBQUEsQ0FDQSxxQkFBQSxDQUNBLHNCQUFBLENBQ0EsMEJBQUEsQ0FDQSxtQkFBQSxDQUNBLDJCQUFBLENBQ0EsMEJBQUEsQ0FDQSxpQ0FBQSxDQUNBLHdCQUFBLENBQ0EsVVZqTFcsQ1VrTFgsZ0NBQUEsQ0FDQSxtRUFDQyxVVnZMYSxDVXdMYixTQUFBLENBRUQsK0RBQ0MscUJBQUEsQ0FDQSx3QkFBQSxDQUNBLHFCQUFBLENBQ0Esc0JBQUEsQ0FDQSwwQkFBQSxDQUNBLG1CQUFBLENBQ0EsZ0NBQUEsQ0FDQSwyQkFBQSxDQUNBLDBCQUFBLENBQ0EsaUNBQUEsQ0FDQSxtQ0FBQSxDQUNBLG1DQUFBLENBRUQsNEVBQ0MsbUNBQUEsQ0FJRiwrQ0FDQyxxQkFBQSxDQUNBLHFCQUFBLENBQ0EsNERBQ0MsVVZqTmEsQ1VrTmIsU0FBQSxDQUVELHFFQUNDLG1DQUFBLENBSUYsd0RBQ0MscUJBQUEsQ0FDQSwwQkFBQSxDQUNBLDJCQUFBLENBQ0EseUJBQUEsQ0FDQSw0QkFBQSxDQUNBLG1CQUFBLENBU0QsMENBQ0MscUJBQUEsQ0FDQSx3QkFBQSxDQUNBLDRCQUFBLENBQ0EsNEJBQUEsQ0FFQSwyQkFBQSxDQUNBLHlCQUFBLENBQ0EseUJBQUEsQ0FDQSxtQ0FBQSxDQUNBLGdDQUFBLENBQ0EsK0JBQUEsQ0FDQSwyQkFBQSxDQUNBLG1CQUFBLENBSUQsZ0RBQ0MscUJBQUEsQ0FDQSw0QkFBQSxDQUNBLG9CQUFBLENBQ0EseUJBQUEsQ0FHRCxtREFDQyxxQkFBQSxDQUNBLHFCQUFBLENBQ0EseUJBQUEsQ0FDQSw2QkFBQSxDQUNBLGtDQUFBLENBQ0EsV0FBQSxDQUNBLDBCQUFBLENBQ0EsaUNBQUEsQ0FJRCx1Q0FDQyw0QkFBQSxDQUNBLGdCQUFBLENBQ0EsaUJBQUEsQ0FDQSxzQkFBQSxDQUNBLHFCQUFBLENBRUEsZ0NBQUEsQ0FDQSw0QkFBQSxDQUlELGlFQUNDLGdDQUFBLENBSUQsbUVBQ0MsbUNBQUEsQ0FJRCw2Q0FDQyxxQkFBQSxDQUNBLDRCQUFBLENBQ0EsdUJBQUEsQ0FJRCx5RUFDQyx3QkFBQSxDQUlELDJEQUNDLGtCQUFBLENBQ0EsbUJBQUEsQ0FDQSxvQkFBQSxDQUNBLHFCQUFBLENBQ0EsNEJBQUEsQ0FDQSwwQkFBQSxDQUlELDRDQUNDLGdDQUFBLENBQ0Esd0NBQUEsQ0FDQSwwQ0FBQSxDQUNBLDZCQUFBLENBRUEseUJBQUEsQ0FDQSwwQkFBQSxDQUNBLDRCQUFBLENBQ0EsaUJBQUEsQ0FDQSxnQkFBQSxDQUNBLHFCQUFBLENBQ0Esc0JBQUEsQ0FDQSx3QkFBQSxDQUNBLGdDQUFBLENBQ0EsMENBQUEsQ0FJRCxvREFDQyxxQkFBQSxDQUNBLHdCQUFBLENBQ0Esc0JBQUEsQ0FDQSxpQkFBQSxDQUNBLG9CQUFBLENBY0Qsc0NBQ0MscUJBQUEsQ0FDQSxtQkFBQSxDQUdELGtEQUNDLFdBQUEsQ0FHRCw2Q0FDQyxtQkFBQSxDQXFCRCxzREFDQyxxQkFBQSxDQUNBLHdCQUFBLENBQ0EsTUFBQSxDQUNBLG1CQUFBLENBQ0Esc0JBQUEsQ0FDQSxzQkFBQSxDQUNBLHlCQUFBLENBQ0EsMEJBQUEsQ0FDQSwyQkFBQSxDQUNBLFVWcFlXLENVcVlYLGdDQUFBLENBQ0Esc0NBQUEsQ0FDQSx3QkFBQSxDQUNBLDRCQUFBLENBQ0EsK0VBQUEsQ0FDQSwwQkFBQSxDQUNBLG1FQUNDLFVWL1lhLENVZ1piLFNBQUEsQ0FFRCwrREFDQyxxQkFBQSxDQUNBLHdCQUFBLENBQ0EsTUFBQSxDQUNBLG1CQUFBLENBQ0Esc0JBQUEsQ0FDQSxzQkFBQSxDQUNBLHlCQUFBLENBQ0EsMEJBQUEsQ0FDQSwyQkFBQSxDQUNBLHFCQUFBLENBQ0Esc0NBQUEsQ0FDQSw0QkFBQSxDQUNBLCtFQUFBLENBQ0EsMEJBQUEsQ0FDQSxtQ0FBQSxDQUNBLG1DQUFBLENBRUQsNERBQ0MsbUNBQUEsQ0FDQSw0QkFBQSxDQUlGLDREQUNDLHdCQUFBLENBQ0EsTUFBQSxDQUNBLGtDQUFBLENBQ0Esc0JBQUEsQ0FDQSxzQkFBQSxDQUNBLHlCQUFBLENBQ0EsMEJBQUEsQ0FDQSwyQkFBQSxDQUNBLFVBQUEsQ0FDQSxxQkFBQSxDQUNBLHNDQUFBLENBQ0EsbUNBQUEsQ0FDQSxpQkFBQSxDQUNBLCtFQUFBLENBQ0EsMEJBQUEsQ0FDQSxrRUFDQyxtQ0FBQSxDQUNBLDRCQUFBLENBSUYsMkNBQ0MscUJBQUEsQ0FDQSw0QkFBQSxDQUNBLHVCQUFBLENBQ0EsZ0NBQUEsQ0FDQSxxQkFBQSxDQUNBLDhCQUFBLENBQ0EsZ0NBQUEsQ0FDQSxzQ0FBQSxDQUNBLG9CQUFBLENBR0QsNkNBQ0MsNkJBQUEsQ0FDQSx1QkFBQSxDQUNBLHdDQUFBLENBQ0EsdUJBQUEsQ0FDQSwrQkFBQSxDQUNBLHFDQUFBLENBQ0Esc0NBQUEsQ0FHRCw0Q0FDQyx5QkFBQSxDQUNBLDBCQUFBLENBQ0EsMkJBQUEsQ0FDQSxVQUFBLENBQ0EsbUJBQUEsQ0FHRCwyQ0FDQyw0QkFBQSxDQUVBLHVCQUFBLENBRUEsdUJBQUEsQ0FDQSw2QkFBQSxDQUdELDZDQUNDLHVCQUFBLENBQ0EsNkJBQUEsQ0FDQSxtQ0FBQSxDQUNBLHVCQUFBLENBQ0EsNEJBQUEsQ0FDQSx5Q0FBQSxDQUNBLHdDQUFBLENBR0QsNkNBQ0Msd0JBQUEsQ0FDQSxtREFDQyx5QkFBQSxDQUlGLDJDQUNDLFVBQUEsQ0FDQSxtQ0FBQSxDQUNBLGdCQUFBLENBQ0EsWUFBQSxDQUNBLGNBQUEsQ0FDQSxpQkFBQSxDQUNBLGlCQUFBLENBQ0EscURBQ0MsV0FBQSxDQUNBLHlCQUFBLENBSUYsMEZBRUMsY0FBQSxDQUlELHVDQUNDLDRCQUFBLENBQ0EsZ0JBQUEsQ0FDQSxpQkFBQSxDQUNBLHNCQUFBLENBQ0EscUJBQUEsQ0FFQSxnQ0FBQSxDQUNBLDRCQUFBLENBSUQsaUVBQ0MsZ0NBQUEsQ0FJRCxtRUFDQyxtQ0FBQSxDQUlELDZDQUNDLHFCQUFBLENBQ0EsNEJBQUEsQ0FDQSx1QkFBQSxDQUlELHlFQUNDLHdCQUFBLENBSUQsMkRBQ0Msa0JBQUEsQ0FDQSxtQkFBQSxDQUNBLG9CQUFBLENBQ0EscUJBQUEsQ0FDQSw0QkFBQSxDQUNBLDBCQUFBLENDOWpCRCw2Q0FDQyxpQkFBQSxDQUdELG9EQUNDLFdBQUEsQ0FDQSxXQUFBLENBQ0Esd0JYVEssQ1dVTCxVQUFBLENBQ0Esd0JBQUEsQ0FDQSx3QkFBQSxDQUNBLGlCQUFBLENBQ0EsY0FBQSxDQUdELGtEQUNDLGFBQUEsQ0FDQSxXQUFBLENBQ0EsY0FBQSxDQ2xCRCxnREFDQyxjQUFBLENBQ0EsdUJBQUEsQ0FDQSxTQUFBLENBQ0EsV0FBQSxDQUNBLFlBQUEsQ0FHQSw4TEFHQyxZQUFBLENBQ0EsY0FBQSxDQUNBLHFCQUFBLENBQ0EsVVpHaUIsQ1lGakIsaUJBQUEsQ0FDQSxjQUFBLENBQ0EsZ0JBQUEsQ0FDQSxpQkFBQSxDQUNBLFdBQUEsQ0FDQSxNQUFBLENBRUQsaUVBQ0Msd0JaUk0sQ1lVUCwrREFDQyx3Qlo1QkksQ1k4QkwsOERBQ0Msd0JaOUJPLENZaUNULDBCQUNDLEtBQ0MsUUFBQSxDQUNBLFNBQUEsQ0FFRCxHQUNDLFdBQUEsQ0FDQSxTQUFBLENBQUEsQ0FHRiwyQkFDQyxLQUNDLE1BQUEsQ0FDQSxTQUFBLENBRUQsR0FDQyxTQUFBLENBQ0EsU0FBQSxDQUFBLENWL0NGLDRCQUNFLEtBQ0UsOEJBQUEsQ0FFRixHQUNFLGdDQUFBLENBQUEsQ0FJSixpQ0FDRSxnQkFBQSxDQUdGLGlDQUNFLHdCQUFBLENBQ0EsVUFBQSxDQUNBLGtCQUFBLENBQ0EsaUJBQUEsQ0FDQSxnQkFBQSxDQUNBLGNBQUEsQ0FHRiw4QkFDRSxnREFBQSxDQUNBLGlCQUFBLENBQ0EsZUFBQSxDQUdGLDhCQUNFLGlCQUFBLENBR0YsbUNBQ0Usd0JBQUEsQ0FHRixrQ0FDRSxxQkFBQSxDQUdGLCtCQUNFLGVBQUEsQ0FDQSxVQUFBLENBQ0EsY0FBQSxDQUNBLGdDQUFBLENBR0YsdUNBQ0UsaUJBQUEsQ0FFQSw4RUFDRSxjQUFBLENBQ0EsUUFBQSxDQUNBLE1BQUEsQ0FDQSxPQUFBLENBQ0EsUUFBQSxDQUNBLCtCQUFBLENBQ0EsWUFBQSxDQUdGLDhFQUNFLGtCQUFBLENBQ0EsYUFBQSxDQUNBLGNBQUEsQ0FDQSx3QkFBQSxDQUNBLGlCQUFBLENBQ0EsV0FBQSxDQUNBLFdBQUEsQ0FFQSxrRkFDRSxVQUFBLENBQ0EsZUFBQSxDQUdGLGdGQUNFLGNBQUEsQ0FDQSxpQkFBQSxDQUNBLGlCQUFBLENBS04sNkNBQ0UsWUFBQSxDQUNBLGNBQUEsQ0FDQSxXQUFBLENBQ0EsWUFBQSxDQUNBLCtCQUFBLENBQ0EsTUFBQSxDQUNBLEtBQUEsQ0FDQSxzQkFBQSxDQUNBLGtCQUFBLENBQ0EsWUFBQSxDQUVBLGtEQUNFLFlBQUEsQ0FJSixpQ0FDRSxXQUFBLENBQ0EsaUJBQUEsQ0FDQSxvQkFBQSxDQUNBLFNBQUEsQ0FDQSxVQUFBLENBYUYseUNBQ0UsUUFBQSxDQUdGLGdEQUNFLFNBQUEsQ0FHRixzREFDRSxrQkYvSEssQ0VrSVAsdUNBQ0UsaUJBQUEsQ0FDQSxLQUFBLENBQ0EsVUFBQSxDQUNBLFdBQUEsQ0FDQSxTQUFBLENBR0YsNENBQ0UsaUJBQUEsQ0FDQSxLQUFBLENBQ0EsVUFBQSxDQUNBLFlBQUEsQ0FDQSxZQUFBLENBR0YseUNBQ0UsaUJBQUEsQ0FDQSxTQUFBLENBQ0EsaUJBQUEsQ0FHRiw2Q0FDRSwrQ0FBQSxDQUdGLHFEQUNFLCtDQUFBLENBQ0EsaUJBQUEsQ0FDQSxnQkFBQSxDQUNBLGlCQUFBLENBQ0EsU0FBQSxDQUdGLGlEQUNFLG1CQUFBLENBQ0EsaUJBQUEsQ0FHRixxREFDRSwrQ0FBQSxDQUdGLHNDQUNFLFlBQUEsQ0FHRiwwQ0FDRSxvQkFBQSxDQUNBLGlCQUFBLENBQ0EsUUFBQSxDQUNBLFFBQUEsQ0FDQSw0QkFBQSxDQUNBLFVBQUEsQ0FHRixrREFDRSxvQkFBQSxDQUNBLGlCQUFBLENBQ0EsS0FBQSxDQUNBLFFBQUEsQ0FDQSw0QkFBQSxDQUNBLFVBQUEsQ0FHRiwrQ0FDRSwrQ0FBQSxDQUNBLFVBQUEsQ0FDQSxXQUFBLENBQ0EsaUJBQUEsQ0FDQSxNQUFBLENBQ0EsS0FBQSxDQUdGLCtDQUNFLCtDQUFBLENBQ0EsU0FBQSxDQUNBLFdBQUEsQ0FDQSxpQkFBQSxDQUNBLFNBQUEsQ0FDQSxPQUFBLENBQ0EsNkNBQUEsQ0FHRiw2Q0FDRSxpQkFBQSxDQUNBLFFBQUEsQ0FHRixzREFDRSxpQkFBQSxDQUdGLDZDQUNFLFlBQUEsQ0FDQSxlQUFBLENBQ0EsZ0NBQUEsQ0FHRixxQ0FDRSxVQUFBLENBQ0EsV0FBQSxDQUNBLGtCRnhPSyxDRXlPTCxXQUFBLENBRUEseUNBQ0UsY0FBQSxDQUNBLGVBQUEsQ0FJSix3Q0FDRSxrQkZsUEssQ0VtUEwsd0JBQUEsQ0FFQSw2Q0FDRSxVRnRPZSxDRTBPbkIsMkNBQ0UsVUFBQSxDQUNBLGNBQUEsQ0FJQSxpRUFDRSxtQkFBQSxDQUlBLDRGQUNFLHFCQUFBLENXdlFOLDRDQUVDLHdCYnNCTyxDYXJCUCx3REFDQyxVQUFBLENBQ0EsbUVBQUEsQ0FDQSx1QkFBQSxDQUNBLDJCQUFBLENBVUQsZ0ZBQ0Msd0JiTU0sQ2FKUCwwRkFDQyx3QmJHTSxDYURQLHNFQUNDLHdCYkZNLENhR04sd0JBQUEsQ0FFRCx3R0FDQyxhYkhNLENhS1AsOEZBQ0MsYWJKTSxDYU1QLDBHQUNDLHdCYlpNLENhYU4sYWJSTSxDYVVQLGtPQUVDLGFiZE0sQ2FpQlAsMEVBQ0Msd0JidEJNLENhdUJOLGVBQUEsQ0FFRCx3T0FHQyxhYnhCTSxDYTBCUCxnRkFDQyxnQ0FBQSxDQUVELGtFQUNDLHdCYmxDTSxDYW1DTixlQUFBLENBRUQsa0ZBQ0Msd0JBQUEsQ0FFRCw0RkFDQyx3QmJ6Q00sQ2EwQ04sK0JBQUEsQ0FFRCx3TEFFQyxhYjFDTSxDYTRDUCx3R0FDQyxhYjVDTSxDYThDUCxzSkFFQyxrQmJwRE0sQ2FxRE4sd0JBQUEsQ0FFRCwwRkFDQyx3QkFBQSxDQUVELDhGQUNDLHdCQUFBLENBQ0EsYUFBQSxDQUNBLDBHQUNDLHdCQUFBLENBR0Ysc0VBQ0MsYWIvRVcsQ2FpRlYsNEZBQ0MsYWJsRlMsQ2FvRlYsOEZBQ0MsYUFBQSxDQUlILHNFQUNDLGFieEVNLENhMEVQLHdTQUdDLGFiOUVNLENhZ0ZQLDRFQUNDLGFibEZNLENhb0ZQLGtMQUVDLGtCYnhGTSxDYTBGUCx3SkFFQyx3QkFBQSxDQUNBLHdCYjdGTSxDYStGUCwwRkFDQyx3QmJoR00sQ2FpR04sYWI5Rk0sQ2FnR1Asa0ZBQ0Msd0JicEdNLENhcUdOLGFibEdNLENhb0dQLDRFQUNDLGFidEdNLENhd0dQLDBGQUNDLHdCYjNHTSxDYTRHTixhYnpHTSxDYTJHTixvSEFDQyxhYjdHSyxDYWlIUCxrR0FDQyxhYmxJVyxDYW1JWCx3QkFBQSxDQUNBLHdCQUFBLENBRUEsb0hBQ0MsbUNBQUEsQ0FDQSxtQ0FBQSxDQUNBLGtCQUFBLENBQ0Esd0JBQUEsQ0FDQSw4SUFDQyx3QkFBQSxDQUdGLDRIQUNDLHdCQUFBLENBQ0EsU0FBQSxDQUlGLDBGQUNDLHdCQUFBLENBR0QsNEdBQ0MsbUNBQUEsQ0FDQSw4SEFDQyxzQkFBQSxDQUNBLG1DQUFBLENBSUYsZ05BRUMsbUNBQUEsQ0FDQSxtQ0FBQSxDQUNBLGtCQUFBLENBQ0Esd0JBQUEsQ0FDQSxvUUFDQyx3QkFBQSxDQUlGLGtGQUNDLHFCQUFBLENBR0QsMEVBQ0MsbUNBQUEsQ0FHRCx3RUFDQyx5Q0FBQSxDQUNBLG9GQUNDLG1DQUFBLENBQ0Esd0JBQUEsQ0FDQSx3QkFBQSxDQUNBLHVCQUFBLENBQ0EsOEdBQ0Msd0JBQUEsQ0FDQSxTQUFBLENBR0YsMEZBQ0Msc0JBQUEsQ0FDQSxtQ0FBQSxDQUlGLGtUQUdDLHdCYjNMTSxDYTZMUCwwaURBZUMsd0JiNU1NLENhNk1OLHdCQUFBLENBQ0EsYUFBQSxDQUNBLHd6REFDQyxtQ0FBQSxDQUNBLHdCQUFBLENBQ0Esb3VKQUVDLGFBQUEsQ0FJSCw0SkFFQyx3QkFBQSxDQUVELDhEQUNDLFVBQUEsQ0FDQSxXQUFBLENBQ0Esa0JiclBLLENhc1BMLFdBQUEsQ0FDQSxzRUFDQyxjQUFBLENBQ0EsZUFBQSxDQUdGLGdIQUNDLHdCYnZPTSxDYXdPTiwwSEFDQywrQkFBQSxDQUVELG9JQUNDLGFiMU9LLENhNk9QLDRLQUVDLGtCYm5QTSxDYW9QTixlQUFBLENBRUQsZ0tBRUMsNkJBQUEsQ0FDQSx3TEFDQyw2QkFBQSxDQUNBLHdCQUFBLENBQ0EsYWJ4UEssQ2EwUEwsNE9BQ0MsYWIzUEksQ2ErUFAsc0ZBQ0MsYWJoUU0sQ2FpUU4sNkJBQUEsQ0FFRCxvSkFFQyxhYnJRTSxDYXVRUCxrREFDQyxnQ0FBQSxDQUVELGdHQUNDLGFiM1FNLENhNlFQLHdHQUNDLHdCQUFBLENBQ0EsaUJBQUEsQ0FFRCwwRkFDQyxrQmJwUk0sQ2FxUk4sK0JBQUEsQ0FDQSxvR0FDQyxhYnJSSyxDYXdSUCwwRUFDQyw2QkFBQSxDQUNBLGdDQUFBLENBQ0Esb0ZBQ0MsYWI1UkssQ2ErUlAsazBCQVFDLGFiclNNLENhdVNQLGdHQUNDLGtCYjVTTSxDYTZTTix3QkFBQSxDQUVELDRGQUNDLGFiOVNNLENhZ1RQLDRLQUVDLGtCYnRUTSxDYXlUUCw0RkFDQyxhYnRUTSxDYXlUUCwwR0FDQyxrQmI1VE0sQ2E2VE4sd0JBQUEsQ0FDQSxvSEFDQyxhYjdUSyxDYWdVUCxvRUFDQyxrQmJ6VkssQ2EwVkwsd0JBQUEsQ0FDQSw4RUFDQyxVYjVVZ0IsQ2FrVmpCLHNVQUNDLGFiM1VLLENhZ1ZOLDRUQUNDLHdCQUFBLENBSUQsa0tBQ0Msa0JieFZLLENheVZMLHdCQUFBLENBQ0EsYWJ0VkssQ2F3Vk4sMEpBQ0MsYWIzVkssQ2E4VlAsMEdBQ0Msd0JibldNLENhc1dOLGdJQUNDLGFibldLLENhcVdOLHdJQUNDLGtCYnhXSyxDYXlXTCx3QkFBQSxDQUNBLGFidFdLLENheVdQLGtGQUNDLGtCYmhYTSxDYWtYUCxnRkFDQywrQkFBQSxDQUVELGdGQUNDLHdCYnBYTSxDYXFYTix3QkFBQSxDQUNBLDhGQUNDLHdCYnJYSyxDYXdYUCxvRkFDQyx3QmJqWkssQ2FtWkwsa0dBQ0MscUJicFlnQixDYXdZakIsZ0dBQ0MsYWJqWUssQ2FtWU4sd0dBQ0Msa0JidFlLLENhdVlMLHdCQUFBLENBQ0EsYWJwWUssQ2F1WVAsMEdBQ0Msa0JiOVlNLENhZ1pQLGdLQUVDLFVBQUEsQ0FDQSxVQUFBLENBQ0EsK0NBQUEsQ0FFRCw0S0FFQyxVQUFBLENBQ0EsVUFBQSxDQUNBLCtDQUFBLENBRUQsa0xBRUMsa0JiNVpNLENhOFpQLGtHQUNDLHdCYi9aTSxDYWlhUCw4RkFDQyxrQmJwYU0sQ2FxYU4seUJBQUEsQ0FFRCxrR0FDQyxhYnBhTSxDYXNhUCxnRkFDQyw4QkFBQSxDQUNBLHdCYjVhTSxDYThhUCx3RkFDQyx3QmI3YU0sQ2ErYVAsc0ZBQ0MsVUFBQSxDQUVELGtGQUNDLGFiamJNLENhbWJQLHdFQUNDLGFicGJNLENhc2JQLGtFQUNDLGFidmJNLENhd2JOLHdCYjFiTSxDYTJiTiw4RUFDQyx3QmIzYkssQ2E4YlAsMEVBQ0MsYWI5Yk0sQ2ErYk4sOEZBQ0Msd0JibGNLLENhcWNQLDRGQUNDLGFibmNNLENhc2NQLG9HQUNDLHdCYjFjTSxDYTRjUCw4WEFJQyx3QmJsZE0sQ2FtZE4sZUFBQSxDQUdELGtKQUVDLHdCYnJkTSxDYXVkTiw4S0FDQyxhYnRkSyxDYTBkUCxvTUFFQyx3QkFBQSxDQUNBLHdCYmhlTSxDYWllTixhYjlkTSxDYStkTix3UEFDQyxhYmplSyxDYW1lTiw0TkFDQyxZQUFBLENBQ0Esd0JBQUEsQ0FDQSxpQkFBQSxDQUdGLDBTQUdDLGFiNWVNLENhOGVQLDhGQUNDLGdDQUFBLENBRUQsb0ZBQ0Msd0JBQUEsQ0FDQSx3QmJyZk0sQ2F1ZlAsZ0ZBQ0MsYWJ0Zk0sQ2F3ZlAsa0ZBQ0MsK0NBQUEsQ0FFRCxrRkFDQyxrQmJoZ0JNLENha2dCUCxvRkFDQyx3QmJqZ0JNLENha2dCTixXQUFBLENBQ0EsOEdBQ0MsYWJqZ0JLLENhb2dCUCxvRkFDQyxhYnRnQk0sQ2F3Z0JQLGdHQUNDLHdCYjFnQk0sQ2EyZ0JOLDRHQUNDLCtCQUFBLENBRUQsa0hBQ0MsZ0NBQUEsQ0FFRCw4R0FDQyxhYmhoQkssQ2FraEJOLDBIQUNDLHdCQUFBLENBQ0Esd0JidmhCSyxDYXdoQkwsYWJyaEJLLENhc2hCTCxvSkFDQyxhYnhoQkksQ2E0aEJQLG9GQUNDLGFBQUEsQ0FFRCxrS0FFQyx3QmJsaUJNLENhbWlCTiwwTEFDQywrQkFBQSxDQUVELHNNQUNDLGdDQUFBLENBRUQsd1dBRUMsYWJ6aUJLLENhMmlCTiwwTUFDQyx3QkFBQSxDQUNBLHdCYmhqQkssQ2FpakJMLGFiOWlCSyxDYStpQkwsOFBBQ0MsYWJqakJJLENhc2pCUCw0RkFDQyx3QkFBQSxDQUNBLFdBQUEsQ0FDQSxzQ0FBQSxDQUNBLDBRQUVDLGFiNWtCVSxDYThrQlgsa0lBQ0Msd0JBQUEsQ0FDQSxhYmhsQlUsQ2FrbEJYLGdIQUNDLGVBQUEsQ0FDQSxnSkFDQyxlQUFBLENBR0YsOEhBQ0MsZ0NBQUEsQ0FFRCw4SEFDQyw2QkFBQSxDQU9GLHdGQUNDLFVBQUEsQ0FFRCxzRUFDQyxhYnRsQk0sQ2F3bEJQLDRFQUNDLFNBQUEsQ0FDQSxjQUFBLENBRUQsOEVBQ0MsYWI5bUJXLENhaW5CWixvR0FDQyxhQUFBLENBQ0Esd0JBQUEsQ0FDQSxnSEFDQyx3QkFBQSxDQUVELDhHQUNDLGFBQUEsQ0FDQSxrQkFBQSxDQUNBLDBIQUNDLGtCQUFBLENBSUgsNEZBQ0MsNkJBQUEsQ0FHRCw0RkFDQyxrQmJ0bkJNLENhdW5CTixhYnBuQk0sQ2FzbkJQLGtHQUNDLGFieG9CVyxDYTJvQlosb0ZBQ0MsbUNBQUEsQ0FHRCxrSEFDQyxhQUFBLENBSUEsZ0hBQ0Msd0JBQUEsQ0FHRCxvSEFDQyx3QkFBQSxDQUdELG9GQUNDLG1DQUFBLENabHBCSCxNQUNDLFlBQUEiLCJzb3VyY2VzQ29udGVudCI6WyJAdXNlICd2YXJpYWJsZXMnO1xuXG4uY2xvY2tpZnktaW50ZWdyYXRpb24tcG9wdXAge1xuXHRiYWNrZ3JvdW5kOiAjZWZmNGY3O1xuXHRib3gtc2hhZG93OiByZ2JhKDAsIDAsIDAsIDAuMTIpIDBweCAxcHggM3B4LCByZ2JhKDAsIDAsIDAsIDAuMjQpIDBweCAxcHggMnB4O1xuXHR3aWR0aDogMzUwcHg7XG5cdHBvc2l0aW9uOiBmaXhlZDtcblx0dG9wOiAzdmg7XG5cdHJpZ2h0OiAzdnc7XG5cdG1heC1oZWlnaHQ6IDkwdmg7XG5cdG92ZXJmbG93LXk6IGF1dG87XG5cdHotaW5kZXg6IDIxNDc0ODM2NDcgIWltcG9ydGFudDtcblx0Y29sb3I6IHZhcmlhYmxlcy4kZGFya190ZXh0O1xuXHRmb250LXNpemU6IDE0cHg7XG5cblx0Kjo6c2VsZWN0aW9uIHtcblx0XHRiYWNrZ3JvdW5kOiBoaWdobGlnaHQ7XG5cdFx0Y29sb3I6IGhpZ2hsaWdodHRleHQ7XG5cdH1cblxuXHRpbWcsXG5cdHN2ZyB7XG5cdFx0dmVydGljYWwtYWxpZ246IGluaGVyaXQ7XG5cdH1cblxuXHRpbnB1dDpub3QoW3R5cGU9J2ltYWdlJ2ldKSB7XG5cdFx0Ym94LXNpemluZzogYm9yZGVyLWJveDtcblx0fVxuXHRpbnB1dCxcblx0dGV4dGFyZWEge1xuXHRcdGJveC1zaGFkb3c6IG5vbmU7XG5cdH1cblx0bGFiZWwge1xuXHRcdGRpc3BsYXk6IGlubGluZS1ibG9jayAhaW1wb3J0YW50O1xuXHRcdGZvbnQtd2VpZ2h0OiBub3JtYWw7XG5cdH1cblx0c3BhbiB7XG5cdFx0ZmxvYXQ6IG5vbmU7XG5cdH1cblxuXHQmLWNsb3NlLWljb24ge1xuXHRcdHdpZHRoOiAxOHB4O1xuXHRcdGhlaWdodDogMThweDtcblx0XHRjdXJzb3I6IHBvaW50ZXI7XG5cdFx0cG9zaXRpb246IGFic29sdXRlO1xuXHRcdHRvcDogMTZweDtcblx0XHRyaWdodDogMjBweDtcblx0fVxuXHQmLWhlYWRlciB7XG5cdFx0aGVpZ2h0OiAyMHB4O1xuXHRcdHdpZHRoOiBmaXQtY29udGVudDtcblx0fVxuXG5cdC50b2FzdGVyX19jb250YWluZXIge1xuXHRcdHBvc2l0aW9uOiBhYnNvbHV0ZSAhaW1wb3J0YW50O1xuXHR9XG5cdC5wcm9qZWN0cy1saXN0IHtcblx0XHRkaXNwbGF5OiBibG9jaztcblx0fVxuXHQuYW50LXN3aXRjaCB7XG5cdFx0bWluLWhlaWdodDogYXV0bztcblx0fVxufVxuXG4jY2xvY2tpZnlCdXR0b24sXG4jY2xvY2tpZnlTbWFsbEJ1dHRvbiB7XG5cdGZvbnQtc2l6ZTogMTRweDtcblx0Y3Vyc29yOiBwb2ludGVyO1xuXHRpbWcsXG5cdHN2ZyB7XG5cdFx0dmVydGljYWwtYWxpZ246IGluaGVyaXQ7XG5cdH1cbn1cblxuI2Nsb2NraWZ5QnV0dG9uIHtcblx0ZGlzcGxheTogZmxleCAhaW1wb3J0YW50O1xuXHRhbGlnbi1pdGVtczogY2VudGVyICFpbXBvcnRhbnQ7XG59XG5cbiNjbG9ja2lmeUJ1dHRvbiA+IGRpdiB7XG5cdGRpc3BsYXk6IGZsZXggIWltcG9ydGFudDtcblx0YWxpZ24taXRlbXM6IGNlbnRlciAhaW1wb3J0YW50O1xuXHRqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbn1cblxuI2Nsb2NraWZ5QnV0dG9uID4gZGl2ID4gc3BhbiB7XG5cdG1hcmdpbi1sZWZ0OiA1cHg7XG59XG5cbi5jbG9ja2lmeS1idXR0b24tYWN0aXZlIHtcblx0Y29sb3I6ICMwM2E5ZjQ7XG59XG5cbi5jbG9ja2lmeS1idXR0b24taW5hY3RpdmUge1xuXHRjb2xvcjogIzQ0NDQ0NDtcbn1cblxuLmNsb2NraWZ5LWJ1dHRvbi1hY3RpdmUtc3Bhbixcbi5jbG9ja2lmeS1idXR0b24taW5hY3RpdmUtc3BhbiB7XG5cdG1hcmdpbi1sZWZ0OiA1cHg7XG5cdGZsb2F0OiBub25lO1xuXHRwb3NpdGlvbjogcmVsYXRpdmU7XG59XG5cbi5jbG9ja2lmeS1pbnB1dCB7XG5cdGJvcmRlcjogMXB4IHNvbGlkICNjNmQyZDk7XG5cdGJvcmRlci1yYWRpdXM6IDJweDtcblx0d2lkdGg6IDEzNnB4O1xuXHRwYWRkaW5nLWxlZnQ6IDRweDtcblx0aGVpZ2h0OiAzMHB4O1xuXHRmb250LXNpemU6IDE0cHg7XG59XG5cbi5jbG9ja2lmeS1pbnB1dDpmb2N1cyxcbi5jbG9ja2lmeS1pbnB1dDpob3ZlciB7XG5cdG91dGxpbmU6IG5vbmU7XG5cdGJveC1zaGFkb3c6IDAgMCA0cHggcmdiYSgwLCAwLCAwLCAwLjA1KTtcblx0Ym9yZGVyOiAxcHggc29saWQgIzAzYTlmNDtcblx0YmFja2dyb3VuZC1jb2xvcjogI2ZmZjtcbn1cblxuLmNsb2NraWZ5LWlucHV0LmNsb2NraWZ5LWlucHV0LWRlZmF1bHQge1xuXHRib3JkZXItY29sb3I6ICNjNmQyZDk7XG5cdGNvbG9yOiAjMzMzO1xuXHRiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmO1xufVxuXG4uY2xvY2tpZnktaW5wdXQuY2xvY2tpZnktaW5wdXQtc3VjY2VzcyB7XG5cdGJvcmRlci1jb2xvcjogI2NkZTljZTtcblx0Y29sb3I6ICMyODViMmE7XG5cdGJhY2tncm91bmQtY29sb3I6ICNkYmVmZGM7XG59XG5cbi5jbG9ja2lmeS1pbnB1dC5jbG9ja2lmeS1pbnB1dC1lcnJvciB7XG5cdGJvcmRlci1jb2xvcjogI2ZjY2FjNztcblx0Y29sb3I6ICM3ZjIzMWM7XG5cdGJhY2tncm91bmQtY29sb3I6ICNmZGQ5ZDc7XG59XG5cbi5jbG9ja2lmeS1tYW51YWwtZW50cnktaGVhZGVyLXRleHQge1xuXHRtYXJnaW4tbGVmdDogMjBweDtcbn1cblxuLmNsb2NraWZ5LXRyZWxsby1jYXJkIHtcblx0LmNsb2NraWZ5QnV0dG9uIHtcblx0XHR2aXNpYmlsaXR5OiBoaWRkZW47XG5cdH1cblxuXHQmOmhvdmVyIHtcblx0XHQuY2xvY2tpZnlCdXR0b24ge1xuXHRcdFx0dmlzaWJpbGl0eTogdmlzaWJsZTtcblx0XHR9XG5cdH1cblx0Jjpub3QoOmhvdmVyKSB7XG5cdFx0LmNsb2NraWZ5QnV0dG9uIHtcblx0XHRcdHZpc2liaWxpdHk6IGhpZGRlbjtcblxuXHRcdFx0Ji5hY3RpdmUge1xuXHRcdFx0XHR2aXNpYmlsaXR5OiB2aXNpYmxlO1xuXHRcdFx0fVxuXG5cdFx0XHQmOm5vdCguYWN0aXZlKSB7XG5cdFx0XHRcdHZpc2liaWxpdHk6IGhpZGRlbjtcblx0XHRcdH1cblx0XHR9XG5cdH1cbn1cblxuLmNsb2NraWZ5LWNvcHktYXMtZW50cnktY29udGFpbmVyIHtcblx0ZGlzcGxheTogZmxleDtcblx0YWxpZ24taXRlbXM6IGNlbnRlcjtcblx0Z2FwOiAzcHg7XG5cdGN1cnNvcjogcG9pbnRlcjtcblx0d2lkdGg6IGZpdC1jb250ZW50O1xuXHRjb2xvcjogcmdiKDY4LCA2OCwgNjgpO1xufVxuIiwiJHJlZDogI2Y0NDMzNjtcbiRvcmFuZ2U6ICNmZjk4MDA7XG4kd2FybmluZzogI2ZmZWFjYztcbiRibHVlOiAjMDNhOWY0O1xuJGJsYWNrOiAjMDAwMDAwO1xuJHllbGxvdzogI2ZmYzEwNztcbiRibHVlX2hvdmVyOiAjMDA5MWVhO1xuJGJsdWVfdGFnOiAjMDI1ODdmO1xuJGJhY2tncm91bmQ6ICNlZmY0Zjc7XG4kYm9yZGVyOiAjYzZkMmQ5O1xuJGJvcmRlcl9mb2N1czogIzkwYTRhZTtcbiRsaWdodF90ZXh0OiAjYzZkMmQ5O1xuJGxpZ2h0ZXJfdGV4dDogIzk5OTk5OTtcbiRtaWRkbGVfbGlnaHRfdGV4dDogIzY2NjY2NjtcbiRlbnRyaWVzX2hlYWRlcjogI2U0ZWFlZTtcbiRkYXJrX3RleHQ6ICMzMzMzMzM7XG4kdGFnczogI2UxZjVmZTtcbiRncmVlbjogIzhiYzM0YTtcbiRkaXNhYmxlZDogI2M2ZDJkOTtcbiRpbnB1dC1iYWNrZ3JvdW5kOiAjZmZmZmZmO1xuJGhvdmVyLXNlbGVjdGlvbjogI2U0ZWFlZTtcbiR0YXNrLWJhY2tncm91bmQ6ICNmMmY2Zjg7XG5cbiRiZy0xMjogIzEyMTkxZDtcbiRiZy0xMTogIzFkMjcyYztcbiRiZy0xMDogIzI2MzIzODtcbiRiZy0wOTogIzM3NDc0ZjtcbiRiZy0wNDogIzkwYTRhZTtcbiRiZy0wMzogI2M2ZDJkOTtcbiRiZy0wMjogI2U0ZWFlZTtcbiIsIkB1c2UgJ3Nhc3M6bWV0YSc7XG5AdXNlICdpbnRlZ3JhdGlvbic7XG4uY2xvY2tpZnktaW50ZWdyYXRpb24tcG9wdXAge1xuXHRAaW5jbHVkZSBtZXRhLmxvYWQtY3NzKCcuLi9ub2RlX21vZHVsZXMvYW50ZC9saWIvc3dpdGNoL3N0eWxlL2luZGV4Jyk7XG5cdC8vIEBpbmNsdWRlIG1ldGEubG9hZC1jc3MoXCJoZWFkZXJcIik7XG5cdEBpbmNsdWRlIG1ldGEubG9hZC1jc3MoJ3N0YXJ0LXRpbWVyJyk7XG5cdC8vIEBpbmNsdWRlIG1ldGEubG9hZC1jc3MoXCJtZW51XCIpO1xuXHQvLyBAaW5jbHVkZSBtZXRhLmxvYWQtY3NzKFwidGltZS1lbnRyeVwiKTtcblx0Ly8gQGluY2x1ZGUgbWV0YS5sb2FkLWNzcyhcInRpbWUtZW50cnktbGlzdFwiKTtcblx0QGluY2x1ZGUgbWV0YS5sb2FkLWNzcygnZHVyYXRpb24nKTtcblx0QGluY2x1ZGUgbWV0YS5sb2FkLWNzcygnZWRpdC1mb3JtJyk7XG5cdEBpbmNsdWRlIG1ldGEubG9hZC1jc3MoJ3Byb2plY3RzLWxpc3QnKTtcblx0QGluY2x1ZGUgbWV0YS5sb2FkLWNzcygndGFnLWxpc3QnKTtcblx0QGluY2x1ZGUgbWV0YS5sb2FkLWNzcygncG9wcHVwLW1vZGFsJyk7XG5cdEBpbmNsdWRlIG1ldGEubG9hZC1jc3MoJ2N1c3RvbS1maWVsZHMnKTtcblx0QGluY2x1ZGUgbWV0YS5sb2FkLWNzcygncmVxdWlyZWQtZmllbGRzJyk7XG5cdC8vIEBpbmNsdWRlIG1ldGEubG9hZC1jc3MoXCJ0aW1lLWVudHJ5LWxpc3Qtbm90LXN5bmNlZFwiKTtcblx0QGluY2x1ZGUgbWV0YS5sb2FkLWNzcygndG9hc3RlcicpO1xuXHRAaW5jbHVkZSBtZXRhLmxvYWQtY3NzKCdnbG9iYWwnKTtcbn1cbkBpbmNsdWRlIG1ldGEubG9hZC1jc3MoJ2RhcmstbW9kZScpO1xuXG5zdHlsZSB7XG5cdGRpc3BsYXk6IG5vbmU7XG59XG4iLCJAdXNlICd2YXJpYWJsZXMnO1xuQGltcG9ydCAnfkBmb250c291cmNlL3JvYm90by80MDAuY3NzJztcbkBpbXBvcnQgJ35AZm9udHNvdXJjZS9yb2JvdG8vNzAwLmNzcyc7XG5cbkAtd2Via2l0LWtleWZyYW1lcyByb3RhdGlvbiB7XG4gIGZyb20ge1xuICAgIC13ZWJraXQtdHJhbnNmb3JtOiByb3RhdGUoMGRlZyk7XG4gIH1cbiAgdG8ge1xuICAgIC13ZWJraXQtdHJhbnNmb3JtOiByb3RhdGUoMzU5ZGVnKTtcbiAgfVxufVxuXG5odG1sIHtcbiAgbWluLWhlaWdodDogNjAwcHg7XG59XG5cbmJvZHkge1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZWZmNGY3O1xuICBtYXJnaW46IDBweDtcbiAgb3ZlcmZsb3cteTogb3ZlcmxheTtcbiAgb3ZlcmZsb3cteDogaGlkZGVuO1xuICB1c2VyLXNlbGVjdDogbm9uZTtcbiAgZm9udC1zaXplOiAxMnB4O1xufVxuXG4qIHtcbiAgZm9udC1mYW1pbHk6ICdSb2JvdG8nLCBBcmlhbCwgc2Fucy1zZXJpZiAhaW1wb3J0YW50O1xuICBib3gtc2l6aW5nOiByZXZlcnQ7XG4gIGlzb2xhdGlvbjogdW5zZXQ7XG59XG5cbnAge1xuICBtYXJnaW4tdG9wOiByZXZlcnQ7XG59XG5cbmJ1dHRvbiB7XG4gIHRleHQtdHJhbnNmb3JtOiB1cHBlcmNhc2U7XG59XG5cbmlucHV0IHtcbiAgYm94LXNpemluZzogYm9yZGVyLWJveDtcbn1cblxuaHIge1xuICBwYWRkaW5nLXRvcDogMHB4O1xuICBtYXJnaW46IDBweDtcbiAgYm9yZGVyLXRvcDogMHB4O1xuICBib3JkZXItYm90dG9tOiAxcHggZG90dGVkICNjYWNhY2E7XG59XG5cbi5ob21lX3BhZ2Uge1xuICBwYWRkaW5nLXRvcDogMTM0cHg7XG5cbiAgLmNsb2NraWZ5LXN1YnNjcmlwdGlvbi1leHBpcmVkLW92ZXJsYXkge1xuICAgIHBvc2l0aW9uOiBmaXhlZDtcbiAgICB0b3A6IDUwcHg7XG4gICAgbGVmdDogMDtcbiAgICByaWdodDogMDtcbiAgICBib3R0b206IDA7XG4gICAgYmFja2dyb3VuZDogcmdiYSgxOTgsIDIxMCwgMjE3LCAwLjIpO1xuICAgIHotaW5kZXg6IDExMTA7XG4gIH1cblxuICAuY2xvY2tpZnktc3Vic2NyaXB0aW9uLWV4cGlyZWQtbWVzc2FnZSB7XG4gICAgYmFja2dyb3VuZDogI2ZmZWFjYztcbiAgICBjb2xvcjogIzg1NGYwMDtcbiAgICBmb250LXNpemU6IDE0cHg7XG4gICAgYm9yZGVyOiAxcHggc29saWQgI2ZmZTJiODtcbiAgICBib3JkZXItcmFkaXVzOiA4cHg7XG4gICAgd2lkdGg6IDMyMHB4O1xuICAgIG1hcmdpbjogYXV0bztcblxuICAgIGltZyB7XG4gICAgICBmbG9hdDogbGVmdDtcbiAgICAgIHBhZGRpbmc6IDdweCA4cHg7XG4gICAgfVxuXG4gICAgcCB7XG4gICAgICBtYXJnaW4tdG9wOiA1cHg7XG4gICAgICBtYXJnaW4tYm90dG9tOiA1cHg7XG4gICAgICBwYWRkaW5nLWxlZnQ6IDM3cHg7XG4gICAgfVxuICB9XG59XG5cbi5tb2RhbEJhY2tncm91bmQge1xuICBkaXNwbGF5OiBub25lO1xuICBwb3NpdGlvbjogZml4ZWQ7XG4gIHdpZHRoOiAxMDB2dztcbiAgaGVpZ2h0OiAxMDB2aDtcbiAgYmFja2dyb3VuZC1jb2xvcjogcmdiYSgwLCAwLCAwLCAwLjgpO1xuICBsZWZ0OiAwO1xuICB0b3A6IDA7XG4gIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICBhbGlnbi1pdGVtczogY2VudGVyO1xuICB6LWluZGV4OiAxMDQwO1xuXG4gICYuc2hvdyB7XG4gICAgZGlzcGxheTogZmxleDtcbiAgfVxufVxuXG4uZG90IHtcbiAgcGFkZGluZzogMnB4O1xuICBib3JkZXItcmFkaXVzOiA1MCU7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgd2lkdGg6IDJweDtcbiAgaGVpZ2h0OiAycHg7XG59XG5cbi8vIC5kb3QtcHJvamVjdC1waWNrZXIge1xuLy8gICBwb3NpdGlvbjogcmVsYXRpdmU7XG4vLyAgIHdpZHRoOiA1cHg7XG4vLyAgIGhlaWdodDogNXB4O1xuLy8gICBib3JkZXItcmFkaXVzOiA1cHg7XG4vLyAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbi8vICAgbWFyZ2luLXJpZ2h0OiA1cHg7XG4vLyAgIC8vdG9wOiAtM3B4O1xuLy8gfVxuXG4ucHRyLWVsZW1lbnQge1xuICBoZWlnaHQ6IDA7XG59XG5cbjo6LXdlYmtpdC1zY3JvbGxiYXIge1xuICB3aWR0aDogNXB4O1xufVxuXG46Oi13ZWJraXQtc2Nyb2xsYmFyLXRodW1iIHtcbiAgYmFja2dyb3VuZDogdmFyaWFibGVzLiRibHVlO1xufVxuXG4uaW52aXNpYmxlIHtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICB0b3A6IDA7XG4gIHdpZHRoOiAxMDAlO1xuICBoZWlnaHQ6IDEwMCU7XG4gIHotaW5kZXg6IDI7XG59XG5cbi5pbnZpc2libGUtbWVudSB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiAwO1xuICB3aWR0aDogMTAwJTtcbiAgaGVpZ2h0OiAxMDB2aDtcbiAgei1pbmRleDogMTA1MDtcbn1cblxuLmxvYWRpbmctZ2lmIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICB0b3A6IDExMHB4O1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG59XG5cbi5sb2FkaW5nLWdpZiBpbWcge1xuICBjb250ZW50OiB1cmwoJy4uL2Fzc2V0cy9pbWFnZXMvbG9hZGluZy5naWYnKTtcbn1cblxuLmxvYWRpbmctZ2lmLWJlZm9yZS1sb2FkIHtcbiAgY29udGVudDogdXJsKCcuLi9hc3NldHMvaW1hZ2VzL2xvYWRpbmcuZ2lmJyk7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgbWFyZ2luLWxlZnQ6IGF1dG87XG4gIG1hcmdpbi1yaWdodDogYXV0bztcbiAgdG9wOiAxMTBweDtcbn1cblxuLmxvYWRpbmctZW50cmllcy1naWYge1xuICBwYWRkaW5nLWJvdHRvbTogMjBweDtcbiAgdGV4dC1hbGlnbjogY2VudGVyO1xufVxuXG4ubG9hZGluZy1lbnRyaWVzLWdpZiBpbWcge1xuICBjb250ZW50OiB1cmwoJy4uL2Fzc2V0cy9pbWFnZXMvbG9hZGluZy5naWYnKTtcbn1cblxuLmRpc2FibGVkIHtcbiAgZGlzcGxheTogbm9uZTtcbn1cblxuLnB1bGwtbG9hZGluZyB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICB0b3A6IDM1cHg7XG4gIGxlZnQ6IDUwJTtcbiAgdHJhbnNmb3JtOiB0cmFuc2xhdGUoLTUwJSwgMCk7XG4gIHotaW5kZXg6IC0xO1xufVxuXG4ucHVsbC1sb2FkaW5nLWVudHJpZXMge1xuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgdG9wOiAwO1xuICBsZWZ0OiA1MCU7XG4gIHRyYW5zZm9ybTogdHJhbnNsYXRlKC01MCUsIDApO1xuICB6LWluZGV4OiAtMTtcbn1cblxuLnB1bGwtbG9hZGluZy1pbWcxIHtcbiAgY29udGVudDogdXJsKCcuLi9hc3NldHMvaW1hZ2VzL2NpcmNsZV8xLnN2ZycpO1xuICB3aWR0aDogNTBweDtcbiAgaGVpZ2h0OiA1MHB4O1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIGxlZnQ6IDA7XG4gIHRvcDogMDtcbn1cblxuLnB1bGwtbG9hZGluZy1pbWcyIHtcbiAgY29udGVudDogdXJsKCcuLi9hc3NldHMvaW1hZ2VzL2NpcmNsZV8yLnN2ZycpO1xuICB3aWR0aDogNHB4O1xuICBoZWlnaHQ6IDUwcHg7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgbGVmdDogMjNweDtcbiAgdG9wOiAxcHg7XG4gIC13ZWJraXQtYW5pbWF0aW9uOiByb3RhdGlvbiAycyBpbmZpbml0ZSBsaW5lYXI7XG59XG5cbi50aW1lLWVudHJ5LWxpc3Qge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIHRvcDogMTVweDtcbn1cblxuLnRpbWUtZW50cnktbGlzdF9fb2ZmbGluZSB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbn1cblxuLmV4cGFuZENvbnRhaW5lciB7XG4gIG1heC1oZWlnaHQ6IDA7XG4gIG92ZXJmbG93OiBoaWRkZW47XG4gIHRyYW5zaXRpb246IG1heC1oZWlnaHQgMC4zcyBsaW5lYXI7XG59XG5cbi5jaGVja2VkIHtcbiAgd2lkdGg6IDE4cHg7XG4gIGhlaWdodDogMThweDtcbiAgYmFja2dyb3VuZDogdmFyaWFibGVzLiRibHVlO1xuICBib3JkZXI6IG5vbmU7XG5cbiAgaW1nIHtcbiAgICBtYXJnaW4tdG9wOiAzcHg7XG4gICAgbWFyZ2luLWxlZnQ6IDJweDtcbiAgfVxufVxuXG4uZGF5LWFjdGl2ZSB7XG4gIGJhY2tncm91bmQ6IHZhcmlhYmxlcy4kYmx1ZTtcbiAgYm9yZGVyOiAxcHggc29saWQgIzAzYTlmNDtcblxuICBzcGFuIHtcbiAgICBjb2xvcjogdmFyaWFibGVzLiRpbnB1dC1iYWNrZ3JvdW5kO1xuICB9XG59XG5cbi5saXN0LWRpc2FibGVkIHtcbiAgb3BhY2l0eTogMC40O1xuICBjdXJzb3I6IGRlZmF1bHQ7XG59XG5cbi5hbnQtcGlja2VyLXRpbWUtcGFuZWwtY29sdW1uIHtcbiAgJjo6YWZ0ZXIge1xuICAgIGhlaWdodDogMCAhaW1wb3J0YW50O1xuICB9XG5cbiAgLmFudC1waWNrZXItdGltZS1wYW5lbC1jZWxsIHtcbiAgICAmLWlubmVyIHtcbiAgICAgIHdpZHRoOiBhdXRvICFpbXBvcnRhbnQ7XG4gICAgfVxuICB9XG59XG4iLCIvKiBzdHlsZWxpbnQtZGlzYWJsZSBhdC1ydWxlLWVtcHR5LWxpbmUtYmVmb3JlLGF0LXJ1bGUtbmFtZS1zcGFjZS1hZnRlcixhdC1ydWxlLW5vLXVua25vd24gKi9cbi8qIHN0eWxlbGludC1kaXNhYmxlIG5vLWR1cGxpY2F0ZS1zZWxlY3RvcnMgKi9cbi8qIHN0eWxlbGludC1kaXNhYmxlICovXG4vKiBzdHlsZWxpbnQtZGlzYWJsZSBkZWNsYXJhdGlvbi1iYW5nLXNwYWNlLWJlZm9yZSxuby1kdXBsaWNhdGUtc2VsZWN0b3JzLHN0cmluZy1uby1uZXdsaW5lICovXG4uYW50LXN3aXRjaCB7XG4gIG1hcmdpbjogMDtcbiAgcGFkZGluZzogMDtcbiAgY29sb3I6IHJnYmEoMCwgMCwgMCwgMC44NSk7XG4gIGZvbnQtc2l6ZTogMTRweDtcbiAgZm9udC12YXJpYW50OiB0YWJ1bGFyLW51bXM7XG4gIGxpbmUtaGVpZ2h0OiAxLjU3MTU7XG4gIGxpc3Qtc3R5bGU6IG5vbmU7XG4gIGZvbnQtZmVhdHVyZS1zZXR0aW5nczogJ3RudW0nO1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgYm94LXNpemluZzogYm9yZGVyLWJveDtcbiAgbWluLXdpZHRoOiA0NHB4O1xuICBoZWlnaHQ6IDIycHg7XG4gIGxpbmUtaGVpZ2h0OiAyMnB4O1xuICB2ZXJ0aWNhbC1hbGlnbjogbWlkZGxlO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDAsIDAsIDAsIDAuMjUpO1xuICBib3JkZXI6IDA7XG4gIGJvcmRlci1yYWRpdXM6IDEwMHB4O1xuICBjdXJzb3I6IHBvaW50ZXI7XG4gIHRyYW5zaXRpb246IGFsbCAwLjJzO1xuICAtd2Via2l0LXVzZXItc2VsZWN0OiBub25lO1xuICAgICAtbW96LXVzZXItc2VsZWN0OiBub25lO1xuICAgICAgLW1zLXVzZXItc2VsZWN0OiBub25lO1xuICAgICAgICAgIHVzZXItc2VsZWN0OiBub25lO1xufVxuLmFudC1zd2l0Y2g6Zm9jdXMge1xuICBvdXRsaW5lOiAwO1xuICBib3gtc2hhZG93OiAwIDAgMCAycHggcmdiYSgwLCAwLCAwLCAwLjEpO1xufVxuLmFudC1zd2l0Y2gtY2hlY2tlZDpmb2N1cyB7XG4gIGJveC1zaGFkb3c6IDAgMCAwIDJweCAjZTZmN2ZmO1xufVxuLmFudC1zd2l0Y2g6Zm9jdXM6aG92ZXIge1xuICBib3gtc2hhZG93OiBub25lO1xufVxuLmFudC1zd2l0Y2gtY2hlY2tlZCB7XG4gIGJhY2tncm91bmQtY29sb3I6ICMxODkwZmY7XG59XG4uYW50LXN3aXRjaC1sb2FkaW5nLFxuLmFudC1zd2l0Y2gtZGlzYWJsZWQge1xuICBjdXJzb3I6IG5vdC1hbGxvd2VkO1xuICBvcGFjaXR5OiAwLjQ7XG59XG4uYW50LXN3aXRjaC1sb2FkaW5nICosXG4uYW50LXN3aXRjaC1kaXNhYmxlZCAqIHtcbiAgYm94LXNoYWRvdzogbm9uZTtcbiAgY3Vyc29yOiBub3QtYWxsb3dlZDtcbn1cbi5hbnQtc3dpdGNoLWlubmVyIHtcbiAgZGlzcGxheTogYmxvY2s7XG4gIG1hcmdpbjogMCA3cHggMCAyNXB4O1xuICBjb2xvcjogI2ZmZjtcbiAgZm9udC1zaXplOiAxMnB4O1xuICB0cmFuc2l0aW9uOiBtYXJnaW4gMC4ycztcbn1cbi5hbnQtc3dpdGNoLWNoZWNrZWQgLmFudC1zd2l0Y2gtaW5uZXIge1xuICBtYXJnaW46IDAgMjVweCAwIDdweDtcbn1cbi5hbnQtc3dpdGNoLWhhbmRsZSB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiAycHg7XG4gIGxlZnQ6IDJweDtcbiAgd2lkdGg6IDE4cHg7XG4gIGhlaWdodDogMThweDtcbiAgdHJhbnNpdGlvbjogYWxsIDAuMnMgZWFzZS1pbi1vdXQ7XG59XG4uYW50LXN3aXRjaC1oYW5kbGU6OmJlZm9yZSB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiAwO1xuICByaWdodDogMDtcbiAgYm90dG9tOiAwO1xuICBsZWZ0OiAwO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmO1xuICBib3JkZXItcmFkaXVzOiA5cHg7XG4gIGJveC1zaGFkb3c6IDAgMnB4IDRweCAwIHJnYmEoMCwgMzUsIDExLCAwLjIpO1xuICB0cmFuc2l0aW9uOiBhbGwgMC4ycyBlYXNlLWluLW91dDtcbiAgY29udGVudDogJyc7XG59XG4uYW50LXN3aXRjaC1jaGVja2VkIC5hbnQtc3dpdGNoLWhhbmRsZSB7XG4gIGxlZnQ6IGNhbGMoMTAwJSAtIDE4cHggLSAycHgpO1xufVxuLmFudC1zd2l0Y2g6bm90KC5hbnQtc3dpdGNoLWRpc2FibGVkKTphY3RpdmUgLmFudC1zd2l0Y2gtaGFuZGxlOjpiZWZvcmUge1xuICByaWdodDogLTMwJTtcbiAgbGVmdDogMDtcbn1cbi5hbnQtc3dpdGNoOm5vdCguYW50LXN3aXRjaC1kaXNhYmxlZCk6YWN0aXZlLmFudC1zd2l0Y2gtY2hlY2tlZCAuYW50LXN3aXRjaC1oYW5kbGU6OmJlZm9yZSB7XG4gIHJpZ2h0OiAwO1xuICBsZWZ0OiAtMzAlO1xufVxuLmFudC1zd2l0Y2gtbG9hZGluZy1pY29uLmFudGljb24ge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIHRvcDogMnB4O1xuICBjb2xvcjogcmdiYSgwLCAwLCAwLCAwLjY1KTtcbiAgdmVydGljYWwtYWxpZ246IHRvcDtcbn1cbi5hbnQtc3dpdGNoLWNoZWNrZWQgLmFudC1zd2l0Y2gtbG9hZGluZy1pY29uIHtcbiAgY29sb3I6ICMxODkwZmY7XG59XG4uYW50LXN3aXRjaC1zbWFsbCB7XG4gIG1pbi13aWR0aDogMjhweDtcbiAgaGVpZ2h0OiAxNnB4O1xuICBsaW5lLWhlaWdodDogMTZweDtcbn1cbi5hbnQtc3dpdGNoLXNtYWxsIC5hbnQtc3dpdGNoLWlubmVyIHtcbiAgbWFyZ2luOiAwIDVweCAwIDE4cHg7XG4gIGZvbnQtc2l6ZTogMTJweDtcbn1cbi5hbnQtc3dpdGNoLXNtYWxsIC5hbnQtc3dpdGNoLWhhbmRsZSB7XG4gIHdpZHRoOiAxMnB4O1xuICBoZWlnaHQ6IDEycHg7XG59XG4uYW50LXN3aXRjaC1zbWFsbCAuYW50LXN3aXRjaC1sb2FkaW5nLWljb24ge1xuICB0b3A6IDEuNXB4O1xuICBmb250LXNpemU6IDlweDtcbn1cbi5hbnQtc3dpdGNoLXNtYWxsLmFudC1zd2l0Y2gtY2hlY2tlZCAuYW50LXN3aXRjaC1pbm5lciB7XG4gIG1hcmdpbjogMCAxOHB4IDAgNXB4O1xufVxuLmFudC1zd2l0Y2gtc21hbGwuYW50LXN3aXRjaC1jaGVja2VkIC5hbnQtc3dpdGNoLWhhbmRsZSB7XG4gIGxlZnQ6IGNhbGMoMTAwJSAtIDEycHggLSAycHgpO1xufVxuLmFudC1zd2l0Y2gtcnRsIHtcbiAgZGlyZWN0aW9uOiBydGw7XG59XG4uYW50LXN3aXRjaC1ydGwgLmFudC1zd2l0Y2gtaW5uZXIge1xuICBtYXJnaW46IDAgMjVweCAwIDdweDtcbn1cbi5hbnQtc3dpdGNoLXJ0bCAuYW50LXN3aXRjaC1oYW5kbGUge1xuICByaWdodDogMnB4O1xuICBsZWZ0OiBhdXRvO1xufVxuLmFudC1zd2l0Y2gtcnRsOm5vdCguYW50LXN3aXRjaC1ydGwtZGlzYWJsZWQpOmFjdGl2ZSAuYW50LXN3aXRjaC1oYW5kbGU6OmJlZm9yZSB7XG4gIHJpZ2h0OiAwO1xuICBsZWZ0OiAtMzAlO1xufVxuLmFudC1zd2l0Y2gtcnRsOm5vdCguYW50LXN3aXRjaC1ydGwtZGlzYWJsZWQpOmFjdGl2ZS5hbnQtc3dpdGNoLWNoZWNrZWQgLmFudC1zd2l0Y2gtaGFuZGxlOjpiZWZvcmUge1xuICByaWdodDogLTMwJTtcbiAgbGVmdDogMDtcbn1cbi5hbnQtc3dpdGNoLXJ0bC5hbnQtc3dpdGNoLWNoZWNrZWQgLmFudC1zd2l0Y2gtaW5uZXIge1xuICBtYXJnaW46IDAgN3B4IDAgMjVweDtcbn1cbi5hbnQtc3dpdGNoLXJ0bC5hbnQtc3dpdGNoLWNoZWNrZWQgLmFudC1zd2l0Y2gtaGFuZGxlIHtcbiAgcmlnaHQ6IGNhbGMoMTAwJSAtIDE4cHggLSAycHgpO1xufVxuLmFudC1zd2l0Y2gtcnRsLmFudC1zd2l0Y2gtc21hbGwuYW50LXN3aXRjaC1jaGVja2VkIC5hbnQtc3dpdGNoLWhhbmRsZSB7XG4gIHJpZ2h0OiBjYWxjKDEwMCUgLSAxMnB4IC0gMnB4KTtcbn1cbiIsIkB1c2UgJ3ZhcmlhYmxlcyc7XG5cbi5zdGFydC10aW1lciB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgZGlzcGxheTogZmxleDtcbiAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuO1xuICBoZWlnaHQ6IDUwcHg7XG4gIG1hcmdpbjogMTBweCAyMHB4O1xuICBiYWNrZ3JvdW5kOiB3aGl0ZTtcbiAgYm9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRib3JkZXI7XG4gIGJvcmRlci1yYWRpdXM6IDJweDtcbn1cblxuLnN0YXJ0LXRpbWVyX2J1dHRvbi1yZWQge1xuICB3aWR0aDogMTEwcHg7XG4gIGhlaWdodDogNDBweDtcbiAgbWFyZ2luOiA1cHg7XG4gIGJvcmRlcjogbm9uZTtcbiAgYm9yZGVyLXJhZGl1czogMnB4O1xuICBiYWNrZ3JvdW5kOiB2YXJpYWJsZXMuJHJlZDtcbiAgY29sb3I6IHZhcmlhYmxlcy4kYmFja2dyb3VuZDtcbiAgY3Vyc29yOiBwb2ludGVyO1xufVxuXG4uc3RhcnQtdGltZXJfYnV0dG9uLXJlZDpob3ZlciAuYnV0dG9uX3RpbWVyIHtcbiAgZGlzcGxheTogbm9uZTtcbn1cblxuLnN0YXJ0LXRpbWVyX2J1dHRvbi1yZWQ6aG92ZXIgLmJ1dHRvbl9zdG9wIHtcbiAgZGlzcGxheTogYmxvY2s7XG59XG5cbi5idXR0b25fc3RvcCB7XG4gIGRpc3BsYXk6IG5vbmU7XG59XG5cbi5zdGFydC10aW1lcl9idXR0b24tc3RhcnQge1xuICB3aWR0aDogMTEwcHg7XG4gIGhlaWdodDogNDBweDtcbiAgbWFyZ2luOiA1cHg7XG4gIGJvcmRlcjogbm9uZTtcbiAgYm9yZGVyLXJhZGl1czogMnB4O1xuICBiYWNrZ3JvdW5kOiB2YXJpYWJsZXMuJGJsdWU7XG4gIGNvbG9yOiB2YXJpYWJsZXMuJGJhY2tncm91bmQ7XG4gIGN1cnNvcjogcG9pbnRlcjtcbn1cblxuLnN0YXJ0LXRpbWVyX2J1dHRvbi1zdGFydDpob3ZlciB7XG4gIGJhY2tncm91bmQ6IHZhcmlhYmxlcy4kYmx1ZV9ob3Zlcjtcbn1cblxuLnN0YXJ0LXRpbWVyX2Rlc2NyaXB0aW9uLWlucHV0IHtcbiAgaGVpZ2h0OiA5NSU7XG4gIHdpZHRoOiAxMDAlO1xuICBwYWRkaW5nLWxlZnQ6IDEwcHg7XG4gIGJvcmRlcjogMDtcbiAgb3V0bGluZTogbm9uZTtcbn1cblxuLnN0YXJ0LXRpbWVyX2Rlc2NyaXB0aW9uLWlucHV0OjotbXMtY2xlYXIge1xuICBkaXNwbGF5OiBub25lO1xufVxuXG4uc3RhcnQtdGltZXJfcGxhY2Vob2xkZXIge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHBvaW50ZXItZXZlbnRzOiBub25lO1xuICB0b3A6IDA7XG4gIGJvdHRvbTogMDtcbiAgaGVpZ2h0OiBmaXQtY29udGVudDtcbiAgZm9udC1zaXplOiAxNHB4O1xuICBsZWZ0OiAxMHB4O1xuICBtYXJnaW46IGF1dG87XG4gIGNvbG9yOiAjNzc3O1xufVxuXG4uc3RhcnQtdGltZXJfZGVzY3JpcHRpb24ge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHRvcDogNTAlO1xuICB0cmFuc2Zvcm06IHRyYW5zbGF0ZVkoLTUwJSk7XG4gIGxlZnQ6IDEwcHg7XG4gIGZvbnQtc2l6ZTogMTRweDtcbiAgY3Vyc29yOiBwb2ludGVyO1xuICBvdmVyZmxvdzogaGlkZGVuO1xuICB3aGl0ZS1zcGFjZTogbm93cmFwO1xuICB3aWR0aDogNTclO1xuICB0ZXh0LW92ZXJmbG93OiBlbGxpcHNpcztcbn1cblxuLnN0YXJ0LXRpbWVyX2Rlc2NyaXB0aW9uX2dyZXkge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHdpZHRoOiA0NyU7XG4gIG1hcmdpbi10b3A6IDE3cHg7XG4gIG1hcmdpbi1ib3R0b206IDE3cHg7XG4gIG1hcmdpbi1sZWZ0OiAxN3B4O1xuICBmb250LXNpemU6IDE0cHg7XG4gIGNvbG9yOiB2YXJpYWJsZXMuJGxpZ2h0ZXJfdGV4dDtcbiAgY3Vyc29yOiBwb2ludGVyO1xufVxuXG4uc3RhcnQtdGltZXItZGVzY3JpcHRpb24ge1xuICBmbGV4OiAxO1xufVxuXG4uc3RhcnQtdGltZXItZGVzY3JpcHRpb24gLnJlYWN0LWF1dG9jb21wbGV0ZSB7XG4gIGhlaWdodDogMTAwJTtcbiAgd2lkdGg6IDEwMCU7XG59XG5cbi5yZWFjdC1hdXRvY29tcGxldGUge1xuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgd2lkdGg6IDEwMCU7XG59XG5cbi5yZWFjdC1hdXRvY29tcGxldGUtbWVudSB7XG4gIGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgbWF4LWhlaWdodDogMjUwcHg7XG4gIG92ZXJmbG93LXk6IGF1dG87XG4gIG92ZXJmbG93LXg6IGhpZGRlbjtcbiAgYmFja2dyb3VuZDogd2hpdGU7XG4gIGJveC1zaGFkb3c6IDAgNXB4IDEwcHggIzAwMDAwMDFhO1xuICB6LWluZGV4OiAyNTtcbn1cblxuLmF1dG9jb21wbGV0ZS1kcm9wZG93bi1pdGVtIHtcbiAgYm94LXNpemluZzogYm9yZGVyLWJveDtcbiAgZGlzcGxheTogZmxleDtcbiAgZmxleC13cmFwOiBub3dyYXA7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gIHJvdy1nYXA6IDVweDtcbiAgd2lkdGg6IDMxNHB4O1xuICBmb250LXNpemU6IDE0cHg7XG4gIHBhZGRpbmc6IDEwcHg7XG4gIGN1cnNvcjogcG9pbnRlcjtcbiAgYmFja2dyb3VuZC1jb2xvcjogd2hpdGU7XG5cbiAgJjpob3ZlciB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2VlZWVlZTtcbiAgfVxuXG4gIC5kb3Qge1xuICAgIG1hcmdpbi1yaWdodDogNXB4O1xuICAgIG1hcmdpbi1sZWZ0OiA1cHg7XG4gICAgYWxpZ24tc2VsZjogY2VudGVyO1xuICB9XG5cbiAgJl9fdGFnIHtcbiAgICBjb2xvcjogIzAyNTY3ZTtcbiAgICBiYWNrZ3JvdW5kOiAjZTFmNWZlO1xuICAgIHBhZGRpbmc6IDJweCA4cHg7XG4gICAgbWFyZ2luLWxlZnQ6IDVweDtcbiAgICBtYXgtd2lkdGg6IDEzNnB4O1xuICAgIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gICAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgICB0ZXh0LW92ZXJmbG93OiBlbGxpcHNpcztcblxuICAgICY6aG92ZXIge1xuICAgICAgYmFja2dyb3VuZDogI2IzZTVmYztcbiAgICB9XG5cbiAgICAmLWRvdHMge1xuICAgICAgYWxpZ24tc2VsZjogZmxleC1lbmQ7XG4gICAgfVxuICB9XG5cbiAgJl9fZGVzY3JpcHRpb24sXG4gICZfX3Byb2plY3QtdGFzayA+IHNwYW4sXG4gICZfX2NsaWVudC1uYW1lIHtcbiAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gICAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgICB3aGl0ZS1zcGFjZTogbm93cmFwO1xuICAgIHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzO1xuICAgIG1pbi13aWR0aDogMzBweDtcbiAgfVxuXG4gICZfX3Byb2plY3QtdGFzayB7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBvdmVyZmxvdzogaGlkZGVuO1xuICAgIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gICAgdGV4dC1vdmVyZmxvdzogZWxsaXBzaXM7XG4gICAgbWluLXdpZHRoOiA4MHB4O1xuXG4gICAgPiBzcGFuOmxhc3QtY2hpbGQge1xuICAgICAgbWluLXdpZHRoOiA1MHB4O1xuICAgIH1cbiAgfVxuXG4gICZfX2NsaWVudC1uYW1lIHtcbiAgICBjb2xvcjogIzk5OTtcbiAgICBtYXJnaW4tbGVmdDogNXB4O1xuICB9XG59XG4iLCJAdXNlICd2YXJpYWJsZXMnO1xuXG4uZHVyYXRpb24ge1xuXHRoZWlnaHQ6IDUwcHg7XG5cdG1hcmdpbjogMTBweCAyMHB4O1xuXHRiYWNrZ3JvdW5kOiB3aGl0ZTtcblx0Ym9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRib3JkZXI7XG5cdGJvcmRlci1yYWRpdXM6IDJweDtcblxuXHQmX19kYXRlLXBpY2tlciB7XG5cdFx0cGFkZGluZzogMTNweCA0cHg7XG5cdH1cblxuXHQuYW50LXRpbWUtcGlja2VyIHtcblx0XHR3aWR0aDogODVweDtcblxuXHRcdCYtaW5wdXQge1xuXHRcdFx0YmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7XG5cdFx0XHRib3JkZXI6IG5vbmU7XG5cdFx0XHR0ZXh0LWFsaWduOiBjZW50ZXI7XG5cdFx0XHR3aWR0aDogMTAwJTtcblx0XHR9XG5cblx0XHQmLWljb24ge1xuXHRcdFx0ZGlzcGxheTogbm9uZTtcblx0XHR9XG5cblx0XHQmLWNsZWFyIHtcblx0XHRcdGRpc3BsYXk6IG5vbmU7XG5cdFx0fVxuXG5cdFx0LmFudC10aW1lLXBpY2tlci1pbnB1dDo6cGxhY2Vob2xkZXIge1xuXHRcdFx0Zm9udC1zaXplOiAxMXB4O1xuXHRcdH1cblx0fVxuXG5cdCYuY29weS1hcy1lbnRyeSB7XG5cdFx0YmFja2dyb3VuZDogbm9uZTtcblx0XHRib3JkZXI6IG5vbmU7XG5cdFx0ZGlzcGxheTogZmxleDtcblx0XHRqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XG5cdFx0YWxpZ24taXRlbXM6IGNlbnRlcjtcblx0XHRoZWlnaHQ6IGZpdC1jb250ZW50O1xuXHRcdG1hcmdpbjogMCAwIDEwcHggMDtcblxuXHRcdCYgaW5wdXQ6Zm9jdXMge1xuXHRcdFx0Ym9yZGVyOiAxcHggc29saWQgZGFya2dyZXkgIWltcG9ydGFudDtcblx0XHRcdG91dGxpbmU6IG5vbmU7XG5cdFx0fVxuXG5cdFx0JiAjZHVyYXRpb25UaW1lUGlja2VyIHtcblx0XHRcdGZvbnQtd2VpZ2h0OiA1MDA7XG5cdFx0fVxuXG5cdFx0JiAjZHVyYXRpb25UaW1lUGlja2VyLFxuXHRcdCYgI3N0YXJ0VGltZVBpY2tlcixcblx0XHQmICNlbmRUaW1lUGlja2VyIHtcblx0XHRcdHdpZHRoOiA3MHB4O1xuXHRcdFx0aGVpZ2h0OiA0MHB4O1xuXHRcdFx0Ym9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRib3JkZXI7XG5cdFx0XHRtYXJnaW46IDA7XG5cdFx0fVxuXG5cdFx0JiAucmVhY3QtZGF0ZXBpY2tlcl9faW5wdXQtY29udGFpbmVyIHtcblx0XHRcdGN1cnNvcjogcG9pbnRlcjtcblx0XHR9XG5cblx0XHQucmVhY3QtZGF0ZXBpY2tlcl9fZGF5LS1kaXNhYmxlZCB7XG5cdFx0XHRjb2xvcjogI2NjYztcblx0XHRcdHRleHQtZGVjb3JhdGlvbjogbGluZS10aHJvdWdoICFpbXBvcnRhbnQ7XG5cdFx0XHRjdXJzb3I6IG5vdC1hbGxvd2VkICFpbXBvcnRhbnQ7XG5cdFx0fVxuXHR9XG59XG5cbi5kdXJhdGlvbi10aW1lIHtcblx0ZGlzcGxheTogZmxleDtcblx0bWFyZ2luLWxlZnQ6IDVweDtcblx0anVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG5cdGFsaWduLWl0ZW1zOiBjZW50ZXI7XG5cdGZvbnQtc2l6ZTogMTRweDtcblx0Y29sb3I6IHZhcmlhYmxlcy4kbGlnaHRlcl90ZXh0O1xufVxuXG4uZHVyYXRpb24tc3RhcnQge1xuXHRwYWRkaW5nLXRvcDogMTNweDtcblx0cGFkZGluZy1ib3R0b206IDEzcHg7XG5cdHBvc2l0aW9uOiByZWxhdGl2ZTtcblx0dG9wOiAwcHg7XG5cdHdpZHRoOiA2NXB4O1xuXHRvdXRsaW5lOiBub25lO1xuXHRib3JkZXI6IG5vbmU7XG5cdGNvbG9yOiB2YXJpYWJsZXMuJG1pZGRsZV9saWdodF90ZXh0O1xuXHRmb250LXNpemU6IDE0cHg7XG5cdG1hcmdpbi1sZWZ0OiA1cHg7XG5cdHRleHQtYWxpZ246IGNlbnRlcjtcbn1cblxuLmR1cmF0aW9uLWVuZCB7XG5cdGRpc3BsYXk6IGJsb2NrO1xufVxuXG4uZHVyYXRpb24tZHVyYXRpb24ge1xuXHRwb3NpdGlvbjogcmVsYXRpdmU7XG5cdHBhZGRpbmc6IDZweCAycHg7XG5cdGJvcmRlcjogbm9uZTtcblx0d2lkdGg6IDg1cHg7XG5cdGZvbnQtc2l6ZTogMThweDtcblx0Y29sb3I6IHZhcmlhYmxlcy4kZGFya190ZXh0O1xuXHRvdXRsaW5lOiBub25lO1xufVxuXG4uZHVyYXRpb24tZGFzaCB7XG5cdHBvc2l0aW9uOiByZWxhdGl2ZTtcblx0dG9wOiAycHg7XG59XG5cbi5kdXJhdGlvbi1sYWJlbCB7XG5cdG1hcmdpbi1sZWZ0OiA3cHg7XG5cdHdvcmQtYnJlYWs6IGtlZXAtYWxsO1xuXHRwb3NpdGlvbjogcmVsYXRpdmU7XG5cdHRvcDogMXB4O1xufVxuXG4uZHVyYXRpb24tZGl2aWRlciB7XG5cdHBvc2l0aW9uOiByZWxhdGl2ZTtcblx0aGVpZ2h0OiA1MHB4O1xuXHRib3JkZXItbGVmdDogMXB4IGRvdHRlZCAjY2FjYWNhO1xuXHRiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudDtcblx0d2lkdGg6IDNweDtcbn1cbiIsIkB1c2UgJ3ZhcmlhYmxlcyc7XG5cbi5lZGl0LWZvcm0ge1xuICBwYWRkaW5nOiAyMHB4O1xuXG4gICZfX3Byb2plY3RfbGlzdCB7XG4gICAgbWFyZ2luLWJvdHRvbTogMTBweDtcbiAgfVxuXG4gICZfX2JyZWFrLWxhYmVsIHtcbiAgICBiYWNrZ3JvdW5kOiAjYzZkMmQ5O1xuICAgIGNvbG9yOiAjMzMzMzMzO1xuICAgIHBhZGRpbmc6IDE0cHggMjFweDtcbiAgICBmb250LXNpemU6IDE0cHg7XG5cbiAgICAuYnJlYWstaWNvbiB7XG4gICAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gICAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgICB0b3A6IDJweDtcbiAgICAgIC8vIGJhY2tncm91bmQ6IHVybChcIi4uL2Fzc2V0cy9pbWFnZXMvYnJlYWsucG5nXCIpO1xuICAgICAgbWFyZ2luLXJpZ2h0OiAxMHB4O1xuICAgICAgd2lkdGg6IDE0cHg7XG4gICAgICBoZWlnaHQ6IDE0cHg7XG4gICAgICBiYWNrZ3JvdW5kLXJlcGVhdDogbm8tcmVwZWF0O1xuICAgICAgYmFja2dyb3VuZC1zaXplOiAxNHB4IDE0cHg7XG4gICAgfVxuICB9XG59XG5cbi5lZGl0LWZvcm0tZGVzY3JpcHRpb24ge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIHdpZHRoOiAxMDAlO1xuICBoZWlnaHQ6IDY1cHg7XG4gIGJvcmRlcjogbm9uZTtcbiAgcmVzaXplOiBub25lO1xuICBib3gtc2hhZG93OiBub25lO1xuICBiYWNrZ3JvdW5kOiBub25lICFpbXBvcnRhbnQ7XG4gIGZvbnQtc2l6ZTogMTRweDtcbiAgb3V0bGluZTogbm9uZTtcbiAgY29sb3I6IHZhcmlhYmxlcy4kZGFya190ZXh0O1xuXG4gICYgKyBkaXYge1xuICAgIHotaW5kZXg6IDIwO1xuICB9XG59XG5cbi5kZXNjcmlwdGlvbi10ZXh0YXJlYSB7XG4gIG1hcmdpbi1ib3R0b206IDEwcHg7XG4gIGJvcmRlcjogMXB4IHNvbGlkIHZhcmlhYmxlcy4kYm9yZGVyO1xuICBiYWNrZ3JvdW5kOiB3aGl0ZTtcbiAgYm9yZGVyLXJhZGl1czogMnB4O1xuXG5cdCY6aGFzKC5yZWFjdC1hdXRvY29tcGxldGUgdGV4dGFyZWE6Zm9jdXMpIHtcblx0XHRib3JkZXI6IDFweCBzb2xpZCBkYXJrZ3JleSAhaW1wb3J0YW50O1xuXHR9XG5cblx0Ji1yZXF1aXJlZCB7XG5cdFx0bWFyZ2luLWJvdHRvbTogMTBweDtcblx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJHJlZDtcblx0XHRwYWRkaW5nOiAxMHB4O1xuXHRcdGJhY2tncm91bmQ6IHdoaXRlO1xuXHRcdGJvcmRlci1yYWRpdXM6IDJweDtcblx0fVxuXHQmOmZvY3VzLXdpdGhpbiB7XG5cdFx0Ym9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRiZy0wNCAhaW1wb3J0YW50O1xuXHRcdGJvcmRlci1yYWRpdXM6IDJweCAhaW1wb3J0YW50O1xuXHR9XG59XG5cbi5kZXNjcmlwdGlvbi10ZXh0YXJlYSA+IHRleHRhcmVhIHtcbiAgcGFkZGluZzogNnB4IDZweDtcbiAgYm94LXNpemluZzogYm9yZGVyLWJveDtcbn1cblxuLmVkaXQtZm9ybS1jaGVja2JveCB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgd2lkdGg6IDE2cHg7XG4gIGhlaWdodDogMTZweDtcbiAgdG9wOiAxM3B4O1xuICBiYWNrZ3JvdW5kOiB3aGl0ZTtcbiAgYm9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRib3JkZXI7XG4gIGJvcmRlci1yYWRpdXM6IDJweDtcbiAgY3Vyc29yOiBwb2ludGVyO1xufVxuXG4uZWRpdC1mb3JtLWJ1dHRvbnMge1xuXHRtYXJnaW4tdG9wOiAwO1xuXG5cdCZfX2JpbGxhYmxlIHtcblx0XHRtYXJnaW46IDE1cHggMDtcblx0XHRsaW5lLWhlaWdodDogMTtcblx0XHRkaXNwbGF5OiBmbGV4O1xuXHRcdGFsaWduLWl0ZW1zOiBjZW50ZXI7XG5cdH1cbn1cblxuLmVkaXQtZm9ybS1iaWxsYWJsZS1pbWcge1xuICAvLyBjb250ZW50OiB1cmwoXCIuLi9hc3NldHMvaW1hZ2VzL2NoZWNrZWQucG5nXCIpO1xuICBtYXJnaW4tdG9wOiAycHg7XG4gIG1hcmdpbi1sZWZ0OiAxcHg7XG59XG5cbi5lZGl0LWZvcm0tYmlsbGFibGUtaW1nLWhpZGRlbiB7XG4gIC8vIGNvbnRlbnQ6IHVybChcIi4uL2Fzc2V0cy9pbWFnZXMvY2hlY2tlZC5wbmdcIik7XG4gIG1hcmdpbi10b3A6IDJweDtcbiAgbWFyZ2luLWxlZnQ6IDFweDtcbiAgdmlzaWJpbGl0eTogaGlkZGVuO1xufVxuXG4uZWRpdC1mb3JtLWJpbGxhYmxlIHtcbiAgdG9wOiAxM3B4O1xuICBtYXJnaW4tbGVmdDogMTBweDtcbiAgY29sb3I6IHZhcmlhYmxlcy4kbWlkZGxlX2xpZ2h0X3RleHQ7XG4gIGZvbnQtc2l6ZTogMTRweDtcbiAgY3Vyc29yOiBwb2ludGVyO1xufVxuXG4uZWRpdC1mb3JtLXJpZ2h0LWJ1dHRvbnMge1xuICBtYXJnaW4tdG9wOiAyMHB4O1xuXG4gICZfX2JhY2tfYW5kX2RlbGV0ZSB7XG4gICAgbWFyZ2luLXRvcDogMjBweDtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XG4gICAgdGV4dC1hbGlnbjogY2VudGVyO1xuICB9XG5cbiAgJl9fYmFjayB7XG4gICAgY29sb3I6IHZhcmlhYmxlcy4kYmx1ZTtcbiAgICBjdXJzb3I6IHBvaW50ZXI7XG4gIH1cbn1cblxuLmVkaXQtZm9ybS1kZWxldGUge1xuICBjb2xvcjogcmVkO1xuICBjdXJzb3I6IHBvaW50ZXI7XG59XG5cbi5lZGl0LWZvcm0tZG9uZS1kaXNhYmxlZCB7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbn1cblxuLmVkaXQtZm9ybS1kb25lIHtcbiAgd2lkdGg6IDEwMCU7XG4gIGhlaWdodDogNTBweDtcbiAgYm9yZGVyOiBub25lO1xuICBib3JkZXItcmFkaXVzOiAzcHg7XG4gIGNvbG9yOiB3aGl0ZTtcbiAgYmFja2dyb3VuZDogdmFyaWFibGVzLiRibHVlO1xuICBjdXJzb3I6IHBvaW50ZXI7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcblxuXHQmOmhvdmVyIHtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGJsdWVfaG92ZXI7XG5cdFx0Ym9yZGVyLWNvbG9yOiB2YXJpYWJsZXMuJGJsdWVfaG92ZXI7XG5cdFx0dHJhbnNpdGlvbjogYmFja2dyb3VuZC1jb2xvciAwLjE1cyBlYXNlLWluLW91dCxcblx0XHRcdGJvcmRlci1jb2xvciAwLjE1cyBlYXNlLWluLW91dCwgYm94LXNoYWRvdyAwLjE1cyBlYXNlLWluLW91dDtcblx0fVxuXG5cdCYtZGlzYWJsZWQge1xuXHRcdHdpZHRoOiAxMDAlO1xuXHRcdGhlaWdodDogNTBweDtcblx0XHRib3JkZXI6IG5vbmU7XG5cdFx0Ym9yZGVyLXJhZGl1czogM3B4O1xuXHRcdGNvbG9yOiB3aGl0ZTtcblx0XHRiYWNrZ3JvdW5kOiB2YXJpYWJsZXMuJGxpZ2h0ZXJfdGV4dDtcblx0fVxufVxuXG4uc2hha2UtaGVhcnRhY2hlIHtcbiAgYW5pbWF0aW9uOiBrZl9zaGFrZSAwLjVzIDEgbGluZWFyO1xuICAtd2Via2l0LWFuaW1hdGlvbjoga2Zfc2hha2UgMC41cyAxIGxpbmVhcjtcbiAgLW1vei1hbmltYXRpb246IGtmX3NoYWtlIDAuNXMgMSBsaW5lYXI7XG4gIC1vLWFuaW1hdGlvbjoga2Zfc2hha2UgMC41cyAxIGxpbmVhcjtcbn1cblxuLmZpZWxkLXJlcXVpcmVkLW1lc3NhZ2Uge1xuICBjb2xvcjogdmFyaWFibGVzLiRyZWQ7XG4gIGZvbnQtc2l6ZTogMTBweDtcbiAgdGV4dC1hbGlnbjogZW5kO1xuICBwYWRkaW5nOiAwO1xuICBtYXJnaW46IDA7XG59XG5cbkBrZXlmcmFtZXMga2Zfc2hha2Uge1xuICAwJSB7XG4gICAgLXdlYmtpdC10cmFuc2Zvcm06IHRyYW5zbGF0ZSgyMHB4KTtcbiAgfVxuICAyMCUge1xuICAgIC13ZWJraXQtdHJhbnNmb3JtOiB0cmFuc2xhdGUoLTIwcHgpO1xuICB9XG4gIDQwJSB7XG4gICAgLXdlYmtpdC10cmFuc2Zvcm06IHRyYW5zbGF0ZSgxMHB4KTtcbiAgfVxuICA2MCUge1xuICAgIC13ZWJraXQtdHJhbnNmb3JtOiB0cmFuc2xhdGUoLTEwcHgpO1xuICB9XG4gIDgwJSB7XG4gICAgLXdlYmtpdC10cmFuc2Zvcm06IHRyYW5zbGF0ZSg4cHgpO1xuICB9XG4gIDEwMCUge1xuICAgIC13ZWJraXQtdHJhbnNmb3JtOiB0cmFuc2xhdGUoMHB4KTtcbiAgfVxufVxuXG5ALXdlYmtpdC1rZXlmcmFtZXMga2Zfc2hha2Uge1xuICAwJSB7XG4gICAgLXdlYmtpdC10cmFuc2Zvcm06IHRyYW5zbGF0ZSgwMHB4KTtcbiAgfVxuICAyMCUge1xuICAgIC13ZWJraXQtdHJhbnNmb3JtOiB0cmFuc2xhdGUoLTAwcHgpO1xuICB9XG4gIDQwJSB7XG4gICAgLXdlYmtpdC10cmFuc2Zvcm06IHRyYW5zbGF0ZSgxMHB4KTtcbiAgfVxuICA2MCUge1xuICAgIC13ZWJraXQtdHJhbnNmb3JtOiB0cmFuc2xhdGUoLTEwcHgpO1xuICB9XG4gIDgwJSB7XG4gICAgLXdlYmtpdC10cmFuc2Zvcm06IHRyYW5zbGF0ZSg4cHgpO1xuICB9XG4gIDEwMCUge1xuICAgIC13ZWJraXQtdHJhbnNmb3JtOiB0cmFuc2xhdGUoMHB4KTtcbiAgfVxufVxuXG5ALW1vei1rZXlmcmFtZXMga2Zfc2hha2Uge1xuICAwJSB7XG4gICAgLW1vei10cmFuc2Zvcm06IHRyYW5zbGF0ZSgyMHB4KTtcbiAgfVxuICAyMCUge1xuICAgIC1tb3otdHJhbnNmb3JtOiB0cmFuc2xhdGUoLTIwcHgpO1xuICB9XG4gIDQwJSB7XG4gICAgLW1vei10cmFuc2Zvcm06IHRyYW5zbGF0ZSgxMHB4KTtcbiAgfVxuICA2MCUge1xuICAgIC1tb3otdHJhbnNmb3JtOiB0cmFuc2xhdGUoLTEwcHgpO1xuICB9XG4gIDgwJSB7XG4gICAgLW1vei10cmFuc2Zvcm06IHRyYW5zbGF0ZSg4cHgpO1xuICB9XG4gIDEwMCUge1xuICAgIC1tb3otdHJhbnNmb3JtOiB0cmFuc2xhdGUoMHB4KTtcbiAgfVxufVxuXG5ALW8ta2V5ZnJhbWVzIGtmX3NoYWtlIHtcbiAgMCUge1xuICAgIC1vLXRyYW5zZm9ybTogdHJhbnNsYXRlKDIwcHgpO1xuICB9XG4gIDIwJSB7XG4gICAgLW8tdHJhbnNmb3JtOiB0cmFuc2xhdGUoLTIwcHgpO1xuICB9XG4gIDQwJSB7XG4gICAgLW8tdHJhbnNmb3JtOiB0cmFuc2xhdGUoMTBweCk7XG4gIH1cbiAgNjAlIHtcbiAgICAtby10cmFuc2Zvcm06IHRyYW5zbGF0ZSgtMTBweCk7XG4gIH1cbiAgODAlIHtcbiAgICAtby10cmFuc2Zvcm06IHRyYW5zbGF0ZSg4cHgpO1xuICB9XG4gIDEwMCUge1xuICAgIC1vLW9yaWdpbi10cmFuc2Zvcm06IHRyYW5zbGF0ZSgwcHgpO1xuICB9XG59XG4iLCJAdXNlICd2YXJpYWJsZXMnO1xuXG4kc3BhY2VyOiAxcmVtICFkZWZhdWx0O1xuXG4ucHJvamVjdC1saXN0LWJ1dHRvbiB7XG5cdHBhZGRpbmc6IDAgNnB4O1xuXHQvLyBwYWRkaW5nLXJpZ2h0OiA2cHg7XG5cdGJhY2tncm91bmQ6IHdoaXRlO1xuXHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJvcmRlcjtcblx0Ym9yZGVyLXJhZGl1czogMnB4O1xuXHRjdXJzb3I6IHBvaW50ZXI7XG5cdGFsaWduLWl0ZW1zOiBjZW50ZXI7XG5cdGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG5cdGRpc3BsYXk6IGZsZXg7XG5cdGFsaWduLWl0ZW1zOiBjZW50ZXI7XG5cdGhlaWdodDogMzhweDtcblxuXHQmLXJlcXVpcmVkIHtcblx0XHQvL3BhZGRpbmc6IDVweCAwO1xuXHRcdHBhZGRpbmc6IDBweCA2cHg7XG5cdFx0YmFja2dyb3VuZDogd2hpdGU7XG5cdFx0Ym9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRyZWQ7XG5cdFx0Ym9yZGVyLXJhZGl1czogMnB4O1xuXHRcdGN1cnNvcjogcG9pbnRlcjtcblx0XHRib3gtc2l6aW5nOiBib3JkZXItYm94O1xuXHRcdGRpc3BsYXk6IGZsZXg7XG5cdFx0YWxpZ24taXRlbXM6IGNlbnRlcjtcblx0XHRoZWlnaHQ6IDM4cHg7XG5cdH1cbn1cblxuLnByb2plY3QtbGlzdF9fc3BlY19maWx0ZXJfbm9fdGFza19vcl9wcm9qZWN0IHtcblx0bWFyZ2luLWxlZnQ6IGF1dG87XG5cdG1hcmdpbi1yaWdodDogYXV0bztcblx0d2lkdGg6IDgwJTtcblx0dGV4dC1hbGlnbjogY2VudGVyO1xufVxuXG4ucHJvamVjdC1saXN0LWJ1dHRvbi1vZmZsaW5lIHtcblx0d2lkdGg6IDEwMCU7XG5cdGhlaWdodDogNDBweDtcblx0YmFja2dyb3VuZDogI2VmZjRmNztcblx0bWFyZ2luOiAxMHB4IDA7XG5cdGJvcmRlcjogMXB4IHNvbGlkIHZhcmlhYmxlcy4kYm9yZGVyO1xuXHRib3JkZXItcmFkaXVzOiAycHg7XG5cdGN1cnNvcjogbm90LWFsbG93ZWQ7XG5cdHBhZGRpbmc6IDBweCA2cHg7XG5cdGRpc3BsYXk6IGZsZXg7XG5cdGFsaWduLWl0ZW1zOiBjZW50ZXI7XG5cdGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG59XG5cbi5wcm9qZWN0LWxpc3QtbmFtZSB7XG5cdGRpc3BsYXk6IGlubGluZS1mbGV4O1xuXHQvL3BhZGRpbmc6IDVweCAxMHB4O1xuXHQvLyBwYWRkaW5nOiAwcHggN3B4ICFpbXBvcnRhbnQ7XG5cdHdpZHRoOiA4NSU7XG5cdGZvbnQtc2l6ZTogMTRweDtcblx0b3ZlcmZsb3c6IGhpZGRlbjtcblx0dGV4dC1vdmVyZmxvdzogZWxsaXBzaXM7XG5cdHdoaXRlLXNwYWNlOiBub3dyYXA7XG5cdGNvbG9yOiAjMzMzOyAvLyAgdmFyaWFibGVzLiRsaWdodGVyX3RleHQ7XG5cdHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzO1xuXHRkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG59XG5cbnNwYW4ucHJvamVjdC1saXN0LW5hbWUtY2xpZW50IHtcblx0Y29sb3I6ICM5OTk7XG5cdHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzO1xufVxuXG4ucHJvamVjdC1saXN0LWFycm93IHtcblx0Ly9wb3NpdGlvbjogcmVsYXRpdmU7XG5cdHdpZHRoOiAxMHB4O1xuXHRoZWlnaHQ6IDVweDtcblx0Ly9mbG9hdDogcmlnaHQ7XG5cdC8vcGFkZGluZy1yaWdodDogMTVweDtcblx0Ly90b3A6IDExcHg7XG5cdG1hcmdpbi1sZWZ0OiBhdXRvO1xuXHRkaXNwbGF5OiBmbGV4O1xuXHRhbGlnbi1pdGVtczogY2VudGVyO1xuXHRwYWRkaW5nOiAwcHggMTBweCAwcHggMTBweDtcblx0Y29udGVudDogdXJsKCcuLi9hc3NldHMvaW1hZ2VzL2Fycm93LWxpZ2h0LW1vZGUucG5nJyk7XG59XG5cbi5wcm9qZWN0LWxpc3QtYXJyb3ctdXAge1xuXHQvL3Bvc2l0aW9uOiByZWxhdGl2ZTtcblx0d2lkdGg6IDEwcHg7XG5cdGhlaWdodDogNXB4O1xuXHQvL2Zsb2F0OiByaWdodDtcblx0Ly9wYWRkaW5nLXJpZ2h0OiAxNXB4O1xuXHQvL3RvcDogMTFweDtcblx0bWFyZ2luLWxlZnQ6IGF1dG87XG5cdGRpc3BsYXk6IGZsZXg7XG5cdGFsaWduLWl0ZW1zOiBjZW50ZXI7XG5cdHBhZGRpbmc6IDBweCAxMHB4IDBweCAxMHB4O1xuXHRjb250ZW50OiB1cmwoJy4uL2Fzc2V0cy9pbWFnZXMvYXJyb3ctbGlnaHQtbW9kZS11cC5wbmcnKTtcbn1cblxuLnByb2plY3QtbGlzdC1kcm9wZG93biB7XG5cdHBvc2l0aW9uOiBhYnNvbHV0ZTtcblx0d2lkdGg6IDEwMCU7XG5cdGxlZnQ6IDA7XG5cdHRvcDogMzlweDtcblx0YmFja2dyb3VuZDogd2hpdGU7XG5cdHotaW5kZXg6IDI7XG5cdGJveC1zaGFkb3c6IDAgNXB4IDdweCAjY2NjO1xuXHRmb250LXNpemU6IDE0cHg7XG5cdGJvcmRlci1yYWRpdXM6IDJweDtcblx0Ji0tY29udGVudCB7XG5cdFx0aGVpZ2h0OiAyNjlweDtcblx0XHRvdmVyZmxvdy15OiBhdXRvO1xuXHR9XG59XG5cbi5wcm9qZWN0LWxpc3QtaW5wdXQge1xuXHRiYWNrZ3JvdW5kOiB3aGl0ZTtcblx0cGFkZGluZzogMTBweDtcblxuXHRpbnB1dCB7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogd2hpdGUgIWltcG9ydGFudDtcblx0fVxuXG5cdCYtLWJvcmRlciB7XG5cdFx0cG9zaXRpb246IHJlbGF0aXZlO1xuXHR9XG59XG5cbi5wcm9qZWN0LWxpc3QtZmlsdGVyIHtcblx0d2lkdGg6IDEwMCU7XG5cdGhlaWdodDogNDBweDtcblx0cGFkZGluZzogMTBweDtcblx0Ym9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRib3JkZXI7XG5cdGJvcmRlci1yYWRpdXM6IDJweDtcblx0YmFja2dyb3VuZC1jb2xvcjogd2hpdGUgIWltcG9ydGFudDtcblxuXHQmX19jbGVhciB7XG5cdFx0cG9zaXRpb246IGFic29sdXRlO1xuXHRcdHJpZ2h0OiAxMHB4O1xuXHRcdHRvcDogMTRweDtcblx0XHRoZWlnaHQ6IDEycHg7XG5cdFx0d2lkdGg6IDEycHg7XG5cdFx0Y29udGVudDogdXJsKCcuLi9hc3NldHMvaW1hZ2VzL3gucG5nJyk7XG5cdFx0Y3Vyc29yOiBwb2ludGVyO1xuXHR9XG5cdCY6Zm9jdXMge1xuXHRcdG91dGxpbmU6IG5vbmU7XG5cdFx0Ym9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRiZy0wNCAhaW1wb3J0YW50O1xuXHRcdGJvcmRlci1yYWRpdXM6IDNweCAhaW1wb3J0YW50O1xuXHR9XG59XG5cbi50YXNrcy1hcnJvdy1kb3duIHtcblx0Ly8gY29udGVudDogdXJsKFwiLi4vYXNzZXRzL2ltYWdlcy9maWx0ZXItYXJyb3ctZG93bi5wbmdcIik7XG5cdG1hcmdpbi1sZWZ0OiA1cHg7XG59XG5cbi50YXNrcy1hcnJvdy1yaWdodCB7XG5cdC8vIGNvbnRlbnQ6IHVybChcIi4uL2Fzc2V0cy9pbWFnZXMvZmlsdGVyLWFycm93LXJpZ2h0LnBuZ1wiKTtcblx0cG9zaXRpb246IHJlbGF0aXZlO1xuXHR0b3A6IC0xcHg7XG5cdG1hcmdpbi1sZWZ0OiA1cHg7XG5cdHZlcnRpY2FsLWFsaWduOiBtaWRkbGU7XG59XG5cbnVsLnByb2plY3QtaXRlbSB7XG5cdHBhZGRpbmc6IDdweCA1cHggOHB4IDEwcHg7XG5cdGN1cnNvcjogcG9pbnRlcjtcblx0Zm9udC1zaXplOiAxNnB4O1xuXHRkaXNwbGF5OiBmbGV4O1xuXHRhbGlnbi1pdGVtczogY2VudGVyO1xuXHRqdXN0aWZ5LWNvbnRlbnQ6IGZsZXgtc3RhcnQ7XG5cdG1hcmdpbjogMDtcblxuXHRsaXN0LXN0eWxlLXR5cGU6IG5vbmU7XG5cdGJvcmRlci10b3A6IDFweCBkb3R0ZWQgdmFyaWFibGVzLiRib3JkZXI7XG5cblx0Jjpob3ZlciB7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogdmFyaWFibGVzLiRlbnRyaWVzX2hlYWRlcjtcblx0fVxufVxuXG5saS5wcm9qZWN0LWl0ZW0tZG90IHtcblx0ZmxleDogMCAwIDVweDtcblx0d2lkdGg6IDVweDtcblx0aGVpZ2h0OiA1cHg7XG5cdGJvcmRlci1yYWRpdXM6IDVweDtcblx0ZGlzcGxheTogaW5saW5lLWJsb2NrO1xuXHRtYXJnaW4tcmlnaHQ6IDVweDtcbn1cblxubGkucHJvamVjdC1pdGVtLW5hbWUge1xuXHRkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG5cdGZsZXg6IDEgMTtcblx0dGV4dC1vdmVyZmxvdzogZWxsaXBzaXM7XG5cdG92ZXJmbG93OiBoaWRkZW47XG5cdGZvbnQtc2l6ZTogMTRweDtcblx0Ly8gbGluZS1oZWlnaHQ6IDE2cHg7XG5cdHdoaXRlLXNwYWNlOiBub3dyYXA7XG5cdGNvbG9yOiB2YXJpYWJsZXMuJGRhcmtfdGV4dDtcbn1cblxubGkucHJvamVjdC1pdGVtLXRhc2tzIHtcblx0ZGlzcGxheTogZmxleDtcblx0Y29sb3I6IHZhcmlhYmxlcy4kbGlnaHRlcl90ZXh0O1xuXHRmb250LXNpemU6IDEzcHg7XG5cdGZsZXg6IDAgMCA5MHB4O1xufVxuXG5saS5wcm9qZWN0LWl0ZW0tdGFza3MgPiBzcGFuIHtcblx0Y29sb3I6IHZhcmlhYmxlcy4kbGlnaHRlcl90ZXh0O1xuXHRpbWcge1xuXHRcdHdpZHRoOiBhdXRvO1xuXHR9XG59XG5cbmxpLnByb2plY3QtaXRlbS1mYXZvcml0ZSB7XG5cdGZsZXg6IDAgMCAyMHB4O1xufVxuXG4ucHJvamVjdC1pdGVtLWNyZWF0ZS10YXNrIHtcblx0Y29sb3I6ICMwM2E5ZjQ7XG5cdGN1cnNvcjogcG9pbnRlcjtcblx0Zm9udC1zaXplOiAxNHB4O1xuXHRtYXJnaW4tcmlnaHQ6IDEwcHg7XG5cdCY6aG92ZXIge1xuXHRcdHRleHQtZGVjb3JhdGlvbjogdW5kZXJsaW5lO1xuXHR9XG59XG5cbi50YXNrLWl0ZW0ge1xuXHRwYWRkaW5nOiA3cHggMCA3cHggMjVweDtcblx0YmFja2dyb3VuZC1jb2xvcjogdmFyaWFibGVzLiR0YXNrLWJhY2tncm91bmQ7XG5cdGNvbG9yOiB2YXJpYWJsZXMuJGRhcmtfdGV4dDtcblx0Zm9udC1zaXplOiAxNHB4O1xuXHQvLyBsaW5lLWhlaWdodDogMTZweDtcblx0Jjpob3ZlciB7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogdmFyaWFibGVzLiRlbnRyaWVzX2hlYWRlcjtcblx0XHRjdXJzb3I6IHBvaW50ZXI7XG5cdH1cblx0JjpmaXJzdC1jaGlsZCB7XG5cdFx0cGFkZGluZy10b3A6IDEwcHg7XG5cdH1cblx0JjpsYXN0LWNoaWxkIHtcblx0XHRwYWRkaW5nLWJvdHRvbTogMTBweDtcblx0fVxufVxuLnByb2plY3QtbGlzdC1sb2FkIHtcblx0dGV4dC1hbGlnbjogY2VudGVyO1xuXHRtYXJnaW4tdG9wOiAxNXB4O1xuXHRjb2xvcjogdmFyaWFibGVzLiRtaWRkbGVfbGlnaHRfdGV4dDtcblx0Y3Vyc29yOiBwb2ludGVyO1xufVxuLnByb2plY3QtbGlzdC1jbGllbnQge1xuXHRtYXJnaW46IDEwcHg7XG5cdHBhZGRpbmctdG9wOiA1cHg7XG5cdC8vYm9yZGVyLXRvcDogMXB4IGRvdHRlZCB2YXJpYWJsZXMuJGJvcmRlcjtcblx0Zm9udC1zaXplOiAxNHB4O1xuXHRjb2xvcjogdmFyaWFibGVzLiRsaWdodGVyX3RleHQ7XG59XG4ucHJvamVjdHMtbGlzdCB7XG5cdHBvc2l0aW9uOiByZWxhdGl2ZTtcblxuXHQmX19jcmVhdGUtcHJvamVjdCxcblx0Jl9fY3JlYXRlLXRhc2sge1xuXHRcdHBvc2l0aW9uOiBhYnNvbHV0ZTtcblx0XHRkaXNwbGF5OiBmbGV4O1xuXHRcdGFsaWduLWl0ZW1zOiBjZW50ZXI7XG5cdFx0cGFkZGluZy10b3A6IDE3cHg7XG5cdFx0cGFkZGluZy1ib3R0b206IDE3cHg7XG5cdFx0Ym90dG9tOiAwcHg7XG5cdFx0d2lkdGg6IDMyMHB4O1xuXHRcdGJhY2tncm91bmQ6IHdoaXRlO1xuXHRcdGJveC1zaGFkb3c6IDAgLTVweCAxMHB4IHJnYmEoMCwgMCwgMCwgMC4xKTtcblx0XHRjdXJzb3I6IHBvaW50ZXI7XG5cdFx0Ji0taWNvbiB7XG5cdFx0XHR3aWR0aDogMTlweDtcblx0XHRcdGhlaWdodDogMTlweDtcblx0XHRcdG1hcmdpbi1yaWdodDogN3B4O1xuXHRcdFx0bWFyZ2luLWxlZnQ6IDEwcHg7XG5cdFx0XHQvLyBjb250ZW50OiB1cmwoXCIvYXNzZXRzL2ltYWdlcy9jcmVhdGUucG5nXCIpO1xuXHRcdH1cblx0XHQmLS10ZXh0IHtcblx0XHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJsdWU7XG5cdFx0XHRmb250LXNpemU6IDE0cHg7XG5cdFx0XHQvLyBsaW5lLWhlaWdodDogMTZweDtcblx0XHR9XG5cdH1cblx0Jl9fYm90dG9tLXBhZGRpbmcge1xuXHRcdHBhZGRpbmctYm90dG9tOiA1NHB4O1xuXHRcdHdpZHRoOiAxMDAlO1xuXHR9XG5cdCZfX2NyZWF0ZS10YXNrIHtcblx0XHRib3gtc2l6aW5nOiBib3JkZXItYm94O1xuXHRcdHBvc2l0aW9uOiByZWxhdGl2ZTtcblx0XHRwYWRkaW5nLWxlZnQ6IDEwcHg7XG5cdFx0d2lkdGg6IDEwMCU7XG5cdH1cbn1cblxuLmNsb2NraWZ5LWVycm9yIHtcblx0Y29sb3I6IHJlZDtcblx0Zm9udC1zaXplOiAxNHB4O1xufVxuXG4uY2wtZHJvcGRvd24tc3RhciB7XG5cdHdpZHRoOiAxNnB4O1xuXHRoZWlnaHQ6IDE2cHg7XG5cdG1hcmdpbjogNXB4IDNweCAwcHggNXB4O1xuXHQvLyBiYWNrZ3JvdW5kOiB1cmwoLi4vYXNzZXRzL2ltYWdlcy91aS1pY29ucy9mYXZvcml0ZXMtbm9ybWFsLnN2Zyk7XG5cdC8vICY6aG92ZXIge1xuXHQvLyAgIGJhY2tncm91bmQ6IHVybCguLi9hc3NldHMvaW1hZ2VzL3VpLWljb25zL2Zhdm9yaXRlcy1ob3Zlci5zdmcpO1xuXHQvLyB9XG5cdC8vICYuY2wtYWN0aXZlIHtcblx0Ly8gICBiYWNrZ3JvdW5kOiB1cmwoLi4vYXNzZXRzL2ltYWdlcy91aS1pY29ucy9mYXZvcml0ZXMtYWN0aXZlLnN2Zyk7XG5cdC8vIH1cbn1cbiIsIkB1c2UgJ3ZhcmlhYmxlcyc7XG5cbi50YWctbGlzdCB7XG5cdGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG5cdHBvc2l0aW9uOiByZWxhdGl2ZTtcblx0d2lkdGg6IDEwMCU7XG5cdG1hcmdpbi1ib3R0b206IDEwcHg7XG5cblx0Ji5jdXN0b20tZmllbGQtcmVxdWlyZWQge1xuXHRcdGJvcmRlcjogMXB4IHNvbGlkIHZhcmlhYmxlcy4kcmVkICFpbXBvcnRhbnQ7XG5cblx0XHQmID4gLnRhZy1saXN0LWJ1dHRvbiB7XG5cdFx0XHRib3JkZXI6IG5vbmUgIWltcG9ydGFudDtcblx0XHR9XG5cdH1cblxuXHQmLW5hbWUge1xuXHRcdGRpc3BsYXk6IGlubGluZS1ibG9jayAhaW1wb3J0YW50O1xuXHRcdHBhZGRpbmc6IDAgIWltcG9ydGFudDtcblx0XHR3aWR0aDogODUlICFpbXBvcnRhbnQ7XG5cdFx0Zm9udC1zaXplOiAxNHB4ICFpbXBvcnRhbnQ7XG5cdFx0b3ZlcmZsb3c6IGhpZGRlbiAhaW1wb3J0YW50O1xuXHRcdHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzICFpbXBvcnRhbnQ7XG5cdFx0d2hpdGUtc3BhY2U6IG5vd3JhcCAhaW1wb3J0YW50O1xuXHR9XG5cblx0Ji1idXR0b24ge1xuXHRcdC8vIHBhZGRpbmc6IDZweCAwO1xuXHRcdHBhZGRpbmc6IDBweCA3cHg7XG5cdFx0YmFja2dyb3VuZDogd2hpdGU7XG5cdFx0Ym9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRib3JkZXI7XG5cdFx0Ym9yZGVyLXJhZGl1czogMnB4O1xuXHRcdGN1cnNvcjogcG9pbnRlcjtcblx0XHRib3gtc2l6aW5nOiBib3JkZXItYm94O1xuXHRcdGRpc3BsYXk6IGZsZXg7XG5cdFx0YWxpZ24taXRlbXM6IGNlbnRlcjtcblx0XHRoZWlnaHQ6IDM4cHg7XG5cblx0XHQmLXJlcXVpcmVkIHtcblx0XHRcdC8vcGFkZGluZzogNXB4IDA7XG5cdFx0XHRwYWRkaW5nOiAwcHggNnB4O1xuXHRcdFx0YmFja2dyb3VuZDogd2hpdGU7XG5cdFx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJHJlZDtcblx0XHRcdGJvcmRlci1yYWRpdXM6IDJweDtcblx0XHRcdGN1cnNvcjogcG9pbnRlcjtcblx0XHRcdGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG5cdFx0XHRkaXNwbGF5OiBmbGV4O1xuXHRcdFx0YWxpZ24taXRlbXM6IGNlbnRlcjtcblx0XHRcdGhlaWdodDogMzhweDtcblx0XHR9XG5cblx0XHQmLW9mZmxpbmUge1xuXHRcdFx0d2lkdGg6IDEwMCU7XG5cdFx0XHRoZWlnaHQ6IDM4cHg7XG5cdFx0XHQvLyBoZWlnaHQ6IDQwcHg7XG5cdFx0XHRiYWNrZ3JvdW5kOiBkaXNhYmxlZDtcblx0XHRcdGJvcmRlcjogMXB4IHNvbGlkIHZhcmlhYmxlcy4kYm9yZGVyO1xuXHRcdFx0Ym9yZGVyLXJhZGl1czogMnB4O1xuXHRcdFx0Y3Vyc29yOiBub3QtYWxsb3dlZDtcblx0XHRcdGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG5cdFx0XHRwYWRkaW5nOiAwcHggNnB4O1xuXHRcdFx0ZGlzcGxheTogZmxleDtcblx0XHRcdGFsaWduLWl0ZW1zOiBjZW50ZXI7XG5cdFx0fVxuXG5cdFx0Ji1kaXNhYmxlZCB7XG5cdFx0XHR3aWR0aDogMTAwJTtcblx0XHRcdC8vIGhlaWdodDogNDBweDtcblx0XHRcdGhlaWdodDogMzhweDtcblx0XHRcdGJhY2tncm91bmQ6ICNlZmY0Zjc7XG5cdFx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJvcmRlcjtcblx0XHRcdGJvcmRlci1yYWRpdXM6IDJweDtcblx0XHRcdGN1cnNvcjogbm90LWFsbG93ZWQ7XG5cdFx0XHRwYWRkaW5nOiAwcHggNnB4O1xuXHRcdFx0Ym94LXNpemluZzogYm9yZGVyLWJveDtcblx0XHRcdGRpc3BsYXk6IGZsZXg7XG5cdFx0XHRhbGlnbi1pdGVtczogY2VudGVyO1xuXHRcdH1cblx0fVxuXG5cdCYtYXJyb3cge1xuXHRcdC8vIHBvc2l0aW9uOiByZWxhdGl2ZTtcblx0XHR3aWR0aDogMTBweDtcblx0XHRoZWlnaHQ6IDVweDtcblx0XHQvLyBmbG9hdDogcmlnaHQ7XG5cdFx0Ly8gcGFkZGluZy1yaWdodDogMTVweDtcblx0XHQvLyB0b3A6IDEwcHg7XG5cdFx0bWFyZ2luLWxlZnQ6IGF1dG87XG5cdFx0ZGlzcGxheTogZmxleDtcblx0XHRhbGlnbi1pdGVtczogY2VudGVyO1xuXHRcdHBhZGRpbmc6IDBweCAxMHB4IDBweCAxMHB4O1xuXHRcdGNvbnRlbnQ6IHVybCgnLi4vYXNzZXRzL2ltYWdlcy9hcnJvdy1saWdodC1tb2RlLnBuZycpO1xuXHR9XG5cblx0Ji1hcnJvdy11cCB7XG5cdFx0Ly8gcG9zaXRpb246IHJlbGF0aXZlO1xuXHRcdHdpZHRoOiAxMHB4O1xuXHRcdGhlaWdodDogNXB4O1xuXHRcdC8vIGZsb2F0OiByaWdodDtcblx0XHQvLyBwYWRkaW5nLXJpZ2h0OiAxNXB4O1xuXHRcdC8vIHRvcDogMTBweDtcblx0XHRtYXJnaW4tbGVmdDogYXV0bztcblx0XHRkaXNwbGF5OiBmbGV4O1xuXHRcdGFsaWduLWl0ZW1zOiBjZW50ZXI7XG5cdFx0Ly8gcGFkZGluZzogMTBweCAxMHB4IDEwcHggMTBweDtcblx0XHRwYWRkaW5nOiAwcHggMTBweCAwcHggMTBweDtcblx0XHRjb250ZW50OiB1cmwoJy4uL2Fzc2V0cy9pbWFnZXMvYXJyb3ctbGlnaHQtbW9kZS11cC5wbmcnKTtcblx0fVxuXG5cdCYtYWRkIHtcblx0XHRkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG5cdFx0cGFkZGluZzogNXB4IDEwcHggNXB4IDBweDtcblx0XHRmb250LXNpemU6IDE0cHg7XG5cdFx0Y29sb3I6ICM2NjY7XG5cdH1cblxuXHQmLXNlbGVjdGVkIHtcblx0XHRkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG5cdFx0bWF4LXdpZHRoOiAyNjBweDtcblx0XHQvL21hcmdpbi1sZWZ0OiAxMHB4O1xuXHRcdGJvcmRlci1yYWRpdXM6IDJweDtcblx0XHQvLyBiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJHRhZ3M7XG5cdFx0b3ZlcmZsb3c6IGhpZGRlbjtcblx0XHR0ZXh0LW92ZXJmbG93OiBlbGxpcHNpcztcblx0XHR3aGl0ZS1zcGFjZTogbm93cmFwO1xuXG5cdFx0Ji1pdGVtIHtcblx0XHRcdGRpc3BsYXk6IGlubGluZS1ibG9jaztcblx0XHRcdHBhZGRpbmc6IDVweCAycHg7XG5cdFx0XHRib3JkZXItcmFkaXVzOiAzcHg7XG5cdFx0XHQvLyBjb2xvcjogdmFyaWFibGVzLiRibHVlX3RhZztcblx0XHRcdGZvbnQtc2l6ZTogMTRweDtcblx0XHRcdGZvbnQtd2VpZ2h0OiA0MDA7XG5cdFx0XHRjb2xvcjogIzMzMztcblx0XHR9XG5cblx0XHQmLWl0ZW06Zmlyc3QtY2hpbGQge1xuXHRcdFx0cGFkZGluZy1sZWZ0OiAwcHggIWltcG9ydGFudDtcblx0XHR9XG5cdH1cblx0Ji1pbnB1dCB7XG5cdFx0YmFja2dyb3VuZDogd2hpdGUgIWltcG9ydGFudDtcblx0XHRwYWRkaW5nOiAxMHB4O1xuXG5cdFx0Ji0tYm9yZGVyIHtcblx0XHRcdHBvc2l0aW9uOiByZWxhdGl2ZTtcblx0XHR9XG5cdFx0LnRhZy1saXN0LWZpbHRlciB7XG5cdFx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB3aGl0ZTtcblx0XHRcdCY6Zm9jdXMge1xuXHRcdFx0XHRvdXRsaW5lOiBub25lO1xuXHRcdFx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJnLTA0ICFpbXBvcnRhbnQ7XG5cdFx0XHRcdGJvcmRlci1yYWRpdXM6IDNweCAhaW1wb3J0YW50O1xuXHRcdFx0fVxuXHRcdH1cblx0fVxuXHQmLWxvYWQge1xuXHRcdHRleHQtYWxpZ246IGNlbnRlcjtcblx0XHRtYXJnaW4tdG9wOiAxNXB4O1xuXHRcdG1hcmdpbi1ib3R0b206IDEwcHg7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kbWlkZGxlX2xpZ2h0X3RleHQ7XG5cdFx0Y3Vyc29yOiBwb2ludGVyO1xuXHR9XG5cdCYtZHJvcGRvd24ge1xuXHRcdHBvc2l0aW9uOiBhYnNvbHV0ZTtcblx0XHR3aWR0aDogMTAwJTtcblx0XHR0b3A6IDQwcHg7XG5cdFx0YmFja2dyb3VuZDogd2hpdGU7XG5cdFx0Ym94LXNoYWRvdzogMCA1cHggN3B4ICNjY2M7XG5cdFx0ei1pbmRleDogMjtcblx0XHRmb250LXNpemU6IDE0cHg7XG5cdFx0Ym9yZGVyLXJhZGl1czogMnB4O1xuXHRcdCYtLWNvbnRlbnQge1xuXHRcdFx0aGVpZ2h0OiAyMTdweDtcblx0XHRcdG92ZXJmbG93LXk6IGF1dG87XG5cdFx0fVxuXHR9XG5cdCYtZmlsdGVyIHtcblx0XHR3aWR0aDogMTAwJTtcblx0XHRoZWlnaHQ6IDQwcHg7XG5cdFx0cGFkZGluZzogMTBweCAzMnB4IDEwcHggMTBweDtcblx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJvcmRlcjtcblx0XHRib3JkZXItcmFkaXVzOiAycHg7XG5cblx0XHQmX19jbGVhciB7XG5cdFx0XHRwb3NpdGlvbjogYWJzb2x1dGU7XG5cdFx0XHRyaWdodDogMTBweDtcblx0XHRcdHRvcDogMTRweDtcblx0XHRcdGhlaWdodDogMTJweDtcblx0XHRcdHdpZHRoOiAxMnB4O1xuXHRcdFx0Y29udGVudDogdXJsKCcuLi9hc3NldHMvaW1hZ2VzL3gucG5nJyk7XG5cdFx0XHRjdXJzb3I6IHBvaW50ZXI7XG5cdFx0fVxuXHR9XG5cdCYtY2hlY2tlZCB7XG5cdFx0bWFyZ2luLXRvcDogMnB4O1xuXHRcdG1hcmdpbi1sZWZ0OiAxcHg7XG5cdFx0Ly8gY29udGVudDogdXJsKFwiLi4vYXNzZXRzL2ltYWdlcy9jaGVja2VkLnBuZ1wiKTtcblx0XHQmLWhpZGRlbiB7XG5cdFx0XHRtYXJnaW4tdG9wOiAycHg7XG5cdFx0XHRtYXJnaW4tbGVmdDogMXB4O1xuXHRcdFx0Ly8gY29udGVudDogdXJsKFwiLi4vYXNzZXRzL2ltYWdlcy9jaGVja2VkLnBuZ1wiKTtcblx0XHRcdHZpc2liaWxpdHk6IGhpZGRlbjtcblx0XHR9XG5cdH1cblx0Ji1jaGVja2JveCB7XG5cdFx0ZGlzcGxheTogaW5saW5lLWJsb2NrO1xuXHRcdHdpZHRoOiAxNnB4O1xuXHRcdGhlaWdodDogMTZweDtcblx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJvcmRlcjtcblx0fVxuXHQmLWl0ZW0ge1xuXHRcdGZvbnQtc2l6ZTogMTRweDtcblx0XHQvLyBsaW5lLWhlaWdodDogMTZweDtcblx0XHRtYXJnaW4tbGVmdDogMTBweDtcblx0XHQmLXJvdyB7XG5cdFx0XHRjb2xvcjogdmFyaWFibGVzLiRtaWRkbGVfbGlnaHRfdGV4dDtcblx0XHRcdHBhZGRpbmc6IDdweCAxNXB4O1xuXHRcdFx0Y3Vyc29yOiBwb2ludGVyO1xuXHRcdFx0dGV4dC1vdmVyZmxvdzogZWxsaXBzaXM7XG5cdFx0XHRvdmVyZmxvdzogaGlkZGVuO1xuXHRcdFx0d2hpdGUtc3BhY2U6IG5vd3JhcDtcblx0XHRcdGxpbmUtaGVpZ2h0OiAxO1xuXHRcdFx0Jjpob3ZlciB7XG5cdFx0XHRcdGJhY2tncm91bmQtY29sb3I6IHZhcmlhYmxlcy4kZW50cmllc19oZWFkZXI7XG5cdFx0XHR9XG5cdFx0XHQmIGxhYmVsIHtcblx0XHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kbWlkZGxlX2xpZ2h0X3RleHQ7XG5cdFx0XHR9XG5cdFx0fVxuXHR9XG5cdCYtLW5vdF90YWdzIHtcblx0XHRtYXJnaW4tbGVmdDogMTBweDtcblx0fVxuXHQmX19jcmVhdGUtdGFnIHtcblx0XHRwb3NpdGlvbjogYWJzb2x1dGU7XG5cdFx0ZGlzcGxheTogZmxleDtcblx0XHRhbGlnbi1pdGVtczogY2VudGVyO1xuXHRcdHBhZGRpbmctdG9wOiAxN3B4O1xuXHRcdHBhZGRpbmctYm90dG9tOiAxN3B4O1xuXHRcdGJvdHRvbTogMDtcblx0XHR3aWR0aDogMzIwcHg7XG5cdFx0YmFja2dyb3VuZDogd2hpdGU7XG5cdFx0Ym94LXNoYWRvdzogMCAtNXB4IDEwcHggcmdiYSgwLCAwLCAwLCAwLjEpO1xuXHRcdGN1cnNvcjogcG9pbnRlcjtcblx0XHQmLS1pY29uIHtcblx0XHRcdHdpZHRoOiAxOXB4O1xuXHRcdFx0aGVpZ2h0OiAxOXB4O1xuXHRcdFx0bWFyZ2luLXJpZ2h0OiA3cHg7XG5cdFx0XHRtYXJnaW4tbGVmdDogMTBweDtcblx0XHRcdC8vIGNvbnRlbnQ6IHVybChcIi9hc3NldHMvaW1hZ2VzL2NyZWF0ZS5wbmdcIik7XG5cdFx0fVxuXHRcdCYtLXRleHQge1xuXHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmx1ZTtcblx0XHRcdGZvbnQtc2l6ZTogMTRweDtcblx0XHRcdC8vIGxpbmUtaGVpZ2h0OiAxNnB4O1xuXHRcdH1cblx0fVxuXHQmX19ib3R0b20tcGFkZGluZyB7XG5cdFx0cGFkZGluZy1ib3R0b206IDY1cHg7XG5cdFx0d2lkdGg6IDEwMCU7XG5cdH1cblx0Jl9fY3JlYXRlLWZvcm0ge1xuXHRcdHBvc2l0aW9uOiByZWxhdGl2ZTtcblx0XHRkaXNwbGF5OiBmbGV4O1xuXHRcdGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG5cdFx0dG9wOiA1MCU7XG5cdFx0bGVmdDogNTAlO1xuXHRcdHRyYW5zZm9ybTogdHJhbnNsYXRlKC01MCUsIC01MCUpO1xuXHRcdHdpZHRoOiAzMjBweDtcblx0XHRoZWlnaHQ6IDI0MHB4O1xuXHRcdGJhY2tncm91bmQ6IHZhcmlhYmxlcy4kaW5wdXQtYmFja2dyb3VuZDtcblx0XHRib3gtc2hhZG93OiAwcHggNHB4IDRweCByZ2JhKDAsIDAsIDAsIDAuMjUpO1xuXHRcdGJvcmRlci1yYWRpdXM6IDJweDtcblx0XHR0ZXh0LWFsaWduOiBjZW50ZXI7XG5cdFx0YWxpZ24taXRlbXM6IGNlbnRlcjtcblx0XHQmX190aXRsZS1hbmQtY2xvc2Uge1xuXHRcdFx0ZGlzcGxheTogZmxleDtcblx0XHRcdG1hcmdpbi1ib3R0b206IDIwcHg7XG5cdFx0XHR3aWR0aDogMTAwJTtcblx0XHR9XG5cdFx0Jl9fY2xvc2Uge1xuXHRcdFx0cG9zaXRpb246IGFic29sdXRlO1xuXHRcdFx0cmlnaHQ6IDIwcHg7XG5cdFx0XHR0b3A6IDI1cHg7XG5cdFx0XHRoZWlnaHQ6IDEycHg7XG5cdFx0XHR3aWR0aDogMTJweDtcblx0XHRcdGNvbnRlbnQ6IHVybCgnLi4vYXNzZXRzL2ltYWdlcy94LnBuZycpO1xuXHRcdFx0Y3Vyc29yOiBwb2ludGVyO1xuXHRcdH1cblx0XHQmLS1vcGVuIHtcblx0XHRcdGJhY2tncm91bmQtY29sb3I6IHJnYmEoMCwgMCwgMCwgMC44KTtcblx0XHRcdHBvc2l0aW9uOiBmaXhlZDtcblx0XHRcdHdpZHRoOiAxMDB2dztcblx0XHRcdGhlaWdodDogMTAwdmg7XG5cdFx0XHRsZWZ0OiAwO1xuXHRcdFx0dG9wOiAwO1xuXHRcdFx0ei1pbmRleDogOTk5O1xuXHRcdH1cblx0XHQmLS1kaXZpZGVyIHtcblx0XHRcdHdpZHRoOiAxMDAlO1xuXHRcdFx0aGVpZ2h0OiAxcHg7XG5cdFx0XHRib3JkZXItYm90dG9tOiAxcHggZG90dGVkIHZhcmlhYmxlcy4kYm9yZGVyO1xuXHRcdFx0bWFyZ2luLWJvdHRvbTogMjBweDtcblx0XHR9XG5cdFx0Ji0tdGl0bGUge1xuXHRcdFx0bWFyZ2luLXRvcDogMjBweDtcblx0XHRcdG1hcmdpbi1sZWZ0OiAyMHB4O1xuXHRcdFx0Zm9udC1zaXplOiAxOHB4O1xuXHRcdFx0Ly8gbGluZS1oZWlnaHQ6IDIxcHg7XG5cdFx0XHRjb2xvcjogdmFyaWFibGVzLiRtaWRkbGVfbGlnaHRfdGV4dDtcblx0XHR9XG5cdFx0Ji0tdGFnLW5hbWUge1xuXHRcdFx0bWFyZ2luLWJvdHRvbTogMjBweDtcblx0XHRcdHBhZGRpbmctbGVmdDogMTBweDtcblx0XHRcdGJvcmRlcjogMXB4IHNvbGlkIHZhcmlhYmxlcy4kYm9yZGVyO1xuXHRcdFx0Ym9yZGVyLXJhZGl1czogMnB4O1xuXHRcdFx0d2lkdGg6IDI4MHB4O1xuXHRcdFx0aGVpZ2h0OiA0MHB4O1xuXHRcdFx0Jjo6cGxhY2Vob2xkZXIge1xuXHRcdFx0XHRjb2xvcjogdmFyaWFibGVzLiRsaWdodGVyX3RleHQ7XG5cdFx0XHR9XG5cdFx0XHQmOmZvY3VzIHtcblx0XHRcdFx0b3V0bGluZTogbm9uZTtcblx0XHRcdFx0Ym9yZGVyOiAycHggc29saWQgIzBmM2JlYjtcblx0XHRcdFx0Ym9yZGVyLXJhZGl1czogNXB4O1xuXHRcdFx0fVxuXHRcdH1cblx0XHQmLS1jb25maXJtYXRpb25fYnV0dG9uIHtcblx0XHRcdG1hcmdpbi1ib3R0b206IDIwcHg7XG5cdFx0XHRwYWRkaW5nLXRvcDogMTJweDtcblx0XHRcdHdpZHRoOiAyODBweDtcblx0XHRcdGhlaWdodDogMjhweDtcblx0XHRcdGJvcmRlci1yYWRpdXM6IDJweDtcblx0XHRcdGJhY2tncm91bmQ6IHZhcmlhYmxlcy4kYmx1ZTtcblx0XHRcdGNvbG9yOiB2YXJpYWJsZXMuJGlucHV0LWJhY2tncm91bmQ7XG5cdFx0XHRmb250LXNpemU6IDE0cHg7XG5cdFx0XHQvLyBsaW5lLWhlaWdodDogMTZweDtcblx0XHRcdHRleHQtdHJhbnNmb3JtOiB1cHBlcmNhc2U7XG5cdFx0XHRjdXJzb3I6IHBvaW50ZXI7XG5cdFx0fVxuXG5cdFx0Ji0tY2FuY2VsIHtcblx0XHRcdGZvbnQtc2l6ZTogMTRweDtcblx0XHRcdC8vIGxpbmUtaGVpZ2h0OiAxNnB4O1xuXHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmx1ZTtcblx0XHRcdGN1cnNvcjogcG9pbnRlcjtcblx0XHR9XG5cdH1cblxuXHQvLyAudGFnLWxpc3QtYnV0dG9uIHtcblx0Ly8gICBwYWRkaW5nOiA1cHggMCAhaW1wb3J0YW50O1xuXHQvLyAgIGJhY2tncm91bmQ6IHdoaXRlICFpbXBvcnRhbnQ7XG5cdC8vICAgYm9yZGVyOiAwcHggc29saWQgI0M2RDJEOSAhaW1wb3J0YW50O1xuXHQvLyAgIGJvcmRlci1yYWRpdXM6IDJweCAhaW1wb3J0YW50O1xuXHQvLyAgIGN1cnNvcjogcG9pbnRlciAhaW1wb3J0YW50O1xuXHQvLyAgIGFsaWduLWl0ZW1zOiBjZW50ZXIgIWltcG9ydGFudDtcblx0Ly8gICBkaXNwbGF5OiBmbGV4ICFpbXBvcnRhbnQ7XG5cblx0Ly8gICAmLWRpc2FibGVkIHtcblx0Ly8gICAgIGJhY2tncm91bmQ6ICNlZmY0ZjcgIWltcG9ydGFudDtcblx0Ly8gICAgIGJvcmRlcjogMXB4IHNvbGlkICNDNkQyRDkgIWltcG9ydGFudDtcblx0Ly8gICAgIGN1cnNvcjogZGVmYXVsdCAhaW1wb3J0YW50O1xuXHQvLyAgIH1cblx0Ly8gfVxufVxuIiwiQHVzZSAndmFyaWFibGVzJztcblxuLnBvcHB1cC1tb2RhbCB7XG5cdGN1cnNvcjogZGVmYXVsdDtcblx0Ym94LXNpemluZzogYm9yZGVyLWJveDtcblx0cG9zaXRpb246IHJlbGF0aXZlO1xuXHR3aWR0aDogMTAwJTtcblx0cG9zaXRpb246IHJlbGF0aXZlO1xuXHRkaXNwbGF5OiBmbGV4O1xuXHRmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuXHR0b3A6IDUwJTtcblx0bGVmdDogNTAlO1xuXHR0cmFuc2Zvcm06IHRyYW5zbGF0ZSgtNTAlLCAtNTAlKTtcblx0d2lkdGg6IDMyMHB4O1xuXHRiYWNrZ3JvdW5kOiB2YXJpYWJsZXMuJGlucHV0LWJhY2tncm91bmQ7XG5cdGJveC1zaGFkb3c6IDBweCA0cHggNHB4IHJnYmEoMCwgMCwgMCwgMC4yNSk7XG5cdGJvcmRlci1yYWRpdXM6IDJweDtcblx0dGV4dC1hbGlnbjogY2VudGVyO1xuXHRhbGlnbi1pdGVtczogY2VudGVyO1xuXHQmX190aXRsZS1hbmQtY2xvc2Uge1xuXHRcdGRpc3BsYXk6IGZsZXg7XG5cdFx0bWFyZ2luLWJvdHRvbTogMjBweDtcblx0XHR3aWR0aDogMTAwJTtcblx0fVxuXHQmX19jbG9zZSB7XG5cdFx0cG9zaXRpb246IGFic29sdXRlO1xuXHRcdHJpZ2h0OiAyMHB4O1xuXHRcdHRvcDogMjVweDtcblx0XHRoZWlnaHQ6IDEycHg7XG5cdFx0d2lkdGg6IDEycHg7XG5cdFx0Y29udGVudDogdXJsKCcuLi9hc3NldHMvaW1hZ2VzL3gucG5nJyk7XG5cdFx0Y3Vyc29yOiBwb2ludGVyO1xuXHR9XG5cdCYtLW9wZW4ge1xuXHRcdGJhY2tncm91bmQtY29sb3I6IHJnYmEoMCwgMCwgMCwgMC44KTtcblx0XHRwb3NpdGlvbjogZml4ZWQ7XG5cdFx0d2lkdGg6IDEwMHZ3O1xuXHRcdGhlaWdodDogMTAwdmg7XG5cdFx0bGVmdDogMDtcblx0XHR0b3A6IDA7XG5cdFx0ei1pbmRleDogMjE0NzQ4MzY0NyAhaW1wb3J0YW50O1xuXHR9XG5cdCYtLWRpdmlkZXIge1xuXHRcdHdpZHRoOiAxMDAlO1xuXHRcdGhlaWdodDogMXB4O1xuXHRcdGJvcmRlci1ib3R0b206IDFweCBkb3R0ZWQgdmFyaWFibGVzLiRib3JkZXI7XG5cdFx0bWFyZ2luLWJvdHRvbTogMjBweDtcblx0fVxuXHQmLS10aXRsZSB7XG5cdFx0bWFyZ2luLXRvcDogMjBweDtcblx0XHRtYXJnaW4tbGVmdDogMjBweDtcblx0XHRmb250LXNpemU6IDE4cHg7XG5cdFx0bGluZS1oZWlnaHQ6IDIxcHg7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kbWlkZGxlX2xpZ2h0X3RleHQ7XG5cdH1cblx0Ji0tdGFnLW5hbWUge1xuXHRcdG1hcmdpbi1ib3R0b206IDIwcHg7XG5cdFx0cGFkZGluZy1sZWZ0OiAxMHB4O1xuXHRcdGJvcmRlcjogMXB4IHNvbGlkIHZhcmlhYmxlcy4kYm9yZGVyO1xuXHRcdGJvcmRlci1yYWRpdXM6IDJweDtcblx0XHR3aWR0aDogMjgwcHg7XG5cdFx0aGVpZ2h0OiA0MHB4O1xuXHRcdCY6OnBsYWNlaG9sZGVyIHtcblx0XHRcdGNvbG9yOiB2YXJpYWJsZXMuJGxpZ2h0ZXJfdGV4dDtcblx0XHR9XG5cdH1cblx0Ji0tY29uZmlybWF0aW9uX2J1dHRvbiB7XG5cdFx0bWFyZ2luLWJvdHRvbTogMjBweDtcblx0XHRwYWRkaW5nLXRvcDogMTJweDtcblx0XHR3aWR0aDogMjgwcHg7XG5cdFx0aGVpZ2h0OiAyOHB4O1xuXHRcdGJvcmRlci1yYWRpdXM6IDJweDtcblx0XHRiYWNrZ3JvdW5kOiB2YXJpYWJsZXMuJGJsdWU7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kaW5wdXQtYmFja2dyb3VuZDtcblx0XHRmb250LXNpemU6IDE0cHg7XG5cdFx0bGluZS1oZWlnaHQ6IDE2cHg7XG5cdFx0dGV4dC10cmFuc2Zvcm06IHVwcGVyY2FzZTtcblx0XHRjdXJzb3I6IHBvaW50ZXI7XG5cdH1cblxuXHQmLS1jYW5jZWwge1xuXHRcdGZvbnQtc2l6ZTogMTRweDtcblx0XHRsaW5lLWhlaWdodDogMTZweDtcblx0XHRjb2xvcjogdmFyaWFibGVzLiRibHVlO1xuXHRcdGN1cnNvcjogcG9pbnRlcjtcblx0fVxuXG5cdCYtLXRleHQge1xuXHRcdG1heC13aWR0aDogOTAlO1xuXHRcdHdvcmQtYnJlYWs6IGJyZWFrLXdvcmQ7XG5cdH1cbn1cbiIsIkB1c2UgJ3ZhcmlhYmxlcyc7XG5cbi5jdXN0b20tZmllbGRzIHtcblx0cGFkZGluZzogMHB4ICFpbXBvcnRhbnQ7XG5cdGJvcmRlcjogMHB4IHNvbGlkICNjNmQyZDkgIWltcG9ydGFudDtcblx0YmFja2dyb3VuZC1jb2xvcjogI2VmZjRmNyAhaW1wb3J0YW50O1xuXHRtYXJnaW46IDAgIWltcG9ydGFudDtcblx0d2lkdGg6IDEwMCU7XG5cdGlucHV0OmZvY3VzIHtcblx0XHRvdXRsaW5lOiBub25lO1xuXHRcdGJveC1zaGFkb3c6IG5vbmU7XG5cdFx0Ym9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRiZy0wNCAhaW1wb3J0YW50O1xuXHRcdGJvcmRlci1yYWRpdXM6IDJweCAhaW1wb3J0YW50O1xuXHR9XG5cdGlucHV0OmhvdmVyIHtcblx0XHRib3gtc2hhZG93OiBub25lO1xuXHR9XG59XG5cbi5jdXN0b20tZmllbGQge1xuXHRib3gtc2l6aW5nOiBib3JkZXItYm94O1xuXHRwYWRkaW5nOiAwcHggIWltcG9ydGFudDtcblx0Ym9yZGVyLWltYWdlLXdpZHRoOiAwICFpbXBvcnRhbnQ7XG5cdGJvcmRlcjogMHB4IHNvbGlkICNjNmQyZDkgIWltcG9ydGFudDtcblx0bWFyZ2luOiA4cHggMHB4IDBweCAwcHggIWltcG9ydGFudDtcblx0aGVpZ2h0OiA0MHB4ICFpbXBvcnRhbnQ7XG5cdG92ZXJmbG93OiB2aXNpYmxlO1xuXHQmLWRpc2FibGVkIHtcblx0XHRib3gtc2l6aW5nOiBib3JkZXItYm94O1xuXHRcdHBhZGRpbmc6IDBweCAhaW1wb3J0YW50O1xuXHRcdGJvcmRlci1pbWFnZS13aWR0aDogMCAhaW1wb3J0YW50O1xuXHRcdGJhY2tncm91bmQtY29sb3I6ICNlZmY0ZjcgIWltcG9ydGFudDtcblx0XHRtYXJnaW46IDhweCAwcHggMHB4IDBweCAhaW1wb3J0YW50O1xuXHRcdGhlaWdodDogNDBweCAhaW1wb3J0YW50O1xuXHRcdGRpc3BsYXk6IGZsZXg7XG5cdFx0YWxpZ24taXRlbXM6IGNlbnRlcjtcblx0fVxufVxuXG4uY3VzdG9tLWZpZWxkLW51bWJlciB7XG5cdHBvc2l0aW9uOiByZWxhdGl2ZTtcblx0Zm9udC1zaXplOiAxNHB4O1xuXHQuaW5wdXQtc3RlcHBlciB7XG5cdFx0cG9zaXRpb246IGFic29sdXRlO1xuXHRcdHRvcDogMTFweDtcblx0XHRyaWdodDogMTZweDtcblx0XHR3aWR0aDogMTNweDtcblx0XHRoZWlnaHQ6IDE0cHg7XG5cdFx0LmlucHV0LXN0ZXBwZXItd3JhcHBlciB7XG5cdFx0XHRkaXNwbGF5OiBmbGV4O1xuXHRcdFx0anVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG5cdFx0XHRiYWNrZ3JvdW5kOiAjZjFmMWYxO1xuXHRcdFx0d2lkdGg6IDE2cHg7XG5cdFx0XHRoZWlnaHQ6IDhweDtcblx0XHRcdCY6aG92ZXIge1xuXHRcdFx0XHRiYWNrZ3JvdW5kOiAjYzFjMWMxO1xuXHRcdFx0fVxuXHRcdFx0JjphY3RpdmUge1xuXHRcdFx0XHRiYWNrZ3JvdW5kOiAjYTFhMWExO1xuXHRcdFx0fVxuXHRcdH1cblx0XHQuaW5wdXQtc3RlcHBlci11cCxcblx0XHQuaW5wdXQtc3RlcHBlci1kb3duIHtcblx0XHRcdHBvc2l0aW9uOiByZWxhdGl2ZTtcblx0XHRcdHRvcDogMnB4O1xuXHRcdFx0aGVpZ2h0OiA0cHg7XG5cdFx0fVxuXHR9XG59XG5cbmRpdi5jdXN0b20tZmllbGQtdGEge1xuXHRib3gtc2l6aW5nOiBib3JkZXItYm94O1xuXHRwYWRkaW5nOiAwcHggIWltcG9ydGFudDtcblx0Ym9yZGVyOiAwcHggc29saWQgI2M2ZDJkOSAhaW1wb3J0YW50O1xuXHRib3JkZXItaW1hZ2Utd2lkdGg6IDAgIWltcG9ydGFudDtcblx0bWFyZ2luOiA4cHggMHB4IDBweCAwcHggIWltcG9ydGFudDtcblx0aGVpZ2h0OiA0MHB4ICFpbXBvcnRhbnQ7XG5cblx0Ji1kaXNhYmxlZCB7XG5cdFx0Ym94LXNpemluZzogYm9yZGVyLWJveDtcblx0XHRwYWRkaW5nOiAwcHggIWltcG9ydGFudDtcblx0XHRib3JkZXItaW1hZ2Utd2lkdGg6IDAgIWltcG9ydGFudDtcblx0XHRtYXJnaW46IDhweCAwcHggMHB4IDBweCAhaW1wb3J0YW50O1xuXHRcdGhlaWdodDogNDVweCAhaW1wb3J0YW50O1xuXHRcdC8vYmFja2dyb3VuZC1jb2xvcjogI2VmZjRmNyAhaW1wb3J0YW50O1xuXHR9XG59XG5cbmRpdi5jdXN0b20tZmllbGQtaW5uZXIge1xuXHRib3gtc2l6aW5nOiBib3JkZXItYm94O1xuXHRwYWRkaW5nOiAwcHggN3B4ICFpbXBvcnRhbnQ7XG5cdGRpc3BsYXk6IGZsZXggIWltcG9ydGFudDtcblx0YWxpZ24taXRlbXM6IGNlbnRlciAhaW1wb3J0YW50O1xuXHR3aWR0aDogMTAwJSAhaW1wb3J0YW50O1xuXHRoZWlnaHQ6IDEwMCUgIWltcG9ydGFudDtcblx0bWFyZ2luOiAwICFpbXBvcnRhbnQ7XG5cdGJvcmRlcjogMHB4IHNvbGlkICNjNmQyZDkgIWltcG9ydGFudDtcblx0Ji1kaXNhYmxlZCB7XG5cdFx0Ym94LXNpemluZzogYm9yZGVyLWJveDtcblx0XHRwYWRkaW5nOiAwcHggN3B4ICFpbXBvcnRhbnQ7XG5cdFx0ZGlzcGxheTogZmxleCAhaW1wb3J0YW50O1xuXHRcdGFsaWduLWl0ZW1zOiBjZW50ZXIgIWltcG9ydGFudDtcblx0XHR3aWR0aDogMTAwJSAhaW1wb3J0YW50O1xuXHRcdGhlaWdodDogMTAwJSAhaW1wb3J0YW50O1xuXHRcdG1hcmdpbjogMCAhaW1wb3J0YW50O1xuXHR9XG59XG5cbmRpdi5jdXN0b20tZmllbGQtaW5uZXItY2hlY2tib3gge1xuXHRib3gtc2l6aW5nOiBib3JkZXItYm94O1xuXHRwYWRkaW5nOiAwcHggIWltcG9ydGFudDtcblx0ZGlzcGxheTogZmxleCAhaW1wb3J0YW50O1xuXHRhbGlnbi1pdGVtczogY2VudGVyICFpbXBvcnRhbnQ7XG5cdGJhY2tncm91bmQtY29sb3I6ICNlZmY0ZjcgIWltcG9ydGFudDtcblx0d2lkdGg6IDEwMCUgIWltcG9ydGFudDtcblx0aGVpZ2h0OiAxMDAlICFpbXBvcnRhbnQ7XG5cdG1hcmdpbjogMCAhaW1wb3J0YW50O1xuXHRib3JkZXI6IDBweCBzb2xpZCAjYzZkMmQ5ICFpbXBvcnRhbnQ7XG5cdCYtZGlzYWJsZWQge1xuXHRcdGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG5cdFx0ZGlzcGxheTogZmxleCAhaW1wb3J0YW50O1xuXHRcdGFsaWduLWl0ZW1zOiBjZW50ZXIgIWltcG9ydGFudDtcblx0XHR3aWR0aDogMTAwJSAhaW1wb3J0YW50O1xuXHRcdGhlaWdodDogMTAwJSAhaW1wb3J0YW50O1xuXHRcdG1hcmdpbjogMCAhaW1wb3J0YW50O1xuXHRcdGJhY2tncm91bmQtY29sb3I6ICNlZmY0ZjcgIWltcG9ydGFudDtcblx0XHQuY2xvY2tpZnktc3dpdGNoLWxhYmVsIHtcblx0XHRcdGNvbG9yOiAjOWM5YzljICFpbXBvcnRhbnQ7XG5cdFx0fVxuXHR9XG59XG5cbnRleHRhcmVhLmN1c3RvbS1maWVsZC10ZXh0IHtcblx0Ym94LXNpemluZzogYm9yZGVyLWJveDtcblx0d2lkdGg6IDEwMCUgIWltcG9ydGFudDtcblx0aGVpZ2h0OiAxMDAlICFpbXBvcnRhbnQ7XG5cdG1pbi1oZWlnaHQ6IDQwcHggIWltcG9ydGFudDtcblx0Ym9yZGVyOiAxcHggc29saWQgI2M2ZDJkOTtcblx0bWFyZ2luOiAwICFpbXBvcnRhbnQ7XG5cdGxpbmUtaGVpZ2h0OiAyN3B4ICFpbXBvcnRhbnQ7XG5cdHJlc2l6ZTogbm9uZSAhaW1wb3J0YW50O1xuXHRmb250LXNpemU6IDE0cHggIWltcG9ydGFudDtcblx0b3V0bGluZTogbm9uZSAhaW1wb3J0YW50O1xuXHRjb2xvcjogdmFyaWFibGVzLiRkYXJrX3RleHQ7XG5cdHBhZGRpbmc6IDVweCA4cHggIWltcG9ydGFudDtcblx0d29yZC13cmFwOiBicmVhay13b3JkICFpbXBvcnRhbnQ7XG5cdGJhY2tncm91bmQtY29sb3I6IHdoaXRlO1xuXHRib3JkZXItaW1hZ2Utd2lkdGg6IDAgIWltcG9ydGFudDtcblx0dGV4dC1vdmVyZmxvdzogZWxsaXBzaXMgIWltcG9ydGFudDtcblx0Jjo6cGxhY2Vob2xkZXIge1xuXHRcdGNvbG9yOiB2YXJpYWJsZXMuJGxpZ2h0ZXJfdGV4dDtcblx0XHRvcGFjaXR5OiAxO1xuXHR9XG5cdCY6Zm9jdXMge1xuXHRcdGJvcmRlcjogMXB4IHNvbGlkIHZhcmlhYmxlcy4kYmctMDQgIWltcG9ydGFudDtcblx0XHRib3JkZXItcmFkaXVzOiAycHggIWltcG9ydGFudDtcblx0fVxuXG5cdCYtZGlzYWJsZWQge1xuXHRcdGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG5cdFx0d2lkdGg6IDEwMCUgIWltcG9ydGFudDtcblx0XHRoZWlnaHQ6IDQ1cHggIWltcG9ydGFudDtcblx0XHRtaW4taGVpZ2h0OiA0NXB4ICFpbXBvcnRhbnQ7XG5cdFx0Ym9yZGVyOiAwICFpbXBvcnRhbnQ7XG5cdFx0bWFyZ2luOiAwICFpbXBvcnRhbnQ7XG5cdFx0cmVzaXplOiBub25lICFpbXBvcnRhbnQ7XG5cdFx0Zm9udC1zaXplOiAxNHB4ICFpbXBvcnRhbnQ7XG5cdFx0b3V0bGluZTogbm9uZSAhaW1wb3J0YW50O1xuXHRcdGNvbG9yOiAjMzMzMzMzO1xuXHRcdHBhZGRpbmc6IDVweCAxMHB4ICFpbXBvcnRhbnQ7XG5cdFx0d29yZC13cmFwOiBicmVhay13b3JkICFpbXBvcnRhbnQ7XG5cdFx0Ym9yZGVyOiAxcHggc29saWQgI2M2ZDJkOTtcblx0XHQmOjpwbGFjZWhvbGRlciB7XG5cdFx0XHRjb2xvcjogIzljOWM5YyAhaW1wb3J0YW50O1xuXHRcdH1cblx0fVxuXG5cdCYuY3VzdG9tLWZpZWxkLXJlcXVpcmVkIHtcblx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJHJlZCAhaW1wb3J0YW50O1xuXHR9XG59XG5cbmlucHV0LmN1c3RvbS1maWVsZC1udW1iZXIge1xuXHRib3gtc2l6aW5nOiBib3JkZXItYm94O1xuXHR3aWR0aDogMTAwJSAhaW1wb3J0YW50O1xuXHRoZWlnaHQ6IDEwMCUgIWltcG9ydGFudDtcblx0cGFkZGluZzogNXB4IDhweCAhaW1wb3J0YW50O1xuXHRtYXJnaW46IDAgIWltcG9ydGFudDtcblx0bGluZS1oZWlnaHQ6IDIwcHggIWltcG9ydGFudDtcblx0b3ZlcmZsb3c6IGhpZGRlbiAhaW1wb3J0YW50O1xuXHR0ZXh0LW92ZXJmbG93OiBlbGxpcHNpcyAhaW1wb3J0YW50O1xuXHRib3JkZXI6IDFweCBzb2xpZCAjYzZkMmQ5O1xuXHRjb2xvcjogdmFyaWFibGVzLiRkYXJrX3RleHQ7XG5cdGJhY2tncm91bmQtY29sb3I6IHdoaXRlICFpbXBvcnRhbnQ7XG5cdCY6OnBsYWNlaG9sZGVyIHtcblx0XHRjb2xvcjogdmFyaWFibGVzLiRsaWdodGVyX3RleHQ7XG5cdFx0b3BhY2l0eTogMTtcblx0fVxuXHQmLWRpc2FibGVkIHtcblx0XHRib3gtc2l6aW5nOiBib3JkZXItYm94O1xuXHRcdGJvcmRlcjogMXB4IHNvbGlkICNjNmQyZDk7XG5cdFx0d2lkdGg6IDEwMCUgIWltcG9ydGFudDtcblx0XHRoZWlnaHQ6IDEwMCUgIWltcG9ydGFudDtcblx0XHRwYWRkaW5nOiA1cHggOHB4ICFpbXBvcnRhbnQ7XG5cdFx0bWFyZ2luOiAwICFpbXBvcnRhbnQ7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogd2hpdGUgIWltcG9ydGFudDtcblx0XHRsaW5lLWhlaWdodDogMjBweCAhaW1wb3J0YW50O1xuXHRcdG92ZXJmbG93OiBoaWRkZW4gIWltcG9ydGFudDtcblx0XHR0ZXh0LW92ZXJmbG93OiBlbGxpcHNpcyAhaW1wb3J0YW50O1xuXHRcdGJvcmRlcjogMXB4IHNvbGlkICNjNmQyZDkgIWltcG9ydGFudDtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiAjZWZmNGY3ICFpbXBvcnRhbnQ7XG5cdH1cblx0Ji5jdXN0b20tZmllbGQtcmVxdWlyZWQge1xuXHRcdGJvcmRlcjogMXB4IHNvbGlkIHZhcmlhYmxlcy4kcmVkICFpbXBvcnRhbnQ7XG5cdH1cbn1cblxuLmN1c3RvbS1maWVsZC1saW5rIHtcblx0Ym94LXNpemluZzogYm9yZGVyLWJveDtcblx0d2lkdGg6IDEwMCUgIWltcG9ydGFudDtcblx0Jjo6cGxhY2Vob2xkZXIge1xuXHRcdGNvbG9yOiB2YXJpYWJsZXMuJGxpZ2h0ZXJfdGV4dDtcblx0XHRvcGFjaXR5OiAxO1xuXHR9XG5cdCYuY3VzdG9tLWZpZWxkLXJlcXVpcmVkIHtcblx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJHJlZCAhaW1wb3J0YW50O1xuXHR9XG59XG5cbmRpdi5jdXN0b20tZmllbGQtbGluay1sYWJlbCB7XG5cdGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG5cdHBhZGRpbmc6IDVweCAwcHggIWltcG9ydGFudDtcblx0bGluZS1oZWlnaHQ6IDIxcHggIWltcG9ydGFudDtcblx0Zm9udC1zaXplOiAxNHB4ICFpbXBvcnRhbnQ7XG5cdGZvbnQtd2VpZ2h0OiA0MDBweCAhaW1wb3J0YW50O1xuXHRtYXJnaW46IDAgIWltcG9ydGFudDtcblx0Ly8gb3ZlcmZsb3c6IGhpZGRlbiAhaW1wb3J0YW50O1xuXHQvLyB0ZXh0LW92ZXJmbG93OiBlbGxpcHNpcztcbn1cblxuLyoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKipcbiAgLmN1c3RvbS1jb250cm9sXG4qKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKi9cblxuLmNmLWNvbnRhaW5lciB7XG5cdGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG5cdGRpc3BsYXk6IGJsb2NrICFpbXBvcnRhbnQ7XG5cdHBvc2l0aW9uOiByZWxhdGl2ZSAhaW1wb3J0YW50O1xuXHRwYWRkaW5nLWxlZnQ6IDM1cHggIWltcG9ydGFudDtcblx0LyogbWFyZ2luLWJvdHRvbTogNXB4ICFpbXBvcnRhbnQ7ICovXG5cdGxpbmUtaGVpZ2h0OiAyMXB4ICFpbXBvcnRhbnQ7IC8qIHNsYXZrbyBhZGRlZCAqL1xuXHRjdXJzb3I6IHBvaW50ZXIgIWltcG9ydGFudDtcblx0Zm9udC1zaXplOiAxNHB4ICFpbXBvcnRhbnQ7XG5cdC13ZWJraXQtdXNlci1zZWxlY3Q6IG5vbmUgIWltcG9ydGFudDtcblx0LW1vei11c2VyLXNlbGVjdDogbm9uZSAhaW1wb3J0YW50O1xuXHQtbXMtdXNlci1zZWxlY3Q6IG5vbmUgIWltcG9ydGFudDtcblx0dXNlci1zZWxlY3Q6IG5vbmUgIWltcG9ydGFudDtcblx0bWFyZ2luOiAwICFpbXBvcnRhbnQ7XG59XG5cbi8qIEhpZGUgdGhlIGJyb3dzZXIncyBkZWZhdWx0IHJhZGlvIGJ1dHRvbiAqL1xuLmNmLWNvbnRhaW5lciBpbnB1dCB7XG5cdGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG5cdHBvc2l0aW9uOiBhYnNvbHV0ZSAhaW1wb3J0YW50O1xuXHRvcGFjaXR5OiAwICFpbXBvcnRhbnQ7XG5cdGN1cnNvcjogcG9pbnRlciAhaW1wb3J0YW50O1xufVxuXG4uY2xvY2tpZnktc3dpdGNoLWxhYmVsIHtcblx0Ym94LXNpemluZzogYm9yZGVyLWJveDtcblx0Y29sb3I6ICMzMzMgIWltcG9ydGFudDtcblx0Zm9udC1zaXplOiAxNHB4ICFpbXBvcnRhbnQ7XG5cdHdoaXRlLXNwYWNlOiBub3dyYXAgIWltcG9ydGFudDtcblx0bWFyZ2luOiAwcHggMHB4IDBweCAxMHB4ICFpbXBvcnRhbnQ7XG5cdHdpZHRoOiAyMzBweDtcblx0b3ZlcmZsb3c6IGhpZGRlbiAhaW1wb3J0YW50O1xuXHR0ZXh0LW92ZXJmbG93OiBlbGxpcHNpcyAhaW1wb3J0YW50O1xufVxuXG4vKiBDcmVhdGUgYSBjdXN0b20gcmFkaW8gYnV0dG9uICovXG4uY2hlY2ttYXJrIHtcblx0cG9zaXRpb246IGFic29sdXRlICFpbXBvcnRhbnQ7XG5cdHRvcDogMCAhaW1wb3J0YW50O1xuXHRsZWZ0OiAwICFpbXBvcnRhbnQ7XG5cdGhlaWdodDogMjFweCAhaW1wb3J0YW50O1xuXHR3aWR0aDogMjFweCAhaW1wb3J0YW50O1xuXHQvKiBiYWNrZ3JvdW5kLWNvbG9yOiAjZWVlOyAqL1xuXHRib3JkZXI6IDFweCBzb2xpZCBncmF5ICFpbXBvcnRhbnQ7XG5cdGJvcmRlci1yYWRpdXM6IDUwJSAhaW1wb3J0YW50O1xufVxuXG4vKiBPbiBtb3VzZS1vdmVyLCBhZGQgYSBncmV5IGJhY2tncm91bmQgY29sb3IgKi9cbi5jZi1jb250YWluZXI6aG92ZXIgaW5wdXQgfiAuY2hlY2ttYXJrIHtcblx0YmFja2dyb3VuZC1jb2xvcjogI2NjYyAhaW1wb3J0YW50O1xufVxuXG4vKiBXaGVuIHRoZSByYWRpbyBidXR0b24gaXMgY2hlY2tlZCwgYWRkIGEgYmx1ZSBiYWNrZ3JvdW5kICovXG4uY2YtY29udGFpbmVyIGlucHV0OmNoZWNrZWQgfiAuY2hlY2ttYXJrIHtcblx0YmFja2dyb3VuZC1jb2xvcjogIzIxOTZmMyAhaW1wb3J0YW50O1xufVxuXG4vKiBDcmVhdGUgdGhlIGluZGljYXRvciAodGhlIGRvdC9jaXJjbGUgLSBoaWRkZW4gd2hlbiBub3QgY2hlY2tlZCkgKi9cbi5jaGVja21hcms6YWZ0ZXIge1xuXHRjb250ZW50OiAnJyAhaW1wb3J0YW50O1xuXHRwb3NpdGlvbjogYWJzb2x1dGUgIWltcG9ydGFudDtcblx0ZGlzcGxheTogbm9uZSAhaW1wb3J0YW50O1xufVxuXG4vKiBTaG93IHRoZSBpbmRpY2F0b3IgKGRvdC9jaXJjbGUpIHdoZW4gY2hlY2tlZCAqL1xuLmNmLWNvbnRhaW5lciBpbnB1dDpjaGVja2VkIH4gLmNoZWNrbWFyazphZnRlciB7XG5cdGRpc3BsYXk6IGJsb2NrICFpbXBvcnRhbnQ7XG59XG5cbi8qIFN0eWxlIHRoZSBpbmRpY2F0b3IgKGRvdC9jaXJjbGUpICovXG4uY2YtY29udGFpbmVyIC5jaGVja21hcms6YWZ0ZXIge1xuXHR0b3A6IDVweCAhaW1wb3J0YW50O1xuXHRsZWZ0OiA2cHggIWltcG9ydGFudDtcblx0d2lkdGg6IDhweCAhaW1wb3J0YW50O1xuXHRoZWlnaHQ6IDhweCAhaW1wb3J0YW50O1xuXHRib3JkZXItcmFkaXVzOiA1MCUgIWltcG9ydGFudDtcblx0YmFja2dyb3VuZDogd2hpdGUgIWltcG9ydGFudDtcbn1cblxuLyogVGhlIE1vZGFsIChiYWNrZ3JvdW5kKSAqL1xuLmNsb2NraWZ5LW1vZGFsIHtcblx0Ym94LXNpemluZzogYm9yZGVyLWJveCAhaW1wb3J0YW50O1xuXHQtd2Via2l0LWJveC1zaXppbmc6IGJvcmRlci1ib3ggIWltcG9ydGFudDtcblx0Zm9udC1mYW1pbHk6ICdSb2JvdG8nLCBzYW5zLXNlcmlmICFpbXBvcnRhbnQ7XG5cdGZvbnQtd2VpZ2h0OiBub3JtYWwgIWltcG9ydGFudDtcblx0LypkaXNwbGF5OiBub25lOyovIC8qIEhpZGRlbiBieSBkZWZhdWx0ICovXG5cdHBvc2l0aW9uOiBmaXhlZCAhaW1wb3J0YW50OyAvKiBTdGF5IGluIHBsYWNlICovXG5cdHotaW5kZXg6IDk5OTk5OTkgIWltcG9ydGFudDsgLyogU2l0IG9uIHRvcCAqL1xuXHRwYWRkaW5nLXRvcDogMTAwcHggIWltcG9ydGFudDsgLyogTG9jYXRpb24gb2YgdGhlIGJveCAqL1xuXHRsZWZ0OiAwICFpbXBvcnRhbnQ7XG5cdHRvcDogMCAhaW1wb3J0YW50O1xuXHR3aWR0aDogMTAwJSAhaW1wb3J0YW50OyAvKiBGdWxsIHdpZHRoICovXG5cdGhlaWdodDogMTAwJSAhaW1wb3J0YW50OyAvKiBGdWxsIGhlaWdodCAqL1xuXHRvdmVyZmxvdzogYXV0byAhaW1wb3J0YW50OyAvKiBFbmFibGUgc2Nyb2xsIGlmIG5lZWRlZCAqL1xuXHRiYWNrZ3JvdW5kLWNvbG9yOiByZ2IoMCwgMCwgMCkgIWltcG9ydGFudDsgLyogRmFsbGJhY2sgY29sb3IgKi9cblx0YmFja2dyb3VuZC1jb2xvcjogcmdiYSgwLCAwLCAwLCAwLjQpICFpbXBvcnRhbnQ7IC8qIEJsYWNrIHcvIG9wYWNpdHkgKi9cbn1cblxuLyogTW9kYWwgQ29udGVudCAqL1xuLmNsb2NraWZ5LW1vZGFsLWNvbnRlbnQge1xuXHRib3gtc2l6aW5nOiBib3JkZXItYm94O1xuXHRiYWNrZ3JvdW5kLWNvbG9yOiAjZmVmZWZlO1xuXHRtYXJnaW46IGF1dG8gIWltcG9ydGFudDtcblx0Ym9yZGVyLXJhZGl1czogMnB4O1xuXHR3aWR0aDogODQlICFpbXBvcnRhbnQ7XG59XG5cbi8qIFRoZSBDbG9zZSBCdXR0b24gKi9cbi8vIC5jbG9ja2lmeS1jbG9zZSB7XG4vLyAgIGZsb2F0OiByaWdodCAhaW1wb3J0YW50O1xuLy8gICBiYWNrZ3JvdW5kOiB1cmwoJy9hc3NldHMvaW1hZ2VzL2Nsb3NlWC5zdmcnKSBuby1yZXBlYXQ7XG4vLyAgIHdpZHRoOiAyMHB4O1xuLy8gICBoZWlnaHQ6IDIwcHg7XG4vLyAgIGN1cnNvcjogcG9pbnRlcjtcbi8vICAgb3BhY2l0eTogLjU7XG4vLyAgIGJhY2tncm91bmQtc2l6ZTogY29udGFpbjtcbi8vIH1cblxuLmNsLWNsb3NlIHtcblx0YmFja2dyb3VuZC1jb2xvcjogI2ZmZjtcblx0Ym9yZGVyOiAwICFpbXBvcnRhbnQ7XG59XG5cbi5jbG9ja2lmeS1jbG9zZTpob3ZlciB7XG5cdG9wYWNpdHk6IDAuNzU7XG59XG5cbi5jbC1mb3JtLWNvbnRyb2wge1xuXHRtYXJnaW46IDAgIWltcG9ydGFudDtcbn1cblxuLy8gLmNsb2NraWZ5LWxpbmstaW5wdXQge1xuLy8gICBkaXNwbGF5OiBibG9jayAhaW1wb3J0YW50O1xuLy8gICBmbGV4OiAxO1xuLy8gICBtYXJnaW46IDBweCAhaW1wb3J0YW50O1xuLy8gICBoZWlnaHQ6IDQwcHggIWltcG9ydGFudDtcbi8vICAgcGFkZGluZzogN3B4ICFpbXBvcnRhbnQ7XG4vLyAgIGZvbnQtc2l6ZTogMTRweCAhaW1wb3J0YW50O1xuLy8gICBmb250LXdlaWdodDogNDAwICFpbXBvcnRhbnQ7XG4vLyAgIGxpbmUtaGVpZ2h0OiAyMXB4ICFpbXBvcnRhbnQ7XG4vLyAgIGNvbG9yOiAjMzMzICFpbXBvcnRhbnQ7XG4vLyAgIGJhY2tncm91bmQtY29sb3I6ICNmZmYgIWltcG9ydGFudDtcbi8vICAgYmFja2dyb3VuZC1jbGlwOiBwYWRkaW5nLWJveCAhaW1wb3J0YW50O1xuLy8gICBib3JkZXI6IDFweCBzb2xpZCAjYzZkMmQ5ICFpbXBvcnRhbnQ7XG4vLyAgIGJvcmRlci1yYWRpdXM6IDFweCAhaW1wb3J0YW50O1xuLy8gICB0cmFuc2l0aW9uOiBib3JkZXItY29sb3IgLjE1cyBlYXNlLWluLW91dCxib3gtc2hhZG93IC4xNXMgZWFzZS1pbi1vdXQgIWltcG9ydGFudDtcbi8vICAgYm94LXNoYWRvdzogbm9uZSAhaW1wb3J0YW50O1xuLy8gfVxuXG5pbnB1dC5jbG9ja2lmeS1saW5rLWlucHV0IHtcblx0Ym94LXNpemluZzogYm9yZGVyLWJveDtcblx0ZGlzcGxheTogYmxvY2sgIWltcG9ydGFudDtcblx0ZmxleDogMTtcblx0bWFyZ2luOiAwICFpbXBvcnRhbnQ7XG5cdGhlaWdodDogNDBweCAhaW1wb3J0YW50O1xuXHRwYWRkaW5nOiA3cHggIWltcG9ydGFudDtcblx0Zm9udC1zaXplOiAxNHB4ICFpbXBvcnRhbnQ7XG5cdGZvbnQtd2VpZ2h0OiA0MDAgIWltcG9ydGFudDtcblx0bGluZS1oZWlnaHQ6IDIxcHggIWltcG9ydGFudDtcblx0Y29sb3I6IHZhcmlhYmxlcy4kZGFya190ZXh0O1xuXHRiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmICFpbXBvcnRhbnQ7XG5cdGJhY2tncm91bmQtY2xpcDogcGFkZGluZy1ib3ggIWltcG9ydGFudDtcblx0Ym9yZGVyOiAxcHggc29saWQgI2M2ZDJkOTtcblx0Ym9yZGVyLXJhZGl1czogMHB4ICFpbXBvcnRhbnQ7XG5cdHRyYW5zaXRpb246IGJvcmRlci1jb2xvciAwLjE1cyBlYXNlLWluLW91dCwgYm94LXNoYWRvdyAwLjE1cyBlYXNlLWluLW91dCAhaW1wb3J0YW50O1xuXHRib3gtc2hhZG93OiBub25lICFpbXBvcnRhbnQ7XG5cdCY6OnBsYWNlaG9sZGVyIHtcblx0XHRjb2xvcjogdmFyaWFibGVzLiRsaWdodGVyX3RleHQ7XG5cdFx0b3BhY2l0eTogMTtcblx0fVxuXHQmLWRpc2FibGVkIHtcblx0XHRib3gtc2l6aW5nOiBib3JkZXItYm94O1xuXHRcdGRpc3BsYXk6IGJsb2NrICFpbXBvcnRhbnQ7XG5cdFx0ZmxleDogMTtcblx0XHRtYXJnaW46IDAgIWltcG9ydGFudDtcblx0XHRoZWlnaHQ6IDQwcHggIWltcG9ydGFudDtcblx0XHRwYWRkaW5nOiA3cHggIWltcG9ydGFudDtcblx0XHRmb250LXNpemU6IDE0cHggIWltcG9ydGFudDtcblx0XHRmb250LXdlaWdodDogNDAwICFpbXBvcnRhbnQ7XG5cdFx0bGluZS1oZWlnaHQ6IDIxcHggIWltcG9ydGFudDtcblx0XHRjb2xvcjogIzMzMyAhaW1wb3J0YW50O1xuXHRcdGJhY2tncm91bmQtY2xpcDogcGFkZGluZy1ib3ggIWltcG9ydGFudDtcblx0XHRib3JkZXItcmFkaXVzOiAwcHggIWltcG9ydGFudDtcblx0XHR0cmFuc2l0aW9uOiBib3JkZXItY29sb3IgMC4xNXMgZWFzZS1pbi1vdXQsIGJveC1zaGFkb3cgMC4xNXMgZWFzZS1pbi1vdXQgIWltcG9ydGFudDtcblx0XHRib3gtc2hhZG93OiBub25lICFpbXBvcnRhbnQ7XG5cdFx0Ym9yZGVyOiAxcHggc29saWQgI2M2ZDJkOSAhaW1wb3J0YW50O1xuXHRcdGJhY2tncm91bmQtY29sb3I6ICNlZmY0ZjcgIWltcG9ydGFudDtcblx0fVxuXHQmOmZvY3VzIHtcblx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJnLTA0ICFpbXBvcnRhbnQ7XG5cdFx0Ym9yZGVyLXJhZGl1czogMnB4ICFpbXBvcnRhbnQ7XG5cdH1cbn1cblxuaW5wdXQuY2xvY2tpZnktbGluay1pbnB1dC1tb2RhbCB7XG5cdGRpc3BsYXk6IGJsb2NrICFpbXBvcnRhbnQ7XG5cdGZsZXg6IDE7XG5cdG1hcmdpbjogMHB4IDBweCAwcHggMTBweCAhaW1wb3J0YW50O1xuXHRoZWlnaHQ6IDQwcHggIWltcG9ydGFudDtcblx0cGFkZGluZzogN3B4ICFpbXBvcnRhbnQ7XG5cdGZvbnQtc2l6ZTogMTRweCAhaW1wb3J0YW50O1xuXHRmb250LXdlaWdodDogNDAwICFpbXBvcnRhbnQ7XG5cdGxpbmUtaGVpZ2h0OiAyMXB4ICFpbXBvcnRhbnQ7XG5cdGNvbG9yOiAjMzMzO1xuXHRiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmO1xuXHRiYWNrZ3JvdW5kLWNsaXA6IHBhZGRpbmctYm94ICFpbXBvcnRhbnQ7XG5cdGJvcmRlcjogMXB4IHNvbGlkICNjNmQyZDkgIWltcG9ydGFudDtcblx0Ym9yZGVyLXJhZGl1czogMnB4O1xuXHR0cmFuc2l0aW9uOiBib3JkZXItY29sb3IgMC4xNXMgZWFzZS1pbi1vdXQsIGJveC1zaGFkb3cgMC4xNXMgZWFzZS1pbi1vdXQgIWltcG9ydGFudDtcblx0Ym94LXNoYWRvdzogbm9uZSAhaW1wb3J0YW50O1xuXHQmOmZvY3VzIHtcblx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJnLTA0ICFpbXBvcnRhbnQ7XG5cdFx0Ym9yZGVyLXJhZGl1czogMnB4ICFpbXBvcnRhbnQ7XG5cdH1cbn1cblxuLm1vZGFsLWNvbnRlbnQge1xuXHRib3gtc2l6aW5nOiBib3JkZXItYm94O1xuXHRwb3NpdGlvbjogcmVsYXRpdmUgIWltcG9ydGFudDtcblx0ZGlzcGxheTogZmxleCAhaW1wb3J0YW50O1xuXHRmbGV4LWRpcmVjdGlvbjogY29sdW1uICFpbXBvcnRhbnQ7XG5cdHdpZHRoOiAxMDAlICFpbXBvcnRhbnQ7XG5cdHBvaW50ZXItZXZlbnRzOiBhdXRvICFpbXBvcnRhbnQ7XG5cdGJhY2tncm91bmQtY29sb3I6ICNmZmYgIWltcG9ydGFudDtcblx0YmFja2dyb3VuZC1jbGlwOiBwYWRkaW5nLWJveCAhaW1wb3J0YW50O1xuXHRvdXRsaW5lOiAwICFpbXBvcnRhbnQ7XG59XG5cbi5jbC1tb2RhbC1oZWFkZXIge1xuXHRhbGlnbi1pdGVtczogY2VudGVyICFpbXBvcnRhbnQ7XG5cdGRpc3BsYXk6IGZsZXggIWltcG9ydGFudDtcblx0anVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuICFpbXBvcnRhbnQ7XG5cdHBhZGRpbmc6IDIwcHggIWltcG9ydGFudDtcblx0Ym9yZGVyLWJvdHRvbTogMXB4IHNvbGlkICNjNmQyZDk7XG5cdGJvcmRlci10b3AtbGVmdC1yYWRpdXM6IDJweCAhaW1wb3J0YW50O1xuXHRib3JkZXItdG9wLXJpZ2h0LXJhZGl1czogMnB4ICFpbXBvcnRhbnQ7XG59XG5cbi5jbC1tb2RhbC10aXRsZSB7XG5cdGZvbnQtc2l6ZTogMjRweCAhaW1wb3J0YW50O1xuXHRmb250LXdlaWdodDogMTAwICFpbXBvcnRhbnQ7XG5cdGxpbmUtaGVpZ2h0OiAzNnB4ICFpbXBvcnRhbnQ7XG5cdGNvbG9yOiByZ2IoMTAyLCAxMDIsIDEwMik7XG5cdG1hcmdpbjogMCAhaW1wb3J0YW50O1xufVxuXG4uY2wtbW9kYWwtYm9keSB7XG5cdHBvc2l0aW9uOiByZWxhdGl2ZSAhaW1wb3J0YW50O1xuXHQvKiBmbGV4OiAxIDEgYXV0byAhaW1wb3J0YW50OyAqL1xuXHRkaXNwbGF5OiBmbGV4ICFpbXBvcnRhbnQ7XG5cdC8vIGp1c3RpZnktY29udGVudDogZmxleC1lbmQgIWltcG9ydGFudDtcblx0cGFkZGluZzogMjFweCAhaW1wb3J0YW50O1xuXHRhbGlnbi1pdGVtczogY2VudGVyICFpbXBvcnRhbnQ7XG59XG5cbi5jbC1tb2RhbC1mb290ZXIge1xuXHRkaXNwbGF5OiBmbGV4ICFpbXBvcnRhbnQ7XG5cdGFsaWduLWl0ZW1zOiBjZW50ZXIgIWltcG9ydGFudDtcblx0anVzdGlmeS1jb250ZW50OiBmbGV4LWVuZCAhaW1wb3J0YW50O1xuXHRwYWRkaW5nOiAyMHB4ICFpbXBvcnRhbnQ7XG5cdGJvcmRlci10b3A6IDFweCBzb2xpZCAjYzZkMmQ5O1xuXHRib3JkZXItYm90dG9tLXJpZ2h0LXJhZGl1czogMnB4ICFpbXBvcnRhbnQ7XG5cdGJvcmRlci1ib3R0b20tbGVmdC1yYWRpdXM6IDJweCAhaW1wb3J0YW50O1xufVxuXG4uY2xvY2tpZnktY2FuY2VsIHtcblx0Y29sb3I6ICMyMTk2ZjMgIWltcG9ydGFudDtcblx0Jjpob3ZlciB7XG5cdFx0dGV4dC1kZWNvcmF0aW9uOiB1bmRlcmxpbmU7XG5cdH1cbn1cblxuLmNsb2NraWZ5LXNhdmUge1xuXHRjb2xvcjogd2hpdGU7XG5cdGJhY2tncm91bmQtY29sb3I6ICMyMTk2ZjMgIWltcG9ydGFudDtcblx0bWFyZ2luLWxlZnQ6IDMwcHg7XG5cdHBhZGRpbmc6IDEwcHg7XG5cdG1pbi13aWR0aDogNjdweDtcblx0dGV4dC1hbGlnbjogY2VudGVyO1xuXHRib3JkZXItcmFkaXVzOiAycHg7XG5cdCYtLWRpc2FibGVkIHtcblx0XHRvcGFjaXR5OiAwLjY1O1xuXHRcdGN1cnNvcjogZGVmYXVsdCAhaW1wb3J0YW50O1xuXHR9XG59XG5cbmEuY2xvY2tpZnktY2FuY2VsLFxuYS5jbG9ja2lmeS1zYXZlIHtcblx0Y3Vyc29yOiBwb2ludGVyO1xufVxuXG4vKiBDcmVhdGUgYSBjdXN0b20gcmFkaW8gYnV0dG9uICovXG4uY2hlY2ttYXJrIHtcblx0cG9zaXRpb246IGFic29sdXRlICFpbXBvcnRhbnQ7XG5cdHRvcDogMCAhaW1wb3J0YW50O1xuXHRsZWZ0OiAwICFpbXBvcnRhbnQ7XG5cdGhlaWdodDogMjFweCAhaW1wb3J0YW50O1xuXHR3aWR0aDogMjFweCAhaW1wb3J0YW50O1xuXHQvKiBiYWNrZ3JvdW5kLWNvbG9yOiAjZWVlOyAqL1xuXHRib3JkZXI6IDFweCBzb2xpZCBncmF5ICFpbXBvcnRhbnQ7XG5cdGJvcmRlci1yYWRpdXM6IDUwJSAhaW1wb3J0YW50O1xufVxuXG4vKiBPbiBtb3VzZS1vdmVyLCBhZGQgYSBncmV5IGJhY2tncm91bmQgY29sb3IgKi9cbi5jZi1jb250YWluZXI6aG92ZXIgaW5wdXQgfiAuY2hlY2ttYXJrIHtcblx0YmFja2dyb3VuZC1jb2xvcjogI2NjYyAhaW1wb3J0YW50O1xufVxuXG4vKiBXaGVuIHRoZSByYWRpbyBidXR0b24gaXMgY2hlY2tlZCwgYWRkIGEgYmx1ZSBiYWNrZ3JvdW5kICovXG4uY2YtY29udGFpbmVyIGlucHV0OmNoZWNrZWQgfiAuY2hlY2ttYXJrIHtcblx0YmFja2dyb3VuZC1jb2xvcjogIzIxOTZmMyAhaW1wb3J0YW50O1xufVxuXG4vKiBDcmVhdGUgdGhlIGluZGljYXRvciAodGhlIGRvdC9jaXJjbGUgLSBoaWRkZW4gd2hlbiBub3QgY2hlY2tlZCkgKi9cbi5jaGVja21hcms6YWZ0ZXIge1xuXHRjb250ZW50OiAnJyAhaW1wb3J0YW50O1xuXHRwb3NpdGlvbjogYWJzb2x1dGUgIWltcG9ydGFudDtcblx0ZGlzcGxheTogbm9uZSAhaW1wb3J0YW50O1xufVxuXG4vKiBTaG93IHRoZSBpbmRpY2F0b3IgKGRvdC9jaXJjbGUpIHdoZW4gY2hlY2tlZCAqL1xuLmNmLWNvbnRhaW5lciBpbnB1dDpjaGVja2VkIH4gLmNoZWNrbWFyazphZnRlciB7XG5cdGRpc3BsYXk6IGJsb2NrICFpbXBvcnRhbnQ7XG59XG5cbi8qIFN0eWxlIHRoZSBpbmRpY2F0b3IgKGRvdC9jaXJjbGUpICovXG4uY2YtY29udGFpbmVyIC5jaGVja21hcms6YWZ0ZXIge1xuXHR0b3A6IDZweCAhaW1wb3J0YW50O1xuXHRsZWZ0OiA3cHggIWltcG9ydGFudDtcblx0d2lkdGg6IDhweCAhaW1wb3J0YW50O1xuXHRoZWlnaHQ6IDhweCAhaW1wb3J0YW50O1xuXHRib3JkZXItcmFkaXVzOiA1MCUgIWltcG9ydGFudDtcblx0YmFja2dyb3VuZDogd2hpdGUgIWltcG9ydGFudDtcbn1cbiIsIkB1c2UgJ3ZhcmlhYmxlcyc7XG5cbi5yZXF1aXJlZC1maWVsZHMge1xuXHR0ZXh0LWFsaWduOiBjZW50ZXI7XG59XG5cbi5yZXF1aXJlZC1maWVsZHMgYnV0dG9uIHtcblx0d2lkdGg6IDEwNXB4O1xuXHRoZWlnaHQ6IDQ1cHg7XG5cdGJhY2tncm91bmQtY29sb3I6IHZhcmlhYmxlcy4kcmVkO1xuXHRjb2xvcjogI2ZmZmZmZjtcblx0Ym9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRyZWQ7XG5cdHRleHQtdHJhbnNmb3JtOiB1cHBlcmNhc2U7XG5cdGJvcmRlci1yYWRpdXM6IDJweDtcblx0Y3Vyc29yOiBwb2ludGVyO1xufVxuXG4ucmVxdWlyZWQtZmllbGRzIHNwYW4ge1xuXHRkaXNwbGF5OiBibG9jaztcblx0bWFyZ2luOiA1MHB4O1xuXHRmb250LXNpemU6IDE3cHg7XG59XG4iLCJAdXNlICd2YXJpYWJsZXMnO1xuXG4udG9hc3Rlcl9fY29udGFpbmVyIHtcblx0cG9zaXRpb246IGZpeGVkO1xuXHR3aWR0aDogY2FsYygxMDAlIC0gMjVweCk7XG5cdGxlZnQ6IDE1cHg7XG5cdGJvdHRvbTogMTVweDtcblx0ei1pbmRleDogMTExMjtcbn1cbi50b2FzdGVyX19tZXNzYWdlIHtcblx0Ji0tY29udGFpbmVyX3N1Y2Nlc3MsXG5cdCYtLWNvbnRhaW5lcl9pbmZvLFxuXHQmLS1jb250YWluZXJfZXJyb3Ige1xuXHRcdHBhZGRpbmc6IDE1cHg7XG5cdFx0bWFyZ2luLXRvcDogNXB4O1xuXHRcdGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kaW5wdXQtYmFja2dyb3VuZDtcblx0XHRib3JkZXItcmFkaXVzOiAycHg7XG5cdFx0Zm9udC1zaXplOiAxNHB4O1xuXHRcdGxpbmUtaGVpZ2h0OiAxNnB4O1xuXHRcdHBvc2l0aW9uOiByZWxhdGl2ZTtcblx0XHRib3R0b206IDE1cHg7XG5cdFx0bGVmdDogMDtcblx0fVxuXHQmLS1jb250YWluZXJfc3VjY2VzcyB7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogdmFyaWFibGVzLiRncmVlbjtcblx0fVxuXHQmLS1jb250YWluZXJfZXJyb3Ige1xuXHRcdGJhY2tncm91bmQtY29sb3I6IHZhcmlhYmxlcy4kcmVkO1xuXHR9XG5cdCYtLWNvbnRhaW5lcl9pbmZvIHtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJG9yYW5nZTtcblx0fVxufVxuQGtleWZyYW1lcyB0b2FzdGVyLWZhZGVpbiB7XG5cdGZyb20ge1xuXHRcdGJvdHRvbTogMDtcblx0XHRvcGFjaXR5OiAwO1xuXHR9XG5cdHRvIHtcblx0XHRib3R0b206IDE1cHg7XG5cdFx0b3BhY2l0eTogMTtcblx0fVxufVxuQGtleWZyYW1lcyB0b2FzdGVyLWZhZGVvdXQge1xuXHRmcm9tIHtcblx0XHRsZWZ0OiAwO1xuXHRcdG9wYWNpdHk6IDE7XG5cdH1cblx0dG8ge1xuXHRcdGxlZnQ6IDEwMCU7XG5cdFx0b3BhY2l0eTogMDtcblx0fVxufVxuIiwiQHVzZSAndmFyaWFibGVzJztcblxuYm9keS5jbG9ja2lmeS1kYXJrLW1vZGUsXG4uY2xvY2tpZnktZGFyay1tb2RlIHtcblx0YmFja2dyb3VuZC1jb2xvcjogdmFyaWFibGVzLiRiZy0wOTtcblx0LmxvZ28ge1xuXHRcdHdpZHRoOiA5OHB4O1xuXHRcdGJhY2tncm91bmQtaW1hZ2U6IHVybCgnLi4vYXNzZXRzL2ltYWdlcy9jbG9ja2lmeV9sb2dvX2Rhcmsuc3ZnJykgIWltcG9ydGFudDtcblx0XHRiYWNrZ3JvdW5kLXNpemU6IGNvbnRhaW47XG5cdFx0YmFja2dyb3VuZC1yZXBlYXQ6IG5vLXJlcGVhdDtcblx0fVxuXHQvKiBcdC5ob21lX3BhZ2UsXG5cdC5zZXR0aW5nc19wYWdlIHtcblx0XHQuaGVhZGVyIC5sb2dvIHtcblx0XHRcdGJhY2tncm91bmQtaW1hZ2U6IHVybCgnLi4vYXNzZXRzL2ltYWdlcy9jbG9ja2lmeV9sb2dvX2Rhcmsuc3ZnJykgIWltcG9ydGFudDtcblx0XHRcdGJhY2tncm91bmQtc2l6ZTogY29udGFpbjtcblx0XHRcdGJhY2tncm91bmQtcmVwZWF0OiBuby1yZXBlYXQ7XG5cdFx0fVxuXHR9ICovXG5cdC5oZWFkZXJfYW5kX3RpbWVyIHtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGJnLTA5O1xuXHR9XG5cdC5zZXR0aW5nc19wYWdlX19oZWFkZXIge1xuXHRcdGJhY2tncm91bmQtY29sb3I6IHZhcmlhYmxlcy4kYmctMDk7XG5cdH1cblx0LnN0YXJ0LXRpbWVyIHtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGJnLTExO1xuXHRcdGJvcmRlcjogMXB4IHNvbGlkIHZhcmlhYmxlcy4kYmctMTI7XG5cdH1cblx0LnN0YXJ0LXRpbWVyX2Rlc2NyaXB0aW9uX2dyZXkge1xuXHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTA0O1xuXHR9XG5cdC5zdGFydC10aW1lcl9kZXNjcmlwdGlvbiB7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDI7XG5cdH1cblx0LnN0YXJ0LXRpbWVyX2Rlc2NyaXB0aW9uLWlucHV0IHtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGJnLTExO1xuXHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTAyO1xuXHR9XG5cdC5zdGFydC10aW1lcl9kZXNjcmlwdGlvbi1pbnB1dDo6cGxhY2Vob2xkZXIsXG5cdC5zdGFydC10aW1lcl9wbGFjZWhvbGRlciB7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdH1cblxuXHQuZHJvcGRvd24tbWVudSB7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogdmFyaWFibGVzLiRiZy0xMjtcblx0XHRib3gtc2hhZG93OiBub25lO1xuXHR9XG5cdC5kcm9wZG93bi1oZWFkZXIsXG5cdC5kcm9wZG93bi1pdGVtLFxuXHQuZHJvcGRvd24tc3ViaXRlbSB7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdH1cblx0LmRyb3Bkb3duLWRpdmlkZXIge1xuXHRcdGJvcmRlci1ib3R0b206IDFweCBkb3R0ZWQgdmFyaWFibGVzLiRiZy0xMDtcblx0fVxuXHQucmVjdGFuZ2xlIHtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGJnLTEyO1xuXHRcdGJveC1zaGFkb3c6IG5vbmU7XG5cdH1cblx0LnRpbWUtZW50cmllcy1saXN0IHtcblx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJnLTEyO1xuXHR9XG5cdC50aW1lLWVudHJpZXMtbGlzdC10aW1lIHtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGJnLTEyO1xuXHRcdGJvcmRlci1ib3R0b206IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJnLTEyO1xuXHR9XG5cdC50aW1lLWVudHJpZXMtbGlzdC10b3RhbCxcblx0LnRpbWUtZW50cmllcy1saXN0LWRheSB7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdH1cblx0LnRpbWUtZW50cmllcy1saXN0LXRvdGFsLXRpbWUge1xuXHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTAzO1xuXHR9XG5cdC50aW1lLWVudHJ5LFxuXHQudGltZS1lbnRyeS1sb2NrZWQge1xuXHRcdGJhY2tncm91bmQ6IHZhcmlhYmxlcy4kYmctMTE7XG5cdFx0Ym9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRiZy0xMjtcblx0fVxuXHQudGltZS1lbnRyeS0tY29sbGFwc2VkIHtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiAjMzY0NjRmO1xuXHR9XG5cdC50aW1lLWVudHJ5LWdyb3VwLW51bWJlciB7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogIzEyMTkxZDtcblx0XHRjb2xvcjogIzkwYTRhZTtcblx0XHQmOmhvdmVyIHtcblx0XHRcdGJhY2tncm91bmQtY29sb3I6ICMzNzQ3NGY7XG5cdFx0fVxuXHR9XG5cdC53ZWVrLWhlYWRlciB7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kbGlnaHRfdGV4dDtcblx0XHQmLXRvdGFsIHtcblx0XHRcdCYtdGltZSB7XG5cdFx0XHRcdGNvbG9yOiB2YXJpYWJsZXMuJGxpZ2h0X3RleHQ7XG5cdFx0XHR9XG5cdFx0XHQmLWxhYmVsIHtcblx0XHRcdFx0Y29sb3I6ICM5MGE0YWU7XG5cdFx0XHR9XG5cdFx0fVxuXHR9XG5cdC5kZXNjcmlwdGlvbiB7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDI7XG5cdH1cblx0LnRpbWUtZW50cnlfX3Rhc2stbmFtZSxcblx0LnRpbWUtZW50cnlfX2NsaWVudC1uYW1lLFxuXHQudGltZS1lbnRyeV9fcmlnaHQtc2lkZS0tZHVyYXRpb24ge1xuXHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTAzO1xuXHR9XG5cdC5uby1kZXNjcmlwdGlvbiB7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdH1cblx0LmRyb3Bkb3duLWl0ZW06aG92ZXIsXG5cdC5kcm9wZG93bi1zdWJpdGVtOmhvdmVyIHtcblx0XHRiYWNrZ3JvdW5kOiB2YXJpYWJsZXMuJGJnLTEwO1xuXHR9XG5cdC5kdXJhdGlvbixcblx0LmRlc2NyaXB0aW9uLXRleHRhcmVhIHtcblx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJnLTEyO1xuXHRcdGJhY2tncm91bmQtY29sb3I6IHZhcmlhYmxlcy4kYmctMTA7XG5cdH1cblx0LmFudC10aW1lLXBpY2tlci1pbnB1dCB7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogdmFyaWFibGVzLiRiZy0xMDtcblx0XHRjb2xvcjogdmFyaWFibGVzLiRiZy0wMztcblx0fVxuXHQuZHVyYXRpb24tZHVyYXRpb24ge1xuXHRcdGJhY2tncm91bmQtY29sb3I6IHZhcmlhYmxlcy4kYmctMTA7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDM7XG5cdH1cblx0LmR1cmF0aW9uLWxhYmVsIHtcblx0XHRjb2xvcjogdmFyaWFibGVzLiRiZy0wNDtcblx0fVxuXHQuZWRpdC1mb3JtLWRlc2NyaXB0aW9uIHtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGJnLTEwO1xuXHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTAzO1xuXG5cdFx0Jjo6cGxhY2Vob2xkZXIge1xuXHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdFx0fVxuXHR9XG5cblx0dGV4dGFyZWEuY3VzdG9tLWZpZWxkLXRleHQge1xuXHRcdGNvbG9yOiB2YXJpYWJsZXMuJGxpZ2h0X3RleHQ7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogIzI2MzIzODtcblx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJnLTEyO1xuXG5cdFx0Ji1kaXNhYmxlZCB7XG5cdFx0XHRib3JkZXI6IDFweCBzb2xpZCAjMTIxOTFkICFpbXBvcnRhbnQ7XG5cdFx0XHRiYWNrZ3JvdW5kLWNvbG9yOiAjMzY0NjRmICFpbXBvcnRhbnQ7XG5cdFx0XHRjdXJzb3I6IG5vdC1hbGxvd2VkO1xuXHRcdFx0Y29sb3I6ICM5MGE0YWUgIWltcG9ydGFudDtcblx0XHRcdCY6OnBsYWNlaG9sZGVyIHtcblx0XHRcdFx0Y29sb3I6ICM5MGE0YWUgIWltcG9ydGFudDtcblx0XHRcdH1cblx0XHR9XG5cdFx0Jjo6cGxhY2Vob2xkZXIge1xuXHRcdFx0Y29sb3I6ICM2MDdkOGIgIWltcG9ydGFudDtcblx0XHRcdG9wYWNpdHk6IDE7XG5cdFx0fVxuXHR9XG5cblx0LmNsb2NraWZ5LXN3aXRjaC1sYWJlbCB7XG5cdFx0Y29sb3I6ICM4ZmEyYWQgIWltcG9ydGFudDtcblx0fVxuXG5cdGRpdi5jdXN0b20tZmllbGQtaW5uZXItY2hlY2tib3gge1xuXHRcdGJhY2tncm91bmQtY29sb3I6ICMzNjQ2NGYgIWltcG9ydGFudDtcblx0XHQmLWRpc2FibGVkIHtcblx0XHRcdGJvcmRlcjogbm9uZSAhaW1wb3J0YW50O1xuXHRcdFx0YmFja2dyb3VuZC1jb2xvcjogaW5pdGlhbCAhaW1wb3J0YW50O1xuXHRcdH1cblx0fVxuXG5cdC5jbG9ja2lmeS1saW5rLWlucHV0LWRpc2FibGVkLFxuXHQuY3VzdG9tLWZpZWxkLW51bWJlci1kaXNhYmxlZCB7XG5cdFx0Ym9yZGVyOiAxcHggc29saWQgIzEyMTkxZCAhaW1wb3J0YW50O1xuXHRcdGJhY2tncm91bmQtY29sb3I6ICMzNjQ2NGYgIWltcG9ydGFudDtcblx0XHRjdXJzb3I6IG5vdC1hbGxvd2VkO1xuXHRcdGNvbG9yOiAjOTBhNGFlICFpbXBvcnRhbnQ7XG5cdFx0Jjo6cGxhY2Vob2xkZXIge1xuXHRcdFx0Y29sb3I6ICM5MGE0YWUgIWltcG9ydGFudDtcblx0XHR9XG5cdH1cblxuXHQudGFnLWxpc3QtaXRlbS1yb3cge1xuXHRcdGNvbG9yOiB3aGl0ZSAhaW1wb3J0YW50O1xuXHR9XG5cblx0LmN1c3RvbS1maWVsZHMge1xuXHRcdGJhY2tncm91bmQtY29sb3I6ICMzNjQ2NGYgIWltcG9ydGFudDtcblx0fVxuXG5cdC5jdXN0b20tZmllbGQge1xuXHRcdGJhY2tncm91bmQtY29sb3I6IHRyYW5zcGFyZW50ICFpbXBvcnRhbnQ7XG5cdFx0aW5wdXQge1xuXHRcdFx0YmFja2dyb3VuZC1jb2xvcjogIzI2MzIzOCAhaW1wb3J0YW50O1xuXHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kbGlnaHRfdGV4dCAhaW1wb3J0YW50O1xuXHRcdFx0Ym9yZGVyOiAxcHggc29saWQgIzEyMTkxZDtcblx0XHRcdG91dGxpbmU6IG5vbmUgIWltcG9ydGFudDtcblx0XHRcdCY6OnBsYWNlaG9sZGVyIHtcblx0XHRcdFx0Y29sb3I6ICM2MDdkOGIgIWltcG9ydGFudDtcblx0XHRcdFx0b3BhY2l0eTogMTtcblx0XHRcdH1cblx0XHR9XG5cdFx0Ji1kaXNhYmxlZCB7XG5cdFx0XHRib3JkZXI6IG5vbmUgIWltcG9ydGFudDtcblx0XHRcdGJhY2tncm91bmQtY29sb3I6IGluaXRpYWwgIWltcG9ydGFudDtcblx0XHR9XG5cdH1cblxuXHQuZGVzY3JpcHRpb24tdGV4dGFyZWEtcmVxdWlyZWQsXG5cdC5wcm9qZWN0LWxpc3QtYnV0dG9uLXJlcXVpcmVkLFxuXHQudGFnLWxpc3QtYnV0dG9uLXJlcXVpcmVkIHtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGJnLTEwO1xuXHR9XG5cdC5wcm9qZWN0LWxpc3QtYnV0dG9uLFxuXHQudGFnLWxpc3QtYnV0dG9uLFxuXHQuZWRpdC1mb3JtLWNoZWNrYm94LFxuXHQudGFnLWxpc3QtY2hlY2tib3gsXG5cdC5kZWZhdWx0LXByb2plY3QtY2hlY2tib3gsXG5cdC5kYXJrLW1vZGVfX2NoZWNrYm94LFxuXHQuc2V0dGluZ3NfX3NlbmQtZXJyb3JzX19jaGVja2JveCxcblx0LnNldHRpbmdzX19hdXRvX3N0YXJ0X29uX2Jyb3dzZXJfc3RhcnRfX2NoZWNrYm94LFxuXHQuc2V0dGluZ3NfX2F1dG9fc3RvcF9vbl9icm93c2VyX2Nsb3NlX19jaGVja2JveCxcblx0LnNldHRpbmdzX19yZW1pbmRlcl9fc2VjdGlvbl9fY2hlY2tib3gsXG5cdC5zZXR0aW5nc19fY29udGV4dF9tZW51X19zZWN0aW9uX19jaGVja2JveCxcblx0LnNldHRpbmdzX19pZGxlLWRldGVjdGlvbl9fY2hlY2tib3gsXG5cdC5zZXR0aW5nc19fc3RvcF90aW1lcl9fc2VjdGlvbl9fY2hlY2tib3gsXG5cdC5wb21vZG9yb19fY2hlY2tib3gsXG5cdC5jcmVhdGUtcHJvamVjdF9fY2hlY2tib3gge1xuXHRcdGJhY2tncm91bmQtY29sb3I6IHZhcmlhYmxlcy4kYmctMTA7XG5cdFx0Ym9yZGVyOiAxcHggc29saWQgIzEyMTkxZDtcblx0XHRmbGV4LXNocmluazogMDtcblx0XHQmLWRpc2FibGVkIHtcblx0XHRcdGJhY2tncm91bmQtY29sb3I6IGluaXRpYWwgIWltcG9ydGFudDtcblx0XHRcdGJvcmRlcjogMXB4IHNvbGlkICMxMjE5MWQ7XG5cdFx0XHQudGFnLWxpc3Qtc2VsZWN0ZWQtaXRlbSxcblx0XHRcdC50YWctbGlzdC1hZGQge1xuXHRcdFx0XHRjb2xvcjogIzkwYTRhZTtcblx0XHRcdH1cblx0XHR9XG5cdH1cblx0LnRhZy1saXN0LWFkZCxcblx0LmVkaXQtZm9ybS1iaWxsYWJsZSB7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kbGlnaHRfdGV4dCAhaW1wb3J0YW50O1xuXHR9XG5cdC5jaGVja2VkIHtcblx0XHR3aWR0aDogMThweDtcblx0XHRoZWlnaHQ6IDE4cHg7XG5cdFx0YmFja2dyb3VuZDogdmFyaWFibGVzLiRibHVlO1xuXHRcdGJvcmRlcjogbm9uZTtcblx0XHRpbWcge1xuXHRcdFx0bWFyZ2luLXRvcDogM3B4O1xuXHRcdFx0bWFyZ2luLWxlZnQ6IDJweDtcblx0XHR9XG5cdH1cblx0LmRlbGV0ZS1lbnRyeS1jb25maXJtYXRpb24tZGlhbG9nIHtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGJnLTEwO1xuXHRcdCYtb3BlbiB7XG5cdFx0XHRiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDAsIDAsIDAsIDAuOCk7XG5cdFx0fVxuXHRcdCZfX3F1ZXN0aW9uIHtcblx0XHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTA0O1xuXHRcdH1cblx0fVxuXHQucHJvamVjdC1saXN0LWRyb3Bkb3duLFxuXHQudGFnLWxpc3QtZHJvcGRvd24ge1xuXHRcdGJhY2tncm91bmQ6IHZhcmlhYmxlcy4kYmctMTI7XG5cdFx0Ym94LXNoYWRvdzogbm9uZTtcblx0fVxuXHQucHJvamVjdC1saXN0LWlucHV0LFxuXHQudGFnLWxpc3QtaW5wdXQge1xuXHRcdGJhY2tncm91bmQ6IHZhcmlhYmxlcy4kYmctMTIgIWltcG9ydGFudDtcblx0XHRpbnB1dCB7XG5cdFx0XHRiYWNrZ3JvdW5kOiB2YXJpYWJsZXMuJGJnLTEwICFpbXBvcnRhbnQ7XG5cdFx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJnLTEyO1xuXHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cblx0XHRcdCY6OnBsYWNlaG9sZGVyIHtcblx0XHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdFx0XHR9XG5cdFx0fVxuXHR9XG5cdC5wcm9qZWN0LWxpc3QtY2xpZW50IHtcblx0XHRjb2xvcjogdmFyaWFibGVzLiRiZy0wNDtcblx0XHRib3JkZXItdG9wOiAxcHggZG90dGVkIHZhcmlhYmxlcy4kYmctMTA7XG5cdH1cblx0LnRhZy1saXN0LWl0ZW0sXG5cdC50YWctbGlzdC1sb2FkIHtcblx0XHRjb2xvcjogdmFyaWFibGVzLiRiZy0wNDtcblx0fVxuXHRociB7XG5cdFx0Ym9yZGVyLWJvdHRvbTogMXB4IGRvdHRlZCB2YXJpYWJsZXMuJGJnLTEyO1xuXHR9XG5cdC51c2VyLXNldHRpbmdzOmxhc3QtY2hpbGQge1xuXHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTA0O1xuXHR9XG5cdC50aW1lLWVudHJpZXMtbGlzdC1ub3Qtc3luY2VkIHtcblx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJnLTEyO1xuXHRcdGJvcmRlci1yYWRpdXM6IDJweDtcblx0fVxuXHQudGltZS1lbnRyeS1ub3Qtc3luY2VkIHtcblx0XHRiYWNrZ3JvdW5kOiB2YXJpYWJsZXMuJGJnLTEwO1xuXHRcdGJvcmRlci1ib3R0b206IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJnLTEyO1xuXHRcdHNwYW4ge1xuXHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdFx0fVxuXHR9XG5cdC51c2VyLXNldHRpbmdzIHtcblx0XHRib3JkZXItdG9wOiAxcHggZG90dGVkIHZhcmlhYmxlcy4kYmctMTI7XG5cdFx0Ym9yZGVyLWJvdHRvbTogMXB4IGRvdHRlZCB2YXJpYWJsZXMuJGJnLTEyO1xuXHRcdHNwYW4ge1xuXHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdFx0fVxuXHR9XG5cdC53b3Jrc3BhY2UtbGlzdC10aXRsZSxcblx0LmRlZmF1bHQtcHJvamVjdC10aXRsZSxcblx0LmRhcmstbW9kZV9fdGl0bGUsXG5cdC5zZXR0aW5nc19fc2VuZC1lcnJvcnNfX3RpdGxlLFxuXHQuc2V0dGluZ3NfX3NlbmQtZXJyb3JzX190aXRsZS0tc2hvcnRjdXQsXG5cdC5zZXR0aW5nc19fYXV0b19zdGFydF9vbl9icm93c2VyX3N0YXJ0X190aXRsZSxcblx0LnNldHRpbmdzX19hdXRvX3N0b3Bfb25fYnJvd3Nlcl9jbG9zZV9fdGl0bGUsXG5cdC5wb21vZG9yb19fdGl0bGUge1xuXHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTAyO1xuXHR9XG5cdC53b3Jrc3BhY2UtbGlzdC1zZWxlY3Rpb24ge1xuXHRcdGJhY2tncm91bmQ6IHZhcmlhYmxlcy4kYmctMTA7XG5cdFx0Ym9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRiZy0xMjtcblx0fVxuXHQud29ya3NwYWNlLWxpc3QtZGVmYXVsdCB7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdH1cblx0LnNldHRpbmdzX19yZW1pbmRlcixcblx0LnNldHRpbmdzX19zdG9wX3RpbWVyIHtcblx0XHRiYWNrZ3JvdW5kOiB2YXJpYWJsZXMuJGJnLTEyO1xuXHR9XG5cblx0LnNldHRpbmdzX19zdG9wX3RpbWVyIHAge1xuXHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTA0O1xuXHR9XG5cblx0LnNldHRpbmdzX19yZW1pbmRlcl9fd2Vla19fZGF5IHtcblx0XHRiYWNrZ3JvdW5kOiB2YXJpYWJsZXMuJGJnLTEwO1xuXHRcdGJvcmRlcjogMXB4IHNvbGlkIHZhcmlhYmxlcy4kYmctMTA7XG5cdFx0c3BhbiB7XG5cdFx0XHRjb2xvcjogdmFyaWFibGVzLiRiZy0wNDtcblx0XHR9XG5cdH1cblx0LmRheS1hY3RpdmUge1xuXHRcdGJhY2tncm91bmQ6IHZhcmlhYmxlcy4kYmx1ZTtcblx0XHRib3JkZXI6IDFweCBzb2xpZCAjMDNhOWY0O1xuXHRcdHNwYW4ge1xuXHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kaW5wdXQtYmFja2dyb3VuZDtcblx0XHR9XG5cdH1cblx0LnNldHRpbmdzX19yZW1pbmRlcl9fdGltZXMtLWZyb20sXG5cdC5zZXR0aW5nc19fcmVtaW5kZXJfX3RpbWVzLS10byxcblx0LnN0b3BfdGltZXJfX3RpbWVzLS1waWNrZXIge1xuXHRcdHAge1xuXHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdFx0fVxuXHR9XG5cdC5zZXR0aW5nc19fcmVtaW5kZXJfX3RpbWVfcGlja2VyLFxuXHQuc2V0dGluZ3NfX3N0b3BfdGltZXJfX3RpbWVfcGlja2VyIHtcblx0XHQuYW50LXRpbWUtcGlja2VyLWlucHV0IHtcblx0XHRcdGJvcmRlcjogMXB4IHNvbGlkIHZhcmlhYmxlcy4kYmctMTI7XG5cdFx0fVxuXHR9XG5cdC5zZXR0aW5nc19fcmVtaW5kZXJfX3RpbWVzLS1taW51dGVzX3NpbmNlX2xhc3RfZW50cnkge1xuXHRcdGlucHV0IHtcblx0XHRcdGJhY2tncm91bmQ6IHZhcmlhYmxlcy4kYmctMTA7XG5cdFx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJnLTEyO1xuXHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDI7XG5cdFx0fVxuXHRcdHAge1xuXHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdFx0fVxuXHR9XG5cdC5zZXR0aW5nc19faWRsZS1kZXRlY3Rpb25fX2JveCB7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogdmFyaWFibGVzLiRiZy0xMjtcblx0fVxuXHQuc2V0dGluZ3NfX2lkbGUtZGV0ZWN0aW9uX19ib3hfX2NvbnRlbnQge1xuXHRcdHAge1xuXHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdFx0fVxuXHRcdGlucHV0IHtcblx0XHRcdGJhY2tncm91bmQ6IHZhcmlhYmxlcy4kYmctMTA7XG5cdFx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJnLTEyO1xuXHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDI7XG5cdFx0fVxuXHR9XG5cdC5wb21vZG9yb19fY29udGVudCB7XG5cdFx0YmFja2dyb3VuZDogdmFyaWFibGVzLiRiZy0xMjtcblx0fVxuXHQucG9tb2Rvcm9fX2JvcmRlciB7XG5cdFx0Ym9yZGVyLWJvdHRvbTogMXB4IHNvbGlkIHZhcmlhYmxlcy4kYmctMTA7XG5cdH1cblx0LnBvbW9kb3JvX19zd2l0Y2gge1xuXHRcdGJhY2tncm91bmQtY29sb3I6IHZhcmlhYmxlcy4kYmctMTA7XG5cdFx0Ym9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRiZy0xMjtcblx0XHQmOjphZnRlciB7XG5cdFx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGJnLTA0O1xuXHRcdH1cblx0fVxuXHQuYW50LXN3aXRjaC1jaGVja2VkIHtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGJsdWU7XG5cblx0XHQmOjphZnRlciB7XG5cdFx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGlucHV0LWJhY2tncm91bmQ7XG5cdFx0fVxuXHR9XG5cdC5wb21vZG9yb19fYm94X19jb250ZW50IHtcblx0XHRwIHtcblx0XHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTA0O1xuXHRcdH1cblx0XHRpbnB1dCB7XG5cdFx0XHRiYWNrZ3JvdW5kOiB2YXJpYWJsZXMuJGJnLTEwO1xuXHRcdFx0Ym9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRiZy0xMjtcblx0XHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTAyO1xuXHRcdH1cblx0fVxuXHQuZGVmYXVsdC1wcm9qZWN0X19wcm9qZWN0LWxpc3Qge1xuXHRcdGJhY2tncm91bmQ6IHZhcmlhYmxlcy4kYmctMTI7XG5cdH1cblx0LnByb2plY3QtbGlzdC1hcnJvdyxcblx0LnRhZy1saXN0LWFycm93IHtcblx0XHR3aWR0aDogMTBweDtcblx0XHRoZWlnaHQ6IDVweDtcblx0XHRjb250ZW50OiB1cmwoJy4uL2Fzc2V0cy9pbWFnZXMvYXJyb3ctZGFyay1tb2RlLnBuZycpO1xuXHR9XG5cdC5wcm9qZWN0LWxpc3QtYXJyb3ctdXAsXG5cdC50YWctbGlzdC1hcnJvdy11cCB7XG5cdFx0d2lkdGg6IDEwcHg7XG5cdFx0aGVpZ2h0OiA1cHg7XG5cdFx0Y29udGVudDogdXJsKCcuLi9hc3NldHMvaW1hZ2VzL2Fycm93LWRhcmstbW9kZS11cC5wbmcnKTtcblx0fVxuXHQuZHJvcGRvd24taXRlbTpob3Zlcixcblx0LmRyb3Bkb3duLXN1Yml0ZW06aG92ZXIge1xuXHRcdGJhY2tncm91bmQ6IHZhcmlhYmxlcy4kYmctMTA7XG5cdH1cblx0LndvcmtzcGFjZS1saXN0LWl0ZW06aG92ZXIge1xuXHRcdGJhY2tncm91bmQtY29sb3I6IHZhcmlhYmxlcy4kYmctMTA7XG5cdH1cblx0LndvcmtzcGFjZS1saXN0LWRyb3Bkb3duIHtcblx0XHRiYWNrZ3JvdW5kOiB2YXJpYWJsZXMuJGJnLTEyO1xuXHRcdGJveC1zaGFkb3c6IDAgNXB4IDdweCAjMDAwO1xuXHR9XG5cdC53b3Jrc3BhY2UtbGlzdC1pdGVtX19uYW1lIHtcblx0XHRjb2xvcjogdmFyaWFibGVzLiRiZy0wNDtcblx0fVxuXHQuZHVyYXRpb24tZGl2aWRlciB7XG5cdFx0Ym9yZGVyLWxlZnQ6IDFweCBkb3R0ZWQgdmFyaWFibGVzLiRiZy0xMjtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGJnLTEyO1xuXHR9XG5cdHVsLnByb2plY3QtaXRlbTpob3ZlciB7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogdmFyaWFibGVzLiRiZy0xMDtcblx0fVxuXHRsaS5wcm9qZWN0LWl0ZW0tbmFtZSB7XG5cdFx0Y29sb3I6IHdoaXRlO1xuXHR9XG5cdC5wcm9qZWN0LWxpc3QtbmFtZSB7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdH1cblx0LnByb2plY3QtbmFtZSB7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdH1cblx0LnRhc2staXRlbSB7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogdmFyaWFibGVzLiRiZy0xMDtcblx0XHQmOmhvdmVyIHtcblx0XHRcdGJhY2tncm91bmQtY29sb3I6IHZhcmlhYmxlcy4kYmctMDk7XG5cdFx0fVxuXHR9XG5cdC50YWctbGlzdC1pdGVtIHtcblx0XHRjb2xvcjogdmFyaWFibGVzLiRiZy0wNDtcblx0XHQmLXJvdzpob3ZlciB7XG5cdFx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGJnLTEwO1xuXHRcdH1cblx0fVxuXHQudGFnLWxpc3Qtc2VsZWN0ZWQtaXRlbSB7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDM7XG5cdH1cblxuXHQucHJvamVjdHMtbGlzdF9fY3JlYXRlLXRhc2sge1xuXHRcdGJhY2tncm91bmQtY29sb3I6IHZhcmlhYmxlcy4kYmctMTA7XG5cdH1cblx0LnByb2plY3RzLWxpc3RfX2NyZWF0ZS1wcm9qZWN0LFxuXHQudGFnLWxpc3RfX2NyZWF0ZS10YWcsXG5cdC5jbGllbnQtbGlzdF9fY3JlYXRlLWNsaWVudCxcblx0LmNsaWVudC1saXN0LWRyb3Bkb3duIHtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGJnLTEyO1xuXHRcdGJveC1zaGFkb3c6IG5vbmU7XG5cdH1cblxuXHQuY3JlYXRlLXByb2plY3QsXG5cdC5jcmVhdGUtdGFzayB7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogdmFyaWFibGVzLiRiZy0wOTtcblxuXHRcdCZfX3RpdGxlIHtcblx0XHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTAzO1xuXHRcdH1cblx0fVxuXG5cdC5jcmVhdGUtcHJvamVjdF9fcHJvamVjdC1uYW1lLFxuXHQuY3JlYXRlLXRhc2tfX3Rhc2stbmFtZSB7XG5cdFx0Ym9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRiZy0xMjtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGJnLTEwO1xuXHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTAzO1xuXHRcdCY6OnBsYWNlaG9sZGVyIHtcblx0XHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTA0O1xuXHRcdH1cblx0XHQmOmZvY3VzIHtcblx0XHRcdG91dGxpbmU6IG5vbmU7XG5cdFx0XHRib3JkZXI6IDJweCBzb2xpZCAjMGYzYmViO1xuXHRcdFx0Ym9yZGVyLXJhZGl1czogNXB4O1xuXHRcdH1cblx0fVxuXHQuY29sb3ItcGlja2VyX190aXRsZSxcblx0LmNyZWF0ZS1wcm9qZWN0X19iaWxsYWJsZS10aXRsZSxcblx0LmNyZWF0ZS1wcm9qZWN0X19wdWJsaWMtdGl0bGUge1xuXHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTA0O1xuXHR9XG5cdC5jcmVhdGUtcHJvamVjdF9fZGl2aWRlciB7XG5cdFx0Ym9yZGVyLWJvdHRvbTogMXB4IGRvdHRlZCB2YXJpYWJsZXMuJGJnLTEyO1xuXHR9XG5cdC5jbGllbnQtbGlzdC1idXR0b24ge1xuXHRcdGJvcmRlcjogMXB4IHNvbGlkIHZhcmlhYmxlcy4kYmctMTI7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogdmFyaWFibGVzLiRiZy0xMDtcblx0fVxuXHQuY2xpZW50LWxpc3QtbmFtZSB7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdH1cblx0LmNsaWVudC1saXN0LWFycm93IHtcblx0XHRjb250ZW50OiB1cmwoJy9hc3NldHMvaW1hZ2VzL2Fycm93LWRhcmstbW9kZS5wbmcnKTtcblx0fVxuXHQuY2xpZW50LWxpc3QtaW5wdXQge1xuXHRcdGJhY2tncm91bmQ6IHZhcmlhYmxlcy4kYmctMTI7XG5cdH1cblx0LmNsaWVudC1saXN0LWZpbHRlciB7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogdmFyaWFibGVzLiRiZy0xMDtcblx0XHRib3JkZXI6IG5vbmU7XG5cdFx0Jjo6cGxhY2Vob2xkZXIge1xuXHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDM7XG5cdFx0fVxuXHR9XG5cdC5jbGllbnQtbGlzdC1jbGllbnQge1xuXHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTA0O1xuXHR9XG5cdC5jbGllbnQtbGlzdF9fY3JlYXRlLWZvcm0ge1xuXHRcdGJhY2tncm91bmQtY29sb3I6IHZhcmlhYmxlcy4kYmctMDk7XG5cdFx0Ji0tb3BlbiB7XG5cdFx0XHRiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDAsIDAsIDAsIDAuNSk7XG5cdFx0fVxuXHRcdCYtLWRpdmlkZXIge1xuXHRcdFx0Ym9yZGVyLWJvdHRvbTogMXB4IGRvdHRlZCB2YXJpYWJsZXMuJGJnLTEyO1xuXHRcdH1cblx0XHQmLS10aXRsZSB7XG5cdFx0XHRjb2xvcjogdmFyaWFibGVzLiRiZy0wMztcblx0XHR9XG5cdFx0Ji0tY2xpZW50LW5hbWUge1xuXHRcdFx0Ym9yZGVyOiAxcHggc29saWQgdmFyaWFibGVzLiRiZy0xMjtcblx0XHRcdGJhY2tncm91bmQtY29sb3I6IHZhcmlhYmxlcy4kYmctMTA7XG5cdFx0XHRjb2xvcjogdmFyaWFibGVzLiRiZy0wMztcblx0XHRcdCY6OnBsYWNlaG9sZGVyIHtcblx0XHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDQ7XG5cdFx0XHR9XG5cdFx0fVxuXHR9XG5cdC50YWctbGlzdC0tbm90X3RhZ3Mge1xuXHRcdGNvbG9yOiAjOGM5ZmE5O1xuXHR9XG5cdC50YWctbGlzdF9fY3JlYXRlLWZvcm0sXG5cdC5wb3BwdXAtbW9kYWwge1xuXHRcdGJhY2tncm91bmQtY29sb3I6IHZhcmlhYmxlcy4kYmctMDk7XG5cdFx0Ji0tb3BlbiB7XG5cdFx0XHRiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDAsIDAsIDAsIDAuNSk7XG5cdFx0fVxuXHRcdCYtLWRpdmlkZXIge1xuXHRcdFx0Ym9yZGVyLWJvdHRvbTogMXB4IGRvdHRlZCB2YXJpYWJsZXMuJGJnLTEyO1xuXHRcdH1cblx0XHQmLS10aXRsZSxcblx0XHRwIHtcblx0XHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTAzO1xuXHRcdH1cblx0XHQmLS10YWctbmFtZSB7XG5cdFx0XHRib3JkZXI6IDFweCBzb2xpZCB2YXJpYWJsZXMuJGJnLTEyO1xuXHRcdFx0YmFja2dyb3VuZC1jb2xvcjogdmFyaWFibGVzLiRiZy0xMDtcblx0XHRcdGNvbG9yOiB2YXJpYWJsZXMuJGJnLTAzO1xuXHRcdFx0Jjo6cGxhY2Vob2xkZXIge1xuXHRcdFx0XHRjb2xvcjogdmFyaWFibGVzLiRiZy0wNDtcblx0XHRcdH1cblx0XHR9XG5cdH1cblxuXHQuY2xvY2tpZnktbW9kYWwtY29udGVudCB7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogIzM3NDc0Zjtcblx0XHRib3JkZXI6IG5vbmU7XG5cdFx0Ym94LXNoYWRvdzogMHB4IDRweCA0cHggcmdiYSgwLCAwLCAwLCAwLjI1KTtcblx0XHQuY2wtbW9kYWwtdGl0bGUsXG5cdFx0LmN1c3RvbS1maWVsZC1saW5rLWxhYmVsIHtcblx0XHRcdGNvbG9yOiB2YXJpYWJsZXMuJGxpZ2h0X3RleHQ7XG5cdFx0fVxuXHRcdC5jdXN0b20tZmllbGQtbGluayB7XG5cdFx0XHRiYWNrZ3JvdW5kLWNvbG9yOiAjMjYzMjM4O1xuXHRcdFx0Y29sb3I6IHZhcmlhYmxlcy4kbGlnaHRfdGV4dDtcblx0XHR9XG5cdFx0LmNsLWNsb3NlIHtcblx0XHRcdGJhY2tncm91bmQ6IG5vbmU7XG5cdFx0XHQuY2xvY2tpZnktY2xvc2Uge1xuXHRcdFx0XHRiYWNrZ3JvdW5kOiBub25lO1xuXHRcdFx0fVxuXHRcdH1cblx0XHQuY2wtbW9kYWwtaGVhZGVyIHtcblx0XHRcdGJvcmRlci1ib3R0b206IDFweCBkb3R0ZWQgIzEyMTkxZDtcblx0XHR9XG5cdFx0LmNsLW1vZGFsLWZvb3RlciB7XG5cdFx0XHRib3JkZXItdG9wOiAxcHggZG90dGVkICMxMjE5MWQ7XG5cdFx0fVxuXHR9XG5cblx0Ly8gLnRhZy1saXN0LXNlbGVjdGVkIHtcblx0Ly8gICBiYWNrZ3JvdW5kLWNvbG9yOiB2YXJpYWJsZXMuJGJnLTEyO1xuXHQvLyB9XG5cdC50YWctbGlzdC1pdGVtLS1jb21tYSB7XG5cdFx0Y29sb3I6IHdoaXRlO1xuXHR9XG5cdC5hcHAtdmVyc2lvbiB7XG5cdFx0Y29sb3I6IHZhcmlhYmxlcy4kYmctMDM7XG5cdH1cblx0LmNsb2NraWZ5LWVycm9yIHtcblx0XHRjb2xvcjogcmVkO1xuXHRcdGZvbnQtc2l6ZTogMTRweDtcblx0fVxuXHQubG9hZGluZy1lbnRyaWVzIHtcblx0XHRjb2xvcjogdmFyaWFibGVzLiRsaWdodF90ZXh0O1xuXHR9XG5cblx0LmF1dG9jb21wbGV0ZS1kcm9wZG93bi1pdGVtIHtcblx0XHRjb2xvcjogIzkwYTRhZTtcblx0XHRiYWNrZ3JvdW5kLWNvbG9yOiAjMWQyNzJjO1xuXHRcdCY6aG92ZXIge1xuXHRcdFx0YmFja2dyb3VuZC1jb2xvcjogIzI2MzIzODtcblx0XHR9XG5cdFx0Jl9fdGFnIHtcblx0XHRcdGNvbG9yOiAjOTBhNGFlO1xuXHRcdFx0YmFja2dyb3VuZDogIzEyMTkxZDtcblx0XHRcdCY6aG92ZXIge1xuXHRcdFx0XHRiYWNrZ3JvdW5kOiAjMzc0NzRmO1xuXHRcdFx0fVxuXHRcdH1cblx0fVxuXHQucmVhY3QtYXV0b2NvbXBsZXRlID4gZGl2IHtcblx0XHRiYWNrZ3JvdW5kOiAjMWQyNzJjICFpbXBvcnRhbnQ7XG5cdH1cblxuXHQuZWRpdC1mb3JtX19icmVhay1sYWJlbCB7XG5cdFx0YmFja2dyb3VuZDogdmFyaWFibGVzLiRiZy0xMDtcblx0XHRjb2xvcjogdmFyaWFibGVzLiRiZy0wMztcblx0fVxuXHQmLmNsb2NraWZ5LWludGVncmF0aW9uLXBvcHVwIHtcblx0XHRjb2xvcjogdmFyaWFibGVzLiRsaWdodF90ZXh0O1xuXHR9XG5cblx0ZGl2LmN1c3RvbS1maWVsZC10YSB7XG5cdFx0YmFja2dyb3VuZC1jb2xvcjogdmFyaWFibGVzLiRiZy0wOSAhaW1wb3J0YW50O1xuXHR9XG5cblx0LmNsb2NraWZ5LW1hbnVhbC1lbnRyeS1oZWFkZXItdGV4dCB7XG5cdFx0Y29sb3I6ICNmNGY0ZjQ7XG5cdH1cblxuXHQubm90aWZpY2F0aW9uIHtcblx0XHQmIC5ub3RpZmljYXRpb24tdGl0bGUge1xuXHRcdFx0Y29sb3I6ICNjNmQyZDkgIWltcG9ydGFudDtcblx0XHR9XG5cblx0XHQmIC5ub3RpZmljYXRpb24tbWVzc2FnZSB7XG5cdFx0XHRjb2xvcjogI2M2ZDJkOSAhaW1wb3J0YW50O1xuXHRcdH1cblxuXHRcdCY6aG92ZXIge1xuXHRcdFx0YmFja2dyb3VuZC1jb2xvcjogIzI2MzIzOCAhaW1wb3J0YW50O1xuXHRcdH1cblx0fVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ== */
    </style>
    <style id="_goober">
    .go3176171171 {
        color: #000000;
        line-height: normal;
    }

    .go3176171171 p {
        margin: 0px;
    }

    .go3176171171 span {
        display: inline;
    }

    .go3176171171 ol,
    .go3176171171 ul {
        padding: 0 0 0 48px;
        margin: 0;
    }

    .go3176171171 ul {
        list-style-type: disc;
    }

    .go3176171171 li {
        line-height: 18px;
    }

    .go3176171171 a {
        color: #0066cc;
        text-decoration: underline;
        border-bottom: none;
    }

    .go2226349200 {
        margin-top: var(--safe-area-inset-top, env(safe-area-inset-top));
        margin-bottom: var(--safe-area-inset-bottom, env(safe-area-inset-bottom));
        margin-left: var(--safe-area-inset-left, env(safe-area-inset-left));
        margin-right: var(--safe-area-inset-right, env(safe-area-inset-right));
    }

    .go4163827588 {
        margin-top: 47px;
        margin-bottom: 34px;
        margin-left: 0;
        margin-right: 0;
    }

    .go1596356512>div {
        padding-bottom: 8px;
        padding-top: 8px;
    }

    .go681896951 {
        cursor: pointer;
    }

    .go681896951 * {
        cursor: pointer;
    }

    .go2324193863.go2324193863.go2324193863:focus-visible {
        outline-width: 2px;
        outline-style: auto;
        outline-color: #1C65AD;
        outline-offset: 0;
    }

    .go1102772938.go1102772938.go1102772938 [data-testid='form-row'] {
        margin-bottom: calc((1 - 1) * 1%);
    }

    .go1272136950.go1272136950.go1272136950::before {
        content: '';
        background-color: rgba(20, 20, 20, 0.5);
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        position: fixed;
        z-index: 90000;
        opacity: 1;
    }

    .go3754826361.go3754826361.go3754826361::before {
        content: '';
        height: 100%;
        background-color: #FFFFFF;
        top: -50%;
        width: 100%;
        position: absolute;
    }

    .go249761392.go249761392.go249761392::before {
        content: '';
        display: block;
        min-height: 0px;
        width: 100%;
    }

    .go249761392.go249761392.go249761392::after {
        content: '';
        display: block;
        min-height: 0px;
        width: 100%;
    }

    .go4255485812.go4255485812.go4255485812:focus-visible {
        outline-width: 2px;
        outline-style: auto;
        outline-color: #0064CD;
        outline-offset: 0;
    }

    .go3279073480.go3279073480.go3279073480 [href]:focus-visible {
        outline-width: 2px;
        outline-style: auto;
        outline-color: #0064CD;
    }

    .go1080389466.go1080389466.go1080389466::placeholder {
        color: #767676;
        font-family: 'brandon-grotesque', Geneva, Tahoma, Verdana, sans-serif;
        font-size: 16px;
        font-weight: 400;
        letter-spacing: 0px;
    }

    .go1080389466.go1080389466.go1080389466::-moz-placeholder {
        line-height: 50px;
    }

    .go1080389466.go1080389466.go1080389466:hover {
        border-color: #000000 !important;
    }

    .go1080389466.go1080389466.go1080389466:focus-visible {
        outline-width: 2px;
        outline-style: auto;
        outline-color: #000000;
        outline-offset: 0;
    }

    .go300628013.go300628013.go300628013:focus-visible {
        outline-width: 2px;
        outline-style: auto;
        outline-color: #000000;
        outline-offset: 0;
    }
    </style>
    <link rel="dns-prefetch preconnect" href="https://cdn.shopify.com" crossorigin="">
    <style>
    html.Rise-popup-opened,
    body.Rise-popup-opened {
        overflow: hidden !important;
        width: 100%;
    }

    .Rise-popup {
        position: fixed;
        top: 20px;
        bottom: 20px;
        left: 20px;
        right: 20px;
        width: calc(100% - 40px);
        height: calc(100% - 40px);
        margin: auto;
        overflow: hidden;
        box-shadow: 0px 0px 80px 0px rgba(0, 0, 0, 0.22);
        pointer-events: none;
        opacity: 0;
        transform: scale(0);
        transform-origin: bottom;
        transition: all 0.3s;
        border-radius: 10px;
        z-index: -999;
        -webkit-overflow-scrolling: touch;
    }

    @media (max-width: 460px) {
        .Rise-popup {
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
            max-width: unset;
            max-height: unset;
            border-radius: 0;
        }
    }

    .Rise-popup.open {
        z-index: 2147483647;
        pointer-events: all;
        opacity: 1;
        transform: scale(1);
    }

    .Rise-popup .Rise-popup-close-button {
        background-color: unset;
        background-image: url(https://assets.rise-ai.com/static/3c5f3083e19b40e9a4b8750b4e292998a629107af12d4c4e9428093279dea76f.png);
        background-repeat: no-repeat;
        background-position: center;
        background-size: 14px;
        padding: 16px;
        border-radius: 3px;
        transition: all 0.2s;
        position: fixed;
        right: 15px;
        top: 15px;
        cursor: pointer;
        border: 0;
        outline: none;
        z-index: 2147483647;
    }

    @media (max-width: 460px) {
        .Rise-popup .Rise-popup-close-button {
            right: 5px;
            top: 5px;
        }
    }

    .Rise-popup .Rise-popup-close-button.Rise-popup-close-button--light {
        background-image: url(https://assets.rise-ai.com/static/4b4ebf85a9424d43a6b0bd6ce2143d7d.png);
    }

    @media (min-width: 40em) {
        .Rise-popup .Rise-popup-close-button {
            background-size: 18px;
            padding: 18px;
        }
    }

    .Rise-popup .Rise-popup-close-button:hover {
        background-color: rgba(209, 209, 209, 0.5);
    }

    .Rise-popup iframe {
        border: none;
        outline: 0;
        height: 100%;
        width: 100%;
        display: none;
        overflow-y: scroll;
        -webkit-overflow-scrolling: touch;
    }

    .Rise-popup:not(.open) iframe {
        display: none !important;
    }

    .Rise-popup .Rise-popup-spinner {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .Rise-popup .Rise-popup-spinner>svg {
        animation: spinner 500ms linear infinite;
        height: 40px;
        width: 40px;
    }

    @-webkit-keyframes spinner {
        to {
            transform: rotate(360deg);
        }
    }

    @keyframes spinner {
        to {
            transform: rotate(360deg);
        }
    }

    .Rise-popup-backdrop {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
        opacity: 0;
        transition: all 0.3s;
        z-index: -999;
    }

    .Rise-popup-backdrop.show {
        z-index: 2147483647;
        pointer-events: all;
        opacity: 1;
        background: rgba(0, 0, 0, 0.13);
    }
    </style>
    <style>
    .Rise-page {
        height: 400px;
        position: relative;
    }

    .Rise-page iframe {
        border: none;
        outline: 0;
        height: 100%;
        width: 100%;
        display: none;
    }

    .Rise-page .Rise-page-spinner {
        position: absolute;
        left: 50%;
        top: 20px;
        transform: translate(-50%, 0);
    }

    .Rise-page .Rise-page-spinner>svg {
        animation: spinner 500ms linear infinite;
        height: 60px;
        width: 60px;
    }

    @-webkit-keyframes spinner {
        to {
            transform: rotate(360deg);
        }
    }

    @keyframes spinner {
        to {
            transform: rotate(360deg);
        }
    }
    </style>
    <style>
    html.Rise-popup-opened,
    body.Rise-popup-opened {
        overflow: hidden !important;
        width: 100%;
    }

    .Rise-popup {
        position: fixed;
        top: 20px;
        bottom: 20px;
        left: 20px;
        right: 20px;
        width: calc(100% - 40px);
        height: calc(100% - 40px);
        margin: auto;
        overflow: hidden;
        box-shadow: 0px 0px 80px 0px rgba(0, 0, 0, 0.22);
        pointer-events: none;
        opacity: 0;
        transform: scale(0);
        transform-origin: bottom;
        transition: all 0.3s;
        border-radius: 10px;
        z-index: -999;
        -webkit-overflow-scrolling: touch;
    }

    @media (max-width: 460px) {
        .Rise-popup {
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
            max-width: unset;
            max-height: unset;
            border-radius: 0;
        }
    }

    .Rise-popup.open {
        z-index: 2147483647;
        pointer-events: all;
        opacity: 1;
        transform: scale(1);
    }

    .Rise-popup .Rise-popup-close-button {
        background-color: unset;
        background-image: url(https://assets.rise-ai.com/static/3c5f3083e19b40e9a4b8750b4e292998a629107af12d4c4e9428093279dea76f.png);
        background-repeat: no-repeat;
        background-position: center;
        background-size: 14px;
        padding: 16px;
        border-radius: 3px;
        transition: all 0.2s;
        position: fixed;
        right: 15px;
        top: 15px;
        cursor: pointer;
        border: 0;
        outline: none;
        z-index: 2147483647;
    }

    @media (max-width: 460px) {
        .Rise-popup .Rise-popup-close-button {
            right: 5px;
            top: 5px;
        }
    }

    .Rise-popup .Rise-popup-close-button.Rise-popup-close-button--light {
        background-image: url(https://assets.rise-ai.com/static/4b4ebf85a9424d43a6b0bd6ce2143d7d.png);
    }

    @media (min-width: 40em) {
        .Rise-popup .Rise-popup-close-button {
            background-size: 18px;
            padding: 18px;
        }
    }

    .Rise-popup .Rise-popup-close-button:hover {
        background-color: rgba(209, 209, 209, 0.5);
    }

    .Rise-popup iframe {
        border: none;
        outline: 0;
        height: 100%;
        width: 100%;
        display: none;
        overflow-y: scroll;
        -webkit-overflow-scrolling: touch;
    }

    .Rise-popup:not(.open) iframe {
        display: none !important;
    }

    .Rise-popup .Rise-popup-spinner {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .Rise-popup .Rise-popup-spinner>svg {
        animation: spinner 500ms linear infinite;
        height: 40px;
        width: 40px;
    }

    @-webkit-keyframes spinner {
        to {
            transform: rotate(360deg);
        }
    }

    @keyframes spinner {
        to {
            transform: rotate(360deg);
        }
    }

    .Rise-popup-backdrop {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
        opacity: 0;
        transition: all 0.3s;
        z-index: -999;
    }

    .Rise-popup-backdrop.show {
        z-index: 2147483647;
        pointer-events: all;
        opacity: 1;
        background: rgba(0, 0, 0, 0.13);
    }
    </style>
    <style>
    .GiftWizard-gift-button {
        margin-right: 15px;
        margin-bottom: 15px;
    }
    </style>
    <style type="text/css">
    @-webkit-keyframes Rise__animation_slidein {
        to {
            transform: translateY(0);
            opacity: 1
        }
    }

    @keyframes Rise__animation_slidein {
        to {
            transform: translateY(0);
            opacity: 1
        }
    }

    .Rise__widget {
        position: fixed;
        z-index: 2147483647
    }

    .Rise__widget-launcher {
        padding: 0;
        border: 0;
        outline: 0;
        height: 60px;
        background-color: #fff;
        background-position: 15px !important;
        background-repeat: no-repeat !important;
        background-size: 36px !important;
        box-shadow: 0 0 80px 0 rgba(0, 0, 0, .12);
        border-radius: 50px;
        -webkit-tap-highlight-color: transparent;
        cursor: pointer;
        transition: all .25s;
        min-width: 60px;
        font-family: inherit
    }

    .Rise__widget-launcher.Rise__widget-launcher__Type__icon,
    .Rise__widget-launcher.Rise__widget-launcher__Type__text {
        background-position: 50% !important
    }

    @media (min-width:661px) {
        .Rise__widget-launcher.Rise__widget-launcher__Type__text {
            background-image: none !important
        }
    }

    .Rise__widget-launcher.Rise__widget-launcher__Type__icon-text {
        min-width: 60px;
        padding: 0 0 0 40px
    }

    @media (max-width:660px) {
        .Rise__widget-launcher.Rise__widget-launcher__Type__icon-text {
            background-position: 50% !important
        }
    }

    .Rise__widget-launcher.open {
        background-size: 0 !important;
        padding: 0
    }

    .Rise__widget-launcher.open span.Rise__widget-launcher-text {
        max-width: 0;
        margin: 0;
        opacity: 0
    }

    .Rise__widget-launcher:hover {
        box-shadow: 0 0 30px 0 rgba(0, 0, 0, .12)
    }

    .Rise__widget-launcher span.Rise__widget-launcher-text {
        font-family: inherit;
        font-weight: 500;
        font-size: 17px;
        margin: 0 20px;
        display: inline-block;
        max-width: 370px;
        transition: all .25s;
        font-weight: 400
    }

    @media (max-width:660px) {
        .Rise__widget-launcher span.Rise__widget-launcher-text {
            display: none !important
        }
    }

    .Rise__widget-launcher span.Rise__widget-launcher-notification {
        position: absolute;
        font-weight: 500;
        width: 30px;
        height: 30px;
        font-size: 12px;
        left: -5px;
        top: -10px;
        border-radius: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transform: translateY(20px);
        -webkit-animation: Rise__animation_slidein .25s forwards;
        animation: Rise__animation_slidein .25s forwards
    }

    .Rise__widget-launcher .Rise__widget-launcher-close-icon {
        width: 16px;
        height: 16px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%)
    }

    .Rise__widget-launcher .Rise__widget-launcher-close-icon-transition-enter-active {
        transition: opacity .3s
    }

    .Rise__widget-launcher .Rise__widget-launcher-close-icon-transition-enter,
    .Rise__widget-launcher .Rise__widget-launcher-close-icon-transition-leave-to {
        opacity: 0
    }

    .Rise__widget-panel {
        position: absolute;
        z-index: 2147483647;
        width: 360px;
        max-height: 600px;
        overflow: hidden;
        box-shadow: 0 0 80px 0 rgba(0, 0, 0, .22);
        border-radius: 10px
    }

    @media (max-width:460px) {
        .Rise__widget-panel {
            min-height: 100vh;
            position: fixed;
            width: 100%;
            bottom: 0 !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            margin-top: 0 !important;
            transform: none !important;
            transform-origin: center bottom !important;
            border-radius: 0
        }
    }

    .Rise__widget-panel .Rise__widget-panel-spinner {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%)
    }

    .Rise__widget-panel .Rise__widget-panel-spinner>svg {
        -webkit-animation: spinner .5s linear infinite;
        animation: spinner .5s linear infinite;
        height: 40px;
        width: 40px
    }

    @-webkit-keyframes spinner {
        to {
            transform: rotate(1turn)
        }
    }

    @keyframes spinner {
        to {
            transform: rotate(1turn)
        }
    }

    .Rise__widget-panel iframe {
        border: none;
        outline: 0;
        height: 100%;
        width: 100%
    }

    .Rise__widget-panel-transition-enter-active,
    .Rise__widget-panel-transition-leave-active {
        transition: all .3s
    }

    .Rise__widget-panel-transition-enter,
    .Rise__widget-panel-transition-leave-to {
        opacity: 0;
        transform: scale(0)
    }

    @media (max-width:460px) {

        .Rise__widget-panel-transition-enter,
        .Rise__widget-panel-transition-leave-to {
            transform: translateY(400px)
        }
    }
    </style>
    <style type="text/css">
    .Rise__quick-apply {
        margin: 10px
    }

    .Rise__quick-apply iframe {
        border: none;
        outline: 0;
        height: 100%;
        width: 100%
    }
    </style>
    <style type="text/css">
    .Rise__rewards-page {
        margin: 10px;
        min-height: 200px;
        position: relative
    }

    .Rise__rewards-page .Rise__rewards-page-spinner {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%)
    }

    .Rise__rewards-page .Rise__rewards-page-spinner>svg {
        -webkit-animation: spinner .5s linear infinite;
        animation: spinner .5s linear infinite;
        height: 40px;
        width: 40px
    }

    @-webkit-keyframes spinner {
        to {
            transform: rotate(1turn)
        }
    }

    @keyframes spinner {
        to {
            transform: rotate(1turn)
        }
    }

    @media screen and (min-width:600px) {
        .Rise__rewards-page .Rise__rewards-page-spinner>svg {
            height: 66px;
            width: 66px
        }
    }

    .Rise__rewards-page iframe {
        border: none;
        outline: 0;
        height: 100%;
        width: 100%
    }

    .carousel-wrapper {
            width: 100%;
            overflow: hidden;
            padding: 50px 0;
        }

        .carousel-container {
            position: relative;
            width: 100%;
            overflow: hidden;
            padding: 20px 0;
        }

        .carousel-track {
            display: flex;
            position: relative;
            will-change: transform;
        }

        .location-card {
            position: relative;
            width: 400px;
            height: 250px;
            margin-right: 24px;
            /* border-radius: 20px; */
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }

        .location-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
        }

        .location-card img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        @media (max-width: 768px) {
            .carousel-wrapper{
            padding: 20px 0;
            }
            .location-card {
                width: 300px;
                height: 200px;
                margin-right: 16px;
            }

            .location-label {
                font-size: 14px;
                padding: 10px 16px;
            }
        }
    </style>
    <script type="text/javascript" async="true" src="https://omnisnippet1.com/monitoring/monitoring.js?v=2025-09-28T08">
    </script>
    <script type="text/javascript" async="true" src="https://omnisnippet1.com/forms/main.js?v=2025-09-28T08"></script>
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/polyfills.DrBAsOCv.js" crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/app.C8mgsR-b.js" crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/en.DHDttPHH.js" crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/page-OnePage.BQYvvMia.js" crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/DeliveryMethodSelectorSection.B02oLdZg.js"
        crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/useEditorShopPayNavigation.PD-L92mO.js"
        crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/VaultedPayment.wfKKA3L0.js" crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/PaymentButtons.DWSneZTd.js" crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/LocalizationExtensionField.Cft7LlgW.js"
        crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/ShopPayOptInDisclaimer.D_2YkGDZ.js"
        crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/ShipmentBreakdown.C9hOkkTR.js" crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/MerchandiseModal.BaXpMDbi.js" crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/StackedMerchandisePreview.BxzVVSfm.js"
        crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/PayButtonSection.iKQdgG_g.js" crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/component-ShopPayVerificationSwitch.CPE3LpfF.js"
        crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/useSubscribeMessenger.C5-k4mXi.js"
        crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="script"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/index.DALWOujX.js" crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="style"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/assets/app.BFkZ4w-r.css" crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="style"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/assets/OnePage.PMX4OSBO.css" crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="style"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/assets/DeliveryMethodSelectorSection.BvrdqG-K.css"
        crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="style"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/assets/useEditorShopPayNavigation.Dvkv4byz.css"
        crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="style"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/assets/VaultedPayment.OxMVm7u-.css"
        crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="style"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/assets/StackedMerchandisePreview.CKAakmU8.css"
        crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="style"
        href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/c1/assets/ShopPayVerificationSwitch.DW7NMDXG.css"
        crossorigin="">
    <link rel="prefetch" fetchpriority="low" as="image"
        href="https://cdn.shopify.com/s/files/1/0558/2845/files/boxfox-logo_x320.png?v=1724220863" crossorigin="">
</head>

<body id="custom-amp-curated-gift-boxes-boxfox" ng-app="AANIVO" ng-controller="App"
    class="template-index theme-animate-hover" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <?php include_once "./elements/header.php"; ?>
    <?php if (!isset($_GET['slug']) || !$category) {?>
        <main class="main-content" id="MainContent">
        <h4>OOPS! Page Not Found - 404</h4>
        </main>
    <?php } else {?>
        <main style="background-color: #efffff;" class="main-content" id="MainContent">
  <div id="shopify-section-template--14655948226678__62c60dd6-ae76-4dea-aa45-d480b86f8210" class="shopify-section">
    <div class="section--image fade-in-child js-overflow-container has-overlay" data-section-id="template--14655948226678__62c60dd6-ae76-4dea-aa45-d480b86f8210" data-section-type="hero" data-overlay-header="" style="--PT: 0px; --PB: 0px; --CONTENT-WIDTH: 2000px; --full-screen: 677px; min-height: calc(168px + var(--menu-height));">
      <div class="wrapper--none section-padding">
        <div class="section__inner">
          <div class="hero__content__wrapper align--middle-center">
            <div class="hero__content hero__content--transparent js-overflow-content">
              <div class="text__standard text--white ">
                <div class="hero__title heading-size-10 aos-init aos-animate" data-aos="hero" data-aos-anchor="[data-section-id='template--14655948226678__62c60dd6-ae76-4dea-aa45-d480b86f8210']" data-aos-order="1">
                  <!-- <h1> <?php echo $category['category_title']; ?> </h1> -->
                </div>
              </div>
            </div>
          </div>
          <div class="image-overlay" style="--bg: #000000; opacity: 0.15;"></div>
          <div class="image__hero__frame fade-in-child use_screen_one_half desktop" data-overflow-background="" data-parallax-wrapper="" style="min-height: calc(168px + var(--menu-height));">
            <div class="image__hero__pane">
              <div class="image__hero__scale" style="height: 56.6667vw; transform: translate3d(0px, 29px, 0px) translate3d(0px, -18px, 0px);" data-parallax-img="">
                <img src="<?php echo BASE_URL . $category['cover']; ?>" alt="<?php echo $category['aria_label']; ?>" width="4500" height="2550" loading="lazy" class="tw-block tw-overflow-hidden tw-object-cover tw-w-full tw-h-full" style="aspect-ratio: 1.7647058823529411; object-position: center center;">
              </div>
            </div>
          </div>
          <img src="<?php echo $category['cover']; ?>" alt="<?php echo $category['aria_label']; ?>" class="hero-mobile-image is-loaded" style="min-height: calc(168px + var(--menu-height));">
        </div>
      </div>
    </div>
  </div>
  <div id="shopify-section-template--14655948226678__a9d57b25-8bce-4f64-bb69-5cd19867deed" class="shopify-section">
    <section class="text--neutral palette--light bg--neutral" data-section-id="template--14655948226678__a9d57b25-8bce-4f64-bb69-5cd19867deed" data-section-type="rich-text" style="
      --PT: 36px;
      --PB: 0px;
      --FLEX-POSITION: center;
      --CONTENT-WIDTH: 2000px;">
      <div style="background-color: #efffff;" class="wrapper section-padding">
        <div class="text__standard text-center">
          <!-- <div class="standard__kicker accent-size-4 block__kicker--flourished aos-init aos-animate" data-aos="hero" data-aos-anchor="[data-section-id='template--14655948226678__a9d57b25-8bce-4f64-bb69-5cd19867deed']" data-aos-order="1">
            <p> <?php echo $category['variant_title']; ?> </p>
          </div> -->
          <div class="standard__heading heading-size-8 aos-init aos-animate" data-aos="hero" data-aos-anchor="[data-section-id='template--14655948226678__a9d57b25-8bce-4f64-bb69-5cd19867deed']" data-aos-order="2">
            <p> <?php echo $category['category_title']; ?> </p>
          </div>
          <div class="rte body-size-5 columns--1 aos-init aos-animate" data-aos="hero" data-aos-anchor="[data-section-id='template--14655948226678__a9d57b25-8bce-4f64-bb69-5cd19867deed']" data-aos-order="3">
            <p> <?php echo $category['category_content']; ?> </p>
          </div>
          <div class="hero__cta__wrapper"></div>
        </div>
      </div>
    </section>
  </div>
  <div class="carousel-wrapper">
        <div class="carousel-container">
            <div class="carousel-track" id="carousel-track"></div>
        </div>
    </div>
</main>
<?php }?>
    <?php include_once "./elements/footer.php"; ?>
    <script src="<?php echo BASE_URL; ?>js/80codes-slider.js" type="text/javascript"></script>
    <script>
    var images = [];
        <?php if (isset($category_products)) {
    $images = array_values(array_map(function ($prod) {
        return BASE_URL . $prod["image"];
    }, $category_products));
}
echo "images = " . json_encode($images) . ";\n"
?>
    initLocationCarousel(images);
        </script>
</body>

</html>