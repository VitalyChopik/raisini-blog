<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}

?>
<section data-section="empty-page">
  <section data-part="1">
    <div class="container-lg">
      <article>
        <header class="py-5 py-lg-6">
          <div class="fs-40px fw-700 text-uppercase lh-sm mb-1">
            <?php the_title(); ?>
          </div>
          <div class="fs-20px text-dark text-opacity-50">
            <?php esc_html_e('Last Updated', 'raisini'); ?>, [<?php the_modified_date(); ?>]
          </div>
        </header>
        <div>
          <?php the_content(); ?>
        </div>
      </article>
    </div>
  </section>
</section>