<?php
/*
Template Name: Courses
*/

get_header(); ?>

  <div class="main-content aw-courses-page">
    
    <section class="aw-section aw-banner d-no-padding">
        
      <div class="flex-direc-column d-pl-pr-4 tab-pl-pr-2 mob-pl-pr-20">
        
        <div class="ctrl-width-center content-top-center d-pt-4 mob-pt-3" style="--ctrl-max-width: 980px;">
            
          <h1 class="aw-headline aw-headline__head-two font-raleway text-center weight-600 violet d-mb-2">COURSES <span class="light-purple">CEU & INFORMATIONAL</span></h1>
          
          <p class="sub-text__two anchor-violet text-center">Design Pool is the leading expert in print-on-demand with digital printing. <br>
            We offer informative courses for Interior Design credits and informational purposes. </p>
          
        </div>

      </div>
      
      <div class="aw-row d-pt-2 d-pb-4 mob-pt-2 tab-pl-pr-2 mob-pl-pr-20 d-mb-2 small-mob-pt-1">

        <?php get_template_part('template-parts/inline','card'); ?>

      </div><!-- .aw-row -->
      
    </section><!-- .aw-section -->

  </div><!-- .main-content -->


<?php get_footer();
