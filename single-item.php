<?php get_header(); ?>

<?php get_template_part('breadcrumb'); ?>

single-item.php<br>


<table>
  <tr>
    <td>商品名</td>
    <td>
      <?php the_title(); ?>
    </td>
  </tr>

  <tr>
    <td>品番</td>
    <td><?php
        echo get_post_meta($post->ID, 'product_number', true);
        ?></td>
  </tr>

  <tr>
    <td>価格</td>
    <td><?php
        echo get_post_meta($post->ID, 'price', true);
        ?></td>
  </tr>

  <tr>
    <td>商品説明</td>
    <td> <?php the_content(); ?>
  </tr>




</table>




<?php get_footer(); ?>
