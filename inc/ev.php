<?php 

add_filter( 'show_admin_bar', '__return_false' );



// Slider Inicio - Banner Inicial
function slider_posttype()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('slider', // Register Custom Post Type 
        array(
        'labels' => array(
            'name' => __('Slider', 'html5blank'), // Rename these to suit
            'singular_name' => __('Slider', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New Slider', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Slider', 'html5blank'),
            'new_item' => __('New Slider', 'html5blank'),
            'view' => __('View Slider', 'html5blank'),
            'view_item' => __('View Slider', 'html5blank'),
            'search_items' => __('Search Slider', 'html5blank'),
            'not_found' => __('No Slider found', 'html5blank'),
            'not_found_in_trash' => __('No Slider found in Trash', 'html5blank')
        ),
        'public' => true,
        'menu_icon' => 'dashicons-desktop',
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => false,
        'menu_position' => 6,
        'supports' => array(
            'title',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(

        ) // Add Category and Post Tags support
    ));
}

add_action('init','slider_posttype'); // Slide inicio

function my_acf_google_map_api( $api ){
    
    $api['key'] = 'AIzaSyAotgXiiIPK1kGYcLrm0FBiB-dyW6EuAvc';
    
    return $api;
    
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


// Menu Principal
    register_nav_menus( array(
        'primary' => esc_html__( 'Menu Principal', 'ureformada' ),
    ) );

// Menu Footer
    register_nav_menus( array(
        'primary' => esc_html__( 'Menu Footer', 'ureformada' ),
    ) );


// Menu Top
    register_nav_menus( array(
        'primary' => esc_html__( 'Menu Top', 'ureformada' ),
    ) );


 ?> 