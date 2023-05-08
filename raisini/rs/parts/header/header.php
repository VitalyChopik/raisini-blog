<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}
?>
<header>

  <section class="h-100px! w-100 d-flex align-items-center justify-content-center position-fixed top~bar bottom-auto shift:bg-F1F8FF zi-1035">
    <div class="container-lg">
      <div class="row g-0 justify-content-center align-items-center">
        <div class="col-xl-10 mx-auto overflow-hidden">
          <div class="row g-4">
            <div class="col-auto d-flex align-items-center">
              <a href="<?php echo home_url(); ?>" title="<?php esc_html_e('Home Page', 'raisini'); ?>">
                <?php image('raisini-logo.svg', array('width' => '179', 'height' => '66', 'alt' => 'Raisini Logo')); ?>
              </a>
            </div>
            <div class="col d-flex align-items-center justify-content-end">
              <section id="menu-header~wrapper">
                <?php wp_nav_menu(
                  array(
                    'theme_location' => 'header',
                    'menu_class' => 'menu-header list-unstyled mb-0 d-flex flex-column flex-lg-row align-items-lg-center',
                    'container' => 'nav',
                  )
                ); ?>
              </section>
              <button aria-label="Toggle Menu" class="btn border-0 d-lg-none" id="menu-header-toggle">
                <span class="visually-hidden"><?php esc_html_e('Toggle Menu', 'raisini'); ?></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div aria-hidden="true" class="w-100 h-100px!"></div>

</header>