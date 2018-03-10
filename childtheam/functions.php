<?php
function my_theme_enqueue_styles() {

    $parent_style = 'ColorNews-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Override theme default specification for product # per row
function loop_columns() {
    return 2; // 5 products per row
}
add_filter('loop_shop_columns', 'loop_columns', 999);


?>