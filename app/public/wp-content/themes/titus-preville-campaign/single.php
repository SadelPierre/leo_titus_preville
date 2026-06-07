<?php
/**
 * Single post template.
 */
get_header();
?>

<div class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'titus-preville-campaign' ); ?>">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'titus-preville-campaign' ); ?></a>
            <span aria-hidden="true">/</span>
            <a href="<?php echo esc_url( home_url( '/#news' ) ); ?>"><?php esc_html_e( 'News', 'titus-preville-campaign' ); ?></a>
            <span aria-hidden="true">/</span>
            <span><?php the_title(); ?></span>
        </nav>
        <h1><?php the_title(); ?></h1>
        <?php if ( have_posts() ) : the_post(); ?>
        <p style="color:rgba(255,255,255,0.65); font-size:0.9375rem;">
            <?php esc_html_e( 'Published', 'titus-preville-campaign' ); ?> &mdash;
            <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
        </p>
        <?php endif; wp_reset_query(); ?>
    </div>
</div>

<div class="page-content-wrapper">
    <div class="container">
        <div class="content-sidebar-wrap">

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-content' ); ?>>
                <?php
                rewind_posts();
                while ( have_posts() ) :
                    the_post();
                    if ( has_post_thumbnail() ) :
                        echo '<div style="margin-bottom:32px; border-radius:12px; overflow:hidden;">';
                        the_post_thumbnail( 'large', array( 'loading' => 'lazy', 'alt' => esc_attr( get_the_title() ), 'style' => 'width:100%;height:auto;' ) );
                        echo '</div>';
                    endif;
                    the_content();
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'titus-preville-campaign' ),
                        'after'  => '</div>',
                    ) );
                endwhile;
                ?>

                <div style="margin-top:40px; padding-top:32px; border-top:1px solid #E5E7EB; display:flex; gap:16px; flex-wrap:wrap; align-items:center;">
                    <a href="<?php echo esc_url( home_url( '/#news' ) ); ?>" class="btn btn-outline-green">
                        &larr; <?php esc_html_e( 'Back to News', 'titus-preville-campaign' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-green">
                        <?php esc_html_e( 'Home', 'titus-preville-campaign' ); ?>
                    </a>
                </div>

                <div style="margin-top:32px;">
                    <?php the_post_navigation( array(
                        'prev_text' => '<span style="font-size:0.8125rem;color:#718096;text-transform:uppercase;letter-spacing:0.06em;">' . esc_html__( 'Previous', 'titus-preville-campaign' ) . '</span><br><strong>%title</strong>',
                        'next_text' => '<span style="font-size:0.8125rem;color:#718096;text-transform:uppercase;letter-spacing:0.06em;">' . esc_html__( 'Next', 'titus-preville-campaign' ) . '</span><br><strong>%title</strong>',
                    ) ); ?>
                </div>
            </article>

            <aside class="sidebar" role="complementary">
                <div class="sidebar-widget">
                    <h3><?php esc_html_e( 'Join the Campaign', 'titus-preville-campaign' ); ?></h3>
                    <p style="font-size:0.9375rem;color:#4A5568;"><?php esc_html_e( 'Support Leo Titus Preville and help build a better Babonneau.', 'titus-preville-campaign' ); ?></p>
                    <a href="<?php echo esc_url( home_url( '/#volunteer' ) ); ?>" class="btn btn-primary btn-sm" style="margin-top:12px;">
                        <?php esc_html_e( 'Get Involved', 'titus-preville-campaign' ); ?>
                    </a>
                </div>
                <div class="sidebar-widget">
                    <h3><?php esc_html_e( 'Follow Titus', 'titus-preville-campaign' ); ?></h3>
                    <a href="https://www.facebook.com/titus.preville.77" class="btn btn-facebook btn-sm" target="_blank" rel="noopener noreferrer" style="width:100%;justify-content:center;">
                        <?php esc_html_e( 'Facebook', 'titus-preville-campaign' ); ?>
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
