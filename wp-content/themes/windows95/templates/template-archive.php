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

     <div class="archive_container">
        <div id="win_wid_NAME_container">
   
    
        <?php if (have_posts()): ?>


            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?>
            
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>

            <?php else: ?>
            <h2>Sorry, No Post Found</h2>
            <?php endif; ?>

                    <div class='archive_list_container'>
                    <ul class="window_unordered_list">
                        <?php
                                $arg = [
                                    'type' => 'monthly'
                                ];
                                wp_get_archives($arg);
                            ?>
                    </ul>
                    </div>
        </div>
    </div>
<!-- end widget html -->
</div>
<?php get_footer();