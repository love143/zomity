<?php $rows = $view->result; ?>
<ul>
	<?php foreach ($rows as $key => $value): ?>
		<?php $output = $value->_field_data['nid']['entity']; ?>
		<li>
	    <a href="<?php echo url('node/' . $output->nid); ?>">
	    	<i class="fa fa-caret-right"></i><?php echo $output->title; ?>
	    </a>
	  </li>
	<?php endforeach; ?>
</ul>