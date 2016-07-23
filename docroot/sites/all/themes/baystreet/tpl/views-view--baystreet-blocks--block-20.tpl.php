<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<h2 class="section_title"><?php echo $output->title; ?></h2>
<para><?php echo $output->body['und'][0]['value']; ?></para>
<div class="hvideo">
	<?php print render(field_view_field('node', $output, 'field_video_url', array('label'=>'hidden'))); ?>
</div>