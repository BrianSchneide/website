<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Brian J. Schneide">
    <meta name="description" content="My Web Developer Portfolio">
    <title>Bs Design</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">

        <header id="masthead" class="site-header" role="banner">

            <?php get_template_part( 'template-parts/header/header', 'image' ); ?>

            <?php if ( has_nav_menu( 'top' ) ) : ?>
                <div class="navigation-top">
                    <div class="wrap">
                        <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
                    </div><!-- .wrap -->
                </div><!-- .navigation-top -->
            <?php endif; ?>

        </header><!-- #masthead -->

    <div class="site-content-contain">
		<div id="content" class="site-content">