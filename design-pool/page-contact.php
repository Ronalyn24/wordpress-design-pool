<?php
/*
Template Name: Contact Us
*/

get_header(); ?>


  <div class="main-content aw-contact-page">

    <section class="aw-section aw-banner no-padding">

          <ul class="aw-banner__breadcrumslist">
          
            <li><a href="<?php echo get_site_url(); ?>">Home</a><i class="fa-solid fa-angle-right"></i></li>
            
            <li>CONTACT US FOR INFORMATION</li>
            
          </ul>

    </section><!-- .aw-section -->
    
    <section class="aw-section aw-sec-2 flex-direc-column d-mb-4">
      
      <div class="ctrl-width-center text-center d-mb-4" style="--ctrl-max-width: 560px;">
        
        <h1 class="aw-headline aw-headline__head-two">Contact Us</h1>
        
        <p>If you have any questions about our designs, need a custom design, or are interested in licensing our designs, please get in touch. We would love to work together!</p>
        
      </div>
      
      <div class="aw-row-columns ctrl-width-center order-2-reverse tab-p-dir-column" style="--ctrl-max-width: 1050px;">
        
        <div class="aw-column col-1-of-3 d-pt-1">
          
          <div class="aw-contact-details d-mb-3">
            
            <h3 class="aw-headline aw-headline__head-three font-raleway">The Studio</h3>
            
            <ul class="aw-contact-infos">
              
              <li><i class="fas fa-map-marker-alt"></i>Southern New Hampshire</li>
              
              <li><i class="fa-solid fa-envelope"></i><a href="mailto:info@designpoolpatterns.com">info@designpoolpatterns.com</a></li>
            
            </ul>
          
          </div><!-- .aw-contact-details -->
          
          <div class="aw-contact-infos">
            
            <h3 class="aw-headline aw-headline__head-three font-raleway">Business Hours</h3>
            
            <p>Monday - Friday 9am to 5pm</p>
          
          </div><!-- .aw-contact-details -->
          
        </div>
        
        <div class="aw-column col-2-of-3 aw-form d-pr-4 tab-pt-2 tab-no-pr-0">
          
          <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
          
        </div>
        
      </div><!-- .aw-row -->
      
    </section><!-- .aw-section -->

  </div><!-- .main-content -->


<?php get_footer();
