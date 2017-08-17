function del(){
    if(confirm('Bạn chắc chắn muốn xóa')) return true;
    else return false;
}

$(document).ready(function(){
    $('.canthiet').validate();
    $('.summernote').summernote();

    $('.summernote_large').summernote({
        height: 300,
        focus: true
    });

    $(".checkonoff").bootstrapSwitch();
});