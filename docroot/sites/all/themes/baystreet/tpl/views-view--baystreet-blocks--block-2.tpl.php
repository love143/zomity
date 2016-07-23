<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<h2 class="section_title"><?php echo $output->title; ?></h2>
<div class="root">
  <?php foreach ($output->field_process_icon_class['und'] as $key => $val): ?>
    <div class="one_fifth <?php echo (count($output->field_process_icon_class['und']) === ($key + 1)) ? "last" : ""; ?>">
      <i class="fa <?php echo $val['value']; ?>"></i>
      <h5 class="nocaps"><?php echo $output->field_process_title['und'][$key]['value']; ?></h5>
    </div>
  <?php endforeach; ?>
</div>
<!-- end root -->
<div class="clearfix margin_top4"></div>
<div class="left">
  <div class="circle"><?php echo $output->field_process_desc_left['und'][0]['value']; ?></div>
</div>
<div class="right">
  <div class="circle"><?php echo $output->field_process_desc_right['und'][0]['value']; ?></div>
</div>
