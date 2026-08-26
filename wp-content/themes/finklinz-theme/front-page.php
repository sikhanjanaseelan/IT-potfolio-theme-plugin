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

<!-- ======================================================
     SERVICES / WHAT WE BUILD
======================================================= -->

<section class="home-services" id="services">

    <div class="home-services__glow home-services__glow--one"></div>
    <div class="home-services__glow home-services__glow--two"></div>

    <div class="fink-container">

        <!-- Header -->
        <div class="home-services__header reveal">

            <div class="home-services__heading">

                <span class="home-services__eyebrow">
                    What We Build
                </span>

                <h2>
                    Digital solutions engineered
                    <span>for real business growth.</span>
                </h2>

            </div>

            <div class="home-services__header-side">

                <span class="home-services__number">
                    01 — SERVICES
                </span>

                <p>
                    From the first idea to launch and ongoing growth,
                    we build digital products around business goals,
                    performance and user experience.
                </p>

            </div>

        </div>


        <!-- Process line -->
        <div class="home-services__process reveal">

            <span>Strategy</span>
            <i>→</i>

            <span>Design</span>
            <i>→</i>

            <span>Development</span>
            <i>→</i>

            <span>Launch</span>
            <i>→</i>

            <span>Growth</span>

        </div>


        <!-- ==================================================
             SERVICES GRID
        =================================================== -->

        <div class="services-showcase">


            <!-- WEB DEVELOPMENT -->
            <article class="service-card service-card--featured reveal">

                <div class="service-card__top">

                    <span class="service-card__number">
                        01
                    </span>

                    <span class="service-card__icon">
                        &lt;/&gt;
                    </span>

                </div>

                <div class="service-card__content">

                    <span class="service-card__label">
                        Development
                    </span>

                    <h3>
                        Web Development
                    </h3>

                    <p>
                        High-performance business websites,
                        custom WordPress platforms and scalable
                        digital experiences built around your goals.
                    </p>

                    <div class="service-card__tags">

                        <span>WordPress</span>
                        <span>PHP</span>
                        <span>Custom Themes</span>
                        <span>Performance</span>

                    </div>

                    <a
                        href="<?php echo esc_url(
                            home_url('/services/web-development/')
                        ); ?>"
                        class="service-card__link"
                    >
                        Explore Web Development
                        <span>→</span>
                    </a>

                </div>


                <!-- Browser illustration -->
                <div class="service-browser">

                    <div class="service-browser__bar">

                        <div>
                            <i></i>
                            <i></i>
                            <i></i>
                        </div>

                        <span></span>

                    </div>

                    <div class="service-browser__body">

                        <div class="service-browser__nav"></div>

                        <div class="service-browser__hero">

                            <span></span>

                            <strong></strong>

                            <strong></strong>

                            <i></i>

                        </div>

                        <div class="service-browser__cards">

                            <span></span>
                            <span></span>
                            <span></span>

                        </div>

                    </div>

                </div>

            </article>


            <!-- ECOMMERCE -->
            <article class="service-card service-card--commerce reveal">

                <div class="service-card__top">

                    <span class="service-card__number">
                        02
                    </span>

                    <span class="service-card__icon">
                        ◈
                    </span>

                </div>

                <div class="service-card__content">

                    <span class="service-card__label">
                        Commerce
                    </span>

                    <h3>
                        eCommerce & WooCommerce
                    </h3>

                    <p>
                        Conversion-focused online stores built for
                        selling, managing and scaling.
                    </p>

                </div>


                <div class="commerce-visual">

                    <div class="commerce-product">

                        <div class="commerce-product__image"></div>

                        <span></span>
                        <strong></strong>

                        <button aria-hidden="true">
                            +
                        </button>

                    </div>

                    <div class="commerce-stat">
                        <small>Conversion</small>
                        <strong>+38%</strong>
                    </div>

                </div>


                <a
                    href="<?php echo esc_url(
                        home_url('/services/ecommerce/')
                    ); ?>"
                    class="service-card__link"
                >
                    Build Your Store
                    <span>→</span>
                </a>

            </article>


            <!-- MOBILE -->
            <article class="service-card service-card--mobile reveal">

                <div class="service-card__top">

                    <span class="service-card__number">
                        03
                    </span>

                    <span class="service-card__icon">
                        ◫
                    </span>

                </div>

                <div class="service-card__content">

                    <span class="service-card__label">
                        Mobile
                    </span>

                    <h3>
                        Mobile Apps
                    </h3>

                    <p>
                        Modern mobile experiences designed for
                        usability, performance and engagement.
                    </p>

                </div>


                <div class="service-phone">

                    <div class="service-phone__notch"></div>

                    <div class="service-phone__screen">

                        <div class="service-phone__circle"></div>

                        <span></span>

                        <strong></strong>

                        <div class="service-phone__button"></div>

                    </div>

                </div>


                <a
                    href="<?php echo esc_url(
                        home_url('/services/mobile-apps/')
                    ); ?>"
                    class="service-card__link"
                >
                    Explore Mobile
                    <span>→</span>
                </a>

            </article>


            <!-- WEB APPLICATIONS -->
            <article class="service-card service-card--small reveal">

                <div class="service-card__top">

                    <span class="service-card__number">
                        04
                    </span>

                    <span class="service-card__icon">
                        { }
                    </span>

                </div>

                <span class="service-card__label">
                    Engineering
                </span>

                <h3>
                    Web Applications
                </h3>

                <p>
                    Custom dashboards, portals and business
                    applications engineered for real workflows.
                </p>

                <a
                    href="<?php echo esc_url(
                        home_url('/services/web-applications/')
                    ); ?>"
                    class="service-card__link"
                >
                    Learn More
                    <span>→</span>
                </a>

            </article>


            <!-- UI UX -->
            <article class="service-card service-card--small reveal">

                <div class="service-card__top">

                    <span class="service-card__number">
                        05
                    </span>

                    <span class="service-card__icon">
                        ✦
                    </span>

                </div>

                <span class="service-card__label">
                    Experience
                </span>

                <h3>
                    UI/UX & Branding
                </h3>

                <p>
                    Clear digital identities and intuitive
                    interfaces that make businesses memorable.
                </p>

                <a
                    href="<?php echo esc_url(
                        home_url('/services/ui-ux-branding/')
                    ); ?>"
                    class="service-card__link"
                >
                    Discover Design
                    <span>→</span>
                </a>

            </article>


            <!-- API -->
            <article class="service-card service-card--small reveal">

                <div class="service-card__top">

                    <span class="service-card__number">
                        06
                    </span>

                    <span class="service-card__icon">
                        ↔
                    </span>

                </div>

                <span class="service-card__label">
                    Connectivity
                </span>

                <h3>
                    APIs & Integrations
                </h3>

                <p>
                    Connect platforms, automate processes and
                    create reliable data flows between systems.
                </p>

                <a
                    href="<?php echo esc_url(
                        home_url('/services/api-integrations/')
                    ); ?>"
                    class="service-card__link"
                >
                    View Integrations
                    <span>→</span>
                </a>

            </article>

        </div>


        <!-- Bottom CTA -->
        <div class="home-services__bottom reveal">

            <div>

                <span>
                    Have something different in mind?
                </span>

                <strong>
                    We build around your business.
                </strong>

            </div>

            <a
                href="<?php echo esc_url(
                    home_url('/services/')
                ); ?>"
                class="home-services__all"
            >
                Explore All Services

                <span>→</span>
            </a>

        </div>

    </div>

