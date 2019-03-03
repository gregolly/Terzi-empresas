<?php get_header('interno'); 
//Template name: consultoria
?>

<section class="container mina">
  <div class="wrap">
    <img class="logo-empresas" src="<?php the_field('img-consultoria'); ?>" alt="logo da mina azul"/>
    <p><?php the_field('texto-consultoria'); ?></p>
    <div class="galeria-container">
    <h2 class="titulo-empresas"><?php the_field('titulo-consultoria'); ?></h2>
      <div class="container">
      <?php if(have_rows('galeria-consultoria')) : while (have_rows('galeria-consultoria')) : the_row(); ?>
        <div class="galeria-foto">
        <a href="<?php the_sub_field('galeria-consultoria-lightbox-img'); ?>" data-lightbox="image-1" data-title="My caption">
            <img src="<?php the_sub_field('galeria-consultoria-img'); ?>" alt="<?php the_sub_field('galeria-consultoria-img-alt'); ?>">
        </a>     
        </div>
      <?php endwhile; else: endif; ?>  
      </div>  
    </div>
  </div>
  
  <h2 class="titulo-empresas"><?php the_field('titulo-nossos-servicos'); ?></h2>
  <div class="container">
    <div class="nome">
    <?php if(have_rows('servicos-div')) : while (have_rows('servicos-div')) : the_row(); ?>
      <div class="nome-qualquer">
        <img src="<?php the_sub_field('img-nossos-servicos'); ?>" alt="<?php the_sub_field('img-nossos-servicos-alt'); ?>">
        <h3><?php the_sub_field('titulo-nossos-servicos'); ?></h3>
        <p><?php the_sub_field('conteudo-nossos-servicos'); ?></p>
      </div>
    <?php endwhile; else: endif; ?>
    </div>

    <div class="nome">
    <?php if(have_rows('servicos-div-dois')) : while (have_rows('servicos-div-dois')) : the_row(); ?>
      <div class="nome-qualquer">
        <img src="<?php the_sub_field('img-nossos-servicos-dois'); ?>" alt="<?php the_sub_field('img-nossos-servicos-dois-alt'); ?>">
        <h3><?php the_sub_field('titulo-nossos-servicos-dois'); ?></h3>
        <p><?php the_sub_field('conteudo-nossos-servicos-dois'); ?></p>
      </div>
    <?php endwhile; else: endif; ?>
    </div>
  </div>
</section>

<?php get_template_part('include/contato', 'servicos'); ?>


<?php get_footer(); ?>