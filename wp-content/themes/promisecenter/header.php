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
    <ul>
      <li><a href="#">List 1</a></li>
      <li><a href="#">List 2</a></li>
      <li><a href="#">List 3</a></li>
    </ul>
  </div>

  <header class="primary-header">

    <div class="container">

      <div class="row">

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

      </div> <!-- row -->

    </div> <!-- container -->

  </header>

  <div class="main">
