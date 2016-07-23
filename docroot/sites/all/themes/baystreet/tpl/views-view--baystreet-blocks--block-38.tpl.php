<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="punchline_text_box">
	<div class="left"><strong><?php echo $output->title; ?></strong>
		<?php $etc = strlen(strip_tags($output->body['und'][0]['value'])) > 150 ? '...' : ''; ?>
		<para><?php echo substr(strip_tags($output->body['und'][0]['value']),0,150) . $etc; ?></para>
	</div>
	<div class="right"><a href="<?php echo url('/products/online-marketing-package'); ?>" class="knowmore_but"><i class="fa fa-hand-o-right fa-lg"></i> Know&nbsp;More</a></div>
</div>
