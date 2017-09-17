<?php 

function carrega_scripts(){
	// Função para carregamento dos scripts
	wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css',array(), '1.0', 'all');
	wp_enqueue_script('template',get_template_directory_uri()
		.'/js/template.js',array(),null,true);

	wp_enqueue_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css' ,'4.0.0', 'all');

	wp_enqueue_script('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js',array('jquery'),null,true);
	
}

add_action('wp_enqueue_scripts','carrega_scripts');

//Função para menus

register_nav_menus(
array(
	'meu_menu_principal'=>'Menu Principal',
	'menu_rodape'=>'Menu Rodapé'
	
	)

	);

add_theme_support('custom-background');

add_theme_support('custom-header');


