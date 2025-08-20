<?php
/**
 * Single post template
 * @package wcag-theme
 */
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wrapper'); ?> aria-labelledby="post-title-<?php the_ID(); ?>">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <header>
    <h1 id="post-title-<?php the_ID(); ?>"><?php the_title(); ?></h1>
    <p class="post-meta">
      <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
      <span class="screen-reader-text"><?php esc_html_e( 'by', 'wcag-theme' ); ?></span>
      <?php the_author_posts_link(); ?>
    </p>
  </header>

  <div class="entry-content">
    <?php the_content(); ?>
  </div>

  <?php the_post_navigation([
      'prev_text' => __( 'Previous: %title', 'wcag-theme' ),
      'next_text' => __( 'Next: %title', 'wcag-theme' ),
      'screen_reader_text' => __( 'Post navigation', 'wcag-theme' ),
  ]); ?>

  <?php if ( comments_open() || get_comments_number() ) { comments_template(); } ?>

<?php endwhile; endif; ?>
</article>

<?php get_footer(); ?>