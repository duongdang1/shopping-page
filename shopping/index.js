$(document).ready(function(e){
    //banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    })
    //top sale carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive: {
            0:{
                items: 1
            },

            600:{
                items: 3
            },

            1000:{
                items: 5
            }


        }
    })

    //isotope filter
    var $grid = $(".grid").isotope({
        itemSelector: ".grid-item",
        layoutMode: 'fitRows'
    });

    //filter item on click
    $('.button-group').on("click", "button",function(){
        let filterValue = $(this).attr('data-filter');
        $grid.isotope({filter: filterValue});

    })




})




