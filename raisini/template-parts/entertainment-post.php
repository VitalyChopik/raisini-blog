<div class="box__post entertainment__box <?php echo $args['class']; ?>">
  <div class="box__image entertainment__box-image">
    <?php the_post_thumbnail( 'full', ['class' => "entertainment__box-img box__img"] ); ?>
  </div>
  <div class="box__text entertainment__box-text">
  <?php  $category = get_the_category(); ?>
    <a href="<?php echo get_category_link($category[0]->cat_ID);?>" class="box__category entertainment__box-category"><?php  echo $category[0]->cat_name; ?></a>
    <h3 class="box__title entertainment__box-title"><a href="<?php the_permalink( );?>"
        class="box__link entertainment__box-link"><?php the_title();?>
      </a></h3>
    <div class="box__info entertainment__box-info"><span class="box__data entertainment__box-data"><?php the_time('F d'); ?></span><span class="box__read entertainment__box-read"><?php the_field('mins_read');?> mins read</span></div>
  </div>
</div>