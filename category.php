<?php get_header();  ?>

<main id="main" class="category">

    <div class="the-breadcrumb">
        <?php if(function_exists('bcn_display')) bcn_display(); ?>
        <?php //previous_post_link('%link', '>', true); ?>
        <?php //next_post_link('%link', '<', true); ?>
    </div>

    <h1>R&eacute;alisations</h1>

    <?php

    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    $wp_query = new WP_Query(array(
        'paged' => $paged,
        'posts_per_page' => 9
    ));

    ?>

    <div class="row">
    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

        <div class="col-md-4 col-sm-12 mb-4">
            <div class="category-item">
                <a href="<?php the_permalink() ?>" >
                    <?php the_post_thumbnail( 'small' );	 ?>
                    <h2><?php the_title() ?></h2>
                    <span class="plus-button">+</span>
                </a>
            </div>
        </div>

    <?php endwhile; ?>
    </div>

    <footer class="row">
        <div class="col-1 col-xs-1">
            <a class="link" href="<?php echo get_previous_posts_page_link() ?>">&lt;</a>
        </div>
        <div class="col-10 col-xs-1">
            <?php the_posts_pagination( array( 'mid_size'  => 2 ) ); ?>
        </div>
        <div class="col-1 col-xs-1">
            <a class="link" style="float: right" href="<?php echo get_next_posts_page_link() ?>">&gt;</a>
        </div>

    </footer>

    <?php wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>
