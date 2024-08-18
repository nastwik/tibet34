<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
  <meta name="theme-color" content="#feed01" />
  <title>ВАРЯГ - Качественный бетон и спецтехника в Волгограде и Волжском</title>

  <!-- GOOGLE FONTS FILES -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <!-- FAVICON FILES -->
  <link href="<?=wp_get_attachment_image_url(carbon_get_theme_option( 'site_favicon' ), 'full' );?>" rel="shortcut icon">

  <!-- CSS FILES -->
  <?=wp_head();?>

</head>

<body>

  <div class="search-box">
    <div class="inner">
      <?php get_search_form( $args ); ?>
    </div>
  </div>

  <aside class="side-widget open">
	  <div class="inner">
			<div class="logo">
        <a href="/"><img src="<?=wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo_full' ), 'full' );?>" alt="Image"></a>
      </div>
      <div class="show-mobile">
        <div class="site-menu">
            <?php
                wp_nav_menu( [
                    'theme_location'  => 'menu_main_header',
                    'container'       => null,
                    'menu_class'      => '',
                ] );
            ?>
          <!-- <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="about.php">О компании</a></li>
            <li><a href="catalog.php">Каталог</a><i class="pointer"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="m12 15.5l4.5-4.5l-1.425-1.4L12 12.675L8.925 9.6L7.5 11zm0 6.5q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8"/></svg></i>
              <ul>
                <li><a href="concrete-delivery.php">Бетон</a></li>
                <li><a href="trade-concrete.php">Товарный бетон</a></li>
                <li><a href="">Усиленный бетон</a></li>
                <li><a href="">Цементный раствор</a></li>
                <li><a href="">Плитка, бордюры</a></li>
              </ul>
            <li><a href="rental-equipment.php">Аренда спецтехники</a></li>
            <li><a href="articles.php">Статьи</a></li>
            <li><a href="contact.php">Контакты</a></li>
          </ul> -->
        </div>
      </div>
		  <small>© 2024 Варяг | Разработка сайта <a href="https://flamingo.expert" target="_blank">Flamingo.expert</a></small>
		</div>
	</aside>

  <nav class="navbar">
    <div class="container">

      <div class="logo">
        <a href="/"><img src="<?=wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo_full' ), 'full' );?>" alt="Image"></a>
      </div>

      <div class="site-menu">
        <?php
            wp_nav_menu( [
                'theme_location'  => 'menu_main_header',
                'container'       => null,
                'menu_class'      => '',
            ] );
        ?>
        <!-- <ul>
          <li><a href="index.php">Главная</a></li>
          <li><a href="about.php">О компании</a></li>
          <li><a href="catalog.php">Каталог</a>
          <ul>
              <li><a href="concrete-delivery.php">Бетон</a></li>
              <li><a href="trade-concrete.php">Товарный бетон</a></li>
              <li><a href="">Усиленный бетон</a></li>
              <li><a href="">Цементный раствор</a></li>
              <li><a href="">Плитка, бордюры</a></li>
            </ul>
          </li>
          <li><a href="rental-equipment.php">Аренда спецтехники</a></li>
          <li><a href="articles.php">Статьи</a></li>
          <li><a href="contact.php">Контакты</a></li>
        </ul> -->
      </div>

      <div style="display: flex; gap: 30px; justify-content: center">
        <div class="search">
          <span class="material-symbols-outlined">Search</span>
        </div>
        
        <?
          if(carbon_get_theme_option('site_phone')) {
              ?>
                <a class="navbar-button hiden" href="tel:<?=carbon_get_theme_option('site_phone_digits')?>"><?=carbon_get_theme_option('site_phone')?></a>
              <?
          }
        ?>

        <div class="open">
          <div class="hamburger">
            <div id="hamburger">
              <span></span><span></span><span></span>
            </div>
            <div id="cross">
              <span></span> <span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>