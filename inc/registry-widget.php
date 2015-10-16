<?php

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');


add_action( 'widgets_init', function(){
     register_widget( 'wedding_registry_widget' );
});
/**
 * Adds wedding_registry_widget widget.
 */
class wedding_registry_widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'wedding_registry_widget', // Base ID
			__('Wedding Registry Widget', 'amtweddings'), // Name
			array( 'description' => __( 'List of recent AMT Wedding Registries', 'amtweddings' ), ) // Args
		);
	}
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
  public function widget( $args, $instance ) {
    $recent_posts = wp_get_recent_posts(array(  'numberposts' => 8,'post_type'=>'wedding_registry', 'orderby' => 'post_date', 'post_status' => 'publish'));
		$i = 0;
    foreach( $recent_posts as $recent )
    {
			$i++;
			if($i==1)
			{
					echo'<div class="1st-registry-row" >';
			}

	$spouse_a = get_post_meta( $recent["ID"], 'wedding_registry_field_a', true );
$spouse_b = get_post_meta( $recent["ID"], 'wedding_registry_field_b', true );
      echo '<div class="registry-entry col-sm-1 col-md-3 col-lg-3 text-center">';

			echo '<div class="reg-thumb-container"><a href="' . get_permalink($recent["ID"]) . '" title="'.$spouse_a.' & '.$spouse_b.'" >'.get_the_post_thumbnail($recent['ID'],'medium-cropped',array('class'=>'img-responsive center-block reg-thumb')).'</a></div>';
			echo '<div class="couple-text"><a href="' . get_permalink($recent["ID"]) . '" title="'.$spouse_a.' & '.$spouse_b.'" ><span class="icon-heart icom circled-icon"></span><p class="solid-text">'.$spouse_a.'<br/> & <br/>'.$spouse_b.'</p></a></div>';
			echo'</div>';
			if($i==4)
			{
					echo'</div><div class="2nd-registry-row">';
			}
			if($i==8)
			{
					echo'</div>';
			}
    }
  }
}
