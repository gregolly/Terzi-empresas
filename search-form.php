<form role="search" method="get" id="searchform" action="<?php bloginfo('home'); ?>" class="searchform">
      <a href="#" class="search animated bounceInRight"><i class="fas fa-search"></i></a>
      <input class="search-input" type="text" name="s" id="s" value="<?= get_search_query(); ?>" class="form-control" placeholder="Buscar...">
      <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x('search', 'submit button') ?>">
</form>