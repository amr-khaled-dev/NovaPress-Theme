<?php

defined('ABSPATH') || exit;

add_action('init', 'novapress_register_menus');

function novapress_register_menus()
{
    register_nav_menus(
        array(
            'primary'  =>  __('Primary Menu', 'novapress'),  // menu name and label
            'footer'   =>  __('Footer Menu', 'novapress')    // menu name and label
        )
    );
}
