<div class="sidebar-overlay"></div>

<div class="main-content__sidebar aw-sidebar">
      
  <button class="mobile-sidebar-toggle"><i class="fa-solid fa-sliders"></i></button>

  <div class="aw-sidebar__container">
            
    <div class="aw-sidebar__item aw-sidebar__item--category">
      
      <h3 class="aw-headline aw-headline__head-four">BLOG CATEGORIES</h3>
      
      <?php 
      
        $categories = get_categories();
        
        foreach ($categories as $category) {
          echo '<div class="aw-sidebar__cat-list"><i class="fa-solid fa-angle-right"></i><a href="'.get_category_link($category->term_id).'">'.$category->name.' ('.$category->count.')</a></div>';
        }
        
      ?>
      
    </div>
      
    <div class="aw-sidebar__item sidebar-ads">
        
      <a href="<?php echo get_site_url().'/product-category/woven-window-film/'; ?>" class="sidebar-ads__link" aria-label="Shop window film">

        <div class="sidebar-ads__image">
			
			<img class="sidebar-ads__video" src="<?php echo get_site_url().'/wp-content/uploads/2024/11/WovenWindow.gif'; ?>" alt="Woven Window Film" />

        </div>
      
        <div class="sidebar-ads__content">
          
          <h3 class="sidebar-ads__title">NEED A LITTLE PRIVACY?</h3>
          
          <p class="sidebar-ads__text"><span>Beatiful woven window films are now available.</span> <span class="subs">Shop now</span></p>
          
        </div>
        
      </a>
        
    </div>
    
    <div class="aw-sidebar__item aw-sidebar__item--tag">
      
      <h3 class="aw-headline aw-headline__head-four">TAGS</h3>
        
      <?php 
          $tags = get_tags(array(
              'smallest'                  => 10, 
              'largest'                   => 22,
              'unit'                      => 'px', 
              'number'                    => 24,  
              'format'                    => 'flat',
              'separator'                 => " ",
              'orderby'                   => 'count', 
              'order'                     => 'DESC',
              'show_count'                => 1,
              'echo'                      => false
          ));
          
          foreach ($tags as $tag) {
          $tag_link = get_tag_link( $tag->term_id );
          
          echo '<a class="tag-'.$tag->name.'" href="'.$tag_link.'">' . $tag->name . '</a>';
          }
          
        ?>
      
    </div>
    
  </div><!-- .aw-sidebar__container -->

</div><!-- .aw-sidebar -->
