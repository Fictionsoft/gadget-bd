<?php 
	
	// Style register	
	function new_project_style_js(){
		wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
		wp_register_style('font_waesome', get_template_directory_uri().'/css/font-awesome.min.css');	
		wp_register_style('style', get_template_directory_uri().'/style.css');
		
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('font_waesome');
		wp_enqueue_style('style');	
		
		wp_register_script('js_jquery', get_template_directory_uri(). '/js/jquery.min.js');
		wp_register_script('js_bootstrap', get_template_directory_uri().'/js/bootstrap.min.js');
		
		wp_enqueue_script('js_jquery');
		wp_enqueue_script('js_bootstrap');
	}
	add_action('wp_enqueue_scripts', 'new_project_style_js');
	
	
	// Theme support
	function new_project_theme_setup(){	
		// Text domainload	
		load_theme_textdomain('transilator', get_template_directory().'/languages');
		
		add_theme_support('title-tag');				
		add_theme_support('post-thumbnails');
		
		add_theme_support( 'automatic-feed-links' );
		
		register_nav_menus(array(
			'main-menu' => __('Main Menu', 'transilator')
			
		));
		
	}
	add_action('after_setup_theme', 'new_project_theme_setup');
	
	
	// Widget create
	function new_project_register_widgets(){
		// Heaser right widget
		register_sidebar(array(
			'name'         => __('Header Right', 'transilator'),
			'id'           => 'header-right',
			'description'  => __('You can change here your header right informations'),
			'before_widget'=> '<div class="header_rignt">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="header_rignt_title">',
			'after_title'  => '</h3>'
		
		));	
		
		// Footer widtet
		register_sidebar(array(
			'name'         => __('Footer', 'transilator'),
			'id'           => 'footer-info',
			'description'  => __('Add widgets here to footer informations'),
			'before_widget'=> '<div class="footer_widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="footer_widget_title">',
			'after_title'  => '</h3>'
		
		));	
		
		// Home sidebar
		register_sidebar(array(
			'name'         => __('Home Sidebar', 'transilator'),
			'id'           => 'home-sidebar',
			'description'  => __('Add widgets here to home sidebar informations'),
			'before_widget'=> '<div class="home_right_side">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="home_right_side_title">',
			'after_title'  => '</h3>'
		
		));	
		
		// Blog feature image
		register_sidebar(array(
			'name'         => __('Blog Feature Image', 'transilator'),
			'id'           => 'blog-feature',
			'description'  => __('Add widgets here to blog feature image'),
			'before_widget'=> '',
			'after_widget' => '',
			'before_title' => '<h3 class="footer_widget_title">',
			'after_title'  => '</h3>'
		
		));	
		
		// Signle page feature image
		register_sidebar(array(
			'name'         => __('Single Feature Image', 'transilator'),
			'id'           => 'single-feature',
			'description'  => __('Add widgets here to blog feature image'),
			'before_widget'=> '',
			'after_widget' => '',
			'before_title' => '<h3 class="footer_widget_title">',
			'after_title'  => '</h3>'
		
		));	
		
		
		
	}
	
	add_action('widgets_init', 'new_project_register_widgets');
	
	
	// Register custom post
	function new_project_register_post_type(){
		
		$labels = array(
			'name'               => _x( 'Books', 'post type general name', 'transilator' ),
			'singular_name'      => _x( 'Book', 'post type singular name', 'transilator' ),
			'menu_name'          => _x( 'Books', 'admin menu', 'transilator' ),
			'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'transilator' ),
			'add_new'            => _x( 'Add New', 'book', 'transilator' ),
			'add_new_item'       => __( 'Add New Book', 'transilator' ),
			'new_item'           => __( 'New Book', 'transilator' ),
			'edit_item'          => __( 'Edit Book', 'transilator' ),
			'view_item'          => __( 'View Book', 'transilator' ),
			'all_items'          => __( 'All Books', 'transilator' ),
			'search_items'       => __( 'Search Books', 'transilator' ),
			'parent_item_colon'  => __( 'Parent Books:', 'transilator' ),
			'not_found'          => __( 'No books found.', 'transilator' ),
			'not_found_in_trash' => __( 'No books found in Trash.', 'transilator' )
		);

		$args = array(
			'labels'             => $labels,
			'description'        => __( 'Description.', 'transilator' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'book' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
		);
		
		register_post_type('new-post_tyle', $args);
		
	}
	
	add_action('init', 'new_project_register_post_type');
	
	

?>