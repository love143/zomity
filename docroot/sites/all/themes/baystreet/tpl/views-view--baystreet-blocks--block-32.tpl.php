<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="one_third">
	<h3 class="ipages_title1"><?php echo $output->title; ?></h3>
	<?php echo $output->body['und'][0]['value']; ?>
</div>
<div class="one_third">
	<ul class="tabs3 two">
	<?php foreach($output->field_work_details_title['und'] as $key => $val): ?> 
		<?php $id = strtolower(str_replace(array(' ', '-'), '_', $val['value'])); ?>
		<li class=""><a href="#<?php echo $id; ?>" target="_self">Design</a></li>
	<?php endforeach; ?>
	</ul>
	<div class="tabs-content3">
		<?php foreach($output->field_work_details_title['und'] as $key => $val): ?> 
			<?php $id = strtolower(str_replace(array(' ', '-'), '_', $val['value'])); ?>
			<div id="<?php echo $id; ?>" class="tabs-panel3">
				<?php echo $output->field_work_details_desc['und'][$key]['value']; ?>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<div class="one_third last">
	<h3 class="ipages_title1"><?php echo $output->field_awards_title['und'][0]['value']; ?></h3>
	<ul class="list_4">
		<?php foreach($output->field_awards_summary['und'] as $val): ?>
		<li><i class="fa fa-arrow-circle-o-right"></i>&nbsp;<?php echo$val['value']; ?></li>
	<?php endforeach; ?>
	</ul>
</div>