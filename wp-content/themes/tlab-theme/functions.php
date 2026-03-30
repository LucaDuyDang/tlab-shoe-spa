<?php
function tlab_enqueue_styles()
{
    wp_enqueue_style(
        'tlab-style',
        get_stylesheet_uri()
    );
}
add_action('wp_enqueue_scripts', 'tlab_enqueue_styles');
