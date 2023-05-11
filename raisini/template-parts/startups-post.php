<article class="box__post startups__box <?php echo $args['class']; ?>">
  <div class="box__image startups__box-image"><?php the_post_thumbnail( 'full', ['class' => "startups__box-img box__img"] ); ?></div>
  <div class="box__text startups__box-text">
  <?php  $category = get_the_category(); ?>
    <a href="<?php echo get_category_link($category[0]->cat_ID);?>" class="box__category startups__box-category"><?php  echo $category[0]->cat_name; ?></a>
    <h3 class="box__title startups__box-title"><a href="<?php the_permalink( );?>"
        class="box__link startups__box-link"><?php the_title();?></a></h3>
    <div class="box__info startups__box-info"><span class="box__data startups__box-data"><?php the_time('F d'); ?></span><span class="box__read startups__box-read"><?php echo reading_time(); ?> mins read</span></div>
  </div>
  <a href="<?php the_permalink();?>" class="box__permalink"></a>
</article>