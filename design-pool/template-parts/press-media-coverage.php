<?php if( have_rows('press_media_coverage') ) : ?>
  
    <div class="media-coverage__items">
        
      <?php while( have_rows('press_media_coverage') ) : the_row();

            $title = get_sub_field('title');
            
            $subTitle = get_sub_field('sub_title'); 
            
            $content = get_sub_field('descriptions');
            
            $date = get_sub_field('date');
            
            $link = get_sub_field('link'); ?>
                        
          <?php if(!empty($title)) : ?>
            
            <div class="media-coverage__item">
              
                <?php if($title): echo '<h3 class="aw-headline aw-headline__head-three">'.$title.'</h3>'; endif;  ?>

                <h4 class="aw-headline aw-headline__head-four font-raleway">
                  
                  <a href="<?php echo $link; ?>" target="_blank" rel="noopener">
                    <?php echo $subTitle; ?>
                  </a>
                  
                </h4>
              
              <?php 
              
                if($content): echo '<div class="aw-content">'.$content.'</div>'; endif; 
                
                if($date): echo '<span class="media-coverage__date">'.$date.'</span>'; endif; 
                
              ?>
              
            </div>
              
          <?php endif; 
    
        endwhile; ?>
 
    </div>
    
<?php endif; ?>
