<?php

// START - to register and enqueue style.css, bootstrap and font awesome 

function hamlet_register_styles(){

    $version = wp_get_theme()->get('Version');

    /* array('hamlet-bootstrap') allows boostrap to load before style.css
    because style.css is dependent on bootstrap */

    // enqueued stylesheet
    wp_enqueue_style('hamlet-style', get_template_directory_uri() . "/style.css"
    , array('hamlet-bootstrap'), $version, 'all');    

     // enqueued bootstrap
    wp_enqueue_style('hamlet-bootstrap',
    "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    , array(), '4.4.1', 'all');                     

    //enqueued font awesome
    wp_enqueue_style('hamlet-fontawesome'
    , "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    , array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'hamlet_register_styles');

// END - to register and enqueue style.css, bootstrap and font awesome


// START - to register and enqueue scripts

function hamlet_register_scripts(){

    wp_enqueue_script('hamlet-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js"
    , array(), '3.4.1', true);

    wp_enqueue_script('hamlet-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    , array(), '1.16.0', true);

    wp_enqueue_script('hamlet-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    , array(), '4.4.1', true);

    wp_enqueue_script('hamlet-main', get_template_directory_uri() . "/assets/js/main.js"
    , array(), '1.0', true);

}

add_action('wp_enqueue_scripts', 'hamlet_register_scripts');

// END - to register and enqueue scripts

?>
