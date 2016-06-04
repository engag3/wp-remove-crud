<?php
/*!
  Plugin Name: E3 Remove admin extras
  Plugin URI: https://github.com/engag3/wp-remove-crud
  Description: Simple plugin to remove un-needed features from the WordPress admin
  Version: 1.0.1
  Author: ENGAG3 Media
  Author URI: https://www.engag3.media
  GitHub Plugin URI: https://github.com/engag3/wp-remove-crud
  GitHub Branch: master


  Copyright 2016  ENGAG3 (email : media@engag3.us)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
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
