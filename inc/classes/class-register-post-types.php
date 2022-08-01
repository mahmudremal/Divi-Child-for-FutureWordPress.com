<?php
/**
 * Register Post Types
 *
 * @package Divi-child
 */

namespace DIVI_CHILD_THEME\Inc;

use DIVI_CHILD_THEME\Inc\Traits\Singleton;

class Register_Post_Types {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'init', [ $this, 'create_service_cpt' ], 0 );
		add_action( 'init', [ $this, 'create_projects_cpt' ], 0 );

	}

	// Register Custom Post Type Movie
	public function create_service_cpt() {

		$labels = [
			'name'                  => _x( 'Services', 'Post Type General Name', 'aquila' ),
			'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'aquila' ),
			'menu_name'             => _x( 'Services', 'Admin Menu text', 'aquila' ),
			'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'aquila' ),
			'archives'              => __( 'Service Archives', 'aquila' ),
			'attributes'            => __( 'Service Attributes', 'aquila' ),
			'parent_item_colon'     => __( 'Parent Service:', 'aquila' ),
			'all_items'             => __( 'All Services', 'aquila' ),
			'add_new_item'          => __( 'Add New Service', 'aquila' ),
			'add_new'               => __( 'Add New', 'aquila' ),
			'new_item'              => __( 'New Service', 'aquila' ),
			'edit_item'             => __( 'Edit Service', 'aquila' ),
			'update_item'           => __( 'Update Service', 'aquila' ),
			'view_item'             => __( 'View Service', 'aquila' ),
			'view_items'            => __( 'View Services', 'aquila' ),
			'search_items'          => __( 'Search Service', 'aquila' ),
			'not_found'             => __( 'Not found', 'aquila' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'aquila' ),
			'featured_image'        => __( 'Featured Image', 'aquila' ),
			'set_featured_image'    => __( 'Set featured image', 'aquila' ),
			'remove_featured_image' => __( 'Remove featured image', 'aquila' ),
			'use_featured_image'    => __( 'Use as featured image', 'aquila' ),
			'insert_into_item'      => __( 'Insert into Service', 'aquila' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Service', 'aquila' ),
			'items_list'            => __( 'Services list', 'aquila' ),
			'items_list_navigation' => __( 'Services list navigation', 'aquila' ),
			'filter_items_list'     => __( 'Filter Services list', 'aquila' ),
		];
		$args   = [
			'label'               => __( 'Service', 'aquila' ),
			'description'         => __( 'The Services', 'aquila' ),
			'labels'              => $labels,
			'menu_icon'           => 'dashicons-video-alt',
			'supports'            => [
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',
				'author',
				'comments',
				'trackbacks',
				'page-attributes',
				'custom-fields',
			],
			'taxonomies'          => [],
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'hierarchical'        => false,
			'exclude_from_search' => false,
			'show_in_rest'        => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		];

		register_post_type( 'services', $args );

	}
	public function create_projects_cpt() {

		$labels = [
			'name'                  => _x( 'Projects', 'Post Type General Name', 'aquila' ),
			'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'aquila' ),
			'menu_name'             => _x( 'Projects', 'Admin Menu text', 'aquila' ),
			'name_admin_bar'        => _x( 'Project', 'Add New on Toolbar', 'aquila' ),
			'archives'              => __( 'Project Archives', 'aquila' ),
			'attributes'            => __( 'Project Attributes', 'aquila' ),
			'parent_item_colon'     => __( 'Parent Project:', 'aquila' ),
			'all_items'             => __( 'All Projects', 'aquila' ),
			'add_new_item'          => __( 'Add New Project', 'aquila' ),
			'add_new'               => __( 'Add New', 'aquila' ),
			'new_item'              => __( 'New Project', 'aquila' ),
			'edit_item'             => __( 'Edit Project', 'aquila' ),
			'update_item'           => __( 'Update Project', 'aquila' ),
			'view_item'             => __( 'View Project', 'aquila' ),
			'view_items'            => __( 'View Projects', 'aquila' ),
			'search_items'          => __( 'Search Project', 'aquila' ),
			'not_found'             => __( 'Not found', 'aquila' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'aquila' ),
			'featured_image'        => __( 'Featured Image', 'aquila' ),
			'set_featured_image'    => __( 'Set featured image', 'aquila' ),
			'remove_featured_image' => __( 'Remove featured image', 'aquila' ),
			'use_featured_image'    => __( 'Use as featured image', 'aquila' ),
			'insert_into_item'      => __( 'Insert into Project', 'aquila' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Project', 'aquila' ),
			'items_list'            => __( 'Projects list', 'aquila' ),
			'items_list_navigation' => __( 'Projects list navigation', 'aquila' ),
			'filter_items_list'     => __( 'Filter Projects list', 'aquila' ),
		];
		$args   = [
			'label'               => __( 'Project', 'aquila' ),
			'description'         => __( 'The Projects', 'aquila' ),
			'labels'              => $labels,
			'menu_icon'           => 'dashicons-video-alt',
			'supports'            => [
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',
				'author',
				'comments',
				'trackbacks',
				'page-attributes',
				'custom-fields',
			],
			'taxonomies'          => [],
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'hierarchical'        => false,
			'exclude_from_search' => false,
			'show_in_rest'        => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		];

		register_post_type( 'projects', $args );

	}

}
