<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}

?>
<section data-part="NFT-NFT">
  <section data-section="1">
    <div class="rs:bg-gradient-2 pt-top~height mt-ntop~height">
      <div class="container-lg">
        <div class="row g-0 justify-content-center align-items-center">
          <div class="col-xl-10 mx-auto overflow-hidden">
            <div class="py-5">
              <div class="d-flex align-items-center justify-content-between">
                <div class="fs-60px text-black fw-700 text-uppercase">
                  <?php esc_html_e('NFT', 'raisini'); ?>
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
    <div class="py-5 py-lg-6">
      <div class="container-lg py-5">
        <div class="fs-45px fw-700 mw-900px mx-auto text-center text-uppercase lh-sm mb-3">
          <?php esc_html_e('YOUR NFT BRAND', 'raisini'); ?>
        </div>
        <div class="rs:text-gradient-1 text-uppercase text-center mb-3 fw-700">
          <?php esc_html_e('NFT Solutions for Individuals and Brands', 'raisini'); ?>
        </div>
        <div class="text-dark text-opacity-50 mw-600px mx-auto fs-18px text-center mb-5">
          <?php esc_html_e('We help individuals and brands to create their own NFT projects from idea to launch, delivering high quality digital assets', 'raisini'); ?>
        </div>
        <div class="text-center">
          <a href="<?php echo mail_link('info@raisini.com'); ?>" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
            <div class="d-flex align-items-center justify-content-center">
              <?php esc_html_e('Learn More', 'raisini'); ?>
              <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section data-section="3">
    <div class="container-lg">
      <div class="rs:bg-gradient-2 rounded set:rounded-16px p-1 p-md-4 p-lg-6">
        <div class="row g-0">
          <div class="col-md-6 text-center d-flex align-items-center justify-content-center">
            <div>
              <figure class="m-0">
                <?php image('image-126.png', array('class' => 'img-fluid rounded rounded-md-start set:rounded-16px', 'width' => 343, 'height' => 452, 'alt' => 'Our in-house team
of creatives have extensive experience to deliver high quality digital assets')); ?>
              </figure>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-5 h-100 d-flex flex-column align-items-center justify-content-center align-items-md-end">
              <div>
                <div class="text-black fs-32px fw-700 lh-sm text-uppercase mb-4 text-center text-md-start">
                  <?php esc_html_e('Our in-house team of creatives have extensive experience to deliver high quality digital assets', 'raisini'); ?>
                </div>
                <div class="text-black text-opacity-50 fs-18px mw-460px mx-auto mx-md-0 text-center text-md-start mb-4">
                  <?php esc_html_e('We work alongside your design team to produce NFTs with a ‘wow’ factor unique to your brand', 'raisini'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="4">
    <div class="container-lg py-6">
      <div class="p-1 p-md-4 p-lg-6">
        <div class="row g-4">
          <div class="col-md-6 order-3 order-md-1 d-flex align-items-center">
            <div>
              <div class="fs-45px fw-700 text-uppercase lh-sm mb-4 text-center text-md-start">
                <?php esc_html_e('NFT STRATEGY', 'raisini'); ?>
              </div>
              <div class="text-black text-opacity-50 fs-18px text-center text-md-start">
                <?php esc_html_e('Our team will work with you to help you navigate the new and evolving world of Web 3.0, advising you on your NFT launch strategies that focus on longevity and scalability', 'raisini'); ?>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-2 d-flex align-items-center">
            <figure>
              <?php image('image-33.svg'); ?>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="5">
    <div class="bg-raisini-3">
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
    </div>
  </section>
</section>