<?php

	$mining_industry_first_theme_color = get_theme_mod('mining_industry_first_theme_color');

	$mining_industry_custom_css = '';

	/*------------------ Theme Color Option -----------*/
	if ($mining_industry_first_theme_color) {
		$mining_industry_custom_css .= ':root {';
		$mining_industry_custom_css .= '--primary-color: ' . esc_attr($mining_industry_first_theme_color) . ' !important;';
		$mining_industry_custom_css .= '} ';
	} 

	// Layout Options
	$mining_industry_theme_layout = get_theme_mod( 'mining_industry_theme_layout_options','Default Theme');
    if($mining_industry_theme_layout == 'Default Theme'){
		$mining_industry_custom_css .='body{';
			$mining_industry_custom_css .='max-width: 100%;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_theme_layout == 'Container Theme'){
		$mining_industry_custom_css .='body{';
			$mining_industry_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_theme_layout == 'Box Container Theme'){
		$mining_industry_custom_css .='body{';
			$mining_industry_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$mining_industry_custom_css .='}';
	}
	
	/*--------- Preloader Color Option -------*/
	$mining_industry_preloader_color = get_theme_mod('mining_industry_preloader_color');

	if($mining_industry_preloader_color != false){
		$mining_industry_custom_css .=' .tg-loader{';
			$mining_industry_custom_css .='border-color: '.esc_attr($mining_industry_preloader_color).';';
		$mining_industry_custom_css .='} ';
		$mining_industry_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_preloader_color).';';
		$mining_industry_custom_css .='} ';
	}

	$mining_industry_preloader_bg_color = get_theme_mod('mining_industry_preloader_bg_color');

	if($mining_industry_preloader_bg_color != false){
		$mining_industry_custom_css .=' #overlayer, .preloader{';
			$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_preloader_bg_color).';';
		$mining_industry_custom_css .='} ';
	}

	$mining_industry_preloader_bg_img = get_theme_mod('mining_industry_preloader_bg_img');
	if($mining_industry_preloader_bg_img != false){
		$mining_industry_custom_css .=' #overlayer, .preloader{';
			$mining_industry_custom_css .='background: url('.esc_attr($mining_industry_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$mining_industry_custom_css .='}';
	}

	/*------------ Button Settings option-----------------*/

	$mining_industry_top_button_padding = get_theme_mod('mining_industry_top_button_padding');
	$mining_industry_bottom_button_padding = get_theme_mod('mining_industry_bottom_button_padding');
	$mining_industry_left_button_padding = get_theme_mod('mining_industry_left_button_padding');
	$mining_industry_right_button_padding = get_theme_mod('mining_industry_right_button_padding');
	if($mining_industry_top_button_padding != false || $mining_industry_bottom_button_padding != false || $mining_industry_left_button_padding != false || $mining_industry_right_button_padding != false){
		$mining_industry_custom_css .='.blogbtn a, .read-more a, #comments input[type="submit"].submit{';
			$mining_industry_custom_css .='padding-top: '.esc_attr($mining_industry_top_button_padding).'px; padding-bottom: '.esc_attr($mining_industry_bottom_button_padding).'px; padding-left: '.esc_attr($mining_industry_left_button_padding).'px; padding-right: '.esc_attr($mining_industry_right_button_padding).'px; display:inline-block;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_button_border_radius = get_theme_mod('mining_industry_button_border_radius');
	$mining_industry_custom_css .='.blogbtn a, .read-more a, #comments input[type="submit"].submit{';
		$mining_industry_custom_css .='border-radius: '.esc_attr($mining_industry_button_border_radius).'px;';
	$mining_industry_custom_css .='}';

	// button font weight
	$mining_industry_button_font_weight = get_theme_mod('mining_industry_button_font_weight', '700');
  	$mining_industry_custom_css .='.blogbtn a{';
    $mining_industry_custom_css .='font-weight: '.esc_attr($mining_industry_button_font_weight).';';
  	$mining_industry_custom_css .='}';


  	// button text transform
  	$mining_industry_button_text_transform = get_theme_mod('mining_industry_button_text_transform', 'Uppercase');
  	if($mining_industry_button_text_transform == 'capitalize' ){
    	$mining_industry_custom_css .='.blogbtn a{';
      	$mining_industry_custom_css .=' text-transform: capitalize;';
    	$mining_industry_custom_css .='}';
  	}elseif($mining_industry_button_text_transform == 'lowercase' ){
    	$mining_industry_custom_css .='.blogbtn a{';
      	$mining_industry_custom_css .=' text-transform: lowercase;';
    	$mining_industry_custom_css .='}';
  	}

	// Button letter spacing
	$mining_industry_button_letter_spacing = get_theme_mod('mining_industry_button_letter_spacing', '0.3');
	$mining_industry_custom_css .='.blogbtn a{';
		$mining_industry_custom_css .='letter-spacing: '.esc_attr($mining_industry_button_letter_spacing).'px;';
	$mining_industry_custom_css .='}';	

	//Button hover effect
	$mining_industry_button_hover_effect = get_theme_mod('mining_industry_button_hover_effect', 'disable');
	if ($mining_industry_button_hover_effect !== 'disable') {
		$mining_industry_custom_css .= '.blogbtn:hover {';
		switch ($mining_industry_button_hover_effect) {
			case 'pulse':
				$mining_industry_custom_css .= 'animation: pulse 0.5s ease-in-out;';
				break;
			case 'rubberBand':
				$mining_industry_custom_css .= 'animation: rubberBand 0.5s ease-in-out;';
				break;
			case 'swing':
				$mining_industry_custom_css .= 'animation: swing 0.5s ease-in-out;';
				break;
			case 'tada':
				$mining_industry_custom_css .= 'animation: tada 0.5s ease-in-out;';
				break;
			case 'jello':
				$mining_industry_custom_css .= 'animation: jello 0.5s ease-in-out;';
				break;
		}
		$mining_industry_custom_css .= '}';
	}

	//keyframes for all animations
	$mining_industry_custom_css .= '
	@keyframes pulse {
		0% { transform: scale(1); }
		50% { transform: scale(1.1); }
		100% { transform: scale(1); }
	}

	@keyframes rubberBand {
		0% { transform: scale(1); }
		30% { transform: scaleX(1.25) scaleY(0.75); }
		40% { transform: scaleX(0.75) scaleY(1.25); }
		50% { transform: scale(1); }
	}

	@keyframes swing {
		20% { transform: rotate(15deg); }
		40% { transform: rotate(-10deg); }
		60% { transform: rotate(5deg); }
		80% { transform: rotate(-5deg); }
		100% { transform: rotate(0deg); }
	}

	@keyframes tada {
		0% { transform: scale(1); }
		20%, 20% { transform: scale(0.9) rotate(-3deg); }
		30%, 50%, 70%, 90% { transform: scale(1.1) rotate(3deg); }
		40%, 60%, 80% { transform: scale(1.1) rotate(-3deg); }
		100% { transform: scale(1) rotate(0); }
	}

	@keyframes jello {
		0%, 11.1%, 100% { transform: none; }
		22.2% { transform: skewX(-12.5deg) skewY(-12.5deg); }
		33.3% { transform: skewX(6.25deg) skewY(6.25deg); }
		44.4% { transform: skewX(-3.125deg) skewY(-3.125deg); }
		55.5% { transform: skewX(1.5625deg) skewY(1.5625deg); }
		66.6% { transform: skewX(-0.78125deg) skewY(-0.78125deg); }
		77.7% { transform: skewX(0.390625deg) skewY(0.390625deg); }
		88.8% { transform: skewX(-0.1953125deg) skewY(-0.1953125deg); }
	}';

  	// widgets heading font size
	$mining_industry_widgets_heading_fontsize = get_theme_mod('mining_industry_widgets_heading_fontsize',25);
	if($mining_industry_widgets_heading_fontsize != false){
		$mining_industry_custom_css .='#footer h3, #footer h2, #footer .wp-block-search__label{';
			$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_widgets_heading_fontsize).'px; ';
		$mining_industry_custom_css .='}';
	}

	// widgets heading font weight
	$mining_industry_widgets_heading_font_weight = get_theme_mod('mining_industry_widgets_heading_font_weight', '600');
  	$mining_industry_custom_css .='#footer h3, #footer h2, #footer .wp-block-search__label{';
    $mining_industry_custom_css .='font-weight: '.esc_attr($mining_industry_widgets_heading_font_weight).';';
  	$mining_industry_custom_css .='}';

	/*----------- Footer widgets heading alignment -----*/
	$mining_industry_footer_widgets_heading = get_theme_mod( 'mining_industry_footer_widgets_heading','Left');
    if($mining_industry_footer_widgets_heading == 'Left'){
		$mining_industry_custom_css .='#footer h3{';
		$mining_industry_custom_css .='text-align: left;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_footer_widgets_heading == 'Center'){
		$mining_industry_custom_css .='#footer h3{';
			$mining_industry_custom_css .='text-align: center;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_footer_widgets_heading == 'Right'){
		$mining_industry_custom_css .='#footer h3{';
			$mining_industry_custom_css .='text-align: right;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_footer_widgets_content = get_theme_mod( 'mining_industry_footer_widgets_content','Left');
    if($mining_industry_footer_widgets_content == 'Left'){
		$mining_industry_custom_css .='#footer .widget ul,#footer aside p,.tagcloud,nav.wp-calendar-nav,#wp-calendar caption,.textwidget {';
		$mining_industry_custom_css .='text-align: left;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_footer_widgets_content == 'Center'){
		$mining_industry_custom_css .='#footer .widget ul,#footer aside p,.tagcloud,nav.wp-calendar-nav,#wp-calendar caption,.textwidget{';
			$mining_industry_custom_css .='text-align: center;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_footer_widgets_content == 'Right'){
		$mining_industry_custom_css .='#footer .widget ul,#footer aside p,.tagcloud,nav.wp-calendar-nav,#wp-calendar caption,.textwidget {';
			$mining_industry_custom_css .='text-align: right;';
		$mining_industry_custom_css .='}';
	}

	// Footer Heading Text Transform

	$mining_industry_theme_lay = get_theme_mod( 'mining_industry_footer_text_tranform','Capitalize');
    if($mining_industry_theme_lay == 'Uppercase'){
		$mining_industry_custom_css .='#footer h3{';
			$mining_industry_custom_css .='text-transform: Uppercase;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_theme_lay == 'Lowercase'){
		$mining_industry_custom_css .='#footer h3{';
			$mining_industry_custom_css .='text-transform: Lowercase;';
		$mining_industry_custom_css .='}';
	}
	else if($mining_industry_theme_lay == 'Capitalize'){
		$mining_industry_custom_css .='#footer h3{';
			$mining_industry_custom_css .='text-transform: Capitalize;';
		$mining_industry_custom_css .='}';
	}	

	// Footer Heading  letter spacing
	$mining_industry_widgets_heading_letter_spacing = get_theme_mod('mining_industry_widgets_heading_letter_spacing','');
	$mining_industry_custom_css .='#footer h3{';
	$mining_industry_custom_css .='letter-spacing: '.esc_attr($mining_industry_widgets_heading_letter_spacing).'px;';
	$mining_industry_custom_css .='}';		
	
/*---------------------------Footer Style -------------------*/

	$mining_industry_theme_lay = get_theme_mod( 'mining_industry_footer_template','mining_industry-footer-one');
    if($mining_industry_theme_lay == 'mining_industry-footer-one'){
		$mining_industry_custom_css .='.footerinner {';
			$mining_industry_custom_css .='';
		$mining_industry_custom_css .='}';

	}else if($mining_industry_theme_lay == 'mining_industry-footer-two'){
		$mining_industry_custom_css .='.footerinner {';
			$mining_industry_custom_css .='background: #E3F2FD !important;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.footerinner p,.footerinner span,.footerinner li a,.footerinner #wp-calendar caption,.footerinner #wp-calendar td,.footerinner #wp-calendar th, .footerinner, .footerinner h3, .footerinner a.rsswidget, .footerinner #wp-calendar a, .copyright a, .footerinner .custom_details, .footerinner ins span, .footerinner .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, .footerinner table, .footerinner th, .footerinner td, .footerinner caption, #sidebar caption,.footerinner nav.wp-calendar-nav a,.footerinner .search-form .search-field{';
			$mining_industry_custom_css .='color:#000 !important;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='#footer p{';
			$mining_industry_custom_css .='color:#000 !important;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.footerinner ul li::before{';
			$mining_industry_custom_css .='background:#000;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.footerinner table, .footerinner th, .footerinner td,.footerinner.search-form .search-field,.footerinner .tagcloud a{';
			$mining_industry_custom_css .='border: 1px solid #000;';
		$mining_industry_custom_css .='}';

	}else if($mining_industry_theme_lay == 'mining_industry-footer-three'){
		$mining_industry_custom_css .='.footerinner {';
			$mining_industry_custom_css .='background: #0A0A1F !important;;';
		$mining_industry_custom_css .='}';
	}
	else if($mining_industry_theme_lay == 'mining_industry-footer-four'){
		$mining_industry_custom_css .='.footerinner {';
			$mining_industry_custom_css .='background: #F5F5DC !important;;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.footerinner p,.footerinner span,.footerinner li a,.footerinner #wp-calendar caption,.footerinner #wp-calendar td,.footerinner #wp-calendar th, .footerinner, .footerinner h3, .footerinner a.rsswidget, .footerinner #wp-calendar a, .copyright a, .footerinner .custom_details, .footerinner ins span, .footerinner .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, .footerinner table, .footerinner th, .footerinner td, .footerinner caption, #sidebar caption,.footerinner nav.wp-calendar-nav a,.footerinner .search-form .search-field{';
			$mining_industry_custom_css .='color:#000 !important;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='#footer p{';
			$mining_industry_custom_css .='color:#000 !important;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.footerinner ul li::before{';
			$mining_industry_custom_css .='background:#000;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.footerinner table, .footerinner th, .footerinner td,.footerinner.search-form .search-field,.footerinner .tagcloud a{';
			$mining_industry_custom_css .='border: 1px solid #000;';
		$mining_industry_custom_css .='}';
	}
    else if($mining_industry_theme_lay == 'mining_industry-footer-five'){
	$mining_industry_custom_css .='.footerinner {';
		$mining_industry_custom_css .='background: #333333 !important;;';
	$mining_industry_custom_css .='}';
   }
	/*----------- Copyright css -----*/
	$mining_industry_copyright_color = get_theme_mod('mining_industry_copyright_color');
	$mining_industry_custom_css .='#footer .copyright p,#footer .copyright a{';
		$mining_industry_custom_css .='color: '.esc_attr($mining_industry_copyright_color).'!important;';
	$mining_industry_custom_css .='}';

	$mining_industry_copyright_top_padding = get_theme_mod('mining_industry_top_copyright_padding');
	$mining_industry_copyright_bottom_padding = get_theme_mod('mining_industry_bottom_copyright_padding');
	if($mining_industry_copyright_top_padding != '' || $mining_industry_copyright_bottom_padding != ''){
		$mining_industry_custom_css .='.inner{';
			$mining_industry_custom_css .='padding-top: '.esc_attr($mining_industry_copyright_top_padding).'px; padding-bottom: '.esc_attr($mining_industry_copyright_bottom_padding).'px; ';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_copyright_alignment = get_theme_mod('mining_industry_copyright_alignment', 'center');
	if($mining_industry_copyright_alignment == 'center' ){
		$mining_industry_custom_css .='#footer .copyright p{';
			$mining_industry_custom_css .='text-align: '. $mining_industry_copyright_alignment .';';
		$mining_industry_custom_css .='}';
	}elseif($mining_industry_copyright_alignment == 'left' ){
		$mining_industry_custom_css .='#footer .copyright p{';
			$mining_industry_custom_css .=' text-align: '. $mining_industry_copyright_alignment .';';
		$mining_industry_custom_css .='}';
	}elseif($mining_industry_copyright_alignment == 'right' ){
		$mining_industry_custom_css .='#footer .copyright p{';
			$mining_industry_custom_css .='text-align: '. $mining_industry_copyright_alignment .';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_copyright_font_size = get_theme_mod('mining_industry_copyright_font_size');
	$mining_industry_custom_css .='#footer .copyright p{';
		$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_copyright_font_size).'px;';
	$mining_industry_custom_css .='}';

	$mining_industry_back_to_top_color = get_theme_mod('mining_industry_back_to_top_color');
	$mining_industry_custom_css .='.back-to-top{';
		$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_back_to_top_color).'!important;';
	$mining_industry_custom_css .='}';
		$mining_industry_back_to_top_color = get_theme_mod('mining_industry_back_to_top_color');
	$mining_industry_custom_css .='.back-to-top::before{';
		$mining_industry_custom_css .='border-bottom-color: '.esc_attr($mining_industry_back_to_top_color).'!important;';
	$mining_industry_custom_css .='}';

	$mining_industry_back_to_top_text_color = get_theme_mod('mining_industry_back_to_top_text_color');
	$mining_industry_custom_css .='.back-to-top{';
		$mining_industry_custom_css .='color: '.esc_attr($mining_industry_back_to_top_text_color).'!important;';
	$mining_industry_custom_css .='}';

	// back to top icon hover color
	$mining_industry_scroll_icon_hover_color = get_theme_mod('mining_industry_scroll_icon_hover_color');
	$mining_industry_custom_css .='.back-to-top:hover{';
		$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_scroll_icon_hover_color). ' !important;';
	$mining_industry_custom_css .='}';
		$mining_industry_scroll_icon_hover_color = get_theme_mod('mining_industry_scroll_icon_hover_color');
	$mining_industry_custom_css .='.back-to-top:hover::before{';
		$mining_industry_custom_css .='border-bottom-color: '.esc_attr($mining_industry_scroll_icon_hover_color).'!important;';
	$mining_industry_custom_css .='}';

	/*------ Topbar padding ------*/
	$mining_industry_top_topbar_padding = get_theme_mod('mining_industry_top_topbar_padding');
	$mining_industry_bottom_topbar_padding = get_theme_mod('mining_industry_bottom_topbar_padding');
	if($mining_industry_top_topbar_padding != false || $mining_industry_bottom_topbar_padding != false){
		$mining_industry_custom_css .='.top-bar, .page-template-custom-front-page .top-bar{';
			$mining_industry_custom_css .='padding-top: '.esc_attr($mining_industry_top_topbar_padding).'px !important; padding-bottom: '.esc_attr($mining_industry_bottom_topbar_padding).'px !important; ';
		$mining_industry_custom_css .='}';
	}

	/*------ Woocommerce ----*/
	$mining_industry_product_border = get_theme_mod('mining_industry_product_border',true);

	if($mining_industry_product_border == false){
		$mining_industry_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$mining_industry_custom_css .='border: 0;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_product_top = get_theme_mod('mining_industry_product_top_padding',10);
	$mining_industry_product_bottom = get_theme_mod('mining_industry_product_bottom_padding',10);
	$mining_industry_product_left = get_theme_mod('mining_industry_product_left_padding',10);
	$mining_industry_product_right = get_theme_mod('mining_industry_product_right_padding',10);
	if($mining_industry_product_top != false || $mining_industry_product_bottom != false || $mining_industry_product_left != false || $mining_industry_product_right != false){
		$mining_industry_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$mining_industry_custom_css .='padding-top: '.esc_attr($mining_industry_product_top).'px; padding-bottom: '.esc_attr($mining_industry_product_bottom).'px; padding-left: '.esc_attr($mining_industry_product_left).'px; padding-right: '.esc_attr($mining_industry_product_right).'px;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_product_border_radius = get_theme_mod('mining_industry_product_border_radius');
	if($mining_industry_product_border_radius != false){
		$mining_industry_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$mining_industry_custom_css .='border-radius: '.esc_attr($mining_industry_product_border_radius).'px;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_product_box_shadow = get_theme_mod('mining_industry_product_box_shadow','0');
	$mining_industry_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$mining_industry_custom_css .='box-shadow: '.esc_attr($mining_industry_product_box_shadow).'px '.esc_attr($mining_industry_product_box_shadow).'px '.esc_attr($mining_industry_product_box_shadow).'px #eee;';
	$mining_industry_custom_css .='}';		

	/*----- WooCommerce button css --------*/
	$mining_industry_product_button_top = get_theme_mod('mining_industry_product_button_top_padding',10);
	$mining_industry_product_button_bottom = get_theme_mod('mining_industry_product_button_bottom_padding',10);
	$mining_industry_product_button_left = get_theme_mod('mining_industry_product_button_left_padding',12);
	$mining_industry_product_button_right = get_theme_mod('mining_industry_product_button_right_padding',12);
	if($mining_industry_product_button_top != false || $mining_industry_product_button_bottom != false || $mining_industry_product_button_left != false || $mining_industry_product_button_right != false){
		$mining_industry_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$mining_industry_custom_css .='padding-top: '.esc_attr($mining_industry_product_button_top).'px; padding-bottom: '.esc_attr($mining_industry_product_button_bottom).'px; padding-left: '.esc_attr($mining_industry_product_button_left).'px; padding-right: '.esc_attr($mining_industry_product_button_right).'px;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_product_button_border_radius = get_theme_mod('mining_industry_product_button_border_radius');
	if($mining_industry_product_button_border_radius != false){
		$mining_industry_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
			$mining_industry_custom_css .='border-radius: '.esc_attr($mining_industry_product_button_border_radius).'px !important;';
		$mining_industry_custom_css .='}';
	}

	/*----- WooCommerce product sale css --------*/
	$mining_industry_product_sale_top = get_theme_mod('mining_industry_product_sale_top_padding');
	$mining_industry_product_sale_bottom = get_theme_mod('mining_industry_product_sale_bottom_padding');
	$mining_industry_product_sale_left = get_theme_mod('mining_industry_product_sale_left_padding');
	$mining_industry_product_sale_right = get_theme_mod('mining_industry_product_sale_right_padding');
	if($mining_industry_product_sale_top != false || $mining_industry_product_sale_bottom != false || $mining_industry_product_sale_left != false || $mining_industry_product_sale_right != false){
		$mining_industry_custom_css .='.woocommerce span.onsale {';
			$mining_industry_custom_css .='padding-top: '.esc_attr($mining_industry_product_sale_top).'px; padding-bottom: '.esc_attr($mining_industry_product_sale_bottom).'px; padding-left: '.esc_attr($mining_industry_product_sale_left).'px; padding-right: '.esc_attr($mining_industry_product_sale_right).'px;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_product_sale_border_radius = get_theme_mod('mining_industry_product_sale_border_radius',0);
	if($mining_industry_product_sale_border_radius != false){
		$mining_industry_custom_css .='.woocommerce span.onsale {';
			$mining_industry_custom_css .='border-radius: '.esc_attr($mining_industry_product_sale_border_radius).'px;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_menu_case = get_theme_mod('mining_industry_product_sale_position', 'Right');
	if($mining_industry_menu_case == 'Right' ){
		$mining_industry_custom_css .='.woocommerce ul.products li.product .onsale{';
			$mining_industry_custom_css .=' left:auto; right:0;';
		$mining_industry_custom_css .='}';
	}elseif($mining_industry_menu_case == 'Left' ){
		$mining_industry_custom_css .='.woocommerce ul.products li.product .onsale{';
			$mining_industry_custom_css .=' left:-10px; right:auto;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_product_sale_font_size = get_theme_mod('mining_industry_product_sale_font_size',13);
	$mining_industry_custom_css .='.woocommerce span.onsale {';
		$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_product_sale_font_size).'px;';
	$mining_industry_custom_css .='}';


	/*---- Comment form ----*/
	$mining_industry_comment_width = get_theme_mod('mining_industry_comment_width', '100');
	$mining_industry_custom_css .='#comments textarea{';
		$mining_industry_custom_css .=' width:'.esc_attr($mining_industry_comment_width).'%;';
	$mining_industry_custom_css .='}';

	$mining_industry_comment_submit_text = get_theme_mod('mining_industry_comment_submit_text', 'Post Comment');
	if($mining_industry_comment_submit_text == ''){
		$mining_industry_custom_css .='#comments p.form-submit {';
			$mining_industry_custom_css .='display: none;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_comment_title = get_theme_mod('mining_industry_comment_title', 'Leave a Reply');
	if($mining_industry_comment_title == ''){
		$mining_industry_custom_css .='#comments h2#reply-title {';
			$mining_industry_custom_css .='display: none;';
		$mining_industry_custom_css .='}';
	}

	/*------ Footer background css -------*/
	$mining_industry_footer_bg_color = get_theme_mod('mining_industry_footer_bg_color');
	if($mining_industry_footer_bg_color != false){
		$mining_industry_custom_css .='.footerinner{';
			$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_footer_bg_color).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_footer_bg_image = get_theme_mod('mining_industry_footer_bg_image');
	if($mining_industry_footer_bg_image != false){
		$mining_industry_custom_css .='.footerinner{';
			$mining_industry_custom_css .='background: url('.esc_attr($mining_industry_footer_bg_image).');  background-size: cover;';
		$mining_industry_custom_css .='}';

	}

	//footer icon color
	$mining_industry_footer_icon_color = get_theme_mod('mining_industry_footer_icon_color', '#fff');
	$mining_industry_custom_css .='#footer .copyright a i{';
		$mining_industry_custom_css .='color: '.esc_attr($mining_industry_footer_icon_color).'!important;';
	$mining_industry_custom_css .='}';

	/*-------- Footer Icon Alignment ------*/
	$mining_industry_footer_icon_alignment = get_theme_mod('mining_industry_footer_icon_alignment', 'Center');
	if($mining_industry_footer_icon_alignment == 'Center' ){
		$mining_industry_custom_css .='#footer .copyright{';
			$mining_industry_custom_css .='text-align: '. $mining_industry_footer_icon_alignment .';';
		$mining_industry_custom_css .='}';
	}elseif($mining_industry_footer_icon_alignment == 'Left' ){
		$mining_industry_custom_css .='#footer .copyright{';
			$mining_industry_custom_css .=' text-align: '. $mining_industry_footer_icon_alignment .';';
		$mining_industry_custom_css .='}';
	}elseif($mining_industry_footer_icon_alignment == 'Right' ){
		$mining_industry_custom_css .='#footer .copyright{';
			$mining_industry_custom_css .='text-align: '. $mining_industry_footer_icon_alignment .';';
		$mining_industry_custom_css .='}';
	}

	//Footer Social Icon Font size
	$mining_industry_footer_icon_font_size = get_theme_mod('mining_industry_footer_icon_font_size');
	$mining_industry_custom_css .='#footer .copyright a i{';
	$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_footer_icon_font_size).'px;';
	$mining_industry_custom_css .='}';


    // footer image position
	$mining_industry_footer_img_position = get_theme_mod('mining_industry_footer_img_position','center center');
	if($mining_industry_footer_img_position != false){
		$mining_industry_custom_css .='.footerinner{';
			$mining_industry_custom_css .='background-position: '.esc_attr($mining_industry_footer_img_position).'!important;';
		$mining_industry_custom_css .='}';
	}	

	// Footer Attatchment
	$mining_industry_theme_lay = get_theme_mod( 'mining_industry_footer_attatchment','scroll');
	if($mining_industry_theme_lay == 'fixed'){
		$mining_industry_custom_css .='.footerinner{';
			$mining_industry_custom_css .='background-attachment: fixed;';
		$mining_industry_custom_css .='}';
	}elseif ($mining_industry_theme_lay == 'scroll'){
		$mining_industry_custom_css .='.footerinner{';
			$mining_industry_custom_css .='background-attachment: scroll;';
		$mining_industry_custom_css .='}';
	}		

	/*---------------------------Footer top bottom padding -------------------*/

	$mining_industry_footer_padding = get_theme_mod('mining_industry_footer_padding');
	if($mining_industry_footer_padding != false){
		$mining_industry_custom_css .='#footer .footerinner{';
			$mining_industry_custom_css .='padding: '.esc_attr($mining_industry_footer_padding).' 0 !important;';
		$mining_industry_custom_css .='}';
	}


	/*----- Featured image css -----*/
	$mining_industry_feature_image_border_radius = get_theme_mod('mining_industry_feature_image_border_radius');
	if($mining_industry_feature_image_border_radius != false){
		$mining_industry_custom_css .='#blog_post .blog-sec img{';
			$mining_industry_custom_css .='border-radius: '.esc_attr($mining_industry_feature_image_border_radius).'px;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_feature_image_shadow = get_theme_mod('mining_industry_feature_image_shadow');
	if($mining_industry_feature_image_shadow != false){
		$mining_industry_custom_css .='#blog_post .blog-sec img{';
			$mining_industry_custom_css .='box-shadow: '.esc_attr($mining_industry_feature_image_shadow).'px '.esc_attr($mining_industry_feature_image_shadow).'px '.esc_attr($mining_industry_feature_image_shadow).'px #aaa;';
		$mining_industry_custom_css .='}';
	}

	// blog post Pagination Alignment
	$mining_industry_post_pagination_alignment = get_theme_mod( 'mining_industry_post_pagination_option','Right');
	if($mining_industry_post_pagination_alignment == 'Left'){
		$mining_industry_custom_css .='.navigation nav.pagination{';
			$mining_industry_custom_css .='justify-content: left;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_post_pagination_alignment == 'Center'){
		$mining_industry_custom_css .='.navigation nav.pagination{';
			$mining_industry_custom_css .='justify-content: center;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_post_pagination_alignment == 'Right'){
		$mining_industry_custom_css .='.navigation nav.pagination{';
			$mining_industry_custom_css .='justify-content: right;';
		$mining_industry_custom_css .='}';
	}

	//Blog Post Initial Cap
	$mining_industry_initial_caps_enable = get_theme_mod('mining_industry_initial_caps_enable', 'false');
	if($mining_industry_initial_caps_enable == 'true' ){
		$mining_industry_custom_css .='.blogger .entry-content p:nth-of-type(1)::first-letter,.blogger p:nth-of-type(1)::first-letter{';
			$mining_industry_custom_css .=' font-size: 60px!important; font-weight: 800!important;';
		$mining_industry_custom_css .=' margin-right: 4px;text-transform: uppercase;';
			$mining_industry_custom_css .=' font-family: "Vollkorn", serif!important;';
		$mining_industry_custom_css .='}';
	}elseif($mining_industry_initial_caps_enable == 'false' ){
		$mining_industry_custom_css .='.blogger .entry-content p:nth-of-type(1)::first-letter,.blogger p:nth-of-type(1)::first-letter{';
			$mining_industry_custom_css .='display: none!important;';
		$mining_industry_custom_css .='}';
	}

	/*----- Related posts image css-----*/
	 $mining_industry_related_posts_image_shadow = get_theme_mod('mining_industry_related_posts_image_shadow');
	 if($mining_industry_related_posts_image_shadow != false){
		 $mining_industry_custom_css .='.related-posts .blog-sec img{';
			 $mining_industry_custom_css .='box-shadow: '.esc_attr($mining_industry_related_posts_image_shadow).'px '.esc_attr($mining_industry_related_posts_image_shadow).'px '.esc_attr($mining_industry_related_posts_image_shadow).'px #aaa;';
		 $mining_industry_custom_css .='}';
	}
	 
	 $mining_industry_related_image_border_radius = get_theme_mod('mining_industry_related_image_border_radius');
	 if($mining_industry_related_image_border_radius != false){
		 $mining_industry_custom_css .='.related-posts .blog-sec img{';
			 $mining_industry_custom_css .='border-radius: '.esc_attr($mining_industry_related_image_border_radius).'px;';
		 $mining_industry_custom_css .='}';
	}

	/*----- Related Post display type css ------*/
	$mining_industry_related_post_display_type = get_theme_mod('mining_industry_related_post_display_type', 'blocks');
	if($mining_industry_related_post_display_type == 'without blocks' ){
		$mining_industry_custom_css .='.related-posts .blog-sec{';
			$mining_industry_custom_css .='border: 0!important;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_related_post_metabox_seperator = get_theme_mod('mining_industry_related_post_metabox_seperator', '|');
	if($mining_industry_related_post_metabox_seperator != '' ){
		$mining_industry_custom_css .='.related-posts .blog-sec .post-info span:after{';
			$mining_industry_custom_css .=' content: "'.esc_attr($mining_industry_related_post_metabox_seperator).'"; padding-left:10px;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.related-posts .blog-sec .post-info span:last-child:after{';
			$mining_industry_custom_css .=' content: none;';
		$mining_industry_custom_css .='}';
	}	

	/*------ Sticky header padding ------------*/
	$mining_industry_top_sticky_header_padding = get_theme_mod('mining_industry_top_sticky_header_padding');
	$mining_industry_bottom_sticky_header_padding = get_theme_mod('mining_industry_bottom_sticky_header_padding');
	$mining_industry_custom_css .=' .fixed-header{';
		$mining_industry_custom_css .=' padding-top: '.esc_attr($mining_industry_top_sticky_header_padding).'px; padding-bottom: '.esc_attr($mining_industry_bottom_sticky_header_padding).'px';
	$mining_industry_custom_css .='}';

		// featured image dimention
	$mining_industry_blog_image_dimension = get_theme_mod('mining_industry_blog_image_dimension', 'default');
	$mining_industry_feature_image_custom_width = get_theme_mod('mining_industry_feature_image_custom_width',250);
	$mining_industry_feature_image_custom_height = get_theme_mod('mining_industry_feature_image_custom_height',250);
	if($mining_industry_blog_image_dimension == 'custom'){
		$mining_industry_custom_css .='#blog_post .blog-sec img{';
			$mining_industry_custom_css .='width: '.esc_attr($mining_industry_feature_image_custom_width).'px; height: '.esc_attr($mining_industry_feature_image_custom_height).'px;';
		$mining_industry_custom_css .='}';
	}

	/*------ Related products ---------*/
	$mining_industry_related_products = get_theme_mod('mining_industry_single_related_products',true);
	if($mining_industry_related_products == false){
		$mining_industry_custom_css .=' .related.products{';
			$mining_industry_custom_css .='display: none;';
		$mining_industry_custom_css .='}';
	}

	/*-------- Menu Font Size --------*/
	$mining_industry_menu_font_size = get_theme_mod('mining_industry_menu_font_size',13);
	if($mining_industry_menu_font_size != false){
		$mining_industry_custom_css .='.nav-menu li a{';
			$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_menu_font_size).'px !important ;';
		$mining_industry_custom_css .='}';
	}

	// menu padding
	$mining_industry_menu_padding = get_theme_mod('mining_industry_menu_padding',15);
	$mining_industry_custom_css .='.nav-menu ul li a, .sf-arrows ul .sf-with-ul, .sf-arrows .sf-with-ul{';
		$mining_industry_custom_css .='padding: '.esc_attr($mining_industry_menu_padding).'px;';
	$mining_industry_custom_css .='}';

	$mining_industry_menu_font_weight = get_theme_mod('mining_industry_menu_font_weight');
	$mining_industry_custom_css .='.nav-menu ul li a{';
		$mining_industry_custom_css .='font-weight: '.esc_attr($mining_industry_menu_font_weight).';';
	$mining_industry_custom_css .='}';

	$mining_industry_menus_item = get_theme_mod( 'mining_industry_menus_item_style','None');
    if($mining_industry_menus_item == 'None'){
		$mining_industry_custom_css .='.nav-menu ul li a{';
			$mining_industry_custom_css .='';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_menus_item == 'Zoom In'){
		$mining_industry_custom_css .='.nav-menu ul li a:hover{';
			$mining_industry_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$mining_industry_custom_css .='}';
	}else if ($mining_industry_menus_item == 'Underline Expand') { 
		$mining_industry_custom_css .= '.nav-menu ul li a { position: relative; text-decoration: none; }';
		$mining_industry_custom_css .= '.nav-menu ul li a::before {';
			$mining_industry_custom_css .= 'content: ""; position: absolute; left: 50%; bottom: calc(' . esc_attr($mining_industry_menu_padding) . 'px / 2); width: 0; height: 3px; background-color: currentColor; opacity: 0;';
			$mining_industry_custom_css .= 'transition: width 0.5s ease, left 0.5s ease, opacity 0.3s ease;';
		$mining_industry_custom_css .= '}';
		$mining_industry_custom_css .= '.nav-menu ul li a:hover::before {';
			$mining_industry_custom_css .= 'width: 100%; left: 0; opacity: 1;';
		$mining_industry_custom_css .= '}';
	}	

	// menu color
	$mining_industry_menu_color = get_theme_mod('mining_industry_menu_color');

	$mining_industry_custom_css .='.nav-menu a,.nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a{';
			$mining_industry_custom_css .='color: '.esc_attr($mining_industry_menu_color).' !important;';
	$mining_industry_custom_css .='}';

	// menu hover color
	$mining_industry_menu_hover_color = get_theme_mod('mining_industry_menu_hover_color');
	$mining_industry_custom_css .='.nav-menu a:hover, .nav-menu ul li a:hover{';
			$mining_industry_custom_css .='color: '.esc_attr($mining_industry_menu_hover_color).' !important;';
	$mining_industry_custom_css .='}';

	// Submenu color
	$mining_industry_submenu_menu_color = get_theme_mod('mining_industry_submenu_menu_color');
	$mining_industry_custom_css .='.nav-menu ul.sub-menu a, .nav-menu ul.sub-menu li a,.nav-menu ul.children a, .nav-menu ul.children li a{';
			$mining_industry_custom_css .='color: '.esc_attr($mining_industry_submenu_menu_color).' !important;';
	$mining_industry_custom_css .='}';

	// submenu hover color
	$mining_industry_submenu_hover_color = get_theme_mod('mining_industry_submenu_hover_color');
	$mining_industry_custom_css .='.nav-menu ul.sub-menu a:hover, .nav-menu ul.sub-menu li a:hover.nav-menu ul.children a:hover, .nav-menu ul.children li a:hover{';
			$mining_industry_custom_css .='color: '.esc_attr($mining_industry_submenu_hover_color).' !important;';
	$mining_industry_custom_css .='}';

	// Breadcrumb Alignmennt
	$mining_industry_single_page_breadcrumb_alignment = get_theme_mod('mining_industry_single_page_breadcrumb_alignment', 'Left');
	if($mining_industry_single_page_breadcrumb_alignment == 'Center' ){
		$mining_industry_custom_css .='.bradcrumbs{';
			$mining_industry_custom_css .='text-align: '. $mining_industry_single_page_breadcrumb_alignment .';';
		$mining_industry_custom_css .='}';
	}elseif($mining_industry_single_page_breadcrumb_alignment == 'Left' ){
		$mining_industry_custom_css .='.bradcrumbs{';
			$mining_industry_custom_css .=' text-align: '. $mining_industry_single_page_breadcrumb_alignment .';';
		$mining_industry_custom_css .='}';
	}elseif($mining_industry_single_page_breadcrumb_alignment == 'Right' ){
		$mining_industry_custom_css .='.bradcrumbs{';
			$mining_industry_custom_css .='text-align: '. $mining_industry_single_page_breadcrumb_alignment .';';
		$mining_industry_custom_css .='}';
	}

	// Breadcrumb color option
	$mining_industry_breadcrumb_color = get_theme_mod('mining_industry_breadcrumb_color');
	$mining_industry_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$mining_industry_custom_css .='color: '.esc_attr($mining_industry_breadcrumb_color).'!important;';
	$mining_industry_custom_css .='}';

	// Breadcrumb bg color option
	$mining_industry_breadcrumb_background_color = get_theme_mod('mining_industry_breadcrumb_background_color');
	$mining_industry_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_breadcrumb_background_color).'!important;';
	$mining_industry_custom_css .='}';

	// Breadcrumb hover color option
	$mining_industry_breadcrumb_hover_color = get_theme_mod('mining_industry_breadcrumb_hover_color');
	$mining_industry_custom_css .='.bradcrumbs a:hover{';
		$mining_industry_custom_css .='color: '.esc_attr($mining_industry_breadcrumb_hover_color).'!important;';
	$mining_industry_custom_css .='}';

	// Breadcrumb hover bg color option
	$mining_industry_breadcrumb_hover_bg_color = get_theme_mod('mining_industry_breadcrumb_hover_bg_color');
	$mining_industry_custom_css .='.bradcrumbs a:hover{';
		$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_breadcrumb_hover_bg_color).'!important;';
	$mining_industry_custom_css .='}';

	$mining_industry_breadcrumb_border_color = get_theme_mod('mining_industry_breadcrumb_border_color');
	$mining_industry_custom_css .='.bradcrumbs a{';
		$mining_industry_custom_css .='border-color: '.esc_attr($mining_industry_breadcrumb_border_color).'!important;';
	$mining_industry_custom_css .='}';

	// Featured image header
	$header_image_url = mining_industry_banner_image( $image_url = '' );
	$mining_industry_custom_css .='#page-site-header{';
		$mining_industry_custom_css .='background-image: url('. esc_url( $header_image_url ).'); background-size: cover;';
	$mining_industry_custom_css .='}';

	$mining_industry_post_featured_image = get_theme_mod('mining_industry_post_featured_image', 'in-content');
	if($mining_industry_post_featured_image == 'banner' ){
		$mining_industry_custom_css .='.single #wrapper h1, .page #wrapper h1, .page #wrapper img{';
			$mining_industry_custom_css .=' display: none;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.page-template-custom-front-page #page-site-header{';
			$mining_industry_custom_css .=' display: none;';
		$mining_industry_custom_css .='}';
	}

	// Woocommerce Shop page pagination
	$mining_industry_shop_page_navigation = get_theme_mod('mining_industry_shop_page_navigation',true);
	if ($mining_industry_shop_page_navigation == false) {
		$mining_industry_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$mining_industry_custom_css .='display: none;';
		$mining_industry_custom_css .='}';
	}

	/*-------- Blog Post Alignment ------*/
	$mining_industry_post_alignment = get_theme_mod('mining_industry_blog_post_alignment', 'center');
	if($mining_industry_post_alignment == 'left' ){
		$mining_industry_custom_css .='.blog-sec, .blog-sec h2, .blog-sec .post-info, .blog-sec .blogbtn{';
			$mining_industry_custom_css .=' text-align: '. $mining_industry_post_alignment .'!important;';
		$mining_industry_custom_css .='}';
	}elseif($mining_industry_post_alignment == 'right' ){
		$mining_industry_custom_css .='.blog-sec, .blog-sec h2, .blog-sec .post-info, .blog-sec .blogbtn{';
			$mining_industry_custom_css .='text-align: '. $mining_industry_post_alignment .'!important;';
		$mining_industry_custom_css .='}';
	}	

	/*----- Blog Post display type css ------*/
	$mining_industry_blog_post_display_type = get_theme_mod('mining_industry_blog_post_display_type', 'blocks');
	if($mining_industry_blog_post_display_type == 'without blocks' ){
		$mining_industry_custom_css .='.blog .blog-sec, .blog #sidebar .widget{';
			$mining_industry_custom_css .='border: 0;';
		$mining_industry_custom_css .='}';
	}

	// Metabox Seperator Blog Post
	$mining_industry_metabox_seperator = get_theme_mod('mining_industry_metabox_seperator', '|');
	if($mining_industry_metabox_seperator != '' ){
		$mining_industry_custom_css .='#blog_post .blog-sec  .post-info span:after{';
			$mining_industry_custom_css .=' content: "'.esc_attr($mining_industry_metabox_seperator).'"; padding-left:10px;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='#blog_post .blog-sec  .post-info span:last-child:after{';
			$mining_industry_custom_css .=' content: none;';
		$mining_industry_custom_css .='}';
	}	

	// Metabox Seperator Single post
	$mining_industry_single_post_metabox_seperator = get_theme_mod('mining_industry_single_post_metabox_seperator', '|');
	if($mining_industry_single_post_metabox_seperator != '' ){
		$mining_industry_custom_css .='.post-info span:after{';
			$mining_industry_custom_css .=' content: "'.esc_attr($mining_industry_single_post_metabox_seperator).'"; padding-left:10px;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.post-info span:last-child:after{';
			$mining_industry_custom_css .=' content: none;';
		$mining_industry_custom_css .='}';
	}	

	// Metabox Seperator Grid post
	$mining_industry_grid_post_metabox_seperator = get_theme_mod('mining_industry_grid_post_metabox_seperator','|');
	if($mining_industry_grid_post_metabox_seperator != '' ){
		$mining_industry_custom_css .='.grid-post-info span:after{';
			$mining_industry_custom_css .=' content: "'.esc_attr($mining_industry_grid_post_metabox_seperator).'"; padding-left:10px;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.grid-post-info span:last-child:after{';
			$mining_industry_custom_css .=' content: none;';
		$mining_industry_custom_css .='}';
	}

	/*----- grid Post display type css ------*/
	$mining_industry_grid_post_display_type = get_theme_mod('mining_industry_grid_post_display_type', 'blocks');
	if($mining_industry_grid_post_display_type == 'without blocks' ){
		$mining_industry_custom_css .='.grid-sec{';
			$mining_industry_custom_css .='border: 0;';
		$mining_industry_custom_css .='}';
	}
	$mining_industry_grid_post_image_border_radius = get_theme_mod('mining_industry_grid_post_image_border_radius');
	 if($mining_industry_grid_post_image_border_radius != false){
		 $mining_industry_custom_css .='.grid-sec img{';
			 $mining_industry_custom_css .='border-radius: '.esc_attr($mining_industry_grid_post_image_border_radius).'px;';
		 $mining_industry_custom_css .='}';
	 }
 
	$mining_industry_grid_posts_image_shadow = get_theme_mod('mining_industry_grid_posts_image_shadow');
	if($mining_industry_grid_posts_image_shadow != false){
		$mining_industry_custom_css .='.grid-sec img{';
			$mining_industry_custom_css .='box-shadow: '.esc_attr($mining_industry_grid_posts_image_shadow).'px '.esc_attr($mining_industry_grid_posts_image_shadow).'px '.esc_attr($mining_industry_grid_posts_image_shadow).'px #aaa;';
		$mining_industry_custom_css .='}';
	}

	/*-------- grid post Alignment ------*/
	$mining_industry_grid_alignment = get_theme_mod('mining_industry_grid_alignment', 'center');
	if($mining_industry_grid_alignment == 'left' ){
		$mining_industry_custom_css .='.grid-sec, .grid-sec h2, .grid-post-info, .grid-sec .entry-content, .grid-sec .blogbtn{';
			$mining_industry_custom_css .=' text-align: '. $mining_industry_grid_alignment .'!important;';
		$mining_industry_custom_css .='}';
	}elseif($mining_industry_grid_alignment == 'right' ){
		$mining_industry_custom_css .='.grid-sec, .grid-sec h2, .grid-post-info, .grid-sec .entry-content, .grid-sec .blogbtn{';
			$mining_industry_custom_css .='text-align: '. $mining_industry_grid_alignment .'!important;';
		$mining_industry_custom_css .='}';
	}	


	if (get_theme_mod('mining_industry_hide_topbar_responsive',true) == false) {
		$mining_industry_custom_css .='@media screen and (max-width: 575px){
			.top-bar{';
			$mining_industry_custom_css .=' display: none;';
		$mining_industry_custom_css .='} }';
	} else if(get_theme_mod('mining_industry_hide_topbar_responsive',true) == true){
		$mining_industry_custom_css .='@media screen and (max-width: 575px){
			.top-bar{';
			$mining_industry_custom_css .=' display: block;';
		$mining_industry_custom_css .='} }';
	}

	// Site title Font Size
	$mining_industry_site_title_font_size = get_theme_mod('mining_industry_site_title_font_size', '25');
	$mining_industry_custom_css .='.logo h1, .logo p.site-title{';
		$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_site_title_font_size).'px;';
	$mining_industry_custom_css .='}';

	// Site tagline Font Size
	$mining_industry_site_tagline_font_size = get_theme_mod('mining_industry_site_tagline_font_size', '14');
	$mining_industry_custom_css .='.logo p.site-description{';
		$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_site_tagline_font_size).'px;';
	$mining_industry_custom_css .='}';

	if (get_theme_mod('mining_industry_sticky_header_responsive') == false) {
		$mining_industry_custom_css .='@media screen and (max-width: 575px){
			.toggle-menu.sticky{';
			$mining_industry_custom_css .=' position: static;';
		$mining_industry_custom_css .='} }';
	}
	
	// responsive settings

	$mining_industry_toggle_button_bg_color_settings = get_theme_mod('mining_industry_toggle_button_bg_color_settings');
	$mining_industry_custom_css .='.toggle-menu{';
	$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_toggle_button_bg_color_settings).';';
	$mining_industry_custom_css .='} ';

	if (get_theme_mod('mining_industry_preloader_responsive',false) == true && get_theme_mod('mining_industry_preloader',false) == false) {
		$mining_industry_custom_css .='@media screen and (min-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$mining_industry_custom_css .=' visibility: hidden;';
		$mining_industry_custom_css .='} }';
	}
	if (get_theme_mod('mining_industry_preloader_responsive',false) == false) {
		$mining_industry_custom_css .='@media screen and (max-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$mining_industry_custom_css .=' visibility: hidden;';
		$mining_industry_custom_css .='} }';
	}

	// responsive slider
	if (get_theme_mod('mining_industry_banner_responsive',true) == true && get_theme_mod('mining_industry_show_banner',true) == false) {
		$mining_industry_custom_css .='@media screen and (min-width: 575px){
			#banner{';
			$mining_industry_custom_css .=' display: none;';
		$mining_industry_custom_css .='} }';
	}
	if (get_theme_mod('mining_industry_banner_responsive',true) == false) {
		$mining_industry_custom_css .='@media screen and (max-width: 575px){
			#banner{';
			$mining_industry_custom_css .=' display: none;';
		$mining_industry_custom_css .='} }';
	}

	// scroll to top
	$mining_industry_scroll = get_theme_mod( 'mining_industry_backtotop_responsive',true);
	if (get_theme_mod('mining_industry_backtotop_responsive',true) == true && get_theme_mod('mining_industry_hide_scroll',true) == false) {
    	$mining_industry_custom_css .='.show-back-to-top{';
			$mining_industry_custom_css .='visibility: hidden !important;';
		$mining_industry_custom_css .='} ';
	}
    if($mining_industry_scroll == true){
    	$mining_industry_custom_css .='@media screen and (max-width:575px) {';
		$mining_industry_custom_css .='.show-back-to-top{';
			$mining_industry_custom_css .='visibility: visible !important;';
		$mining_industry_custom_css .='} }';
	}else if($mining_industry_scroll == false){
		$mining_industry_custom_css .='@media screen and (max-width:575px) {';
		$mining_industry_custom_css .='.show-back-to-top{';
			$mining_industry_custom_css .='visibility: hidden !important;';
		$mining_industry_custom_css .='} }';
	}

	$mining_industry_resp_sidebar = get_theme_mod( 'mining_industry_sidebar_hide_show',true);
    if($mining_industry_resp_sidebar == true){
    	$mining_industry_custom_css .='@media screen and (max-width:575px) {';
		$mining_industry_custom_css .='#sidebar{';
			$mining_industry_custom_css .='display:block;';
		$mining_industry_custom_css .='} }';
	}else if($mining_industry_resp_sidebar == false){
		$mining_industry_custom_css .='@media screen and (max-width:575px) {';
		$mining_industry_custom_css .='#sidebar{';
			$mining_industry_custom_css .='display:none;';
		$mining_industry_custom_css .='} }';
	}

	/*------ Footer background css -------*/
	$mining_industry_copyright_bg_color = get_theme_mod('mining_industry_copyright_bg_color');
	if($mining_industry_copyright_bg_color != false){
		$mining_industry_custom_css .='.inner{';
			$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_copyright_bg_color).';';
		$mining_industry_custom_css .='}';
	}

	// Banner Social Icons Font Size
	$mining_industry_banner_social_icons_font_size = get_theme_mod('mining_industry_banner_social_icons_font_size', '16');
	$mining_industry_custom_css .='.social-icons a{';
		$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_banner_social_icons_font_size).'px;';
	$mining_industry_custom_css .='}';

	// Header Icons Font Size
	$mining_industry_header_icons_font_size = get_theme_mod('mining_industry_header_icons_font_size', '16');
	$mining_industry_custom_css .='.contact-icons a{';
		$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_header_icons_font_size).'px;';
	$mining_industry_custom_css .='}';
    
	//Header icon color
	$mining_industry_header_icon_color = get_theme_mod('mining_industry_header_icon_color', '');
	$mining_industry_custom_css .='.contact-icons a i{';
		$mining_industry_custom_css .='color: '.esc_attr($mining_industry_header_icon_color).'!important;';
	$mining_industry_custom_css .='}';

	/*------Slider css -------*/
	$mining_industry_show_banner = get_theme_mod('mining_industry_show_banner',false);
	if($mining_industry_show_banner == false){
		$mining_industry_custom_css .='.page-template-custom-front-page #header {';
			$mining_industry_custom_css .='position: static; background:#000;';
		$mining_industry_custom_css .='}';
	}

		// Slider Button color
	$mining_industry_slider_btn_color = get_theme_mod('mining_industry_slider_btn_color','#fff');
	$mining_industry_custom_css .='.read-more a,.porfolio a{';
			$mining_industry_custom_css .='color: '.esc_attr($mining_industry_slider_btn_color).' !important;';
	$mining_industry_custom_css .='}';

	// Slider button bg color
	$mining_industry_slider_btn_bg_color = get_theme_mod('mining_industry_slider_btn_bg_color');
	$mining_industry_custom_css .='.read-more a,.porfolio a{';
			$mining_industry_custom_css .='background: '.esc_attr($mining_industry_slider_btn_bg_color).' !important;';
	$mining_industry_custom_css .='}';

	// Slider button lable hover color
	$mining_industry_slider_btn_lable_hover_color = get_theme_mod('mining_industry_slider_btn_lable_hover_color','#fff');
	$mining_industry_custom_css .='.read-more a:hover,.porfolio a:hover{';
			$mining_industry_custom_css .='color: '.esc_attr($mining_industry_slider_btn_lable_hover_color).' !important;';
	$mining_industry_custom_css .='}';

	// Slider button bg hover color
	$mining_industry_slider_btn_bg_hover_color = get_theme_mod('mining_industry_slider_btn_bg_hover_color','var(--primary-color)');
	$mining_industry_custom_css .='.read-more a:hover,.porfolio a:hover{';
			$mining_industry_custom_css .='background: '.esc_attr($mining_industry_slider_btn_bg_hover_color).' !important;';
	$mining_industry_custom_css .='}';

	// menu padding
	$mining_industry_menu_case = get_theme_mod('mining_industry_menu_case', 'Capitalize');
	if($mining_industry_menu_case == 'uppercase' ){
		$mining_industry_custom_css .='.nav-menu ul li a{';
			$mining_industry_custom_css .=' text-transform: uppercase;';
		$mining_industry_custom_css .='}';
	}elseif($mining_industry_menu_case == 'lowercase' ){
		$mining_industry_custom_css .='.nav-menu ul li a{';
			$mining_industry_custom_css .=' text-transform: lowercase;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_banner_image = get_theme_mod('mining_industry_banner_image');
	if($mining_industry_banner_image != false){
		$mining_industry_custom_css .='#banner{';
			$mining_industry_custom_css .='background: url('.esc_url($mining_industry_banner_image).');';
		$mining_industry_custom_css .='}';
	}

	// Single post image border radious
	$mining_industry_single_post_img_border_radius = get_theme_mod('mining_industry_single_post_img_border_radius', 0);
	$mining_industry_custom_css .='.feature-box img{';
		$mining_industry_custom_css .='border-radius: '.esc_attr($mining_industry_single_post_img_border_radius).'px;';
	$mining_industry_custom_css .='}';

	// Single post image box shadow
	$mining_industry_single_post_img_box_shadow = get_theme_mod('mining_industry_single_post_img_box_shadow',0);
	$mining_industry_custom_css .='.feature-box img{';
		$mining_industry_custom_css .='box-shadow: '.esc_attr($mining_industry_single_post_img_box_shadow).'px '.esc_attr($mining_industry_single_post_img_box_shadow).'px '.esc_attr($mining_industry_single_post_img_box_shadow).'px #ccc;';
	$mining_industry_custom_css .='}';

	// single post image dimention
	$mining_industry_single_post_image_dimension = get_theme_mod('mining_industry_single_post_image_dimension', 'default');
	$mining_industry_single_post_image_custom_width = get_theme_mod('mining_industry_single_post_image_custom_width',400);
	$mining_industry_single_post_image_custom_height = get_theme_mod('mining_industry_single_post_image_custom_height',400);
	if($mining_industry_single_post_image_dimension == 'custom'){
		$mining_industry_custom_css .='.singlepost-page .feature-box img{';
			$mining_industry_custom_css .='width: '.esc_attr($mining_industry_single_post_image_custom_width).'px; height: '.esc_attr($mining_industry_single_post_image_custom_height).'px;';
		$mining_industry_custom_css .='}';
	}
	// Button Font Size
	$mining_industry_button_font_size = get_theme_mod('mining_industry_button_font_size', '12');
	$mining_industry_custom_css .='.blogbtn a{';
		$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_button_font_size).'px;';
	$mining_industry_custom_css .='}';


	