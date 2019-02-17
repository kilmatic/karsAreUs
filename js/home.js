do {
    $(document).ready(function(){
        var vp_height = $(window).height();
        $('.carousel-item').css({"height":vp_height.toString()});
    });
} while (vp_height > 0);