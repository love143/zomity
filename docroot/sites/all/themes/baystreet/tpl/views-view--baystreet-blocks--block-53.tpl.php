<?php $rows = $view->result; ?>
<div class="view-content">
	<?php foreach ($rows as $key => $value): ?>
		<?php $output = $value->_field_data['nid']['entity'];
			$usr_id = empty($output->last_comment_uid) ? 1 : $output->last_comment_uid;
			$usr = user_load($usr_id);
	 	?>
  	<div class="one-third">
	    <div class="one_third">
	    	<div class="hblog">
	    		<img src="<?php echo file_create_url($output->field_image['und'][0]['uri']); ?>" />
					<div class="content2">
						<h5 class="nocaps"><a href="<?php echo '/node/'.$output->nid; ?>"><?php echo $output->title; ?></a></h5>
						<span class="date"> 
						by 
						<?php echo '<a href="'.url("user/".$usr->uid).'">'.$usr->name.'</a>'; ?> | <?php echo 'Posted: ',format_interval(time()-$output->created),' ago'; ?> </span><span class="comments"><i class="fa fa-comment"></i>&nbsp;<?php echo $output->comment_count; ?> comments &nbsp;&nbsp;in &nbsp; <?php echo render(field_view_field('node', $output, 'field_categories_blog', array('label'=>'hidden'))); ?></span>
						<para><?php echo str_ireplace('<p>Read More...</p>', '' , $output->body['und'][0]['safe_summary']); ?></para>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>