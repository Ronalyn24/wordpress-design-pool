<div class="popup-form-wrap" role="dialog" aria-labelledby="popupTitle" aria-describedby="popupDescription">
  
  <div class="popup-form-wrap__item">
    
    <div class="popup-form-wrap__inner-wrap">
      
      <div class="scroll-wrapper" tabindex="0">
        
        <div class="popup-form-wrap__content">

          <!-- Close Button -->
          <button class="popup-form-close" aria-label="Close popup">
            <i class="fa-regular fa-xmark"></i>
          </button>

          <div class="popup-form-inner-wrapper" id="popupDescription">
            
            <div class="popup-inner-ctn">

              <!-- Image Column -->
              <div class="popup-inner-ctn__column">
                
                <img src="<?php echo get_site_url().'/wp-content/uploads/2024/09/kristen-gray-bg-small.jpg'; ?>" 
                     srcset="<?php echo get_site_url();?>/wp-content/uploads/2024/09/kristen-gray-bg.jpg 2x" 
                     class="woo-columns__thumbnail" alt="Portrait of Kristen" width="150">
                     
              </div>

              <!-- Text Column -->
              <div class="popup-inner-ctn__column">
                
                <h1 id="popupTitle">Hi! I am Kristen, owner, artist, and your Design Concierge!</h1>

                <p>A few things before we get started:</p>

                <ol class="lists-auto">
                  <li>Unfortunately, I can't copy anything, it is illegal.</li>
                  <li>I don't use AI for any of my design work. It is all thoughtfully created using my 30+ years of design experience.</li>
                  <li>I value your project ideas! I'll be happy to discuss your needs and provide a custom quote that reflects the time, creativity, and expertise required to bring your vision to life.</li>
                </ol>
                
              </div>

            </div> <!-- .popup-inner-ctn -->

            <!-- Bottom Content -->
            <p class="popup-inner-ctn__bottom-ctn anchor-violet">
              
              I would love to help bring your vision to reality or custom color any of our designs in our 
              <a href="/shop/">Shop Direct</a> or our 
              <a href="/licensable-designs/">Image Library</a>. If you are psyched, let's get started!
              
            </p>

            <!-- Gravity Form -->
            <?php echo do_shortcode('[gravityform id="25" title="false" description="false" ajax="true"]'); ?>

          </div>

        </div> <!-- .popup-form-wrap__content -->

        <!-- Back Button -->
        <button class="back-form-close" aria-label="Close popup"></button>

      </div> <!-- scroll-wrapper -->

    </div> <!-- .popup-form-wrap__inner-wrap -->
    
  </div> <!-- .popup-form-wrap__item -->
  
</div> <!-- .popup-form-wrap -->
