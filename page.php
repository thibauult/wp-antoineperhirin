<?php get_header();  ?>

    <main id="main">

        <div class="the-breadcrumb">
            <?php if(function_exists('bcn_display')) bcn_display(); ?>
        </div>

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'loop-templates/content', 'page' ); ?>

        <?php endwhile; ?>

    </main>

<?php get_footer(); ?>