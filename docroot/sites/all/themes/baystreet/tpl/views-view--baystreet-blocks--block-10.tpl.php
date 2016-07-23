<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<div class="container">
  <h2 class="section_title"><?php echo $output->title; ?></h2>
  <para><?php echo $output->body['und'][0]['value']; ?></para>
  </br>
  <ul class="fun_facts">
    <?php if (!empty($output->field_projects['und'][0]['value'])): ?>
      <li><strong class='timer'><?php echo $output->field_projects['und'][0]['value']; ?></strong><i>Projects</i></li>
    <?php endif; ?>
    <?php if (!empty($output->field_clients['und'][0]['value'])): ?>
      <li><strong class='timer'><?php echo $output->field_clients['und'][0]['value']; ?></strong><i>Clients</i></li>
    <?php endif; ?>
    <?php if (!empty($output->field_awards['und'][0]['value'])): ?>
      <li><strong class='timer'><?php echo $output->field_awards['und'][0]['value']; ?></strong><i>Awards</i></li>
    <?php endif; ?>
    <?php if (!empty($output->field_smiles['und'][0]['value'])): ?>
      <li><strong class='timer'><?php echo $output->field_smiles['und'][0]['value']; ?></strong><i>Smiles</i></li>
    <?php endif; ?>
    <?php if (!empty($output->field_likes['und'][0]['value'])): ?>
      <li><strong class='timer'><?php echo $output->field_likes['und'][0]['value']; ?></strong><i>Likes</i></li>
        <?php endif; ?>
    <li><strong><?php echo $output->field_support['und'][0]['value']; ?></strong><i>Support</i></li>
  </ul>
</div>
<script>
  (function ($) {
    $(document).ready(function () {
      $(".fun_facts").find('.timer').each(timer);
      function timer() {
        var e = $(this);
        var count = $(this).text() * 1;
        var t = (count - 1000 > 0) ? count - 1000 : 0;
        var _timer = setInterval(function () {
          e.text(t);
          if ((count - t) > 10) {
            t += 10;
          } else if (count === t) {
            clearInterval(_timer);
          } else {
            t += 1;
          }
        }, 50);
      }
    });
  })(jQuery);
</script>