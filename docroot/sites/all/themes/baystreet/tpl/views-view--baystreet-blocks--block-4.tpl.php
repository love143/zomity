<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="cont" id="block-banner-purchase">
	<?php print $output->body['und'][0]['value']; ?>
	<?php if(!empty($output->field_purchase_link)): ?>
      <a class="readmore_but2" href="<?php echo $output->field_purchase_link['und'][0]['value']; ?>?destination=/cart">purchase now</a></div>
    <?php endif; ?>
</div>
<?php if (!empty($output->field_main_image)): ?>
	<script>
		jQuery(document).ready(function() {
			var url = "<?php print file_create_url($output->field_main_image['und'][0]['uri']); ?>";
			jQuery("#block-banner-purchase").closest(".block").css({
				"background-image": "url("+url+")"
			});
		});
	</script>
<?php endif; ?>
