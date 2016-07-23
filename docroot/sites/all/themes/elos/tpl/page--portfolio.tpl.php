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
		
		//include page title
		
		
		include_once('page_title.tpl.php');
		
		if ($page['content'] || isset($messages)):
			if(drupal_is_front_page()) {
				unset($page['content']['system_main']['default_message']);
			}
			$content_class='';
			if (strip_tags(render($field_sidebar))=='Left'){
				$content_class = 'content_right';
			}else if(strip_tags(render($field_sidebar))=='Right'){
				$content_class = 'content_left';
			}
			
			print '<div class="content_fullwidth">';	
				print '<div class="container">';
				
					//Sidebar left
					if (strip_tags(render($field_sidebar))=='Left'){
						print '<div class="left_sidebar">';
							if ($page['sidebar_first']):
								print render($page['sidebar_first']);
							endif;
						print '</div>';
						
					}
					
					if(!empty($content_class))
						print '<div class="'.$content_class.'">';
						
						print $messages;
						print render($page['content']); 
					if(!empty($content_class))
						print '</div>';
					
					//Sidebar right
					if (strip_tags(render($field_sidebar))=='Right'){
						print '<div class="right_sidebar">';
							if ($page['sidebar_second']):
								print render($page['sidebar_second']);
							endif;
						print '</div>';
						
					}
				print '</div>';
			print '</div>';
		endif;
		if ($page['section']):
			print render($page['section']); 
		endif;
		
	?>

<div class="clearfix"></div>
	<?php include_once('footer.tpl.php');?>
</div>