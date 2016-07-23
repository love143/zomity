<?php

/**
 * @file
 * Default theme implementation to display a node.
 */
global $base_root;
$style = 'blog'; //image style
if($node->field_image){
	$imageone = $node->field_image['und'][0]['uri']; 
}else{
	$imageone = '';
}
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> blog_post" <?php print $attributes; ?>>
	<div class="blog_postcontent">
		<div class="image_frame">
		<?php if (!empty($node->field_image['und']) && count($node->field_image['und']) > 1){ ?>
			
			<ul>
				<?php 
					//print_r($node->field_image['und']);
					foreach ($node->field_image['und'] as $img): 
					?>
					<li><?php print theme('image_style', array('style_name' => $style, 'path' => $img['uri'], 'attributes' => array('class' => 'attachment-single-thumb-large'))); ?></li>
				<?php endforeach; ?>
			</ul>
		
		<?php }else{?>
		<a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print theme('image', array('path' => $imageone));?></a>
		<?php
		}
		?>
		</div>
		<a href="" class="date"><strong><?php print format_date($node->created, 'custom', 'd');?></strong><i><?php print format_date($node->created, 'custom', 'M');?></i></a>
		<h3><a href=""><?php print $title; ?></a></h3>
		<ul class="post_meta_links">
			<li class="post_by"><?php print $node->name?>&nbsp;</li>
			<li class="post_categoty"><?php print strip_tags(render($content['field_categories_blog']))?>&nbsp;</li>
			<li class="post_comments"><a href="#"><?php print $comment_count.' comments'?></a></li>
			
		</ul>
		<div class="post_info_content">
			<?php
				hide($content['comments']); 
				hide($content['links']); 
				hide($content['field_tags']); 
				hide($content['field_image']); 
				hide($content['field_categories']); 
				
				print render($content);
			?>
		</div>
		<div class="clearfix margin_top5"></div>
		<div class="tagged-content clearfix" style="clear:both;">
			<span style="float:left;"><?php print t('Tagged');?>:&nbsp;</span> <?php print render($content['field_tags']);?>
		</div>
	</div>
</div>
<!-- /# end post -->
<div class="clearfix divider_dashed9"></div>

<?php
	$nids = db_query("SELECT n.nid FROM {node} n WHERE n.status = 1 AND n.type = :type AND n.nid <> :nid ORDER BY RAND() LIMIT 0,5", array(':type' => 'blog', ':nid' => $node->nid))->fetchCol();
	
	$nodes = node_load_multiple($nids);
	
	if (!empty($nodes)): 
?>
<div class="">
	<div class="popular-posts-area">
		<h4><?php print t('Recent Posts')?></h4>
		<ul class="recent_posts_list">
			<?php foreach ($nodes as $node) : ?>
				<?php $field_image = field_get_items('node', $node, 'field_image'); ?>
			<li><span><a href="<?php print url('node/' . $node->nid);?>"><?php print theme('image_style', array('style_name' => 'thumbnail', 'path' => $field_image[0]['uri'])); ?></a></span><a href="<?php print url('node/' . $node->nid);?>"><?php print $node->title?></a><i><?php print format_date($node->created, 'custom', 'M d, Y');?></i></li>
			<?php
				endforeach;
			?>
		</ul>
	</div>
</div>
<?php
	endif;
?>

<!-- end popular posts -->
<div class="clearfix divider_dashed9"></div>
<?php print render($content['comments']); ?>

<div class="clearfix divider_dashed9"></div>