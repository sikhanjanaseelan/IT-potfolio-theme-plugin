<!doctype html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<!-- ======================================================
     SITE HEADER
======================================================= -->

<header
    class="site-header"
    id="site-header"
>

    <div class="site-header__inner">


        <!-- ==================================================
             BRAND / LOGO
        =================================================== -->

        <div class="site-brand">

            <?php if (has_custom_logo()) : ?>

                <?php
                /*
                 * WordPress automatically generates:
                 *
                 * <a class="custom-logo-link">
                 *     <img class="custom-logo">
                 * </a>
                 *
                 * Therefore we MUST NOT wrap the_custom_logo()
                 * inside another <a>.
                 */
                the_custom_logo();
                ?>

            <?php else : ?>

                <a
                    href="<?php echo esc_url(home_url('/')); ?>"
                    class="site-brand__fallback"
                    aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>"
                >

                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                            . '/assets/images/finklinz-logo.png'
                        ); ?>"
                        alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                        class="site-brand__logo"
                    >

                </a>

            <?php endif; ?>

        </div>


        <!-- ==================================================
             MOBILE MENU BUTTON
        =================================================== -->

        <button
            class="nav-toggle"
            type="button"
            aria-expanded="false"
            aria-controls="primary-menu"
            aria-label="<?php esc_attr_e(
                'Toggle navigation',
                'finklinz'
            ); ?>"
        >

            <span></span>
            <span></span>
            <span></span>

        </button>


        <!-- ==================================================
             PRIMARY NAVIGATION
        =================================================== -->

        <nav
            class="site-nav"
            aria-label="<?php esc_attr_e(
                'Primary Navigation',
                'finklinz'
            ); ?>"
        >

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


        <!-- ==================================================
             HEADER CTA
        =================================================== -->

        <div class="site-header__cta">

            <?php

            finklinz_button(
                __('Let’s Work Together', 'finklinz'),
                home_url('/contact/'),
                'gradient'
            );

            ?>

        </div>


    </div>

</header>


<!-- ======================================================
     MAIN CONTENT
======================================================= -->

<main
    id="primary"
    class="site-main"
>