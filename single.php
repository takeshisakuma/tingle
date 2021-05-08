<?php get_header(); ?>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      <div class="headerArea--normal">
        <h1 class="headerArea__mainHeading"><?php the_title(); ?> </h1>
      </div>
    </div>
  </div>
</div>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      <div class="contentArea--normal">
        <p class="single__thumb">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full'); ?>
          <?php else : ?>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noimage.jpg" alt="noimage" />
          <?php endif; ?>
        </p>
        <div class="single__mainText">
          <?php the_content(); ?>
        </div>
        <div class="single__data">
          <p>投稿日:<?php the_time('Y年m月d日'); ?></p>
          <?php if (get_the_modified_date('Ymd') > get_the_date('Ymd')) : ?>
            <p>更新日:
              <time datetime="<?php echo get_the_modified_date('Y年m月d日'); ?>"><?php echo get_the_modified_date('Y年m月d日'); ?></time>
            </p>
          <?php endif ?>
          <p>カテゴリー</p>
          <ul>
            <?php
            $categories = get_the_category();
            foreach ($categories as $category) {
              echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
            }
            ?>
          </ul>
          <p>タグ</p>
          <?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <p><?php the_author_posts_link(); ?></p>
            <?php endwhile; ?>
          <?php else : ?>
          <?php endif; ?>
          <?php
          $year   = get_the_date('Y');
          $month  = get_the_date('m');
          ?>
          <p>
            <a href="<?php echo get_month_link($year, $month); ?>">
              <?php echo $year . "年" . $month . "月の投稿"; ?>
            </a>
          </p>
        </div>
        </article>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
