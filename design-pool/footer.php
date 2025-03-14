            

            </main><!-- #site-content --> 
            
            <div id="footer" class="aw-section aw-footer bg-light-black">
                
                <div class="aw-row-columns aw-footer__row-first">
                    
                    <div class="aw-footer__aw-column col-1-of-3">
                        
                        <h4 class="aw-headline aw-headline__v-small">Design/Color Trends and Awesome Information In Your Inbox</h4>
                        
                        <p>Sign up for our monthly trend letter</p>
                        
                        <div class="footer-subs">
                            
                            <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
                            
                        </div>
                        
                    </div>
                    
                    <div class="aw-footer__aw-column col-1-of-3 ft-menus">
                        
                        <div class="aw-footer__ft-menus-ctner">
                            
                            <h4 class="aw-headline aw-headline__v-small">My Account</h4>
                                                    
                            <ul>
                            
                                <li><a href="<?php echo get_site_url(); ?>/purchase-history/">My Account</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/download-history/">Downloads</a></li>
                            </ul>
                                                
                        </div>
                        
                        <div class="aw-footer__ft-menus-ctner">
                            
                            <h4 class="aw-headline aw-headline__v-small">Services</h4>
                                                    
                            <ul>
                                <li><a href="<?php echo get_site_url(); ?>/licensable-designs/">Browse Our Designs</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/benefits-of-licensing-designs/">Licensing Info</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/services/#guest-speaking">Guest Speaking</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/returns-exchange-policy/">Return & Exchange Policy</a></li>
                            </ul>
                                               
                        </div>
                        
                    </div><!--.aw-column -->
                    
                    <div class="aw-footer__aw-column col-1-of-3 ft-menus">
                        
                        <div class="aw-footer__ft-menus-ctner">
                            
                            <h4 class="aw-headline aw-headline__v-small">Resources</h4>
                                                
                            <ul>
                                <li><a href="<?php echo get_site_url(); ?>/blog/">Blog</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/materrial-specs/">Material Spec</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/services/">Services</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/benefits-of-licensing-designs/">Licensing Benefits</a></li>
                            </ul>
                                                
                        </div>
                        
                        <div class="aw-footer__ft-menus-ctner">
                            
                            <h4 class="aw-headline aw-headline__v-small">About Us</h4>
                                                    
                            <ul>
                                <li><a href="<?php echo get_site_url(); ?>/about/">About Us</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/press/">Press</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/faq/">FAQ</a></li>
                                <li><a href="<?php echo get_site_url(); ?>/contact/">Contact</a></li>
                            </ul>
                                               
                        </div>
                        
                    </div><!--.aw-column -->
                    
                </div><!--.aw-row -->
                
                <div class="aw-row aw-footer__row-last">
                    
                    <ul class="aw-footer__bottom-menu aw-footer__bottom-menu--copyright">
                        <li>© Design Pool. <?php echo date('Y'); ?>. All Rights Reserved</li>
                        <li><a href="<?php echo get_site_url(); ?>/privacy-policy/">Privacy Policy</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/terms/">Terms of Use</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/sitemap/">Sitemap</a></li>
                        <li><a href="mailto:info@designpoolpatterns.com">info@designpoolpatterns.com</a></li>
                    </ul>
                    
                    <ul class="aw-footer__bottom-menu aw-footer__bottom-menu--social-media">
                        
                        <li><a href="https://www.pinterest.com/designpoolpatterns/" aria-label="pinterest" target="_blank"><i class="fa-brands fa-pinterest"></i></a></li>
                        <li><a href="https://www.instagram.com/designpoolpatterns/" aria-label="instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/designpoolpatterns" aria-label="facebook" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCAC32gclvSb_UL7ykQVN1ag" aria-label="youtube" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>

                    </ul>

                </div><!--.aw-row -->
                
            </div><!--.aw-section -->
              
            
            <?php get_template_part('template-parts/slide-video','in'); ?>
            
            
        </div><!-- main-wrapper -->

        <?php wp_footer(); ?>

        <style>
            body {
                opacity: 1 !important;
            }
        </style>

    </body>

</html>
