<?php
  $args = array(
    //設置場所
    'theme_location' => 'submenu',

    //ulを囲む親要素のタグ名(div or nav)
    'container' => 'nav',

    //containerで指定したタグに付けるクラス名(半角スペースで複数指定可)menu-{メニューのスラッグ}-containerの形
    'container_class' => 'mainmenu_nav',

    //containerで指定したタグに付けるID
    'container_id' => '',

    //ulに付けるクラス名(半角スペースで複数指定可)
    'menu_class' => '',

    //ulに付けるID{メニューのスラッグ}-{連番}
    'menu_id' => '',

    //各テキストリンクの前に付けるテキスト
    'before' => '',

    //各テキストリンクの後に付けるテキスト
    'after' => '',

    //aタグの前に付けるテキスト
    'link_before' => '',

    //aタグの後に付けるテキスト
    'link_after' => '',


    'menu'            => '',

    'fallback_cb'     => 'wp_page_menu',

    'echo'            => true,

    'depth'           => 0,

    'walker'          => '',

    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  );


  wp_nav_menu($args);
