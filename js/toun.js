(function ($) {

    //
    // @see home.php
    //

    function updatePostDescription(id) {
        var h5 = $('#carouselHome .caption-' + id + ' h5').text();
        var excerpt = $('#carouselHome .caption-' + id + ' p:first').text();
        var href = $('#carouselHome .caption-' + id + ' a').attr('href');

        $('#carouselHome .post-description h3').text(h5);
        $('#carouselHome .post-description p:first').text(excerpt + '...');
        $('#carouselHome .post-description a').attr('href', href);

        $('#carouselHome .carousel-controls .carousel-page').removeClass('active');
        $('#carouselHome .carousel-controls .carousel-page-' + id).addClass('active');
    }

    $('#carouselHome').on('slide.bs.carousel', function (event) {
        updatePostDescription(event.to);
    });

    updatePostDescription(0);

})(jQuery);