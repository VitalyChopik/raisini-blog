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
                  <?php esc_html_e('MUSIC', 'raisini'); ?>
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
    <div class="container-lg py-md-5 position-relative">
      <div class="py-5 py-lg-6">
        <div class="row g-5 g-md-4 position-relative zi-2">
          <div class="col-md-6 d-flex align-items-center justify-content-center order-2">
            <div>
              <div class="text-uppercase fw-700 fs-45px lh-sm text-center text-md-start mb-2">
                <?php esc_html_e('RAISINI RECORDS', 'raisini'); ?>
              </div>
              <div class="text-dark text-opacity-50 fs-20px text-center text-md-start mb-5">
                <?php esc_html_e('is Dubai’s 1st Electronic Dance Music Label, founded in 2003', 'raisini'); ?>
              </div>
              <div class="text-center text-md-start">
                <a target="_blank" href="http://www.raisinirecords.com/" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
                  <div class="d-flex align-items-center justify-content-center">
                    <?php esc_html_e('Visit', 'raisini'); ?>
                    <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 text-center order-1 order-md-3">
            <figure class="m-0">
              <?php image('image-47.svg'); ?>
            </figure>
          </div>
        </div>
        <?php image('image-48.svg', array('class' => 'position-absolute top-0 bottom-0 end-0 zi-0 img-fluid')); ?>
      </div>
    </div>
  </section>
  <section data-section="3">
    <div class="container-md pb-6">
      <div class="bg-raisini-3 rounded set:rounded-16px position-relative py-6 mb-6">
        <div class="p-5 h-100 d-flex flex-column align-items-center justify-content-center pb-6 mb-5">
          <div class="d-flex align-items-center justify-content-center text-center mb-4">
            <div class="text-uppercase fw-700 fs-40px lh-sm">
              <?php esc_html_e('We provide services', 'raisini'); ?>
              <div class="rs:text-gradient-1">
                <?php esc_html_e('to Artists and Labels', 'raisini'); ?>
              </div>
            </div>
          </div>
          <div class="text-black text-opacity-50 fs-18px mw-600px mx-auto text-center mb-4">
            <?php esc_html_e('To deliver your content to DSPs, create digital strategy, and publish your music for maximum exposure and streaming success', 'raisini'); ?>
          </div>
          <div>
            <a href="#music-services" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
              <div class="d-flex align-items-center justify-content-center">
                <?php esc_html_e('Learn More', 'raisini'); ?>
                <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
              </div>
            </a>
          </div>
        </div>
        <div class="position-absolute top-100 start-50 translate-middle zi-1 w-100 mw-600px w-md-auto text-center">
          <figure class="m-0">
            <?php image('image-49.png', array('width' => 737, 'height' => 355, 'class' => 'img-fluid', 'alt' => 'MUSIC IS KEY TO HAPPINESS')); ?>
          </figure>
        </div>
      </div>
      <div aria-hidden="true" class="py-5"></div>
    </div>
  </section>
  <section data-section="4" id="music-services">
    <div class="container-lg">
      <div class="fs-45px fw-700 lh-sm text-uppercase text-center px-2 mb-5 pt-4 pt-lg-5">
        <?php esc_html_e('Music services', 'raisini'); ?>
      </div>

      <div class="row g-3">
        <div class="col-lg-4 col-md-6">
          <div class="h-100 rs:bg-gradient-1 p-1 rounded set:rounded-16px">
            <div class="h-100 bg-white rounded set-rounded-16px p-5 d-flex align-items-center justify-content-center fs-24px">
              <div class="text-center">
                <div>
                  <?php esc_html_e('Worldwide', 'raisini'); ?>
                </div>
                <div>
                  <?php esc_html_e('Digital distribution', 'raisini'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="h-100 rs:bg-gradient-1 p-1 rounded set:rounded-16px">
            <div class="h-100 bg-white rounded set-rounded-16px p-5 d-flex align-items-center justify-content-center fs-24px">
              <div class="text-center">
                <div>
                  <?php esc_html_e('Artist & Label', 'raisini'); ?>
                </div>
                <div>
                  <?php esc_html_e('services', 'raisini'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="h-100 rs:bg-gradient-1 p-1 rounded set:rounded-16px">
            <div class="h-100 bg-white rounded set-rounded-16px p-5 d-flex align-items-center justify-content-center fs-24px">
              <div class="text-center">
                <div>
                  <?php esc_html_e('Playlist', 'raisini'); ?>
                </div>
                <div>
                  <?php esc_html_e('Marketing', 'raisini'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="h-100 rs:bg-gradient-1 p-1 rounded set:rounded-16px">
            <div class="h-100 bg-white rounded set-rounded-16px p-5 d-flex align-items-center justify-content-center fs-24px">
              <div class="text-center">
                <div>
                  <?php esc_html_e('Brand', 'raisini'); ?>
                </div>
                <div>
                  <?php esc_html_e('development', 'raisini'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="h-100 rs:bg-gradient-1 p-1 rounded set:rounded-16px">
            <div class="h-100 bg-white rounded set-rounded-16px p-5 d-flex align-items-center justify-content-center fs-24px">
              <div class="text-center">
                <div>
                  <?php esc_html_e('Analytics and', 'raisini'); ?>
                </div>
                <div>
                  <?php esc_html_e('Market intelligence', 'raisini'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="h-100 rs:bg-gradient-1 p-1 rounded set:rounded-16px">
            <div class="h-100 bg-white rounded set-rounded-16px p-5 d-flex align-items-center justify-content-center fs-24px">
              <div class="text-center">
                <div>
                  <?php esc_html_e('Streaming and', 'raisini'); ?>
                </div>
                <div>
                  <?php esc_html_e('Digital strategy', 'raisini'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 rs:bg-gradient-1 p-1 rounded set:rounded-16px">
            <div class="h-100 bg-white rounded set-rounded-16px p-5 d-flex align-items-center justify-content-center fs-24px">
              <div class="text-center">
                <div>
                  <?php esc_html_e('Marketing and', 'raisini'); ?>
                </div>
                <div>
                  <?php esc_html_e('Campaign strategy', 'raisini'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 rs:bg-gradient-1 p-1 rounded set:rounded-16px">
            <div class="h-100 bg-white rounded set-rounded-16px p-5 d-flex align-items-center justify-content-center fs-24px">
              <div class="text-center">
                <div>
                  <?php esc_html_e('Global Sync and', 'raisini'); ?>
                </div>
                <div>
                  <?php esc_html_e('Brand partnerships', 'raisini'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="5">
    <div class="container-lg py-6">
      <div class="p-lg-5 p-4 d-flex align-items-center justify-content-center">
        <div class="mw-550px mx-auto">
          <div class="text-uppercase fs-80px lh-1 fw-700 mb-5">
            <div><?php esc_html_e('SELL MUSIC', 'raisini'); ?></div>
            <div><?php esc_html_e('GET HEARD', 'raisini'); ?></div>
            <div><?php esc_html_e('GET PAID', 'raisini'); ?></div>
            <div class="rs:text-gradient-1"><?php esc_html_e('GET SIGNED', 'raisini'); ?></div>
          </div>
          <div class="text-dark text-opacity-50 fs-18px mb-4">
            <?php esc_html_e('Our commitment to independent artists is to give you more reach, more money, and more support', 'raisini'); ?>
          </div>
          <div class="fw-700 fs-18px mb-4">
            <?php esc_html_e('We serve artists at all stages of their career to give artists more opportunities', 'raisini'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="6">
    <div class="container-lg pb-6">
      <div class="rs:bg-gradient-2 rounded set:rounded-16px p-1 p-md-4 p-lg-6">
        <div class="row g-0">
          <div class="col-md-6">
            <div class="p-5 h-100 d-flex flex-column align-items-center justify-content-center align-items-md-end">
              <div>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start text-center text-md-start mb-4">
                  <div class="fs-45px fw-700 text-uppercase lh-sm">
                    <?php esc_html_e('How does it work?', 'raisini'); ?>
                  </div>
                </div>
                <div class="text-black text-opacity-50 fs-18px mw-460px mx-auto mx-md-0 text-center text-md-start mb-4">
                  <?php esc_html_e('You’ll keep creative control and all the rights to your music. We only take a small share of the royalty revenues', 'raisini'); ?>
                </div>
                <div class="text-center text-md-start mb-5">
                  <a href="<?php echo mail_link('info@raisini.com'); ?>" class="btn border-0 btn-white fw-700 text-raisini-2 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="rs:text-gradient-1"><?php esc_html_e('Inquire', 'raisini'); ?></span>
                      <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
                    </div>
                  </a>
                </div>
                <div>
                  <div class="d-flex align-items-center fs-18px fw-700">
                    <?php icon('check', array('class' => 'icon me-2', 'stroke-width' => 3)); ?>
                    <?php esc_html_e('No upfront fees', 'raisini'); ?>
                  </div>
                  <div class="d-flex align-items-center fs-18px fw-700">
                    <?php icon('check', array('class' => 'icon me-2', 'stroke-width' => 3)); ?>
                    <?php esc_html_e('We make money when you do', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 text-center d-flex align-items-center justify-content-center">
            <div>
              <figure class="m-0">
                <?php image('image-50.png', array('class' => 'img-fluid rounded rounded-md-start set:rounded-16px', 'width' => 343, 'height' => 452, 'alt' => 'MOVING INTO WEB3')); ?>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="7">
    <div class="container-lg py-6">
      <div class="text-center px-3">
        <div class="text-uppercase fw-700 fs-45px lh-sm mb-3">
          <?php esc_html_e('digital stores', 'raisini'); ?>
        </div>
        <div class="text-dark text-opacity-50 fs-18px mw-405px mx-auto">
          <?php esc_html_e('Whether you’re an artist or label, we can help your music heard across the world', 'raisini'); ?>
        </div>
      </div>
    </div>
    <section>
      <div class="container-fluid overflow-hidden">
        <div class="row g-2" data-flickity='{ "imagesLoaded": true, "cellAlign": "left", "contain": true, "pageDots": false, "prevNextButtons": false }'>
          <div class="col mx-4">
            <?php image('stream cards.png'); ?>
          </div>
          <div class="col mx-4">
            <?php image('stream cards-2.png'); ?>
          </div>
          <div class="col mx-4">
            <?php image('stream cards-4.png'); ?>
          </div>
          <div class="col mx-4">
            <?php image('stream cards-1.png'); ?>
          </div>
          <div class="col mx-4">
            <?php image('stream cards-6.png'); ?>
          </div>
          <div class="col mx-4">
            <?php image('stream cards-3.png'); ?>
          </div>
          <div class="col mx-4">
            <?php image('stream cards-5.png'); ?>
          </div>
        </div>
      </div>
    </section>

    <div class="py-6 px-5">
      <div class="mw-1110px mx-auto py-5">
        <div class="fs-26px text-uppercase lh-sm text-center">
          <span class="rs:text-gradient-1">
            <?php esc_html_e('RAISINI helps you to deliver content to DSPs ', 'raisini'); ?>
          </span>
          <?php esc_html_e('you do not have an agreement with. You
          can choose what you deliver, to whom and when, retaining control over pricing and
          release dates, with your content able to go live in-store within hours', 'raisini'); ?>
        </div>
      </div>
    </div>
  </section>
  <section data-section="8">
    <div class="container-lg">
      <div class="bg-raisini-3 rounded set:rounded-16px">
        <div class="clearfix position-relative overflow-hidden">
          <div class="row g-4">
            <div class="col-xxl-5 col-lg-6 d-flex align-items-center justify-content-center">
              <div class="p-5 p-md-6">
                <div class="mb-5">
                  <div class="d-flex flex-nowrap">
                    <div class="me-4 ps-1 rs:bg-gradient-1"></div>
                    <div>
                      <div class="fs-24px fw-700 text-uppercase mb-3">
                        <?php esc_html_e('Worldwide Distribution', 'raisini'); ?>
                      </div>
                      <div class="text-dark text-opacity-50 fs-18px">
                        <?php esc_html_e('Raisini gets your music on over 200 countries and territories worldwide. Your fans will be able to listento your music, wherever in the world they may be', 'raisini'); ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="d-flex flex-nowrap">
                    <div class="me-4 ps-1 rs:bg-gradient-1"></div>
                    <div>
                      <div class="fs-24px fw-700 text-uppercase mb-3">
                        <?php esc_html_e('Global Stores', 'raisini'); ?>
                      </div>
                      <div class="text-dark text-opacity-50 fs-18px">
                        <?php esc_html_e('We can send your music to over 150 global online digital stores and streaming services', 'raisini'); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-7 col-lg-6 pt-4 d-flex align-items-end">
              <?php image('image-51.png'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="9">
    <div class="container-lg py-6">
      <section class="px-2 text-center py-5">
        <div class="text-uppercase fw-700 fs-45px">
          <?php esc_html_e('PERSONALIZED SUPPORT', 'raisini'); ?>
        </div>
        <div class="fs-18px text-dark text-opacity-50">
          <?php esc_html_e('Every Artist or Label is unique, each requires a personalized approach', 'raisini'); ?>
        </div>
      </section>
      <section class="py-6">
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4">
            <div class="rounded-circle rs:bg-gradient-1 p-1 w-350px h-350px mw-100 mh-100 mx-auto">
              <div class="bg-white h-100 w-100 rounded-circle d-flex align-items-center justify-content-center">
                <div class="text-center">
                  <div class="rs:text-gradient-1 text-uppercase fs-18px fw-700 mb-3">
                    <?php esc_html_e('strategy', 'raisini'); ?>
                  </div>
                  <div class="text-dark text-opacity-50 fs-18px mw-300px mx-auto">
                    <?php esc_html_e('We assist you in your planning, sales/marketing strategy and digital strategy', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="rounded-circle rs:bg-gradient-1 p-1 w-350px h-350px mw-100 mh-100 mx-auto">
              <div class="bg-white h-100 w-100 rounded-circle d-flex align-items-center justify-content-center">
                <div class="text-center">
                  <div class="rs:text-gradient-1 text-uppercase fs-18px fw-700 mb-3">
                    <?php esc_html_e('exposure', 'raisini'); ?>
                  </div>
                  <div class="text-dark text-opacity-50 fs-18px mw-300px mx-auto">
                    <?php esc_html_e('We ensure that all other departments are in sync, to give your releases max exposure', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="rounded-circle rs:bg-gradient-1 p-1 w-350px h-350px mw-100 mh-100 mx-auto">
              <div class="bg-white h-100 w-100 rounded-circle d-flex align-items-center justify-content-center">
                <div class="text-center">
                  <div class="rs:text-gradient-1 text-uppercase fs-18px fw-700 mb-3">
                    <?php esc_html_e('growth', 'raisini'); ?>
                  </div>
                  <div class="text-dark text-opacity-50 fs-18px mw-300px mx-auto">
                    <?php esc_html_e('We support artists individually to help them grow with successful planning of marketing, strategy, and online campaigns', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>
  <section data-section="10">
    <div class="container-lg">
      <div class="bg-black rounded set:rounded-16px p-5 p-lg-6">
        <div class="row g-5">
          <div class="col-md-6 order-3 order-md-1">
            <div class="p-lg-4 text-center text-md-start">
              <div class="text-white text-uppercase fs-45px fw-700 mb-2">
                <?php esc_html_e('DIGITAL STRATEGY', 'raisini'); ?>
              </div>
              <div class="text-uppercase fs-18px fw-700 rs:text-gradient-1 mb-4">
                <?php esc_html_e('Along with distribution, we can also help create strategy for your releases', 'raisini'); ?>
              </div>
              <div class="fs-18px text-white mb-4">
                <?php esc_html_e('With our in-house expert marketing, we will support your campaign across digital music platforms globally. We will work with you to design your campaign for maximum exposure.', 'raisini'); ?>
              </div>
              <div class="fs-18px text-white">
                <?php esc_html_e('We have a strong relationships with DSP partners worldwide and we can guarantee your repertoire has the best possible access to streaming success', 'raisini'); ?>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-2 d-flex align-items-center justify-content-center">
            <figure class="p-lg-4 mb-5 mb-md-0">
              <?php image('image-52.svg'); ?>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="11">
    <div class="container-lg py-4">
      <div class="rs:bg-gradient-2 rounded set:rounded-16px p-5 p-lg-6">
        <div class="row g-4">
          <div class="col-md-6 d-flex align-items-center justify-content-center">
            <figure class="p-lg-4 mb-5 mb-md-0">
              <?php image('image-54.png', array('style' => 'mix-blend-mode: multiply;')); ?>
            </figure>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <div class="p-lg-4 text-center text-md-start">
              <div class="text-uppercase fs-45px fw-700 mb-2">
                <?php esc_html_e('PUBLISHING & SYNC', 'raisini'); ?>
              </div>
              <div class="fs-18px text-dark text-opacity-50">
                <?php esc_html_e('We aim to be active on creative exploitation of our songs/ writers pitching your music for lucrative sync placements with TV Studios, ad agencies & as well as handling reliable administration and collection of royalties', 'raisini'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="12">
    <div class="mw-1920px mx-auto pt-6 overflow-hidden">
      <div class="row gx-0 gy-6 order-md-first">
        <div class="col-md-7">
          <?php image('image-55.png', array('class' => 'pe-none img-fluid user-select-none')); ?>
        </div>
        <div class="col-md-5 d-flex align-items-center justify-content-center justify-content-md-start order-first order-md-last">
          <div class="px-md-4 px-2">
            <div class="py-2 mw-350px text-center text-md-start">
              <div class="text-uppercase fs-45px fw-700 mb-2 lh-sm">
                <?php esc_html_e('RAISINI BLOCKCHAIN', 'raisini'); ?>
              </div>
              <div class="text-uppercase fs-18px fw-700 rs:text-gradient-1 mb-4">
                <?php esc_html_e('We help artists move into the Web3 to explore new channels for exploitation', 'raisini'); ?>
              </div>
              <div class="text-dark text-opacity-50 fs-18px">
                <?php esc_html_e('This can be through NFTs, Music NFTs, Video NFTs, Audio Visual NFTS and other channels and as a rights holder, your rights are protected via smart contracts', 'raisini'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="13">
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

<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>