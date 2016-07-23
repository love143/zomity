
  <?php print render($title_prefix); ?>
<?php if ($header): ?>
      <?php print $header; ?>
  <?php endif; ?>
<?php if ($rows): ?>


<div class="features_sec20 lessmt">
	<div id="grid-container" class="cbp-l-grid-projects">
		<?php print $rows; ?>
	</div>
</div>
  <?php endif; ?>