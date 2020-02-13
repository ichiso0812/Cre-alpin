$(document).ready(function () {
    //menu
    $("#burger_menu").click(function(e){
        $("#menu").toggleClass("active")
    })
    //slider
    $(".slider").slick({
        infinite: true,
        slidesToShow: 2,
        arrows: false,
        dots: false,
    });
});
