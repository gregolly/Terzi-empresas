<?php get_header(); 
//Template name: Home
?>

<section class="services services-container">
    <p class="services-text"><?php the_field('texto-services'); ?></p>
   
      <img src="<?php the_field('image-services'); ?>" alt="<?php the_field('image-services-alt'); ?>" class="logo-services animated flipInX"/>
  </section>

<section class="container">
  <?php if(have_rows('services-wrap')) : while(have_rows('services-wrap')) : the_row(); ?>
      <div class="summary-services">
        <img src="<?php the_sub_field('services-img'); ?>" alt="<?php the_sub_field('services-img-alt'); ?>" class="img-summary-services"/>
        <p class="description-summary-services"><?php the_sub_field('services-content'); ?></p>
        <ul class="list-summary-services">
          <li><?php the_sub_field('services-line'); ?></li>
        </ul>
        <a href="#" class="button-summary-services-red"><?php the_sub_field('services-button'); ?></a>
        <img src="<?php the_sub_field('services-button-img'); ?>" alt="imagem representando cada terzi-empresa" class="cured">
      </div>
  <?php endwhile; else: endif; ?>        
</section>

<section class="container balls">
  <span class="red"></span>
  <span class="blue"></span>
  <span class="green"></span>
</section>
<section class="container count">
<?php if(have_rows('count-terzi')) : while (have_rows('count-terzi')) : the_row(); ?>
  <div class="count-wrap">
    <li class="num-count count"><?php the_sub_field('count-number'); ?></li>
    <p class="text-count"><?php
    the_sub_field('count-name'); ?></p>
  </div>
<?php endwhile; else: endif; ?>
</section>
<section class="agreement">
  <h2><?php the_field('titulo_convenios'); ?></h2>
  <div class="partners-agreement">
<?php if(have_rows('partners_container')) : while(have_rows('partners_container')) : the_row(); ?>
    <img src="<?php the_sub_field('partners-img'); ?>" alt="<?php the_sub_field('partners-img-alt'); ?>" class="img-partners">
<?php endwhile; else: endif; ?>    
  </div>
</section>


<section class="blog">
  <div class="news">
    <h3>notícias</h3>
    <?php get_template_part('includes/home'); ?>
  </div>
<div class="container-events">
  <h3>eventos</h3>
    <div class="divisor">  
      <div class="events-news">
        <div class="events-content">
          <a href="#">
              <img src="<?= get_template_directory_uri(); ?>/img/garden.jpg" alt="">
              <h4>título 01</h4>
              <div>01/01/2019</div>
            </a>
        </div>  
      </div>
    </div>

    <div class="divisor">
      <div class="events-news">
        <div class="events-content">
          <a href="#">
            <img src="<?= get_template_directory_uri(); ?>/img/garden.jpg" alt="">
            <h4>título 01</h4>
            <div>01/01/2019</div>
          </a>
        </div>  
      </div>
    </div>  
</div><!-- fim do container -->    
</section>

<section class="container">
  <div class="price">
    <h5><?php the_field('titulo-cotacao'); ?></h5>
        <div class="cambio" width="200px">
          <iframe src="https://www.precododolar.com/widgets/cotacao.php" width="100%;" height="300px;" scrolling="no" frameborder="0"></iframe>
        </div>
        <div class="prices" width="200px">
            <iframe src="https://www.agron.com.br/widgets/cotacao_interna.php" width="100%;" height="320px;" scrolling="no" frameborder="0"  align="middle"></iframe>
        </div>
  </div>
  <div class="links">
  <h5><?php the_field('titulo-links'); ?></h5>
          <ul>
            <?php if(have_rows('link-uteis-items')) : while(have_rows('link-uteis-items'))  the_row(); ?>
            <li><a href="<?php the_sub_field('path-link'); ?>"><?php the_sub_field('name-link'); ?></a></li>
            <?php  else: endif; ?>
          </ul>
  </div>
</section>
<section class="banner">
  <div class="container">
    
      <div class="phrase">
        <span>""</span>
        <p><?php the_field('frase-banner'); ?></p>
      </div>
      <div class="logo-engineer">
        <img src="<?= the_field('log-eng'); ?>" alt="<?php the_field('log-eng-alt'); ?>">
      </div>
      <div class="associated">
        <p><?php the_field('frase-asso'); ?></p>
        <a href="<?php the_field('link-asso'); ?>"><?php the_field('texto-botao-asso'); ?></a>
      </div>
      
  </div>
</section>

<section class="map">
    <div id="map">

    </div>
  <script>
    // Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -14.614470, lng: -57.482224};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 12, center: uluru, mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map']});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
  
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBc4yTC-Cal6k6A5rFgYNXt6OwLNkKE-jM&callback=initMap"
    async defer></script>
</section>

<?php get_footer(); ?>
