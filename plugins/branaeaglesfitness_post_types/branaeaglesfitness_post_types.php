<?php
/*
    Plugin Name: Brana Eagles Fitness  - Post Types
    Plugin URI:
    Description: Adds a new custom Post Type
    Version: 1.0.0
    Author: Nimrod Musungu
    Author URI: http://nimrod.emerginghost.co.ke
    Text Domain: branaeaglesfitness
*/


if(!defined('ABSPATH')) die();

function branaeaglesfitness_classes_post_type() {

	$labels = array(
		'name'                  => _x( 'Classes', 'Post Type General Name', 'branaeaglesfitness' ),
		'singular_name'         => _x( 'Class', 'Post Type Singular Name', 'branaeaglesfitness' ),
		'menu_name'             => __( 'Classes', 'branaeaglesfitness' ),
		'name_admin_bar'        => __( 'Class', 'branaeaglesfitness' ),
		'archives'              => __( 'Archive', 'branaeaglesfitness' ),
		'attributes'            => __( 'Atributes', 'branaeaglesfitness' ),
		'parent_item_colon'     => __( 'Parent Class', 'branaeaglesfitness' ),
		'all_items'             => __( 'All Classes', 'branaeaglesfitness' ),
		'add_new_item'          => __( 'Add Class', 'branaeaglesfitness' ),
		'add_new'               => __( 'Add Class', 'branaeaglesfitness' ),
		'new_item'              => __( 'New Class', 'branaeaglesfitness' ),
		'edit_item'             => __( 'Edit Class', 'branaeaglesfitness' ),
		'update_item'           => __( 'Update Class', 'branaeaglesfitness' ),
		'view_item'             => __( 'View Class', 'branaeaglesfitness' ),
		'view_items'            => __( 'View Classes', 'branaeaglesfitness' ),
		'search_items'          => __( 'Search Class', 'branaeaglesfitness' ),
		'not_found'             => __( 'Not Found', 'branaeaglesfitness' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'branaeaglesfitness' ),
		'featured_image'        => __( 'Featured Image', 'branaeaglesfitness' ),
		'set_featured_image'    => __( 'Save Featured Image', 'branaeaglesfitness' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'branaeaglesfitness' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'branaeaglesfitness' ),
		'insert_into_item'      => __( 'Insert in Class', 'branaeaglesfitness' ),
		'uploaded_to_this_item' => __( 'Add in Class', 'branaeaglesfitness' ),
		'items_list'            => __( 'Classes List', 'branaeaglesfitness' ),
		'items_list_navigation' => __( 'Navigate to Classes', 'branaeaglesfitness' ),
		'filter_items_list'     => __( 'Filter Classes', 'branaeaglesfitness' ),
	);
	$args = array(
		'label'                 => __( 'Class', 'branaeaglesfitness' ),
		'description'           => __( 'Classes of Brana Eagles Fitness Center', 'branaeaglesfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, //true = posts, false= páginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gymfitness_clases', $args );

}
add_action( 'init', 'branaeaglesfitness_classes_post_type', 0 );



// Why Choose Us
function branaeaglesfitness_wcu_post_type() {

	$labels = array(
		'name'                  => _x( 'Features', 'Post Type General Name', 'branaeaglesfitness' ),
		'singular_name'         => _x( 'Feature', 'Post Type Singular Name', 'branaeaglesfitness' ),
		'menu_name'             => __( 'Features', 'branaeaglesfitness' ),
		'name_admin_bar'        => __( 'Feature', 'branaeaglesfitness' ),
		'archives'              => __( 'Archive', 'branaeaglesfitness' ),
		'attributes'            => __( 'Atributes', 'branaeaglesfitness' ),
		'parent_item_colon'     => __( 'Parent Feature', 'branaeaglesfitness' ),
		'all_items'             => __( 'All Features', 'branaeaglesfitness' ),
		'add_new_item'          => __( 'Add Feature', 'branaeaglesfitness' ),
		'add_new'               => __( 'Add Feature', 'branaeaglesfitness' ),
		'new_item'              => __( 'New Feature', 'branaeaglesfitness' ),
		'edit_item'             => __( 'Edit Feature', 'branaeaglesfitness' ),
		'update_item'           => __( 'Update Feature', 'branaeaglesfitness' ),
		'view_item'             => __( 'View Feature', 'branaeaglesfitness' ),
		'view_items'            => __( 'View Features', 'branaeaglesfitness' ),
		'search_items'          => __( 'Search Feature', 'branaeaglesfitness' ),
		'not_found'             => __( 'Not Found', 'branaeaglesfitness' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'branaeaglesfitness' ),
		'featured_image'        => __( 'Featured Image', 'branaeaglesfitness' ),
		'set_featured_image'    => __( 'Save Featured Image', 'branaeaglesfitness' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'branaeaglesfitness' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'branaeaglesfitness' ),
		'insert_into_item'      => __( 'Insert in Feature', 'branaeaglesfitness' ),
		'uploaded_to_this_item' => __( 'Add in Feature', 'branaeaglesfitness' ),
		'items_list'            => __( 'Features List', 'branaeaglesfitness' ),
		'items_list_navigation' => __( 'Navigate to Features', 'branaeaglesfitness' ),
		'filter_items_list'     => __( 'Filter Features', 'branaeaglesfitness' ),
	);
	$args = array(
		'label'                 => __( 'Feature', 'branaeaglesfitness' ),
		'description'           => __( 'Features of Brana Eagles Fitness Center', 'branaeaglesfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, //true = posts, false= páginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-admin-generic',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gymfitness_features', $args );

}
add_action( 'init', 'branaeaglesfitness_wcu_post_type', 0 );


?>