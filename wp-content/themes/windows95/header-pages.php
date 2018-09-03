<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php 
    if (get_field('porfolio_post_heading')) {
      the_field('porfolio_post_heading');
    } else if (get_field('page_header')) {
      the_field('page_header');
    } else {
    the_title();
    }
    ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/start.png">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class();?> >

