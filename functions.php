<?php
/**
 * Theme functions and setup
 * @package wcag-theme
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'after_setup_theme', function() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    register_nav_menus( [
        'primary' => __( 'Primary Menu', 'wcag-theme' ),
        'footer'  => __( 'Footer Menu', 'wcag-theme' ),
    ] );
} );

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'wcag-theme-style', get_stylesheet_uri(), [], '1.0.0' );
    wp_enqueue_script( 'wcag-theme-a11y', get_template_directory_uri() . '/assets/js/accessibility.js', [ 'jquery', 'wp-a11y' ], '1.0.0', true );
} );

/**
 * Accessible pagination
 */
function wcag_theme_pagination() {
    $args = [
        'prev_text' => __( 'Previous', 'wcag-theme' ),
        'next_text' => __( 'Next', 'wcag-theme' ),
        'type'      => 'list',
    ];

    $links = paginate_links( $args );
    if ( $links ) {
        // Add nav with aria-label
        echo '<nav class="pagination" role="navigation" aria-label="' . esc_attr__( 'Posts Pagination', 'wcag-theme' ) . '">';
        // Convert the default <ul> output to flat links to keep simple
        echo wp_kses_post( preg_replace( '/<\\/?ul[^>]*>/', '', $links ) );
        echo '</nav>';
    }
}

/**
 * Improve excerpt "read more" link for screen readers
 */
add_filter( 'excerpt_more', function() {
    return '…';
} );

/**
 * Add skip link target support in content
 */
add_filter( 'the_content_more_link', function( $link ) {
    return preg_replace( '/href="([^"]+)"/', 'href="$1#main"', $link );
} );
