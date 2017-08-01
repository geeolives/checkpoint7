<?php
/*
Template Name: Home
*/
get_header(); ?>

<?php get_template_part('partials/social_icons'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="container">
		<div class="row">

			<aside class="col-7">
			<h1 id="text"></h1>

<?php the_content(); ?>

	</div>
</div>

<?php endwhile; endif;?>

<?php get_footer(); ?>
