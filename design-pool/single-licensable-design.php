<?php 

$current_post_id = get_the_ID();

$terms = get_the_terms($current_post_id, 'licensable-cat');

get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="main-content aw-licensable-single-post">
    
    <ul class="aw-banner aw-banner__breadcrumslist">
      
      <li><a href="<?php echo get_site_url(); ?>">Home</a><i class="fa-solid fa-angle-right"></i></li>
      
      <!-- <li><a href="<//?php echo get_site_url(); ?>/licensable-designs/">Licensable Designs</a><i class="fa-solid fa-angle-right"></i></li> -->
        
      <li class="bread-cat">
        
        <?php foreach ($terms as $category) { echo '<a class="bread-cat__item" href="'.get_category_link($category->term_id).'">'.$category->name.'<span>,</span></a>'; } ?>
        
        <i class="fa-solid fa-angle-right"></i>
      
      </li> 
      
      <li><?php echo get_the_title(); ?></li>
      
    </ul>
          
    <div class="aw-inner-main-content">
      
      <div class="licensable-content">
        
          <?php $galleryImages = get_field('licensable_gallery');
      
            $galleryImagesAlt = get_post_meta($galleryImages , '_wp_attachment_image_alt', true);

            if( $galleryImages ): ?>
            
                <ul class="licensable-content__column licensable-gallery">
                  
                    <?php foreach( $galleryImages as $image ): ?>
                      
                        <li class="licensable-gallery__item">
                          
                          <div class="magnifying-area">
                            
                            <img class="magnifying-img" <?php awesome_acf_responsive_image($image,'aw_medium','640px'); ?> alt="<?php echo $galleryImagesAlt; ?>" /> 
                          
                          </div>
                         
                        </li>
                        
                    <?php endforeach; ?>
                    
                </ul>
                
            <?php endif; ?>
        
          <div id="post-<?php the_ID(); ?>" class="licensable-content__column licensable-info">

              <h1 class="aw-headline aw-headline__head-two-small weight-700"><?php the_title(); ?></h1>

              <?php
                // Check if the user is logged in
                if ( is_user_logged_in() ) {
                  // Get the current user
                  $current_user = wp_get_current_user();

                  // Check if current user has the 'customer' role
                  if ( in_array( 'customer', (array) $current_user->roles ) || in_array( 'administrator', (array) $current_user->roles ) ){
                  // Output the content of the div
                  ?>
                  <div class="downloadLinks d-mt-1">

                    <?php if ( have_rows( 'licensable_download_links' ) ) : ?>
                      <?php while ( have_rows( 'licensable_download_links' ) ) : the_row(); ?>
                        <div class="downloadLinks__link d-mb-1">
                          <a class="full-width d-flex flex-between" href="<?php the_sub_field( 'ld_download_link' ); ?>"><span>Download File</span> <i class="fa-regular fa-arrow-down-to-line"></i></a>   
                        </div>
                      <?php endwhile; ?>
                    <?php else : ?>
                      <?php // No rows found ?>
                    <?php endif; ?>

                  </div>

                  <div class="download-notification">
                    <?php echo do_shortcode('[gravityform id="23" ajax="true" title="true"]'); ?>
                  </div>

                  <?php
                  }
              }
              ?>
              
              <div class="price-alert">
                
                <p class="d-mb-0">Prices vary depending on product and quantity.<br>Request a product below for a quote and sample.</p>
            
              </div>
              
              <div class="pattern-icons">
                
                <h3 class="pattern-icons__headline text-small font-raleway weight-400">Request this pattern on any of these products:</h3>
                
                <div class="patterns-icons__items">
                  
                    <div class="patterns-icons__item">
                      
                        <a class="patterns-icons__link" data-trigger-lb="1">
                          
                          <img class="patterns-icons__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/05/DP-Web-Icons-2020_Individual-1.png" alt="">
                          
                          <p class="patterns-icons__title">Faux Leather</p>
                          
                        </a>
                        
                    </div>
                    
                    <div class="patterns-icons__item">
                      
                        <a class="patterns-icons__link" data-trigger-lb="2">
                          
                          <img class="patterns-icons__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/05/DP-Web-Icons-2020_Individual-3.png" alt="">
                          
                          <p class="patterns-icons__title">Privacy Screen</p>
                          
                        </a>
                        
                    </div>
                    
                    <div class="patterns-icons__item">
                      
                        <a class="patterns-icons__link" data-trigger-lb="3">
                          
                          <img class="patterns-icons__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/05/DP-Web-Icons-2020_Individual-2.png" alt="">
                          
                          <p class="patterns-icons__title">White Board</p>
                          
                        </a>
                        
                    </div>
                    
                    <div class="patterns-icons__item">
                      
                        <a class="patterns-icons__link" data-trigger-lb="4">
                          
                          <img class="patterns-icons__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/05/DP-Web-Icons-2020_Individual-5.png" alt="">
                          
                          <p class="patterns-icons__title">Vinyl Flooring</p>
                          
                        </a>
                        
                    </div>
                    
                    <div class="patterns-icons__item">
                      
                        <a class="patterns-icons__link" data-trigger-lb="5">
                          
                          <img class="patterns-icons__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/05/Icons-01.png" alt="">
                          
                          <p class="patterns-icons__title">Wallcovering Wallpaper</p>
                          
                        </a>
                        
                    </div>
                    
                    <div class="patterns-icons__item">
                      
                        <a class="patterns-icons__link" data-trigger-lb="6">
                          
                          <img class="patterns-icons__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/05/Icons-02.png" alt="">
                          
                          <p class="patterns-icons__title">Window Film</p>
                          
                        </a>
                        
                    </div>
                    
                    <div class="patterns-icons__item">
                      
                        <a class="patterns-icons__link" data-trigger-lb="7">
                          
                          <img class="patterns-icons__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/05/Acoustic-Icon.png" alt="">
                          
                          <p class="patterns-icons__title">Acoustical Panels</p>
                          
                        </a>
                        
                    </div>
                    
                    <div class="patterns-icons__item">
                      
                        <a class="patterns-icons__link" data-trigger-lb="8">
                          
                          <img class="patterns-icons__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/05/ceiling-tile.png" alt="">
                          
                          <p class="patterns-icons__title">Ceiling Tiles</p>
                          
                        </a>
                        
                    </div>
                    
                    <div class="patterns-icons__item">
                      
                        <a class="patterns-icons__link" data-trigger-lb="9">
                          
                          <img class="patterns-icons__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/05/Light_Lens_Icon.jpg" alt="">
                          
                          <p class="patterns-icons__title">Light Lens</p>
                          
                        </a>
                        
                    </div>
                    
                    <div class="patterns-icons__item">
                      
                        <a class="patterns-icons__link" data-trigger-lb="10">
                          
                          <img class="patterns-icons__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/05/Acrylic_Icon-1.jpg" alt="">
                          
                          <p class="patterns-icons__title">Acrylic</p>
                          
                        </a>
                        
                    </div>
                    
                    <div class="patterns-icons__item">
                      
                        <a class="patterns-icons__link" data-trigger-lb="11">
                          
                          <img class="patterns-icons__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/05/Dibond_Icon.jpg" alt="">
                          
                          <p class="patterns-icons__title">Brushed Metal</p>
                          
                        </a>
                        
                    </div>
                    
                    <div class="patterns-icons__item">
                      
                        <a class="patterns-icons__link" data-trigger-lb="12">
                          
                          <img class="patterns-icons__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/08/FabriTRAK.png" alt="">
                          
                          <p class="patterns-icons__title">FabriTRAK Acoustics</p>
                          
                        </a>
                        
                    </div>
                    
                    <div class="patterns-icons__item">
                      
                        <a class="patterns-icons__link" data-trigger-lb="13">
                          
                          <img class="patterns-icons__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/08/DryErase.png" alt="">
                          
                          <p class="patterns-icons__title">DryErase Wallpaper</p>
                          
                        </a>
                        
                    </div>

                    <div class="patterns-icons__item special-padding">
                      
                      <a class="patterns-icons__link" data-trigger-lb="14">
                        
                        <img class="patterns-icons__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/09/woven-window-film.png" alt="">
                        
                        <p class="patterns-icons__title">Woven Window Film</p>
                        
                      </a>
                      
                    </div>

                    <div class="patterns-icons__item special-padding">
                      
                      <a class="patterns-icons__link" data-trigger-lb="15">
                        
                        <img class="patterns-icons__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/10/icon-leather.png" alt="">
                        
                        <p class="patterns-icons__title">Leather</p>
                        
                      </a>
                      
                    </div>

                    <div class="patterns-icons__item special-padding">
                      
                      <a class="patterns-icons__link" data-trigger-lb="16">
                        
                        <img class="patterns-icons__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/10/icon-cork.png" alt="">
                        
                        <p class="patterns-icons__title">Cork</p>
                        
                      </a>
                      
                    </div>
                  
                </div><!-- .patterns-icons__items -->
                
              </div><!--.pattern-icons -->

              <div class="licensable-content__description anchor-violet">

                <?php the_field( 'ld_description' ); ?>

              </div>

              <p class="licensable-content__colors">

                <span class="w-bold">Available Colors: </span>

                <?php 
                
                  $taxonomy_color_family_short = get_the_terms($current_post_id, 'licensable-color-family');

                  if ($taxonomy_color_family_short) {
                    foreach ($taxonomy_color_family_short as $termColor_short) {         
                      echo '<a class="aw-post-meta__tag plain-tag" href="' . esc_url(get_term_link($termColor_short)) . '">' . esc_html($termColor_short->name) . '<span>, </span></a>';
                    }
                  }
                
                ?>

              </p>

              <p class="licensable-content__custom anchor-violet custom-color">

                  <span class="w-bold">Custom Colors: </span>We can custom color any of our licensable designs. <a class="patterns-icons__link" data-trigger-lb="99">Contact Us</a> for additional information.

              </p>

              <p class="licensable-content__scale anchor-violet">

                  <span class="w-bold">Scale: </span><?php the_field( 'size_chart' ); ?><br>
                  Use as is or modify the scale to suit your needs
                  <a class="aw-i-block" href="<?php the_field( 'pdf_specs' ); ?>" target="_blank"><i class="fa-regular fa-arrow-down"></i> Download Printable PDF for current Scale</a>

              </p>

              <p class="licensable-content__specs anchor-violet">

                  <span class="aw-block w-bold">Product Specifications: </span> 
                  <a href="/material-specs/">Passes Commercial Applications</a>

              </p>
              
              <div class="aw-post-meta">
                
                <p><span class="aw-post-meta__title">CATEGORY:</span>

                  <span class="aw-post-meta__items">
      
                    <?php $taxonomy_licensable_cat = get_the_terms($current_post_id, 'licensable-cat');
                      
                      if ($taxonomy_licensable_cat) {
                        foreach ($taxonomy_licensable_cat as $term) {             
                          echo '<a class="aw-post-meta__cat" href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '<span>, </span></a>';
                        }
                      }
                    ?>                    
                    
                  </span>
                  
                </p>

                
                <p>
                  <span class="aw-post-meta__title aw-post-meta__title--tags">TAGS:</span>
                  
                    <?php 
                    
                      // Get Multiple terms for the current post
                      $taxonomy_color_family = get_the_terms($current_post_id, 'licensable-color-family');
                      $taxonomy_market = get_the_terms($current_post_id, 'licensable-market');
                      $taxonomy_shape = get_the_terms($current_post_id, 'licensable-shape');
                      $taxonomy_technique = get_the_terms($current_post_id, 'licensable-technique');
                      $taxonomy_theme = get_the_terms($current_post_id, 'licensable-theme');
                      
                      if ($taxonomy_color_family || $taxonomy_market || $taxonomy_shape || $taxonomy_technique || $taxonomy_theme) {
                        
                        if ($taxonomy_color_family) {
                          foreach ($taxonomy_color_family as $termColor) {         
                            echo '<a class="aw-post-meta__tag" href="' . esc_url(get_term_link($termColor)) . '">' . esc_html($termColor->name) . '<span>, </span></a>';
                          }
                        }
                    
                        if ($taxonomy_market) {
                          foreach ($taxonomy_market as $termMarket) {         
                            echo '<a class="aw-post-meta__tag" href="' . esc_url(get_term_link($termMarket)) . '">' . esc_html($termMarket->name) . '<span>, </span></a>';
                          }
                        }
                        
                        if ($taxonomy_shape) {
                          foreach ($taxonomy_market as $termShape) {         
                            echo '<a class="aw-post-meta__tag" href="' . esc_url(get_term_link($termShape)) . '">' . esc_html($termShape->name) . '<span>, </span></a>';
                          }
                        }
                        
                        if ($taxonomy_technique) {
                          foreach ($taxonomy_technique as $termTech) {         
                            echo '<a class="aw-post-meta__tag" href="' . esc_url(get_term_link($termTech)) . '">' . esc_html($termTech->name) . '<span>, </span></a>';
                          }
                        }
                        
                        if ($taxonomy_theme) {
                          foreach ($taxonomy_theme as $termTheme) {         
                            echo '<a class="aw-post-meta__tag" href="' . esc_url(get_term_link($termTheme)) . '">' . esc_html($termTheme->name) . '<span>, </span></a>';
                          }
                        }
                      } 
                    ?>
                </p>
              
              </div>
              
              <?php echo do_shortcode('[Sassy_Social_Share]'); ?>

          </div><!-- .aw-article -->
          
      </div>	<!-- .licensable-content -->

    </div><!-- .aw-inner-main-content -->
 
  </div><!-- .main-content -->
  
<?php endwhile; else : ?>

  <p class="no-post-found"><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>

<?php get_footer(); ?>
