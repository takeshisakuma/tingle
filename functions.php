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
    //'hierarchical' => true,
    'menu_icon' => 'dashicons-controls-play',
    'supports' => ['thumbnail', 'title', 'editor', 'page-attributes', 'custom-fields'],
    'has_archive' => true,
    //    'show_in_rest' => true,
  ]);

  register_post_type('news', [
    'label' => '新着情報',
    'public' => true,
    'menu_position' => 3,
    'menu_icon' => 'dashicons-controls-play',
    'supports' => ['thumbnail', 'title', 'editor', 'page-attributes'],
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

//ウィジェット有効化
function add_widget_area()
{
  register_sidebar(array(
    'name' => 'サイドバー1',
    'id' => 'sidebar1',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
}
add_action('widgets_init', 'add_widget_area');


//パンくずリスト有効化

// <title>タグのセパレーターを変更
function my_document_title_separator($sep)
{
  $sep = '｜';
  return $sep;
}
add_filter('document_title_separator', 'my_document_title_separator');

// titleのDescription削除
function remove_title_description($title)
{
  if (is_home() || is_front_page()) {
    unset($title['tagline']);
  }
  return $title;
}
add_filter('document_title_parts', 'remove_title_description', 10, 1);


// head 以外はタイトルのみを出力
function nohead_document_title($title)
{
  if (!doing_action('wp_head')) {
    //doing_actionで、wp_headから呼ばれていない場合を判別
    unset($title['site']); //サイトタイトルを削除
  }
  return $title;
}
add_filter('document_title_parts', 'nohead_document_title');



// 同じ日付でも日付を表示
function my_the_post()
{
  global $previousday;
  $previousday = '';
}
add_action('the_post', 'my_the_post');


//?author=x防止
function shapeSpace_check_enum($redirect, $request)
{
  // permalink URL format
  if (preg_match('/\?author=([0-9]*)(\/*)/i', $request)) die();
  else return $redirect;
}

if (!is_admin()) {
  // default URL format
  if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) die();
  add_filter('redirect_canonical', 'shapeSpace_check_enum', 10, 2);
}
