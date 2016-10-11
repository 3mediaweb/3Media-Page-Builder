<?php

// Check if ACF is used with another plugin, if not already called, use this one
if( ! class_exists('acf') ) {
    
    // Load only limited functionality
    define( 'ACF_PRO' , true );
    
    // Load the ACF Core
    include_once( dirname( __FILE__ ) . '/advanced-custom-fields-pro/acf.php');
    
    // // Repeater Add-On
    // if( ! class_exists('acf_repeater_plugin') ) {
    //     include_once( dirname( __FILE__ ) . '/acf/add-ons/acf-repeater/acf-repeater.php');
    // }    
}

// // 1. customize ACF path
// add_filter('acf/settings/path', 'my_acf_settings_path');
 
// function my_acf_settings_path( $path ) {
 
//     // update path
//     $path = get_stylesheet_directory() . '/acf/';
    
//     // return
//     return $path;
    
// }
 

// // 2. customize ACF dir
// add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
// function my_acf_settings_dir( $dir ) {
 
//     // update path
//     $dir = get_stylesheet_directory_uri() . '/acf/';
    
//     // return
//     return $dir;
    
// }
 

// // 3. Hide ACF field group menu item
// add_filter('acf/settings/show_admin', '__return_false');


// // 4. Include ACF
// include_once( get_stylesheet_directory() . '/acf/acf.php' );