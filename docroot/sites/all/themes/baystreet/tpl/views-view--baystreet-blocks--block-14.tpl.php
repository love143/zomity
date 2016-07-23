<?php $output = $view->result[0]->_field_data['nid']['entity']; ?>
<ul class="address-info">
  <li><img alt="" src="<?php echo file_create_url($output->field_address_logo['und'][0]['uri']); ?>" /></li>
  <li><i class="fa fa-map-marker fa-lg"></i><para><?php echo $output->field_address['und'][0]['value']; ?></para></li>
<li><i class="fa fa-phone"></i><?php echo $output->field_phone['und'][0]['value']; ?></li>
<li><i class="fa fa-print"></i><?php echo $output->field_fax_number['und'][0]['value']; ?></li>
<li><a href="mailto:<?php echo $output->field_email['und'][0]['value']; ?>"><i class="fa fa-envelope"></i><?php echo $output->field_email['und'][0]['value']; ?></a></li>
</ul>
