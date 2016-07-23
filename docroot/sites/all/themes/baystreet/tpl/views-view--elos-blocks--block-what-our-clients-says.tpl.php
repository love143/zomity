  <?php print render($title_prefix); ?>
<?php if ($header): ?>
      <?php print $header; ?>
  <?php endif; ?>
<?php if ($rows): ?>
<section class="slider nosidearrows_two">
	<div class="flexslider carousel">
	      <?php print $rows; ?>
	</div>
</section>
<?php endif; ?>