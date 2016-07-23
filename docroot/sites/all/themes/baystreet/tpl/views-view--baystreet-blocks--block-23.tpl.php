<?php $result = $view->result; ?>
<?php ?>
<?php foreach ($result as $key => $val): ?>
  <?php $output = $val->_field_data['nid']['entity']; ?>
  <div class="one_fourth <?php echo (($key + 1) === count($result)) ? "last" : ""; ?>">
    <div class="value"><?php echo $output->field_progress_value['und'][0]['value']; ?><em>%</em></div>
    <div class="clearfix">&nbsp;</div>
    <h4><?php echo $output->title; ?></h4>
    <?php echo $output->body['und'][0]['value']; ?>
  </div>
<?php endforeach; ?>