<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <link rel="icon" type="image/icon" href="<?php echo get_template_directory_uri().'/images/favicon.ico' ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
    <meta name="robots" content="index,follow">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="container">

    <div id="header" class="row align-items-end" style="margin-bottom: 20px">
        <div class="logo-container col-md-6 col-xs-12">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo get_template_directory_uri().'/images/antoine-large.png' ?>">
                <span class="d-none" aria-hidden="true"><?php bloginfo( 'name' ); ?></span>
            </a>
        </div>
        <div class="col-md-6 col-xs-12 text-right">
            <h1>Infographiste</h1>
            <h2>Communication graphique et visuelle</h2>
        </div>
    </div>

    <div id = "menu-left" class="row">

        <div class="col-md-2 col-xs-12">
            <?php get_template_part( 'sidebar-left' ); ?>
        </div>

        <div class="col-md-10 col-xs-12">
