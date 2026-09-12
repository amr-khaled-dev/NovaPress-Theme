<?php
defined('ABSPATH') || exit;
get_header();
?>

<main id="primary">
    <div class="container">
        <h1><?php single_term_title(); ?></h1>
        <?php get_template_part('template-parts/components/service-filters'); ?>
        <div class="services-grid">
            <?php if (have_posts()) :
                while (have_posts()) : the_post();
                    get_template_part('template-parts/content/content-service');
                endwhile;
                the_posts_pagination(array(
                    'prev_text' => __('Previous', 'novapress'),
                    'next_text' => __('Next', 'novapress'),
                ));
            else :
                get_template_part('template-parts/content/content-none');
            endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>