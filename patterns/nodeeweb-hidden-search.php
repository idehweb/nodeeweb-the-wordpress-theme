<?php
/**
 * Title: Hidden Search
 * Slug: nodeeweb/hidden-search
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"0"}}},"backgroundColor":"primary","className":"is-style-cutout-circle-down"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-cutout-circle-down" style="margin-bottom:0"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|70","bottom":"var:preset|spacing|50","left":"var:preset|spacing|70"}},"border":{"radius":"3rem"}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained","contentSize":"32em"}} -->
<div class="wp-block-group has-background-color has-primary-background-color has-text-color has-background" style="border-radius:3rem;margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--70)"><!-- wp:separator {"backgroundColor":"background","className":"is-style-double-line"} -->
<hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-double-line"/>
<!-- /wp:separator -->

<!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center","style":{"border":{"width":"0px","style":"none","radius":"0px"}},"backgroundColor":"background","textColor":"primary"} /-->

<!-- wp:separator {"backgroundColor":"background","className":"is-style-double-line-inverted"} -->
<hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-double-line-inverted"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0"}}},"backgroundColor":"primary","className":"is-style-cutout-circle-up"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-cutout-circle-up" style="margin-top:0"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center"><?php echo __( 'Search results', 'nodeeweb' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"primary","className":"is-style-double-line"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-double-line"/>
<!-- /wp:separator -->

<!-- wp:query {"queryId":0,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list","columns":2},"layout":{"type":"constrained","contentSize":"480px"}} -->
<div class="wp-block-query"><!-- wp:post-template {"align":"center"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|tertiary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--tertiary);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"typography":{"lineHeight":1.3,"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium"} /-->

<!-- wp:post-date {"textAlign":"right","format":"M j, Y","isLink":true,"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php echo __( 'Nothing to be found, perhaps try another search?', 'nodeeweb' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":"Previous"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->

<!-- wp:separator {"backgroundColor":"primary","className":"is-style-double-line-inverted"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-double-line-inverted"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
