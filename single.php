<?php get_header();  ?>

<main id="main">

    <div class="the-breadcrumb">
        <?php if(function_exists('bcn_display')) bcn_display(); ?>
        <?php previous_post_link('%link', '>', true); ?>
        <?php next_post_link('%link', '<', true); ?>
        <a href="https://www.facebook.com/sharer.php" target="_blank">f</a>
    </div>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'loop-templates/content', 'single' ); ?>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
