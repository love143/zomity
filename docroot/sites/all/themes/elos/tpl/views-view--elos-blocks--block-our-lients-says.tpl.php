  <?php print render($title_prefix); ?>
<?php if ($header): ?>
      <?php print $header; ?>
  <?php endif; ?>
<?php if ($rows): ?>
<div id="main" role="main">
	<section class="slider">
		<div class="flexslider carousel">
	      <?php print $rows; ?>
		</div>
	</section>
</div>
<?php endif; ?>