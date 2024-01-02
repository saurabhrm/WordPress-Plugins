<?php
/*
Plugin Name: Custom Checkout Popup
Description: Custom functionality for checkout popup.
Version: 1.0
Author: SaurabhM HBX
*/

function custom_enqueue_scripts() {
    
    wp_enqueue_script('jquery');

    wp_enqueue_script('custom-scripts', plugin_dir_url(__FILE__) . 'js/custom-scripts.js', array('jquery'), null, true);

    wp_localize_script('custom-scripts', 'user_phone_data', array(
        'phone_number' => esc_js(get_user_meta(get_current_user_id(), 'billing_phone', true))
    ));
}

add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');

function custom_add_scripts_footer() {
    echo '<script type="text/javascript" src="' . plugin_dir_url(__FILE__) . 'js/custom-scripts.js"></script>';
}

add_action('wp_footer', 'custom_add_scripts_footer');
