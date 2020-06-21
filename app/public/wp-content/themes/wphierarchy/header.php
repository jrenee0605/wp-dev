<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <?php wp_head(); ?>

  </head>
  <body <?php  body_class() ?>>

    <div id="page">

      <a href="#content" class="skip-link screen-reader-text">
        <?php esc_html_e( 'Skip to Content', 'wphierarchy' ); ?>
      </a>


    <header id="masthead" class="site-header" role="banner">
      <div class="site-branding">
        <p class="site-title">
          <a href="<?php echo esc_url( home_url( '/' ) ) ;?>" rel="home"</a>
          <?php bloginfo( 'name' ); ?>
        </p>
        <p class="site-description" >
          <?php bloginfo ( 'description' ); ?>
        </p>
      </div>

      <nav id="site-navigation" class="main-navigation" role="navigation">
        <?php
          $args = [
            'theme_location' => 'main-menu'
        ];
      wp_nav_menu( $args );

      ?>
    </nav>
    </header>

    <div id="content" class="site-content">
