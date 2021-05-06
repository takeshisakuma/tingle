<?php get_header(); ?>

tag.php




<h1>カテゴリー:<?php single_tag_title(); ?>の投稿一覧</h1>












<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>


    <?php the_excerpt(); ?>

  <?php endwhile; ?>

<?php else : ?>

  <p>このタグの記事がありませんでした。</p>

<?php endif; ?>
<?php get_footer(); ?>
