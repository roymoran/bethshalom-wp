<?php

function load_stylesheets()
{
    // Add Adobe Source San Pro Font
    wp_enqueue_style('add_adobe_font', 'https://use.typekit.net/isd3dsn.css', false);

    // Enque required wordpress stylesheet
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

    // Enque stylesheet for home page 
    wp_register_style('home', get_template_directory_uri() . '/assets/stylesheets/home.css', array(), false, 'all');
    wp_enqueue_style('home');

    // Enque stylesheet for about page 
    wp_register_style('about-page', get_template_directory_uri() . '/assets/stylesheets/about.css', array(), false, 'all');
    wp_enqueue_style('about-page');

    // Enque stylesheet for services page 
    wp_register_style('services-page', get_template_directory_uri() . '/assets/stylesheets/services.css', array(), false, 'all');
    wp_enqueue_style('services-page');

    // Enque stylesheet for committees page
    wp_register_style('committees-page', get_template_directory_uri() . '/assets/stylesheets/committees.css', array(), false, 'all');
    wp_enqueue_style('committees-page');

    // Enque stylesheet for media page
    wp_register_style('media-page', get_template_directory_uri() . '/assets/stylesheets/media.css', array(), false, 'all');
    wp_enqueue_style('media-page');

    // Enque stylesheet for studying here page
    wp_register_style('studying-here-page', get_template_directory_uri() . '/assets/stylesheets/studying-here.css', array(), false, 'all');
    wp_enqueue_style('studying-here-page');

    // Enque stylesheet for contact us page
    wp_register_style('contact-us-page', get_template_directory_uri() . '/assets/stylesheets/contact.css', array(), false, 'all');
    wp_enqueue_style('contact-us-page');

    // Enque stylesheet for donate page
    wp_register_style('donate-page', get_template_directory_uri() . '/assets/stylesheets/donate.css', array(), false, 'all');
    wp_enqueue_style('donate-page');

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

function register_contact()
{
    if ($_POST['contact-form-submit']) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $recipient = "romoran1@outlook.com";

        $headers  = 'MIME-Version: 1.0' . "\r\n"
            . 'Content-type: text/html; charset=utf-8' . "\r\n"
            . 'From: ' . $email . "\r\n";

        $txt = "You received an email with the following details: \nEmail:" . $email . "\nName: " . $name . "\nWebsite" . $website . "\n\nMessage: " . $message;

        if (mail($recipient, $subject, $txt, $headers)) {
            echo "<p>Thank you for contacting us, $name. You will get a reply within 24 hours.</p>";
            header("Location: "."http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"); 
            exit();
        } else {
            echo '<p>We are sorry but the email did not go through.</p>';
            header("Location: "."http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"); 
            exit();
        }
    }
}

add_action('init', 'register_my_menus');
add_action('init', 'register_contact');
add_action('wp_enqueue_scripts', 'load_stylesheets');

add_theme_support('menus');
