$(function () {
    // $(window).on('load', function(){
    //     $('.preloader').delay(500).fadeOut('slow', function(){
    //     	$(this).attr('style', 'display: none !important');
    //     });
    // });

    baguetteBox.run('.gallery');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    $('.scrollToTop').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    $('#videoPlayBtn').on('click', function (e) {
        e.preventDefault();
        $("#videoPlayer")[0].src += "?autoplay=1";
        setTimeout(function () {
            $('#videoPlayBtn').hide();
        }, 1000);

    });
});