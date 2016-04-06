<?php
/*
Plugin Name:       UA Maps Shortcode
Plugin URI:        https://github.com/UA-WP-admin/UA-maps-shortcode.git
Description:       Embed campus maps in your WordPress site
Version:           1.0.0
Author:            Sky Shabatura
Author URI:        https://github.com/skyshab/
License:           GPL-2.0+
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/

// define the shortcode functionality
function ua_maps_shortcode( $atts ) {

    // merge defaults and user defined attributes
    $a = shortcode_atts( array(
        'building' => '1',
        'width' => '450',
        'height' => '250',
    ), $atts );

    // print out the maps iframe code
    return sprintf('<iframe width="%s" height="%s" src="https://campusmaps.uark.edu/embed/?buildingId=%s" frameborder="0"></iframe>', $a['width'], $a['height'], $a['building']);
}

// add the shortcode
add_shortcode( 'ua_maps', 'ua_maps_shortcode' );
