new WOW().init();

//JQuery Sticky
 $(document).ready(function(){
    $("#navbar").sticky({topSpacing:0,zIndex:999});
  });

  $(window).on('load',function() {
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
     $('#category-view').load("assets/category/pastries.html");
  });

   $(document).ready(function() { 

  $('#pastries').click(function() {
          $('#category-view').load("assets/category/pastries.html");
          // it's important to return false from the click
          // handler in order to cancel the default action
          // of the link which is to redirect to the url and
          // execute the AJAX request
          event.preventDefault();
      });


     $('#breads').click(function() {
        $('#category-view').load("assets/category/breads.html");

        // it's important to return false from the click
        // handler in order to cancel the default action
        // of the link which is to redirect to the url and
        // execute the AJAX request
        event.preventDefault();
    });

    $('#ref-cakes').click(function() {
          $('#category-view').load("assets/category/ref-cakes.html");
          // it's important to return false from the click
          // handler in order to cancel the default action
          // of the link which is to redirect to the url and
          // execute the AJAX request
          event.preventDefault();
      });

});

 // $(document).ready(function(){
 //       // your on click function here
 //       $('#products-list .flex-viewport a').on('click tap',function(){
 //           $('#product-view').load($(this).attr('href'));
 //       });
 //       return false;
 //    });

   //jQuery for page scrolling feature - requires jQuery Easing plugin
  // $(function() {
  //   $('#products-list .flex-viewport a').on('click', function(event) {
  //     var $anchor = $(this);
  //     $('html, body').stop().animate({
  //       scrollTop: $($anchor.attr('href')).offset().top
  //     }, 1500, 'easeInOutExpo');
  //     event.preventDefault();
  //   });
  // });


  $(document).ready(function(){
   $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: true,
    controlNav: false,
    keyboard: false,
    itemWidth: 210,
    itemMargin: 5,
    minItems: 2,
    maxItems: 4,
    easing: "swing",
    slideshowSpeed: 1500000,
    animationSpeed: 1500,
    touch: true
  });
});