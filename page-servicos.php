<?php get_header('interno'); 
//Template name: Serviços
?>


<section id="empresas-servicos">
  <h2><?php the_field('titulo-servicos-page'); ?></h2>
  <img class="img-empresas" src="<?php the_field('img-consul-servico'); ?>" alt="<?php the_field('img-consul-servico-alt'); ?>">
  <div class="container">
  <?php if(have_rows('item-wrap-service-consul')) : while (have_rows('item-wrap-service-consul')) : the_row(); ?>
    <div class="item-wrap">
      <img src="<?php the_sub_field('item-wrap-img');?>" alt="<?php the_sub_field('item-wrap-img-alt');?>">
      <h3><?php the_sub_field('item-wrap-titulo');?></h3>
      <p><?php the_sub_field('item-wrap-conteudo');?></p>
    </div>
  <?php endwhile; else: endif; ?>
  </div>
</section>

<section id="empresas-servicos">
  <img class="img-empresas" src="<?php the_field('img-mina-servico'); ?>" alt="<?php the_field('img-mina-servico-alt'); ?>">
  <div class="container">
  <?php if(have_rows('item-wrap-service-mina')) : while (have_rows('item-wrap-service-mina')) : the_row(); ?>
    <div class="item-wrap">
      <img src="<?php the_sub_field('item-wrap-img-mina');?>" alt="<?php the_sub_field('item-wrap-mina-img-alt');?>">
      <h3><?php the_sub_field('item-wrap-mina-titulo');?></h3>
      <p><?php the_sub_field('item-wrap-mina-conteudo');?></p>
    </div>
  <?php endwhile; else: endif; ?>
  </div>
</section>

<section id="empresas-servicos">
  <img class="img-empresas" src="<?php the_field('img-natia-servico'); ?>" alt="<?php the_field('img-nativa-servico-alt'); ?>">
  <div class="container">
  <?php if(have_rows('item-wrap-service-nativa')) : while (have_rows('item-wrap-service-nativa')) : the_row(); ?>
    <div class="item-wrap">
      <img src="<?php the_sub_field('item-wrap-img-nativa');?>" alt="<?php the_sub_field('item-wrap-nativa-img-alt');?>">
      <h3><?php the_sub_field('item-wrap-nativa-titulo');?></h3>
      <p><?php the_sub_field('item-wrap-nativa-conteudo');?></p>
    </div>
  <?php endwhile; else: endif; ?>
  </div>
</section>

<?php get_template_part('include/contato', 'servicos'); ?>
<?php get_footer(); ?>