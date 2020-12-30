<?php

	function init_hook() {
		add_theme_support( 'post-thumbnails' );
	}
	add_action('init', 'init_hook');

	function my_theme_enqueue_styles() {
		wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
		wp_enqueue_style( 'reward', get_template_directory_uri() . '/reward-catalog.css');

		wp_dequeue_script( 'jquery' );

		wp_enqueue_script('jquery-lib', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js');
		// wp_enqueue_script('jquery.magnific-popup.min', '//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js');
		wp_enqueue_script('lodash-new', '//cdnjs.cloudflare.com/ajax/libs/lodash.js/3.5.0/lodash.min.js');
		wp_enqueue_script('isotope', '//unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js');
		wp_enqueue_script('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');
	}
	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Register Custom Post Type Service
function create_service_cpt() {

	$args = array(
		'label' => __( 'Rewards', '' ),
		'description' => __( 'Custom post type ', '' ),
		'menu_icon' => 'dashicons-buddicons-topics',
		'supports' => array('title', 'thumbnail', 'page-attributes'),
		// 'taxonomies' => array('category', 'post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'rewards', $args );

	// Now register the taxonomy
	  register_taxonomy('reward-categories',array('rewards'), array(
	    'hierarchical' => true,
	    'label'=> __( 'Categories', '' ),
	    'show_ui' => true,
	    'show_in_rest' => true,
	    'show_admin_column' => true,
	    'query_var' => true,
	  ));
	  register_taxonomy('reward-country',array('rewards'), array(
	    'hierarchical' => true,
	    'label'=> __( 'Country', '' ),
	    'show_ui' => true,
	    'show_in_rest' => true,
	    'show_admin_column' => true,
	    'query_var' => true,
	  ));
	  register_taxonomy('reward-currency',array('rewards'), array(
	    'hierarchical' => true,
	    'label'=> __( 'Currency', '' ),
	    'show_ui' => true,
	    'show_in_rest' => true,
	    'show_admin_column' => true,
	    'query_var' => true,
	  ));

}
add_action( 'init', 'create_service_cpt', 0 );


// function my_load_ajax_content () {
//     // You need to grab the data from $_POST variable
//     // And must sanitize the data.
//     $pid = intval($_POST['postid']);
//     $the_query  = new WP_Query(array('p' => $pid));

//     if ($the_query->have_posts()) {
//         while ( $the_query->have_posts() ) {
//             $the_query->the_post();
//             $data = '
//             <div class="post-container">
//                 <div id="project-content">
//                     <h1 class="entry-title">' . get_the_title() . '</h1>
//                     <div class="entry-content">' . get_the_content() . '</div>
//                 </div>
//             </div>  
//             ';
//         }
//     }
//     else {
//         // Since you're declared the $data variable before then assign the next value also in $data
//         // And at the end just echo it.
//         $data = '<div id="postdata">'.__('Didnt find anything', THEME_NAME).'</div>';
//     }
//     wp_reset_postdata();

//     echo '<div id="postdata">'. $data .'</div>';
//     // And must die() the function
//     die();
// }
// // The actual hook is wp_ajax_noprive_{$action} and wp_ajax_{$action}
// // You action is my_load_ajax_content in JS. So your hook will be
// add_action ( 'wp_ajax_nopriv_my_load_ajax_content', 'my_load_ajax_content' );
// add_action ( 'wp_ajax_my_load_ajax_content', 'my_load_ajax_content' );

// function my_enqueue() {
//     // First register script
//     wp_register_script( 'ajax-script', get_template_directory_uri() . '/js/custom.js', array('jquery') );
//     // Localize script
//     wp_localize_script( 'ajax-script', 'my_ajax_object',
//         array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
//     );
//     // Then enqueue script
//     wp_enqueue_script( 'ajax-script' );
// }

// add_action( 'wp_enqueue_scripts', 'my_enqueue' );