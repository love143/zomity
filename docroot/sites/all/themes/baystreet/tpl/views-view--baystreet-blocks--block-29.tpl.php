<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<h2 class="section_title"><?php echo $output->title; ?></h2>
<div class="left">
  <ul>
    <li class="icon"><i class="fa <?php echo $output->field_wyg_county_awes_class['und'][0]['value']; ?>"></i></li>
    <li>
      <h3><?php echo $output->field_wyg_county_title['und'][0]['value']; ?></h3>
    </li>
    <li>
      <?php echo $output->field_wyg_county_desc['und'][0]['value']; ?>
    </li>
  </ul>
  <div class="clearfix margin_top4">&nbsp;</div>
  <ul>
    <li class="icon"><i class="fa <?php echo $output->field_wyg_county_awes_class['und'][1]['value']; ?>"></i></li>
    <li>
      <h3><?php echo $output->field_wyg_county_title['und'][1]['value']; ?></h3>
    </li>
    <li>
      <?php echo $output->field_wyg_county_desc['und'][1]['value']; ?>
    </li>
  </ul>
</div>
<!-- end section -->
<div class="center" style="background: url('<?php echo file_create_url($output->field_main_image['und'][0]['uri']); ?>')"></div>
<!-- end center image -->
<div class="right">
  <ul>
    <li class="icon"><i class="fa <?php echo $output->field_wyg_county_awes_class['und'][2]['value']; ?>"></i></li>
    <li>
      <h3><?php echo $output->field_wyg_county_title['und'][2]['value']; ?></h3>
    </li>
    <li>
      <?php echo $output->field_wyg_county_desc['und'][2]['value']; ?>
    </li>
  </ul>
  <div class="clearfix margin_top4">&nbsp;</div>
  <ul>
    <li class="icon"><i class="fa <?php echo $output->field_wyg_county_awes_class['und'][3]['value']; ?>"></i></li>
    <li>
      <h3><?php echo $output->field_wyg_county_title['und'][3]['value']; ?></h3>
    </li>
    <li>
      <?php echo $output->field_wyg_county_desc['und'][3]['value']; ?>
    </li>
  </ul>
</div>
