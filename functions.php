<?php

// function include_custom_template_files() {
    // Include any additional template files here
    // require_once get_template_directory() . '/template-parts/content-abloutus.php';
    // require_once get_template_directory() . '/template-parts/content-article.php';
    // require_once get_template_directory() . '/template-parts/content-blog.php';
    // require_once get_template_directory() . '/template-parts/content-contactus.php';
    // require_once get_template_directory() . '/template-parts/content-home.php';
    // require_once get_template_directory() . '/template-parts/content-landing.php';
    // require_once get_template_directory() . '/template-parts/content-projects.php';

    // Add more require_once statements for other template files if needed
// }
// add_action( 'template_redirect', 'include_custom_template_files' );



// Enqueue scripts and styles
function enqueue_custom_styles_and_scripts() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('custom-index', get_template_directory_uri() . '/styles/output.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/styles/tailwind.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/index.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');



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



// Display header menu
//اینجا اومده مدیریت کرده به حای اینکه این کد رو توی فایل دیگه بنویسیم
function display_header_menu() {
    wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'menu_class' => 'header-menu',
        'container' => '',
    ));
}


// Display footer menu
function display_footer_menu() {
    wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'menu_class' => 'footer-menu',
        'container' => '',
    ));
}


function add_custom_menu_class($classes, $item, $args, $depth) {
    if ($args->theme_location == 'header-menu') {
        $classes[] = 'flex justify-center items-center gap-4 [&_li>a]:after:block [&_li>a]:after:border-b [&_li>a]:after:border-solid [&_li>a]:after:border-primary [&_li>a]:after:transition-all [&_li>a]:after:w-0 [&_li:hover>a]:after:w-full [&_li.active>a]:after:w-full [&>li]:relative';

        // Add any other custom classes you need for the main menu

    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_custom_menu_class', 10, 4);



function add_custom_submenu_class($classes, $args, $depth) {
    if ($args->theme_location == 'header-menu') {
        $classes[] = 'flex flex-wrap sm:flex-nowrap items-center justify-between gap-4 [&>li]:h-7 [&>li>a_svg]:h-full [&>li>a_svg_*]:transition-all [&>li>a:hover_svg>rect]:stroke-secondary [&>li>a:hover_svg>path]:fill-secondary';

        // Add any other custom classes you need for the submenu

    }
    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'add_custom_submenu_class', 10, 3);





// function register_header_menu() {
//     register_nav_menu('header-menu', 'Header Menu');
// }
// add_action('after_setup_theme', 'register_header_menu');



// // Register header menu
// function header_menu_init() {
//     register_nav_menu('header-menu', 'Header Menu');
// }
// add_action('after_setup_theme', 'header_menu_init');