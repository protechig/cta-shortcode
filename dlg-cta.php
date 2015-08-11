<?php
/**
 * Plugin Name: CTA Box Shortcode
 * Description: This plugin allows for styling of a box
 * Version: 1.0
 * Author: ProTech Internet Group
 * Author URI: https://protechig.com
 */

function dlg_cta($atts, $content = null) {
    extract( shortcode_atts( array(
        'bgcolor' => 'blue',
        'color' => '#000'
    ), $atts ) );
    $return_string = '<div style="background: ' . $bgcolor . '; color: ' . $color . ';">' . $content . '</div>';
    return $return_string; 
}

function register_shortcodes() {
    add_shortcode( 'dlg-banner', 'dlg_cta' );
}

add_action( 'init', 'register_shortcodes' );


    
