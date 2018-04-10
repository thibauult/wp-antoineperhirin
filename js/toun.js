(function ($) {

    //
    // @see home.php
    //

    function updatePostDescription(id) {
        var h5 = $('#carouselHome .caption-' + id + ' h5').text();
        var article = $('#carouselHome .caption-' + id + ' article').clone();
        var footer = $('#carouselHome .caption-' + id + ' footer').clone();

        $('#carouselHome .post-description h3').text(h5);
        $('#carouselHome .post-description article').replaceWith(article);
        $('#carouselHome .post-description footer').replaceWith(footer);

        $('#carouselHome .carousel-controls .carousel-page').removeClass('active');
        $('#carouselHome .carousel-controls .carousel-page-' + id).addClass('active');
    }

    $('#carouselHome').on('slide.bs.carousel', function (event) {
        updatePostDescription(event.to);
    });

    updatePostDescription(0);

})(jQuery);