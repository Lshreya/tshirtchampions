<?php 
function learningWordPress_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

//Navigation Menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer menu'),
));

//Widget area
if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'HomeLeft Widgets',
'id'   => 'homeleft-widgets',
'description'   => 'Widget Area',
'before_widget' => '<div id="one" class="two">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title'   => '</h2>'
));
}
//Get top ancestor
function get_top_ancestor_id(){
    global $post;
 if($post->post_parent){
    $ancestors = array_reverse(get_post_ancestors($post->ID));
    return $ancestors[0]; 
 }   
return $post->ID;


}
//Does page have children? 
function has_children(){

    global $post;

    $pages = get_pages('child_of =' .$post->ID);
    return count($pages);
}
?>