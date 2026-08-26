<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="about-cta">

    <div class="about-cta__glow"></div>

    <div class="fink-container">

        <div class="about-cta__panel reveal">

            <div>

                <span>
                    LET’S WORK TOGETHER
                </span>

                <h2>
                    Ready to build
                    <strong>something useful?</strong>
                </h2>

                <p>
                    Tell us what you are trying to achieve.
                    We’ll help turn the idea into a practical
                    digital solution.
                </p>

            </div>

            <div class="about-cta__actions">

                <?php
                finklinz_button(
                    'Start Your Project',
                    home_url('/contact/'),
                    'gradient'
                );
                ?>

                <a href="<?php echo esc_url(home_url('/services/')); ?>">
                    Explore Services
                    <span>→</span>
                </a>

            </div>

        </div>

    </div>

</section>