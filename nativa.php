<?php get_header('interno'); 
//Template name: nativa
?>



<section class="container mina">
  <div class="wrap">
    <img class="logo-empresas" src="<?php the_field('img-nativa'); ?>" alt="logo da mina azul"/>
    <p><?php the_field('texto-nativa'); ?></p>
    <div class="galeria-container">
    <h2 class="titulo-empresas"><?php the_field('titulo-nativa'); ?></h2>
      <div class="container">
      <?php if(have_rows('galeria-nativa')) : while (have_rows('galeria-nativa')) : the_row(); ?>
        <div class="galeria-foto">
          <a href="<?php the_sub_field('galeria-nativa-lightbox-img'); ?>" data-lightbox="image-1" data-title="My caption">
              <img src="<?php the_sub_field('galeria-nativa-img'); ?>" alt="<?php the_sub_field('galeria-nativa-img-alt'); ?>">
          </a>    
        </div>
      <?php endwhile; else: endif; ?>  
      </div>  
    </div>
  </div>
  
  <h2 class="titulo-empresas"><?php the_field('titulo-nossos-servicos-nativa'); ?></h2>
  <div class="container">
    <div class="nome">
    <?php if(have_rows('servicos-div-nativa')) : while (have_rows('servicos-div-nativa')) : the_row(); ?>
      <div class="nome-qualquer">
        <img src="<?php the_sub_field('img-nossos-servicos-nativa'); ?>" alt="<?php the_sub_field('img-nossos-servicos-alt-nativa'); ?>">
        <h3><?php the_sub_field('titulo-nossos-servicos-nativa'); ?></h3>
        <p><?php the_sub_field('conteudo-nossos-servicos-nativa'); ?></p>
      </div>
    <?php endwhile; else: endif; ?>
    </div>

    <div class="nome">
    <?php if(have_rows('servicos-div-dois-nativa')) : while (have_rows('servicos-div-dois-nativa')) : the_row(); ?>
      <div class="nome-qualquer">
        <img src="<?php the_sub_field('img-nossos-servicos-dois-nativa'); ?>" alt="<?php the_sub_field('img-nossos-servicos-dois-alt-nativa'); ?>">
        <h3><?php the_sub_field('titulo-nossos-servicos-dois-nativa'); ?></h3>
        <p><?php the_sub_field('conteudo-nossos-servicos-dois-nativa'); ?></p>
      </div>
    <?php endwhile; else: endif; ?>
    </div>
  </div>
</section>

<?php get_template_part('include/contato', 'servicos'); ?>


<?php get_footer(); ?>