<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="container">
  <h2 class="section_title"><?php echo $output->title; ?></h2>
  <div class="accrodation">
    <?php foreach ($output->field_more_title['und'] as $key => $val): ?>
      <span class="acc-trigger"><a href="javascript:void(0);"><?php echo $val['value']; ?></a></span>
      <div class="acc-container">
        <div class="content"><?php echo $output->field_more_desc['und'][$key]['value']; ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</div>