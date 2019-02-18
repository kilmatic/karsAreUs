let vp_height;
$(document).ready(function(){
    vp_height = $(window).height();
    $('.carousel-item, body').css({"height":vp_height.toString()});
});