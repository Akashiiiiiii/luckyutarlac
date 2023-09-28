<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage Main Slider.
 *
 * @package wpfrank-companion
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Homepage_Slider_Option' ) ) :

	class businessexpo_Customize_Homepage_Slider_Option extends businessexpo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(
			
				'businessexpo_main_slider_heading'	=> array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Slider Options', 'wpfrank-companion' ),
						'section' => 'businessexpo_main_theme_slider',
					),
				),
				
	
				'businessexpo_main_slider_disabled'	=> array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Slider Enable/Disable', 'wpfrank-companion' ),
						'section'  => 'businessexpo_main_theme_slider',
					),
				),	
				
				/* 'businessexpo_main_slider_overlay_disable'	=> array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Overlay Enable/Disable', 'wpfrank-companion' ),
						'section'  => 'businessexpo_main_theme_slider',
					),
				), */
			
				
				'businessexpo_slider_upgrade'	=> array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 20,
						'label'    => esc_html__( 'Slides', 'wpfrank-companion' ),
						'section'  => 'businessexpo_main_theme_slider',
					),
				),

			);

		}

	}

	new businessexpo_Customize_Homepage_Slider_Option();

endif;
