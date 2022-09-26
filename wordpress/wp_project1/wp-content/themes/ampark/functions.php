<?php
if ( ! function_exists( 'ampark_setup' ) ) :
function ampark_setup() {
		/*
		 * WooCommerce Plugin Support
		 */
		add_theme_support( 'woocommerce' );
	}
endif;
add_action( 'after_setup_theme', 'ampark_setup' );


function ampark_css() {
	$parent_style = 'avril-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'ampark-style', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('ampark-color-default',get_stylesheet_directory_uri() .'/assets/css/color/default.css');
	wp_dequeue_style('avril-default');
	
	wp_enqueue_style('ampark-woocommerce',get_stylesheet_directory_uri().'/assets/css/woo.css');
	
	wp_enqueue_style('ampark-media-query',get_stylesheet_directory_uri().'/assets/css/responsive.css');
	wp_dequeue_style('avril-media-query');
	
	wp_enqueue_script('ampark-custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true);

}
add_action( 'wp_enqueue_scripts', 'ampark_css',999);


/**
 * Called all the Customize file.
 */
require( get_stylesheet_directory() . '/inc/customize/ampark-premium.php');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function ampark_widgets_init() {
	register_sidebar( array(
		'name' => __( 'WooCommerce Widget Area', 'ampark' ),
		'id' => 'avril-woocommerce-sidebar',
		'description' => __( 'This Widget area for WooCommerce Widget', 'ampark' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
}
add_action( 'widgets_init', 'ampark_widgets_init' );


 /**
 * Add WooCommerce Cart Icon With Cart Count (https://isabelcastillo.com/woocommerce-cart-icon-count-theme-header)
 */
function ampark_add_to_cart_fragment( $fragments ) {
	
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?> 
	<?php
    if ( $count > 0 ) { ?>
			 <span class="cart-count"><?php echo esc_html( $count ); ?></span>
		<?php }else { ?>
			<span class="cart-count"><?php esc_html_e( '0','ampark' ); ?></span>
			<?php 
		}
 
    $fragments['.cart-count'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'ampark_add_to_cart_fragment' );


/**
 * Import Options From Parent Theme
 *
 */
function ampark_parent_theme_options() {
	$avril_mods = get_option( 'theme_mods_avril' );
	if ( ! empty( $avril_mods ) ) {
		foreach ( $avril_mods as $avril_mod_k => $avril_mod_v ) {
			set_theme_mod( $avril_mod_k, $avril_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'ampark_parent_theme_options' );