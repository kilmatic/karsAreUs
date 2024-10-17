($ => {
    $(() => {
        $('.filter-card h2').click(function(e) {
            $(this).siblings('.filter-card').slideToggle();
        });
        $('.filter-make-model a').click(function(e) {
            $(this).siblings('.filter-dropdown').slideToggle();
        });
    });
    $('.range-slider').ionRangeSlider({
        skin: "flat",
        type: "double",
        grid: true,
        prefix: "R",
        min: 15000,
        max: 2000000,
        // prettify_enabled: true
    });
    $('#filterBtn').click(function(e) {
        let action = 'fetch_data';
        let minPrice = $('.irs-from').val();
        let maxPrice = $('.irs-to').val();
        let make = get_data('make');
        let model = get_data('model');
        let location = get_data('location');
        let mileage = get_data('mileage');
        let year = get_data('year');
        $.ajax({
            url: 'controller/filter_controller.php',
            method: 'POST',
            data: {
                action: action,
                minPrice: minPrice,
                maxPrice: maxPrice,
                make: make,
                model: model,
                location: location,
                mileage: mileage,
                year: year
            },
            success: (data) => {
                return console.log(data);
            }
        });
    });
    const get_data = (data) => {
        let filter = [];
        $('.' + data + ':checked').each(() => {
            filter.push($(this).val())
        });
        return filter;
    }
})(jQuery);