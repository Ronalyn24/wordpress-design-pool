<?php if( have_rows('event_lists') ): ?>
        
  <div class="events-lists">
    
    <p class="sub-text__two dark-grey text-center anchor-violet ctrl-width-center d-mb-4" style="--ctrl-max-width: 945px;">Join us at one of our upcoming speaking engagements, art exhibits, or webinars. If you're interested in having Kristen speak to your group about Design Pool, please <a href="<?php echo get_site_url(); ?>/contact/">contact us.</a></p>
  
    <?php $count = 0; 
    
    while( have_rows('event_lists') ): the_row();
    
    $count++;
    
    $column_left_image = get_sub_field('image');
    
    $column_left_image_alt = get_post_meta( $column_left_image , '_wp_attachment_image_alt', true); 

    ?>
        
      <div class="aw-row-columns d-flex events-lists__item item-<?php echo $count; ?>">
        
        <div class="col-1-of-3 events-lists__img-wrap">
          
            <img class="thumbnail-img" <?php awesome_acf_responsive_image($column_left_image ,'medium','300px'); ?>  alt="<?php echo $column_left_image_alt; ?>" loading="lazy" /> 
          
        </div>
        
        <?php if( have_rows('events_list_right_content') ): ?>
          
          <div class="col-2-of-3 events-lists__content">
            
            <?php while( have_rows('events_list_right_content') ): the_row(); 
              
              $groupTitle = get_sub_field('title');
              
              $groupContent = get_sub_field('content');
            
            ?>
            
            <?php if(!empty($groupTitle)) : echo '<h4 class="text-medium font-raleway weight-700">'.$groupTitle.'</h4>'; endif; ?>
              
            <?php if(!empty($groupContent)): echo '<div class="events-text">'.$groupContent .'</div>'; endif; ?>

            <?php $link = get_sub_field('link');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                  
                <a class="gen-btn gen-btn__violet" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              
              <?php endif; ?>
                
            <?php endwhile; ?>
            
          </div>

        <?php endif; ?>
          
      </div>

    <?php endwhile; ?>
    
  </div><!-- .aw-row -->

<?php endif; ?>
