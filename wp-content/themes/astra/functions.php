<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.6.15' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.6.10' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define( 'ASTRA_PRO_UPGRADE_URL', astra_get_pro_url( 'https://wpastra.com/pro/', 'dashboard', 'free-theme', 'upgrade-now' ) );
define( 'ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', astra_get_pro_url( 'https://wpastra.com/pro/', 'customizer', 'free-theme', 'upgrade' ) );

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/surecart/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';

function custom_wpforms_user_registration($fields, $entry, $form_data) {
    // Change 123 to your form ID
    if ($form_data['id'] == 1290) {
        $username = sanitize_text_field($fields[2]['value']); // Adjust the index based on your form
        $email = sanitize_email($fields[3]['value']); // Adjust the index based on your form
        $password = sanitize_text_field($fields[4]['value']); // Adjust the index based on your form

        $user_id = wp_create_user($username, $password, $email);

        if (!is_wp_error($user_id)) {
            wp_update_user(array(
                'ID' => $user_id,
                'display_name' => $fields[0]['value'] // Adjust the index based on your form
            ));
            wp_new_user_notification($user_id, null, 'user');
        } else {
            // Handle errors
            error_log('User registration error: ' . $user_id->get_error_message());
        }
    }
}
add_action('wpforms_process_complete', 'custom_wpforms_user_registration', 10, 3);
function custom_wpforms_login_handler() {
    if (isset($_POST['wpforms']['fields']['4']) && $_POST['wpforms']['fields']['4'] === 'custom_login') {
        // Debug log
        error_log('WPForms custom login handler triggered.');

        $username = sanitize_text_field($_POST['wpforms']['fields']['3']);
        $password = sanitize_text_field($_POST['wpforms']['fields']['2']);

        $credentials = array(
            'user_login'    => $username,
            'user_password' => $password,
            'remember'      => true,
        );

        $user = wp_signon($credentials, false);

        if (is_wp_error($user)) {
            error_log('Login failed: ' . $user->get_error_message());
            wp_redirect(home_url('https://localhost/InkTradeLibrary/login/'));
            exit; // Add exit statement here
        } else {
            wp_set_current_user($user->ID);
            wp_set_auth_cookie($user->ID);

            if (in_array('administrator', $user->roles)) {
                wp_redirect(home_url('/'));
                exit; // Add exit statement here
            } else {
                wp_redirect(home_url('/'));
            }
        }
    }
}
add_action('init', 'custom_wpforms_login_handler');
function enqueue_custom_scripts() {
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'), '1.0.0', true);

    // Pass user login status to JavaScript
    wp_localize_script('custom-script', 'wpData', array(
        'userLoggedIn' => is_user_logged_in() ? 'true' : 'false'
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
function register_genre_taxonomy() {
    $args = array(
        'label' => __('Genres'),
        'public' => true,
     	 'hierarchical' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_admin_column' => true,
		 'show_in_rest' => true, 
        'rewrite' => array('slug' => 'genre'),
    );

    register_taxonomy('genre', array('books'), $args); // Register taxonomy with ACF field name
}
add_action('init', 'register_genre_taxonomy');

// Display ACF Form
function display_acf_form() {
    ob_start();
    
    acf_form(array(
        'post_id' => 'new_post',
        'post_title' => 'field_66583d42317df',
        'post_content' => 'field_66583d8061dbe',
     
        'new_post' => array(
            'post_type' => 'books',
            'post_status' => 'publish',
           
        ),
         'field_groups' => array('group_66582215de319'), // Your actual field group ID
        'submit_value' => 'Submit Book',
    ));
    
    return ob_get_clean();
}
add_shortcode('acf_book_form', 'display_acf_form');
// Register custom taxonomy for book authors
function register_book_author_taxonomy() {
    $args = array(
        'label' => __('book_author'),
        'public' => true,
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'book_author'),
    );

    register_taxonomy('book_author', array('books'), $args); // Register taxonomy with 'books' post type
}
add_action('init', 'register_book_author_taxonomy');
// Register custom post type for users
function register_custom_user_post_type() {
    register_post_type('custom_user', array(
        'label' => 'Users',
        'public' => false, // Set to false to hide from admin menus
        'exclude_from_search' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'supports' => array('title'),
    ));
}
add_action('init', 'register_custom_user_post_type');

// Save the selected user ID when saving the post
function save_book_author_field($post_id) {
    // Check if this is the book_author field for the books post type
    if ('books' === get_post_type($post_id)) {
        $selected_user_id = get_field('field_66599f467efbb', $post_id); // Get the selected user ID from the field
        update_post_meta($post_id, '_selected_user_id', $selected_user_id); // Save the selected user ID as post meta
    }
}
add_action('acf/save_post', 'save_book_author_field', 20); // Priority should be higher than the ACF default (10)

// Add custom columns to the book post type table
function custom_book_columns($columns) {
    $columns['taxonomy-genre'] = 'Genres'; // Add a new column for genres
    $columns['book_author'] = 'book_author'; // Add a new column for selected author
    return $columns;
}
add_filter('manage_books_posts_columns', 'custom_book_columns');



// Display the custom column content
function custom_book_column_content($column, $post_id) {
    if ($column == 'taxonomy-genre') {
        // If no genres are found using get_the_terms, check ACF field value
        $acf_genre = get_field('field_665822160f7a1', $post_id); // Retrieve ACF genre taxonomy value
        if (!empty($acf_genre)) {
            echo $acf_genre;
        } else {
            echo '—'; // Display a dash if no genres are found
        }
    }
    
    if ($column == 'book_author') {
     
        $author_info = get_field('field_66599f467efbb', $post_id);
        if ($author_info) {
            echo $author_info;
        } else {
            echo '—';
        }
    
    }
}
add_action('manage_books_posts_custom_column', 'custom_book_column_content', 10, 2);
