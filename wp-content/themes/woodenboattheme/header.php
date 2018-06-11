<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
			// conditionizr.com
			// configure environment tests
			conditionizr.config({
				assets: '<?php echo get_template_directory_uri(); ?>',
				tests: {}
			});
		</script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header" role="banner">

				<!-- logo -->

				<!-- nav -->
				<nav class="nav" role="navigation">
					<a class="logo" href="<?php echo home_url(); ?>">
						<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						<img src="<?php echo get_template_directory_uri(); ?>/img/header-logo.png" alt="Logo" class="logo-img">
					</a>
					<div class="nav-center-border"></div>
					<input class="menu-btn" type="checkbox" id="menu-btn" />
					<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
					<ul class="menu">
						<?php nav_left(); ?>
					</ul>

				</nav>
				<div class="nav-circle"></div>
				<div class="nav-circle-border"></div>

				<!-- /nav -->

				<!-- <a href="<?php echo get_template_directory_uri(); ?>../../../../contact">
<div class="vragen_button">
<p>Vragen</p>
</div>
</a> -->
			</header>
			<div class="fullscreenbg">
			</div>
			<div id="fullscreen-image" >
				<div id="closeFullscreen">
					<img src="<?php echo get_template_directory_uri(); ?>/img/close-button.png" alt="close" class="close-button">
				</div>
				
					<div id="fullscreenimage_left">
<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="arrow" class="arrowl">
					</div>
					<div id="fullscreenimage_right">
<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="arrow" class="arrowr">
					</div>

			</div>
			<!-- /header -->
