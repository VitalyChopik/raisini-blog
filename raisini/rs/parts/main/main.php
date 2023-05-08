<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}

?>

<section data-part="main-main">
  <section data-section="1">
    <div class="container-lg py-6">
      <div class="d-flex align-items-center justify-content-center text-center mb-xxl-n6 mb-xl-n5 mx-6 position-relative zi-3">
        <div class="rs:text-gradient-1 text-uppercase fs-40px fw-700 lh-sm">
          <?php esc_html_e('HEY! we are', 'raisini'); ?>
        </div>
      </div>
      <div class="d-flex! d-none align-items-center justify-content-center text-center mb-2">
        <figure>
          <?php image('raisini-huge.svg', array('alt' => 'RAISINI', 'width' => '1360', 'height' => '292')); ?>
        </figure>
      </div>
      <section class="position-relative overflow-hidden p-1 zi-0 mb-xxl-n6 mb-xl-n5">
        <div class="ratio ratio-3x1 pe-none user-select-none position-relative zi-0">
          <video autoplay muted playsinline loop class="mw-100">
            <source src="<?php asset_uri('videos/raisini-3x1.mp4') ?>" type="video/mp4">
            Sorry, your browser doesn't support embedded videos.
          </video>
        </div>
        <div class="fs-150px fs-lg-275px text-upercase text-center text-black bg-white fw-700 d-flex align-items-center justify-content-center position-absolute start-0 top-0 end-0 bottom-0 zi-5 mix-blend-mode:screen user-select-none pe-none">
          <?php esc_html_e('RAISINI', 'raisini'); ?>
        </div>
      </section>
      <div class="position-relative zi-3 text-center text-uppercase fs-20px fw-700">
        <?php esc_html_e('AN AWARD WINNING LIFESTYLE ENTERTAINMENT AGENCY', 'raisini'); ?>
      </div>
    </div>
  </section>
  <section data-section="2">
    <div class="text-center">
      <?php echo get_icon('arrow-down', array('width' => '48', 'height' => '48', 'aria-hidden' => 'true')); ?>
    </div>
  </section>
  <section data-section="3">
    <div class="container-lg py-6">
      <div class="row g-0">
        <div class="col-md-6 text-center">
          <figure class="m-0">
            <?php image('image-1.png', array('alt' => 'WE CREATE EXPERIENCES', 'class' => 'img-fluid rounded rounded-md-start set:rounded-16px', 'width' => 680, 'height' => 680)); ?>
          </figure>
        </div>
        <div class="col-md-6">
          <div class="bg-raisini-3 rounded rounded-md-end set:rounded-16px p-5 h-100 d-flex flex-column align-items-center justify-content-center">
            <div class="text-uppercase text-center letter-spacing.1em mb-5">
              <?php esc_html_e('//   WHAT WE DO', 'raisini'); ?>
            </div>
            <div class="d-flex align-items-center justify-content-center text-center mb-4">
              <div class="text-uppercase fw-700 fs-45px lh-sm">
                <?php esc_html_e('WE CREATE', 'raisini'); ?>
                <div class="rs:text-gradient-1">
                  <?php esc_html_e('EXPERIENCES', 'raisini'); ?>
                </div>
              </div>
            </div>
            <div class="text-black text-opacity-50 fs-18px mw-460px mx-auto text-center mb-4">
              <?php esc_html_e('Connecting people through unforgettable experiences with entertainment, music, events and technology', 'raisini'); ?>
            </div>
            <div>
              <a href="<?php the_home_url('entertainment'); ?>" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
                <div class="d-flex align-items-center justify-content-center">
                  <?php esc_html_e('Learn More', 'raisini'); ?>
                  <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="4">
    <div class="container-lg pt-md-6">
      <div class="row g-0">
        <div class="col-md-6 order-3 order-md-1">
          <div class="p-5 h-100 d-flex flex-column align-items-center justify-content-center align-items-md-start">
            <div class="text-uppercase text-center text-md-start letter-spacing.1em mb-5 d-none d-md-block">
              <?php esc_html_e('//   ENTERTAINMENT', 'raisini'); ?>
            </div>
            <div class="d-flex align-items-center justify-content-center justify-content-md-start text-center text-md-start mb-4">
              <div class="text-uppercase fw-700 fs-45px lh-sm">
                <?php esc_html_e('WE DEVISE', 'raisini'); ?>
                <div class="rs:text-gradient-1">
                  <?php esc_html_e('HAPPINESS', 'raisini'); ?>
                </div>
              </div>
            </div>
            <div class="text-black text-opacity-50 fs-18px mw-460px mx-auto mx-md-0 text-center text-md-start mb-4">
              <?php esc_html_e('Our core focus is creating memories and experiences that spark happiness', 'raisini'); ?>
            </div>
            <div>
              <a href="<?php the_home_url('entertainment'); ?>" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
                <div class="d-flex align-items-center justify-content-center">
                  <?php esc_html_e('Learn More', 'raisini'); ?>
                  <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 text-center d-flex align-items-end justify-content-center order-1">
          <div>
            <div class="text-uppercase text-center text-md-start letter-spacing.1em mb-5 d-md-none">
              <?php esc_html_e('//   ENTERTAINMENT', 'raisini'); ?>
            </div>
            <figure class="m-0">
              <?php image('image-3.png', array('class' => 'img-fluid rounded rounded-md-start set:rounded-16px', 'width' => 737, 'height' => 669, 'alt' => 'WE DEVISE HAPPINESS')); ?>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="5">
    <div class="bg-raisini-3 position-relative pb-6 mb-6">
      <div class="container-md py-6">
        <div class="p-5 h-100 d-flex flex-column align-items-center justify-content-center">
          <div class="text-uppercase text-center letter-spacing.1em mb-5">
            <?php esc_html_e('//   musıc', 'raisini'); ?>
          </div>
          <div class="d-flex align-items-center justify-content-center text-center mb-4">
            <div class="text-uppercase fw-700 fs-45px lh-sm">
              <?php esc_html_e('MUSIC IS KEY', 'raisini'); ?>
              <div>
                <?php esc_html_e('TO HAPPINESS', 'raisini'); ?>
              </div>
            </div>
          </div>
          <div class="text-black text-opacity-50 fs-18px mw-460px mx-auto text-center mb-4">
            <?php esc_html_e('RAISINI is home to world class Electronic Dance Music Artists from across the globe', 'raisini'); ?>
          </div>
          <div>
            <a href="<?php the_home_url('music'); ?>" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
              <div class="d-flex align-items-center justify-content-center">
                <?php esc_html_e('Learn More', 'raisini'); ?>
                <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="position-absolute top-100 start-50 translate-middle zi-1 w-100 w-md-auto text-center">
        <figure class="m-0">
          <?php image('image-6.png', array('width' => 737, 'height' => 355, 'class' => 'img-fluid', 'alt' => 'MUSIC IS KEY TO HAPPINESS')); ?>
        </figure>
      </div>
    </div>
  </section>
  <section data-section="6">
    <div class="container-lg py-6">
      <div class="bg-raisini-3 rounded set:rounded-16px p-1 p-md-4 p-lg-6 mt-5">
        <div class="row g-0">
          <div class="col-md-6 order-3 order-md-1">
            <div class="p-5 h-100 d-flex flex-column align-items-center justify-content-center align-items-md-end">
              <div>
                <div class="text-uppercase text-center text-md-start letter-spacing.1em mb-5 d-none d-md-block">
                  <?php esc_html_e('//   TECH', 'raisini'); ?>
                </div>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start text-center text-md-start mb-4">
                  <div class="text-uppercase fw-700 fs-45px lh-sm">
                    <div class="rs:text-gradient-1">
                      <?php esc_html_e('TECHNOLOGY', 'raisini'); ?>
                    </div>
                    <div>
                      <?php esc_html_e('IS KEY TO', 'raisini'); ?>
                    </div>
                    <?php esc_html_e('EVERYTHING', 'raisini'); ?>
                  </div>
                </div>
                <div class="text-black text-opacity-50 fs-18px mw-460px mx-auto mx-md-0 text-center text-md-start mb-4">
                  <?php esc_html_e('Technology is at the heart of everything we do from live experiences or through our tech products we build', 'raisini'); ?>
                </div>
                <div class="text-center text-md-start">
                  <a href="<?php the_home_url('tech'); ?>" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
                    <div class="d-flex align-items-center justify-content-center">
                      <?php esc_html_e('Learn More', 'raisini'); ?>
                      <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 text-center d-flex align-items-end justify-content-center order-1">
            <div>
              <div class="text-uppercase text-center text-md-start letter-spacing.1em mb-5 d-md-none pt-5">
                <?php esc_html_e('//   TECH', 'raisini'); ?>
              </div>
              <figure class="m-0">
                <?php image('image-8.png', array('class' => 'img-fluid rounded rounded-md-start set:rounded-16px', 'width' => 343, 'height' => 452, 'alt' => 'TECHNOLOGY IS KEY TO EVERYTHING')); ?>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="7">
    <div class="rs:bg-gradient-2 p-1 p-md-4 p-lg-6">
      <div class="container-lg">
        <div class="row g-0">
          <div class="col-md-6 text-center d-flex align-items-center justify-content-center">
            <div>
              <div class="text-uppercase text-center text-md-start letter-spacing.1em mb-5 d-md-none pt-5">
                <?php esc_html_e('//   NFT', 'raisini'); ?>
              </div>
              <figure class="m-0">
                <?php image('image-10.png', array('class' => 'img-fluid rounded rounded-md-start set:rounded-16px', 'width' => 343, 'height' => 452, 'alt' => 'MOVING INTO WEB3')); ?>
              </figure>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-5 h-100 d-flex flex-column align-items-center justify-content-center align-items-md-start">
              <div>
                <div class="text-uppercase text-center text-md-start letter-spacing.1em mb-5 d-none d-md-block">
                  <?php esc_html_e('//   NFT', 'raisini'); ?>
                </div>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start text-center text-md-start mb-4">
                  <div class="text-uppercase fw-700 fs-45px lh-sm">
                    <div>
                      <?php esc_html_e('MOVING INTO', 'raisini'); ?>
                    </div>
                    <div>
                      <?php esc_html_e('WEB3', 'raisini'); ?>
                    </div>
                  </div>
                </div>
                <div class="text-black text-opacity-50 fs-18px mw-460px mx-auto mx-md-0 text-center text-md-start mb-4">
                  <?php esc_html_e('We empower the cultural industry to seamlessly move into Web3 through innovative blockchain technology', 'raisini'); ?>
                </div>
                <div class="text-center text-md-start">
                  <a href="<?php the_home_url('nft'); ?>" class="btn border-0 btn-white fw-700 text-raisini-2 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="rs:text-gradient-1"><?php esc_html_e('Learn More', 'raisini'); ?></span>
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
  </section>
  <section data-section="8">
    <div class="container-lg pt-6 pt-md-0">
      <div class="row g-0">
        <div class="col-md-6 order-3 order-md-1">
          <div class="p-5 h-100 d-flex flex-column align-items-center justify-content-center align-items-md-start">
            <div class="text-uppercase text-center text-md-start letter-spacing.1em mb-5 d-none d-md-block">
              <?php esc_html_e('//   METAVERSE', 'raisini'); ?>
            </div>
            <div class="d-flex align-items-center justify-content-center justify-content-md-start text-center text-md-start mb-4">
              <div class="text-uppercase fw-700 fs-45px lh-sm">
                <div>
                  <?php esc_html_e('EXPERIENCES', 'raisini'); ?>
                </div>
                <div>
                  <?php esc_html_e('BEYOND', 'raisini'); ?>
                </div>
                <div class="rs:text-gradient-1">
                  <?php esc_html_e('IMagination', 'raisini'); ?>
                </div>
              </div>
            </div>
            <div class="text-black text-opacity-50 fs-18px mw-460px mx-auto mx-md-0 text-center text-md-start mb-4">
              <?php esc_html_e('VR experiences across a diverse field of content including art, design, music, fashion, sports, video and more', 'raisini'); ?>
            </div>
            <div>
              <a href="<?php the_home_url('metaverse'); ?>" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
                <div class="d-flex align-items-center justify-content-center">
                  <?php esc_html_e('Learn More', 'raisini'); ?>
                  <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 text-center d-flex align-items-center justify-content-center order-1">
          <div>
            <div class="text-uppercase text-center text-md-start letter-spacing.1em mb-5 d-md-none">
              <?php esc_html_e('//   METAVERSE', 'raisini'); ?>
            </div>
            <figure class="m-0">
              <?php image('image-13.png', array('class' => 'img-fluid rounded rounded-md-start set:rounded-16px', 'width' => 648, 'height' => 605, 'alt' => 'EXPERIENCES BEYOND IMagination')); ?>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>

</section>