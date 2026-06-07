<?php
/**
 * 404 template.
 */
get_header();
?>

<div class="page-content-wrapper">
    <div class="container">
        <div class="error-404" style="margin-top:72px;">
            <div style="font-size:6rem; font-weight:900; color:#FFD600; line-height:1;">404</div>
            <h1 style="font-size:2rem; margin:16px 0;"><?php esc_html_e( 'Page Not Found', 'titus-preville-campaign' ); ?></h1>
            <p><?php esc_html_e( 'The page you are looking for could not be found. It may have been moved or may no longer exist.', 'titus-preville-campaign' ); ?></p>
            <div style="display:flex; gap:16px; justify-content:center; margin-top:32px; flex-wrap:wrap;">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-green btn-lg"><?php esc_html_e( 'Back to Home', 'titus-preville-campaign' ); ?></a>
                <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-outline-green btn-lg"><?php esc_html_e( 'Contact Us', 'titus-preville-campaign' ); ?></a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
