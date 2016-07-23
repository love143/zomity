<?php $rows = $view->result; ?>
<div class="item-list">
  <ul>
    <?php foreach ($rows as $key => $value): ?>
      <li class="views-row views-row-1 views-row-odd views-row-first">  
        <?php print l($value->taxonomy_term_data_name, 'taxonomy/term/' . $value->tid); ?>
      </li>      
    <?php endforeach; ?>
  </ul>
</div>