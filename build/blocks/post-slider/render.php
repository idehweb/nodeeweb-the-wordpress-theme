<?php
/**
 * Render the post slider block.
 * 
 */

// Exit if accessed directly.
if( ! defined( 'ABSPATH' ) ) exit;

 if( ! function_exists( 'gutslider_post_slider' ) ) {

    function gutslider_post_slider( $attributes ) {

        // block attributes: Post Query
        $queryPosts           = isset( $attributes['queryPosts'] ) ? $attributes['queryPosts'] : [];

        // block attributes
        $showTitle            = isset( $attributes['showTitle'] ) ? $attributes['showTitle'] : true;
        $showCat              = isset( $attributes['showCat'] ) ? $attributes['showCat'] : true;
        $showExcerpt          = isset( $attributes['showExcerpt'] ) ? $attributes['showExcerpt'] : true;
        $showBtn              = isset( $attributes['showBtn'] ) ? $attributes['showBtn'] : true;
        $linkTitle            = isset( $attributes['linkTitle'] ) ? $attributes['linkTitle'] : true;
        $titleTag             = isset( $attributes['titleTag'] ) ? $attributes['titleTag'] : 'h2';
        $btnLabel             = isset( $attributes['btnLabel'] ) ? $attributes['btnLabel'] : 'Read More';
        $enableOverlay        = isset( $attributes['enableOverlay'] ) ? $attributes['enableOverlay'] : true;
        $sliderType           = isset( $attributes['sliderType'] ) ? $attributes['sliderType'] : 'slider';
        $uniqueId             = isset( $attributes['uniqueId'] ) ? $attributes['uniqueId'] : '';
        $navContainerPosition = isset( $attributes['navContainerPosition'] ) ? $attributes['navContainerPosition'] : 'nav_inside';
        $navPosition          = isset( $attributes['navPosition'] ) ? $attributes['navPosition'] : 'nav_cc';

        // animation
        $catAnimation         = isset( $attributes['catAnimation'] ) ? $attributes['catAnimation'] : '';
        $titleAnimation       = isset( $attributes['titleAnimation'] ) ? $attributes['titleAnimation'] : '';
        $exptAnimation        = isset( $attributes['exptAnimation'] ) ? $attributes['exptAnimation'] : '';
        $btnAnimation         = isset( $attributes['btnAnimation'] ) ? $attributes['btnAnimation'] : '';

        // slider options
        $sliderOptions        = isset( $attributes['sliderOptions'] ) ? $attributes['sliderOptions'] : [];
        $showNavigation       = isset( $attributes['showNavigation'] ) ? $attributes['showNavigation'] : true;
        $showPagination       = isset( $attributes['showPagination'] ) ? $attributes['showPagination'] : true;
        $customNavIcon        = isset( $attributes['customNavIcon'] ) ? $attributes['customNavIcon'] : false;
        $navIconSource        = isset( $attributes['navIconSource'] ) ? $attributes['navIconSource'] : 'library';
        $navPrevIcon          = isset( $attributes['navPrevIcon'] ) ? $attributes['navPrevIcon'] : 'arrowLeft';
        $navNextIcon          = isset( $attributes['navNextIcon'] ) ? $attributes['navNextIcon'] : 'arrowRight';
        $customPrevSVG        = isset( $attributes['customPrevSVG'] ) ? $attributes['customPrevSVG'] : '';
        $customNextSVG        = isset( $attributes['customNextSVG'] ) ? $attributes['customNextSVG'] : '';
        $excerptLength        = isset( $attributes['excerptLength'] ) ? $attributes['excerptLength'] : 20;

        // block classes
        $blockClasses         = [ $uniqueId, $navContainerPosition, $navPosition ];
        // block wrapper attributes
        $blockProps           = get_block_wrapper_attributes([
            'class' => implode( ' ', $blockClasses )
        ]); 

        // single block classes
        $swiperClasses = implode( ' ', [
            'swiper-slide',
            $sliderType === 'slider' ? 'slide-mode' : ''
        ]);

        // block inner html sliderOptions
        ?>
            <div <?php echo $blockProps; ?> data-swiper-options="<?php echo esc_attr( wp_json_encode( $sliderOptions ) ); ?>">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php 
                            if( is_array( $queryPosts ) && ! empty( $queryPosts ) ) {

                                foreach ($queryPosts as $post ) {

                                        $postTitle      = isset( $post['title']['rendered'] ) ? $post['title']['rendered'] : '';
                                        $postExcerpt    = isset( $post['excerpt']['rendered'] ) ? $post['excerpt']['rendered'] : '';
                                        $postLink       = isset( $post['link'] ) ? $post['link'] : '';
                                        $postImageId    = isset( $post['featured_media'] ) ? $post['featured_media'] : '';
                                        $postImage      = wp_get_attachment_image_url( $postImageId, 'full', false );
                                        $bgStyle        = !empty( $postImage ) ? 'background-image: url(' . esc_url( $postImage ) . ');' : '';
                                        $postCategories = isset( $post['categories'] ) ? $post['categories'] : [];

                                    ?>

                                        <div class="<?php echo esc_attr( $swiperClasses ); ?>">
                                            <div class="swiper-container-outer" style="<?php echo $bgStyle; ?>">
                                                <?php
                                                    if( $enableOverlay ) {
                                                        ?>
                                                            <div class="gutslider-overlay"></div>
                                                        <?php 
                                                    }
                                                ?>
                                                <div class="gutslider-content-wrapper">
                                                    <div class="gutslider-content-inner">
                                                        <?php 
                                                            // post categories
                                                            if( $showCat ) {
                                                                ?>
                                                                    <div class="post-categories <?php echo esc_attr( $catAnimation ); ?>">
                                                                        <?php 
                                                                            if( is_array( $postCategories ) && ! empty( $postCategories ) ) {
                                                                                foreach ($postCategories as $category ) {
                                                                                    $catId = isset( $category ) ? $category : '';
                                                                                    $category = get_category( $catId );
                                                                                    ?>
                                                                                        <span class="post-category">
                                                                                            <?php 
                                                                                                echo esc_html( $category->name );
                                                                                            ?>
                                                                                        </span>
                                                                                    <?php 
                                                                                }
                                                                            }
                                                                        ?>
                                                                    </div>
                                                                <?php 
                                                            }

                                                            // post title
                                                            if( $showTitle ) {
                                                                if( $linkTitle ) {
                                                                    ?>
                                                                        <a href="<?php echo esc_url( $postLink ); ?>" class="post-title">
                                                                            <<?php echo esc_attr( $titleTag ); ?> class="post-title <?php echo esc_attr( $titleAnimation ); ?>">
                                                                                <?php 
                                                                                    echo esc_html( $postTitle );
                                                                                ?>
                                                                            </<?php echo esc_attr( $titleTag ); ?>>
                                                                        </a>
                                                                    <?php 
                                                                } else {
                                                                    ?>
                                                                        <<?php echo esc_attr( $titleTag ); ?> class="post-title <?php echo esc_attr( $titleAnimation ); ?>">
                                                                            <?php 
                                                                                echo esc_html( $postTitle );
                                                                            ?>
                                                                        </<?php echo esc_attr( $titleTag ); ?>>
                                                                    <?php
                                                                }
                                                            }

                                                            // post excerpt
                                                            if( $showExcerpt ) {
                                                                ?>
                                                                    <div class="post-excerpt <?php echo esc_attr( $exptAnimation ); ?>">
                                                                        <?php 
                                                                            if( $excerptLength > 0 ) {
                                                                                $postExcerpt = wp_trim_words( $postExcerpt, $excerptLength, '...' );
                                                                            }
                                                                            echo wp_kses( $postExcerpt, wp_kses_allowed_html( 'post' ) );
                                                                        ?>
                                                                    </div>
                                                                <?php 
                                                            }

                                                            // post button
                                                            if( $showBtn ) {
                                                                ?>
                                                                    <div class="post-cta-wrapper <?php echo esc_attr( $btnAnimation ); ?>">
                                                                        <a href="<?php echo esc_url( $postLink ); ?>" class="post-cta">
                                                                            <?php 
                                                                                echo esc_html( $btnLabel );
                                                                            ?>
                                                                        </a>
                                                                    </div>
                                                                <?php 
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php 
                                }

                            }
                        ?>
                    </div>
                    <?php 
                        if( $showNavigation === true && $navContainerPosition === 'nav_inside' ) {
                            ?>
                                <div class="gutslider-nav nav_inside <?php echo esc_attr( $navPosition ); ?>">
                                    <?php 
                                        if( $customNavIcon ) {
                                            ?>
                                                <div class="gutslider-prev">
                                                    <?php
                                                        if( $navIconSource === 'library' ) {
                                                            ?>
                                                                <div class="gutslider-prev-icon">
                                                                    <?php 
                                                                        echo gutslider_display_icon( $navPrevIcon );
                                                                    ?>
                                                                </div>
                                                            <?php 
                                                        } else {
                                                            ?>
                                                                <div class="gutslider-prev-icon">
                                                                    <?php 
                                                                        echo $customPrevSVG;
                                                                    ?>
                                                                </div>
                                                            <?php 
                                                        }
                                                    ?>
                                                </div>
                                                <div class="gutslider-next">
                                                    <?php 
                                                        if( $navIconSource === 'library' ) {
                                                            ?>
                                                                <div class="gutslider-next-icon">
                                                                    <?php 
                                                                        echo gutslider_display_icon( $navNextIcon );
                                                                    ?>
                                                                </div>
                                                            <?php 
                                                        } else {
                                                            ?>
                                                                <div class="gutslider-next-icon">
                                                                    <?php 
                                                                        echo $customNextSVG;
                                                                    ?>
                                                                </div>
                                                            <?php 
                                                        }
                                                    ?>
                                                </div>
                                            <?php 
                                        }else {
                                            ?>
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                            <?php 
                                        }
                                    ?>
                                </div>
                            <?php 
                        }
                    ?>
                    <?php 
                        if( $showPagination ) {
                            ?>
                                <div class="swiper-pagination"></div>
                            <?php 
                        }
                    ?>
                </div>
                <?php 
                    if( $showNavigation === true && $navContainerPosition === 'nav_outside' ) {
                        ?>
                            <div class="gutslider-nav nav_outside <?php echo esc_attr( $navPosition ); ?>">
                                <?php 
                                    if( $customNavIcon ) {
                                        ?>
                                            <div class="gutslider-prev">
                                                <?php
                                                    if( $navIconSource === 'library' ) {
                                                        ?>
                                                            <div class="gutslider-prev-icon">
                                                                <?php 
                                                                    echo gutslider_display_icon( $navPrevIcon );
                                                                ?>
                                                            </div>
                                                        <?php 
                                                    } else {
                                                        ?>
                                                            <div class="gutslider-prev-icon">
                                                                <?php 
                                                                    echo $customPrevSVG;
                                                                ?>
                                                            </div>
                                                        <?php 
                                                    }
                                                ?>
                                            </div>
                                            <div class="gutslider-next">
                                                <?php 
                                                    if( $navIconSource === 'library' ) {
                                                        ?>
                                                            <div class="gutslider-next-icon">
                                                                <?php 
                                                                    echo gutslider_display_icon( $navNextIcon );
                                                                ?>
                                                            </div>
                                                        <?php 
                                                    } else {
                                                        ?>
                                                            <div class="gutslider-next-icon">
                                                                <?php 
                                                                    echo $customNextSVG;
                                                                ?>
                                                            </div>
                                                        <?php 
                                                    }
                                                ?>
                                            </div>
                                        <?php 
                                    }else {
                                        ?>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-button-next"></div>
                                        <?php 
                                    }
                                ?>
                            </div>
                        <?php 
                    }
                ?>
            </div>  
        <?php 
    }

 }

 // call the render callback function
 gutslider_post_slider( $attributes );