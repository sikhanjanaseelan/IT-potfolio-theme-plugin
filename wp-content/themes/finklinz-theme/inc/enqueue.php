<?php

if (!defined('ABSPATH')) {
    exit;
}


function finklinz_enqueue_assets(): void {

    $version = wp_get_theme()->get('Version');


    /* =====================================================
       GLOBAL STYLES
    ====================================================== */

    wp_enqueue_style(
        'finklinz-main',
        get_template_directory_uri()
        . '/assets/css/main.css',
        [],
        $version
    );


    wp_enqueue_style(
        'finklinz-components',
        get_template_directory_uri()
        . '/assets/css/components.css',
        ['finklinz-main'],
        $version
    );


    wp_enqueue_style(
        'finklinz-animations',
        get_template_directory_uri()
        . '/assets/css/animations.css',
        ['finklinz-main'],
        $version
    );


    wp_enqueue_style(
        'finklinz-responsive',
        get_template_directory_uri()
        . '/assets/css/responsive.css',
        [
            'finklinz-main',
            'finklinz-components'
        ],
        $version
    );


    /* =====================================================
       PAGE SPECIFIC STYLES
    ====================================================== */

    if (is_page('about-us')) {

        wp_enqueue_style(
            'finklinz-about',
            get_template_directory_uri()
            . '/assets/css/pages/about.css',
            [
                'finklinz-main',
                'finklinz-components'
            ],
            $version
        );

    }


    /* =====================================================
       JAVASCRIPT
    ====================================================== */

    wp_enqueue_script(
        'finklinz-main',
        get_template_directory_uri()
        . '/assets/js/main.js',
        [],
        $version,
        true
    );


    wp_enqueue_script(
        'finklinz-animations',
        get_template_directory_uri()
        . '/assets/js/animations.js',
        ['finklinz-main'],
        $version,
        true
    );

}

add_action(
    'wp_enqueue_scripts',
    'finklinz_enqueue_assets'
);  