<?php 

get_header(); ?>

<div class="main-content aw-licensable-tags">
	
  <section class="aw-section aw-product-category center-list-product">
              
      <div class="ctrl-width-center text-center mob-pt-3 tab-pl-pr-2 d-mb-1" style="--ctrl-max-width: 980px;">
          
          <h1 class="aw-headline aw-headline__head-two weight-500 violet d-mb-2">SPECIFY ANY PATTERN ON ANY MATERIAL</h1>
        
          <p class="sub-text__two anchor-violet dark-grey">All patterns in the Design Pool library can be printed on any material. Patterns are already in seamless repeat and can be custom colored if needed. <a href="<?php echo get_site_url(); ?>/how-to-search-the-design-pool-library/">Search by market, color, style and more.</a></p>

      </div>
    
      <ul class="aw-banner aw-banner__breadcrumslist d-pl-pr-0">
          
        <li>
          <a href="<?php echo get_site_url(); ?>">Home</a>
          <i class="fa-solid fa-angle-right"></i>
        </li>
				
				<li><a href="<?php echo get_site_url(); ?>/licensable-designs/">LICENSABLE DESIGNS</a><i class="fa-solid fa-angle-right"></i></li>
        
        <li><?php single_term_title(); ?></li>
    
      </ul>
    
    
      <button class="mobile-filter-toggle d-mb-1"><i class="fa-solid fa-sliders"></i> FILTER</button>

      <div class="sidebar-overlay sidebar-overlay--woocommerce"></div>
    
      <div class="aw-licensable-wrap aw-woo-wrap">
          
          <div class="aw-woo-wrap__sidebar">
              
            <?php echo do_shortcode('[searchandfilter id="47034"]'); ?>

          </div><!-- .aw-woo-wrap__sidebar -->
          

          <div class="aw-woo-wrap__main-content">

              <ul id="licensable-designs-filter" class="aw-licensable-items">

							<?php if ( have_posts() ) : 
								
								$count = 1; 
								
									while ( have_posts() ) : the_post();
									
									$count ++; ?>
                
                      <li id="post-<?php the_ID(); ?>" class="aw-licensable-items__item item-<?php echo $count; ?>">

                        <div class="aw-entry-content">
                          
                          <a href="<?php the_permalink() ?>" class="post-thumbnail">
                          
                            <?php
                            
                              $thumbnail_id = get_post_thumbnail_id();
                              $thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
                            
                              // Get the thumbnail image
                              $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'aw_medium_large' );
                              $thumbnail_width = $thumbnail_url[1];
                              $thumbnail_height = $thumbnail_url[2];

                              // Get the medium image
                              $medium_url = wp_get_attachment_image_src( $thumbnail_id, 'large' );
                              $medium_width = $medium_url[1];
                              $medium_height = $medium_url[2];

                              // Get the large image
                              $large_url = wp_get_attachment_image_src( $thumbnail_id, 'aw_large' );
                              $large_width = $large_url[1];
                              $large_height = $large_url[2];

                              // Output the image with srcset
                              echo '<img src="' . $thumbnail_url[0] . '" alt="'.$thumbnail_alt.'" srcset="' . $medium_url[0] . ' ' . $medium_width . 'w, ' . $large_url[0] . ' ' . $large_width . 'w" sizes="(max-width: ' . $thumbnail_width . 'px) 100vw, ' . $thumbnail_width . 'px">';
                            
                            ?>

                          </a><!-- .post-thumbnail -->
                          
                          <h4 class="aw-title"><?php the_title();?></h4>
                            
                          <a class="gen-btn" href="<?php echo get_permalink(); ?>">READ MORE</a>

                        </div><!-- .aw-entry-content -->

                      </li><!-- .lists -->

                    <?php endwhile; else : ?>

                      <p class="no-post-found text-center"><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

                    <?php endif; ?>

              </ul>
							
							<!-- <div class="aw-pagination">
											
								<a class="gen-btn gen-btn__violet">Load More</a>
											
							</div> -->
                  
              <p class="bottom-content">The Design Pool library of licensable designs is easy to <a href="#" target="_blank">search</a> using a wide range of criteria. You can also <a href="$" target="_blank">request samples</a> directly from our printing partners and <a href="#" target="_blank">create a personal wishlist</a> of your favorite patterns. Design Pool is <a href="#" target="_blank">a valuable resource</a> for interior designers working in any market. If you have any questions about using the Design Pool library, please <a href="#" target="_blank">contact us</a>.</p>

                  
          </div><!-- .main-content -->
                  
      </div><!-- .aw-woo-wrap -->
          
  </section><!--.aw-section -->
  
  

  

  
  
	

</div><!-- .main-content -->

<?php get_footer(); ?>
