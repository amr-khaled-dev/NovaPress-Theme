<?php

defined('ABSPATH') || exit;

function novapress_register_sidebars()
{
    register_sidebar(
        array(
            'name'  => 'Main Sidebar',
            'id'    => 'main-sidebar',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        )
    );

    $footer_sidebars = array(
        'footer-one'  =>  __('Footer One', 'novapress'),
        'footer-two'  =>  __('Footer Two', 'novapress'),
        'footer-three'  =>  __('Footer Three', 'novapress')
    );

    foreach ($footer_sidebars as $id => $name) {
        register_sidebar(
            array(
                'name'  => $name,
                'id'    => $id,
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>'
            )
        );
    }
}

add_action(
    'widgets_init',
    'novapress_register_sidebars'
);
