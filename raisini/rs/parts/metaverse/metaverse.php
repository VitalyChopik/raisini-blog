<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}

?>
<section data-part="metaverse-metaverse">
  <section data-section="1">
    <div class="rs:bg-gradient-2 pt-top~height mt-ntop~height">
      <div class="container-lg">
        <div class="row g-0 justify-content-center align-items-center">
          <div class="col-xl-10 mx-auto overflow-hidden">
            <div class="py-5">
              <div class="d-flex align-items-center justify-content-between">
                <div class="fs-60px text-black fw-700 text-uppercase">
                  <?php esc_html_e('Metaverse', 'raisini'); ?>
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
    <div class="bg-norepeat bg-cover" style="background-image:url('<?php image_uri('image-15.png'); ?>')">
      <div class="container py-lg-6">
        <div class="row g-0 justify-content-center align-items-center">
          <div class="col-xl-10 mx-auto py-6">

            <div class="py-6 position-relative">
              <div class="text-white h1 fs-65px text-uppercase fw-700 text-center text-sm-start">
                <div>Welcome</div>
                <div>to the</div>
                <div class="rs:text-gradient-1">future</div>
                <div>of raisini</div>
              </div>
              <?php image('image-16.svg', array('class' => 'd-none d-sm-block img-fluid position-absolute start-0 top-100 ms-5 mt-3', 'alt' => 'Welcome to the future of raisini', 'width' => 82, 'height' => 117)); ?>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="3">
    <div class="container">
      <div class="pt-5 px-3">
        <div class="pt-6 pb-5">
          <div class="text-center mb-4">
            <div class="text-uppercase fw-700 fs-45px lh-sm">
              <div>
                <?php esc_html_e('Where experiences will be', 'raisini'); ?>
              </div>
              <div class="rs:text-gradient-1">
                <?php esc_html_e('beyond your imagination', 'raisini'); ?>
              </div>
            </div>
          </div>
          <div class="text-dark text-opacity-50 fs-20px text-center mw-600px mx-auto">
            <?php esc_html_e('VR experiences across a diverse field of content including art, design, music, fashion, video and more', 'raisini'); ?>
          </div>
        </div>
        <div class="text-center">
          <?php image('image-129.png'); ?>
        </div>
      </div>
    </div>
  </section>
  <section data-section="4">
    <div class="container-lg py-5">
      <div class="bg-raisini-3 rounded set:rounded-16px p-5">
        <div class="row g-4">
          <div class="col-md-6 d-flex align-items-center justify-content-center justify-content-md-start order-3 order-md-1">
            <div class="p-md-4 p-lg-5 p-xl-6">
              <div class="fs-45px fw-700 text-uppercase text-center text-md-start lh-sm mb-3">
                <?php esc_html_e('NFT marketplace', 'raisini'); ?>
              </div>
              <div class="text-dark text-opacity-50 fs-20px mb-5 text-center text-md-start">
                <?php esc_html_e('A place for creators and collectors for extraordinary NFTs', 'raisini'); ?>
              </div>
              <div class="text-center text-md-start">
                <a href="<?php echo mail_link('info@raisini.com'); ?>" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
                  <div class="d-flex align-items-center justify-content-center">
                    <?php esc_html_e('Learn More', 'raisini'); ?>
                    <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-center justify-content-center justify-content-md-end order-2">
            <div class="p-md-4 p-lg-5">
              <?php image('image-131.png', array('alt' => 'NFT MARKETPLACE', 'width' => 449, 'height' => 420)); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="5">
    <div class="container-lg py-5">
      <div class="bg-raisini-3 rounded set:rounded-16px p-5">
        <div class="row g-4">
          <div class="col-md-6 d-flex align-items-center justify-content-center justify-content-md-start order-3">
            <div class="p-md-4 p-lg-5 p-xl-6">
              <div class="fs-45px h1 fw-700 text-uppercase text-center text-md-start mb-3">
                <?php esc_html_e('FUTURE OF MUSIC Streaming', 'raisini'); ?>
              </div>
              <div class="text-dark text-opacity-50 fs-20px mb-5 text-center text-md-start">
                <?php esc_html_e('RAISINI Metaverse will be the future platform for content creators from audio and video streaming to reach audiences globally,
unlocking new revenue streams for artists and creators', 'raisini'); ?>
              </div>
              <div class="text-center text-md-start">
                <a href="<?php the_home_url(); ?>" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
                  <div class="d-flex align-items-center justify-content-center">
                    <?php esc_html_e('Learn More', 'raisini'); ?>
                    <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-center justify-content-center justify-content-md-end order-2 pb-4 pb-md-0">
            <div class="p-md-4 p-lg-5">
              <?php image('image-128.png', array('alt' => 'FUTURE OF MUSIC Streaming', 'width' => 449, 'height' => 420)); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="6">
    <div class="container-lg py-5">
      <div class="pt-4 pb-6 px-3 text-center">
        <div class="fs-40px h1 fw-700 text-uppercase">
          <?php esc_html_e('Learn More', 'raisini'); ?>
        </div>
        <div class="fs-80px h1 fw-300 text-uppercase rs:text-gradient-1 mb-5">
          <?php esc_html_e('Get Started Here', 'raisini'); ?>
        </div>
        <div class="text-center">
          <a href="<?php the_home_url(); ?>" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
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