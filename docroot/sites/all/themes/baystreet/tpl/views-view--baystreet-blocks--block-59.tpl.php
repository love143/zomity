<?php $rows = $view->result; ?>
<?php foreach ($rows as $key => $value): ?>
  <?php 
  $output = $value->_field_data['nid']['entity'];
	$usr_id = empty($output->last_comment_uid) ? 1 : $output->last_comment_uid;
	$usr = user_load($usr_id);
	$last = (($key+1) === count($rows)) ? "last" : ""; ?>
	<div class="one-fourth">
	  <div class="one_fourth <?php echo $last; ?>">
			<ul class="blogs2">
				<li>
					<a href="<?php echo url('node/'.$output->nid); ?>">
						<img src="<?php echo file_create_url($output->field_image['und'][0]['uri']); ?>" />
					</a>
				</li>
				<li>
					<h4 class="nocaps"><a href="<?php echo url('node/'.$output->nid); ?>" class="two"></a><a href="<?php echo url('node/'.$output->nid); ?>"><i class="fa fa-caret-right"></i>&nbsp;<?php echo $output->title; ?></a></h4>
				</li>
				<li>
					<i class="fa fa-clock-o"></i>&nbsp;<?php echo Date('F d, Y', $output->created); ?>&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;<?php echo '<a href="'.url("user/".$usr->uid).'">'.$usr->name.'</a>'; ?>&nbsp;&nbsp;<i class="fa fa-comment"></i>&nbsp;<?php echo $output->comment_count; ?>
				</li>
			</ul>
		</div>
	</div>
<?php endforeach; ?>