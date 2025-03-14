<?php

function design_pool_styles() {	
    
    wp_enqueue_style( 'raleway-font', 'https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800&display=swap', [], '1.0.0', 'all' );
	wp_enqueue_style( 'arsenal-font', 'https://fonts.googleapis.com/css2?family=Arsenal:wght@400;700&display=swap', ['raleway-font'], '1.0.0', 'all' );
    wp_enqueue_style( 'flickity-css', get_stylesheet_directory_uri() . '/assets/plugins/flickity/flickity.min.css', ['arsenal-font'], '2.3.0', 'all' );
    wp_enqueue_style( 'fontawesome-css', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', ['flickity-css'], '5.2.0', 'all' );
	wp_enqueue_style( 'style1', get_template_directory_uri() . '/style.css', ['fontawesome-css'], '1.0.1', 'all' );
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', ['style1'], '1.3.7', 'all' );
}

add_action( 'wp_enqueue_scripts', 'design_pool_styles' );


// Load in our JS
function design_pool_scripts() {
    wp_enqueue_script( 'font-kit', 'https://kit.fontawesome.com/cd67bb5261.js', array(), '6.4.2', true);
    wp_enqueue_script( 'flickity-js', get_stylesheet_directory_uri() . '/assets/plugins/flickity/flickity.pkgd.min.js', array(), '2.3.0', true );
    wp_enqueue_script( 'js-cookie', get_template_directory_uri() . '/assets/js/js-cookie.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script( 'js-popup', get_template_directory_uri() . '/assets/js/popup-signup.js', array('js-cookie'), '1.0.1', true);
    wp_enqueue_script( 'js-calculator', get_template_directory_uri() . '/assets/js/calculator.js', array('jquery'), '1.0.0', true);
    
    if ( is_home() || is_front_page() || is_page('licensable-designs') || (is_single() && get_post_type() == 'licensable-design') ) {
        wp_enqueue_script( 'video-slide-script', get_template_directory_uri() . '/assets/js/video-slide-in.js', array( 'jquery' ), '1.1', true );
    }
    
    wp_enqueue_script( 'js-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.1.0', true);


}

add_action( 'wp_enqueue_scripts', 'design_pool_scripts', 30, 1 );


// Send a notification to the admin when a user downloads a pattern
function enqueue_custom_scripts() {
    wp_enqueue_script( 'download-notification', get_template_directory_uri() . '/assets/js/notification.js', array('jquery'), time(), true);

    // Pass user email to JavaScript
    $user_email = is_user_logged_in() ? wp_get_current_user()->user_email : '';
    wp_localize_script('download-notification', 'userDetails', array('email' => $user_email));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

add_filter( 'gform_confirmation_anchor_23', '__return_false' );

/*****************************************************
 * WOOCOOMERCE ADD THEME SUPPORT AND CHANGES
 * ***************************************************/

// To Read Woocommerce Folder

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


// Support to display Zoom, Slider and lightbox

function yourtheme_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'yourtheme_setup' );


// Change add to cart text on product archives page

function woocommerce_add_to_cart_button_text_archives() {
    return __( 'Read more', 'woocommerce' );
}
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_add_to_cart_button_text_archives' );  


// Change add to cart text on single product page
 
function woocommerce_add_to_cart_button_text_single() {
  return __( 'Add to cart', 'woocommerce' ); 
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_add_to_cart_button_text_single' );



// ADD ACF DOWNLOAD ABOVE THE VARIATION FORM

function custom_acf_fields_above_variations_form() {
    global $product;

    if ($product && $product->is_type('variable')) {

        $field_value = get_field('product_download_pdf');
        if ($field_value) {
            echo '<div class="single-prod-download anchor-violet">';
                echo '<a href="'.$field_value.'" target="_blank">';
                    echo '<span><i class="fa-solid fa-arrow-down"></i>Download Printable PDF for current Scale</span>';
                echo '</a>';
            echo '</div>';
        }
    }
}
add_action('woocommerce_before_variations_form', 'custom_acf_fields_above_variations_form');


// ADD RETURNS LINK ABOVE THE VARIATION FORM

function returns_above_variations_form() {
 
    echo '<div class="returns-link">';
        echo '<a href="#" class="red-link returns-link__link">Return Policy</a>';
        echo '<p class="returns-link__text message-alert">Our products are all custom-made to order. Unfortunately, returns and exchanges are not supported if you just simply change your mind. However if the item is broken or flawed, we will gladly replace it. Check out our <a class="red-link" href="/returns-exchange-policy/">Returns and Exchange Policy</a> for more details.</p>';
    echo '</div>';
}
add_action('woocommerce_before_variations_form', 'returns_above_variations_form');


/*****************************************************
 * ADD THEME SUPPORT
 * ***************************************************/

 if ( function_exists( 'add_theme_support' ) ) {

    add_theme_support( 'post-thumbnails' );
    
    set_post_thumbnail_size( 150, 150, true ); 
    
    add_image_size( 'aw_large', 1090, 500, true ); 
    
    add_image_size( 'aw_x_large', 1200, 689, true ); 
    
    add_image_size( 'aw_v-small', 150, 150, true ); 
    
    add_image_size( 'aw_small', 300, 300, true ); 
    
    add_image_size( 'aw_medium', 640, 640, true ); 
	 
	add_image_size( 'aw_medium_thumb', 680, 350, true ); 

    add_image_size( 'aw_medium_large', 980, 400, true ); 
	 
	add_image_size( 'aw_home_banner', 1024, 980, true ); 
    
    add_image_size( 'aw-admin-featured-image', 150, 150, false );
}


/*****************************************************
 * REMOVE FILTER 
 * ***************************************************/

remove_filter('the_content', 'wpautop'); //stop wp from adding p tags
remove_filter( 'the_excerpt', 'wpautop' ); //stop from adding br tags


/*****************************************************
 * REGISTER MENU
 * ***************************************************/

function register_my_menus() {
    register_nav_menus(
        array(
        'header-menu' => __( 'Primary Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );


/*****************************************************
 * REGISTER WIDGETS AREAS
 * ***************************************************/

function add_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Product Filter',
        'id'            => 'product-cat-filter',
        'before_widget' => '<div class="widget-inner-content">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) ); 
}
add_action( 'widgets_init', 'add_widgets_init' );


/*****************************************************
 * CUSTOM LOGO
 * ***************************************************/

function config_custom_logo() {
    $defaults = array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'config_custom_logo' );


/*****************************************************
 * ALLOW SVG SUPPORT
 * ***************************************************/

add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );


/**************** SRCSET IMAGE SIZES *******************/

function awesome_acf_responsive_image($image_id,$image_size,$max_width){

	// check the image ID is not blank
	if($image_id != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

		// generate the markup for the responsive image
		echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';

	}
}

/**************** set the max image width *******************/

function awesome_acf_max_srcset_image_width() {
	return 1680;
}
add_filter( 'max_srcset_image_width', 'awesome_acf_max_srcset_image_width', 10 , 2 );


// Easy Digital Downloads
define('EDD_SLUG', 'mapping-designs');

function posts_per_page_maaping_designs( $query ) {
    if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'download' ) ) {
        $query->set( 'posts_per_page', '40' );
    }
}
add_action( 'pre_get_posts', 'posts_per_page_maaping_designs' );


// Add custom logo to WordPress admin login page
function cwpai_custom_login_logo() {
    echo '<style type="text/css">
        .login h1 a {
            background-image: url(https://dev.designpoolpatterns.com/wp-content/uploads/2023/08/dpool-login.png) !important;
            width: 100%;
            height: 100px;
            background-size: contain;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
        .woocommerce-feature-enabled-activity-panels table.wp-list-table .column-name {
            width: 10%;
        }
        .woocommerce-feature-enabled-activity-panels table.wp-list-table .column-sku {
            width: 5%;
        }
        .woocommerce-feature-enabled-activity-panels .fixed .column-date {
            width: 9%;
        }
    </style>';
}
add_action('login_head', 'cwpai_custom_login_logo');



/*****************************************************
 * SHORTCODE FOR THE SLIDERS LICENSABLE DESIGN
 * ***************************************************/

// Example: [post-shortcode post_type="post" category_name="category" single_cat_name="red" post_item="4"] 
 
function post_shortcode_function( $attr ) {
    
    ob_start();

        // define attributes and their defaults
        extract( shortcode_atts( array (
            'post_type'           => 'product',            // Default to 'product' for WooCommerce
            'post_item'           => '4',                  // Default number of items to display
            'product_category'    => '',                   // WooCommerce product category slug
            'custom_taxonomy'     => '',                   // Custom taxonomy name
            'custom_tax_term'     => '',                   // Custom taxonomy term slug
        ), $attr ) );
    
        // define query parameters based on attributes
        $options = array(
            'post_type'      => $post_type,
            'posts_per_page' => $post_item,  
            'order'          => 'DESC',
            'orderby'        => 'date',
        );

        // Build tax_query array
        $tax_query = array();

        // Add product category to tax_query if provided
        if ( ! empty( $product_category ) ) {
            $tax_query[] = array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => $product_category,
            );
        }

        // Add custom taxonomy to tax_query if provided
        if ( ! empty( $custom_taxonomy ) && ! empty( $custom_tax_term ) ) {
            $tax_query[] = array(
                'taxonomy' => $custom_taxonomy,
                'field'    => 'slug',
                'terms'    => $custom_tax_term,
            );
        }

        // If tax_query is not empty, add it to options
        if ( ! empty( $tax_query ) ) {
            $options['tax_query'] = $tax_query;
        }
    
        $the_query = new WP_Query( $options );

        // run the loop based on the query
        if ( $the_query->have_posts() ) : 

    
            echo '<ul class="aw-licensable-items">';
    
                $count = 1; 
        
                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    
                    $count ++; ?> 
            
                        <?php get_template_part( 'template-parts/slider-item-content-products', get_post_format() ); ?>

                <?php endwhile; 
    
            echo '</ul>';
    
        endif; 
    
    wp_reset_postdata();

    $post_content =  ob_get_contents();

    ob_end_clean();

    return $post_content;
}
add_shortcode( 'post-shortcode', 'post_shortcode_function' );


/*****************************************************
 * HIDE THE WORDPRERSS TOOLBAR FOR SUBSCRIBERS
 * ***************************************************/
  
function remove_admin_bar_for_subscribers() {
    if (current_user_can('subscriber')) {
        show_admin_bar(false);
    }
}

add_action('after_setup_theme', 'remove_admin_bar_for_subscribers');


/*****************************************************
 * MAKE MENU MORE ACCESSIBLE 
 * ***************************************************/

function add_role_to_menu_item($atts, $item, $args) {
    // Modify only for header-menu and parent list items
    if ($args->theme_location == 'header-menu' && in_array('menu-item-has-children', $item->classes)) {
        $atts['role'] = 'button';
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_role_to_menu_item', 10, 3);
  

/*****************************************************
 * REDIRECT NON-ADMINS TO HOME PAGE AFTER LOGIN
 * ***************************************************/

function redirect_non_admin_users( $user_login, $user ) {
    // Step 1: Check if the user is logging in via the specified login page
    $current_url = "https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $target_url = 'https://dev.designpoolpatterns.com/wp-login.php';

    if ( $current_url === $target_url ) {
        // Step 2: Check if the user is an Admin
        if ( user_can( $user, 'manage_options' ) ) {
            // Admins will go to the WordPress backend by default, no need to redirect.
        } 
        // Step 3: Check if the user role is "customer"
        elseif ( in_array( 'customer', (array) $user->roles ) ) {
            wp_redirect( 'https://dev.designpoolpatterns.com/licensable-designs/' );
            exit();
        } 
        // Step 4: Check if the user role is "subscriber"
        elseif ( in_array( 'subscriber', (array) $user->roles ) ) {
            wp_redirect( 'https://dev.designpoolpatterns.com/mapping-designs/' );
            exit();
        } 
        // If user is neither admin, customer, nor subscriber, redirect to the home page
        else {
            wp_redirect( home_url() );
            exit();
        }
    }
}
add_action( 'wp_login', 'redirect_non_admin_users', 10, 2 );


/*****************************************************
 * wp admin style For the product column
 * ***************************************************/

function custom_admin_styles() {
    echo '<style>
    .woocommerce-feature-enabled-activity-panels table.wp-list-table .column-name {
        width: 10%;
    }
    .woocommerce-feature-enabled-activity-panels table.wp-list-table .column-sku {
        width: 5%;
    }
    
    .woocommerce-feature-enabled-activity-panels .fixed .column-date {
        width: 9%;
    }
    </style>';
}
add_action( 'admin_head', 'custom_admin_styles' );


function add_custom_div_above_add_to_cart() {
    echo '<div class="product-label">ROLL QUANTITY</div>';
}
add_action('woocommerce_before_add_to_cart_button', 'add_custom_div_above_add_to_cart');


/*****************************************************
 * Increase size of Single Product gallery image size
 * ***************************************************/

function custom_woocommerce_thumbnail_size() {
    return array(
        'width'  => 244,
        'height' => 244,
        'crop'   => 1,  // Set to 1 to crop the images
    );
}
add_filter('woocommerce_get_image_size_gallery_thumbnail', 'custom_woocommerce_thumbnail_size');


/*****************************************************
 * Add checkbox to checkout for returns policy
 * ***************************************************/

add_action('woocommerce_review_order_before_payment', 'add_dp_returns_above_payment_options');

function add_dp_returns_above_payment_options() {
    echo '<div id="dp_returns_container">';
    echo '<label for="dp_returns_checkbox">';
    echo '<input type="checkbox" name="dp_returns" id="dp_returns_checkbox" /> ';
    echo 'I agree to the <a href="/returns-exchange-policy/" target="_blank" rel="noopener noreferrer">returns policy.</a>';
    echo '</label>';
    echo '</div>';
}
  
// Add the custom JavaScript to the footer
function add_custom_script_to_footer() {
    if ( is_checkout() && ! is_wc_endpoint_url( 'order-received' ) ) {
        ?>
        <script>
        jQuery(document).ready(function($) {
            setTimeout(function() {
                // Move the custom checkbox below the payment methods
                var customCheckbox = $('#dp_returns_container').detach();
                customCheckbox.insertAfter('ul.wc_payment_methods').show();
                $('body').addClass('checkout-did-load');
            }, 3000); // 3 second delay
        });
        </script>
        <?php
    }
}
add_action( 'wp_footer', 'add_custom_script_to_footer' );
  
// Validate checkbox
add_action('woocommerce_checkout_process', 'dp_returns_validation');

function dp_returns_validation() {
    if ( ! isset( $_POST['dp_returns'] ) ) {
        wc_add_notice( __( 'Please agree to our returns policy by checking the box below.' ), 'error' );
    }
}

// Save checkbox value
add_action('woocommerce_checkout_update_order_meta', 'dp_returns_save');

function dp_returns_save( $order_id ) {
    if ( isset( $_POST['dp_returns'] ) ) {
        update_post_meta( $order_id, 'dp_returns', esc_attr( $_POST['dp_returns'] ) );
    }
}

// Display checkbox value in the admin order meta
add_action( 'woocommerce_admin_order_data_after_billing_address', 'display_dp_returns_in_admin_order_meta', 10, 1 );

function display_dp_returns_in_admin_order_meta( $order ){
    $checkbox_value = get_post_meta( $order->get_id(), 'dp_returns', true );
    echo '<p><strong>' . __( 'Agreed to terms:' ) . '</strong> ' . ( $checkbox_value ? 'Yes' : 'No' ) . '</p>';
}

// In the WooCommerce email notification, position the thumbnail above the product name
function custom_woocommerce_order_item_name( $product_name, $item ) {
    // Check if we're in the context of an email
    if ( did_action( 'woocommerce_email_header' ) ) {
        // Wrap the product name in a p tag
        $product_name = '<p style="margin: 0; margin-top: 15px; padding: 0;">' . $product_name . '</p>';
    }
    return $product_name;
}
add_filter( 'woocommerce_order_item_name', 'custom_woocommerce_order_item_name', 10, 2 );


/**
  * Flux move shipping method section.
  *
  * @return void
 */
function move_shipping_section(){
	?>
	<tr>
		<td colspan="2">
			<table class='flux-shipping-container--desktop'></table>
			<!-- <table class='flux-shipping-container--mobile'></table> -->
		</td>
	</tr>
	<?php
}
add_action( 'woocommerce_review_order_before_order_total', 'move_shipping_section' );