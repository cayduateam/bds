$('.owl-carousel').owlCarousel({
    items: 1,
    autoplay: true,
    loop: true,
    nav: true,
    navText: ['<','>'],
    dots: true,

    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 1,
            nav: false
        },
        1000: {
            items: 1,
        }
    }
});
