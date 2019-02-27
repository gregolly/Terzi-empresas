<?php get_header('interno'); 
//Template name: nativa
?>
<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>

<section class="container mina">
  <div class="wrap">
    <img src="<?php the_field('img-nativa'); ?>" alt="logo da mina azul"/>
    <p><?php the_field('texto-nativa'); ?></p>
    <?php the_content(); ?>
  </div>
</section>


<?php endwhile; else: endif; ?>

<?php get_footer('interno'); ?>