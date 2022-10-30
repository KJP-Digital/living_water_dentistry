<?php
/**
*
* Theme Name: Wordpress customizer Settings
* 
*/
// WP_Customize_Control - is a class which is used different customizer settings in the WP theme. We can change the value and element

function fn_customizer_settings($wp_customizer) {

	//Add a customizer settings
	//Include a new section
	$wp_customizer->add_section('banner_settings', array(
		'title' => __('Banner Settings', 'lwd'),
		'priority' => 70
	));

	//Allow us to add capability to the customizer settings
	$wp_customizer->add_setting('banner_image', array(
		'capability' => 'edit_theme_options'
	));

	//Add controles in the customizer settings
	$wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'banner_image', array(
		'label' => __('Banner Image', 'lwd'),
		'description' => 'Change Banner Image',
		'section' => 'banner_settings'
	)));

	//Allow us to add capability to the customizer settings for banner title text
	$wp_customizer->add_setting('banner_text_field', array(
		'capability' => 'edit_theme_options',
		'default' => 'Banner Title'
	));

	//Add controles in the customizer settings
	$wp_customizer->add_control('banner_text_control', array(
		'label' => __('Banner Title', 'lwd'),
		'description' => 'Change Banner Title',
		'section' => 'banner_settings',
		'settings' => 'banner_text_field'
	));

	//Allow us to add capability to the customizer settings for banner image alt text
	$wp_customizer->add_setting('banner_alt_field', array(
		'capability' => 'edit_theme_options'
	));

	//Add controles in the customizer settings
	$wp_customizer->add_control('banner_description_control', array(
		'label' => __('Banner Description', 'lwd'),
		'description' => 'Change Banner Description',
		'section' => 'banner_settings',
		'settings' => 'banner_desc_field'
	));

	//Allow us to add capability to the customizer settings for banner description text
	$wp_customizer->add_setting('banner_desc_field', array(
		'capability' => 'edit_theme_options'
	));

	//Add controles in the customizer settings
	$wp_customizer->add_control('banner_description_control', array(
		'label' => __('Banner Description', 'lwd'),
		'description' => 'Change Banner Description',
		'section' => 'banner_settings',
		'settings' => 'banner_desc_field'
	));

	//Allow us to add capability to the customizer settings for banner editor text
	$wp_customizer->add_setting('banner_editor_field', array(
		'capability' => 'edit_theme_options'
	));

	//Add controles in the customizer settings
	$wp_customizer->add_control('banner_editor_control', array(
		'label' => __('Banner Editor', 'lwd'),
		'description' => 'Change Banner Editor',
		'section' => 'banner_settings',
		'settings' => 'banner_editor_field'
	));
}

add_action('customize_register', 'fn_customizer_settings');

/*function wporg_add_custom_box() {
	$screens = [ 'post', 'wporg_cpt' ];
	foreach ( $screens as $screen ) {
		add_meta_box(
				'my_metabox_id',                 // Unique ID
				'my_metabox',      // Box title
				'wporg_custom_box_html',  // Content callback, must be of type callable
				$screen                            // Post type
				);
	}
}
add_action( 'add_meta_boxes', 'wporg_add_custom_box' );

function wporg_custom_box_html( $post ) {
	 $args = array('quicktags' => false);
	 wp_editor(  'Welcome to WP'  , 'test-editor', $args );
}*/

?>