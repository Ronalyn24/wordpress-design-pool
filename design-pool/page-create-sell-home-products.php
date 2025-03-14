<?php
/*
Template Name: Create sell home products
*/

get_header(); ?>

  <div class="main-content aw-sell-page">
    
    <section class="aw-section aw-banner d-no-padding">
        
      <div class="flex-direc-column d-pl-pr-4 tab-pl-pr-2 mob-pl-pr-20">
        
        <div class="ctrl-width-center content-top-center d-pt-4 mob-pt-3" style="--ctrl-max-width: 800px;">
            
          <h1 class="aw-headline aw-headline__head-two font-raleway text-center weight-600 violet d-mb-2">CREATE AND SELL YOUR <span class="light-purple">HOME PRODUCT LINE</span></h1>
          
          <p class="sub-text__two anchor-violet text-center">Design Pool has partnered with FabricSmiths to give interior designers the ability to  create their own line of home good products and enhance their service offerings.</p>
          
        </div>

      </div>
      
      <div class="ctrl-width-center d-pt-2 d-pb-4 tab-pl-pr-2 mob-pt-1 mob-pl-pr-20 small-mob-pt-1" style="--ctrl-max-width: 600px;">
        
        <div class="create-sell">
          
          <img class="create-sell__image" src="<?php echo get_site_url().'/wp-content/uploads/2024/06/Design-Pool-Logo-small.jpg'; ?>" alt="" width="200">
          
          <i class="fa-solid fa-plus"></i>
          
          <img class="create-sell__image"src="<?php echo get_site_url().'/wp-content/uploads/2024/06/FabricSmiths-Logo-small.jpg'; ?>" alt="" width="200">
          
        </div>
        
      
        <div class="serv-cntn-item serv-cntn-item__bullet-points">
                              
          <h2 class="aw-headline__v-small weight-600 no-letter-spacing text-center">The benefits of working with Fabric Smiths:</h2>
                                        
            <ul class="serv-cntn-item__lists lists-unorder">
                                    
              <li>Easy to upload and map your imagery.</li>
                                            
              <li>Over eleven different products and eighty SKUs to choose from.</li>
                          
              <li>Ability to sell directly on your own website.</li>
                            
              <li>Freedom to set your own selling prices and profit margins.</li>
                                            
              <li>All products are printed, cut, and sewn in the United States.</li>
                          
              <li>No minimums, order 1 or 1,000.</li>
                          
            </ul>
                          
        </div>
        
        <div class="serv-cntn-item serv-cntn-item__bullet-points">
                              
          <h3 class="aw-headline__v-small weight-600 no-letter-spacing text-center">How it works:</h3>
                                      
          <ul class="serv-cntn-item__lists lists-decimal">
                                  
            <li>Register for an account.</li>
                                          
            <li>Upload your patterns or license Design Pool patterns.</li>
                        
            <li>Build a product library.</li>
                          
            <li>Apply the imagery to your site.</li>
                                          
            <li>When you get a sale, create an order through FabricSmiths. <br>
            They take care of the rest!</li>
                        
          </ul>
                        
        </div>
        
        <div class="aw-btn-ctner aw-btn-ctner--2col text-center d-mb-4">

          <a class="gen-btn gen-btn__violet" href="https://www.fabricsmiths.com/pages/welcome-design-pool" rel="noopener noreferrer" target="_blank">Register now</a>
          
          <a class="gen-btn gen-btn__violet" href="<?php echo get_site_url().'/registration/';?>">License design pool</a>
        
        </div>

        <img class="full-img" src="<?php echo get_site_url().'2024/06/FabricSmith-large-2.png';?>" 
             srcset="<?php echo get_site_url().'/wp-content/uploads/2024/06/FabricSmith-large-2-1200x689.png';?> 1024w, 
             <?php echo get_site_url().'/wp-content/uploads/2024/06/FabricSmith-large-2-980x400.png';?> 980w,  
             <?php echo get_site_url().'/wp-content/uploads/2024/06/FabricSmith-large-2-680x350.png';?> 768w, 
             <?php echo get_site_url().'/wp-content/uploads/2024/06/FabricSmith-large-2-600x345.png';?> 600w"
             sizes="(max-width: 1200px) 100vw, 1200px"
        width="1200" alt=""/>

      </div><!-- .aw-row -->
      
    </section><!-- .aw-section -->

  </div><!-- .main-content -->


<?php get_footer();
