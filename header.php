<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
    <meta name="robots" content="index,follow">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

    <div class="container" id="header" style="margin-bottom: 20px">
        <div class="row align-items-end">
            <div class="col">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri().'/images/antoine-large.png' ?>">
                </a>
            </div>
            <div class="col text-right">
                <h1>Infographiste</h1>
                <h2>Communication graphique et visuelle</h2>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-2">
                <?php get_template_part( 'sidebar-left' ); ?>
            </div>

            <div class="col-10">
