<?php get_header();  ?>

<main id="main" class="category">

    <div class="the-breadcrumb">
        <?php if(function_exists('bcn_display')) bcn_display(); ?>
        <?php //previous_post_link('%link', '>', true); ?>
        <?php //next_post_link('%link', '<', true); ?>
    </div>

    <h1>R&eacute;alisations</h1>

    <?php $the_query = new WP_Query( array('posts_per_page' => 9) ); ?>

    <div class="cat-row">
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="category-item">
		    <?php the_post_thumbnail( 'small' );	 ?>
            <h2><?php the_title() ?></h2>
            <a href="<?php the_permalink() ?>">+</a>
        </div>

    <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>
