<?php

require_once get_template_directory() . '/tbcf/framework.php';

/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// Theme support options
require_once(get_template_directory().'/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php'); 

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php'); 

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php'); 


function get_post_page_content( $atts ) {
    extract( shortcode_atts( array(
        'id' => null,
        'title' => false,
    ), $atts ) );

    $the_query = new WP_Query( 'page_id='.$id );
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
            if($title == "true"){
                the_title();
            }
            the_content();
        }
    wp_reset_postdata();
}

add_shortcode( 'my_content', 'get_post_page_content' );

function get_post_page_featured( $atts ) {
    extract( shortcode_atts( array(
        'id' => null
    ), $atts ) );

    $the_query = new WP_Query( 'page_id='.$id );
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
            return get_the_post_thumbnail_url($id);
        }
    wp_reset_postdata();
}

add_shortcode( 'background', 'get_post_page_featured' );
