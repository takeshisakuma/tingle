<section class="breadcrumb">


  <?php // パンくず無し系-----------------------------------------------------------
  ?>

  <?php if (is_home()) : ?>
  <?php endif; ?>

  <?php if (is_front_page()) : ?>
  <?php endif; ?>

  <?php if (is_404()) : ?>
  <?php endif; ?>


  <?php // 固定ページ系-----------------------------------------------------------
  ?>


  <?php // 投稿一覧(固定ページallposts)++++++++++++++++++++++
  ?>

  <?php if (is_page('allposts')) : ?>

    <?php // トップページ
    ?>
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>

    <?php // 投稿一覧
    ?>
    &gt; 投稿一覧


    <?php // 固定ページ一覧(固定ページallpages)++++++++++++++++++++++
    ?>

  <?php elseif (is_page('allpages')) : ?>

    <?php // トップページ
    ?>
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>

    <?php // 固定ページ一覧
    ?>
    &gt; 固定ページ一覧

    <?php // その他の固定ページ++++++++++++++++++++++
    ?>

  <?php elseif (is_page()) : ?>

    <?php if (is_front_page()) : ?>

      <?php // フロントページの場合はパンくずなし
      ?>

    <?php else : ?>

      <?php // トップページ
      ?>
      <a href="<?php echo esc_url(home_url()); ?>">HOME</a>

      <?php // 親ページがある場合
      ?>
      <?php
      //親階層の数を取得
      $parent_number = count($post->ancestors);

      for ($i = 1; $i <=  $parent_number; $i++) {

        //親ページのIDを取得
        $parent_id = $post->ancestors[count($post->ancestors)  - $i];

        //親ページのタイトルを取得して表示
        $parent_title = get_post($parent_id)->post_title;

        // 親ページの URL を表示
        $parent_url = get_permalink($parent_id);

        echo '&gt; <a href="' . $parent_url . '">' .  $parent_title . '</a>';
      }
      ?>

      <?php // 現在のページタイトル
      ?>
      &gt; <?php the_title(); ?>

    <?php endif; ?>

  <?php endif; ?>






  <?php // 一覧ページ系-----------------------------------------------------------
  ?>


  <?php // カテゴリー一覧++++++++++++++++++++++++
  ?>

  <?php if (is_category()) : ?>

    <?php // トップページ
    ?>
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>

    <?php
    // 現在のページの情報を取得
    $category = get_queried_object();

    // 親カテゴリーがある場合
    if ($category->parent != 0) :
      // 指定したカテゴリIDの親IDを取得[現在のカテゴリ,親,祖先]
      $ancestors_arr = get_ancestors($category->cat_ID, 'category');

      // 祖先から表示したいので配列を逆にする[祖先,親,現在のカテゴリ]
      $ancestors_arr = array_reverse($ancestors_arr);

      // ループで祖先から順にリンク、カテゴリ名を取得し表示
      foreach ($ancestors_arr as $ancestor) : ?>

        &gt; <a href=<?php echo get_category_link($ancestor); ?>"><?php echo get_cat_name($ancestor); ?></a>

    <?php endforeach;
    endif; ?>

    <?php // 現在のカテゴリー名
    ?>
    &gt; 「<?php single_cat_title(); ?>」カテゴリー
  <?php endif; ?>


  <?php // 著者別一覧+++++++++++++++++++++++++++
  ?>

  <?php if (is_author()) : ?>

    <?php // トップページ
    ?>
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>


    <?php // 著者名
    ?>
    &gt; 「<?php the_author(); ?>」の投稿一覧

  <?php endif; ?>



  <?php // タクソノミー別一覧+++++++++++++++++++++++++++
  ?>

  <?php if (is_tax()) : ?>

    <?php // トップページ
    ?>
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>

    <?php // ターム名
    ?>
    &gt; 「<?php
          $my_terms = get_queried_object();
          echo  $my_terms->name;
          ?>」の投稿一覧

  <?php endif; ?>


  <?php // 日付別一覧+++++++++++++++++++++++++++
  ?>

  <?php if (is_date()) : ?>

    <?php // トップページ
    ?>
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>

    <?php // カテゴリー名
    ?>
    &gt; 「<?php the_time('Y年m月'); ?>」の記事

  <?php endif; ?>




  <?php // 特定のカスタム投稿タイプ一覧+++++++++++++++++++++++++++
  ?>
  <?php if (is_post_type_archive()) : ?>

    <?php // トップページ
    ?>
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>

    <?php // カスタム投稿タイプ名
    ?>
    &gt; <?php
          $post_type = get_post_type($post);
          $post_type_label = get_post_type_object($post_type)->label;
          echo $post_type_label . '一覧';
          ?>

  <?php endif; ?>


  <?php // month+++++++++++++++++++++++++++
  ?>
  <?php if (is_month()) : ?>

    <?php // トップページ
    ?>
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>

    <?php // 月別アーカイブ
    ?>
    &gt; <?php the_time('Y年m月'); ?>
  <?php endif; ?>

  <?php // singleなら
  ?>
  <?php if (is_single()) : ?>
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>

    &gt; <?php
          $post_type = get_post_type($post);
          $post_type_label = get_post_type_object($post_type)->label;
          echo '<a href="/' .  $post_type . '/">' . $post_type_label . '</a>';
          ?>

    &gt; <?php $c = get_the_category();
          echo
          '<a href="' . get_category_link($c[0]->term_id) . '">' . $c[0]->name . '</a>'; ?>

    &gt; <?php the_title(); ?>
  <?php endif; ?>




  <?php // 検索結果ページ-----------------------------------------------------------
  ?>
  <?php if (is_search()) : ?>
    <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
    &gt; <?php the_search_query(); ?>の検索結果

  <?php endif; ?>





</section>
