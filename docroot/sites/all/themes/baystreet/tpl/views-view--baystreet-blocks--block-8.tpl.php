<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<h2 class="section_title"><?php echo $output->title; ?></h2>
<para class="less1"><?php echo $output->body['und'][0]['value']; ?></para>
<p>&nbsp;</p>
<p><br /><img alt="" class="img_left" src="<?php print file_create_url($output->field_main_image['und'][0]['uri']); ?>" /></p>