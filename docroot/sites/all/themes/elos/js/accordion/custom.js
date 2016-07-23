	/* ---------------------------------------------------------------------- */
	/*	Accordion
	/* ---------------------------------------------------------------------- */
	
	(function() {

		var $container = $('.acc-container'),
			$trigger   = $('.acc-trigger');

		$container.hide();
		$trigger.first().addClass('active').next().show();

		var fullWidth = $container.outerWidth(true);
		$trigger.css('width', fullWidth);
		$container.css('width', fullWidth);
		
		$trigger.on('click', function(e) {
			if( $(this).next().is(':hidden') ) {
				$trigger.removeClass('active').parent("p").next().slideUp(300);
				$(this).toggleClass('active').parent("p").next().slideDown(300);
			}
			e.preventDefault();
			
			if( $(this).parent().next().is(':hidden') ) {
				$trigger.removeClass('active').parent("p").next().slideUp(300);
				$(this).toggleClass('active').parent("p").next().slideDown(300);
			}
		});

		// Resize
		$(window).on('resize', function() {
			fullWidth = $container.outerWidth(true)
			$trigger.css('width', $trigger.parent().width() );
			$container.css('width', $container.parent().width() );
		});

	})();
