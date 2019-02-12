<?php

if (! is_active_sidebar('terzi-empresas-sidebar')) {
	return;
}

?>
<!-- sidebar -->
<aside class="aside-container">

<ul class="unstyled-list">
  <?php dynamic_sidebar('terzi-empresas-sidebar'); ?>
</ul>
</aside>
<!--/sidebar -->