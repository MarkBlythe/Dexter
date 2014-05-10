<?php
/**
 * Dexter Custom Theme Functions.
 * @package Dexter
 */
if (!function_exists('dexter_setup')):
function dexter_setup(){

  // Add RSS feed links to head.
  add_theme_support('automatic-feed-links');

  //Everybody needs post thumbnails available for posts and pages.
  add_theme_support('post-thumbnails');

  // Register the default menu.
  register_nav_menus( array('primary' => __('Primary Menu', 'dexter')));

  // Enable support for Post Formats.
  add_theme_support( 'post-formats', array('aside', 'image', 'video', 'quote', 'link'));

  // Enable support for HTML5.
  add_theme_support( 'html5', array('comment-list','search-form','comment-form','gallery','caption'));

} // End dexter_setup
endif;
add_action('after_setup_theme', 'dexter_setup');

// Register the sidebar widgets.
function dexter_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Sidebar', 'dexter' ),
		'id' => 'sidebar',
		'description' => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

} // End dexter_widgets_init
add_action('widgets_init', 'dexter_widgets_init');

// Ready all theme scripts and styles.
function dexter_scripts() {

	wp_enqueue_style('dexter-style', get_stylesheet_uri());
	if (is_singular() && comments_open() && get_option( 'thread_comments')){
		wp_enqueue_script('comment-reply');
	}

} // End dexter_scripts
add_action('wp_enqueue_scripts', 'dexter_scripts');