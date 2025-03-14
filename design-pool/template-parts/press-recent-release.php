<?php if( have_rows('press_release') ) : ?>
    
    <div class="media-coverage__items">

      <?php while( have_rows('press_release') ) : the_row();

        $title = get_sub_field('title');
        
        $content = get_sub_field('descriptions');
        
        $date = get_sub_field('date');
        
        $link = get_sub_field('link'); 
        
        $image = get_sub_field('image'); 
        
        $imageAlt = get_post_meta($image , '_wp_attachment_image_alt', true); ?>
        
          <?php if(!empty($title)) : ?> 
              
            <div class="media-coverage__item d-flex phone-small-dir-column phone-small-2-reverse">
              
              <?php if($image) : ?>
              
                <div class="aw-column media-coverage__inner-col image-object-fit">
                  
                  <img class="thumbnail-img image-object-fit__img" <?php awesome_acf_responsive_image($image, 'medium', '300px'); ?> alt="<?php echo $imageAlt; ?>" loading="lazy"/>
                  
                </div>
                
              <?php endif; ?>  
              
                <div class="aw-column media-coverage__inner-col">
                  
                <?php if($title) : ?>
                  
                  <h4 class="aw-headline aw-headline__head-four font-raleway">
                    
                    <a href="<?php echo $link; ?>" target="_blank" rel="noopener"><?php echo $title; ?></a>
                    
                  </h4>
                  
                <?php endif;
                
                  if($content) : echo '<div class="aw-content">'.$content.'</div>'; endif; 
                  
                  if($date) : echo '<span class="media-coverage__date">'.$date.'</span>'; endif; 
                  
                ?>
              
                </div>
              
            </div>
    
          <?php endif;
        
      endwhile; ?>
    
    </div><!--.media-coverage -->
    
<?php endif; ?>
  
