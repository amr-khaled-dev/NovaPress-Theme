<?php defined('ABSPATH') || exit; ?>

<div class="wrap">
    <h1>Theme Settings Configuration</h1>
    <form action="options.php" method="post">
        <?php
        settings_fields('novapress-settings-group');
        do_settings_sections('novapress-theme-options');
        submit_button('Save Settings');
        ?>
    </form>
</div>