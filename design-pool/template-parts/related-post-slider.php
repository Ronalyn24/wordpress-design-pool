<?php 

$post_id = get_the_ID(); // Get the current post ID
    
$tags = wp_get_post_tags($post_id); // Get post tags

// Check if there are any tags for the post

if ($tags) {
    $tag_ids = array();
    foreach($tags as $tag) {
        $tag_ids[] = $tag->term_id;
    }
    
    // Query related posts
    $related_args = array(
        'tag__in' => $tag_ids,
        'post__not_in' => array($post_id),
        'posts_per_page' => 3,
        'ignore_sticky_posts' => true
    );
    $related_query = new WP_Query($related_args);
    
    // Check if there are any related posts
    if ($related_query->have_posts()) {  ?>
    
    <div class="aw-related-post related-carousel">
            
        <?php while ($related_query->have_posts()) { 
            
            $related_query->the_post(); ?>
                
                <div class="carousel-cell card-item">
                    
                    <div class="card-item__inner-ctner">
                        
                        <div class="card-item__thumbnail">
                            
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
                                
                            if ( $thumbnail_url ) : ?>

                            <?php echo '<img src="' . $thumbnail_url[0] . '" alt="'.$thumbnail_alt.'" srcset="' . $medium_url[0] . ' ' . $medium_width . 'w, ' . $large_url[0] . ' ' . $large_width . 'w" sizes="(max-width: ' . $thumbnail_width . 'px) 100vw, ' . $thumbnail_width . 'px">'; ?>
                            
                            <?php else: ?>
                                
                                <img class="default-image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/04/default-image-1.jpg" alt="default image" />
                                
                            <?php endif; ?>
                                    
                        </div><!-- .post-thumbnail -->
                        
                        <div class="card-item__content">
                            
                            <span class="meta-date"><i class="far fa-clock"></i> <?php the_time( 'F j, Y' ); ?></span>
                            
                            <h4 class="aw-headline aw-headline__head-four"><?php echo get_the_title(); ?></h4>
                            
                            <a class="aw-read-more" href="<?php echo  get_permalink(); ?>"><span>Read More</span><i class="fa fa-play"></i></a>
                            
                        </div>
                    
                    </div><!-- .card-item__inner-ctner -->
            
                </div><!-- .card-item -->
                
        <?php } ?>
            
    </div>       
        
   <?php }
    
    wp_reset_postdata();
    
} ?>
