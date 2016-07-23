<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>

<div class="one_half"><img alt="" class="img_left" src="<?php echo file_create_url($output->field_main_image['und'][0]['uri']); ?>" /></div>

<div class="one_half last">
  <h2 class="section_title_drakgray"><?php echo $output->title; ?></h2>
  <?php echo $output->body['und'][0]['value']; ?>
  <div class="clearfix margin_top4">&nbsp;</div>
  <a class="readmore_but3" href="<?php echo drupal_get_path_alias('node/' . $output->nid); ?>">&nbsp; View All</a></div>
