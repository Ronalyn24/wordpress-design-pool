
<article class="aw-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
    
    <h2 class="aw-headline aw-headline__head-two">
      
      <span class="aw-time">
        
        <span class="aw-time__date"><?php the_time( 'j' ); ?></span>
        <span class="aw-time__month"><?php the_time( 'M' ); ?></span>
        
      </span>
      
      <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
  
    </h2>
    
    <p class="aw-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 60, '...' ); ?></p>
    
    <div class="post-meta">
      
      <a class="post-meta-item post-meta-item--author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="fas fa-user"></i><?php the_author(); ?></a>
      
      <?php
        $categories = get_the_category();
        if ($categories) {
            
          echo '<ul class="post-meta-item post-meta-item--cat"><i class="fa-solid fa-folder-open"></i>';
          
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
          echo '<ul class="post-meta-item post-meta-item--tags"><i class="fas fa-envelope"></i>';

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
      
    </div>    
       
    <a class="gen-btn gen-btn__violet" href="<?php echo get_permalink(); ?>">READ MORE</a>

  </div><!-- .aw-entry-content -->

</article><!-- .aw-article -->
