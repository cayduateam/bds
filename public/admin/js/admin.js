$(document).ready(function(){
    $('.canthiet').validate();
    function del(){
        if(confirm('Bạn chắc chắn muốn xóa')) return true;
        else return false;
    }
    $('.summernote').summernote();
});