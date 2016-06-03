<?php
/**
 * Plugin Name: WP Remove extras
 * Plugin URI: https://www.engag3.media
 * Description: Simple plugin to remove un-needed features from the WordPress admin
 * Version: 1.0.0
 * Author: ENGAG3 Media
 * Author URI: https://www.engag3.media
 * License: GPL2
 */


// Remove custom fields metabox
 function remove_post_custom_fields() {
 	remove_meta_box( 'postcustom' , 'post' , 'normal' );
 	remove_meta_box( 'postcustom' , 'page' , 'normal' );
 	remove_meta_box( 'postcustom' , 'product' , 'normal' );
 	remove_meta_box( 'postcustom' , 'shop_order' , 'normal' );
 	remove_meta_box( 'postcustom' , 'project' , 'normal' );
 	remove_meta_box( 'postcustom' , 'gallery' , 'normal' );
 	remove_meta_box( 'postcustom' , 'client' , 'normal' );
 	remove_meta_box( 'postcustom' , 'job' , 'normal' );
 }
 add_action( 'admin_menu' , 'remove_post_custom_fields' );

 // Remove excerpt metabox
 function remove_page_excerpt_field() {
 	remove_meta_box( 'postexcerpt' , 'page' , 'normal' );
 	remove_meta_box( 'postexcerpt' , 'post' , 'normal' );
 	remove_meta_box( 'postexcerpt' , 'project' , 'normal' );
 }
 add_action( 'admin_menu' , 'remove_page_excerpt_field' );


// Remove dashboard widgets
 function remove_dashboard_widgets() {
 	global $wp_meta_boxes;
 	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
 	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
 	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
 	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
 	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
 	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
 }
 add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );
