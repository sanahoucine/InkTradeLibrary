<?php
/*
Template Name: Submit Book Template
*/
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();

     
        // Display ACF form for submitting a book
        acf_form(array(
            'post_id' => 'new_post',
            'post_title' => true,
            'post_content' => true,
            'new_post' => array(
                'post_type' => 'books',
                'post_status' => 'publish'
            ),
            'submit_value' => 'Submit Book'
			'form' => 'form-book' // Replace 'your-custom-acf-form-slug' with the slug of your ACF form
        ));

    endwhile;
endif;

get_footer();