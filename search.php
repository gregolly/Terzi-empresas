<?php get_header('interno'); ?>

<?php if (is_active_sidebar('terzi-empresas-sidebar')) : ?>
<div class="container-blog">
<?php else : ?>
<div class="container-blog-full">
<?php endif;?>
<h2 class="pesquisa">Você buscou por: <?php echo esc_html(get_query_var('s')); ?></h2>
 	<div class="row">
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 

   
            
              <a href="<?php the_permalink(); ?>">
                <div class="news-wrap-interno -first-news">
		<h4><?php the_title(); ?></h4>
                  <?php the_post_thumbnail('large'); ?>
		</a>
                  <div class="news-caption-interno">
                  <?php echo the_excerpt(); ?>
                    <div class="date"><?php the_time('d/m/y'); ?></div>
                    <?php the_category(', '); ?>
                  </div>
                </div>
                
            
 
  <?php endwhile; else: ?>
  <?php endif; ?>
	</div>
</div>
<?php get_sidebar(); ?> 

  

<?php 
if (function_exists('wp_bootstrap_pagination') ) wp_bootstrap_pagination();
?> 

<?php get_footer() ?>