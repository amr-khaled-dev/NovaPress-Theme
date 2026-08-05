<?php
function novapress_get_option($key, $default = '')
{
    $options = get_option('novapress_options', []);

    if (! isset($options[$key])) {
        return $default;
    }

    return $options[$key] !== ''
        ? $options[$key]
        : $default;
}
