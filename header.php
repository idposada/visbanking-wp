<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo esc_html( get_bloginfo()); ?> - <?php echo esc_html( get_the_title()); ?></title>

<?php wp_head(); ?></head>
<body>
  <header>
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper">
        <a href="<?php echo get_home_url(); ?>">
        <img src="<?php bloginfo('template_url'); ?>/img/logo-visbanking.png" alt="Visbanking Logo"></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">Services</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">The Company</a></li>
            <li><a href="<?php echo get_home_url(); ?>/insights">Insights</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#" class="waves-effect waves-light btn boton-login">LOG IN</a></li>
          </ul>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
      </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
    <img src="<?php bloginfo('template_url'); ?>/img/logo-visbanking.png" alt="Visbanking Logo">
    <hr>
    <li><a href="#">Services</a></li>
    <li><a href="#">Pricing</a></li>
    <li><a href="#">The Company</a></li>
    <li><a href="#">Insights</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="#" class="waves-effect waves-light btn boton-login">LOG IN</a></li>
    </ul>
  </header>
