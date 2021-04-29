<?php get_header(); ?>




<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">

      single-news.php



      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
          <article class="singleNews__article">
            <p class="singleNews__date">投稿日:<?php the_time('Y年m月d日'); ?></p>

            <?php if (get_the_modified_date('Ymd') > get_the_date('Ymd')) : ?>
              <p class=" singleNews__date>最終更新日:
        <time datetime=" <?php echo get_the_modified_date('Y年m月d日'); ?>">更新：<?php echo get_the_modified_date('Y年m月d日'); ?></time>
              </p>
            <?php endif ?>

            <h1><?php the_title(); ?></h1>


            <?php the_post_thumbnail('full'); ?>


            <?php the_content(); ?>




        <?php
        endwhile;
      endif;
        ?>

          </article>
    </div>
  </div>

</div>


<?php get_footer(); ?>
