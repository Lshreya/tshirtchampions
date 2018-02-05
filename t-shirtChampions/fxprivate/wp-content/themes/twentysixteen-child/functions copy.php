<?php
	



/****** include parent styles *******/

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {
	$parent_style = 'parent-style';
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    /*additional scripts and css additions, like bootstrap and the datepicker */


	/* enqueue scripts and sheets */
	wp_enqueue_style('bootstrap-css',	get_stylesheet_directory_uri().'/bootstrap/css/bootstrap.css');
	wp_enqueue_style('datepicker-css',	get_stylesheet_directory_uri().'/bootstrap/bootstrap-datepicker.min.css');
	wp_enqueue_script('bootstrap-js',	get_stylesheet_directory_uri().'/scripts/jquery.min.js');
	wp_enqueue_script('bootstrap-js',	get_stylesheet_directory_uri().'/bootstrap/js/bootstrap.min.js');
	wp_enqueue_script('datepicker-js',	get_stylesheet_directory_uri().'/bootstrap/bootstrap-datepicker.min.js');
	wp_enqueue_script('calendar-js',	get_stylesheet_directory_uri().'/scripts/calendar.js');
	
}

/****** Header widget area addition *******/

function my_widgets_init() {

register_sidebar( array(
    'name' => __( 'Header Area', 'twentysixteen-child' ),
    'id' => 'header-widgets',
    'description' => __( 'An optional widget area for your site header', 'twentysixteen-child' ),
    'before_widget' => '<div id="%1$s" class="headwidget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h3>',
    'after_title' => '</h3>',
) );
}
add_action( 'widgets_init', 'my_widgets_init' );







/****** checkout custom fields *******/


add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
 
function custom_override_checkout_fields( $fields ) {
	
    unset($fields['billing']['billing_first_name']);
    unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_phone']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_email']);
    unset($fields['billing']['billing_city']);
    
    //partial shipping field
    $fields['shipping']['shipping_partial'] = array(
        'label'     => __('Ship Partial or Complete?', 'woocommerce'),
		'placeholder'   => _x(' ', 'placeholder', 'woocommerce'),
		'required'  => true,
		'class'     => array('form-row-first ship_partial_select'),
		'clear'     => true,
		'type' 		=> 'select',
     );
    $fields['shipping']['shipping_partial']['options'] = array(
	'partial' => 'Ship Partial',
	'complete' => 'Ship Complete'
     );

    return $fields;
    
}

function my_custom_checkout_field( $checkout ) {

    woocommerce_form_field( 'required_by_date', array(
        'type'          => 'text',
        'id'			=> 'requiredDateInput',
//        'class'         => array('form-control'),
        'label'         => __('Required-by Date'),
        'placeholder'   => __('Date'),
        'clear'			=> false,
        ), $checkout->get_value( 'required_by_date' ));
                          
}


/**
 * Update the order meta with field values
 */

add_action( 'woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta' );

function my_custom_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['shipping_partial'] ) ) {
        update_post_meta( $order_id, 'Ship Partial/Complete', sanitize_text_field( $_POST['shipping_partial'] ) );
    }

    if ( ! empty( $_POST['required_by_date'] ) ) {
        update_post_meta( $order_id, 'Required by Date', sanitize_text_field( $_POST['required_by_date'] ) );
    }



}



/**
 * Display field value on the order edit page
 */
 
add_action( 'woocommerce_admin_order_data_after_shipping_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );

function my_custom_checkout_field_display_admin_order_meta($order){
    echo '<p><strong>'.__('').':</strong> ' . get_post_meta( $order->id, '_shipping_partial', true ) . '</p>';
    echo '<p><strong>'.__('').':</strong> ' . get_post_meta( $order->id, '_required_by_date', true ) . '</p>';
}


/**
 * Code should be placed in your theme functions.php file.
 */
add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_woocommerce_loop_add_to_cart_link', 10, 2 );
function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {
	if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
		$html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
		$html .= woocommerce_quantity_input( array(), $product, false );
		$html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
		$html .= '</form>';
	}
	return $html;
}



// Display 24 products per page. Goes in functions.php
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 48;' ), 20 );


//* add product sku to archive pages
function champion_sku_stock_catalog() {
    global $product;
    echo '<span class="sku" >SKU: ' . $product->get_sku() . '</span>';
    global $product;
    if ( $product->is_in_stock() ) {
        echo '<br><span class="stock" >Stock: ' . $product->get_stock_quantity() . '</span>';
    } else {
        echo '<span class="out-of-stock" >' . __( 'out of stock', 'champ' ) . '</span>';
    }
}
add_action( 'woocommerce_after_shop_loop_item_title', 'champion_sku_stock_catalog' );





















?>