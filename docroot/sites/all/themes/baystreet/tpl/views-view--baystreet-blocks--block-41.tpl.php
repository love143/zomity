<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="box_widget_full">
	<i class="fa fa-shopping-cart fa-4x"></i>
	<h3 class="nocaps"><?php echo $output->title; ?></h3>
	<?php $etc = strlen(strip_tags($output->body['und'][0]['value'])) > 150 ? '...' : ''; ?>
	<para><?php echo substr(strip_tags($output->body['und'][0]['value']),0,150) . $etc; ?></para>
</div>