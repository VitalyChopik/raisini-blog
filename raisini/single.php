<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raisini
 */

get_header();

?>
<div class="single">
  <div class="single__container"><a href="javascript:history.back()" class="back__btn"><svg width="39" height="21"
        viewBox="0 0 39 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6.95853 16.3897L1.03125 10.4624L6.95853 4.53516M1.85448 10.4624L35.9993 10.4624"
          stroke="#141414" stroke-width="1.97576" stroke-linecap="round" stroke-linejoin="round" />
      </svg> Back</a>
    <div class="single__header">
    <?php  $category = get_the_category(); ?>
      <a href="<?php echo get_category_link($category[0]->cat_ID);?>" class="single__category"><?php  echo $category[0]->cat_name; ?></a>
      <div class="single__share">
        <?php echo do_shortcode('[shared_counts]')?>
      </div>
    </div>
    <h1 class="single__title"><?php the_title();?></h1>
    <div class="box__info single__info">
      <span class="box__data single__data"><?php the_time('F d'); ?></span>
      <span class="box__read single__read"><?php echo reading_time(); ?> mins read</span></div>
    <?php the_post_thumbnail( 'full', ['class' => "single__image"] ); ?>
    <section class="single__content">
      <?php the_content();?>
    </section>
    <div class="single__posts">
      <h2 class="single__posts-title">People also read</h2>
      <?php		
        global $post;
        $query = new WP_Query( [
          'post_type'     => 'post',
          'posts_per_page' => 3,
          'cat' => $category[0]->cat_ID,
          'post__not_in' => array( $post->ID )
        ] );
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            echo get_template_part( 'template-parts/single-post');
          }
        }
        wp_reset_postdata(); // Сбрасываем $post
        ?>

      <a href="<?php echo get_category_link($category[0]->cat_ID);?>" class="btn__link single__posts-btn">VIEW MORE <svg width="11" height="19"
          viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M2.17972 0.37599L10.7212 8.79815C10.8226 8.89842 10.8945 9.00704 10.9371 9.12401C10.9797 9.24098 11.0007 9.36631 11 9.5C11 9.63369 10.979 9.75902 10.9371 9.87599C10.8952 9.99296 10.8232 10.1016 10.7212 10.2018L2.17972 18.6491C1.94316 18.883 1.64746 19 1.29262 19C0.937786 19 0.633639 18.8747 0.380184 18.624C0.126728 18.3734 0 18.0809 0 17.7467C0 17.4125 0.126728 17.1201 0.380184 16.8694L7.83179 9.5L0.380184 2.13061C0.143625 1.89666 0.0253448 1.60823 0.0253448 1.26533C0.0253448 0.922428 0.152073 0.62598 0.405529 0.37599C0.658985 0.12533 0.954683 0 1.29262 0C1.63057 0 1.92626 0.12533 2.17972 0.37599Z"
            fill="white" />
        </svg></a>
    </div>
  </div>
</div>
<?php

get_footer();
