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
      <li><?php the_field('telefone-header-item', 31); ?></li>
      <li><?php the_field('endereco-header-item', 31); ?></li>
      <li><?php the_field('email-header-item', 31); ?></li>
      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/wp-login.png" alt="login para o painel administrativo do site"></a></li>
    <ul>
      
  </header>

  <section class="slide" id="slide">
    
      <div class="nav-widgets">
        <nav class="navigation animated bounceInLeft">
            <a href="#empresas" class="action -first">as empresas</a>
             <a href="#servicos" class="action">serviços</a>
            <a href="#convenios" class="action">convênios</a>
            <a href="#noticias" class="action">noticias</a>
            <a href="#contato" class="action">fale conosco</a>
        </nav>
        <ul class="social-media animated bounceInRight">
            <a href="<?php the_field('facebook', 31);?>" class="-icons"><i class="fab fa-facebook-f"></i></a>
            <a href="<?php the_field('instagram', 31);?>" class="-icons"><i class="fab fa-instagram"></i></a>
            <a href="<?php the_field('youtube', 31);?>" class="-icons"><i class="fab fa-youtube"></i></a>
            <a href="<?php the_field('linkedin', 31);?>" class="-icons"><i class="fab fa-linkedin"></i></a>
        </ul>
        <input type="text" name="s" value="<?php echo get_search_query(); ?>" class="form-control" placeholder="Buscar...">
        <a href="#" class="search animated bounceInRight"><i class="fas fa-search"></i></a>
      </div>

      <div class="logo">
        
            <div class="logo-text">
            <h1><img src="<?php the_field('logo-terzi', 31); ?>" alt="<?php the_field('logo-terzi-alt', 31); ?>" class="logo-slide animated bounceInLeft">
              </h1>
            </div>
            <p class="animated bounceInRight">agronomia, consultoria, planejamento e responsabilidade</p>
         
        </div>
  </section>

