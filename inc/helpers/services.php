<?php
defined('ABSPATH') || exit;

function novapress_get_terms($args = [])
{
    $default_args = [
        'hide_empty' => true,
    ];

    $args = wp_parse_args($args, $default_args);

    return get_terms($args);
}
