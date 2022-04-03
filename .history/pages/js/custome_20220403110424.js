//scroll qoatation
(function autoScroll(){
$(".scroll .active-scroll").each(function(){

    if(!$(this).is(':last-child')){
        $(this).delay(2000).fadeOut(500,function(){
            $(this).removeClass('active-scroll').next().addClass('active-scroll').fadeIn();
            // document.getElementsByClassName('active')[1].style.backgroundColor='#777eee';
            // document.getElementById('p1').nextElementSibling.style.backgroundColor='#777eee';
            autoScroll();
        });
        
    }else{
        $(this).delay(1500).fadeOut(500,function(){
            $(this).removeClass('active-scroll');
            $('.scroll div').eq(0).addClass('active-scroll').fadeIn();
            autoScroll();
        });
    }
});
}());

//----------------------------------







