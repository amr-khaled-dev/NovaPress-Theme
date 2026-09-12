<?php
defined('ABSPATH') || exit;

add_action('init', 'novapress_register_post_types');

function novapress_register_post_types()
{
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Services', 'novapress'),            // plural name
            'singular_name' => __('Service', 'novapress'),    // singular name
            'add_new' => __('Add Service', 'novapress'),      // add new label
            'add_new_item' => __('Add Service', 'novapress'), // add new item label
            'edit_item' => __('Edit Service', 'novapress'),   // edit item label
            'all_items' => __('All Services', 'novapress'),   // all items label
            'menu_name' => __('Services', 'novapress'),       // menu name
        ),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),  // editor support shown in the admin panel
        'public' => true,                                                // make it public
        'has_archive' => true,                                           // make it have archive page
        'show_in_rest' => true,                                          // enable Gutenberg editor
        'menu_position' => 25,                                           // menu position
        'menu_icon' => 'dashicons-hammer',                               // menu icon
    ));
}
