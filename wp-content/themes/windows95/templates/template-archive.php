<?php 
/**
 * The template for displaying archive pages
 * 
 * Template Name: Archives
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header('pages'); 
?>

<?php get_field('page_header'); ?>
<h1 class="page_heading_1">
  <?php the_field('page_header'); ?>
</h1>
<div id="widget_cont">

<div class="win_wid_NAME_tgt"></div>
<div id="win_wid_NAME_container">
    
    <?php if (have_posts()): ?>


        <?php // TO SHOW THE PAGE CONTENTS?>
        <?php while (have_posts()) : the_post(); ?>
        <?php the_title(); ?>
        <?php endwhile; //resetting the page loop?>
        <?php wp_reset_query(); //resetting the page query?>

        <?php else: ?>
        <h2>Sorry, No Post Found</h2>
        <?php endif; ?>


</div>
<!-- end widget html -->
</div>


<h2>Archives by Month:</h2>
<ul>
    <?php
            $arg = [
                'type' => 'monthly'
            ];
            wp_get_archives($arg);
        ?>
</ul>

<h2>Archives by Year:</h2>
<ul>
    <?php
            $arg = [
                'type' => 'yearly'
            ];
            wp_get_archives($arg);
        ?>
</ul>
</div>
<?php get_footer();