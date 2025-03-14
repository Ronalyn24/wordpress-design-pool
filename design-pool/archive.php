<?php 
$q = get_queried_object();

$catTitle = is_category() && isset($q->name) ? $q->name : '';

get_header();
?>


<div class="main-content aw-archive-page">

	<ul class="aw-banner aw-banner__breadcrumslist">
		
		<li><a href="<?php echo get_site_url(); ?>">Home</a><i class="fa-solid fa-angle-right"></i></li>
		
		<li><a href="<?php echo get_site_url(); ?>/blog/">Blog</a><i class="fa-solid fa-angle-right"></i></li>
		
		<li><?php echo $catTitle; ?></li>
		
	</ul>
		
		
		<div class="aw-inner-main-content">		

				<div class="archive-content">

					<div class="main-content__posts">
								
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								
								<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

							<?php endwhile; 
							
							else : ?>

								<p class="no-post-found"><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

							<?php endif; ?>
							
					</div><!-- .aw-main-content -->


					<?php get_template_part('template-parts/sidebar', 'content'); ?>
					
			</div>		
	
		</div>	

</div><!-- .main-content -->

<?php get_footer(); ?>
