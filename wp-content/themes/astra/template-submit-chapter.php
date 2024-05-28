<?php
/*
Template Name: Submit Chapter Template
*/

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();

        // Display the title and content of the page
        the_title();
        the_content();

        // Display ACF form for submitting a chapter
        acf_form(array(
            'post_id' => 'new_post',
            'post_title' => true,
            'post_content' => true,
            'new_post' => array(
                'post_type' => 'chapters',
                'post_status' => 'publish'
            ),
            'submit_value' => 'Submit Chapter'
        ));

    endwhile;
endif;

get_footer();