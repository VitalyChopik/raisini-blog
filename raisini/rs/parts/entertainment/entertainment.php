<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}

?>
<section data-part="entertainment-entertainment">
  <section data-section="1">
    <div class="rs:bg-gradient-2 pt-top~height mt-ntop~height">
      <div class="container-lg">
        <div class="row g-0 justify-content-center align-items-center">
          <div class="col-xl-10 mx-auto overflow-hidden">
            <div class="py-5">
              <div class="d-flex align-items-center justify-content-between">
                <div class="fs-60px text-black fw-700 text-uppercase">
                  <?php esc_html_e('ENTERTAINMENT', 'raisini'); ?>
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
    <div class="py-5 py-lg-6 bg-black">
      <div class="container-lg py-5">
        <div class="fs-45px text-white fw-700 mw-900px mx-auto text-center text-uppercase lh-sm mb-3">
          <div class="rs:text-gradient-1">
            <?php esc_html_e('TWO Decades', 'raisini'); ?>
          </div>
          <?php esc_html_e('of Entertainment', 'raisini'); ?>
        </div>
        <div class="text-light text-opacity-50 mw-600px mx-auto fs-18px text-center mb-5">
          <?php esc_html_e('RAISINI has established itself as a leading Entertainment agency, providing word class Entertainment services and products', 'raisini'); ?>
        </div>
        <div class="text-center">
          <a href="<?php the_home_url('about'); ?>" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
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
    <div class="d-flex justify-content-center align-items-center bg-black position-relative">
      <figure class="mw-100 overflow-hidden">
        <?php image('image-34.png', array('class' => 'd-md-block d-none')); ?>
        <?php image('image-35.png', array('class' => 'd-md-none')); ?>
      </figure>
    </div>
  </section>
  <section data-section="4">
    <div style="background: linear-gradient(180deg, #010C1A 0%, #010C1A 28.13%, rgba(255, 255, 255, 0) 100%);">
      <div class="container-lg">
        <div class="rounded set:rounded-16px overflow-hidden">
          <div class="row g-0">
            <div class="col-md-6">
              <div class="rs:bg-gradient-2 p-5 h-100 d-flex align-items-center justify-content-center text-center">
                <div>
                  <div class="text-uppercase fs-45px fw-700 mb-2">
                    <?php esc_html_e('Events', 'raisini'); ?>
                  </div>
                  <div class="text-dark fs-18px text-opacity-50 text-center mw-405px mx-auto mb-4">
                    <?php esc_html_e('RAISINI provides professional and creative solutions for all types of events, from corporate to product / venue launches', 'raisini'); ?>
                  </div>
                  <div class="text-center">
                    <a href="<?php echo mail_link('events@raisini.com'); ?>" class="btn border-0 btn-white fw-700 text-raisini-2 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
                      <div class="d-flex align-items-center justify-content-center">
                        <span class="rs:text-gradient-1 text-uppercase"><?php esc_html_e('Inquire', 'raisini'); ?></span>
                        <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
              <div id="raisini-video" class="position-relative">
                <figure class="m-0 user-select-none cursor-pointer">
                  <?php image('image-36.png', array('class' => 'img-fluid user-select-none pe-none')); ?>
                </figure>
                <div class="video-container invisible bg-black position-absolute start-0 end-0 top-0 bottom-0 zi-5 cursor-pointer d-flex align-items-center justify-content-center">
                  <video playsinline class="mw-100 h-100 w-100">
                    <source src="<?php asset_uri('videos/raisini-armani.mp4') ?>" type="video/mp4">
                    Sorry, your browser doesn't support embedded videos.
                  </video>
                  <div class="video-pause-button p-3 text-white rounded-circle rs:bg-gradient-2 d-flex align-items-center justify-content-center position-absolute top-50 start-50 translate-middle">
                    <?php icon('pause', array('stroke' => 'white')); ?>
                  </div>
                </div>
                <script>
                  var trigger = document.querySelector('#raisini-video figure'),
                    video = document.querySelector('#raisini-video video'),
                    videoContainer = document.querySelector('#raisini-video .video-container');
                  trigger.addEventListener('click', function(event) {
                    this.classList.add('invisible');
                    videoContainer.classList.remove('invisible');
                    video.play();
                  });
                  videoContainer.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    video.pause();
                    videoContainer.classList.add('invisible');
                    trigger.classList.remove('invisible');
                  });
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="5">
    <div class="py-5 py-lg-6">
      <div class="container-lg py-5">
        <div class="fs-45px fw-700 mw-900px mx-auto text-center text-uppercase lh-sm mb-3">
          <?php esc_html_e('Experiences', 'raisini'); ?>
        </div>
        <div class="rs:text-gradient-1 text-uppercase text-center mb-3 fw-700 mw-600px mx-auto">
          <?php esc_html_e('Through the power of experience, we create meaningful relationships between people and brands', 'raisini'); ?>
        </div>
        <div class="text-dark text-opacity-50 mw-600px mx-auto fs-18px text-center mb-5">
          <?php esc_html_e('Great experiences drive loyalty and build advocates, but extraordinary experiences create Experience
Brands. Brands that deliver proof on their promise at every touchpoint, time and time again', 'raisini'); ?>
        </div>
      </div>
    </div>
    <figure class="text-center m-0">
      <?php image('image-38.png'); ?>
    </figure>
  </section>
  <section data-section="6">
    <div class="py-5 py-lg-6 bg-black mt-n1">
      <div class="container-lg py-5">
        <div class="fs-45px text-white fw-700 mw-600px mx-auto text-center text-md-start text-uppercase lh-sm mb-3">
          <?php esc_html_e('We are a dedicated team of', 'raisini'); ?>
        </div>
        <div class="text-white mw-600px mx-auto fs-28px text-center text-md-start mb-5">
          <?php esc_html_e('Strategists, Creative innovators, Futurists, Operational experts, World-class designers, Business partners', 'raisini'); ?>
        </div>
        <div class="text-center text-md-start mw-600px mx-auto">
          <a href="<?php echo mail_link('info@raisini.com'); ?>" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
            <div class="d-flex align-items-center justify-content-center text-uppercase">
              <?php esc_html_e('Inquire', 'raisini'); ?>
              <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section data-section="7">
    <div class="container-lg py-6">
      <div class="text-uppercase text-center fs-45px fw-700 mb-3">
        <?php esc_html_e('TALENT BOOKING', 'raisini'); ?>
      </div>
      <div class="mw-900px mx-auto text-center fs-18px text-dark text-opacity-50">
        <?php esc_html_e('We represent DJ’s, Live performers and Celebrities, managing and creating international booking opportunities as well providing talent to hotels, clubs, bars,
private parties, special events whatever the clients needs.'); ?>
      </div>
      <div class="clearfix pt-6">
        <div class="row g-4">
          <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center align-items-center">
            <figure data-ohvv class="position-relative m-0 user-select-none rounded set:rounded-16px overflow-hidden d-inline-block">
              <?php image('image-114.png'); ?>
              <figcaption data-ohve class="opacity-0 pe-none user-select-none bg-dark bg-opacity-35 text-white d-flex flex-column align-items-center justify-content-center position-absolute start-0 end-0 top-0 bottom-0 rounded set:rounded-16px">
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('Steve', 'raisini'); ?>
                </div>
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('Aoki', 'raisini'); ?>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center align-items-center">
            <figure data-ohvv class="position-relative m-0 user-select-none rounded set:rounded-16px overflow-hidden d-inline-block">
              <?php image('image-115.png'); ?>
              <figcaption data-ohve class="opacity-0 pe-none user-select-none bg-dark bg-opacity-35 text-white d-flex flex-column align-items-center justify-content-center position-absolute start-0 end-0 top-0 bottom-0 rounded set:rounded-16px">
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('Tiesto', 'raisini'); ?>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center align-items-center">
            <figure data-ohvv class="position-relative m-0 user-select-none rounded set:rounded-16px overflow-hidden d-inline-block">
              <?php image('image-116.png'); ?>
              <figcaption data-ohve class="opacity-0 pe-none user-select-none bg-dark bg-opacity-35 text-white d-flex flex-column align-items-center justify-content-center position-absolute start-0 end-0 top-0 bottom-0 rounded set:rounded-16px">
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('David', 'raisini'); ?>
                </div>
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('Guetta', 'raisini'); ?>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center align-items-center">
            <figure data-ohvv class="position-relative m-0 user-select-none rounded set:rounded-16px overflow-hidden d-inline-block">
              <?php image('image-117.png'); ?>
              <figcaption data-ohve class="opacity-0 pe-none user-select-none bg-dark bg-opacity-35 text-white d-flex flex-column align-items-center justify-content-center position-absolute start-0 end-0 top-0 bottom-0 rounded set:rounded-16px">
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('Afrojack', 'raisini'); ?>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center align-items-center">
            <figure data-ohvv class="position-relative m-0 user-select-none rounded set:rounded-16px overflow-hidden d-inline-block">
              <?php image('image-118.png'); ?>
              <figcaption data-ohve class="opacity-0 pe-none user-select-none bg-dark bg-opacity-35 text-white d-flex flex-column align-items-center justify-content-center position-absolute start-0 end-0 top-0 bottom-0 rounded set:rounded-16px">
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('Roy', 'raisini'); ?>
                </div>
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('Davis Jr.', 'raisini'); ?>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center align-items-center">
            <figure data-ohvv class="position-relative m-0 user-select-none rounded set:rounded-16px overflow-hidden d-inline-block">
              <?php image('image-119.png'); ?>
              <figcaption data-ohve class="opacity-0 pe-none user-select-none bg-dark bg-opacity-35 text-white d-flex flex-column align-items-center justify-content-center position-absolute start-0 end-0 top-0 bottom-0 rounded set:rounded-16px">
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('DJ Antoine', 'raisini'); ?>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center align-items-center">
            <figure data-ohvv class="position-relative m-0 user-select-none rounded set:rounded-16px overflow-hidden d-inline-block">
              <?php image('image-120.png'); ?>
              <figcaption data-ohve class="opacity-0 pe-none user-select-none bg-dark bg-opacity-35 text-white d-flex flex-column align-items-center justify-content-center position-absolute start-0 end-0 top-0 bottom-0 rounded set:rounded-16px">
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('Raisini', 'raisini'); ?>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center align-items-center">
            <figure data-ohvv class="position-relative m-0 user-select-none rounded set:rounded-16px overflow-hidden d-inline-block">
              <?php image('image-121.png'); ?>
              <figcaption data-ohve class="opacity-0 pe-none user-select-none bg-dark bg-opacity-35 text-white d-flex flex-column align-items-center justify-content-center position-absolute start-0 end-0 top-0 bottom-0 rounded set:rounded-16px">
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('Calvin', 'raisini'); ?>
                </div>
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('Harris', 'raisini'); ?>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center align-items-center">
            <figure data-ohvv class="position-relative m-0 user-select-none rounded set:rounded-16px overflow-hidden d-inline-block">
              <?php image('image-122.png'); ?>
              <figcaption data-ohve class="opacity-0 pe-none user-select-none bg-dark bg-opacity-35 text-white d-flex flex-column align-items-center justify-content-center position-absolute start-0 end-0 top-0 bottom-0 rounded set:rounded-16px">
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('Carl', 'raisini'); ?>
                </div>
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('Cox', 'raisini'); ?>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center align-items-center">
            <figure data-ohvv class="position-relative m-0 user-select-none rounded set:rounded-16px overflow-hidden d-inline-block">
              <?php image('image-123.png'); ?>
              <figcaption data-ohve class="opacity-0 pe-none user-select-none bg-dark bg-opacity-35 text-white d-flex flex-column align-items-center justify-content-center position-absolute start-0 end-0 top-0 bottom-0 rounded set:rounded-16px">
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('Martin', 'raisini'); ?>
                </div>
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('Garrix', 'raisini'); ?>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center align-items-center">
            <figure data-ohvv class="position-relative m-0 user-select-none rounded set:rounded-16px overflow-hidden d-inline-block">
              <?php image('image-124.png'); ?>
              <figcaption data-ohve class="opacity-0 pe-none user-select-none bg-dark bg-opacity-35 text-white d-flex flex-column align-items-center justify-content-center position-absolute start-0 end-0 top-0 bottom-0 rounded set:rounded-16px">
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('Quintino', 'raisini'); ?>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center align-items-center">
            <figure data-ohvv class="position-relative m-0 user-select-none rounded set:rounded-16px overflow-hidden d-inline-block">
              <?php image('image-125.png'); ?>
              <figcaption data-ohve class="opacity-0 pe-none user-select-none bg-dark bg-opacity-35 text-white d-flex flex-column align-items-center justify-content-center position-absolute start-0 end-0 top-0 bottom-0 rounded set:rounded-16px">
                <div class="fs-18px fw-700 text-white text-center">
                  <?php esc_html_e('Nervo', 'raisini'); ?>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="8">
    <div class="container-lg py-6">
      <div class="fs-40px fw-700 text-uppercase lh-sm text-center mw-1110px mx-auto">
        <?php esc_html_e('We don’t just book Talent, Raisini offers you total support when selecting and booking', 'raisini'); ?>
        <span class="rs:text-gradient-1"><?php esc_html_e('TALENT', 'raisini'); ?></span>
        <?php esc_html_e('or', 'raisini'); ?>
        <span class="rs:text-gradient-1"><?php esc_html_e('CELEBRITIES', 'raisini'); ?></span>
        <?php esc_html_e('for an event, endorsement or performance', 'raisini'); ?>
      </div>
      <div class="text-center pt-5">
        <a href="<?php echo mail_link('info@raisini.com'); ?>" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
          <div class="d-flex align-items-center justify-content-center text-uppercase">
            <?php esc_html_e('Inquire', 'raisini'); ?>
            <?php icon('arrow-right', array('class' => 'icon ms-1')); ?>
          </div>
        </a>
      </div>
    </div>
  </section>
  <section data-section="9">
    <div class="clearfix">
      <div class="container-lg">
        <div class="rounded set:rounded-16px overflow-hidden">
          <div class="row g-0">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
              <figure class="m-0 pe-none user-select-none">
                <?php image('Rectangle 1040.png', array('alt' => 'Sponsorship marketing')); ?>
              </figure>
            </div>
            <div class="col-md-6">
              <div class="rs:bg-gradient-2 p-5 h-100 d-flex align-items-center justify-content-center text-center">
                <div>
                  <div class="text-uppercase fs-45px fw-700 mb-2 lh-sm">
                    <?php esc_html_e('Sponsorship marketing', 'raisini'); ?>
                  </div>
                  <div class="text-dark fs-18px text-opacity-50 text-center mw-405px mx-auto mb-4">
                    <?php esc_html_e('We advise Brands and Rights holders on making better partnership decisions, positively influencing desired behaviour changes amongst target audiences and maximizing return on investment', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="10">
    <div class="container-lg pt-4">
      <div class="row g-4">
        <div class="col-md-6">
          <div class="bg-raisini-3 rounded set:rounded-16px px-3 px-md-4 px-lg-5 py-4 py-md-5 py-lg-6 h-100">
            <div class="text-uppercase fs-24px fw-700 text-center mb-4">
              <?php esc_html_e('Brands', 'raisini'); ?>
            </div>
            <div class="fs-18px text-dark text-opacity-50 text-center mw-405px mx-auto">
              <?php esc_html_e('We support brands in making better partnership decisions, positively affecting desired behaviour changes and maximising return on investment', 'raisini'); ?>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bg-raisini-3 rounded set:rounded-16px px-3 px-md-4 px-lg-5 py-4 py-md-5 py-lg-6 h-100">
            <div class="text-uppercase fs-24px fw-700 text-center mb-4">
              <?php esc_html_e('Rights Holders', 'raisini'); ?>
            </div>
            <div class="fs-18px text-dark text-opacity-50 text-center mw-405px mx-auto">
              <?php esc_html_e('We support rights holders in making better partnership decisions, positively affecting desired behaviour changes and maximising return on investment', 'raisini'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="11">
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