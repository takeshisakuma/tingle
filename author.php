<?php get_header(); ?>

<?php get_template_part('mainmenu'); ?>

author.php


<h2>著者：<?php the_author_meta('display_name', $author); ?>の投稿一覧</h2>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php the_excerpt(); ?>

  <?php endwhile;
else : ?>


<?php endif; ?>

<?php get_footer(); ?>
