<?php
/**
 * @package Imperial Tours
 * @subpackage vimperial_tours
 * @since imperial_tours 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses imperial_tours_header_style()
*/

function imperial_tours_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'imperial_tours_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'flex-width'             => true,
		'flex-height'            => true,
		'admin-preview-callback' => 'imperial_tours_admin_header_image',
	) ) );
}

add_action( 'after_setup_theme', 'imperial_tours_custom_header_setup' );


/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see imperial_tours_custom_header_setup().
 */
