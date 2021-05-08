<?php get_header(); ?>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">


      <div class="headerArea--normal">
        <h1 class="headerArea__mainHeading"><?php the_search_query(); ?>の検索結果 : <?php echo $wp_query->found_posts; ?>件</h1>
      </div>
    </div>
  </div>
</div>



<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">

      <div class="contentArea--normal">
        <?php if (have_posts()) : ?>
          <ul>
            <?php while (have_posts()) : the_post() ?>
              <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </li>

            <?php endwhile; ?>
          </ul>
        <?php else : ?>
          <div class="post">
            <p>該当する記事がありません。</p>
          </div>
        <?php endif; ?>


      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
