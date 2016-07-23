<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<h2 class="section_title"><?php echo $output->title; ?></h2>
<para class="less1"><?php echo $output->body['und'][0]['value']; ?></para>

<div class="clearfix divider_line11">&nbsp;</div>

<?php $amazing_title = $output->field_amazing_title['und']; ?>
<?php $amazing_desc = $output->field_amazing_desc['und']; ?>

<div class="left">
  <h2><?php echo $amazing_title[0]['value']; ?></h2>
  <?php echo $amazing_desc[0]['value']; ?>
</div>
<!-- end section -->

<div class="center">
  <div class="topcont">
    <h2><?php echo $amazing_title[1]['value']; ?></h2>
    <p><?php echo $amazing_desc[1]['value']; ?></p>
  </div>
  <span class="botimg"><img alt="" src="<?php echo file_create_url($output->field_main_image['und'][0]['uri']); ?>" /></span>
</div>
<!-- end section -->

<div class="right">
  <div class="box1">
    <h2><?php echo $amazing_title[2]['value']; ?></h2>
    <p><?php echo $amazing_desc[2]['value']; ?></p>
  </div>

  <div class="box2">
    <h2><?php echo $amazing_title[3]['value']; ?></h2>
    <p><?php echo $amazing_desc[3]['value']; ?></p>
  </div>
</div>
<!-- end section -->