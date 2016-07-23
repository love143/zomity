<?php $rows = $view->result; ?>
<div class="view-content">
	<?php foreach ($rows as $key => $value): ?>
		<?php $output = $value->_field_data['nid']['entity']; ?>
    <div class="one-half">
    	<div class="one_half">
				<div class="box">
					<img alt="" src="<?php echo file_create_url($output->field_image['und'][0]['uri']); ?>" />
					<h4><?php echo $output->title; ?></h4>
					<h6><?php echo $output->field_position['und'][0]['value']; ?></h6>
					<para class="mgb10"><?php echo !empty($output->body['und'][0]['value']) ? $output->body['und'][0]['value'] : $output->body['und'][0]['summary']; ?></para>	
					<ul>
						<li><a href="<?php echo $output->field_facebook['und'][0]['value']; ?>"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?php echo $output->field_twitter['und'][0]['value']; ?>"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?php echo $output->field_google_plus['und'][0]['value']; ?>"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="<?php echo $output->field_linkedin['und'][0]['value']; ?>"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>    
		</div>
	<?php endforeach; ?>
</div>