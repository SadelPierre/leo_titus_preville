<?php
/**
 * Template Name: Contact
 */
get_header();
?>

<div class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'titus-preville-campaign' ); ?>">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'titus-preville-campaign' ); ?></a>
            <span>/</span>
            <span><?php esc_html_e( 'Contact', 'titus-preville-campaign' ); ?></span>
        </nav>
        <h1><?php esc_html_e( 'Contact the Campaign', 'titus-preville-campaign' ); ?></h1>
        <p><?php esc_html_e( 'Get in touch with the Leo Titus Preville campaign team. We want to hear from you.', 'titus-preville-campaign' ); ?></p>
    </div>
</div>

<?php get_template_part( 'template-parts/section', 'contact' ); ?>
<?php get_template_part( 'template-parts/section', 'cta' ); ?>

<?php get_footer(); ?>
