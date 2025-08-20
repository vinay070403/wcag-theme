<?php
/**
 * Index template
 * @package wcag-theme
 */

get_header();
?>

<div class="main-grid">
  <section aria-label="<?php esc_attr_e( 'Posts', 'wcag-theme' ); ?>">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> aria-labelledby="post-title-<?php the_ID(); ?>">
      <header>
        <h2 id="post-title-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="post-meta">
          <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
          <span class="screen-reader-text"><?php esc_html_e( 'by', 'wcag-theme' ); ?></span>
          <?php the_author_posts_link(); ?>
        </p>
      </header>
      <div class="entry-summary">
        <?php the_excerpt(); ?>
      </div>
      <p><a class="button" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'wcag-theme' ); ?></a></p>
    </article>
  <?php endwhile; else : ?>
    <article>
      <h2><?php esc_html_e( 'No posts found', 'wcag-theme' ); ?></h2>
      <p><?php esc_html_e( 'Try searching for something else.', 'wcag-theme' ); ?></p>
      <?php get_search_form(); ?>
    </article>
  <?php endif; ?>

  <?php wcag_theme_pagination(); ?>
  </section>

  <aside aria-label="<?php esc_attr_e( 'Sidebar', 'wcag-theme' ); ?>">
    <?php if ( is_active_sidebar( 'primary' ) ) { dynamic_sidebar( 'primary' ); } ?>
  </aside>
</div>

<?php
get_footer();