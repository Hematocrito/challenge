<?php

//Menus de navegación
    function challenge_menus(){
        register_nav_menus( array(
            'menu-principal' => __('Menu Principal', 'challenge')
        ));
    }
    add_action( 'init', 'challenge_menus' );

//Scripts y Styles
function challenge_scritps_styles(){
    //la hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action( 'wp_enqueue_scripts', 'challenge_scritps_styles' );

function custom_post_types(){

    register_post_type('imagenes', array(
		'label' => 'Imagenes',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'exclude_from_search' => true,
		'show_in_menu' => true,
		'_builtin' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array("slug" => "imagenes"),
		'query_var' => true,
		'menu_icon'   => 'dashicons-edit',
		'has_archive' => false,
		'supports' => array(
		    'title',
		    'page-attributes',
		    'editor',
		    'thumbnail'
		),
		'labels' => array (
		    'name' => 'Imagenes',
		    'singular_name' => 'Imagenes',
		    'menu_name' => 'Imagenes',
		    'add_new' => 'Add Imagenes',
		    'add_new_item' => 'Add Imagenes',
		    'edit' => 'Edit',
		    'edit_item' => 'Edit Imagenes',
		    'new_item' => 'New Imagenes',
		    'view' => 'View Imagenes',
		    'view_item' => 'View Imagenes',
		    'search_items' => 'Search Imageness',
		    'not_found' => 'No Imageness Found',
		    'not_found_in_trash' => 'No Imageness Found in Trash',
		),
	));

}
add_action('init', 'custom_post_types');

/** Consultas reutilizables */
require get_template_directory() . '/inc/queries.php';
    
    
     