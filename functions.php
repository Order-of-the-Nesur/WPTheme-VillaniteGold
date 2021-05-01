<?php
    function add_theme_scripts() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );   
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), 1.1, true);
    }   
    function register_my_menus() {
        register_nav_menus(
            array(
                'header-menu' => __( 'Header Menu' )
            )
        );
    }
    add_action( 'init', 'register_my_menus' );
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
?>