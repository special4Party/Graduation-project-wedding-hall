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
            $(this).removeClass('active-scroll');
            $('.scroll div').eq(0).addClass('active-scroll').fadeIn();
            autoScroll();
        });
    }
});

}());
//--------------------------

(function autoColor(){
    $(".test-imonias ul li").each(function(){
    
        if(!$(this).is(':last-child')){
            $(this).delay(3000).fadeOut(1000,function(){
                $(this).removeClass('active').next().addClass('active').fadeIn();
                autoScroll();
                $(this).style.backgroundColor=('#333');

            });
        }else{
            $(this).delay(3000).fadeOut(1000,function(){
                $(this).removeClass('active');
                $('.test-imonias ul').eq(0).addClass('active').fadeIn();
                autoScroll();
            });
        }
    });
    
    }());
//----------------------------------
(function autoColor(){
    document.getElementById('active').style.backgroundColor=('#333');
});
