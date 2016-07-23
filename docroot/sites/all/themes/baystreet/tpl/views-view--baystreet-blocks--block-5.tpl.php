<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<h2 class="section_title"><?php echo $output->title; ?></h2>
<para class="less1"><?php print $output->body['und'][0]['value']; ?></para>
<div class="content_box">
  <?php
  foreach ($output->field_flex_info_title['und'] as $key => $val):
    $image = $output->field_flex_info_icon_class['und'][$key]['value'];
    $title = $val['value'];
    $desc = $output->field_flex_info_desc['und'][$key]['value'];
    $class = ($key === 0) ? "left" : ($key === 1) ? "center" : "right";
    ?>
    <div class="<?php print $class; ?>">
      <h3 class="nocaps">
        <i class="fa <?php echo $image; ?>"></i><?php print $title; ?>
      </h3>
      <para><?php print $desc; ?></para>
    </div>
    <?php if ($class !== "right"): ?>
      <div class="vline">&nbsp;</div>
    <?php endif; ?>
  <?php endforeach; ?>
</div>