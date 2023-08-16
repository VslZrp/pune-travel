<!doctype html>
<html <?php language_attributes(); ?>> 
  <head>
  <meta charset="<?php bloginfo('cahrset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <?php wp_head(); ?>
  <!-- <link rel="stylesheet" href="css/style.min.css?_v=20230814234258"> -->

  <title>Главная</title>
</head>
  <body>
    <div class="wrapper">
      <header class="header">
  <div class="header__container">
  
    <a href="#" class="header__logo logo"><?php the_field('logo', 24) ?></a>
    <!-- <a href="#" class="header__logo logo">PUNE</a> -->
    <nav class="header__menu menu">
      <ul class="menu__list">
        <li class="menu__item" data-scrollto=".fort">
          <a href="#" class="menu__link"><?php the_field('info', 24)?></a>
        </li>
        <li class="menu__item">
          <a href="#" class="menu__link" data-scrollto=".slider"><?php the_field('about_us', 24)?></a>
        </li>
        <li class="menu__item">
          <a href="#" class="menu__link" data-scrollto=".culture"><?php the_field('culture', 24)?></a>
        </li>
      </ul>
     
    </nav>
    <form action="#" class="header__search">
    <?php echo do_shortcode('[forminator_form id="33"]'); ?>

    </form>
    <button class="header__burger icon-menu">
  <span></span>
</button>
  </div>
</header>
