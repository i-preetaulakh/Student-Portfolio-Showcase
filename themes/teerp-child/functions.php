<?php
/**
 * Teerp-Child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Teerp-Child
 * @since Teerp-Child 1.0
 */

function teerp_enqueue_scripts() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'teerp_enqueue_scripts');

function enqueue_logged_in_styles() {
    if (is_user_logged_in()) {
        wp_enqueue_style('logged-in-css', get_stylesheet_directory_uri() . '/loggedin-style.css');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_logged_in_styles');