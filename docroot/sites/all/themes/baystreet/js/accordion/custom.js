/* ---------------------------------------------------------------------- */
/*	Accordion
 /* ---------------------------------------------------------------------- */

(function () {

  var $container = $('.acc-container'),
          $trigger = $('.acc-trigger');

  $container.hide();
  $trigger.first().addClass('active').next().show();

  var fullWidth = $container.outerWidth(true);
  $trigger.css('width', fullWidth);
  $container.css('width', fullWidth);

  $trigger.on('click', function (e) {
    var _e = $(this);
    if (_e.hasClass('active')) {
      return false;
    }
    var _tmp = _e.siblings('.acc-trigger');
    _tmp.removeClass('active');
    _tmp.next().slideUp(300);
    _e.addClass("active").next().slideDown(300);
  });

  // Resize
  $(window).on('resize', function () {
    fullWidth = $container.outerWidth(true)
    $trigger.css('width', $trigger.parent().width());
    $container.css('width', $container.parent().width());
  });

})();
