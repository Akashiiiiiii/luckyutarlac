<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Frontpage Blog.
 *
 * @package wpfrank-companion
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'businessexpo_Customize_Homepage_Blog_Option' ) ) :

	class businessexpo_Customize_Homepage_Blog_Option extends businessexpo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'businessexpo_main_blog_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Blog Options', 'wpfrank-companion' ),
						'section' => 'businessexpo_theme_blog',
					),
				),
					
				'businessexpo_blog_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'businessexpo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Blog Enable/Disable', 'wpfrank-companion' ),
						'section'  => 'businessexpo_theme_blog',
					),
				),

			);
		}
	}

	new businessexpo_Customize_Homepage_Blog_Option();

endif;
