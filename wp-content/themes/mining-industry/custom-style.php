<?php

	$mining_industry_custom_css= "";

	/*-------------------- Highlight Color -------------------*/

	$mining_industry_first_color = get_theme_mod('mining_industry_first_color');
	$mining_industry_second_color = get_theme_mod('mining_industry_second_color');

	if($mining_industry_first_color != false){
		$mining_industry_custom_css .='#sidebar .wp-block-tag-cloud a:hover, #footer, .custom-about-us a.custom_read_more, #footer .wp-block-tag-cloud a:hover, table.compare-list .add-to-cart td a:not(.unstyled_button), .main-navigation ul.sub-menu > li:hover, .main-navigation ul.sub-menu > li > a:focus, .main-navigation ul.children > li:hover, .main-navigation ul.children > li > a:focus, .main-header .topbar-btn a, #slider .inner_carousel .banner-btn a:hover, #project-section .owl-carousel .owl-nav button:hover i, .more-btn a , #comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.pro-button a, .woocommerce a.added_to_cart.wc-forward, .single-product .woocommerce-notices-wrapper .woocommerce-message .button.wc-forward, .single-product .yith-add-to-wishlist-button-block .yith-wcwl-add-to-wishlist-button, #preloader, #footer-2, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .copyright .custom-social-icons i:hover, .scrollup i, .bradcrumbs a, .post-categories li a, nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-next a, #sidebar .custom-social-icons a, #sidebar .custom-social-icons a:hover, #footer .custom-social-icons a:hover, #sidebar h3:before,#sidebar .widget_block h3:before, #sidebar h2:before, #sidebar label.wp-block-search__label:before, #sidebar .tagcloud a:hover, .pagination span, .pagination a, .post-nav-links span, .post-nav-links a, .woocommerce span.onsale, nav.woocommerce-MyAccount-navigation ul li, nav.woocommerce-MyAccount-navigation ul li:hover, .woocommerce ul.products li.product .button, .woocommerce a.added_to_cart.wc-forward,a.added_to_cart.wc-forward, .wishlist-items-wrapper .product-add-to-cart a, .wishlist_table.mobile .product-add-to-cart a, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart, .woocommerce-cart .wc-block-grid__product-onsale,.woocommerce-cart .wc-block-grid .wc-block-grid__product-onsale, .wp-block-woocommerce-cart .wc-block-cart__submit-button,a.wc-block-components-checkout-return-to-cart-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button, .wp-block-woocommerce-cart .wc-block-cart__submit-button:hover, .wc-block-components-checkout-place-order-button:hover,a.wc-block-components-checkout-return-to-cart-button:hover, .wc-block-components-totals-coupon__button:hover, .search-form .search-submit, header.woocommerce-Address-title.title a, #tag-cloud-sec .tag-cloud-link{';
			$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_first_color).';';
		$mining_industry_custom_css .='}';
	}

	if($mining_industry_first_color != false){
		$mining_industry_custom_css .='.woocommerce-pagination .page-numbers.current, .woocommerce-pagination a.page-numbers:hover, header.woocommerce-Address-title.title a:hover,#tag-cloud-sec .tag-cloud-link:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover, #sidebar ul li::before, .wp-block-woocommerce-cart .wc-block-components-product-badge, .wc-block-components-order-summary-item__quantity, header.woocommerce-Address-title.title a:hover,#tag-cloud-sec .tag-cloud-link:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover{';
			$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_first_color).'!important;';
		$mining_industry_custom_css .='}';
	}

	if($mining_industry_first_color != false){
		$mining_industry_custom_css .='a:hover, .sticky .post-main-box h2:before, #slider .inner_carousel .slider-title .title-text, #slider .slider-arrows .carousel-control-prev-icon i:hover, #slider .slider-arrows .carousel-control-next-icon i:hover, #sidebar .widget_text p a, #sidebar .wp-block-heading a, .post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .grid-post-main-box:hover h2 a, .grid-post-main-box:hover .post-info span a, #sidebar ul li:hover, .woocommerce-error::before, .pagination a:hover, .pagination .current, .post-navigation span.meta-nav, .post-navigation span.meta-nav:hover, .yith-wcwl-wishlistaddedbrowse span.feedback, .yith-wcwl-wishlistexistsbrowse span.feedback, .wishlist_table .product-name a, .wishlist_table.mobile .product-name a, .woocommerce-message::before,.woocommerce-info::before{';
			$mining_industry_custom_css .='color: '.esc_attr($mining_industry_first_color).';';
		$mining_industry_custom_css .='}';
	}

	if($mining_industry_first_color != false){
		$mining_industry_custom_css .='.main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .tags-bg a:hover, #footer .custom-social-icons a:hover{';
			$mining_industry_custom_css .='color: '.esc_attr($mining_industry_first_color).'!important;';
		$mining_industry_custom_css .='}';
	}

	if($mining_industry_first_color != false){
		$mining_industry_custom_css .='#slider .inner_carousel .slider-small-title, #project-section .project-sec-content .small-text{';
			$mining_industry_custom_css .='background: linear-gradient(90deg, '.esc_attr($mining_industry_first_color).' 0%, '.esc_attr($mining_industry_second_color).' 100%);';
		$mining_industry_custom_css .='}';
	}

	if($mining_industry_first_color != false){
		$mining_industry_custom_css .='#project-section .owl-item:hover{';
			$mining_industry_custom_css .='background: linear-gradient(154.01deg, '.esc_attr($mining_industry_first_color).' 8.22%, '.esc_attr($mining_industry_second_color).' 98.81%);';
		$mining_industry_custom_css .='}';
	}

	if($mining_industry_first_color != false){
		$mining_industry_custom_css .='#slider .slider-indicator button.active .dot-image{';
			$mining_industry_custom_css .='background: linear-gradient(-75deg, '.esc_attr($mining_industry_first_color).' 60%, #ffffff1a 60%);';
		$mining_industry_custom_css .='}';
	}

	if($mining_industry_first_color != false){
		$mining_industry_custom_css .='#footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .post-main-box, .grid-post-main-box, .bradcrumbs a, .post-categories li a, #sidebar .widget, .pagination span, .pagination a, .post-nav-links span, .post-nav-links a{';
			$mining_industry_custom_css .='border-color: '.esc_attr($mining_industry_first_color).';';
		$mining_industry_custom_css .='}';
	}

	if($mining_industry_first_color != false){
		$mining_industry_custom_css .='#footer .custom-social-icons a:hover{';
			$mining_industry_custom_css .='outline: 6px double '.esc_attr($mining_industry_first_color).';';
		$mining_industry_custom_css .='}';
	}

	if($mining_industry_first_color != false){
		$mining_industry_custom_css .='#sidebar .widget{';
			$mining_industry_custom_css .='border-bottom-color: '.esc_attr($mining_industry_first_color).';';
		$mining_industry_custom_css .='}';
	}

	if($mining_industry_first_color != false){
		$mining_industry_custom_css .='#sidebar .widget, .woocommerce-error, .woocommerce-message,.woocommerce-info{';
			$mining_industry_custom_css .='border-top-color: '.esc_attr($mining_industry_first_color).';';
		$mining_industry_custom_css .='}';
	}

	if($mining_industry_first_color != false){
		$mining_industry_custom_css .='#sidebar .widget{';
			$mining_industry_custom_css .='border-right-color: '.esc_attr($mining_industry_first_color).';';
		$mining_industry_custom_css .='}';
	}

	if($mining_industry_first_color != false){
		$mining_industry_custom_css .='#slider .inner_carousel .slider-title, #project-section .project-sec-content .section-title, #sidebar .widget{';
			$mining_industry_custom_css .='border-left-color: '.esc_attr($mining_industry_first_color).';';
		$mining_industry_custom_css .='}';
	}

	if($mining_industry_first_color != false){
		$mining_industry_custom_css .='@media screen and (max-width:1000px) {';
			$mining_industry_custom_css .='.toggle-nav i, .sidenav .closebtn{';
				$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_first_color).';';
			$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='}';
	}

	// Second color
	if($mining_industry_second_color != false){
		$mining_industry_custom_css .='#comments input[type="submit"]:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.widget_product_search button:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .single-product .woocommerce-notices-wrapper .woocommerce-message .button.wc-forward:hover, #sidebar .wp-block-search .wp-block-search__button:hover, .post-nav-links span:hover, .post-nav-links a:hover, #comments input[type="submit"]:hover, .more-btn a:hover,#footer .tagcloud a:hover, .pro-button a:hover, #comments a.comment-reply-link:hover, #footer .tagcloud a:hover, .bradcrumbs a:hover, .post-categories li a:hover, .bradcrumbs span, a.added_to_cart.wc-forward:hover, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart:hover, .woocommerce ul.products li.product .button:hover{';
			$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_second_color).';';
		$mining_industry_custom_css .='}';
	}

	if($mining_industry_second_color != false){
		$mining_industry_custom_css .='#sidebar .wp-block-search .wp-block-search__button:hover, #footer .tagcloud a:hover, .bradcrumbs a:hover, .post-categories li a:hover, .bradcrumbs span{';
			$mining_industry_custom_css .='border-color: '.esc_attr($mining_industry_second_color).';';
		$mining_industry_custom_css .='}';
	}

	if($mining_industry_second_color != false){
		$mining_industry_custom_css .='#footer .footer-block .wp-block-heading a, #footer .footer-block .widget_text p a{';
			$mining_industry_custom_css .='color: '.esc_attr($mining_industry_second_color).';';
		$mining_industry_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$mining_industry_theme_lay = get_theme_mod( 'mining_industry_width_option','Full Width');
    if($mining_industry_theme_lay == 'Boxed'){
		$mining_industry_custom_css .='body{';
			$mining_industry_custom_css .='max-width: 1140px; width: 100%; margin-right: auto; margin-left: auto;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.scrollup i{';
			$mining_industry_custom_css .='right: 100px;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.row.outer-logo{';
			$mining_industry_custom_css .='margin-left: 0px;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_theme_lay == 'Wide Width'){
		$mining_industry_custom_css .='body{';
			$mining_industry_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.scrollup i{';
			$mining_industry_custom_css .='right: 30px;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.row.outer-logo{';
			$mining_industry_custom_css .='margin-left: 0px;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_theme_lay == 'Full Width'){
		$mining_industry_custom_css .='body{';
			$mining_industry_custom_css .='max-width: 100%;';
		$mining_industry_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$mining_industry_sticky_header_padding = get_theme_mod('mining_industry_sticky_header_padding');
	if($mining_industry_sticky_header_padding != false){
		$mining_industry_custom_css .='.header-fixed{';
			$mining_industry_custom_css .='padding: '.esc_attr($mining_industry_sticky_header_padding).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_responsive_preloader_hide = get_theme_mod('mining_industry_responsive_preloader_hide',false);
	if($mining_industry_responsive_preloader_hide == true && get_theme_mod('mining_industry_loader_enable',false) == false){
		$mining_industry_custom_css .='@media screen and (min-width:575px){
			#preloader{';
			$mining_industry_custom_css .='display:none !important;';
		$mining_industry_custom_css .='} }';
	}

	if($mining_industry_responsive_preloader_hide == false){
		$mining_industry_custom_css .='@media screen and (max-width:575px){
			#preloader{';
			$mining_industry_custom_css .='display:none !important;';
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
	$mining_industry_resp_scroll_top = get_theme_mod( 'mining_industry_resp_scroll_top_hide_show',true);
	if($mining_industry_resp_scroll_top == true && get_theme_mod( 'mining_industry_hide_show_scroll',true) == false){
    	$mining_industry_custom_css .='.scrollup i{';
			$mining_industry_custom_css .='visibility:hidden !important;';
		$mining_industry_custom_css .='} ';
	}
    if($mining_industry_resp_scroll_top == true){
    	$mining_industry_custom_css .='@media screen and (max-width:575px) {';
		$mining_industry_custom_css .='.scrollup i{';
			$mining_industry_custom_css .='visibility:visible !important;';
		$mining_industry_custom_css .='} }';
	}else if($mining_industry_resp_scroll_top == false){
		$mining_industry_custom_css .='@media screen and (max-width:575px){';
		$mining_industry_custom_css .='.scrollup i{';
			$mining_industry_custom_css .='visibility:hidden !important;';
		$mining_industry_custom_css .='} }';
	}

	$mining_industry_resp_stickyheader = get_theme_mod( 'mining_industry_stickyheader_hide_show',false);
	if($mining_industry_resp_stickyheader == true && get_theme_mod( 'mining_industry_sticky_header',false) != true){
    	$mining_industry_custom_css .='.header-fixed{';
			$mining_industry_custom_css .='position:static;';
		$mining_industry_custom_css .='} ';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$mining_industry_slider_content_padding_top_bottom = get_theme_mod('mining_industry_slider_content_padding_top_bottom');
	$mining_industry_slider_content_padding_left_right = get_theme_mod('mining_industry_slider_content_padding_left_right');
	if($mining_industry_slider_content_padding_top_bottom != false || $mining_industry_slider_content_padding_left_right != false){
		$mining_industry_custom_css .='#slider .carousel-caption{';
			$mining_industry_custom_css .='top: '.esc_attr($mining_industry_slider_content_padding_top_bottom).'; bottom: '.esc_attr($mining_industry_slider_content_padding_top_bottom).';left: '.esc_attr($mining_industry_slider_content_padding_left_right).';right: '.esc_attr($mining_industry_slider_content_padding_left_right).';';
		$mining_industry_custom_css .='}';
	}
	
	/*-------------- Copyright Alignment ----------------*/

	$mining_industry_copyright_alingment = get_theme_mod('mining_industry_copyright_alingment');
	if($mining_industry_copyright_alingment != false){
		$mining_industry_custom_css .='.copyright p{';
			$mining_industry_custom_css .='text-align: '.esc_attr($mining_industry_copyright_alingment).';';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='
		@media screen and (max-width:720px) {
			.copyright p{';
			$mining_industry_custom_css .='text-align: center;} }';
	}

	$mining_industry_align_footer_social_icon = get_theme_mod('mining_industry_align_footer_social_icon');
	if($mining_industry_align_footer_social_icon != false){
		$mining_industry_custom_css .='.copyright .widget{';
			$mining_industry_custom_css .='text-align: '.esc_attr($mining_industry_align_footer_social_icon).';';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='
		@media screen and (max-width:720px) {
			.copyright .widget{';
			$mining_industry_custom_css .='text-align: center;} }';
	}

	$mining_industry_resp_stickycopyright = get_theme_mod( 'mining_industry_stickycopyright_hide_show',false);
	if($mining_industry_resp_stickycopyright == true && get_theme_mod( 'mining_industry_copyright_sticky',false) != true){
    	$mining_industry_custom_css .='.copyright-sticky{';
			$mining_industry_custom_css .='position:static;';
		$mining_industry_custom_css .='} ';
	}

	$mining_industry_footer_social_icons_font_size = get_theme_mod('mining_industry_footer_social_icons_font_size','16');
	$mining_industry_custom_css .='.footer .copyright .custom-social-icons i{';
		$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_footer_social_icons_font_size).'px;';
	$mining_industry_custom_css .='}';

	$mining_industry_footer_background_color = get_theme_mod('mining_industry_footer_background_color');
	if($mining_industry_footer_background_color != false){
		$mining_industry_custom_css .='#footer{';
			$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_footer_background_color).';';
		$mining_industry_custom_css .='}';
	}

	/*------------- Preloader Background Color  -------------------*/

	$mining_industry_preloader_bg_color = get_theme_mod('mining_industry_preloader_bg_color');
	if($mining_industry_preloader_bg_color != false){
		$mining_industry_custom_css .='#preloader{';
			$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_preloader_bg_color).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_preloader_border_color = get_theme_mod('mining_industry_preloader_border_color');
	if($mining_industry_preloader_border_color != false){
		$mining_industry_custom_css .='.loader-line{';
			$mining_industry_custom_css .='border-color: '.esc_attr($mining_industry_preloader_border_color).'!important;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_preloader_bg_img = get_theme_mod('mining_industry_preloader_bg_img');
	if($mining_industry_preloader_bg_img != false){
		$mining_industry_custom_css .='#preloader{';
			$mining_industry_custom_css .='background: url('.esc_attr($mining_industry_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$mining_industry_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$mining_industry_copyright_background_color = get_theme_mod('mining_industry_copyright_background_color');
	if($mining_industry_copyright_background_color != false){
		$mining_industry_custom_css .='#footer-2{';
			$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_copyright_background_color).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_footer_background_image = get_theme_mod('mining_industry_footer_background_image');
	if($mining_industry_footer_background_image != false){
		$mining_industry_custom_css .='#footer{';
			$mining_industry_custom_css .='background: url('.esc_attr($mining_industry_footer_background_image).')no-repeat;background-size:cover';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_theme_lay = get_theme_mod( 'mining_industry_img_footer','scroll');
	if($mining_industry_theme_lay == 'fixed'){
		$mining_industry_custom_css .='#footer{';
			$mining_industry_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$mining_industry_custom_css .='}';
	}elseif ($mining_industry_theme_lay == 'scroll'){
		$mining_industry_custom_css .='#footer{';
			$mining_industry_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_footer_img_position = get_theme_mod('mining_industry_footer_img_position','center center');
	if($mining_industry_footer_img_position != false){
		$mining_industry_custom_css .='#footer{';
			$mining_industry_custom_css .='background-position: '.esc_attr($mining_industry_footer_img_position).'!important;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_footer_widgets_heading = get_theme_mod( 'mining_industry_footer_widgets_heading','Left');
    if($mining_industry_footer_widgets_heading == 'Left'){
		$mining_industry_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$mining_industry_custom_css .='text-align: left;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_footer_widgets_heading == 'Center'){
		$mining_industry_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$mining_industry_custom_css .='text-align: center;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_footer_widgets_heading == 'Right'){
		$mining_industry_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$mining_industry_custom_css .='text-align: right;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_footer_widgets_content = get_theme_mod( 'mining_industry_footer_widgets_content','Left');
    if($mining_industry_footer_widgets_content == 'Left'){
		$mining_industry_custom_css .='#footer .widget{';
		$mining_industry_custom_css .='text-align: left;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_footer_widgets_content == 'Center'){
		$mining_industry_custom_css .='#footer .widget{';
			$mining_industry_custom_css .='text-align: center;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_footer_widgets_content == 'Right'){
		$mining_industry_custom_css .='#footer .widget{';
			$mining_industry_custom_css .='text-align: right;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_copyright_font_size = get_theme_mod('mining_industry_copyright_font_size');
	if($mining_industry_copyright_font_size != false){
		$mining_industry_custom_css .='#footer-2 a, #footer-2 p{';
			$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_copyright_font_size).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_copyright_padding_top_bottom = get_theme_mod('mining_industry_copyright_padding_top_bottom');
	if($mining_industry_copyright_padding_top_bottom != false){
		$mining_industry_custom_css .='#footer-2{';
			$mining_industry_custom_css .='padding-top: '.esc_attr($mining_industry_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($mining_industry_copyright_padding_top_bottom).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_footer_padding = get_theme_mod('mining_industry_footer_padding');
	if($mining_industry_footer_padding != false){
		$mining_industry_custom_css .='#footer{';
			$mining_industry_custom_css .='padding: '.esc_attr($mining_industry_footer_padding).' 0;';
		$mining_industry_custom_css .='}';
	}


	/*----------------Scroll to top Settings ------------------*/

	$mining_industry_scroll_to_top_font_size = get_theme_mod('mining_industry_scroll_to_top_font_size');
	if($mining_industry_scroll_to_top_font_size != false){
		$mining_industry_custom_css .='.scrollup i{';
			$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_scroll_to_top_font_size).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_scroll_to_top_padding = get_theme_mod('mining_industry_scroll_to_top_padding');
	$mining_industry_scroll_to_top_padding = get_theme_mod('mining_industry_scroll_to_top_padding');
	if($mining_industry_scroll_to_top_padding != false){
		$mining_industry_custom_css .='.scrollup i{';
			$mining_industry_custom_css .='padding-top: '.esc_attr($mining_industry_scroll_to_top_padding).';padding-bottom: '.esc_attr($mining_industry_scroll_to_top_padding).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_scroll_to_top_width = get_theme_mod('mining_industry_scroll_to_top_width');
	if($mining_industry_scroll_to_top_width != false){
		$mining_industry_custom_css .='.scrollup i{';
			$mining_industry_custom_css .='width: '.esc_attr($mining_industry_scroll_to_top_width).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_scroll_to_top_height = get_theme_mod('mining_industry_scroll_to_top_height');
	if($mining_industry_scroll_to_top_height != false){
		$mining_industry_custom_css .='.scrollup i{';
			$mining_industry_custom_css .='height: '.esc_attr($mining_industry_scroll_to_top_height).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_scroll_to_top_border_radius = get_theme_mod('mining_industry_scroll_to_top_border_radius');
	if($mining_industry_scroll_to_top_border_radius != false){
		$mining_industry_custom_css .='.scrollup i{';
			$mining_industry_custom_css .='border-radius: '.esc_attr($mining_industry_scroll_to_top_border_radius).'px;';
		$mining_industry_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$mining_industry_logo_padding = get_theme_mod('mining_industry_logo_padding');
	if($mining_industry_logo_padding != false){
		$mining_industry_custom_css .='.logo{';
			$mining_industry_custom_css .='padding: '.esc_attr($mining_industry_logo_padding).' !important;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_logo_margin = get_theme_mod('mining_industry_logo_margin');
	if($mining_industry_logo_margin != false){
		$mining_industry_custom_css .='.logo{';
			$mining_industry_custom_css .='margin: '.esc_attr($mining_industry_logo_margin).';';
		$mining_industry_custom_css .='}';
	}

	// Site title Font Size
	$mining_industry_site_title_font_size = get_theme_mod('mining_industry_site_title_font_size');
	if($mining_industry_site_title_font_size != false){
		$mining_industry_custom_css .='.logo p.site-title, .logo h1{';
			$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_site_title_font_size).';';
		$mining_industry_custom_css .='}';
	}

	// Site tagline Font Size
	$mining_industry_site_tagline_font_size = get_theme_mod('mining_industry_site_tagline_font_size');
	if($mining_industry_site_tagline_font_size != false){
		$mining_industry_custom_css .='.logo p.site-description{';
			$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_site_tagline_font_size).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_site_title_color = get_theme_mod('mining_industry_site_title_color');
	if($mining_industry_site_title_color != false){
		$mining_industry_custom_css .='p.site-title a, .logo h1 a{';
			$mining_industry_custom_css .='color: '.esc_attr($mining_industry_site_title_color).'!important;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_site_tagline_color = get_theme_mod('mining_industry_site_tagline_color');
	if($mining_industry_site_tagline_color != false){
		$mining_industry_custom_css .='.logo p.site-description{';
			$mining_industry_custom_css .='color: '.esc_attr($mining_industry_site_tagline_color).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_logo_width = get_theme_mod('mining_industry_logo_width');
	if($mining_industry_logo_width != false){
		$mining_industry_custom_css .='.logo img{';
			$mining_industry_custom_css .='width: '.esc_attr($mining_industry_logo_width).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_logo_height = get_theme_mod('mining_industry_logo_height');
	if($mining_industry_logo_height != false){
		$mining_industry_custom_css .='.logo img{';
			$mining_industry_custom_css .='height: '.esc_attr($mining_industry_logo_height).';object-fit:cover;';
		$mining_industry_custom_css .='}';
	}

	// Header Background Color
	$mining_industry_header_background_color = get_theme_mod('mining_industry_header_background_color');
	if($mining_industry_header_background_color != false){
		$mining_industry_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$mining_industry_custom_css .='background-color: '.esc_attr($mining_industry_header_background_color).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_header_img_position = get_theme_mod('mining_industry_header_img_position','center top');
	if($mining_industry_header_img_position != false){
		$mining_industry_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$mining_industry_custom_css .='background-position: '.esc_attr($mining_industry_header_img_position).'!important;';
		$mining_industry_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$mining_industry_theme_lay = get_theme_mod( 'mining_industry_blog_layout_option','Left');
    if($mining_industry_theme_lay == 'Default'){
		$mining_industry_custom_css .='.post-main-box{';
			$mining_industry_custom_css .='';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_theme_lay == 'Center'){
		$mining_industry_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$mining_industry_custom_css .='text-align:center;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.post-info{';
			$mining_industry_custom_css .='margin-top:10px;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.post-info hr{';
			$mining_industry_custom_css .='margin:15px auto;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_theme_lay == 'Left'){
		$mining_industry_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$mining_industry_custom_css .='text-align:Left;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.post-info hr{';
			$mining_industry_custom_css .='margin-bottom:10px;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.post-main-box h2{';
			$mining_industry_custom_css .='margin-top:10px;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='.service-text .more-btn{';
			$mining_industry_custom_css .='display:inline-block;';
		$mining_industry_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$mining_industry_blog_page_posts_settings = get_theme_mod( 'mining_industry_blog_page_posts_settings','Into Blocks');
    if($mining_industry_blog_page_posts_settings == 'Without Blocks'){
		$mining_industry_custom_css .='.post-main-box{';
			$mining_industry_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$mining_industry_custom_css .='}';
	}

	// featured image dimention
	$mining_industry_blog_post_featured_image_dimension = get_theme_mod('mining_industry_blog_post_featured_image_dimension', 'default');
	$mining_industry_blog_post_featured_image_custom_width = get_theme_mod('mining_industry_blog_post_featured_image_custom_width',250);
	$mining_industry_blog_post_featured_image_custom_height = get_theme_mod('mining_industry_blog_post_featured_image_custom_height',250);
	if($mining_industry_blog_post_featured_image_dimension == 'custom'){
		$mining_industry_custom_css .='.post-main-box img{';
			$mining_industry_custom_css .='width: '.esc_attr($mining_industry_blog_post_featured_image_custom_width).'!important; height: '.esc_attr($mining_industry_blog_post_featured_image_custom_height).';';
		$mining_industry_custom_css .='}';
	}

	/*---------------- Posts Settings ------------------*/

	$mining_industry_featured_image_border_radius = get_theme_mod('mining_industry_featured_image_border_radius', 0);
	if($mining_industry_featured_image_border_radius != false){
		$mining_industry_custom_css .='.box-image img, .feature-box img{';
			$mining_industry_custom_css .='border-radius: '.esc_attr($mining_industry_featured_image_border_radius).'px;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_featured_image_box_shadow = get_theme_mod('mining_industry_featured_image_box_shadow',0);
	if($mining_industry_featured_image_box_shadow != false){
		$mining_industry_custom_css .='.box-image img, #content-vw img{';
			$mining_industry_custom_css .='box-shadow: '.esc_attr($mining_industry_featured_image_box_shadow).'px '.esc_attr($mining_industry_featured_image_box_shadow).'px '.esc_attr($mining_industry_featured_image_box_shadow).'px #cccccc;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_singlepost_image_box_shadow = get_theme_mod('mining_industry_singlepost_image_box_shadow',0);
	if($mining_industry_singlepost_image_box_shadow != false){
		$mining_industry_custom_css .='.feature-box img{';
			$mining_industry_custom_css .='box-shadow: '.esc_attr($mining_industry_singlepost_image_box_shadow).'px '.esc_attr($mining_industry_singlepost_image_box_shadow).'px '.esc_attr($mining_industry_singlepost_image_box_shadow).'px #cccccc;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_related_image_box_shadow = get_theme_mod('mining_industry_related_image_box_shadow',0);
	if($mining_industry_related_image_box_shadow != false){
		$mining_industry_custom_css .='.related-post .box-image img{';
			$mining_industry_custom_css .='box-shadow: '.esc_attr($mining_industry_related_image_box_shadow).'px '.esc_attr($mining_industry_related_image_box_shadow).'px '.esc_attr($mining_industry_related_image_box_shadow).'px #cccccc;';
		$mining_industry_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$mining_industry_button_letter_spacing = get_theme_mod('mining_industry_button_letter_spacing');
	$mining_industry_custom_css .='.post-main-box .more-btn{';
		$mining_industry_custom_css .='letter-spacing: '.esc_attr($mining_industry_button_letter_spacing).';';
	$mining_industry_custom_css .='}';

	$mining_industry_button_border_radius = get_theme_mod('mining_industry_button_border_radius');
	if($mining_industry_button_border_radius != false){
		$mining_industry_custom_css .='.post-main-box .more-btn a{';
			$mining_industry_custom_css .='border-radius: '.esc_attr($mining_industry_button_border_radius).'px !important;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_button_top_bottom_padding = get_theme_mod('mining_industry_button_top_bottom_padding');
	$mining_industry_button_left_right_padding = get_theme_mod('mining_industry_button_left_right_padding');
	if($mining_industry_button_top_bottom_padding != false || $mining_industry_button_left_right_padding != false){
		$mining_industry_custom_css .='.post-main-box .more-btn{';
			$mining_industry_custom_css .='padding-top: '.esc_attr($mining_industry_button_top_bottom_padding).'!important; padding-bottom: '.esc_attr($mining_industry_button_top_bottom_padding).'!important;padding-left: '.esc_attr($mining_industry_button_left_right_padding).'!important;padding-right: '.esc_attr($mining_industry_button_left_right_padding).'!important;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_button_font_size = get_theme_mod('mining_industry_button_font_size',14);
	$mining_industry_custom_css .='.post-main-box .more-btn a{';
		$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_button_font_size).';';
	$mining_industry_custom_css .='}';

	$mining_industry_theme_lay = get_theme_mod( 'mining_industry_button_text_transform','Capitalize');
	if($mining_industry_theme_lay == 'Capitalize'){
		$mining_industry_custom_css .='.post-main-box .more-btn a{';
			$mining_industry_custom_css .='text-transform:Capitalize;';
		$mining_industry_custom_css .='}';
	}
	if($mining_industry_theme_lay == 'Lowercase'){
		$mining_industry_custom_css .='.post-main-box .more-btn a{';
			$mining_industry_custom_css .='text-transform:Lowercase;';
		$mining_industry_custom_css .='}';
	}
	if($mining_industry_theme_lay == 'Uppercase'){
		$mining_industry_custom_css .='.post-main-box .more-btn a{';
			$mining_industry_custom_css .='text-transform:Uppercase;';
		$mining_industry_custom_css .='}';
	}

	// button font weight
	$mining_industry_button_font_weight = get_theme_mod('mining_industry_button_font_weight');
  	$mining_industry_custom_css .='.more-btn a{';
    $mining_industry_custom_css .='font-weight: '.esc_attr($mining_industry_button_font_weight).'!important;';
  	$mining_industry_custom_css .='}';

	//Button hover effect
	$mining_industry_button_hover_effect = get_theme_mod('mining_industry_button_hover_effect', 'disable');
	if ($mining_industry_button_hover_effect !== 'disable') {
		$mining_industry_custom_css .= '.more-btn a:hover {';
		switch ($mining_industry_button_hover_effect) {
			case 'pulse':
				$mining_industry_custom_css .= 'animation: pulse 0.5s ease-in-out !important;';
				break;
			case 'rubberBand':
				$mining_industry_custom_css .= 'animation: rubberBand 0.5s ease-in-out !important;';
				break;
			case 'swing':
				$mining_industry_custom_css .= 'animation: swing 0.5s ease-in-out !important;';
				break;
			case 'tada':
				$mining_industry_custom_css .= 'animation: tada 0.5s ease-in-out !important;';
				break;
			case 'jello':
				$mining_industry_custom_css .= 'animation: jello 0.5s ease-in-out!important;';
				break;
		}
		$mining_industry_custom_css .= '}';
	}

	/*---------------- Single Blog Page Settings ------------------*/

	$mining_industry_single_blog_comment_button_text = get_theme_mod('mining_industry_single_blog_comment_button_text', 'Post Comment');
	if($mining_industry_single_blog_comment_button_text == ''){
		$mining_industry_custom_css .='#comments p.form-submit {';
			$mining_industry_custom_css .='display: none;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_comment_width = get_theme_mod('mining_industry_single_blog_comment_width');
	if($mining_industry_comment_width != false){
		$mining_industry_custom_css .='#comments textarea{';
			$mining_industry_custom_css .='width: '.esc_attr($mining_industry_comment_width).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_single_blog_post_navigation_show_hide = get_theme_mod('mining_industry_single_blog_post_navigation_show_hide',true);
	if($mining_industry_single_blog_post_navigation_show_hide != true){
		$mining_industry_custom_css .='.post-navigation{';
			$mining_industry_custom_css .='display: none;';
		$mining_industry_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$mining_industry_display_grid_posts_settings = get_theme_mod( 'mining_industry_display_grid_posts_settings','Into Blocks');
    if($mining_industry_display_grid_posts_settings == 'Without Blocks'){
		$mining_industry_custom_css .='.grid-post-main-box{';
			$mining_industry_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_grid_featured_image_border_radius = get_theme_mod('mining_industry_grid_featured_image_border_radius', 0);
	if($mining_industry_grid_featured_image_border_radius != false){
		$mining_industry_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img{';
			$mining_industry_custom_css .='border-radius: '.esc_attr($mining_industry_grid_featured_image_border_radius).'px;';
		$mining_industry_custom_css .='}';
	}
	/*----------------Woocommerce Products Settings ------------------*/

	$mining_industry_related_product_show_hide = get_theme_mod('mining_industry_related_product_show_hide',true);
	if($mining_industry_related_product_show_hide != true){
		$mining_industry_custom_css .='.related.products{';
			$mining_industry_custom_css .='display: none;';
		$mining_industry_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$mining_industry_products_padding_top_bottom = get_theme_mod('mining_industry_products_padding_top_bottom');
	if($mining_industry_products_padding_top_bottom != false){
		$mining_industry_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$mining_industry_custom_css .='padding-top: '.esc_attr($mining_industry_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($mining_industry_products_padding_top_bottom).'!important;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_products_padding_left_right = get_theme_mod('mining_industry_products_padding_left_right');
	if($mining_industry_products_padding_left_right != false){
		$mining_industry_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$mining_industry_custom_css .='padding-left: '.esc_attr($mining_industry_products_padding_left_right).'!important; padding-right: '.esc_attr($mining_industry_products_padding_left_right).'!important;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_products_box_shadow = get_theme_mod('mining_industry_products_box_shadow');
	if($mining_industry_products_box_shadow != false){
		$mining_industry_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$mining_industry_custom_css .='box-shadow: '.esc_attr($mining_industry_products_box_shadow).'px '.esc_attr($mining_industry_products_box_shadow).'px '.esc_attr($mining_industry_products_box_shadow).'px #ddd;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_products_border_radius = get_theme_mod('mining_industry_products_border_radius');
	if($mining_industry_products_border_radius != false){
		$mining_industry_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$mining_industry_custom_css .='border-radius: '.esc_attr($mining_industry_products_border_radius).'px;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_products_btn_padding_top_bottom = get_theme_mod('mining_industry_products_btn_padding_top_bottom');
	if($mining_industry_products_btn_padding_top_bottom != false){
		$mining_industry_custom_css .='.woocommerce a.button{';
			$mining_industry_custom_css .='padding-top: '.esc_attr($mining_industry_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($mining_industry_products_btn_padding_top_bottom).' !important;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_products_btn_padding_left_right = get_theme_mod('mining_industry_products_btn_padding_left_right');
	if($mining_industry_products_btn_padding_left_right != false){
		$mining_industry_custom_css .='.woocommerce a.button{';
			$mining_industry_custom_css .='padding-left: '.esc_attr($mining_industry_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($mining_industry_products_btn_padding_left_right).' !important;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_products_button_border_radius = get_theme_mod('mining_industry_products_button_border_radius', 0);
	if($mining_industry_products_button_border_radius != false){
		$mining_industry_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce a.button{';
			$mining_industry_custom_css .='border-radius: '.esc_attr($mining_industry_products_button_border_radius).'px !important;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_woocommerce_sale_position = get_theme_mod( 'mining_industry_woocommerce_sale_position','right');
    if($mining_industry_woocommerce_sale_position == 'left'){
		$mining_industry_custom_css .='.woocommerce ul.products li.product .onsale{';
			$mining_industry_custom_css .='left: 14px !important; right: auto !important;';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_woocommerce_sale_position == 'right'){
		$mining_industry_custom_css .='.woocommerce ul.products li.product .onsale{';
			$mining_industry_custom_css .='left: auto!important; right: 14px !important;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_woocommerce_sale_font_size = get_theme_mod('mining_industry_woocommerce_sale_font_size');
	if($mining_industry_woocommerce_sale_font_size != false){
		$mining_industry_custom_css .='.woocommerce span.onsale{';
			$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_woocommerce_sale_font_size).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_woocommerce_sale_padding_top_bottom = get_theme_mod('mining_industry_woocommerce_sale_padding_top_bottom');
	if($mining_industry_woocommerce_sale_padding_top_bottom != false){
		$mining_industry_custom_css .='.woocommerce span.onsale{';
			$mining_industry_custom_css .='padding-top: '.esc_attr($mining_industry_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($mining_industry_woocommerce_sale_padding_top_bottom).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_woocommerce_sale_padding_left_right = get_theme_mod('mining_industry_woocommerce_sale_padding_left_right');
	if($mining_industry_woocommerce_sale_padding_left_right != false){
		$mining_industry_custom_css .='.woocommerce span.onsale{';
			$mining_industry_custom_css .='padding-left: '.esc_attr($mining_industry_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($mining_industry_woocommerce_sale_padding_left_right).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_woocommerce_sale_border_radius = get_theme_mod('mining_industry_woocommerce_sale_border_radius', 0);
	if($mining_industry_woocommerce_sale_border_radius != false){
		$mining_industry_custom_css .='.woocommerce span.onsale{';
			$mining_industry_custom_css .='border-radius: '.esc_attr($mining_industry_woocommerce_sale_border_radius).'px;';
		$mining_industry_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$mining_industry_sticky_header_padding = get_theme_mod('mining_industry_sticky_header_padding');
	if($mining_industry_sticky_header_padding != false){
		$mining_industry_custom_css .='.header-fixed{';
			$mining_industry_custom_css .='padding: '.esc_attr($mining_industry_sticky_header_padding).';';
		$mining_industry_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$mining_industry_social_icon_font_size = get_theme_mod('mining_industry_social_icon_font_size');
	if($mining_industry_social_icon_font_size != false){
		$mining_industry_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_social_icon_font_size).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_social_icon_padding = get_theme_mod('mining_industry_social_icon_padding');
	if($mining_industry_social_icon_padding != false){
		$mining_industry_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$mining_industry_custom_css .='padding: '.esc_attr($mining_industry_social_icon_padding).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_social_icon_width = get_theme_mod('mining_industry_social_icon_width');
	if($mining_industry_social_icon_width != false){
		$mining_industry_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$mining_industry_custom_css .='width: '.esc_attr($mining_industry_social_icon_width).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_social_icon_height = get_theme_mod('mining_industry_social_icon_height');
	if($mining_industry_social_icon_height != false){
		$mining_industry_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$mining_industry_custom_css .='height: '.esc_attr($mining_industry_social_icon_height).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_social_icon_border_radius = get_theme_mod('mining_industry_social_icon_border_radius');
	if($mining_industry_social_icon_border_radius != false){
		$mining_industry_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$mining_industry_custom_css .='border-radius: '.esc_attr($mining_industry_social_icon_border_radius).'px;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_resp_menu_toggle_btn_bg_color = get_theme_mod('mining_industry_resp_menu_toggle_btn_bg_color');
	if($mining_industry_resp_menu_toggle_btn_bg_color != false){
		$mining_industry_custom_css .='.toggle-nav i,#mySidenav .closebtn{';
			$mining_industry_custom_css .='background: '.esc_attr($mining_industry_resp_menu_toggle_btn_bg_color).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_grid_featured_image_box_shadow = get_theme_mod('mining_industry_grid_featured_image_box_shadow',0);
	if($mining_industry_grid_featured_image_box_shadow != false){
		$mining_industry_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$mining_industry_custom_css .='box-shadow: '.esc_attr($mining_industry_grid_featured_image_box_shadow).'px '.esc_attr($mining_industry_grid_featured_image_box_shadow).'px '.esc_attr($mining_industry_grid_featured_image_box_shadow).'px #cccccc;';
		$mining_industry_custom_css .='}';
	}


	/*-------------- Menus Setings ----------------*/

	$mining_industry_navigation_menu_font_size = get_theme_mod('mining_industry_navigation_menu_font_size');
	if($mining_industry_navigation_menu_font_size != false){
		$mining_industry_custom_css .='#site-navigation .menu ul li a, .main-navigation .menu > li > a{';
			$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_navigation_menu_font_size).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_navigation_menu_font_weight = get_theme_mod('mining_industry_navigation_menu_font_weight','600');
	if($mining_industry_navigation_menu_font_weight != false){
		$mining_industry_custom_css .='#site-navigation .menu ul li a, .main-navigation .menu > li > a{';
			$mining_industry_custom_css .='font-weight: '.esc_attr($mining_industry_navigation_menu_font_weight).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_header_menus_hover_color = get_theme_mod('mining_industry_header_menus_hover_color');
	if($mining_industry_header_menus_hover_color != false){
		$mining_industry_custom_css .='.main-navigation ul a:hover{';
			$mining_industry_custom_css .='color: '.esc_attr($mining_industry_header_menus_hover_color).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_header_submenus_color = get_theme_mod('mining_industry_header_submenus_color');
	if($mining_industry_header_submenus_color != false){
		$mining_industry_custom_css .='.main-navigation ul ul a{';
			$mining_industry_custom_css .='color: '.esc_attr($mining_industry_header_submenus_color).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_header_submenus_hover_color = get_theme_mod('mining_industry_header_submenus_hover_color');
	if($mining_industry_header_submenus_hover_color != false){
		$mining_industry_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$mining_industry_custom_css .='color: '.esc_attr($mining_industry_header_submenus_hover_color).'!important;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_menus_item = get_theme_mod( 'mining_industry_menus_item_style','None');
    if($mining_industry_menus_item == 'None'){
		$mining_industry_custom_css .='.main-navigation ul a{';
			$mining_industry_custom_css .='';
		$mining_industry_custom_css .='}';
	}else if($mining_industry_menus_item == 'Zoom In'){
		$mining_industry_custom_css .='.main-navigation ul a:hover{';
			$mining_industry_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$mining_industry_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$mining_industry_theme_lay = get_theme_mod( 'mining_industry_footer_template','mining_industry-footer-one');
    if($mining_industry_theme_lay == 'mining_industry-footer-one'){
		$mining_industry_custom_css .='#footer{';
			$mining_industry_custom_css .='';
		$mining_industry_custom_css .='}';

	}else if($mining_industry_theme_lay == 'mining_industry-footer-two'){
		$mining_industry_custom_css .='#footer{';
			$mining_industry_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$mining_industry_custom_css .='color:#000;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='#footer ul li::before{';
			$mining_industry_custom_css .='background:#000;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$mining_industry_custom_css .='border: 1px solid #000;';
		$mining_industry_custom_css .='}';

	}else if($mining_industry_theme_lay == 'mining_industry-footer-three'){
		$mining_industry_custom_css .='#footer{';
			$mining_industry_custom_css .='background: #232524;';
		$mining_industry_custom_css .='}';
	}
	else if($mining_industry_theme_lay == 'mining_industry-footer-four'){
		$mining_industry_custom_css .='#footer{';
			$mining_industry_custom_css .='background: #F34F1F;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$mining_industry_custom_css .='color:#fff;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='#footer ul li::before{';
			$mining_industry_custom_css .='background:#fff;';
		$mining_industry_custom_css .='}';
		$mining_industry_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$mining_industry_custom_css .='border: 1px solid #fff;';
		$mining_industry_custom_css .='}';
	}
	else if($mining_industry_theme_lay == 'mining_industry-footer-five'){
		$mining_industry_custom_css .='#footer{';
			$mining_industry_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$mining_industry_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$mining_industry_button_footer_heading_letter_spacing = get_theme_mod('mining_industry_button_footer_heading_letter_spacing',1);
	$mining_industry_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$mining_industry_custom_css .='letter-spacing: '.esc_attr($mining_industry_button_footer_heading_letter_spacing).'px;';
	$mining_industry_custom_css .='}';

	$mining_industry_button_footer_font_size = get_theme_mod('mining_industry_button_footer_font_size','30');
	$mining_industry_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$mining_industry_custom_css .='font-size: '.esc_attr($mining_industry_button_footer_font_size).'px;';
	$mining_industry_custom_css .='}';

	$mining_industry_theme_lay = get_theme_mod( 'mining_industry_button_footer_text_transform','Capitalize');
	if($mining_industry_theme_lay == 'Capitalize'){
		$mining_industry_custom_css .='#footer h3{';
			$mining_industry_custom_css .='text-transform:Capitalize;';
		$mining_industry_custom_css .='}';
	}
	if($mining_industry_theme_lay == 'Lowercase'){
		$mining_industry_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$mining_industry_custom_css .='text-transform:Lowercase;';
		$mining_industry_custom_css .='}';
	}
	if($mining_industry_theme_lay == 'Uppercase'){
		$mining_industry_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$mining_industry_custom_css .='text-transform:Uppercase;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_footer_heading_weight = get_theme_mod('mining_industry_footer_heading_weight','500');
	if($mining_industry_footer_heading_weight != false){
		$mining_industry_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$mining_industry_custom_css .='font-weight: '.esc_attr($mining_industry_footer_heading_weight).';';
		$mining_industry_custom_css .='}';
	}
	
	$mining_industry_slider_first_color = get_theme_mod('mining_industry_slider_first_color');

	$mining_industry_slider_second_color = get_theme_mod('mining_industry_slider_second_color');

	if($mining_industry_slider_first_color != false || $mining_industry_slider_second_color != false){
		$mining_industry_custom_css .='.box{
		background: linear-gradient(to top, '.esc_attr($mining_industry_slider_first_color).', '.esc_attr($mining_industry_slider_second_color).');
		}';
	}

	$mining_industry_services_icon_color = get_theme_mod('mining_industry_services_icon_color');
	if($mining_industry_services_icon_color != false){
		$mining_industry_custom_css .='#about-sec i{';
			$mining_industry_custom_css .='color: '.esc_attr($mining_industry_services_icon_color).';';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_single_page_breadcrumb = get_theme_mod('mining_industry_single_page_breadcrumb',true);
	if($mining_industry_single_page_breadcrumb != true){
		$mining_industry_custom_css .='.page-breadcrumb{';
			$mining_industry_custom_css .='display: none;';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_sticky_sidebar = get_theme_mod( 'mining_industry_sticky_sidebar',false);
	if($mining_industry_sticky_sidebar == true && get_theme_mod( 'mining_industry_sticky_sidebar',false) != true){
    	$mining_industry_custom_css .='#sidebar{';
			$mining_industry_custom_css .='position:static;';
		$mining_industry_custom_css .='} ';
	}

	$mining_industry_show_first_caps = get_theme_mod('mining_industry_show_first_caps', false);
	if ($mining_industry_show_first_caps ) {
	    $mining_industry_custom_css .= '.post-main-box .entry-content p:nth-of-type(1)::first-letter {';
	    $mining_industry_custom_css .=' font-size: 55px;font-weight: 600;margin-right: 5px;';
	    $mining_industry_custom_css .='}';
	} else {
		$mining_industry_custom_css .= '.post-main-box .entry-content p:nth-of-type(1)::first-letter {';
	    $mining_industry_custom_css .= 'display: none;';
	    $mining_industry_custom_css .='}';
	}

	// Web Frame 
	$mining_industry_web_frame = get_theme_mod('mining_industry_web_frame',false);
	if($mining_industry_web_frame == false && get_theme_mod( 'mining_industry_web_frame',false) != true){
		$mining_industry_custom_css .='.web-frame{';
		$mining_industry_custom_css .='border: 1px !important';
		$mining_industry_custom_css .='}';
	}

	$mining_industry_web_frame_border_color = get_theme_mod('mining_industry_web_frame_border_color');
	if($mining_industry_web_frame_border_color != false){
		$mining_industry_custom_css .='.web-frame{';
			$mining_industry_custom_css .='border-color: '.esc_attr($mining_industry_web_frame_border_color).'!important;';
		$mining_industry_custom_css .='}';
	}
    
	$mining_industry_web_frame_border_width = get_theme_mod('mining_industry_web_frame_border_width');
	if($mining_industry_web_frame_border_width != false){
		$mining_industry_custom_css .='.web-frame{';
			$mining_industry_custom_css .='border-width: '.esc_attr($mining_industry_web_frame_border_width).'!important;';
		$mining_industry_custom_css .='}';
	}

	// change the Category style //
	$mining_industry_single_post_styling = get_theme_mod( 'mining_industry_single_post_styling','Button');
		if($mining_industry_single_post_styling == 'Underline'){
		$mining_industry_custom_css .='.single-post-category .post-categories li a{';
			$mining_industry_custom_css .='text-decoration: underline; color: #000; background-color: transparent !important; border:none;';
		$mining_industry_custom_css .='}';
	}
	else if($mining_industry_single_post_styling == 'Default'){
		$mining_industry_custom_css .='.single-post-category .post-categories li a{';
			$mining_industry_custom_css .='text-decoration: none; color: #000; background-color: transparent !important; border:none;';
		$mining_industry_custom_css .='}';
	}

	// Featured hover image effect //
	$mining_industry_show_featured = get_theme_mod( 'mining_industry_featured_image_hide_show', 1 );
	$mining_industry_hover_effect  = get_theme_mod( 'mining_industry_featured_image_hover', 'none' );

	if ( $mining_industry_show_featured && $mining_industry_hover_effect !== 'none' ) {

		$mining_industry_custom_css .= '
		.mining-industry-featured-image img{
			transition: all 0.4s ease;
		}';

		if ( $mining_industry_hover_effect === 'zoom-in' ) {
			$mining_industry_custom_css .= '
			.mining-industry-featured-image:hover img{
				transform: scale(1.2);
			}';
		}

		if ( $mining_industry_hover_effect === 'zoom-out' ) {
			$mining_industry_custom_css .= '
			.mining-industry-featured-image img{
				transform: scale(1.2);
			}
			.mining-industry-featured-image:hover img{
				transform: scale(1);
			}';
		}

		if ( $mining_industry_hover_effect === 'grayscale' ) {
			$mining_industry_custom_css .= '
			.mining-industry-featured-image img{
				filter: grayscale(100%);
			}
			.mining-industry-featured-image:hover img{
				filter: grayscale(0);
			}';
		}

		if ( $mining_industry_hover_effect === 'sepia' ) {
			$mining_industry_custom_css .= '
			.mining-industry-featured-image:hover img{
				filter: sepia(100%);
			}';
		}

		if ( $mining_industry_hover_effect === 'blur' ) {
			$mining_industry_custom_css .= '
			.mining-industry-featured-image:hover img{
				filter: blur(3px);
			}';
		}

		if ( $mining_industry_hover_effect === 'bright' ) {
			$mining_industry_custom_css .= '
			.mining-industry-featured-image:hover img{
				filter: brightness(1.3);
			}';
		}

		if ( $mining_industry_hover_effect === 'translate' ) {
			$mining_industry_custom_css .= '
			.mining-industry-featured-image:hover img{
				transform: translateY(-10px);
			}';
		}
	}





	