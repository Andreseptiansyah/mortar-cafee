<?php
/**
 * Mining Industry   Theme Customizer
 *
 * @package Mining Industry  
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mining_industry_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'mining_industry_custom_controls' );

function mining_industry_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.logo .site-title a',
	 	'render_callback' => 'mining_industry_Customize_partial_blogname',
	));

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => 'p.site-description',
		'render_callback' => 'mining_industry_Customize_partial_blogdescription',
	));

	// add home page setting pannel
	$wp_customize->add_panel( 'mining_industry_panel_id', array(
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__( 'Frontpage Options', 'mining-industry' ),
		'priority' => 10,
	));

	//Menus Settings
	$wp_customize->add_section( 'mining_industry_menu_section' , array(
    	'title' => __( 'Menus Settings', 'mining-industry' ),
		'panel' => 'mining_industry_panel_id'
	) );

	$wp_customize->add_setting('mining_industry_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_navigation_menu_font_size',array(
		'label'	=> __('Menus Font Size','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_menu_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_navigation_menu_font_weight',array(
        'default' => 600,
        'transport' => 'refresh',
        'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_navigation_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menus Font Weight','mining-industry'),
        'section' => 'mining_industry_menu_section',
        'choices' => array(
        	'100' => __('100','mining-industry'),
            '200' => __('200','mining-industry'),
            '300' => __('300','mining-industry'),
            '400' => __('400','mining-industry'),
            '500' => __('500','mining-industry'),
            '600' => __('600','mining-industry'),
            '700' => __('700','mining-industry'),
            '800' => __('800','mining-industry'),
            '900' => __('900','mining-industry'),
        ),
	) );

	$wp_customize->add_setting('mining_industry_menus_item_style',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_menus_item_style',array(
        'type' => 'select',
        'section' => 'mining_industry_menu_section',
		'label' => __('Menu Item Hover Style','mining-industry'),
		'choices' => array(
            'None' => __('None','mining-industry'),
            'Zoom In' => __('Zoom In','mining-industry'),
        ),
	) );

	$wp_customize->add_setting('mining_industry_header_menus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mining_industry_header_menus_color', array(
		'label'    => __('Menus Color', 'mining-industry'),
		'section'  => 'mining_industry_menu_section',
	)));

	$wp_customize->add_setting('mining_industry_header_menus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mining_industry_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'mining-industry'),
		'section'  => 'mining_industry_menu_section',
	)));

	$wp_customize->add_setting('mining_industry_header_submenus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mining_industry_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'mining-industry'),
		'section'  => 'mining_industry_menu_section',
	)));

	$wp_customize->add_setting('mining_industry_header_submenus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mining_industry_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'mining-industry'),
		'section'  => 'mining_industry_menu_section',
	)));

	// Header
	$wp_customize->add_section( 'mining_industry_top_bar' , array(
    'title' => esc_html__( 'Header', 'mining-industry' ),
		'panel' => 'mining_industry_panel_id'
	) );

	$wp_customize->add_setting('mining_industry_topbar_button_label',array(
		'default' => esc_html__( '', 'mining-industry' ),
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_topbar_button_label',array(
		'label' => esc_html__( 'Add Button Text', 'mining-industry' ),
		'section' => 'mining_industry_top_bar',
		'setting' => 'mining_industry_topbar_button_label',
		'type' => 'text',
		'input_attrs' => array(
      'placeholder' => __( 'Book Now', 'mining-industry' ),
    ),
	));

	$wp_customize->add_setting('mining_industry_topbar_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control('mining_industry_topbar_button_url',array(
		'label'	=> esc_html__( 'Add Button URL', 'mining-industry' ), 
		'section'	=> 'mining_industry_top_bar',
		'setting'	=> 'mining_industry_topbar_button_url',
		'type'	=> 'url',
	));

	//Sticky Header
	$wp_customize->add_setting( 'mining_industry_sticky_header',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_switch_sanitization'
  ) );
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_sticky_header',array(
    'label' => esc_html__( 'Sticky Header','mining-industry' ),
    'section' => 'mining_industry_top_bar'
  )));

  $wp_customize->add_setting('mining_industry_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_sticky_header_padding',array(
		'label'	=> __('Sticky Header Padding','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'mining-industry' ),
    ),
		'section'=> 'mining_industry_top_bar',
		'type'=> 'text'
	));

	//Slider
	$wp_customize->add_section( 'mining_industry_slider_section' , array(
	  'title'      => __( 'Slider Settings', 'mining-industry' ),
		'panel' => 'mining_industry_panel_id',
	) );

	$wp_customize->add_setting( 'mining_industry_hide_show_slider_section',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
	));
	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_hide_show_slider_section',array(
		'label' => esc_html__( 'Show / Hide Slider Section','mining-industry' ),
		'section' => 'mining_industry_slider_section'
	)));

	$wp_customize->add_setting('mining_industry_slide_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'mining_industry_sanitize_choices',
	));
	$wp_customize->add_control('mining_industry_slide_number',array(
		'label'	=> __('Number of slides to show','mining-industry'),
		'description' => __('Selct Max 3 number Of slide and refresh page','mining-industry'),
		'section'	=> 'mining_industry_slider_section',
		'type'		=> 'select',
		'choices'  => array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
		),
	));

	$mining_industry_count =  get_theme_mod('mining_industry_slide_number');

	for($mining_industry_i=1; $mining_industry_i<=$mining_industry_count; $mining_industry_i++) {		

		$wp_customize->add_setting('mining_industry_slider_bg_img'.$mining_industry_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'mining_industry_slider_bg_img'.$mining_industry_i,array(
		   'label' => __('Add Background Image','mining-industry'),
		   'section' => 'mining_industry_slider_section',
		   'description' => __('Image Size (1200 × 650px).','mining-industry'),
		)));

	 	$wp_customize->add_setting('mining_industry_slider_small_title'.$mining_industry_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('mining_industry_slider_small_title'.$mining_industry_i,array(
			'label'	=> __('Slider Small Title','mining-industry'),
			'section'	=> 'mining_industry_slider_section',
			'input_attrs' => array(
	        'placeholder' => __( 'Mining WordPress Theme', 'mining-industry' ),
	    	),
			'type'	=> 'text'
		));

	 	$wp_customize->add_setting('mining_industry_slider_title'.$mining_industry_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('mining_industry_slider_title'.$mining_industry_i,array(
			'label'	=> __('Slider Title','mining-industry'),
			'section'	=> 'mining_industry_slider_section',
			'input_attrs' => array(
	        'placeholder' => __( 'Professional Team Delivering High-Quality Mining Services', 'mining-industry' ),
	    	),
			'type'	=> 'text'
		));

	 	$wp_customize->add_setting('mining_industry_slider_text'.$mining_industry_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('mining_industry_slider_text'.$mining_industry_i,array(
			'label'	=> __('Slider Content','mining-industry'),
			'section'	=> 'mining_industry_slider_section',
			'type'		=> 'text'
		));

		$wp_customize->add_setting('mining_industry_banner_button_label'.$mining_industry_i,array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control('mining_industry_banner_button_label'.$mining_industry_i,array(
			'label' => esc_html__( 'Add Button Text', 'mining-industry' ),
			'section' => 'mining_industry_slider_section',
			'setting' => 'mining_industry_banner_button_label'.$mining_industry_i,
			'type' => 'text',
			'input_attrs' => array(
	      'placeholder' => __( 'Explore More', 'mining-industry' ),
	    ),
		));

		$wp_customize->add_setting('mining_industry_banner_button_url'.$mining_industry_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control('mining_industry_banner_button_url'.$mining_industry_i,array(
			'label'	=> esc_html__( 'Add Button URL', 'mining-industry' ), 
			'section'	=> 'mining_industry_slider_section',
			'setting'	=> 'mining_industry_banner_button_url'.$mining_industry_i,
			'type'	=> 'url',
		));
	}

	$wp_customize->add_setting('mining_industry_slider_previous_icon',array(
		'default'	=> 'fa-solid fa-caret-left',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
        $wp_customize,'mining_industry_slider_previous_icon',array(
		'label'	=> __('Slider Previous Icon','mining-industry'),
		'transport' => 'refresh',
		'section'	=> 'mining_industry_slider_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('mining_industry_slider_next_icon',array(
		'default'	=> 'fa-solid fa-caret-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
        $wp_customize,'mining_industry_slider_next_icon',array(
		'label'	=> __('Slider Next Icon','mining-industry'),
		'transport' => 'refresh',
		'section'	=> 'mining_industry_slider_section',
		'type'		=> 'icon'
	)));

	//mission Section
	$wp_customize->add_section('mining_industry_mission', array(
		'title'       => __('Mission Section', 'mining-industry'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','mining-industry'),
		'priority'    => null,
		'panel'       => 'mining_industry_panel_id',
	));

	$wp_customize->add_setting('mining_industry_mission_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_mission_text',array(
		'description' => __('<p>1. More options for mission section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for mission section.</p>','mining-industry'),
		'section'=> 'mining_industry_mission',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('mining_industry_mission_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_mission_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(MINING_INDUSTRY_BUY_NOW).">More Info</a>",
		'section'=> 'mining_industry_mission',
		'type'=> 'hidden'
	));

	//About Us Section
	$wp_customize->add_section('mining_industry_about_us', array(
		'title'       => __('About Us Section', 'mining-industry'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','mining-industry'),
		'priority'    => null,
		'panel'       => 'mining_industry_panel_id',
	));

	$wp_customize->add_setting('mining_industry_about_us_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_about_us_text',array(
		'description' => __('<p>1. More options for about us section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for about us section.</p>','mining-industry'),
		'section'=> 'mining_industry_about_us',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('mining_industry_about_us_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_about_us_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(MINING_INDUSTRY_BUY_NOW).">More Info</a>",
		'section'=> 'mining_industry_about_us',
		'type'=> 'hidden'
	));

	//counter Section
	$wp_customize->add_section('mining_industry_counter', array(
		'title'       => __('Counter Section', 'mining-industry'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','mining-industry'),
		'priority'    => null,
		'panel'       => 'mining_industry_panel_id',
	));

	$wp_customize->add_setting('mining_industry_counter_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_counter_text',array(
		'description' => __('<p>1. More options for counter section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for counter section.</p>','mining-industry'),
		'section'=> 'mining_industry_counter',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('mining_industry_counter_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_counter_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(MINING_INDUSTRY_BUY_NOW).">More Info</a>",
		'section'=> 'mining_industry_counter',
		'type'=> 'hidden'
	));

	//services Section
	$wp_customize->add_section('mining_industry_services', array(
		'title'       => __('Services Section', 'mining-industry'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','mining-industry'),
		'priority'    => null,
		'panel'       => 'mining_industry_panel_id',
	));

	$wp_customize->add_setting('mining_industry_services_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_services_text',array(
		'description' => __('<p>1. More options for services section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for services section.</p>','mining-industry'),
		'section'=> 'mining_industry_services',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('mining_industry_services_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_services_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(MINING_INDUSTRY_BUY_NOW).">More Info</a>",
		'section'=> 'mining_industry_services',
		'type'=> 'hidden'
	));

	// Project Section 
	$wp_customize->add_section('mining_industry_project_section', array(
    'title' => __('Project Section', 'mining-industry'),
    'panel' => 'mining_industry_panel_id',
	));

	$wp_customize->add_setting( 'mining_industry_project_section_hide_show',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_switch_sanitization'
	));
	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_project_section_hide_show',array(
    'label' => esc_html__( 'Show / Hide Project Section','mining-industry' ),
    'section' => 'mining_industry_project_section'
	)));

	$wp_customize->add_setting('mining_industry_project_section_text',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_project_section_text',array(
		'type' => 'text',
		'label' => __('Add Section text','mining-industry'),
		'input_attrs' => array(
      'placeholder' => __( 'Our Projects', 'mining-industry' ),
    ),
		'section' => 'mining_industry_project_section'
	));

	$wp_customize->add_setting('mining_industry_project_section_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_project_section_title',array(
		'type' => 'text',
		'label' => __('Add Section Title','mining-industry'),
		'input_attrs' => array(
      'placeholder' => __( 'Our Incredible Projects', 'mining-industry' ),
    ),
		'section' => 'mining_industry_project_section'
	));

	$wp_customize->add_setting('mining_industry_project_section_content',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_project_section_content',array(
		'type' => 'text',
		'label' => __('Add Section Content','mining-industry'),
		'section' => 'mining_industry_project_section'
	));

	$mining_industry_categories = get_categories();
	$mining_industry_cat_post = array();
	$mining_industry_cat_post[]= 'select';
	$mining_industry_i = 0;
	foreach($mining_industry_categories as $mining_industry_category){
		if($mining_industry_i==0){
			$mining_industry_default = $mining_industry_category->slug;
			$mining_industry_i++;
		}
		$mining_industry_cat_post[$mining_industry_category->slug] = $mining_industry_category->name;
	}

	$wp_customize->add_setting('mining_industry_project_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'mining_industry_sanitize_choices',
	));
	$wp_customize->add_control('mining_industry_project_category',array(
		'type'    => 'select',
		'choices' => $mining_industry_cat_post,
		'label' => __('Select Post Category','mining-industry'),
		'section' => 'mining_industry_project_section',
	));

	//Why Us Section
	$wp_customize->add_section('mining_industry_why_us', array(
		'title'       => __('Why Us Section', 'mining-industry'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','mining-industry'),
		'priority'    => null,
		'panel'       => 'mining_industry_panel_id',
	));

	$wp_customize->add_setting('mining_industry_why_us_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_why_us_text',array(
		'description' => __('<p>1. More options for why us section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for why us section.</p>','mining-industry'),
		'section'=> 'mining_industry_why_us',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('mining_industry_why_us_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_why_us_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(MINING_INDUSTRY_BUY_NOW).">More Info</a>",
		'section'=> 'mining_industry_why_us',
		'type'=> 'hidden'
	));

	//work Section
	$wp_customize->add_section('mining_industry_work', array(
		'title'       => __('Work Section', 'mining-industry'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','mining-industry'),
		'priority'    => null,
		'panel'       => 'mining_industry_panel_id',
	));

	$wp_customize->add_setting('mining_industry_work_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_work_text',array(
		'description' => __('<p>1. More options for work section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for work section.</p>','mining-industry'),
		'section'=> 'mining_industry_work',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('mining_industry_work_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_work_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(MINING_INDUSTRY_BUY_NOW).">More Info</a>",
		'section'=> 'mining_industry_work',
		'type'=> 'hidden'
	));

	//gallery Section
	$wp_customize->add_section('mining_industry_gallery', array(
		'title'       => __('Gallery Section', 'mining-industry'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','mining-industry'),
		'priority'    => null,
		'panel'       => 'mining_industry_panel_id',
	));

	$wp_customize->add_setting('mining_industry_gallery_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_gallery_text',array(
		'description' => __('<p>1. More options for gallery section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for gallery section.</p>','mining-industry'),
		'section'=> 'mining_industry_gallery',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('mining_industry_gallery_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_gallery_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(MINING_INDUSTRY_BUY_NOW).">More Info</a>",
		'section'=> 'mining_industry_gallery',
		'type'=> 'hidden'
	));

	//testimonials Section
	$wp_customize->add_section('mining_industry_testimonials', array(
		'title'       => __('Testimonials Section', 'mining-industry'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','mining-industry'),
		'priority'    => null,
		'panel'       => 'mining_industry_panel_id',
	));

	$wp_customize->add_setting('mining_industry_testimonials_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_testimonials_text',array(
		'description' => __('<p>1. More options for testimonials section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for testimonials section.</p>','mining-industry'),
		'section'=> 'mining_industry_testimonials',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('mining_industry_testimonials_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_testimonials_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(MINING_INDUSTRY_BUY_NOW).">More Info</a>",
		'section'=> 'mining_industry_testimonials',
		'type'=> 'hidden'
	));

	//pricing plan Section
	$wp_customize->add_section('mining_industry_pricing_plan', array(
		'title'       => __('Pricing Plan Section', 'mining-industry'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','mining-industry'),
		'priority'    => null,
		'panel'       => 'mining_industry_panel_id',
	));

	$wp_customize->add_setting('mining_industry_pricing_plan_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_pricing_plan_text',array(
		'description' => __('<p>1. More options for pricing plan section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for pricing plan section.</p>','mining-industry'),
		'section'=> 'mining_industry_pricing_plan',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('mining_industry_pricing_plan_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_pricing_plan_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(MINING_INDUSTRY_BUY_NOW).">More Info</a>",
		'section'=> 'mining_industry_pricing_plan',
		'type'=> 'hidden'
	));

	//team Section
	$wp_customize->add_section('mining_industry_team', array(
		'title'       => __('Team Section', 'mining-industry'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','mining-industry'),
		'priority'    => null,
		'panel'       => 'mining_industry_panel_id',
	));

	$wp_customize->add_setting('mining_industry_team_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_team_text',array(
		'description' => __('<p>1. More options for team section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for team section.</p>','mining-industry'),
		'section'=> 'mining_industry_team',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('mining_industry_team_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_team_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(MINING_INDUSTRY_BUY_NOW).">More Info</a>",
		'section'=> 'mining_industry_team',
		'type'=> 'hidden'
	));

	//Blog News Section
	$wp_customize->add_section('mining_industry_blog_news', array(
		'title'       => __('Blog News Section', 'mining-industry'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','mining-industry'),
		'priority'    => null,
		'panel'       => 'mining_industry_panel_id',
	));

	$wp_customize->add_setting('mining_industry_blog_news_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_blog_news_text',array(
		'description' => __('<p>1. More options for blog news section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for blog news section.</p>','mining-industry'),
		'section'=> 'mining_industry_blog_news',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('mining_industry_blog_news_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_blog_news_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(MINING_INDUSTRY_BUY_NOW).">More Info</a>",
		'section'=> 'mining_industry_blog_news',
		'type'=> 'hidden'
	));


	//Footer Text
	$wp_customize->add_section('mining_industry_footer',array(
		'title'	=> esc_html__('Footer Settings','mining-industry'),
		'panel' => 'mining_industry_panel_id',
	));

	$wp_customize->add_setting( 'mining_industry_footer_hide_show',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'mining_industry_switch_sanitization'
	));
	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_footer_hide_show',array(
	    'label' => esc_html__( 'Show / Hide Footer','mining-industry' ),
	    'section' => 'mining_industry_footer'
	)));

 	// font size
	$wp_customize->add_setting('mining_industry_button_footer_font_size',array(
		'default'=> 25,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_button_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','mining-industry'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'mining_industry_footer',
	));

	$wp_customize->add_setting('mining_industry_button_footer_heading_letter_spacing',array(
		'default'=> 1,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_button_footer_heading_letter_spacing',array(
		'label'	=> __('Heading Letter Spacing','mining-industry'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'mining_industry_footer',
	));

	// text trasform
	$wp_customize->add_setting('mining_industry_button_footer_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_button_footer_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Heading Text Transform','mining-industry'),
		'choices' => array(
			'Uppercase' => __('Uppercase','mining-industry'),
			'Capitalize' => __('Capitalize','mining-industry'),
			'Lowercase' => __('Lowercase','mining-industry'),
		),
		'section'=> 'mining_industry_footer',
	));

	$wp_customize->add_setting('mining_industry_footer_heading_weight',array(
    'default' => '500',
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_footer_heading_weight',array(
    'type' => 'select',
    'label' => __('Heading Font Weight','mining-industry'),
    'section' => 'mining_industry_footer',
    'choices' => array(
    	'100' => __('100','mining-industry'),
        '200' => __('200','mining-industry'),
        '300' => __('300','mining-industry'),
        '400' => __('400','mining-industry'),
        '500' => __('500','mining-industry'),
        '600' => __('600','mining-industry'),
        '700' => __('700','mining-industry'),
        '800' => __('800','mining-industry'),
        '900' => __('900','mining-industry'),
    ),
	) );

	$wp_customize->add_setting('mining_industry_footer_template',array(
		'default'	=> esc_html('mining_industry-footer-one'),
		'sanitize_callback'	=> 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_footer_template',array(
		'label'	=> esc_html__('Footer style','mining-industry'),
		'section'	=> 'mining_industry_footer',
		'setting'	=> 'mining_industry_footer_template',
		'type' => 'select',
		'choices' => array(
			'mining_industry-footer-one' => esc_html__('Style 1', 'mining-industry'),
			'mining_industry-footer-two' => esc_html__('Style 2', 'mining-industry'),
			'mining_industry-footer-three' => esc_html__('Style 3', 'mining-industry'),
			'mining_industry-footer-four' => esc_html__('Style 4', 'mining-industry'),
			'mining_industry-footer-five' => esc_html__('Style 5', 'mining-industry'),
		)
	));

	$wp_customize->add_setting('mining_industry_footer_background_color', array(
		'default'           => '#F34F1F',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mining_industry_footer_background_color', array(
		'label'    => __('Footer Background Color', 'mining-industry'),
		'section'  => 'mining_industry_footer',
	)));

	$wp_customize->add_setting('mining_industry_footer_background_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'mining_industry_footer_background_image',array(
        'label' => __('Footer Background Image','mining-industry'),
        'section' => 'mining_industry_footer'
	)));

	$wp_customize->add_setting('mining_industry_footer_img_position',array(
	  'default' => 'center center',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','mining-industry'),
		'section' => 'mining_industry_footer',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'mining-industry' ),
			'center top'   => esc_html__( 'Top', 'mining-industry' ),
			'right top'   => esc_html__( 'Top Right', 'mining-industry' ),
			'left center'   => esc_html__( 'Left', 'mining-industry' ),
			'center center'   => esc_html__( 'Center', 'mining-industry' ),
			'right center'   => esc_html__( 'Right', 'mining-industry' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'mining-industry' ),
			'center bottom'   => esc_html__( 'Bottom', 'mining-industry' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'mining-industry' ),
		),
	));

  // Footer
  $wp_customize->add_setting('mining_industry_img_footer',array(
    'default'=> 'scroll',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
  ));
  $wp_customize->add_control('mining_industry_img_footer',array(
    'type' => 'select',
    'label' => __('Footer Background Attatchment','mining-industry'),
    'choices' => array(
      'fixed' => __('fixed','mining-industry'),
      'scroll' => __('scroll','mining-industry'),
    ),
    'section'=> 'mining_industry_footer',
  ));

  // footer padding
  $wp_customize->add_setting('mining_industry_footer_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('mining_industry_footer_padding',array(
    'label' => __('Footer Top Bottom Padding','mining-industry'),
    'description' => __('Enter a value in pixels. Example:20px','mining-industry'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'mining-industry' ),
    ),
    'section'=> 'mining_industry_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('mining_industry_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
  ));
  $wp_customize->add_control('mining_industry_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading','mining-industry'),
    'section' => 'mining_industry_footer',
    'choices' => array(
      'Left' => __('Left','mining-industry'),
      'Center' => __('Center','mining-industry'),
      'Right' => __('Right','mining-industry')
    ),
  ) );

  $wp_customize->add_setting('mining_industry_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
  ));
  $wp_customize->add_control('mining_industry_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content','mining-industry'),
    'section' => 'mining_industry_footer',
    'choices' => array(
      'Left' => __('Left','mining-industry'),
      'Center' => __('Center','mining-industry'),
      'Right' => __('Right','mining-industry')
  	),
	) );
	
	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('mining_industry_footer_text', array(
		'selector' => '.copyright p',
		'render_callback' => 'mining_industry_Customize_partial_mining_industry_footer_text',
	));

	$wp_customize->add_setting('mining_industry_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_footer_text',array(
		'label'	=> esc_html__('Copyright Text','mining-industry'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Copyright 2025, .....', 'mining-industry' ),
      ),
		'section'=> 'mining_industry_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'mining_industry_copyright_hide_show',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'mining_industry_switch_sanitization'
	));
	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_copyright_hide_show',array(
		'label' => esc_html__( 'Show / Hide Copyright','mining-industry' ),
		'section' => 'mining_industry_footer'
	)));

	$wp_customize->add_setting('mining_industry_copyright_alingment',array(
	    'default' => 'center',
	    'sanitize_callback' => 'mining_industry_sanitize_choices'
		));
		$wp_customize->add_control(new Mining_Industry_Image_Radio_Control($wp_customize, 'mining_industry_copyright_alingment', array(
	    'type' => 'select',
	    'label' => esc_html__('Copyright Alignment','mining-industry'),
	    'section' => 'mining_industry_footer',
	    'settings' => 'mining_industry_copyright_alingment',
	    'choices' => array(
	        'left' => esc_url(get_template_directory_uri()).'/assets/images/copyright1.png',
	        'center' => esc_url(get_template_directory_uri()).'/assets/images/copyright2.png',
	        'right' => esc_url(get_template_directory_uri()).'/assets/images/copyright3.png'
	))));

	$wp_customize->add_setting('mining_industry_copyright_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mining_industry_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'mining-industry'),
		'section'  => 'mining_industry_footer',
	)));

	$wp_customize->add_setting('mining_industry_copyright_font_size',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_copyright_font_size',array(
		'label' => __('Copyright Font Size','mining-industry'),
		'description' => __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'mining-industry' ),
	    ),
		'section'=> 'mining_industry_footer',
		'type'=> 'text'
	));

  $wp_customize->add_setting( 'mining_industry_hide_show_scroll',array(
  	'default' => 1,
  	'transport' => 'refresh',
  	'sanitize_callback' => 'mining_industry_switch_sanitization'
  ));
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_hide_show_scroll',array(
  	'label' => esc_html__( 'Show / Hide Scroll to Top','mining-industry' ),
  	'section' => 'mining_industry_footer'
  )));

  //Selective Refresh
	$wp_customize->selective_refresh->add_partial('mining_industry_scroll_to_top_icon', array(
		'selector' => '.scrollup i',
		'render_callback' => 'mining_industry_Customize_partial_mining_industry_scroll_to_top_icon',
	));

  $wp_customize->add_setting('mining_industry_scroll_top_alignment',array(
    'default' => 'Right',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control(new Mining_Industry_Image_Radio_Control($wp_customize, 'mining_industry_scroll_top_alignment', array(
    'type' => 'select',
    'label' => esc_html__('Scroll To Top','mining-industry'),
    'section' => 'mining_industry_footer',
    'settings' => 'mining_industry_scroll_top_alignment',
    'choices' => array(
        'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
        'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
        'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
  ))));

	$wp_customize->add_setting('mining_industry_scroll_top_icon',array(
		'default' => 'fas fa-long-arrow-alt-up',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser($wp_customize,'mining_industry_scroll_top_icon',array(
		'label' => __('Add Scroll to Top Icon','mining-industry'),
		'transport' => 'refresh',
		'section' => 'mining_industry_footer',
		'setting' => 'mining_industry_scroll_top_icon',
		'type'    => 'icon'
	)));

  $wp_customize->add_setting('mining_industry_scroll_to_top_font_size',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('mining_industry_scroll_to_top_font_size',array(
    'label' => __('Icon Font Size','mining-industry'),
    'description' => __('Enter a value in pixels. Example:20px','mining-industry'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'mining-industry' ),
    ),
    'section'=> 'mining_industry_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('mining_industry_scroll_to_top_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('mining_industry_scroll_to_top_padding',array(
    'label' => __('Icon Top Bottom Padding','mining-industry'),
    'description' => __('Enter a value in pixels. Example:20px','mining-industry'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'mining-industry' ),
    ),
    'section'=> 'mining_industry_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('mining_industry_scroll_to_top_width',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('mining_industry_scroll_to_top_width',array(
    'label' => __('Icon Width','mining-industry'),
    'description' => __('Enter a value in pixels Example:20px','mining-industry'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'mining-industry' ),
  ),
	  'section'=> 'mining_industry_footer',
	  'type'=> 'text'
  ));

  $wp_customize->add_setting('mining_industry_scroll_to_top_height',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('mining_industry_scroll_to_top_height',array(
    'label' => __('Icon Height','mining-industry'),
    'description' => __('Enter a value in pixels. Example:20px','mining-industry'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'mining-industry' ),
    ),
    'section'=> 'mining_industry_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting( 'mining_industry_scroll_to_top_border_radius', array(
    'default'              => '',
    'transport'        => 'refresh',
    'sanitize_callback'    => 'mining_industry_sanitize_number_range'
  ) );
  $wp_customize->add_control( 'mining_industry_scroll_to_top_border_radius', array(
    'label'       => esc_html__( 'Icon Border Radius','mining-industry' ),
    'section'     => 'mining_industry_footer',
    'type'        => 'range',
    'input_attrs' => array(
      'step'             => 1,
      'min'              => 1,
      'max'              => 50,
    ),
  ) );

   $wp_customize->add_setting( 'mining_industry_copyright_sticky',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'mining_industry_switch_sanitization'
    ) );
    $wp_customize->add_control( new mining_industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_copyright_sticky',array(
      'label' => esc_html__( 'Show / Hide Sticky Copyright','mining-industry' ),
      'section' => 'mining_industry_footer'
    )));

    $wp_customize->add_setting('mining_industry_footer_social_icons_font_size',array(
       'default'=> 16,
       'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('mining_industry_footer_social_icons_font_size',array(
    'label' => __('Social Icon Font Size','mining-industry'),
    	'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'mining_industry_footer',
	 ));

  	// footer social icon
	$wp_customize->add_setting( 'mining_industry_footer_icon',array(
		'default' => false,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
  	) );
	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_footer_icon',array(
		'label' => esc_html__( 'Show / Hide Footer Social Icon','mining-industry' ),
		'section' => 'mining_industry_footer'
  	)));

	$wp_customize->add_setting('mining_industry_footer_social_icons',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_footer_social_icons',array(
		'label' =>  esc_html__('Steps to setup social icons','mining-industry'),
		'description' => esc_html__('1. Go to Dashboard >> Appearance >> Widgets
			2. Add Vw Social Icon Widget in Social Widget area.
			3. Add social icons url and save.','mining-industry'),
		'section'=> 'mining_industry_footer',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('mining_industry_footer_social_icon_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_footer_social_icon_btn',array(
		'description' => "<a target='_blank' href='". admin_url('widgets.php') ." '>Setup Footer Social Icons</a>",
		'section'=> 'mining_industry_footer',
		'type'=> 'hidden'
	));

  	$wp_customize->add_setting('mining_industry_align_footer_social_icon',array(
        'default' => 'center',
        'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_align_footer_social_icon',array(
        'type' => 'select',
        'label' => __('Social Icon Alignment ','mining-industry'),
        'section' => 'mining_industry_footer',
        'choices' => array(
            'left' => __('Left','mining-industry'),
            'right' => __('Right','mining-industry'),
            'center' => __('Center','mining-industry'),
        ),
	) );

 	//Blog Post
	$wp_customize->add_panel( 'mining_industry_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'mining-industry' ),
		'panel' => 'mining_industry_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'mining_industry_post_settings', array(
		'title' => esc_html__( 'Post Settings', 'mining-industry' ),
		'panel' => 'mining_industry_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('mining_industry_toggle_postdate', array(
		'selector' => '.post-main-box h2 a',
		'render_callback' => 'mining_industry_Customize_partial_mining_industry_toggle_postdate',
	));

	//Blog layout
  $wp_customize->add_setting('mining_industry_blog_layout_option',array(
    'default' => 'Left',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
  ));
  $wp_customize->add_control(new Mining_Industry_Image_Radio_Control($wp_customize, 'mining_industry_blog_layout_option', array(
    'type' => 'select',
    'label' => __('Blog Post Layouts','mining-industry'),
    'section' => 'mining_industry_post_settings',
    'choices' => array(
      'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
      'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
      'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
  ))));

	$wp_customize->add_setting('mining_industry_theme_options',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_theme_options',array(
    'type' => 'select',
    'label' => esc_html__('Post Sidebar Layout','mining-industry'),
    'description' => esc_html__('Here you can change the sidebar layout for posts. ','mining-industry'),
    'section' => 'mining_industry_post_settings',
    'choices' => array(
        'Left Sidebar' => esc_html__('Left Sidebar','mining-industry'),
        'Right Sidebar' => esc_html__('Right Sidebar','mining-industry'),
        'One Column' => esc_html__('One Column','mining-industry'),
        'Three Columns' => esc_html__('Three Columns','mining-industry'),
        'Four Columns' => esc_html__('Four Columns','mining-industry'),
        'Grid Layout' => esc_html__('Grid Layout','mining-industry')
    ),
	) );

	$wp_customize->add_setting('mining_industry_toggle_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
  $wp_customize,'mining_industry_toggle_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','mining-industry'),
		'transport' => 'refresh',
		'section'	=> 'mining_industry_post_settings',
		'setting'	=> 'mining_industry_toggle_postdate_icon',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting( 'mining_industry_blog_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_switch_sanitization'
  ));
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_blog_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','mining-industry' ),
    'section' => 'mining_industry_post_settings'
  )));

	$wp_customize->add_setting('mining_industry_toggle_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
  $wp_customize,'mining_industry_toggle_author_icon',array(
		'label'	=> __('Add Author Icon','mining-industry'),
		'transport' => 'refresh',
		'section'	=> 'mining_industry_post_settings',
		'setting'	=> 'mining_industry_toggle_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'mining_industry_blog_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
  ));
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_blog_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','mining-industry' ),
		'section' => 'mining_industry_post_settings'
  )));

  $wp_customize->add_setting('mining_industry_toggle_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
  $wp_customize,'mining_industry_toggle_comments_icon',array(
		'label'	=> __('Add Comments Icon','mining-industry'),
		'transport' => 'refresh',
		'section'	=> 'mining_industry_post_settings',
		'setting'	=> 'mining_industry_toggle_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'mining_industry_blog_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
  ) );
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_blog_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','mining-industry' ),
		'section' => 'mining_industry_post_settings'
  )));

  $wp_customize->add_setting('mining_industry_toggle_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
  $wp_customize,'mining_industry_toggle_time_icon',array(
		'label'	=> __('Add Time Icon','mining-industry'),
		'transport' => 'refresh',
		'section'	=> 'mining_industry_post_settings',
		'setting'	=> 'mining_industry_toggle_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'mining_industry_blog_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
  ) );
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_blog_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','mining-industry' ),
		'section' => 'mining_industry_post_settings'
  )));

  $wp_customize->add_setting( 'mining_industry_featured_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
	));
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_featured_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','mining-industry' ),
		'section' => 'mining_industry_post_settings'
	)));
	
	// Featured Image Hover Effect
	$wp_customize->add_setting(
		'mining_industry_featured_image_hover',
		array(
			'default'           => 'none',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'mining_industry_featured_image_hover',
		array(
			'label'   => __( 'Featured Image Hover Effect', 'mining-industry' ),
			'section' => 'mining_industry_post_settings',
			'type'    => 'select',
			'choices' => array(
				'none'      => __( 'None', 'mining-industry' ),
				'zoom-in'   => __( 'Zoom In', 'mining-industry' ),
				'zoom-out'  => __( 'Zoom Out', 'mining-industry' ),
				'scale'     => __( 'Scale', 'mining-industry' ),
				'grayscale' => __( 'Grayscale', 'mining-industry' ),
				'blur'      => __( 'Blur', 'mining-industry' ),
				'bright'    => __( 'Bright', 'mining-industry' ),
				'sepia'     => __( 'Sepia', 'mining-industry' ),
				'translate' => __( 'Translate', 'mining-industry' ),
			),
		)
	);
	
  $wp_customize->add_setting( 'mining_industry_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'mining_industry_sanitize_number_range'
	) );
	$wp_customize->add_control( 'mining_industry_featured_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','mining-industry' ),
		'section'     => 'mining_industry_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'mining_industry_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'mining_industry_sanitize_number_range'
	) );
	$wp_customize->add_control( 'mining_industry_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','mining-industry' ),
		'section'     => 'mining_industry_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Featured Image
	$wp_customize->add_setting('mining_industry_blog_post_featured_image_dimension',array(
   'default' => 'default',
   'sanitize_callback'	=> 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_blog_post_featured_image_dimension',array(
		'type' => 'select',
		'label'	=> __('Blog Post Featured Image Dimension','mining-industry'),
		'section'	=> 'mining_industry_post_settings',
		'choices' => array(
		'default' => __('Default','mining-industry'),
		'custom' => __('Custom Image Size','mining-industry'),
      ),
	));

	$wp_customize->add_setting('mining_industry_blog_post_featured_image_custom_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('mining_industry_blog_post_featured_image_custom_width',array(
		'label'	=> __('Featured Image Custom Width','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'mining-industry' ),),
		'section'=> 'mining_industry_post_settings',
		'type'=> 'text',
		'active_callback' => 'mining_industry_blog_post_featured_image_dimension'
		));

	$wp_customize->add_setting('mining_industry_blog_post_featured_image_custom_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_blog_post_featured_image_custom_height',array(
		'label'	=> __('Featured Image Custom Height','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'mining-industry' ),),
		'section'=> 'mining_industry_post_settings',
		'type'=> 'text',
		'active_callback' => 'mining_industry_blog_post_featured_image_dimension'
	));

  $wp_customize->add_setting( 'mining_industry_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'mining_industry_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'mining_industry_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','mining-industry' ),
		'section'     => 'mining_industry_post_settings',
		'type'        => 'range',
		'settings'    => 'mining_industry_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('mining_industry_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','mining-industry'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','mining-industry'),
		'section'=> 'mining_industry_post_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('mining_industry_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Post Content','mining-industry'),
    'section' => 'mining_industry_post_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','mining-industry'),
        'Excerpt' => esc_html__('Excerpt','mining-industry'),
        'No Content' => esc_html__('No Content','mining-industry')
        ),
	) );

  $wp_customize->add_setting('mining_industry_blog_page_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_blog_page_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Blog Posts','mining-industry'),
    'section' => 'mining_industry_post_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','mining-industry'),
        'Without Blocks' => __('Without Blocks','mining-industry')
        ),
	) );

	$wp_customize->add_setting( 'mining_industry_blog_pagination_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
	));
	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_blog_pagination_hide_show',array(
			'label' => esc_html__( 'Show / Hide Blog Pagination','mining-industry' ),
			'section' => 'mining_industry_post_settings'
	)));

  // Web Frame // 
	
	$wp_customize->add_setting( 'mining_industry_web_frame',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
    ) );
    $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_web_frame',array(
		'label' => esc_html__( 'Show / Hide Blog Page Border','mining-industry' ),
		'section' => 'mining_industry_post_settings'
    )));

	$wp_customize->add_setting('mining_industry_web_frame_border_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mining_industry_web_frame_border_color', array(
		'label'    => __('Blog Page Border Color', 'mining-industry'),
		'section'  => 'mining_industry_post_settings',
	)));

	$wp_customize->add_setting('mining_industry_web_frame_border_width',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_web_frame_border_width',array(
		'label' => __('Blog Page Width','mining-industry'),
		'description' => __('Enter a value in pixels Example:20px','mining-industry'),
		'input_attrs' => array(
		'placeholder' => __( '10px', 'mining-industry' ),
	),
		'section'=> 'mining_industry_post_settings',
		'type'=> 'text'
   ));


	$wp_customize->add_setting('mining_industry_blog_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_blog_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','mining-industry'),
		'input_attrs' => array(
      'placeholder' => __( '[...]', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_post_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'mining_industry_blog_pagination_type', array(
		'default'			=> 'blog-page-numbers',
		'sanitize_callback'	=> 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control( 'mining_industry_blog_pagination_type', array(
		'section' => 'mining_industry_post_settings',
		'type' => 'select',
		'label' => __( 'Blog Pagination', 'mining-industry' ),
		'choices'		=> array(
		'blog-page-numbers'  => __( 'Numeric', 'mining-industry' ),
		'next-prev' => __( 'Older Posts/Newer Posts', 'mining-industry' ),
	)));

    $wp_customize->add_setting('mining_industry_show_first_caps', array(
	    'default'           => false,
	    'transport'         => 'refresh',
	    'sanitize_callback' => 'mining_industry_switch_sanitization',
	));

	$wp_customize->add_control(new Mining_Industry_Toggle_Switch_Custom_Control(
	    $wp_customize,
	    'mining_industry_show_first_caps',
	    array(
	        'label'   => esc_html__('First Cap (First Capital Letter)', 'mining-industry'),
	        'section' => 'mining_industry_post_settings',
	    )
	));

  // Button Settings
	$wp_customize->add_section( 'mining_industry_button_settings', array(
		'title' => esc_html__( 'Button Settings', 'mining-industry' ),
		'panel' => 'mining_industry_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('mining_industry_button_text', array(
		'selector' => '.post-main-box .more-btn a',
		'render_callback' => 'mining_industry_Customize_partial_mining_industry_button_text',
	));

  $wp_customize->add_setting('mining_industry_button_text',array(
		'default'=> esc_html__('Read More','mining-industry'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_button_text',array(
		'label'	=> esc_html__('Add Button Text','mining-industry'),
		'input_attrs' => array(
    'placeholder' => esc_html__( 'Read More', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_button_settings',
		'type'=> 'text'
	));

	// font size button
	$wp_customize->add_setting('mining_industry_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_button_font_size',array(
		'label'	=> __('Button Font Size','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
  		'placeholder' => __( '10px', 'mining-industry' ),
    ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'mining_industry_button_settings',
	));


	$wp_customize->add_setting( 'mining_industry_button_border_radius', array(
		'default'              => 5,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'mining_industry_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'mining_industry_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','mining-industry' ),
		'section'     => 'mining_industry_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// button padding
	$wp_customize->add_setting('mining_industry_button_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_button_top_bottom_padding',array(
		'label'	=> __('Button Top Bottom Padding','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'mining-industry' ),
    ),
		'section'=> 'mining_industry_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_button_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_button_left_right_padding',array(
		'label'	=> __('Button Left Right Padding','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'mining-industry' ),
    ),
		'section'=> 'mining_industry_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_button_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_button_letter_spacing',array(
		'label'	=> __('Button Letter Spacing','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'mining-industry' ),
  ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'mining_industry_button_settings',
	));

	// Button weight button
	$wp_customize->add_setting('mining_industry_button_font_weight', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('mining_industry_button_font_weight', array(
		'label' => __('Button Font Weight','mining-industry'),
		'description' => __('Enter value between 100 to 900. Example: 400, 600','mining-industry'),
		'type' => 'number',
		'input_attrs' => array(
			'step' => 100,
			'min'  => 100,
			'max'  => 900,
    ),
		'section' => 'mining_industry_button_settings',
    ));

	// text trasform
	$wp_customize->add_setting('mining_industry_button_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','mining-industry'),
		'choices' => array(
      'Uppercase' => __('Uppercase','mining-industry'),
      'Capitalize' => __('Capitalize','mining-industry'),
      'Lowercase' => __('Lowercase','mining-industry'),
    ),
		'section'=> 'mining_industry_button_settings',
	));

	// Button hover effect 
	$wp_customize->add_setting('mining_industry_button_hover_effect',array(
	'default' => '',
	'sanitize_callback' => 'mining_industry_sanitize_choices'
    ));
	$wp_customize->add_control('mining_industry_button_hover_effect', array(
        'type' => 'select',
        'label' => __( 'Button Hover Effect', 'mining-industry' ),
        'section' => 'mining_industry_button_settings',
        'choices' => array(
			'pulse'     => __( 'Pulse', 'mining-industry' ),
			'rubberBand'=> __( 'RubberBand', 'mining-industry' ),
			'swing'     => __( 'Swing', 'mining-industry' ),
			'tada'      => __( 'Tada', 'mining-industry' ),
			'jello'     => __( 'Jello', 'mining-industry' ),
			'disable'   => __( 'Disabled', 'mining-industry' )
        ),
    ));

	// Related Post Settings
	$wp_customize->add_section( 'mining_industry_related_posts_settings', array(
		'title' => esc_html__( 'Related Posts Settings', 'mining-industry' ),
		'panel' => 'mining_industry_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('mining_industry_related_post_title', array(
		'selector' => '.related-post h3',
		'render_callback' => 'mining_industry_Customize_partial_mining_industry_related_post_title',
	));

  $wp_customize->add_setting( 'mining_industry_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
  ) );
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_related_post',array(
		'label' => esc_html__( 'Related Post','mining-industry' ),
		'section' => 'mining_industry_related_posts_settings'
  )));

  $wp_customize->add_setting('mining_industry_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_related_post_title',array(
		'label'	=> esc_html__('Add Related Post Title','mining-industry'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Related Post', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_related_posts_settings',
		'type'=> 'text'
	));

 	$wp_customize->add_setting('mining_industry_related_posts_count',array(
		'default'=> 3,
		'sanitize_callback'	=> 'mining_industry_sanitize_number_absint'
	));
	$wp_customize->add_control('mining_industry_related_posts_count',array(
		'label'	=> esc_html__('Add Related Post Count','mining-industry'),
		'input_attrs' => array(
      'placeholder' => esc_html__( '3', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_related_posts_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'mining_industry_related_posts_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'mining_industry_sanitize_number_range'
	) );
	$wp_customize->add_control( 'mining_industry_related_posts_excerpt_number', array(
		'label'       => esc_html__( 'Related Posts Excerpt length','mining-industry' ),
		'section'     => 'mining_industry_related_posts_settings',
		'type'        => 'range',
		'settings'    => 'mining_industry_related_posts_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'mining_industry_related_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
	));
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_related_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','mining-industry' ),
		'section' => 'mining_industry_related_posts_settings'
  )));

  $wp_customize->add_setting( 'mining_industry_related_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_switch_sanitization'
  ));
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_related_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','mining-industry' ),
    'section' => 'mining_industry_related_posts_settings'
  )));

  $wp_customize->add_setting('mining_industry_related_postdate_icon',array(
    'default' => 'fas fa-calendar-alt',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
  $wp_customize,'mining_industry_related_postdate_icon',array(
    'label' => __('Add Post Date Icon','mining-industry'),
    'transport' => 'refresh',
    'section' => 'mining_industry_related_posts_settings',
    'setting' => 'mining_industry_related_postdate_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting( 'mining_industry_related_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
  ));
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_related_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','mining-industry' ),
		'section' => 'mining_industry_related_posts_settings'
  )));

  $wp_customize->add_setting('mining_industry_related_author_icon',array(
    'default' => 'fas fa-user',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
  $wp_customize,'mining_industry_related_author_icon',array(
    'label' => __('Add Author Icon','mining-industry'),
    'transport' => 'refresh',
    'section' => 'mining_industry_related_posts_settings',
    'setting' => 'mining_industry_related_author_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting( 'mining_industry_related_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
  ) );
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_related_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','mining-industry' ),
		'section' => 'mining_industry_related_posts_settings'
  )));

  $wp_customize->add_setting('mining_industry_related_comments_icon',array(
    'default' => 'fa fa-comments',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
  $wp_customize,'mining_industry_related_comments_icon',array(
    'label' => __('Add Comments Icon','mining-industry'),
    'transport' => 'refresh',
    'section' => 'mining_industry_related_posts_settings',
    'setting' => 'mining_industry_related_comments_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting( 'mining_industry_related_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
  ) );
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_related_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','mining-industry' ),
		'section' => 'mining_industry_related_posts_settings'
  )));

  $wp_customize->add_setting('mining_industry_related_time_icon',array(
    'default' => 'fas fa-clock',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
  $wp_customize,'mining_industry_related_time_icon',array(
    'label' => __('Add Time Icon','mining-industry'),
    'transport' => 'refresh',
    'section' => 'mining_industry_related_posts_settings',
    'setting' => 'mining_industry_related_time_icon',
    'type'    => 'icon'
  )));

  $wp_customize->add_setting( 'mining_industry_related_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'mining_industry_sanitize_number_range'
	) );
	$wp_customize->add_control( 'mining_industry_related_image_box_shadow', array(
		'label'       => esc_html__( 'Related post Image Box Shadow','mining-industry' ),
		'section'     => 'mining_industry_related_posts_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

  $wp_customize->add_setting('mining_industry_related_button_text',array(
		'default'=> esc_html__('Read More','mining-industry'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_related_button_text',array(
		'label'	=> esc_html__('Add Button Text','mining-industry'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_related_posts_settings',
		'type'=> 'text'
	));

	// Single Posts Settings
	$wp_customize->add_section( 'mining_industry_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'mining-industry' ),
		'panel' => 'mining_industry_blog_post_parent_panel',
	));

	$wp_customize->add_setting('mining_industry_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
  $wp_customize,'mining_industry_single_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','mining-industry'),
		'transport' => 'refresh',
		'section'	=> 'mining_industry_single_blog_settings',
		'setting'	=> 'mining_industry_single_postdate_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'mining_industry_single_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_switch_sanitization'
	) );
	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_single_postdate',array(
		'label' => esc_html__( 'Show / Hide Date','mining-industry' ),
		'section' => 'mining_industry_single_blog_settings'
	)));

	$wp_customize->add_setting('mining_industry_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
  $wp_customize,'mining_industry_single_author_icon',array(
		'label'	=> __('Add Author Icon','mining-industry'),
		'transport' => 'refresh',
		'section'	=> 'mining_industry_single_blog_settings',
		'setting'	=> 'mining_industry_single_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'mining_industry_single_author',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_switch_sanitization'
	) );
	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_single_author',array(
    'label' => esc_html__( 'Show / Hide Author','mining-industry' ),
    'section' => 'mining_industry_single_blog_settings'
	)));

 	$wp_customize->add_setting('mining_industry_single_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
  $wp_customize,'mining_industry_single_comments_icon',array(
		'label'	=> __('Add Comments Icon','mining-industry'),
		'transport' => 'refresh',
		'section'	=> 'mining_industry_single_blog_settings',
		'setting'	=> 'mining_industry_single_comments_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'mining_industry_single_comments',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_switch_sanitization'
	) );
	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_single_comments',array(
    'label' => esc_html__( 'Show / Hide Comments','mining-industry' ),
    'section' => 'mining_industry_single_blog_settings'
	)));

	$wp_customize->add_setting('mining_industry_single_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
  $wp_customize,'mining_industry_single_time_icon',array(
		'label'	=> __('Add Time Icon','mining-industry'),
		'transport' => 'refresh',
		'section'	=> 'mining_industry_single_blog_settings',
		'setting'	=> 'mining_industry_single_time_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'mining_industry_single_time',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_switch_sanitization'
	) );
	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_single_time',array(
    'label' => esc_html__( 'Show / Hide Time','mining-industry' ),
    'section' => 'mining_industry_single_blog_settings'
	)));

	$wp_customize->add_setting( 'mining_industry_toggle_tags',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
	));
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_toggle_tags', array(
		'label' => esc_html__( 'Show / Hide Tags','mining-industry' ),
		'section' => 'mining_industry_single_blog_settings'
  )));

	// Single Posts Category
 	 $wp_customize->add_setting( 'mining_industry_single_post_category',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
  	) );
	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_single_post_category',array(
		'label' => esc_html__( 'Show / Hide Category','mining-industry' ),
		'section' => 'mining_industry_single_blog_settings'
  	)));

	 $wp_customize->add_setting('mining_industry_single_post_styling',array(
    'default' => 'Button',
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_single_post_styling',array(
	'label' => __('Change the styling of Category','mining-industry'),
	'type' => 'select',
    'section' => 'mining_industry_single_blog_settings',
    'choices' => array(
        'Button' => __('Button','mining-industry'),
		'Underline' => __('Underline','mining-industry'),
		'Default' => __('Default','mining-industry'),
      ),
	) );

  	$wp_customize->add_setting( 'mining_industry_singlepost_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'mining_industry_sanitize_number_range'
	) );
	$wp_customize->add_control( 'mining_industry_singlepost_image_box_shadow', array(
		'label'       => esc_html__( 'Single post Image Box Shadow','mining-industry' ),
		'section'     => 'mining_industry_single_blog_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('mining_industry_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','mining-industry'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','mining-industry'),
		'section'=> 'mining_industry_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'mining_industry_single_blog_post_navigation_show_hide',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
	));
	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_single_blog_post_navigation_show_hide', array(
	  'label' => esc_html__( 'Show / Hide Post Navigation','mining-industry' ),
	  'section' => 'mining_industry_single_blog_settings'
	)));

	//navigation text
	$wp_customize->add_setting('mining_industry_single_blog_prev_navigation_text',array(
		'default'=> 'PREVIOUS',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_single_blog_prev_navigation_text',array(
		'label'	=> __('Post Navigation Text','mining-industry'),
		'input_attrs' => array(
      'placeholder' => __( 'PREVIOUS', 'mining-industry' ),
      ),
		'section'=> 'mining_industry_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_single_blog_next_navigation_text',array(
		'default'=> 'NEXT',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_single_blog_next_navigation_text',array(
		'label'	=> __('Post Navigation Text','mining-industry'),
		'input_attrs' => array(
      'placeholder' => __( 'NEXT', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_single_blog_comment_title',array(
		'default'=> 'Leave a Reply',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('mining_industry_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','mining-industry'),
		'input_attrs' => array(
      'placeholder' => __( 'Leave a Reply', 'mining-industry' ),
    	),
		'section'=> 'mining_industry_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_single_blog_comment_button_text',array(
		'default'=> 'Post Comment',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('mining_industry_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','mining-industry'),
		'input_attrs' => array(
    'placeholder' => __( 'Post Comment', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','mining-industry'),
		'description'	=> __('Enter a value in %. Example:50%','mining-industry'),
		'input_attrs' => array(
      'placeholder' => __( '100%', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_single_blog_settings',
		'type'=> 'text'
	));

	 // Grid layout setting
	$wp_customize->add_section( 'mining_industry_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'mining-industry' ),
		'panel' => 'mining_industry_blog_post_parent_panel',
	));

	$wp_customize->add_setting('mining_industry_grid_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
        $wp_customize,'mining_industry_grid_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','mining-industry'),
		'transport' => 'refresh',
		'section'	=> 'mining_industry_grid_layout_settings',
		'setting'	=> 'mining_industry_grid_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'mining_industry_grid_postdate',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'mining_industry_switch_sanitization'
  ) );
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_grid_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','mining-industry' ),
    'section' => 'mining_industry_grid_layout_settings'
  )));

	$wp_customize->add_setting('mining_industry_grid_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
        $wp_customize,'mining_industry_grid_author_icon',array(
		'label'	=> __('Add Author Icon','mining-industry'),
		'transport' => 'refresh',
		'section'	=> 'mining_industry_grid_layout_settings',
		'setting'	=> 'mining_industry_grid_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'mining_industry_grid_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
  ) );
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_grid_author',array(
		'label' => esc_html__( 'Show / Hide Author','mining-industry' ),
		'section' => 'mining_industry_grid_layout_settings'
  )));

  $wp_customize->add_setting('mining_industry_grid_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
        $wp_customize,'mining_industry_grid_comments_icon',array(
		'label'	=> __('Add Comments Icon','mining-industry'),
		'transport' => 'refresh',
		'section'	=> 'mining_industry_grid_layout_settings',
		'setting'	=> 'mining_industry_grid_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'mining_industry_grid_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
  ) );
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_grid_time',array(
		'label' => esc_html__( 'Show / Hide Time','mining-industry' ),
		'section' => 'mining_industry_grid_layout_settings'
  )));

  $wp_customize->add_setting('mining_industry_grid_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
        $wp_customize,'mining_industry_grid_time_icon',array(
		'label'	=> __('Add Time Icon','mining-industry'),
		'transport' => 'refresh',
		'section'	=> 'mining_industry_grid_layout_settings',
		'setting'	=> 'mining_industry_grid_time_icon',
		'type'		=> 'icon'
	)));

  	$wp_customize->add_setting( 'mining_industry_grid_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
  	) );
  	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_grid_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','mining-industry' ),
		'section' => 'mining_industry_grid_layout_settings'
  	)));

  	$wp_customize->add_setting( 'mining_industry_grid_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
	));
  	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_grid_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','mining-industry' ),
		'section' => 'mining_industry_grid_layout_settings'
  	)));

 	$wp_customize->add_setting('mining_industry_grid_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_grid_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','mining-industry'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','mining-industry'),
		'section'=> 'mining_industry_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('mining_industry_display_grid_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_display_grid_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Grid Posts','mining-industry'),
    'section' => 'mining_industry_grid_layout_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','mining-industry'),
      'Without Blocks' => __('Without Blocks','mining-industry')
      ),
	) );

	$wp_customize->add_setting('mining_industry_grid_button_text',array(
		'default'=> esc_html__('Read More','mining-industry'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','mining-industry'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_grid_layout_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_grid_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_grid_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','mining-industry'),
		'input_attrs' => array(
        'placeholder' => __( '[...]', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('mining_industry_grid_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_grid_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Grid Post Content','mining-industry'),
    'section' => 'mining_industry_grid_layout_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','mining-industry'),
      'Excerpt' => esc_html__('Excerpt','mining-industry'),
      'No Content' => esc_html__('No Content','mining-industry')
    ),
	) );

  $wp_customize->add_setting( 'mining_industry_grid_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'mining_industry_sanitize_number_range'
	) );
	$wp_customize->add_control( 'mining_industry_grid_featured_image_border_radius', array(
		'label'       => esc_html__( 'Grid Featured Image Border Radius','mining-industry' ),
		'section'     => 'mining_industry_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'mining_industry_grid_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'mining_industry_sanitize_number_range'
	) );
	$wp_customize->add_control( 'mining_industry_grid_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Grid Featured Image Box Shadow','mining-industry' ),
		'section'     => 'mining_industry_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Other
	$wp_customize->add_panel( 'mining_industry_other_parent_panel', array(
		'title' => esc_html__( 'Other Settings', 'mining-industry' ),
		'panel' => 'mining_industry_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'mining_industry_left_right', array(
  	'title' => esc_html__('General Settings', 'mining-industry'),
		'panel' => 'mining_industry_other_parent_panel'
	) );

	$wp_customize->add_setting('mining_industry_width_option',array(
    'default' => 'Full Width',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control(new Mining_Industry_Image_Radio_Control($wp_customize, 'mining_industry_width_option', array(
    'type' => 'select',
    'label' => esc_html__('Width Layouts','mining-industry'),
    'description' => esc_html__('Here you can change the width layout of Website.','mining-industry'),
    'section' => 'mining_industry_left_right',
    'choices' => array(
        'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
        'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
        'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
  ))));

	$wp_customize->add_setting('mining_industry_page_layout',array(
    'default' => 'One_Column',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_page_layout',array(
    'type' => 'select',
    'label' => esc_html__('Page Sidebar Layout','mining-industry'),
    'description' => esc_html__('Here you can change the sidebar layout for pages. ','mining-industry'),
    'section' => 'mining_industry_left_right',
    'choices' => array(
        'Left_Sidebar' => esc_html__('Left Sidebar','mining-industry'),
        'Right_Sidebar' => esc_html__('Right Sidebar','mining-industry'),
        'One_Column' => esc_html__('One Column','mining-industry')
    ),
	) );

	$wp_customize->add_setting( 'mining_industry_single_page_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
  ) );
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_single_page_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Page Breadcrumb','mining-industry' ),
		'section' => 'mining_industry_left_right'
  )));

  // Progress Bar
	$wp_customize->add_setting( 'mining_industry_progress_bar', array(
		'default'           => 0, // OFF by default
		'transport'         => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization',
	) );

	$wp_customize->add_control(
		new Mining_Industry_Toggle_Switch_Custom_Control(
			$wp_customize,
			'mining_industry_progress_bar',
			array(
				'label'   => esc_html__( 'Show / Hide Progress Bar', 'mining-industry' ),
				'section' => 'mining_industry_left_right',
			)
		)
	);

	//Wow Animation
	$wp_customize->add_setting( 'mining_industry_animation',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_switch_sanitization'
	));
	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_animation',array(
    'label' => esc_html__( 'Show / Hide Animations','mining-industry' ),
    'description' => __('Here you can disable overall site animation effect','mining-industry'),
    'section' => 'mining_industry_left_right'
	)));
	
    // Pre-Loader
	$wp_customize->add_setting( 'mining_industry_loader_enable',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_switch_sanitization'
  ) );
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_loader_enable',array(
    'label' => esc_html__( 'Pre-Loader','mining-industry' ),
    'section' => 'mining_industry_left_right'
  )));

	$wp_customize->add_setting('mining_industry_preloader_bg_color', array(
		'default'           => '#F34F1F',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mining_industry_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'mining-industry'),
		'section'  => 'mining_industry_left_right',
	)));

	$wp_customize->add_setting('mining_industry_preloader_border_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mining_industry_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'mining-industry'),
		'section'  => 'mining_industry_left_right',
	)));

	$wp_customize->add_setting('mining_industry_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'mining_industry_preloader_bg_img',array(
    'label' => __('Preloader Background Image','mining-industry'),
    'section' => 'mining_industry_left_right'
	)));

	$wp_customize->add_setting( 'mining_industry_sticky_sidebar',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'mining_industry_switch_sanitization'
    ) );
    $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_sticky_sidebar',array(
      'label' => esc_html__( 'Show / Hide Sticky Sidebar','mining-industry' ),
      'section' => 'mining_industry_left_right'
    )));

    $wp_customize->add_setting( 'mining_industry_sticky_sidebar',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'mining_industry_switch_sanitization'
    ) );
    $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_sticky_sidebar',array(
      'label' => esc_html__( 'Show / Hide Sticky Sidebar','mining-industry' ),
      'section' => 'mining_industry_left_right'
    )));

   //404 Page Setting
	$wp_customize->add_section('mining_industry_404_page',array(
		'title'	=> __('404 Page Settings','mining-industry'),
		'panel' => 'mining_industry_other_parent_panel',
	));

	$wp_customize->add_setting('mining_industry_404_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('mining_industry_404_page_title',array(
		'label'	=> __('Add Title','mining-industry'),
		'input_attrs' => array(
            'placeholder' => __( '404 Not Found', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_404_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('mining_industry_404_page_content',array(
		'label'	=> __('Add Text','mining-industry'),
		'input_attrs' => array(
            'placeholder' => __( 'Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_404_page_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_404_page_button_text',array(
		'label'	=> __('Add Button Text','mining-industry'),
		'input_attrs' => array(
            'placeholder' => __( 'Go Back', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_404_page',
		'type'=> 'text'
	));

	//No Result Page Setting
	$wp_customize->add_section('mining_industry_no_results_page',array(
		'title'	=> __('No Results Page Settings','mining-industry'),
		'panel' => 'mining_industry_other_parent_panel',
	));

	$wp_customize->add_setting('mining_industry_no_results_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('mining_industry_no_results_page_title',array(
		'label'	=> __('Add Title','mining-industry'),
		'input_attrs' => array(
            'placeholder' => __( 'Nothing Found', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_no_results_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_no_results_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('mining_industry_no_results_page_content',array(
		'label'	=> __('Add Text','mining-industry'),
		'input_attrs' => array(
            'placeholder' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_no_results_page',
		'type'=> 'text'
	));

	//Social Icon Setting
	$wp_customize->add_section('mining_industry_social_icon_settings',array(
		'title'	=> __('Sidebar Social Icons Settings','mining-industry'),
		'panel' => 'mining_industry_other_parent_panel',
	));

	$wp_customize->add_setting('mining_industry_social_icon_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_social_icon_font_size',array(
		'label'	=> __('Icon Font Size','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_social_icon_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_social_icon_padding',array(
		'label'	=> __('Icon Padding','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_social_icon_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_social_icon_width',array(
		'label'	=> __('Icon Width','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_social_icon_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_social_icon_height',array(
		'label'	=> __('Icon Height','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_social_icon_settings',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('mining_industry_responsive_media',array(
		'title'	=> esc_html__('Responsive Media','mining-industry'),
		'panel' => 'mining_industry_other_parent_panel',
	));

  $wp_customize->add_setting( 'mining_industry_responsive_preloader_hide',array(
      'default' => false,
      'transport' => 'refresh',
      'sanitize_callback' => 'mining_industry_switch_sanitization'
  ) );
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_responsive_preloader_hide',array(
      'label' => esc_html__( 'Show / Hide Preloader','mining-industry' ),
      'section' => 'mining_industry_responsive_media'
  )));


  $wp_customize->add_setting( 'mining_industry_sidebar_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
  ));
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_sidebar_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Sidebar','mining-industry' ),
    	'section' => 'mining_industry_responsive_media'
  )));

  $wp_customize->add_setting( 'mining_industry_resp_scroll_top_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
	));
	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_resp_scroll_top_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Scroll To Top','mining-industry' ),
    	'section' => 'mining_industry_responsive_media'
	)));

  $wp_customize->add_setting('mining_industry_res_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
        $wp_customize,'mining_industry_res_open_menu_icon',array(
		'label'	=> __('Add Open Menu Icon','mining-industry'),
		'transport' => 'refresh',
		'section'	=> 'mining_industry_responsive_media',
		'setting'	=> 'mining_industry_res_open_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('mining_industry_res_close_menu_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mining_Industry_Fontawesome_Icon_Chooser(
        $wp_customize,'mining_industry_res_close_menu_icon',array(
		'label'	=> __('Add Close Menu Icon','mining-industry'),
		'transport' => 'refresh',
		'section'	=> 'mining_industry_responsive_media',
		'setting'	=> 'mining_industry_res_close_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('mining_industry_resp_menu_toggle_btn_bg_color', array(
		'default'           => '#B53A17',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mining_industry_resp_menu_toggle_btn_bg_color', array(
		'label'    => __('Toggle Button Bg Color', 'mining-industry'),
		'section'  => 'mining_industry_responsive_media',
	)));

  //Woocommerce settings
	$wp_customize->add_section('mining_industry_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'mining-industry'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'mining_industry_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar',
		'render_callback' => 'mining_industry_customize_partial_mining_industry_woocommerce_shop_page_sidebar', ) );

    //Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'mining_industry_woocommerce_shop_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
  ) );
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_woocommerce_shop_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Shop Page Sidebar','mining-industry' ),
		'section' => 'mining_industry_woocommerce_section'
  )));

   $wp_customize->add_setting('mining_industry_shop_page_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_shop_page_layout',array(
    'type' => 'select',
    'label' => __('Shop Page Sidebar Layout','mining-industry'),
    'section' => 'mining_industry_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','mining-industry'),
        'Right Sidebar' => __('Right Sidebar','mining-industry'),
    ),
	) );

   //Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'mining_industry_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar',
		'render_callback' => 'mining_industry_customize_partial_mining_industry_woocommerce_single_product_page_sidebar', ) );

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'mining_industry_woocommerce_single_product_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'mining_industry_switch_sanitization'
   ) );
 	$wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Single Product Sidebar','mining-industry' ),
		'section' => 'mining_industry_woocommerce_section'
  )));

   $wp_customize->add_setting('mining_industry_single_product_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_single_product_layout',array(
    'type' => 'select',
    'label' => __('Single Product Sidebar Layout','mining-industry'),
    'section' => 'mining_industry_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','mining-industry'),
        'Right Sidebar' => __('Right Sidebar','mining-industry'),
		'One Column' => __('One Column','mining-industry')
    ),
	) );


	//Products per page
    $wp_customize->add_setting('mining_industry_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'mining_industry_sanitize_float'
	));
	$wp_customize->add_control('mining_industry_products_per_page',array(
		'label'	=> __('Products Per Page','mining-industry'),
		'description' => __('Display on shop page','mining-industry'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'mining_industry_woocommerce_section',
		'type'=> 'number',
	));

    //Products per row
    $wp_customize->add_setting('mining_industry_products_per_row',array(
		'default'=> '4',
		'sanitize_callback'	=> 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_products_per_row',array(
		'label'	=> __('Products Per Row','mining-industry'),
		'description' => __('Display on shop page','mining-industry'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'mining_industry_woocommerce_section',
		'type'=> 'select',
		));

	//Products padding
	$wp_customize->add_setting('mining_industry_products_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_products_padding_top_bottom',array(
		'label'	=> __('Products Padding Top Bottom','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_products_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_products_padding_left_right',array(
		'label'	=> __('Products Padding Left Right','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_woocommerce_section',
		'type'=> 'text'
	));

	//Products box shadow
	$wp_customize->add_setting( 'mining_industry_products_box_shadow', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'mining_industry_sanitize_number_range'
	) );
	$wp_customize->add_control( 'mining_industry_products_box_shadow', array(
		'label'       => esc_html__( 'Products Box Shadow','mining-industry' ),
		'section'     => 'mining_industry_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products border radius
    $wp_customize->add_setting( 'mining_industry_products_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'mining_industry_sanitize_number_range'
	) );
	$wp_customize->add_control( 'mining_industry_products_border_radius', array(
		'label'       => esc_html__( 'Products Border Radius','mining-industry' ),
		'section'     => 'mining_industry_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'mining_industry_products_button_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'mining_industry_sanitize_number_range'
	) );
	$wp_customize->add_control( 'mining_industry_products_button_border_radius', array(
		'label'       => esc_html__( 'Products Button Border Radius','mining-industry' ),
		'section'     => 'mining_industry_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('mining_industry_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_woocommerce_section',
		'type'=> 'text'
	));

	//Products Sale Badge
	$wp_customize->add_setting('mining_industry_woocommerce_sale_position',array(
    'default' => 'right',
    'sanitize_callback' => 'mining_industry_sanitize_choices'
	));
	$wp_customize->add_control('mining_industry_woocommerce_sale_position',array(
    'type' => 'select',
    'label' => __('Sale Badge Position','mining-industry'),
    'section' => 'mining_industry_woocommerce_section',
    'choices' => array(
        'left' => __('Left','mining-industry'),
        'right' => __('Right','mining-industry'),
    ),
	) );

	$wp_customize->add_setting('mining_industry_woocommerce_sale_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_woocommerce_sale_padding_top_bottom',array(
		'label'	=> __('Sale Padding Top Bottom','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mining_industry_woocommerce_sale_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mining_industry_woocommerce_sale_padding_left_right',array(
		'label'	=> __('Sale Padding Left Right','mining-industry'),
		'description'	=> __('Enter a value in pixels. Example:20px','mining-industry'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'mining-industry' ),
        ),
		'section'=> 'mining_industry_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'mining_industry_woocommerce_sale_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'mining_industry_sanitize_number_range'
	) );
	$wp_customize->add_control( 'mining_industry_woocommerce_sale_border_radius', array(
		'label'       => esc_html__( 'Sale Border Radius','mining-industry' ),
		'section'     => 'mining_industry_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// Related Product
  $wp_customize->add_setting( 'mining_industry_related_product_show_hide',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'mining_industry_switch_sanitization'
  ) );
  $wp_customize->add_control( new Mining_Industry_Toggle_Switch_Custom_Control( $wp_customize, 'mining_industry_related_product_show_hide',array(
    'label' => esc_html__( 'Show / Hide Related product','mining-industry' ),
    'section' => 'mining_industry_woocommerce_section'
  )));

}

add_action( 'customize_register', 'mining_industry_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Mining_Industry_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

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
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Mining_Industry_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Mining_Industry_Customize_Section_Pro( $manager,'mining_industry_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'MINING INDUSTRY PRO', 'mining-industry' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'mining-industry' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/products/mining-wordpress-theme'),
		)));

		$manager->add_section(new Mining_Industry_Customize_Section_Pro($manager,'mining_industry_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'mining-industry' ),
			'pro_text' => esc_html__( 'DOCS', 'mining-industry' ),
			'pro_url'  => esc_url('https://preview.vwthemesdemo.com/docs/free-mining-industry/'),
		)));

		$manager->add_section(new Mining_Industry_Customize_Section_Pro($manager,'mining_industry_live_demo_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'LIVE DEMO', 'mining-industry' ),
			'pro_text' => esc_html__( 'LIVE DEMO', 'mining-industry' ),
			'pro_url'  => esc_url('https://www.vwthemes.net/mining-industry-pro/'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'mining-industry-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'mining-industry-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Mining_Industry_Customize::get_instance();