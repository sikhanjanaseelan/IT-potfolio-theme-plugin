<?php
get_header();
?>

<section class="home-hero">

    <div class="home-hero__glow home-hero__glow--one"></div>
    <div class="home-hero__glow home-hero__glow--two"></div>

    <div class="fink-container home-hero__grid">

        <!-- =========================
             HERO CONTENT
        ========================== -->

        <div class="home-hero__content reveal">

            <span class="home-hero__eyebrow">
                Building Digital Experiences That Perform
            </span>

            <h1 class="home-hero__title">
                We Build Digital
                <span>Experiences That Drive Growth.</span>
            </h1>

            <p class="home-hero__text">
                From high-performance websites and eCommerce platforms
                to scalable web applications and mobile experiences,
                we create digital solutions designed to move businesses forward.
            </p>

            <div class="home-hero__actions">

                <?php
                finklinz_button(
                    'Start Your Project',
                    home_url('/contact/'),
                    'gradient'
                );
                ?>

                <a
                    href="<?php echo esc_url(home_url('/portfolio/')); ?>"
                    class="home-hero__secondary-btn"
                >
                    View Our Work
                    <span>→</span>
                </a>

            </div>

            <div class="home-hero__features">

                <div class="home-hero__feature">
                    <span class="home-hero__feature-dot"></span>
                    Web Development
                </div>

                <div class="home-hero__feature">
                    <span class="home-hero__feature-dot"></span>
                    eCommerce
                </div>

                <div class="home-hero__feature">
                    <span class="home-hero__feature-dot"></span>
                    Mobile Apps
                </div>

                <div class="home-hero__feature">
                    <span class="home-hero__feature-dot"></span>
                    Digital Solutions
                </div>

            </div>

        </div>


        <!-- =========================
             HERO VISUAL
        ========================== -->

        <div class="home-hero__visual reveal">

            <div class="hero-tech-orbit hero-tech-orbit--one"></div>
            <div class="hero-tech-orbit hero-tech-orbit--two"></div>

            <div class="hero-device hero-device--laptop">

                <div class="hero-device__topbar">

                    <div class="hero-device__dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="hero-device__address"></div>

                </div>

                <div class="hero-dashboard">

                    <div class="hero-dashboard__sidebar">

                        <div class="hero-dashboard__logo"></div>

                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>

                    </div>

                    <div class="hero-dashboard__content">

                        <div class="hero-dashboard__heading">
                            <div>
                                <small>Digital Commerce</small>
                                <h3>Growth Dashboard</h3>
                            </div>

                            <div class="hero-dashboard__avatar"></div>
                        </div>

                        <div class="hero-dashboard__stats">

                            <div class="hero-stat-card">
                                <span>Revenue</span>
                                <strong>+42%</strong>
                            </div>

                            <div class="hero-stat-card">
                                <span>Orders</span>
                                <strong>1,284</strong>
                            </div>

                            <div class="hero-stat-card">
                                <span>Conversion</span>
                                <strong>6.8%</strong>
                            </div>

                        </div>

                        <div class="hero-dashboard__chart">

                            <div class="hero-dashboard__chart-line"></div>

                            <div class="hero-dashboard__chart-bars">
                                <span style="height:42%"></span>
                                <span style="height:64%"></span>
                                <span style="height:52%"></span>
                                <span style="height:78%"></span>
                                <span style="height:68%"></span>
                                <span style="height:88%"></span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Mobile Device -->

            <div class="hero-phone">

                <div class="hero-phone__notch"></div>

                <div class="hero-phone__screen">

                    <div class="hero-phone__header"></div>

                    <div class="hero-phone__product"></div>

                    <span class="hero-phone__label">
                        Smart Commerce
                    </span>

                    <strong>
                        Modern Store Experience
                    </strong>

                    <div class="hero-phone__button"></div>

                </div>

            </div>


            <!-- Floating Tech Tags -->

            <div class="hero-floating-card hero-floating-card--wp">
                <span>W</span>
                WordPress
            </div>

            <div class="hero-floating-card hero-floating-card--shop">
                <span>◈</span>
                WooCommerce
            </div>

            <div class="hero-floating-card hero-floating-card--code">
                <span>&lt;/&gt;</span>
                Web Apps
            </div>

        </div>

    </div>

</section>

<!-- ======================================================
     TECHNOLOGY TRUST STRIP
======================================================= -->

<section class="tech-trust">

    <div class="tech-trust__line"></div>

    <div class="fink-container">

        <div class="tech-trust__inner">

            <div class="tech-trust__intro">
                <span>Built with technologies</span>
                <strong>businesses rely on.</strong>
            </div>

            <div class="tech-trust__marquee">

                <div class="tech-trust__track">

                    <div class="tech-trust__item">
                        <span class="tech-trust__icon">W</span>
                        <span>WordPress</span>
                    </div>

                    <div class="tech-trust__item">
                        <span class="tech-trust__icon">Woo</span>
                        <span>WooCommerce</span>
                    </div>

                    <div class="tech-trust__item">
                        <span class="tech-trust__icon">PHP</span>
                        <span>PHP</span>
                    </div>

                    <div class="tech-trust__item">
                        <span class="tech-trust__icon">L</span>
                        <span>Laravel</span>
                    </div>

                    <div class="tech-trust__item">
                        <span class="tech-trust__icon">S</span>
                        <span>Shopify</span>
                    </div>

                    <div class="tech-trust__item">
                        <span class="tech-trust__icon">R</span>
                        <span>React</span>
                    </div>

                    <div class="tech-trust__item">
                        <span class="tech-trust__icon">&lt;/&gt;</span>
                        <span>REST APIs</span>
                    </div>

                    <!-- Duplicate set for seamless animation -->

                    <div class="tech-trust__item" aria-hidden="true">
                        <span class="tech-trust__icon">W</span>
                        <span>WordPress</span>
                    </div>

                    <div class="tech-trust__item" aria-hidden="true">
                        <span class="tech-trust__icon">Woo</span>
                        <span>WooCommerce</span>
                    </div>

                    <div class="tech-trust__item" aria-hidden="true">
                        <span class="tech-trust__icon">PHP</span>
                        <span>PHP</span>
                    </div>

                    <div class="tech-trust__item" aria-hidden="true">
                        <span class="tech-trust__icon">L</span>
                        <span>Laravel</span>
                    </div>

                    <div class="tech-trust__item" aria-hidden="true">
                        <span class="tech-trust__icon">S</span>
                        <span>Shopify</span>
                    </div>

                    <div class="tech-trust__item" aria-hidden="true">
                        <span class="tech-trust__icon">R</span>
                        <span>React</span>
                    </div>

                    <div class="tech-trust__item" aria-hidden="true">
                        <span class="tech-trust__icon">&lt;/&gt;</span>
                        <span>REST APIs</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php
get_footer();
?>