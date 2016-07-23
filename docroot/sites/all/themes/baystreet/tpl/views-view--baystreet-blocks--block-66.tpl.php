<?php $rows = $view->result; ?>
<ul class="three-col">
<?php foreach ($rows as $key => $val): ?>
  <?php $output = $val->_field_data['nid']['entity']; ?>
  <li>
    <i class="fa <?php echo $output->field_features_icon_class['und'][0]['value']; ?>"></i>
    <h5 class="nocaps"><?php echo $output->title; ?></h5>
    <para><?php echo $output->body['und'][0]['value']; ?></para>
  </li>
<?php endforeach; ?>
</ul>