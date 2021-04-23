<?php get_header(); ?>
<?php include('mainmenu.php'); ?>
<h2>タグ：<?php single_tag_title(); ?>の投稿一覧</h2>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <p>記事タイトル</p>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

    <p>抜粋</p>
    <?php the_excerpt(); ?>

  <?php endwhile;
else : ?>
<?php endif; ?>
<?php get_footer(); ?>
