<?php
    require( dirname( __FILE__ ) . '/wp-blog-header.php' );

    $uri = $_SERVER['REQUEST_URI'];
    $pieces = explode("?", $uri);
    $post_id = intval( $pieces[1] );

    // og:title
    $title = get_the_title($post_id);

    // og:description
    $post = get_post($post_id);
    $descr = $post->post_excerpt;

    // og:image
    $img_data_array = get_attached_media('image', $post_id);
    $img_src = null;
    $img_count = 0;

    foreach ( $img_data_array as $img_data ) {
        if ( $img_count > 0 ) {
            break;
        } else {
            ++$img_count;
            $img_src = $img_data->guid;
        }
    } // end og:image

?>
<!DOCTYPE HTML>
<html>
	<body>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $descr; ?>" />
<meta property="og:locale" content="en_US" />  
<meta property="og:type" content="website" /><meta property="og:url" content="<?php echo site_url().'/your_redirect_path'.$post_id; ?>" />
<meta property="og:image" content="<?php echo $img_src; ?>" />
<meta property="og:site_name" content="Your Title" />



<?php 
if(isset($_POST['new_post']) == '1') {
    
    // Create post object
	$my_post = array();
	$my_post['post_title']    = 'My post';
	$my_post['post_content']  = 'This is my post.';
	$my_post['post_status']   = 'publish';
	$my_post['post_author']   = 1;
	$my_post['post_category'] = array(0);
	// Insert the post into the database
	wp_insert_post( $my_post );

    // This will redirect you to the newly created post
    $post = get_post($post_id);
    wp_redirect($post->guid);
}      
?>      

<form method="post" action=""> 
    <label for="post_title">Product Name</label>
    <input type="text" name="post_title" size="45" id="input-title"/>
    <br>
	<?php wp_dropdown_categories('orderby=name&hide_empty=0&exclude=1&hierarchical=1'); ?>
	<br>
    <label for="post_title">Product Name</label>
    <textarea rows="5" name="post_content" cols="66" id="text-desc"></textarea> 
    <br>
    <input type="hidden" name="new_post" value="1"/> 
    <input class="subput round" type="submit" name="submit" value="Post"/>
</form>


	</body>
</html>