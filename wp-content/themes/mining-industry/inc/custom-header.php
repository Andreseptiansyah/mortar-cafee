<?php
/**
 * @package Mining Industry 
 * Setup the WordPress core custom header feature.
 *
 * @uses mining_industry_header_style()
*/
function mining_industry_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'mining_industry_custom_header_args', array(
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 300,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'mining_industry_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'mining_industry_custom_header_setup' );

if ( ! function_exists( 'mining_industry_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see mining_industry_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'mining_industry_header_style' );

function mining_industry_header_style() {
	$mining_industry_header_image = get_header_image() ? get_header_image() : get_template_directory_uri() . '/assets/images/header-img.png';
	$mining_industry_custom_css = "
        .box-image .single-page-img{
			background-image: url('" . esc_url($mining_industry_header_image) . "');
			background-repeat: no-repeat;
	        background-position: center center;
	        background-size: cover !important;
	        height: 300px;
		}";
	   	wp_add_inline_style( 'mining-industry-basic-style', $mining_industry_custom_css );
}
endif;