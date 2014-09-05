$(document).ready(function() {
	// get current URL path and assign 'active' class
	var pathname = window.location.pathname;
	$('.nav > li > a[href="'+pathname+'"]').parent().addClass('active');
	$(function(){
		$('#menuJpg').booklet({
			closed: true, 
			width: '100%',
			pagePadding : 0
		});
		// var closed = $("#menuJpg").booklet( "option", "closed" );
		// var height = $("#menuJpg").booklet( "option", "height" );
		// $("#menuJpg").booklet( "option", "closed", true );
		// $("#menuJpg").booklet( "option", "height", 900 );
		
	
	});
})