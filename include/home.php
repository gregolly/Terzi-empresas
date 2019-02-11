<?php get_header(); ?>

<?php 
while(have_posts()) : the_post(); 
//Template name: Notícias

?>
<article class="news-flex">
      <a href="<?php the_permalink(); ?>">
          <div class="news-wrap -first-news">
            <?php the_post_thumbnail('news-thumbnail'); ?>
            <div class="news-caption">
            <h4><?php the_title(); ?><?php the_excerpt(); ?></h4>
              <div class="date"><?php the_time('d/m/y'); ?></div>
              <?php the_category(', '); ?>
            </div>
          </div>
        </a>
</article>

<?php get_sidebar(); ?>
<?php endwhile; ?>

<?php get_footer('interno') ?>