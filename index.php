<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <p>タイトル</p>
    <?php the_title(); ?>

    <p>タイトルリンクあり</p>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

    <p>抜粋</p>
    <?php the_excerpt(); ?>

  <?php endwhile;
else : ?>
<?php endif; ?>




<?php get_footer(); ?>
