<?php
defined('ABSPATH') || exit;

function novapress_get_icons()
{
    return array(
        'rocket' => array(
            'label' => __('Rocket', 'novapress'),
            'class' => 'fa-solid fa-rocket'
        ),
        'shield' => array(
            'label' => __('Shield', 'novapress'),
            'class' => 'fa-solid fa-shield-halved'
        ),
        'paint-brush' => array(
            'label' => __('Paint Brush', 'novapress'),
            'class' => 'fa-solid fa-paint-brush'
        ),
        'globe' => array(
            'label' => __('Globe', 'novapress'),
            'class' => 'fa-solid fa-globe'
        ),
        'code' => array(
            'label' => __('Code', 'novapress'),
            'class' => 'fa-solid fa-code'
        ),
        'bolt' => array(
            'label' => __('Bolt', 'novapress'),
            'class' => 'fa-solid fa-bolt'
        ),
        'leaf' => array(
            'label' => __('Leaf', 'novapress'),
            'class' => 'fa-solid fa-leaf'
        ),
        'users' => array(
            'label' => __('Users', 'novapress'),
            'class' => 'fa-solid fa-users'
        ),
        'check' => array(
            'label' => __('Check', 'novapress'),
            'class' => 'fa-solid fa-circle-check'
        ),
        'gears' => array(
            'label' => __('Gears', 'novapress'),
            'class' => 'fa-solid fa-gears'
        ),
        'heart' => array(
            'label' => __('Heart', 'novapress'),
            'class' => 'fa-solid fa-heart'
        ),
        'star' => array(
            'label' => __('Star', 'novapress'),
            'class' => 'fa-solid fa-star'
        )
    );
}

function novapress_get_icon($icon_key)
{
    $icons = novapress_get_icons();

    return isset($icons[$icon_key]['class']) ? $icons[$icon_key]['class'] : '';
}
