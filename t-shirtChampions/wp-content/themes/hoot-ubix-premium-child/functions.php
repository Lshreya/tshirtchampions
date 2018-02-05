<?php
// Our custom post type function
function create_posttype() {
    register_post_type( 'tsc_product',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Products' ),
                'singular_name' => __( 'Product' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'products'),
            'menu_icon' => 'dashicons-cart',
            'supports' => array( 'title', 'editor', 'thumbnail' )
        )
    );
    register_post_type( 'tsc_garment',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Garments' ),
                'singular_name' => __( 'Garment' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'garments'),
            'menu_icon' => 'dashicons-cart',
            'supports' => array( 'title', 'editor', 'thumbnail')
        )
    );
 register_post_type( 'tsc_testimonials',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'Testimonial' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimonials'),
            'menu_icon' => 'dashicons-admin-users',
            'supports' => array( 'title', 'editor', 'thumbnail' )
        )
    );
 register_post_type( 'tsc_team',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Team' ),
                'singular_name' => __( 'Team' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'staff'),
            'menu_icon' => 'dashicons-admin-multisite',
            'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes')
        )
    );
 register_post_type( 'tsc_champion',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Champions' ),
                'singular_name' => __( 'Champion' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'champion'),
            'menu_icon' => 'dashicons-awards',
            'supports' => array( 'title', 'editor', 'thumbnail' )
        )
    );

}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
add_action( 'init', 'create_product_tax' );

// taxonomy
function create_product_tax() {
  register_taxonomy(
    'tsc_product_category',
    'tsc_product',
    array(
      'label' => __( 'Product Category' ),
      'rewrite' => array( 'slug' => 'product-category' ),
      'hierarchical' => true,
    )
  );

  register_taxonomy(
    'tsc_garment_category',
    'tsc_garment',
    array(
      'label' => __( 'Garment Category' ),
      'rewrite' => array( 'slug' => 'garment-category' ),
      'hierarchical' => true,
    )
  );
}

function tsc_widgets_init() {

  register_sidebar( array(
    'name'          => 'Main Sidebar',
    'id'            => 'main_sidebar',
    'before_widget' => '<div class="sidebar_widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ) );

}
add_action( 'widgets_init', 'tsc_widgets_init' );

// Register and load custom widget
function wpb_load_widget() {
    register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
 
// Creating the widget 
class wpb_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_widget', 
 
// Widget name will appear in UI
__('Shipping dates', 'wpb_widget_domain'), 
 
// Widget description
array( 'description' => __( 'Add Shipping dates widget', 'wpb_widget_domain' ), ) 
);

}

// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
?>
 <h1 style="text-align:center; font-size:45px"> WE SHIP WITHIN 5 BUSINESS DAYS</h1>
   
    <div class="content-block-row">
    
    <div id="Champy" class="content-block-column column-1-3 content-block-style1 visual-icon">

        <section id="text-18" class="widget widget_text">			
            <div class="textwidget"><p><a href="http://juicepluspromotionsbychampion.com/wp-content/uploads/2018/01/Screen-Shot-2018-01-10-at-8.57.30-AM.png" data-src="http://juicepluspromotionsbychampion.com/wp-content/uploads/2018/01/Screen-Shot-2018-01-10-at-8.57.30-AM.png">
                <img class="aligncenter size-full wp-image-6451" src="http://juicepluspromotionsbychampion.com/wp-content/uploads/2018/01/Screen-Shot-2018-01-10-at-8.57.30-AM.png" alt="" width="217" height="235"></a></p>
            </div>
        </section>   
    </div>
    <div class="content-block-column column-1-3 content-block-style1 visual-icon">
            <div class="content-block-visual content-block-icon icon-style-square">
                <i class="fa fa-truck"></i>											
            </div>
            <h3 class="content-block-title">FREE SHIPPING</h3>
            <h6 class="content-block-subtitle small">Order Today Shipped By</h6> 
            <div class="content-block-text">
                <div class="month openxb" style="font-size:20px">
                    <?php
                        echo date('M', strtotime('+ '. 5 .' days'));
                    ?>
                </div>
                <div class="day openb"style="font-size:20px">
                    <?php
                        echo date('d', strtotime('+ '. 5 .' days'));
                    ?>
                </div>
            </div>  
    </div>
    <div class="content-block-column column-1-3 content-block-style1 visual-icon">
        <div class="content-block-visual content-block-icon icon-style-square">
            <i class="fa fa-calendar"></i>											
        </div>
        <h3 class="content-block-title">RUSH SHIPPING</h3>
        <h6 class="content-block-subtitle small">Order Today Shipped By</h6> 
        <div class="content-block-text">
            <div class="month openxb" style="font-size:20px">
                <?php
                    echo date('M', strtotime('+ '. 3 .' days'));
                ?>
            </div>
        <div class="day openb" style="font-size:20px">
            <?php
                $Date = "d";
                echo date('d', strtotime(' + '. 3 .' days'));
            ?>
        </div>      
    </div>
    </div>
    
    <hr>

    <?php 
    }
     
} // Class wpb_widget ends here
?>