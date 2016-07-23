<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="text-widget">
	<p>
		<img src="<?php echo file_create_url($output->field_image['und'][0]['uri']); ?>" />
		<strong>- <?php echo $output->title; ?></strong>
	</p>
	<para class="mgb10"><?php echo !empty($output->body['und'][0]['value']) ? $output->body['und'][0]['value'] : $output->body['und'][0]['summary']; ?></para>
</div>