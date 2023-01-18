<?php
/**
 * Title: Newsletter banner
 * Slug: nodeeweb/newsletter-banner
 * Categories: nodeeweb
 */
?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">


<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|50","right":"3rem","bottom":"var:preset|spacing|50","left":"3rem"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-primary-background-color has-text-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-right:3rem;padding-bottom:var(--wp--preset--spacing--50);padding-left:3rem">


<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center"><?php echo __( 'Sign up', 'nodeeweb' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}}} -->
<p class="has-text-align-center" style="margin-top:0"><?php echo __( 'Click below to sign up', 'nodeeweb' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"primary"} -->
<div class="wp-block-button"><a href="#" class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button"><?php echo __( 'Sign up', 'nodeeweb' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->


</div>
<!-- /wp:group -->


<!-- /wp:group -->
