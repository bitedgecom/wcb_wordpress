<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function child_my_theme_enqueue_styles() {

    $parent_style = 'twentyseventeen-style'; // This is parent style.
   
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css', // This is the child style
        array( $parent_style ), // this loads the child style as a dependency after the parent style 
        wp_get_theme()->get('Version') // this lets us bust the cache 
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
