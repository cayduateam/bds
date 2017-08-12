$(document).ready(function(){
    $('.canthiet').validate();
    $('.note').trumbowyg();
    function del(){
        if(confirm('Bạn chắc chắn muốn xóa')) return true;
        else return false;
    }
});