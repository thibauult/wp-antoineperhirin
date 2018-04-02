<?php
get_header();

global $post;

$postPerPage = 5;

$posts = get_posts(array(
    'posts_per_page'   => $postPerPage,
    'category_name'    => 'realisations'
));
?>

<div id="home">
    <div id="carouselHome" class="carousel slide" data-ride="carousel">
        <div class="row">
            <div class="col-md-8 col-xs-12">
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
            <div class="col-md-4 col-xs-12">

                <div class="row mt-xs-2">
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
                        <?php for($i = 0; $i < $postPerPage; $i++) : ?>
                        <li data-target="#carouselHome"
                            data-slide-to="<?php echo $i; ?>"
                            class="carousel-page carousel-page-<?php echo $i; ?>">
                            <?php echo $i + 1; ?>
                        </li>
                        <?php endfor; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
wp_reset_postdata();
get_footer();
?>
