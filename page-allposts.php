<?php get_header(); ?>





<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      page-allposts.php

      <h1 class="">投稿一覧</h1>

      <?php
      global $post;
      $args = array('posts_per_page' => 8);
      $myposts = get_posts($args);
      foreach ($myposts as $post) {
        setup_postdata($post);
      ?>
        <div class="pageAllposts__item">

          <div class="pageAllposts__thumb ">
            <?php the_post_thumbnail(); ?>
          </div>


          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

          <p>投稿日</p>
          <?php the_time('Y.m.d') ?>

          <p>カテゴリー</p>
          <?php the_category(',') ?>




          投稿者：<?php the_author_posts_link(); ?>

        </div>
      <?php
      }
      wp_reset_postdata();
      ?>

    </div>
  </div>
</div>


















<?php get_footer(); ?>
