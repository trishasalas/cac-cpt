<?php
/**
 * Plugin Name: CAC Custom Post Type with Template
 * Plugin URI: comealivecreative.com
 * Description: Creates a custom template for a Podcast Archive post type and adds it to the Template Dropdown in Page Attributes
 * Version: 1.0.0
 * Author: Trisha Salas
 * Author URI: http://trishasalas.com
 * Requires at least: 4.7
 * Tested up to: 4.7
 *
 * Text Domain: cac-cpt
 */

/**
 * Silence is golden; exit if accessed directly
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( file_exists( dirname( __FILE__ ) . '/inc/page-templater.php' ) ) {
	require_once 'inc/page-templater.php';
}

if ( file_exists( dirname( __FILE__ ) . '/inc/CPT.php' ) ) {
	require_once 'inc/CPT.php';
}

$podcast = new CPT( 'podcast' );
