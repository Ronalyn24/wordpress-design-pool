<?php 

/*
Template Name: Blog
*/


get_header(); ?>

<div class="main-content aw-default-page">
	
	<ul class="aw-banner aw-banner__breadcrumslist">
		
		<li>
			<a href="<?php echo get_site_url(); ?>">Home</a>
			<i class="fa-solid fa-angle-right"></i>
		</li>
		
		<li>
			<?php echo get_the_title( get_option('page_for_posts', true) ); ?>
		</li>
		
	</ul>
	
  <div class="aw-inner-main-content">			
					
		<div class="archive-content">

      <?php get_template_part('template-parts/post-item', 'content'); ?>
			
			<?php get_template_part('template-parts/sidebar', 'content'); ?>

		</div>		
	
	</div>
	

</div><!-- .main-content -->

<?php get_footer(); ?>
