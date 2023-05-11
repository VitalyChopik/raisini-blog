<article class="box__post music__box <?php echo $args['class']; ?>">
  <div class="box__image music__box-image">
    <?php the_post_thumbnail( 'full', ['class' => "music__box-img box__img"] ); ?>
  </div>
  <div class="box__text music__box-text">
  <?php  $category = get_the_category(); ?>
    <a href="<?php echo get_category_link($category[0]->cat_ID);?>" class="box__category music__box-category"><?php  echo $category[0]->cat_name; ?></a>
    <h3 class="box__title music__box-title"><a href="<?php the_permalink( );?>" class="box__link music__box-link"><?php the_title();?></a></h3>
    <div class="box__info music__box-info"><span class="box__data music__box-date"><?php the_time('F d'); ?></span><span
        class="box__read music__box-read"><?php echo reading_time(); ?> mins read</span></div>
  </div>
  <a href="<?php the_permalink();?>" class="box__permalink"></a>
</article>