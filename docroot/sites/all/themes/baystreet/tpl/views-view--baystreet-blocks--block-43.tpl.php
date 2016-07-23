<?php $rows = $view->result; ?>
<ul class="adsbanner-list">
	<?php foreach ($rows as $key => $value): ?>
		<?php $output = $value->_field_data['nid']['entity']; ?>
		<?php echo ($key%2 == 0 && $key > 0) ? "</ul><ul class='adsbanner-list'>" : "";?>
		<?php $last = ($key%2 == 1) ? "last" : ""; ?>
		<li class="<?php echo $last; ?>">
			<a href="<?php echo $output->field_ad_url['und'][0]['value']; ?>">
				<img src="<?php echo file_create_url($output->field_ad_images['und'][0]['uri']); ?>" alt="" />
			</a>
		</li>
	<?php endforeach; ?>
</ul>