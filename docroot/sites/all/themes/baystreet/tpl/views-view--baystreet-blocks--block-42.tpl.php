<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="one_full">
<div class="big_text1"><?php echo $output->title; ?></div>
<para><?php echo $output->body['und'][0]['value']; ?></para>
<div class="clearfix divider_dashed2"></div>
<?php
  foreach ($output->field_flex_info_title['und'] as $key => $val):
    $image = $output->field_flex_info_icon_class['und'][$key]['value'];
    $title = $val['value'];
    $desc = $output->field_flex_info_desc['und'][$key]['value'];
    $class = (($key+1) == count($output->field_flex_info_title['und'])) ? "last" : "";
    ?>
    <div class="one_third <?php print $class; ?>">
			<ul class="fullimage_box2">
				<li><i class="fa <?php echo $image; ?> fa-3x"></i></li>
				<li><h3 class="nocaps"><?php print $title; ?></h3></li>
				<para><?php print $desc; ?></para>
			</ul>
		</div>
  <?php endforeach; ?>
</div>
<div class="clearfix margin_top6"></div>
<para><?php echo $output->body['und'][0]['summary']; ?></para>
<div class="clearfix divider_dashed6"></div>