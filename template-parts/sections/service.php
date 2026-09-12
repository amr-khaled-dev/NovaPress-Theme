<?php
defined('ABSPATH') || exit;

$servicesTitle = novapress_get_option('services_title', 'Our Services');
$servicesDesc = novapress_get_option('services_description', 'We offer a wide range of services to meet your needs.');
?>

<section class="services" aria-labelledby="servicesTitle">
    <div class="container">
        <div class="section-header">
            <h2 id="servicesTitle"><?php echo esc_html($servicesTitle); ?></h2>
            <p><?php echo esc_html($servicesDesc); ?></p>
        </div>
        <div class="services-grid">
            <?php
            $servicesArgs = array(
                'post_type'      => 'service',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );
            $servicesQuery = new WP_Query($servicesArgs);

            if ($servicesQuery->have_posts()) :
                while ($servicesQuery->have_posts()) :
                    $servicesQuery->the_post();
                    get_template_part('template-parts/content/content', 'service');
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <a href="<?php echo esc_url(get_post_type_archive_link('service')); ?>">View All Services</a>
    </div>
</section>