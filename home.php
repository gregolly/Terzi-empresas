<?php get_header('interno'); 

while(have_posts()) : the_post(); 
//Template name: Notícias

?>
<article class="news-flex-interno">
      <a href="<?php the_permalink(); ?>">
          <div class="news-wrap-interno -first-news">
            <?php the_post_thumbnail('news-thumbnail'); ?>
            <div class="news-caption-interno">
            <h4><?php the_title(); ?><?php the_excerpt('50'); ?></h4>
              <div class="date"><?php the_time('d/m/y'); ?></div>
              <?php the_category(', '); ?>
            </div>
          </div>
        </a>
</article>

<?php get_sidebar(); ?>
<?php endwhile; ?>

<?php get_footer() ?>