<?php
/**
 * Remove admin toolbar menu items.
 *
 * @package petbook-wp
 */

add_action('admin_bar_menu', function ( WP_Admin_Bar $menu ) {
    $menu->remove_node('comments'); // Comments
    $menu->remove_node('customize'); // Customize
    $menu->remove_node('dashboard'); // Dashboard
    $menu->remove_node('edit'); // Edit
    $menu->remove_node('menus'); // Menus
    $menu->remove_node('new-content'); // New Content
    $menu->remove_node('search'); // Search
    // $menu->remove_node('site-name'); // Site Name
    $menu->remove_node('themes'); // Themes
    $menu->remove_node('updates'); // Updates
    $menu->remove_node('view-site'); // Visit Site
    $menu->remove_node('view'); // View
    $menu->remove_node('widgets'); // Widgets
    $menu->remove_node('wp-logo'); // WordPress Logo
}, 999);