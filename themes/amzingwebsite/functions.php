<?php 
  function website_files(){

  	wp_enqueue_script( 'main-website-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL , microtime() , true);
    wp_enqueue_style('google-font-style', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  	wp_enqueue_style('website_main_styles' , get_stylesheet_uri());

  }
  add_action('wp_enqueue_scripts' , 'website_files');


  function website_features()
  {
    // register_nav_menu('headerMenuLocation', 'Header Menu Location');
    // register_nav_menu('footerLocationOne', 'Footer  Location One');
    // register_nav_menu('footerLocationTwo', 'Footer  Location Two');

  	add_theme_support('title-tag');
  }
  add_action('after_setup_theme', 'website_features');


   





