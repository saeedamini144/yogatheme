<?php
    function yoga_theme_support(){
        add_theme_support('title_tag');//dynamice title
        add_theme_support('custom_logo');//daynamice logo
        add_theme_support('post-thumbnails'); //call post featur image
    }
    add_action('after_setup_theme' , 'yoga_theme_support');
    
    function yoga_register_style(){
        $version = wp_get_theme()->get("version");
        wp_enqueue_style('yogatheme-style', get_template_directory_uri() . '/style.css', array("yogatheme-bootstrap"), $version , 'all');
        wp_enqueue_style('yogatheme-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.rtl.min.css' ,  array() , '5.0', 'all');
        wp_enqueue_style('yogatheme-owl', get_template_directory_uri() . '/assets/css/splide.min.css', array() , '1.0', 'all');
        wp_enqueue_style('yogatheme-animate', get_template_directory_uri() . '/assets/css/animate.min.css', array() ,'1.0', 'all');
        wp_enqueue_style('yogatheme-lightbox', get_template_directory_uri() . '/assets/css/lightbox.min.css', array() , '1.0', 'all');
        wp_enqueue_style('yogatheme-splide', get_template_directory_uri() . '/assets/css/splide.min.css', array() , '1.0', 'all');
    }
    add_action('wp_enqueue_scripts' , 'yoga_register_style');

    function yoga_register_scripts(){
        wp_enqueue_script('jquery');
        wp_enqueue_script('yogatheme-yoga' , get_template_directory_uri() . '/assets/js/js-yoga.js' . array('jquery') , '1.0' , 'true');
        wp_enqueue_script('yogatheme-bootstrap-bundle' , get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js' . array('jquery') , '1.0' , 'true');
        wp_enqueue_script('yogatheme-bootstrap-esm' , get_template_directory_uri() . '/assets/js/bootstrap.esm.min.js' . array('jquery') , '1.0' , 'true');
        wp_enqueue_script('yogatheme-bootstrap-min' , get_template_directory_uri() . '/assets/js/bootstrap.min.js' . array('jquery') , '1.0' , 'true');
        wp_enqueue_script('yogatheme-lightbox' , get_template_directory_uri() . '/assets/js/lightbox.min.js' . array('jquery') , '1.0' , 'true');
        wp_enqueue_script('yogatheme-owl' , get_template_directory_uri() . '/assets/js/owl.carousel.min.js' . array('jquery') , '1.0' , 'true');
        wp_enqueue_script('yogatheme-splide' , get_template_directory_uri() . '/assets/js/splide.min.js' . array('jquery') , '1.0' , 'true');
        wp_enqueue_script('yogatheme-wow' , get_template_directory_uri() . '/assets/js/wow.min.js' . array('jquery') , '1.0' , 'true');
    }
    add_action('wp_enqueue_scripts' , 'yoga_register_scripts')
?>