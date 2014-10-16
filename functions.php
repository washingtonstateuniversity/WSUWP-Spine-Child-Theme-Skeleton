<?php
/**
 * Custom functionality required by your child theme can go here. Use this
 * to override any defaults provided by the Spine parent theme through
 * the provided actions and filters.
 */

// Uncomment this line and replace the spine_child prefix with one of your own.
//add_action( 'wp_enqueue_scripts', 'spine_child_enqueue_scripts', 11 );
/**
 * Hooking into wp_enqueue_scripts allows you to add custom Javascript to every front
 * end page view. Using available APIs in WordPress, you can restrict this to
 * limited page views as well.
 *
 * As with the action above, change the prefix of this function from spine_child
 */
function spine_child_enqueue_scripts() {
	// This enqueues a script, located in this project's /js/ directory, and tells WordPress
	// that jQuery is also required. The final parameter - true - loads the script in the footer.
	wp_enqueue_script( 'wsu-spine-child', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ), spine_get_script_version(), true );
}
