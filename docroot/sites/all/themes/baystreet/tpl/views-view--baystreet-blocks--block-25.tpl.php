<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<h2 class="section_title"><?php echo $output->title; ?></h2>
<div class="two_third">
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

<div class="one_third last">
  <div class="pro_bar">
    <?php foreach ($output->field_skill_service_percent['und'] as $key => $val): ?>
      <?php
      $id = $key;
      switch ($key) {
        case 1:
          $class = 'two';
          break;
        case 2:
          $class = 'three';
          break;
        case 3:
          $class = 'four';
          break;
        case 4:
          $class = 'five';
          break;
        default:
          $id = '';
          $class = '';
      }
      ?>
      <h5><?php echo $output->field_skill_service_title['und'][$key]['value']; ?></h5>
      <div class="ui-progress-bar ui-container" id="progress_bar<?php echo $id; ?>">
        <div class="ui-progress <?php echo $class; ?>"><span class="ui-label"><b class="value"><?php echo $val['value']; ?>%</b></span></div>
      </div>
      <p>&nbsp;</p>
    <?php endforeach; ?>
  </div>
</div>