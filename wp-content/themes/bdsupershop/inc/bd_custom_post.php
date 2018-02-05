<?php

   // add_action( 'init', 'bd_custom_post' );
    /**
    * Register a Brand post type.
    *
    * @link http://codex.wordpress.org/Function_Reference/register_post_type
    */
   /* function bd_custom_post() {
        $labels = array(
        'name'               => _x( 'Brands', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Brand', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Brands', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Brand', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'Brand', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Brand', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Brand', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Brand', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Brand', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Brands', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Brands', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Brands:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No Brands found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No Brands found in Trash.', 'your-plugin-textdomain' )
        );

        $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'brand' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        );

        register_post_type( 'brand', $args );
    }*/

    // hook into the init action and call create_Brand_taxonomies when it fires
    add_action( 'init', 'bd_taxonomies', 0 );

    // create two taxonomies, brands and writers for the post type "Brand"
    function bd_taxonomies() {
        // Add new taxonomy, make it hierarchical (like categories)
        $labels = array(
            'name'              => _x( 'Brands', 'taxonomy general name', 'textdomain' ),
            'singular_name'     => _x( 'Brand', 'taxonomy singular name', 'textdomain' ),
            'search_items'      => __( 'Search Brands', 'textdomain' ),
            'all_items'         => __( 'All Brands', 'textdomain' ),
            'parent_item'       => __( 'Parent Brand', 'textdomain' ),
            'parent_item_colon' => __( 'Parent Brand:', 'textdomain' ),
            'edit_item'         => __( 'Edit Brand', 'textdomain' ),
            'update_item'       => __( 'Update Brand', 'textdomain' ),
            'add_new_item'      => __( 'Add New Brand', 'textdomain' ),
            'new_item_name'     => __( 'New Brand Name', 'textdomain' ),
            'menu_name'         => __( 'Brands', 'textdomain' ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'brand' ),
        );

        //register_taxonomy( 'brand', array( 'Brand', 'product' ), $args );
        register_taxonomy( 'brand', array('product' ), $args );


    }
