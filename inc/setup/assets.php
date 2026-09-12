<?php
defined('ABSPATH') || exit;

add_action('wp_enqueue_scripts', 'novapress_enqueue_assets');

function novapress_enqueue_assets()
{
    wp_enqueue_style('font-awesome', NOVAPRESS_URI . '/assets/css/all.min.css');
    wp_enqueue_style('main', NOVAPRESS_URI . '/assets/css/main.css', array(), NOVAPRESS_VERSION, 'all');

    wp_enqueue_script('main', NOVAPRESS_URI . '/assets/js/main.js', array(), NOVAPRESS_VERSION, true);
}

add_action('admin_enqueue_scripts', 'novapress_enqueue_admin_assets');

function novapress_enqueue_admin_assets($hook_suffix)
{
    if (! function_exists('get_current_screen')) {
        return;
    }

    $screen = get_current_screen();

    if ($screen->base === 'appearance_page_novapress-theme-options') {
        wp_enqueue_media();
        wp_enqueue_script('novapress-admin', NOVAPRESS_URI . '/assets/js/admin/admin.js', array(), NOVAPRESS_VERSION, true);
    }

    if ($screen->base === 'post' && $screen->post_type === 'service') {
        wp_enqueue_script('novapress-admin-service-fields', NOVAPRESS_URI . '/assets/js/admin/service-fields.js', array(), NOVAPRESS_VERSION, true);
    }

    wp_localize_script(
        'novapress-admin-service-fields',
        'novapressServiceFields',
        array(
            'featureTitle' => __('Feature Title:', 'novapress'),
            'removeFeature' => __('Remove Feature', 'novapress'),
        )
    );
}
