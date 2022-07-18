<?php 
function add_love_theme_scripts(){
    //MAIN STYLES & SCRIPTS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/assets/css/partials/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style('owl-carousel-theme', get_template_directory_uri() . '/assets/css/partials/owl.theme.default.min.css', array(), false, 'all');
    wp_enqueue_style('aos-css', get_template_directory_uri() . '/assets/css/aos.css', array(), false, 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/main.css', array(), false, 'all');
    wp_enqueue_style( 'facss', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css', array(), 3.5, true);
	wp_enqueue_style( 'animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), 3.5, true);

    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.slim.min.js', array(), 3.5, true);
	wp_enqueue_script( 'wowjs', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), 3.5, true);
    wp_enqueue_script( 'fajs', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/solid.min.js', array(), 3.5, true);
    wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/assets/js/aos.js', array(), 1.1, true);
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1.1, true);
    
    /* wp_enqueue_script( 'maps','https://maps.googleapis.com/maps/api/js?key=AIzaSyBYzNaz0UQm8-WIwTx2DkadUGxtzVza1AE&v=weekly&language=ee&dummy=dummy.js', array(), 1.1, true); */
    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), 3.5, true);
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), 1.1, true);
}
add_action('wp_enqueue_scripts', 'add_love_theme_scripts');
