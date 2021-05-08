<?php
/*
 Template Name: 全タグ一覧
 Template Post Type: page
 */
?>

<?php get_header(); ?>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      <div class="headerArea--normal">
        <h1 class="headerArea__mainHeading">すべてのタグ</h1>
      </div>
    </div>
  </div>
</div>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      <div class="contentArea--normal">
        <?php
        $tags = get_tags();
        foreach ($tags as $tag) {
          echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
        }
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
