<?php
/*
Template Name: Registration
*/

get_header(); ?>


<div class="main-content aw-registration-page">

  <section class="aw-section aw-sec-1 aw-banner">
      
      <h1 class="aw-headline aw-headline__head-two font-raleway text-center weight-600 violet mob-pt-1 small-mob-pt-3 d-pt-2">
        PRINTERS REGISTER <span class="light-purple">TO LICENSE DESIGNS</span>
      </h1>

	  <p class="text-center ctrl-width-center text-red reg-notice italic" style="--ctrl-max-width: 750px;">If you are an INTERIOR DESIGNER, there is no need to register. <br>You can start with reviewing our <a href="/licensable-designs/">library</a> and ordering samples. <br> (Unless you would like to license our designs for your own product line of <a href="<?php echo home_url(); ?>/create-sell-home-products/">home goods</a>.)</p>
      
      <div class="aw-reg-form ctrl-width-center gen-box-shadow" style="--ctrl-max-width: 767px;">
      
        <p class="aw-reg-form__login"><a href="<?php echo wp_login_url(); ?>">Login in</a> if you already have an account</p>
        
        <?php echo do_shortcode('[gravityform id="15" title="false" description="false" ajax="true"]'); ?>
      
      </div>
    
    </section><!-- .aw-section -->

</div><!-- .main-content -->


<?php get_footer(); ?>
