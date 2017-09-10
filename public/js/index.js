// $('.owl-carousel').owlCarousel({
//     items: 1,
//     autoplay: true,
//     loop: true,
//     nav: true,
//     navText: ['<','>'],
//     dots: true,

//     responsive: {
//         0: {
//             items: 1,
//             nav: true
//         },
//         600: {
//             items: 1,
//             nav: false
//         },
//         1000: {
//             items: 1,
//         }
//     }
// });


$('#lastest_news').owlCarousel( {
    loop: true,
    center: true,
    items: 3,
    margin: 30,
    autoplay: true,
    dots:true,
    nav:true,
    autoplayTimeout: 8500,
    smartSpeed: 450,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        1170: {
            items: 4
        }
    }
});