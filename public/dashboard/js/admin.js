$(document).ready(function(){
    $(".main-li").click(function(){
        $(this).find('.sub-menu').slideToggle();
        return false;
    });
});