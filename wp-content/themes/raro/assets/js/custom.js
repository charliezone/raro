($ => {
    $(document).ready(function(){

        $('#services .project a').click(function(e){
            e.preventDefault();
            $(`#${$(this).attr('target')}`).fadeIn();
        });

        $('.service-modal .close-btn').click(e => {
            e.preventDefault();
            $('.modal-container').fadeOut();
        });
    });
})(jQuery);