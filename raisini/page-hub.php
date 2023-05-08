<?php
get_header();
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
                  <?php esc_html_e('Hub', 'raisini'); ?>
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
<div class="featured-article">
    <div class="featured-article__container">
      <h2 class="section__title featured-article__title">Entrepreneurs TOOLKIT</h2>
      <?php		
        global $post;
        $query = new WP_Query( [
          'post_type'     => 'post',
          'posts_per_page' => 1,
          'featured'    => 'favorite'
        ] );
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            echo get_template_part( 'template-parts/favorite');
          }
        }
        wp_reset_postdata(); // Сбрасываем $post
        ?>

    </div>
  </div>
  <!-- 2 -->
  <div class="featured">
    <div class="featured__container">
      <h2 class="section__title featured__title">fearured</h2>
      <p class="featured__subtitle">Innovative Insights For A Connected World</p>

    </div>
    <div class="featured__slider swipper">
      <div class="swiper-wrapper featured__block">
      <?php		
        global $post;
        $query = new WP_Query( [
          'post_type'     => 'post',
          'posts_per_page' => 10,
          'featured'    => 'featured-post'
        ] );
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            echo get_template_part( 'template-parts/featured-post');
          }
        }
        wp_reset_postdata(); // Сбрасываем $post
        ?>
      </div>
      <div class="featured__wrapper">
        <a href="/all-stories" class="featured__btn">View More</a>
        <div class="swiper-pagination featured__pagination"></div>
        <div class="featured__navigation">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- 3 -->
  <?php
  if( have_rows('substack') ):
    while( have_rows('substack') ) : the_row();
    ?>
    <div class="substack">
      <div class="substack__container">
        <div class="substack__block">
          <div class="substack__text">
            <span class="substack__suptitle">Join our community at</span>
            <h2 class="substack__title">Substack</h2>
            <a href="<?php the_sub_field('link')?>" class="btn__link substack__btn">Subscribe</a>
          </div>
          <img src="<?php echo get_template_directory_uri()?>/blog/images/substack.png" alt="" class="substack__img">
        </div>
      </div>
    </div>
    <?php
    endwhile;
  endif;
  ?>

  <!-- 4 -->
  <div class="lifestyle">
    <div class="lifestyle__container">
    <?php $category_id_lifestyle = get_cat_ID( 'Lifestyle' );?>
      <h2 class="section__title lifestyle__title">lifestyle</h2>
      <p class="section__subtitle lifestyle__subtitle">These events touched hearts of millions</p>
      <div class="lifestyle__block">
        <?php		
          global $post;
          $query = new WP_Query( [
            'post_type'     => 'post',
            'cat' => $category_id_lifestyle,
            'posts_per_page' => 3,
          ] );
          if ( $query->have_posts() ) {
            $cnt=0;
            while ( $query->have_posts() ) {
              $query->the_post();
              $cnt++; 
              switch ($cnt) {
                case 1: 
                  echo get_template_part( 'template-parts/lifestyle-post', '',['class'=>'first']);
                break;
                default:
                  echo get_template_part( 'template-parts/lifestyle-post', '',['class'=>'']);
                break;
              }
            }
          }
          wp_reset_postdata(); // Сбрасываем $post
        ?>
      </div>
      <?php
        // Теперь, получим УРЛ категории
        $category_link_lifestyle = get_category_link( $category_id_lifestyle );
        ?>
      <a href="<?php echo $category_link_lifestyle; ?>" class="btn__link lifestyle__btn">VIEW MORE
        <svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M2.17972 0.37599L10.7212 8.79815C10.8226 8.89842 10.8945 9.00704 10.9371 9.12401C10.9797 9.24098 11.0007 9.36631 11 9.5C11 9.63369 10.979 9.75902 10.9371 9.87599C10.8952 9.99296 10.8232 10.1016 10.7212 10.2018L2.17972 18.6491C1.94316 18.883 1.64746 19 1.29262 19C0.937786 19 0.633639 18.8747 0.380184 18.624C0.126728 18.3734 0 18.0809 0 17.7467C0 17.4125 0.126728 17.1201 0.380184 16.8694L7.83179 9.5L0.380184 2.13061C0.143625 1.89666 0.0253448 1.60823 0.0253448 1.26533C0.0253448 0.922428 0.152073 0.62598 0.405529 0.37599C0.658985 0.12533 0.954683 0 1.29262 0C1.63057 0 1.92626 0.12533 2.17972 0.37599Z"
            fill="white" />
        </svg>
      </a>
    </div>
  </div>
  <!-- 5 -->
  <?php
  if( have_rows('medium') ):
    while( have_rows('medium') ) : the_row();
    ?>
    <div class="medium">
      <div class="medium__container">
        <h2 class="section__title medium__title"><?php the_sub_field('title')?> <a href="<?php the_sub_field('link')?>"
            class="medium__link"><img src="<?php echo get_template_directory_uri()?>/blog/images/medium.png" alt=""></a></h2>
        <p class="section__subtitle medium__subtitle"><?php the_sub_field('subtitle')?></p>
        <div class="medium__block">
          <div class="medium__box">
            <div class="medium__box-image">
              <?php 
              $image1 = get_sub_field('image-box-1');
              echo wp_get_attachment_image( $image1, 'full', false, ['class'=> 'medium__box-img']);?>
            </div>
            <div class="medium__box-text">
              <span class="medium__box-category"><?php the_sub_field('category-box-1')?></span>
              <h3 class="medium__box-title"><?php the_sub_field('title-box-1')?></h3>
            </div>
            <a href="<?php the_sub_field('link-box-1')?>" class="medium__box-link"></a>
          </div>
          <div class="medium__box">
            <div class="medium__box-image">
              <?php 
              $image2 = get_sub_field('image-box-2');
              echo wp_get_attachment_image( $image2, 'full', false, ['class'=> 'medium__box-img']);?>
              
            </div>
            <div class="medium__box-text">
              <span class="medium__box-category"><?php the_sub_field('category-box-2')?></span>
              <h3 class="medium__box-title"><?php the_sub_field('title-box-2')?></h3>
            </div>
            <a href="<?php the_sub_field('link-box-2')?>" class="medium__box-link"></a>
          </div>
        </div>
      </div>
    </div>
    <?php
    endwhile;
  endif;
  ?>

  <div class="entertainment">
    <div class="entertainment__container">
        <?php $category_id_entertainment = get_cat_ID( 'Entertainment' );?>
      <h2 class="section__title entertainment__title">entertainment</h2>
      <p class="section__subtitle entertainment__subtitle">Few of most trending blogs on our medium profile.</p>
      <div class="entertainment__block">
      <?php		
        global $post;
        $query = new WP_Query( [
          'post_type'     => 'post',
          'cat' => $category_id_entertainment,
          'posts_per_page' => 5,
        ] );
        if ( $query->have_posts() ) {
          $cnt=0;
          while ( $query->have_posts() ) {
            $query->the_post();
            $cnt++; 
            switch ($cnt) {
              case 1: 
                echo get_template_part( 'template-parts/entertainment-post', '',['class'=>'first']);
              break;
              default:
                echo get_template_part( 'template-parts/entertainment-post', '',['class'=>'']);
              break;
            }
          }
        }
        wp_reset_postdata(); // Сбрасываем $post
        ?>
      </div>
      <?php
        // Теперь, получим УРЛ категории
        $category_link_entertainment = get_category_link( $category_id_entertainment );
        ?>
      <a href="<?php echo $category_link_entertainment; ?>" class="btn__link entertainment__btn">VIEW MORE
        <svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M2.17972 0.37599L10.7212 8.79815C10.8226 8.89842 10.8945 9.00704 10.9371 9.12401C10.9797 9.24098 11.0007 9.36631 11 9.5C11 9.63369 10.979 9.75902 10.9371 9.87599C10.8952 9.99296 10.8232 10.1016 10.7212 10.2018L2.17972 18.6491C1.94316 18.883 1.64746 19 1.29262 19C0.937786 19 0.633639 18.8747 0.380184 18.624C0.126728 18.3734 0 18.0809 0 17.7467C0 17.4125 0.126728 17.1201 0.380184 16.8694L7.83179 9.5L0.380184 2.13061C0.143625 1.89666 0.0253448 1.60823 0.0253448 1.26533C0.0253448 0.922428 0.152073 0.62598 0.405529 0.37599C0.658985 0.12533 0.954683 0 1.29262 0C1.63057 0 1.92626 0.12533 2.17972 0.37599Z"
            fill="white" />
        </svg>
      </a>
    </div>
  </div>
  <!-- 7 -->
  <div class="music">
    <div class="music__container">
    <?php $category_id_music = get_cat_ID( 'Music' );?>
      <h2 class="section__title music__title">Music</h2>
      <p class="section__subtitle music__subtitle">See what going trending in music.</p>
      <div class="music__block ">
        <?php		
          global $post;
          $query = new WP_Query( [
            'post_type'     => 'post',
            'cat' => $category_id_music,
            'posts_per_page' => 6,
          ] );
          if ( $query->have_posts() ) {
            $cnt=0;
            while ( $query->have_posts() ) {
              $query->the_post();
              $cnt++; 
              switch ($cnt) {
                case 1: case 2: case 3: 
                  echo get_template_part( 'template-parts/music-post', '',['class'=>'col']);
                break;
                default:
                  echo get_template_part( 'template-parts/music-post', '',['class'=>'row']);
                break;
              }
            }
          }
          wp_reset_postdata(); // Сбрасываем $post
        ?>
      </div>
    </div>
  </div>
  <!-- 8 -->
  <?php
  if( have_rows('spotlight') ):
    while( have_rows('spotlight') ) : the_row();
    ?>
      <div class="spotlight">
        <?php
        $bg = get_sub_field('background');
        echo wp_get_attachment_image( $bg, 'full', false, ['class'=> 'spotlight__bg']);?>
        <div class="spotlight__container">
          <h2 class="section__title spotlight__title"><?php the_sub_field('title')?></h2>
          <div class="spotlight__block">
            <?php
            $imageMain = get_sub_field('image');
            echo wp_get_attachment_image( $imageMain, 'full', false, ['class'=> 'spotlight__img']);?>
            <div class="spotlight__box">
              <h3 class="spotlight__box-title">MUSIC TO YOUR EARS</h3>
              <div class="spotlight__box-services">
                <div class="spotlight__box-text">
                  Lister to our music
                  <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_302_232)">
                      <path d="M10.0859 8.3335V17.6668L17.6693 13.0002L10.0859 8.3335Z" stroke="black"
                        stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <circle cx="12.5" cy="12.5" r="12" stroke="black" />
                    <defs>
                      <clipPath id="clip0_302_232">
                        <rect width="14" height="14" fill="white" transform="translate(6 6)" />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <a href="<?php the_sub_field('spotify_link')?>" class="spotlight__box-service">
                  <img src="<?php echo get_template_directory_uri()?>/blog/images/spotify.png" alt="" class="spotlight__box-service-img">
                </a>
                <a href="<?php the_sub_field('apple_music_link')?>" class="spotlight__box-service">
                  <img src="<?php echo get_template_directory_uri()?>/blog/images/apple-music.png" alt="" class="spotlight__box-service-img">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    endwhile;
  endif;
  ?>

  <!-- 9 -->
  <div class="technology">
    <div class="technology__container">
    <?php $category_id_technology = get_cat_ID( 'Technology' );?>
      <h2 class="section__title technology__title">Technology</h2>
      <p class="section__subtitle technology__subtitle">These events touched hearts of millions</p>
      <div class="technology__block">
      <?php		
        global $post;
        $query = new WP_Query( [
          'post_type'     => 'post',
          'cat' => $category_id_technology,
          'posts_per_page' => 4,
        ] );
        if ( $query->have_posts() ) {
          $cnt=0;
          while ( $query->have_posts() ) {
            $query->the_post();
            $cnt++; 
            switch ($cnt) {
              case 1: 
                echo get_template_part( 'template-parts/technology-post', '',['class'=>'first']);
              break;
              default:
                echo get_template_part( 'template-parts/technology-post', '',['class'=>'']);
              break;
            }
          }
        }
        wp_reset_postdata(); // Сбрасываем $post
        ?>
      </div>
      </div>
      <?php
          // Теперь, получим УРЛ категории
          $category_link_technology = get_category_link( $category_id_technology );
          ?>
      <a href="<?php echo $category_link_technology; ?>" class="btn__link technology__btn">VIEW MORE
        <svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M2.17972 0.37599L10.7212 8.79815C10.8226 8.89842 10.8945 9.00704 10.9371 9.12401C10.9797 9.24098 11.0007 9.36631 11 9.5C11 9.63369 10.979 9.75902 10.9371 9.87599C10.8952 9.99296 10.8232 10.1016 10.7212 10.2018L2.17972 18.6491C1.94316 18.883 1.64746 19 1.29262 19C0.937786 19 0.633639 18.8747 0.380184 18.624C0.126728 18.3734 0 18.0809 0 17.7467C0 17.4125 0.126728 17.1201 0.380184 16.8694L7.83179 9.5L0.380184 2.13061C0.143625 1.89666 0.0253448 1.60823 0.0253448 1.26533C0.0253448 0.922428 0.152073 0.62598 0.405529 0.37599C0.658985 0.12533 0.954683 0 1.29262 0C1.63057 0 1.92626 0.12533 2.17972 0.37599Z"
            fill="white" />
        </svg>
      </a>
    </div>
  </div>
  <!-- 10 -->
  <div class="startups">
    <div class="startups__container">
      <?php $category_id_startups = get_cat_ID( 'Startups' );?>
      <h2 class="section__title startups__title">Startups</h2>
      <p class="section__subtitle startups__subtitle">These events touched hearts of millions</p>
      <div class="startups__block">
      <?php		
        global $post;
        $query = new WP_Query( [
          'post_type'     => 'post',
          'cat' => $category_id_startups,
          'posts_per_page' => 4,
        ] );
        if ( $query->have_posts() ) {
          $cnt=0;
          while ( $query->have_posts() ) {
            $query->the_post();
            $cnt++; 
            switch ($cnt) {
              case 1: 
                echo get_template_part( 'template-parts/startups-post', '',['class'=>'first']);
              break;
              default:
                echo get_template_part( 'template-parts/startups-post', '',['class'=>'']);
              break;
            }
          }
        }
        wp_reset_postdata(); // Сбрасываем $post
        ?>
      </div>
      <?php
          // Теперь, получим УРЛ категории
          $category_link_startups = get_category_link( $category_id_startups );
          ?>
        <a href="<?php echo $category_link_startups; ?>" class="btn__link technology__btn">VIEW MORE
        <svg width="11" height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M2.17972 0.37599L10.7212 8.79815C10.8226 8.89842 10.8945 9.00704 10.9371 9.12401C10.9797 9.24098 11.0007 9.36631 11 9.5C11 9.63369 10.979 9.75902 10.9371 9.87599C10.8952 9.99296 10.8232 10.1016 10.7212 10.2018L2.17972 18.6491C1.94316 18.883 1.64746 19 1.29262 19C0.937786 19 0.633639 18.8747 0.380184 18.624C0.126728 18.3734 0 18.0809 0 17.7467C0 17.4125 0.126728 17.1201 0.380184 16.8694L7.83179 9.5L0.380184 2.13061C0.143625 1.89666 0.0253448 1.60823 0.0253448 1.26533C0.0253448 0.922428 0.152073 0.62598 0.405529 0.37599C0.658985 0.12533 0.954683 0 1.29262 0C1.63057 0 1.92626 0.12533 2.17972 0.37599Z"
            fill="white" />
        </svg>
      </a>
    </div>
  </div>
  <!-- 11 -->
  <div class="bisiness">
    <div class="bisiness__container">
    <?php $category_id_business = get_cat_ID( 'Business' );?>
      <h2 class="section__title bisiness__title">BUSINESS</h2>
      <p class="section__subtitle bisiness__subtitle">Innovative insights for a connected world</p>

    </div>
    <div class="bisiness__block swiper">

      <div class="swiper-wrapper bisiness__wrapper">
      <?php		
        global $post;
        $query = new WP_Query( [
          'post_type'     => 'post',
          'cat' => $category_id_business,
          'posts_per_page' => 3,
        ] );
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            echo get_template_part( 'template-parts/bisiness-post');
          }
        }
        wp_reset_postdata(); // Сбрасываем $post
        ?>
      </div>
      <div class="bisiness__container">
        <div class="bisiness__navigation">
          <?php
          // Теперь, получим УРЛ категории
          $category_link_business = get_category_link( $category_id_business );
          ?>
          <a href="<?php echo $category_link_business; ?>" class="bisiness__btn">View All</a>
          <div class="swiper-pagination bisiness__pagination"></div>
          <div class="bisiness__arrows">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>

    </div>
  </div>
<?php get_footer();?>