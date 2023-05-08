<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}

/**
 * get_asset_uri
 * @link https://gurudesk.com
 */

if (!function_exists('get_asset_uri')) {
  function get_asset_uri($path = '')
  {
    return trailingslashit(get_stylesheet_directory_uri()) . 'rs/assets/' . $path;
  }

  function asset_uri($path = '')
  {
    echo get_asset_uri($path);
  }
}

/**
 * get_image_uri
 * @link https://gurudesk.com
 */

if (!function_exists('get_image_uri')) {
  function get_image_uri($path = '')
  {
    return get_asset_uri('images/' . $path);
  }

  function image_uri($path = '')
  {
    echo get_image_uri($path);
  }
}

/**
 * get_css_uri
 * @link https://gurudesk.com
 */

if (!function_exists('get_css_uri')) {
  function get_css_uri($path = '')
  {
    return get_asset_uri('css/' . $path);
  }

  function css_uri($path = '')
  {
    echo get_css_uri($path);
  }
}

/**
 * get_js_uri
 * @link https://gurudesk.com
 */

if (!function_exists('get_js_uri')) {
  function get_js_uri($path = '')
  {
    return get_asset_uri('js/' . $path);
  }

  function js_uri($path = '')
  {
    echo get_js_uri($path);
  }
}

/**
 * get_font_uri
 * @link https://gurudesk.com
 */

if (!function_exists('get_font_uri')) {
  function get_font_uri($path = '')
  {
    return get_asset_uri('fonts/' . $path);
  }

  function font_uri($path = '')
  {
    echo get_font_uri($path);
  }
}

/**
 * console_log
 * @link https://gurudesk.com
 */

if (!function_exists('console_log')) {
  function console_log($data, $context = '')
  {
    ob_start();

    $output  = $context ? 'console.info(\'' . $context . ':\');' : '';
    $output .= 'console.log(' . json_encode($data) . ');';
    $output  = sprintf('<script>%s</script>', $output);

    echo $output;
  }
}

/**
 * setTimeout
 * @link https://gurudesk.com
 */

if (!function_exists('setTimeout')) {
  function setTimeout($fn, $timeout)
  {
    sleep(($timeout / 1000));

    $fn();
  }
}

/**
 * get_icon
 * @link https://gurudesk.com
 */

if (!function_exists('get_icon')) {
  function get_icon($path = 'x', $attr = '')
  {

    $default_attr = array(
      'href'   => get_image_uri('icon-set-sprite.svg') . '#' . $path,
      'class' => "icon",
      'aria-label'   => "Raisini Icon: “" . $path . "”",
      'role' => 'img',
      'viewBox' => '0 0 24 24'
    );

    // Add `loading` attribute.
    if (wp_lazy_loading_enabled('img', 'wp_get_attachment_image')) {
      $default_attr['loading'] = wp_get_loading_attr_default('wp_get_attachment_image');
    }

    $attr = wp_parse_args($attr, $default_attr);

    // If the default value of `lazy` for the `loading` attribute is overridden
    // to omit the attribute for this image, ensure it is not included.
    if (array_key_exists('loading', $attr) && !$attr['loading']) {
      unset($attr['loading']);
    }

    $attr = array_map('esc_attr', $attr);

    $html = "<svg";

    foreach ($attr as $name => $value) {
      if ($name == 'href') continue;
      $html .= " $name=" . '"' . $value . '"';
    }

    $html .= ">";
    $html .= '<use href="' . $attr['href'] . '" />';
    $html .= "</svg>";

    return $html;
  }
  if (!function_exists('icon')) {
    function icon($name = 'x', $attr = '')
    {
      echo apply_filters('icon', get_icon($name, $attr));
    }
  } else {
    function the_icon($name = 'x', $attr = '')
    {
      echo apply_filters('icon', get_icon($name, $attr));
    }
  }
}

/**
 * get_image
 * @link https://gurudesk.com
 */

if (!function_exists('get_image')) {
  function get_image($path = '', $attr = '')
  {
    $default_attr = array(
      'src'   => get_image_uri($path),
      'class' => "img-fluid",
      'alt'   => "Raisini: “" . $path . "”",
    );

    // Add `loading` attribute.
    if (wp_lazy_loading_enabled('img', 'wp_get_attachment_image')) {
      $default_attr['loading'] = wp_get_loading_attr_default('wp_get_attachment_image');
    }

    $attr = wp_parse_args($attr, $default_attr);

    // If the default value of `lazy` for the `loading` attribute is overridden
    // to omit the attribute for this image, ensure it is not included.
    if (array_key_exists('loading', $attr) && !$attr['loading']) {
      unset($attr['loading']);
    }

    $attr = array_map('esc_attr', $attr);

    $html = "<img";

    foreach ($attr as $name => $value) {
      $html .= " $name=" . '"' . $value . '"';
    }

    $html .= ' />';

    return $html;
  }

  if (!function_exists('image')) {
    function image($path = '', $attr = '')
    {
      echo get_image($path, $attr);
    }
  }
}

/**
 * the_home_url
 * @link https://gurudesk.com
 */

if (!function_exists('the_home_url')) {
  function the_home_url($path = '', $scheme = null)
  {
    echo apply_filters('the_home_url', home_url($path, $scheme));
  }
}

/**
 * the_site_title
 * @link https://gurudesk.com
 */

if (!function_exists('the_site_title')) {
  function the_site_title($filter = 'raw')
  {
    echo apply_filters('the_site_title', get_bloginfo('title', $filter));
  }
}

/**
 * the_site_title
 * @link https://gurudesk.com
 */

if (!function_exists("format_phone")) {
  function format_phone($number)
  {
    $number = preg_replace('/[^0-9]/', '', $number);

    if (strlen($number) > 10) {
      $countryCode = substr($number, 0, strlen($number) - 10);
      $areaCode = substr($number, -10, 3);
      $nextThree = substr($number, -7, 3);
      $lastFour = substr($number, -4, 4);

      $number = '+' . $countryCode . ' (' . $areaCode . ') ' . $nextThree . '-' . $lastFour;
    } else if (strlen($number) == 10) {
      $areaCode = substr($number, 0, 3);
      $nextThree = substr($number, 3, 3);
      $lastFour = substr($number, 6, 4);

      $number = '(' . $areaCode . ') ' . $nextThree . '-' . $lastFour;
    } else if (strlen($number) == 7) {
      $nextThree = substr($number, 0, 3);
      $lastFour = substr($number, 3, 4);

      $number = $nextThree . '-' . $lastFour;
    }

    return $number;
  }
  function unformat_phone($phone)
  {
    return preg_replace('/[\+\(\)\- ]+/', '', $phone);
  }
  function tel_link($phone)
  {
    return 'tel:+44' . unformat_phone($phone);
  }
}

/**
 * the_site_title
 * @link https://gurudesk.com
 */

if (!function_exists("mail_link")) {
  function mail_link($email)
  {
    return 'mailto:' . $email;
  }
}

/**
 * @filter nav_menu_link_attributes
 * 
 * Hack: Making the "/" added to the menu go to the 
 * installed WordPress homepage
 * 
 * @link https://gurudesk.com
 */

add_filter('nav_menu_link_attributes', 'wpd_nav_menu_link_atts', 20, 4);
function wpd_nav_menu_link_atts($atts, $item, $args, $depth)
{
  if ('/' == substr($atts['href'], 0, 1)) {
    $atts['href'] = home_url($atts['href']);
  }
  return $atts;
}
