<?php
get_header();
?>

<main id="main">

    <div class="the-breadcrumb">
        <?php if(function_exists('bcn_display')) bcn_display(); ?>
        <?php previous_post_link('%link', '&gt;', true); ?>
        <?php next_post_link('%link', '&lt;', true); ?>
    </div>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'loop-templates/content', 'single' ); ?>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
