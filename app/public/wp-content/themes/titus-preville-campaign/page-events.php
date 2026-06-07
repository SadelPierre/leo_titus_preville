<?php
/**
 * Template Name: Events
 */
get_header();
?>

<div class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'titus-preville-campaign' ); ?>">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'titus-preville-campaign' ); ?></a>
            <span>/</span>
            <span><?php esc_html_e( 'Events', 'titus-preville-campaign' ); ?></span>
        </nav>
        <h1><?php esc_html_e( 'Upcoming Campaign Events', 'titus-preville-campaign' ); ?></h1>
        <p><?php esc_html_e( 'Join Leo Titus Preville at upcoming community meetings, walkthroughs, and campaign events across Babonneau.', 'titus-preville-campaign' ); ?></p>
    </div>
</div>

<?php get_template_part( 'template-parts/section', 'events' ); ?>
<?php get_template_part( 'template-parts/section', 'cta' ); ?>

<?php get_footer(); ?>
