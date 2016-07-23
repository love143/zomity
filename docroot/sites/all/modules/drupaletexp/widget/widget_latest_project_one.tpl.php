<?php
	$terms = array();
	$vid = NULL;
	$vid_machine_name = 'categories_portfolio';
	$vocabulary = taxonomy_vocabulary_machine_name_load($vid_machine_name);
	if (!empty($vocabulary->vid)) {
	  $vid = $vocabulary->vid;
	}
	if (!empty($vid)) {
	  $terms = taxonomy_get_tree($vid);
	}
	if ($title){
		print '<h2 class="section_title" '.$title_attributes.'>'.$title.'</h2>';
	}
?>
<div class="container_full">
<div id="filters-container" class="cbp-l-filters-alignCenter">
	<button data-filter="*" class="cbp-filter-item-active cbp-filter-item">All</button>
	<?php foreach ($terms as $term): ?>
	<button data-filter=".tid-<?php print $term->tid; ?>" class="cbp-filter-item"><?php print $term->name; ?></button>
	<?php endforeach; ?>
</div>
<div id="grid-container" class="cbp-l-grid-projects">
	<ul>
		<?php foreach ($nodes as $node): ?>
		<?php $field_image = field_get_items('node', $node, 'field_image');?>
		<li class="cbp-item <?php print portfolio_format_terms('field_categories', $node); ?>">
			<div class="cbp-caption">
				<div class="cbp-caption-defaultWrap"><?php print theme('image_style', array('style_name' => 'large', 'path' => $field_image[0]['uri'])); ?></div>
				<div class="cbp-caption-activeWrap">
					<div class="cbp-l-caption-alignCenter">
						<div class="cbp-l-caption-body"><a href="<?php print url('node/' . $node->nid); ?>" class="cbp-l-caption-buttonLeft">more info</a><a href="http://placehold.it/800x600" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="<?php print $node->title; ?>">view larger</a></div>
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