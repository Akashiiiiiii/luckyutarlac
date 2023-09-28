<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Extend customizer section.
 *
 * @package BusinessExpo
 *
 * @see     WP_Customize_Section
 * @access  public
 */

function wpfrank_businessexpo_frontpage_sections_settings( $wp_customize ){
	//Diffrent Themes.	
	$activate_theme_data = wp_get_theme(); // getting current theme data.
    $activate_theme = $activate_theme_data->name;
	
	$active_callback	= isset( $array['active_callback'] ) ? $array['active_callback'] : null;
	
	/* Frontpage panel */
	$wp_customize->add_panel( 'businessexpo_frontpage_settings', array(
		'priority'		=> 25,
		'capability'	=> 'edit_theme_options',
		'title'			=> __('Frontpage Sections', 'wpfrank-companion'),
	) );

	/* Slider Settings */
	$wp_customize->add_section( 'businessexpo_main_theme_slider' , array(
		'title'			=> __('Slider Settings', 'wpfrank-companion'),
		'panel'			=> 'businessexpo_frontpage_settings',
		'priority'		=> 2,
	));

		if ( class_exists( 'businessexpo_Repeater' ) ) {
			$wp_customize->add_setting( 'businessexpo_main_slider_content', array( ) );
			$wp_customize->add_control( new businessexpo_Repeater( 
			$wp_customize, 'businessexpo_main_slider_content', array(
				'label'                             => esc_html__( 'Slider Items Content', 'wpfrank-companion' ),
				'section'                           => 'businessexpo_main_theme_slider',
				'add_field_label'                   => esc_html__( 'Add new slide', 'wpfrank-companion' ),
				'item_name'                         => esc_html__( 'Slide Item', 'wpfrank-companion' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_subtitle_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_button_text_control' => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_checkbox_control' => true,
			)));
		}

	/* Theme Info Settings */
	$wp_customize->add_section( 'businessexpo_theme_top_info' , array(
			'title'			=> __('Theme Info Settings', 'wpfrank-companion'),
			'panel'			=> 'businessexpo_frontpage_settings',
			'priority'		=> 3,
		) ); 
		
		if ( class_exists( 'businessexpo_Repeater' ) ) {
			$wp_customize->add_setting( 'businessexpo_top_info_content', array( ) );
			$wp_customize->add_control( new businessexpo_Repeater( 
			$wp_customize, 'businessexpo_top_info_content', array(
				'label'                             => esc_html__( 'Info Items Content', 'wpfrank-companion' ),
				'section'                           => 'businessexpo_theme_top_info',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add New Info', 'wpfrank-companion' ),
				'item_name'                         => esc_html__( 'Info Item', 'wpfrank-companion' ),
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => false,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_checkbox_control' => true,
			) ) );
		}

	/* Service Settings */
	$wp_customize->add_section( 'businessexpo_theme_service' , array(
		'title'			=> __('Service Settings', 'wpfrank-companion'),
		'panel'			=> 'businessexpo_frontpage_settings',
		'priority'		=> 4,
	) ); 

		if ( class_exists( 'businessexpo_Repeater' ) ) {
			$wp_customize->add_setting( 'businessexpo_service_content', array( ) );
			$wp_customize->add_control( new businessexpo_Repeater( 
			$wp_customize, 'businessexpo_service_content', array(
				'label'                             	=> esc_html__( 'Service Items Content', 'wpfrank-companion' ),
				'section'                           	=> 'businessexpo_theme_service',
				'priority'                          	=> 10,
				'add_field_label'                   	=> esc_html__( 'Add new service', 'wpfrank-companion' ),
				'item_name'                         	=> esc_html__( 'Service Item', 'wpfrank-companion' ),
				'customizer_repeater_image_control' 	=> true,
				'customizer_repeater_icon_control'  	=> true,
				'customizer_repeater_title_control' 	=> true,
				'customizer_repeater_text_control'  	=> true,
				'customizer_repeater_link_control'  	=> true,
				'customizer_repeater_checkbox_control' 	=> true,
				) ) );
		}

	if ( class_exists( 'WooCommerce' ) ) {
		/* Woocommerce Settings  */
		$wp_customize->add_section( 'businessexpo_theme_woocommerce' , array(
			'title'		=> __('Woocoomerce Settings', 'businessexpo'),
			'panel'		=> 'businessexpo_frontpage_settings',
			'priority'	=> 5,
		) );
	}

	/* Testimonial Settings */
	$wp_customize->add_section( 'businessexpo_theme_testimonial' , array(
		'title'		=> __('Testimonial Settings', 'businessexpo'),
		'panel'		=> 'businessexpo_frontpage_settings',
		'priority'	=> 7,
	) ); 

		if ( class_exists( 'businessexpo_Repeater' ) ) {
			$wp_customize->add_setting( 'businessexpo_testimonial_content', array( ) );
			$wp_customize->add_control( new businessexpo_Repeater( 
			$wp_customize, 'businessexpo_testimonial_content', array(
				'label'                             => esc_html__( 'Testimonial Items Content', 'wpfrank-companion' ),
				'section'                           => 'businessexpo_theme_testimonial',
				'add_field_label'                   => esc_html__( 'Add new testimonial item', 'wpfrank-companion' ),
				'item_name'                         => esc_html__( 'Testimonial Item', 'wpfrank-companion' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_designation_control' => true,
			) ) );
		}

		//Parent Theme Testimonial Background Image.
		if('BusinessExpo' == $activate_theme ){
			$wp_customize->add_setting( 'businessexpo_testimonial_background', array(
				'sanitize_callback' => 'esc_url_raw',
				'default'	=> wpfrank_companion_plugin_url . '/inc/businessexpo/img/testimonial/testimonial-bg.jpg',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'businessexpo_testimonial_background', array(
				'label'		=> esc_html__( 'Background Image', 'wpfrank-companion' ),
				'section'	=> 'businessexpo_theme_testimonial',
				'settings'	=> 'businessexpo_testimonial_background',
				'priority'	=> 15,
			) ) );
		}
		
		//Child Theme Testimonial Background Image.
		if('Architect Designs' == $activate_theme ){
			$wp_customize->add_setting( 'businessexpo_testimonial_background', array(
				'sanitize_callback' => 'esc_url_raw',
				'default'	=> wpfrank_companion_plugin_url . '/inc/businessexpo/img/testimonial/architect-testimonial-bg.jpg',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'businessexpo_testimonial_background', array(
				'label'		=> esc_html__( 'Background Image', 'wpfrank-companion' ),
				'section'	=> 'businessexpo_theme_testimonial',
				'settings'	=> 'businessexpo_testimonial_background',
				'priority'	=> 15,
			) ) );
		}

	/* Blog Settings*/
	$wp_customize->add_section( 'businessexpo_theme_blog' , array(
		'title'		=> __('Blog Settings', 'wpfrank-companion'),
		'panel'		=> 'businessexpo_frontpage_settings',
		'priority'	=> 9,
	) ); 

		$wp_customize->add_setting( 'businessexpo_theme_blog_category',array('capability'     => 'edit_theme_options',) );	
		$wp_customize->add_control( new businessexpo_Customize_Category_Control( $wp_customize, 'businessexpo_theme_blog_category', array(
			'label'   => __('Choose Blog Category','wpfrank-companion'),
			'section' => 'businessexpo_theme_blog',
			'settings'   => 'businessexpo_theme_blog_category',
			'sanitize_callback' => 'sanitize_text_field',
		) ) );

	/* CallOut Settings  */
	$wp_customize->add_section( 'businessexpo_theme_cta' , array(
		'title'		=> __('CallOut Settings', 'wpfrank-companion'),
		'panel'		=> 'businessexpo_frontpage_settings',
		'priority'	=> 11,
	) ); 

		//CallOut Background Image.
		$wp_customize->add_setting( 'businessexpo_cta_background_image', array(
		  'sanitize_callback' => 'esc_url_raw',
		  'default' => wpfrank_companion_plugin_url . '/inc/businessexpo/img/callout/callout-bg.jpg',
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'businessexpo_cta_background_image', array(
		  'label'    => esc_html__( 'Background Image', 'wpfrank-companion' ),
		  'section'  => 'businessexpo_theme_cta',
		  'settings' => 'businessexpo_cta_background_image',
		  'priority'        => 15,
		) ) );

}
add_action( 'customize_register', 'wpfrank_businessexpo_frontpage_sections_settings' );

function wpfrank_businessexpo_Customizer_selective_refresh_settings($wp_customize) {
	//Diffrent Themes
	$activate_theme_data = wp_get_theme(); // getting current theme data
	$activate_theme = $activate_theme_data->name;
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
	
	// Service.
	$wp_customize->add_setting( 'businessexpo_service_section_title',array(
		'default'			=> __('What We Do','wpfrank-companion'),
		'sanitize_callback'	=> 'sanitize_text_field',
		'transport'			=> $selective_refresh,
	));
	$wp_customize->add_control( 'businessexpo_service_section_title',array(
		'label'			=> esc_html__( 'Section Title', 'wpfrank-companion' ),
		'section'		=> 'businessexpo_theme_service',
		'priority'		=> 4,
		'type'			=> 'text',
	));

	if( 'BusinessExpo' == $activate_theme ){ $service_title = 'Our Services'; }
	if( 'Architect Designs' == $activate_theme ){ $service_title = 'WE PROVIDE THE BEST INTERIOR SERVICES'; }
	$wp_customize->add_setting( 'businessexpo_service_section_subtitle',array(
		'default'			=>	__(''.$service_title.'', 'wpfrank-companion'),
		'sanitize_callback'	=> 'sanitize_text_field',
		'transport'			=> $selective_refresh,
	));
	$wp_customize->add_control( 'businessexpo_service_section_subtitle',array(
		'label'		=> esc_html__( 'Section Subtitle', 'wpfrank-companion' ),
		'section'	=> 'businessexpo_theme_service',
		'priority'	=> 5,
		'type'		=> 'text',
	));

	// Woocommerce Title.
	$wp_customize->add_setting( 'businessexpo_woocommerce_area_title',array(
		'default'			=> 'Featured products',
		'sanitize_callback'	=> 'sanitize_text_field',
		//'transport'			=> $selective_refresh,
	));	
	$wp_customize->add_control( 'businessexpo_woocommerce_area_title',array(
		'label'		=> esc_html__( 'Featured Products', 'businessexpo' ),
		'section'	=> 'businessexpo_theme_woocommerce',
		'priority'	=> 6,
		'type'		=> 'text',
	));	

	// Woocommerce Description.
	$wp_customize->add_setting( 'businessexpo_woocommerce_area_desc',array(
		'default'			=> 'Shop',
		'sanitize_callback'	=> 'sanitize_text_field',
		//'transport'			=> $selective_refresh,
	));	
	$wp_customize->add_control( 'businessexpo_woocommerce_area_desc',array(
		'label'		=> esc_html__( 'Description', 'businessexpo' ),
		'section'	=> 'businessexpo_theme_woocommerce',
		'priority'	=> 6,
		'type'		=> 'textarea',
	));		

	// Testimonial.
	if( 'BusinessExpo' == $activate_theme ){ $testimonial_title = 'What our Client Say?'; }
	if( 'Architect Designs' == $activate_theme ){ $testimonial_title = 'WHAT OUR CLIENT SAYS?'; }
	$wp_customize->add_setting( 'businessexpo_testimonial_section_title',array(
		'default'			=>	__(''.$testimonial_title.'', 'wpfrank-companion'),
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => $selective_refresh,
	));	
	$wp_customize->add_control( 'businessexpo_testimonial_section_title',array(
		'label'   => esc_html__( 'Section Title', 'wpfrank-companion' ),
		'section' => 'businessexpo_theme_testimonial',
		'priority'        => 4,
		'type' => 'text',
	));	
	$wp_customize->add_setting( 'businessexpo_testimonial_section_subtitle',array(
		'default' => __('Testimonials','wpfrank-companion'),
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => $selective_refresh,
	));	
	$wp_customize->add_control( 'businessexpo_testimonial_section_subtitle',array(
		'label'   => esc_html__( 'Section Description', 'wpfrank-companion' ),
		'section' => 'businessexpo_theme_testimonial',
		'priority'        => 5,
		'type' => 'textarea',
	));

	// Blog.
	if( 'BusinessExpo' == $activate_theme ){ $blog_title = 'Latest News'; }
	if( 'Architect Designs' == $activate_theme ){ $blog_title = 'LATEST NEWS'; }
	$wp_customize->add_setting( 'businessexpo_blog_section_title',array(
		'default'			=>	__(''.$blog_title.'', 'wpfrank-companion'),
		'sanitize_callback' => 'sanitize_text_field',
		'transport'			=> $selective_refresh,
	));	
	$wp_customize->add_control( 'businessexpo_blog_section_title',array(
		'label'		=> esc_html__( 'Section Title', 'wpfrank-companion' ),
		'section'	=> 'businessexpo_theme_blog',
		'priority'	=> 4,
		'type'		=> 'text',
	));	
	$wp_customize->add_setting( 'businessexpo_blog_section_subtitle',array(
		'default'			=> __('Blog','wpfrank-companion'),
		'sanitize_callback'	=> 'sanitize_text_field',
		'transport'			=> $selective_refresh,
	));	
	$wp_customize->add_control( 'businessexpo_blog_section_subtitle',array(
		'label'		=> esc_html__( 'Section Description', 'wpfrank-companion' ),
		'section'	=> 'businessexpo_theme_blog',
		'priority'	=> 5,
		'type'		=> 'textarea',
	));

	// CallOut.
	if( 'BusinessExpo' == $activate_theme ){ 
		$cta_title = 'Meet Our Experts'; 
		$cta_subtitle = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.'; 
	}
	if( 'Architect Designs' == $activate_theme ){
		$cta_title = 'ARE YOU READY FOR NEXT PROJECT?'; 
		$cta_subtitle = 'YOU DON’T NEED A CONTRACTOR TO MAKE OVER YOUR WALLS. WE PROVIDE GREAT EXPERIENCE FOR ARCHITECTURE DESIGN & RENOVATION'; 
	}
	$wp_customize->add_setting( 'businessexpo_cta_section_title',array(
		'default'			=>	__(''.$cta_title.'', 'wpfrank-companion'),
		'sanitize_callback' => 'sanitize_text_field',
		'transport'			=> $selective_refresh,
	));	
	$wp_customize->add_control( 'businessexpo_cta_section_title',array(
		'label'   => esc_html__( 'Title', 'wpfrank-companion' ),
		'section' => 'businessexpo_theme_cta',
		'priority'        => 5,
		'type' => 'text',
	));	
	$wp_customize->add_setting( 'businessexpo_cta_section_subtitle',array(
		'default'			=>	__(''.$cta_subtitle.'', 'wpfrank-companion'),
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => $selective_refresh,
	));	
	$wp_customize->add_control( 'businessexpo_cta_section_subtitle',array(
		'label'   => esc_html__( 'Description', 'wpfrank-companion' ),
		'section' => 'businessexpo_theme_cta',
		'priority'        => 6,
		'type' => 'textarea',
	));	
	$wp_customize->add_setting( 'businessexpo_cta_button_text',array(
		'default' => 'Learn More',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => $selective_refresh,
	));	
	$wp_customize->add_control( 'businessexpo_cta_button_text',array(
		'label'   => esc_html__( 'Button Text', 'wpfrank-companion' ),
		'section' => 'businessexpo_theme_cta',
		'priority'        => 10,
		'type' => 'text',
	));

}
add_action( 'customize_register', 'wpfrank_businessexpo_Customizer_selective_refresh_settings' );