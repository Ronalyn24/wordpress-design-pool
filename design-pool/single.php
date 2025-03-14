<?php 

$catBreadcrums = get_the_category();

get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="main-content aw-single-post">
    
    <ul class="aw-banner aw-banner__breadcrumslist">
      
      <li><a href="<?php echo get_site_url(); ?>">Home</a><i class="fa-solid fa-angle-right"></i></li>
      
      <li><a href="<?php echo get_site_url(); ?>/blog/">Blog</a><i class="fa-solid fa-angle-right"></i></li>
      
      <li class="bread-cat">
        
        <?php foreach ($catBreadcrums as $category) { echo '<a class="bread-cat__item" href="'.get_category_link($category->term_id).'">'.$category->name.'<span>,</span></a>'; } ?>
        
        <i class="fa-solid fa-angle-right"></i>
      
      </li> 
        
      <li><?php echo get_the_title(); ?></li>
      
    </ul>
          
    <div class="aw-inner-main-content">
      
      <a class="back-to-blog back-to-blog__top" href="<?php echo get_site_url(); ?>/blog/"><i class="fa-solid fa-left-long"></i> Back to Blog</a>
    
      <div class="post-content">

        <div class="main-content__posts">
                  
          <div class="aw-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="aw-entry-content">
              
              <div class="post-thumbnail">
              
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

              </div><!-- .post-thumbnail -->
              

              <div class="post-meta">
                
                <p class="post-meta-item post-meta-item--author"><span class="info">Posted by:</span> <strong><?php the_author(); ?></strong></p>
                
                <?php
                    $categories = get_the_category();
                    if ($categories) {
                      
                        echo '<ul class="post-meta-item post-meta-item--cat"><span class="info">Category: </span>';
                        
                        $count = count($categories);  // Count total categories
                        $i = 1;  // Initialize counter
                        
                        foreach ($categories as $category) {
                            echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
                            
                            if ($i < $count) {
                                echo '<span>, </span>';
                            }
                            
                            echo '</li>';
                            
                            $i++;  // Increment counter
                        }
                        
                        echo '</ul>';
                    }
                ?>

                <?php
                  $tags = get_the_tags();

                  if ($tags) {
                    echo '<ul class="post-meta-item post-meta-item--tags bar"><span class="info">Tags: </span>';

                    $count = count($tags);  // Count total tags
                    $i = 1;  // Initialize counter

                    foreach ($tags as $tag) {
                      echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';

                      if ($i < $count) {
                        echo '<span>,&nbsp;</span>';
                      }

                      echo '</li>';

                      $i++;  // Increment counter
                    }

                    echo '</ul>';
                  }
                ?>

                <p class="post-meta-item post-meta-item--date"><span class="info">Post Date:</span> <strong><?php the_time('F j, Y'); ?></strong></p>
                
              </div>    
                
            </div><!-- .aw-entry-content -->
              
            <h1 class="aw-headline aw-headline__head-two"><?php the_title(); ?></h1>
            
            <div class="single-post-content anchor-violet-blog"><?php the_content(); ?></div>
            
            
            <div class="single-post-bottom">
              
              <h3 class="aw-headline aw-headline__head-three"><i class="fas fa-share"></i>Share this post</h3>
              
              <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
              
              <?php if (get_the_author_meta('description')) : ?>
                
                <h3 class="aw-headline aw-headline__head-four"><i class="fas fa-user"></i>Author</h3>
              
                <div class="author-box">
                  
                    <div class="author-box-item author-box-item--img"><?php echo get_avatar(get_the_author_meta('user_email')); ?></div>
                    
                    <div class="author-box-item author-box-item--info">
                      
                      <h3 class="aw-headline aw-headline__head-three author-name"><?php esc_html(the_author_meta('display_name')); ?></h3>
                    
                      <p class="author-description"><?php esc_textarea(the_author_meta('description')); ?></p>
                    
                    </div>
                
                </div>
              
                <?php echo do_shortcode('[gravityform id="3" title="true" description="true" ajax="true"]'); ?>
              
            <?php endif; ?>
              
            </div>
            
            <a class="back-to-blog back-to-blog__bottom" href="<?php echo get_site_url(); ?>/blog/"><i class="fa-solid fa-left-long"></i> Back to Blog</a>
            
          </div><!-- .aw-article -->

            
          <?php get_template_part('template-parts/related-post', 'slider'); ?>
          
                
        </div><!-- .aw-main-content -->

          <?php get_template_part('template-parts/sidebar', 'content'); ?>

      </div>	
        
    </div><!-- .aw-inner-main-content -->
      
  </div><!-- .main-content -->

<?php endwhile; else : ?>

  <p class="no-post-found"><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>

<?php get_footer(); ?>
