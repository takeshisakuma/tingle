<?php get_header(); ?>


<?php get_template_part('breadcrumb'); ?>


<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      page-item_tag.php

      <h1>itemのタグ一覧</h1>
    </div>
  </div>
</div>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">






      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


          <?php
          $terms = get_terms('item_tag');
          foreach ($terms as $term) {
            echo '<li><a href="' . get_term_link($term->slug, 'item_tag') . '">' . $term->name . '</a></li>';
          }
          ?>


        <?php endwhile;
      else : ?>
      <?php endif; ?>



    </div>
  </div>
</div>










<?php get_footer(); ?>
