<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
 
 global $base_root;
 
?>
<div class="content_fullwidth">
	<div class="portfolio_area">
		<div class="portfolio_area_left">
			<?php 
				if (!empty($content['field_image'])){
					hide($content['field_image']);
					$field_image = field_get_items('node', $node, 'field_image');
					if (!empty($node->field_image['und']) && count($node->field_image['und']) == 1){ // 1 image
						print theme('image', array('path' => $field_image[0]['uri']));
					}else{
		
						print '<div class="porDetCarousel">';
							print '<div class="carousel-content">';
								foreach ($field_image as $img):
									print theme('image', array('path' => $img['uri'], 'attributes'=>array('class'=>'carousel-item')));
								endforeach;
							print '</div>';
						print '</div>';
					}
				}
				
				print '<p>&nbsp;</p><h3>'.$title.'</h3>';
				print $body[0]['value'];
			?>
			
		</div>
		<div class="portfolio_area_right">
			<!--<h3><?php //print $title;?></h3>-->
			
			<?php
				$body = field_get_items('node', $node, 'body');
				hide($content['comments']);
				hide($content['field_image']);
				hide($content['body']);
				hide($content['field_categories']);
				hide($content['field_url']);
				hide($content['field_facebook']);
				hide($content['field_twitter']);
				hide($content['field_google_plus']);
				hide($content['field_linkedin']);
				hide($content['field_pinterest']);
				//print $body[0]['value'];
				//print '<p>&nbsp;</p>';
				//print render($content);
			?>
			
			
			<div class="project_details" style="margin:0px;">
				<h4><?php print t('Project Details');?></h4>
				<span><strong><?php print t('Date');?></strong><em><?php print format_date($node->created, 'custom', 'M d, Y');?></em></span><span><strong><?php print t('Categories');?></strong><em><?php print widget_format_terms('field_categories', $node); ?></em></span>
				<div class="clearfix margin_top5"></div>
				
				
			
				</div>
				
				<a href="#" class="addto_favorites"><i class="fa fa-heart"></i>&nbsp; <?php print t('Add to Favorites');?></a>
			<ul class="small_social_links">
				<li><a href="<?php print strip_tags(render($content['field_facebook']));?>"><i class="fa fa-facebook"></i></a></li>
				<li><a href="<?php print strip_tags(render($content['field_twitter']));?>"><i class="fa fa-twitter"></i></a></li>
				<li><a href="<?php print strip_tags(render($content['field_google_plus']));?>"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="<?php print strip_tags(render($content['field_linkedin']));?>"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="<?php print strip_tags(render($content['field_pinterest']));?>"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<br/><br/>
			<a href="<?php print strip_tags(render($content['field_url']));?>" class="but_goback"><i class="fa fa-hand-o-right fa-lg"></i> <?php print t('Visit Site');?></a>
				
		</div>
	</div>
	<!-- end section -->
</div>


<div class="clearfix margin_top7"></div>