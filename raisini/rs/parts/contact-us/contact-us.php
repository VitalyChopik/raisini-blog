<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}

?>
<section data-part="music-music">
  <section data-section="1">
    <div class="rs:bg-gradient-2 pt-top~height mt-ntop~height">
      <div class="container-lg">
        <div class="row g-0 justify-content-center align-items-center">
          <div class="col-xl-10 mx-auto overflow-hidden">
            <div class="py-5">
              <div class="d-flex align-items-center justify-content-between">
                <div class="fs-60px text-black fw-700 text-uppercase">
                  <?php esc_html_e('Contact Us', 'raisini'); ?>
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
  <section data-section="2">
    <div class="container-lg pb-4">
      <div class="row flex-nowrap align-items-center justify-content-center">
        <div class="col-xl-10 mx-auto overflow-hidden py-5">
          <article>
            <div class="bg-raisini-3 p-5 rounded set:rounded-12px d-flex align-items-center justify-content-center mb-4">
              <div class="text-center">
                <div class="fs-40px text-uppercase fw-700 lh-sm mb-3">
                  <?php esc_html_e('PHONE', 'raisini'); ?>
                </div>
                <div class="fs-26px text-dark text-opacity-50">
                  +44 (0)20 3929 3795
                </div>
              </div>
            </div>

            <div class="row g-4 pb-4">
              <div class="col-md-6">
                <div class="bg-raisini-3 p-5 rounded set:rounded-12px d-flex align-items-center justify-content-center">
                  <div class="text-center">
                    <div class="fs-40px text-uppercase fw-700 lh-sm mb-3">
                      <?php esc_html_e('General', 'raisini'); ?>
                    </div>
                    <div class="fs-26px text-dark text-opacity-50">
                      info@raisini.com
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="bg-raisini-3 p-5 rounded set:rounded-12px d-flex align-items-center justify-content-center">
                  <div class="text-center">
                    <div class="fs-40px text-uppercase fw-700 lh-sm mb-3">
                      <?php esc_html_e('Careers', 'raisini'); ?>
                    </div>
                    <div class="fs-26px text-dark text-opacity-50">
                      job@raisini.com
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="bg-raisini-3 p-5 rounded set:rounded-12px d-flex align-items-center justify-content-center">
                  <div class="text-center">
                    <div class="fs-40px text-uppercase fw-700 lh-sm mb-3">
                      <?php esc_html_e('Events', 'raisini'); ?>
                    </div>
                    <div class="fs-26px text-dark text-opacity-50">
                      events@raisini.com
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="bg-raisini-3 p-5 rounded set:rounded-12px d-flex align-items-center justify-content-center">
                  <div class="text-center">
                    <div class="fs-40px text-uppercase fw-700 lh-sm mb-3">
                      <?php esc_html_e('Press & PR', 'raisini'); ?>
                    </div>
                    <div class="fs-26px text-dark text-opacity-50">
                      press@raisini.com
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="rounded set:rounded-12px overflow-hidden">
              <div class="bg-raisini-3 p-5 d-flex align-items-center justify-content-center">
                <div class="text-center">
                  <div class="fs-40px text-uppercase fw-700 lh-sm mb-3">
                    <?php esc_html_e('Our Office', 'raisini'); ?>
                  </div>
                  <div class="fs-26px text-dark text-opacity-50">
                    86-90 Paul St, London EC2A 4NE, United Kingdom
                  </div>
                </div>
              </div>
              <?php image('image-65.png'); ?>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
</section>