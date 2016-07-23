<?php $rows = $view->result; ?>
<div>
	<section class="slider nosidearrows">
		<div class="flexslider carousel">
      <ul class="slides">
        <?php foreach ($rows as $key => $value): ?>
          <?php $output = $value->_field_data['nid']['entity']; ?>
          <li>
            <i class="fa <?php echo $output->field_icon['und'][0]['value']; ?>"></i><br>
            <h4><?php echo $output->title; ?> <em> - <em class="placeholder"><?php echo format_interval(time()-$output->created) . 'ago'; ?></em> ago </em></h4>
            <para class="less1"><?php echo $output->body['und'][0]['value']; ?></para>
            <br>
            <br>  
            <a href="<?php echo url('node/'.$output->nid); ?>" target="_blank" class="readmore_but7 mgtb25">Read More</a>
            <br>
            <br>  
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
	</section>
</div>