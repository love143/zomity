<div class="footer1">
	<div class="container">
		<?php
			if($page["footer_col_one"]):
				print render($page["footer_col_one"]);
			endif;
			if($page["footer_col_two"]):
				print render($page["footer_col_two"]);
			endif;
			if($page["footer_col_three"]):
				print render($page["footer_col_three"]);
			endif;
			if($page["footer_col_four"]):
				print render($page["footer_col_four"]);
			endif;
		?>
		<div class="clearfix divider_line3"></div>
		<?php
			if($page["footer_col_five"]):
				print render($page["footer_col_five"]);
			endif;
			if($page["footer_col_six"]):
				print render($page["footer_col_six"]);
			endif;
			if($page["footer_col_seven"]):
				print render($page["footer_col_seven"]);
			endif;
			if($page["footer_col_eight"]):
				print render($page["footer_col_eight"]);
			endif;
		?>
	</div>
</div>
<!-- end footer -->
<div class="clearfix"></div>
<div class="copyright_info">
	<div class="container">
		<div class="one_half"><?php print theme_get_setting('footer_copyright_message', 'elos'); ?></div>
		<div class="one_half last" style="float:right">
			<?php
			if($page["footer_right"]):
				print render($page["footer_right"]);
			endif;
		?>
		</div>
	</div>
</div>
<!-- end copyright info -->
<a href="#" class="scrollup">Scroll</a>
<!-- end scroll to top of the page-->

<?php
	include_once('switcher.tpl.php');
?>