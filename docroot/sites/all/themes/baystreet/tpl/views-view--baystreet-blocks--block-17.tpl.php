<ul class="footer_social_links">
  <?php foreach ($view->result as $key => $val): ?>
    <?php $output = $val->_field_data['nid']['entity']; ?>
    <li><a href="<?php echo $output->field_url['und'][0]['value']; ?>"><i class="fa <?php echo $output->field_icon['und'][0]['value']; ?>"></i></a></li>
      <?php endforeach; ?>
</ul>
