<article class="box__post category__box">
  <div class="box__image category__box-image">
  <?php the_post_thumbnail( 'full', ['class' => "box__img category__box-img"] ); ?>
  </div>
  <div class="box__text category__box-text">
  <?php  $category = get_the_category(); ?>
    <a href="<?php echo get_category_link($category[0]->cat_ID);?>" class="box__category category__box-category"><?php  echo $category[0]->cat_name; ?></a>
    <h3 class="box__title category__box-title"><a href="<?php the_permalink( );?>" class="box__link category__box-link"><?php the_title();?>
      </a></h3>
    <div class="box__info category__box-info"><span class="box__data category__box-data"><?php the_time('F d'); ?></span><span class="box__read category__box-read"><?php the_field('mins_read');?> mins read</span></div>
  </div>
</article>