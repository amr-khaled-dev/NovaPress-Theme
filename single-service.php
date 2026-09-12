<?php
defined('ABSPATH') || exit;
get_header();
?>

<main id="primary" class="page service">
    <div class="container">
        <?php if (have_posts()) :
            while (have_posts()) : the_post();
                $serviceIcon = get_post_meta(get_the_ID(), 'novapress_service_icon', true);
                $ctaPrimaryUrl = novapress_get_option('cta_p_btn_url', ''); ?>
                <h1><i class="<?php echo esc_attr(novapress_get_icon($serviceIcon)); ?>"></i><?php the_title(); ?></h1>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'novapress_service_subtitle', true)); ?></p>
                <?php the_post_thumbnail('full'); ?>
                <div class="service-content">
                    <?php the_content(); ?>
                </div>
                <div class="service-categories">
                    <?php echo get_the_term_list(get_the_ID(), 'service_category', '', '|', ''); ?>
                </div>
                <div class="features">
                    <h3><?php _e('Service Features', 'novapress'); ?></h3>
                    <ul>
                        <?php
                        $features = get_post_meta(get_the_ID(), 'novapress_service_features', true);
                        if (!empty($features) && is_array($features)) {
                            foreach ($features as $feature) {
                                echo '<li>' . esc_html($feature) . '</li>';
                            }
                        } else {
                            echo '<li>' . __('No features available.', 'novapress') . '</li>';
                        }
                        ?>
                    </ul>
                </div>
                <a href="<?php echo esc_url(get_post_type_archive_link('service')); ?>"><?php _e('Back to Services', 'novapress'); ?></a>
                <?php if ($ctaPrimaryUrl) : ?>
                    <a href="<?php echo esc_url($ctaPrimaryUrl); ?>"><?php esc_html_e('Get Started', 'novapress'); ?></a>
                <?php endif; ?>
        <?php endwhile;
        else :
            get_template_part('template-parts/content/content-none');
        endif; ?>
    </div>
</main>

<?php get_footer(); ?>