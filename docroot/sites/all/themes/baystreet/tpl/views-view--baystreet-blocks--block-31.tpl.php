<?php $rows = $view->result; ?>
<?php $output = $rows[0]->_field_data['nid']['entity']; ?>
<div class="one_fourth">
  <i class="fa <?php echo $output->field_tkf_awesome_class['und'][0]['value']; ?>"></i>
  <h5 class="nocaps"><?php echo $output->field_tfk_captions['und'][0]['value']; ?></h5>
  <h2 class="nocaps"><?php echo $output->title; ?></h2>
  <?php echo $output->body['und'][0]['value']; ?>
  <p><br /><a class="readmore_but9" href="<?php echo url('node/' . $output->nid); ?>">Read More</a></p>
</div>
<?php $output = $rows[1]->_field_data['nid']['entity']; ?>
<div class="one_half">
  <div class="center">
    <h5 class="nocaps"><?php echo $output->field_tfk_captions['und'][0]['value']; ?></h5>
    <h2 class="nocaps"><?php echo $output->title; ?></h2>
    <?php echo $output->body['und'][0]['value']; ?>
    <p><br /><a class="readmore_but10" href="<?php echo url('node/' . $output->nid); ?>">Read More</a></p>
  </div>
</div>
<?php $output = $rows[2]->_field_data['nid']['entity']; ?>
<div class="one_fourth last">
  <i class="fa <?php echo $output->field_tkf_awesome_class['und'][0]['value']; ?>"></i>
  <h5 class="nocaps"><?php echo $output->field_tfk_captions['und'][0]['value']; ?></h5>
  <h2 class="nocaps"><?php echo $output->title; ?></h2>
  <?php echo $output->body['und'][0]['value']; ?>
  <p><br /><a class="readmore_but9" href="<?php echo url('node/' . $output->nid); ?>">Read More</a></p>
</div>