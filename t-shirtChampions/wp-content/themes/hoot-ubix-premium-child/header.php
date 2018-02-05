<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?> class="no-js">

<head>
<?php
// Fire the wp_head action required for hooking in scripts, styles, and other <head> tags.
wp_head();
?>
<style>
	/*top nav bar styling*/
.header-topbar {
    background: #3a3a3a;
    height: 25px;
    text-transform: uppercase;
}
.container {
    clear: both;
    margin: 0 auto;
    max-width: 960px;
    position: relative;
    width: 90%;
}
.topbar-tagline {
    color: #9a9a9a;
    float: left;
    font-family: "montserratReg",Helvetica,Arial,Verdana,sans-serif;
    font-size: 10px;
    line-height: 25px;
    margin: 0;
    padding: 0;
}
h2.topbar-tagline {
	margin: 0 0 0 0;
}
.topbar-nav {
    float: right;
}
.horz-nav ul {
    margin: 0;
    padding: 0;
}
.horz-nav li {
    float: left;
    list-style: none;
    margin: 0;
	padding: 0;
	
}
.clear {
	display: block;
	zoom: 1;
}
.horz-nav li a{
	padding:10px;
	color:white;
}
.horz-nav li a:hover{
	color:#f15c22;
}
</style>

</head>

<body <?php hybridextend_attr( 'body' ); ?>>
<!--Top bar Nav code-->
<div class="header-topbar"> 
            <div class="container">
                <h2 class="topbar-tagline">
                    &nbsp;
                </h2>
                <div class="topbar-nav horz-nav">
                    <ul>
						<li><a href="https://design.tshirtchampions.com/tshirtchampions/Account">Account</a></li>

                        <li><a href="https://design.tshirtchampions.com/tshirtchampions/Cart">View Cart</a></li>
                        
                        <li><a href="#" id="btn-topbar-quote" data-quote-toggle="">Get a Quote</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
	<div <?php hybridextend_attr( 'page-wrapper' ); ?>>

		<div class="skip-link">
			<a href="#content" class="screen-reader-text"><?php _e( 'Skip to content', 'hoot-ubix-premium' ); ?></a>
		</div><!-- .skip-link -->

		<?php
		// Template modification Hook
		do_action( 'hoot_template_site_start' );

		// Displays a friendly note to visitors using outdated browser (Internet Explorer 8 or less)
		hoot_update_browser();

		// Display Topbar
		get_template_part( 'template-parts/topbar' );
		?>

		<header <?php hybridextend_attr( 'header' ); ?>>

			<?php
			// Display Secondary Menu
			hoot_secondary_menu( 'top' );
			?>

			<div <?php hybridextend_attr( 'header-part', 'primary' ); ?>>
				<div class="grid">
					<div class="table grid-span-12">
						<?php
						// Display Branding
						hoot_header_branding();

						// Display Menu
						hoot_header_aside();
						?>
					</div>
				</div>
			</div>

			<?php
			// Display Secondary Menu
			hoot_secondary_menu( 'bottom' );
			?>

		</header><!-- #header -->

		<?php hybridextend_get_sidebar( 'below-header' ); // Loads the template-parts/sidebar-below-header.php template. ?>

		<div <?php hybridextend_attr( 'main' ); ?>>
			<?php
			// Template modification Hook
			do_action( 'hoot_template_main_wrapper_start' );