<?php
// Coloque o código abaixo no arquivo functions.php do seu tema. O número 80 é a quantidade de caracteres a exibir.
function wpdev_custom_excerpt_length( $length ) {
  return 10;
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
  wp_enqueue_style('style-terzitema', get_stylesheet_directory_uri() . '/style.css');
}

//script rodape
add_action('wp_enqueue_scripts', 'terzi_add_script_rodape');

function terzi_add_script_rodape(){
  wp_enqueue_script('jquery-plugin', get_stylesheet_directory_uri() . '/js/jquery.js');
  wp_enqueue_script('background_slide', get_stylesheet_directory_uri() . '/js/background_slide.js');
  wp_enqueue_script('contador', get_stylesheet_directory_uri() . '/js/count.js');
  wp_enqueue_script('countUp', get_stylesheet_directory_uri() . '/js/countUp.js');
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

add_action('init', 'terzi_empresas_action_init');
//adicionar custom post type
function terzi_empresas_action_init(){
  //chama função custom post type
  terzi_empresas_registrar_custom_post_type();
}

function terzi_empresas_registrar_custom_post_type() {

	$descritivosEventos1 = array(
		'name' => 'Eventos1',
		'singular_name' => 'Eventos1',
		'add_new' => 'Adicionar Novo Eventos1',
		'add_new_item' => 'Adicionar Eventos1',
		'edit_item' => 'Editar Eventos1',
		'new_item' => 'Novo Eventos1',
		'view_item' => 'Ver Eventos1',
		'search_items' => 'Procurar Eventos1',
		'not_found' =>  'Nenhum Eventos1 encontrado',
		'not_found_in_trash' => 'Nenhum Eventos1 na Lixeira',
		'parent_item_colon' => '',
		'menu_name' => 'Eventos1'
	);

	$argsEventos1 = array(
		'labels' => $descritivosEventos1,  //Insere o Array de labels dentro do argumento de labels
		'public' => true,  //Se o Custom Type pode ser adicionado aos menus e exibidos em buscas
		'hierarchical' => false,  //Se o Custom Post pode ser hierarquico como as páginas
		'menu_position' => 5,  //Posição do menu que será exibido
		'supports' => array('title','editor','thumbnail', 'custom-fields', 'revisions') //Quais recursos serão usados (metabox)
    );

	register_post_type( 'Eventos1' , $argsEventos1 );

	$descritivosEventos2 = array(
		'name' => 'Eventos2',
		'singular_name' => 'Eventos2',
		'add_new' => 'Adicionar Novo Eventos2',
		'add_new_item' => 'Adicionar Eventos2',
		'edit_item' => 'Editar Eventos2',
		'new_item' => 'Novo Eventos2',
		'view_item' => 'Ver Eventos2',
		'search_items' => 'Procurar Eventos2',
		'not_found' =>  'Nenhum Eventos2 encontrado',
		'not_found_in_trash' => 'Nenhum Eventos2 na Lixeira',
		'parent_item_colon' => '',
		'menu_name' => 'Eventos2'
	);

	$argsEventos2 = array(
		'labels' => $descritivosEventos2,  //Insere o Array de labels dentro do argumento de labels
		'public' => true,  //Se o Custom Type pode ser adicionado aos menus e exibidos em buscas
		'hierarchical' => false,  //Se o Custom Post pode ser hierarquico como as páginas
		'menu_position' => 5,  //Posição do menu que será exibido
		'supports' => array('title','thumbnail') //Quais recursos serão usados (metabox)
    );

	register_post_type( 'Eventos2' , $argsEventos2 );


	flush_rewrite_rules();
}
?>