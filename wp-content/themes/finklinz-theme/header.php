<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="fink-container site-header__inner">
        <a class="site-brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?>">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/finklinz-logo.png'); ?>"
                    alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                    class="site-brand__logo"
                >
            <?php endif; ?>
        </a>

        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-menu">
            <span></span><span></span><span></span>
            <span class="screen-reader-text"><?php esc_html_e('Toggle navigation', 'finklinz'); ?></span>
        </button>

        <nav class="site-nav" aria-label="<?php esc_attr_e('Primary Navigation', 'finklinz'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'site-nav__menu',
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>

        <div class="site-header__cta">
            <?php finklinz_button(
                __('Let’s Work Together', 'finklinz'),
                home_url('/contact/'),
                'gradient'
            ); ?>
        </div>
    </div>
</header>

<main id="primary" class="site-main">