</section>


<!-- ======================================================
     SELECTED WORK / PORTFOLIO
======================================================= -->

<section class="home-work" id="work">

    <div class="home-work__glow home-work__glow--one"></div>
    <div class="home-work__glow home-work__glow--two"></div>

    <div class="fink-container">

        <!-- SECTION HEADER -->
        <div class="home-work__header reveal">

            <div>
                <span class="home-work__eyebrow">
                    Selected Work
                </span>

                <h2>
                    Digital products built
                    <span>to make an impact.</span>
                </h2>
            </div>

            <div class="home-work__intro">

                <span class="home-work__number">
                    02 — PORTFOLIO
                </span>

                <p>
                    A selection of websites, commerce platforms,
                    applications and digital experiences designed
                    around real business goals.
                </p>

            </div>

        </div>


        <!-- FILTERS -->
        <div class="home-work__filters reveal">

            <button class="work-filter is-active" data-filter="all">
                All
            </button>

            <button class="work-filter" data-filter="web">
                Websites
            </button>

            <button class="work-filter" data-filter="commerce">
                eCommerce
            </button>

            <button class="work-filter" data-filter="apps">
                Web Apps
            </button>

            <button class="work-filter" data-filter="branding">
                Branding
            </button>

        </div>


        <!-- ==================================================
             PROJECT GRID
        =================================================== -->

        <div class="home-work__grid">


            <!-- FEATURED PROJECT -->
            <article
                class="work-card work-card--featured reveal"
                data-category="commerce"
            >

                <div class="work-card__visual">

                    <div class="work-browser">

                        <div class="work-browser__bar">

                            <div>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>

                            <span></span>

                        </div>


                        <div class="work-store">

                            <div class="work-store__nav">

                                <strong>STORE</strong>

                                <div>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                            </div>


                            <div class="work-store__hero">

                                <div class="work-store__copy">

                                    <small>
                                        New Collection
                                    </small>

                                    <strong></strong>
                                    <strong></strong>

                                    <span></span>

                                </div>


                                <div class="work-store__product">

                                    <div></div>

                                </div>

                            </div>


                            <div class="work-store__products">

                                <div></div>
                                <div></div>
                                <div></div>

                            </div>

                        </div>

                    </div>


                    <div class="work-card__floating-stat">

                        <span>Conversion</span>

                        <strong>+38%</strong>

                    </div>

                </div>


                <div class="work-card__info">

                    <div>

                        <span class="work-card__category">
                            eCommerce / WooCommerce
                        </span>

                        <h3>
                            Premium Online Store
                        </h3>

                        <p>
                            A conversion-focused commerce experience
                            combining custom storefront design,
                            product management and scalable integrations.
                        </p>

                    </div>


                    <span class="work-card__index">
                        01
                    </span>

                </div>


                <div class="work-card__footer">

                    <div class="work-card__tags">

                        <span>WordPress</span>
                        <span>WooCommerce</span>
                        <span>REST API</span>

                    </div>

                    <a href="#">
                        View Case Study
                        <span>→</span>
                    </a>

                </div>

            </article>


            <!-- PROJECT 2 -->
            <article
                class="work-card reveal"
                data-category="web"
            >

                <div class="work-card__visual work-card__visual--corporate">

                    <div class="work-mini-site">

                        <div class="work-mini-site__nav"></div>

                        <div class="work-mini-site__content">

                            <small></small>

                            <strong></strong>
                            <strong></strong>

                            <span></span>

                        </div>

                        <div class="work-mini-site__blocks">

                            <i></i>
                            <i></i>
                            <i></i>

                        </div>

                    </div>

                </div>


                <div class="work-card__info">

                    <div>

                        <span class="work-card__category">
                            Corporate Website
                        </span>

                        <h3>
                            Digital Business Platform
                        </h3>

                    </div>

                    <span class="work-card__index">
                        02
                    </span>

                </div>


                <div class="work-card__footer">

                    <div class="work-card__tags">

                        <span>WordPress</span>
                        <span>PHP</span>

                    </div>

                    <a href="#">
                        View Project
                        <span>→</span>
                    </a>

                </div>

            </article>


            <!-- PROJECT 3 -->
            <article
                class="work-card reveal"
                data-category="apps"
            >

                <div class="work-card__visual work-card__visual--dashboard">

                    <div class="work-dashboard">

                        <aside>
                            <strong></strong>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </aside>


                        <div class="work-dashboard__main">

                            <div class="work-dashboard__top">
                                <strong></strong>
                                <span></span>
                            </div>

                            <div class="work-dashboard__stats">
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>

                            <div class="work-dashboard__chart">

                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="work-card__info">

                    <div>

                        <span class="work-card__category">
                            Web Application
                        </span>

                        <h3>
                            Business Management Portal
                        </h3>

                    </div>

                    <span class="work-card__index">
                        03
                    </span>

                </div>


                <div class="work-card__footer">

                    <div class="work-card__tags">

                        <span>Laravel</span>
                        <span>REST API</span>

                    </div>

                    <a href="#">
                        View Project
                        <span>→</span>
                    </a>

                </div>

            </article>


            <!-- PROJECT 4 -->
            <article
                class="work-card reveal"
                data-category="branding"
            >

                <div class="work-card__visual work-card__visual--brand">

                    <div class="work-brand">

                        <span>F</span>

                        <strong>
                            DIGITAL
                        </strong>

                        <small>
                            BRAND SYSTEM
                        </small>

                    </div>

                </div>


                <div class="work-card__info">

                    <div>

                        <span class="work-card__category">
                            UI/UX & Branding
                        </span>

                        <h3>
                            Digital Brand Experience
                        </h3>

                    </div>

                    <span class="work-card__index">
                        04
                    </span>

                </div>


                <div class="work-card__footer">

                    <div class="work-card__tags">

                        <span>Branding</span>
                        <span>UI/UX</span>

                    </div>

                    <a href="#">
                        View Project
                        <span>→</span>
                    </a>

                </div>

            </article>


            <!-- PROJECT 5 -->
            <article
                class="work-card reveal"
                data-category="apps"
            >

                <div class="work-card__visual work-card__visual--mobile">

                    <div class="work-mobile-device">

                        <div class="work-mobile-device__screen">

                            <span></span>

                            <div></div>

                            <strong></strong>
                            <strong></strong>

                            <i></i>

                        </div>

                    </div>


                    <div class="work-mobile-circle"></div>

                </div>


                <div class="work-card__info">

                    <div>

                        <span class="work-card__category">
                            Mobile Experience
                        </span>

                        <h3>
                            Customer Mobile Platform
                        </h3>

                    </div>

                    <span class="work-card__index">
                        05
                    </span>

                </div>


                <div class="work-card__footer">

                    <div class="work-card__tags">

                        <span>Mobile</span>
                        <span>API</span>

                    </div>

                    <a href="#">
                        View Project
                        <span>→</span>
                    </a>

                </div>

            </article>

        </div>


        <!-- BOTTOM CTA -->

        <div class="home-work__bottom reveal">

            <p>
                Websites. Stores. Applications.
                <strong>Built around the business behind them.</strong>
            </p>

            <a
                href="<?php echo esc_url(home_url('/portfolio/')); ?>"
                class="home-work__cta"
            >
                View Full Portfolio
                <span>→</span>
            </a>

        </div>

    </div>

