<?php

get_header();

?>

<div class="main-content aw-woocommerce-page">
    
    
<!--.PRODUCT CATEGORY PAGE -->


    <?php if( is_product_category() ) : ?>
        
        <?php get_template_part( 'template-parts/woocommerce/category' ); ?>
        
    <?php endif; ?>
 
 
<!--.SHOP PAGE -->


    <?php if( is_shop() ) { ?>

        <?php get_template_part( 'template-parts/woocommerce/shop' ); ?>

    <?php } ?>

        
    
<!--.SINGLE PRODUCT PAGE -->   


    <?php if ( is_product() )  { ?>
        
        <section class="aw-section aw-single-product">

            <div class="aw-row">
                
                <!-- <//?php the_title( '<h1 class="product_title entry-title">', '</h1>' ); ?> -->
                
                <?php woocommerce_content(); ?>

            </div>

        </section><!--.aw-section -->

    <?php } ?>

</div><!-- .main-content -->


<?php
get_footer();
