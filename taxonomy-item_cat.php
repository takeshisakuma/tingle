<?php get_header(); ?>





<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      taxonomy-item_cat.php


      <h1>カテゴリー:<?php single_cat_title(); ?>の投稿一覧</h1>

    </div>
  </div>
</div>





<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">






      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>


          <?php the_excerpt(); ?>

        <?php endwhile; ?>


      <?php else : ?>

        <p>このカテゴリーの記事がありませんでした。</p>
      <?php endif; ?>



    </div>
  </div>
</div>










<?php get_footer(); ?>
