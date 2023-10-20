<?php
/**
 * On Theme Activation.
 *
 * @package petbook-wp
 */

function create_petbook_pages() {
    // Define the El Template name
    $el_template = 'El Template';

    // Create an array of page data
    $pages = array(
        'home' => array(
            'title' => 'Home',
            'content' => 'This is the home page content',
        ),
        'about' => array(
            'title' => 'About Us',
            'content' => 'This is the about us page content',
        ),
        'pricing' => array(
            'title' => 'Pricing',
            'content' => 'This is the pricing page content',
        ),
        'blog' => array(
            'title' => 'Blog',
            'content' => 'This is the blog page content',
        ),
        'contact' => array(
            'title' => 'Contact Us',
            'content' => 'This is the contact us page content',
        ),
    );

    // Loop through the page data array and create each page
    foreach ( $pages as $slug => $page) {
        $new_page = array(
            'post_title' => $page['title'],
            'post_content' => $page['content'],
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_slug' => $slug,
            'page_template' => $el_template, // Add the El Template as the page template
        );
        wp_insert_post($new_page);
    }

    // Create a primary menu and add the pages to it
    $primary_menu = wp_create_nav_menu('Primary Menu');

    foreach ( $pages as $slug => $page ) {
        $menu_item = array(
            'menu-item-object-id' => get_page_by_path($slug)->ID,
            'menu-item-object' => 'page',
            'menu-item-title' => $page['title'],
            'menu-item-status' => 'publish',
            'menu-item-type' => 'post_type',
        );
        wp_update_nav_menu_item($primary_menu, 0, $menu_item);
    }
}

add_action( 'after_switch_theme', 'create_petbook_pages' );
