<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amtweddings
 */

?><!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header">
	<nav id="primary-menu">
		<div class="primenav navbar navbar-static-top navbar-default navbar-fixed-top">
				<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
				<div class="navbar-header">
					<button type="button" class="pull-left navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="navbar-collapse collapse navbar-responsive-collapse">
					<?php

					$args = array(
						'theme_location' => 'primary',
						'depth'      => 2,
						'container'  => false,
						'menu_class'     => 'nav navbar-nav navbar-left',
						'walker'     => new Bootstrap_Walker_Nav_Menu()
						);

					if (has_nav_menu('primary')) {
						wp_nav_menu($args);
					}

					?>
<div class="pull-right" id="call-phonenumber">
	call 800-999-2599
</div>
				</div>
		</div>
	</nav>
<div class="sol-container" >
	<div class="sol-header-overlay text-center">
						<div id="header-overlay-text" class="text-center ">Honeymoons</div>
					<div class="header-phone"><hr class="header-phone-bars"/><div style="display:inline">800.999.2599</div><hr class="header-phone-bars"/></div>
					<div class="text-center header-social-icons"><a href="https://www.facebook.com/Travelinsiders"><span class="icon-facebook2"></span></a><a href="https://twitter.com/AMT_Travel"><span class="icon-twitter2"></span></a><span class=" icon-google-plus2"></span></div>
				<div class="text-center"><img src="<?php echo get_template_directory_uri();?>/img/AMT-AmexLogo-min.png" alt="Header Logo" class="header-logo"></div>
	</div>
	<?php	echo do_shortcode('[soliloquy slug="home"]');?>
</div>

	<nav>
		<div class="secondary-navbar navbar navbar-static-top navbar-default">
				<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
				<div class="navbar-header"></div>

				<div class="seconnd-nav navbar-collapse collapse navbar-responsive-collapse">
					<?php

					$args = array(
						'theme_location' => 'secondary',
						'depth'      => 2,
						'container'  => false,
						'menu_class'     => 'nav navbar-nav navbar-center',
						'walker'     => new Bootstrap_Walker_Nav_Menu()
						);

					if (has_nav_menu('secondary')) {
						wp_nav_menu($args);
					}

					?>

				</div>
		</div>
	</nav>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
