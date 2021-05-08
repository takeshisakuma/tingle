<?php get_header(); ?>


<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">

      <div class="headerArea--normal">


        <?php if (get_post_type()) {
          echo '<h1 class="headerArea__mainHeading">' . esc_html(get_post_type_object(get_post_type())->label) . 'のページ一覧</h1>';
        } else {
          echo '<h1 class="headerArea__mainHeading">' . esc_html(get_post_type_object(get_post_type())->label) . 'の記事は存在しませんでした。</h1>';
        }
        ?>



      </div>
    </div>
  </div>
</div>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">

      <div class="contentArea--normal">

        <table class="archiveItem__table">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <tr>
                <td>
                  <?php
                  echo get_post_meta($post->ID, 'product', true);
                  ?>
                </td>
                <td>
                  <?php
                  echo get_post_meta($post->ID, 'price', true);
                  ?>
                </td>
                <td>
                  <a href="<?php the_permalink(); ?>">詳細</a>
                </td>
              </tr>
            <?php endwhile; ?>
          <?php else : ?>

            <p><?php echo esc_html(get_post_type_object(get_post_type())->label); ?>の記事がありませんでした。</p>
          <?php endif; ?>
        </table>

      </div>
    </div>
  </div>
</div>



















<?php get_footer(); ?>
