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
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

add_theme_support('menus');
