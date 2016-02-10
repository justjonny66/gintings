

// A $( document ).ready() block.
$( document ).ready(function() {
	
	/*$("ul > li").hover(function() {

	  $('.logo').css('transform', 'scale(' + 0.7 + ')');

	});*/
	
	$('#yes').click(function() {
		$('.verification').fadeOut();
	});
	
	$('.slider').slick({
		arrows: true,
		infinite: true,
		autoplay: true
	});
	
	$('.first').hover(function () {
	    $('.logo a').css({
	    '-webkit-transform': 'scale(0.5)',
	    '-moz-transform': 'scale(0.5)',
	    '-o-transform': 'scale(0.5)'
		});
	
	  }, function () {
	    $('.logo a').css({
	    '-webkit-transform': 'scale(1)',
	    '-moz-transform': 'scale(1)',
	    '-o-transform': 'scale(1)'
	});
	  }
	);
		
});