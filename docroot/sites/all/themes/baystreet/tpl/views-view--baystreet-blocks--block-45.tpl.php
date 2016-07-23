<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div>
  <ul class="tabs3">
    <?php foreach ($output->field_skill_title['und'] as $key => $val): ?>
      <li class="<?php echo ($key === 0) ? 'active' : ''; ?>"><a href="#<?php echo $key . str_replace(' ', '-', strtolower($val['value'])); ?>" target="_self"><?php echo $val['value']; ?></a></li>
    <?php endforeach; ?>
  </ul>
  <div class="tabs-content3">
    <?php foreach ($output->field_skill_title['und'] as $key => $val): ?>
      <div class="tabs-panel3" id="<?php echo $key . str_replace(' ', '-', strtolower($val['value'])); ?>">
        <?php echo $output->field_skill_desc['und'][$key]['value']; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>