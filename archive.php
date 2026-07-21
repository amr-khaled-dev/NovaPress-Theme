<?php
defined('ABSPATH') || exit;
get_header();
?>

<main id="primary">
    <?php if (have_posts()) :
        while (have_posts()) : the_post();
            get_template_part('template-parts/content/content');
        endwhile;
    else :
        get_template_part('template-parts/content/content-none');
    endif; ?>
</main>

<?php get_footer(); ?>