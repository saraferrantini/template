<?php


//funzione generica che richiama il file css
function custom_theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

//funzione che carica tutti i file dello style.css all'interno del nostro tema
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');


function custom_theme_setup() {
//per il menù di navigazione
    register_nav_menu('primary', 'Primary Menu');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_setup');


function add_bootstrap() {
    wp_enqueue_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css");
    wp_enqueue_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js");  
}

add_action('wp_enqueue_scripts', 'add_bootstrap');

// function add_jquery() {
//     wp_enqueue_script('jquery');
// }

// add_action('wp_enqueue_scripts', 'add_jquery');

?>
