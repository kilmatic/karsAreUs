// $(window).scroll(function(){
//     let slideHeader = $('.bd-example .cover').height();
//     let wScroll = $(this).scrollTop();

//     if(wScroll > $('.bd-example').offset().bottom - ($(window).height() / 1.2)){
//         $('.carousel-item').each(function(i){
//             setTimeout(function(){
//                 $('.carousel-item').eq(i).addClass('.is-showing');
//             }, (700 * (Math.exp(i * 0.14))) - 700);
//         });
//     }

//     if(wScroll > $('.album').offset().top - $(window)>height()){
//         let offset = (Math.min(0, wScroll - $('.album').offset().top + $(window).height() - 350)).toFixed();
//         $('.album').css({'transform': 'translate('+ Math.abs(offset) + Math.abs(offset) + 'px, ' + Math.abs(offset * 0.2) + 'px)'});
//     }

// });