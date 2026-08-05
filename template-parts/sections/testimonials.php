<?php
defined('ABSPATH') || exit;

$testimonialsTitle = novapress_get_option('testimonials_title', 'Testimonials');
$testimonialsDesc = novapress_get_option('testimonials_description', 'What our clients say about us');
?>

<section class="testimonials" aria-labelledby="testimonialsTitle">
    <div class="container">
        <div class="section-header">
            <h2 id="testimonialsTitle"><?php echo esc_html($testimonialsTitle); ?></h2>
            <p><?php echo esc_html($testimonialsDesc); ?></p>
        </div>
        <div class="testimonials-slider">
            <article class="testimonial-card">
                <div class="testimonial-avatar">Avatar</div>
                <h3>Client Name</h3>
                <span>Company</span>
                <p>Testimonial1 Text</p>
            </article>
            <article class="testimonial-card">
                <div class="testimonial-avatar">Avatar</div>
                <h3>Client Name</h3>
                <span>Company</span>
                <p>Testimonial2 Text</p>
            </article>
            <article class="testimonial-card">
                <div class="testimonial-avatar">Avatar</div>
                <h3>Client Name</h3>
                <span>Company</span>
                <p>Testimonial3 Text</p>
            </article>
        </div>
    </div>
</section>