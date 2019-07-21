<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pervee</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_enqueue_scripts(); wp_head(); ?>
  </head>
  <body>
    <header>
      <div class=main id=logo>
        <div><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Pervee"></div>
        <div><p>+380 689 89 90</p></div>
      </div>
      <div id=gray>
        <div id=searchline>
          <nav>
            <?php wp_nav_menu(array('menu_class'=>'menu', 'theme_location'=>'top')); ?>
          </nav>
          <div>
            <?php echo get_search_form(); ?>
          </div>
        </div>
