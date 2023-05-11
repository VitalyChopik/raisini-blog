<article class="big-post__wrapper featured-article__post">
<?php the_post_thumbnail( 'full', ['class' => "big-post__img featured-article__img"] ); ?>
  <div class="big-post__content featured-article__post-content">
  <?php  $category = get_the_category(); ?>
    <a href="<?php echo get_category_link($category[0]->cat_ID);?>" class="big-post__category featured-article__post-category"><?php  echo $category[0]->cat_name; ?></a>
    <h3 class="big-post__title featured-article__post-title"><a href="<?php the_permalink( );?>"><?php the_title();?></a></h3>
    <div class="big-post__info featured-article__post-info">
      <span class="big-post__date featured-article__post-date"><?php the_time('F d'); ?></span>
      <span class="big-post__read featured-article__post-read"> <?php echo reading_time(); ?> mins read</span>
    </div>
  </div>
  <a href="<?php the_permalink();?>" class="box__permalink"></a>
</article>