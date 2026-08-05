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
            <article class="service-card">
                <div class="service-icon">Icon</div>
                <h3>Service1</h3>
                <p>Service1 Description</p>
                <a href="#" class="btn service-details">Know More</a>
            </article>
            <article class="service-card">
                <div class="service-icon">Icon</div>
                <h3>Service2</h3>
                <p>Service2 Description</p>
                <a href="#" class="btn service-details">Know More</a>
            </article>
            <article class="service-card">
                <div class="service-icon">Icon</div>
                <h3>Service3</h3>
                <p>Service3 Description</p>
                <a href="#" class="btn service-details">Know More</a>
            </article>
            <article class="service-card">
                <div class="service-icon">Icon</div>
                <h3>Service4</h3>
                <p>Service4 Description</p>
                <a href="#" class="btn service-details">Know More</a>
            </article>
        </div>
    </div>
</section>