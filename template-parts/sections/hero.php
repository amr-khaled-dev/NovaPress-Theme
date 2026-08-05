<?php
defined('ABSPATH') || exit;

$heroBadge = novapress_get_option('hero_badge', 'Premium Web Solution');
$heroTitle = novapress_get_option('hero_title', 'Welcome to NovaPress');
$heroDescription = novapress_get_option('hero_description', 'A professional WordPress starter theme built for agencies and business websites.');
$heroPBtnText = novapress_get_option('hero_p_btn_text', 'Get Started');
$heroPBtnUrl = novapress_get_option('hero_p_btn_url', '#');
$heroSBtnText = novapress_get_option('hero_s_btn_text', 'Learn More');
$heroSBtnUrl = novapress_get_option('hero_s_btn_url', '#');
?>

<section class="hero" aria-labelledby="heroTitle">
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">
                <span><?php echo esc_html($heroBadge); ?></span>
            </div>
            <h1 id="heroTitle"><?php echo esc_html($heroTitle); ?></h1>
            <p><?php echo esc_html($heroDescription); ?></p>
            <div class="hero-actions">
                <a href="<?php echo esc_url($heroPBtnUrl); ?>" class="btn"><?php echo esc_html($heroPBtnText); ?></a>
                <a href="<?php echo esc_url($heroSBtnUrl); ?>" class="btn btn-outline"><?php echo esc_html($heroSBtnText); ?></a>
            </div>
        </div>
        <div class="hero-image">
            Hero Image
        </div>
    </div>
</section>