<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<ul class="aw-banner aw-banner__breadcrumslist">
        
	<li>
		<a href="<?php echo get_site_url(); ?>">Home</a>
		<i class="fa-solid fa-angle-right"></i>
	</li>
		
	<li>
		<a href="<?php echo get_site_url(); ?>/shop/">SHOP DIRECT</a>
		<i class="fa-solid fa-angle-right"></i>
	</li>  
	
	<li>
		<?php 
		$terms = get_the_terms($product->get_id(), 'product_cat');
		if ($terms && !is_wp_error($terms)) {
			echo '<a href="' . get_term_link($terms[0]->term_id) . '">' . $terms[0]->name . '</a>';
		}
		?>
	</li>
	
</ul>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<div class="aw-left-wrapper">
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>

		<div class="aw-product-desc">

			<h2>Full Product Specifications</h2>

			<div class="aw-product-desc__inner">

				<?php echo get_field('additional_info'); ?>
				
				<div class="aw-product-desc__download anchor-violet">
					
					<?php  
					
						$download_specification_title = get_field('product_pdf_full_specification_title');
						$download_specification = get_field('product_pdf_full_specification');
					
						$feature_print_name = get_field('product_feature_printer_name');
						$feature_print_link = get_field('product_feature_printer_link');
						
						$contact_email = get_field('product_contact_email'); ?>
				
					<?php if ( $download_specification ): ?>
						
						<p class="d-mb-1"><strong>Download Specifications and Install Instructions:<br></strong> 
							<a href="<?php echo $download_specification; ?>">
								<?php echo $download_specification_title; ?>
							</a>
						</p>
						
					<?php endif;
					
					if ( $contact_email ): ?> 
					
						<p class="d-mb-1">Questions on Printing: 
							<a href="<?php echo esc_url( 'mailto:' . antispambot( $contact_email ) ); ?>">
								<?php echo esc_html( antispambot( $contact_email ) ); ?>
							</a>
						</p>
					
					<?php endif; ?>

					<p>Requests for Custom Designs and Colors: <a href="mailto:info@designpoolpatterns.com?subject=Request%20for%20Custom%20Designs%20and%20Colors">info@designpoolpatterns.com</a></p>
				
				</div>
			</div>

		</div>

	</div>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
			
      <?php get_template_part( 'template-parts/woocommerce/roll-calculator' ); ?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
