<?php
/**
 * Accessible comments
 * @package wcag-theme
 */

if ( post_password_required() ) { return; }
?>

<section id="comments" class="comments-area" aria-labelledby="comments-title">
  <?php if ( have_comments() ) : ?>
    <h2 id="comments-title">
      <?php
      printf(
        esc_html( _nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title', 'wcag-theme' ) ),
        number_format_i18n( get_comments_number() )
      );
      ?>
    </h2>

    <ol class="comment-list" role="list">
      <?php
      wp_list_comments( array(
        'style'      => 'ol',
        'short_ping' => true,
        'avatar_size'=> 48,
      ) );
      ?>
    </ol>

    <?php the_comments_pagination( array(
      'prev_text' => __( 'Previous', 'wcag-theme' ),
      'next_text' => __( 'Next', 'wcag-theme' ),
      'screen_reader_text' => __( 'Comment navigation', 'wcag-theme' ),
    ) ); ?>

  <?php endif; ?>

  <?php if ( ! comments_open() && get_comments_number() ) : ?>
    <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'wcag-theme' ); ?></p>
  <?php endif; ?>

  <?php
  comment_form( array(
    'title_reply'          => __( 'Leave a comment', 'wcag-theme' ),
    'title_reply_before'   => '<h2 id="reply-title" class="comment-reply-title">',
    'title_reply_after'    => '</h2>',
    'label_submit'         => __( 'Post Comment', 'wcag-theme' ),
    'comment_notes_before' => '<p class="screen-reader-text">' . esc_html__( 'Your email address will not be published.', 'wcag-theme' ) . '</p>',
  ) );
  ?>
</section>