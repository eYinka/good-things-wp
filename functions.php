<?php

/* Hook up the CSS file into WP. */
function load_stylesheets()
{
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('good-things-wp', get_stylesheet_uri(), array(), $theme_version);
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

/* Register the menu section */
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme')
    )
);


/*  Register basic dashboard editor sections */
add_theme_support('menus');
add_theme_support('post-thumbnails');

/* Register the Events custom post type */

function register_custom_post_type()
{
    register_post_type(
        'events',
        array(
            'labels' => array(
                'name' => __('Events'),
                'singular_name' => __('Events')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'events'),
        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'register_custom_post_type');



// Hook up the Js files into WP.

// function load_script() {
//     $theme_version = wp_get_theme()->get( 'Version' );

// 	// No scripts for now.. Will comment this out to avoid errors.
// }

// add_action( 'wp_enqueue_scripts', 'twentytwenty_register_scripts' );
