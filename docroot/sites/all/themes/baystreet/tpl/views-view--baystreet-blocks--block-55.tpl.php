<?php $rows = $view->result; ?>
<?php foreach ($rows as $key => $value): ?>
	<?php $output = $value->_field_data['nid']['entity']; ?>
	<div class="views-row views-row-<?php echo ($key*1+1); ?> one-third">
		<div class="one_third">
			<ul>
				<li class="icon"><i class="fa <?php echo $output->field_icon['und'][0]['value']; ?>"></i></li>
				<li class="text">
					<h3 class="nocaps"><?php echo $output->title; ?></h3>
					<para><?php echo $output->body['und'][0]['value']; ?></para>
				</li>
			</ul>
		</div>
	</div>
<?php endforeach; ?>