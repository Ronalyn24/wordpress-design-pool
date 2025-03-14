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

        // ACF Image
        $product_hover_image = get_field('card_product_image_hover');
        $product_hover_image_alt = get_post_meta($product_hover_image, '_wp_attachment_image_alt', true);

        // Output the image with srcset
        echo '<img class="post-thumbnail__front" src="' . $thumbnail_url[0] . '" alt="'.$thumbnail_alt.'" srcset="' . $medium_url[0] . ' ' . $medium_width . 'w, ' . $large_url[0] . ' ' . $large_width . 'w" sizes="(max-width: ' . $thumbnail_width . 'px) 100vw, ' . $thumbnail_width . 'px" loading="lazy">';
    
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

    <?php if ( is_page( 'home' ) ) : ?>
        <a class="gen-btn" href="<?php echo get_permalink(); ?>">Read more</a>
    <?php else: ?>
        <a class="gen-btn" href="<?php echo get_permalink(); ?>">VIEW COLORS</a>
    <?php endif; ?>
    


</div><!-- .aw-entry-content -->

</li><!-- .lists -->
