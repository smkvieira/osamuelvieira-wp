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
  <header>
    <nav>
      <div class="navbar container">
        <div class="texto-branding cor-c9"><a href="/">Samuel Vieira</a></div>
        <div class="navbar-menu">
          <ul class="texto-m">
            <li><a href="#experiencias">Experiência</a></li>
            <li><a href="#formacao">Formação</a></li>
            <li><a href="#contato">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>