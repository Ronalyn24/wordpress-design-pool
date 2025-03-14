<?php
/*
Template Name: Home Page
*/

get_header(); ?>


    <div class="main-content aw-home-page">

        <section class="aw-section banner-half d-no-padding">

            <div class="aw-row-columns">    

                <div class="aw-column col-1-of-2 d-flex d-pt-pb-5 d-pl-pr-4 tab-pl-pr-2 mob-pl-pr-20 small-mob-pt-pb-3">
                    
                    <div class="banner-half__content ctrl-width-right" style="--ctrl-max-width: 465px;">

                        <h1 class="aw-headline aw-headline__head-two violet w-bold">Shop Direct is finally here!</h1>
                        
                        <p class="text-medium font-arsenal black">Shop our new window films and wallpapers.</p>
                        
                        <div class="banner-half__search">
                            
                            <h2 class="aw-headline aw-headline__head-three w-bold">Search our library of designs.</h2>
                            
                            <div class="home-banner-search">
                                
                                <?php echo do_shortcode('[searchandfilter id="55898"]'); ?>

                            </div>
                            
                            <p class="text-medium font-arsenal d-mb-0">Print any of our patterns on any product you want:</p>
                            
                            <p class="text-medium font-arsenal">Wallcovering, Upholstery, Acoustic Tiles, Ceiling Tiles, Vinyl Flooring, Window Films, and more!</p>
                            
                            <div class="aw-link-ctner text-right">
                                
                                <a class="text-medium link link--right font-arsenal" href="/how-to-use-design-pool-as-a-design-resource/" target="_blank" rel="noopener">Learn more</a>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
				
                <div class="aw-column col-1-of-2">
                    
                    <a href="<?php echo get_site_url(); ?>/shop/">
                        
                        <?php $home_banner_image_desktop = get_field( 'home_banner_desktop_image' ); 

                        $home_banner_image_mobile = get_field( 'home_banner_mobile_image' ); ?>

                        <picture class="image-object-fit">

                            <?php if(!empty($home_banner_image_mobile)) : ?>

                            <source class="image-object-fit__img" srcset="<?php echo esc_url($home_banner_image_mobile['url']); ?> 1x, 
                            <?php echo esc_url($home_banner_image_mobile['url']); ?> 2x" media="(max-width: 600px)" 
                            alt="<?php echo esc_attr($home_banner_image_mobile['alt']); ?>">

                            <?php endif; ?>

                            <img class="image-object-fit__img" src="<?php echo esc_url($home_banner_image_desktop['url']); ?>" 
                            srcset="<?php echo esc_url($home_banner_image_desktop['url']); ?> 2x" 
                            alt="<?php echo esc_attr($home_banner_image_desktop['alt']); ?>">

                        </picture>
                    
                    </a>  
                         
                </div>
                
            </div><!-- .aw-row -->

        </section><!-- .aw-section -->
        
        
        <section class="aw-section custom-color d-no-padding bg-light-grey">
            
            <div class="d-flex content-middle-center ctrl-width-center d-pt-pb-5 mob-flex-dir-column mob-pl-pr-20" style="--ctrl-max-width: 670px;">
                
                <img class="thumbnail-img-small mob-mb-2" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/04/Website_Home-Page_Image_2.png" alt="" />
                
                <div class="custom-color__content text-center">
                    
                    <h2 class="aw-headline aw-headline__head-two violet weight-500">Need a Custom Color?</h2>
                    
                    <p class="sub-text__two dark-grey anchor-violet d-mb-0">All Design Pool patterns can be custom colored to match any specific color palette. <a href="/how-to-request-a-custom-color/">Let's get started.</a></p>
                    
                </div>
                
            </div><!-- .aw-row -->
            
        </section><!-- .aw-section -->
        
        
        <section class="aw-section">
            
            <div class="aw-row invisible-collection text-center">
                
                <?php get_template_part( 'template-parts/flickity-custom','buttons' ); ?>
                
                <h3 class="aw-headline aw-headline__head-three">
                    
                    <?php $farm_title = get_field( 'farm_collection_title' );

                    $farm_title_link = get_field( 'farm_collection_title_link' ); ?>

                    <?php if (!empty($farm_title_link) ) : ?>
                        
                        <a href="<?php echo esc_url( $farm_title_link); ?>" target="_blank" title="<?php echo $farm_title; ?>"><?php echo $farm_title; ?></a>
                        
                    <?php else: ?>
                        
                        <?php echo $farm_title; ?>
                        
                    <?php endif; ?>

                </h3>
                        
                <div class="anchor-violet">
                    
                   <?php the_field('farm_collection_sub_text'); ?>
                
                </div>

                <?php echo do_shortcode('[post-shortcode custom_taxonomy="licensable-category" custom_tax_term="collection-one"]'); ?>
                
            </div><!-- .invisible-collection -->
            
            <div class="aw-row cryptology-collection text-center">
                
                <?php get_template_part( 'template-parts/flickity-custom','buttons' ); ?>
                
                <h3 class="aw-headline aw-headline__head-three">
                    
                    <?php $crypto_title = get_field( 'crypto_collection_title' );

                    $crypto_title_link = get_field( 'crypto_collection_title_link' ); ?>

                    <?php if (!empty($crypto_title_link) ) : ?>
                        
                        <a href="<?php echo esc_url( $crypto_title_link); ?>" target="_blank" title="<?php echo $crypto_title; ?>"><?php echo $crypto_title; ?></a>
                        
                    <?php else: ?>
                        
                        <?php echo $crypto_title; ?>
                        
                    <?php endif; ?>

                </h3>
                        
                <div class="anchor-violet">
                    
                   <?php the_field('crypto_collection_sub_text'); ?>
                
                </div>
                
                <?php echo do_shortcode('[post-shortcode product_category="wallpaper"]'); ?>
                
            </div><!-- .cryptology-collection -->
                    
        </section><!-- .aw-section -->
        

        <section class="aw-section mob-pt-0">
            
            <div class="aw-row text-center d-pb-4 smob-bp-3">
                
                <?php $dPicturesTitle = get_field('designs_img_title');
                      $dPicturesSubTitle = get_field('designs_img_sub_title'); 
                     
                if( $dPicturesTitle ) : ?>
                
                    <h3 class="aw-headline aw-headline__head-three"><?php echo $dPicturesTitle; ?></h3>
                
                <?php endif; 
                
                if( $dPicturesSubTitle ) : ?>
                
                <div class="anchor-violet">
                    <p><?php echo $dPicturesSubTitle; ?></p>
                </div>
                
                <?php endif; ?>
                
                <?php if( have_rows('designs_img_images') ): ?>

                    <div class="img-object-fit grid grid--4">
                    
                        <?php    
                        
                        $count = 1; 
                        
                        while( have_rows('designs_img_images') ) : the_row();
            
                            $image = get_sub_field('image');
                            
                            $imageLink = get_sub_field('link'); ?>
                            
                            
                            <div class="grid__item">
        
                                <?php if ($image) : 
                                    // ACF Image Array
                                    $image_full = $image['url'];
                                    $image_large = $image['sizes']['aw_small']; 
                                    $image_medium = $image['sizes']['aw_medium'];
                                    $image_small = $image['sizes']['aw_small'];
                                    $image_alt = !empty($image['alt']) ? $image['alt'] : 'The design pool desings'; // Fallback alt text
                                ?>
                                
                                <a class="grid__img-ctner" href="<?php echo esc_url( $imageLink ); ?>">
                                    
                                    <img class="full-img" 
                                    src="<?php echo esc_url($image_full); ?>" 
                                    srcset="<?php echo esc_url($image_large); ?> 1024w, 
                                            <?php echo esc_url($image_medium); ?> 768w, 
                                            <?php echo esc_url($image_small); ?> 480w" 
                                    sizes="(max-width: 400px) 100vw, 400px"
                                    alt="<?php echo esc_attr($image_alt); ?> <?php echo  $count;?>"
                                    loading="lazy" />
                                    </a>
        
                                <?php endif; ?>

                            </div><!--.grid__item -->

                    <?php 
                    $count ++;
                    endwhile; ?>
                    
                    </div><!--.grid -->
                    
                <?php endif; ?>
                
            </div><!-- .aw-row -->
            
             
            <div class="aw-row d-pb-1">

                <h3 class="aw-headline aw-headline__head-three text-center">THE DESIGN POOL ADVANTAGE</h3>

                <div class="img-card-circle grid grid--4 d-pt-1">

                    <div class="grid__item">
                       
                        <div class="grid__img-ctner">
    
                            <img class="full-img" 
                                src="<?php echo get_site_url().'2024/08/P1602b1_Direct-Shop-Home.jpg'; ?>" 
                                srcset="<?php echo get_site_url().'/wp-content/uploads/2024/08/P1602b1_Direct-Shop-Home-640x640.jpg';?> 1024w, 
                                <?php echo get_site_url().'/wp-content/uploads/2024/08/P1602b1_Direct-Shop-Home-600x600.jpg';?> 980w,  
                                <?php echo get_site_url().'/wp-content/uploads/2024/08/P1602b1_Direct-Shop-Home-300x300.jpg';?> 768w, 
                                <?php echo get_site_url().'/wp-content/uploads/2024/08/P1602b1_Direct-Shop-Home-244x244.jpg';?> 480w"
                                sizes="(max-width: 400px) 100vw, 400px"
                                width="300" 
                                alt="Pillows Designs" 
                                loading="lazy" />            
                        </div>
                        
                        <div class="grid__content ctrl-width" style="--ctrl-max-width: 240px;">
                            
                            <h4 class="aw-headline__head-four">Exclusive Design</h4>
                        
                            <p class="anchor-violet text-v-small">Need designs that are exclusive to you? <a href="<?php echo get_site_url(); ?>/contact/">Contact us</a> to start the process.</p>
                        
                        </div>

                    </div><!--.grid__item -->
                    
                    <div class="grid__item">
                       
                        <div class="grid__img-ctner">
    
                            <img class="full-img" 
                                src="<?php echo get_site_url().'2024/08/P1602b1_Direct-Shop-Home.jpg'; ?>" 
                                srcset="<?php echo get_site_url().'/wp-content/uploads/2024/08/P1602b1_Direct-Shop-Home-640x640.jpg';?> 1024w, 
                                <?php echo get_site_url().'/wp-content/uploads/2024/08/P1602b1_Direct-Shop-Home-600x600.jpg';?> 980w,  
                                <?php echo get_site_url().'/wp-content/uploads/2024/08/P1602b1_Direct-Shop-Home-300x300.jpg';?> 768w, 
                                <?php echo get_site_url().'/wp-content/uploads/2024/08/P1602b1_Direct-Shop-Home-244x244.jpg';?> 480w"
                                sizes="(max-width: 400px) 100vw, 400px"
                                width="300" 
                                alt="Pillows Designs" 
                                loading="lazy" />            
                        </div>
                        
                        <div class="grid__content ctrl-width" style="--ctrl-max-width: 240px;">
                            
                            <h4 class="aw-headline__head-four">Vector Designs</h4>
                        
                            <p class="anchor-violet text-v-small">All of designs are in Vector format which offers scalability without losing resolution.</p>
                        
                        </div>

                    </div><!--.grid__item -->
                    
                    <div class="grid__item">
                       
                        <div class="grid__img-ctner">
    
                            <img class="full-img" 
                                src="<?php echo get_site_url().'2024/08/P1602b1_Direct-Shop-Home.jpg'; ?>" 
                                srcset="<?php echo get_site_url().'/wp-content/uploads/2024/08/P1602b1_Direct-Shop-Home-640x640.jpg';?> 1024w, 
                                <?php echo get_site_url().'/wp-content/uploads/2024/08/P1602b1_Direct-Shop-Home-600x600.jpg';?> 980w,  
                                <?php echo get_site_url().'/wp-content/uploads/2024/08/P1602b1_Direct-Shop-Home-300x300.jpg';?> 768w, 
                                <?php echo get_site_url().'/wp-content/uploads/2024/08/P1602b1_Direct-Shop-Home-244x244.jpg';?> 480w"
                                sizes="(max-width: 400px) 100vw, 400px"
                                width="300" 
                                alt="Pillows Designs" 
                                loading="lazy" />            
                        </div>
                        
                        <div class="grid__content ctrl-width" style="--ctrl-max-width: 240px;">
                            
                            <h4 class="aw-headline__head-four">Experienced Designers</h4>
                        
                            <p class="anchor-violet text-v-small">All our or designers have many years of design experience. <a href="#">Learn more</a> about out team</p>
                        
                        </div>

                    </div><!--.grid__item -->
                    
                    <div class="grid__item">
                       
                        <div class="grid__img-ctner">
    
                            <img class="full-img" 
                                src="<?php echo get_site_url().'2024/08/P1602b1_Direct-Shop-Home.jpg'; ?>" 
                                srcset="<?php echo get_site_url().'/wp-content/uploads/2024/08/P1602b1_Direct-Shop-Home-640x640.jpg';?> 1024w, 
                                <?php echo get_site_url().'/wp-content/uploads/2024/08/P1602b1_Direct-Shop-Home-600x600.jpg';?> 980w,  
                                <?php echo get_site_url().'/wp-content/uploads/2024/08/P1602b1_Direct-Shop-Home-300x300.jpg';?> 768w, 
                                <?php echo get_site_url().'/wp-content/uploads/2024/08/P1602b1_Direct-Shop-Home-244x244.jpg';?> 480w"
                                sizes="(max-width: 400px) 100vw, 400px"
                                width="300" 
                                alt="Pillows Designs" 
                                loading="lazy" />            
                        </div>
                        
                        <div class="grid__content ctrl-width" style="--ctrl-max-width: 240px;">
                            
                            <h4 class="aw-headline__head-four">Printer Connections</h4>
                        
                            <p class="anchor-violet text-v-small">Ever thought about starting you own line of products. We can connect you with our preferred printers. <a href="#">Start your collection now.</a></p>
                        
                        </div>

                    </div><!--.grid__item -->

                </div><!--.grid -->
                     
            </div><!-- .aw-row -->
            
        </section><!-- .aw-section -->
        
        
        <section class="aw-section bg-light-grey d-pt-3">  
             
            <div class="aw-row d-pb-1">

                <h3 class="aw-headline aw-headline__head-three text-center">INSPIRATION FROM THE BLOG</h3>
                
                <div class="h-blog d-pt-2 ctrl-width-center" style="--ctrl-max-width: 1310px;">
                    
                    <div class="h-blog__column">
                        
                        <p class="sub-text__two dark-grey anchor-violet">
                            Our designs are inspired by stories, nature,... and learn more about our patterns and what inspires us and how you can be inspired to create using our designs... <i>(talk about the story telling, the inspiration, our imagination and creative process which is what we talk about in our blogs.)</i>
                        </p>
                        
                        
                        <div class="aw-timgs">
                            
                            <button class="gen-btn gen-btn__violet about-popup" data-trigger-about="2">BE INSPIRED</button>
                            
                            <span class="small-text"><i>Sign up for a weekly Inspiration</i></span>
                            
                        </div>

                    </div><!--.h-blog__column -->
                    
                    
                    <div class="h-blog__column">
                        
                    <?php echo do_shortcode('[post-shortcode post_type="post" post_item="1"] '); ?>
                        
                    </div><!--.h-blog__column -->
                    
                </div><!-- .h-blog -->
                     
            </div><!-- .aw-row -->
            </i>
        </section><!-- .aw-section -->
    

    </div><!-- .main-content -->


<?php get_footer();
