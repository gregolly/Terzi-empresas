<?php get_header('interno'); 
//Template name: consultoria
?>

<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>

<section class="container mina">
  <div class="wrap">
    <img src="<?php the_field('img-consultoria'); ?>" alt="logo da mina azul"/>
    <p><?php the_field('texto-consultoria'); ?></p>
    <?php the_content(); ?>
  </div>
</section>

<?php endwhile; else: endif; ?>

<?php get_footer('interno'); ?>