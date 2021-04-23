<?php

function theme_setup()
{
  //titleタグ出力
  add_theme_support('title-tag');
  //アイキャッチ有効化
  add_theme_support('post-thumbnails');

  //カスタムメニュー有効化
  register_nav_menu('mainmenu', 'メインメニュー');
  register_nav_menu('submenu', 'サブメニュー');
}
add_action('after_setup_theme', 'theme_setup');

//カスタム投稿タイムitemを追加
function register_custom_post_type_item()
{
  register_post_type('item', [
    'label' => '商品',
    'public' => true,
    'menu_position' => 2,
    'hierarchical' => true,
    'menu_icon' => 'dashicons-controls-play',
    'supports' => ['thumbnail', 'title', 'editor', 'page-attributes'],
    'has_archive' => true,
    'show_in_rest' => true,
  ]);
}
add_action('init', 'register_custom_post_type_item');

//カスタムタクソノミー追加
function create_book_taxonomies()
{
  register_taxonomy(
    //タクソノミーの名前
    'item_cat',
    //どの投稿タイプに追加するか
    'item',
    array(
      //階層をもつ
      'hierarchical' => true,
      //指定しないとコンマ区切りの複数の項目が、別々の値ではなく一つの値として保存されてしまう
      'update_count_callback' => '_update_post_term_count',
      //ダッシュボードに表示させる名前
      'label' => '商品のカテゴリー',
      //true にすると、タクソノミーは（パブリックに）検索可能
      'public' => true,
      //アーカイブページを持つ
      'has_archive' => true,
      //左メニューに表示
      'show_ui' => true,
      //ブロックエディタで表示
      'show_in_rest' => true,
    )
  );

  //タクソノミー追加
  register_taxonomy(
    /* タクソノミーの名前 */
    'item_tag',
    //どの投稿タイプに追加するか
    'item',
    array(
      //階層をもたない
      'hierarchical' => false,
      //指定しないとコンマ区切りの複数の項目が、別々の値ではなく一つの値として保存されてしまう
      'update_count_callback' => '_update_post_term_count',
      //ダッシュボードに表示させる名前
      'label' => '商品のタグ',
      //true にすると、タクソノミーは（パブリックに）検索可能
      'public' => true,
      //アーカイブページを持つ
      'has_archive' => true,
      //左メニューに表示
      'show_ui' => true,
      //ブロックエディタで表示
      'show_in_rest' => true,
    )
  );
}
add_action('init', 'create_book_taxonomies', 0);


//検索対象
function filter_search($query)
{
  if ($query->is_search() && $query->is_main_query() && !is_admin()) {
    $query->set('post_type', array('post', 'page', 'item'));
  }
}
add_filter('pre_get_posts', 'filter_search');
