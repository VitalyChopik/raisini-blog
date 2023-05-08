<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}

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
                  <?php esc_html_e('ABOUT', 'raisini'); ?>
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
    <div class="container-lg py-6">
      <div class="row g-4">
        <div class="col-md-6 d-flex align-items-center">
          <div class="mw-550px">
            <div class="text-uppercase fs-45px fw-700 lh-sm mb-3">
              <?php esc_html_e('RAISINI is an award winning, diversified entertainment agency', 'raisini'); ?>
            </div>
            <div class="text-dark text-opacity-50 fs-18px">
              <?php esc_html_e('RAISINI offers unique services to brands and individuals under one roof, that leave lasting memories of their brand identity with their customers. A set of services that are interconnected and an integral part of success for every Brand or Individual', 'raisini'); ?>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <figure class="m-0 user-select-none pe-none">
            <?php image('image-56.jpg'); ?>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <section data-section="3">
    <div class="container-lg">
      <div class="bg-raisini-3 rounded rounded-16px py-6">
        <div class="text-center user-select-none pe-none mb-5">
          <?php image('“-2.svg'); ?>
        </div>
        <div class="text-uppercase fs-45px text-center lh-sm fw-700 mw-600px mx-auto">
          <div>
            <?php esc_html_e('Our core focus', 'raisini'); ?>
          </div>
          <div class="rs:text-gradient-1">
            <?php esc_html_e('is creating memories and experiences', 'raisini'); ?>
          </div>
          <div>
            <?php esc_html_e('that spark happiness', 'raisini'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="4">
    <div class="container-lg pt-6">
      <div class="row g-4">
        <div class="col-md-6 d-flex align-items-end">
          <figure class="m-0">
            <?php image('Leo.png', array('alt' => 'Leo')); ?>
          </figure>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center justify-content-md-start">
          <div class="mw-460px mx-auto py-6 text-center text-md-start">
            <div class="fs-45px fw-700 text-uppercase mb-3 lh-sm">
              <?php esc_html_e('founder', 'raisini'); ?>
            </div>
            <div class="text-dark text-opacity-50 fs-18px">
              <?php esc_html_e('Since its inception in 1999, RAISINI is led by founder and industry veteran LEONIDAS RAISINI, a visionary Entrepreneur, Investor, Music Producer & DJ, the entertainment entity has consistently built its profile, joining the ranks of the elite in one of the most in demand markets in the World – DUBAI', 'raisini'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="5">
    <div class="rs:bg-gradient-2 p-5 p-lg-6">
      <div>
        <div class="text-uppercase fs-45px fw-700 lh-sm py-4 text-center">
          <?php esc_html_e('MISSION', 'raisini'); ?>
        </div>
        <div class="text-uppercase fs-40px fw-700 lh-sm py-4 text-center mw-1110px mx-auto">
          <?php esc_html_e('TO PROVIDE SERVICES WHICH ENABLE OUR CLIENTS TO BUILD STRONG RELATIONSHIPS AND TO INFLUENCE ATTITUDES AND BEHAVIOURS IN A COMPLEX WORLD', 'raisini'); ?>
        </div>
        <div class="text-dark text-opacity-50 fs-18px text-center mw-737px mx-auto">
          <?php esc_html_e('We undertake our mission through convergence by integrating specialist knowledge of practices and industries, local market understanding, proprietary methodology and breakthrough creativity', 'raisini'); ?>
        </div>
      </div>
    </div>
  </section>
  <section data-section="6">
    <div class="mw-1920px overlay-header mx-auto">
      <div class="row g-0">
        <div class="col-md-7 position-relative zi-2 d-flex align-items-center justify-content-center justify-content-md-end">
          <div class="p-4 p-lg-5 p-xl-6 text-center text-md-start">
            <div class="text-uppercase fs-45px fw-700 lh-sm py-4">
              <?php esc_html_e('VISION', 'raisini'); ?>
            </div>
            <div class="fs-80px fw-300 lh-1">
              <div class="rs:text-gradient-1">
                <?php esc_html_e('THROUGH', 'raisini'); ?>
              </div>
              <div class="rs:text-gradient-1">
                <?php esc_html_e(' ADVERSITY', 'raisini'); ?>
              </div>
              <div>
                <?php esc_html_e('TO THE', 'raisini'); ?>
              </div>
              <div>
                <?php esc_html_e(' STARS', 'raisini'); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 d-flex justify-content-end order-first order-md-last position-relative zi-1">
          <figure class="m-0 ps-6">
            <?php image('image-57.png'); ?>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <section data-section="7">
    <div class="bg-raisini-3 pt-6">
      <div class="container-lg">
        <section>
          <div class="fs-45px lh-sm fw-700 text-uppercase text-center mx-auto px-2 py-5">
            <?php esc_html_e('OUR VALUES', 'raisini'); ?>
          </div>
        </section>
        <section class="py-6">
          <div class="row g-4 justify-content-center">
            <div class="col-lg-4">
              <div class="rounded-circle rs:bg-gradient-1 p-1 w-350px h-350px mw-100 mh-100 mx-auto">
                <div class="bg-raisini-3 h-100 w-100 rounded-circle d-flex align-items-center justify-content-center">
                  <div class="text-center">
                    <div class="text-uppercase fs-18px fw-700 mb-3">
                      <?php esc_html_e('QUALITY', 'raisini'); ?>
                    </div>
                    <div class="text-dark text-opacity-50 fs-18px mw-300px mx-auto">
                      <?php esc_html_e('Excellence in products, services and people that drives long term growth and employee satisfaction', 'raisini'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="rounded-circle rs:bg-gradient-1 p-1 w-350px h-350px mw-100 mh-100 mx-auto">
                <div class="bg-raisini-3 h-100 w-100 rounded-circle d-flex align-items-center justify-content-center">
                  <div class="text-center">
                    <div class="text-uppercase fs-18px fw-700 mb-3">
                      <?php esc_html_e('INTEGRITY', 'raisini'); ?>
                    </div>
                    <div class="text-dark text-opacity-50 fs-18px mw-300px mx-auto">
                      <?php esc_html_e('Responsible, trustworthy partners respected by all stakeholders', 'raisini'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="rounded-circle rs:bg-gradient-1 p-1 w-350px h-350px mw-100 mh-100 mx-auto">
                <div class="bg-raisini-3 h-100 w-100 rounded-circle d-flex align-items-center justify-content-center">
                  <div class="text-center">
                    <div class="text-uppercase fs-18px fw-700 mb-3">
                      <?php esc_html_e('RESPECT', 'raisini'); ?>
                    </div>
                    <div class="text-dark text-opacity-50 fs-18px mw-300px mx-auto">
                      <?php esc_html_e('Positive relationships with our colleagues, clients and the communities in which we do business', 'raisini'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="rounded-circle rs:bg-gradient-1 p-1 w-350px h-350px mw-100 mh-100 mx-auto">
                <div class="bg-raisini-3 h-100 w-100 rounded-circle d-flex align-items-center justify-content-center">
                  <div class="text-center">
                    <div class="text-uppercase fs-18px fw-700 mb-3">
                      <?php esc_html_e('ENTREPRENEURIAL SPIRIT', 'raisini'); ?>
                    </div>
                    <div class="text-dark text-opacity-50 fs-18px mw-300px mx-auto">
                      <?php esc_html_e('Superior staff with the drive to take charge and make a difference for our clients', 'raisini'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="rounded-circle rs:bg-gradient-1 p-1 w-350px h-350px mw-100 mh-100 mx-auto">
                <div class="bg-raisini-3 h-100 w-100 rounded-circle d-flex align-items-center justify-content-center">
                  <div class="text-center">
                    <div class="text-uppercase fs-18px fw-700 mb-3">
                      <?php esc_html_e('MUTUAL BENEFITS', 'raisini'); ?>
                    </div>
                    <div class="text-dark text-opacity-50 fs-18px mw-300px mx-auto">
                      <?php esc_html_e('Financial success that rewards our firm, our employees and our clients', 'raisini'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="text-center">
        <?php image('image-58.png', array('class' => 'w-100 img-fluid mw-1920px')); ?>
      </div>
    </div>
  </section>
  <section data-section="8">
    <div class="container-lg">
      <section class="py-5">
        <div class="fs-45px lh-sm text-uppercase fw-700 mb-4">
          <?php esc_html_e('23 great years', 'raisini'); ?>
        </div>
        <div class="text-dark text-opacity-50 fs-18px mw-600px">
          <?php esc_html_e('We have enjoyed 23 phenomenal years and thanks to all our friends and partners for their love and support. Here’s to many more years of success', 'raisini'); ?>
        </div>
      </section>
    </div>
    <section>
      <div class="position-relative">
        <div class="container-lg position-relative zi-2">
          <div class="row g-0" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false, "prevNextButtons": false }'>
            <div class="col-lg-3 col-md-4 col-6 mx-4">
              <div class="d-inline-block rs:bg-gradient-2 fw-700 fs-20px lh-1 py-2 px-3 rounded-3 mb-1">
                1999
              </div>
              <div class="py-4">
                <div class="text-dark fs-18px mb-1">
                  <?php esc_html_e('Inception of', 'raisini'); ?>
                </div>
                <div class="fw-700 fs-20px lh-sm">
                  <?php esc_html_e('RAISINI', 'raisini'); ?>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mx-4">
              <div class="d-inline-block rs:bg-gradient-2 fw-700 fs-20px lh-1 py-2 px-3 rounded-3 mb-1">
                2000
              </div>
              <div class="py-4">
                <div class="fw-700 fs-20px lh-sm mb-1">
                  <div>
                    <?php esc_html_e('RAISINI', 'raisini'); ?>
                  </div>
                  <div>
                    <?php esc_html_e(' ENTERTAINMENT', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mx-4">
              <div class="d-inline-block rs:bg-gradient-2 fw-700 fs-20px lh-1 py-2 px-3 rounded-3 mb-1">
                2003
              </div>
              <div class="py-4">
                <div class="fw-700 fs-20px lh-sm mb-1">
                  <div>
                    <?php esc_html_e('RAISINI RECORDS', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mx-4">
              <div class="d-inline-block rs:bg-gradient-2 fw-700 fs-20px lh-1 py-2 px-3 rounded-3 mb-1">
                2005
              </div>
              <div class="py-4">
                <div class="fw-700 fs-20px lh-sm mb-1">
                  <div>
                    <?php esc_html_e('RAISINI', 'raisini'); ?>
                  </div>
                  <div>
                    <?php esc_html_e(' FOUNDATION', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mx-4">
              <div class="d-inline-block rs:bg-gradient-2 fw-700 fs-20px lh-1 py-2 px-3 rounded-3 mb-1">
                2007
              </div>
              <div class="py-4">
                <div class="fw-700 fs-20px lh-sm">
                  <div>
                    <?php esc_html_e('DEEPER SOUNDS', 'raisini'); ?>
                  </div>
                  <div>
                    <?php esc_html_e(' OF RAISINI', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mx-4">
              <div class="d-inline-block rs:bg-gradient-2 fw-700 fs-20px lh-1 py-2 px-3 rounded-3 mb-1">
                2008
              </div>
              <div class="py-4">
                <div class="fw-700 fs-20px lh-sm">
                  <div>
                    <?php esc_html_e('ENTREPRENEUR ', 'raisini'); ?>
                  </div>
                  <div>
                    <?php esc_html_e('OF THE YEAR AWARD', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mx-4">
              <div class="d-inline-block rs:bg-gradient-2 fw-700 fs-20px lh-1 py-2 px-3 rounded-3 mb-1">
                2009
              </div>
              <div class="py-4">
                <div class="fw-700 fs-20px lh-sm">
                  <div>
                    <?php esc_html_e('RAISINI PHOTOGRAPHY', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mx-4">
              <div class="d-inline-block rs:bg-gradient-2 fw-700 fs-20px lh-1 py-2 px-3 rounded-3 mb-1">
                2010
              </div>
              <div class="py-4">
                <div class="fw-700 fs-20px lh-sm">
                  <div>
                    <?php esc_html_e('ULTRA RAISINI', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mx-4">
              <div class="d-inline-block rs:bg-gradient-2 fw-700 fs-20px lh-1 py-2 px-3 rounded-3 mb-1">
                2011
              </div>
              <div class="py-4">
                <div class="fw-700 fs-20px lh-sm">
                  <div>
                    <?php esc_html_e('BOUTIQUE LIFESTYLE ', 'raisini'); ?>
                  </div>
                  <div>
                    <?php esc_html_e('AGENCY', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mx-4">
              <div class="d-inline-block rs:bg-gradient-2 fw-700 fs-20px lh-1 py-2 px-3 rounded-3 mb-1">
                2014
              </div>
              <div class="py-4">
                <div class="fw-700 fs-20px lh-sm">
                  <div>
                    <?php esc_html_e('RAISINI MUSIC ', 'raisini'); ?>
                  </div>
                  <div>
                    <?php esc_html_e('PUBLISHING', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mx-4">
              <div class="d-inline-block rs:bg-gradient-2 fw-700 fs-20px lh-1 py-2 px-3 rounded-3 mb-1">
                2018
              </div>
              <div class="py-4">
                <div class="fw-700 fs-20px lh-sm">
                  <div>
                    <?php esc_html_e('RAISINI U.K. HQ', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mx-4">
              <div class="d-inline-block rs:bg-gradient-2 fw-700 fs-20px lh-1 py-2 px-3 rounded-3 mb-1">
                2020
              </div>
              <div class="py-4">
                <div class="fw-700 fs-20px lh-sm">
                  <div>
                    <?php esc_html_e('HAVN SUPERAPP', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mx-4">
              <div class="d-inline-block rs:bg-gradient-2 fw-700 fs-20px lh-1 py-2 px-3 rounded-3 mb-1">
                2022
              </div>
              <div class="py-4">
                <div class="fw-700 fs-20px lh-sm">
                  <div>
                    <?php esc_html_e('RAISINI METAVERSE', 'raisini'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div aria-hidden="true" class="rs:bg-gradient-2 pt-1 position-absolute w-100 zi-0 pe-none user-select-none start-0" style="top: 16px"></div>
      </div>
    </section>
  </section>
  <section data-section="8">
    <div class="container-lg pt-6">
      <div class="text-center px-2 pt-5 pt-lg-6 pb-5">
        <div class="text-uppercase fs-45px fw-700 lh-sm mb-2">
          <?php esc_html_e('INTERNATIONAL TOURS/EVENTS', 'raisini'); ?>
        </div>
        <div class="text-dark text-opacity-50 mw-1110px mx-auto">
          <?php esc_html_e('RAISINI has hosted events and toured around the world in the most vibrant cities, making the brand globally recognized as the 1st Electronic Dance Music Label from Dubai while making new friends and fans through this Journey', 'raisini'); ?>
        </div>
      </div>

      <div class="py-5">
        <section class="position-relative overflow-hidden px-2">
          <?php image('image-59.svg', array('alt' => 'World Map', 'class' => 'img-fluid pe-none user-select-none')); ?>
          <span class="pin" data-bs-toggle="tooltip" title="Toronto" data-type="2" style="left:23.3%;top:32.4%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Chicago" data-type="2" style="left:22.88%;top:38.2%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="New York" data-type="2" style="left:27%;top:41%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Washington" data-type="2" style="left:24.8%;top:45.5%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Miami" data-type="2" style="left:23.3%;top:50.4%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Tulum" data-type="2" style="left:20.45%;top:54%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Los Angeles" data-type="2" style="left:15.1%;top:51%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Mexico City" data-type="2" style="left:17.14%;top:55%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Las Vegas" data-type="2" style="left:17.5%;top:46.5%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Denver" data-type="2" style="left:18.642%;top:41%"></span>
          <!-- <span class="pin" data-bs-toggle="tooltip" title="City" data-type="2" style="left:14.6%;top:44.4%"></span> -->
          <span class="pin" data-bs-toggle="tooltip" title="San Francisco" data-type="2" style="left:12.75%;top:47.75%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Curacao" data-type="2" style="left:25%;top:59%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Caracas" data-type="2" style="left:28.7%;top:59.55%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Bogota" data-type="2" style="left:25%;top:64%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Buenos Aires" data-type="2" style="left:29.4%;top:87.22%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Montevideo" data-type="2" style="left:31.35%;top:82.77%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Sao Paolo" data-type="2" style="left:32.15%;top:78%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Rio De Janeiro" data-type="2" style="left:34.6%;top:75%"></span>
          <!-- Europe -->
          <span class="pin" data-bs-toggle="tooltip" title="Marrakech" data-type="2" style="left:43.6%;top:45.75%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Libson" data-type="2" style="left:45.4%;top:43%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Barcelona" data-type="2" style="left:48.45%;top:43%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Milan" data-type="2" style="left:50.75%;top:40.6%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Paris" data-type="2" style="left:48.7%;top:37.7%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="London" data-type="2" style="left:46%;top:35.5%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Zurich" data-type="2" style="left:51%;top:36.25%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Amsterdam" data-type="2" style="left:49.1%;top:32.4%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Athens" data-type="2" style="left:52%;top:44.125%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Split" data-type="2" style="left:54.222%;top:42.22%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Istanbul" data-type="2" style="left:56.65%;top:43.25%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Ibiza" data-type="2" style="left:50%;top:46%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Mykonos" data-type="2" style="left:54.85%;top:47.425%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Beirut" data-type="2" style="left:57.55%;top:47.125%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Copenhagen" data-type="2" style="left:48.25%;top:28.25%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Berlin" data-type="2" style="left:51%;top:28.75%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Vienna" data-type="2" style="left:52%;top:32.75%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Budapest" data-type="2" style="left:54.55%;top:34.55%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Prague" data-type="2" style="left:53.325%;top:29.65%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Stockholm" data-type="2" style="left:52.5%;top:24%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="St. Petersburg" data-type="2" style="left:57.25%;top:23.125%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Tallinn" data-type="2" style="left:54.725%;top:26.25%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Warsaw" data-type="2" style="left:56.325%;top:29.65%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Moscow" data-type="2" style="left:60%;top:28.25%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Bucharest" data-type="2" style="left:59%;top:37%"></span>
          <!-- Africa -->
          <span class="pin" data-bs-toggle="tooltip" title="Dubai" data-type="2" style="left:65%;top:53%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Nairobi" data-type="2" style="left:61.125%;top:62.756%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Johannesburg" data-type="2" style="left:54.567%;top:79.375%"></span>
          <!-- Asia -->
          <span class="pin" data-bs-toggle="tooltip" title="Beijing" data-type="2" style="left:81.55%;top:44.5%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Tokyo" data-type="2" style="left:88.25%;top:43.75%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Shanghai" data-type="2" style="left:82.35%;top:50%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Hong Kong" data-type="2" style="left:80%;top:54.75%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Bangkok" data-type="2" style="left:77.75%;top:59.45%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Ho Chi Minh City" data-type="2" style="left:79.25%;top:63%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Kuala Lumpur" data-type="2" style="left:79.45%;top:67.25%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Bali" data-type="2" style="left:83.25%;top:70%"></span>
          <!-- Australia -->
          <span class="pin" data-bs-toggle="tooltip" title="Sydney" data-type="2" style="left:88.75%;top:91.875%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Melbourne" data-type="2" style="left:91.25%;top:85.75%"></span>
          <span class="pin" data-bs-toggle="tooltip" title="Auckland" data-type="2" style="left:97.1%;top:86.75%"></span>
        </section>
      </div>
    </div>
    <div class="container-fluid pb-6 px-0 mw-100">
      <div class="overflow-hidden">
        <div id="fs3" class="d-flex flex-nowrap w-100-contains-first" data-flickity!='{ "cellAlign": "left", "contain": true, "prevNextButtons": false, "pageDots": false }'>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('NEW YORK', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('MIAMI', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('DUBAI', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('AMSTERDAM', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('RIO DE JANEIRO', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('BARCELONA', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('ROME', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('PARIS', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('TOKYO', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('MYKONOS', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('ISTANBUL', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('IBIZA', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('st tropez', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('san francisco', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('budapest', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('sydney', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('auckland', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('tallinn', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('stockholm', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('prague', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('milan', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('split', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('buenos aires', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('warsaw', 'raisini'); ?>
          </div>
          <div class="flex-grow-1 flex-fill text-nowrap fs-20px fw-700 text-dark text-opacity-50 text-uppercase mx-lg-5 mx-3 mx-md-4">
            <?php esc_html_e('chicao', 'raisini'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="9">
    <div class="container-lg pt-6">
      <div class="px-2 pt-5 pt-lg-6 pb-5">
        <div class="text-uppercase fs-45px fw-700 lh-sm mb-2">
          <?php esc_html_e('CLIENTS', 'raisini'); ?>
        </div>
        <div class="text-dark text-opacity-50 mb-4">
          <?php esc_html_e('The longevity of our relationship is built on trust, respect, and the impact of what we accomplish together.', 'raisini'); ?>
          <?php esc_html_e('RAISINI is proud to have worked with some of the world’s leading Brands and Organizations:', 'raisini'); ?>
        </div>
      </div>
    </div>
    <div class="pb-6 container-fluid">
      <div id="fs1" class="row flex-nowrap g-4 pb-2">
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-60.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-61.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-62.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-63.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-64.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-79.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-80.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-81.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-82.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-83.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-84.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-85.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-86.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-87.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-88.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-89.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-90.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-91.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-92.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-93.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
      </div>
      <div id="fs2" class="row flex-nowrap g-4 pb-2">
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-94.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-95.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-96.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-97.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-98.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-99.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-100.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-101.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-102.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-103.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-104.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-105.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-106.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-107.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-108.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-109.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-110.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-111.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-112.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
        <div class="col-auto d-flex align-items-center justify-cotnent-center mx-4 mx-md-5 mx-lg-6 align-self-center is:flickity-init:h-100">
          <?php image('image-113.png', array('class' => 'img-fluid pe-none user-select-none')); ?>
        </div>
      </div>
    </div>
  </section>
  <section data-section="10">
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
            <a href="<?php the_home_url(); ?>" class="btn border-0 btn-primary fw-700 rs:bg-gradient-1 rs:hover:bg-size-120 rounded-pill text-uppercase px-4 py-2.5">
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