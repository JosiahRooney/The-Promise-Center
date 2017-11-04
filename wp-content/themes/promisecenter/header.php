<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Meta -->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />

  <!-- CSS -->
  <link href="https://fonts.googleapis.com/css?family=Raleway|Josefin+Slab|Sedgwick+Ave|Gloria+Hallelujah" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

  <div id="sidr">
    <div class="side-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dark.png" alt="">
    </div>
    <ul class="side-menu">
      <li><a href="#">Home</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Sermons</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Calendar</a></li>
      <li><a href="#">Groups</a></li>
      <li><a href="#">Give</a></li>
      <li><a href="#">Get the App</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <div class="side-social-icons social-icons">

      <div class="social-icon">
        <a href="#">
          <i class="fa fa-facebook-square" aria-hidden="true"></i>
        </a>
      </div>

      <div class="social-icon">
        <a href="#">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
      </div>

      <div class="social-icon">
        <a href="#">
          <i class="fa fa-vimeo-square" aria-hidden="true"></i>
        </a>
      </div>

      <div class="social-icon social-icon-phone">
        <a href="#">
          <i class="fa fa-phone" aria-hidden="true"></i>
        </a>
      </div>

      <div class="social-icon">
        <a href="#">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
        </a>
      </div>

    </div> <!-- social-icons -->
    <div class="side-footer container-fluid">
      <div class="row">
        <div class="col-md-12">
          <p><small>&copy; 2017 The Promise Center &mdash; All Rights Reserved</small></p>
        </div>
      </div>
    </div>
  </div>

  <div class="main">

  <header class="primary-header">

    <div class="container">

      <div class="header-row row">

        <div class="menu-container col-md-3 col-xs-2">

          <div class="menu-button">
            <a href="#" id="sidr-menu">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
          </div>

        </div> <!-- menu-container -->

        <div class="branding col-md-9">

          <img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-light.png" alt="The Promise Center Church Logo">

          <h1 class="site-title"><span>P</span>romise <span>C</span>enter</h1>

        </div> <!-- branding -->

        <div class="header-social-icons social-icons">

          <div class="social-icon">
            <a href="#">
              <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </a>
          </div>

          <div class="social-icon">
            <a href="#">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>

          <div class="social-icon">
            <a href="#">
              <i class="fa fa-vimeo-square" aria-hidden="true"></i>
            </a>
          </div>

          <div class="social-icon social-icon-phone">
            <a href="#">
              <i class="fa fa-phone" aria-hidden="true"></i>
            </a>
          </div>

          <div class="social-icon">
            <a href="#">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
            </a>
          </div>

        </div> <!-- social-icons -->

      </div> <!-- row -->

    </div> <!-- container -->

  </header>
