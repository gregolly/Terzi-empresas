<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Lato|Roboto:300,400" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <ul class="container adress">
      <?php if(have_rows('endereco-header')) : while(have_rows('endereco-header')) : the_row() ?>
      <li><?php the_sub_field('endereco-header-item'); ?></li>
      <?php endwhile; else: endif; ?>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/wp-login.png" alt="login para o painel administrativo do site"></a></li>
    <ul>
      
  </header>

  <section class="slide" id="slide">
    
      <div class="nav-widgets">
        <nav class="navigation animated bounceInLeft">
            <a href="#" class="action -first">as empresas</a>
             <a href="#" class="action">serviços</a>
            <a href="#" class="action">convênios</a>
            <a href="#" class="action">noticias</a>
            <a href="#" class="action">fale conosco</a>
        </nav>
        <ul class="social-media animated bounceInRight">
            <a href="<?php the_field('facebook');?>" class="-icons"><i class="fab fa-facebook-f"></i></a>
            <a href="<?php the_field('instagram');?>" class="-icons"><i class="fab fa-instagram"></i></a>
            <a href="<?php the_field('youtube');?>" class="-icons"><i class="fab fa-youtube"></i></a>
            <a href="<?php the_field('linkedin');?>" class="-icons"><i class="fab fa-linkedin"></i></a>
        </ul>
        <a href="#" class="search animated bounceInRight"><i class="fas fa-search"></i></a>
      </div>

      <div class="logo">
        
            <div class="logo-text">
            <h1><img src="<?php the_field('logo-terzi'); ?>" alt="<?php the_field('logo-terzi-alt'); ?>" class="logo-slide animated bounceInLeft">
              </h1>
            </div>
            <p class="animated bounceInRight">agronomia, consultoria, planejamento e responsabilidade</p>
         
        </div>
  </section>

