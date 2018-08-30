<?php
/*
Template Name: Window Page
*/
get_header('pages');
?>


<?php get_field('page_header'); ?>
    <h1 class="page_heading_1"><?php the_field('page_header'); ?></h1>
    <div id="widget_cont">
        <!-- start widget html -->
        <div class="win_wid_NAME_tgt"></div>
        <div id="win_wid_NAME_container">
            <!--  -->
       

<?php if (have_posts()): ?>

          <article class="post">   
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
              <?php if ( has_post_thumbnail() ) { ?>

                <img src="<?php the_post_thumbnail_url();?>" alt="About Picture" class="about_picture">
             
             <?php  } 
                the_content();
              ?> <!-- Page Content (WYSIWYG Field) -->
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
          </article>
        <?php else: ?>
          <h2>Sorry, No Post Found</h2>
        <?php endif; ?>

        </div>
        <!-- end widget html -->
    </div>

<?php get_footer(); ?>
