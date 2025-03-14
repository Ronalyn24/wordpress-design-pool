<?php if( have_rows('inline_card_items') ): ?>
        
      <div class="events-lists">
          
        <?php $count = 0; 
          
          while( have_rows('inline_card_items') ): the_row();
          
          $count++;
          
          $column_left_image = get_sub_field('card_left_image');
          
          $column_left_image_alt = get_post_meta( $column_left_image , '_wp_attachment_image_alt', true); 
      
          ?>
              
            <div class="aw-row-columns d-flex events-lists__item item-<?php echo $count; ?>">
              
              <div class="col-1-of-3 events-lists__img-wrap">
                
                  <img class="thumbnail-img" <?php awesome_acf_responsive_image($column_left_image ,'medium','300px'); ?>  alt="<?php echo $column_left_image_alt; ?>" loading="lazy" /> 
                
              </div>
              
              <div class="col-2-of-3 events-lists__content">
                
                <?php $cardHeadline = get_sub_field('card_headline');
                      $cardCeu = get_sub_field('card_ceu');
                      $cardTime = get_sub_field('card_time');
                      $cardContent = get_sub_field('card_descriptions'); 
                ?>
                
                <?php if(!empty($cardHeadline)) : echo '<h4 class="text-medium font-raleway weight-700">'.$cardHeadline.'</h4>'; endif; ?>
                
                <p class="card-info">
                  
                  <?php if(!empty($cardCeu)): echo '<span class="card-info__ceu">CEU: '.$cardCeu.'</span>'; endif; ?>
                
                  <?php if(!empty($cardTime)): echo '<span class="card-info__time">Time: '.$cardTime.'</span>'; endif; ?>
                  
                </p>
                  
                <?php if(!empty($cardContent)): echo '<div class="events-text">'.$cardContent.'</div>'; endif; ?>
    
                <?php $link = get_sub_field('card_link');
                  if( $link ): 
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                    
                  <a class="gen-btn gen-btn__violet" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            
            </div>
      
          <?php endif; ?>
                
      </div>
      
    <?php endwhile; ?>
          
  </div><!-- .aw-row -->
      
<?php endif; ?>
      