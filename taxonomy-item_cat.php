<?php get_header(); ?>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      <div class="headerArea--normal">
        <h1 class="headerArea__mainHeading">カテゴリー:<?php single_cat_title(); ?>の投稿一覧</h1>
      </div>
    </div>
  </div>
</div>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      <div class="contentArea--normal">
        <ul>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </li>
            <?php endwhile; ?>
        </ul>
      <?php else : ?>
        <p>このカテゴリーの記事がありませんでした。</p>
      <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
