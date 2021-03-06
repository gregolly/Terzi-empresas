<?php get_header(); 
//Template name: Home
?>

<section class="services services-container" id="servicos">
  <div>
    <p class="services-text"><?php the_field('texto-services'); ?></p>
    <p class="services-text"><?php the_field('texto-services1'); ?></p>
    <p class="services-text"><?php the_field('texto-services2'); ?></p>
    <p class="services-text"><?php the_field('texto-services3'); ?></p>
    <p class="services-text"><?php the_field('texto-services4'); ?></p>
  </div>
  <div>
      <img src="<?php the_field('image-services'); ?>" alt="<?php the_field('image-services-alt'); ?>" class="logo-services animated flipInX"/>
  </div>    
  </section>

<section class="container" id="empresas">
 
      <div class="summary-services">
        <img src="<?php the_field('services-img'); ?>" alt="<?php the_field('services-img-alt'); ?>" class="img-summary-services"/>
        <p class="description-summary-services"><?php the_field('services-content'); ?></p>
        <ul class="list-summary-services">
          <li><?php the_field('services-line'); ?></li>
        </ul>
        <a href="http://www.terziempresas.com.br/terzi-consultoria" class="button-summary-services-red"><?php the_field('services-button'); ?></a>
        <img src="<?php the_field('services-button-img'); ?>" alt="<?php the_field('services-button-img-alt'); ?>" class="cured">
      </div>

      <div class="summary-services">
        <img src="<?php the_field('services-img-blue'); ?>" alt="<?php the_sub_field('services-img-alt-blue'); ?>" class="img-summary-services"/>
        <p class="description-summary-services"><?php the_field('services-content-blue'); ?></p>
        <ul class="list-summary-services">
          <li><?php the_field('services-line-blue'); ?></li>
        </ul>
        <a href="http://www.terziempresas.com.br/mina-azul" class="button-summary-services-blue"><?php the_field('services-button'); ?></a>
        <img src="<?php the_field('services-button-img-blue'); ?>" alt="<?php the_field('services-button-img-alt-blue'); ?>" class="cublue">
      </div>


      <div class="summary-services">
        <img src="<?php the_field('services-img-green'); ?>" alt="<?php the_sub_field('services-img-alt-green'); ?>" class="img-summary-services"/>
        <p class="description-summary-services"><?php the_field('services-content-green'); ?></p>
        <ul class="list-summary-services">
          <li><?php the_field('services-line-green'); ?></li>
        </ul>
        <a href="http://www.terziempresas.com.br/nativa" class="button-summary-services-green"><?php the_field('services-button'); ?></a>
        <img src="<?php the_field('services-button-img-green'); ?>" alt="<?php the_field('services-button-img-alt-green'); ?>" class="cugreen">
      </div>
       
</section>

<section class="container balls">
  <span class="red"></span>
  <span class="blue"></span>
  <span class="green"></span>
</section>

<section class="container count">
<?php if(have_rows('count-terzi')) : while (have_rows('count-terzi')) : the_row(); ?>
  <div class="count-wrap">
    <div class="num-count"><span class="coun" id="count"><?php the_sub_field('count-number'); ?></span></div>
    <p class="text-count"><?php
    the_sub_field('count-name'); ?></p>
  </div>
<?php endwhile; else: endif; ?>
</section>

<section class="agreement" id="convenios">
  <h2><?php the_field('titulo_convenios'); ?></h2>
  <div class="partners-agreement">
<?php if(have_rows('partners_container')) : while(have_rows('partners_container')) : the_row(); ?>
    <img src="<?php the_sub_field('partners-img'); ?>" alt="<?php the_sub_field('partners-img-alt'); ?>" class="img-partners">
<?php endwhile; else: endif; ?>    
  </div>
</section>

<section class="register">
  <h2><?php the_field('register_title'); ?></h2>
  <div class="register-wrap container">
    <?php if(have_rows('register-itens')) : while(have_rows('register-itens')) : the_row(); ?>
      <p><?php the_sub_field('registers'); ?></p>
    <?php endwhile; else: endif; ?>
  </div>
</section>


<section class="blog" id="noticias">
  <div class="news">
    <h3><?php the_field('titulo_news'); ?></h3>
    <?php
        global $post;
        $args = array( 'numberposts' => 4 );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) : setup_postdata($post); 
    ?>
    <article class="news-flex">
      <a href="<?php the_permalink(); ?>">
          <div class="news-wrap -first-news">
            <?php the_post_thumbnail(); ?>
            <div class="news-caption">
            <h4><?php the_title(); ?></h4>
            <?php the_excerpt(); ?>
      </a> 
              <div class="date"><?php the_time('d/m/y'); ?></div>
            </div>
          </div>
</article>
<?php endforeach;  ?>
<?php wp_reset_postdata(); ?>
<a href="/noticias" class="btn btn1">leia mais</a>
  </div>

<div class="container-events">
  <h3><?php the_field('titulo_eventos'); ?></h3>
  <div class="row-events">
  <?php $Eventos = new WP_Query([
            'posts_per_page' => 6,
            'post_type' => 'eventos',
        ]); 
          
       if($Eventos->have_posts()) : while($Eventos->have_posts()) : $Eventos->the_post();
        ?>
  
    
      <div class="events-posts">
      <a href="<?php the_permalink(); ?>"> 
            <?php the_post_thumbnail(); ?>
            </a> 
            <h4><?php the_title(); ?></h4>
            <div class="date"><?php the_time('d/m/y'); ?></div>
      </div>
    
  
  <?php endwhile; else: endif; ?>
  </div>
</div><!-- fim do container -->    
<?php wp_reset_query(); ?>
</section>

<section class="container" id="container-price">
  <div class="price">
    <h5><?php the_field('titulo-cotacao'); ?></h5>
        <div class="cambio" width="200px">
          <iframe src="https://www.agron.com.br/widgets/dollar.php" width="290px;" height="220px;" scrolling="no" frameborder="0"></iframe>
        </div>
        <div class="prices" width="200px">
          <iframe src="https://www.agron.com.br/widgets/cotacao_interna.php" width="100%;" height="320px;" scrolling="no" frameborder="0"  align="middle"></iframe>
        </div>
  </div>
  <div class="links">
  <h5><?php the_field('titulo-links'); ?></h5>
          <ul>
            <?php if(have_rows('link-uteis-items')) : while(have_rows('link-uteis-items')) : the_row(); ?>
            <li><a href="<?php the_sub_field('path-link'); ?>"><?php the_sub_field('name-link'); ?></a></li>
            <?php endwhile; else: endif; ?>
          </ul>
          <h5><?php the_field('titulo_recursos'); ?></h5>
    <?php if(have_rows('recursos-img-item')) : while(have_rows('recursos-img-item')) :  the_row(); ?>
      <img class="img-recursos" src="<?php the_sub_field('recursos-img'); ?>" alt="<?php the_sub_field('alt-recursos'); ?>">
      <?php endwhile; else: endif; ?>
      <ul>
        <li>LCA</li>
        <li>MCR </li>
        <li>POUPANÇA</li>
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
