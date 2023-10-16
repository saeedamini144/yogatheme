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
        // wp_enqueue_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/javascripts/jquery-3.6.0.js' ,  array(), '3.6.0', false);
        wp_enqueue_script('yogatheme-splide' , get_template_directory_uri() . '/assets/javascripts/splide.min.js' , array() , '1.0' , false);
        // wp_enqueue_script('yogatheme-splide' , 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js' , array('jquery') , '1.0' , true);
        wp_enqueue_script('yogatheme-bootstrapmin' , get_template_directory_uri() . '/assets/javascripts/bootstrap.min.js'  , array('jquery') , '1.0' , false);
        wp_enqueue_script('yogatheme-bootstrapbundle' , get_template_directory_uri() . '/assets/javascripts/bootstrap.bundle.min.js' , array('jquery') , '1.0' , false);
        wp_enqueue_script('yogatheme-bootstrapesm' , get_template_directory_uri() . '/assets/javascripts/bootstrap.esm.min.js' , array('jquery') , '1.0' , false);
        wp_enqueue_script('yogatheme-lightbox' , get_template_directory_uri() . '/assets/javascripts/lightbox.min.js' , array('jquery') , '1.0' , false);
        wp_enqueue_script('yogatheme-owl' , get_template_directory_uri() . '/assets/javascripts/owl.carousel.min.js' , array('jquery') , '1.0' , false);
        wp_enqueue_script('yogatheme-wow' , get_template_directory_uri() . '/assets/javascripts/wow.min.js' , array('jquery') , '1.0' , false);
        wp_enqueue_script('yogatheme-yoga' , get_template_directory_uri() . '/assets/javascripts/js-yoga.js' , array() , '1.0' , false);
    }
    add_action('wp_enqueue_scripts' , 'yoga_register_scripts');

    // function yoga_register_scripts(){
    //     wp_enqueue_script('jquery');
    //     wp_enqueue_script('yogatheme-splide' , get_template_directory_uri() . '/assets/javascripts/splide.min.js' , array('jquery') , '1.0' , false);
    //     wp_enqueue_script('yogatheme-bootstrap.min', get_template_directory_uri() . '/assets/javascripts/bootstrap.min.js' , array('jquery') ,"1.0" , true );
    //     wp_enqueue_script('yogatheme-all.min', get_template_directory_uri() . '/assets/javascripts/all.min.js' , array('jquery') ,"1.0" , true );
    //     wp_enqueue_script('yogatheme-bootstrap.bundle.min', get_template_directory_uri() . '/assets/javascripts/bootstrap.bundle.min.js' , array('jquery') ,"1.0" , true );
    //     wp_enqueue_script('yogatheme-wow.min', get_template_directory_uri() . '/assets/javascripts/wow.min.js' , array('jquery') ,"1.0" , true );
    //     wp_enqueue_script('yogatheme-splide.min', get_template_directory_uri() . '/assets/javascripts/splide.min.js' , array('jquery') ,"1.0" , true );
    //     wp_enqueue_script('yogatheme-mainjs', get_template_directory_uri() . '/assets/javascripts/js-yoga.js' , array() ,"1.0" , true );
    // }
    // add_action("wp_enqueue_scripts", "yoga_register_scripts" );

    
?>