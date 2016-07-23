$(document).ready(function () {
  $('.flexslider').flexslider({
    animation: "slide",
    itemWidth: 1170,
    itemMargin: 5,
    pausePlay: true,
    start: function (slider) {
      $('body').removeClass('loading');
    }
  });
});