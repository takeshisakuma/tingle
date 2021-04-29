<?php
/*
 Template Name: 全カテゴリ一覧
 Template Post Type: page
 */
?>

<?php get_header(); ?>

<?php
$categories = get_categories();
foreach ($categories as $category) {
  echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
}
?>
<?php get_footer(); ?>
