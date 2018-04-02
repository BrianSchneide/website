<?php

/**
 * The main template file
 *
 * @version 1.0
 */

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <link href="https://fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Brian J. Schneide">
    <meta name="description" content="My Web Developer Portfolio">
    <title>Bs Design</title>
    <?php wp_head(); ?>
</head>

<body class="<?php get_body_class(); ?>">
    <div id="page" class="site">

        <header id="masthead" class="site-header" role="banner">

            <?php if ( has_nav_menu( 'primary' ) ) : ?>

                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'primary', 
                                'container_class' => 'top-navigation',
                                'menu_class' => 'nav navbar-bar' 
                                ) ); 
                        ?>
        <?php endif; ?>

        </header><!-- #masthead -->

    <div class="site-content-contain">
		<div id="content" class="site-content">

<div class="main-container">

        <?php

        // create custom post loop for scenes

        $args = array(
            'post_type' => 'Scene'
        );
        $query_scene = new WP_Query( $args );

        if ( $query_scene->have_posts() ) {
            while ( $query_scene->have_posts() ) {
                $query_scene->the_post(); ?>
                   
        <main id="box">
            <div class="layer" id="l1"></div>
            <div class="layer" id="l2"></div>
            <div class="layer" id="l3"></div>
            <div class="layer" id="l4"></div>
            <div class="layer" id="l5"></div>
		</main>

            <?php } ?>
        <?php } ?>

<div>

<?php get_footer(); ?>