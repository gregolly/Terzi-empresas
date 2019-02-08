<?php while(have_posts()) : the_post(); ?>
<article class="news-flex">
      <a href="<?php the_permalink(); ?>">
          <div class="news-wrap -first-news">
            <?php the_post_thumbnail('news-thumbnail'); ?>
            <div class="news-caption">
              <h4><?php the_title(); ?></h4>
              <div class="date"><?php the_time('d/m/y'); ?></div>
              <p><?php the_excerpt(); ?></p>
              <?php the_category(', '); ?>
            </div>
          </div>
        </a>
    </article>
<?php endwhile; ?>