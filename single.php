<?php get_header(); ?>







<?php get_sidebar(); ?>


<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      single.php


      <h1 class="page__heading1"><?php the_title(); ?> </h1>




      <p>カテゴリー</p>
      <?php
      $categories = get_the_category();
      foreach ($categories as $category) {
        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
      }
      ?>


      <p>投稿日:<?php the_time('Y年m月d日'); ?></p>


      <p>更新日:
        <?php if (get_the_modified_date('Ymd') > get_the_date('Ymd')) : ?>
          <time datetime="<?php echo get_the_modified_date('Y年m月d日'); ?>">更新：<?php echo get_the_modified_date('Y年m月d日'); ?></time>
        <?php endif ?>
      </p>

      <p>サムネイル</p>
      <?php the_post_thumbnail('full'); ?>


      <?php the_content(); ?>








      <p>タグ</p>
      <?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>


      <p>この著者の他の記事</p>

      <p>Other posts by <?php the_author_posts_link("user"); ?></p>

      <?php the_author_link(); ?>
      <?php the_author(); ?>

      <?php the_author_link(); ?>
      <?php the_author_posts_link(); ?>
      <p>同じ月の投稿</p>

      <ul><?php wp_get_archives('yearly'); ?></ul>
      </article>


    </div>
  </div>
</div>















<?php get_footer(); ?>
