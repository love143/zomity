<?php $output = $view->result; ?>
<?php
$categories = array('*' => 'All');
$nodes = array();
foreach ($output as $val) {
  $node = $val->_field_data['nid']['entity'];
  $nodes[] = $node;
  foreach ($node->field_categories['und'] as $val) {
    $term = taxonomy_term_load($val['tid']);
    $categories['tid-' . $term->tid] = $term->name;
  }
}
?>
<div class="container_full">
  <div id="filters-container" class="cbp-l-filters-alignCenter">
    <?php foreach ($categories as $key => $val): ?>
      <?php
      $pre = ($key === '*') ? '' : '.';
      $class = ($key === '*') ? 'cbp-filter-item-active' : '';
      ?>
      <button data-filter="<?php print $pre . $key; ?>" class="cbp-filter-item <?php echo $class; ?>"><?php print $val; ?></button>
    <?php endforeach; ?>
  </div>
  <div id="grid-container" class="cbp-l-grid-projects two">
    <ul>
      <?php foreach ($nodes as $node): ?>
        <?php $field_image = field_get_items('node', $node, 'field_image'); ?>
        <li class="cbp-item <?php print portfolio_format_terms('field_categories', $node); ?>">
          <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap"><?php print theme('image_style', array('style_name' => 'large', 'path' => $field_image[0]['uri'])); ?></div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body"><a href="<?php print url('node/' . $node->nid); ?>" class="cbp-l-caption-buttonLeft">more info</a><a href="<?php echo file_create_url($field_image[0]['uri']); ?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="<?php print $node->title; ?>">view larger</a></div>
              </div>
            </div>
          </div>
          <div class="threeborder">
            <div class="cbp-l-grid-projects-title"><?php print $node->title; ?></div>
            <div class="cbp-l-grid-projects-desc"><?php print widget_format_terms('field_categories', $node); ?></div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>