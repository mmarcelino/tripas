<html>
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo( 'name' ); ?><?php wp_title('|'); ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/assets/images/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- animate content on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- animate static content -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <?php wp_head(); ?> <!-- indicates to the wp hooks and actions created on functions.js that they should be loaded here -->
  </head>

  <body <?php body_class(); ?>>
