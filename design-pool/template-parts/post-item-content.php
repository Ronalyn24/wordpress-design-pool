<div class="main-content__posts">
								
  <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  
        $args = array(
            'post_type'       => 'post',
            'posts_per_page'  => 10,
            'paged'           => $paged
        );
        
        $query = new WP_Query( $args );

        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post() ; ?>
    
      <?php get_template_part( 'template-parts/blog-content', get_post_format() ); ?>

  <?php endwhile; ?>

      <div class="post-pagination">
        
        <?php 
            previous_posts_link('<< Previous');
            next_posts_link('Next >>', $query->max_num_pages); 
        ?>
      
      </div>
      
  <?php else : ?>

    <p class="no-post-found"><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

  <?php endif; ?>
              
</div><!-- .aw-main-content -->
