$(document).ready(function() {
	 $(window).scroll(function () {
		
		if ($(window).scrollTop() > 80) {
		  $('.nav-top').addClass('navbar-fixed-top').removeClass('drop');
		}
		if ($(window).scrollTop() < 81) {
		  $('.nav-top').removeClass('navbar-fixed-top');
		  $('.nav-top').addClass('drop');
		}
	});
   
	// get current URL path and assign 'active' class
	var pathname = window.location.pathname;
	$('.nav > li > a[href="'+pathname+'"]').parent().addClass('active');
	$(function(){
		$('#menuJpg').booklet({
			// closed: true, 
			width: '100%',
			height:800,
			pagePadding : 0
		});
	

		// var closed = $("#menuJpg").booklet( "option", "closed" );
		// var height = $("#menuJpg").booklet( "option", "height" );
		// $("#menuJpg").booklet( "option", "closed", true );
		// $("#menuJpg").booklet( "option", "height", 900 );
	});
	$('#specials').click(function (e) {
  		e.preventDefault()
  		$(this).tab('show')
  		$(this).addClass('active')
	})
	$('#events').click(function (e) {
  		e.preventDefault()
  		$(this).tab('show')
  		$(this).parent(addClass('active'))
	})
	$('#reviews').click(function (e) {
  		e.preventDefault()
  		$(this).tab('show')
  		$(this).addClass('active')
	})

});