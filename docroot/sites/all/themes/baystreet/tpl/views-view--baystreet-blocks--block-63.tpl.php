<?php $rows = $view->result; ?>
<div>
  <section class="slider nosidearrows_two">
    <div class="flexslider carousel">
      <ul class="slides">
        <?php foreach ($rows as $key => $value): ?>
          <?php $output = $value->_field_data['nid']['entity']; ?>
          <li>
          	<div class="cimag">
          		<img src="<?php echo file_create_url($output->field_image['und'][0]['uri']); ?>" alt="" />
          	</div>
          	<br />
						<h5><?php echo $output->title; ?></h5>
						<div class="divider_line_small"></div>
						<para class="less1"><?php echo empty($output->body['und'][0]['value']) ? $output->body['und'][0]['summary'] : $output->body['und'][0]['value']; ?></para>
            <br />
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
</div>