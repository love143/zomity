<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<h2 class="section_title"><?php echo $output->title; ?></h2>
<div class="content_box" id="block-our-services">
  <?php
  foreach ($output->field_services_title['und'] as $key => $val):
    $image = $output->field_services_icons['und'][$key];
    $title = $val;
    $desc = $output->field_services_desc['und'][$key];
    $class = (count($output->field_services_title['und']) === ($key + 1)) ? "last" : "";
    ?>
    <div class="one_fourth <?php echo $class; ?>">
      <div class="box">
        <div class="image">
          <div>
            <i class="fa background-image-nbg" style="background-image: url('<?php print file_create_url($image['uri']); ?>')"></i>
            <h4 class="nocaps"><?php print $title['value']; ?></h4>
          </div>
        </div>
        <div class="text">
          <div>
            <i class="fa background-image-nbg" style="background-image: url('<?php print file_create_url($image['uri']); ?>')"></i>
            <h4 class="nocaps"><?php print $title['value']; ?></h4>
            <?php print $desc['value']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<?php if (!empty($output->field_main_image)): ?>
  <script>
    (function ($) {
      $(document).ready(function () {
        var url = "<?php print file_create_url($output->field_main_image['und'][0]['uri']); ?>";
        $("#block-our-services").closest(".block").css({
          "background-image": "url(" + url + ")"
        });
        $(".text").mouseover(function () {
          $(this).siblings(".image").find("i").css({
            display: 'none'
          });
        }).mouseout(function () {
          $(this).siblings(".image").find("i").css({
            display: 'block'
          });
        });
      });
    })(jQuery);
  </script>
<?php endif; ?>