<?php
    define('THEME_NAME','BD Supershop');
    define('THEME_V', '1.0.0');
    define('TRANSLATOR','bd_sup_translator');
    //include('woocommerce/checkout/content-products.php');

	
	// Style register	
	function bd_sup_style_js(){
		wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
		wp_register_style('font_waesome', get_template_directory_uri().'/css/font-awesome.min.css');	
		wp_register_style('jquery_ui', get_template_directory_uri().'/css/jquery-ui.css');
		wp_register_style('style', get_template_directory_uri().'/style.css');
		
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('font_waesome');
		wp_enqueue_style('jquery_ui');
		wp_enqueue_style('style');
		
		wp_register_script('js_jquery', get_template_directory_uri(). '/js/jquery.min.js');
		wp_register_script('js_bootstrap', get_template_directory_uri().'/js/bootstrap.min.js');
        wp_register_script('jquery_ui_js', get_template_directory_uri().'/js/jquery-ui.js');
		wp_register_script('bd_supershop', get_template_directory_uri().'/js/bd-supershop.js');

		wp_enqueue_script('js_jquery');
		wp_enqueue_script('js_bootstrap');
		wp_enqueue_script('jquery_ui_js');
		wp_enqueue_script('bd_supershop');
	}
	add_action('wp_enqueue_scripts', 'bd_sup_style_js');
	
	
	// Theme support
	function bd_sup_theme_setup(){	
		// Text domainload	
		load_theme_textdomain('bd_sup_translator', get_template_directory().'/languages');
		
		add_theme_support('title-tag');				
		add_theme_support('post-thumbnails');
		
		add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'woocommerce' );
		
		register_nav_menus(array(
			'main-menu' => __('Main Menu', 'bd_sup_translator'),
			'footer-menu' => __('footer Menu', 'bd_sup_translator')
		));
		
	}
	add_action('after_setup_theme', 'bd_sup_theme_setup');


    include_once('inc/widget.php');
    include_once('inc/bd_custom_post.php');

	// Widget create
	function bd_sup_register_widgets(){
		// Shop sidebar widget
		register_sidebar(array(
			'name'         => __('Shop Sidebar', 'bd_sup_translator'),
			'id'           => 'shop-sidebar',
			'description'  => __('You can change here your shop sidebar informations'),
			'before_widget'=> '<div class="shop_sidebar_widget_before">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="shop_sidebar_widget_title_before">',
			'after_title'  => '</h3>'
		
		));

        // Header search widget
        register_sidebar(array(
            'name'         => __('Header Search', 'bd_sup_translator'),
            'id'           => 'header-search',
            'description'  => __('You can add here your product search'),
            'before_widget'=> '<div class="_widget_before">',
            'after_widget' => '</div>',
        ));

        // url_based_sidebar
        register_sidebar(array(
            'name'         => __('URL Based', 'bd_sup_translator'),
            'id'           => 'url-based',
            'description'  => __('You can add here your url based '),
            'before_widget'=> '',
            'after_widget' => '',
        ));



    }
	
	add_action('widgets_init', 'bd_sup_register_widgets');
	

    /*
	// Register custom post
	/*function bd_sup_register_post_type(){
		
		$labels = array(
			'name'               => _x( 'Books', 'post type general name', 'bd_sup_translator' ),
			'singular_name'      => _x( 'Book', 'post type singular name', 'bd_sup_translator' ),
			'menu_name'          => _x( 'Books', 'admin menu', 'bd_sup_translator' ),
			'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'bd_sup_translator' ),
			'add_new'            => _x( 'Add New', 'book', 'bd_sup_translator' ),
			'add_new_item'       => __( 'Add New Book', 'bd_sup_translator' ),
			'new_item'           => __( 'New Book', 'bd_sup_translator' ),
			'edit_item'          => __( 'Edit Book', 'bd_sup_translator' ),
			'view_item'          => __( 'View Book', 'bd_sup_translator' ),
			'all_items'          => __( 'All Books', 'bd_sup_translator' ),
			'search_items'       => __( 'Search Books', 'bd_sup_translator' ),
			'parent_item_colon'  => __( 'Parent Books:', 'bd_sup_translator' ),
			'not_found'          => __( 'No books found.', 'bd_sup_translator' ),
			'not_found_in_trash' => __( 'No books found in Trash.', 'bd_sup_translator' )
		);

		$args = array(
			'labels'             => $labels,
			'description'        => __( 'Description.', 'bd_sup_translator' ),
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
	
	add_action('init', 'bd_sup_register_post_type');*/


    /*======================================
     * Woocommerce Customization functionality
     *
     *======================================*/

    //Remove Sales Flash
    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
    remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );


    // Woocommerce default button text customize
    add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );
    /**
     * custom_woocommerce_template_loop_add_to_cart
     */
    function custom_woocommerce_product_add_to_cart_text() {
        global $product;

        $product_type = $product->get_type();

        switch ( $product_type ) {
            case 'external':
                return __( 'Buy product', 'woocommerce' );
                break;
            case 'grouped':
                return __( 'View products', 'woocommerce' );
                break;
            case 'simple':
                return __( 'Add to cart', 'woocommerce' );
                break;
            case 'variable':
                return __( 'Select options', 'woocommerce' );
                break;
            default:
                return __( 'Read more', 'woocommerce' );
        }

    }


    // Add the img wrap
    add_action( 'woocommerce_before_shop_loop_item_title', create_function('', 'echo "<div class=\"product_img_wrap\">";'), 5, 2);
    add_action( 'woocommerce_before_shop_loop_item_title',create_function('', 'echo "</div>";'), 12, 2);


