<?php

defined('ABSPATH') || exit;

function novapress_register_menus()
{
    register_nav_menus(
        array(
            'primary'  =>  __('Primary Menu', 'novapress'),
            'footer'   =>  __('Footer Menu', 'novapress')
        )
    );
}

add_action(
    'init',
    'novapress_register_menus'
);
