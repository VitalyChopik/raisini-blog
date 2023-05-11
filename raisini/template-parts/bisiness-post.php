<article class="swiper-slide bisiness__box">
  <?php the_post_thumbnail( 'full',['class' => "bisiness__box-img"] ); ?>
  <div class="bisiness__box-text">
    <?php  $category = get_the_category(); ?>
    <a href="<?php echo get_category_link($category[0]->cat_ID);?>" class="box__category bisiness__box-category">
    <?php  echo $category[0]->cat_name; ?>
    </a>
    <h3 class="bisiness__box-title"><a href="<?php the_permalink( );?>" class="bisiness__box-link"><?php the_title();?></a></h3>
    <div class="box__info bisiness__box-info"><span class="box__data bisiness__box-data"><?php the_time('F d'); ?></span><span class="box__read bisiness__box-read"><?php echo reading_time(); ?> mins read</span></div>
  </div>
  <a href="<?php the_permalink();?>" class="box__permalink"></a>
</article>