/************Menu Removed************/
    $user = wp_get_current_user();
    if ( in_array( 'shop_manager', (array) $user->roles ) ) {
        //The user has the "author" role

        function remove_menus(){
            //remove_menu_page( 'index.php' );                  //Dashboard
            remove_menu_page( 'edit.php' );                   //Posts
            remove_menu_page( 'upload.php' );                 //Media
            //remove_menu_page( 'edit.php?post_type=page' );    //Pages
            remove_menu_page( 'edit-comments.php' );          //Comments
            //remove_menu_page( 'themes.php' );                 //Appearance
            // remove_menu_page( 'plugins.php' );                //Plugins
            //remove_menu_page( 'users.php' );                  //Users
            remove_menu_page( 'tools.php' );                  //Tools
            //remove_menu_page( 'options-general.php' );        //Settings
        }
        add_action( 'admin_menu', 'remove_menus' );
    }

    //product sorting option customize
    add_filter('woocommerce_catalog_orderby', 'wc_customize_product_sorting');

    function wc_customize_product_sorting($sorting_options){
        $sorting_options = array(
            'menu_order' => __( 'Sorting', 'woocommerce' ),
            'popularity' => __( 'Sort by popularity', 'woocommerce' ),
            'rating'     => __( 'Sort by average rating', 'woocommerce' ),
            'date'       => __( 'Sort by newness', 'woocommerce' ),
            'price'      => __( 'Sort by price: low to high', 'woocommerce' ),
            'price-desc' => __( 'Sort by price: high to low', 'woocommerce' )
        );

        return $sorting_options;
    }

    /**
     *Reduce the strength requirement on the woocommerce password.
     *
     * Strength Settings
     * 3 = Strong (default)
     * 2 = Medium
     * 1 = Weak
     * 0 = Very Weak / Anything
     */
    function reduce_woocommerce_min_strength_requirement( $strength ) {
        return 0;
    }
    add_filter( 'woocommerce_min_password_strength', 'reduce_woocommerce_min_strength_requirement' );

/************Logo changer************/
function logo_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'site_logo' ); // Add setting for logo uploader

    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_logo', array(
        'label'    => __( 'Upload Logo', 'bd_sup_translator' ),
        'section'  => 'title_tagline',
        'settings' => 'site_logo',
    ) ) );
}
add_action( 'customize_register', 'logo_customize_register' );



