<?php 

add_action( 'init', 'smamo_add_vogn' );

function smamo_add_vogn() {
	register_post_type( 'vogn', array(
		
        'menu_icon' 		 => 'dashicons-clipboard',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'rewrite'            => array( 'slug' => 'vogn' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title', 'thumbnail','editor'),
        'labels'             => array(
            
            'name'               => _x( 'Maskiner', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Maskine', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Maskiner', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Maskiner', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'maskine', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny maskine', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se maskine', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find maskine', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt maskine.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}


?>