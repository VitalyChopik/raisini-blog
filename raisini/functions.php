<?php

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
  echo 'Hi there! You cannot open it directly. — Raisini!';
  exit;
}

require_once "rs/inc/core.php";

add_action( 'template_redirect', 'redreict_to_custom_404_page' );
function redreict_to_custom_404_page(){
    // check if is a 404 error
    if( is_404()  ){
        wp_redirect(  site_url('/404-not-found/')  );
        exit();
        
    }
}

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: featured.
	 */

	$labels = [
		"name" => esc_html__( "featured", "raisini" ),
		"singular_name" => esc_html__( "featured", "raisini" ),
	];

	
	$args = [
		"label" => esc_html__( "featured", "raisini" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'featured', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "featured",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "featured", [ "post" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );