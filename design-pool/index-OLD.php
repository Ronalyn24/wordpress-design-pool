<?php get_header(); ?>

<div class="main-content aw-default-page">
	
	<?php if(is_page( 'sitemap' )) { ?>
	
	<ul class="aw-banner aw-banner__breadcrumslist">
		
		<li>
			<a href="<?php echo get_site_url(); ?>">Home</a>
			<i class="fa-solid fa-angle-right"></i>
		</li>
		
		<li>
			<?php echo get_the_title( get_option('page_for_posts', true) ); ?>
		</li>
		
	</ul>
	
	<?php } ?> 

		<?php if ( have_posts() ) : 
			
			while ( have_posts() ) : the_post(); ?>

					<section class="aw-section">

						<div class="aw-row">

							<div class="aw-inner-content">

								<h1 class="aw-title"><?php the_title(); ?></h1>

								<?php the_content(); ?>

							</div><!-- .aw-inner-content -->

						</div><!-- .aw-row -->

					</section><!-- .aw-section -->

		<?php endwhile; 
		
		else : ?>

			<p class="no-post-found"><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

		<?php endif; ?>

</div><!-- .main-content -->

<?php get_footer(); ?>
