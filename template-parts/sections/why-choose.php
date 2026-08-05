<?php
defined('ABSPATH') || exit;

$icons = array(
    'rocket' => 'fa-solid fa-rocket',
    'shield' => 'fa-solid fa-shield-halved',
    'paint-brush' => 'fa-solid fa-paint-brush',
    'globe' => 'fa-solid fa-globe',
    'code' => 'fa-solid fa-code',
    'bolt' => 'fa-solid fa-bolt',
    'leaf' => 'fa-solid fa-leaf',
    'users' => 'fa-solid fa-users',
    'check' => 'fa-solid fa-circle-check',
    'gears' => 'fa-solid fa-gears',
    'heart' => 'fa-solid fa-heart',
    'star' => 'fa-solid fa-star'
);
$featureKey = 'why_choose_feature_';
$whyChooseTitle = novapress_get_option('why_choose_title', 'Why Choose NovaPress');
$whyChooseDesc = novapress_get_option('why_choose_description', 'A professional WordPress starter theme built for agencies and business websites.');
?>

<section class="why-choose" aria-labelledby="whyChooseTitle">
    <div class="container">
        <div class="section-header">
            <h2 id="whyChooseTitle"><?php echo esc_html($whyChooseTitle); ?></h2>
            <p><?php echo esc_html($whyChooseDesc); ?></p>
        </div>
        <div class="features">
            <?php
            for ($i = 1; $i <= 6; $i++) :
                $enabled = novapress_get_option($featureKey . $i . '_selector', false);
                $icon = novapress_get_option($featureKey . $i . '_icon', 'rocket');
                $title = novapress_get_option($featureKey . $i . '_title', 'Feature ' . $i . ' Title');
                $desc = novapress_get_option($featureKey . $i . '_description', 'Feature ' . $i . ' Description');

                if (! $enabled) :
                    continue;
                endif;
            ?>
                <article class="feature-card">
                    <div class="feature-icon">
                        <i class="<?php echo esc_attr($icons[$icon]); ?>"></i>
                    </div>
                    <h3><?php echo esc_html($title); ?></h3>
                    <p><?php echo esc_html($desc); ?></p>
                </article>
            <?php endfor; ?>
        </div>
    </div>
</section>