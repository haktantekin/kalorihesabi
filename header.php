<!DOCTYPE html>
<html lang="tr">

<head>
  <title><?php wp_title(); ?></title>
  <script>
    window.onload = function() {
      document.querySelector('.loader-container').style.display = 'none'
    };
  </script>
  <link href="<?php bloginfo('template_url'); ?>/assets/public/css/natkah-min.css" rel="stylesheet" rel="preload" as="style" onload="this.rel='stylesheet'" />
  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/assets/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php bloginfo('template_url'); ?>/assets/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/assets/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/faviconfavicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('template_url'); ?>/assets/favicon/manifest.json">
  <link rel="preconnect" href="https://yabancisozluk.com" />
  <link rel="dns-prefetch" href="https://yabancisozluk.com" />
  <meta name="msapplication-TileColor" content="#3572ba">
  <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/assets/favicon/ms-icon-144x144.png">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui" />
  <meta name="msapplication-TileColor" content="#3572ba" />
  <meta name="theme-color" content="#3572ba">
  <?php
  add_action('wp_head', 'insert_fb_in_head', 5);
  add_action('init', 'admin_bar');
  ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->

  <?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>


  <?php wp_head(); ?>
</head>

<body>
  <div class="loader-container">
    <div class="clock-loader"></div>
  </div>

  <header>
    <div class="container">
      <div class="header-flex">
        <div class="logo"><a href="/">Kalori Hesabı</a></div>
        <div class="nav-icon js-nav-icon">
          <i class="fas fa-ellipsis-v"></i>
        </div>
        <nav class="top-nav js-top-nav">
          <?php wp_nav_menu(array('theme_location' => 'Header')); ?>
        </nav>
      </div>

    </div>
  </header>
  <section class="header-bottom">
    <div class="container">
      <div class="header-bottom-flex">
        <div class="search">
          <form method="get" action="<?php bloginfo('url'); ?>">
            <input class="search-text" type="text" placeholder="Arama Yap..." autocomplete="off" list="searchtext_s" name="s" />
            <div class="input-button">
              <button class="search-button" type="button" src="<?php bloginfo('url'); ?>">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </form>
        </div>
        <div class="social">
          <ul>
            <li>
              <a href="https://www.facebook.com/kalorihesabi/" target="_blank" rel="nofollow"><i class="fa-brands fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="https://www.instagram.com/kalorihesabicom/" target="_blank" rel="nofollow"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li>
              <a href="https://tr.pinterest.com/kalorihesabi/" target="_blank" rel="nofollow"><i class="fa-brands fa-pinterest"></i></a>
            </li>
            <li>
              <a href="https://medium.com/@kalorihesabicom" target="_blank" rel="nofollow"><i class="fa-solid fa-link"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </section>
  <main>
    <div class="container">