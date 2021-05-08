<?php
/*
 Template Name: 全カテゴリ一覧
 Template Post Type: page
 */
?>

<?php get_header(); ?>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      <div class="headerArea--normal">
        <h1 class="headerArea__mainHeading">すべてのカテゴリー</h1>
      </div>
    </div>
  </div>
</div>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      <div class="contentArea--normal">
        <?php
        $categories = get_categories();
        foreach ($categories as $category) {
          echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
        }
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
