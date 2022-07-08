/*
* Creating a function to create our CPT
*/
  
function custom_post_type() {
  
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Projects', 'Post Type General Name', 'threesystems' ),
			'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'threesystems' ),
			'menu_name'           => __( 'Projects', 'threesystems' ),
			'parent_item_colon'   => __( 'Parent Project', 'threesystems' ),
			'all_items'           => __( 'All Projects', 'threesystems' ),
			'view_item'           => __( 'View Project', 'threesystems' ),
			'add_new_item'        => __( 'Add New Project', 'threesystems' ),
			'add_new'             => __( 'Add New', 'threesystems' ),
			'edit_item'           => __( 'Edit Project', 'threesystems' ),
			'update_item'         => __( 'Update Project', 'threesystems' ),
			'search_items'        => __( 'Search Project', 'threesystems' ),
			'not_found'           => __( 'Not Found', 'threesystems' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'threesystems' ),
		);
		  
	// Set other options for Custom Post Type
		  
		$args = array(
			'label'               => __( 'Projects', 'threesystems' ),
			'description'         => __( 'Project by Three System Solutions', 'threesystems' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
				
'menu_icon'           => 'dashicons-hammer',
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	  
		);
		  
		// Registering your Custom Post Type
		register_post_type( 'Projects', $args );
	  
	}
	  
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	  
	add_action( 'init', 'custom_post_type', 0 );
