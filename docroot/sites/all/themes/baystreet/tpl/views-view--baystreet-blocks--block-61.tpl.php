<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<h1><?php echo $output->title; ?></h1>
<h4><?php $bdy = !empty($output->body['und'][0]['value']) ? $output->body['und'][0]['value'] : $output->body['und'][0]['summary']; echo substr(strip_tags($bdy), 0, 100); if(strlen(strip_tags($bdy)) > 100) echo '...'; ?></h4>
<p>
	<a href="/cart/add/p189?destination=/cart" class="readmore_but13">purchase now &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
</p>
