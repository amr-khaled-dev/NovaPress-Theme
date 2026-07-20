<?php

defined('ABSPATH') || exit('No direct script access allowed');

function novapress_setup_theme()
{
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets']);
    add_theme_support('custom-background');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('align-wide');
}

add_action(
    'after_setup_theme',
    'novapress_setup_theme'
);
