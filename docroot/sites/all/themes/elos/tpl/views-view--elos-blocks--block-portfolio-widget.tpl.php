<?php print render($title_prefix); ?>
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>

<div class="features_sec15 two">
	<div>
		<section class="slider nosidearrows">
			<div class="flexslider carousel"><?php print $rows; ?></div>
		</section>
	</div>
</div>
<?php endif; ?>