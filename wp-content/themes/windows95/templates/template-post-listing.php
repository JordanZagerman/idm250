<?php
/*
 * Template Name: Post Listing
 *
 * This template will display all of my portfolio pieces
 *
 * @link https://codex.wordpress.org/Class_Reference/WP_Query
*/

$arg = [
  'post_type'     => 'post',
  'post_status'   => 'publish',
  'posts_per_page'=> 3
];
$posts = new WP_Query($arg);

get_header('pages');
?>


<?php get_field('page_header'); ?>
<h1 class="page_heading_1">
  <?php the_field('page_header'); ?>
</h1>
<div id="widget_cont">
  <!-- start widget html -->
  <div class="win_wid_NAME_tgt"></div>
  <div id="win_wid_NAME_container">
    <!--  -->

    <ul class="window_unordered_list">

      <?php if ($posts->have_posts()) : ?>
      <?php while ($posts->have_posts()) : $posts->the_post(); ?>
      <!--article-->
      <article class="col-md-12 wow fadeInUp">
        <header class="entry-header">
          <!-- <span class="date-article">
                    <i class="fa fa-calendar-o"></i><?php the_date();?></span> -->
          <li class="window_unordered_list_item"><a href="<?php the_permalink(); ?>">Portfolio/<?php the_title(); ?></a></li>
          <a href="<?php the_permalink(); ?>"></a>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
      <p>
        <?php echo 'Sorry, no posts matched your criteria.'; ?>
      </p>
      <?php endif; ?>

      <div class="clearfix"></div>
  </div>
  <?php get_footer(); ?>