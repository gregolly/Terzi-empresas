<?php get_header('interno'); 
//Template name: consultoria
?>

<section class="container mina">
  <div class="wrap">
    <img src="<?php the_field('img-consultoria'); ?>" alt="logo da mina azul"/>
    <p><?php the_field('texto-consultoria'); ?></p>
  </div>
</section>


<?php get_footer('interno'); ?>