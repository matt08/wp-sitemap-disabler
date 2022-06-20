<?php
/**
 * Plugin Name: WordPress Sitemap Disabler
 * Plugin URI:
 * Description: Disable the automatic WordPress Sitemap
 * Version: 1.0
 * Author: Mateusz Mazurek
 * Author URI: https://mateuszmazurek.pl
 */

//* prevent directly access
if (!defined('ABSPATH')) die();

//* Disable WordPress Sitemap
add_filter( 'wp_sitemaps_enabled', '__return_false' );
