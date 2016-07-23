<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<h2 class="section_title"><?php echo $output->title; ?></h2>
<div class="one_half">
  <div class="accrodation">
    <?php foreach ($output->field_feature_title['und'] as $key => $val): ?>
      <span class="acc-trigger"><a href="javascript:void(0)"><?php echo $val['value']; ?></a></span>
      <div class="acc-container">
        <div class="content"><?php echo $output->field_feature_desc['und'][$key]['value']; ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<div class="one_half last"><img alt="" class="img_right" src="<?php echo file_create_url($output->field_main_image['und'][0]['uri']); ?>" /></div>