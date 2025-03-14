<li id="post-<?php the_ID(); ?>" class="aw-licensable-items__item">

<div class="aw-entry-content">
    
    <a href="<?php the_permalink() ?>" class="post-thumbnail">
    
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

        // Output the image with srcset
        echo '<img class="post-thumbnail__front" src="' . $thumbnail_url[0] . '" alt="'.$thumbnail_alt.'" srcset="' . $medium_url[0] . ' ' . $medium_width . 'w, ' . $large_url[0] . ' ' . $large_width . 'w" sizes="(max-width: ' . $thumbnail_width . 'px) 100vw, ' . $thumbnail_width . 'px" loading="lazy">';
    
    ?>
    

    <?php $gallery_images = get_field('licensable_gallery');
    
    $gallery_images_alt = get_post_meta($gallery_images , '_wp_attachment_image_alt', true);

    if( $gallery_images ): ?>
    
        <div class="licensable-content__column licensable-gallery">
            
            <?php if (count($gallery_images) >= 2) {
            
                $second_image = $gallery_images[1]; ?>
                
                <img class="post-thumbnail__back" <?php awesome_acf_responsive_image($second_image,'aw_v-small','300px'); ?> alt="<?php echo $gallery_images_alt; ?>" loading="lazy" />      
                
            <?php } ?>
            
            </div> 

        <?php else: ?>
                            
        <img class="post-thumbnail__back" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/06/Modern_Chair2_P2186a4-640x640.jpg" alt="" width="300" height="300" loading="lazy" />    

    <?php endif; ?>


    </a><!-- .post-thumbnail -->

    <h4 class="aw-title"><?php the_title();?></h4>
    
    <a class="gen-btn" href="<?php echo get_permalink(); ?>">VIEW COLORS</a>

</div><!-- .aw-entry-content -->

</li><!-- .lists -->
