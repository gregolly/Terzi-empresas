<?php get_header('interno'); 
//Template name: Serviços
?>


<section id="empresas-servicos">
<h2>serviços</h2>
    <div class="container">
      <div class="summary-services">
        <img src="<?php the_field('services-img', 31); ?>" alt="<?php the_field('services-img-alt', 31); ?>" class="img-summary-services"/>
        <ul class="list-summary-services">
          <li><?php the_field('services-line', 31); ?></li>
        </ul>
      </div>

      <div class="summary-services">
        <img src="<?php the_field('services-img-blue', 31); ?>" alt="<?php the_sub_field('services-img-alt-blue', 31); ?>" class="img-summary-services"/>
        <ul class="list-summary-services">
          <li><?php the_field('services-line-blue', 31); ?></li>
        </ul>
      </div>

      <div class="summary-services">
        <img src="<?php the_field('services-img-green', 31); ?>" alt="<?php the_sub_field('services-img-alt-green', 31); ?>" class="img-summary-services"/>
        <ul class="list-summary-services">
          <li><?php the_field('services-line-green', 31); ?></li>
        </ul>
      </div>
    </div>  
</section>
















<?php get_footer('interno'); ?>