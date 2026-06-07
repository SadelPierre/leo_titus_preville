<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php is_front_page() ? esc_attr_e( 'Leo Titus Preville — United Workers Party candidate for Babonneau, Saint Lucia. Leadership, service, and progress for the people of Babonneau.', 'titus-preville-campaign' ) : the_excerpt(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'titus-preville-campaign' ); ?></a>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu-overlay" aria-hidden="true"></div>

<!-- Mobile Menu Panel -->
<nav class="mobile-menu" id="mobile-menu" aria-label="<?php esc_attr_e( 'Mobile Navigation', 'titus-preville-campaign' ); ?>">
    <button class="mobile-close" aria-label="<?php esc_attr_e( 'Close menu', 'titus-preville-campaign' ); ?>">&#10005;</button>
    <ul>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'titus-preville-campaign' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>"><?php esc_html_e( 'About Titus', 'titus-preville-campaign' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#babonneau' ) ); ?>"><?php esc_html_e( 'Babonneau', 'titus-preville-campaign' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#priorities' ) ); ?>"><?php esc_html_e( 'Priorities', 'titus-preville-campaign' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#news' ) ); ?>"><?php esc_html_e( 'News', 'titus-preville-campaign' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#events' ) ); ?>"><?php esc_html_e( 'Events', 'titus-preville-campaign' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#volunteer' ) ); ?>"><?php esc_html_e( 'Volunteer', 'titus-preville-campaign' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Contact', 'titus-preville-campaign' ); ?></a></li>
    </ul>
    <div class="mobile-menu-cta">
        <a href="<?php echo esc_url( home_url( '/#volunteer' ) ); ?>" class="btn btn-primary">
            <?php esc_html_e( 'Join the Campaign', 'titus-preville-campaign' ); ?>
        </a>
        <a href="https://www.facebook.com/titus.preville.77" class="btn btn-facebook" target="_blank" rel="noopener noreferrer">
            <?php esc_html_e( 'Follow on Facebook', 'titus-preville-campaign' ); ?>
        </a>
    </div>
</nav>

<!-- ─── Site Header ─────────────────────────────────── -->
<header class="site-header" id="site-header" role="banner">
    <div class="container header-inner">

        <!-- Logo -->
        <div class="header-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php esc_attr_e( 'Leo Titus Preville — Home', 'titus-preville-campaign' ); ?>">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <div class="logo-uwp-badge" aria-hidden="true">UWP</div>
                    <div class="logo-text">
                        <span class="logo-name"><?php esc_html_e( 'Leo Titus Preville', 'titus-preville-campaign' ); ?></span>
                        <span class="logo-subtitle"><?php esc_html_e( 'UWP · Babonneau', 'titus-preville-campaign' ); ?></span>
                    </div>
                <?php endif; ?>
            </a>
        </div>

        <!-- Desktop Nav -->
        <nav class="main-nav" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'titus-preville-campaign' ); ?>">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'nav-menu',
                'container'      => false,
                'fallback_cb'    => 'tpc_fallback_menu',
            ) );
            ?>
            <div class="header-cta">
                <a href="<?php echo esc_url( home_url( '/#volunteer' ) ); ?>" class="btn btn-primary btn-sm">
                    <?php esc_html_e( 'Join the Campaign', 'titus-preville-campaign' ); ?>
                </a>
            </div>
            <button class="menu-toggle" aria-controls="mobile-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open navigation menu', 'titus-preville-campaign' ); ?>">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
        </nav>

    </div><!-- .header-inner -->
</header>

<main id="main" role="main">
