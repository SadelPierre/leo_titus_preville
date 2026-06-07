<?php
/**
 * Template Name: Volunteer
 */
get_header();
?>

<div class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'titus-preville-campaign' ); ?>">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'titus-preville-campaign' ); ?></a>
            <span>/</span>
            <span><?php esc_html_e( 'Volunteer', 'titus-preville-campaign' ); ?></span>
        </nav>
        <h1><?php esc_html_e( 'Join Team Titus', 'titus-preville-campaign' ); ?></h1>
        <p><?php esc_html_e( 'The strength of this campaign is the people of Babonneau. Get involved and help make a difference.', 'titus-preville-campaign' ); ?></p>
    </div>
</div>

<?php get_template_part( 'template-parts/section', 'cta' ); ?>

<!-- Volunteer Information -->
<section class="about-section" style="padding: 64px 0;">
    <div class="container">
        <div style="max-width: 840px; margin: 0 auto;">

            <div class="section-header" style="text-align:left; margin-bottom:36px;">
                <span class="section-eyebrow"><?php esc_html_e( 'How You Can Help', 'titus-preville-campaign' ); ?></span>
                <h2><?php esc_html_e( 'Ways to Get Involved', 'titus-preville-campaign' ); ?></h2>
            </div>

            <div class="grid grid-2">
                <?php
                $ways = array(
                    array(
                        'icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>',
                        'title' => __( 'Door-to-Door Canvassing', 'titus-preville-campaign' ),
                        'desc'  => __( 'Help connect with voters in your community by visiting homes and sharing the campaign message.', 'titus-preville-campaign' ),
                    ),
                    array(
                        'icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07"/><path d="M2 6.92V4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3"/><path d="M22 22 2 2"/></svg>',
                        'title' => __( 'Phone Banking', 'titus-preville-campaign' ),
                        'desc'  => __( 'Call voters in the constituency to share information about Leo Titus Preville and the campaign.', 'titus-preville-campaign' ),
                    ),
                    array(
                        'icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 20V10"/><path d="M12 20V4"/><path d="M6 20v-6"/></svg>',
                        'title' => __( 'Social Media Support', 'titus-preville-campaign' ),
                        'desc'  => __( 'Follow, share, and engage with campaign content on Facebook and spread the word online.', 'titus-preville-campaign' ),
                    ),
                    array(
                        'icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>',
                        'title' => __( 'Community Outreach', 'titus-preville-campaign' ),
                        'desc'  => __( 'Help organize and participate in community events, meetings, and engagement activities in Babonneau.', 'titus-preville-campaign' ),
                    ),
                );
                foreach ( $ways as $way ) : ?>
                    <div class="babonneau-card">
                        <div class="babonneau-card-icon" aria-hidden="true"><?php echo wp_kses_post( $way['icon'] ); ?></div>
                        <h3><?php echo esc_html( $way['title'] ); ?></h3>
                        <p><?php echo esc_html( $way['desc'] ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/section', 'contact' ); ?>

<?php get_footer(); ?>
