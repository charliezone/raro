($ => {
    $(document).ready(function(){

        $('#services .project a').click(function(e){
            e.preventDefault();
            const modal = $(`#${$(this).attr('target')}`);
            modal.fadeIn();
        });

        $('.service-modal .close-btn').click(e => {
            e.preventDefault();
            $('.modal-container').fadeOut();
        });

        $('#services .project a').mouseenter(function(){
            $(this).find('.project-category-container').fadeOut();
        });

        $('#services .project a').mouseleave(function(){
            $(this).find('.project-category-container').fadeIn();
        });
    });
})(jQuery);