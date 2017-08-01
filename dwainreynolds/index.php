<?php get_header(); ?>

<?php get_template_part('partials/social_icons'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container">
		<div class="row">

 <main class="col-9">

		<h1>The Feed</h1>

	<p><img src="img/bernie.jpg" alt="Bernie Sanders" width="97%" class="bernie"></p>

	<div class="card1">
		<h4>July 26th, 2017</h4>
		<h2>A Cleaner Michigan</h2>

		<img src="img/michigan.jpg" alt="Michigan" width="100%;" class="image">

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua…</p>

		<p><a href= "#" class="read"> READ MORE</a> </p>
</div>

<div class="card2">
	<h4>July 28th, 2017</h4>
	<h2>Rebuild Our Infrastructure</h2>

	<img src="img/bridge.jpg" alt="Michigan" width="100%;" class="image">

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua…</p>

	<p><a href= "#" class="read"> READ MORE</a> </p>
</div>

<div class="card3">
	<h4>July 31st, 2017</h4>
	<h2>Democratic Rights for All</h2>

	<img src="img/americanflag.jpg" alt="Michigan" width="100%;" class="image">

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua…</p>

	<p><a href= "#" class="read"> READ MORE</a> </p>
</div>

<?php endwhile; ?>

</main>

<?php else: ?>
	<h3>Sorry, nothing was found.</h2>

<aside class="col-3">

	<form class="searchform cf">
		<input type="text" placeholder="Search the whole site here...">
		<button type="submit">Search</button>
	</form>

	<form class="archiveform cf">
		<input type="text" placeholder="Browse the archives here...">
		<button type="submit">Browse</button>
	</form>

	<!--Join Our Newsletter-->
	<div class="Center">
	<form class="SignUp">
		<!-- Left: Outside-->
	<div class="arrow arrow--3">
		<p>Join Our Newsletter</p>
	</div>
	<!--End Left Outside-->

    <input type="email" class="SignUp__input" placeholder="youremail@example.com" />
    <button type="submit" class="SignUp__button">
      Go!
    </button>
  </form>

	<button class="recent">Recent Posts</button>
	<button>Most Popular Posts</button>
</div>
</aside>

<?php endwhile; endif;?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
