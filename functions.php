<?php 

remove_action('wp_head','wp_generator' );

// Função para carregamento dos scripts
function carrega_scripts(){
	// Enfileirando Bootstrap
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);	
	// Enfileirando estilos e scripts próprios
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
	wp_enqueue_script( 'template', get_template_directory_uri(). '/js/template.js', array(), null, true);	
}
add_action( 'wp_enqueue_scripts', 'carrega_scripts' );

// Função para registro de nossos menus
register_nav_menus(
	array(
		'meu_menu_principal' => 'Menu Principal',
		'menu_rodape' => 'Menu Rodape'
	)
);

// Adicionando suporte ao tema
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video', 'image'));
add_theme_support('html5',array('search-form') );

// Registrando sidebars
if (function_exists('register_sidebar')){
	register_sidebar(
		array(
			'name'		=> 'Barra Lateral 1',
			'id'		=> 'sidebar-1',
			'description'	=> 'Barra lateral da página home',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);
	register_sidebar(
		array(
			'name'		=> 'Barra Lateral 2',
			'id'		=> 'sidebar-2',
			'description'	=> 'Barra lateral da página blog',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);

	register_sidebar(
		array(
			'name'		=> 'Redes Sociais',
			'id'		=> 'redes-sociais',
			'description'	=> 'Widget para redes sociais',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);
}

//Alterara o número de itens por página no blog

function num_itens_blog($query){
	if(is_admin() || ! $query->is_main_query() )

		return;
	//Página Blog
	if(is_home()){
		$query->set('posts_per_page',2);
		return;
	}
	
}

add_action('pre_get_posts','num_itens_blog',1);


function mostra_telefone(){
	if(wp_is_mobile()){
		$resultado = '<div class"telefone"><h1><a href="tel:5521986748396">LIGAR AGORA <span class="glyphicon glyphicon-phone-alt"></span></></a></h1></div>';
	}

	return $resultado;
}

add_shortcode('meutelfone','mostra_telefone');

 
