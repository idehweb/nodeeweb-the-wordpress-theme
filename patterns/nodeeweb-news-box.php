<?php
/**
 * Title: News box
 * Slug: nodeeweb/news-box
 * Categories: nodeeweb
 */
?>
<!-- wp:group {"style":{"color":{"background":"#f9fafb"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"80px","bottom":"40px"}}},"className":"padding-top24-at-mobile padding-bottom24-at-mobile padding-left16-at-mobile padding-right16-at-mobile","layout":{"type":"constrained"}} -->
<div class="wp-block-group padding-top24-at-mobile padding-bottom24-at-mobile padding-left16-at-mobile padding-right16-at-mobile has-background" style="background-color:#f9fafb;margin-top:0;margin-bottom:0;padding-top:80px;padding-bottom:40px"><!-- wp:columns {"style":{"color":{"background":"#f9fafb"}},"className":"max-width100-at-mobile margin-left0-at-mobile  margin-right0-at-mobile "} -->
    <div class="wp-block-columns max-width100-at-mobile margin-left0-at-mobile margin-right0-at-mobile has-background" style="background-color:#f9fafb"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#288537"},"typography":{"fontStyle":"normal","fontWeight":"800","fontSize":"48px"}},"className":"nass font-size36-at-mobile line-height40-at-mobile ","fontFamily":"focobold"} -->
            <h2 class="wp-block-heading has-text-align-center nass font-size36-at-mobile line-height40-at-mobile has-text-color has-focobold-font-family" style="color:#288537;font-size:48px;font-style:normal;font-weight:800">News and stories</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"20px"}},"className":"mw-840 mt-16 font-size18-at-mobile"} -->
            <p class="has-text-align-center mw-840 mt-16 font-size18-at-mobile" style="font-size:20px">Search for `news box` <br>inside Guttenberg pattern parts</p>
            <!-- /wp:paragraph -->

            <!-- wp:query {"queryId":55,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"className":"margin-top48-at-mobile"} -->
            <div class="wp-block-query margin-top48-at-mobile"><!-- wp:post-template {"className":"post-template-home","layout":{"type":"grid","columnCount":3}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
                <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image /-->

                    <!-- wp:group {"className":"post-template-home-inside","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group post-template-home-inside"><!-- wp:post-terms {"term":"category"} /-->

                        <!-- wp:post-title {"isLink":true} /-->

                        <!-- wp:post-excerpt /-->

                        <!-- wp:post-author {"showAvatar":false,"showBio":false,"byline":""} /-->

                        <!-- wp:post-date /--></div>
                    <!-- /wp:group --></div>
                <!-- /wp:group -->
                <!-- /wp:post-template --></div>
            <!-- /wp:query --></div>
        <!-- /wp:column --></div>
    <!-- /wp:columns -->

    <!-- wp:buttons {"className":"max-width100-at-mobile margin-left0-at-mobile margin-right0-at-mobile","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-buttons max-width100-at-mobile margin-left0-at-mobile margin-right0-at-mobile" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"background","style":{"color":{"text":"#288537"},"border":{"radius":"20px"}},"className":"dfghjkjhgf is-style-outline sp-button-g width-auto sqnas margin-top24-at-mobile"} -->
        <div class="wp-block-button dfghjkjhgf is-style-outline sp-button-g width-auto sqnas margin-top24-at-mobile"><a class="wp-block-button__link has-background-background-color has-text-color has-background wp-element-button" style="border-radius:20px;color:#288537">See all news &amp; stories</a></div>
        <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
<!-- /wp:group -->