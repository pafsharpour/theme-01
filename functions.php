<?php
// Enqueue scripts and styles
function enqueue_custom_styles_and_scripts() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('custom-index', get_template_directory_uri() . '/styles/output.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . 'style.css');
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/index.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');