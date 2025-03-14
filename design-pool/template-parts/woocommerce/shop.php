<section class="aw-section aw-shop center-list-product dp-grid-archive">
            
  <div class="aw-woo-banner ctrl-width-center text-center d-mb-3" style="--ctrl-max-width: 865px;">
      
      <h1 class="aw-headline aw-headline__head-two font-raleway weight-600 violet d-mb-2">
        SHOP <span class="light-purple">OUR MOST POPULAR PATTERNS</span>
      </h1>
      
      <p class="sub-text__two dark-grey anchor-violet">
        We've curated our most popular designs and made them ready for purchase.
      </p>
      
      <p class="sub-text__two dark-grey anchor-violet">
        For more patterns, search our <a href="<?php echo get_site_url().'/licensable-designs/'; ?>" target="_blank" rel="noopener noreferrer">DESIGNS</a> page to find your perfect pattern, then visit our <button class="design-concierge" aria-label="Open Design Concierge contact form">Design Concierge</button> to start printing a custom project.
      </p> 

  </div><!--.aw-woo-banner -->
  
  <div class="aw-woo-content woo-columns ctrl-width-center d-mb-2 d-pt-1" style="--ctrl-max-width: 965px;">
    
    <div class="woo-columns__col-3 text-center">
      
      <a class="col-link" href="<?php echo get_site_url().'/product-category/wallpaper/'; ?>">
        
        <img src="<?php echo get_site_url().'/wp-content/uploads/2024/04/shop_veilish.jpg'; ?>" 
          srcset="<?php echo get_site_url();?>/wp-content/uploads/2024/04/shop_veilish-768x769.jpg 768w, 
          <?php echo get_site_url();?>/wp-content/uploads/2024/04/shop_veilish-640x640.jpg 640w, 
          <?php echo get_site_url();?>/wp-content/uploads/2024/04/shop_veilish-600x601.jpg 600w,
          <?php echo get_site_url();?>/wp-content/uploads/2024/04/shop_veilish-300x300.jpg 300w" 
          sizes="(max-width: 800px) 100vw, 800px"
          class="woo-columns__thumbnail" alt="">
        
        <h4 class="text-medium font-raleway weight-600 violet">SHOP <span class="light-purple">WALLPAPER</span></h4>
        
        <p>For home or temporary commercial</p>

        <span class="shop-btn">SHOP</span>
        
      </a>
      
    </div><!-- .woo-columns__col-3 -->
    
    <div class="woo-columns__col-3 text-center">
      
      <a class="col-link" href="<?php echo get_site_url().'/product-category/woven-window-film/'; ?>">
        
        <img src="<?php echo get_site_url().'/wp-content/uploads/2024/09/Shop-Direct_WovenWindowFilm_Map_P2226b1_2-min.jpg'; ?>" 
          srcset="<?php echo get_site_url();?>/wp-content/uploads/2024/09/Shop-Direct_WovenWindowFilm_Map_P2226b1_2-min-2x.jpg 2x" 
          class="woo-columns__thumbnail" alt="">
        
        <h4 class="text-medium font-raleway weight-600 violet">SHOP <span class="light-purple">WOVEN WINDOW FILM</span></h4>
        
        <p>For commercial or home</p>

        <span class="shop-btn">SHOP</span>
        
      </a>
      
    </div><!-- .woo-columns__col-3 -->

    <div class="woo-columns__col-3 text-center">
      
      <a class="col-link" href="<?php echo get_site_url().'/product-category/woven-window-film-mini-mural/'; ?>">
        
        <img src="<?php echo get_site_url().'/wp-content/uploads/2024/09/Shop-Direct_WWF_Mini-Mural_Map_P1107-300x300.jpg'; ?>" 
          srcset="<?php echo get_site_url();?>/wp-content/uploads/2024/09/Shop-Direct_WWF_Mini-Mural_Map_P1107-640x640.jpg 2x" 
          class="woo-columns__thumbnail" alt="">
        
        <h4 class="text-medium font-raleway weight-600 violet">SHOP <span class="light-purple">WOVEN WINDOW FILM MINI MURAL</span></h4>
        
        <p>For commercial or home</p>

        <span class="shop-btn">SHOP</span>
        
      </a>
      
    </div><!-- .woo-columns__col-3 -->
    
  </div>

  <ul class="aw-banner aw-banner__breadcrumslist">
        
        <li>
            <a href="<?php echo get_site_url(); ?>">Home</a>
            <i class="fa-solid fa-angle-right"></i>
        </li>
            
        <li>
            <a href="<?php echo get_site_url(); ?>/shop/">SHOP DIRECT</a>
            <i class="fa-solid fa-angle-right"></i>
        </li>  
        
        <li><?php echo $cat->name; ?></li>
        
    </ul>
    
    <button class="mobile-filter-toggle"><i class="fa-solid fa-sliders"></i> FILTER</button>
	
	<div class="sidebar-overlay sidebar-overlay--woocommerce"></div>
    
    <div class="aw-licensable-wrap aw-woo-wrap">
        
        <div class="aw-woo-wrap__sidebar">
                
            <?php echo do_shortcode('[searchandfilter id="79274"]'); ?>
        
        </div><!-- .aw-woo-wrap__sidebar -->

        <div class="aw-woo-wrap__main-content">
            
            <ul id="product-filter" class="aw-licensable-items">

                <?php 

                    // Remove WooCommerce's default query modifications
                    remove_action('pre_get_posts', array(WC()->query, 'pre_get_posts'));

                    // Get the correct page number from Search & Filter Pro
                    $paged = (isset($_GET['sf_paged'])) ? intval($_GET['sf_paged']) : 1;

                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 32,
                        'paged'          => $paged,
                        'post_status'    => 'publish',
                        'tax_query'      => array(
                            array(
                                'taxonomy' => 'product_visibility',
                                'field'    => 'name',
                                'terms'    => 'exclude-from-catalog',
                                'operator' => 'NOT IN',
                            ),
                        )
                    );

                    $args['search_filter_id'] = 79274;

                    $query = new WP_Query($args);

                    if ( $query->have_posts() ) : 
                    
                    $count = 1; 
                    
                    while ( $query->have_posts() ) : $query->the_post() ; 
                    
                    $count ++; ?>

                    <li id="post-<?php the_ID(); ?>" class="aw-licensable-items__item item-<?php echo $count; ?>">

                        <div class="aw-entry-content">

                            <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                                <?php 
                                $thumbnail_id = get_post_thumbnail_id();
                                $thumbnail_alt = get_the_title();

                                // Get the thumbnail image
                                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'aw_small' );
                                $thumbnail_width = $thumbnail_url[1];
                                $thumbnail_height = $thumbnail_url[2];

                                // Get the medium image
                                $medium_url = wp_get_attachment_image_src( $thumbnail_id, 'aw_medium' );
                                $medium_width = $medium_url[1];
                                $medium_height = $medium_url[2];

                                // Get the large image
                                $large_url = wp_get_attachment_image_src( $thumbnail_id, 'aw_medium_large' );
                                $large_width = $large_url[1];
                                $large_height = $large_url[2];

                                // ACF Image
                                $product_hover_image = get_field('card_product_image_hover');
                                $product_hover_image_alt = get_post_meta($product_hover_image, '_wp_attachment_image_alt', true);

                                // Display the mapped image as the front image
                                echo '<img class="post-thumbnail__front" src="' . esc_url( $thumbnail_url[0] ) . '" alt="' . esc_attr( $thumbnail_alt ) . '" srcset="' . esc_url( $medium_url[0] ) . ' ' . intval( $medium_width ) . 'w, ' . esc_url( $large_url[0] ) . ' ' . intval( $large_width ) . 'w" sizes="(max-width: ' . intval( $thumbnail_width ) . 'px) 100vw, ' . intval( $thumbnail_width ) . 'px" loading="lazy" />';

                                // Check if hover image exists
                                if ( $product_hover_image ) : ?>
                                    <div class="licensable-content__column licensable-gallery">
                                        <img class="post-thumbnail__back" <?php awesome_acf_responsive_image( $product_hover_image, 'aw_small', '300px' ); ?> alt="<?php echo esc_attr( $product_hover_image_alt ); ?>" loading="lazy" />
                                    </div>
                                <?php else : ?>
                                    <!-- Optionally, you can display a fallback image or leave it empty -->
                                    <div class="licensable-content__column licensable-gallery">
                                        <img class="post-thumbnail__back" src="<?php echo esc_url( $thumbnail_url[0] ); ?>" alt="<?php echo esc_attr( $thumbnail_alt ); ?>" srcset="<?php echo esc_url( $medium_url[0] ); ?> <?php echo intval( $medium_width ); ?>w, <?php echo esc_url( $large_url[0] ); ?> <?php echo intval( $large_width ); ?>w" sizes="(max-width: <?php echo intval( $thumbnail_width ); ?>px) 100vw, <?php echo intval( $thumbnail_width ); ?>px" loading="lazy" />
                                    </div>
                                <?php endif; ?>
                            </a><!-- .post-thumbnail -->

                            <h4 class="aw-title"><?php the_title();?></h4>
                                
                            <a class="gen-btn" href="<?php echo get_permalink(); ?>">SHOP</a>

                        </div><!-- .aw-entry-content -->

                    </li><!-- .lists -->

                    <?php endwhile; ?>

                    <?php else : ?>

                    <p class="aw-result no-post-found"><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    
                    <div class="aw-btn-ctner events-large-btn text-center">
                        
                        <a class="gen-btn gen-btn__violet" href="<?php echo get_site_url(); ?>/licensable-designs/">LICENSABLE DESIGNS</a>
                        
                    </div>

                    <?php endif; ?>
                    



                    <div class="aw-pagination">
                        <div class="aw-pagination__numbers">
                        <?php
                            if ($query->max_num_pages > 1) {
                                $current_url = home_url($wp->request);
                                
                                echo paginate_links(array(
                                    'base'      => add_query_arg('sf_paged', '%#%', $current_url),
                                    'format'    => '?sf_paged=%#%',
                                    'current'   => $paged,
                                    'total'     => $query->max_num_pages,
                                    'mid_size'  => 2,
                                    'prev_text' => __('<i class="fa-solid fa-angle-left"></i>'),
                                    'next_text' => __('<i class="fa-solid fa-angle-right"></i>')
                                ));
                            }
                        ?>
                        </div>
                    </div>
                    
                <?php wp_reset_postdata(); ?>

            </ul>            
                
        </div><!-- .main-content -->
                
    </div><!-- .aw-woo-wrap -->
            
</section><!--.aw-section -->

<?php get_template_part('template-parts/woocommerce/concierge-form'); ?>
