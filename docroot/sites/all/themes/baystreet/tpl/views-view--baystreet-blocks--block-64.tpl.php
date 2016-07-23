<?php $rows = $view->result; ?>
<?php foreach ($rows as $key => $value): ?>
	<?php $output = $value->_field_data['nid']['entity']; ?>
	<?php $last = ($key+1 == count($rows)) ? "last" : ""; ?>
	<div class="one-third">
		<div class="one_third <?php echo $last; ?>">
			<div class="boxsec">
				<img src="<?php echo file_create_url($output->field_image['und'][0]['uri']); ?>"/>
				<h3><?php echo $output->title; ?></h3>
				<para><?php echo $output->body['und'][0]['value']; ?></para>
			</div>
			<a href="<?php echo url('node/'.$output->nid) ?>" class="readmore_but2">Read more</a>
		</div>
	</div>
<?php endforeach; ?>