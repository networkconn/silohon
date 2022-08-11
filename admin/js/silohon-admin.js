jQuery(document).ready(function($){
    var mediaUploader;
    $('#upload-logo').on('click', function(e){
        e.preventDefault();
        if( mediaUploader ){
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose a Logo Image',
            button: {
                text: 'Chose a Image'
            },
            multiple: false
        });
        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#silohon-custom-logo').val(attachment.url);
            $('#slohonPreviewLogo').css('background-image', 'url(' + attachment.url + ')');
        });
        mediaUploader.open();
    });
});