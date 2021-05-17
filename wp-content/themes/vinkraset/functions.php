<?php

define("TEMPLATE_DIR", __DIR__);
define("TEMPLATE_URL", get_bloginfo('template_url'));

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function enqueue_scripts() {	
	wp_enqueue_script('customscripts', get_bloginfo('template_url') . '/scripts.js');
  wp_enqueue_style('style', get_bloginfo('template_url') . '/style.css');  
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

function register_menu() {
    register_nav_menu('header-menu', 'Main Menu');
}
add_action( 'init', 'register_menu' );

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page( 'Allmäna inställning' );
}

function custom_editor_styles() {
	add_editor_style('style.css');
}
add_action('init', 'custom_editor_styles');

$shortcode_dir = get_template_directory() . '/shortcodes/';
foreach (glob($shortcode_dir."*.php") as $shortcode_file) {
	include $shortcode_file;
}

function my_acf_block_render_callback($block) {
  $slug = str_replace('acf/', '', $block['name']);
  if( file_exists( get_theme_file_path("/blocks/{$slug}.php") ) ) {
    include( get_theme_file_path("/blocks/{$slug}.php") );
  }
}

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	if( function_exists('acf_register_block') ) {
		acf_register_block(array(
			'name'				=> 'tdatest',
			'title'				=> __('TDA Testblock'),
			'description'		=> '',
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'dashicons-plus',
			'keywords'			=> array(),
		));
	}
}

/*include("register.php");
include("login.php")*/

?>