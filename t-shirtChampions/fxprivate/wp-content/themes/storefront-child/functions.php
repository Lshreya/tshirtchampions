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
}





/**
 * Add to cart alteration for multi-add
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


/*
// Display 24 products per page. Goes in functions.php
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 48;' ), 20 );
*/


//* add product sku to archive pages
function champion_sku_stock_catalog() {
    global $product;
    echo apply_filters( 'the_excerpt', $product->post->post_excerpt );
    echo '<span class="sku" >SKU: ' . $product->get_sku() . '</span> <br>';
    global $product;
/*    if ( $product->is_in_stock() ) {
        echo '<br><span class="stock" >Stock: ' . $product->get_stock_quantity() . '</span>';
    } else {
        echo '<br><span class="out-of-stock" >' . __( 'out of stock', 'champ' ) . '</span>';
    }*/
}
add_action( 'woocommerce_after_shop_loop_item_title', 'champion_sku_stock_catalog' );





add_action( 'init', 'custom_remove_footer_credit', 10 );

function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
}

/* Override theme default specification for product # per row
function loop_columns() {
return 4; // 5 products per row
}
add_filter('loop_shop_columns', 'loop_columns', 999);
*/












?>