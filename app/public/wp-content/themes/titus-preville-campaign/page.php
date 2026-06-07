<?php
/**
 * Default page template.
 */
get_header();
?>

<div class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'titus-preville-campaign' ); ?>">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'titus-preville-campaign' ); ?></a>
            <span aria-hidden="true">/</span>
            <span><?php the_title(); ?></span>
        </nav>
        <h1><?php the_title(); ?></h1>
    </div>
</div>

<div class="page-content-wrapper">
    <div class="container">
        <div class="content-sidebar-wrap">

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-content' ); ?>>
                <?php
                while ( have_posts() ) :
                    the_post();
                    the_content();
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'titus-preville-campaign' ),
                        'after'  => '</div>',
                    ) );
                endwhile;
                ?>
            </article>

            <aside class="sidebar" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar', 'titus-preville-campaign' ); ?>">

                <div class="sidebar-widget">
                    <h3><?php esc_html_e( 'About Titus', 'titus-preville-campaign' ); ?></h3>
                    <p style="font-size:0.9375rem;color:#4A5568;">
                        <?php esc_html_e( 'Leo Titus Preville — United Workers Party candidate for Babonneau, Saint Lucia.', 'titus-preville-campaign' ); ?>
                    </p>
                    <a href="<?php echo esc_url( home_url( '/#about' ) ); ?>" class="btn btn-green btn-sm" style="margin-top:12px;">
                        <?php esc_html_e( 'Learn More', 'titus-preville-campaign' ); ?>
                    </a>
                </div>

                <div class="sidebar-widget">
                    <h3><?php esc_html_e( 'Get Involved', 'titus-preville-campaign' ); ?></h3>
                    <p style="font-size:0.9375rem;color:#4A5568;"><?php esc_html_e( 'Join the campaign and help build a better Babonneau.', 'titus-preville-campaign' ); ?></p>
                    <a href="<?php echo esc_url( home_url( '/#volunteer' ) ); ?>" class="btn btn-primary btn-sm" style="margin-top:12px;">
                        <?php esc_html_e( 'Join the Campaign', 'titus-preville-campaign' ); ?>
                    </a>
                </div>

                <div class="sidebar-widget">
                    <h3><?php esc_html_e( 'Follow', 'titus-preville-campaign' ); ?></h3>
                    <a href="https://www.facebook.com/titus.preville.77" class="btn btn-facebook btn-sm" target="_blank" rel="noopener noreferrer" style="width:100%;justify-content:center;">
                        <?php esc_html_e( 'Follow on Facebook', 'titus-preville-campaign' ); ?>
                    </a>
                </div>

                <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                <?php endif; ?>
            </aside>

        </div>
    </div>
</div>

<?php get_footer(); ?>
