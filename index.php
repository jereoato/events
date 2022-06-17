<?php

// const BASE_URL = "https://clubio.softali.net/wp/demo/";
// const BASE_URL = "http://localhost:8000/";
const BASE_URL = "https://jereo-mg.github.io/events/";

?>
<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg7">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="profile" href="//gmpg.org/xfn/11" />
    <title>Clubio Recording Studio &#8211; Clubio WordPress Theme</title>
    <meta name='robots' content='noindex, nofollow' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Clubio Recording Studio &raquo; Feed"
        href="<?= BASE_URL ?>feed/" />
    <link rel="alternate" type="application/rss+xml" title="Clubio Recording Studio &raquo; Comments Feed"
        href="<?= BASE_URL ?>comments/feed/" />
    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/localhost:8000\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0"}};
        /*! This file is auto-generated */
        !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode,e=(p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0),i.toDataURL());return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([129777,127995,8205,129778,127999],[129777,127995,8203,129778,127999])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='<?= BASE_URL ?>wp-includes/css/dist/block-library/style.min.css?ver=6.0' media='all' />
    <style id='wp-block-library-theme-inline-css' type='text/css'>
        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-code {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Menlo, Consolas, monaco, monospace;
            padding: .8em 1em
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .blocks-gallery-caption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-image figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-pullquote {
            border-top: 4px solid;
            border-bottom: 4px solid;
            margin-bottom: 1.75em;
            color: currentColor
        }

        .wp-block-pullquote__citation,
        .wp-block-pullquote cite,
        .wp-block-pullquote footer {
            color: currentColor;
            text-transform: uppercase;
            font-size: .8125em;
            font-style: normal
        }

        .wp-block-quote {
            border-left: .25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: .8125em;
            position: relative;
            font-style: normal
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: .25em solid;
            padding-left: 0;
            padding-right: 1em
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large,
        .wp-block-quote.is-style-plain {
            border: none
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700
        }

        :where(.wp-block-group.has-background) {
            padding: 1.25em 2.375em
        }

        .wp-block-separator.has-css-opacity {
            opacity: .4
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto
        }

        .wp-block-separator.has-alpha-channel-opacity {
            opacity: 1
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px
        }

        .wp-block-table thead {
            border-bottom: 3px solid
        }

        .wp-block-table tfoot {
            border-top: 3px solid
        }

        .wp-block-table td,
        .wp-block-table th {
            padding: .5em;
            border: 1px solid;
            word-break: normal
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-table figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-video figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-template-part.has-background {
            padding: 1.25em 2.375em;
            margin-top: 0;
            margin-bottom: 0
        }
    </style>
    <link rel='stylesheet' id='wc-blocks-vendors-style-css'
        href='<?= BASE_URL ?>wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=7.4.3'
        media='all' />
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='<?= BASE_URL ?>wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=7.4.3'
        media='all' />
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--primary: #1e76bd;
            --wp--preset--color--secondary: #888888;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 19.5px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36.5px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-size--normal: 22px;
            --wp--preset--font-size--huge: 49.5px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href='<?= BASE_URL ?>wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.5.6.1' media='all' />
    <link rel='stylesheet' id='bliss-loadmore-css-css'
        href='<?= BASE_URL ?>wp-content/plugins/infinite-scroll-and-ajax-load-more/public/css/bliss-loadmore.css?ver=1.0.0'
        media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='<?= BASE_URL ?>wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=6.5.1' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='<?= BASE_URL ?>wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=6.5.1'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='<?= BASE_URL ?>wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=6.5.1' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='clubio-style-css' href='<?= BASE_URL ?>wp-content/themes/clubio/style.css?ver=1.3.0'
        media='all' />
    <link rel='stylesheet' id='clubio-print-style-css'
        href='<?= BASE_URL ?>wp-content/themes/clubio/print.css?ver=1.3.0' media='print' />
    <link rel='stylesheet' id='clubio-theme-css-css'
        href='<?= BASE_URL ?>wp-content/themes/clubio/assets/css/clubio-style.css?ver=6.0' media='all' />
    <link rel='stylesheet' id='clubio-custom-css'
        href='<?= BASE_URL ?>wp-content/themes/clubio/assets/css/clubio-custom.css?ver=6.0' media='all' />
    <link rel='stylesheet' id='clubio-woo-css'
        href='<?= BASE_URL ?>wp-content/themes/clubio/assets/css/clubio-woo.css?ver=6.0' media='all' />
    <link rel='stylesheet' id='clubio-colors-css'
        href='<?= BASE_URL ?>wp-content/themes/clubio/assets/css/clubio-colors.css?ver=6.0' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'
        href='<?= BASE_URL ?>wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=6.9.0' media='all' />
    <script src='<?= BASE_URL ?>wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
    <script src='<?= BASE_URL ?>wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <script
        src='<?= BASE_URL ?>wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.6.5.1'
        id='jquery-blockui-js'></script>
    <script type='text/javascript' id='wc-add-to-cart-js-extra'>
        /* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp\/demo\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/wp\/demo\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/localhost:8000\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
    </script>
    <script src='<?= BASE_URL ?>wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=6.5.1'
        id='wc-add-to-cart-js'></script>
    <script src='<?= BASE_URL ?>wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=6.9.0'
        id='vc_woocommerce-add-to-cart-js-js'></script>
    <link rel="https://api.w.org/" href="<?= BASE_URL ?>wp-json/" />
    <link rel="alternate" type="application/json" href="<?= BASE_URL ?>wp-json/wp/v2/pages/2351" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?= BASE_URL ?>xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?= BASE_URL ?>wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.0" />
    <meta name="generator" content="WooCommerce 6.5.1" />
    <link rel="canonical" href="<?= BASE_URL ?>" />
    <link rel='shortlink' href='<?= BASE_URL ?>' />
    <link rel="alternate" type="application/json+oembed"
        href="<?= BASE_URL ?>wp-json/oembed/1.0/embed?url=https%3A%2F%2Fclubio.softali.net%2Fwp%2Fdemo%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="<?= BASE_URL ?>wp-json/oembed/1.0/embed?url=https%3A%2F%2Fclubio.softali.net%2Fwp%2Fdemo%2F&#038;format=xml" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <link rel="icon" href="<?= BASE_URL ?>wp-content/uploads/2020/06/favicon-1.png" sizes="32x32" />
    <link rel="icon" href="<?= BASE_URL ?>wp-content/uploads/2020/06/favicon-1.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?= BASE_URL ?>wp-content/uploads/2020/06/favicon-1.png" />
    <meta name="msapplication-TileImage" content="<?= BASE_URL ?>wp-content/uploads/2020/06/favicon-1.png" />
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1591792053837 {
            background: #3c3b41 url(<?= BASE_URL ?>wp-content/uploads/2020/06/promo02.jpg?id=1942) !important;
        }

        .vc_custom_1591723022803 {
            background-image: url(<?= BASE_URL ?>wp-content/uploads/2020/06/promo-box-wide01.jpg?id=1925) !important;
        }

        .vc_custom_1591363421212 {
            background-image: url(<?= BASE_URL ?>wp-content/uploads/2020/06/section-parallax.jpg?id=1904) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }
    </style><noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
</head>

<body
    class="home page-template page-template-custompagett page-template-custompagett-php page page-id-2351 wp-embed-responsive theme-clubio woocommerce-no-js clubio-front-page has-header-image page-one-column clubio-theme-set home-page wpb-js-composer js-comp-ver-6.9.0 vc_responsive">
    <!--cv_1.1-->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0.49803921568627" />
                    <feFuncG type="table" tableValues="0 0.49803921568627" />
                    <feFuncB type="table" tableValues="0 0.49803921568627" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 0.27843137254902" />
                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0" />
                    <feFuncG type="table" tableValues="0 0.64705882352941" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.78039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.94901960784314" />
                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.098039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.66274509803922" />
                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <div class="pre-loader">
        <div class="sk-fading-circle">
            <div class="sk-circle1 sk-circle"></div>
            <div class="sk-circle2 sk-circle"></div>
            <div class="sk-circle3 sk-circle"></div>
            <div class="sk-circle4 sk-circle"></div>
            <div class="sk-circle5 sk-circle"></div>
            <div class="sk-circle6 sk-circle"></div>
            <div class="sk-circle7 sk-circle"></div>
            <div class="sk-circle8 sk-circle"></div>
            <div class="sk-circle9 sk-circle"></div>
            <div class="sk-circle10 sk-circle"></div>
            <div class="sk-circle11 sk-circle"></div>
            <div class="sk-circle12 sk-circle"></div>
        </div>
    </div>
    <nav class="panel-menu" id="mobile-menu">
        <ul></ul>
        <div class="mm-navbtn-names">
            <div class="mm-closebtn">Close</div>
            <div class="mm-backbtn">Back</div>
        </div>
    </nav>
    <header id="tt-header" class="align-items-center col-btns-full">
        <div class="tt-holder">
            <div class="tt-col">
                <h1 class="p-0 ch-logo"><span class="d-none">logo</span><a class="tt-logo tt-logo-alignment"
                        href="<?= BASE_URL ?>" rel="home"><svg width="148" height="71" viewBox="0 0 148 71" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="logo__text"
                                d="M34.4868 6.53027H36.5844L53.15 48.4553L69.7156 6.53027H71.7863L54.1988 51.0638H52.1012L34.4868 6.53027ZM54.4946 41.3826L53.3921 43.8567L38.6551 6.53027H40.7258L54.4946 41.3826ZM56.5653 36.0848L55.5434 38.7472L42.8234 6.53027H44.921L56.5653 36.0848ZM58.6091 30.7064L57.5872 33.4225L46.9917 6.53027H49.0624L58.6091 30.7064ZM82.1936 6.53027H84.2912L66.6768 51.0638H64.6061L82.1936 6.53027ZM78.0522 6.53027H80.1229L62.5085 51.0638H60.4378L78.0522 6.53027ZM73.857 6.53027H75.9546L58.3402 51.0638H56.2695L73.857 6.53027Z"
                                fill="white" />
                            <path class="logo__text"
                                d="M98.9077 6.53027H100.844V51.0638H98.9077V6.53027ZM95.0352 6.53027H96.9714V51.0638H95.0352V6.53027ZM91.1627 6.53027H93.099V51.0638H91.1627V6.53027ZM87.2902 6.53027H89.2265V51.0638H87.2902V6.53027Z"
                                fill="white" />
                            <path class="logo__text"
                                d="M120.462 29.9803H131.703C133.55 29.9803 135.11 29.3618 136.383 28.1247C137.673 26.8698 138.319 25.1038 138.319 22.827C138.319 21.1238 137.646 19.5999 136.302 18.2553C134.957 16.8927 133.424 16.2115 131.703 16.2115H115.084V51.0638H113.148V14.2752H131.703C133.962 14.2752 135.952 15.1447 137.673 16.8838C139.394 18.6228 140.255 20.6039 140.255 22.827C140.255 25.57 139.421 27.7751 137.754 29.4424C136.087 31.0918 134.07 31.9165 131.703 31.9165H120.462V29.9803ZM120.462 33.8528H131.703C133.568 33.8528 135.289 33.4046 136.867 32.5082C138.462 31.5938 139.744 30.2851 140.712 28.5819C141.698 26.8787 142.191 24.9604 142.191 22.827C142.191 20.066 141.133 17.6278 139.018 15.5123C136.92 13.3968 134.482 12.339 131.703 12.339H111.211V51.0638H109.275V10.4028H131.703C133.873 10.4028 135.916 10.9765 137.835 12.1239C139.753 13.2713 141.277 14.8041 142.406 16.7224C143.554 18.6407 144.127 20.6756 144.127 22.827C144.127 25.2652 143.554 27.4883 142.406 29.4962C141.259 31.4863 139.735 33.037 137.835 34.1486C135.952 35.2422 133.908 35.789 131.703 35.789H120.462V33.8528ZM120.462 37.7253H131.703C133.622 37.7253 135.459 37.3488 137.216 36.5958C138.973 35.8249 140.497 34.794 141.788 33.5032C143.097 32.1944 144.136 30.6167 144.907 28.7701C145.678 26.9056 146.064 24.9246 146.064 22.827C146.064 20.317 145.409 17.9595 144.101 15.7543C142.792 13.5312 141.026 11.7653 138.803 10.4565C136.598 9.12986 134.231 8.46651 131.703 8.46651H107.339V51.0638H105.403V6.53027H131.703C134.572 6.53027 137.261 7.28326 139.771 8.78922C142.281 10.2773 144.28 12.2762 145.768 14.7862C147.256 17.2961 148 19.9764 148 22.827C148 25.3728 147.561 27.7213 146.682 29.8727C145.804 32.0062 144.621 33.7811 143.132 35.1974C141.644 36.6137 139.914 37.7163 137.942 38.5051C135.97 39.276 133.891 39.6615 131.703 39.6615H120.462V37.7253ZM118.956 51.0638H117.02V18.1477H131.703C132.976 18.1477 134.07 18.6138 134.984 19.5461C135.916 20.4784 136.383 21.572 136.383 22.827C136.383 26.305 134.823 28.0441 131.703 28.0441H120.462V26.1078H131.703C132.564 26.1078 133.236 25.8658 133.72 25.3817C134.204 24.8977 134.446 24.0461 134.446 22.827C134.446 22.0381 134.177 21.3837 133.64 20.8638C133.12 20.3439 132.474 20.084 131.703 20.084H118.956V51.0638Z"
                                fill="white" />
                            <path
                                d="M57.5103 59.4155C58.9207 59.4155 60.0851 59.7427 61.0035 60.3973C61.9219 61.0417 62.556 61.9264 62.9059 63.0515H61.3315C61.0363 62.3355 60.5607 61.7679 59.9047 61.3485C59.2487 60.919 58.4451 60.7042 57.4939 60.7042C56.7395 60.7042 56.0616 60.8781 55.4603 61.2258C54.8699 61.5633 54.3997 62.0543 54.0499 62.6986C53.7109 63.3328 53.5415 64.0794 53.5415 64.9386C53.5415 65.7875 53.7109 66.529 54.0499 67.1632C54.3997 67.7973 54.8699 68.2882 55.4603 68.636C56.0616 68.9735 56.7395 69.1423 57.4939 69.1423C58.4451 69.1423 59.2487 68.9326 59.9047 68.5132C60.5607 68.0837 61.0363 67.5109 61.3315 66.7949H62.9059C62.556 67.92 61.9219 68.8099 61.0035 69.4644C60.0851 70.1088 58.9207 70.431 57.5103 70.431C56.4279 70.431 55.4712 70.2009 54.6403 69.7406C53.8093 69.2701 53.1588 68.6206 52.6887 67.7922C52.2295 66.9535 51.9999 66.0023 51.9999 64.9386C51.9999 63.8646 52.2295 62.9083 52.6887 62.0696C53.1588 61.2309 53.8093 60.5814 54.6403 60.1212C55.4712 59.6507 56.4279 59.4155 57.5103 59.4155Z"
                                fill="white" />
                            <path d="M69.6741 69.2497H73.7741V70.3389H68.1817V59.5228H69.6741V69.2497Z" fill="white" />
                            <path
                                d="M79.983 59.5228V66.0125C79.983 67.0762 80.2345 67.8638 80.7374 68.3752C81.2403 68.8763 81.9346 69.1269 82.8202 69.1269C83.6949 69.1269 84.3782 68.8712 84.8702 68.3598C85.3622 67.8484 85.6082 67.066 85.6082 66.0125V59.5228H87.1006V66.0125C87.1006 67.4853 86.707 68.5951 85.9198 69.3417C85.1435 70.0781 84.0994 70.4463 82.7874 70.4463C81.4863 70.4463 80.4422 70.0781 79.655 69.3417C78.8787 68.5951 78.4906 67.4853 78.4906 66.0125V59.5228H79.983Z"
                                fill="white" />
                            <path
                                d="M98.3368 64.7391C99.0474 64.8823 99.6214 65.1994 100.059 65.6903C100.507 66.1813 100.731 66.7591 100.731 67.424C100.731 68.3036 100.409 69.0093 99.7636 69.5412C99.1294 70.073 98.2056 70.3389 96.992 70.3389H92.6952V59.5228H96.9264C98.0853 59.5228 98.9654 59.7632 99.5668 60.2439C100.168 60.7246 100.469 61.3843 100.469 62.223C100.469 62.9185 100.266 63.4811 99.862 63.9107C99.4684 64.3402 98.96 64.6164 98.3368 64.7391ZM94.1876 64.2635H96.6804C97.4129 64.2635 97.9705 64.105 98.3532 63.7879C98.7468 63.4708 98.9436 63.0259 98.9436 62.4532C98.9436 61.9009 98.7522 61.4662 98.3696 61.1491C97.9869 60.832 97.402 60.6735 96.6148 60.6735H94.1876V64.2635ZM96.7132 69.1729C97.5004 69.1729 98.1072 69.0042 98.5336 68.6667C98.9709 68.3291 99.1896 67.8535 99.1896 67.2399C99.1896 66.6364 98.9654 66.1659 98.5172 65.8284C98.0798 65.4806 97.4676 65.3068 96.6804 65.3068H94.1876V69.1729H96.7132Z"
                                fill="white" />
                            <path d="M107.365 59.5228V70.3389H105.873V59.5228H107.365Z" fill="white" />
                            <path
                                d="M118.342 59.3848C119.413 59.3848 120.375 59.62 121.228 60.0905C122.092 60.561 122.77 61.2207 123.262 62.0696C123.754 62.9083 124 63.8595 124 64.9232C124 65.9869 123.754 66.9432 123.262 67.7922C122.77 68.6309 122.092 69.2855 121.228 69.7559C120.375 70.2264 119.413 70.4617 118.342 70.4617C117.27 70.4617 116.297 70.2264 115.423 69.7559C114.559 69.2855 113.881 68.6309 113.389 67.7922C112.897 66.9432 112.651 65.9869 112.651 64.9232C112.651 63.8595 112.897 62.9083 113.389 62.0696C113.881 61.2207 114.559 60.561 115.423 60.0905C116.297 59.62 117.27 59.3848 118.342 59.3848ZM118.342 60.6888C117.544 60.6888 116.828 60.8627 116.193 61.2105C115.57 61.548 115.078 62.0389 114.717 62.6833C114.368 63.3174 114.193 64.0641 114.193 64.9232C114.193 65.7721 114.368 66.5188 114.717 67.1632C115.078 67.8075 115.57 68.3036 116.193 68.6513C116.828 68.9888 117.544 69.1576 118.342 69.1576C119.129 69.1576 119.834 68.9837 120.457 68.636C121.092 68.2882 121.584 67.7973 121.933 67.1632C122.294 66.5188 122.475 65.7721 122.475 64.9232C122.475 64.0641 122.294 63.3174 121.933 62.6833C121.584 62.0389 121.092 61.548 120.457 61.2105C119.834 60.8627 119.129 60.6888 118.342 60.6888Z"
                                fill="white" />
                            <g filter="url(#filter0_dlogo)">
                                <path class="logo__img"
                                    d="M11.4995 9.60767C15.2754 9.61397 18.4591 12.4154 18.9344 16.1499H21.2893L18.2951 5.86922H15.2493V4H18.9991C19.416 4.00012 19.7827 4.27478 19.899 4.67385L23.241 16.1499H47.1225C47.6402 16.1498 48.0601 16.5682 48.0602 17.0843C48.0602 17.2951 47.9888 17.4996 47.8575 17.6649L30.2485 39.8405V58.2074H37.748V60.0766H20.874V58.2074H28.3736V39.8405L15.3693 23.4642C14.2071 24.1823 12.8668 24.5624 11.4995 24.5614C7.35766 24.5614 3.99996 21.2139 3.99996 17.0846C3.99996 12.9552 7.35766 9.60767 11.4995 9.60767ZM45.1848 18.0192H23.7857L25.6906 24.5614H39.9895L45.1848 18.0192ZM29.311 38.0096L38.5055 26.4307H26.2343L28.3361 33.6468L26.5362 34.1683L24.2826 26.4307H20.1165L29.311 38.0096ZM18.6326 24.5614H23.7388L21.833 18.0192H13.4372L18.6326 24.5614ZM11.4995 22.6922C12.4467 22.6971 13.3791 22.4587 14.2069 21.9997L10.7646 17.6649C10.443 17.2604 10.5113 16.6725 10.9171 16.3519C11.0828 16.2211 11.288 16.1498 11.4995 16.1499H17.0464C16.5287 13.0962 13.6259 11.0391 10.5629 11.5553C7.49992 12.0714 5.4366 14.9654 5.9543 18.0192C6.41177 20.7169 8.75516 22.6918 11.4995 22.6922Z"
                                    fill="#FF1A43" />
                            </g>
                            <defs>
                                <filter id="filter0_dlogo" x="0" y="0" width="52.0602" height="64.0766"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="2" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 1 0 0 0 0 0.1 0 0 0 0 0.262 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                                </filter>
                            </defs>
                        </svg></a></h1>
            </div>
            <div class="tt-col tt-col tt-desctop-parent tt-wide">
                <nav id="tt-nav" class="main-navigation7" aria-label="Theme Header Navigation">
                    <ul id="menu-theme-header-menu" class="menu">
                        <li id=menu-item-17
                            class="tm-home menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-17">
                            <a href="<?= BASE_URL ?>"><span>HOME</span></a></li>
                        <li id=menu-item-23
                            class="tm-events-calendar menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-23">
                            <a href="<?= BASE_URL ?>events/"><span>EVENTS CALENDAR</span></a>
                            <ul class="sub-menu">
                                <li id=menu-item-24
                                    class="tm-events-tickets-1 menu-item menu-item-type-custom menu-item-object-custom menu-item-24">
                                    <a href="<?= BASE_URL ?>events-tickets-1/"><span>EVENTS TICKETS #1</span></a></li>
                                <li id=menu-item-25
                                    class="tm-events-tickets-2 menu-item menu-item-type-custom menu-item-object-custom menu-item-25">
                                    <a href="<?= BASE_URL ?>events-tickets-2/"><span>EVENTS TICKETS #2</span></a></li>
                                <li id=menu-item-2426
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2426"><a
                                        href="<?= BASE_URL ?>shop/"><span>SHOP NOW</span></a></li>
                            </ul>
                        </li>
                        <li id=menu-item-26
                            class="tm-gallery menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26">
                            <a href="<?= BASE_URL ?>gallery/"><span>GALLERY</span></a>
                            <ul class="sub-menu">
                                <li id=menu-item-27
                                    class="tm-gallery-1 menu-item menu-item-type-custom menu-item-object-custom menu-item-27">
                                    <a href="<?= BASE_URL ?>gallery-1/"><span>GALLERY #1</span></a></li>
                                <li id=menu-item-28
                                    class="tm-gallery-2 menu-item menu-item-type-custom menu-item-object-custom menu-item-28">
                                    <a href="<?= BASE_URL ?>gallery-2/"><span>GALLERY #2</span></a></li>
                                <li id=menu-item-29
                                    class="tm-gallery-detail menu-item menu-item-type-custom menu-item-object-custom menu-item-29">
                                    <a href="<?= BASE_URL ?>gallery-detail/"><span>GALLERY DETAIL</span></a></li>
                            </ul>
                        </li>
                        <li id=menu-item-20
                            class="tm-news menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-20">
                            <a href="<?= BASE_URL ?>news/"><span>NEWS</span></a>
                            <ul class="sub-menu">
                                <li id=menu-item-21
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21"><a
                                        href="<?= BASE_URL ?>news/"><span>NEWS</span></a></li>
                                <li id=menu-item-22
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22"><a
                                        href="<?= BASE_URL ?>dont-miss-the-best-pre-season-party/"><span>NEWS/Blog Page</span></a>
                                </li>
                            </ul>
                        </li>
                        <li id=menu-item-18
                            class="tm-events-parties menu-item menu-item-type-custom menu-item-object-custom menu-item-18">
                            <a href="<?= BASE_URL ?>events-parties/"><span>EVENTS + PARTIES</span></a></li>
                        <li id=menu-item-19
                            class="tm-contact menu-item menu-item-type-custom menu-item-object-custom menu-item-19"><a
                                href="<?= BASE_URL ?>contact-us/"><span>CONTACT US</span></a></li>
                    </ul>
                </nav>
            </div>
            <div class="tt-col tt-col-btns">
                <ul class="nav-btn">
                    <li><a href="#" data-toggle="modal" data-target="#modalPrivateEvent"><svg class="icon icon-private"
                                version="1.1" xmlns="http://www.w3.org/2000/svg" width="34" height="32"
                                viewBox="0 0 34 32">
                                <title>private</title>
                                <path
                                    d="M0 2.76c0 0.468 0.383 0.848 0.858 0.848h3.755c0.253 0 0.699 0.177 0.882 0.351l2.212 2.099h-2.49c-1.421 0-1.728 0.774-0.685 1.727l10.821 9.893c0.256 0.235 0.549 0.406 0.858 0.52v11.309l-5.020 2.155c-0.434 0.186-0.403 0.337 0.072 0.337h11.906c0.474 0 0.503-0.146 0.065-0.326l-5.307-2.182v-11.265c0.401-0.127 0.78-0.341 1.089-0.662l9.319-9.666c0.98-1.017 0.623-1.841-0.798-1.841h-17.356l-3.499-3.321c-0.503-0.478-1.374-0.824-2.071-0.824h-3.755c-0.474 0.001-0.857 0.38-0.857 0.848z">
                                </path>
                                <path
                                    d="M33.986 7.531c0.117-1.893-0.519-3.716-1.791-5.136-1.272-1.419-3.029-2.266-4.944-2.381-3.365-0.203-6.39 1.893-7.334 5.101l1.647 0.473c0.718-2.442 3.004-4.035 5.583-3.883 1.458 0.088 2.794 0.731 3.761 1.813 0.968 1.080 1.454 2.469 1.365 3.909s-0.74 2.76-1.835 3.717c-1.095 0.956-2.497 1.433-3.959 1.346-0.552-0.034-1.089-0.147-1.6-0.338l-0.606 1.586c0.671 0.25 1.378 0.4 2.102 0.443 0.148 0.009 0.298 0.013 0.447 0.013 1.755 0 3.427-0.625 4.752-1.782 1.439-1.256 2.295-2.99 2.412-4.883z">
                                </path>
                            </svg><span class="tt-text">private <span class="short-hide">events</span></span></a></li>
                    <li><a href="#" data-toggle="modal" data-target="#modalVipTables"><svg class="icon icon-tables"
                                version="1.1" xmlns="http://www.w3.org/2000/svg" width="49" height="32"
                                viewBox="0 0 49 32">
                                <title>tables</title>
                                <path
                                    d="M49.427 29.411l-4.252-27.535c-0.167-1.081-1.056-1.875-2.098-1.875h-34.869l4.941 32h34.18c0.623 0 1.215-0.287 1.619-0.785s0.579-1.158 0.479-1.804zM36.699 18.233h-15.441c-1.174 0-2.126-1-2.126-2.232s0.952-2.232 2.126-2.232h15.44c1.174 0 2.126 0.999 2.126 2.232s-0.952 2.232-2.126 2.232z">
                                </path>
                                <path
                                    d="M4.234 2.164l-4.207 27.247c-0.1 0.646 0.076 1.305 0.479 1.804s0.996 0.785 1.619 0.785h6.716l-4.607-29.836z">
                                </path>
                            </svg><span class="tt-text"><span class="short-hide">VIP</span> tables</span></a></li>
                    <li class="tablet-visible" data-toggle="modal" data-target="#modalChat"><a href="#"><svg
                                class="icon icon-chat" version="1.1" xmlns="http://www.w3.org/2000/svg" width="44"
                                height="32" viewBox="0 0 44 32">
                                <title>chat</title>
                                <path
                                    d="M30.37 0h-26.133c-2.337 0-4.238 1.827-4.238 4.074v14.599c0 2.247 1.901 4.074 4.238 4.074h3.803l0.081 3.679c0.025 1.104 1.343 1.722 2.263 1.056 6.955-5.042 5.97-4.327 6.532-4.735h13.453c2.337 0 4.238-1.827 4.238-4.074v-14.599c0-2.247-1.901-4.074-4.238-4.074zM22.16 16.212h-9.711c-0.78 0-1.413-0.608-1.413-1.358s0.632-1.358 1.413-1.358h9.711c0.78 0 1.413 0.608 1.413 1.358s-0.632 1.358-1.413 1.358zM24.72 10.27h-14.832c-0.78 0-1.413-0.608-1.413-1.358s0.632-1.358 1.413-1.358h14.832c0.78 0 1.413 0.608 1.413 1.358s-0.632 1.358-1.413 1.358zM43.789 12.562v11.204c0 2.25-1.897 4.074-4.238 4.074h-3.81l-0.075 2.836c-0.020 0.738-0.65 1.323-1.413 1.323-0.558 0-0.15 0.154-7.315-4.159h-6.192c-1.080 0-2.067-0.391-2.816-1.033-0.97-0.831-0.362-2.374 0.938-2.374h12.852c2.74 0 4.962-2.136 4.962-4.771v-9.817c0-0.75 0.632-1.358 1.413-1.358h1.457c2.34 0 4.238 1.824 4.238 4.074z">
                                </path>
                            </svg><span class="tt-text">chat</span></a></li>
                </ul>
            </div>
            <div class="tt-col tt-col-obj">
                <div class="tt-obj tt-obj-chat tablet-hidden"><a href="#" class="tt-obj__btn" data-toggle="modal"
                        data-target="#modalChat"><svg class="icon icon-chat" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" width="44" height="32" viewBox="0 0 44 32">
                            <title>chat</title>
                            <path
                                d="M30.37 0h-26.133c-2.337 0-4.238 1.827-4.238 4.074v14.599c0 2.247 1.901 4.074 4.238 4.074h3.803l0.081 3.679c0.025 1.104 1.343 1.722 2.263 1.056 6.955-5.042 5.97-4.327 6.532-4.735h13.453c2.337 0 4.238-1.827 4.238-4.074v-14.599c0-2.247-1.901-4.074-4.238-4.074zM22.16 16.212h-9.711c-0.78 0-1.413-0.608-1.413-1.358s0.632-1.358 1.413-1.358h9.711c0.78 0 1.413 0.608 1.413 1.358s-0.632 1.358-1.413 1.358zM24.72 10.27h-14.832c-0.78 0-1.413-0.608-1.413-1.358s0.632-1.358 1.413-1.358h14.832c0.78 0 1.413 0.608 1.413 1.358s-0.632 1.358-1.413 1.358zM43.789 12.562v11.204c0 2.25-1.897 4.074-4.238 4.074h-3.81l-0.075 2.836c-0.020 0.738-0.65 1.323-1.413 1.323-0.558 0-0.15 0.154-7.315-4.159h-6.192c-1.080 0-2.067-0.391-2.816-1.033-0.97-0.831-0.362-2.374 0.938-2.374h12.852c2.74 0 4.962-2.136 4.962-4.771v-9.817c0-0.75 0.632-1.358 1.413-1.358h1.457c2.34 0 4.238 1.824 4.238 4.074z">
                            </path>
                        </svg></a></div>
                <div class="tt-obj tt-obj-search" id="js-search">
                    <a href="#" class="tt-obj__btn"><i class="icon-search"></i></a>
                    <div class="tt-dropdown-menu">
                        <div class="container">
                            <form role="search" method="get" class="search-form" action="<?= BASE_URL ?>">
                                <div class="tt-col">
                                    <input type="search" id="js-search-input" class="tt-search-input" placeholder="Search Events &hellip;" value="" name="s" />
                                    <button class="tt-btn-search" type="submit"><svg class="icon icon-search" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><title>search</title><path d="M23.483 20.657c1.575-2.15 2.516-4.792 2.516-7.655 0-7.168-5.832-13-13-13s-13 5.832-13 13c0 7.168 5.832 13 13 13 2.863 0 5.505-0.942 7.655-2.517l8.516 8.517 2.828-2.828c0 0-8.517-8.517-8.517-8.517zM13 22.001c-4.963 0-9-4.037-9-9s4.037-9 9-9c4.963 0 9 4.037 9 9s-4.037 9-9 9z"></path></svg><span class="screen-reader-text">Search</span></button>
                                </div>
                                <div class="tt-col">
                                    <a href="#" class="tt-btn-close icon-g-80"></a>
                                </div>
                                <div class="tt-info-text">
                                    What are you Looking for?
                                </div>
                                <div class="search-results" id="js-search-results"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div id="clubio-cart" class="tt-obj tt-obj-cart header-cart"><a href="#"
                        class="tt-obj__btn dropdown-back" data-toggle="dropdown"><svg class="icon icon-cart"
                            version="1.1" xmlns="http://www.w3.org/2000/svg" width="35" height="32" viewBox="0 0 35 32">
                            <title>cart</title>
                            <path
                                d="M32.144 6.336h-25.69l-0.382-4.254c-0.062-0.696-0.646-1.229-1.344-1.229h-2.742c-0.745 0-1.349 0.604-1.349 1.349s0.604 1.349 1.349 1.349h1.508c0.824 9.181-1.306-14.549 1.552 17.291 0.11 1.246 0.783 2.599 1.943 3.517-2.091 2.671-0.181 6.608 3.221 6.608 2.824 0 4.815-2.816 3.847-5.483h7.385c-0.967 2.664 1.020 5.483 3.847 5.483 2.256 0 4.091-1.835 4.091-4.091s-1.835-4.091-4.091-4.091h-15.070c-1.025 0-1.918-0.618-2.304-1.519l21.565-1.267c0.589-0.035 1.087-0.448 1.23-1.020l2.742-10.967c0.213-0.85-0.431-1.677-1.309-1.677zM10.211 28.269c-0.768 0-1.392-0.625-1.392-1.392s0.625-1.392 1.392-1.392c0.768 0 1.392 0.625 1.392 1.392s-0.625 1.392-1.392 1.392zM25.29 28.269c-0.768 0-1.392-0.625-1.392-1.392s0.624-1.392 1.392-1.392 1.392 0.625 1.392 1.392c0 0.768-0.625 1.392-1.392 1.392zM28.334 17.363l-20.78 1.221-0.857-9.55h23.72l-2.082 8.329z">
                            </path>
                        </svg></a>
                    <ul class="dropdown-menu dropdown-menu-mini-cart header-cart-dropdown">
                        <li>
                            <div class="widget_shopping_cart_content">
                                <span class="cart-items-count7 count7 badge"></span>
                                <div class="woocommerce-mini-cart cart_list product_list_widget ">
                                    <span class="cart-items-count7 count7 badge ">0</span>
                                    <p class="woocommerce-mini-cart__empty-message 888">No products in the cart.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tt-obj tt-obj-languages">
                    <div class="tt-skinSelect-02 tt-select__popup-right tt-obj__select">
                        <select id="lang_choice_1" class="tt-select">
						<option value="ENG">EN</option>
						<option value="RUS">RUS</option>
					</select>
                    </div>
                </div>
                <div class="tt-obj tt-obj-toggle">
                    <a href="#" class="tt-menu-toggle icon-menu icon-menu-toggle"></a>
                </div>
            </div>
        </div>
    </header>
    <div id="page" class="site">
        <div class="page-main">
            <div class="site-content-contain">
                <div id="content">
                    <main id="main" class="page-main tt-page-main">
                        <article id="post-2351" class="tt-entry-header ">
                            <div id="tt-pageContent" class="1">
                                <div class="container-indent no-margin mainSlider-wrapper">
                                    <div id="js-mainSlider" class="mainSlider slick-dots01">
                                        <div class="slide">
                                            <div class="img--holder"
                                                data-bgslide="<?= BASE_URL ?>wp-content/uploads/2020/06/mainslide-01-1.jpg">
                                            </div>
                                            <div class="slide-content">
                                                <div class="mainSlider-textmask"
                                                    data-bgslide="<?= BASE_URL ?>wp-content/uploads/2020/06/mainslide-01-1.jpg">
                                                    VIP</div>
                                                <div class="container text-center js-rotation"
                                                    data-animation="fadeInUpSm" data-animation-delay="0s">
                                                    <div class="tt-title-01">The Perfect Nightlife</div>
                                                    <div class="tt-title-02">FEEL
                                                        <span class="tt-base-color">THE NIGHT</span> HERE<br />
With Friends</div>
                                                    <div class="tt-title-03">Theme nights, Private Events and The
                                                        Restaurant Food</div>
                                                    <div class="tt-row-btn"><a class="tt-btn"
                                                            href="events-tickets-1"><span class="ch">view tickets</span></a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="img--holder"
                                                data-bgslide="<?= BASE_URL ?>wp-content/uploads/2020/06/mainslide-03-1.jpg">
                                            </div>
                                            <div class="slide-content">
                                                <div class="mainSlider-textmask"
                                                    data-bgslide="<?= BASE_URL ?>wp-content/uploads/2020/06/mainslide-03-1.jpg">
                                                    VIP</div>
                                                <div class="container text-center js-rotation"
                                                    data-animation="fadeInUpSm" data-animation-delay="0s">
                                                    <div class="tt-title-01">The Perfect Nightlife</div>
                                                    <div class="tt-title-02">FEEL
                                                        <span class="tt-base-color">THE NIGHT</span> HERE<br />
With Friends</div>
                                                    <div class="tt-title-03">Theme nights, Private Events and The
                                                        Restaurant Food</div>
                                                    <div class="tt-row-btn"><a class="tt-btn"
                                                            href="events-tickets-1"><span class="ch">view tickets</span></a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="img--holder"
                                                data-bgslide="<?= BASE_URL ?>wp-content/uploads/2020/06/mainslide-04-1.jpg">
                                            </div>
                                            <div class="slide-content">
                                                <div class="mainSlider-textmask"
                                                    data-bgslide="<?= BASE_URL ?>wp-content/uploads/2020/06/mainslide-04-1.jpg">
                                                    VIP</div>
                                                <div class="container text-center js-rotation"
                                                    data-animation="fadeInUpSm" data-animation-delay="0s">
                                                    <div class="tt-title-01">The Perfect Nightlife</div>
                                                    <div class="tt-title-02">FEEL
                                                        <span class="tt-base-color">THE NIGHT</span> HERE<br />
With Friends</div>
                                                    <div class="tt-title-03">Theme nights, Private Events and The
                                                        Restaurant Food</div>
                                                    <div class="tt-row-btn"><a class="tt-btn js-video-popup"
                                                            href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><span class="ch">view tickets</span></a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="ch-section-events" class="tt-shortcode_vc_section section-indent01">
                                    <div class="tt-shortcode_vc_row 8 container  container">
                                        <div class="tt-shortcode_vc_clmn section-title section-title_bottom-none ">
                                            <h2 style="text-align: center"
                                                class="vc_custom_heading section-title__text">Upcoming Events</h2>
                                            <div class="section-title__text-under">Events</div>
                                            <div class="section-title__link"><a class="link-01" href="events">view all
                                                    events</a></div>
                                        </div>
                                    </div>
                                    <div class="tt-shortcode_vc_row 8 container-fluid  container-fluid">
                                        <div class="tt-shortcode_vc_clmn slick-indent ">
                                            <div class="js-slick01 slick-dots01 js-slick01 slick-dots01">
                                                <div class="shortcode_vc_clmn_inner ch ">
                                                    <div class="rs_inner_block event-item">
                                                        <div class="event-item__label">23<span class="ch">Jan</span>
                                                        </div>

                                                        <div class="event-item__img">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                <img width="331" height="352" src="<?= BASE_URL ?>wp-content/uploads/2020/06/events-01-1.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" title="events-01" />
                                                            </div>
                                                        </div>
                                                        <div class="event-item__layout"><a class="tt-btn" href="#"
                                                                data-toggle="modal"
                                                                data-target="#modalBayTickets"><span class="ch">buy tickets</span></a><a
                                                                class="tt-btn" href="#" data-toggle="modal"
                                                                data-target="#modalVipTables"><span class="ch">VIP tables</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shortcode_vc_clmn_inner ch ">
                                                    <div class="rs_inner_block event-item">
                                                        <div class="event-item__label">28<span class="ch">Jan</span>
                                                        </div>

                                                        <div class="event-item__img">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                <img width="333" height="352" src="<?= BASE_URL ?>wp-content/uploads/2020/06/events-02-1.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" title="events-02" />
                                                            </div>
                                                        </div>
                                                        <div class="event-item__layout"><a class="tt-btn" href="#"
                                                                data-toggle="modal"
                                                                data-target="#modalBayTickets"><span class="ch">buy tickets</span></a><a
                                                                class="tt-btn" href="#" data-toggle="modal"
                                                                data-target="#modalVipTables"><span class="ch">VIP tables</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shortcode_vc_clmn_inner ch ">
                                                    <div class="rs_inner_block event-item">
                                                        <div class="event-item__label">30<span class="ch">Jan</span>
                                                        </div>

                                                        <div class="event-item__img">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                <img width="334" height="352" src="<?= BASE_URL ?>wp-content/uploads/2020/06/events-03-1.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" title="events-03" />
                                                            </div>
                                                        </div>
                                                        <div class="event-item__layout"><a class="tt-btn" href="#"
                                                                data-toggle="modal"
                                                                data-target="#modalBayTickets"><span class="ch">buy tickets</span></a><a
                                                                class="tt-btn" href="#" data-toggle="modal"
                                                                data-target="#modalVipTables"><span class="ch">VIP tables</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shortcode_vc_clmn_inner ch ">
                                                    <div class="rs_inner_block event-item">
                                                        <div class="event-item__label">2<span class="ch">Feb</span>
                                                        </div>

                                                        <div class="event-item__img">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                <img width="334" height="352" src="<?= BASE_URL ?>wp-content/uploads/2020/06/events-04-1.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" title="events-04" />
                                                            </div>
                                                        </div>
                                                        <div class="event-item__layout"><a class="tt-btn" href="#"
                                                                data-toggle="modal"
                                                                data-target="#modalBayTickets"><span class="ch">buy tickets</span></a><a
                                                                class="tt-btn" href="#" data-toggle="modal"
                                                                data-target="#modalVipTables"><span class="ch">VIP tables</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shortcode_vc_clmn_inner ch ">
                                                    <div class="rs_inner_block event-item">
                                                        <div class="event-item__label">5<span class="ch">Feb</span>
                                                        </div>

                                                        <div class="event-item__img">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                <img width="331" height="352" src="<?= BASE_URL ?>wp-content/uploads/2020/06/events-05-1.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" title="events-05" />
                                                            </div>
                                                        </div>
                                                        <div class="event-item__layout"><a class="tt-btn" href="#"
                                                                data-toggle="modal"
                                                                data-target="#modalBayTickets"><span class="ch">buy tickets</span></a><a
                                                                class="tt-btn" href="#" data-toggle="modal"
                                                                data-target="#modalVipTables"><span class="ch">VIP tables</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shortcode_vc_clmn_inner ch ">
                                                    <div class="rs_inner_block event-item">
                                                        <div class="event-item__label">23<span class="ch">Jan</span>
                                                        </div>

                                                        <div class="event-item__img">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                <img width="333" height="352" src="<?= BASE_URL ?>wp-content/uploads/2020/06/events-02-1.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" title="events-02" />
                                                            </div>
                                                        </div>
                                                        <div class="event-item__layout"><a class="tt-btn" href="#"
                                                                data-toggle="modal"
                                                                data-target="#modalBayTickets"><span class="ch">buy tickets</span></a><a
                                                                class="tt-btn" href="#" data-toggle="modal"
                                                                data-target="#modalVipTables"><span class="ch">VIP tables</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="ch-section-about" class="tt-shortcode_vc_section section-indent02">
                                    <div
                                        class="tt-shortcode_vc_row 8 container-fluid no-gutters section-marker  container-fluid no-gutters section-marker">
                                        <div class="tt-shortcode_vc_clmn events-wide-list ">
                                            <div class="events-wide events-wide">
                                                <div class="shortcode_vc_clmn_inner events-wide__img ">
                                                    <div class="ch"><a class="js-video-popup lazyload"
                                                            href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                                            data-bg="wp-content/themes/clubio/images/events-wide01.jpg"><span class="tt-text tt-text__right">Night CLub</span>
                                                            <span class="tt-icon"> </span></a></div>
                                                </div>
                                                <div class="shortcode_vc_clmn_inner events-wide__content tt-color02 ">
                                                    <div class="rs_inner_block events-wide_wrapper">
                                                        <div class="blocktitle_color-01 blocktitle">
                                                            <div class="tt-caption">ABOUT NIGHT CLUB</div>
                                                            <h4 class="tt-title">Old Space. New Stories</h4>
                                                            <div class="tt-title-under">About</div>
                                                        </div>
                                                        <p class="ch">Our award-winning seasonal music series showcases
                                                            the best in live and electronic music, becoming a vital part
                                                            of the city’s vibrant cultural scene today and garnering
                                                            global acclaim. Our Autumn/Winter 2019 Season features in
                                                            excess of 250 artists, with over 30 shows taking place
                                                            between September and January.</p>
                                                        <div class="ch"><a class="tt-btn tt-btn_color02"
                                                                href="news"><span class="ch">know more</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-wide tt-item__revers events-wide tt-item__revers">
                                                <div class="shortcode_vc_clmn_inner events-wide__img ">
                                                    <div class="ch"><a class="js-video-popup lazyload"
                                                            href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                                            data-bg="wp-content/themes/clubio/images/events-wide02.jpg"><span class="tt-text tt-text__left">Day CLub</span><span class="tt-icon"> </span>
                                                        </a></div>
                                                </div>
                                                <div class="shortcode_vc_clmn_inner events-wide__content tt-color01 ">
                                                    <div class="rs_inner_block events-wide_wrapper">
                                                        <div class="blocktitle">
                                                            <div class="tt-caption">About Day Club</div>
                                                            <h4 class="tt-title">Feel the Day Energy</h4>
                                                            <div class="tt-title-under">About</div>
                                                        </div>
                                                        <p class="ch">VIP Clubio also features a dayclub that serves as
                                                            an exclusive adult oasis by day and an extension of the
                                                            nightclub in the evening. You can experience a vibrant beach
                                                            club scene hosted by today’s most influential DJs while
                                                            living it up in eight Grand Cabanas, each with its own
                                                            private spa and infinity plunge pool.</p>
                                                        <div class="ch"><a class="tt-btn-default"
                                                                href="news"><span class="ch">know more</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="ch-section-offers"
                                    class="tt-shortcode_vc_section section-indent03 section-marker section-marker__indent01">
                                    <div
                                        class="tt-shortcode_vc_row 8 container container-fluid-tablet  container container-fluid-tablet">
                                        <div class="tt-shortcode_vc_clmn section-title ">
                                            <h2 style="text-align: center"
                                                class="vc_custom_heading section-title__text">What We Offer</h2>
                                            <div style="text-align: left"
                                                class="vc_custom_heading section-title__text-under">Services</div>
                                            <div style="text-align: center"
                                                class="vc_custom_heading title__text-description">Experience the best
                                                nightlife option in with this escorted tour that includes 3 of the
                                                funnest bar/lounges/clubs each night has to offer</div>
                                        </div>
                                    </div>
                                    <div
                                        class="tt-shortcode_vc_row 8 container container-fluid-tablet  container container-fluid-tablet">
                                        <div class="tt-shortcode_vc_clmn events-img-list ">
                                            <div
                                                class="slick-dots02 js-slick02 event-item02-list row slick-dots02 js-slick02 event-item02-list row">
                                                <div class="shortcode_vc_clmn_inner col-md-4 ">
                                                    <div class="rs_inner_block event-item02">
                                                        <div class="event-item02__img lazyload"
                                                            style="background-image: url(<?= BASE_URL ?>wp-content/uploads/2020/06/events-offer-02-1.jpg)">
                                                        </div>
                                                        <div class="event-item02__border">
                                                            <div class="event-item02__border-top"></div>
                                                            <div class="event-item02__border-y"></div>
                                                        </div>
                                                        <div class="event-item02__content">
                                                            <div class="event-item02__align">
                                                                <h4 class="tt-title">Corporate Events</h4>
                                                                <p class="ch">A friendly happy hour, a company holiday
                                                                    party, or an evening of entertainment for VIP.</p>
                                                                <div class="ch"><a class="tt-btn"
                                                                        href="events-parties"><span class="ch">know more</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shortcode_vc_clmn_inner col-md-4 ">
                                                    <div class="rs_inner_block event-item02">
                                                        <div class="event-item02__img lazyload"
                                                            style="background-image: url(<?= BASE_URL ?>wp-content/uploads/2020/06/events-offer-01-1.jpg)">
                                                        </div>
                                                        <div class="event-item02__border">
                                                            <div class="event-item02__border-top"></div>
                                                            <div class="event-item02__border-y"></div>
                                                        </div>
                                                        <div class="event-item02__content">
                                                            <div class="event-item02__align">
                                                                <h4 class="tt-title">Birthday Parties</h4>
                                                                <p class="ch">Spend your birthday with us, and enjoy a
                                                                    night you’ll remember forever.</p>
                                                                <div class="ch"><a class="tt-btn"
                                                                        href="events-parties"><span class="ch">know more</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shortcode_vc_clmn_inner col-md-4 ">
                                                    <div class="rs_inner_block event-item02">
                                                        <div class="event-item02__img lazyload"
                                                            style="background-image: url(<?= BASE_URL ?>wp-content/uploads/2020/06/events-offer-03-1.jpg)">
                                                        </div>
                                                        <div class="event-item02__border">
                                                            <div class="event-item02__border-top"></div>
                                                            <div class="event-item02__border-y"></div>
                                                        </div>
                                                        <div class="event-item02__content">
                                                            <div class="event-item02__align">
                                                                <h4 class="tt-title">Bachelorette</h4>
                                                                <p class="ch">VIP Night Club! End your single days in
                                                                    style with a VIP table reservation.</p>
                                                                <div class="ch"><a class="tt-btn"
                                                                        href="events-parties"><span class="ch">know more</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="ch-section-add-services"
                                    class="tt-shortcode_vc_row 8 section-indent04  section-indent04">
                                    <div class="tt-shortcode_vc_clmn promo-box-wide ">
                                        <div class="tt-item tt-item">
                                            <div class="shortcode_vc_clmn_inner tt-item__img vc_custom_1591723022803">
                                            </div>
                                            <div class="shortcode_vc_clmn_inner tt-item__content ">
                                                <div class="tt-item__label">
                                                    <div class="test7 tt-item__label-icon"><svg class="icon icon-cup"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg" width="27"
                                                            height="32" viewBox="0 0 27 32">
                                                            <title>cup</title>
                                                            <path
                                                                d="M26.467 3.317c-0.434-0.503-1.067-0.791-1.737-0.791h-2.198v-0.677c0-0.838-0.692-1.519-1.543-1.519h-14.905c-0.851 0-1.543 0.682-1.543 1.519v0.677h-2.198c-0.67 0-1.303 0.288-1.737 0.791-0.43 0.497-0.615 1.151-0.509 1.792 0.578 3.497 2.813 6.587 5.984 8.281 0.29 0.686 0.618 1.336 0.984 1.942 1.168 1.935 2.619 3.272 4.217 3.918 0.162 1.612-0.927 3.139-2.568 3.503-0.004 0.001-0.006 0.002-0.009 0.003-0.32 0.075-0.558 0.358-0.558 0.697v3.289h-1.351c-1.204 0-2.184 0.965-2.184 2.151v1.698c0 0.396 0.326 0.717 0.728 0.717h16.466c0.402 0 0.728-0.321 0.728-0.717v-1.698c0-1.186-0.98-2.151-2.184-2.151h-1.351v-3.289c0-0.339-0.239-0.622-0.56-0.697-0.003-0.001-0.006-0.002-0.009-0.002-1.653-0.366-2.744-1.909-2.565-3.533 1.57-0.657 2.996-1.982 4.146-3.888 0.366-0.606 0.694-1.256 0.984-1.942 3.172-1.695 5.407-4.784 5.984-8.281 0.106-0.642-0.080-1.295-0.509-1.792zM1.534 4.879c-0.038-0.229 0.026-0.454 0.181-0.633 0.157-0.182 0.386-0.286 0.628-0.286h2.198v1.319c0 2.068 0.268 4.072 0.776 5.904-1.997-1.554-3.371-3.811-3.783-6.304zM20.348 28.177c0.402 0 0.728 0.322 0.728 0.717v0.981h-15.009v-0.981c0-0.395 0.327-0.717 0.728-0.717h13.553zM17.541 24.171v2.572h-7.939v-2.572h7.939zM11.511 22.737c0.18-0.195 0.345-0.406 0.492-0.633 0.485-0.747 0.74-1.595 0.751-2.461 0.259 0.035 0.52 0.053 0.783 0.053 0.286 0 0.57-0.022 0.851-0.063 0.017 1.164 0.477 2.266 1.25 3.103h-4.127zM21.076 5.279c0 3.532-0.824 6.843-2.319 9.321-1.425 2.362-3.279 3.662-5.22 3.662s-3.795-1.3-5.22-3.662c-1.496-2.478-2.319-5.789-2.319-9.321v-3.43c0-0.047 0.039-0.085 0.087-0.085h14.905c0.048 0 0.087 0.038 0.087 0.085v3.43zM25.539 4.879c-0.412 2.493-1.786 4.75-3.783 6.304 0.508-1.832 0.776-3.836 0.776-5.904v-1.319h2.198c0.242 0 0.471 0.104 0.628 0.286 0.155 0.179 0.219 0.404 0.181 0.633z">
                                                            </path>
                                                            <path
                                                                d="M17.957 7.691c-0.086-0.259-0.314-0.449-0.588-0.488l-2.197-0.314-0.982-1.96c-0.123-0.245-0.376-0.4-0.653-0.4s-0.53 0.155-0.653 0.4l-0.982 1.96-2.197 0.314c-0.274 0.039-0.502 0.228-0.588 0.488s-0.014 0.545 0.184 0.735l1.59 1.526-0.375 2.155c-0.047 0.269 0.065 0.541 0.29 0.701s0.521 0.182 0.767 0.055l1.965-1.017 1.965 1.017c0.107 0.055 0.223 0.082 0.339 0.082 0.151 0 0.301-0.046 0.428-0.137 0.224-0.16 0.337-0.432 0.29-0.701l-0.375-2.155 1.59-1.526c0.199-0.19 0.27-0.475 0.184-0.735zM14.892 9.188c-0.172 0.165-0.25 0.402-0.209 0.635l0.191 1.095-0.998-0.517c-0.106-0.055-0.222-0.082-0.339-0.082s-0.233 0.027-0.339 0.082l-0.998 0.517 0.191-1.095c0.041-0.233-0.038-0.47-0.209-0.635l-0.807-0.775 1.116-0.16c0.237-0.034 0.442-0.181 0.548-0.392l0.499-0.996 0.499 0.996c0.106 0.212 0.311 0.358 0.548 0.392l1.116 0.16-0.807 0.775z">
                                                            </path>
                                                        </svg></div>
                                                    <div class="tt-item__label-text-01">Best Night Club</div>
                                                    <div class="tt-item__label-text-02">2020</div>
                                                    <div class="tt-item__label-text-03">Awards</div>
                                                </div>
                                                <div class="blocktitle">
                                                    <h4 class="tt-title">Additional Services</h4>
                                                    <div class="tt-title-under">Additional</div>
                                                </div>
                                                <div class="tt-content-text">
                                                    <p class="title__text-description">Enjoy a hassle-free night where
                                                        all you have to worry about is enjoying yourself in company of
                                                        friends. Our professional team will arrange the most convenient
                                                        time for your group and personally escort you into the club.</p>
                                                    <ul id="js-show-layout" class="list-01 list-text-top">
                                                        <li><a href="#">Executive Event Production</a></li>
                                                        <li><a href="#">Dancers &amp; Performance Artists</a></li>
                                                        <li><a href="#">Celebrity Recruitment</a></li>
                                                        <li><a href="#">PR Support</a></li>
                                                        <li><a href="#">Photography</a></li>
                                                        <li class="tt-table-hide"><a href="#">Event Conception Theme
                                                                Decor</a></li>
                                                        <li class="tt-table-hide"><a href="#">Custom Invite Creation</a>
                                                        </li>
                                                        <li class="tt-table-hide"><a href="#">Creative Signage and
                                                                Branding</a></li>
                                                        <li class="tt-table-hide"><a href="#">Audience Procurement</a>
                                                        </li>
                                                        <li class="tt-table-hide"><a href="#">Model Outreach</a></li>
                                                    </ul>
                                                    <div class="ch"><a id="js-show-btn"
                                                            class="tt-link tt-link-top d-block d-lg-none" href="#">view
                                                            more&#8230;</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="ch-section-residents"
                                    class="tt-shortcode_vc_section section-wrapper01 vc_custom_1591792053837 vc_section-has-fill">
                                    <div class="tt-shortcode_vc_clmn promo02 ">
                                        <div class="test7 promo02__img"><svg width="187" height="232"
                                                viewBox="0 0 187 232" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_d)">
                                                    <path
                                                        d="M146.596 33.6C132.798 33.6232 121.165 43.9142 119.428 57.6333H110.823L121.764 19.8667H132.894V13H119.192C117.668 13.0004 116.328 14.0094 115.903 15.4754L103.691 57.6333H16.4264C14.5346 57.6329 13.0004 59.1698 13 61.0658C13 61.84 13.2608 62.5915 13.7408 63.1988L78.0856 144.661V212.133H50.6815V219H112.341V212.133H84.9366V144.661L132.455 84.5026C136.702 87.1407 141.6 88.5368 146.596 88.5333C161.731 88.5333 174 76.236 174 61.0667C174 45.8973 161.731 33.6 146.596 33.6ZM23.5069 64.5H101.701L94.7405 88.5333H42.4911L23.5069 64.5ZM81.5111 137.936L47.9137 95.4H92.7537L85.0737 121.909L91.6507 123.825L99.8856 95.4H115.109L81.5111 137.936ZM120.531 88.5333H101.872L108.836 64.5H139.515L120.531 88.5333ZM146.596 81.6667C143.135 81.6847 139.728 80.8088 136.703 79.1226L149.281 63.1988C150.456 61.7126 150.207 59.553 148.724 58.3754C148.119 57.8947 147.369 57.6329 146.596 57.6333H126.327C128.219 46.4153 138.826 38.8586 150.018 40.7546C161.211 42.6507 168.75 53.282 166.859 64.5C165.187 74.4103 156.624 81.665 146.596 81.6667Z"
                                                        stroke="url(#paint0_linear)" stroke-width="2" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d" x="0" y="0" width="187" height="232"
                                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                        <feOffset />
                                                        <feGaussianBlur stdDeviation="6" />
                                                        <feColorMatrix type="matrix"
                                                            values="0 0 0 0 1 0 0 0 0 0.1 0 0 0 0 0.262 0 0 0 1 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                            result="effect1_dropShadow" />
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                            in2="effect1_dropShadow" result="shape" />
                                                    </filter>
                                                    <linearGradient id="paint0_linear" x1="93.5" y1="13" x2="93.5"
                                                        y2="332" gradientUnits="userSpaceOnUse">
                                                        <stop offset="1" stop-color="#FF1A43" />
                                                        <stop offset="1" stop-color="#7B16D9" />
                                                    </linearGradient>
                                                </defs>
                                            </svg> </div>
                                        <div class="container">
                                            <div class="promo02__layout promo02__layout">
                                                <div class="shortcode_vc_clmn_inner tt-col ">
                                                    <h6 class="promo02__title">Book Your
                                                        <br class="ch" /><span class="tt-base-color">VIP Table</span>
                                                        Now!</h6>
                                                </div>
                                                <div class="shortcode_vc_clmn_inner tt-col promo02__content ">
                                                    <div class="ch">VIP Clubio offers private and semi-private nightclub
                                                        tables coupled with VIP bottle service treatment. Please inquire
                                                        here for availability and our VIP Reservations Manager will
                                                        follow up in a timely manner.</div>
                                                </div>
                                                <div class="shortcode_vc_clmn_inner tt-col ">
                                                    <div class="promo02_rowbtn"><a class="tt-btn tt-btn__wide" href="#"
                                                            data-toggle="modal"
                                                            data-target="#modalVipTables"><span class="ch">book VIP table</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tt-shortcode_vc_row 8 section-inner section-marker  section-inner section-marker">
                                        <div class="section-wrapper02"></div>
                                        <div class="container container-fluid-tablet container container-fluid-tablet">
                                            <div class="shortcode_vc_clmn_inner section-title ">
                                                <h2 class="section-title__text">Our Residents</h2>
                                                <div class="section-title__text-under">Residents</div>
                                                <div class="title__text-description">We have great crowd motivating DJs
                                                    who are night builders and can help to increase spend and dwell time
                                                    in our club</div>
                                            </div>
                                        </div>
                                        <div class="container container-fluid-tablet">
                                            <div
                                                class="js-slick03 slick-dots01 tt-box01-wrapper js-slick03 slick-dots01 tt-box01-wrapper">
                                                <div class="shortcode_vc_clmn_inner item ">
                                                    <div class="rs_inner_block tt-box01">
                                                        <div class="rs-block-text-image ">
                                                            <div class="rs-block-image__wrapper tt-box01__img square">
                                                                <img src="<?= BASE_URL ?>wp-content/uploads/2020/06/box01-img01-1.jpg" alt="Hover Box Element">
                                                            </div>
                                                            <div class="rs-block-text__wrapper tt-box01_layout">
                                                                <div class="tt-col">
                                                                    <ul class="tt-box01__social">
                                                                        <li><a title=""
                                                                                href="https://www.facebook.com/"><svg
                                                                                    class="icon icon-social-facebook"
                                                                                    version="1.1"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="16" height="32"
                                                                                    viewBox="0 0 16 32">
                                                                                    <title>social-facebook</title>
                                                                                    <path
                                                                                        d="M9.938 10.5v-2.781c0-0.208 0-0.385 0-0.531 0.021-0.167 0.042-0.302 0.063-0.406 0.021-0.125 0.052-0.24 0.094-0.344 0.042-0.125 0.094-0.24 0.156-0.344s0.146-0.188 0.25-0.25c0.125-0.083 0.26-0.146 0.406-0.188 0.167-0.063 0.344-0.104 0.531-0.125 0.208-0.021 0.438-0.031 0.688-0.031h2.75v-5.5h-4.406c-1.271 0-2.365 0.156-3.281 0.469-0.917 0.292-1.656 0.74-2.219 1.344-0.542 0.604-0.958 1.354-1.25 2.25-0.271 0.896-0.406 1.927-0.406 3.094v3.344h-3.313v5.5h3.313v16h6.625v-16h4.406l0.594-5.5h-5z">
                                                                                    </path>
                                                                                </svg></a></li>
                                                                        <li><a title=""
                                                                                href="https://www.instagram.com/"><svg
                                                                                    class="icon icon-social-instagram"
                                                                                    version="1.1"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="32" height="32"
                                                                                    viewBox="0 0 32 32">
                                                                                    <title>social-instagram</title>
                                                                                    <path
                                                                                        d="M22 0h-12c-5.522 0-10 4.478-10 10v12c0 5.522 4.478 10 10 10h12c5.522 0 10-4.478 10-10v-12c0-5.522-4.478-10-10-10zM29 22c0 3.86-3.14 7-7 7h-12c-3.86 0-7-3.14-7-7v-12c0-3.86 3.14-7 7-7h12c3.86 0 7 3.14 7 7v12z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M16 8c-4.418 0-8 3.582-8 8s3.582 8 8 8c4.418 0 8-3.582 8-8s-3.582-8-8-8zM16 21c-2.756 0-5-2.244-5-5 0-2.758 2.244-5 5-5s5 2.242 5 5c0 2.756-2.244 5-5 5z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M24.6 8.466c0.589 0 1.066-0.477 1.066-1.066s-0.477-1.066-1.066-1.066c-0.589 0-1.066 0.477-1.066 1.066s0.477 1.066 1.066 1.066z">
                                                                                    </path>
                                                                                </svg></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tt-col">
                                                                    <div class="tt-box01__title">
                                                                        <div class="tt-title01"><a
                                                                                href="https://www.instagram.com/">Anthony
                                                                                Markus</a></div>
                                                                        <div class="tt-title02">House, Deep House</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shortcode_vc_clmn_inner item ">
                                                    <div class="rs_inner_block tt-box01">
                                                        <div class="rs-block-text-image ">
                                                            <div class="rs-block-image__wrapper tt-box01__img square">
                                                                <img src="<?= BASE_URL ?>wp-content/uploads/2020/06/box01-img02-1.jpg" alt="Hover Box Element">
                                                            </div>
                                                            <div
                                                                class="rs-block-text__wrapper tt-box01_layout tt-box01_layout02">
                                                                <div class="tt-col">
                                                                    <ul class="tt-box01__social">
                                                                        <li><a title=""
                                                                                href="https://www.facebook.com/"><svg
                                                                                    class="icon icon-social-facebook"
                                                                                    version="1.1"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="16" height="32"
                                                                                    viewBox="0 0 16 32">
                                                                                    <title>social-facebook</title>
                                                                                    <path
                                                                                        d="M9.938 10.5v-2.781c0-0.208 0-0.385 0-0.531 0.021-0.167 0.042-0.302 0.063-0.406 0.021-0.125 0.052-0.24 0.094-0.344 0.042-0.125 0.094-0.24 0.156-0.344s0.146-0.188 0.25-0.25c0.125-0.083 0.26-0.146 0.406-0.188 0.167-0.063 0.344-0.104 0.531-0.125 0.208-0.021 0.438-0.031 0.688-0.031h2.75v-5.5h-4.406c-1.271 0-2.365 0.156-3.281 0.469-0.917 0.292-1.656 0.74-2.219 1.344-0.542 0.604-0.958 1.354-1.25 2.25-0.271 0.896-0.406 1.927-0.406 3.094v3.344h-3.313v5.5h3.313v16h6.625v-16h4.406l0.594-5.5h-5z">
                                                                                    </path>
                                                                                </svg></a></li>
                                                                        <li><a title=""
                                                                                href="https://www.instagram.com/"><svg
                                                                                    class="icon icon-social-instagram"
                                                                                    version="1.1"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="32" height="32"
                                                                                    viewBox="0 0 32 32">
                                                                                    <title>social-instagram</title>
                                                                                    <path
                                                                                        d="M22 0h-12c-5.522 0-10 4.478-10 10v12c0 5.522 4.478 10 10 10h12c5.522 0 10-4.478 10-10v-12c0-5.522-4.478-10-10-10zM29 22c0 3.86-3.14 7-7 7h-12c-3.86 0-7-3.14-7-7v-12c0-3.86 3.14-7 7-7h12c3.86 0 7 3.14 7 7v12z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M16 8c-4.418 0-8 3.582-8 8s3.582 8 8 8c4.418 0 8-3.582 8-8s-3.582-8-8-8zM16 21c-2.756 0-5-2.244-5-5 0-2.758 2.244-5 5-5s5 2.242 5 5c0 2.756-2.244 5-5 5z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M24.6 8.466c0.589 0 1.066-0.477 1.066-1.066s-0.477-1.066-1.066-1.066c-0.589 0-1.066 0.477-1.066 1.066s0.477 1.066 1.066 1.066z">
                                                                                    </path>
                                                                                </svg></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tt-col">
                                                                    <div class="tt-box01__title">
                                                                        <div class="tt-title01"><a
                                                                                href="https://www.instagram.com/">Ann
                                                                                Sandoval</a></div>
                                                                        <div class="tt-title02">House, Deep House</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shortcode_vc_clmn_inner item ">
                                                    <div class="rs_inner_block tt-box01">
                                                        <div class="rs-block-text-image ">
                                                            <div class="rs-block-image__wrapper tt-box01__img square">
                                                                <img src="<?= BASE_URL ?>wp-content/uploads/2020/06/box01-img03-1.jpg" alt="Hover Box Element">
                                                            </div>
                                                            <div class="rs-block-text__wrapper tt-box01_layout">
                                                                <div class="tt-col">
                                                                    <ul class="tt-box01__social">
                                                                        <li><a title=""
                                                                                href="https://www.facebook.com/"><svg
                                                                                    class="icon icon-social-facebook"
                                                                                    version="1.1"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="16" height="32"
                                                                                    viewBox="0 0 16 32">
                                                                                    <title>social-facebook</title>
                                                                                    <path
                                                                                        d="M9.938 10.5v-2.781c0-0.208 0-0.385 0-0.531 0.021-0.167 0.042-0.302 0.063-0.406 0.021-0.125 0.052-0.24 0.094-0.344 0.042-0.125 0.094-0.24 0.156-0.344s0.146-0.188 0.25-0.25c0.125-0.083 0.26-0.146 0.406-0.188 0.167-0.063 0.344-0.104 0.531-0.125 0.208-0.021 0.438-0.031 0.688-0.031h2.75v-5.5h-4.406c-1.271 0-2.365 0.156-3.281 0.469-0.917 0.292-1.656 0.74-2.219 1.344-0.542 0.604-0.958 1.354-1.25 2.25-0.271 0.896-0.406 1.927-0.406 3.094v3.344h-3.313v5.5h3.313v16h6.625v-16h4.406l0.594-5.5h-5z">
                                                                                    </path>
                                                                                </svg></a></li>
                                                                        <li><a title=""
                                                                                href="https://www.instagram.com/"><svg
                                                                                    class="icon icon-social-instagram"
                                                                                    version="1.1"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="32" height="32"
                                                                                    viewBox="0 0 32 32">
                                                                                    <title>social-instagram</title>
                                                                                    <path
                                                                                        d="M22 0h-12c-5.522 0-10 4.478-10 10v12c0 5.522 4.478 10 10 10h12c5.522 0 10-4.478 10-10v-12c0-5.522-4.478-10-10-10zM29 22c0 3.86-3.14 7-7 7h-12c-3.86 0-7-3.14-7-7v-12c0-3.86 3.14-7 7-7h12c3.86 0 7 3.14 7 7v12z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M16 8c-4.418 0-8 3.582-8 8s3.582 8 8 8c4.418 0 8-3.582 8-8s-3.582-8-8-8zM16 21c-2.756 0-5-2.244-5-5 0-2.758 2.244-5 5-5s5 2.242 5 5c0 2.756-2.244 5-5 5z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M24.6 8.466c0.589 0 1.066-0.477 1.066-1.066s-0.477-1.066-1.066-1.066c-0.589 0-1.066 0.477-1.066 1.066s0.477 1.066 1.066 1.066z">
                                                                                    </path>
                                                                                </svg></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tt-col">
                                                                    <div class="tt-box01__title">
                                                                        <div class="tt-title01"><a
                                                                                href="https://www.instagram.com/">Kenneth
                                                                                Pierce</a></div>
                                                                        <div class="tt-title02">Kenneth Piercee</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shortcode_vc_clmn_inner item ">
                                                    <div class="rs_inner_block tt-box01">
                                                        <div class="rs-block-text-image ">
                                                            <div class="rs-block-image__wrapper tt-box01__img square">
                                                                <img src="<?= BASE_URL ?>wp-content/uploads/2020/06/box01-img01-1.jpg" alt="Hover Box Element">
                                                            </div>
                                                            <div class="rs-block-text__wrapper tt-box01_layout">
                                                                <div class="tt-col">
                                                                    <ul class="tt-box01__social">
                                                                        <li><a title=""
                                                                                href="https://www.facebook.com/"><svg
                                                                                    class="icon icon-social-facebook"
                                                                                    version="1.1"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="16" height="32"
                                                                                    viewBox="0 0 16 32">
                                                                                    <title>social-facebook</title>
                                                                                    <path
                                                                                        d="M9.938 10.5v-2.781c0-0.208 0-0.385 0-0.531 0.021-0.167 0.042-0.302 0.063-0.406 0.021-0.125 0.052-0.24 0.094-0.344 0.042-0.125 0.094-0.24 0.156-0.344s0.146-0.188 0.25-0.25c0.125-0.083 0.26-0.146 0.406-0.188 0.167-0.063 0.344-0.104 0.531-0.125 0.208-0.021 0.438-0.031 0.688-0.031h2.75v-5.5h-4.406c-1.271 0-2.365 0.156-3.281 0.469-0.917 0.292-1.656 0.74-2.219 1.344-0.542 0.604-0.958 1.354-1.25 2.25-0.271 0.896-0.406 1.927-0.406 3.094v3.344h-3.313v5.5h3.313v16h6.625v-16h4.406l0.594-5.5h-5z">
                                                                                    </path>
                                                                                </svg></a></li>
                                                                        <li><a title=""
                                                                                href="https://www.instagram.com/"><svg
                                                                                    class="icon icon-social-instagram"
                                                                                    version="1.1"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="32" height="32"
                                                                                    viewBox="0 0 32 32">
                                                                                    <title>social-instagram</title>
                                                                                    <path
                                                                                        d="M22 0h-12c-5.522 0-10 4.478-10 10v12c0 5.522 4.478 10 10 10h12c5.522 0 10-4.478 10-10v-12c0-5.522-4.478-10-10-10zM29 22c0 3.86-3.14 7-7 7h-12c-3.86 0-7-3.14-7-7v-12c0-3.86 3.14-7 7-7h12c3.86 0 7 3.14 7 7v12z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M16 8c-4.418 0-8 3.582-8 8s3.582 8 8 8c4.418 0 8-3.582 8-8s-3.582-8-8-8zM16 21c-2.756 0-5-2.244-5-5 0-2.758 2.244-5 5-5s5 2.242 5 5c0 2.756-2.244 5-5 5z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M24.6 8.466c0.589 0 1.066-0.477 1.066-1.066s-0.477-1.066-1.066-1.066c-0.589 0-1.066 0.477-1.066 1.066s0.477 1.066 1.066 1.066z">
                                                                                    </path>
                                                                                </svg></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tt-col">
                                                                    <div class="tt-box01__title">
                                                                        <div class="tt-title01"><a
                                                                                href="https://www.instagram.com/">Anthony
                                                                                Markus</a></div>
                                                                        <div class="tt-title02">House, Deep House</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tt-shortcode_vc_section section-marker section-marker__indent02">
                                    <div class="section-indent-minus01">
                                        <div
                                            class="tt-shortcode_vc_row 8 section-parallax lazyload vc_custom_1591363421212 vc_row-has-fill  section-parallax lazyload">
                                            <div class="tt-shortcode_vc_clmn section-parallax-inner ">
                                                <div class="container container-fluid-tablet">
                                                    <p><a title="" href="#"
                                                            class="parallax__navleft icon-arrow_left"><svg
                                                                class="icon icon-arrow_left" version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg" width="17"
                                                                height="32" viewBox="0 0 17 32">
                                                                <title>arrow_left</title>
                                                                <path
                                                                    d="M0.371 16.895l14.875 14.75c0.486 0.482 1.264 0.472 1.738-0.022s0.464-1.286-0.022-1.768l-13.972-13.855 13.972-13.855c0.486-0.482 0.496-1.273 0.022-1.768s-1.252-0.504-1.738-0.022l-14.875 14.75c-0.237 0.235-0.371 0.558-0.371 0.895s0.134 0.66 0.371 0.895z">
                                                                </path>
                                                            </svg></a><a title="" href="#"
                                                            class="parallax__navright icon-arrow_right"><svg
                                                                class="icon icon-arrow_right" version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg" width="17"
                                                                height="32" viewBox="0 0 17 32">
                                                                <title>arrow_right</title>
                                                                <path
                                                                    d="M16.962 15.105l-14.875-14.75c-0.486-0.482-1.264-0.472-1.738 0.022s-0.464 1.286 0.022 1.768l13.972 13.855-13.972 13.855c-0.486 0.482-0.496 1.273-0.022 1.768s1.252 0.504 1.738 0.022l14.875-14.75c0.237-0.235 0.371-0.558 0.371-0.895s-0.134-0.66-0.371-0.895z">
                                                                </path>
                                                            </svg></a></p>
                                                    <div class="section-parallax-border01">
                                                        <div
                                                            class="section-parallax-border02 section-parallax-border02">
                                                            <div
                                                                class="inner_detect_vc_row_inner js-init-slick04 slick-dots01 slick-arrows01">
                                                                <div class="shortcode_vc_clmn_inner item ">
                                                                    <div class="rs_inner_block tt-parallax01">
                                                                        <div
                                                                            class="shortcode_vc_text  tt-parallax01__wrapper">
                                                                            <div class="tt-parallax01__data">Saturday,
                                                                                Jan 25, 2020</div>
                                                                            <div class="tt-parallax01__title">Elevation:
                                                                                Season Opening Party</div>
                                                                            <p class="ch">The season opening party is
                                                                                here. Super special debut of RSS Disco,
                                                                                the now legendary Mayan Warrior resident
                                                                                Peter Invasion who brought it top level
                                                                                to the City of Gods &amp; the debut of
                                                                                Savaggio &amp; ZERO!!!</p>
                                                                            <div class="ch"><a
                                                                                    class="tt-btn tt-btn__wide"
                                                                                    href="news"><span class="ch">know more</span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="shortcode_vc_clmn_inner item ">
                                                                    <div class="rs_inner_block tt-parallax01">
                                                                        <div
                                                                            class="shortcode_vc_text  tt-parallax01__wrapper">
                                                                            <div class="tt-parallax01__data">Saturday,
                                                                                Jan 25, 2020</div>
                                                                            <div class="tt-parallax01__title">Elevation:
                                                                                Season Opening Party</div>
                                                                            <p class="ch">The season opening party is
                                                                                here. Super special debut of RSS Disco,
                                                                                the now legendary Mayan Warrior resident
                                                                                Peter Invasion who brought it top level
                                                                                to the City of Gods &amp; the debut of
                                                                                Savaggio &amp; ZERO!!!</p>
                                                                            <div class="ch"><a
                                                                                    class="tt-btn tt-btn__wide"
                                                                                    href="news"><span class="ch">know more</span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="ch-section-instagram"
                                    class="tt-shortcode_vc_row 8 section-marker section-marker__indent04  section-marker section-marker__indent04">
                                    <div class="tt-shortcode_vc_clmn section-indent06 ">
                                        <div class="shortcode_vc_text  container">
                                            <div class="section-title section-title_01">
                                                <div class="section-title__label">YOU CAN AFFORD MORE HERE</div>
                                                <h2 class="section-title__text">Instagram <a class="tt-base-color"
                                                        href="https://www.instagram.com/vipclubiodemo/">@VIPClubio</a>
                                                </h2>
                                                <div class="section-title__text-under">Gallery</div>
                                            </div>
                                        </div>
                                        <div id="instafeed" class="items_6 instafeed-masonry activation"
                                            data-totalitem="12">
                                            <div class="instagram_gallery"><a class="instagram-image"
                                                    href="https://www.instagram.com/p/B_68Y6dlhPK" target="_blank"
                                                    rel="noopener"><img src="<?= BASE_URL ?>wp-content/uploads/2021/05/12.jpg" alt="#clubiodemo7" /></a><a
                                                    class="instagram-image"
                                                    href="https://www.instagram.com/p/B_68XRJlz3r" target="_blank"
                                                    rel="noopener"><img src="<?= BASE_URL ?>wp-content/uploads/2021/05/11.jpg" alt="#clubiodemo7" /></a><a
                                                    class="instagram-image"
                                                    href="https://www.instagram.com/p/B_68VOsF51h" target="_blank"
                                                    rel="noopener"><img src="<?= BASE_URL ?>wp-content/uploads/2021/05/10.jpg" alt="#clubiodemo7" /></a><a
                                                    class="instagram-image"
                                                    href="https://www.instagram.com/p/B_68TPBF3fd" target="_blank"
                                                    rel="noopener"><img src="<?= BASE_URL ?>wp-content/uploads/2021/05/09.jpg" alt="#clubiodemo7" /></a><a
                                                    class="instagram-image"
                                                    href="https://www.instagram.com/p/B_68RftlOO5" target="_blank"
                                                    rel="noopener"><img src="<?= BASE_URL ?>wp-content/uploads/2021/05/08.jpg" alt="#clubiodemo7" /></a><a
                                                    class="instagram-image"
                                                    href="https://www.instagram.com/p/B_68Px4l8qO" target="_blank"
                                                    rel="noopener"><img src="<?= BASE_URL ?>wp-content/uploads/2021/05/07.jpg" alt="#clubiodemo7" /></a><a
                                                    class="instagram-image"
                                                    href="https://www.instagram.com/p/B_68NTVFwWR" target="_blank"
                                                    rel="noopener"><img src="<?= BASE_URL ?>wp-content/uploads/2021/05/06.jpg" alt="#clubiodemo7" /></a><a
                                                    class="instagram-image"
                                                    href="https://www.instagram.com/p/B_68K7GFLRN" target="_blank"
                                                    rel="noopener"><img src="<?= BASE_URL ?>wp-content/uploads/2021/05/05.jpg" alt="#clubiodemo7" /></a><a
                                                    class="instagram-image"
                                                    href="https://www.instagram.com/p/B_68FA_ljLo" target="_blank"
                                                    rel="noopener"><img src="<?= BASE_URL ?>wp-content/uploads/2021/05/04.jpg" alt="#clubiodemo7" /></a><a
                                                    class="instagram-image"
                                                    href="https://www.instagram.com/p/B_68BdZF94W" target="_blank"
                                                    rel="noopener"><img src="<?= BASE_URL ?>wp-content/uploads/2021/05/03.jpg" alt="#clubiodemo7" /></a><a
                                                    class="instagram-image"
                                                    href="https://www.instagram.com/p/B_67-kylkrd" target="_blank"
                                                    rel="noopener"><img src="<?= BASE_URL ?>wp-content/uploads/2021/05/02.jpg" alt="#clubiodemo7" /></a><a
                                                    class="instagram-image"
                                                    href="https://www.instagram.com/p/B_678CpFMej" target="_blank"
                                                    rel="noopener"><img src="<?= BASE_URL ?>wp-content/uploads/2021/05/01.jpg" alt="#clubiodemo7" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tt-shortcode_vc_row 8 vc_row wpb_row vc_row-fluid "
                                    class="tt-shortcode_vc_row vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="tt-shortcode_vc_clmn vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="tt_shortcode_vc_column_text wpb_wrapper">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="ch-section-promo" class="tt-shortcode_vc_row 8 tt-promo01  tt-promo01">
                                    <div class="tt-shortcode_vc_clmn tt-promo01__layout ">
                                        <h5 class="tt-title"><span class="tt-base-color">Feel Free</span> and Enjoy<br class="ch" />in VIP Clubio with Joy
                                        </h5>
                                        <p class="ch">We are very excited to have launched our brand new cocktail bar!
                                            Located on our ground floor. Come in, have a drink, some complimentary
                                            nibbles and relax.</p>
                                        <div class="ch"><a class="tt-btn-default"
                                                href="events-parties"><span class="ch">explore all events</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <footer id="tt-footer" class="no-margin">
        <div class="footer-wrapper">
            <div class="container">
                <nav class="f-nav" id="f-nav">
                    <div class="footer-menu text-center">
                        <ul id="menu-theme-footer-menu" class="">
                            <li id="menu-item-11"
                                class="tm-home menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-11">
                                <a href="<?= BASE_URL ?>" aria-current="page">Home</a></li>
                            <li id="menu-item-12"
                                class="tm-home menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a
                                    href="<?= BASE_URL ?>events/">Events Calendar</a></li>
                            <li id="menu-item-13"
                                class="tm-home menu-item menu-item-type-custom menu-item-object-custom menu-item-13"><a
                                    href="<?= BASE_URL ?>gallery-1/">Gallery</a></li>
                            <li id="menu-item-16"
                                class="tm-news menu-item menu-item-type-custom menu-item-object-custom menu-item-16"><a
                                    href="<?= BASE_URL ?>news/">News</a></li>
                            <li id="menu-item-14"
                                class="tm-events-parties menu-item menu-item-type-custom menu-item-object-custom menu-item-14">
                                <a href="<?= BASE_URL ?>events-parties/">Events + Parties</a></li>
                            <li id="menu-item-15"
                                class="tm-contact menu-item menu-item-type-custom menu-item-object-custom menu-item-15">
                                <a href="<?= BASE_URL ?>contact-us/">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="f-logo"><a title="" href="#" class="tt-logo tt-logo-alignment"><svg
                            class="icon icon-logo-footer" width="196" height="93" viewBox="0 0 196 93" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M44.6484 7.37378H47.4452L69.5327 63.2738L91.6202 7.37378H94.3811L70.9311 66.7518H68.1343L44.6484 7.37378ZM71.3255 53.8435L69.8554 57.1423L50.2062 7.37378H52.9671L71.3255 53.8435ZM74.0865 46.7799L72.7239 50.3296L55.7639 7.37378H58.5607L74.0865 46.7799ZM76.8115 39.6086L75.449 43.2301L61.3216 7.37378H64.0826L76.8115 39.6086ZM108.258 7.37378H111.054L87.5684 66.7518H84.8075L108.258 7.37378ZM102.736 7.37378H105.497L82.0107 66.7518H79.2498L102.736 7.37378ZM97.1421 7.37378H99.9389L76.453 66.7518H73.692L97.1421 7.37378Z"
                                fill="white" />
                            <path
                                d="M130.543 7.37378H133.125V66.7518H130.543V7.37378ZM125.38 7.37378H127.961V66.7518H125.38V7.37378ZM120.216 7.37378H122.798V66.7518H120.216V7.37378ZM115.053 7.37378H117.635V66.7518H115.053V7.37378Z"
                                fill="white" />
                            <path
                                d="M159.282 38.6405H174.27C176.733 38.6405 178.812 37.8158 180.509 36.1664C182.23 34.4931 183.091 32.1385 183.091 29.1027C183.091 26.8318 182.195 24.7999 180.402 23.0071C178.609 21.1904 176.565 20.282 174.27 20.282H152.111V66.7518H149.53V17.7004H174.27C177.282 17.7004 179.936 18.8597 182.23 21.1785C184.525 23.4972 185.673 26.1386 185.673 29.1027C185.673 32.76 184.561 35.7003 182.338 37.9233C180.115 40.1225 177.426 41.2221 174.27 41.2221H159.282V38.6405ZM159.282 43.8038H174.27C176.756 43.8038 179.051 43.2062 181.155 42.011C183.282 40.7919 184.991 39.0468 186.282 36.7759C187.597 34.505 188.254 31.9473 188.254 29.1027C188.254 25.4215 186.844 22.1705 184.023 19.3498C181.227 16.5291 177.976 15.1187 174.27 15.1187H146.948V66.7518H144.366V12.5371H174.27C177.163 12.5371 179.888 13.302 182.446 14.8319C185.003 16.3618 187.035 18.4056 188.541 20.9633C190.071 23.5211 190.836 26.2342 190.836 29.1027C190.836 32.3537 190.071 35.3178 188.541 37.9951C187.011 40.6484 184.979 42.7161 182.446 44.1982C179.936 45.6564 177.211 46.3854 174.27 46.3854H159.282V43.8038ZM159.282 48.9671H174.27C176.828 48.9671 179.278 48.4651 181.621 47.4611C183.964 46.4332 185.995 45.0588 187.717 43.3377C189.462 41.5926 190.848 39.4891 191.876 37.0269C192.904 34.5409 193.418 31.8995 193.418 29.1027C193.418 25.7561 192.545 22.6127 190.8 19.6725C189.055 16.7084 186.701 14.3538 183.736 12.6088C180.796 10.8399 177.641 9.95543 174.27 9.95543H141.785V66.7518H139.203V7.37378H174.27C178.095 7.37378 181.681 8.37776 185.027 10.3857C188.374 12.3698 191.039 15.0351 193.023 18.3817C195.007 21.7283 195.999 25.3019 195.999 29.1027C195.999 32.4971 195.414 35.6285 194.242 38.4971C193.071 41.3417 191.493 43.7082 189.509 45.5966C187.525 47.485 185.219 48.9551 182.589 50.0069C179.96 51.0348 177.187 51.5487 174.27 51.5487H159.282V48.9671ZM157.275 66.7518H154.693V22.8637H174.27C175.968 22.8637 177.426 23.4852 178.645 24.7282C179.888 25.9712 180.509 27.4294 180.509 29.1027C180.509 33.7401 178.43 36.0588 174.27 36.0588H159.282V33.4772H174.27C175.418 33.4772 176.314 33.1545 176.96 32.509C177.605 31.8636 177.928 30.7282 177.928 29.1027C177.928 28.0509 177.569 27.1784 176.852 26.4852C176.159 25.792 175.298 25.4454 174.27 25.4454H157.275V66.7518Z"
                                fill="white" />
                            <path
                                d="M75.3472 77.8869C77.2277 77.8869 78.7803 78.3233 80.0048 79.196C81.2293 80.0552 82.0748 81.2348 82.5413 82.7349H80.4421C80.0485 81.7803 79.4144 81.0234 78.5397 80.4643C77.6651 79.8915 76.5936 79.6052 75.3253 79.6052C74.3195 79.6052 73.4156 79.837 72.6139 80.3007C71.8267 80.7507 71.1998 81.4053 70.7333 82.2644C70.2814 83.11 70.0555 84.1055 70.0555 85.251C70.0555 86.3829 70.2814 87.3716 70.7333 88.2171C71.1998 89.0626 71.8267 89.7172 72.6139 90.1809C73.4156 90.6309 74.3195 90.8559 75.3253 90.8559C76.5936 90.8559 77.6651 90.5764 78.5397 90.0173C79.4144 89.4445 80.0485 88.6808 80.4421 87.7262H82.5413C82.0748 89.2263 81.2293 90.4127 80.0048 91.2855C78.7803 92.1447 77.2277 92.5742 75.3472 92.5742C73.904 92.5742 72.6284 92.2674 71.5205 91.6537C70.4126 91.0264 69.5452 90.1604 68.9184 89.0558C68.3061 87.9376 68 86.6693 68 85.251C68 83.8191 68.3061 82.544 68.9184 81.4257C69.5452 80.3075 70.4126 79.4415 71.5205 78.8278C72.6284 78.2005 73.904 77.8869 75.3472 77.8869Z"
                                fill="white" />
                            <path d="M91.5656 90.9991H97.0323V92.4515H89.5757V78.0301H91.5656V90.9991Z" fill="white" />
                            <path
                                d="M105.311 78.0301V86.6829C105.311 88.1012 105.646 89.1513 106.317 89.8331C106.987 90.5014 107.913 90.8355 109.094 90.8355C110.26 90.8355 111.171 90.4946 111.827 89.8127C112.483 89.1308 112.811 88.0876 112.811 86.6829V78.0301H114.801V86.6829C114.801 88.6467 114.276 90.1264 113.227 91.1219C112.192 92.1038 110.799 92.5947 109.05 92.5947C107.315 92.5947 105.923 92.1038 104.874 91.1219C103.838 90.1264 103.321 88.6467 103.321 86.6829V78.0301H105.311Z"
                                fill="white" />
                            <path
                                d="M129.783 84.9851C130.73 85.176 131.495 85.5988 132.079 86.2534C132.676 86.9079 132.975 87.6785 132.975 88.5649C132.975 89.7377 132.545 90.6787 131.685 91.3878C130.839 92.0969 129.608 92.4515 127.989 92.4515H122.26V78.0301H127.902C129.447 78.0301 130.621 78.3505 131.423 78.9915C132.224 79.6324 132.625 80.512 132.625 81.6303C132.625 82.5576 132.355 83.3077 131.816 83.8805C131.291 84.4532 130.613 84.8214 129.783 84.9851ZM124.25 84.3509H127.574C128.551 84.3509 129.294 84.1396 129.804 83.7168C130.329 83.2941 130.592 82.7008 130.592 81.9371C130.592 81.2007 130.336 80.6211 129.826 80.1984C129.316 79.7756 128.536 79.5642 127.487 79.5642H124.25V84.3509ZM127.618 90.8969C128.667 90.8969 129.476 90.6718 130.045 90.2218C130.628 89.7718 130.92 89.1376 130.92 88.3194C130.92 87.5148 130.621 86.8875 130.023 86.4375C129.44 85.9738 128.624 85.742 127.574 85.742H124.25V90.8969H127.618Z"
                                fill="white" />
                            <path d="M141.82 78.0301V92.4515H139.831V78.0301H141.82Z" fill="white" />
                            <path
                                d="M156.456 77.8459C157.885 77.8459 159.167 78.1596 160.304 78.7869C161.456 79.4142 162.36 80.2938 163.016 81.4257C163.672 82.544 164 83.8123 164 85.2306C164 86.6488 163.672 87.9239 163.016 89.0558C162.36 90.1741 161.456 91.0469 160.304 91.6742C159.167 92.3015 157.885 92.6152 156.456 92.6152C155.027 92.6152 153.73 92.3015 152.564 91.6742C151.412 91.0469 150.508 90.1741 149.852 89.0558C149.196 87.9239 148.868 86.6488 148.868 85.2306C148.868 83.8123 149.196 82.544 149.852 81.4257C150.508 80.2938 151.412 79.4142 152.564 78.7869C153.73 78.1596 155.027 77.8459 156.456 77.8459ZM156.456 79.5847C155.392 79.5847 154.437 79.8165 153.591 80.2802C152.76 80.7302 152.104 81.3848 151.623 82.244C151.157 83.0895 150.924 84.085 150.924 85.2306C150.924 86.3625 151.157 87.358 151.623 88.2171C152.104 89.0763 152.76 89.7377 153.591 90.2014C154.437 90.6514 155.392 90.8764 156.456 90.8764C157.506 90.8764 158.446 90.6446 159.277 90.1809C160.122 89.7172 160.778 89.0626 161.245 88.2171C161.726 87.358 161.966 86.3625 161.966 85.2306C161.966 84.085 161.726 83.0895 161.245 82.244C160.778 81.3848 160.122 80.7302 159.277 80.2802C158.446 79.8165 157.506 79.5847 156.456 79.5847Z"
                                fill="white" />
                            <g filter="url(#filter0_kd)">
                                <path
                                    d="M13.9986 11.4769C19.0331 11.4853 23.278 15.2205 23.9117 20.1999H27.0516L23.0593 6.4923H18.9983V4H23.998C24.5539 4.00016 25.0428 4.36637 25.1979 4.89847L29.6539 20.1999H61.4959C62.1861 20.1998 62.7459 20.7576 62.7461 21.4458C62.7461 21.7268 62.6509 21.9995 62.4758 22.2199L38.9971 51.7873V76.2766H48.9966V78.7689H26.4978V76.2766H36.4973V51.7873L19.1583 29.9523C17.6087 30.9098 15.8216 31.4165 13.9986 31.4153C8.47606 31.4153 3.99913 26.9519 3.99913 21.4461C3.99913 15.9403 8.47606 11.4769 13.9986 11.4769ZM58.9122 22.6922H30.3801L32.92 31.4153H51.9851L58.9122 22.6922ZM37.7472 49.3461L50.0065 33.9075H33.6449L36.4473 43.5291L34.0474 44.2244L31.0426 33.9075H25.4879L37.7472 49.3461ZM23.5093 31.4153H30.3176L27.7765 22.6922H16.5822L23.5093 31.4153ZM13.9986 28.923C15.2615 28.9295 16.5047 28.6116 17.6084 27.9996L13.0186 22.2199C12.5899 21.6805 12.681 20.8967 13.222 20.4692C13.443 20.2948 13.7165 20.1998 13.9986 20.1999H21.3944C20.7041 16.1283 16.8337 13.3855 12.7497 14.0737C8.66574 14.7619 5.91465 18.6206 6.60492 22.6922C7.21489 26.2892 10.3394 28.9223 13.9986 28.923Z"
                                    fill="#FF1A43" />
                            </g>
                            <defs>
                                <filter id="filter0_kd" x="0" y="0" width="66.747" height="82.7689"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="2" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 1 0 0 0 0 0.1 0 0 0 0 0.262 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                                </filter>
                            </defs>
                        </svg></a></div>

                <div class="f-col">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="f-info">
                                <div class="test7 f-info__icon icon-place"><svg class="icon icon-place" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" width="23" height="32" viewBox="0 0 23 32">
                                        <title>place</title>
                                        <path
                                            d="M11.53 0.589c-1.528-0.060-2.976 0.189-4.345 0.744-1.349 0.536-2.53 1.3-3.542 2.292-1.012 0.972-1.815 2.133-2.411 3.482-0.575 1.329-0.863 2.748-0.863 4.256 0 1.726 0.357 3.363 1.071 4.911 0.734 1.528 1.627 3.046 2.679 4.554 1.071 1.508 2.202 3.046 3.393 4.613s2.252 3.254 3.185 5.059c0.099 0.179 0.248 0.268 0.446 0.268 0.218 0 0.377-0.089 0.476-0.268 0.833-1.627 1.776-3.135 2.827-4.524 1.071-1.409 2.103-2.778 3.095-4.107 0.992-1.349 1.875-2.698 2.649-4.048 0.794-1.369 1.319-2.837 1.577-4.405 0.278-1.627 0.208-3.194-0.208-4.702s-1.101-2.857-2.053-4.048c-0.933-1.19-2.083-2.153-3.452-2.887s-2.877-1.131-4.524-1.19zM11.143 17.018c-1.548 0-2.877-0.546-3.988-1.637-1.111-1.111-1.667-2.45-1.667-4.018 0-1.548 0.556-2.877 1.667-3.988s2.44-1.667 3.988-1.667c1.567 0 2.897 0.556 3.988 1.667 1.111 1.111 1.667 2.441 1.667 3.988 0 1.567-0.555 2.907-1.667 4.018-1.091 1.091-2.421 1.637-3.988 1.637z">
                                        </path>
                                    </svg></div>
                                <div class="f-info__content">
                                    <div class="tt-title">VIP Clubio</div>
                                    <address>1035 N Sycamore<br>Avenue Hollywood, CA 90040</address>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="f-info">
                                <div class="test7 f-info__icon icon-phone"><svg class="icon icon-phone" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" width="30" height="32" viewBox="0 0 30 32">
                                        <title>phone</title>
                                        <path
                                            d="M30.417 23.982c-0.040-0.119-0.198-0.268-0.476-0.446-0.278-0.198-0.665-0.427-1.161-0.684-0.139-0.079-0.308-0.169-0.506-0.268-0.198-0.119-0.427-0.248-0.684-0.387-0.238-0.139-0.476-0.268-0.714-0.387-0.238-0.139-0.456-0.258-0.655-0.357-0.198-0.119-0.397-0.228-0.595-0.327-0.198-0.119-0.387-0.238-0.566-0.357-0.020-0.020-0.079-0.060-0.179-0.119-0.079-0.060-0.198-0.149-0.357-0.268-0.159-0.099-0.308-0.189-0.446-0.268-0.119-0.079-0.228-0.139-0.327-0.179-0.099-0.059-0.198-0.099-0.298-0.119s-0.208-0.030-0.327-0.030c-0.139 0-0.298 0.050-0.476 0.149s-0.377 0.248-0.595 0.446c-0.218 0.218-0.427 0.437-0.625 0.655s-0.387 0.446-0.566 0.684c-0.179 0.258-0.367 0.496-0.566 0.714-0.179 0.218-0.367 0.436-0.566 0.655-0.218 0.199-0.407 0.347-0.566 0.446s-0.308 0.149-0.446 0.149c-0.060 0-0.129-0.010-0.208-0.030s-0.169-0.040-0.268-0.059c-0.099-0.040-0.189-0.070-0.268-0.089-0.079-0.040-0.139-0.079-0.179-0.119-0.060-0.020-0.129-0.050-0.208-0.089-0.079-0.060-0.189-0.129-0.327-0.208-0.119-0.079-0.218-0.139-0.298-0.178-0.059-0.040-0.089-0.060-0.089-0.060-0.992-0.556-1.915-1.141-2.768-1.756-0.853-0.635-1.627-1.31-2.321-2.024-0.714-0.694-1.389-1.468-2.024-2.321-0.615-0.853-1.2-1.776-1.756-2.768 0 0-0.020-0.030-0.060-0.089-0.040-0.079-0.099-0.179-0.179-0.298-0.079-0.139-0.149-0.248-0.208-0.327-0.040-0.079-0.069-0.149-0.089-0.208-0.040-0.040-0.079-0.099-0.119-0.179-0.020-0.079-0.050-0.169-0.089-0.268-0.020-0.099-0.040-0.188-0.060-0.268s-0.030-0.149-0.030-0.208c0-0.139 0.050-0.288 0.149-0.446s0.248-0.347 0.446-0.566c0.218-0.198 0.437-0.387 0.655-0.565 0.218-0.198 0.456-0.387 0.714-0.566 0.238-0.179 0.466-0.367 0.685-0.565s0.437-0.407 0.655-0.625c0.198-0.218 0.347-0.417 0.446-0.595s0.149-0.337 0.149-0.476c0-0.119-0.010-0.228-0.030-0.327s-0.060-0.198-0.119-0.298c-0.040-0.099-0.099-0.208-0.179-0.327-0.079-0.139-0.169-0.288-0.268-0.446-0.119-0.159-0.208-0.278-0.268-0.357-0.060-0.099-0.099-0.159-0.119-0.179-0.119-0.179-0.238-0.367-0.357-0.566-0.099-0.198-0.208-0.397-0.327-0.595-0.099-0.198-0.218-0.417-0.357-0.655-0.119-0.238-0.248-0.476-0.387-0.714-0.139-0.258-0.268-0.486-0.387-0.685-0.099-0.198-0.188-0.367-0.268-0.506-0.258-0.496-0.486-0.883-0.685-1.161-0.179-0.278-0.327-0.436-0.446-0.476-0.060-0.020-0.129-0.030-0.208-0.030-0.079-0.020-0.169-0.030-0.268-0.030-0.198 0-0.427 0.020-0.685 0.060-0.238 0.040-0.516 0.089-0.833 0.149-0.317 0.079-0.605 0.159-0.863 0.238-0.238 0.079-0.446 0.159-0.625 0.238-0.357 0.139-0.734 0.436-1.131 0.893-0.377 0.437-0.764 1.012-1.161 1.726-0.357 0.675-0.635 1.349-0.833 2.024-0.179 0.675-0.268 1.349-0.268 2.024 0 0.179 0 0.367 0 0.565 0.020 0.179 0.050 0.367 0.089 0.566 0.020 0.179 0.050 0.377 0.089 0.595 0.040 0.198 0.099 0.417 0.179 0.655 0.060 0.218 0.109 0.417 0.149 0.595 0.060 0.159 0.109 0.298 0.149 0.417s0.099 0.278 0.179 0.476c0.079 0.198 0.169 0.437 0.268 0.714 0.119 0.298 0.208 0.536 0.268 0.714s0.099 0.298 0.119 0.357c0.258 0.714 0.536 1.389 0.833 2.024 0.298 0.615 0.625 1.2 0.982 1.756 0.556 0.933 1.22 1.875 1.994 2.827 0.794 0.952 1.677 1.925 2.649 2.917 0.992 0.972 1.964 1.855 2.917 2.649 0.952 0.774 1.895 1.438 2.827 1.994 0.556 0.357 1.141 0.684 1.756 0.982 0.635 0.298 1.31 0.575 2.024 0.833 0.060 0.020 0.179 0.060 0.357 0.119s0.417 0.149 0.714 0.268c0.278 0.099 0.516 0.189 0.714 0.268s0.357 0.139 0.476 0.179c0.119 0.040 0.258 0.079 0.417 0.119 0.178 0.060 0.377 0.119 0.595 0.179 0.238 0.079 0.456 0.139 0.655 0.179 0.218 0.040 0.417 0.070 0.595 0.089 0.198 0.040 0.387 0.060 0.566 0.060 0.198 0.020 0.387 0.030 0.566 0.030 0.675 0 1.349-0.099 2.024-0.298 0.675-0.179 1.349-0.446 2.024-0.804 0.714-0.397 1.29-0.784 1.726-1.161 0.456-0.397 0.754-0.774 0.893-1.131 0.079-0.179 0.159-0.387 0.238-0.625 0.079-0.258 0.159-0.546 0.238-0.863 0.059-0.318 0.109-0.595 0.149-0.833 0.040-0.258 0.060-0.486 0.060-0.684 0-0.099-0.010-0.189-0.030-0.268 0-0.079-0.010-0.149-0.030-0.208z">
                                        </path>
                                    </svg></div>
                                <div class="f-info__content">
                                    <div class="tt-title">Contact Phones</div>
                                    <address>1 (800) 765-43-21, 765-43-22<br>1 (800) 765-43-23 (fax)</address>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="f-info">
                                <div class="test7 f-info__icon icon-clock"><svg class="icon icon-clock" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;"
                                        xml:space="preserve">
                                        <path
                                            d="M377.8,192C377.4,295.6,294,379.6,188.6,378C86.7,376.4,4.1,293.6,5.7,188.8C7.4,86.9,90.2,4.3,195,6C296.5,7.7,377.3,89.5,377.8,192z M322.6,192.1c0.4-71.7-58.4-130-128.8-131c-73.3-1-132,58.5-132.9,129c-1,73.2,58.6,132,129.1,132.9C263.2,323.9,323,263.8,322.6,192.1z M164.1,200.3c0,3,0.9,5.7,3.2,7.8c0.6,0.5,1.1,1.1,1.7,1.6c7,6.8,13.9,13.6,20.8,20.4c7.6,7.4,15.1,14.8,22.7,22.2c6.2,6.1,12.4,12.2,18.7,18.3c3.6,3.5,8.9,3.4,12.3-0.1c4-4.2,8.1-8.3,12.1-12.4c4.8-4.9,9.7-9.9,14.5-14.8c1.7-1.8,2.6-3.9,2.5-6.3c-0.1-2.3-1.1-4.2-2.8-5.9c-7-6.8-13.9-13.6-20.9-20.4c-9.2-9-18.3-18.1-27.6-27c-1.6-1.5-2.1-3-2.1-5.1c0.1-28.1,0.1-56.3,0-84.4c0-1.7-0.5-3.6-1.3-5.2c-1.5-3-4.4-3.8-7.4-3.8c-12.1-0.1-24.2-0.1-36.3,0c-1.6,0-3.4,0.2-4.9,0.6c-1.2,0.4-2.4,1.2-3.3,2.2c-1.7,1.7-2,4-2,6.2c0,17.7,0,35.4,0,53.1C164.1,165,164.1,182.6,164.1,200.3z" />
                                    </svg></div>
                                <div class="f-info__content">
                                    <div class="tt-title">Working Hours</div>
                                    <address>Mon-Fri: 9:00 am – 5:00 pm<br>Sat-Sun: 11:00 am – 16:00 pm</address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="f-social">
                    <ul>
                        <li><a href="#" class="icon-social-facebook"></a></li>
                        <li><a href="#" class="icon-social-twitter"></a></li>
                        <li><a href="#" class="icon-social-googleplus"></a></li>
                        <li><a href="#" class="icon-social-linkedin"></a></li>
                    </ul>
                </div>
                <div class='f-copyright'>
                    <div class="footer-copyright text-center">&amp;copy 2020 VIP Clubio. All Rights Reserved.</div>
                    <div class="footer-link text-center"><a href="#">Privacy Policy</a> | <a href="#">Terms of
                            Service</a></div>
                </div>

            </div>


        </div>
    </footer>
    <div class="modal fade" id="modalPrivateEvent" tabindex="-1" role="dialog" aria-label="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content ">
                <div class="modal-body modal-layout-dafault">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon-close"></span></button>
                    <div class="modal-titleblock">
                        <div class="modal-title">Private Event</div>
                    </div>
                    <div class="form-modal" id="jsFormPrivateEvent">
                        <div role="form" class="wpcf7" id="wpcf7-f1844-o4" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="/wp/demo/#wpcf7-f1844-o4" method="post" class="wpcf7-form init"
                                novalidate="novalidate" data-status="init">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="1844" />
                                    <input type="hidden" name="_wpcf7_version" value="5.5.6.1" />
                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1844-o4" />
                                    <input type="hidden" name="_wpcf7_container_post" value="0" />
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                </div>
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="modalName01" aria-required="true" aria-invalid="false" placeholder="Your name *" /></span>
                                </div>
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" id="modalEmail01" aria-required="true" aria-invalid="false" placeholder="Email address *" /></span>
                                </div>
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="modalPhone01" aria-required="true" aria-invalid="false" placeholder="Phone number *" /></span>
                                </div>
                                <div class="form-group">
                                    <div class="tt-skinSelect-01">
                                        <span class="wpcf7-form-control-wrap typeofholiday"><select name="typeofholiday" class="wpcf7-form-control wpcf7-select tt-select" aria-invalid="false"><option value="Anniversary">Anniversary</option><option value="Event Type">Event Type</option><option value="Bachelor/Bachelorette">Bachelor/Bachelorette</option><option value="Birthday">Birthday</option><option value="Corporate Reception">Corporate Reception</option><option value="Full Venue Buyout">Full Venue Buyout</option><option value="Partial Venue Buyout">Partial Venue Buyout</option><option value="Other">Other</option><option value="Special Occasion">Special Occasion</option><option value="Wedding/Rehearsal">Wedding/Rehearsal</option></select></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Group:</label><span class="wpcf7-form-control-wrap groupsize"><input type="text" name="groupsize" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="modalTotal02" aria-required="true" aria-invalid="false" placeholder="Group size *" /></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Date:</label><span class="wpcf7-form-control-wrap date"><input type="date" name="date" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date j_datepicker-1-7 form-control" aria-invalid="false" /></span>
                                            <div class="form-group__icon icon-calendar"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"><label>Start time:</label>
                                            <div class="tt-skinSelect-01">
                                                <span class="wpcf7-form-control-wrap starttime"><select name="starttime" class="wpcf7-form-control wpcf7-select tt-select" aria-invalid="false"><option value="9:00 PM">9:00 PM</option><option value="10:00 PM">10:00 PM</option><option value="11:00 PM">11:00 PM</option><option value="12:00 PM">12:00 PM</option><option value="13:00 PM">13:00 PM</option><option value="14:00 PM">14:00 PM</option><option value="15:00 PM">15:00 PM</option><option value="16:00 PM">16:00 PM</option><option value="17:00 PM">17:00 PM</option><option value="18:00 PM">18:00 PM</option><option value="19:00 PM">19:00 PM</option><option value="20:00 PM">20:00 PM</option></select></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group"><label>End time:</label>
                                            <div class="tt-skinSelect-01">
                                                <span class="wpcf7-form-control-wrap endtime"><select name="endtime" class="wpcf7-form-control wpcf7-select tt-select" aria-invalid="false"><option value="9:00 PM">9:00 PM</option><option value="10:00 PM">10:00 PM</option><option value="11:00 PM">11:00 PM</option><option value="12:00 PM">12:00 PM</option><option value="13:00 PM">13:00 PM</option><option value="14:00 PM">14:00 PM</option><option value="15:00 PM">15:00 PM</option><option value="16:00 PM">16:00 PM</option><option value="17:00 PM">17:00 PM</option><option value="18:00 PM">18:00 PM</option><option value="19:00 PM">19:00 PM</option><option value="20:00 PM">20:00 PM</option></select></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Comments"></textarea></span>
                                </div>
                                <div class="row-btn text-center">
                                    <div class="tt-btn-default">
                                        <span class="ch"><input type="submit" value="request availability" class="wpcf7-form-control has-spinner wpcf7-submit" /></span>
                                    </div>
                                </div>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalVipTables" tabindex="-1" role="dialog" aria-label="modalVipTables"
        aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content ">
                <div class="modal-body modal-layout-dafault">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon-close"></span></button>
                    <div class="modal-titleblock">
                        <div class="modal-title">VIP Table</div>
                    </div>
                    <div class="form-modal" id="jsFormVipTable">
                        <div role="form" class="wpcf7" id="wpcf7-f1845-o5" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="/wp/demo/#wpcf7-f1845-o5" method="post" class="wpcf7-form init"
                                novalidate="novalidate" data-status="init">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="1845" />
                                    <input type="hidden" name="_wpcf7_version" value="5.5.6.1" />
                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1845-o5" />
                                    <input type="hidden" name="_wpcf7_container_post" value="0" />
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                </div>
                                <div class="form-group">
                                    <div class="tt-skinSelect-01">
                                        <span class="wpcf7-form-control-wrap typeofholiday"><select name="typeofholiday" class="wpcf7-form-control wpcf7-select tt-select" aria-invalid="false"><option value="Paradisco By Occupy The Disco – 23 Jan">Paradisco By Occupy The Disco – 23 Jan</option><option value="Gustavo Outsource Steve Play – 28 Jan">Gustavo Outsource Steve Play – 28 Jan</option><option value="Friday Night Memoirs In Paradise – 30 Jan">Friday Night Memoirs In Paradise – 30 Jan</option><option value="March Madness Travis Gold / Macho Iza – 2 Feb">March Madness Travis Gold / Macho Iza – 2 Feb</option><option value="Warm Up Get The Party Started – 5 Feb">Warm Up Get The Party Started – 5 Feb</option></select></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="modalName02" aria-required="true" aria-invalid="false" placeholder="Your name *" /></span>
                                </div>
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" id="modalEmail02" aria-required="true" aria-invalid="false" placeholder="Email address *" /></span>
                                </div>
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="modalPhone02" aria-required="true" aria-invalid="false" placeholder="Phone number *" /></span>
                                </div>
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap groupsize"><input type="text" name="groupsize" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="modalTotal01" aria-required="true" aria-invalid="false" placeholder="Group size *" /></span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Date:</label><span class="wpcf7-form-control-wrap date"><input type="date" name="date" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date j_datepicker-1-7 form-control" aria-invalid="false" /></span>
                                            <div class="form-group__icon icon-calendar"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group"> <label>Event time:</label>
                                            <div class="tt-skinSelect-01">
                                                <span class="wpcf7-form-control-wrap eventtime"><select name="eventtime" class="wpcf7-form-control wpcf7-select tt-select" aria-invalid="false"><option value="9:00 PM">9:00 PM</option><option value="10:00 PM">10:00 PM</option><option value="11:00 PM">11:00 PM</option><option value="12:00 PM">12:00 PM</option><option value="13:00 PM">13:00 PM</option><option value="14:00 PM">14:00 PM</option><option value="15:00 PM">15:00 PM</option><option value="16:00 PM">16:00 PM</option><option value="17:00 PM">17:00 PM</option><option value="18:00 PM">18:00 PM</option><option value="19:00 PM">19:00 PM</option><option value="20:00 PM">20:00 PM</option></select></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Comments"></textarea></span>
                                </div>
                                <div class="row-btn text-center">
                                    <div class="tt-btn-default">
                                        <span class="ch"><input type="submit" value="submit" class="wpcf7-form-control has-spinner wpcf7-submit" /></span>
                                    </div>
                                </div>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalChat" tabindex="-1" role="dialog" aria-label="modalVipTables" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content ">
                <div class="modal-body modal-layout-dafault">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon-close">&nbsp;</span></button>
                    <div class="modal-titleblock">
                        <div class="modal-title">Chat</div>
                    </div>
                    <div class="form-modal" id="jsFormChat">
                        <div role="form" class="wpcf7" id="wpcf7-f1832-o6" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="/wp/demo/#wpcf7-f1832-o6" method="post" class="wpcf7-form init"
                                novalidate="novalidate" data-status="init">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="1832" />
                                    <input type="hidden" name="_wpcf7_version" value="5.5.6.1" />
                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1832-o6" />
                                    <input type="hidden" name="_wpcf7_container_post" value="0" />
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                </div>
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="modalName04" aria-required="true" aria-invalid="false" placeholder="Your name *" /></span>
                                </div>
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap your-email"><input type="text" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="modalEmail04" aria-required="true" aria-invalid="false" placeholder="Email address *" /></span>
                                </div>
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="modalPhone04" aria-required="true" aria-invalid="false" placeholder="Phone number *" /></span>
                                </div>
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Message"></textarea></span>
                                </div>
                                <div class="row-btn text-center">
                                    <div class="tt-btn-default">
                                        <span class="ch"><input type="submit" value="submit" class="wpcf7-form-control has-spinner wpcf7-submit" /></span>
                                    </div>
                                </div>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modalBayTickets" class="tt-shortcode_vc_row 8 modal fade  modal fade">
        <div class="inner_detect_vc_row modal-dialog modal-lg">
            <div class="tt-shortcode_vc_clmn modal-content ">
                <div class="modal-body modal-baytickets">
                    <div class="ch">
                        <button class="close" type="button" data-dismiss="modal" aria-hidden="true"><svg class="icon icon-close" version="1.1" xmlns="http://www.w3.org/2000/svg" width="30" height="32" viewBox="0 0 30 32"><title>close</title><path d="M13.78 15.638l-13.482 13.482c-0.198 0.178-0.298 0.397-0.298 0.655 0 0.278 0.099 0.506 0.298 0.685 0.099 0.099 0.198 0.169 0.298 0.208 0.119 0.059 0.248 0.089 0.387 0.089 0.119 0 0.238-0.030 0.357-0.089 0.119-0.040 0.218-0.109 0.298-0.208l13.601-13.572 13.601 13.572c0.079 0.099 0.179 0.169 0.298 0.208 0.119 0.059 0.238 0.089 0.357 0.089 0.139 0 0.268-0.030 0.387-0.089 0.119-0.040 0.218-0.109 0.298-0.208 0.198-0.179 0.298-0.407 0.298-0.685 0-0.258-0.099-0.476-0.298-0.655l-13.482-13.482 13.512-13.512c0.179-0.179 0.268-0.397 0.268-0.655 0-0.278-0.089-0.516-0.268-0.714-0.198-0.179-0.436-0.268-0.714-0.268-0.258 0-0.476 0.089-0.655 0.268l-13.601 13.601-13.601-13.601c-0.179-0.179-0.407-0.268-0.685-0.268-0.258 0-0.486 0.089-0.685 0.268-0.179 0.198-0.268 0.437-0.268 0.714 0 0.258 0.089 0.476 0.268 0.655l13.512 13.512z"></path></svg></button>
                    </div>
                    <div class="row row">
                        <div class="shortcode_vc_clmn_inner col-md-6 tt-col-left ">
                            <div class="baytickets__img">
                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="334" height="352" src="<?= BASE_URL ?>wp-content/uploads/2020/06/events-03-1.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" title="events-03" />
                                </div>
                            </div>
                            <div class="ch">
                                <dl class="baytickets__timing">
                                    <dt>Time:</dt>
                                    <dd>
                                        <div class="ch">
                                            <div class="test7 tt-col"><svg class="icon icon-time" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 0C5.38332 0 0 5.38332 0 12C0 18.6167 5.38332 24 12 24C18.6167 24 24 18.6167 24 12C24 5.38332 18.6167 0 12 0ZM12 22.5C6.2102 22.5 1.50001 17.7898 1.50001 12C1.50001 6.2102 6.2102 1.50001 12 1.50001C17.7898 1.50001 22.5 6.2102 22.5 12C22.5 17.7898 17.7898 22.5 12 22.5Z"
                                                        fill="black" />
                                                    <path
                                                        d="M12.75 4.50002H11.25V12.3105L15.9697 17.0303L17.0303 15.9697L12.75 11.6895V4.50002Z"
                                                        fill="black" />
                                                </svg></div>
                                        </div>
                                        <div class="tt-col">23:55</div>
                                    </dd>
                                    <dt>Price:</dt>
                                    <dd>
                                        <div class="ch">
                                            <div class="test7 tt-col"><svg class="icon icon-price" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M21.4163 0H12.3081C12.1217 0 11.9428 0.0741575 11.811 0.205993L0.755308 11.2613C-0.251769 12.2688 -0.251769 13.9077 0.755308 14.9148L9.08493 23.2443C9.57126 23.7306 10.22 23.9985 10.9114 23.9986H10.9116C11.6032 23.9986 12.2519 23.7306 12.7384 23.2441L23.7938 12.1886C23.9256 12.0567 23.9997 11.8778 23.9997 11.6914L23.9999 2.58324C23.9997 1.15887 22.8407 0 21.4163 0ZM22.5935 11.4003L11.744 22.2498C11.5232 22.4708 11.2274 22.5924 10.9116 22.5924C10.5955 22.5924 10.3 22.4708 10.0792 22.25L1.74957 13.9206C1.29071 13.4617 1.29071 12.7146 1.74957 12.2556L12.5993 1.40625H21.4163C22.0654 1.40625 22.5937 1.93432 22.5937 2.58343L22.5935 11.4003Z"
                                                        fill="black" />
                                                    <path
                                                        d="M17.8026 3.98828C17.2125 3.98828 16.6577 4.21826 16.2404 4.63556C15.8231 5.05267 15.5933 5.60748 15.5933 6.19763C15.5933 6.78778 15.8231 7.34259 16.2404 7.75989C16.6577 8.17718 17.2125 8.40698 17.8026 8.40698C18.3926 8.40698 18.9474 8.17718 19.3647 7.75989C19.782 7.34259 20.0118 6.78778 20.0118 6.19763C20.0118 5.60748 19.782 5.05267 19.3649 4.63556C18.9476 4.21826 18.3928 3.98828 17.8026 3.98828ZM18.3704 6.76544C18.2188 6.91724 18.017 7.00073 17.8026 7.00073C17.588 7.00073 17.3864 6.91724 17.2348 6.76544C17.083 6.61383 16.9995 6.41205 16.9995 6.19763C16.9995 5.98321 17.083 5.78143 17.2348 5.62982C17.3864 5.47803 17.5882 5.39453 17.8026 5.39453C18.017 5.39453 18.2186 5.47803 18.3704 5.62982C18.5222 5.78143 18.6057 5.98321 18.6057 6.19763C18.6057 6.41205 18.522 6.61383 18.3704 6.76544Z"
                                                        fill="black" />
                                                </svg></div>
                                        </div>
                                        <div class="tt-col">40$</div>
                                    </dd>
                                    <dt>Table:</dt>
                                    <dd>
                                        <div class="ch">
                                            <div class="test7 tt-col"><svg class="icon icon-table1" width="27"
                                                    height="27" viewBox="0 0 27 27" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M20.8929 0C18.3036 0.00427902 16.1204 1.93122 15.7945 4.50002H1.60723C1.25219 4.49972 0.964108 4.78726 0.963867 5.14229C0.963747 5.30098 1.02233 5.45418 1.12834 5.57225L10.6073 16.1447V25.7142H6.75012V27H15.7501V25.7143H11.893V16.1441L17.9712 9.36514C18.8274 9.96481 19.8476 10.2862 20.8929 10.2857C23.7332 10.2857 26.0358 7.9832 26.0358 5.1429C26.0358 2.30259 23.7332 0 20.8929 0ZM11.2501 14.9349L5.90149 8.96979H16.5974L11.2501 14.9349ZM17.6787 7.75991V7.68403H4.74887L3.04721 5.78571H16.3929H19.4516L17.6787 7.75991ZM20.8929 8.99998C20.1642 9.00106 19.4504 8.79362 18.8358 8.40212L21.3726 5.57357C21.6104 5.31002 21.5896 4.90351 21.326 4.66564C21.2073 4.55848 21.0529 4.49942 20.8929 4.50002H17.0891C17.4442 2.39956 19.4348 0.984656 21.5352 1.33969C23.6357 1.69473 25.0506 3.68526 24.6955 5.78571C24.3819 7.64136 22.7749 8.99974 20.8929 8.99998Z"
                                                        fill="black" />
                                                </svg></div>
                                        </div>
                                        <div class="tt-col">120$</div>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="shortcode_vc_clmn_inner col-md-6 tt-col-right ">
                            <div class="shortcode_vc_text  modal-titleblock">
                                <div class="modal-title text-left">Friday Night.</div>
                                <div class="modal-title__label">Memories in Paradise</div>
                            </div>
                            <div class="shortcode_vc_text  baytickets__timer">
                                <div class="tt-title">Saturday, jan 30, 2020</div>
                                <div class="pt-countdown" data-date="2020-12-15" data-year="Yrs" data-month="Mths"
                                    data-week="WK" data-day="Days" data-hour="Hours" data-minute="Minutes"></div>
                            </div>
                            <div class="baytickets__description">Friday Nights returns to VIP Night Club on for its
                                fourth season at the club, opening on 30th Jan 2020 during the inaugural Defected Ibiza
                                Festival and running for 20 consecutive dates.</div>
                            <ul class="baytickets__social">
                                <li><a title="" href="#"><svg class="icon icon-social-facebook" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="32"
                                            viewBox="0 0 16 32">
                                            <title>social-facebook</title>
                                            <path
                                                d="M9.938 10.5v-2.781c0-0.208 0-0.385 0-0.531 0.021-0.167 0.042-0.302 0.063-0.406 0.021-0.125 0.052-0.24 0.094-0.344 0.042-0.125 0.094-0.24 0.156-0.344s0.146-0.188 0.25-0.25c0.125-0.083 0.26-0.146 0.406-0.188 0.167-0.063 0.344-0.104 0.531-0.125 0.208-0.021 0.438-0.031 0.688-0.031h2.75v-5.5h-4.406c-1.271 0-2.365 0.156-3.281 0.469-0.917 0.292-1.656 0.74-2.219 1.344-0.542 0.604-0.958 1.354-1.25 2.25-0.271 0.896-0.406 1.927-0.406 3.094v3.344h-3.313v5.5h3.313v16h6.625v-16h4.406l0.594-5.5h-5z">
                                            </path>
                                        </svg></a></li>
                                <li><a title="" href="#"><svg class="icon icon-social-twitter" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="32"
                                            viewBox="0 0 24 32">
                                            <title>social-twitter</title>
                                            <path
                                                d="M11.579 23.289c-0.548 0-1.053-0.088-1.513-0.263-0.439-0.197-0.844-0.483-1.217-0.855s-0.658-0.79-0.855-1.25c-0.175-0.461-0.263-0.954-0.263-1.48v-2.73h10.921c0.483 0 0.932-0.088 1.349-0.263 0.439-0.175 0.833-0.439 1.184-0.789s0.614-0.735 0.79-1.151c0.175-0.439 0.263-0.899 0.263-1.382 0-0.504-0.088-0.965-0.263-1.382s-0.439-0.811-0.79-1.184c-0.351-0.351-0.746-0.614-1.184-0.789-0.417-0.175-0.866-0.263-1.349-0.263h-10.921v-5.625c0-0.526-0.099-1.020-0.296-1.48-0.175-0.461-0.45-0.877-0.822-1.25-0.395-0.395-0.822-0.68-1.283-0.855-0.439-0.197-0.921-0.296-1.447-0.296-0.548 0-1.053 0.099-1.513 0.296-0.461 0.175-0.877 0.45-1.25 0.822s-0.658 0.789-0.855 1.25c-0.175 0.461-0.263 0.965-0.263 1.513v15.559c0 1.601 0.274 3.092 0.822 4.474 0.57 1.36 1.425 2.599 2.566 3.717 1.118 1.14 2.357 1.996 3.717 2.566 1.382 0.57 2.873 0.855 4.474 0.855h7.665c0.526 0 1.009-0.099 1.447-0.296 0.46-0.175 0.888-0.46 1.283-0.855 0.373-0.373 0.647-0.789 0.822-1.25 0.197-0.46 0.296-0.954 0.296-1.48s-0.099-1.020-0.296-1.48c-0.175-0.46-0.45-0.877-0.822-1.25-0.395-0.395-0.822-0.68-1.283-0.855-0.439-0.197-0.921-0.296-1.447-0.296h-7.665z">
                                            </path>
                                        </svg></a></li>
                                <li><a title="" href="#"><svg class="icon icon-social-googleplus" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" width="50" height="32"
                                            viewBox="0 0 50 32">
                                            <title>social-googleplus</title>
                                            <path
                                                d="M17.431 19.17h7.743c-0.347 0.949-0.833 1.829-1.459 2.639-0.602 0.81-1.308 1.516-2.118 2.118-0.81 0.579-1.713 1.030-2.708 1.354-0.972 0.301-2.002 0.451-3.090 0.451-1.296 0-2.535-0.243-3.715-0.729-1.157-0.509-2.176-1.192-3.056-2.049s-1.586-1.852-2.118-2.986c-0.532-1.157-0.822-2.384-0.868-3.68-0.046-1.412 0.174-2.732 0.66-3.958 0.509-1.25 1.204-2.338 2.083-3.264 0.903-0.949 1.956-1.69 3.16-2.222 1.227-0.532 2.535-0.799 3.924-0.799 1.273 0 2.477 0.231 3.611 0.694 1.134 0.44 2.141 1.053 3.021 1.84 0.208 0.185 0.452 0.278 0.729 0.278s0.521-0.093 0.729-0.278l2.847-2.674c0.208-0.208 0.313-0.463 0.313-0.764 0-0.324-0.104-0.59-0.313-0.799-0.694-0.648-1.447-1.238-2.257-1.771s-1.667-0.984-2.569-1.354c-0.88-0.37-1.805-0.66-2.778-0.868s-1.968-0.324-2.986-0.347c-2.199-0.046-4.282 0.347-6.25 1.181-1.944 0.81-3.657 1.933-5.139 3.368-1.458 1.435-2.627 3.125-3.507 5.069-0.856 1.921-1.296 3.97-1.319 6.146 0 2.199 0.405 4.271 1.215 6.215 0.833 1.945 1.968 3.646 3.403 5.104 1.435 1.435 3.113 2.581 5.035 3.438 1.944 0.833 4.016 1.25 6.215 1.25 2.13 0 4.132-0.393 6.007-1.18s3.519-1.852 4.931-3.195c1.435-1.343 2.581-2.928 3.438-4.757 0.88-1.829 1.377-3.785 1.493-5.868 0-0.046 0-0.66 0-1.84 0.023-1.204 0.035-1.806 0.035-1.806h-14.34c-0.301 0-0.556 0.104-0.764 0.313s-0.313 0.463-0.313 0.764v3.889c0 0.301 0.104 0.556 0.313 0.764s0.463 0.313 0.764 0.313zM44.896 13.476v-3.785c0-0.255-0.093-0.475-0.278-0.66s-0.405-0.278-0.66-0.278h-3.194c-0.255 0-0.474 0.093-0.66 0.278s-0.278 0.405-0.278 0.66v3.785h-3.819c-0.255 0-0.474 0.093-0.66 0.278s-0.278 0.405-0.278 0.66v3.229c0 0.255 0.092 0.475 0.278 0.66 0.185 0.162 0.405 0.243 0.66 0.243h3.819v3.82c0 0.255 0.093 0.474 0.278 0.66s0.405 0.278 0.66 0.278h3.194c0.255 0 0.474-0.093 0.66-0.278s0.278-0.405 0.278-0.66v-3.82h3.819c0.255 0 0.475-0.081 0.66-0.243 0.185-0.185 0.278-0.405 0.278-0.66v-3.229c0-0.255-0.093-0.475-0.278-0.66s-0.405-0.278-0.66-0.278h-3.819z">
                                            </path>
                                        </svg></a></li>
                            </ul>
                            <div class="row-btn"><a class="tt-btn-default"
                                    href="#"><span class="ch">buy tickets</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><a href="#" id="js-backtotop" class="tt-back-to-top"><i class="icon-arrow_top"></i></a>
    <script type="text/html" id="wpb-modifications"></script>
    <script type="text/javascript">
        (function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
    </script>
    <script src='<?= BASE_URL ?>wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9'
        id='regenerator-runtime-js'></script>
    <script src='<?= BASE_URL ?>wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
        /* <![CDATA[ */
var wpcf7 = {"api":{"root":"http:\/\/localhost:8000\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
    </script>
    <script src='<?= BASE_URL ?>wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.5.6.1'
        id='contact-form-7-js'></script>
    <script type='text/javascript' id='bliss_loadmore-js-extra'>
        /* <![CDATA[ */
var bliss_loadmore_params = {"ajaxurl":"http:\/\/localhost:8000\/wp-admin\/admin-ajax.php","posts":"{\"error\":\"\",\"m\":\"\",\"p\":\"2351\",\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"name\":\"\",\"pagename\":\"\",\"page_id\":\"2351\",\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"ignore_sticky_posts\":false,\"suppress_filters\":false,\"cache_results\":true,\"update_post_term_cache\":true,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"post_type\":\"\",\"posts_per_page\":4,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}","current_page":"1","max_page":"0","maindiv":"#main","innerdiv":".post","loadmore_image":"http:\/\/localhost:8000\/wp-content\/plugins\/infinite-scroll-and-ajax-load-more\/public\/images\/ajax-loader.gif"};
/* ]]> */
    </script>
    <script
        src='<?= BASE_URL ?>wp-content/plugins/infinite-scroll-and-ajax-load-more/public/js/bliss-infinite-loadmore.js?ver=1.0.0'
        id='bliss_loadmore-js'></script>
    <script src='<?= BASE_URL ?>wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.6.5.1'
        id='js-cookie-js'></script>
    <script type='text/javascript' id='woocommerce-js-extra'>
        /* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp\/demo\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/wp\/demo\/?wc-ajax=%%endpoint%%"};
/* ]]> */
    </script>
    <script src='<?= BASE_URL ?>wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=6.5.1'
        id='woocommerce-js'></script>
    <script type='text/javascript' id='wc-cart-fragments-js-extra'>
        /* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp\/demo\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/wp\/demo\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_148da2e7f2e897e2a2deb24c3559221c","fragment_name":"wc_fragments_148da2e7f2e897e2a2deb24c3559221c","request_timeout":"5000"};
/* ]]> */
    </script>
    <script src='<?= BASE_URL ?>wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=6.5.1'
        id='wc-cart-fragments-js'></script>
    <script
        src='<?= BASE_URL ?>wp-content/themes/clubio/assets/js/jquery.elevateZoom/jquery.elevateZoom-3.0.8.min.js?ver=6.0'
        id='clubio-zoom-js'></script>
    <script src='<?= BASE_URL ?>wp-content/themes/clubio/assets/js/slick-carousel/slick/slick.min.js?ver=6.0'
        id='slick-js'></script>
    <script src='<?= BASE_URL ?>wp-content/themes/clubio/assets/js/tilt/tilt.jquery.min.js?ver=6.0' id='tilt-js'>
    </script>
    <script
        src='<?= BASE_URL ?>wp-content/themes/clubio/assets/js/magnific-popup/dist/jquery.magnific-popup.min.js?ver=6.0'
        id='magnific-popup-js'></script>
    <script src='<?= BASE_URL ?>wp-content/themes/clubio/assets/js/sumoselect/jquery.sumoselect.min.js?ver=6.0'
        id='sumoselect-js'></script>
    <script src='<?= BASE_URL ?>wp-content/themes/clubio/assets/js/air-datepicker-master/datepicker.min.js?ver=6.0'
        id='air-datepicker-js'></script>
    <script src='<?= BASE_URL ?>wp-content/themes/clubio/assets/js/countdown/jquery.countdown.min.js?ver=6.0'
        id='countdown-js'></script>
    <script src='<?= BASE_URL ?>wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
    <script src='<?= BASE_URL ?>wp-content/themes/clubio/assets/js/popper/popper.min.js?ver=6.0' id='popper-js'>
    </script>
    <script src='<?= BASE_URL ?>wp-content/themes/clubio/assets/js/bootstrap/bootstrap.min.js?ver=6.0'
        id='bootstrap-js'></script>
    <script src='<?= BASE_URL ?>wp-content/themes/clubio/assets/js/lazysizes/lazysizes.min.js?ver=6.0'
        id='lazysizes-js'></script>
    <script src='<?= BASE_URL ?>wp-content/themes/clubio/assets/js/lazysizes/plugins/bgset/ls.bgset.min.js?ver=6.0'
        id='ls-bgset-js'></script>
    <script src='<?= BASE_URL ?>wp-content/themes/clubio/assets/js/theme-js.js?ver=6.0' id='clubio-custom-js'></script>
    <script type='text/javascript' id='wpb_composer_front_js-js-extra'>
        /* <![CDATA[ */
var vcData = {"currentTheme":{"slug":"clubio"}};
/* ]]> */
    </script>
    <script src='<?= BASE_URL ?>wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.9.0'
        id='wpb_composer_front_js-js'></script>
    <script type='text/javascript' id='clubio-rslider-element-js-extra'>
        /* <![CDATA[ */
var rsObject = {"el_id":"js-mainSlider","arrows":"false","dots":"false","autoplay":"true","autoplayspeed":"5500","fade":"true","speed":"1000","rtl":""};
/* ]]> */
    </script>
    <script src='<?= BASE_URL ?>wp-content/plugins/theme-core/assets/clubio_rslider_element.js?ver=6.0'
        id='clubio-rslider-element-js'></script>
    <script>
        /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
    </script>
</body>

</html>