//scroll qoatation
(function autoScroll(){
$(".scroll .active-scroll").each(function(){

    if(!$(this).is(':last-child')){
        $(this).delay(3000).fadeOut(1000,function(){
            $(this).removeClass('active-scroll').next().addClass('active-scroll').fadeIn();
            $('p1').delay(3000).fadeOut(1000,function(){
                document.getElementById('p1').style.backgroundColor='#777eee';
            })
            
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

//----------------------------------
