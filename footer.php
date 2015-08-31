<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package amtweddings
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="container">
      <div class="row">
        <?php
        if ( is_active_sidebar( 'footer-sidebar-left' ) )
          {dynamic_sidebar( 'footer-sidebar-right' );}
        if ( is_active_sidebar( 'footer-sidebar-right' ) )
          {dynamic_sidebar( 'footer-sidebar-right' );}
      ?>
      </div>
    <div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6">
				<?php if (has_nav_menu('footer-menu', 'amtweddings')) { ?>
		            <nav role="navigation"><h4>Explore</h4>
		            <?php wp_nav_menu(array(
		//              'container'       => 'div',
    //              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		              'menu_class'      => 'footer-menu',
		              'theme_location'  => 'footer-menu')
		            );
		            ?>
		          </nav>
            	<?php } ?>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6">
				<p class="alignright">&copy; <?php _e('All Rights Reserved', 'amtweddings'); ?> <?php echo date('Y'); ?> - <a href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
			</div>
		</div><!-- .row -->
	</div><!-- .containr -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
