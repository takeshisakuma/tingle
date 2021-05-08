<?php get_header(); ?>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      <div class="headerArea--normal">
        <h1 class="headerArea__mainHeading">固定ページ一覧</h1>
      </div>
    </div>
  </div>
</div>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      <div class="contentArea--normal">
        <?php
        global $post;
        $args = array('posts_per_page' => -1);
        $myposts = get_pages($args);
        foreach ($myposts as $post) {
          setup_postdata($post);
        ?>
          <div class="archive__item">

            <div class="archive__thumb ">
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
                <p>投稿日</p>
                <?php the_time('Y.m.d') ?>
                <p>カテゴリー</p>
                <?php the_category(',') ?>
                投稿者：<?php the_author_posts_link(); ?>
              </div>
            </div>
          </div>
        <?php
        }
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
