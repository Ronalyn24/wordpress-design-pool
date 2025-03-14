<div class="aw-pagination">
                        
    <div class="aw-pagination__numbers">
      
      <?php
          $big = 999999999; 
          
          if ($query->max_num_pages > 1) {
          
          echo paginate_links( array(
              'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'format'  => '?paged=%#%',
              'current' => $paged,
              'total'   => $query->max_num_pages,
              'mid_size'        => 2,
              'prev_text'       => __('<i class="fa-solid fa-angle-left"></i>'),
              'next_text'       => __('<i class="fa-solid fa-angle-right"></i>')
          ) );
          
          }
    ?>
    
    </div>

</div>
