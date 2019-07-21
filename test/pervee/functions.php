<?php
register_nav_menus(array(
'top' => 'Верхнее меню'
));
add_theme_support( 'post-thumbnails' );
add_shortcode('hello_text', 'hello_short');
function hello_short() {
  return '<div class="test-shortcode">Hello World!</div>';
}
