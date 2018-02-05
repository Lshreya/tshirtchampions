    $(document).ready(function () {
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
	$("head link[rel='stylesheet']").first().before("<script src='https://use.fontawesome.com/c2fa46eed9.js'></script>");

	$("#footer").before("<link href='http://juicepluspromotionsbychampion.com/wp-content/themes/hoot-ubix-premium-child/inksoft/footer.css' type='text/css' rel='stylesheet'>" +
		"<link href='http://juicepluspromotionsbychampion.com/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=4.9.2' type='text/css' rel='stylesheet'>" +
		"<link href='http://juicepluspromotionsbychampion.com/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.6-78496d1' type='text/css' rel='stylesheet'>");
	$("#footer").html(
		//'<footer id="footer" class="site-footer  footer grid-stretch footer-highlight-typo " role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">' +
		'<div class="grid">' +
		'<div class="grid-span-3 footer-column">' +
		'<section id="hoot-cta-widget-6" class="widget widget_hoot-cta-widget">' +
		'<div class="cta-widget-wrap topborder-none">' +
		'<div class="cta-widget-box bottomborder-none">' +
		'<div class="cta-widget">' +
		'<h3 class="cta-headline">Need Pricing?</h3>' +
		'<div class="cta-description">' +
		'<p>Click the "Get a quote" button below to view pricing.</p>' +
		'</div>' +
		'<a href="http://design.tshirtchampions.com/TSC/Products#quote" class="cta-widget-button  button button-medium border-box">Get a Quote</a>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'</section>' +
		'</div>' +
		'<div class="grid-span-3 footer-column">' +
		'<section id="nav_menu-9" class="widget widget_nav_menu"><h3 class="widget-title">MORE INFO</h3>' +
		'<div class="menu-footer-menu-1-container">' +
		'<ul id="menu-footer-menu-1" class="menu">' +
		'<li id="menu-item-6113" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6113">' +
		'<a href="http://juicepluspromotionsbychampion.com/design-library/"><span class="menu-title">Templates</span></a>' +
		'</li>' +
		'<li id="menu-item-6114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6114"><a href="http://juicepluspromotionsbychampion.com/faqs/"><span class="menu-title">FAQ’S</span></a></li>' +
		'<li id="menu-item-6135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6135"><a href="http://juicepluspromotionsbychampion.com/design-lab/"><span class="menu-title">Design Lab</span></a></li>' +
		'<li id="menu-item-6173" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6173"><a href="http://juicepluspromotionsbychampion.com/our-company-2/"><span class="menu-title">Our Company</span></a></li>' +
		'</ul>' +
		'</div>' +
		'</section>' +
		'</div>' +
		'<div class="grid-span-3 footer-column">' +
		'<section id="hoot-contact-info-widget-5" class="widget widget_hoot-contact-info-widget"><h3 class="widget-title">CONTACT US</h3>' +
		'<div class="contact-info-widget">' +
		'<div class="contact-info-block">' +
		'<div class="contact-info-icon"><i class="fa fa-home"></i></div>' +
		'<div class="contact-info-text">3649 WINPLACE RD, MEMPHIS, TN 38118</div>' +
		'</div>' +
		'<div class="contact-info-block">' +
		'<div class="contact-info-icon"><i class="fa fa-phone"></i></div>' +
		'<div class="contact-info-text"><a href="tel:(901)345-4830" class="contact-info-link">(901)345-4830</a></div>' +
		'</div>' +
		'<div class="contact-info-block">' +
		'<div class="contact-info-icon"><i class="fa fa-envelope"></i></div>' +
		'<div class="contact-info-text"><a href="mailto:con%74%61ct@%74shi%72tcha%6dpi%6f%6es.%63om" class="contact-info-link">contact@tshirtchampions.com</a></div>' +
		'</div>' +
		'<div class="contact-info-block">' +
		'<div class="contact-info-icon"><i class="fa fa-facebook"></i></div>' +
		'<div class="contact-info-text"><a href="http://www.facebook.com/TShirtChampions" class="contact-info-link">Facebook</a>' +
		'</div>' +
		'</div>' +
		'<div class="contact-info-block">' +
		'<div class="contact-info-icon"><i class="fa fa-instagram"></i></div>' +
		'<div class="contact-info-text"><a href="http://www.instagram.com/tshirtchampions" class="contact-info-link">Instagram</a></div>' +
		'</div>' +
		'<div class="contact-info-block">' +
		'<div class="contact-info-icon"><i class="fa fa-twitter"></i></div>' +
		'<div class="contact-info-text"><a href="http://www.twitter.com/TShirtChampions" class="contact-info-link">Twitter</a></div>' +
		'</div>' +
		'<div class="contact-info-block">' +
		'<div class="contact-info-icon"><i class="fa fa-linkedin"></i></div>' +
		'<div class="contact-info-text"><a href="http://www.linkedin.com/tshirtchampions" class="contact-info-link">LinkedIn</a></div>' +
		'</div>' +
		'</div>' +
		'</section>' +
		'</div>' +
		'<div class="grid-span-3 footer-column">' +
		'<section id="media_video-4" class="widget widget_media_video">' +
		'<h3 class="widget-title">Check Us In Action</h3>' +
		'<div style="width:100%;" class="wp-video"><!--[if lt IE 9]><script>document.createElement("video");</script><![endif]-->' +
		'<span class="mejs-offscreen">Video Player</span>' +
		'<div id="mep_0" class="mejs-container mejs-container-keyboard-inactive wp-video-shortcode mejs-video" tabindex="0" role="application" aria-label="Video Player" style="width: 255px; height: 143.438px; min-width: 217px;">' +
		'<div class="mejs-inner">' +
		'<div class="mejs-mediaelement">' +
		'<mediaelementwrapper id="video-5801-1">' +
		'<div id="video-5801-1-iframe-overlay" class="mejs-iframe-overlay"></div>' +
		'<iframe id="video-5801-1_youtube_iframe" frameborder="0" allowfullscreen="1" allow="autoplay; encrypted-media" title="YouTube video player" src="https://www.youtube.com/embed/Np_IJmLPuVE?controls=0&amp;rel=0&amp;disablekb=1&amp;showinfo=0&amp;modestbranding=0&amp;html5=1&amp;iv_load_policy=3&amp;autoplay=0&amp;end=0&amp;loop=0&amp;playsinline=0&amp;start=0&amp;nocookie=false&amp;enablejsapi=1&amp;origin=http%3A%2F%2Fjuicepluspromotionsbychampion.com&amp;widgetid=1" width="255" height="143.4375"></iframe>' +
		'<video class="wp-video-shortcode" id="video-5801-1_from_mejs" preload="metadata" src="https://www.youtube.com/watch?v=Np_IJmLPuVE&amp;_=1" style="width: 100%; height: 100%; display: none;">' +
		'<source type="video/youtube" src="https://www.youtube.com/watch?v=Np_IJmLPuVE&amp;_=1">' +
		'<a href="https://www.youtube.com/watch?v=Np_IJmLPuVE">https://www.youtube.com/watch?v=Np_IJmLPuVE</a>' +
		'</video>' +
		'</mediaelementwrapper>' +
		'</div>' +
		'<div class="mejs-layers">' +
		'<div class="mejs-poster mejs-layer" style="display: none; width: 100%; height: 100%;"></div>' +
		'<div class="mejs-overlay mejs-layer" style="width: 100%; height: 100%; display: none;">' +
		'<div class="mejs-overlay-loading">' +
		'<span class="mejs-overlay-loading-bg-img"></span>' +
		'</div>' +
		'</div>' +
		'<div class="mejs-overlay mejs-layer" style="display: none; width: 100%; height: 100%;">' +
		'<div class="mejs-overlay-error"></div>' +
		'</div>' +
		'<div class="mejs-overlay mejs-layer mejs-overlay-play" style="display: none; width: 100%; height: 100%;">' +
		'<div class="mejs-overlay-button" role="button" tabindex="0" aria-label="Play" aria-pressed="false"></div>' +
		'</div>' +
		'</div>' +
		'<div class="mejs-controls">' +
		'<div class="mejs-button mejs-playpause-button mejs-play">' +
		'<button type="button" aria-controls="mep_0" title="Play" aria-label="Play" tabindex="0"></button>' +
		'</div>' +
		'<div class="mejs-time mejs-currenttime-container" role="timer" aria-live="off">' +
		'<span class="mejs-currenttime">00:00</span>' +
		'</div>' +
		'<div class="mejs-time-rail">' +
		'<span class="mejs-time-total mejs-time-slider">' +
		'<span class="mejs-time-buffering" style="display: none;">' +
		'</span>' +
		'<span class="mejs-time-loaded"></span>' +
		'<span class="mejs-time-current" style="transform: scaleX(0);"></span>' +
		'<span class="mejs-time-hovered no-hover"></span>' +
		'<span class="mejs-time-handle" style="transform: translateX(0px);">' +
		'<span class="mejs-time-handle-content"></span>' +
		'</span>' +
		'<span class="mejs-time-float">' +
		'<span class="mejs-time-float-current">00:00</span>' +
		'<span class="mejs-time-float-corner"></span>' +
		'</span>' +
		'</span>' +
		'</div>' +
		'<div class="mejs-time mejs-duration-container">' +
		'<span class="mejs-duration">02:17</span>' +
		'</div>' +
		'<div class="mejs-button mejs-volume-button mejs-mute">' +
		'<button type="button" aria-controls="mep_0" title="Mute" aria-label="Mute" tabindex="0"></button>' +
		'<a href="javascript:void(0);" class="mejs-volume-slider" aria-label="Volume Slider" aria-valuemin="0" aria-valuemax="100" role="slider" aria-orientation="vertical" aria-valuenow="80" aria-valuetext="80%">' +
		'<span class="mejs-offscreen">Use Up/Down Arrow keys to increase or decrease volume.</span>' +
		'<div class="mejs-volume-total">' +
		'<div class="mejs-volume-current" style="bottom: 0px; height: 80%;"></div>' +
		'<div class="mejs-volume-handle" style="bottom: 80%; margin-bottom: -3px;">' +
		'</div>' +
		'</div>' +
		'</a>' +
		'</div>' +
		'<div class="mejs-button mejs-fullscreen-button">' +
		'<button type="button" aria-controls="mep_0" title="Fullscreen" aria-label="Fullscreen" tabindex="0"></button>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'</section>' +
		'</div>' +
		'</div>'
		//'</footer>'
	);
	$('#footer').attr('class', 'site-footer  footer grid-stretch footer-highlight-typo');
	$('#footer').attr('role', 'contentinfo');
	$('#footer').attr('itemscope', 'itemscope');
	$('#footer').attr('itemtype', 'http://schema.org/WPFooter');
	
	$('body').on("click", "button.menu-icon", function () {
		$("#wp_nav").toggle();
	});

	function triggerQuote() {
		$("#quote-callout .btn-primary").trigger('click');
	}

	if (window.location.hash == "#quote") {
		setTimeout(triggerQuote, 500);
	}

	$("div.item-price-wrap:contains('Requires Design')").css("display", "none");

	/* attempt to remove the word PRODUCTS from header of shop pages */

	var re = /products/gi;

	$('.page-header h1').contents().each(function () {
		console.log(this);
		if (this.nodeType === 3 && re.test(this.nodeValue)) {
			this.nodeValue = this.nodeValue.replace(re, '');
		}
	})


});