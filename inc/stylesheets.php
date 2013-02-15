<?php
/**
 * Register and enqueue the front end CSS
 *
 * @package Base Station
 * @since 1.0
 */

/* Load Foundation and theme styles */
function basestation_theme_styles() {

    $basestation = wp_get_theme();

    /* Load core Foundation and off canvas CSS */
    wp_enqueue_style( 'foundation', basestation_locate_template_uri( 'css/foundation.min.css' ), array(), $basestation['Version'], 'all' );
    wp_enqueue_style( 'offcanvas', basestation_locate_template_uri( 'css/offcanvas.css' ), array( 'foundation' ), $basestation['Version'], 'all' );

    /* Load theme styles */
    wp_enqueue_style( 'basestation-style', get_stylesheet_uri(), array( 'foundation' ), $basestation['Version'], 'all' );
}
add_action( 'wp_enqueue_scripts', 'basestation_theme_styles' );