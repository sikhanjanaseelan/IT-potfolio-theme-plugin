<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="about-hero">

    <div class="about-hero__glow about-hero__glow--one"></div>
    <div class="about-hero__glow about-hero__glow--two"></div>

    <div class="fink-container about-hero__grid">

        <div class="about-hero__content hero-intro">

            <span class="about-hero__eyebrow">
                About Finklinz
            </span>

            <h1>
                Building digital experiences
                <span>that drive real results.</span>
            </h1>

            <p>
                Finklinz IT & E-Com Solutions creates websites,
                eCommerce platforms, web applications and digital
                experiences designed around real business needs.
            </p>

            <div class="about-hero__actions">

                <?php
                finklinz_button(
                    'Explore Our Work',
                    home_url('/portfolio/'),
                    'gradient'
                );
                ?>

                <a
                    href="<?php echo esc_url(home_url('/contact/')); ?>"
                    class="about-hero__secondary"
                >
                    Let’s Work Together
                    <span>→</span>
                </a>

            </div>

            <div class="about-hero__mini-stats">

                <div>
                    <strong>30+</strong>
                    <span>Projects</span>
                </div>

                <div>
                    <strong>10+</strong>
                    <span>Technologies</span>
                </div>

                <div>
                    <strong>3+</strong>
                    <span>Years Experience</span>
                </div>

            </div>

        </div>


        <!-- Office / Reception / Screen image area -->

        <div class="about-hero__visual hero-visual-intro">

            <div class="about-office-frame">

                <?php if (has_post_thumbnail()) : ?>

                    <?php
                    the_post_thumbnail(
                        'large',
                        [
                            'class' => 'about-office-frame__image',
                            'alt'   => esc_attr(get_the_title()),
                        ]
                    );
                    ?>

                <?php else : ?>

                    <div class="about-office-placeholder">

                        <div class="about-office-placeholder__screen">

                            <span>F</span>

                            <strong>
                                FINKLINZ
                            </strong>

                            <small>
                                DIGITAL WORKSPACE
                            </small>

                        </div>

                        <div class="about-office-placeholder__desk"></div>

                        <span class="about-office-placeholder__label">
                            Office / Reception / Workspace Image
                        </span>

                    </div>

                <?php endif; ?>


                <div class="about-office-badge about-office-badge--one">
                    <span>◈</span>
                    Digital Products
                </div>

                <div class="about-office-badge about-office-badge--two">
                    <span>&lt;/&gt;</span>
                    Engineering
                </div>

                <div class="about-office-badge about-office-badge--three">
                    <span>✦</span>
                    Experience
                </div>

            </div>

        </div>

    </div>

</section>