<div class="page_title2">
<?php if ($tabs && 1!=1): ?><?php print render($tabs); ?><?php endif; ?>
<div class="container">
	<?php
		//if(!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
			//print render($tabs);
		//endif;
		if(drupal_get_title()){
			print '<div class="title"><h1>'.drupal_get_title().'</h1></div>';
		}
		//print 'Page title: '.render($content['field_show_page_title']);
	?>
    
    
    <div class="pagenation">
	<?php 
		if ($breadcrumb):
			print $breadcrumb;
		endif; 
	?>
	</div>
    
</div>
</div><!-- end page title --> 


<div class="clearfix"></div>
