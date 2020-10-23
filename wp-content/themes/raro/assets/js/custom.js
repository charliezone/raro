($ => {
    $(document).ready(function(){

        $('#services .project a').click(function(e){
            e.preventDefault();
            const imgUrl = $(this).find('figure > img').attr('src');
            const modal = $(`#${$(this).attr('target')}`);
            modal.find('.blog-thumbnail-bg').css('background-image', `url(${imgUrl})`);
            modal.find('.blog-thumbnail-img > img').attr('src', imgUrl);
            console.log($(modal));
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