<?php
/**
 * Front Page Template — Leo Titus Preville Campaign
 * Renders all homepage sections in order.
 */
get_header();
?>

<?php get_template_part( 'template-parts/section', 'hero' ); ?>
<?php get_template_part( 'template-parts/section', 'campaign-message' ); ?>
<?php get_template_part( 'template-parts/section', 'about' ); ?>
<?php get_template_part( 'template-parts/section', 'babonneau' ); ?>
<?php get_template_part( 'template-parts/section', 'priorities' ); ?>
<?php get_template_part( 'template-parts/section', 'cta' ); ?>
<?php get_template_part( 'template-parts/section', 'news' ); ?>
<?php get_template_part( 'template-parts/section', 'events' ); ?>
<?php get_template_part( 'template-parts/section', 'testimonials' ); ?>
<?php get_template_part( 'template-parts/section', 'contact' ); ?>

<?php get_footer(); ?>
