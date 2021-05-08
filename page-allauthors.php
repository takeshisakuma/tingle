<?php get_header(); ?>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      <div class="headerArea--normal">
        <h1 class="headerArea__mainHeading">全著者一覧</h1>
      </div>
    </div>
  </div>
</div>

<div class="fullWidth">
  <div class="contentWidth">
    <div class="contentBlock">
      <div class="contentArea--normal">
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
</div>

<?php get_footer(); ?>
