<?php 

/*
Template Name: Licensable Designs
*/

global $wp_query;
$cat = $wp_query->get_queried_object();


get_header(); ?>

<div class="main-content aw-default-page dp-grid-archive">
	
  <section class="aw-section aw-product-category center-list-product">
              
      <div class="ctrl-width-center text-center mob-pl-pr-0 tab-pl-pr-2 d-mb-1" style="--ctrl-max-width: 980px;">
          
          <h1 class="aw-headline aw-headline__head-two font-raleway weight-600 violet d-mb-2">SPECIFY ANY <span class="light-purple">PATTERN ON ANY MATERIAL</span></h1>
        
          <p class="sub-text__two anchor-violet dark-grey">All patterns in the Design Pool library can be printed on any material. Patterns are already in seamless repeat and can be custom colored if needed. <a href="<?php echo get_site_url(); ?>/how-to-search-the-design-pool-library/" target="_blank">Search by market, color, style and more.</a></p>

      </div>
    
      <ul class="aw-banner aw-banner__breadcrumslist d-pl-pr-0">
          
        <li>
          <a href="<?php echo get_site_url(); ?>">Home</a>
          <i class="fa-solid fa-angle-right"></i>
        </li>
        
        <li>
          <?php echo get_the_title( get_option('page_for_posts', true) ); ?>
        </li>
    
      </ul>
    
    
      <button class="mobile-filter-toggle"><i class="fa-solid fa-sliders"></i> FILTER</button>

      <div class="sidebar-overlay sidebar-overlay--woocommerce"></div>
    
      <div class="aw-licensable-wrap aw-woo-wrap">
          
          <div class="aw-woo-wrap__sidebar">
              
            <?php echo do_shortcode('[searchandfilter id="47034"]'); ?>
              
          </div><!-- .aw-woo-wrap__sidebar -->
          

          <div class="aw-woo-wrap__main-content">

              <ul id="licensable-designs-filter" class="aw-licensable-items">

                <?php 
                
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $args = array(
                      'post_type'      => 'licensable-design',
                      'posts_per_page' => 32,
                      'paged'          => $paged
                    );
                    
                    $args['search_filter_id'] = 47034;
                    
                    $query = new WP_Query( $args );

                    if ( $query->have_posts() ) : 
                      
                    $count = 1; 
                    
                    while ( $query->have_posts() ) : $query->the_post() ; 
                    
                    $count ++; ?>
                
                      <li id="post-<?php the_ID(); ?>" class="aw-licensable-items__item item-<?php echo $count; ?>">

                        <div class="aw-entry-content">
                          
                          <a href="<?php the_permalink() ?>" class="post-thumbnail">
                          
                          <?php get_template_part( 'template-parts/default','thumbnail' ); ?>

                          <?php $gallery_images = get_field('licensable_gallery');
                            
                            $gallery_images_alt = get_post_meta($gallery_images , '_wp_attachment_image_alt', true);

                            if( $gallery_images ): ?>
                            
                                <div class="licensable-content__column licensable-gallery">
                                  
                                  <?php if (count($gallery_images) >= 2) {
                                    
                                      $second_image = $gallery_images[1]; ?>
                                      
                                      <img class="post-thumbnail__back" <?php awesome_acf_responsive_image($second_image,'aw_small','300px'); ?> alt="<?php echo $gallery_images_alt; ?>" loading="lazy" />      
                                      
                                  <?php } ?>
                                  
                                  </div> 

                              <?php else: ?>
                                                  
                                <img class="post-thumbnail__back" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/06/Modern_Chair2_P2186a4-640x640.jpg" alt="default hover image" width="300" height="300" loading="lazy" />    

                            <?php endif; ?>


                          </a><!-- .post-thumbnail -->

                          <h4 class="aw-title"><?php the_title();?></h4>
                            
                          <a class="gen-btn" href="<?php echo get_permalink(); ?>">VIEW COLORS</a>

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
                              $big = 999999999; 
                              
                              if ($query->max_num_pages > 1) {
                              
                              echo paginate_links( array(
                                  'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                  'format'  => '?paged=%#%',
                                  'current' => $paged,
                                  'total'   => $query->max_num_pages,
                                  'mid_size'        => 2,
                                  'prev_text'       => __('<i class="fa-solid fa-angle-left"></i>'),
                                  'next_text'       => __('<i class="fa-solid fa-angle-right"></i>')
                              ) );
                              
                            }
                          ?>
                          
                        </div>

                      </div>
                    
                    <?php wp_reset_postdata(); ?>

              </ul>
              
              <!--               
              <div class="aw-pagination">
											
                <a class="gen-btn gen-btn__violet aw-load-more">Load More</a>
                      
              </div> -->
                  
              <p class="bottom-content">The Design Pool library of licensable designs is easy to <a href="/how-to-search-the-design-pool-library/">search</a> using a wide range of criteria. You can also <a href="/how-to-order-a-sample-through-our-website/">request samples</a> directly from our printing partners and <a href="/the-design-pool-wishlist/">create a personal wishlist</a> of your favorite patterns. Design Pool is <a href="/how-to-use-design-pool-as-a-design-resource/">a valuable resource</a> for interior designers working in any market. If you have any questions about using the Design Pool library, please <a href="/contact/">contact us</a>.</p>

          </div><!-- .main-content -->
                  
      </div><!-- .aw-woo-wrap -->
          
  </section><!--.aw-section -->

</div><!-- .main-content -->

<?php get_footer(); ?>
