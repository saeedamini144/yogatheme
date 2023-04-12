const burger = document.getElementById("burger");
burger.addEventListener("click",change);
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
const headMove = document.getElementById("Holeheader");
window.onscroll= function scrollHead(){
    if(document.body.scrollTop>80 || document.documentElement.scrollTop>80){
        headMove.classList.add("headers");
    }else{
        headMove.classList.remove("headers");
    }
}
// -------framwork css callback-----------
var splide = new Splide('.splide', {
    type: 'fade',
    rewind: true,
    arrows: boolean = false,
});
splide.mount();

lightbox.option({
  'resizeDuration': 200,
  'wrapAround': true
})

new WOW().init();
// -------framwork css callback-----------
