<?php get_header(); ?>


<?php get_template_part('breadcrumb'); ?>


<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      page-item_cat.php

      <h1>itemのカテゴリー一覧</h1>
    </div>
  </div>
</div>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">






      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


          <?php
          $terms = get_terms('item_cat');
          foreach ($terms as $term) {
            echo '<li><a href="' . get_term_link($term->slug, 'item_cat') . '">' . $term->name . '</a></li>';
          }
          ?>


        <?php endwhile;
      else : ?>
      <?php endif; ?>



    </div>
  </div>
</div>










<?php get_footer(); ?>
