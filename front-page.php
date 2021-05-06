<?php get_header(); ?>



<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      front.php

      <h1 class="frontPage__heading1">トップページです。</h1>

    </div>
  </div>
</div>


<div class="fullWidth">
  <div class="contentWidth">

    <div class="contentBlock">

      <h2>新着情報</h2>
      <?php
      $news_query = new WP_Query(
        array(
          'post_type'      => 'news',
          'posts_per_page' => 5,
        )
      );
      ?>


      <?php if ($news_query->have_posts()) : ?>
        <?php while ($news_query->have_posts()) : ?>
          <?php $news_query->the_post(); ?>

          <div>
            <?php the_date(); ?>

            <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
          </div>
        <?php endwhile; ?>

      <?php else : ?>
        <p>新着情報はありません</p>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</div>




<?php get_footer(); ?>
