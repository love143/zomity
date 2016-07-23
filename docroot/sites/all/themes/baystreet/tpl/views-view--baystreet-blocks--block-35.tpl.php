<?php $rows = $view->result; ?>
<?php foreach ($rows as $key => $val) { ?>
	<?php $last = (($key+1) === count($rows)) ? "last" : ""; ?>
	<?php $output = $val->_field_data['nid']['entity']; ?>
	<div class="one_fourth <?php echo $last; ?>">
	  <div class="box"><img alt="" src="<?php echo file_create_url($output->field_image['und'][0]['uri']); ?>"><h4><?php echo $output->title; ?></h4>
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
<?php } ?>