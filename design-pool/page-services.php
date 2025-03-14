<?php
/*
Template Name: Services
*/

get_header(); ?>


  <div class="main-content aw-services-page">

    <section class="aw-section aw-sec-1 aw-banner d-no-padding">
        
        <div class="ctrl-width-center d-pt-4 mob-pt-3 tab-pl-pr-2 mob-pl-pr-20 d-mb-1 small-mob-pt-1" style="--ctrl-max-width: 980px;">
          
          <h1 class="aw-headline aw-headline__head-two font-raleway text-center weight-600 violet d-mb-2">LEARN MORE ABOUT OUR SERVICES</h1>
        
          <p class="sub-text__two anchor-violet dark-grey">At Design Pool, we understand everyone works differently, which is why we provide a variety of options for working together.  We appreciate partnerships and love growing together.</p>
          
          <p class="sub-text__two anchor-violet dark-grey">If you don't see your question answered below, check out <a href="<?php echo get_site_url(); ?>/faq/">FAQ</a> or <a href="<?php echo get_site_url();?>/contact/">reach out.</a> We love a good design conversation. </p>
        
        </div>
        
        
        <div class="aw-serv-banner-links ctrl-width-center" style="--ctrl-max-width: 855px;">

          <h3 class="aw-headline aw-headline__head-three text-center"><a href="#licensing">LICENSING</a></h3>
          
          <h3 class="aw-headline aw-headline__head-three text-center"><a href="#consulting">CONSULTING</a></h3>
          
          <h3 class="aw-headline aw-headline__head-three text-center"><a href="#guest-speaking">GUEST SPEAKING</a></h3>

           
      </div><!-- .aw-row -->

    </section><!-- .aw-section -->
    
    <section class="aw-section aw-sec-2">
      
      <div class="ctrl-width-center" style="--ctrl-max-width: 1133px;">
      
        <?php get_template_part( 'template-parts/page-services/licensing' ); ?>
        
        <?php get_template_part( 'template-parts/page-services/consulting' ); ?>
        
        <?php get_template_part( 'template-parts/page-services/guest-speaker' ); ?>
        
      </div>
      
    </section><!-- .aw-section -->

  </div><!-- .main-content -->


<?php get_footer();
