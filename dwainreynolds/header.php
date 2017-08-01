<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php bloginfo('template_url');?>/assets/img/drfavicon.png" rel="shortcut icon" type="image/x-icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="author" content="Gisel Olivares">
		<meta name="description" content="This website has been created for educational purposes only. This site was created by Gisel Olivares for Dwain Reynolds, an aspiring politician. He is running for Michigan Governor in 2018 and is seeking endorsements from the Socialist and Green parties.">

		<!-- TYPEKIT / GOOGLE FONTS / FONTS.COM -->

		<!-- STYLES ARE ENQUED THROUGH FUNCTIONS.PHP -->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-103679122-1', 'auto');
  ga('send', 'pageview');
	</script>

		<header class="header">
			<a href="<?php bloginfo('url'); ?>"> <img src="<?php bloginfo('template_url');?>/assets/img/drlogo.png" width="50%" alt="Dwain Reynolds" /></a>
		</header>

		<nav>
			<ul class="navigation">
				<?php html5blank_nav(); ?>
			</ul>
		</nav>
