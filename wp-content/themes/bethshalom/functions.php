<?php

function load_stylesheets()
{
    // Add Adobe Source San Pro Font
    wp_enqueue_style('add_adobe_font', 'https://use.typekit.net/isd3dsn.css', false);

    // Enque required wordpress stylesheet
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

    // Enque stylesheet for homepage 
    wp_register_style('home', get_template_directory_uri() . '/assets/stylesheets/home.css', array(), false, 'all');
    wp_enqueue_style('home');

    // Enque stylesheet for about page 
    wp_register_style('about-page', get_template_directory_uri() . '/assets/stylesheets/about.css', array(), false, 'all');
    wp_enqueue_style('about-page');

    // Enque stylesheet for services page 
    wp_register_style('services-page', get_template_directory_uri() . '/assets/stylesheets/services.css', array(), false, 'all');
    wp_enqueue_style('services-page');

    // Enque stylesheet for committees pages
    wp_register_style('committees-page', get_template_directory_uri() . '/assets/stylesheets/committees.css', array(), false, 'all');
    wp_enqueue_style('committees-page');

    // Enque stylesheet for media pages
    wp_register_style('media-page', get_template_directory_uri() . '/assets/stylesheets/media.css', array(), false, 'all');
    wp_enqueue_style('media-page');

    // Enque stylesheet for media pages
    wp_register_style('studying-here-page', get_template_directory_uri() . '/assets/stylesheets/studying-here.css', array(), false, 'all');
    wp_enqueue_style('studying-here-page');

    // Enque stylesheet for history page
    wp_register_style('history-page', get_template_directory_uri() . '/assets/stylesheets/history.css', array(), false, 'all');
    wp_enqueue_style('history-page');
}

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
}

add_action( 'init', 'register_my_menus' );
add_action('wp_enqueue_scripts', 'load_stylesheets');

add_theme_support('menus');
