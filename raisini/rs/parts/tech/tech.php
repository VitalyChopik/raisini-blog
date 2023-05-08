<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}

?>
<section data-part="tech-tech">
  <section data-section="1">
    <div class="rs:bg-gradient-2 pt-top~height mt-ntop~height">
      <div class="container-lg">
        <div class="row g-0 justify-content-center align-items-center">
          <div class="col-xl-10 mx-auto overflow-hidden">
            <div class="py-5">
              <div class="d-flex align-items-center justify-content-between">
                <div class="fs-60px text-black fw-700 text-uppercase">
                  <?php esc_html_e('Tech', 'raisini'); ?>
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
    <div class="bg-norepeat bg-cover py-5 py-lg-6" style="background-image:url('<?php image_uri('image-22.svg'); ?>')">
      <div class="container-lg py-5">
        <div class="fs-45px fw-700 mw-900px mx-auto text-center text-uppercase lh-sm py-6">
          <div class="rs:text-gradient-1">
            <?php esc_html_e('We build cool Apps and Games', 'raisini'); ?>
          </div>
          <div>
            <?php esc_html_e('for web and mobile, that bring joy & happiness to our users', 'raisini'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="3">
    <div class="container-lg">
      <div class="bg-raisini-3 p-4 p-lg-5 rounded set:rounded-16px">
        <div class="row g-0 align-items-center justify-content-center">
          <div class="col-xl-9">
            <div class="row g-4">
              <div class="col-md-6 d-flex align-items-center">
                <div>
                  <div class="fs-80px fw-700 text-uppercase text-center text-md-start">
                    <?php esc_html_e('Havn', 'raisini'); ?>
                  </div>
                  <div class="fs-18px text-dark text-opacity-50 mb-4 text-center text-md-start">
                    <?php esc_html_e('Havn is a free to download Lifestyle SuperApp that allows you to explore endless hospitality, lifestyle, entertainment and leisure
                experiences in your city', 'raisini'); ?>
                  </div>

                  <div class="text-center text-md-start d-none d-md-block">
                    <a target="_blank" href="http://www.havn.app/" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
                      <div class="d-flex align-items-center justify-content-center">
                        <?php esc_html_e('Visit', 'raisini'); ?>
                        <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div>
                  <figure>
                    <?php image('image-23.png', array('width' => 371, 'height' => 465, 'alt' => 'Havn')); ?>
                  </figure>

                  <div class="text-center text-md-start d-md-none pb-3">
                    <a target="_blank" href="http://www.havn.app/" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
                      <div class="d-flex align-items-center justify-content-center">
                        <?php esc_html_e('Visit', 'raisini'); ?>
                        <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="4">
    <div class="container-lg pt-4">
      <div class="rs:bg-gradient-2 rounded set:rounded-16px">
        <section class="p-4 p-lg-5 position-relative">
          <div class="row g-0 align-items-center justify-content-center">
            <div class="col-xl-9">
              <div class="mw-405px mx-auto py-5">
                <div class="pb-2">
                  <figure>
                    <?php image('“.svg', array('alt' => '“ sign', 'width' => '36', 'height' => '30')); ?>
                  </figure>
                </div>
                <div class="fs-32px lh-1.125 text-uppercase fw-700 mb-4">
                  <?php esc_html_e('Our apps and games are user-focused and defined by true craftsmanship and original characters, for experiences that last forever', 'raisini'); ?>
                </div>
                <a href="<?php echo mail_link('info@raisini.com'); ?>" class="btn border-0 btn-white fw-700 text-raisini-2 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
                  <div class="d-flex align-items-center justify-content-center">
                    <span class="rs:text-gradient-1"><?php esc_html_e('Learn More', 'raisini'); ?></span>
                    <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <?php image('image-26.svg', array('class' => 'position-absolute end-0 top-0 zi-1 img-fluid pe-none mt-6 me-6 d-none d-md-block', 'aria-hidden' => 'true')); ?>
          <?php image('image-27.svg', array('class' => 'position-absolute start-0 bottom-0 zi-1 img-fluid pe-none ms-6 d-none d-md-block', 'aria-hidden' => 'true')); ?>
          <div class="position-absolute start-0 top-50 translate-middle-y zi-1 pe-none ms-6 d-none d-lg-block">
            <?php image('image-28.svg', array('class' => 'img-fluid ms-6 pe-none', 'aria-hidden' => 'true')); ?>
          </div>
          <?php image('image-29.svg', array('class' => 'position-absolute end-0 bottom-0 zi-1 img-fluid pe-none me-5 mb-5 d-none d-md-block', 'aria-hidden' => 'true')); ?>
        </section>
        <section class="bg-norepeat bg-contain bg-position-y:center bg-position-x:end position-relative" style="background-image:url('<?php image_uri('image-25.svg'); ?>')">
          <div class="row g-0 align-items-center justify-content-center">
            <div class="col-xl-9 d-flex justify-content-md-end justify-content-center align-items-center pb-4 px-5">
              <figure class="mix-blend-mode:overlay">
                <?php image('image-24.svg', array()); ?>
              </figure>
            </div>
          </div>
          <?php image('image-30.svg', array('class' => 'position-absolute end-0 bottom-0 zi-1 img-fluid pe-none mb-4 me-4 d-md-none', 'aria-hidden' => 'true')); ?>
          <?php image('image-31.svg', array('class' => 'position-absolute start-0 top-0 zi-1 img-fluid pe-none mb-4 ms-4 d-md-none', 'aria-hidden' => 'true')); ?>
        </section>
      </div>
    </div>
  </section>
  <section data-section="5">
    <div class="container-lg py-5">
      <div class="pt-6 pb-6 px-3 text-center">
        <div class="fs-40px h1 fw-700 text-uppercase">
          <?php esc_html_e('Learn More', 'raisini'); ?>
        </div>
        <div class="fs-80px h1 fw-300 text-uppercase rs:text-gradient-1 mb-5">
          <?php esc_html_e('Get Started Here', 'raisini'); ?>
        </div>
        <div class="text-center">
          <a href="<?php echo mail_link('info@raisini.com'); ?>" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
            <div class="d-flex align-items-center justify-content-center">
              <?php esc_html_e('Contact Us', 'raisini'); ?>
              <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
</section>