<?php defined('ABSPATH') || exit; ?>

<nav class="service-filters" aria-label="<?php esc_attr_e('Service Categories', 'novapress'); ?>">
    <a
        href="<?php echo esc_url(get_post_type_archive_link('service')); ?>"
        class="<?php echo is_post_type_archive('service') ? 'active' : ''; ?>"
        aria-current="<?php echo is_post_type_archive('service') ? 'page' : ''; ?>">
        <?php esc_html_e('All Services', 'novapress'); ?>
    </a>
    <?php
    $serviceCategories = novapress_get_terms(array('taxonomy' => 'service_category', 'orderby' => 'name', 'order' => 'ASC'));

    if (!empty($serviceCategories) && is_array($serviceCategories)) {
        foreach ($serviceCategories as $serviceCategory) {
            $termLink = get_term_link($serviceCategory);
            $isCurrentCategory = is_tax('service_category', $serviceCategory->slug);
            if (is_wp_error($termLink)) {
                continue;
            }
            echo '<a href="'
                . esc_url($termLink)
                . '" class="' . ($isCurrentCategory ? 'active' : '')
                . '" aria-current="' . ($isCurrentCategory ? 'page' : '') . '">'
                . esc_html($serviceCategory->name) . '</a>';
        }
    }
    ?>
</nav>