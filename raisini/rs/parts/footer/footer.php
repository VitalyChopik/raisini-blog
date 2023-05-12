<?php
// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}
?>
<footer>
  <div class="border-top">
    <div class="container-lg py-5">
      <div class="row g-4">
        <div class="col-xl-4 col-sm-6 order-xl-1">
          <div class="py-1">
            <div class="row g-4">
              <div class="text-uppercase text-dark fw-700 text-opacity-50 mb-3">
                <?php esc_html_e('Menu', 'raisini'); ?>
              </div>
              <div class="col-6">
                <nav class="text-uppercase d-flex flex-column">
                  <a class="text-reset text-decoration-none py-1" href="<?php echo get_permalink(get_page_by_title('Entertainment')); ?>">
                    <?php esc_html_e('Entertainment', 'raisini'); ?>
                  </a>
                  <a class="text-reset text-decoration-none py-1" href="<?php echo get_permalink(get_page_by_title('Tech')); ?>">
                    <?php esc_html_e('Tech', 'raisini'); ?>
                  </a>
                  <a class="text-reset text-decoration-none py-1" href="<?php echo get_permalink(get_page_by_title('Metaverse')); ?>">
                    <?php esc_html_e('Metaverse', 'raisini'); ?>
                  </a>
					 <a class="text-reset text-decoration-none py-1" href="<?php echo get_permalink(get_page_by_title('Investing')); ?>">
                    <?php esc_html_e('Investing', 'raisini'); ?>
                  </a>
                </nav>
              </div>
              <div class="col-6">
                <nav class="text-uppercase d-flex flex-column">
                  <a class="text-reset text-decoration-none py-1" href="<?php echo get_permalink(get_page_by_title('Music')); ?>">
                    <?php esc_html_e('Music', 'raisini'); ?>
                  </a>
                  <a class="text-reset text-decoration-none py-1" href="<?php echo get_permalink(get_page_by_title('NFT')); ?>">
                    <?php esc_html_e('NFT', 'raisini'); ?>
                  </a>
                  <a class="text-reset text-decoration-none py-1" href="<?php echo get_permalink(get_page_by_title('About')); ?>">
                    <?php esc_html_e('About', 'raisini'); ?>
                  </a>
                  <a class="text-reset text-decoration-none py-1" href="<?php echo get_permalink(get_page_by_title('Hub')); ?>">
                    <?php esc_html_e('Hub', 'raisini'); ?>
                  </a>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 order-xl-3 order-sm-5">
          <div class="py-1">
            <div class="text-uppercase text-dark fw-700 text-opacity-50 mb-3">
              <?php esc_html_e('Contact', 'raisini'); ?>
            </div>
            <nav class="d-flex flex-column">
              <div class="overflow-hidden py-1">
                <div class="row g-4 fs-15px">
                  <div class="col-5">
                    <div class="text-black text-opacity-50">
                      <?php esc_html_e('Phone', 'raisini'); ?>
                    </div>
                  </div>
                  <div class="col-7">
                    <a class="text-reset text-decoration-none" href="<?php echo tel_link('+44 (0)20 3929 3795'); ?>">
                      <?php esc_html_e('+44 (0)20 3929 3795', 'raisini'); ?>
                    </a>
                  </div>
                </div>
              </div>
              <div class="overflow-hidden py-1">
                <div class="row g-4 fs-15px">
                  <div class="col-5">
                    <div class="text-black text-opacity-50">
                      <?php esc_html_e('General', 'raisini'); ?>
                    </div>
                  </div>
                  <div class="col-7">
                    <a class="text-reset text-decoration-none" href="<?php echo mail_link('info@raisini.com'); ?>">
                      <?php esc_html_e('info@raisini.com', 'raisini'); ?>
                    </a>
                  </div>
                </div>
              </div>
              <div class="overflow-hidden py-1">
                <div class="row g-4 fs-15px">
                  <div class="col-5">
                    <div class="text-black text-opacity-50">
                      <?php esc_html_e('Careers', 'raisini'); ?>
                    </div>
                  </div>
                  <div class="col-7">
                    <a class="text-reset text-decoration-none" href="<?php echo mail_link('job@raisini.com'); ?>">
                      <?php esc_html_e('job@raisini.com', 'raisini'); ?>
                    </a>
                  </div>
                </div>
              </div>
              <div class="overflow-hidden py-1">
                <div class="row g-4 fs-15px">
                  <div class="col-5">
                    <div class="text-black text-opacity-50">
                      <?php esc_html_e('Events', 'raisini'); ?>
                    </div>
                  </div>
                  <div class="col-7">
                    <a class="text-reset text-decoration-none" href="<?php echo mail_link('events@raisini.com'); ?>">
                      <?php esc_html_e('events@raisini.com', 'raisini'); ?>
                    </a>
                  </div>
                </div>
              </div>
              <div class="overflow-hidden py-1">
                <div class="row g-4 fs-15px">
                  <div class="col-5">
                    <div class="text-black text-opacity-50">
                      <?php esc_html_e('Press & PR', 'raisini'); ?>
                    </div>
                  </div>
                  <div class="col-7">
                    <a class="text-reset text-decoration-none" href="<?php echo mail_link('press@raisini.com'); ?>">
                      <?php esc_html_e('press@raisini.com', 'raisini'); ?>
                    </a>
                  </div>
                </div>
              </div>
              <a class="text-reset text-decoration-none py-1 text-uppercase mt-3" href="<?php echo get_permalink(get_page_by_title('Contact Us')); ?>">
                <?php esc_html_e('Contact Us', 'raisini'); ?>
              </a>
            </nav>
          </div>
        </div>
        <div class="col-xl-4 order-xl-5 col-sm-6 order-sm-2 d-flex justify-content-sm-center">
          <div class="py-1">
            <div class="text-uppercase text-dark fw-700 text-opacity-50 mb-3">
              <?php esc_html_e('Social', 'raisini'); ?>
            </div>
            <nav class="d-flex flex-sm-column align-items-sm-start">
              <div class="d-flex align-items-center justify-content-between py-3">
                <a href="https://www.facebook.com/raisiniofficial" class="px-3">
                  <?php image('facebook.svg'); ?>
                </a>
                <a href="https://www.instagram.com/raisiniofficial/" class="px-3">
                  <?php image('instagram.svg'); ?>
                </a>
                <a href="https://twitter.com/raisiniofficial" class="px-3">
                  <?php image('twitter.svg'); ?>
                </a>
                <a href="https://raisini.medium.com/" class="px-3 medium__icon">
                  <?php image('medium.svg'); ?>
                </a>
                
              </div>
              <div class="d-flex align-items-center justify-content-between py-3">
                <a href="https://www.tiktok.com/@raisinirecords" class="px-3">
                  <?php image('tiktok.svg'); ?>
                </a>
                <a href="https://www.linkedin.com/company/raisini/" class="px-3">
                  <?php image('linkedin.svg'); ?>
                </a>
                <a href="https://www.youtube.com/c/raisinirecords" class="px-3">
                  <?php image('youtube.svg'); ?>
                </a>
                <a href="https://raisini.substack.com/" class="px-3 substack__icon">
                  <?php image('substack.svg'); ?>
                </a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="border-top">
    <div class="container-lg">
      <div class="py-4">
        <div class="row g-4">
          <div class="col-md-6 d-flex align-items-center justify-content-center justify-content-md-start order-md-1 order-3">
            <div class="text-dark text-opacity-50">
              Copyright © 1999 - 2023 Raisini All Rights Reserved.
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-center justify-content-md-end justify-content-center order-2">
            <nav>
              <ol class="list-inline m-0">
                <li class="list-inline-item">
                  <a class="text-reset text-decoration-none py-1" href="<?php echo get_permalink(get_page_by_title('Terms of Use')); ?>">
                    <?php esc_html_e('Terms of Use', 'raisini'); ?>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="text-reset text-decoration-none py-1" href="<?php echo get_permalink(get_page_by_title('Privacy Policy')); ?>">
                    <?php esc_html_e('Privacy Policy', 'raisini'); ?>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="text-reset text-decoration-none py-1" href="<?php echo home_url('cookie-policy') ?>">
                    <?php esc_html_e('Сookie Policy', 'raisini'); ?>
                  </a>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>