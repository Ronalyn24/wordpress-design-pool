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
    echo '<img class="post-thumbnail__front" src="' . $thumbnail_url[0] . '" alt="'.$thumbnail_alt.'" srcset="' . $medium_url[0] . ' ' . $medium_width . 'w, ' . $large_url[0] . ' ' . $large_width . 'w" sizes="(max-width: ' . $thumbnail_width . 'px) 100vw, ' . $thumbnail_width . 'px" loading="lazy" />';
                          
?>
