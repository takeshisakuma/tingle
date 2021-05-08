<nav class="breadcrumb">
  <div class="contentWidth">
    <ul>

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
        <li>
          <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
        </li>


        <?php // 投稿一覧
        ?>
        <li>
          投稿一覧
        </li>

        <?php // 固定ページ一覧(固定ページallpages)++++++++++++++++++++++
        ?>

      <?php elseif (is_page('allpages')) : ?>

        <?php // トップページ
        ?>
        <li>
          <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
        </li>

        <?php // 固定ページ一覧
        ?>
        <li>固定ページ一覧
        </li>

        <?php // その他の固定ページ++++++++++++++++++++++
        ?>

      <?php elseif (is_page()) : ?>

        <?php if (is_front_page()) : ?>

          <?php // フロントページの場合はパンくずなし
          ?>

        <?php else : ?>

          <?php // トップページ
          ?>
          <li>
            <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
          </li>

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

            echo '<li><a href="' . $parent_url . '">' .  $parent_title . '</a></li>';
          }
          ?>

          <?php // 現在のページタイトル
          ?>
          <li><?php the_title(); ?></li>

        <?php endif; ?>

      <?php endif; ?>


      <?php // 一覧ページ系-----------------------------------------------------------
      ?>


      <?php // 同じカテゴリーの記事一覧++++++++++++++++++++++++
      ?>

      <?php if (is_category()) : ?>

        <?php // トップページ
        ?>
        <li>
          <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
        </li>

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

            '<li><a href="'
            .<?php echo get_category_link($ancestor); ?>.
            '"><?php echo get_cat_name($ancestor); ?></a></li>"

        <?php endforeach;
        endif; ?>

        <?php // 現在のカテゴリー名
        ?>
        <li><?php single_cat_title(); ?></li>
      <?php endif; ?>


      <?php // 同じタグの記事一覧++++++++++++++++++++++++
      ?>

      <?php if (is_tag()) : ?>

        <?php // トップページ
        ?>
        <li>
          <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
        </li>

        <?php // 現在のカテゴリー名
        ?>
        <li><?php single_tag_title(); ?></li>
      <?php endif; ?>


      <?php // 著者別一覧+++++++++++++++++++++++++++
      ?>

      <?php if (is_author()) : ?>

        <?php // トップページ
        ?>
        <li>
          <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
        </li>

        <?php // 著者名
        ?>
        <li>「<?php the_author(); ?>」の投稿一覧</li>

      <?php endif; ?>



      <?php // タクソノミー別一覧+++++++++++++++++++++++++++
      ?>

      <?php if (is_tax()) : ?>

        <?php // トップページ
        ?>
        <li>
          <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
        </li>

        <?php // ターム名
        ?>
        <li> 「<?php
              $my_terms = get_queried_object();
              echo  $my_terms->name;
              ?>」の投稿一覧</li>

      <?php endif; ?>


      <?php // 日付別一覧+++++++++++++++++++++++++++
      ?>

      <?php if (is_date()) : ?>

        <?php // トップページ
        ?>
        <li>
          <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
        </li>

        <?php // カテゴリー名
        ?>
        <li>「<?php the_time('Y年m月'); ?>」の記事</li>

      <?php endif; ?>


      <?php // 特定のカスタム投稿タイプ一覧+++++++++++++++++++++++++++
      ?>
      <?php if (is_post_type_archive()) : ?>

        <?php // トップページ
        ?>
        <li>
          <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
        </li>

        <?php // カスタム投稿タイプ名
        ?>
        <li><?php
            $post_type = get_post_type($post);
            $post_type_label = get_post_type_object($post_type)->label;
            echo $post_type_label . '一覧';
            ?>
        </li>
      <?php endif; ?>


      <?php // 検索結果ページ-----------------------------------------------------------
      ?>
      <?php if (is_search()) : ?>
        <li>
          <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
        </li>
        <li>
          <?php the_search_query(); ?>の検索結果
        </li>
      <?php endif; ?>

    </ul>
  </div>
</nav>
