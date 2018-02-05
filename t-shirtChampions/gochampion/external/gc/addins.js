/*
**************************************************
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	 
	Goldcrest 51 - Inksoft Store JS Alterations
	for use with the 'Green Beans' theme
	created 6/27/16
	by Paul Gardino
	©2016 Champion Apparel, Awards, Promotions
	All rights reserved
	
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
**************************************************
*/


// This moves each product title from underneath the image to above. 

$('.ms-mp-title').ready(function(){
	$('.ms-mp-title').each(function() {
		$(this).parent().parent().find('.ms-mp-image').before($(this));
		console.log( "Moved." );	
	});
});

// This adds in the 'Powered by' block to the footer

var footerAdd = "<div id=\"poweredBy\" class=\"container\">	<a id=\"poweredLink\" href=\"tshirtchampions.com\" target=\"_blank\" title=\"Champion Custom Apparel, Awards, Promotions and More\"></a></div>";

$(footerAdd).prependTo("#footer"); 		



/* add favicons of all shapes and sizes ( from realfavicongenerator(.)net/ ) */

var head  = document.getElementsByTagName('head')[0];

var favIcons = "<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"http://tshirtchampions.com/gochampion/external/ilm/icons/apple-touch-icon-57x57.png\"><link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"http://tshirtchampions.com/gochampion/external/ilm/icons/apple-touch-icon-60x60.png\"><link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"http://tshirtchampions.com/gochampion/external/ilm/icons/apple-touch-icon-72x72.png\"><link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"http://tshirtchampions.com/gochampion/external/ilm/icons/apple-touch-icon-76x76.png\"><link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"http://tshirtchampions.com/gochampion/external/ilm/icons/apple-touch-icon-114x114.png\"><link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"http://tshirtchampions.com/gochampion/external/ilm/icons/apple-touch-icon-120x120.png\"><link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"http://tshirtchampions.com/gochampion/external/ilm/icons/apple-touch-icon-144x144.png\"><link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"http://tshirtchampions.com/gochampion/external/ilm/icons/apple-touch-icon-152x152.png\"><link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"http://tshirtchampions.com/gochampion/external/ilm/icons/apple-touch-icon-180x180.png\"><link rel=\"icon\" type=\"image/png\" href=\"http://tshirtchampions.com/gochampion/external/ilm/icons/favicon-32x32.png\" sizes=\"32x32\"><link rel=\"icon\" type=\"image/png\" href=\"http://tshirtchampions.com/gochampion/external/ilm/icons/android-chrome-192x192.png\" sizes=\"192x192\"><link rel=\"icon\" type=\"image/png\" href=\"http://tshirtchampions.com/gochampion/external/ilm/icons/favicon-96x96.png\" sizes=\"96x96\"><link rel=\"icon\" type=\"image/png\" href=\"http://tshirtchampions.com/gochampion/external/ilm/icons/favicon-16x16.png\" sizes=\"16x16\"><link rel=\"manifest\" href=\"http://tshirtchampions.com/gochampion/external/ilm/icons/manifest.json\"><link rel=\"mask-icon\" href=\"http://tshirtchampions.com/gochampion/external/ilm/icons/safari-pinned-tab.svg\" color=\"#d55b5b\"><link rel=\"shortcut icon\" href=\"http://tshirtchampions.com/gochampion/external/ilm/icons/favicon.ico\"><meta name=\"msapplication-TileColor\" content=\"#da532c\"><meta name=\"msapplication-TileImage\" content=\"http://tshirtchampions.com/gochampion/external/ilm/icons/mstile-144x144.png\"><meta name=\"msapplication-config\" content=\"http://tshirtchampions.com/gochampion/external/ilm/icons/browserconfig.xml\"><meta name=\"theme-color\" content=\"#ffffff\">";

$(favIcons).appendTo(head); 



//
