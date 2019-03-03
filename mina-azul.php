<?php get_header('interno'); 
//Template name: mina-azul
?>



<section class="container mina">
  <div class="wrap">
    <img class="logo-empresas" src="<?php the_field('img-mina-azul'); ?>" alt="logo da mina azul"/>
    <p><?php the_field('texto-mina-azul'); ?></p>
    <div class="galeria-container">
    <h2 class="titulo-empresas"><?php the_field('titulo-mina'); ?></h2>
      <div class="container">
      <?php if(have_rows('galeria-mina')) : while (have_rows('galeria-mina')) : the_row(); ?>
        <div class="galeria-foto">
        <a href="<?php the_sub_field('galeria-lightbox-img'); ?>" data-lightbox="image-1" data-title="My caption">
            <img src="<?php the_sub_field('galeria-mina-img'); ?>" alt="<?php the_sub_field('galeria-mina-img-alt'); ?>">
        </a>     
        </div>
      <?php endwhile; else: endif; ?>  
      </div>  
    </div>
  </div>
  
  <h2 class="titulo-empresas"><?php the_field('titulo-nossos-servicos-mina'); ?></h2>
  <div class="container">
    <div class="nome">
    <?php if(have_rows('servicos-div-mina')) : while (have_rows('servicos-div-mina')) : the_row(); ?>
      <div class="nome-qualquer">
        <img src="<?php the_sub_field('img-nossos-servicos-mina'); ?>" alt="<?php the_sub_field('img-nossos-servicos-alt-mina'); ?>">
        <h3><?php the_sub_field('titulo-nossos-servicos-mina'); ?></h3>
        <p><?php the_sub_field('conteudo-nossos-servicos-mina'); ?></p>
      </div>
    <?php endwhile; else: endif; ?>
    </div>

    <div class="nome">
    <?php if(have_rows('servicos-div-dois-mina')) : while (have_rows('servicos-div-dois-mina')) : the_row(); ?>
      <div class="nome-qualquer">
        <img src="<?php the_sub_field('img-nossos-servicos-dois-mina'); ?>" alt="<?php the_sub_field('img-nossos-servicos-dois-alt-mina'); ?>">
        <h3><?php the_sub_field('titulo-nossos-servicos-dois-mina'); ?></h3>
        <p><?php the_sub_field('conteudo-nossos-servicos-dois-mina'); ?></p>
      </div>
    <?php endwhile; else: endif; ?>
    </div>
  </div>
</section>

<?php get_template_part('include/contato', 'servicos'); ?>


<?php get_footer(); ?>