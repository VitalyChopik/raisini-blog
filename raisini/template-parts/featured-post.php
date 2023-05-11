<article class="swiper-slide big-post__wrapper featured__box">
  <?php the_post_thumbnail( 'full', ['class' => "big-post__img featured__box-img"] ); ?>
  <div class="big-post__content featured__box-content">
  <?php  $category = get_the_category(); ?>
    <a href="<?php echo get_category_link($category[0]->cat_ID);?>" class="big-post__category featured__post-category"><?php  echo $category[0]->cat_name; ?></a>
    <h3 class="big-post__title featured__post-title"><a href="<?php the_permalink( );?>"><?php the_title();?></a></h3>
    <div class="big-post__info featured__post-info">
      <span class="big-post__date featured__post-date"><?php the_time('F d'); ?></span>
      <span class="big-post__read featured__post-read"> <?php echo reading_time(); ?> mins read</span>
    </div>
  </div>
  <a href="<?php the_permalink();?>" class="box__permalink"></a>
</article>