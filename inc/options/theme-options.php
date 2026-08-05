<?php

defined('ABSPATH') || exit;

function novapress_add_settings_page()
{
    add_theme_page(
        __('NovaPress Settings', 'novapress'),  // page title
        __('NovaPress Options', 'novapress'),   // menu title
        'manage_options',                       // capability
        'novapress-theme-options',              // menu slug
        'novapress_options_render'              // callback function
    );
}

add_action('admin_menu', 'novapress_add_settings_page');

function novapress_settings_init()
{
    register_setting('novapress-settings-group', 'novapress_options');  // register the settings

    // Add Hero Section
    add_settings_section(
        'novapress-hero-section',         // section ID
        __('Hero Section', 'novapress'),  // section title
        'novapress_render_section',       // section callback
        'novapress-theme-options',        // page slug
        array(                            // section arguments array
            'id'    => 'novapress-hero-section',
            'desc'  => 'Configure Hero Section Settings Below: '
        )
    );

    add_settings_field(
        'novapress-hero-badge',                // field ID
        __('Enter Hero Badge', 'novapress'),   // field title
        'novapress_render_settings_field',       // field callback
        'novapress-theme-options',               // page slug
        'novapress-hero-section',                // section ID
        array(                                   // field arguments array
            'field'      => 'hero_badge',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );

    add_settings_field(
        'novapress-hero-title',
        __('Enter Hero Title', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-hero-section',
        array(
            'field'      => 'hero_title',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );

    add_settings_field(
        'novapress-hero-description',
        __('Enter Hero description', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-hero-section',
        array(
            'field'      => 'hero_description',
            'class'      => 'novapress-settings-textarea-field',
            'type'       => 'textarea'
        )
    );

    add_settings_field(
        'novapress-hero-p-btn-text',
        __('Enter Hero Primary Button Text', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-hero-section',
        array(
            'field'      => 'hero_p_btn_text',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );

    add_settings_field(
        'novapress-hero-p-btn-url',
        __('Enter Hero Primary Button URL', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-hero-section',
        array(
            'field'      => 'hero_p_btn_url',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );

    add_settings_field(
        'novapress-hero-s-btn-text',
        __('Enter Hero Secondary Button Text', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-hero-section',
        array(
            'field'      => 'hero_s_btn_text',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );

    add_settings_field(
        'novapress-hero-s-btn-url',
        __('Enter Hero Secondary Button URL', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-hero-section',
        array(
            'field'      => 'hero_s_btn_url',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );

    add_settings_field(
        'novapress-hero-image',
        __('Upload Hero Image', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-hero-section',
        array(
            'field'      => 'hero_image',
            'class'      => 'novapress-settings-image-field',
            'type'       => 'media'
        )
    );

    // Add Why Choose Us Section
    add_settings_section(
        'novapress-why-choose-section',
        __('Why Choose Us Section', 'novapress'),
        'novapress_render_section',
        'novapress-theme-options',
        array(
            'id'    => 'novapress-why-choose-section',
            'desc'  => 'Configure Why Choose Us Section Settings Below: '
        )
    );

    add_settings_field(
        'novapress-why-choose-title',
        __('Enter Why Choose Us Title', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-why-choose-section',
        array(
            'field'      => 'why_choose_title',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );

    add_settings_field(
        'novapress-why-choose-description',
        __('Enter Why Choose Us Description', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-why-choose-section',
        array(
            'field'      => 'why_choose_description',
            'class'      => 'novapress-settings-textarea-field',
            'type'       => 'textarea'
        )
    );

    for ($i = 1; $i <= 6; $i++) {
        add_settings_field(
            'novapress-why-choose-feature-' . $i . '-heading',
            '',
            'novapress_render_settings_field',
            'novapress-theme-options',
            'novapress-why-choose-section',
            array(
                'field'      => 'why_choose_feature_' . $i . '_heading',
                'class'      => 'novapress-settings-field-heading',
                'title'      => 'Feature ' . $i . ' Settings',
                'type'       => 'heading'
            )
        );

        add_settings_field(
            'novapress-why-choose-feature-' . $i . '-selector',
            __('Enable/Disable Feature ' . $i, 'novapress'),
            'novapress_render_settings_field',
            'novapress-theme-options',
            'novapress-why-choose-section',
            array(
                'field'      => 'why_choose_feature_' . $i . '_selector',
                'class'      => 'novapress-settings-checkbox-field',
                'type'       => 'checkbox'
            )
        );

        add_settings_field(
            'novapress-why-choose-feature-' . $i . '-icon',
            __('Choose Feature ' . $i . ' Icon', 'novapress'),
            'novapress_render_settings_field',
            'novapress-theme-options',
            'novapress-why-choose-section',
            array(
                'field'      => 'why_choose_feature_' . $i . '_icon',
                'class'      => 'novapress-settings-select-field',
                'type'       => 'select',
                'options'    => array(
                    'rocket' => 'Rocket',
                    'shield' => 'Shield',
                    'paint-brush' => 'Paint Brush',
                    'globe'  => 'Globe',
                    'code'   => 'Code',
                    'bolt'   => 'Bolt',
                    'leaf'   => 'Leaf',
                    'users'  => 'Users',
                    'check'  => 'Check',
                    'gears'  => 'Gears',
                    'heart'  => 'Heart',
                    'star'   => 'Star'
                )
            )
        );

        add_settings_field(
            'novapress-why-choose-feature-' . $i . '-title',
            __('Enter Feature ' . $i . ' Title', 'novapress'),
            'novapress_render_settings_field',
            'novapress-theme-options',
            'novapress-why-choose-section',
            array(
                'field'      => 'why_choose_feature_' . $i . '_title',
                'class'      => 'novapress-settings-text-field',
                'type'       => 'text'
            )
        );

        add_settings_field(
            'novapress-why-choose-feature-' . $i . '-description',
            __('Enter Feature ' . $i . ' Description', 'novapress'),
            'novapress_render_settings_field',
            'novapress-theme-options',
            'novapress-why-choose-section',
            array(
                'field'      => 'why_choose_feature_' . $i . '_description',
                'class'      => 'novapress-settings-textarea-field',
                'type'       => 'textarea'
            )
        );
    }

    // Add Services Section
    add_settings_section(
        'novapress-services-section',
        __('Services Section', 'novapress'),
        'novapress_render_section',
        'novapress-theme-options',
        array(
            'id'    => 'novapress-services-section',
            'desc'  => 'Configure Services Section Settings Below: '
        )
    );

    add_settings_field(
        'novapress-services-title',
        __('Enter Services Title', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-services-section',
        array(
            'field'      => 'services_title',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );

    add_settings_field(
        'novapress-services-description',
        __('Enter Services Description', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-services-section',
        array(
            'field'      => 'services_description',
            'class'      => 'novapress-settings-textarea-field',
            'type'       => 'textarea'
        )
    );

    // Add Featured Projects Section
    add_settings_section(
        'novapress-projects-section',
        __('Featured Projects Section', 'novapress'),
        'novapress_render_section',
        'novapress-theme-options',
        array(
            'id'    => 'novapress-projects-section',
            'desc'  => 'Configure Featured Projects Section Settings Below: '
        )
    );

    add_settings_field(
        'novapress-projects-title',
        __('Enter Projects Title', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-projects-section',
        array(
            'field'      => 'projects_title',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );

    add_settings_field(
        'novapress-projects-description',
        __('Enter Projects Description', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-projects-section',
        array(
            'field'      => 'projects_description',
            'class'      => 'novapress-settings-textarea-field',
            'type'       => 'textarea'
        )
    );

    // Add Testimonials Section
    add_settings_section(
        'novapress-testimonials-section',
        __('Testimonials Section', 'novapress'),
        'novapress_render_section',
        'novapress-theme-options',
        array(
            'id'    => 'novapress-testimonials-section',
            'desc'  => 'Configure Testimonials Section Settings Below: '
        )
    );

    add_settings_field(
        'novapress-testimonials-title',
        __('Enter Testimonials Title', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-testimonials-section',
        array(
            'field'      => 'testimonials_title',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );

    add_settings_field(
        'novapress-testimonials-description',
        __('Enter Testimonials Description', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-testimonials-section',
        array(
            'field'      => 'testimonials_description',
            'class'      => 'novapress-settings-textarea-field',
            'type'       => 'textarea'
        )
    );

    // Add Team Section
    add_settings_section(
        'novapress-team-section',
        __('Team Section', 'novapress'),
        'novapress_render_section',
        'novapress-theme-options',
        array(
            'id'    => 'novapress-team-section',
            'desc'  => 'Configure Team Section Settings Below: '
        )
    );

    add_settings_field(
        'novapress-team-title',
        __('Enter Team Title', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-team-section',
        array(
            'field'      => 'team_title',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );

    add_settings_field(
        'novapress-team-description',
        __('Enter Team Description', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-team-section',
        array(
            'field'      => 'team_description',
            'class'      => 'novapress-settings-textarea-field',
            'type'       => 'textarea'
        )
    );

    // Add Latest Articles Section
    add_settings_section(
        'novapress-latest-articles-section',
        __('Latest Articles Section', 'novapress'),
        'novapress_render_section',
        'novapress-theme-options',
        array(
            'id'    => 'novapress-latest-articles-section',
            'desc'  => 'Configure Latest Articles Section Settings Below: '
        )
    );

    add_settings_field(
        'novapress-latest-articles-title',
        __('Enter Latest Articles Title', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-latest-articles-section',
        array(
            'field'      => 'latest_articles_title',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );

    add_settings_field(
        'novapress-latest-articles-description',
        __('Enter Latest Articles Description', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-latest-articles-section',
        array(
            'field'      => 'latest_articles_description',
            'class'      => 'novapress-settings-textarea-field',
            'type'       => 'textarea'
        )
    );

    // Add Contact CTA Section
    add_settings_section(
        'novapress-contact-section',
        __('Contact Section', 'novapress'),
        'novapress_render_section',
        'novapress-theme-options',
        array(
            'id'    => 'novapress-contact-section',
            'desc'  => 'Configure Contact Section Settings Below: '
        )
    );

    add_settings_field(
        'novapress-contact-title',
        __('Enter Contact Title', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-contact-section',
        array(
            'field'      => 'contact_title',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );

    add_settings_field(
        'novapress-contact-description',
        __('Enter Contact Description', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-contact-section',
        array(
            'field'      => 'contact_description',
            'class'      => 'novapress-settings-textarea-field',
            'type'       => 'textarea'
        )
    );

    add_settings_field(
        'novapress-cta-p-btn-text',
        __('Enter CTA Primary Button Text', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-contact-section',
        array(
            'field'      => 'cta_p_btn_text',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );

    add_settings_field(
        'novapress-cta-p-btn-url',
        __('Enter CTA Primary Button URL', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-contact-section',
        array(
            'field'      => 'cta_p_btn_url',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );

    add_settings_field(
        'novapress-cta-s-btn-text',
        __('Enter CTA Secondary Button Text', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-contact-section',
        array(
            'field'      => 'cta_s_btn_text',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );

    add_settings_field(
        'novapress-cta-s-btn-url',
        __('Enter CTA Secondary Button URL', 'novapress'),
        'novapress_render_settings_field',
        'novapress-theme-options',
        'novapress-contact-section',
        array(
            'field'      => 'cta_s_btn_url',
            'class'      => 'novapress-settings-text-field',
            'type'       => 'text'
        )
    );
}

add_action('admin_init', 'novapress_settings_init');

function novapress_render_section(array $args)
{
    echo '<h4>' . __($args['desc'], 'novapress') . '</h4>';
}

function novapress_render_settings_field(array $args)
{
    $options = get_option('novapress_options', []);
    $value = $options[$args['field']] ?? '';
    switch ($args['type']) {
        case 'heading':
            echo '<h4 class="' . $args['class'] . '">' . esc_html($args['title']) . '</h4>';
            break;

        case 'text':
            echo '<input type="' . $args['type'] . '" id="' . $args['field'] . '" class="' . $args['class'] . '" name="novapress_options[' . $args['field'] . ']" value="' . esc_attr($value) . '">';
            break;

        case 'textarea':
            echo '<textarea id="' . $args['field'] . '" class="' . $args['class'] . '" name="novapress_options[' . $args['field'] . ']">' . esc_textarea($value) . '</textarea>';
            break;

        case 'checkbox':
            echo '<input type="' . $args['type'] . '" id="' . $args['field'] . '" class="' . $args['class'] . '" name="novapress_options[' . $args['field'] . ']" value="1" ' . checked($value, 1, false) . '>';
            break;

        case 'select':
            echo '<select id="' . $args['field'] . '" class="' . $args['class'] . '" name="novapress_options[' . $args['field'] . ']">';
            foreach ($args['options'] as $option_value => $option_label) {
                $selected = selected($value, $option_value, false);
                echo '<option value="' . esc_attr($option_value) . '" ' . $selected . '>' . esc_html($option_label) . '</option>';
            }
            echo '</select>';
            break;

        case 'media':
            echo '<div class="novapress-media-field" id="' . $args['field'] . '_field">';
            echo '<div class="' . $args['class'] . '-preview">';
            echo '<img src="#" alt="Preview Image" class="preview-image" style="display:' . (empty($value) ? "none" : "block") . '">';
            echo '<p class="preview-text">No image selected</p>';
            echo '</div>';
            echo '<input type="hidden" id="' . $args['field'] . '" class="attachment-id" name="novapress_options[' . $args['field'] . ']" value="' . esc_attr($value) . '">';
            echo '<button type="button" id="select_' . $args['field'] . '" class="select ' . $args['class'] . '-button" data-action="select">Select Image</button>';
            echo '<button type="button" id="remove_' . $args['field'] . '" class="remove ' . $args['class'] . '-button" data-action="remove" style="display:' . (empty($value) ? "none" : "block") . '">Remove Image</button>';
            echo '</div>';
            break;
    }
}

function novapress_options_render()
{
    require_once __DIR__ . '/../../templates/admin/theme-options-page.php';
}
