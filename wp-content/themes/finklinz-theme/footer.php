</main>

<footer class="site-footer">
    <div class="fink-container site-footer__grid">
        <div class="site-footer__brand">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-footer__logo-link">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/finklinz-logo.png'); ?>"
                        alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                        class="site-footer__logo"
                    >
                <?php endif; ?>
            </a>
            <p><?php esc_html_e('Smart IT and eCommerce solutions built for modern businesses.', 'finklinz'); ?></p>
        </div>

        <div>
            <h3><?php esc_html_e('Quick Links', 'finklinz'); ?></h3>
            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'container'      => false,
                'menu_class'     => 'site-footer__menu',
                'fallback_cb'    => false,
            ]);
            ?>
        </div>

        <div>
            <h3><?php esc_html_e('Get In Touch', 'finklinz'); ?></h3>
            <ul class="site-footer__contact">
                <li><a href="mailto:info@finklinz.com">info@finklinz.com</a></li>
                <li>Warsaw, Poland</li>
            </ul>
        </div>
    </div>

    <div class="fink-container site-footer__bottom">
        <p>© <?php echo esc_html(date('Y')); ?> Finklinz IT & E-Com Solutions.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
