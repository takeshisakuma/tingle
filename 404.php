<?php get_header(); ?>
<?php get_template_part('breadcrumb'); ?>



<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      404

      <h1>お探しのページは存在しません。</h1>

      <p><?php echo get_pagenum_link(); ?>は存在しませんでした。</p>

      <p><a href="<?php bloginfo('url') ?>">トップページに戻る</a></p>

    </div>
  </div>
</div>










<?php get_footer(); ?>
