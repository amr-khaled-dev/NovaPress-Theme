<?php
defined('ABSPATH') || exit;

$contactTitle = novapress_get_option('contact_title', 'Ready to Build Something Amazing?');
$contactDesc = novapress_get_option('contact_description', "Let's discuss your project and bring your vision to life with cutting-edge technology.");
$ctaPrimaryText = novapress_get_option('cta_p_btn_text', 'Start Your Project');
$ctaPrimaryUrl = novapress_get_option('cta_p_btn_url', '');
$ctaSecondaryText = novapress_get_option('cta_s_btn_text', 'Contact Us Now');
$ctaSecondaryUrl = novapress_get_option('cta_s_btn_url', '');
?>

<section class="contact-cta" aria-labelledby="contactTitle">
    <div class="container">
        <div class="contact-cta-content">
            <h2 id="contactTitle"><?php echo esc_html($contactTitle); ?></h2>
            <p><?php echo esc_html($contactDesc); ?></p>
            <div class="cta-actions">
                <?php if ($ctaPrimaryUrl) : ?>
                    <a href="<?php echo esc_url($ctaPrimaryUrl); ?>" class="btn btn-outline"><?php esc_html_e($ctaPrimaryText); ?></a>
                <?php endif; ?>
                <?php if (!$ctaSecondaryUrl) : ?>
                    <a href="<?php echo esc_url($ctaSecondaryUrl); ?>" class="btn"><?php esc_html_e($ctaSecondaryText); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>