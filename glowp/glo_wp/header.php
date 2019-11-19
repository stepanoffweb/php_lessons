<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('title');?></title>

    <!-- Bootstrap core C SS -->
    <link href="<?php bloginfo('template_url');?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- НЕПРАВИЛЬНО!!!! подключать не так -->

    <!-- Custom fonts for this template -->
    <link href="<?php bloginfo('template_url');?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_url');?>/css/freelancer.min.css" rel="stylesheet">

  </head>

  <body class="index" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <a class="navbar-brand" href="#page-top"><?php bloginfo('title');?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <?php
      $args= array(
        'menu' => 'top_menu',
        'container' => 'ul',
        'container_class' => 'navbar-nav ml-auto',
        'menu_class' => 'navbar-nav ml-auto'
      );
       wp_nav_menu($args)    ?>
        <!-- <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul> -->
      </div>
    </nav>
