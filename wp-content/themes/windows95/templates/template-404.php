<?php get_header(); ?>

<body class="page-404" onload="windowsError(true, 404, 'Page not found');" <?php body_class();?> data-theme-uri="
    <?php echo get_stylesheet_directory_uri(); ?>/dist/" data-pages-uri="
    <?php echo get_stylesheet_directory_uri(); ?>/">

    <div id="win_container">
        <div id="win_placeholder"></div>
        <!-- This is here to provide a target for the window creation function -->
    </div>
    <div id="win_overlay">

    </div>

    <?php get_footer(); ?>