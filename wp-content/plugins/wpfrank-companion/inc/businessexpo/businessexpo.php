<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * @package	wpfrank-companion
 */

// Customizer Sections
require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/wpfrank-companion-businessexpo-customizer.php';
require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/wpfrank-companion-businessexpo-customizer-options.php';
require wpfrank_companion_plugin_dir . 'inc/businessexpo/customizer/wpfrank-companion-businessexpo-customizer-default.php';

// Frontpage Sections
if ( ! function_exists( 'wpfrank_businessexpo_frontpage_sections' ) ) :
	function wpfrank_businessexpo_frontpage_sections(){
		//Diffrent Themes
		$activate_theme_data = wp_get_theme(); // getting current theme data
		$activate_theme = $activate_theme_data->name; 
	
		require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-slider.php';
		require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-service.php';
		require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-woocommerce.php';
		require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-testimonial.php';
		require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-blog.php';
		require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-callout.php';
	}
	add_action( 'wpfrank_businessexpo_frontpage', 'wpfrank_businessexpo_frontpage_sections' );
endif;