<?php defined('ABSPATH') || exit; ?>

<header>
    <div class="container">
        <div class="site-branding">
            <?php the_custom_logo(); ?>
        </div>
        <?php wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'menu_class' => 'primary-menu'
            )
        ); ?>
        <div class="header-actions"></div>
    </div>
</header>