$(document).ready(function() {
						   
	var hash = window.location.hash.substr(1);
	var href = $('#navload li a').each(function(){
		var href = $(this).attr('href');
		if(hash==href.substr(0,href.length-5)){
			var toLoad = hash+'.html #contentload';
			$('#contentload').load(toLoad)
		}											
	});

	$('#navload li a').click(function(){
								  
		var toLoad = $(this).attr('href')+' #contentload';
		$('#contentload').hide('slow',loadContent);
		$('#load').remove();
		$('#wrapperload').append('<span id="load">LOADING...</span>');
		$('#load').fadeIn('normal');
		window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-5);
		function loadContent() {
			$('#contentload').load(toLoad,'',showNewContent())
		}
		function showNewContent() {
			$('#contentload').show('normal',hideLoader());
		}
		function hideLoader() {
			$('#load').fadeOut('normal');
		}
		return false;
		
	});

});