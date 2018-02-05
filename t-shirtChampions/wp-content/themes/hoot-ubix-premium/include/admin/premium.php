<?php
/**
 * Premium Theme Options displayed in admin
 *
 * @package    Hoot
 * @subpackage Hoot Ubix
 * @return array Return Hoot Options array to be merged to the original Options array
 */

$hoot_options_premium = array();
$imagepath =  HYBRIDEXTEND_INCURI . 'admin/images/';
$hoot_cta_top = '<a class="button button-primary button-buy-premium" href="https://wphoot.com/themes/hoot-ubix/" target="_blank">' . __( 'Click here to know more', 'hoot-ubix-premium' ) . '</a>';
$hoot_cta_top = $hoot_cta = '<a class="button button-primary button-buy-premium" href="https://wphoot.com/themes/hoot-ubix/" target="_blank">' . __( 'Buy Hoot Ubix Premium', 'hoot-ubix-premium' ) . '</a>';
$hoot_cta_demo = '<a class="button button-secondary button-view-demo" href="https://demo.wphoot.com/hoot-ubix/" target="_blank">' . __( 'View Demo Site', 'hoot-ubix-premium' ) . '</a>';
$hoot_cta_url = 'https://wphoot.com/themes/hoot-ubix/';
$hoot_cta_demo_url = 'https://demo.wphoot.com/hoot-ubix/';

$hoot_intro = array(
	'name' => __('Upgrade to <span>Hoot Ubix <strong>Premium</strong></span>', 'hoot-ubix-premium'),
	'desc' => __("If you've enjoyed using Hoot Ubix, you're going to love <strong>Hoot Ubix Premium</strong>.<br>It's a robust upgrade to Hoot Ubix that gives you many useful features.", 'hoot-ubix-premium'),
	);

