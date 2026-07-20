<?php

defined('ABSPATH') || exit('No direct script access allowed');

function novapress_enqueue_assets()
{
    wp_enqueue_style('main', NOVAPRESS_URI . '/assets/css/main.css', array(), NOVAPRESS_VERSION, 'all');

    wp_enqueue_script('main', NOVAPRESS_URI . '/assets/js/main.js', array(), NOVAPRESS_VERSION, true);
}

add_action('wp_enqueue_scripts', 'novapress_enqueue_assets');
