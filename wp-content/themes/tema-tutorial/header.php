<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>style.css">

    <style>
      .suscribir {
        background: url('<?php bloginfo('template_url'); ?>/images/bg.png');
        background-size: cover;
        background-position: center;
        height:400px;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <div class="container-fluid fixed-top bg-dark">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
        <a class="navbar-brand" href="#">
          <img src="images/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
          Bootstrap
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <?php 
          wp_nav_menu(array(
            'theme_location' => 'superior',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarSupportedContent',
            'items_wrap' => '<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
            'menu_class' => 'nav-item'
          ) ); 
        ?>
      </nav>
    </div>
    <!-- Fin Navbar -->

    <!-- Suscribir -->
    <div class="container-fluid suscribir d-flex flex-column justify-content-center align-items-center">
      <div class="text-center text-white">
        <h1 class="display-4">Lorem Ipsum</h1>
      </div>
      <form action="" class="form-inline flex-column flex-sm-row">
        <div class="form-group mr-sm-3">
          <input type="text" class="form-control" placeholder="Nombre">
        </div>
        <div class="form-group mr-sm-3">
          <input type="text" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Enviar">
        </div>
      </form>
    </div>
    <!-- Fin Suscribir -->