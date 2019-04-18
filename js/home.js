$(window).scroll(function(){
    // let slideHeader = $('.bd-example .cover').height();
    let wScroll = $(this).scrollTop();

    if(wScroll > $('.bd-example .cover').offset().top - ($(window).height() / 1.2)){
        $('.col-md-4').each(function(i){
            setTimeout(function(){
                $('.clothes-pics').eq(i).addClass('.is-showing');
            }, (700 * (Math.exp(i * 0.14))) - 700);
        });
    }

    if(wScroll > $('.album').offset().top - $(window)>height()){
        let offset = (Math.min(0, wScroll - $('.album').offset().top + $(window).height() - 350)).toFixed();
        $('.album').css('transform': 'translate('+ Math.abs(offset) + Math.abs(offset) + 'px, ' + Math.abs(offset * 0.2) + 'px)'});
    }


});