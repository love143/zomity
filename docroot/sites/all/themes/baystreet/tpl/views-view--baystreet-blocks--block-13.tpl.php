<div class="clients">
  <div class="container">
    <ul class="jcarousel-skin-tango" id="mycarouselthree">
      <?php foreach ($view->result as $key => $val): ?>
        <?php $output = $val->_field_data['nid']['entity']; ?>
        <li><img src="<?php echo file_create_url($output->field_main_image['und'][0]['uri']); ?>" /></li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
