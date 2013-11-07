$(document).ready(function() {
	$("#slideshow").css("overflow", "hidden");
	
	$("ul#slides").cycle({
		fx: 'fade',
		pause: 1,
		prev: '#prev',
		next: '#next'
	});
	
	$("#slideshow").hover(function() {
    	$("ul#nav").fadeIn();
    	$(".pic_banner").toggle();

   	},
  		function() {
    	$("ul#nav").fadeOut();
    	$(".pic_banner").fadeOut();

  	});
	
});