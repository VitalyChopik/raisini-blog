<article class="box__post single__box">
  <div class="box__image single__box-image">
      <?php the_post_thumbnail( 'full', ['class' => "box__img single__box-img"] ); ?>
    </div>
  <div class="box__text single__box-text">
  <?php  $category = get_the_category(); ?>
    <a href="<?php echo get_category_link($category[0]->cat_ID);?>"
      class="box__category single__box-category"><?php  echo $category[0]->cat_name; ?></a>
    <h3 class="box__title single__box-title">
      <a href="<?php the_permalink( );?>" class="box__link single__box-link"><?php the_title();?></a>
      </h3>
    <div class="box__info single__box-info"><span class="box__data single__box-date"><?php the_time('F d'); ?></span><span
        class="box__read single__box-read"><?php echo reading_time(); ?> mins read</span></div>
  </div>
  <a href="<?php the_permalink();?>" class="box__permalink"></a>
</article>