function del(){
    if(confirm('Bạn chắc chắn muốn xóa')) return true;
    else return false;
}

$(document).ready(function(){
    $('.canthiet').validate();
    $('.summernote').summernote({
    	popover: {
         image: [],
         link: [],
         air: []
       }
    });

    $('.summernote_large').summernote({
        height: 300,
        focus: true,
        popover: {
         image: [],
         link: [],
         air: []
       }
    });

    $(".checkonoff").bootstrapSwitch();
});