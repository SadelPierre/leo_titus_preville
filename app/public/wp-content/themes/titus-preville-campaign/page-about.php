<?php
/**
 * Template Name: About Titus
 * Full-page About template — renders the About section with full detail.
 */
get_header();
?>

<div class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'titus-preville-campaign' ); ?>">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'titus-preville-campaign' ); ?></a>
            <span>/</span>
            <span><?php esc_html_e( 'About Titus', 'titus-preville-campaign' ); ?></span>
        </nav>
        <h1><?php esc_html_e( 'Meet Leo Titus Preville', 'titus-preville-campaign' ); ?></h1>
        <p><?php esc_html_e( 'UWP Candidate for Babonneau, Saint Lucia — committed to service, leadership, and progress.', 'titus-preville-campaign' ); ?></p>
    </div>
</div>

<?php get_template_part( 'template-parts/section', 'about' ); ?>

<div class="page-content-wrapper" style="padding-top:0;">
    <div class="container">
        <div class="post-content" style="max-width:840px; margin:0 auto;">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_template_part( 'template-parts/section', 'cta' ); ?>

<?php get_footer(); ?>
