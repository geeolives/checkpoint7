<?php
/*
Template Name: Agenda
*/
get_header(); ?>

    <!--Body Content-->

<?php get_template_part('partials/social_icons'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="container">
		<div class="row">

			<aside class="col-12">

				<h1>Agenda</h1>

				<p><img src="<?php bloginfo('template_url');?>/assets/img/bernie.jpg" width="84%" alt="Bernie Sanders" class="bernie" title="Bernie Sanders"/></p>

				<div class="learn">Learn More About Dwain's</div>
				<div class="vision">Vision For Michigan.</div>

				<!--Donation Box-->
				<div class="jello-horizontal">
				<div class="donate-wrapper">
					<h1 class="donate">Contribute Today</h1>
					<div class="donate-box-wrapper"></div>
					<div class="donate-box">$10</div>
					<div class="donate-box">$25</div>
					<div class="donate-box">$50</div>
					<div class="donate-box">$100</div>
					<div type="submit" class="btn btn-green">Donate</div>
				</div>
			</div>
			</aside>

			<main class="col-12">

				<div class="issues">
					<button>All Issues</button>
					<button>Economy</button>
					<button>Human Rights</button>
					<button>Democracy</button>
					<button>A Democratic Constitution</button>
					<button>Environment</button>
				</div>

				<?php the_content(); ?>

		</div>
	</div>

	<?php endwhile; endif;?>

<?php get_footer(); ?>
