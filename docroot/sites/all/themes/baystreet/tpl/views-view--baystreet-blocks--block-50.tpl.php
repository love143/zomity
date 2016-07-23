<?php $rows = $view->result; ?>
<?php foreach ($rows as $key => $value): ?>
	<?php $output = $value->_field_data['nid']['entity']; ?>
	<?php $last = ($key+1 == count($rows)) ? "last" : ""; ?>
	<div class="one-fourth">
		<div class="one_fourth <?php echo $last; ?> <?php echo $output->field_class['und'][0]['value']; ?>">
			<div class="boxsec">
				<img typeof="foaf:Image" src="<?php echo file_create_url($output->field_image['und'][0]['uri']); ?>" alt=""/>
				<h3><?php echo $output->title; ?></h3>
				<para><?php echo $output->body['und'][0]['value']; ?></para>
			</div>
			<a href="<?php echo url('node/'.$output->nid) ?>" class="readmore_but2">Read more</a>
		</div>
	</div>
<?php endforeach; ?>