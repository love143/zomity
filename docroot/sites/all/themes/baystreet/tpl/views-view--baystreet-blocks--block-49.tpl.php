<?php $rows = $view->result; ?>
<?php foreach ($rows as $key => $value): ?>
	<?php $output = $value->_field_data['nid']['entity']; ?>
	<?php $last = ($key+1 == count($rows)) ? "last" : ""; ?>
	<div class="one-fourth">
		<div class="one_fourth <?php echo $last; ?>">
			<i class="fa <?php echo $output->field_icon['und'][0]['value']; ?>"></i>
			<div class="clearfix"></div>
			<h3 class="nocaps"><?php echo $output->title; ?></h3>
			<para><?php echo $output->body['und'][0]['value']; ?></para>
			<a href="<?php echo url('node/'.$output->nid) ?>" class="readmore_but1">Read more +</a>
		</div>
	</div>
<?php endforeach; ?>