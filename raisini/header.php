<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raisini
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<?php get_template_part('rs/parts/header/head'); ?>
<?php
if(is_page('hub')){
  ?>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7295458945517767" crossorigin="anonymous"></script>
  <?php
}
?>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <a class="skip-link screen-reader-text" href="#main">
    <?php esc_html_e('Go to Main Area', 'raisini'); ?>
  </a>

  <div id="app">

    <?php get_template_part('rs/parts/header/header'); ?>

    <main>
      <span id="main" aria-hidden="true"></span>