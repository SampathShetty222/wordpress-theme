<?php 

function sampath_new_theme(){
    wp_enqueue_style( "Sampath-theme-style", get_stylesheet_uri() ,array(),'1.0','all' );
    wp_enqueue_script( "Tailwind css", "https://cdn.tailwindcss.com", array(), null, false );
    wp_enqueue_script( "Mobile Hrader" , get_template_directory_uri().'/js/mobile-header.js' , ['jquery'] ,'1.0',true);
}
add_action ('wp_enqueue_scripts', 'sampath_new_theme');

function theme_header_functions(){
    register_nav_menus( 
        array(
            'header-Main-Menu' => "Main Menu",
            'Footer-Main-menu' => "Footer Menu",
            'Mobile-Main-Menu' => "Mobile Menu"
        )
        );
    add_theme_support( 'custom-logo', 
    array(
        'width' => 100,
        'flex-width' => true,
        'flex-height' => true
    ));
}
add_action( 'after_setup_theme' , 'theme_header_functions',0);


function theme_post_settings(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme' , 'theme_post_settings');

add_action('widgets_init' , 'theme_footer_widget');

function theme_footer_widget(){
    register_sidebar(
        array(
            'name' => 'Footer One' ,
            'id' => 'footer-one',
            'description'    => 'This is the section 1',
            'before_widget'  => '<div class="widget-wrapper text-white sampath-footer">',
            'after_widget'   => '</div>',
            'before_title'   => '<h2 class="widget-title">',
            'after_title'    => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Footer Two' ,
            'id' => 'footer-two',
            'description'    => 'This is the section 2',
            'before_widget'  => '<div class="widget-wrapper text-white sampath-footer">',
            'after_widget'   => '</div>',
            'before_title'   => '<h2 class="widget-title">',
            'after_title'    => '</h2>',
        )
        );
    register_sidebar(
        array(
            'name' => 'Footer Three',
            'id' => 'footer-three',
            'description' => 'This is the section 3',
            'before_widget' => '<div class="widget-wrapper text-white sampath-footer">',
            'after_widget'   => '</div>',
            'before_title'   => '<h2 class="widget-title">',
            'after_title'    => '</h2>',
        )
        );
    register_sidebar(
        array(
            'name' => 'Bottom Footer Left',
            'id' => 'bottom-footer-one',
            'description' => 'this is the bottome footer',
            'before_widget' => '<div class="widget-wrapper text-white sampath-footer-bottom">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
        );
    register_sidebar(
        array(
            'name' => 'Bottom Footer Right',
            'id' => 'bottom-footer-two',
            'description' => 'This is the second bottom footer',
            'before_widget' => '<div class="widget-wrapper text-white sampath-footer-bottom-two">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
        );
    register_sidebar(
        array(
            'name' => 'Header Button',
            'id' => 'header-buttom',
            'description' => 'This is the button in the header right side',
            'before_widget' => '<div class="widget-wrapper text-white header-button">',
            'after_widget'  => '</div>',
            'before_title'  => '<button class="headerButton">',
            'after_title'   => '</button>',
        )
        );
}
function your_theme_register_elementor_locations( $elementor_theme_manager ) {
    $elementor_theme_manager->register_all_core_location();
}
add_action( 'elementor/theme/register_locations', 'your_theme_register_elementor_locations' );


// Craeting the custom post of news
function create_news_post_type() {
    $labels = array(
        'name'               => _x('News', 'post type general name', 'textdomain'),
        'singular_name'      => _x('News', 'post type singular name', 'textdomain'),
        'menu_name'          => _x('News', 'admin menu', 'textdomain'),
        'name_admin_bar'     => _x('News', 'add new on admin bar', 'textdomain'),
        'add_new'            => _x('Add New', 'news', 'textdomain'),
        'add_new_item'       => __('Add New News', 'textdomain'),
        'new_item'           => __('New News', 'textdomain'),
        'edit_item'          => __('Edit News', 'textdomain'),
        'view_item'          => __('View News', 'textdomain'),
        'all_items'          => __('All News', 'textdomain'),
        'search_items'       => __('Search News', 'textdomain'),
        'parent_item_colon'  => __('Parent News:', 'textdomain'),
        'not_found'          => __('No news found.', 'textdomain'),
        'not_found_in_trash' => __('No news found in Trash.', 'textdomain')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'news'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('news', $args);
}

add_action('init', 'create_news_post_type');

function create_testimonials_post_type() {
    $labels = array(
        'name'               => _x('Testimonials', 'post type general name', 'textdomain'),
        'singular_name'      => _x('Testimonial', 'post type singular name', 'textdomain'),
        'menu_name'          => _x('Testimonials', 'admin menu', 'textdomain'),
        'name_admin_bar'     => _x('Testimonial', 'add new on admin bar', 'textdomain'),
        'add_new'            => _x('Add New', 'testimonial', 'textdomain'),
        'add_new_item'       => __('Add New Testimonial', 'textdomain'),
        'new_item'           => __('New Testimonial', 'textdomain'),
        'edit_item'          => __('Edit Testimonial', 'textdomain'),
        'view_item'          => __('View Testimonial', 'textdomain'),
        'all_items'          => __('All Testimonials', 'textdomain'),
        'search_items'       => __('Search Testimonials', 'textdomain'),
        'parent_item_colon'  => __('Parent Testimonials:', 'textdomain'),
        'not_found'          => __('No testimonials found.', 'textdomain'),
        'not_found_in_trash' => __('No testimonials found in Trash.', 'textdomain')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'testimonials'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail')
    );

    register_post_type('testimonials', $args);
}
add_action('init', 'create_testimonials_post_type');


