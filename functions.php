<?php

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'script-jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );



add_theme_support( 'post-thumbnails' );
add_image_size( 'anteprima', 300, 300, true );


function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow"> Read More</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


?>