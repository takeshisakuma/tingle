<?php
/*
 Template Name: 全タグ一覧
 Template Post Type: page
 */
?>

<?php get_header(); ?>

<?php
$tags = get_tags();
foreach ($tags as $tag) {
  echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
}
?>
<?php get_footer(); ?>
