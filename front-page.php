<?php
defined('ABSPATH') || exit;
get_header();
?>

<main id="primary">
    <?php
    get_template_part('template-parts/sections/hero');
    get_template_part('template-parts/sections/why-choose');
    get_template_part('template-parts/sections/service');
    get_template_part('template-parts/sections/featured-projects');
    get_template_part('template-parts/sections/testimonials');
    get_template_part('template-parts/sections/team');
    get_template_part('template-parts/sections/latest-articles');
    get_template_part('template-parts/sections/contact-cta');
    ?>
</main>

<?php get_footer(); ?>