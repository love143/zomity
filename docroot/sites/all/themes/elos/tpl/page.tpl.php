<div class="site_wrapper site-class">
	<?php include_once('header.tpl.php');?>
	<?php
		if ($page['slideshow']):
	?>
		<div class="container_full">
			<div class="tp-banner-container">
				<div class="tp-banner" >
					<?php
						print render($page['slideshow']);
					?>
				</div>
			</div>
		</div>
	<?php
		endif;
		
		if ($page['content'] || isset($messages)):
			if(drupal_is_front_page()) {
				unset($page['content']['system_main']['default_message']);
			}
			
			print $messages;
			print render($page['content']); 
		endif;
		if ($page['section']):
			print render($page['section']); 
		endif;
		
	?>

<div class="clearfix"></div>
	<?php include_once('footer.tpl.php');?>
</div>
