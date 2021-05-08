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
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="archive__item">
              <div class="archive__thumb">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noimage.jpg" alt="noimage" />
                <?php endif; ?>
              </div>

              <div class="archive__infomation">
                <p class="archive__heading">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </p>

                <div class="archive__data">
                  <p>投稿日:
                    <?php the_time('Y.m.d') ?>
                  </p>
                  投稿者：<?php the_author_posts_link(); ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <p>このカテゴリーの記事がありませんでした。</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
