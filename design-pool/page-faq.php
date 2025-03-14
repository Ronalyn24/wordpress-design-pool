<?php
/*
Template Name: FAQ
*/

get_header(); ?>


<div class="main-content aw-faq-page">

    <section class="aw-section d-mb-2">
      
      <h1 class="aw-headline aw-headline__head-two weight-500 text-center d-mb-2">FAQ</h1>

      <?php get_template_part('template-parts/accordion'); ?>

      <div class="aw-btn-ctner text-center d-mt-4 mob-mt-2">
        
        <p class="sub-text__two anchor-violet">Still didn't find your answer, <a href="/contact/">contact us.</a></p>

      </div>

    </section><!-- .aw-section -->

</div><!-- .main-content -->



<?php get_footer(); ?>
