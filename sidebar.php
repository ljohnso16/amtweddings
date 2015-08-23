<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amtweddings
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

		<div id="secondary" class="widget-area col-md-3 col-lg-3" role="complementary">
		<div class="well">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!-- .well -->
</div><!-- #secondary -->
	</div> <!-- .row -->
</div> <!-- .container -->
