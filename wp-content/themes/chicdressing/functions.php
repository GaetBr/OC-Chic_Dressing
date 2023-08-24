<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'chicdressing-style', get_template_directory() . 'C:/wamp64/www/Chic-Dressing/wp-content/themes/chicdressing/style.css');
}

add_filter( 'big_image_size_threshold', '__return_false' );

/*** Désenregistrer les fonts externes ***/

function dequeue_parent_google_fonts() {
    wp_dequeue_style('ashe-playfair-font');
    wp_dequeue_style( 'ashe-opensans-font' );
    wp_dequeue_style( 'ashe-kalam-font' );
    wp_dequeue_style( 'ashe-rokkitt-font' );
}

add_action('wp_enqueue_scripts', 'dequeue_parent_google_fonts', 999); // 999 = priorité Garantit le désenregistrement avant qu'ils ne soient ajoutés à la page. 