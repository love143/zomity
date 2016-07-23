<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<h2 class="section_title"><?php echo $output->title; ?></h2>
<?php $first = array(); ?>
<?php $second = array(); ?>
<?php $third = array(); ?>
<?php foreach ($output->field_awesome_title['und'] as $key => $val): ?>
  <?php $title = $val['value']; ?>
  <?php $desc = $output->field_awesome_desc['und'][$key]['value']; ?>
  <?php $img = $output->field_awesome_image['und'][$key]['uri']; ?>
  <div class="one_third <?php echo (($key + 1) === count($output->field_awesome_title['und'])) ? 'last' : ''; ?>">
    <div class="box"><img alt="" src="<?php echo file_create_url($img); ?>" />
      <h3><?php echo $title; ?></h3>
      <para><?php echo $desc; ?></para>
      <p><br /><a class="readmore_but11" href="<?php echo drupal_get_path_alias('node/' . $output->nid); ?>"><i class="fa fa-location-arrow"></i>&nbsp;Read more</a></p>
    </div>
  </div>
<?php endforeach; ?>