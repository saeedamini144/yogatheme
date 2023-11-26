    <footer>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <h2 class="title-footer mb-lg-5">
                        Yoga for the untamed spirit
                    </h2>
                    <div class="social-card">
                        <a href="#"><li class="fa fa-facebook"></li></a>
                        <a href="#"><li class="fa fa-instagram"></li></a>
                       <a href="#"> <li class="fa fa-twitter"></li></a>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <ul class="footer-list mb-4">
                        <li class="fa fa-location-arrow ps-3"></li><span>YOGA CENTER</span>
                    </ul>
                    <p class="text-muted">401 Broadway, 22th floor, Orchard view, London, UK</p>
                </div>
                <div class="col-lg-3 mb-3">
                    <ul class="footer-list mb-4">
                        <li class="fa fa-paper-plane ps-3"></li><span>NEWSLETTER</span>
                    </ul>
                    <p class="text-muted">One time 50% discount could immediately turn many subscriber</p>
                </div>
                <div class="col-lg-3 mb-3">
                    <ul class="footer-list mb-4">
                        <li class="fa fa-camera ps-3"></li><span>PHOTO GALLERY</span>
                    </ul>
                    <div class="imggallery">
                        <a href="/wordpress/wp-content/uploads/2023/10/gallery1.jpg" data-lightbox="img-gallery2"><img src="/wordpress/wp-content/uploads/2023/10/gallery1.jpg" alt="gallery1"></a>
                        <a href="/wordpress/wp-content/uploads/2023/10/gallery2.jpg" data-lightbox="img-gallery3"><img src="/wordpress/wp-content/uploads/2023/10/gallery2.jpg" alt="gallery2"></a>
                        <a href="/wordpress/wp-content/uploads/2023/10/gallery3.jpg" data-lightbox="img-gallery4"><img src="/wordpress/wp-content/uploads/2023/10/gallery3.jpg" alt="gallery3"></a>
                        <a href="/wordpress/wp-content/uploads/2023/10/gallery5.jpg" data-lightbox="img-gallery1"><img src="/wordpress/wp-content/uploads/2023/10/gallery5.jpg" alt="gallery5"></a>
                        <a href="/wordpress/wp-content/uploads/2023/10/gallery6.jpg" data-lightbox="img-gallery5"><img src="/wordpress/wp-content/uploads/2023/10/gallery6.jpg" alt="gallery5"></a>
                        <a href="/wordpress/wp-content/uploads/2023/10/gallery7.jpg" data-lightbox="img-gallery6"><img src="/wordpress/wp-content/uploads/2023/10/gallery7.jpg" alt="gallery7"></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                            if(function_exists('the_custom_logo')){
                            // the_custom_logo( ); add dynamic logo
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id );
                            // print_r($logo);
                            }
                        ?>      
                        <img src="<?php echo $logo[0] ?>" alt="">
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted">© 2023 Yogga Theme is proudly powered by saaed.amini@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 <!-- <script src="wp-content/themes/yogatheme/assets/javascripts/jquery-3.6.0.js"></script>
    <script src="wp-content/themes/yogatheme/assets/javascripts/bootstrap.min.js"></script>
    <script src="wp-content/themes/yogatheme/assets/javascripts/bootstrap.bundle.min.js"></script>
    <script src="wp-content/themes/yogatheme/assets/javascripts/bootstrap.esm.min.js"></script>
    <script src="wp-content/themes/yogatheme/assets/javascripts/splide.min.js"></script>
    <script src="wp-content/themes/yogatheme/assets/javascripts/wow.min.js"></script>
    <script src="wp-content/themes/yogatheme/assets/javascripts/js-yoga.js"></script>
    <script src="wp-content/themes/yogatheme/assets/javascripts/owl.carousel.min.js"></script>
    <script src="wp-content/themes/yogatheme/assets/javascripts/lightbox.min.js"></script>   -->
    <!-- <script>
        var burger = document.getElementById("burger");
        burger.addEventListener("click", change);
        function change(){
        const menuItem = document.getElementById("mainmenu");
        menuItem.classList.toggle("menu-item-show");
        const span1 = document.getElementById("span-1");
        span1.classList.toggle("span1-1");
        const span2 = document.getElementById("span-2");
        span2.classList.toggle("span2-2");
        const span3 = document.getElementById("span-3");
        span3.classList.toggle("span3-3");
        }
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:5,
    nav:false,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
    });
    </script> -->
</html>

