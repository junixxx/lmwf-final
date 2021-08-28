<?php 

// Style and Script Files

function load_css() {
    wp_register_style('lmwf_main_css', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('lmwf_main_css');

    wp_register_style('font-awesome', get_template_directory_uri() . '/css/fontawesome-v5/css/all.min.css', array(), false, 'all');
    wp_enqueue_style('font-awesome');

    wp_register_style('aos-animation', get_template_directory_uri() . '/css/aos.css', array(), false, 'all');
    wp_enqueue_style('aos-animation');

    

}

add_action('wp_enqueue_scripts', 'load_css');

function load_js() {

    wp_register_script('lmwf_main_js',  get_template_directory_uri() . '/js/app.js', array(), '1.0', true );
    wp_enqueue_script('lmwf_main_js');

    wp_register_script('aos-animation',  get_template_directory_uri() . '/js/aos.js', array(), '1.0', true );
    wp_enqueue_script('aos-animation');

}

add_action('wp_enqueue_scripts', 'load_js');

//Site Features

add_theme_support('menus');

?>