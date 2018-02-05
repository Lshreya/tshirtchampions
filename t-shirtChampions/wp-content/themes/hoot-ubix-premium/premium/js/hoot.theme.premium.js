jQuery(document).ready(function($) {
	"use strict";

	/*** Lightbox ***/

	if( 'undefined' == typeof hootData || 'undefined' == typeof hootData.lightbox || 'enable' == hootData.lightbox ) {
		if (typeof $.fn.lightGallery != 'undefined') {

			// Add lightbox to Images
			if ( 'undefined' == typeof hootData.lightboxImg || 'enable' == hootData.lightboxImg ) {

				$('.woocommerce .entry.product > .images a').addClass('no-lightbox'); // Remove lightbox from woocommerce images, and let woo's lightbox take over

				$("a[href$='.jpg'], a[href$='.png'], a[href$='.jpeg'], a[href$='.gif']").each(function(i){
					var self    = $(this),
						href    = self.attr('href'),
						alt     = self.children('img').attr('alt'),
						title   = self.attr('title'),
						caption = '';
					self.attr('data-src', href);
					if(title)   caption += '<h4>'+title+'</h4>';
					if(alt)     caption += '<p>'+alt+'</p>';
					if(caption) caption = '<div class="customHtml">'+caption+'</div>';
					if(caption) self.attr('data-sub-html', caption);

					// Add lightbox if this is not a WordPress Gallery image, not a Jetpack Tiled Gallery or explicitly told not to use lightbox
					if(!self.parent('.gallery-icon').length && !self.parent('.tiled-gallery-item').length && !self.is('.no-lightbox')) {
						$("body").lightGallery({
							selector : this
						});
					}
				});

			}

			// Add lightbox to WordPress Gallery and Jetpack Tiled Gallery
			if ( 'undefined' == typeof hootData.lightboxWpGal || 'enable' == hootData.lightboxWpGal ) {
				$(".gallery").each(function(i){
					var galID = $(this).attr('id');
					$(this).lightGallery({
						selector : "#"+galID+" .gallery-icon > a[href$='.jpg'], #"+galID+" .gallery-icon > a[href$='.png'], #"+galID+" .gallery-icon > a[href$='.jpeg'], #"+galID+" .gallery-icon > a[href$='.gif']"
					});
				});
				$(".tiled-gallery").each(function(i){
					var galID = 'hoot-tiled-gallery-' + i;
					$(this).addClass( galID );
					$(this).lightGallery({
						selector : "."+galID+" .tiled-gallery-item > a[href$='.jpg'], ."+galID+" .tiled-gallery-item > a[href$='.png'], ."+galID+" .tiled-gallery-item > a[href$='.jpeg'], ."+galID+" .tiled-gallery-item > a[href$='.gif']"
					});
				});
			}

		}
	}

	/*** LightGallery (for brevity) ***/

	if( 'undefined' == typeof hootData || 'undefined' == typeof hootData.lightGallery || 'enable' == hootData.lightGallery ) {
		if (typeof $.fn.lightGallery != 'undefined') {
			$(".lightGallery").lightGallery();
		}
	}

	/*** Isotope for Archive Mosaic Type ***/

	if( 'undefined' == typeof hootData || 'undefined' == typeof hootData.isotope || 'enable' == hootData.isotope ) {
		if (typeof $.fn.isotope != 'undefined') {
			var $mosaic = $(".archive-mosaic").first().parent(),
				mosaic_relayout = function() { $mosaic.isotope( 'layout' ); };
			$mosaic.isotope({
				itemSelector: '.archive-mosaic'
			});
			//$(window).load(function() { $mosaic.isotope( 'layout' ); });
			$(window).load(mosaic_relayout); // bug fix for cases when images are without width/height atts
		}
	}

	/*** Number Boxes ***/

	var hootCircliful = function( $el ) {
		if (typeof $.fn.circliful != 'undefined') {
			$el.find(".number-block-circle").each(function(i){
				var $self = $(this),
				settings = {
					animation: 1,
					foregroundBorderWidth: 10,
					percent: 100,
					},
				selfData = $self.data(),
				customs = {};
				if ( selfData.foregroundcolor ) customs.foregroundColor             = selfData.foregroundcolor;
				if ( selfData.backgroundcolor ) customs.backgroundColor             = selfData.backgroundcolor;
				if ( selfData.fillcolor ) customs.fillColor                         = selfData.fillcolor;
				if ( selfData.foregroundborderwidth ) customs.foregroundBorderWidth = selfData.foregroundborderwidth;
				if ( selfData.backgroundborderwidth ) customs.backgroundBorderWidth = selfData.backgroundborderwidth;
				if ( selfData.fontcolor ) customs.fontColor                         = selfData.fontcolor;
				if ( selfData.percent ) customs.percent                             = selfData.percent;
				if ( selfData.animation ) customs.animation                         = selfData.animation;
				if ( selfData.animationstep ) customs.animationStep                 = selfData.animationstep;
				if ( selfData.icon ) customs.icon                                   = selfData.icon;
				if ( selfData.iconsize ) customs.iconSize                           = selfData.iconsize;
				if ( selfData.iconcolor ) customs.iconColor                         = selfData.iconcolor;
				if ( selfData.iconposition ) customs.iconPosition                   = selfData.iconposition;
				if ( selfData.percentagetextsize ) customs.percentageTextSize       = selfData.percentagetextsize;
				if ( selfData.textadditionalcss ) customs.textAdditionalCss         = selfData.textadditionalcss;
				if ( selfData.targetpercent ) customs.targetPercent                 = selfData.targetpercent;
				if ( selfData.targettextsize ) customs.targetTextSize               = selfData.targettextsize;
				if ( selfData.targetcolor ) customs.targetColor                     = selfData.targetcolor;
				if ( selfData.text ) customs.text                                   = selfData.text;
				if ( selfData.textstyle ) customs.textStyle                         = selfData.textstyle;
				if ( selfData.textcolor ) customs.textColor                         = selfData.textcolor;
				// WPHOOT MOD Values
				if ( selfData.percentsign ) customs.percentSign                     = selfData.percentsign;
				if ( selfData.displayprefix ) customs.displayPrefix                 = selfData.displayprefix;
				if ( selfData.displaysuffix ) customs.displaySuffix                 = selfData.displaysuffix;
				if ( selfData.display ) customs.display                             = selfData.display;
				// WPHOOT MOD Values end
				$.extend(settings,customs);
				$self.circliful(settings);
			});
		}
	};
	if( 'undefined' == typeof hootData || 'undefined' == typeof hootData.circliful || 'enable' == hootData.circliful ) {
		if (typeof Waypoint === "function") {
			var nbwaypoints = $('.number-blocks-widget').waypoint(function(direction) {
				if(direction=='down') {
					hootCircliful( $(this.element) );
					this.destroy();
				}
				},{offset: '75%'});
		} else {
			$('.number-blocks-widget').each( function(){
				hootCircliful($(this));
			});
		}
	}

	/*** Shortcodes ***/

	/* Toggles */
	if( 'undefined' == typeof hootData || 'undefined' == typeof hootData.scToggle || 'enable' == hootData.scToggle ) {
		$('.shortcode-toggle-head').click( function() {
			$( this ).siblings( '.shortcode-toggle-box' ).slideToggle( 'fast' );
			$( this ).toggleClass( 'shortcode-toggle-active' );
			$( this ).children( 'i' ).toggleClass( 'fa-plus fa-minus' );
		});
	}

	/* Tabset */
	if( 'undefined' == typeof hootData || 'undefined' == typeof hootData.scTabset || 'enable' == hootData.scTabset ) {
		$('.shortcode-tabset').each(function(i){
			var self    = $(this),
				nav     = self.find('.shortcode-tabset-nav > li'),
				box     = self.children('.shortcode-tabset-box'),
				tabs    = box.children('div');

			nav.click( function() {
				var navself = $(this),
					tabid   = navself.data('tab'),
					tabself = tabs.filter('[data-tab="'+tabid+'"]');

				tabs.removeClass('current');
				tabself.addClass('current');
				nav.removeClass('current');
				navself.addClass('current');
			});
		});
	}

	/* Scroller (Divider) */
	if( 'undefined' == typeof hootData || 'undefined' == typeof hootData.scScroller || 'enable' == hootData.scScroller ) {
		$('.shortcode-divider > a').on('click', function(e) {
			e.preventDefault();
			var target = $(this).attr('href');
			var destin = $(target).offset().top;
			if( target != '#page-wrapper')
				destin -= 50;
			$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destin}, 500 );
		});
	}

});