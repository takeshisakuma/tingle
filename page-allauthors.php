<?php get_header(); ?>
<?php get_template_part('breadcrumb'); ?>





<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      page-allauthors.php

      <h1 class="">全著者一覧</h1>

      <?php $users = get_users(array(
        'orderby' => 'ID',
        'order' => 'ASC',
      )); ?>
      <ul class="users_list">
        <?php foreach ($users as $user) {
          $uid = $user->ID; ?>
          <li>
            <a href="<?php echo get_bloginfo("url") . '/?author=' . $uid ?>"><?php echo $user->display_name; ?></a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>


















<?php get_footer(); ?>
