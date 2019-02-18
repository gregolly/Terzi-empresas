<?php get_header('interno'); ?>


<div class="container-blog">
<h2 class="pesquisa">Você buscou por: <?php echo esc_html(get_query_var('s')); ?></h2>
 
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 

   
            <a href="<?php the_permalink(); ?>">
              <h4><?php the_title(); ?></h4>
                <div class="news-wrap-interno -first-news">
                  <?php the_post_thumbnail('blogs-img'); ?>
                  <div class="news-caption-interno">
                  <?php echo the_excerpt(); ?>
                    <div class="date"><?php the_time('d/m/y'); ?></div>
                    <?php the_category(', '); ?>
                  </div>
                </div>
                
            </a>
 
  <?php endwhile; else: ?>
  <?php endif; ?>
</div>
<?php get_sidebar(); ?> 

  

<?php 
if (function_exists('wp_bootstrap_pagination') ) wp_bootstrap_pagination();
?> 

<?php get_footer() ?>