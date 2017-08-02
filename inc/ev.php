<?php

add_filter( 'show_admin_bar', '__return_false' );



// Slider Inicio - Banner Inicial
function slider_posttype()
{
    register_taxonomy_for_object_type('category', 'ureformada'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'ureformada');
    register_post_type('slider', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Slider', 'ureformada'), // Rename these to suit
            'singular_name' => __('Slider', 'ureformada'),
            'add_new' => __('Add New', 'ureformada'),
            'add_new_item' => __('Add New Slider', 'ureformada'),
            'edit' => __('Edit', 'ureformada'),
            'edit_item' => __('Edit Slider', 'ureformada'),
            'new_item' => __('New Slider', 'ureformada'),
            'view' => __('View Slider', 'ureformada'),
            'view_item' => __('View Slider', 'ureformada'),
            'search_items' => __('Search Slider', 'ureformada'),
            'not_found' => __('No Slider found', 'ureformada'),
            'not_found_in_trash' => __('No Slider found in Trash', 'ureformada')
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



// Slider Informativo
function slider_informativo_posttype()
{
    register_taxonomy_for_object_type('category', 'ureformada'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'ureformada');
    register_post_type('sliderinformativo', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Banner Inicio', 'ureformada'), // Rename these to suit
            'singular_name' => __('Banner Inicio', 'ureformada'),
            'add_new' => __('Add New', 'ureformada'),
            'add_new_item' => __('Add New Banner Inicio', 'ureformada'),
            'edit' => __('Edit', 'ureformada'),
            'edit_item' => __('Edit Banner Inicio', 'ureformada'),
            'new_item' => __('New Banner Inicio', 'ureformada'),
            'view' => __('View Banner Inicio', 'ureformada'),
            'view_item' => __('View Banner Inicio', 'ureformada'),
            'search_items' => __('Search Banner Inicio', 'ureformada'),
            'not_found' => __('No Banner Inicio found', 'ureformada'),
            'not_found_in_trash' => __('No Banner Inicio found in Trash', 'ureformada')
        ),
        'public' => true,
        'menu_icon' => 'dashicons-images-alt',
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

add_action('init','slider_informativo_posttype'); // Slide Informativo



// Eventos
function slider_eventos()
{
    register_taxonomy_for_object_type('category', 'ureformada'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'ureformada');
    register_post_type('eventos', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Eventos', 'ureformada'), // Rename these to suit
            'singular_name' => __('Eventos', 'ureformada'),
            'add_new' => __('Add New', 'ureformada'),
            'add_new_item' => __('Add New Eventos', 'ureformada'),
            'edit' => __('Edit', 'ureformada'),
            'edit_item' => __('Edit Eventos', 'ureformada'),
            'new_item' => __('New Eventos', 'ureformada'),
            'view' => __('View Eventos', 'ureformada'),
            'view_item' => __('View Eventos', 'ureformada'),
            'search_items' => __('Search Eventos', 'ureformada'),
            'not_found' => __('No Eventos found', 'ureformada'),
            'not_found_in_trash' => __('No Eventos found in Trash', 'ureformada')
        ),
        'public' => true,
        'menu_icon' => 'dashicons-calendar',
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

add_action('init','slider_eventos'); // Eventos inicio


// Videos
function slider_videos()
{
    register_taxonomy_for_object_type('category', 'ureformada'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'ureformada');
    register_post_type('videos', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Videos', 'ureformada'), // Rename these to suit
            'singular_name' => __('Videos', 'ureformada'),
            'add_new' => __('Add New', 'ureformada'),
            'add_new_item' => __('Add New Videos', 'ureformada'),
            'edit' => __('Edit', 'ureformada'),
            'edit_item' => __('Edit Videos', 'ureformada'),
            'new_item' => __('New Videos', 'ureformada'),
            'view' => __('View Videos', 'ureformada'),
            'view_item' => __('View Videos', 'ureformada'),
            'search_items' => __('Search Videos', 'ureformada'),
            'not_found' => __('No Videos found', 'ureformada'),
            'not_found_in_trash' => __('No Videos found in Trash', 'ureformada')
        ),
        'public' => true,
        'menu_icon' => 'dashicons-format-video',
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

add_action('init','slider_videos'); // Videos inicio


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
        'footer' => esc_html__( 'Menu Footer', 'ureformada' ),
    ) );


// Menu Top
    register_nav_menus( array(
        'menutop' => esc_html__( 'Menu Top', 'ureformada' ),
    ) );

// Menu Derecho Home
register_nav_menus( array(
    'menurighthome' => esc_html__( 'Menu Derecho Home', 'ureformada' ),
) );
