<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="one_half">
	<h3 class="ipages_title1 two"><?php echo $output->title; ?></h3>
	<para><?php echo $output->body['und'][0]['value']; ?></para>
</div>
<div class="one_half last">
	<section class="slider nosidearrows">
    <div class="flexslider carousel">
			<ul class="slides">
				<li>
				<?php foreach($output->field_client_logos['und'] as $key => $val): ?>
					<?php echo (($key % 6) == 0 && $key > 0) ? '</li><li>' : ''; ?>
					<span class="img_left10 bckgnd-cn-cc-no" style="background-image: url('<?php echo file_create_url($val['uri']); ?>');"></span>
				<?php endforeach; ?>
				</li>
			</ul>
		</div>
	</section>
</div>