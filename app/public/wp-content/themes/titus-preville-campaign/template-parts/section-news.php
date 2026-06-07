<!-- =========================================================
   NEWS / UPDATES SECTION
   ========================================================= -->
<section class="news-section" id="news" aria-labelledby="news-title">
    <div class="container">

        <div class="section-header">
            <span class="section-eyebrow"><?php esc_html_e( 'Stay Informed', 'titus-preville-campaign' ); ?></span>
            <h2 id="news-title"><?php esc_html_e( 'News &amp; Updates', 'titus-preville-campaign' ); ?></h2>
            <p><?php esc_html_e( 'Follow the latest news from the Leo Titus Preville campaign and stay up to date with what\'s happening in Babonneau.', 'titus-preville-campaign' ); ?></p>
            <div class="section-divider" aria-hidden="true"></div>
        </div>

        <?php
        $news_query = new WP_Query( array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        ) );
        ?>

        <?php if ( $news_query->have_posts() ) : ?>
            <div class="news-grid fade-in">
                <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
                    <article class="news-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <div class="news-card-thumbnail">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr( get_the_title() ); ?>">
                                    <?php the_post_thumbnail( 'tpc-card', array( 'loading' => 'lazy', 'alt' => esc_attr( get_the_title() ) ) ); ?>
                                </a>
                            <?php else : ?>
                                <div class="news-card-placeholder-thumb" aria-hidden="true">
                                    <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="news-card-body">
                            <div class="news-card-meta">
                                <span class="news-card-category">
                                    <?php
                                    $cats = get_the_category();
                                    echo $cats ? esc_html( $cats[0]->name ) : esc_html__( 'Campaign Update', 'titus-preville-campaign' );
                                    ?>
                                </span>
                                <time class="news-card-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                                    <?php echo esc_html( get_the_date() ); ?>
                                </time>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo esc_html( get_the_excerpt() ); ?></p>
                            <div class="news-card-footer">
                                <a href="<?php the_permalink(); ?>" class="read-more" aria-label="<?php printf( esc_attr__( 'Read more: %s', 'titus-preville-campaign' ), esc_attr( get_the_title() ) ); ?>">
                                    <?php esc_html_e( 'Read more', 'titus-preville-campaign' ); ?>
                                </a>
                            </div>
                        </div>

                    </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>

        <?php else : ?>

            <!-- PLACEHOLDER NEWS: Replace when real posts are published -->
            <div class="news-grid fade-in">

                <article class="news-card">
                    <div class="news-card-thumbnail">
                        <div class="news-card-placeholder-thumb" aria-hidden="true" style="background: linear-gradient(135deg,#e8f5ee,#fff3c4);">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#007A3D" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                        </div>
                    </div>
                    <div class="news-card-body">
                        <div class="news-card-meta">
                            <span class="news-card-category"><?php esc_html_e( 'Community', 'titus-preville-campaign' ); ?></span>
                            <time class="news-card-date"><?php esc_html_e( 'Coming Soon', 'titus-preville-campaign' ); ?></time>
                        </div>
                        <h3><a href="#news"><?php esc_html_e( 'Community Walkthrough — Babonneau', 'titus-preville-campaign' ); ?></a></h3>
                        <p><?php esc_html_e( 'Leo Titus Preville continues his community engagement tour, meeting with residents and listening to the priorities of the people of Babonneau.', 'titus-preville-campaign' ); ?></p>
                        <div class="news-card-footer">
                            <span style="font-size:0.8125rem;color:#718096;font-style:italic;"><?php esc_html_e( 'Placeholder — publish a post to replace this.', 'titus-preville-campaign' ); ?></span>
                        </div>
                    </div>
                </article>

                <article class="news-card">
                    <div class="news-card-thumbnail">
                        <div class="news-card-placeholder-thumb" aria-hidden="true" style="background: linear-gradient(135deg,#fff3c4,#e8f5ee);">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#FFD600" stroke-width="1.5"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/></svg>
                        </div>
                    </div>
                    <div class="news-card-body">
                        <div class="news-card-meta">
                            <span class="news-card-category"><?php esc_html_e( 'Youth', 'titus-preville-campaign' ); ?></span>
                            <time class="news-card-date"><?php esc_html_e( 'Coming Soon', 'titus-preville-campaign' ); ?></time>
                        </div>
                        <h3><a href="#news"><?php esc_html_e( 'Youth Engagement Forum', 'titus-preville-campaign' ); ?></a></h3>
                        <p><?php esc_html_e( 'A special forum was held to hear directly from young people about their hopes, challenges, and ideas for Babonneau\'s future.', 'titus-preville-campaign' ); ?></p>
                        <div class="news-card-footer">
                            <span style="font-size:0.8125rem;color:#718096;font-style:italic;"><?php esc_html_e( 'Placeholder — publish a post to replace this.', 'titus-preville-campaign' ); ?></span>
                        </div>
                    </div>
                </article>

                <article class="news-card">
                    <div class="news-card-thumbnail">
                        <div class="news-card-placeholder-thumb" aria-hidden="true" style="background: linear-gradient(135deg,#e8f5ee,#fff3c4);">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#007A3D" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                    </div>
                    <div class="news-card-body">
                        <div class="news-card-meta">
                            <span class="news-card-category"><?php esc_html_e( 'Campaign', 'titus-preville-campaign' ); ?></span>
                            <time class="news-card-date"><?php esc_html_e( 'Coming Soon', 'titus-preville-campaign' ); ?></time>
                        </div>
                        <h3><a href="#news"><?php esc_html_e( 'Listening Tour Across Babonneau', 'titus-preville-campaign' ); ?></a></h3>
                        <p><?php esc_html_e( 'Titus Preville completes first phase of his constituency listening tour, gathering feedback from communities across Babonneau.', 'titus-preville-campaign' ); ?></p>
                        <div class="news-card-footer">
                            <span style="font-size:0.8125rem;color:#718096;font-style:italic;"><?php esc_html_e( 'Placeholder — publish a post to replace this.', 'titus-preville-campaign' ); ?></span>
                        </div>
                    </div>
                </article>

            </div>
        <?php endif; ?>

        <div class="news-cta">
            <a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ?: home_url( '/news/' ) ); ?>" class="btn btn-outline-green btn-lg">
                <?php esc_html_e( 'View All Updates', 'titus-preville-campaign' ); ?>
            </a>
        </div>

    </div><!-- .container -->
</section>
