<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="<?php bloginfo('keywords'); ?>"><!-- サイトのキーワードになるのでALL in One SEOを使う時は消す -->
  <meta name="description" content="<?php bloginfo('description'); ?>"><!-- サイトのディスクリプションになるのでALL in One SEOを使う時は消す -->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?php the_title() ?>" />
  <meta property="og:description" content="<?php echo wp_trim_words($post->post_content, 100, '…') ?>" />
  <meta property="og:image" content="https://xxxx.com/ogimage.png" /><!-- 直書き(1200px X 630px) -->
  <meta property="og:url" content="<?php the_permalink() ?>" />
  <meta property="og:site_name" content="<?php the_title() ?>" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@twitterアカウント" /><!-- 変更必須 -->
  <meta name="format-detection" content="email=no,telephone=no,address=no" />
  <meta name="theme-color" content="#2c3e50">
  <link rel="canonical" href="<?php echo ("http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>" />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <?php wp_head(); ?>
</head>

<body>
  <header>


  </header>
