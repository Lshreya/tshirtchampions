jQuery(document).ready(function($){
    //iframe resize and retain aspect ratio
    $('#body iframe').each(function(){
        var $thisIframe = $(this),
            $contentArea = $('.rf-paragraph '),
            iframeHeight = ($.isNumeric($thisIframe.attr('height'))) ? $thisIframe.attr('height'): 9, // if 100% will set ratio to 16:9
            iframeWidth = ($.isNumeric($thisIframe.attr('width'))) ? $thisIframe.attr('width'): 16,
			newHeight,
			contentWidth; // if 100% will set ratio to 16:9
        if(iframeHeight == 9) {
            iframeWidth = 16;
        }
        if(iframeWidth == 16) {
            iframeHeight = 9;
        }

        var ratio = iframeHeight / iframeWidth;

            contentWidth = $contentArea.width();
		if ($contentArea.length === 0) {
			contentWidth = iframeWidth;
		}
            newHeight = contentWidth * ratio;

        $thisIframe.attr('style','');
        $thisIframe.css('height',newHeight);
    });
});
var resizeTO = false;
jQuery(window).resize(function($){
    if(resizeTO !== false){
        clearTimeout(resizeTO);
    }
    resizeTO = setTimeout(function(){

        // Iframe resize
        $('#body iframe').each(function(){
            var $thisIframe = $(this),
                $contentArea = $('.rf-paragraph '),
                iframeHeight = ($.isNumeric($thisIframe.attr('height'))) ? $thisIframe.attr('height'): 9, // if 100% will set ratio to 16:9
                iframeWidth = ($.isNumeric($thisIframe.attr('width'))) ? $thisIframe.attr('width'): 16; // if 100% will set ratio to 16:9
            if(iframeHeight == 9) {
                iframeWidth = 16;
            }
            if(iframeWidth == 16) {
                iframeHeight = 9;
            }
            var ratio = iframeHeight / iframeWidth,
                contentWidth = $contentArea.width(),
                newHeight = contentWidth * ratio;

            $thisIframe.attr('style','');
            $thisIframe.css('height',newHeight);
        });
    }, 100);
});
