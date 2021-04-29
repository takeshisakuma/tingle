<?php get_header(); ?>




<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      archive-news.php

      <h1>投稿タイプ:<?php echo get_post_type(); ?>の投稿一覧</h1>







      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

          <?php the_excerpt(); ?>

        <?php endwhile;
      else : ?>
      <?php endif; ?>






    </div>
  </div>
</div>



















<?php get_footer(); ?>
