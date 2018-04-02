<?php get_header();  ?>

<main id="main" class="category">

    <div class="the-breadcrumb">
        <?php if(function_exists('bcn_display')) bcn_display(); ?>
        <?php //previous_post_link('%link', '>', true); ?>
        <?php //next_post_link('%link', '<', true); ?>
    </div>

    <h1>R&eacute;alisations</h1>

    <?php $the_query = new WP_Query( array('posts_per_page' => 9) ); ?>

    <div class="row">
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php get_template_part( 'loop-templates/content', 'category' ); ?>
    <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>
