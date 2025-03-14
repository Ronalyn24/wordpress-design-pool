<?php
/**
 * Download archives use the same template as the store front. Edit
 * this template in the content/content-archive-download.php file.
 *
 * @package Vendd
 */

get_header(); ?>

<div class="main-content aw-archive-downloads-page">

	<ul class="aw-banner aw-banner__breadcrumslist">
						
		<li>
			<a href="<?php echo get_site_url(); ?>">Home</a>
			<i class="fa-solid fa-angle-right"></i>
		</li>
		
		<li>MAPPING DESIGNS</li>

	</ul>

	<div class="mapping-main-content <?php echo do_shortcode('[edd_user_has_purchased ids="61205,69294"]aap-holder-banner[/edd_user_has_purchased]'); ?>">
				
		<div class="aw-row aw-banner-container">

			<div class="ctrl-width-center" style="--ctrl-max-width: 860px;">
			
				<img class="d-mb-3 mob-mb-2" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/09/downloads-banner-img-1-1024x446-1.jpeg" alt="" width="910"/>
					
				<h1 id="callout-shake" class="aw-headline aw-headline__head-three weight-600 violet text-center">Subscribe to Access Our Library of Seamless Patterns for Mapping</h1>
				
				<p class="text-center">Give your customer exactly what they want from the start.<br>Start with mapping and end with an order.</p>
				
				<p>Our mapping designs are intended to be used with programs such as SketchUp, Revit, and Chief Architect, so you can show your clients actual pattern designs in your renderings. All patterns are in repeat and can be scaled to the perfect size for your vision. After your client approves your proposal, we make it easy for you to order materials directly from one of our vetted printing partners.</p>
				
				<p>Interior Designers can access this curated library of patterns by becoming a subscriber today.</p>
				
				<p>Your Annual Membership includes:</p>
				
				<ul class="lists-unorder d-mb-3">
					
					<li>Access to the complete mapping image library</li>
					
					<li>Ability to scale designs to size.</li>
					
					<li>Option to work with Design Pool on a custom color to match a palette exactly.</li>
					
					<li>Access to Design Pool's digital, on-demand printing partners.</li>
					
				</ul>
				
				<h2 class="aw-headline aw-headline__head-three weight-600 violet text-center d-mb-0">Subscribe Today</h2>
				
				<p class="text-center text-v-small d-mb-2"><em>Single Use Annual Membership</em></p>
				
				<div class="subsPrices d-flex content-middle-center ctrl-width-center" style="--ctrl-max-width: 435px;">
					
					<div class="subsPrices__item text-center">
						
						<h4 class="font-raleway weight-400">Basic Price</h4>
						
						<p>8 Downloads / week</p>

						<?php echo do_shortcode('[purchase_link id="61205" price="0" class="edd-student-btn" text="$49.99 /YEAR" style="button" color="blue"]') ;?>
					
					</div><!-- .subsPrices__item -->
					
					<div class="subsPrices__item text-center">
						
						<h4 class="font-raleway weight-400">Professional Price</h4>
						
						<p>20 Downloads / week</p>

						<?php echo do_shortcode('[purchase_link id="69294" price="0" class="edd-pro-btn" text="$99.99 /YEAR" style="button" color="blue"]') ;?>
					
					</div><!-- .subsPrices__item -->
					
				</div><!-- .subsPrices -->
				
				<p class="text-center d-mt-3">Already a subscriber, <a class="violet" href="<?php echo wp_login_url(); ?>"><strong>login</strong></a> now</p>
				
			</div>

		</div>

	</div><!-- .aw-banner-container -->

	<section class="aw-down-container <?php echo do_shortcode('[edd_user_has_purchased ids="61205,69294"]aap-holder[/edd_user_has_purchased]'); ?>">

		<div class="aap-holder-msg bar-foo">

			<p>All patterns in our licensable library are in seamless repeat and ready to use for mapping on flooring, wallcovering, upholstery, acoustical tiles and more.</p>

			<p class="anchor-violet">After your customer approves your design, come back and place your order through us with our vetted partners. We offer <a class="mr-text-link contact-kris" href="/how-to-request-a-custom-color/">custom coloring services</a> to match your color specifications.</p>

			<p class="aap-holder-extra anchor-violet"><span>View your account page <a class="mr-text-link contact-kris" href="/purchase-history/">here</a>.</span><span>View your download history <a class="mr-text-link contact-kris" href="/download-history/">here</a>.</span></p>

		</div>
		
		<button class="mobile-filter-toggle"><i class="fa-solid fa-sliders"></i> FILTER</button>

    <div class="sidebar-overlay sidebar-overlay--woocommerce"></div>
		
		<div class="aw-licensable-wrap aw-woo-wrap">
			
			<div class="aw-woo-wrap__sidebar">

				<?php echo do_shortcode('[searchandfilter id="61193"]'); ?>
				
      </div><!-- .aw-woo-wrap__sidebar -->
			
			<div class="aw-woo-wrap__main-content">

				<?php get_template_part( 'template-parts/mapping-designs/content-archive-download' ); ?>
				
			</div><!-- .main-content -->
			
    </div><!-- .aw-woo-wrap -->

	</section>
	
</div><!-- .main-content -->

<?php get_footer(); ?>
