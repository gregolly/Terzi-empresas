<?php get_header('interno'); 
//Template name: Contato
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<section class="container">
  <section class="map-contato">
    <div class="map-div" id="map">
      
    </div>
  </section>
  <div class="contato-form">
  <h2 class="titulo-contato">Entre em contato conosco</h2> 
    <form action="<?= get_template_directory_uri(); ?>/enviar-email.php" id="form1" method="post">
          <input type="text" name="name" id="name" placeholder="Nome">
        <input type="text" name="email" id="email" placeholder="seu e-mail" required>
        <input type="text" name="telefone" id="telefone" placeholder="(65) 99999-9999" required>
        <textarea type="text" name="mensagem" rows="10" id="mensagem" placeholder="Mensagem"></textarea>
        <button type="submit" form="form1" value="Enviar"><?php the_field('button-form', 31); ?></button>
    </form>
  </div>
</section>

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
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>