<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="wp-content/themes/yogatheme/style.css">
     <link rel="stylesheet" href="style/Global-style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="style/animate.min.css">
    <link rel="stylesheet" href="style/splide.min.css">
    <link rel="stylesheet" href="style/splide-skyblue.min.css">
    <link rel="stylesheet" href="style/owl.carousel.min.css">
    <link rel="stylesheet" href="style/lightbox.min.css">
    <link rel="stylesheet" href="style/footer.css">-->
    <link rel="icon" type="image/x-icon" href="pic/cropped-favicon-180x180.png"> 
    <title><?php get_the_title(); ?></title>
    <?php
        wp_head();
    ?>
</head>
<body>
    <header id="header">
            <div class="navbar container-fluid" id="Holeheader">
                <div class="navbar-brand">
                <?php
                    if(function_exists('the_custom_logo')){
                    // the_custom_logo( ); add dynamic logo
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id );
                    // print_r($logo);
                    }
                ?>      
                    <a href="#"><img src="<?php echo $logo[0] ?>" id="logomenu" alt=""></a>
                </div>
                <div class="burgermenu d-lg-none" id="burger">
                    <span class="span1" id="span-1"></span>
                    <span class="span2" id="span-2"></span>
                    <span class="span3" id="span-3"></span>
                </div>
                <ul class="menu-item" id="mainmenu">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Courses</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Trainer</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Pages</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">ContactUs</a></li>
                </ul>
                <div class="social">
                    <li class="fa fa-facebook fa-lg"></li>
                    <li class="fa fa-telegram fa-lg"></li>
                    <li class="fa fa-instagram fa-lg"></li>
                </div>
            </div>
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide ">
                            <img src="wp-content/themes/yogatheme/assets/images/slide-01-min.jpg" alt="">
                            <!-- <div class="ttbackground">
                                <div class="tt">
                                    <p class="tttext">
                                        saeed amini
                                    </p>
                                </div>
                            </div> -->
                        </li>
                        <li class="splide__slide"><img src="wp-content/themes/yogatheme/assets/images/slide-03-min.jpg" alt=""></li>
                        <li class="splide__slide"><img src="wp-content/themes/yogatheme/assets/images/slide-04-min.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
    </header>