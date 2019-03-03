<?php

register_sidebar([
	'name'			=> 'Barra Lateral (Sidebar)',
	'id'			=> 'terzi-empresas-sidebar',
	'description'	=> 'Área lateral de sidebar',
	'before_title'	=> '<h4>',
	'after_title'	=> '</h4>'
]);

//register custom navigation walker
require_once('wp_terzi_empresas_pagination.php');
function wp_terzi_empresas_pagination($args) {
    
	$args['previous_string'] = 'anterior';
	$args['next_string'] = 'próximo';
	
	return $args;
}

// Coloque o código abaixo no arquivo functions.php do seu tema. O número 50 é a quantidade de caracteres a exibir.
function wpdev_custom_excerpt_length( $length ) {
  return 30;
 }
 add_filter( 'excerpt_length', 'wpdev_custom_excerpt_length');

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
	wp_enqueue_style('lightbox', get_stylesheet_directory_uri() . '/css/lightbox.css');
  wp_enqueue_style('style-terzitema', get_stylesheet_directory_uri() . '/style.css');
}

//script rodape
add_action('wp_enqueue_scripts', 'terzi_add_script_rodape');

function terzi_add_script_rodape(){
  wp_enqueue_script('jquery-plugin', get_stylesheet_directory_uri() . '/js/jquery.js');
	wp_enqueue_script('search-form', get_stylesheet_directory_uri() . '/js/search.js');
	wp_enqueue_script('form-mailer', get_stylesheet_directory_uri() . '/js/form.js');
	wp_enqueue_script('menu-overlay', get_stylesheet_directory_uri() . '/js/menu-responsive.js');
	wp_enqueue_script('menu-responsivo-interno', get_stylesheet_directory_uri() . '/js/menu-responsivo-interno.js');
	wp_enqueue_script('contador', get_stylesheet_directory_uri() . '/js/count.js');
	wp_enqueue_script('writer', get_stylesheet_directory_uri() . '/js/writer-machine.js');
	wp_enqueue_script('load-bar', get_stylesheet_directory_uri() . '/js/writer-machine.js');
	wp_enqueue_script('lightbox', get_stylesheet_directory_uri() . '/js/lightbox.js');
  wp_deregister_script('jquery');
}

//registrar menu
//add_action('init', 'terzi_tema_action_init');

//function terzi_tema_action_init()
//{
	//register_nav_menu('terzi-menu-principal', 'Menu principal (cabeçalho)');
//}

add_theme_support( 'post-formats', [ 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );


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

add_action('init', 'terzi_empresas_action_init');
//adicionar custom post type
function terzi_empresas_action_init(){
  //chama função custom post type
  terzi_empresas_registrar_custom_post_type();
}

function terzi_empresas_registrar_custom_post_type() {

	$descritivosEventos = array(
		'name' => 'Eventos',
		'singular_name' => 'Eventos',
		'add_new' => 'Adicionar Novo Eventos',
		'add_new_item' => 'Adicionar Eventos',
		'edit_item' => 'Editar Eventos',
		'new_item' => 'Novo Eventos',
		'view_item' => 'Ver Eventos',
		'search_items' => 'Procurar Eventos',
		'not_found' =>  'Nenhum Eventos encontrado',
		'not_found_in_trash' => 'Nenhum Eventos na Lixeira',
		'parent_item_colon' => '',
		'menu_name' => 'Eventos'
	);

	$argsEventos = array(
		'labels' => $descritivosEventos,  //Insere o Array de labels dentro do argumento de labels
		'public' => true,  //Se o Custom Type pode ser adicionado aos menus e exibidos em buscas
		'hierarchical' => false,  //Se o Custom Post pode ser hierarquico como as páginas
		'menu_position' => 5,  //Posição do menu que será exibido
		'supports' => array('title','editor','thumbnail', 'custom-fields', 'revisions'), //Quais recursos serão usados (metabox)
		'show_in_rest'=> true
    );

	register_post_type( 'Eventos' , $argsEventos );

	flush_rewrite_rules();
}
add_action('shortcode', 'terzi_empresas_registrar_custom_post_type');

//customizar paginas de login
function custom_login_css() {
	echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/style.css"/>';
	}
	add_action('login_head', 'custom_login_css');
	
/*Função que altera a URL, trocando pelo endereço do seu site*/
function my_login_logo_url() {
	return get_bloginfo( 'url' );
	}
	add_filter( 'login_headerurl', 'my_login_logo_url' );
	 
	/*Função que adiciona o nome do seu site, no momento que o mouse passa por cima da logo*/
	function my_login_logo_url_title() {
	return 'Nome do seu site - Voltar para Home';
	}
	add_filter( 'login_headertitle', 'my_login_logo_url_title' );
	
	//função favicon
	function add_favicon() {
		echo '<link rel="shortcut icon" type="image/png" href="'.get_template_directory_uri().'img/favicon.png" />';
		}

	add_action('wp_head', 'add_favicon');
?>