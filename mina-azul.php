<?php get_header('interno'); 
//Template name: mina azul
?>

<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>

<section class="container mina">
  <div class="wrap">
    <img src="<?php the_field('img-mina-azul'); ?>" alt="logo da mina azul"/>
    <p><?php the_field('texto-mina-azul'); ?></p>
    <?php the_content(); ?>
  </div>
</section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>