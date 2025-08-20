<?php
/**
 * Accessible search form
 * @package wcag-theme
 */
$unique_id = esc_attr( wp_unique_id( 'search-form-' ) );
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-labelledby="<?php echo $unique_id; ?>-label">
  <label id="<?php echo $unique_id; ?>-label" for="<?php echo $unique_id; ?>">
    <?php esc_html_e( 'Search this site', 'wcag-theme' ); ?>
  </label>
  <input type="search" id="<?php echo $unique_id; ?>" class="search-field" value="<?php echo get_search_query(); ?>" name="s" required />
  <button type="submit"><?php esc_html_e( 'Search', 'wcag-theme' ); ?></button>
</form>