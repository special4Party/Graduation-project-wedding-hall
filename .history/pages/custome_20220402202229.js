//scroll qoatation
(function autoScroll(){
$(".scroll .active-scroll").each(function(){

    if(!$(this).is(':last-child')){
        $(this).delay(3000).fadeOut(1000,function(){
            $(this).removeClass('active-scroll').next().addClass('active-scroll').fadeIn();
            autoScroll();
        });
    }else{
        $(this).delay(3000).fadeOut(1000,function(){
            
        });
    }
});

}());