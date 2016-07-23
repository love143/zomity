<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="container">
  <h2 class="section_title"><?php echo $output->title; ?></h2>
  <ul class="tabs2">
    <?php foreach ($output->field_offer_title['und'] as $key => $val): ?>
      <li><a href="#<?php echo trim(strtolower(str_replace(' ', '_', $val['value']))); ?>" target="_self"><?php echo $val['value']; ?></a></li>
    <?php endforeach; ?>
  </ul>
  <div class="tabs-content2">
    <?php
    foreach ($output->field_offer_title['und'] as $key => $val):
      $image = $output->field_offer_icons['und'][$key];
      $title = $val;
      $desc = $output->field_offer_desc['und'][$key];
      ?>
      <div class="tabs-panel2" id="<?php echo trim(strtolower(str_replace(' ', '_', $val['value']))); ?>">
        <img class="img_left2" src="<?php print file_create_url($image['uri']); ?>" />
        <para><?php echo $desc['value']; ?></para>
      </div>
    <?php endforeach; ?>
  </div>
</div>