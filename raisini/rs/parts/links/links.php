<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}

?>
<section data-part="main-main">
  <section data-section="1">
    <div class="rs:bg-gradient-2 p-5">
      <div class="container-lg">
        <div class="row g-0 flex-nowrap align-items-center justify-content-center">
          <div class="col-lg-10">
            <article>
              <div class="fw-700 text-uppercase fs-56px lh-sm py-5 text-center">
                <?php esc_html_e('Official Links', 'raisini'); ?>
              </div>

              <div class="text-uppercase fw-700 fs-28px lh-sm text-center mb-2">
                <?php esc_html_e('RAISINI AGENCY', 'raisini'); ?>
              </div>

              <nav class="d-flex align-items-center justify-content-center mb-5">
                <div class="d-inline-flex align-items-center justify-content-between py-3 mx-auto">
                  <a href="https://www.facebook.com/raisiniofficial" class="px-3">
                    <?php image('facebook.svg'); ?>
                  </a>
                  <a href="https://www.linkedin.com/company/raisini/" class="px-3">
                    <?php image('linkedin.svg'); ?>
                  </a>
                  <a href="https://www.tiktok.com/@raisinirecords" class="px-3">
                    <?php image('tiktok.svg'); ?>
                  </a>
                  <a href="https://twitter.com/raisiniofficial" class="px-3">
                    <?php image('twitter.svg'); ?>
                  </a>
                  <a href="https://www.instagram.com/raisiniofficial/" class="px-3">
                    <?php image('instagram.svg'); ?>
                  </a>
                  <a href="https://www.youtube.com/c/raisinirecords" class="px-3">
                    <?php image('youtube.svg'); ?>
                  </a>
                </div>
              </nav>

              <div class="mb-5">
                <a href="http://www.raisinirecords.com/" class="mb-4 minh-64px d-block text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-center text-uppercase fs-18px fw-700">
                  <?php esc_html_e('Website', 'raisini'); ?>
                </a>
                <a href="http://www.raisinirecords.com/store" class="minh-64px d-block text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-center text-uppercase fs-18px fw-700">
                  <?php esc_html_e('Shop', 'raisini'); ?>
                </a>
              </div>

              <section class="mb-5">
                <div class="text-uppercase fw-700 fs-28px lh-sm text-center mb-2 pt-5">
                  <?php esc_html_e('RAISINI RECORDS', 'raisini'); ?>
                </div>

                <nav class="d-flex align-items-center justify-content-center mb-5">
                  <div class="d-inline-flex align-items-center justify-content-between py-3 mx-auto">
                    <a href="https://www.facebook.com/raisinirecords" class="px-3">
                      <?php image('facebook.svg'); ?>
                    </a>
                    <a href="https://www.linkedin.com/company/raisini-records" class="px-3">
                      <?php image('linkedin.svg'); ?>
                    </a>
                    <a href="https://www.tiktok.com/@raisinirecords" class="px-3">
                      <?php image('tiktok.svg'); ?>
                    </a>
                    <a href="https://twitter.com/raisinirecords" class="px-3">
                      <?php image('twitter.svg'); ?>
                    </a>
                    <a href="https://www.instagram.com/raisinirecords/" class="px-3">
                      <?php image('instagram.svg'); ?>
                    </a>
                    <a href="https://www.youtube.com/c/raisinirecords" class="px-3">
                      <?php image('youtube.svg'); ?>
                    </a>
                  </div>
                </nav>

                <div class="row g-5 pt-5">
                  <div class="col-md-4">
                    <div class="fw-300 fs-18px fw-400 lh-sm mb-4 pb-2 text-uppercase text-center">
                      <?php esc_html_e('Links', 'raisini'); ?>
                    </div>

                    <nav>
                      <a href="http://www.raisinirecords.com/" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Website', 'raisini'); ?>
                        </span>
                      </a>
                      <a href="http://www.raisinirecords.com/store" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('SHOP', 'raisini'); ?>
                        </span>
                      </a>
                      <a href="https://soundcloud.com/raisini" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Soundcloud ', 'raisini'); ?>
                        </span>
                      </a>
                      <a href="https://www.mixcloud.com/raisinirecords/" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Mixcloud ', 'raisini'); ?>
                        </span>
                      </a>
                      <a href="https://open.spotify.com/playlist/1dyVZuhemML2TpSnsjpUmS?si=8d3df87dce024d03" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Radio', 'raisini'); ?>
                        </span>
                      </a>
                      <a href="https://open.spotify.com/user/oj2qxbmj3m6laz9cjfewnyyz5?si=e42b65caf0f2424d" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Playlists', 'raisini'); ?>
                        </span>
                      </a>
                    </nav>
                  </div>
                  <div class="col-md-4">
                    <div class="fw-300 fs-18px fw-400 lh-sm mb-4 pb-2 text-uppercase text-center">
                      <?php esc_html_e('Stream Music', 'raisini'); ?>
                    </div>
                    </span>

                    <nav>
                      <a href="https://open.spotify.com/user/oj2qxbmj3m6laz9cjfewnyyz5?si=e42b65caf0f2424d" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Spotify', 'raisini'); ?>
                        </span>
                        <?php image('image-66@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://music.apple.com/us/artist/raisini/1630940306" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('APPLE MUSIC', 'raisini'); ?>
                        </span>
                        <?php image('image-67@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://www.deezer.com/pt/profile/4908485422" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Deezer ', 'raisini'); ?>
                        </span>
                        <?php image('image-68@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://tidal.com/browse/artist/14088969" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Tidal ', 'raisini'); ?>
                        </span>
                        <?php image('image-69@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://music.amazon.co.uk/search/raisini+records/albums?filter=IsLibrary%7Cfalse&sc=none" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Amazon Music', 'raisini'); ?>
                        </span>
                        <?php image('image-70@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://music.youtube.com/channel/UCDRhR7Adg51bOKYjdL7ErlQ" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Youtube Music', 'raisini'); ?>
                        </span>
                        <?php image('image-71@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                    </nav>
                  </div>
                  <div class="col-md-4">
                    <div class="fw-300 fs-18px fw-400 lh-sm mb-4 pb-2 text-uppercase text-center">
                      <?php esc_html_e('Download Music', 'raisini'); ?>
                    </div>

                    <nav>
                      <a href="https://www.beatport.com/label/raisini-records/104008" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('beatport', 'raisini'); ?>
                        </span>
                        <?php image('image-72@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://www.traxsource.com/label/63093/raisini-records" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('traxsource', 'raisini'); ?>
                        </span>
                        <?php image('image-73@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://music.apple.com/us/artist/raisini/1630940306" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('iTunes ', 'raisini'); ?>
                        </span>
                        <?php image('image-74@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://music.amazon.co.uk/search/raisini+records/albums?filter=IsLibrary%7Cfalse&sc=none" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Amazon ', 'raisini'); ?>
                        </span>
                        <?php image('image-75@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="#" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('bandcamp', 'raisini'); ?>
                        </span>
                        <?php image('image-76@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://www.junodownload.com/labels/Raisini/" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Juno', 'raisini'); ?>
                        </span>
                        <?php image('image-77@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                    </nav>
                  </div>
                </div>
              </section>

              <section class="mb-5">
                <div class="text-uppercase fw-700 fs-28px lh-sm text-center mb-2 pt-5">
                  <?php esc_html_e('LEONIDAS RAISINI', 'raisini'); ?>
                </div>

                <nav class="d-flex align-items-center justify-content-center mb-5">
                  <div class="d-inline-flex align-items-center justify-content-between py-3 mx-auto">
                    <a href="https://www.facebook.com/iamraisini" class="px-3">
                      <?php image('facebook.svg'); ?>
                    </a>
                    <a href="https://www.linkedin.com/in/iamraisini/" class="px-3">
                      <?php image('linkedin.svg'); ?>
                    </a>
                    <a href="https://www.tiktok.com/@raisini" class="px-3">
                      <?php image('tiktok.svg'); ?>
                    </a>
                    <a href="https://twitter.com/iamraisini" class="px-3">
                      <?php image('twitter.svg'); ?>
                    </a>
                    <a href="https://www.instagram.com/iamraisini/" class="px-3">
                      <?php image('instagram.svg'); ?>
                    </a>
                    <a href="https://www.youtube.com/c/raisinirecords" class="px-3">
                      <?php image('youtube.svg'); ?>
                    </a>
                  </div>
                </nav>

                <div class="row g-5 pt-5">
                  <div class="col-md-4">
                    <div class="fw-300 fs-18px fw-400 lh-sm mb-4 pb-2 text-uppercase text-center">
                      <?php esc_html_e('Links', 'raisini'); ?>
                    </div>

                    <nav>
                      <a href="http://www.iamraisini.com/" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Website', 'raisini'); ?>
                        </span>
                      </a>
                      <a href="http://www.raisinirecords.com/store" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('SHOP', 'raisini'); ?>
                        </span>
                      </a>
                      <a href="https://soundcloud.com/raisini" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Soundcloud ', 'raisini'); ?>
                        </span>
                      </a>
                      <a href="https://www.mixcloud.com/raisini/" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Mixcloud ', 'raisini'); ?>
                        </span>
                      </a>
                      <a href="https://open.spotify.com/playlist/1dyVZuhemML2TpSnsjpUmS?si=8d3df87dce024d03" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Radio', 'raisini'); ?>
                        </span>
                      </a>
                      <a href="https://open.spotify.com/artist/4ec9ifLIvbyKVDKhX5WSus?si=AHWBE5owQ5WP9-BhqhAi2Q" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Playlists', 'raisini'); ?>
                        </span>
                      </a>
                    </nav>
                  </div>
                  <div class="col-md-4">
                    <div class="fw-300 fs-18px fw-400 lh-sm mb-4 pb-2 text-uppercase text-center">
                      <?php esc_html_e('Stream Music', 'raisini'); ?>
                    </div>
                    </span>

                    <nav>
                      <a href="https://open.spotify.com/artist/4ec9ifLIvbyKVDKhX5WSus?si=AHWBE5owQ5WP9-BhqhAi2Q" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Spotify', 'raisini'); ?>
                        </span>
                        <?php image('image-66@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://music.apple.com/gb/artist/raisini/1630940306" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('APPLE MUSIC', 'raisini'); ?>
                        </span>
                        <?php image('image-67@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://deezer.page.link/1hdZjfet81mNG6Bg6" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Deezer ', 'raisini'); ?>
                        </span>
                        <?php image('image-68@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://tidal.com/browse/artist/14088969" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Tidal ', 'raisini'); ?>
                        </span>
                        <?php image('image-69@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://music.amazon.co.uk/artists/B08FT19M47/raisini" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Amazon Music', 'raisini'); ?>
                        </span>
                        <?php image('image-70@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://music.youtube.com/channel/UCDRhR7Adg51bOKYjdL7ErlQ" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Youtube Music', 'raisini'); ?>
                        </span>
                        <?php image('image-71@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                    </nav>
                  </div>
                  <div class="col-md-4">
                    <div class="fw-300 fs-18px fw-400 lh-sm mb-4 pb-2 text-uppercase text-center">
                      <?php esc_html_e('Download Music', 'raisini'); ?>
                    </div>

                    <nav>
                      <a href="https://www.beatport.com/artist/raisini/1065030" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('beatport', 'raisini'); ?>
                        </span>
                        <?php image('image-72@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://www.traxsource.com/artist/647195/raisini" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('traxsource', 'raisini'); ?>
                        </span>
                        <?php image('image-73@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://music.apple.com/gb/artist/raisini/1630940306" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('iTunes ', 'raisini'); ?>
                        </span>
                        <?php image('image-74@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://music.amazon.co.uk/artists/B08FT19M47/raisini" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Amazon ', 'raisini'); ?>
                        </span>
                        <?php image('image-75@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="#" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('bandcamp', 'raisini'); ?>
                        </span>
                        <?php image('image-76@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                      <a href="https://www.junodownload.com/artists/Raisini/releases/" class="minh-64px mb-4 d-flex align-items-center text-reset text-decoration-none bg-white rounded set:rounded-16px p-3 text-start text-uppercase fs-18px fw-700">
                        <span class="text-truncate! text-nowrap">
                          <?php esc_html_e('Juno', 'raisini'); ?>
                        </span>
                        <?php image('image-77@4x.png', array('width' => 32, 'height' => 32, 'class' => 'img-fluid ms-auto pe-none')); ?>
                      </a>
                    </nav>
                  </div>
                </div>
              </section>

            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>