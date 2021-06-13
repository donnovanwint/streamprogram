<?php

function stream_files() {
  wp_enqueue_script('stream_main_js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('stream_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'stream_files');

function stream_features() {
  register_nav_menu('primaryNavigation', 'Primary Navigation');
  register_nav_menu('footerNavigationOne', 'Footer Navigation One');
  register_nav_menu('footerNavigationTwo', 'Footer Navigation Two');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'stream_features');