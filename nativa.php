<?php get_header('interno'); 
//Template name: nativa
?>

<section class="container mina">
  <div class="wrap">
    <img src="<?php the_field('img-nativa'); ?>" alt="logo da mina azul"/>
    <p><?php the_field('texto-nativa'); ?></p>
  </div>
</section>


<?php get_footer('interno'); ?>