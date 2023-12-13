<?php

function include_custom_template_files() {
    // Include any additional template files here
    // require_once get_template_directory() . '/template-parts/content-abloutus.php';
    // require_once get_template_directory() . '/template-parts/content-article.php';
    // require_once get_template_directory() . '/template-parts/content-blog.php';
    // require_once get_template_directory() . '/template-parts/content-contactus.php';
    // require_once get_template_directory() . '/template-parts/content-home.php';
    // require_once get_template_directory() . '/template-parts/content-landing.php';
    // require_once get_template_directory() . '/template-parts/content-projects.php';


    // Add more require_once statements for other template files if needed
}

// Enqueue scripts and styles
function enqueue_custom_styles_and_scripts() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('custom-index', get_template_directory_uri() . '/styles/output.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/styles/tailwind.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/index.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');



add_action( 'template_redirect', 'include_custom_template_files' );
// Register menus
function register_custom_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_custom_menus');


function register_header_menu() {
    register_nav_menu('header-menu', 'Header Menu');
}
add_action('after_setup_theme', 'register_header_menu');