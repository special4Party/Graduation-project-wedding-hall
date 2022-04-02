//scroll qoatation
(function autoScroll(){
$(".scroll .active-scroll").each(function(){

    if(!$(this).is(':last-child')){
        $(this).delay(3000).fadeOut(1000,function(){
            $(this).removeClass('active-scroll').next().addClass('active-scroll').fadeIn();
            // document.getElementsByClassName('active')[1].style.backgroundColor='#777eee';
            // document.getElementById('p1').nextElementSibling.style.backgroundColor='#777eee';
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
$(document).ready(function(){
    var colLi=$('.test-imonias ul li');
    function changeColor(){
        ('.test-imonias ul li').css('background','red');
    }
});






