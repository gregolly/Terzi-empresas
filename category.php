<?php get_header('interno'); ?>


  


<?php if (is_active_sidebar('terzi-empresas-sidebar')) : ?>
<div class="container-blog">
<?php else : ?>
<div class="container-blog-full">
<?php endif;?>
<h2>Categoria</h2>
  <div class="row">
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
    <div class="container-direction-blog">
      <article class="news-flex-interno">
            <a href="<?php the_permalink(); ?>">
           
              <h4><?php the_title(); ?></h4>
                <div class="news-wrap-interno -first-news">
                  <?php the_post_thumbnail('medium'); ?>
                  <div class="news-caption-interno">
                  <?php echo the_excerpt(); ?>
                    <div class="date"><?php the_time('d/m/y'); ?></div>
                    <?php the_category(', '); ?>
                  </div>
                </div>
                
            </a>
      </article>
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