</section>
<!-- ======================================================
     WHY FINKLINZ / RESULTS
======================================================= -->

<section class="home-results">

    <div class="home-results__glow home-results__glow--one"></div>
    <div class="home-results__glow home-results__glow--two"></div>

    <div class="fink-container">

        <div class="home-results__header reveal">

            <div>
                <span class="home-results__eyebrow">
                    Why Finklinz
                </span>

                <h2>
                    Built for performance.
                    <span>Designed for growth.</span>
                </h2>
            </div>

            <div class="home-results__intro">

                <span class="home-results__number">
                    03 — CAPABILITIES
                </span>

                <p>
                    We combine engineering, eCommerce, design and business thinking
                    to create digital solutions that are fast, scalable and easy to maintain.
                </p>

            </div>

        </div>


        <!-- RESULTS -->
        <div class="home-results__stats">

            <article class="result-stat reveal">

                <span class="result-stat__value" data-count="30">
                    0
                </span>

                <span class="result-stat__suffix">+</span>

                <strong>
                    Projects Delivered
                </strong>

                <p>
                    Websites, commerce platforms and custom digital solutions.
                </p>

            </article>


            <article class="result-stat reveal">

                <span class="result-stat__value" data-count="95">
                    0
                </span>

                <span class="result-stat__suffix">%</span>

                <strong>
                    Performance Focus
                </strong>

                <p>
                    Built with speed, responsiveness and technical quality in mind.
                </p>

            </article>


            <article class="result-stat reveal">

                <span class="result-stat__value" data-count="10">
                    0
                </span>

                <span class="result-stat__suffix">+</span>

                <strong>
                    Technology Capabilities
                </strong>

                <p>
                    From WordPress and WooCommerce to Laravel, APIs and mobile apps.
                </p>

            </article>


            <article class="result-stat reveal">

                <span class="result-stat__value" data-count="100">
                    0
                </span>

                <span class="result-stat__suffix">%</span>

                <strong>
                    Business Focused
                </strong>

                <p>
                    Every solution starts with the business problem behind it.
                </p>

            </article>

        </div>


        <!-- CAPABILITY GRID -->
        <div class="home-capabilities">

            <article class="capability-card capability-card--large reveal">

                <span class="capability-card__index">
                    01
                </span>

                <div class="capability-card__icon">
                    ⚙
                </div>

                <span class="capability-card__label">
                    Engineering
                </span>

                <h3>
                    Clean, scalable development.
                </h3>

                <p>
                    Reusable architecture, maintainable code and performance-conscious
                    development across websites, applications and commerce platforms.
                </p>

                <div class="capability-card__tags">

                    <span>PHP</span>
                    <span>Laravel</span>
                    <span>WordPress</span>
                    <span>REST API</span>

                </div>

            </article>


            <article class="capability-card reveal">

                <span class="capability-card__index">
                    02
                </span>

                <div class="capability-card__icon">
                    ◈
                </div>

                <span class="capability-card__label">
                    Commerce
                </span>

                <h3>
                    eCommerce built to sell.
                </h3>

                <p>
                    Product architecture, payments, integrations and conversion-focused storefronts.
                </p>

            </article>


            <article class="capability-card reveal">

                <span class="capability-card__index">
                    03
                </span>

                <div class="capability-card__icon">
                    ✦
                </div>

                <span class="capability-card__label">
                    Experience
                </span>

                <h3>
                    Interfaces people understand.
                </h3>

                <p>
                    Clear UI, responsive layouts and interactions designed around usability.
                </p>

            </article>


            <article class="capability-card reveal">

                <span class="capability-card__index">
                    04
                </span>

                <div class="capability-card__icon">
                    ↗
                </div>

                <span class="capability-card__label">
                    Growth
                </span>

                <h3>
                    Ready for what comes next.
                </h3>

                <p>
                    SEO-friendly structures, analytics, automation and scalable digital foundations.
                </p>

            </article>

        </div>


        <!-- BOTTOM STRIP -->
        <div class="home-results__bottom reveal">

            <div>

                <span>
                    Technology is only useful when it solves the right problem.
                </span>

                <strong>
                    We build with purpose, not just features.
                </strong>

            </div>

            <a
                href="<?php echo esc_url(home_url('/about/')); ?>"
                class="home-results__link"
            >
                Why Work With Us
                <span>→</span>
            </a>

        </div>

    </div>

</section>

<?php
get_footer();
?>