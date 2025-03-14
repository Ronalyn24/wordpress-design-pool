

<?php if ( is_home() || is_front_page() || is_page('licensable-designs') || (is_single() && get_post_type() == 'licensable-design') ) : ?>
  
  <div class="aw-video-slide" role="dialog" aria-labelledby="videoTitle" aria-hidden="true">
    
    <div class="aw-video-slide__content">
      
      <div class="aw-video-slide__cont-top bg-violet">
          
        <h3 class="aw-headline aw-headline__v-small font-raleway">Welcome!</h3>
            
        <p id="videoTitle">Need a quick guide on how to use Design Pool? Watch our video for step-by-step instructions.</p>
        
      </div>
      
      <div class="aw-video-slide__cont-bottom">
      
        <button class="aw-video-slide__play" aria-label="play video">
          
          <img class="aw-video-slide__thumbnail" src="<?php echo get_site_url().'/wp-content/uploads/2024/06/video-slide-thumbnail.jpg'; ?>" width="300" alt="Video slide thumbnail">

          <img class="aw-video-slide__play-icon" src="<?php echo get_site_url().'/wp-content/uploads/2024/06/play-duotone.svg'; ?>" alt="">
  
        </button>

      </div>
      
    </div><!-- .aw-video-slide__content -->
    
    
    <button class="aw-video-slide__close" aria-label="Close slide sidebar">
        
      <img class="close-icon" src="<?php echo get_site_url().'/wp-content/uploads/2024/06/xmark-light.svg'; ?>" alt="">
      
      <img class="play-icon" src="<?php echo get_site_url().'/wp-content/uploads/2024/06/play-duotone.svg'; ?>" alt="">
    
    </button>

  </div><!--.aw-video-slide -->


  <!--.START OF THE LIGHTBOX VIDEO -->

  <div class="vid-slide-wrapper" role="dialog" aria-labelledby="videoLightbox" aria-hidden="true">
    
    <div id="video-slide-1" class="vid-slide-wrapper__content-item">
      
      <button id="stop-video" class="vid-slide-wrapper__close video-pause" aria-label="Stop video and close lightbox">
        
        <img src="<?php echo get_site_url().'/wp-content/uploads/2024/06/xmark-light.svg'; ?>" alt="Close mark">
      
      </button>
        
        <div class="video-container">
          
          <video id="lightbox-video" class="vid-slide-wrapper__video" controls poster="<?php echo get_site_url().'/wp-content/uploads/2024/06/video-slide-thumbnail.jpg'; ?>">
            
            <source src="<?php echo get_site_url().'/wp-content/uploads/2024/06/How_to_Use_Design_Pool.mp4'; ?>" type="video/mp4">
          
          </video>
            
        </div><!-- .video-container -->
        
    </div>
    
  </div><!-- .vid-slide-wrapper -->
  
  <?php endif; ?>
