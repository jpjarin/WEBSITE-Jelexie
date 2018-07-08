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