<?php get_header(); ?>

<?php get_template_part('mainmenu'); ?>


front.php

<h1>トップページです。</h1>

<a href="/allposts/">投稿一覧へ</a>



<?php
if (have_posts()) :
  while (have_posts()) : the_post();
?>
    <article id="entry_article">
      <p>タイトル</p>
      <?php the_title(); ?>


      <p>カテゴリー</p>
      <?php
      $categories = get_the_category();
      foreach ($categories as $category) {
        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
      }
      ?>


      <p>日付</p>
      <?php the_time('Y年m月d日'); ?>

      <p>サムネイル</p>
      <?php the_post_thumbnail('full'); ?>

      <p>本文</p>
      <?php the_content(); ?>

      <p>サイト名</p>
      <?php bloginfo('name'); ?>

      <p>サイトURL</p>
      <?php bloginfo('url'); ?>

      <p>キャッチフレーズ</p>
      <?php bloginfo('description'); ?>

      <a href="<?php the_permalink(); ?>">続きを読む</a>

      <p>テーマディレクトリ</p>
      <?php echo esc_url(get_template_directory_uri()); ?>



      <p>更新日</p>
      <?php if (get_the_modified_date('Ymd') > get_the_date('Ymd')) : ?>
        <time datetime="<?php echo get_the_modified_date('Y年m月d日'); ?>">更新：<?php echo get_the_modified_date('Y年m月d日'); ?></time>
      <?php endif ?>
      <p>タグ</p>
      <?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>
      <p>本文の抜粋</p>
      <?php the_excerpt(); ?>

      <p>この著者の他の記事</p>
      <?php the_author_posts_link(); ?>

      <p>同じ月の投稿</p>


      <ul><?php wp_get_archives('yearly'); ?></ul>
    </article>






    <?php
    echo get_post_meta($post->ID, '商品名', true);
    ?>




<?php
  endwhile;
endif;
?>




















<?php include('submenu.php'); ?>

<?php get_footer(); ?>
