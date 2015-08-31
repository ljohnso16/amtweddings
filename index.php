<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package amtweddings
 */

get_header(); ?>
<div class="container">
	<div class="row">
	<div id="primary" class="col-md-9 col-lg-9">
		<main id="main" class="site-main" role="main">
				<header>
					<h1 class="page-title screen-reader-text">Welcome to AMT American Express Weddings Division</h1>
				</header>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
