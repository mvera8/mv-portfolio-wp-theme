<?php
/**
 * Register theme defaults.
 *
 * @package petbook-wp
 */

add_action( 'after_setup_theme', function () {
    // Theme supports
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

    // Menus
    register_nav_menus([
        'primary-nav'  => __('Primary Navigation'),
        'footer-nav' => __('Footer Navigation'),
    ]);
});
