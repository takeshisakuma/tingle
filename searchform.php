<div class="header__searchbox">
  <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <div>
      <input type="text" value="<?php echo get_search_query(); ?>" name="s" />
      <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x('Search', 'submit button'); ?>" />
    </div>
  </form>
</div>
