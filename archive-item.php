<?php get_header(); ?>

<?php get_template_part('breadcrumb'); ?>



<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      archive-item.php

      <h1>投稿タイプ:<?php echo get_post_type(); ?>の投稿一覧</h1>


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







          <?php endwhile;
        else : ?>
        <?php endif; ?>


      </table>


    </div>
  </div>
</div>



















<?php get_footer(); ?>
