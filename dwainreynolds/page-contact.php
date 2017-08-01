<?php
/*
Template Name: Contact
*/
get_header(); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />

    <!--Body Content-->
<?php get_template_part('partials/social_icons'); ?>

<div class="container">
	<div class="row">

		<h1><?php the_title(); ?> Me</h1>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(); ?>

			<aside class="col-12">

				<h2>Or contact us directly:</h2>
				<ul class="contact-list">
					<li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place"><a href="https://goo.gl/maps/XTGE6rMVW1H2" target="_blank"><?php the_field('address'); ?></a></span></i></li>

					<li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-616-805-9609" title="Give me a call"><?php the_field('phone_'); ?></a></span></i></li>
				</ul>

					<h3>To download our Press Kit, click here:</h3>
					<button type="submit" class="presskit">Press Kit</button>

					<br>
					<br>
					<br>
					<br>
					<br>

					<h2>Help us out by making a donation today!</h2>
					<div class="jello-horizontal">
					<div class="donate-wrapper">
						<h1 class="contribute">Contribute Today</h1>
						<div class="donate-box-wrapper"></div>
						<div class="donate-box">$10</div>
						<div class="donate-box">$25</div>
						<div class="donate-box">$50</div>
						<div class="donate-box">$100</div>
						<div type="submit" class="btn btn-green">Donate</div>
					</div>
				</div>
				</aside>
			</div>

		</div>
	</div>

<?php endwhile; endif;?>

<?php get_footer(); ?>
