<?php if( have_rows('accordion_items') ): ?>

<div class="accordion-container">

    <?php while( have_rows('accordion_items') ) : the_row();

        $acc_title = get_sub_field('accordion_title');
        
        $acc_content = get_sub_field('accordion_content'); 

        if( $acc_title ) : ?>
    
          <div class="acc-item">

              <button class="acc-btn"><?php echo $acc_title; ?><i class="fa-solid fa-angle-down"></i></button>
              
              <?php if( $acc_content ) : 
              
                echo '<div class="content">'.$acc_content.'</div>'; 
              
              endif; ?>

          </div>

      <?php endif;
  
    endwhile; ?>

</div>

<?php endif; ?>
