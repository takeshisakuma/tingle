<?php get_header(); ?>


<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      <div class="headerArea--normal">
        <h1 class="headerArea__mainHeading"><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</div>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      <div class="contentArea--normal">
        <table class="singleItem__table">
          <tr>
            <th>品番</th>
            <td><?php
                echo get_post_meta($post->ID, 'product_number', true);
                ?></td>
          </tr>

          <tr>
            <th>価格</th>
            <td><?php
                echo get_post_meta($post->ID, 'price', true);
                ?></td>
          </tr>
          <tr>
            <th>商品説明</th>
            <td> <?php the_content(); ?>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
