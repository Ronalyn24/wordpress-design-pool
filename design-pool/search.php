<?php get_header(); ?>

<div class="main-content aw-search-page search-<?php echo $wp_query->found_posts; ?>">

    <section class="aw-section">

        <div class="aw-row aw-row--1">

            <div class="search-page-intro">

                <h1>Search results</h1>

                <p>
                    <span class="results-no">OOOPS!<br>
                    We found <?php echo $wp_query->found_posts; ?> results for your search on <strong><?php echo get_search_query(); ?></strong>.</span>
                </p>

                <p>
                    <span class="results-yes">YAY!<br>
                    We found <?php echo $wp_query->found_posts; ?> result(s) for your search on <strong><?php echo get_search_query(); ?></strong>.</span>
                </p>
              
            </div>
        
            <div class="entries">

                <?php 

                // Do we need pagination?
                function show_posts_nav() {
                    global $wp_query;
                    return ($wp_query->max_num_pages > 1);
                }; 

                ?>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="entries-item">

                        <a href="<?php the_permalink(); ?>">
                        
                            <h4><?php the_title(); ?></h4>

                            <img class="search-thumbnail" src="<?php echo get_the_post_thumbnail_url($post->ID,'large'); ?>" alt="">

                        </a>

                        <p><?the_excerpt(); ?></p>

                    </div>

                <?php endwhile; endif; ?>

                <?php if (show_posts_nav()) : ?>

                    <div class="pagination-wrapper">

                        <div class="pagination">

                            <?php echo paginate_links( $args ); ?>
                            <?php
                            $args = array(
                                'prev_text'     => __(''),
                                'next_text'     => __(''),
                            ); 
                            ?>

                        </div>
                                    
                    </div>
                    
                <?php endif; ?>

            </div><!-- entries -->

        </div><!-- .aw-row -->

    </section><!-- .aw-section -->

</div><!-- .main-content -->

<?php get_footer(); ?>
