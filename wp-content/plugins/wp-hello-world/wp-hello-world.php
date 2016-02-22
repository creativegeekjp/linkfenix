<?php
/*
    Plugin Name: WP Hello World by Jino
    Plugin URI: www.cybernetikz.com
    Description: A simple hello world plugin for beginners.
    Version: 1.0.0
    Author: Jino
    Author URI: www.test.com
    License: GPL2
*/

add_filter('the_content','hello_world');

function hello_world($content)
{
	if ( is_single() ) {
		return $content . "<h1 style=\"color:#eb911d\">This is sample WP Hello World Plugin</h1>";
	}
	else {
		return $content;
	}
}

?>
