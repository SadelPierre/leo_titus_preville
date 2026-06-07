<?php
/**
 * Template Name: Priorities
 */
get_header();
?>

<div class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'titus-preville-campaign' ); ?>">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'titus-preville-campaign' ); ?></a>
            <span>/</span>
            <span><?php esc_html_e( 'Priorities', 'titus-preville-campaign' ); ?></span>
        </nav>
        <h1><?php esc_html_e( 'Our Priorities for Babonneau', 'titus-preville-campaign' ); ?></h1>
        <p><?php esc_html_e( 'Six clear commitments to the people of Babonneau — practical, community-focused, and action-oriented.', 'titus-preville-campaign' ); ?></p>
    </div>
</div>

<?php get_template_part( 'template-parts/section', 'priorities' ); ?>
<?php get_template_part( 'template-parts/section', 'babonneau' ); ?>
<?php get_template_part( 'template-parts/section', 'cta' ); ?>

<?php get_footer(); ?>
