<?php
    function yoga_theme_support(){
        add_theme_support('title-tag');//dynamice title
        add_theme_support( 'custom-logo' );//daynamice logo
        add_theme_support('post-thumbnails'); //call post featur image
    }
    add_action('after_setup_theme' , 'yoga_theme_support');

    //dynamic menu
    function yoga_theme_menu(){
        register_nav_menus(array("Primary"=> "descktop menu" , "mobile" => "mobile menu"));
    }
    add_action('init' , 'yoga_theme_menu');
    
    function yoga_register_style(){
        $version = wp_get_theme()->get("version");
        wp_enqueue_style('yogatheme-style', get_template_directory_uri() . '/style.css', array('yogatheme-bootstrap'), $version , 'all');
        wp_enqueue_style('yogatheme-fontawsome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' , array() , "1.0" , "all");
        wp_enqueue_style('yogatheme-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.rtl.min.css' ,  array() , '5.0', 'all');
        wp_enqueue_style('yogatheme-owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array() , '1.0', 'all');
        wp_enqueue_style('yogatheme-animate', get_template_directory_uri() . '/assets/css/animate.min.css', array() ,'1.0', 'all');
        wp_enqueue_style('yogatheme-lightbox', get_template_directory_uri() . '/assets/css/lightbox.min.css', array() , '1.0', 'all');
        wp_enqueue_style('yogatheme-splide', get_template_directory_uri() . '/assets/css/splide.min.css', array() , '1.0', 'all');
        wp_enqueue_style('yogatheme-splideskyblue', get_template_directory_uri() . '/assets/css/splide-skyblue.min.css', array() , '1.0', 'all');
    }   
    add_action('wp_enqueue_scripts' , 'yoga_register_style');


    function yoga_register_scripts(){
        // wp_enqueue_script('yogatheme-all.min', get_template_directory_uri() . '/assets/javascripts/all.min.js' , array('jquery') ,"1.0" , false );
        // wp_enqueue_script('yogatheme-bootstrapbundle' , get_template_directory_uri() . '/assets/javascripts/bootstrap.bundle.min.js' , array('jquery') , '1.0' , false);
        // wp_enqueue_script('yogatheme-bootstrapesm' , get_template_directory_uri() . '/assets/javascripts/bootstrap.esm.min.js' , array('jquery') , '1.0' , false);
        wp_enqueue_script('jquery');
        wp_enqueue_script('yogatheme-bootstrapmin' , get_template_directory_uri() . '/assets/javascripts/bootstrap.min.js'  , array('jquery') , '1.0' , false);
        wp_enqueue_script('yogatheme-lightbox' , get_template_directory_uri() . '/assets/javascripts/lightbox.min.js' , array('jquery') , '1.0' , false);
        wp_enqueue_script('yogatheme-owl' , get_template_directory_uri() . '/assets/javascripts/owl.carousel.min.js'  , array('jquery') , '1.0' , false);
        wp_enqueue_script('yogatheme-wow' , get_template_directory_uri() . '/assets/javascripts/wow.min.js' , array('jquery') , '1.0' , false);
        wp_enqueue_script('yogatheme-splide.min', get_template_directory_uri() . '/assets/javascripts/splide.min.js' , array('jquery') ,"1.0" , false );
        wp_enqueue_script('yogatheme-yoga' , get_template_directory_uri() . '/assets/javascripts/yoga.js' , '' , '1.0' , false);
    }
    add_action('wp_enqueue_scripts' , 'yoga_register_scripts');
?>