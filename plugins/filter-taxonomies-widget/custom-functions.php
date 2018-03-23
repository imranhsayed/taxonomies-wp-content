<?php
/**
 * Custom functions for Filter Taxonomies Widget.
 *
 * @package Filter Taxonomies Widget
 */
// Register Custom Post Type Product
// Post Type Key: product
function create_product_cpt() {

	$labels = array(
		'name' => __( 'Product', 'Post Type General Name', 'taxonomy-widget' ),
		'singular_name' => __( 'Product', 'Post Type Singular Name', 'taxonomy-widget' ),
		'menu_name' => __( 'Product', 'taxonomy-widget' ),
		'name_admin_bar' => __( 'Product', 'taxonomy-widget' ),
		'archives' => __( 'Product Archives', 'taxonomy-widget' ),
		'attributes' => __( 'Product Attributes', 'taxonomy-widget' ),
		'parent_item_colon' => __( 'Parent Product:', 'taxonomy-widget' ),
		'all_items' => __( 'All Product', 'taxonomy-widget' ),
		'add_new_item' => __( 'Add New Product', 'taxonomy-widget' ),
		'add_new' => __( 'Add New', 'taxonomy-widget' ),
		'new_item' => __( 'New Product', 'taxonomy-widget' ),
		'edit_item' => __( 'Edit Product', 'taxonomy-widget' ),
		'update_item' => __( 'Update Product', 'taxonomy-widget' ),
		'view_item' => __( 'View Product', 'taxonomy-widget' ),
		'view_items' => __( 'View Product', 'taxonomy-widget' ),
		'search_items' => __( 'Search Product', 'taxonomy-widget' ),
		'not_found' => __( 'Not found', 'taxonomy-widget' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'taxonomy-widget' ),
		'featured_image' => __( 'Featured Image', 'taxonomy-widget' ),
		'set_featured_image' => __( 'Set featured image', 'taxonomy-widget' ),
		'remove_featured_image' => __( 'Remove featured image', 'taxonomy-widget' ),
		'use_featured_image' => __( 'Use as featured image', 'taxonomy-widget' ),
		'insert_into_item' => __( 'Insert into Product', 'taxonomy-widget' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Product', 'taxonomy-widget' ),
		'items_list' => __( 'Product list', 'taxonomy-widget' ),
		'items_list_navigation' => __( 'Product list navigation', 'taxonomy-widget' ),
		'filter_items_list' => __( 'Filter Product list', 'taxonomy-widget' ),
	);
	$args = array(
		'label' => __( 'Product', 'taxonomy-widget' ),
		'description' => __( 'These are different products', 'taxonomy-widget' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-post',
		'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields', ),
		'taxonomies' => array(),
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
	register_post_type( 'product', $args );

}
add_action( 'init', 'create_product_cpt', 0 );

// Register Taxonomy Shirt
// Taxonomy Key: shirt
function create_product_tax() {

	$labels = array(
		'name'              => _x( 'Shirts', 'taxonomy general name', 'taxonomy-widget' ),
		'singular_name'     => _x( 'Shirt', 'taxonomy singular name', 'taxonomy-widget' ),
		'search_items'      => __( 'Search Shirts', 'taxonomy-widget' ),
		'all_items'         => __( 'All Shirts', 'taxonomy-widget' ),
		'parent_item'       => __( 'Parent Shirt', 'taxonomy-widget' ),
		'parent_item_colon' => __( 'Parent Shirt:', 'taxonomy-widget' ),
		'edit_item'         => __( 'Edit Shirt', 'taxonomy-widget' ),
		'update_item'       => __( 'Update Shirt', 'taxonomy-widget' ),
		'add_new_item'      => __( 'Add New Shirt', 'taxonomy-widget' ),
		'new_item_name'     => __( 'New Shirt Name', 'taxonomy-widget' ),
		'menu_name'         => __( 'Shirt', 'taxonomy-widget' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'types of shirts', 'taxonomy-widget' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_rest' => false,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'shirt', array('product' ), $args );

	$labels = array(
		'name'              => _x( 'T-Shirts', 'taxonomy general name', 'taxonomy-widget' ),
		'singular_name'     => _x( 'T-Shirt', 'taxonomy singular name', 'taxonomy-widget' ),
		'search_items'      => __( 'Search T-Shirts', 'taxonomy-widget' ),
		'all_items'         => __( 'All T-Shirts', 'taxonomy-widget' ),
		'parent_item'       => __( 'Parent T-Shirt', 'taxonomy-widget' ),
		'parent_item_colon' => __( 'Parent T-Shirt:', 'taxonomy-widget' ),
		'edit_item'         => __( 'Edit T-Shirt', 'taxonomy-widget' ),
		'update_item'       => __( 'Update T-Shirt', 'taxonomy-widget' ),
		'add_new_item'      => __( 'Add New T-Shirt', 'taxonomy-widget' ),
		'new_item_name'     => __( 'New T-Shirt Name', 'taxonomy-widget' ),
		'menu_name'         => __( 'T-Shirt', 'taxonomy-widget' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'types of t-shirts', 'taxonomy-widget' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_rest' => false,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'tshirt', array('product', ), $args );

	$labels = array(
		'name'              => _x( 'Colors', 'taxonomy general name', 'taxonomy-widget' ),
		'singular_name'     => _x( 'Color', 'taxonomy singular name', 'taxonomy-widget' ),
		'search_items'      => __( 'Search Colors', 'taxonomy-widget' ),
		'all_items'         => __( 'All Colors', 'taxonomy-widget' ),
		'parent_item'       => __( 'Parent Color', 'taxonomy-widget' ),
		'parent_item_colon' => __( 'Parent Color:', 'taxonomy-widget' ),
		'edit_item'         => __( 'Edit Color', 'taxonomy-widget' ),
		'update_item'       => __( 'Update Color', 'taxonomy-widget' ),
		'add_new_item'      => __( 'Add New Color', 'taxonomy-widget' ),
		'new_item_name'     => __( 'New Color Name', 'taxonomy-widget' ),
		'menu_name'         => __( 'Color', 'taxonomy-widget' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'colors description', 'taxonomy-widget' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_rest' => false,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'color', array('product', ), $args );

}
add_action( 'init', 'create_product_tax' );

function ihs_enqueue_scripts() {
	wp_enqueue_script( 'main_js', plugins_url( 'filter-taxonomies-widget' ) . '/js/main.js', array( 'jquery' ), '', true );
	wp_localize_script( 'main_js', 'postdata', array(
		'ajax_url' => admin_url( 'admin-ajax.php' ), // admin_url( 'admin-ajax.php' ) returns the url till admin-ajax.php file of wordpress.
		'ajax_nonce' => wp_create_nonce( 'ihs_nonce_action_name' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'ihs_enqueue_scripts' );

add_action( 'wp_ajax_my_ajax_hook', 'update_product_info' );

function update_product_info() {
	// If nonce verification fails die.
	if ( ! wp_verify_nonce( $_POST['security'], 'ihs_nonce_action_name' ) ) {
		wp_die();
	}

	$product_name = $_POST['product_name'];
	$product_cat_id = $_POST['product_cat'];
	$product_sub_cat_id = $_POST['product_sub_cat'];
	$product_color_name = $_POST['product_color'];

	$user_id =  get_current_user_id();
	$my_post = array(
		'post_author' => $user_id,
		'post_title'   => sanitize_text_field( $product_name ),
		'post_status'   => 'publish',
		'post_content'   => $product_name,
		'post_name' => sanitize_text_field( $product_name ),
		'post_type' => 'product'
	);
	$post_id = wp_insert_post( $my_post );
	echo $post_id;
	$term_array= array( $product_cat_id, $product_sub_cat_id );
	wp_set_post_terms( $post_id, $term_array, 'shirt' );

	wp_set_post_terms( $post_id, array( $product_color_name ), 'color' );

	wp_send_json_success( array(
		'my_data' => $user_id,  // Always pass your data here that you want to access in js file.
		'data_recieved_from_js' => $_POST,  // $_POST will contain the array of data object passed in js file second parameter. like action,name etc
	) );
}

add_action( 'wp_ajax_sub_cat_ajax', 'get_sub_cat_info' );

function get_sub_cat_info() {
	// If nonce verification fails die.
	if ( ! wp_verify_nonce( $_POST['security'], 'ihs_nonce_action_name' ) ) {
		wp_die();
	}

	$cat_id = $_POST['cat_id'];
	$args = array(
		'taxonomy' => 'shirt',
		'hide_empty' => false,
		'parent' => $cat_id
	);
	$shirt_sub_terms = get_terms( $args );
	$content = '';
	foreach ( $shirt_sub_terms as $term ) {
		$term_name = $term->name;
		$term_slug = $term->slug;
		$term_id = $term->term_id;
		$content .= '<option data-name="' . $term_slug . '" value="' . $term_id . '">
					' . $term_name .
					'</option>';
	}

	wp_send_json_success( array(
		'my_data' => $content,  // Always pass your data here that you want to access in js file.
		'data_recieved_from_js' => $_POST,  // $_POST will contain the array of data object passed in js file second parameter. like action,name etc
	) );
}