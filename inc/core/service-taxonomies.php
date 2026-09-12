<?php
defined('ABSPATH') || exit;

add_action('init', 'novapress_add_service_taxonomies');

function novapress_add_service_taxonomies()
{
    register_taxonomy(
        'service_category',  // Taxonomy name
        'service',           // Post type
        array(               // Taxonomy options
            'labels' => array(    // Taxonomy labels
                'name' => __('Service Categories', 'novapress'),                     // plural name
                'singular_name' => __('Service Category', 'novapress'),              // singular name
                'search_items' => __('Search Service Categories', 'novapress'),      // search title
                'all_items' => __('All Service Categories', 'novapress'),            // all title
                'parent_item' => __('Parent Service Category', 'novapress'),         // parent title
                'parent_item_colon' => __('Parent Service Category:', 'novapress'),  // parent title with colon
                'edit_item' => __('Edit Service Category', 'novapress'),             // edit title
                'update_item' => __('Update Service Category', 'novapress'),         // update title
                'add_new_item' => __('Add New Service Category', 'novapress'),       // add new title
                'new_item_name' => __('New Service Category Name', 'novapress'),     // new title
                'menu_name' => __('Service Categories', 'novapress'),               // menu title
            ),
            'hierarchical' => true,                            // enable hierarchy
            'show_in_rest' => true,                            // enable Gutenberg editor
            'rewrite' => array('slug' => 'service-category'),  // rewrite slug
        )
    );
}
