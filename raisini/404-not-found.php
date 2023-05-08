<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}

/*
Template Name: 404 Template
Template Post Type: page
*/

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raisini
 */

get_header();

//get_template_part('rs/parts/about/about');

?>

<section data-part="about-about">
  <section data-section="1">
    <div class="rs:bg-gradient-2 pt-top~height mt-ntop~height">
      <div class="container-lg">
        <div class="row g-0 justify-content-center align-items-center">
          <div class="col-xl-10 mx-auto overflow-hidden">
            <div class="py-5">
              <div class="d-flex align-items-center justify-content-between">
                <div class="fs-60px text-black fw-700 text-uppercase">
                  404
                </div>
                <div class="fs-60px text-black fw-700 text-uppercase">
                  <?php icon('arrow-down', array('width' => 48, 'height' => 48)); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-section="3">
    <div class="container-lg">
      <div class="bg-raisini-1 rounded rounded-16px py-6">
        <div class="text-center user-select-none pe-none mb-5">
        
        </div>
        <div class="text-uppercase fs-45px text-center lh-sm fw-700 mw-900px mx-auto">
          <div>
           
          </div>
          <div class="rs:text-gradient-1">
            The page you’re looking for can’t be found.
          </div>
          <div>
<br>
            <a href="https://raisini.com" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
              <div class="d-flex align-items-center justify-content-center">
               Continue to Home                <svg class="icon ms-1" aria-label="Raisini Icon: “arrow-right”" role="img" viewBox="0 0 24 24" loading="lazy"><use href="https://raisini.com/wp-content/themes/raisini/rs/assets/images/icon-set-sprite.svg#arrow-right"></use></svg>              </div>
            </a>

          </div>
        </div>
      </div>
    </div>
  </section>


<?php

get_footer();
