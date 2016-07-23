<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<h2 class="section_title"><?php echo $output->title; ?></h2>
<div class="container split-items twohalf">
  <?php foreach ($output->field_wwo_title['und'] as $key => $val): ?>
    <ul class="split-item">
      <li class="icon"><i class="fa <?php echo $output->field_wwo_icon_class['und'][$key]['value']; ?>"></i></li>
      <li class="text">
        <h4><?php echo $val['value']; ?></h4>
        <?php echo $output->field_wwo_desc['und'][$key]['value']; ?>
      </li>
    </ul>
  <?php endforeach; ?>
</div>