<?php get_header();?>
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
</section> 
<div class="category">
  <div class="category__container">
    <div class="category__list">
      <?php		
        global $post;
        $query = new WP_Query( [
          'post_type'     => 'post',
          'posts_per_page' => -1,
        ] );
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            echo get_template_part( 'template-parts/category-post');
          }
        }
        wp_reset_postdata(); // Сбрасываем $post
        ?>
    </div>
  </div>
</div>
<?php get_footer();?>