<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

get_header(); ?>

<?php 
$link = get_field('portfolio_post_heading_link');

if($link){ ?>

<a href="<?php echo $link['url']; ?>">
    <h1 class="page_heading_1"><?php the_field('porfolio_post_heading'); ?></h1>
</a>

<?php }else{?>

        <h1 class="page_heading_1"><?php the_field('porfolio_post_heading'); ?></h1>

<?php } ?>
<div id="widget_cont">
    <!-- start widget html -->
    <div class="win_wid_NAME_tgt"></div>
    <div id="win_wid_NAME_container">
    <h4 class='page_heading_4 project_sub_heading'><?php the_field('portfolio_sub_heading'); ?></h4>

 <article class="post general">   
        <?php
            /* Start the Loop */
            while (have_posts()) :


            the_post();

            if ( has_post_thumbnail() ) { ?>

                <br>
                <img src="<?php the_post_thumbnail_url();?>" alt="About Picture" class="about_picture">
                
                <?php  } 
                            the_content();

            endwhile; // End of the loop.
        ?>
</article>


    </div>
    </div>
<!-- end widget html -->
</div>
<?php
get_footer();