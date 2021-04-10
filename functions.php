<?php

/* --------------------------------------------------------
     CSS, Bootstrap & JavaScript/JQuery
-------------------------------------------------------- */

function site_script_enqueue() {

// Bootstrap

  wp_enqueue_style("bootstrap_css", "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
  wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.min.js', array( 'jquery' ),'',true );
  wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
  wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );

// CSS

  wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/assets/css/tripas.css', array(), '1.0.0', 'all' );

// JS & jQuery

  wp_enqueue_script('custom-js', get_template_directory_uri() .'/assets/js/tripas.js', array('jquery'), null, true);

}

add_action( 'wp_enqueue_scripts', 'site_script_enqueue' );

/* --------------------------------------------------------
     Add "Menu" option under "Appearance"
-------------------------------------------------------- */

function site_theme_setup() {
  add_theme_support('menus'); /* creates "Menus" option on dashboard sidebar */
  register_nav_menu('desktop', 'Desktop Navigation' );
  // register_nav_menu('secondary', 'Mobile Navigation' );
  register_nav_menu('mobile', 'Mobile Navigation' );
}

add_action ('init', 'site_theme_setup');