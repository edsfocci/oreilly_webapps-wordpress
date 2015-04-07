<?php
/*
* Plugin Name: My Plugin
* Description: This is my plugin description.
* Author: Ed Solis
* Author URI: https://github.com/edsfocci
*/
?>

<?php
function my_plugin_wp_footer() {
  echo 'I read Building Web Apps with WordPress
    and now I am a WordPress Genius!';
}
add_action( 'wp_footer', 'my_plugin_wp_footer' );
?>

