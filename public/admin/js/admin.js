function del(){
    if(confirm('Bạn chắc chắn muốn xóa')) return true;
    else return false;
}

$(document).ready(function(){

    // Define function to open filemanager window
    var lfm = function(options, cb) {
        var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager-bds';
        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
        window.SetUrl = cb;
    };
    
    // Define LFM summernote button
    var LFMButton = function(context) {
        var ui = $.summernote.ui;
        var button = ui.button({
            contents: '<i class="note-icon-picture"></i> ',
            tooltip: 'Insert image with filemanager',
            click: function() {
        
                lfm({type: 'image', prefix: '/laravel-filemanager-bds'}, function(url, path) {
                    context.invoke('insertImage', url);
                });

            }
        });
        return button.render();
    };
    //Define function to open filemanager window end

    $('.canthiet').validate();
    $('.summernote').summernote({
    	popover: {
            image: [],
            link: [],
            air: []
        },
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'undo']],
            ['fontsize', ['fontsize','hr']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['popovers', ['lfm','fullscreen','codeview']],
        ],
        buttons: {
            lfm: LFMButton
        },
    });

    $('.summernote_large').summernote({
        height: 300,
        focus: true,
        popover: {
            image: [],
            link: [],
            air: []
        },
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'undo']],
            ['fontsize', ['fontsize','hr']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['popovers', ['lfm','fullscreen','codeview']],
        ],
        buttons: {
            lfm: LFMButton
        }
    });

    $(".checkonoff").bootstrapSwitch();
});