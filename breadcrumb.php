<section class="breadcrumb">

  <!-- homeなら -->

  <?php if (is_home()) : ?>
    <!-- パンくずなし -->
  <?php endif; ?>

  <!-- front-pageなら -->
  <?php if (is_front_page()) : ?>
    <!-- パンくずなし -->
  <?php endif; ?>






  <!-- 固定ページ系 -->

  <!-- 投稿一覧(固定ページallposts) -->
  <?php if (is_page('allposts')) : ?>
    <!-- トップページ -->
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>

    <!-- 投稿一覧 -->
    &gt; 投稿一覧

    <!-- 固定ページ一覧(固定ページallpages) -->
  <?php elseif (is_page('allpages')) : ?>

    <!-- トップページ -->
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>

    <!-- 固定ページ一覧 -->
    &gt; 固定ページ一覧

    <!-- その他の固定ページ -->



  <?php elseif (is_page()) : ?>

    <?php if (is_front_page()) : ?>
      <!-- パンくずなし -->
    <?php else : ?>

      <!-- トップページ -->
      <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
      <!-- 親ページ？ -->

      <!-- 現在のページタイトル -->
      &gt; <?php the_title(); ?>


    <?php endif; ?>


  <?php endif; ?>








  <!-- 一覧ページ系 -->

  <!-- category -->
  <?php if (is_category()) : ?>
    <!-- トップページ -->
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>

    <!-- カテゴリー名 -->
    &gt; 「<?php single_cat_title(); ?>」カテゴリー
  <?php endif; ?>


  <!-- author -->
  <?php if (is_author()) : ?>
    <!-- トップページ -->
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>

    <!-- 著者名 -->
    &gt; 「<?php the_author(); ?>」の投稿一覧

  <?php endif; ?>




  <!-- taxonomy -->
  <?php if (is_tax()) : ?>
    <!-- トップページ -->
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>

    <!-- ターム名 -->
    &gt; 「<?php
          $my_terms = get_queried_object();
          echo  $my_terms->name;
          ?>」の投稿一覧

  <?php endif; ?>



  <!-- date -->
  <?php if (is_date()) : ?>
    <!-- トップページ -->
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>

    <!-- カテゴリー名 -->
    &gt; 「<?php the_time('Y年m月'); ?>」の記事

  <?php endif; ?>

  <!-- 特定のカスタム投稿タイプ一覧 -->
  <?php if (is_post_type_archive()) : ?>
    <!-- トップページ -->
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
    <!-- カスタム投稿タイプ名 -->

    &gt;

    <?php
    $post_type = get_post_type($post);
    $post_type_label = get_post_type_object($post_type)->label;
    echo $post_type_label . '一覧';
    ?>




  <?php endif; ?>


  <!-- month -->
  <?php if (is_month()) : ?>
    <!-- トップページ -->
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>

    <!-- 月別アーカイブ -->
    &gt; <?php the_time('Y年m月'); ?>
  <?php endif; ?>

  <!-- singleなら -->
  <?php if (is_single()) : ?>
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>


    &gt;

    <?php
    $post_type = get_post_type($post);
    $post_type_label = get_post_type_object($post_type)->label;
    echo '<a href="/' .  $post_type . '/">' . $post_type_label . '</a>';
    ?>

    &gt; <?php $c = get_the_category();
          echo
          '<a href="' . get_category_link($c[0]->term_id) . '">' . $c[0]->name . '</a>'; ?>
    &gt;
    <?php the_title(); ?>
  <?php endif; ?>

  <!-- searchなら -->
  <?php if (is_search()) : ?>
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
    &gt; <?php the_search_query(); ?>の検索結果

  <?php endif; ?>


  <!-- 404なら -->
  <?php if (is_404()) : ?>
    <!-- パンくずなし -->

  <?php endif; ?>


</section>
