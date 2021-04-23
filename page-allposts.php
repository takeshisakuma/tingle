<?php get_header(); ?>
page-allposts.php

<?php
global $post;
$args = array('posts_per_page' => 8);
$myposts = get_posts($args);
foreach ($myposts as $post) {
  setup_postdata($post);
?>
  <div class="item">

    <p>サムネイル</p>
    <?php the_post_thumbnail(); ?>

    <p>記事リンク</p>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

    <p>投稿日</p>
    <?php the_time('Y.m.d') ?>

    <p>カテゴリー</p>
    <?php the_category(',') ?>

  </div>
<?php
}
wp_reset_postdata();
?>
<?php get_footer(); ?>
