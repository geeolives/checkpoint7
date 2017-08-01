<?php
/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{

    register_post_type('blog', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Blog', 'html5blank'), // Rename these to suit
            'singular_name' => __('Blog', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New Blog', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Blog', 'html5blank'),
            'new_item' => __('New Blog', 'html5blank'),
            'view' => __('View Blog', 'html5blank'),
            'view_item' => __('View Blog', 'html5blank'),
            'search_items' => __('Search Blog', 'html5blank'),
            'not_found' => __('No Blog found', 'html5blank'),
            'not_found_in_trash' => __('No Blog found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'revisions'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'menu_icon' => 'dashicons-format-aside',   // http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'can_export' => true // Allows export in Tools > Export
    ));
    register_taxonomy(
        'blog_category',    // Taxonomy
        'blog',             // Object Type
        array(
            'label' => __( 'Type' ),
            'rewrite' => array( 'slug' => 'type' ),
            'hierarchical' => true, // Is this taxonomy hierarchical like categories or not hierarchical like tags.
        )
    );
}
