<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<h2 class="section_title"><?php echo $output->title; ?></h2>
<div class="two_third">
  <div class="clearfix margin_top7"></div>
  <ul class="tabs">
    <?php foreach ($output->field_what_title['und'] as $key => $val): ?>
      <li><a href="#<?php print trim(strtolower(str_replace(' ', '_', $val['value']))); ?>" target="_self"><?php print $val['value']; ?></a></li>
    <?php endforeach; ?>
  </ul>
  <div class="tabs-content">
    <?php
    foreach ($output->field_what_title['und'] as $key => $val):
      $desc = $output->field_what_desc['und'][$key];
      ?>
      <div id="<?php print trim(strtolower(str_replace(' ', '_', $val['value']))); ?>" class="tabs-panel">
        <?php print $desc['value']; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<div class="one_third last"><img src="<?php print file_create_url($output->field_main_image['und'][0]['uri']); ?>" alt="" class="lmage" /></div>