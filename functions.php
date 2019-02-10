<?php


// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

//script head
add_action('wp_enqueue_scripts', 'terzitema_add_script_header');

function terzitema_add_script_header() {
  //Adicionar estilos
  wp_enqueue_style('normalize-terzitema', get_stylesheet_directory_uri() . '/css/normalize.css');
  wp_enqueue_style('reset-terzitema', get_stylesheet_directory_uri() . '/css/reset.css');
  wp_enqueue_style('style-terzitema', get_stylesheet_directory_uri() . '/style.css');
}

//script rodape
add_action('wp_enqueue_scripts', 'terzi_add_script_rodape');

function terzi_add_script_rodape(){
  wp_enqueue_script('jquery-plugin', get_stylesheet_directory_uri() . '/js/jquery.js');
  wp_enqueue_script('background_slide', get_stylesheet_directory_uri() . '/js/background_slide.js');
  wp_enqueue_script('contador', get_stylesheet_directory_uri() . '/js/count.js');
  wp_deregister_script('jquery');
}

//registrar menu
//add_action('init', 'terzi_tema_action_init');

//function terzi_tema_action_init()
//{
	//register_nav_menu('terzi-menu-principal', 'Menu principal (cabeçalho)');
//}


//Adiciona suporte a miniaturas (imagem destacada)
add_theme_support('post-thumbnails');

//Adicionar tamanhos de imagem no wordpress
add_image_size('news-thumbnail', 156, 125, true);
add_image_size('img-aleatory', 450, 300, true);
add_image_size('partners-terzi',200, 120, true);


//adicionar titulo dinamico
add_theme_support('title-tag');

//adicionando suporte aos widgets
add_theme_support('customize-selective-refresh-widgets');


//adicionando pesquisa do site
add_action('pre_get_posts', 'twtema_filtro_loop_principal');

function twtema_filtro_loop_principal($query)
{
	if($query->is_main_query() && $query->is_home()) {
		$query->set('ignore_sticky_posts', true);
	}
}

?>