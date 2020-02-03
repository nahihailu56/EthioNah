<?php
require_once('inc\wp_bootstrap_navwalker.php');

//Theme Support
function EthioNah_theme_setup(){

    //Support EthioNah
    add_theme_support( 'custom-logo');

    add_theme_support('post-thumbnails');
    register_nav_menus( array(
        'primary'   => __('Primary Menu')

    ));    
}
add_action('after_setup_theme', 'EthioNah_theme_setup');

function init_widgets($id){
    
    register_sidebar(array(
		'name'		=> 'Footer 1',
		'id'		=> 'footer-1',
		'before_widget'	=> '',
		'after_widget'	=> '',
		'before_title'	=>	'<h4>',
		'after_title'	=>	'</h4>'
	));

	register_sidebar(array(
		'name'		=> 'Footer 2',
		'id'		=> 'footer-2',
		'before_widget'	=> '',
		'after_widget'	=> '',
		'before_title'	=>	'<h4>',
		'after_title'	=>	'</h4>'
    ));
    
    register_sidebar(array(
		'name'		=> 'Sidebar',
		'id'		=> 'sidebar',
		'before_widget'	=> '<div class="panel panel-default sidebar-widget">',
		'after_widget'	=> '</div></div>
		',
		'before_title'	=> '<div class="panel-heading"><h3 class="panel-title">',
		'after_title'	=> '</h3></div><div class="panel-body">'
	));
}
add_action('widgets_init', 'init_widgets');

require get_template_directory() . '/inc/customizer.php';