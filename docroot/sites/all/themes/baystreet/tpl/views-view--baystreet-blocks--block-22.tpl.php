<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="leftimg"><img alt="" class="img_left" src="<?php echo file_create_url($output->field_main_image['und'][0]['uri']); ?>" /></div>
<div class="right">
  <h2 class="section_title_drakgray"><?php echo $output->title; ?></h2>
  <?php foreach ($output->field_responsive_title['und'] as $key => $val): ?>
    <ul class="mh100">
      <li class="icon-self"><i class="fa background-image" style="background-image: url('<?php echo file_create_url($output->field_responsive_image['und'][$key]['uri']); ?>')"></i></li>
      <li>
        <h4><?php echo $val['value']; ?></h4>
        <?php echo $output->field_responsive_desc['und'][$key]['value']; ?>
      </li>
    </ul>
    <?php if (($key + 1) < count($output->field_responsive_title)): ?>
      <div class="clearfix">&nbsp;</div>
    <?php endif; ?>
  <?php endforeach; ?>
  <a class="readmore_but12" href="<?php echo drupal_get_path_alias('node/' . $output->nid); ?>">Read more</a> &nbsp; <a class="readmore_but12" href="<?php echo $output->field_responsive_buy_now['und'][0]['value']; ?>">Buy now!</a></div>
