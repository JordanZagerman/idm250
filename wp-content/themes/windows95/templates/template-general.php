<?php get_header('pages'); ?>

        <div class="win_wid_NAME_tgt"></div>
        <div id="win_wid_NAME_container" class="general">

<?php if (have_posts()): ?>

          <article class="post">   
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
              <p class="about_text"><?php the_content(); ?><p> <!-- Page Content (WYSIWYG Field) -->
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
