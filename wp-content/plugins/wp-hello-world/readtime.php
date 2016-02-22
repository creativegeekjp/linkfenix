<?php
 
/**
 * @package WP Read Time Plugin
 * @version 1.0
 */
/*
Plugin Name: Read Time
Plugin URI: 
Description: Plugin Example for WordPress
Author: Your Name Here
Version: 1.0
Author URI: 
*/
 
// Functions
// function readtime ($content) {
 
//   global $wpdb;
//   global $post;
 
//   $getpost = $wpdb->get_var($wpdb->prepare(
//       "SELECT post_content FROM wp_posts WHERE ID = %d", $post->ID));
 
//   $wordcount = str_word_count($getpost);
//   $minutestoread = $wordcount / 250;
 
//   $newcontent = "This post has ".$wordcount." words. 
//       It will take the average reader ".$minutestoread." minutes.
//       <br /><br />".$content;
//   return $newcontent;
// }
 
// // Hooks
// add_filter( 'the_content', 'readtime' );
/*
Plugin Name: Example Contact Form Plugin By Jino
Plugin URI: http://example.com
Description: Simple non-bloated WordPress Contact Form
Version: 1.0
Author: Agbonghama Collins
Author URI: http://w3guy.com
*/

function html_form_code($content) {
    
    if ( is_single() ) {
    	echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
    	echo '<p>';
    	echo 'Your Name (required) <br/>';
    	echo '<input type="text" name="cf-name" pattern="[a-zA-Z0-9 ]+" value="' . ( isset( $_POST["cf-name"] ) ? esc_attr( $_POST["cf-name"] ) : '' ) . '" size="40" />';
    	echo '</p>';
    	echo '<p>';
    	echo 'Your Email (required) <br/>';
    	echo '<input type="email" name="cf-email" value="' . ( isset( $_POST["cf-email"] ) ? esc_attr( $_POST["cf-email"] ) : '' ) . '" size="40" />';
    	echo '</p>';
    	echo '<p>';
    	echo 'Subject (required) <br/>';
    	echo '<input type="text" name="cf-subject" pattern="[a-zA-Z ]+" value="' . ( isset( $_POST["cf-subject"] ) ? esc_attr( $_POST["cf-subject"] ) : '' ) . '" size="40" />';
    	echo '</p>';
    	echo '<p>';
    	echo 'Your Message (required) <br/>';
    	echo '<textarea rows="10" cols="35" name="cf-message">' . ( isset( $_POST["cf-message"] ) ? esc_attr( $_POST["cf-message"] ) : '' ) . '</textarea>';
    	echo '</p>';
    	echo '<p><input type="submit" name="cf-submitted" value="Send"></p>';
    	echo '</form>';
    	
    	
	return;
	}
	else {
		return $content;
	}
}
function notify()
{
    echo "<h1>Contact Form Plugin</h1><br>";
}

add_action('the_content', 'notify');

add_filter('the_content', 'html_form_code' );


?>

