<?php
/**
 * Main index template — fallback for all pages.
 */
get_header();
?>

<div class="page-hero">
    <div class="container">
        <nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'titus-preville-campaign' ); ?>">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'titus-preville-campaign' ); ?></a>
            <span aria-hidden="true">/</span>
            <span><?php the_archive_title(); ?></span>
        </nav>
        <h1><?php the_archive_title(); ?></h1>
        <?php the_archive_description( '<p>', '</p>' ); ?>
    </div>
</div>

<div class="page-content-wrapper">
    <div class="container">

        <?php if ( have_posts() ) : ?>
            <div class="news-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'news-card' ); ?>>

                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="news-card-thumbnail">
                                <a href="<?php the_permalink(); ?>" aria-label="<?php esc_attr_e( 'Read post', 'titus-preville-campaign' ); ?>">
                                    <?php the_post_thumbnail( 'tpc-card', array( 'loading' => 'lazy', 'alt' => esc_attr( get_the_title() ) ) ); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="news-card-body">
                            <div class="news-card-meta">
                                <span class="news-card-category">
                                    <?php
                                    $cats = get_the_category();
                                    echo $cats ? esc_html( $cats[0]->name ) : esc_html__( 'Update', 'titus-preville-campaign' );
                                    ?>
                                </span>
                                <time class="news-card-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                                    <?php echo esc_html( get_the_date() ); ?>
                                </time>
                            </div>
                            <h2 style="font-size:1.125rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php echo esc_html( get_the_excerpt() ); ?></p>
                            <div class="news-card-footer">
                                <a href="<?php the_permalink(); ?>" class="read-more">
                                    <?php esc_html_e( 'Read more', 'titus-preville-campaign' ); ?>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div style="margin-top:40px; display:flex; justify-content:center; gap:12px;">
                <?php
                the_posts_pagination( array(
                    'prev_text' => '← ' . esc_html__( 'Older', 'titus-preville-campaign' ),
                    'next_text' => esc_html__( 'Newer', 'titus-preville-campaign' ) . ' →',
                ) );
                ?>
            </div>

        <?php else : ?>
            <div style="text-align:center; padding: 60px 0;">
                <h2><?php esc_html_e( 'No content found.', 'titus-preville-campaign' ); ?></h2>
                <p><?php esc_html_e( 'Check back soon for campaign updates and news.', 'titus-preville-campaign' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-green" style="margin-top:20px;"><?php esc_html_e( 'Back to Home', 'titus-preville-campaign' ); ?></a>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>
