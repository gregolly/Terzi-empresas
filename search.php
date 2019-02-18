<?php get_header('interno'); ?>


<div class="container-blog">
<h2 class="pesquisa">Você buscou por: <?php echo esc_html(get_query_var('s')); ?></h2>
  
  <?php while(have_posts()) : the_post(); ?> 
    <div class="container-direction-blog">
    
  
  <?php endwhile; ?>
</div>  

  
  

</div>
<?php get_sidebar(); ?> 

  



<?php 
if (function_exists('wp_bootstrap_pagination') ) wp_bootstrap_pagination();
?> 

<?php get_footer() ?>