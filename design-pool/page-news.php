<?php
/*
Template Name: NEWS / Press
*/

get_header(); ?>


  <div class="main-content aw-press-page">
    
    <section class="aw-section aw-sec-1 aw-banner d-no-padding">
        
      <div class="flex-direc-column d-pl-pr-4 tab-pl-pr-2 mob-pl-pr-20 d-mb-4 mob-mb-4">
        
        <div class="ctrl-width-center content-top-center d-pt-4 d-mb-4 mob-pt-3" style="--ctrl-max-width: 560px;">
            
          <h1 class="aw-headline aw-headline__head-two font-raleway text-center weight-600 violet d-mb-2">Want to work <span class="light-purple">together on a story?</span></h1>
          
          <p class="sub-text__two anchor-violet text-center">If you're a member of the press and want to speak with someone from Design Pool, please contact <a href="mailto: kcrane@designpoolpatterns.com">Kristin Crane.</a></p>
          
        </div>
        
        <div class="ctrl-width-center media-coverage gen-box-shadow" style="--ctrl-max-width: 1080px;">
          
          <h2 class="aw-headline aw-headline__head-two violet">Media Coverage</h2>
          
          <?php get_template_part( 'template-parts/press-media','coverage' ); ?>
          
        </div><!-- .ctrl-width-center -->  
        
        
        <div class="ctrl-width-center media-coverage media-coverage__press-release gen-box-shadow" style="--ctrl-max-width: 1080px;">
          
          <h2 class="aw-headline aw-headline__head-two violet">Recent Press Releases</h2>
          
          <?php get_template_part( 'template-parts/press-recent','release' ); ?>
          
        </div><!-- .ctrl-width-center -->
        
        
        <div class="ctrl-width-center text-center" style="--ctrl-max-width: 465px;">
          
          <h2 class="aw-headline aw-headline__head-two weight-500 violet">Stay Connected</h2>
          
          <p class="sub-text__two">You can find more news on our blog and by following us on social media.</p>
          
          <p class="sub-text__two anchor-violet">Contact <a href="mailto:kcrane@designpoolpatterns.com">Kristin Crane</a> with any press requests or to be added to our distribution list.</p>
          
        </div><!-- .ctrl-width-center -->
        
      </div>
      
    </section><!-- .aw-section -->
    
    
    <img class="large-full-img" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/03/Office_Table_Floor_P760-scaled.jpg" alt="Office Table Floor" loading="lazy"/>

  </div><!-- .main-content -->


<?php get_footer();
