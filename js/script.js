$(".js-range-slider").ionRangeSlider({
    type: "double",
    skin: "flat",
    grid: true,
    prefix: "R",
    min: 50000,
    max: 2000000,
    prettify_enabled: true
});

$(".js-range-slider-mileage").ionRangeSlider({
    type: "double",
    skin: "flat",
    grid: true,
    postfix: " km",
    min: 0,
    max: 100000,
    step: 100,
    prettify_enabled: true
});

$(".js-range-slider-year").ionRangeSlider({
    type: "double",
    skin: "flat",
    grid: true,
    min: 2000,
    max: 2020,
    step: 1,
    prettify_enabled: false
});


$(function() {
    $('.filter-make-model ul li a').click(function(e) {
        $(this).siblings('.filter-dropdown').slideToggle();
    });
});