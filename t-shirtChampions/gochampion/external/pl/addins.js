/*
**************************************************
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	 
	Porter Leath - Inksoft Store JS Alterations
	for use with the 'Green Beans' theme
	created 6/21/16
	by Paul Gardino
	©2016 Champion Apparel, Awards, Promotions
	All rights reserved
	
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
**************************************************
*/

// This moves each product title from underneath the image to above. 

$('.ms-mp-title').each(function() {
	$(this).parent().parent().find('.ms-mp-image').before($(this));
});


// This adds in the 'Powered by' block to the footer

var footerAdd = "<div id=\"poweredBy\" class=\"container\">	<a id=\"poweredLink\" href=\"tshirtchampions.com\" target=\"_blank\" title=\"Champion Custom Apparel, Awards, Promotions and More\"></a></div>";

$(footerAdd).prependTo("#footer"); 


//
