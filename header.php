<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <title><?php
      if (function_exists('is_tag') && is_tag()) {
         single_tag_title("Archive for tag &quot;"); echo '&quot; - '; }
      elseif (is_archive()) {
         wp_title(''); echo ' Archive - '; }
      elseif (is_search()) {
         echo 'Search &quot;'.wp_specialchars($s).'&quot; - '; }
      elseif (!(is_404()) && (is_single()) || ( !is_page('Homepage') )) {
         wp_title(''); echo ' - '; }
      elseif (is_404()) {
         echo '404 Not Found - '; }
      if (is_home() || is_page('Homepage') ) {
         bloginfo('name'); echo ' - '; bloginfo('description'); }
      else {
          bloginfo('name'); }
      if ($paged > 1) {
         echo ' - page '. $paged; }?></title>


  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

  


  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta name="owner" content=""/>
  <meta name="rating" content="General"/>

  <meta property="og:title" content="SwitchX Wallet | Vive la experiencia Wallet"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://switch.techlatam.la/"/>
  <meta property="og:image" content="<?= get_template_directory_uri() ?>/images/Imagen-OG-Tugo"/>
  <meta property="og:site_name" content="SwitchX Wallet | Vive al experiencia Wallet"/>
  <meta property="og:description" content="Vive la experiencia de tener la mejor billetera online"/>

  <!--[if IE]>
  	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" media="screen"/>
  <![endif]-->

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all"/>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link href="<?php echo home_url(); ?>" rel="index" title="<?php bloginfo('name') ?> - <?php bloginfo('description'); ?>"/>


  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>


  <script src="<?= get_template_directory_uri() ?>/js/scripts.js"></script>



  <?php wp_head(); ?>

	

</head>

<body <?php body_class(); ?>>
  <!-- Header Section -->
  <header class="header header_efect" style="display: block;">
    <div class="container full-height container-is-gapless-table">
      <!-- Header TOP -->
      <div class="header-container full-height">
        <div class="header__logo flex-center" style="margin: 0px;">
         <a style="margin-right: auto;" href="<?php echo get_site_url(); ?>"><img class="img-prin" src="<?php bloginfo('template_directory'); ?>/images/logo_inver.png" alt=""></a>
        </div>
        <div class="header__menu">
          <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </div>
        <div class="flex-center">
          <div id="nav-icon3" onclick="openNav()">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <!-- END Header TOP -->
    </div>
  </header>
    <!-- END Header Section -->


  <div class="header__separate"></div>
  <!-- END Header Section -->

  <!-- The overlay -->
  <div id="myNav" class="overlay header_overlay_efect" style="overflow: hidden;">
    <div class="sub_overlay"></div>
    <!-- Button to close the overlay navigation -->
    <a style="top: 0px;right: 40px;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <style>
      .overlay-content{
        top: 20%;
      }

      @media (min-width: 769px) {
        .img_historia{
          top: 0;
        }
      }
    </style>
    <!-- Overlay content -->
    <div class="overlay-content" style="margin-top: -96px;">
      <div class="overlay-content__logo">
        <img src="https://www.grupoinver.com.ar/media/base/logo.png" alt="">
      </div>
      <div class="overlay-content__menu">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      </div>
      <div class="overlay-content__social">
        <a href="#" class="footer-new__social__brand"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="footer-new__social__brand"><i class="fab fa-instagram"></i></a>
        <a href="#" class="footer-new__social__brand"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
    <div class="foot" style="min-height: 107px;">
      <div align="center" class="foot-div" style="padding-top: 10px !important">
          <a href="https://www.instagram.com/inverinmobiliaria/" target="_blank" class="pl-3 pr-3">
            <i style="font-size: 30px; color: white" class="fab fa-instagram"></i>
          </a>
          <a href="https://www.facebook.com/grupoinverconsultorainmobiliaria/" target="_blank" class="pl-3 pr-3">
            <i style="font-size: 30px; color: white" class="fab fa-facebook"></i>
          </a>
          <a href="https://api.whatsapp.com/send?phone=5493512916132" target="_blank" class="pl-3 pr-3">
            <i style="font-size: 30px; color: white" class="fab fa-whatsapp"></i>
          </a>
          <div class="col-sm-12 copydiv">
          <h3 class="center-sm dere_rev" style='font-family: "Open Sans",sans-serif;font-size: 12px'>© Copyright 2019 Grupo INVER • Desarrollado por <a href="https://www.btob.com.ar/" target="_blank" style="text-decoration: none;color: white;font-weight: 600;"> <span style="color: #fb1515;font-size: 12px;position: relative;margin-right: 5px;">BtoB</span><span style="font-size: 11px">Soluciones </span></a> | Todos los derechos reservados</h3>
        </div>
      </div>
    </div>
  </div>

  <style>
    .overlay-content__menu a{
      text-transform: uppercase;
      font-family: 'PT Sans',sans-serif!important;
      font-weight: 600;
    }
  </style>




