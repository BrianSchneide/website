<?php /* Template Name: Main-Page */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section id='slide-container'>
		

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>





		<?php endwhile; ?>

		<?php endif; ?> 

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>