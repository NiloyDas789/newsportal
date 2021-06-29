$(function () {
  $.scrollUp({
    scrollName: 'scrollUp', // Element ID
    topDistance: '300', // Distance from top before showing element (px)
    topSpeed: 300, // Speed back to top (ms)
    animation: 'slide', // Fade, slide, none
    animationInSpeed: 200, // Animation in speed (ms)
    animationOutSpeed: 200, // Animation out speed (ms)
    scrollText: '<i class="fa fa-chevron-up"></i>', // Text for element
    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
  });
});


//slider1 code here
$(document).ready(function(){
      var owl = $("#main_slider");
	  
      owl.owlCarousel({
		items:1,
		loop:true,
		nav: false,
		dots:false,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true	    
	});
     

	// Go to the next item
	$('.prev').click(function() {
		owl.trigger('next.owl.carousel');
	})
	// Go to the previous item
	$('.next').click(function() {
		owl.trigger('prev.owl.carousel');
	})
	    });
//slider2 code here
$(document).ready(function(){
      var owl = $("#main_slider2");
	  
      owl.owlCarousel({
		items:1,
		loop:true,
		nav: false,
		dots:false,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true	    
	});
     

	// Go to the next item
	$('.prev').click(function() {
		owl.trigger('next.owl.carousel');
	})
	// Go to the previous item
	$('.next').click(function() {
		owl.trigger('prev.owl.carousel');
	})
	    });
//slider3 code here
$(document).ready(function(){
      var owl = $("#main_slider3");
	  
      owl.owlCarousel({
		items:1,
		loop:true,
		nav: false,
		dots:false,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true	    
	});
     

	// Go to the next item
	$('.prev2').click(function() {
		owl.trigger('next.owl.carousel');
	})
	// Go to the previous item
	$('.next2').click(function() {
		owl.trigger('prev.owl.carousel');
	})
	// Go to the next item
	$('.prev3').click(function() {
		owl.trigger('next.owl.carousel');
	})
	// Go to the previous item
	$('.next3').click(function() {
		owl.trigger('prev.owl.carousel');
	})
	    });
//Special slider code here
$(document).ready(function(){
      var owl = $("#special_slider");
	  
      owl.owlCarousel({
		items:4,
		loop:true,
		nav: false,
		margin:20,
		autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:true	    
	});
     

	// Go to the next item
	$('.sprev').click(function() {
		owl.trigger('next.owl.carousel');
	})
	// Go to the previous item
	$('.snext').click(function() {
		owl.trigger('prev.owl.carousel');
	})
	 
	 
	
     
    });	
	
	 $(document).ready(function(){
		  $(".owl-carousel").owlCarousel();
		});
//tab code here	
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}