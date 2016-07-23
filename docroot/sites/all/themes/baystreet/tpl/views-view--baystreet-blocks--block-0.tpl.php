<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<h2 class="section_title"><?php echo $output->title; ?></h2>
<div class="one_half"><img src="<?php print file_create_url($output->field_main_image['und'][0]['uri']); ?>" alt="" class="lmage" /></div>
<div class="one_half last">
  <div class="rightsection">
    <?php foreach ($output->field_info_title['und'] as $key => $val): ?>
      <?php $class = ($key > 0) ? ($key == 1) ? "two" : "three" : ""; ?>
      <ul class="<?php print $class; ?>">
        <li class="icon"><i class="fa <?php echo $output->field_info_icon_class['und'][$key]['value']; ?>"></i></li>
        <li class="text">
          <h3 class="nocaps"><?php print $val['value']; ?></h3>
          <p><?php print $output->field_info_desc['und'][$key]['value']; ?></p>
        </li>
      </ul>
    <?php endforeach; ?>
  </div>
</div>