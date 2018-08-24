<?php get_header(); ?> Archives by month

<ul>
    <?php
    $arg = [
        'type' => 'monthly'
    ];

    wp_get_archives($args);
    ?>
</ul>

        <?php get_footer(); ?>