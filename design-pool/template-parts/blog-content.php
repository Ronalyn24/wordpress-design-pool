
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
    
    
    <div class="post-meta-head">
      
      <span class="post-date"><?php the_time( 'd/m/y' ); ?></span>
      
      <?php $categories = get_the_category();
        if ($categories) {
            
        echo '<ul class="post-meta-item post-meta-item--cat">';
        
        $count = count($categories);  // Count total categories
        $i = 1;  // Initialize counter
        
        foreach ($categories as $category) {
            
          echo '<li> <span class="aw-disc">&#8226;</span> <a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
          
          // if ($i < $count) {
          //   echo '<span>, </span>';
          // }
          
          echo '</li>';
          
          $i++;  // Increment counter
        }
        
        echo '</ul>';
      }?>

    </div>

    <h2 class="aw-headline aw-headline__head-two">

      <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
  
    </h2>
    
    <p class="aw-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 35, '...' ); ?></p>
    
    <div class="post-meta">
      
      <a class="post-meta-item post-meta-item--author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="fas fa-user"></i> By: <?php the_author(); ?></a>

    </div>    
       
  </div><!-- .aw-entry-content -->

</article><!-- .aw-article -->
