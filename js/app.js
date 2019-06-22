//init carousel instagram
$('.feed_instagram').owlCarousel({
    loop: true,
    dots: false,
    nav: true,
    autoplay: false,
    autoplayHoverPause: true,
    navText: ["<button class='prev'>Prev</button>", "<button class='next'>Next</button>"],

    responsive: {
        0: {
            items: 2,
        },
        576: {
            items: 2,
        },
        768: {
            items: 3,
        },
        992: {
            items: 4,
        },
        1200: {
            items: 5,
        }
    }
});