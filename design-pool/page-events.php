<?php
/*
Template Name: Events
*/

get_header(); ?>


<div class="main-content aw-events-page">

  <section class="aw-section aw-sec-1 aw-banner d-no-padding">
    
    <div class="aw-row d-pt-4 mob-pt-3 tab-pl-pr-2 mob-pl-pr-20 d-mb-2 small-mob-pt-1">

        <?php get_template_part('template-parts/page-events/events'); ?>
        
        <?php get_template_part('template-parts/page-events/past','events'); ?>
        
        <div class="aw-btn-ctner events-large-btn text-center d-mb-4 mob-mb-4">
            
          <a class="gen-btn gen-btn__violet" href="https://mailchi.mp/designpoolpatterns/2mlah5v7y2" target="_blank">Stay up to date on Design Pool events</a>
          
        </div>
        
    </div><!-- .aw-row -->

  </section><!-- .aw-section -->

</div><!-- .main-content -->



<?php get_footer(); ?>
