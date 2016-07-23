<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div>
  <h2 class="nocaps"><?php echo $output->title; ?></h2>
  <para><?php echo $output->body['und'][0]['summary']; ?></para>
  <div class="clearfix margin_top4"></div>
  <div class="big_text1"><?php echo $output->body['und'][0]['value']; ?></div>
</div>