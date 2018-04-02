<?php
get_header();

global $post;

$posts = get_posts(array(
    'posts_per_page'   => 5,
    'category_name'    => 'realisations'
));
?>

<div id="home">
    <div id="carouselHome" class="carousel slide" data-ride="carousel">
        <div class="row">
            <div class="col-8">
                <div class="carousel-inner">
                    <?php $i = 0; foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                        <div class="carousel-item <?php echo $i == 0 ? 'active' : '' ?>">
                            <?php the_post_thumbnail('full', ['class' => 'd-block w-100']); ?>
                            <div class="<?php echo 'caption-'.$i++ ?> d-none">
                                <h5><?php the_title() ?></h5>
                                <?php the_excerpt() ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-4">

                <div class="row">
                    <div class="col">
                        <div class="post-description">
                            <h3><?php the_title() ?></h3>
                            <?php the_excerpt() ?>
                        </div>
                    </div>
                </div>

                <div class="carousel-controls">
                    <a class="carousel-control" href="#carouselHome" role="button" data-slide="prev">
                        <span aria-hidden="true"><</span>
                        <span class="sr-only">Prev</span>
                    </a>
                    <a class="carousel-control" href="#carouselHome" role="button" data-slide="next">
                        <span aria-hidden="true">></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <ol>
                        <li data-target="#carouselHome" data-slide-to="0" class="carousel-page carousel-page-0 active">1</li>
                        <li data-target="#carouselHome" data-slide-to="1" class="carousel-page carousel-page-1">2</li>
                        <li data-target="#carouselHome" data-slide-to="2" class="carousel-page carousel-page-2">3</li>
                        <li data-target="#carouselHome" data-slide-to="3" class="carousel-page carousel-page-3">4</li>
                        <li data-target="#carouselHome" data-slide-to="4" class="carousel-page carousel-page-4">5</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    function updatePostDescription(id) {
        var h5 = jQuery('#carouselHome .caption-' + id + ' h5').text();
        var excerpt = jQuery('#carouselHome .caption-' + id + ' p:first').text();
        var href = jQuery('#carouselHome .caption-' + id + ' a').attr('href');

        jQuery('#carouselHome .post-description h3').text(h5);
        jQuery('#carouselHome .post-description p:first').text(excerpt + '...');
        jQuery('#carouselHome .post-description a').attr('href', href);

        jQuery('#carouselHome .carousel-controls .carousel-page').removeClass('active');
        jQuery('#carouselHome .carousel-controls .carousel-page-' + id).addClass('active');
    }

    jQuery('#carouselHome').on('slide.bs.carousel', function (event) {
        updatePostDescription(event.to);
    });

    updatePostDescription(0);

</script>

<?php
wp_reset_postdata();
get_footer();
?>
