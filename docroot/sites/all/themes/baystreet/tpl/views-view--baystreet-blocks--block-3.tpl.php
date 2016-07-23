<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="two_third">
  <?php print $output->body['und'][0]['value']; ?>

  <p>
    <span class="clearfix divider_dashed1"></span>
    <?php if (!empty($output->field_learn_link)): ?>
      <a class="readmore_but3 img_left3" href="<?php echo $output->field_purchase_link['und'][0]['value']; ?>">Learn more</a>
    <?php endif; ?>
    <?php if (!empty($output->field_purchase_link)): ?>
      <a class="readmore_but4" href="<?php echo $output->field_purchase_link['und'][0]['value']; ?>">purchase now!</a>
    <?php endif; ?>
  </p>
</div>
<div class="one_third last"><!-- <img src="<?php print file_create_url($output->field_main_image['und'][0]['uri']); ?>" alt="" class="lmage" /> --></div>