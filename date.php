<?php get_header(); ?>
<?php get_template_part('breadcrumb'); ?>




<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      date.php

      <h1><?php the_time('Y年m月'); ?>の投稿一覧</h1>
    </div>
  </div>
</div>





<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">






      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>


          <?php the_excerpt(); ?>

        <?php endwhile;
      else : ?>
      <?php endif; ?>



    </div>
  </div>
</div>















<?php get_footer(); ?>
