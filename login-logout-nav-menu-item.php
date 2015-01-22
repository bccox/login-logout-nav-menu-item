<?php
/*
Plugin Name: Automatic Login/Logout Menu Item
Description: Adds a login menu item for non-authenticated users and a logout menu item for logged in users.
Version: 1.0
Author: Brian Cox on behalf of Philly GiveCamp
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
          exit;

function autov_add_loginout_navitem($items) {
  if (is_user_logged_in()) {
    $items .= '<li class="right"><a href="' . wp_logout_url() . '">Logout</a></li>';
  } else {
    $items .= '<li class="right"><a href="/login">Login</a></li>';
  }
  return $items;
}
add_filter('wp_nav_menu_items', 'autov_add_loginout_navitem');
?>
