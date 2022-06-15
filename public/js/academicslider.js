$(document).ready(function(){
    $('.academic-slider').owlCarousel({
        margin:10,
        nav:false,
        dots:false,
        responsive:{
            400:{
                    items:1
            },
            600:{
                items:1
            },
            999:{
                items:3
            }

        }
    })
});
$('.student-slider').owlCarousel({
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        400:{
                items:1
        },
        600:{
            items:1
        },
        999:{
            items:3
        }

    }
})

