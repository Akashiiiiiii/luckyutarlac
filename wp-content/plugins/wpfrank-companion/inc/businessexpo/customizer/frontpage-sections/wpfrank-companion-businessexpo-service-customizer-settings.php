<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage Service.
 *
 * @package wpfrank-companion
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Homepage_Service_Option' ) ) :

	class businessexpo_Customize_Homepage_Service_Option extends businessexpo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'businessexpo_main_service_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Service Options', 'wpfrank-companion' ),
						'section' => 'businessexpo_theme_service',
					),
				),
					
				'businessexpo_service_area_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Service Enable/Disable', 'wpfrank-companion' ),
						'section'  => 'businessexpo_theme_service',
					),
				),
				
				'businessexpo_service_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 20,
						'label'    => esc_html__( 'Service', 'wpfrank-companion' ),
						'section'  => 'businessexpo_theme_service',
					),
				),

			);

		}

	}

	new businessexpo_Customize_Homepage_Service_Option();

endif;
