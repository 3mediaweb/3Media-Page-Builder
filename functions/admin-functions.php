<?php 

// Includes

include( plugin_dir_path( __FILE__ ) . '../core/advanced-custom-fields-pro/acf.php');
include( plugin_dir_path( __FILE__ ) . '../pages/admin-page.php');

include_once plugin_dir_path( __FILE__ ) .'../core/classes.php';
include_once plugin_dir_path( __FILE__ ) .'../core/distributions.php';
include_once plugin_dir_path( __FILE__ ) .'../core/fields_default.php';

// Define Functions

function add_3media_custom_menu() {
    //add an item to the menu
    add_menu_page (
        '3Media ACF Page Builder',
        '3Media Builder',
        'manage_options',
        '3media-page-builder',
        'three_media_page_builder_admin_page_function',
        plugin_dir_url( __FILE__ ).'../assets/images/icon.png'
    );
}



// function display_field_data() {
// 	$url = plugin_dir_url( __FILE__ ).'../acf-export.json';

// 	$json = file_get_contents($url);
// 	$data = json_decode($json, TRUE);

//     // foreach ($data as $key => $value) {
//     //     acf_add_local_field_group($data); 
//     // }
// }

// display_field_data();
// Add Functions

add_action('admin_menu', 'add_3media_custom_menu');
// add_action('footer', 'display_field_data');