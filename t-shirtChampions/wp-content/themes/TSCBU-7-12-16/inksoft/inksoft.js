$(document).ready(function(){
	$("#header-wrap").remove();
	$(".header-topbar").after(
		'<div id="wp_header" class="container">' + 
		'	<div id="wp_header_content" class="col24 columns">' + 
		'		<img class="contact responsive-image" src="https://www.tshirtchampions.com/wp-content/themes/t-shirt-champions/images/tchamp_number_tag.png" alt="contact us">' + 
		'		<div id="wp_utility" class="opensb">' + 
		'			<a href="http://design.tshirtchampions.com/TSC/Account">My Account</a><span>&nbsp;|&nbsp;</span>' +
		'			<a class="cart" href="http://design.tshirtchampions.com/TSC/Cart">View Cart</a>' + 
		'			<div class="clear"></div>' + 
		'		</div>' + 
		'		<a id="wp_logo" class="responsive-image" href="https://www.tshirtchampions.com/"><img src="https://www.tshirtchampions.com/wp-content/themes/t-shirt-champions/images/logo2.png" alt="Tshirt Champions"></a>' + 
        '       <a id="mobile_logo" class="" href="/"><img src="https://www.tshirtchampions.com/wp-content/themes/t-shirt-champions/images/logo-mobile.png" alt="Tshirt Champions"></a>' + 
        '        <div class="title-bar" data-responsive-toggle="nav" data-hide-for="medium" style="display: none;">' +
        '        <button class="menu-icon" type="button" data-toggle=""></button>' +
        '            <div class="title-bar-title">Menu</div>' +
        '        </div>' +
        '        <ul id="wp_nav">' +
        '            <li id="wp_nav_start_designing">' +
        '            <a href="https://www.tshirtchampions.com/start-designing/"><span class="robotb">Start</span><br><span class="bebas">Designing</span></a>' +
        '            </li>' +
        '            <li id="wp_nav_design_library">' +
        '            <a href="http://design.tshirtchampions.com/TSC/Designs"><span class="robotb">Design</span><br><span class="bebas">Library</span></a>' +
        '            </li>' +
        '            <li id="wp_nav_faqs">' +
        '            <a href="https://www.tshirtchampions.com/helpful-resources/"><span class="robotb">Help</span><br><span class="bebas">Center</span></a>' +
        '            </li>' +
        '            <li id="wp_nav_t-shirt_shop">' +
        '            <a href="https://www.tshirtchampions.com/t-shirt-shop/"><span class="robotb">T-Shirt</span><br><span class="bebas">Shop</span></a>' +
        '            </li>' +
        '        </ul>' +
		'	</div>' + 
        '</div>' +
        '<div class="tab"></div>'
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
		'	<li><a href="https://www.tshirtchampions.com/design-library/">Design Library</a></li>'+
		'	<li><a href="https://www.tshirtchampions.com/helpful-resources/">FAQs</a></li>'+
		'	<li><a href="https://www.tshirtchampions.com/t-shirt-shop/">T-Shirt Shop</a></li>'+
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
});