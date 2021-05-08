<?php get_header(); ?>




<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      <div class="headerArea--normal">
        <h1 class="headerArea__mainHeading"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?>の投稿一覧</h1>
      </div>

    </div>
  </div>
</div>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">

      <div class="contentArea--normal">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <p>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </p>

          <?php endwhile;
        else : ?>
        <?php endif; ?>






      </div>
    </div>
  </div>

</div>

















<?php get_footer(); ?>
