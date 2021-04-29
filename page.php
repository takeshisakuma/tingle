<?php get_header(); ?>

<?php get_template_part('breadcrumb'); ?>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      page.php

      <h1 class="page__heading1"><?php the_title(); ?> </h1>

    </div>
  </div>
</div>


<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">


      <?php the_content(); ?>


    </div>
  </div>
</div>





<?php get_footer(); ?>
