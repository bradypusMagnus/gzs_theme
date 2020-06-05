<?php
function gzs_theme_support(){
/*Določa naslov strani*/ 
add_theme_support('title-tag');
/*Doda logotip*/
add_theme_support('custom-logo');
/*Doda naslovne slike*/
add_theme_support('post-thumbnails');
add_theme_support('widgets');
}
add_action('after_setup_theme', 'gzs_theme_support');

function gzs_menus(){
    $locations = array(
        'primary' => "Desktop primary menu",
        'foooter' => "Footer menu items"
    );
    register_nav_menus($locations);
}
add_action('init', 'gzs_menus');

function gzs_sidebars(){
    register_sidebar(
        array(
        'name' => "",
        'id' => "page-sidebar",
        'before title' => '<h2>',
        'after title' => '</h2>'
    ));
}
add_action('init', 'gzs_sidebars');

/* Velikost naslovnih slik */

add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 300, 200, true);

function gzs_dodaj_sloge(){
    $version = wp_get_theme()->get ( 'Version' );
    wp_enqueue_style('gzs-slogi', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('gzs-dodatno', get_template_directory_uri() . "/assets/css/custom.css", array(), $version, 'all');
    wp_enqueue_style('gzs-fontawesome', "https://use.fontawesome.com/releases/v5.13.0/css/all.css", array(), '5.13.0', 'all');
}
add_action('wp_enqueue_scripts', 'gzs_dodaj_sloge');

function gzs_dodaj_skripte(){
    $version = wp_get_theme()->get ( 'Version' );
    wp_enqueue_script('gzs-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.3.1', true);
    wp_enqueue_script('gzs-browser', get_template_directory_uri() . '/assets/js/browser.min.js', array(), '', true);
    wp_enqueue_script('gzs-breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array(), '', true);
    wp_enqueue_script('gzs-util', get_template_directory_uri() . '/assets/js/util.js', array(), '', true);
    wp_enqueue_script('gzs-main', get_template_directory_uri() . "/assets/js/main.js", array(), $version, true);
}
add_action('wp_enqueue_scripts', 'gzs_dodaj_skripte');
?>