<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="one_half">
  <h2 class="ipages_title1"><?php echo $output->title; ?></h2>
  <?php echo $output->body['und'][0]['value']; ?>
</div>
<div class="one_half last">
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