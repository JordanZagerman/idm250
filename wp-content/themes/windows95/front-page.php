<?php get_header(); ?>

<?php $post_object = get_field('search_page_section'); 
// ^^ Gets reference to Search Page
            if( $post_object ) {
                // ^^ Checking to see if anything was selected
                $post = $post_object;
                // ^^ Assigning variable post, because that's how wordpress works
                setup_postdata( $post ); 
                // ^^ Look this up later
    $searchUri = get_permalink();
    wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
                } ?>




<body onload="updateClock(); setInterval('updateClock()', 1000 );" <?php body_class();?>
data-theme-uri="<?php echo get_stylesheet_directory_uri(); ?>/dist/" 
data-search-uri="<?php echo $searchUri; ?>" 
data-pages-uri="<?php echo get_stylesheet_directory_uri(); ?>/">
    <noscript>
        <div class="bsod_container">
            <div class="bsod_textcont">
                <p class="bsod_title">Windows 95</p>
                <p class="bsod_p">An error has occurred. To continue:</p>
                <p class="bsod_p">Press F5 to restart your computer. If you do this,
                    <br> you will lose any unsaved information in all open applications.</p>
                <p class="bsod_p">Error: JAVASCRIPT_NOT_ENABLED</p>
                <p class="bsod_press">Press F5 to continue _</p>
            </div>
        </div>
    </noscript>

    <!-- Taskbar -->
    <div id="win_taskbar">
        <!-- Start Button -->
        <div id="win_start_button">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/start.png" id="win_start_icon"
                alt="Windows Logo">
            <span id="win_start_text">Start</span>
        </div>
        <!-- Taskbar Buttons -->
        <div id="win_tb_placeholder">

        </div>

        <!-- System Tray -->
        <div id="win_systray">
            <span id="win_clock">&nbsp;</span>
        </div>
    </div>
    <!-- Start Menu -->
    <div id="win_start">
        <div id="win_start_banner">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/start_banner.png" alt="Windows 95"
                id="win_start_banner_img">
        </div>
        <!-- Start Menu Top-level List -->
        <div id="win_start_tli_cont">
            <!-- Programs -->
            <div id="win_start_tli_programs" class="win_start_toplevel_item">
                <!-- Image -->
                <?php if (get_field('start_menu_block_1_image')) { ?>
                <img src="<?php the_field('start_menu_block_1_image')?>" alt="#" class="win_start_tliicon sidebar_icon">
                <?php  } else { ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/programs24.png" alt="Programs" class="win_start_tliicon">
                <?php }?>
                <!-- Title -->
                <?php if (get_field('start_menu_block_1_first_letter') && get_field('start_menu_block_1_following_letters')) { ?>
                <span class="win_start_tlitext"><u><?php the_field('start_menu_block_1_first_letter')?></u><?php the_field('start_menu_block_1_following_letters')?></span>
                <?php  } else { ?>
                <span class="win_start_tlitext"><u>P</u>rograms</span>
                <?php }?>

            </div>
            <!-- Documents -->
            <div id="win_start_tli_documents" class="win_start_toplevel_item">
                <!-- Image -->
                <?php if (get_field('start_menu_block_2_image')) { ?>
                <img src="<?php the_field('start_menu_block_2_image')?>" alt="#" class="win_start_tliicon sidebar_icon">
                <?php  } else { ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/documents24.png" alt="Documents" class="win_start_tliicon">
                <?php }?>
                <!-- Title -->
                <?php if (get_field('start_menu_block_2_first_letter') && get_field('start_menu_block_2_following_letters')) { ?>
                <span class="win_start_tlitext"><u><?php the_field('start_menu_block_2_first_letter')?></u><?php the_field('start_menu_block_2_following_letters')?></span>
                <?php  } else { ?>
                <span class="win_start_tlitext"><u>D</u>ocuments</span>
                <?php }?>
            </div>
            <!-- Settings -->
            <div id="win_start_tli_settings" class="win_start_toplevel_item">
                <!-- Image -->
                <?php if (get_field('start_menu_block_3_image')) { ?>
                <img src="<?php the_field('start_menu_block_3_image')?>" alt="#" class="win_start_tliicon sidebar_icon">
                <?php  } else { ?>                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/settings24.png" alt="Settings" class="win_start_tliicon">
                <?php }?>
                <!-- Title -->
                <?php if (get_field('start_menu_block_3_first_letter') && get_field('start_menu_block_3_following_letters')) { ?>
                <span class="win_start_tlitext"><u><?php the_field('start_menu_block_3_first_letter')?></u><?php the_field('start_menu_block_3_following_letters')?></span>
                <?php  } else { ?>
                <span class="win_start_tlitext"><u>S</u>ettings</span>
                <?php }?>
            </div>
            <!-- Find -->
            <div id="win_start_tli_find" class="win_start_toplevel_item" onClick="run(true)">


                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/find24.png" alt="Find" class="win_start_tliicon">
                <span class="win_start_tlitext">
                    <u>F</u>ind</span>
            </div>
            <!-- Help -->
            <div id="win_start_tli_help" class="win_start_toplevel_item">
                <!-- Image -->
                <?php if (get_field('start_menu_block_4_image')) { ?>
                <img src="<?php the_field('start_menu_block_4_image')?>" alt="#" class="win_start_tliicon sidebar_icon">
                <?php  } else { ?>                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/help24.png" alt="Help" class="win_start_tliicon">
                <?php }?>
                <!-- Title -->
                <?php if (get_field('start_menu_block_4_first_letter') && get_field('start_menu_block_4_following_letters')) { ?>
                <span class="win_start_tlitext"><u><?php the_field('start_menu_block_4_first_letter')?></u><?php the_field('start_menu_block_4_following_letters')?></span>
                <?php  } else { ?>
                <span class="win_start_tlitext"><u>H</u>elp</span>
                <?php }?>
            </div>
            <!-- Run -->
            <div id="win_start_tli_run" class="win_start_toplevel_item">
                <!-- Image -->
                <?php if (get_field('start_menu_block_5_image')) { ?>
                <img src="<?php the_field('start_menu_block_5_image')?>" alt="#" class="win_start_tliicon sidebar_icon">
                <?php  } else { ?>                     
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/run24.png" alt="Run..." class="win_start_tliicon">
                <?php }?>
                <!-- Title -->
                <?php if (get_field('start_menu_block_5_first_letter') && get_field('start_menu_block_5_following_letters')) { ?>
                <span class="win_start_tlitext"><u><?php the_field('start_menu_block_5_first_letter')?></u><?php the_field('start_menu_block_5_following_letters')?></span>
                <?php  } else { ?>
                <span class="win_start_tlitext"><u>R</u>un...</span>
                <?php }?>
            </div>
            <!-- Divider -->
            <div class="win_start_divider">
                <div class="win_start_d1"></div>
                <div class="win_start_d2"></div>
            </div>
            <!-- Shut Down -->
            <div id="win_start_tli_shutdown" class="win_start_toplevel_item" onclick="windowsError(true, 404, 'Page not found');">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/shutdown24.png" alt="Shut Down..."
                    class="win_start_tliicon">
                <span class="win_start_tlitext">
                    <u>S</u>hut Down...</span>
            </div>
        </div>
    </div>
    <div id="win_container">
        <div id="win_placeholder"></div>
        <!-- This is here to provide a target for the window creation function -->

        <!-- Homescreen Shortcuts -->
        <div class="icon_container">
            <!-- function makeWindow(icon, title, frameurl, taskbar, res, wid, hei) -->

            <?php
            $post_object = get_field('about_section');
            if( $post_object ): 
                $post = $post_object;
                setup_postdata( $post ); 
                ?>

            <div class='homescreen_icons' onclick="makeWindow('<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/document_file.png','<?php the_title();?>', '<?php the_permalink(); ?>', true);">
                <img class="homescreen_icons_images" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/README.png"
                    id="win_start_icon" alt="About">
                <p class="homescreen_title_text">
                    <?php if ( get_field('icon_lable_and_bar_heading') ) { ?>

                    <?php the_field('icon_lable_and_bar_heading') ?>

                    <?php  } else {
                        the_title();
                         } ?>
                    <!-- Page Content (WYSIWYG Field) -->
                </p>
            </div>

            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>

            <?php
            $post_object = get_field('portfolio_section');
            if( $post_object ): 
                $post = $post_object;
                setup_postdata( $post ); 
                ?>

            <div class='homescreen_icons' onclick="makeWindow('<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/folder.png', '<?php the_title();?>', '<?php the_permalink(); ?>', true);">
                <img class="homescreen_icons_images" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/folder.png"
                    id="win_start_icon" alt="Portfolio">
                <p class="homescreen_title_text">
                    <?php if ( get_field('icon_lable_and_bar_heading') ) { ?>

                    <?php the_field('icon_lable_and_bar_heading') ?>

                    <?php  } else {
                        the_title();
                         } ?>
                </p>
            </div>

            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>

            <?php
            $post_object = get_field('archive_section');
            if( $post_object ): 
                $post = $post_object;
                setup_postdata( $post ); 
                ?>

            <div class='homescreen_icons' onclick="makeWindow('<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/recycle_bin_full.png', '<?php the_title();?>', '<?php the_permalink(); ?>', true);">
                <img class="homescreen_icons_images" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/recycle_bin_full.png"
                    id="win_start_icon" alt="Archives">
                <p class="homescreen_title_text">
                    <?php if ( get_field('icon_lable_and_bar_heading') ) { ?>

                    <?php the_field('icon_lable_and_bar_heading') ?>

                    <?php  } else {
                        the_title();
                         } ?>
                </p>
            </div>

            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>

            <!-- Find -->

            <div class='homescreen_icons' onClick="runHome()">
                <img class="homescreen_icons_images" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/find32.png"
                    id="win_start_icon" alt="Find">
                <p class="homescreen_title_text">Find</p>
            </div>

            <?php
            $post_object = get_field('contact_section');
            if( $post_object ): 
                $post = $post_object;
                setup_postdata( $post ); 
                ?>

            <div class='homescreen_icons' onclick="makeWindow('<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/contact_icon.png', '<?php the_title();?>', '<?php the_permalink(); ?>', true);">
                <img class="homescreen_icons_images" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/contact_icon.png"
                    id="win_start_icon" alt="Contact">
                <p class="homescreen_title_text">
                    <?php if ( get_field('icon_lable_and_bar_heading') ) { ?>

                    <?php the_field('icon_lable_and_bar_heading') ?>

                    <?php  } else {
                        the_title();
                         } ?>
                </p>
            </div>

            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>



            <!-- Resume -->

            <?php $file = get_field('resume_section');
                if( $file ): ?>

            <div class='homescreen_icons'>





                <a class="home_link" href="<?php echo $file['url']; ?>" download>

                    <img class="homescreen_icons_images" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/resume.png"
                        id="win_start_icon" alt="Resume">
                </a>
                <p class="homescreen_title_text">Resume</p>
            </div>


            <?php endif; ?>

        </div>
    </div>
    <div id="win_overlay">

    </div>
    <?php get_footer();?>