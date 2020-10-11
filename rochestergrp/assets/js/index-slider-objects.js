$(document).ready(function() {
    // car slider
    new Splide("#cars-slider", {
        type: "loop",
        perPage: 3,
        focus: "center",
        autoplay: true,
        pagination: false,
        breakpoints: {
            992: {
                perPage: 1,
            },
        },
    }).mount();
    // customer review slider
    new Splide("#customer-review-slider", {
        type: "loop",
        perPage: 1,
        focus: "center",
        autoplay: true,
        pagination: false,
    }).mount();


});