<?php
/**
 * Header template
 * @package wcag-theme
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to main content', 'wcag-theme' ); ?></a>

<header class="site-header" role="banner">
  <div class="wrapper">
    <div class="site-branding">
      <?php if ( has_custom_logo() ) { the_custom_logo(); } ?>
      <?php if ( is_front_page() && is_home() ) : ?>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
      <?php else : ?>
        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
      <?php endif; ?>
      <p class="site-description"><?php bloginfo( 'description' ); ?></p>
    </div>

    <button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
      <span aria-hidden="true">☰</span>
      <span><?php esc_html_e( 'Menu', 'wcag-theme' ); ?></span>
    </button>

    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary', 'wcag-theme' ); ?>">
      <?php
      wp_nav_menu( [
        'theme_location' => 'primary',
        'menu_id'        => 'primary-menu',
        'container'      => false,
        'menu_class'     => 'primary-menu',
        'fallback_cb'    => function() {
            echo '<ul class="primary-menu" id="primary-menu"><li><a href="' . esc_url( home_url('/') ) . '">' . esc_html__( 'Home', 'wcag-theme' ) . '</a></li></ul>';
        }
      ] );
      ?>
    </nav>
  </div>
</header>

<main id="main" class="site-main wrapper" role="main">