<?php get_header(); ?>
page-allpages.php




<?php
global $page;
$args = array('pagess_per_page' => 4);
$mypages = get_pages($args);
foreach ($mypages as $page) {
  setup_pagedata($page);
?>
  <div class="item">

    <p>サムネイル</p>
    <?php the_page_thumbnail(); ?>

    <p>記事リンク</p>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

    <p>投稿日</p>
    <?php the_time('Y.m.d') ?>

    <p>カテゴリー</p>
    <?php the_category(',') ?>

  </div>
<?php
}
wp_reset_pagedata();
?>
<?php get_footer(); ?>
