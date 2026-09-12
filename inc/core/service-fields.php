<?php
defined('ABSPATH') || exit;

add_action('add_meta_boxes', 'novapress_add_service_meta_boxes');

function novapress_add_service_meta_boxes()
{
    add_meta_box(
        'novapress_service_details',         // ID
        __('Service Details', 'novapress'),  // Title
        'novapress_render_service_details',  // Callback function
        'service',                           // Post type
        'normal',                            // Context
        'default'                            // Priority
    );
}

function novapress_render_service_details($post)
{
    $icons = novapress_get_icons();

    // Add a nonce field for security
    wp_nonce_field('novapress_service_meta_box', 'novapress_service_meta_box_nonce');

    // Retrieve existing values from the database
    $icon = get_post_meta($post->ID, 'novapress_service_icon', true);

    echo '<label for="novapress_service_icon">' . __('Select an Icon:', 'novapress') . '</label><br>';
    echo '<select name="novapress_service_icon" id="novapress_service_icon">';
    foreach ($icons as $key => $value) {
        echo '<option value="' . esc_attr($key) . '" ' . selected($icon, $key, false) . '>' . esc_html($value['label'], 'novapress') . '</option>';
    }
    echo '</select>';

    $subtitle = get_post_meta($post->ID, 'novapress_service_subtitle', true);

    echo '<br><br>';
    echo '<label for="novapress_service_subtitle">' . __('Subtitle:', 'novapress') . '</label><br>';
    echo '<input type="text" name="novapress_service_subtitle" id="novapress_service_subtitle" value="' . esc_attr($subtitle) . '" />';

    $features = get_post_meta($post->ID, 'novapress_service_features', true);
    if (!is_array($features)) {
        $features = array();
    }
    if (empty($features)) {
        $features[] = '';
    }

    echo '<br><br>';
    echo '<div class="service-features">';
    echo '<h4>' . __('Service Features', 'novapress') . '</h4>';
    echo '<div class="service-features-list">';
    foreach ($features as $index => $feature) {
        echo '<div class="service-feature">';
        echo '<label for="novapress_service_feature[' . $index . ']">' . __('Feature Title:', 'novapress') . '</label>';
        echo '<input 
            type="text" 
            name="novapress_service_feature[' . $index . ']" 
            id="novapress_service_feature[' . $index . ']" 
            value="' . esc_attr($feature) . '" />';
        echo '<button type="button" class="remove-feature button">' . __('Remove Feature', 'novapress') . '</button>';
        echo '</div>';
    }
    echo '</div>';
    echo '<br>';
    echo '<button type="button" class="add-feature button">' . __('Add Feature', 'novapress') . '</button>';
    echo '</div>';
}

add_action('save_post_service', 'novapress_save_service_meta');

function novapress_save_service_meta($post_id)
{
    // Check if nonce is set
    if (! isset($_POST['novapress_service_meta_box_nonce'])) {
        return;
    }

    // Verify that the nonce is valid
    if (! wp_verify_nonce(wp_unslash($_POST['novapress_service_meta_box_nonce']), 'novapress_service_meta_box')) {
        return;
    }

    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Sanitize and save the data
    if (isset($_POST['novapress_service_icon'])) {
        $serviceIcon = sanitize_text_field(wp_unslash($_POST['novapress_service_icon']));
        $icons = novapress_get_icons();
        if (array_key_exists($serviceIcon, $icons)) {
            update_post_meta($post_id, 'novapress_service_icon', $serviceIcon);
        }
    }

    if (isset($_POST['novapress_service_subtitle'])) {
        update_post_meta($post_id, 'novapress_service_subtitle', sanitize_text_field(wp_unslash($_POST['novapress_service_subtitle'])));
    }

    if (isset($_POST['novapress_service_feature']) && is_array($_POST['novapress_service_feature'])) {
        $features = array_map('sanitize_text_field', wp_unslash($_POST['novapress_service_feature']));
        $features = array_filter($features);
        $features = array_values($features);
        if (!empty($features)) {
            update_post_meta($post_id, 'novapress_service_features', $features);
        } else {
            delete_post_meta($post_id, 'novapress_service_features');
        }
    }

    if (!isset($_POST['novapress_service_feature']) || !is_array($_POST['novapress_service_feature'])) {
        delete_post_meta($post_id, 'novapress_service_features');
    }
}
