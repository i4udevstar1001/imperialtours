<?php
/**
 * Imperial Tours Theme Customizer
 *
 * @package Imperial Tours
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
 function imperial_tours_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'imperial_tours_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'HomeExtended Settings', 'imperial-tours' ),
	    'description' => __( 'Description of what this panel does.', 'imperial-tours' ),
	) );

	$wp_customize->add_section( 'imperial_tours_left_right', array(
    	'title'      => __( 'General Settings', 'imperial-tours' ),
		'priority'   => 30,
		'panel' => 'imperial_tours_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('imperial_tours_theme_options',array(
	        'default' => '',
	        'sanitize_callback' => 'imperial_tours_sanitize_choices'	        
	) );

	$wp_customize->add_control('imperial_tours_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section','imperial-tours'),
	        'section' => 'imperial_tours_left_right',
	        'choices' => array(
	            'Grid Layout' => __('Grid Layout','imperial-tours')
	        ),
	) );

	

$wp_customize->add_setting('imperial_tours_contact_corporate',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('imperial_tours_contact_corporate',array(
		'label'	=> __('Add Phone Number','imperial-tours'),
		'section'	=> 'imperial_tours_topbar_icon',
		'setting'	=> 'imperial_tours_contact_corporate',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('imperial_tours_email_corporate',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('imperial_tours_email_corporate',array(
		'label'	=> __('Add Email','imperial-tours'),
		'section'	=> 'imperial_tours_topbar_icon',
		'setting'	=> 'imperial_tours_email_corporate',
		'type'		=> 'text'
	));

	//Social Icons(topbar)
	$wp_customize->add_section('imperial_tours_topbar_header',array(
		'title'	=> __('Social Icon Section','imperial-tours'),
		'description'	=> __('Add Header Content here','imperial-tours'),
		'priority'	=> null,
		'panel' => 'imperial_tours_panel_id',
	));

	$wp_customize->add_setting('imperial_tours_contact_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('imperial_tours_contact_url',array(
		'label'	=> __('Add Contact link','imperial-tours'),
		'section'	=> 'imperial_tours_topbar_header',
		'setting'	=> 'imperial_tours_contact_url',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('imperial_tours_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('imperial_tours_twitter_url',array(
		'label'	=> __('Add Twitter link','imperial-tours'),
		'section'	=> 'imperial_tours_topbar_header',
		'setting'	=> 'imperial_tours_twitter_url',
		'type'		=> 'url'
	));
	
	$wp_customize->add_setting('imperial_tours_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('imperial_tours_linkedin_url',array(
		'label'	=> __('Add Linkedin link','imperial-tours'),
		'section'	=> 'imperial_tours_topbar_header',
		'setting'	=> 'imperial_tours_linkedin_url',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('imperial_tours_pinterest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('imperial_tours_pinterest_url',array(
		'label'	=> __('Add Pinterest link','imperial-tours'),
		'section'	=> 'imperial_tours_topbar_header',
		'setting'	=> 'imperial_tours_pinterest_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('imperial_tours_google_plus_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('imperial_tours_google_plus_url',array(
		'label'	=> __('Add Google Plus link','imperial-tours'),
		'section'	=> 'imperial_tours_topbar_header',
		'setting'	=> 'imperial_tours_google_plus_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('imperial_tours_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('imperial_tours_facebook_url',array(
		'label'	=> __('Add Facebook link','imperial-tours'),
		'section'	=> 'imperial_tours_topbar_header',
		'setting'	=> 'imperial_tours_facebook_url',
		'type'	=> 'url'
	));
/*
	$wp_customize->add_setting('imperial_tours_mail_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('imperial_tours_mail_url',array(
		'label'	=> __('Add Mail link','imperial-tours'),
		'section'	=> 'imperial_tours_topbar_header',
		'setting'	=> 'imperial_tours_mail_url',
		'type'	=> 'url'
	));

*/
	//home page slider
	$wp_customize->add_section( 'imperial_tours_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'imperial-tours' ),
		'priority'   => 30,
		'panel' => 'imperial_tours_panel_id'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'imperial_tours_slidersettings-page-' . $count, array(
				'default'           => '',
				'sanitize_callback' => 'absint'
		) );

		$wp_customize->add_control( 'imperial_tours_slidersettings-page-' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'imperial-tours' ),
			'section'  => 'imperial_tours_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}


	// Footer
	$wp_customize->add_section('imperial_tours_footer',array(
		'title'	=> __('Footer','imperial-tours'),
		'description'=> __('Add Copyright text.','imperial-tours'),
		'panel' => 'imperial_tours_panel_id',
	));	
	
	$wp_customize->add_setting('imperial_tours_footer_copy',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('imperial_tours_footer_copy',array(
		'label'	=> __('Copyright Text','imperial-tours'),
		'section'=> 'imperial_tours_footer',
		'setting'=> 'imperial_tours_footer_copy',
		'type'=> 'text'
	));
	$wp_customize->add_panel( 'imperial_tours_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Imperial Tours Setting', 'imperial-tours' ),
	    'description' => __( 'Description of what this panel does.', 'imperial-tours' ),
	) );

	$wp_customize->add_section( 'imperial_tours_left_right', array(
    	'title'      => __( 'General Settings', 'imperial-tours' ),
		'priority'   => 30,
		'panel' => 'imperial_tours_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('imperial_tours_theme_options',array(
	        'default' => '',
	        'sanitize_callback' => 'imperial_tours_sanitize_choices'	        
	) );

	



add_action( 'customize_register', 'imperial_tours_customize_register' );	
	
}
add_action( 'customize_register', 'imperial_tours_customize_register' );	

load_template( trailingslashit( get_template_directory() ) . '/inc/logo-resizer.php' );
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class imperial_tours_customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */


	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'imperial-tours-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'imperial-tours-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}
