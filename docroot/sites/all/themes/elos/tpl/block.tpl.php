<?php 
$out = '';
if ($block->region == 'sidebar_first' or $block->region == 'sidebar_second') { 
	$out .= '<div class="sidebar_widget '.$classes.'" id="'.$block_html_id.'" '.$attributes.'>';
		$out .= render($title_suffix);
		if ($block->subject && !empty($block->subject)):
			$out .= '<div class="sidebar_title">';
				$out .= '<h3>'.$block->subject.'</h3>';
			$out .= '</div>';
		endif;
		$out .= $content;
	$out .= '</div>';
	$out .= '<div class="clearfix margin_top4"></div>';
	
}elseif($block->region == 'content' || $block->region == 'section'){
	$out .= '<div id="'.$block_html_id.'" class="'.$classes.'" '.$attributes.'>';
		$out .= render($title_suffix);
		$out .= '<div class="container">';
			if ($block->subject){
				if($block->region == 'section')
					$out .= '<h2 class="ipages_title1" '.$title_attributes.'>'.$block->subject.'</h2><br />';
				else
					$out .= '<h2 class="section_title" '.$title_attributes.'>'.$block->subject.'</h2>';
			}
			$out .= $content;
		$out .= '</div>';
	$out .= '</div>';
	$out .= '<div class="clearfix"></div>';
	
}elseif($block->region == 'main_menu' || $block->region == 'top_bar_left' || $block->region == 'top_bar_right' || $block->region == 'slideshow'){
	if ($block->subject)
		$out .= '<h4 '.$title_attributes.'>'.$block->subject.'</h4>';
	$out .= $content;
}elseif($block->region == 'footer_col_one' || $block->region == 'footer_col_two' || $block->region == 'footer_col_three' || $block->region == 'footer_col_four' || $block->region == 'footer_col_five' || $block->region == 'footer_col_six' || $block->region == 'footer_col_seven' || $block->region == 'footer_col_eight'){
	if($block->region == 'footer_col_four' || $block->region == 'footer_col_eight')
		$c = 'last';
	else
		$c = '';
	$out .= '<div class="one_fourth '.$c.'">';
		$out .= '<div class="'.$classes.'" id="'.$block_html_id.'" '.$attributes.'>';
			$out .= render($title_suffix);
			if ($block->subject):
				$out .= '<h3 class="nocaps" '.$title_attributes.'>'.$block->subject.'</h3>';
			endif;
			$out .= $content;
		$out .= '</div>';
	$out .= '</div>';
}else{
	$out .= '<div id="'.$block_html_id.'" class="'.$classes.'" '.$attributes.'>';
		$out .= render($title_prefix);
		if ($block->subject):
			$out .= '<div class="content-header widget-header v3"><h4 '.$title_attributes.'>'.$block->subject.'</h4></div>';
		endif;
		$out .= $content;
	$out .= '</div>';
}
print $out;
?>