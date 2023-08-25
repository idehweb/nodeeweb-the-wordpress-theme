<?php
/**
 * Title: Call to action banner
 * Slug: nodeeweb/call-action-banner
 * Categories: nodeeweb
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"80px","bottom":"80px"}}},"className":"padding-left16-at-mobile padding-right16-at-mobile padding-top48-at-mobile padding-bottom48-at-mobile","layout":{"type":"constrained"}} -->
<div class="wp-block-group padding-left16-at-mobile padding-right16-at-mobile padding-top48-at-mobile padding-bottom48-at-mobile"
     style="margin-top:0;margin-bottom:0;padding-top:80px;padding-bottom:80px">
    <!-- wp:columns {"style":{"color":{"background":"#0063a5"}},"className":"max-width100-at-mobile overflow-hidden margin-left0-at-mobile margin-right0-at-mobile padding-0"} -->
    <div class="wp-block-columns max-width100-at-mobile overflow-hidden border-radius20 margin-left0-at-mobile margin-right0-at-mobile padding-0 has-background"
         style="background-color:#0063a5">
        <!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
        <div class="wp-block-column"><!-- wp:image {"id":113,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img
                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Install-nodeeweb.png" alt=""
                        class="wp-image-113"/></figure>
            <!-- /wp:image --></div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"color":{"background":"#0063a5"},"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center has-background"
             style="background-color:#0063a5;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"36px","lineHeight":"1.5"}},"textColor":"background","className":"font-size30-at-mobile line-height36-at-mobile","fontFamily":"focobold"} -->
            <p class="font-size30-at-mobile line-height36-at-mobile has-background-color has-text-color has-focobold-font-family"
               style="font-size:36px;line-height:1.5">Looking for a suitable WordPress theme to install?</p>
            <!-- /wp:paragraph -->

            <!-- wp:spacer {"height":"20px"} -->
            <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.8"}},"textColor":"background"} -->
            <p class="has-background-color has-text-color" style="font-size:16px;line-height:1.8">Just search for `Nodeeweb` in WordPress directory</p>
            <!-- /wp:paragraph -->

            <!-- wp:spacer {"height":"20px"} -->
            <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"fontSize":"small"} -->
            <div class="wp-block-buttons has-custom-font-size has-small-font-size"
                 style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">
                <!-- wp:button {"backgroundColor":"background","style":{"color":{"text":"#288537"},"border":{"radius":"40px"}},"className":"full-width-button-at-mobile"} -->
                <div class="wp-block-button full-width-button-at-mobile"><a
                            class="wp-block-button__link has-background-background-color has-text-color has-background wp-element-button"
                            style="border-radius:40px;color:#288537">Download</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"background","style":{"color":{"text":"#288537"},"border":{"radius":"40px"}},"className":"hide-in-mobile"} -->
                <div class="wp-block-button hide-in-mobile"><a
                            class="wp-block-button__link has-background-background-color has-text-color has-background wp-element-button"
                            style="border-radius:40px;color:#288537">Visit</a></div>
                <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
        <!-- /wp:column --></div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->