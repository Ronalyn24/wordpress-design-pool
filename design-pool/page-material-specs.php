<?php
/*
Template Name: Material Specs
*/

get_header(); ?>


  <div class="main-content aw-material-specs-page">

    <section class="aw-section aw-sec-1 aw-banner d-no-padding">
        
        <div class="ctrl-width-center d-pt-4 mob-pt-3 tab-pl-pr-2 small-mob-pt-1" style="--ctrl-max-width: 945px;">
  
            <h1 class="aw-headline aw-headline__head-two font-raleway text-center weight-600 violet d-mb-2">LEARN ABOUT <span class="light-purple">OUR MATERIALS, PRODUCTS, AND PRINTERS</span></h1>
        
            <div class="sub-text__two anchor-violet dark-grey font-arsenal">
              
              <p>We work exclusively with printers who deliver high-quality materials with excellent customers service. Any Design Pool pattern in our <a href="<?php echo get_site_url(); ?>/licensable-designs/">licensable library</a> can be printed on any of these materials with little to no minimums.

              <br>Our printers license our designs, so there is no additional cost to you when using our library.</p>
            
            </div>
        
        </div>
        

    </section><!-- .aw-section -->
    
    <section class="aw-section aw-sec-2 d-pt-3">
      
      <div class="ctrl-width-center" style="--ctrl-max-width: 1133px;">
      
        <?php if( have_rows('material_specs_items') ):
        
          $rowCount = 0;

          while( have_rows('material_specs_items') ) : the_row();

          $materialImage = get_sub_field('left_image');
          $materialImageAlt = get_post_meta( $materialImage , '_wp_attachment_image_alt', true); 
          
          // right content
          $materialHeadline = get_sub_field('headline');
          $materialTopTitle = get_sub_field('top_title');
          $materialTopDescriptions = get_sub_field('top_descriptions');
          
          ?>
      
            <div id="material-specs-<?php echo $rowCount; ?>" class="media-coverage media-coverage__services gen-box-shadow">
              
                <div class="media-coverage__item d-flex phone-l-dir-column">
                  
                  <?php if (!empty( $materialImage ) ) : ?>
                  
                    <div class="aw-column media-coverage__inner-col image-object-fit">
                      
                      <img class="medium-img image-object-fit__img" <?php awesome_acf_responsive_image($materialImage ,'medium','340px'); ?>  alt="<?php echo $materialImageAlt; ?>" width="340" loading="lazy" /> 
                    
                    </div><!-- .aw-column -->
                    
                  <?php endif; ?>
                  
                    <div class="aw-column media-coverage__inner-col">
                      
                      <h3 class="aw-headline aw-headline__head-two font-raleway"><?php echo $materialHeadline; ?></h3>
                      
                      <div class="serv-cntn-item serv-cntn-item__bullet-points">
                        
                        <h4 class="aw-headline aw-headline__head-four"><?php echo $materialTopTitle; ?></h4>
                        
                        <div class="serv-cntn-item__content font-arsenal"><?php echo $materialTopDescriptions; ?></div>
                        
                      </div><!-- .serv-cntn-item -->
                      
                      
                      <?php if( have_rows('bullet_points') ): 
                        
                        while( have_rows('bullet_points') ): the_row(); 
                        
                          $bulletTitle = get_sub_field('title'); ?>

                          <div class="serv-cntn-item serv-cntn-item__bullet-points">
                            
                            <h4 class="aw-headline aw-headline__head-four"><?php echo $bulletTitle; ?></h4>
                            
                              <?php if( have_rows('bullet_items') ): ?>
                                
                                <ul class="serv-cntn-item__lists lists-unorder font-arsenal">
                              
                                  <?php while( have_rows('bullet_items') ): the_row(); 
                            
                                  $bulletInnerItem = get_sub_field('bullet_inner_item'); ?>
                                
                                  <li><?php echo $bulletInnerItem; ?></li>
                          
                                <?php endwhile; ?>
                            
                              </ul>
                              
                           <?php endif; ?>
                            
                          </div>
                        
                        <?php endwhile; ?>
                        
                      <?php endif; ?>
                      
                      
                      <div class="serv-cntn-item serv-cntn-item--bottom-content">
                        
                        <?php $downloadFile = get_sub_field('download_specification'); 
                              $featuresPrinter = get_sub_field('features_printer'); 
                              $featuresContact = get_sub_field('contact_printer'); 
                              $productNote = get_sub_field('product_note'); 
                        
                        if( !empty($downloadFile) ): ?>
                          
                          <h4 class="aw-headline aw-headline__head-four anchor-violet">Download Full Specification Sheet: <a class="weight-500" href="<?php echo $downloadFile; ?>" download><?php echo $materialHeadline; ?></a></h4>
                          
                        <?php endif; 
                        
                        if( !empty($featuresPrinter) ): ?>
                          
                          <p class="anchor-violet font-arsenal">Featured Printer:  <?php echo $featuresPrinter; ?><br>
                        
                        <?php endif; 
                        
                        if( !empty($featuresPrinter) ): ?>
                      
                          Contact: <a href="maito:<?php echo $featuresContact; ?>"> <?php echo $featuresContact; ?></a></p>
                        
                        <?php endif; 
                        
                        if( !empty($productNote) ): ?>
                          
                          <div class="serv-cntn-item__note">
                            
                            <h4 class="aw-headline aw-headline__head-four">NOTE:</h4>
                            
                            <?php echo $productNote; ?>
                          
                          </div>
                        
                        <?php endif; ?>
                          
                      </div>

                    
                    </div><!-- .aw-column -->
                  
                </div><!-- .media-coverage__item -->
              
            </div><!--.media-coverage -->
          
          <?php endwhile; 
          
          $rowCount++; ?>
          
        <?php endif; ?>  
          
      </div>
      
    </section><!-- .aw-section -->

  </div><!-- .main-content -->


<?php get_footer();
