<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header role="banner">
    <h1><?php bloginfo('name'); ?></h1>
    <nav role="navigation" aria-label="Main Menu">
      <?php wp_nav_menu(['theme_location' => 'primary']); ?>
    </nav>
  </header>
  <main id="content">
