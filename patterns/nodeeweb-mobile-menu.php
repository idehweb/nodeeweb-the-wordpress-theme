<?php
/**
 * Title: Mobile menu
 * Slug: nodeeweb/mobile-menu
 * Categories: pages
 */
?>
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"0","left":"var:preset|spacing|40"}}},"backgroundColor":"background","className":"hideInDesktop nowrap jc-sa"} -->
<div class="wp-block-columns are-vertically-aligned-center hideInDesktop nowrap jc-sa has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":""} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:html -->
        <p><a href="/"></p>
        <div class="svg-logo"></div>
        <p></a></p>
        <!-- /wp:html --></div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"","className":"header-button-parts","layout":{"type":"constrained","justifyContent":"center"}} -->
    <div class="wp-block-column is-vertically-aligned-center header-button-parts"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"luminous-vivid-orange","textColor":"background","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"5px","bottom":"5px"}}},"className":"is-style-outline donate-icon","fontFamily":"worksans"} -->
            <div class="wp-block-button is-style-outline donate-icon has-worksans-font-family"><a class="wp-block-button__link has-background-color has-luminous-vivid-orange-background-color has-text-color has-background wp-element-button" style="border-radius:20px;padding-top:5px;padding-bottom:5px">Donate</a></div>
            <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"50px","className":"d-flex jc-r third-col-mobile"} -->
    <div class="wp-block-column is-vertically-aligned-center d-flex jc-r third-col-mobile" style="flex-basis:50px"><!-- wp:buttons {"className":"call-icon-mobile","layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons call-icon-mobile"><!-- wp:button {"className":"call-icon "} -->
            <div class="wp-block-button call-icon"><a class="wp-block-button__link wp-element-button">call</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"menu-icon "} -->
            <div class="wp-block-button menu-icon"><a class="wp-block-button__link wp-element-button">menu</a></div>
            <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"the-mobile-menu","layout":{"type":"constrained"}} -->
<div class="wp-block-group the-mobile-menu"><!-- wp:group {"className":"the-mobile-menu-inside","layout":{"type":"constrained"}} -->
    <div class="wp-block-group the-mobile-menu-inside"><!-- wp:separator {"style":{"color":{"background":"#e5e7eb"}},"className":"is-style-wide top-line-of-menu"} -->
        <hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide top-line-of-menu" style="background-color:#e5e7eb;color:#e5e7eb"/>
        <!-- /wp:separator -->

        <!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search"} /-->

        <!-- wp:navigation {"ref":4,"overlayMenu":"never","className":"first-mobile-menu","layout":{"type":"flex","orientation":"vertical"}} /-->

        <!-- wp:separator {"style":{"color":{"background":"#e5e7eb"}},"className":"is-style-wide"} -->
        <hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#e5e7eb;color:#e5e7eb"/>
        <!-- /wp:separator -->

        <!-- wp:navigation {"ref":4,"overlayMenu":"never","className":"second-mobile-menu","layout":{"type":"flex","orientation":"vertical"}} /-->

        <!-- wp:navigation {"ref":4,"overlayMenu":"never","className":"third-mobile-menu","layout":{"type":"flex","orientation":"vertical"}} /--></div>
    <!-- /wp:group --></div>
<!-- /wp:group -->