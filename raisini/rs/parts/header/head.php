
<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}
?>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <meta property="og:image" content="https://raisini.com/wp-content/themes/raisini/rs/assets/images/image-1.png" />

<meta name="twitter:card" content="Raisini">
<meta name="twitter:image:alt" content="Raisini">
<meta name="twitter:title" content="Raisini">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="https://raisini.com/wp-content/themes/raisini/rs/assets/images/image-1.png">

</head>