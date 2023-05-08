<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — SP!';
  exit;
}

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raisini
 */

?>
</main>

<?php get_template_part('rs/parts/footer/footer'); ?>

<?php wp_footer(); ?>

</div><!-- #app -->

</body>

</html>