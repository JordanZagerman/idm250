<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title();?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/start.png">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class();?> >

