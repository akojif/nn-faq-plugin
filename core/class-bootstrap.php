<?php

class Nannynina_Bootstrap {

	public function __construct() {
        if ( !post_type_exists( 'faq' ) ) {
            add_action( 'init', array( $this, 'register_post_type' ) );
        }

        new Nannynina_Api();
	}


    /**
     * Custom Post Type Registration In Case We Don't have one
     */
	public function register_post_type() {

        // Register FAQ
        $labels = array(
            'name'                  => _x( 'FAQ', 'Post type general name', 'nannynina' ),
            'singular_name'         => _x( 'FAQ', 'Post type singular name', 'nannynina' ),
            'menu_name'             => _x( 'FAQ', 'Admin Menu text', 'nannynina' ),
            'name_admin_bar'        => _x( 'FAQ', 'Add New on Toolbar', 'nannynina' ),
            'add_new'               => __( 'Add New', 'nannynina' ),
            'add_new_item'          => __( 'Add New FAQ', 'nannynina' ),
            'new_item'              => __( 'New FAQ', 'nannynina' ),
            'edit_item'             => __( 'Edit FAQ', 'nannynina' ),
            'view_item'             => __( 'View FAQ', 'nannynina' ),
            'all_items'             => __( 'All FAQ', 'nannynina' ),
            'search_items'          => __( 'Search FAQ', 'nannynina' ),
            'parent_item_colon'     => __( 'Parent FAQ:', 'nannynina' ),
            'not_found'             => __( 'No projects found.', 'nannynina' ),
            'not_found_in_trash'    => __( 'No projects found in Trash.', 'nannynina' ),
            'featured_image'        => _x( 'FAQ Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'nannynina' ),
            'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'nannynina' ),
            'remove_featured_image' => _x( 'Remove featured image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'nannynina' ),
            'use_featured_image'    => _x( 'Use as featured image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'nannynina' ),
            'archives'              => _x( 'FAQ archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'nannynina' ),
            'insert_into_item'      => _x( 'Insert into FAQ', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'nannynina' ),
            'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'nannynina' ),
            'filter_items_list'     => _x( 'Filter projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'nannynina' ),
            'items_list_navigation' => _x( 'FAQ list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'nannynina' ),
            'items_list'            => _x( 'FAQ list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'nannynina' ),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => false,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'faq' ),
            'capability_type'    => 'post',
            'has_archive'        => false,
            'hierarchical'       => false,
            'menu_position'      => 20,
            'menu_icon'          => 'dashicons-yes',
            'supports'           => array( 'title', 'editor' ),
        );

        register_post_type( 'faq', $args );

	}



}