<?php
/*
 Plugin Name: Randomize Main Loop
 Plugin URI: https://generalchicken.net
 Description: Sets the main loop to a random order 
 Version: 1.0
 Author: John Dee
 Author URI: https://generalchicken.net
 GitHub Plugin URI: https://github.com/JohnDeeBDD/WP-Random-Order-Main-Loop
 */

namespace RandomizeMainLoop;

function randomizeMainLoop( $query ) {
	if ( ! is_admin() && $query->is_main_query() ) {
		$query->set( 'orderby', 'rand' );
	}
}
add_action( 'pre_get_posts', 'RandomizeMainLoop\randomizeMainLoop' );
