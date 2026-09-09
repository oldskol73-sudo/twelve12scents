<?php
// Twelve Scents child theme

function twelve_scents_brand_styles() {
    wp_enqueue_style(
        'twelve-scents-brand',
        get_stylesheet_directory_uri() . '/twelve-scents-brand.css',
        [],
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'twelve_scents_brand_styles', 100);
