let $ = jQuery.noConflict();

// -------framwork css callback-----------
const headMove = document.getElementById("Holeheader");

window.onscroll = function scrollHead(){

    if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80){

        headMove.classList.add("headers");

    }else{

        headMove.classList.remove("headers");

    }
}

function scrollFunction(){

    if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80){

        document.getElementById("Holeheader").style.backgroundColor = "black";

    }else{

        document.getElementById("Holeheader").style.backgroundColor = "transparent";

    }
}



// var burger = document.querySelector("#burger");
// burger.addEventListener("click", change());
// function change(){
//     const menuItem = document.getElementById("mainmenu");
//     menuItem.classList.toggle("menu-item-show");
//     const span1 = document.getElementById("span-1");
//     span1.classList.toggle("span1-1");
//     const span2 = document.getElementById("span-2");
//     span2.classList.toggle("span2-2");
//     const span3 = document.getElementById("span-3");
//     span3.classList.toggle("span3-3");
// }


// -------framwork css callback-----------

// var splide1 = new Splide('.splide3', {
//     type: 'fade',
//     rewind: true,
//     arrows: boolean = false,
// });
// splide1.mount();


// jQuery Code Area
$(document).ready(function(){


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

    var splide2 = new Splide( '.splide', {
        type        : 'loop',
        perPage     : 1,
        focus       : 'center',
        height      : '10rem',
        autoScroll  : {
            speed: 2,
        },
        breakpoints : {
            640: {
                perPage: 1,
                gap    : '.7rem',
                height : '6rem',
                focus  : 'center',
                height   : '10rem',
            },
            480: {
                perPage: 1,
                //gap    : '.7rem',
                height : '6rem',
                focus  : 'center',
                height   : '10rem',
            },
    },
    } );
    splide2.mount();    

    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    });
      
    new WOW().init();

});
