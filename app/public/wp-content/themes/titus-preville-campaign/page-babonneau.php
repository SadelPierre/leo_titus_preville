<?php
/**
 * Template Name: Babonneau
 */
get_header();
?>

<div class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'titus-preville-campaign' ); ?>">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'titus-preville-campaign' ); ?></a>
            <span>/</span>
            <span><?php esc_html_e( 'Babonneau', 'titus-preville-campaign' ); ?></span>
        </nav>
        <h1><?php esc_html_e( 'For the People of Babonneau', 'titus-preville-campaign' ); ?></h1>
        <p><?php esc_html_e( 'A constituency with proud communities, hardworking families, and enormous potential.', 'titus-preville-campaign' ); ?></p>
    </div>
</div>

<?php get_template_part( 'template-parts/section', 'babonneau' ); ?>
<?php get_template_part( 'template-parts/section', 'campaign-message' ); ?>
<?php get_template_part( 'template-parts/section', 'cta' ); ?>

<?php get_footer(); ?>
