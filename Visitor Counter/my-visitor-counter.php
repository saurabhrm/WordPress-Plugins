<?php
/*
Plugin Name: Visitor Counter
Description: plugin to count and display the number of visitors.
Version: 1.0
Author: SaurabhM HBX
*/

function my_visitor_counter()
{
    $count_key = 'my_visitor_count';
    $count = get_option($count_key);

    if ($count === false) {
        $count = 0;
        add_option($count_key, '0');
    } else {
        $count++;
        update_option($count_key, $count);
    }

    return $count;
}

function display_visitor_counter()
{
    $count = my_visitor_counter();
    echo '<p class="visitor-counter">Visitor Count: ' . $count . '</p>';
}

function enqueue_visitor_counter_styles()
{

    wp_enqueue_style('visitor-counter-styles', plugins_url('css/style.css', __FILE__));
}


add_shortcode('visitor_counter', 'display_visitor_counter');


add_action('wp_enqueue_scripts', 'enqueue_visitor_counter_styles');


// [visitor_counter]  add the shortcode for visitor Counter