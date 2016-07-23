<?php $rows = $view->result; ?>
<section class="slider">
	<div class="flexslider carousel">
		<ul class="slides">
			<?php foreach ($rows as $key => $value): ?>
				<?php $output = $value->_field_data['nid']['entity']; ?>
				<li>  
	        <div class="diamond">
						<div class="content_div">
							<div class="client_img">
								<img src="<?php echo file_create_url($output->field_image['und'][0]['uri']); ?>" />
							</div>
							<h2 class="nocaps"><?php echo $output->title; ?></h2>
							<para><?php echo $output->body['und'][0]['value']; ?></para>
							<a href="<?php echo url('node/' . $output->nid); ?>" class="readmore_but5">Read more</a></div>
					</div>  
				</li>
			<?php endforeach; ?>
  	</ul>
	</div>
</section>