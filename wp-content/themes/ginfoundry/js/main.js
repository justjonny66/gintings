

// A $( document ).ready() block.
$( document ).ready(function() {
	$("a.link1, ul.gin-nav").hover(

	  
	  function(e){ 
	  $("ul.gin-nav").slideDown();
	  $(".logo a").css('transform', 'scale(' + .2 + ')');	  
	  }, // over
	  function(e){ 
	  $("ul.gin-nav").slideUp();
	  $(".logo a").css('transform', 'scale(' + 1 + ')');
	  }  // out
	  
	);
	
	$('.slider').slick({
		arrows: true,
		infinite: true,
		autoplay: false
	});
		
});