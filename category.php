<?php get_header(); ?>
cat.php

<h2>カテゴリー<?php single_cat_title(); ?>の投稿一覧</h2>

<?php the_archive_title(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <p>記事タイトル</p>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

    <p>抜粋</p>
    <?php the_excerpt(); ?>

  <?php endwhile;
else : ?>
<?php endif; ?>

<?php get_footer(); ?>
