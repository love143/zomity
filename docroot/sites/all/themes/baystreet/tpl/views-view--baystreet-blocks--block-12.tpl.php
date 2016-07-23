<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<h2 class="section_title"><?php echo $output->title; ?></h2>
<div class="one_third">
  <div class="pricings_home">
    <ul>
      <li class="title"><?php echo $output->field_basic_title['und'][0]['value']; ?></li>
      <li class="price"><sup>$</sup><?php echo $output->field_basic_price['und'][0]['value']; ?> <i>/month</i></li>
      <?php foreach ($output->field_basic_fields['und'] as $key => $val): ?>
        <li><?php echo $val['value']; ?></li>
      <?php endforeach; ?>
      <?php if ($output->field_basic_order_url['und'][0]['value']): ?>
        <li class="but"><a class="readmore_but3 nofloat" href="<?php echo $output->field_basic_order_url['und'][0]['value']; ?>">Order now</a></li>
      <?php endif; ?>
    </ul>
  </div>
</div>
<div class="one_third">
  <div class="pricings_home">
    <ul>
      <li class="title active"><?php echo $output->field_standard_title['und'][0]['value']; ?></li>
      <li class="price"><sup>$</sup><?php echo $output->field_standard_price['und'][0]['value']; ?> <i>/month</i></li>
      <?php foreach ($output->field_standard_fields['und'] as $key => $val): ?>
        <li><?php echo $val['value']; ?></li>
      <?php endforeach; ?>
      <?php if ($output->field_standard_order_url['und'][0]['value']): ?>
        <li class="but"><a class="readmore_but3 nofloat active" href="<?php echo $output->field_standard_order_url['und'][0]['value']; ?>">Order now</a></li>
      <?php endif; ?>
    </ul>
  </div>
</div>
<div class="one_third last">
  <div class="pricings_home">
    <ul>
      <li class="title"><?php echo $output->field_premium_title['und'][0]['value']; ?></li>
      <li class="price"><sup>$</sup><?php echo $output->field_premium_price['und'][0]['value']; ?> <i>/month</i></li>
      <?php foreach ($output->field_premium_fields['und'] as $key => $val): ?>
        <li><?php echo $val['value']; ?></li>
      <?php endforeach; ?>
      <?php if ($output->field_premium_order_url['und'][0]['value']): ?>
        <li class="but"><a class="readmore_but3 nofloat" href="<?php echo $output->field_premium_order_url['und'][0]['value']; ?>">Order now</a></li>
      <?php endif; ?>
    </ul>
  </div>
</div>

<div class="clearfix margin_top5">&nbsp;</div>

<div class="less2"><?php echo $output->body['und'][0]['value']; ?></div>
</br></br>
<?php if ($output->field_pricing_details_url['und'][0]['value']): ?>
  <para>
    <a class="readmore_but6" href="<?php echo $output->field_pricing_details_url['und'][0]['value']; ?>">know more about pricings</a>
  </para>
<?php endif; ?>
</br></br>
