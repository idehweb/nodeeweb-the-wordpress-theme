<?php
/**
 * Title: Image with rounded frame
 * Slug: nodeeweb/image-rounded-frame
 * Categories: nodeeweb
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"0"}}},"backgroundColor":"primary","className":"is-style-cutout-circle-down"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-cutout-circle-down" style="margin-bottom:0"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"radius":"3rem"}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-primary-background-color has-text-color has-background" style="border-radius:3rem;margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:separator {"backgroundColor":"background","className":"is-style-double-line"} -->
<hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-double-line"/>
<!-- /wp:separator -->

<!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large"><img src="<?php echo  esc_url( get_template_directory_uri() ); ?>/assets/images/img-placeholder.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:separator {"backgroundColor":"background","className":"is-style-double-line-inverted"} -->
<hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-double-line-inverted"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0"}}},"backgroundColor":"primary","className":"is-style-cutout-circle-up"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-cutout-circle-up" style="margin-top:0"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
