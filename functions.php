<?php
	
wp_enqueue_style( 'taso-style', get_template_directory_uri().'/assets/css/min/style.min.css');

function wpb_custom_new_menu() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Hauptmenü' ),
		'footer-menu' => __( 'Footermenü' )
	  )
	);
  }
  add_action( 'init', 'wpb_custom_new_menu' );

  if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
      'page_title' 	=> 'Theme allgemeine Einstellungen',
      'menu_title'	=> 'Theme Einstellungen',
      'menu_slug' 	=> 'theme-allgemeine-settings',
      'capability'	=> 'edit_posts',
      'redirect'		=> false
    ));
    

  }


  //  Custom Post Type Produkt
function create_produkt_cpt() {

	$labels = array(
		'name' => _x( 'Produkte', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Produkt', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Produkte', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Produkt', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Produkt Archive', 'textdomain' ),
		'attributes' => __( 'Produkt Attribute', 'textdomain' ),
		'parent_item_colon' => __( 'Eltern Produkt:', 'textdomain' ),
		'all_items' => __( 'Alle Produkte', 'textdomain' ),
		'add_new_item' => __( 'Produkt erstellen', 'textdomain' ),
		'add_new' => __( 'Erstellen', 'textdomain' ),
		'new_item' => __( 'Produkt erstellen', 'textdomain' ),
		'edit_item' => __( 'Bearbeite Produkt', 'textdomain' ),
		'update_item' => __( 'Aktualisiere Produkt', 'textdomain' ),
		'view_item' => __( 'Produkt anschauen', 'textdomain' ),
		'view_items' => __( 'Produkte anschauen', 'textdomain' ),
		'search_items' => __( 'Suche Produkt', 'textdomain' ),
		'not_found' => __( 'Keine Produkte gefunden.', 'textdomain' ),
		'not_found_in_trash' => __( 'Keine Produkte im Papierkorb gefunden.', 'textdomain' ),
		'featured_image' => __( 'Beitragsbild', 'textdomain' ),
		'set_featured_image' => __( 'Beitragsbild festlegen', 'textdomain' ),
		'remove_featured_image' => __( 'Beitragsbild entfernen', 'textdomain' ),
		'use_featured_image' => __( 'Als Beitragsbild verwenden', 'textdomain' ),
		'insert_into_item' => __( 'In Produkt einfügen', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Zu diesem Produkt hochgeladen', 'textdomain' ),
		'items_list' => __( 'Produkte Liste', 'textdomain' ),
		'items_list_navigation' => __( 'Produkte Liste Navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Produkte Liste', 'textdomain' ),
		'item_published' => __( 'Produkt veröffentlicht', 'textdomain' ),
		'item_published_privately' => __( 'Produkt privat veröffentlicht', 'textdomain' ),
		'item_reverted_to_draft' => __( 'Produkt als Entwurf gespeichert', 'textdomain' ),
		'item_scheduled' => __( 'Produkt geplant', 'textdomain' ),
		'item_updated' => __( 'Produkt aktualisiert', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Produkt', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-products',
		'supports' => array('title', 'page-attributes'),
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
	register_post_type( 'produkt', $args );

}
add_action( 'init', 'create_produkt_cpt', 0 );

function fwp_archive_per_page( $query ) {
  if ( is_tax( 'produkt' ) ) {
      $query->set( 'order', 'DESC' );
  }
}
add_filter( 'pre_get_posts', 'fwp_archive_per_page' );

add_theme_support( 'title-tag' );
