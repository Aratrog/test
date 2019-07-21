<?php
/*
*Plugin Name: HelloAnton
*/

  add_filter('the_content','add_color_time');
  function add_color_time($content) {
    $one=date('gis');
    $final='<font color=#'.$one.'>Hello World!</font>';
    $slug = basename(get_permalink());
    if ('http://'.$slug == get_home_url() or 'https://'.$slug == get_home_url()){
      return $content.$final;
    }
    else {
      return $content;
    }
  }
?>
