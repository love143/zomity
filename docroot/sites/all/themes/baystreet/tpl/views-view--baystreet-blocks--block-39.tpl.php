<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="container">
	<?php foreach ($output->field_ms_title['und'] as $key => $value): ?>
		<?php $last = (($key+1) == count($output->field_ms_title['und'])) ? "last" : "";
      switch ($key) {
        case 1:
          $class = 'two';
          break;
        case 2:
          $class = 'three';
          break;
        case 3:
          $class = 'four';
          break;
        default:
          $class = 'one';
      }
      ?>
		<div class="one_fourth <?php echo $last; ?>">
			<div class="pie_progress skillgraph <?php echo $class; ?>" role="progressbar" data-goal="<?php echo $output->field_ms_value['und'][$key]['value']; ?>" data-thickness="10">
				<i class="fa <?php echo $output->field_ms_awesome_class['und'][$key]['value']; ?> pie_progress__label"></i>
			</div>
			<h4 class="nocaps"><?php echo $value['value']; ?></h4>
		</div>
<?php endforeach; ?>
</div>
<?php $jquery = "(function($){ $(document).ready(function() { $('.pie_progress').asPieProgress({
  namespace: 'pie_progress',
  speed: 35,
  easing: 'linear',
  thickness: 2.5
}).asPieProgress('start'); }); })(jQuery);"; 
drupal_add_css(path_to_theme() . "/js/animated-circle/css/progress.css", array('type' => 'file', 'scope' => 'header', 'weight' => 50));
drupal_add_js(path_to_theme() . "/js/animated-circle/js/asPieProgress.js", array('type' => 'file', 'scope' => 'footer', 'weight' => 50));
drupal_add_js($jquery, array('type' => 'inline', 'scope' => 'footer', 'weight' => 51));
?>