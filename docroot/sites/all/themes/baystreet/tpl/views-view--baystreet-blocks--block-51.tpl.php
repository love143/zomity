<?php $output = $view->result; ?>
<?php
$categories = array();
$nodes = array();
foreach ($output as $val) {
  $node = $val->_field_data['nid']['entity'];
  $nodes[] = $node;
  foreach ($node->field_categories['und'] as $val) {
    $term = taxonomy_term_load($val['tid']);
    $categories[$node->nid][] = $term->name;
  }
}
?>
<div id="grid-container" class="cbp-l-grid-fullScreen cbp cbp-caption-overlayBottom cbp-animation-fadeOutTop">
  <ul class="cbp-wrapper">
  	<?php foreach ($nodes as $node): ?>
  		<?php $field_image = field_get_items('node', $node, 'field_image'); ?>
	    <li class="cbp-item">
	    	<div class="cbp-item-wrapper">  
	        <a href="<?php echo file_create_url($field_image[0]['uri']); ?>" class="cbp-caption cbp-lightbox" data-title="New Bridge">
						<div class="cbp-caption-defaultWrap">
							<?php print theme('image_style', array('style_name' => 'medium', 'path' => $field_image[0]['uri'])); ?>
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignLeft">
								<div class="cbp-l-caption-body">
									<div class="cbp-l-caption-title"><?php echo $node->title; ?></div>
									<div class="cbp-l-caption-desc"><?php echo implode(', ', $categories[$node->nid]); ?></div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</li>
	<?php endforeach; ?>
  </ul>
</div>