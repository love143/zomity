<?php $rows = $view->result; ?>
<?php foreach ($rows as $key => $value): ?>
	<?php $output = $value->_field_data['nid']['entity']; ?>
	<?php $last = (count($rows) == ($key+1)) ? "last" : ""; ?>
	<div class="one-third">
	  <div class="one_third <?php echo $last; ?>">
			<div class="box">
				<div class="icon"><img src="<?php echo file_create_url($output->field_image['und'][0]['uri']); ?>" /></div>
				<h2><?php echo $output->title; ?></h2>
				<para><?php echo $output->body['und'][0]['value']; ?></para>
				<br>
				<a href="<?php echo url('node/'.$output->nid); ?>">View details</a>
			</div>
		</div>
	</div>
<?php endforeach; ?>