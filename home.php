<?php get_header('interno'); 

while(have_posts()) : the_post(); 
//Template name: Notícias

?>
<div class="container-blog">

  <article class="news-flex-interno">
        <a href="<?php the_permalink(); ?>">
        <div class="row">
          <h4><?php the_title(); ?></h4>
            <div class="news-wrap-interno -first-news">
              <?php the_post_thumbnail('blog-images'); ?>
              <div class="news-caption-interno">
              <?php echo the_excerpt(); ?>
                <div class="date"><?php the_time('d/m/y'); ?></div>
                <?php the_category(', '); ?>
              </div>
            </div>
        </div>      
        </a>
        
  </article>
  
  <?php get_sidebar(); ?>
</div>
<?php endwhile; ?>

  



<?php 
if (function_exists('wp_bootstrap_pagination') ) wp_bootstrap_pagination();
?> 

<?php get_footer() ?>