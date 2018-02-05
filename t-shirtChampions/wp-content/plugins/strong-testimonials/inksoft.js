$(document).ready(function(){
	$("#header-wrap").remove();
	$(".header-topbar").after(
		'<header id="header" class="site-header header-layout-primary-menu header-layout-secondary-none tablemenu" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">' +
			'<div id="header-primary" class=" header-part header-primary-menu">' +
				'<div class="grid">' +
					'<div class="table grid-span-12">' +
						'<div id="branding" class="site-branding branding table-cell-mid">' +
							'<div id="site-logo" class="site-logo-image">' +
								'<div id="site-logo-image">' +
									'<h1 id="site-title" class="site-title" itemprop="headline">' +
										'<a href="http://juicepluspromotionsbychampion.com/" class="custom-logo-link" rel="home" itemprop="url">' +
											'<img width="752" height="184" src="http://juicepluspromotionsbychampion.com/wp-content/uploads/2018/01/Screen-Shot-2018-01-05-at-10.54.38-AM-425x136.png" class="custom-logo" alt="T-Shirt Champions" itemprop="logo" srcset="http://juicepluspromotionsbychampion.com/wp-content/uploads/2018/01/Screen-Shot-2018-01-05-at-10.54.38-AM-425x136.png 752w, http://juicepluspromotionsbychampion.com/wp-content/uploads/2018/01/Screen-Shot-2018-01-05-at-10.54.38-AM-425x136.png 300w, http://juicepluspromotionsbychampion.com/wp-content/uploads/2018/01/Screen-Shot-2018-01-05-at-10.54.38-AM-425x136.png 425w" sizes="(max-width: 752px) 100vw, 752px">' +
										'</a>' +
									'</h1>' +
								'</div>' +
							'</div>' +
						'</div><!-- #branding -->' +
						'<div id="header-aside" class=" header-aside table-cell-mid  header-aside-menu">' +
							'<h3 class="screen-reader-text">Primary Navigation Menu</h3>' +
							'<nav id="menu-primary" class="menu menu-primary nav-menu mobilemenu-fixed mobilesubmenu-click scrollpointscontainer" role="navigation" aria-label="Primary Navigation Menu" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">' +
								'<div class="menu-toggle">' +
									'<span class="menu-toggle-text">Menu</span>' +
									'<i class="fa fa-bars"></i>' +
								'</div>' +
								'<ul id="menu-primary-items" class="menu-items sf-menu menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">' +
									'<li id="menu-item-5808" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5808"><a href="http://juicepluspromotionsbychampion.com/start-designing/"><span class="menu-title">START DESIGNING</span></a></li>' +
									'<li id="menu-item-5807" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5807"><a href="http://juicepluspromotionsbychampion.com/design-library/"><span class="menu-title">Templates</span></a></li>' +
									'<li id="menu-item-5859" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5859"><a href="http://juicepluspromotionsbychampion.com/design-lab/"><span class="menu-title">Design Lab</span></a></li>' +
									'<li id="menu-item-6406" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6406"><a href="http://juicepluspromotionsbychampion.com/t-shirt-shop/"><span class="menu-title">T-Shirt Shop</span></a></li>' +
									'<li id="menu-item-6109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6109"><a href="http://juicepluspromotionsbychampion.com/help-center/"><span class="menu-title">Help Center</span></a></li>' +
								'</ul>' +
							'</nav>' +
						'</div>' +					
					'</div>' +
				'</div>' +
			'</div>' +
		'</header>'
    );

    $(".footer-callout-img").parent().parent().remove();

	$("#footer").before(
		'<div id="footer-callout">'+
		'	<div class="container contact">'+
		'		<img class="footer-callout-img" src="https://www.tshirtchampions.com/wp-content/themes/t-shirt-champions/images/footerlogo.png" alt="">'+
		'		<div class="footer_hours">'+
		'			<h5>Talk to a real person</h5>'+
		'			Mon - Fri  |  9am - 5pm CST'+
		'		</div>'+
		'		<div class="phoneemail">'+
		'			<div class="phone robotc">855-350-4830</div>'+
		'			<!-- <img src="--><!--phone.png" alt="Call Us" class="phone" />-->'+
		'			<a href="mailto:contact@tshirtchampions.com"><img src="https://www.tshirtchampions.com/wp-content/themes/t-shirt-champions/images/email.png" class="responsive-image" alt="Email Us"></a>'+
		'		</div>'+
		'		<div class="clear"></div>'+
		'	</div>'+
		'<div>'
	);

	$("#footernav").html(
		'<ul>'+
		'	<li><a href="https://www.tshirtchampions.com/start-designing/">Start Designing</a></li>'+
		'	<li><a href="http://design.tshirtchampions.com/TSC/Designs/">Design Library</a></li>'+
		'	<li><a href="https://www.tshirtchampions.com/helpful-resources/">FAQs</a></li>'+
		'	<li><a href="http://design.tshirtchampions.com/tshirt_shop/">T-Shirt Shop</a></li>'+
		'	<li><a href="https://www.tshirtchampions.com/our-company/">Our Company</a></li>'+
		'</ul>'
	);

	$('body').on("click", "button.menu-icon", function(){ $("#wp_nav").toggle(); });

	function triggerQuote(){
		$("#quote-callout .btn-primary").trigger('click');
	}

	if(window.location.hash == "#quote"){
		setTimeout(triggerQuote, 500);
	}
	
	$( "div.item-price-wrap:contains('Requires Design')" ).css( "display", "none" );
	
/* attempt to remove the word PRODUCTS from header of shop pages */
	
		var re = /products/gi;
	
	$('.page-header h1').contents().each(function() {
	    console.log(this);
	    if (this.nodeType === 3 && re.test(this.nodeValue)) {
	        this.nodeValue = this.nodeValue.replace(re, '');
	    }
	})
	
	
});