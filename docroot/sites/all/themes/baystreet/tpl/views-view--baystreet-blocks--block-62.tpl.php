<?php $rows = $view->result; ?>
<?php foreach ($rows as $key => $value): ?>
  <?php $output = $value->_field_data['nid']['entity'];
	$last = (($key+1) === count($rows)) ? "last" : ""; ?>
	<div class="one-third">
	  <div class="one_third <?php echo $last; ?>"><i class="fa <?php echo $output->field_icon['und'][0]['value']; ?>"></i>
			<div class="clearfix"></div>
			<h2><?php echo $output->title; ?></h2>
			<para><?php echo $output->body['und'][0]['value']; ?></para>
			<br>
			<a href="<?php echo url('node/'.$output->nid); ?>" class="readmore_but1">View Details</a>
		</div>
	</div>
<?php endforeach; ?>