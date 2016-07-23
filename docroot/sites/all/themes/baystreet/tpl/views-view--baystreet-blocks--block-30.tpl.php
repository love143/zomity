<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="one_half"><img alt="" class="img_left" src="<?php echo file_create_url($output->field_main_image['und'][0]['uri']); ?>" /></div>
<div class="one_half last">
  <h2 class="section_title section_title_drakgray bline"><?php echo $output->title; ?></h2>
  <ul>
    <li class="icon"><i class="fa <?php echo $output->field_succ_business_awes_class['und'][0]['value']; ?>"></i></li>
    <li class="text">
    <h3><?php echo $output->field_succ_business_title['und'][0]['value']; ?></h3>
    <?php echo $output->field_succ_business_desc['und'][0]['value']; ?>
    </li>
  </ul>
  <div class="clearfix divider_dashed1">&nbsp;</div>
  <ul>
    <li class="icon"><i class="fa <?php echo $output->field_succ_business_awes_class['und'][1]['value']; ?>"></i></li>
    <li class="text">
      <h3><?php echo $output->field_succ_business_title['und'][1]['value']; ?></h3>
      <?php echo $output->field_succ_business_desc['und'][1]['value']; ?>
    </li>
  </ul>
</div>
