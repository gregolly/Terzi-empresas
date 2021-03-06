<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Lato|Roboto:300,400" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= get_template_directory_uri(); ?>/img/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <ul class="container adress">
      <li><i class="fas fa-phone"></i><?php the_field('telefone-header-item', 31); ?></li>
      <li><i class="fas fa-map-marker-alt"></i><?php the_field('endereco-header-item', 31); ?></li>
      <li><i class="far fa-envelope"></i><?php the_field('email-header-item', 31); ?></li>
      <li><a href="http://www.terziempresas.com.br/wp-admin"><img src="<?php echo get_template_directory_uri(); ?>/img/wp-login.png" alt="login para o painel administrativo do site"></a></li>
    <ul>
      
  </header>

  <section class="slide" id="slide">
  <div class="button-menu">
    <a href="#menu" class="btn-open" ></a>
  </div>
  <div class="overlay-menu">
      <div class="nav-widgets">
        <nav class="navigation animated bounceInLeft">
          <ul>
            <li class="-modificador"><a href="#empresas" class="action -first">as empresas</a></li>
            <li><a href="/servicos" class="action">serviços</a></li>
            <li><a href="#noticias" class="action">noticias</a></li>
            <li><a href="http:\\www.terziempresas.com.br/contato" class="action">fale conosco</a></li>
          </ul>
             
        </nav>
        <ul class="social-media animated bounceInRight">
            <a href="<?php the_field('youtube', 31);?>" class="-icons"><i class="fab fa-youtube"></i></a>
            <a href="<?php the_field('linkedin', 31);?>" class="-icons"><i class="fab fa-linkedin"></i></a>
        </ul>
        <?php get_search_form(); ?>
      </div>
<style>
      
      .slide{
  width: 100%;
  height: 634px;
  background-image: url("<?php get_field('bg-slide1'); ?>");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  backface-visibility: hidden;
  position: relative;
  animation: slideBg 15s linear infinite 0s;
  -moz-animation: slideBg 15s linear infinite 0s;
  -ms-animation: slideBg 15s linear infinite 0s;
  -webkit-animation: slideBg 15s linear infinite 0s;
  -o-animation: slideBg 15s linear infinite 0s;
  animation-timing-function: step-end;
  -moz-animation-timing-function: step-end;
  -ms-animation-timing-function: step-end;
  -webkit-animation-timing-function: step-end;
  -o-animation-timing-function: step-end;

}
@keyframes slideBg {
  0%{
    background-image: url("<?php the_field('bg-slide1'); ?>");
  }
  20%{
    background-image: url("<?php the_field('bg-slide2'); ?>");
  }
  40%{
    background-image: url("<?php the_field('bg-slide3'); ?>");
  }
  60%{
    background-image: url("<?php the_field('bg-slide4'); ?>");
  }
}
      
</style>
    </div> 
      <div class="logo">
        
        <div class="logo-text">
            <h1 class="logo-main"><img src="<?php the_field('logo-terzi', 31); ?>" alt="<?php the_field('logo-terzi-alt', 31); ?>" class="logo-slide animated bounceInLeft">
              </h1>
              <h1 class="logo-main-responsive"><img src="<?php the_field('logo-terzi-responsivo', 31); ?>" alt="<?php the_field('logo-terzi-alt', 31); ?>" class="logo-slide logo-responsivo animated bounceInLeft">
              </h1>
            </div>
            <p class="animated bounceInRight text-p"><?php the_field('texto-logo-slide'); ?></p>
         
        </div>
         
</section>

