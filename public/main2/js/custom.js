$(document).ready(function(){



// back to top

$('.top').click(function(){
	$("html,body").animate({
		scrollTop:0
	}, 1000);
});

$(window).scroll(function(){
	var ourWindow= $(this).scrollTop();
	if (ourWindow<100) {
		$('.top').fadeOut();
	}
	else{
		$('.top').fadeIn();
	}
});

});