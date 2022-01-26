<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    if ( ! function_exists( '_wp_render_title_tag' ) ) {
	    function theme_slug_render_title() {
  ?>
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <?php
    }
      add_action( 'wp_head', 'theme_slug_render_title' );
    }
  ?>
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">

  <!-- Header Wordpress -->
  <?php wp_head(); ?>
</head>

<body>

<header class="container">
      <div id="brand"><a href="/">Samuel Vieira</a></div>
      <nav>
      <?php
        wp_nav_menu( array(
            'theme_location'  => 'header',
        ) );
      ?>
        <!-- <ul>
          <li><a href="/home">Home</a></li>
          <li><a href="/products">Products</a></li>
          <li><a href="/about">About</a></li>
          <li id="login"><a href="/login" >Login</a></li>
          <li id="signup"><a href="/signup">Signup</a></li>
        </ul> -->
      </nav>
      <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="mobile-menu">
        <?php
        wp_nav_menu( array(
            'theme_location'  => 'mobile',
        ) );
        ?>
        </div>
        <!-- <ul class="mobile-menu">
          <li><a href="/home">Home</a></li>
          <li><a href="/products">Products</a></li>
          <li><a href="/about">About</a></li>
          <li id="login"><a href="/login" >Login</a></li>
          <li id="signup"><a href="/signup">Signup</a></li>
        </ul> -->
      </div>
    </header>