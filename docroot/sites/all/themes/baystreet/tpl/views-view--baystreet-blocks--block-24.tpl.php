<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<h2 class="section_title"><?php echo $output->title; ?></h2>
<para class="less1 white"><?php echo $output->body['und'][0]['value']; ?></para>

<div class="clearfix margin_top7">&nbsp;</div>

<div class="one_half">
  <section class="slider nosidearrows_two">
    <div class="flexslider carousel">
      <ul class="slides">
        <?php foreach ($output->field_user_name['und'] as $key => $val): ?>
          <li>
            <div class="left">
              <div class="cimage"><img src="<?php echo file_create_url($output->field_user_image['und'][$key]['uri']); ?>" /></div>
            </div>

            <div class="right"><?php echo $output->field_user_desc['und'][$key]['value']; ?>
              <h5><?php echo $val['value']; ?>&nbsp<em><?php echo $output->field_user_designation['und'][$key]['value']; ?> - <strong><?php echo $output->field_user_employee['und'][$key]['value']; ?></strong></em></h5>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
</div>
<!-- end testimonials -->

<div class="one_half last">
  <ul class="clients">
    <?php foreach ($output->field_client_logo['und'] as $key => $val): ?>
      <li><img alt="" src="<?php echo file_create_url($val['uri']) ?>" /></li>
    <?php endforeach; ?>
  </ul>
</div>
<!-- end clients -->