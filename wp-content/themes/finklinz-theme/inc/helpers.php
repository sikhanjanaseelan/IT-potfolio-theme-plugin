<?php
if (!defined('ABSPATH')) {
    exit;
}

function finklinz_button(
    string $label,
    string $url,
    string $variant = 'primary',
    string $extra_class = ''
): void {
    $class = 'fink-btn fink-btn--' . sanitize_html_class($variant);

    if ($extra_class) {
        $class .= ' ' . sanitize_html_class($extra_class);
    }

    printf(
        '<a class="%1$s" href="%2$s"><span>%3$s</span><span class="fink-btn__arrow" aria-hidden="true">→</span></a>',
        esc_attr($class),
        esc_url($url),
        esc_html($label)
    );
}

function finklinz_section_heading(
    string $eyebrow,
    string $title,
    string $text = ''
): void {
    ?>
    <div class="section-heading">
        <?php if ($eyebrow) : ?>
            <span class="section-heading__eyebrow"><?php echo esc_html($eyebrow); ?></span>
        <?php endif; ?>

        <h2 class="section-heading__title"><?php echo wp_kses_post($title); ?></h2>

        <?php if ($text) : ?>
            <p class="section-heading__text"><?php echo esc_html($text); ?></p>
        <?php endif; ?>
    </div>
    <?php
}
