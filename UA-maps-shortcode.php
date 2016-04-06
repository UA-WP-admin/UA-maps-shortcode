<?php
/*
Plugin Name:       UA Maps Shortcode
Plugin URI:        https://you.uark.edu
Description:       Embed campus maps in your WordPress site
Version:           1.0.0
Author:            Sky Shabatura
Author URI:        https://github.com/skyshab/
License:           GPL-2.0+
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/

function ua_maps_shortcode( $atts ) {
    $a = shortcode_atts( array(
        'building' => '1',
        'width' => '450',
        'height' => '250',
    ), $atts );
    
    return sprintf('<iframe width="%s" height="%s" src="https://campusmaps.uark.edu/embed/?buildingId=%s" frameborder="0"></iframe>', $a['width'], $a['height'], $a['building']);
}
add_shortcode( 'ua_maps', 'ua_maps_shortcode' );