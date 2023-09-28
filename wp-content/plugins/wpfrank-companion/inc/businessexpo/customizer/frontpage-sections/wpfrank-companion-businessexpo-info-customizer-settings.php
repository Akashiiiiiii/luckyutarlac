<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage info.
 *
 * @package awp-companion
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Homepage_Info_Option' ) ) :

	class businessexpo_Customize_Homepage_Info_Option extends businessexpo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'businessexpo_top_info_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Top Info Options', 'awp-companion' ),
						'section' => 'businessexpo_theme_top_info',
					),
				),
					
				// Info Top Enable
				'businessexpo_top_info_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Top Info Enable/Disable', 'awp-companion' ),
						'section'  => 'businessexpo_theme_top_info',
					),
				),
				
				// container
				'businessexpo_top_info_container_size'     => array(
					'setting' => array(
						'default'			=> 'container',
						'sanitize_callback'	=> array( 'businessexpo_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'				=> 'radio',
						'priority'			=> 25,
						'is_default_type'	=> true,
						'label'				=> esc_html__( 'Info Width', 'awp-companion' ),
						'section'			=> 'businessexpo_theme_top_info',
						'choices'			=> array(
							'container'		=> esc_html__( 'Container', 'awp-companion' ),
							'container-full'=> esc_html__( 'Container Full', 'awp-companion' ),
						),
					),
				),
				
				'businessexpo_top_info_upgrade'	=> array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 20,
						'label'    => esc_html__( 'Info', 'awp-companion' ),
						'section'  => 'businessexpo_theme_top_info',
					),
				),
				
			);
		}
	}

	new businessexpo_Customize_Homepage_Info_Option();

endif;