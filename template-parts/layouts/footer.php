<?php defined('ABSPATH') || exit; ?>

<footer>
    <div class="container">
        <div class="footer-top">
            <div class="footer-menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer',
                        'menu_class' => 'footer-menu'
                    )
                )
                ?>
            </div>
            <div class="footer-widgets">
                <?php
                dynamic_sidebar('footer-one');
                dynamic_sidebar('footer-two');
                dynamic_sidebar('footer-three');
                ?>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-copyright">
                Copyright &copy; <?php echo wp_date('Y'); ?> - <?php echo get_bloginfo("name"); ?> All Rights Reserved
            </div>
        </div>
    </div>
</footer>