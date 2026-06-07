<!-- =========================================================
   HERO SECTION
   ========================================================= -->
<section class="hero-section" id="home" aria-labelledby="hero-headline">
    <div class="hero-bg-pattern" aria-hidden="true"></div>
    <div class="hero-accent-bar" aria-hidden="true"></div>

    <div class="container">
        <div class="hero-inner">

            <!-- Hero Content (Left) -->
            <div class="hero-content">

                <div class="hero-party-badge" aria-label="<?php esc_attr_e( 'United Workers Party', 'titus-preville-campaign' ); ?>">
                    <span class="party-badge-dot" aria-hidden="true"></span>
                    <?php esc_html_e( 'United Workers Party · Saint Lucia', 'titus-preville-campaign' ); ?>
                </div>

                <h1 class="hero-headline" id="hero-headline">
                    <?php esc_html_e( 'Leadership.', 'titus-preville-campaign' ); ?>
                    <span class="accent"><?php esc_html_e( 'Service.', 'titus-preville-campaign' ); ?></span>
                    <?php esc_html_e( 'Progress for Babonneau.', 'titus-preville-campaign' ); ?>
                </h1>

                <p class="hero-candidate-name"><?php esc_html_e( 'Leo Titus Preville', 'titus-preville-campaign' ); ?></p>
                <span class="hero-constituency"><?php esc_html_e( 'UWP Candidate for Babonneau, Saint Lucia', 'titus-preville-campaign' ); ?></span>

                <p class="hero-subheading">
                    <?php esc_html_e( 'Leo Titus Preville, United Workers Party candidate for Babonneau, is committed to listening, serving, and working with the people to build stronger communities and a brighter future for every family.', 'titus-preville-campaign' ); ?>
                </p>

                <div class="hero-cta-group" role="group" aria-label="<?php esc_attr_e( 'Campaign calls to action', 'titus-preville-campaign' ); ?>">
                    <a href="#volunteer" class="btn btn-primary btn-lg">
                        <?php esc_html_e( 'Join the Campaign', 'titus-preville-campaign' ); ?>
                    </a>
                    <a href="#about" class="btn btn-secondary btn-lg">
                        <?php esc_html_e( 'Meet Titus', 'titus-preville-campaign' ); ?>
                    </a>
                    <a href="https://www.facebook.com/titus.preville.77" class="btn btn-facebook btn-lg" target="_blank" rel="noopener noreferrer">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        <?php esc_html_e( 'Follow on Facebook', 'titus-preville-campaign' ); ?>
                    </a>
                </div>

                <div class="hero-stats" role="list" aria-label="<?php esc_attr_e( 'Constituency information', 'titus-preville-campaign' ); ?>">
                    <div class="hero-stat" role="listitem">
                        <span class="hero-stat-number">1</span>
                        <span class="hero-stat-label"><?php esc_html_e( 'Constituency', 'titus-preville-campaign' ); ?></span>
                    </div>
                    <div class="hero-stat" role="listitem">
                        <span class="hero-stat-number">6+</span>
                        <span class="hero-stat-label"><?php esc_html_e( 'Key Priorities', 'titus-preville-campaign' ); ?></span>
                    </div>
                    <div class="hero-stat" role="listitem">
                        <span class="hero-stat-number">100%</span>
                        <span class="hero-stat-label"><?php esc_html_e( 'Committed', 'titus-preville-campaign' ); ?></span>
                    </div>
                </div>

                <div class="hero-scroll-hint" aria-hidden="true">
                    <span><?php esc_html_e( 'Scroll to explore', 'titus-preville-campaign' ); ?></span>
                    <span class="scroll-arrow"></span>
                </div>

            </div><!-- .hero-content -->

            <!-- Hero Image (Right) -->
            <div class="hero-image-wrapper" aria-hidden="true">
                <div class="hero-candidate-img">
                    <?php
                    // Check if a featured image is set via custom option or fallback to placeholder
                    // TO DO: Upload candidate photo and set it via Appearance > Customize
                    ?>
                    <div class="candidate-photo-placeholder" role="img" aria-label="<?php esc_attr_e( 'Candidate photo placeholder — replace with official photo of Leo Titus Preville', 'titus-preville-campaign' ); ?>">
                        <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                            <circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.582-7 8-7s8 3 8 7"/>
                        </svg>
                        <span><?php esc_html_e( 'Leo Titus Preville', 'titus-preville-campaign' ); ?></span>
                        <span class="placeholder-label"><?php esc_html_e( 'Add official candidate photo here', 'titus-preville-campaign' ); ?></span>
                    </div>

                    <div class="hero-uwp-badge" aria-hidden="true">
                        UWP
                        <span><?php esc_html_e( 'Saint Lucia', 'titus-preville-campaign' ); ?></span>
                    </div>
                </div>
            </div><!-- .hero-image-wrapper -->

        </div><!-- .hero-inner -->
    </div><!-- .container -->
</section>