$hoot_options_premium[] = array(
	'name' => __('Complete <br />Style <strong>Customization</strong>', 'hoot-ubix-premium'),
	'desc' => __('Different looks and styles. Choose from an extensive range of customization features in Hoot Ubix Premium to setup your own unique front page. Give youe site the personality it deserves.', 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-style.jpg',
	'style' => 'hero-top',
	);

$hoot_options_premium[] = array(
	'name' => __('Unlimited Colors', 'hoot-ubix-premium'),
	'desc' => __('Hoot Ubix Premium lets you select unlimited colors for different sections of your site. Select pre-existing backgrounds for site sections like header, footer etc. or upload your own background images/patterns.', 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-colors.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Fonts and <span>Typography Control</span>', 'hoot-ubix-premium'),
	'desc' => __('Assign different typography (fonts, text size, font color) to menu, topbar, logo, content headings, sidebar, footer etc.', 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-typography.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Unlimites Sliders, Unlimites Slides', 'hoot-ubix-premium'),
	'desc' => __('Hoot Ubix Premium allows you to create unlimited sliders with as many slides as you need.<hr>You can use these sliders on your Frontpage, or add them anywhere using shortcodes - like in your Posts, Sidebars or Footer.', 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-sliders.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('600+ Google Fonts', 'hoot-ubix-premium'),
	'desc' => __("With the integrated Google Fonts library, you can find the fonts that match your site's personality, and there's over 600 options to choose from.", 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-googlefonts.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Shortcodes with <span>Easy Generator</span>', 'hoot-ubix-premium'),
	'desc' => __('Enjoy the flexibility of using shortcodes throughout your site with Hoot Ubix premium. These shortcodes were specially designed for this theme and are very well integrated into the code to reduce loading times, thereby maximizing performance!<hr>Use shortcodes to insert buttons, sliders, tabs, toggles, columns, breaks, icons, lists, and a lot more design and layout modules.<hr>The intuitive Shortcode Generator has been built right into the Edit screen, so you dont have to hunt for shortcode syntax.', 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-shortcodes.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Image Carousels', 'hoot-ubix-premium'),
	'desc' => __('Add carousels to your post, in your sidebar, on your frontpage or in your footer. A simple drag and drop interface allows you to easily create and manage carousels.', 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-carousels.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __("Floating <br /><span>'Sticky' Header</span> &amp; <span>'Goto Top'</span> button (optional)", 'hoot-ubix-premium'),
	'desc' => __("The floating header follows the user down your page as they scroll, which means they never have to scroll back up to access your navigation menu, improving user experience.<hr>Or, use the 'Goto Top' button appears on the screen when users scroll down your page, giving them a quick way to go back to the top of the page.", 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-header-top.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('One Page <span>Scrolling Website /</span> <span>Landing Page</span>', 'hoot-ubix-premium'),
	'desc' => __("Make One Page websites with menu items linking to different sections on the page. Watch the scroll animation kick in when a user clicks a menu item to jump to a page section.<hr>Create different landing pages on your site. Change the menu for each page so that the menu items point to sections of the page being displayed.", 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-scroller.jpg',
	'style' => 'side',
	);

$hoot_options_premium[] = array(
	'name' => __('3 Blog Layouts (including pinterest <span>type mosaic)</span>', 'hoot-ubix-premium'),
	'desc' => __('Hoot Ubix Premium gives you the option to display your post archives in 3 different layouts including a mosaic type layout similar to pinterest.', 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-blogstyles.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Custom Widgets', 'hoot-ubix-premium'),
	'desc' => __('Custom widgets crafted and designed specifically for Hoot Ubix Premium Theme to give you the flexibility of adding stylized content.', 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-widgets.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Menu Icons', 'hoot-ubix-premium'),
	'desc' => __('Select from over 500 icons for your main navigation menu links.', 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-menuicons.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Premium Background Patterns (CC0)', 'hoot-ubix-premium'),
	'desc' => __('Hoot Ubix Premium comes with many additional premium background patterns. You can always upload your own background image/pattern to match your site design.', 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-backgrounds.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Automatic Image Lightbox and <span>WordPress Gallery</span>', 'hoot-ubix-premium'),
	'desc' => __('Automatically open image links on your site with the integrates lightbox in Hoot Ubix Premium.<hr>Automatically convert standard WordPress galleries to beautiful lightbox gallery slider.', 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-lightbox.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Developers <br />love {LESS}', 'hoot-ubix-premium'),
	'desc' => __('CSS is passe. Developers love the modularity and ease of using LESS, which is why Hoot Ubix Premium comes with properly organized LESS files for the main stylesheet.', 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-lesscss.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Easy Import/Export', 'hoot-ubix-premium'),
	'desc' => __('Moving to a new host? Or applying a new child theme? Easily import/export your customizer settings with just a few clicks - right from the backend.', 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-import-export.jpg',
	);

$hoot_options_premium[] = array(
	'style' => 'aside',
	'blocks' => array(
		array(
			'name' => __('Custom Javascript &amp; <span>Google Analytics</span>', 'hoot-ubix-premium'),
			'desc' => __("Easily insert any javascript snippet to your header without modifying the code files. This helps in adding scripts for Google Analytics, Adsense or any other custom code.", 'hoot-ubix-premium'),
			'img' => $imagepath . 'premium-customjs.jpg',
			),
		array(
			'name' => __('Continued <br />Updates', 'hoot-ubix-premium'),
			'desc' => __("You will help support the continued development of Hoot Ubix - ensuring it works with future versions of WordPress for years to come.", 'hoot-ubix-premium'),
			'img' => $imagepath . 'premium-updates.jpg',
			),
		),
	);

$hoot_options_premium[] = array(
	'name' => __('Premium <br />Priority Support', 'hoot-ubix-premium'),
	'desc' => __("Need help setting up Hoot Ubix? Upgrading to Hoot Ubix Premium gives you prioritized support. We have a growing support team ready to help you with your questions.<hr>Need small modifications? If you are not a developer yourself, you can count on our support staff to help you with CSS snippets to get the look you're after.", 'hoot-ubix-premium'),
	'img' => $imagepath . 'premium-support.jpg',
	);