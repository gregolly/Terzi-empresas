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
  <header class="header -interno">
  <div class="button-interno">
    <a href="#menu" class="btn-close" ></a>
  </div>
  <div class="overlay-interno">
    <div class="container header-interno">
            <nav class="navigation animated bounceInLeft">
                <ul>
                  <li><a href="http://www.terziempresas.com.br" class="action -first">Home</a><li>
                  <li class="-modificador"><a href="http://www.terziempresas.com.br/#empresas"
                   class="action -first">as empresas</a></li>
                  <li><a href="/servicos" class="action">serviços</a></li>
                  <li><a href="http://www.terziempresas.com.br/noticias" id="noticias" class="action">noticias</a></li>
                  <li><a href="http://www.terziempresas.com.br/contato" id="contato" class="action">fale conosco</a></li>
                </ul>
            </nav>  
            <ul class="social-media animated bounceInRight">
                <a href="<?php the_field('youtube', 31);?>" class="-icons"><i class="fab fa-youtube"></i></a>
                <a href="<?php the_field('linkedin', 31);?>" class="-icons"><i class="fab fa-linkedin"></i></a>
            </ul>
            <?php get_search_form(); ?>
    </div> 
  </div>  
  </header>

