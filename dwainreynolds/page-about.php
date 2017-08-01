<?php
/*
Template Name: About
*/
get_header(); ?>

    <!--Body Content-->

<?php get_template_part('partials/social_icons'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="container">
		<div class="row">

	<main class="col-7">
	<h1 class="header1"><?php the_title(); ?></h1>

	<?php the_content(); ?>

	<p><img src="<?php bloginfo('template_url');?>/assets/img/samplefamily.jpg" width="100%" alt="Sample Family Image" class="familypic" title="Sample Family Image"/></p>

	<h3>Download the Press Kit:</h3>
	<button class="presskit"> PRESS KIT </button>
	</main>

	<aside class="col-5">
	<img src="<?php bloginfo('template_url');?>/assets/img/dwain.jpg" width="75%" alt="Dwain Reynolds" class="dwain" title="Dwain Reynolds" />


	<button class="donate">DONATE TODAY</button>

	<form action="#">

		<div class="solid">

			<h3>Subscribe to our mailing list</h3>
			<label class="desc" id="title1" for="Field1">Full Name</label>
			<div>
				<input id="Field1" name="Field1" type="text" class="field text fn" value="" size="8" tabindex="1">
			</div>
		</div>

		<div class="solid">
			<label class="desc" id="title3" for="Field3">
				Email
			</label>
			<div>
				<input id="Field3" name="Field3" type="email" spellcheck="false" value="" maxlength="255" tabindex="3">
		 </div>
		</div>

		<div class="solid">
			<label class="desc" id="title5" for="Field5">
				Zipcode
			</label>
			<div>
				<input id="Field5" name="Field5" type="text" spellcheck="false" value="" maxlength="255" tabindex="3">
		 </div>
		</div>

		<div class="solid">
			<div>
				<input id="saveForm" name="saveForm" type="submit" value="Subscribe" class="submit">
			</div>
		</div>

	</form>
	</aside>

</div>
</div>

<?php endwhile; endif;?>

<?php get_footer(); ?>
