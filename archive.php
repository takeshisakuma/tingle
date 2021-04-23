archive.php
<?php get_header(); ?>

<?php get_template_part('mainmenu'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <p>ページタイトル</p>
    <?php the_title(); ?>
    <p>リンク</p>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

    <p>抜粋</p>
    <?php the_excerpt(); ?>

  <?php endwhile;
else : ?>
<?php endif; ?>

<?php get_footer(); ?>
