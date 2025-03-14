<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KP64R6L');</script>
    <!-- End Google Tag Manager -->
    <title><?php wp_title( '' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
    <meta name="theme-color" content="#ffffff"/>
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
   
    <!-- WP HEAD HOOK -->
	  <?php do_action('wp_head'); ?>
    
  </head>
  

  <body style="opacity: 0.01; transition: all 1s ease-in-out;" <?php body_class(); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KP64R6L"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php // Blog Popup
      if ( is_page('blog') || (is_single() && 'post' == get_post_type()) ) {
        echo get_template_part( 'template-parts/popup/popup-cookies' );
      }
    ?>

    <?php // Licensable Design Forms
      if( is_singular( array( 'licensable-design') ) ) { 
        echo get_template_part( 'template-parts/single-licensable-design', 'forms' );
      }    
    ?>
    
    <?php // About and Home Page
      if ( is_page( array('about', 'home') ) ) {
        echo get_template_part( 'template-parts/popup/popup', 'about' );
      }    
    ?>

    <div class="main-wrapper have-popup">
      
      <a href="#site-content" class="button skip">Skip to Main Content</a>

      <header id="site-header" class="aw-header">
        
        <div class="aw-header__row-sec bg-dark-violet">
          
          <ul class="menu d-flex content-middle-right">
            
              <?php if(is_user_logged_in()) { ?>

                <li class="menu-item email"><a href="mailto:info@designpoolpatterns.com">info@designpoolpatterns.com</a></li>

                <li class="menu-item aw-logout"><a href="<?php echo get_site_url(); ?>/purchase-history/">ACCOUNT</a></li>
                
                <li class="menu-item aw-login"><a href="<?php echo wp_logout_url( home_url() ); ?>">LOGOUT</a></li>
                
                
              <?php } else { ?>
                  
                <li class="menu-item email"><a href="mailto:info@designpoolpatterns.com">info@designpoolpatterns.com</a></li>
                
                <li class="menu-item aw-logout"><a href="<?php echo wp_registration_url(); ?>">REGISTER</a></li>
                
                <li class="menu-item aw-logout"><a href="<?php echo get_site_url(); ?>/purchase-history/">ACCOUNT</a></li>
                
                <li class="menu-item aw-logout"><a href="<?php echo wp_login_url(); ?>">LOGIN</a></li>
                  
              <?php } ?>
          
            </ul><!--.aw-row -->
          
        </div><!--.menu -->
        
        <div class="aw-header__row-pri bg-violet">

          <a href="/"><img width="500" height="136" src="https://dev.designpoolpatterns.com/wp-content/uploads/2023/02/logo-dp-2x.png" class="custom-logo" alt="Design Pool" srcset="https://dev.designpoolpatterns.com/wp-content/uploads/2023/02/logo-dp-2x.png 500w, https://dev.designpoolpatterns.com/wp-content/uploads/2023/02/logo-dp-2x-300x82.png 300w" sizes="(max-width: 500px) 100vw, 500px"></a>

          <div class="aw-header__inn-middle">
            
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'aw-primary-menu for-mobile' ) ); ?>
            
            <!-- <//?php get_search_form(); ?> -->
            
            <span class="aw-yith-search-form">
              
              <?php echo do_shortcode('[searchandfilter id="71640"]'); ?>
            
            </span>
            
          </div>
          
          
          <?php $cart_count = WC()->cart->cart_contents_count;
            $cart_url = wc_get_cart_url(); ?>
          
          <a class="aw-header__cart-bag" aria-label="Cart bag" href="<?php echo $cart_url; ?>" title="<?php _e( 'View your shopping cart' ); ?>">
            <?php if ( $cart_count > 0 ) : echo '<span class="count">'.$cart_count.'</span>'; endif; ?>
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          </a>
          <div id="nav-bugherd" class="aw-header__bugherd for-mobile">

            <span></span>
            <span></span>
            <span></span>

          </div><!--.menu-bar-icon -->

        </div><!--.aw-row -->
        
        <div class="aw-header-menu for-mobile not-desktop-menu">
          
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'aw-primary-menu' ) ); ?>
          
          <ul class="menu">
            
            <?php if(is_user_logged_in()) { ?>
                                      
              <li class="menu-item email"><a href="mailto:info@designpoolpatterns.com">info@designpoolpatterns.com</a></li>

              <li class="menu-item"><a href="<?php echo get_site_url(); ?>/purchase-history/">Account</a></li>
              
              <li class="menu-item"><a href="<?php echo wp_logout_url( home_url() ); ?>">logout</a></li>
              
            <?php } else { ?>
              
              <li class="menu-item email"><a href="mailto:info@designpoolpatterns.com">info@designpoolpatterns.com</a></li>
              
              <li class="menu-item"><a href="<?php echo wp_registration_url(); ?>">Register</a></li>
              
              <li class="menu-item"><a href="<?php echo get_site_url(); ?>/purchase-history/">Account</a></li>
              
              <li class="menu-item"><a href="<?php echo wp_login_url(); ?>">Login</a></li>
                
            <?php } ?>

          </ul><!--.aw-row -->
          
        </div>

        <?php
        if ( is_shop() || is_product_category() || is_product() ) {
            get_template_part( 'template-parts/woocommerce/shoutout' );
        }
        ?>

      </header><!-- #site-header -->

      <main id="site-content" role="main">

        
