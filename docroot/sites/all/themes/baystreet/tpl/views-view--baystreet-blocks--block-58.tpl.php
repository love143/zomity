<?php $rows = $view->result; ?>
<div>
  <section class="slider nosidearrows_two">
    <div class="flexslider carousel">
      <ul class="slides">
        <?php foreach ($rows as $key => $value): ?>
          <?php $output = $value->_field_data['nid']['entity']; ?>
          <li>
            <div class="left">
              <img src="<?php echo file_create_url($output->field_image['und'][0]['uri']); ?>" alt="" />
              <h5 class="nocaps"><?php echo $output->title; ?> <em>- <?php echo $output->field_position['und'][0]['value']; ?></em></h5>
            </div>
            <div class="right"><?php echo empty($output->body['und'][0]['value']) ? $output->body['und'][0]['summary'] : $output->body['und'][0]['value']; ?></div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
</div>