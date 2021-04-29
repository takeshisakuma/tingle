<div>
  <?php if (is_home()) : ?>
    ホーム○
  <?php else : ?>
    ホームX
  <?php endif; ?>
</div>
<div>
  <?php if (is_front_page()) : ?>
    フロントページ○
  <?php else : ?>
    フロントページX
  <?php endif; ?>
</div>
<div>
  <?php if (is_single()) : ?>
    個別記事ページ○
  <?php else : ?>
    個別記事ページX
  <?php endif; ?>
</div>
<div>
  <?php if (is_page()) : ?>
    固定ページ○
  <?php else : ?>
    固定ページX
  <?php endif; ?>
</div>
<div>
  <?php if (is_category()) : ?>
    カテゴリー一覧ページ○
  <?php else : ?>
    カテゴリー一覧ページX
  <?php endif; ?>
</div>
<div>
  <?php if (is_tag()) : ?>
    タグ一覧ページ○
  <?php else : ?>
    タグ一覧ページX
  <?php endif; ?>
</div>
<div>
  <?php if (is_post_type_archive()) : ?>
    カスタム投稿一覧ページ○
  <?php else : ?>
    カスタム投稿一覧ページX
  <?php endif; ?>
</div>
<div>
  <?php if (is_tax()) : ?>
    タクソノミー一覧ページ○
  <?php else : ?>
    タクソノミー一覧ページX
  <?php endif; ?>
</div>

<div>
  <?php if (is_author()) : ?>
    同じ作者の投稿一覧ページ○
  <?php else : ?>
    同じ作者の投稿一覧ページX
  <?php endif; ?>
</div>

<div>
  <?php if (is_date()) : ?>
    同じ日に公開された投稿の一覧ページ○
  <?php else : ?>
    同じ日に公開された投稿の一覧ページX
  <?php endif; ?>
</div>

<div>
  <?php if (is_month()) : ?>
    同じ月に公開された投稿の一覧ページ○
  <?php else : ?>
    同じ月に公開された投稿の一覧ページX
  <?php endif; ?>
</div>

<div>
  <?php if (is_year()) : ?>
    同じ年に公開された投稿の一覧ページ○
  <?php else : ?>
    同じ年に公開された投稿の一覧ページX
  <?php endif; ?>
</div>


<div>
  <?php if (is_archive()) : ?>
    一覧ページ○
  <?php else : ?>
    一覧ページX
  <?php endif; ?>
</div>

<div>
  <?php if (is_search()) : ?>
    検索結果ページ○
  <?php else : ?>
    検索結果ページX
  <?php endif; ?>
</div>


<div>
  <?php if (is_404()) : ?>
    404ページ○
  <?php else : ?>
    404ページX
  <?php endif; ?>
</div>
