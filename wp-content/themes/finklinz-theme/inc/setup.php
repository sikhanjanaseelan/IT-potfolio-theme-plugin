<?php
if (!defined('ABSPATH')) {
    exit;
}

function finklinz_theme_setup(): void {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 340,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    register_nav_menus([
        'primary' => __('Primary Menu', 'finklinz'),
        'footer'  => __('Footer Menu', 'finklinz'),
    ]);
}
add_action('after_setup_theme', 'finklinz_theme_setup');
