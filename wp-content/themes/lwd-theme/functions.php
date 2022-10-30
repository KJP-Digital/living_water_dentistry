<?php
/**
 * lwd-theme engine room
 * Template Name: functions.php
 * Description: Add features to wordpress theme
 *
 * @package lwd-theme
 */

//Include Customizer Register
include_once('templates/helpers/customizer.php');

/**
 * Add the custom scripts function
 */
function fn_theme_custom_styles() {

    //Adding bootstrap core css file
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

    //Adding slick theme core css file
    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/css/slick-theme.css');

    //Adding custom style css file
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css');
}

//Add the custom styles in the WP Hook
add_action('wp_enqueue_scripts', 'fn_theme_custom_styles');

/**
 * Add the new theme features function
 */
function fn_theme_supports() {

    //Adding the dynamic title tag
    add_theme_support('title-tag');

    //Adding the post thumbnails hook
    add_theme_support('post-thumbnails');

    //Adding the site logo hook
    add_theme_support('custom-logo');
}

//Add the new theme features in the WP Hook
add_action('after_setup_theme', 'fn_theme_supports');

/**
 * Register Nav Menus function
 * Two Types of Nav Menus in WP 
 * #1 "Primary Menu" - "Main Menu"
 * #2 "Footer Menu" - "Footer Section Menu"
 */
function fn_nav_menu() {

    //Register Nav Menus
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'text_domain'),
        'footer-menu' => __('Footer Menu', 'text_domain'),
        'footer-service-menu' => __('Service Menu', 'text_domain'),
        'footer-service-menu2' => __('Service Menu 2', 'text_domain'),
    ));
}

//Add the register nav menu in the WP Hook
add_action('init', 'fn_nav_menu');

add_action( 'after_setup_theme', 'register_multiple_widget_areas' ); 

function register_multiple_widget_areas() { 
    register_sidebar(array( 
        'name' => __('Sidebar'), 
        'id' => 'sidebar', 
        'description' => __('describe the function of the box.') 
    ));

    register_sidebar(array( 
        'name' => __('Header'), 
        'id' => 'header-widget', 
        'description' => __('Goes at the top of the page.') 
    ));

    register_sidebar(array( 
        'name' => __('Footer Address'), 
        'id' => 'footer-address-widget', 
        'description' => __('Goes at the bottom of the page.'),
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ));

    register_sidebar(array( 
        'name' => __('Footer Social Links'), 
        'id' => 'footer-social-links-widget', 
        'description' => __('Goes at the bottom of the page.'),
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ));

    register_sidebar(array( 
        'name' => __('Footer Copy Right'), 
        'id' => 'footer-copyright-widget', 
        'description' => __('Goes at the bottom of the page.'),
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ));
}

add_action( 'init', 'fn_custom_post_services_register' );   

function fn_custom_post_services_register() {   

    $labels = array( 
        'name' => _x('Services', 'post type general name'), 
        'singular_name' => _x('Service Item', 'post type singular name'), 
        'add_new' => _x('Add New', 'Service'), 
        'add_new_item' => __('Add New Service'), 
        'edit_item' => __('Edit Service'), 
        'new_item' => __('New Service'), 

        'view_item' => __('View Service'), 
        'search_items' => __('Search Service'), 
        'not_found' => __('Nothing found'), 
        'not_found_in_trash' => __('Nothing found in Trash'), 
        'parent_item_colon' => ''
    );   

    $args = array( 
        'labels' => $labels, 
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true, 
        'menu_icon' => '', 
        'rewrite' => array( 'slug' => 'service', 'with_front'=> true ), 
        'capability_type' => 'post', 
        'hierarchical' => true,
        'has_archive' => true,  
        'menu_position' => null, 
        'menu_icon' => 'dashicons-screenoptions',
        'supports' => array('title','editor','thumbnail','excerpt') 
    );   

    register_post_type( 'services' , $args ); 

    register_taxonomy( 'categories', array('services'), array(
        'hierarchical' => true, 
        'label' => 'Categories', 
        'singular_label' => 'Category', 
        'rewrite' => array( 'slug' => 'categories', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'categories', 'services' );
}

//Add Short Code for the Footer Dynamic Copyright Year Change
function fn_footer_copyright_year_shortcode() {
    $year = date_i18n ('Y');

    return $year;
}

//Add Shortcode Hook
add_shortcode ('year', 'fn_footer_copyright_year_shortcode');


/*---------------------------------------
------------GET META OPTIONS-------------
-----------------------------------------*/
function theme_get_meta_option($post_id, $opt_id)
{
  if (class_exists('CSF')) {
    $meta_value = get_post_meta($post_id, $opt_id, true);
    return $meta_value;
  } else {
    return theme_get_default_meta_option_value($opt_id);
  }
}


/*---------------------------------------
--------------THEME OPTIONS--------------
-----------------------------------------*/
function theme_get_option($opt_id)
{
  if (class_exists('CSF')) {
    $options = get_option('_theme_theme_options'); // unique id of the framework
    if (isset($options[$opt_id])) {
      return $options[$opt_id];
    } else {
      return '';
    }
  } else {
    return theme_get_default_option_value($opt_id);
  }
}