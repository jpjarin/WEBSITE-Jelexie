new WOW().init();

//JQuery Sticky
 $(document).ready(function(){
    $("#navbar").sticky({topSpacing:0,zIndex:999});
  });

  $(document).ready(function() {
	    $('.breadcrumb').css({"opacity":"100"});
      $('#product-page').css({'opacity':'100','animation-delay':'0.4s'});
	    $('.breadcrumb').addClass('animated fadeIn');
       $('#product-page').addClass('animated fadeIn');
	});
  // $(window).on('load',function() {
  //     $('.breadcrumb').css({"opacity":"100"});
  //     $('#product-page').css({'opacity':'100','animation-delay':'0.4s'});
  //     $('.breadcrumb').addClass('animated fadeIn');
  //      $('#product-page').addClass('animated fadeIn');
  // });

  $(document).ready(function(){
   $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: true,
    controlNav: false,
    itemWidth: 210,
    itemMargin: 5,
    minItems: 2,
    maxItems: 4,
    easing: "swing",
    slideshowSpeed: 10000,
    touch: true
  });
});