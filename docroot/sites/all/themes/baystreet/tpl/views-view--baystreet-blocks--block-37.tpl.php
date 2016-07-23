<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="one_third">
	<div class="circle_img circle_img_dr">
		<img src="<?php echo file_create_url($output->field_main_image['und'][0]['uri']); ?>">
	</div>
</div>
<div class="one_third">
	<h2>ABOUT ME</h2>
	<para><?php echo $output->body['und'][0]['value']; ?></para>
</div>
<div class="one_third last">
	<div class="biobox">
		<h5 class="nomb"><?php echo $output->title; ?></h5>
		<p><?php echo $output->field_position['und'][0]['value']; ?></p>
		<para><?php echo $output->body['und'][0]['summary']; ?></para>
	</div>
</div>