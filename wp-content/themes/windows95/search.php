<?php

$searched_string = $_GET['s'];

get_header();
global $wp_query;
?>

<body <?php body_class();?>>

<div class="wapper">
  <div class="contentarea clearfix">
    <div class="content">

        <?php if ( have_posts() ) { ?>
          <h1 class="search-title page_heading_1">
        <?php _e( 'Search Results', 'locale' ); ?>: "<?php the_search_query(); ?>"</h1>

            <ul>

            <?php while ( have_posts() ) { the_post(); ?>

               <li class="window_unordered_list_item">
                 <h3><a href="<?php echo get_permalink(); ?>">Portfolio/<?php the_title(); ?>
                 </a></h3>

                 <?php echo substr(get_the_excerpt(), 0,200); ?>
                 <div class="h-readmore"> <a href="<?php the_permalink(); ?>">Read More</a></div>
               </li>

            <?php } ?>

            </ul>

           <?php echo paginate_links(); ?>

        <?php } else { ?>

          <h1 class="search-title page_heading_1">Sorry, No Post Found</h1>
       <?php } ?>

    </div>
  </div>
</div>


<?php get_footer(); ?>
