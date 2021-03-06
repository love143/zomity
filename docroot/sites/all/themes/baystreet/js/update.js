// JavaScript Document

$(document).ready(function () {
  $("#defaultmenu > ul li").each(function () {
    $(this).addClass('dropdown');
    //$(this).find("a").attr('data-toggle','dropdown');
    $(this).find("a").addClass('dropdown-toggle');
  });
  $("#defaultmenu > ul li ul").removeClass("nav navbar-nav");
  $("#defaultmenu > ul li ul").addClass('dropdown-menu');
  $("#defaultmenu > ul li ul").attr('role', 'menu');

  $("#defaultmenu > ul li").hover(function () {
    $(this).addClass('open');
  }, function () {
    $(this).removeClass('open');
  });

  //add class "last" to last columns
  $(".container").each(function () {
    $("div[class^='one-']:last-child > div[class^='one_']:last-child").addClass('last');
  });

 function mycarousel_initCallback(carousel) {
    
        // Pause autoscrolling if the user moves with the cursor over the clip.
        carousel.clip.hover(function() {
            carousel.stopAuto();
        }, function() {
            carousel.startAuto();
        });
 };
 
 if (jQuery('#mycarouselthree').length) {
    jQuery('#mycarouselthree').jcarousel({
	scroll: 1,
        auto: 3,
        wrap: 'circular',
        initCallback: mycarousel_initCallback
	
    });
  }

  
  if (jQuery(".views-row-3").length) {
    jQuery(".views-row-3").find("div.one_third").addClass("last");
  }
  if (jQuery(".views-row-6").length) {
    jQuery(".views-row-6").find("div.one_third").addClass("last");
  }

});
