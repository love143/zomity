<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="one_half">
  <div class="one_half"><img src="<?php echo file_create_url($output->field_main_image['und'][0]['uri']); ?>" alt="" class="img_size1"></div>
</div>
<div class="one_half last">
  <h2 class="nocaps"><?php echo $output->title; ?></h2>
  <?php echo $output->body['und'][0]['value']; ?>
</div>