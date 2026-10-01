<?php
/**
 * Mining Industry  functions and definitions
 *
 * @package Mining Industry 
 */
/* Breadcrumb Begin */
function mining_industry_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url( home_url() );
		echo '">';
			bloginfo('name');
		echo "</a> >> ";
		if (is_category() || is_single()) {
			the_category('>>');
			if (is_single()) {
				echo ">> <span> ";
					the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			echo "<span> ";
				the_title();
		}
	}
}
/* Theme Setup */
if ( ! function_exists( 'mining_industry_setup' ) ) :
 
function mining_industry_setup() {

	$GLOBALS['content_width'] = apply_filters( 'mining_industry_content_width', 640 );

	load_theme_textdomain( 'mining-industry', get_template_directory() . '/languages' );
	
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 90,
		'width'       => 90,
		'flex-height' => true,
	) );
	add_image_size('mining-industry-homepage-thumb',240,145,true);
	
    register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'mining-industry' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	//selective refresh for sidebar and widgets
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', mining_industry_font_url() ) );

	// Theme Activation Notice
	global $pagenow;

	if (
		is_admin()
		&&
		('themes.php' == $pagenow)
		// &&
		// isset( $_GET['activated'] )
	) {
		add_action('admin_notices', 'mining_industry_activation_notice');
	}
}
endif;

add_action( 'after_setup_theme', 'mining_industry_setup' );

// Notice after Theme Activation
add_action('admin_notices', 'mining_industry_activation_notice');

function mining_industry_activation_notice() {
    // Hide permanently if dismissed
    if ( get_option('mining_industry_admin_notice') == 1 ) {
        return;
    }
    // Hide ONLY on Get Started page
    if ( isset($_GET['page']) && $_GET['page'] === 'mining_industry_guide' ) {
        return;
    }
		echo '<div id="mining-industry-welcome-notice" class="notice notice-success is-dismissible welcome-notice">';
		echo '<div class="notice-row">';
			echo '<div class="notice-text">';
				echo '<p class="welcome-text1">'. esc_html__( '🎉 Welcome to VW Themes,', 'mining-industry' ) .'</p>';
				echo '<p class="welcome-text2">'. esc_html__( 'You are now using the Mining Industry, a beautifully designed theme to kickstart your website.', 'mining-industry' ) .'</p>';
				echo '<p class="welcome-text3">'. esc_html__( 'To help you get started quickly, use the options below:', 'mining-industry' ) .'</p>';
				echo '<span class="import-btn"><a href="'. esc_url( admin_url( 'themes.php?page=mining_industry_guide' ) ) .'" class="button button-primary">'. esc_html__( 'DEMO IMPORT', 'mining-industry' ) .'</a></span>';
				echo '<span class="demo-btn"><a href="'. esc_url( 'https://www.vwthemes.net/mining-industry-pro/' ) .'" class="button button-primary" target=_blank>'. esc_html__( 'VIEW DEMO', 'mining-industry' ) .'</a></span>';
				echo '<span class="upgrade-btn"><a href="'. esc_url( 'https://www.vwthemes.com/products/mining-wordpress-theme' ) .'" class="button button-primary" target=_blank>'. esc_html__( 'UPGRADE TO PRO', 'mining-industry' ) .'</a></span>';
				echo '<span class="bundle-btn"><a href="'. esc_url( 'https://www.vwthemes.com/products/wp-theme-bundle' ) .'" class="button button-primary" target=_blank>'. esc_html__( 'BUNDLE OF 500+ THEMES', 'mining-industry' ) .'</a></span>';
			echo '</div>';
			echo '<div class="notice-img1">';
				echo '<img src="' . esc_url( get_template_directory_uri() . '/inc/getstart/images/arrow-notice.png' ) . '" width="180" alt="' . esc_attr__( 'Mining Industry', 'mining-industry' ) . '" />';
			echo '</div>';
			echo '<div class="notice-img2">';
				echo '<img src="' . esc_url( get_template_directory_uri() . '/inc/getstart/images/bundle-notice.png' ) . '" width="180" alt="' . esc_attr__( 'Mining Industry', 'mining-industry' ) . '" />';
			echo '</div>';	
		echo '</div>';	
	echo '</div>';
}
    //Hook (VERY IMPORTANT)
	add_action('admin_notices', 'mining_industry_activation_notice');
/* Theme Widgets Setup */
function mining_industry_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'mining-industry' ),
		'description'   => __( 'Appears on blog page sidebar', 'mining-industry' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget p-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title py-2 px-3">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'mining-industry' ),
		'description'   => __( 'Appears on page sidebar', 'mining-industry' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget p-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title py-2 px-3">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'mining-industry' ),
		'description'   => __( 'Appears on page sidebar', 'mining-industry' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget mb-5 p-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title py-3 px-4">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 1', 'mining-industry' ),
		'description'   => __( 'Appears on footer 1', 'mining-industry' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget py-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-0 py-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 2', 'mining-industry' ),
		'description'   => __( 'Appears on footer 2', 'mining-industry' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget py-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-0 py-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 3', 'mining-industry' ),
		'description'   => __( 'Appears on footer 3', 'mining-industry' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget py-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-0 py-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 4', 'mining-industry' ),
		'description'   => __( 'Appears on footer 4', 'mining-industry' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget py-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-0 py-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'mining-industry' ),
		'description'   => __( 'Appears on shop page', 'mining-industry' ),
		'id'            => 'woocommerce-shop-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget p-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-3 py-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Single Product Sidebar', 'mining-industry' ),
		'description'   => __( 'Appears on single product page', 'mining-industry' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget p-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-3 py-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Social Icon', 'mining-industry' ),
		'description'   => __( 'Appears on footer', 'mining-industry' ),
		'id'            => 'footer-icon',
		'before_widget' => '<aside id="%1$s" class="widget mb-5 p-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title px-3 py-2">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'mining_industry_widgets_init' );

/* Theme Font URL */
function mining_industry_font_url() {
	$font_family   = array(
		'ABeeZee:ital@0;1',
		'Abril Fatfac',
		'Acme',
		'Allura',
		'Amatic SC:wght@400;700',
		'Anton',
		'Architects Daughter',
		'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Arsenal:ital,wght@0,400;0,700;1,400;1,700',
		'Arvo:ital,wght@0,400;0,700;1,400;1,700',
		'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Assistant:wght@200;300;400;500;600;700;800',
		'Alfa Slab One',
		'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Bebas Neue',
		'Bangers',
		'Boogaloo',
		'Bad Script',
		'Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Barlow Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Berkshire Swash',
		'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Bree Serif',
		'BenchNine:wght@300;400;700',
		'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Cardo:ital,wght@0,400;0,700;1,400',
		'Courgette',
		'Caveat:wght@400;500;600;700',
		'Caveat Brush',
		'Cherry Swash:wght@400;700',
		'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
		'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700',
		'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Cookie',
		'Coming Soon',
		'Charm:wght@400;700',
		'Chewy',
		'Days One',
		'DM Serif Display:ital@0;1',
		'Dosis:wght@200;300;400;500;600;700;800',
		'EB Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800',
		'Economica:ital,wght@0,400;0,700;1,400;1,700',
		'Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Familjen Grotesk:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Fira Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Fredoka One',
		'Fjalla One',
		'Francois One',
		'Frank Ruhl Libre:wght@300;400;500;700;900',
		'Gabriela',
		'Gloria Hallelujah',
		'Great Vibes',
		'Handlee',
		'Hammersmith One',
		'Heebo:wght@100;200;300;400;500;600;700;800;900',
		'Hind:wght@300;400;500;600;700',
		'Inconsolata:wght@200;300;400;500;600;700;800;900',
		'Indie Flower',
		'IM Fell English SC',
		'Julius Sans One',
		'Jomhuria',
		'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Josefin Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Kaisei HarunoUmi:wght@400;500;700',
		'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Kaushan Script',
		'Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700',
		'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
		'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Libre Baskerville:ital,wght@0,400;0,700;1,400',
		'Lobster',
		'Lobster Two:ital,wght@0,400;0,700;1,400;1,700',
		'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
		'Monda:wght@400;700',
		'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Mulish:ital,wght@0,200..1000;1,200..1000',
		'Marck Script',
		'Marcellus',
		'Merienda One',
		'Monda:wght@400;700',
		'Noto Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Nunito Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900',
		'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
		'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Overpass Mono:wght@300;400;500;600;700',
		'Oxygen:wght@300;400;700',
		'Oswald:wght@200;300;400;500;600;700',
		'Orbitron:wght@400;500;600;700;800;900',
		'Patua One',
		'Pacifico',
		'Padauk:wght@400;700',
		'Playball',
		'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'PT Sans:ital,wght@0,400;0,700;1,400;1,700',
		'PT Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
		'Permanent Marker',
		'Poiret One',
		'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Prata',
		'Quicksand:wght@300;400;500;600;700',
		'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Rokkitt:wght@100;200;300;400;500;600;700;800;900',
		'Ropa Sans:ital@0;1',
		'Russo One',
		'Righteous',
		'Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Satisfy',
		'Sen:wght@400;700;800',
		'Slabo 13px',
		'Slabo 27px',
		'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
		'Shadows Into Light Two',
		'Shadows Into Light',
		'Sacramento',
		'Sail',
		'Shrikhand',
		'League Spartan:wght@100;200;300;400;500;600;700;800;900',
		'Staatliches',
		'Stylish',
		'Tangerine:wght@400;700',
		'Titillium Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700',
		'Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700',
		'Unica One',
		'VT323',
		'Varela Round',
		'Vampiro One',
		'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Volkhov:ital,wght@0,400;0,700;1,400;1,700',
		'Work Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Yanone Kaffeesatz:wght@200;300;400;500;600;700',
		'Yeseva One',
		'ZCOOL XiaoWei',
		'League Spartan:wght@100;200;300;400;500;600;700;800;900',
		'Outfit:wght@100..900',
		'Urbanist:ital,wght@0,100..900;1,100..900',
		'Manrope:wght@200..800',
		'Fredoka:wght@300;400;500;600;700',
		'Sen:wght@400..800',
		'Inter Tight:ital,wght@0,100..900;1,100..900',
		'Kaushan Script',
		'Figtree:ital,wght@0,300..900;1,300..900',
		'Kalam:wght@300;400;700',
		'Space Grotesk:wght@300..700',
		'Rum Raisin',
		'Nunito:ital,wght@0,200..1000;1,200..1000',
		'Radio Canada:ital,wght@0,300..700;1,300..700'
	 );
	
	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = mining_industry_wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/* Theme enqueue scripts */
function mining_industry_scripts() {
	wp_enqueue_style( 'mining-industry-font', mining_industry_font_url(), array() );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.css' );
	wp_enqueue_style( 'mining-industry-block-style', get_theme_file_uri('/assets/css/blocks.css') );
	wp_enqueue_style( 'mining-industry-block-patterns-style-frontend', get_theme_file_uri('/inc/block-patterns/css/block-frontend.css') );
	wp_enqueue_style( 'owl.carousel-style', get_template_directory_uri().'/assets/css/owl.carousel.css' );
	wp_enqueue_style( 'mining-industry-basic-style', get_stylesheet_uri() );
	wp_style_add_data('mining-industry-basic-style', 'rtl', 'replace');
	/* Inline style sheet */
	require get_parent_theme_file_path( '/custom-style.php' );
	wp_add_inline_style( 'mining-industry-basic-style',$mining_industry_custom_css );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri(). '/assets/js/bootstrap.js', array('jquery') ,'',true);
	wp_enqueue_script( 'mining-industry-custom-scripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'),'' ,true );
	if (get_theme_mod('mining_industry_animation', true) == true){
		wp_enqueue_script( 'wow-jquery', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'),'' ,true );
		wp_enqueue_style( 'animate-style', get_template_directory_uri().'/assets/css/animate.css' );
	}	
	wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri(). '/assets/js/owl.carousel.js', array('jquery') ,'',true);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/* Enqueue the Dashicons script */
	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'mining_industry_scripts' );


function mining_industry_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function mining_industry_sanitize_number_range( $number, $setting ) {
	
	// Ensure input is an absolute integer.
	$number = absint( $number );
	
	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
	
	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
	
	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
	
	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
	
	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

function mining_industry_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function mining_industry_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );
	
	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

/* Excerpt Limit Begin */
function mining_industry_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

if ( ! function_exists( 'mining_industry_switch_sanitization' ) ) {
	function mining_industry_switch_sanitization( $input ) {
		if ( true === $input ) {
			return 1;
		} else {
			return 0;
		}
	}
}

function mining_industry_sanitize_float( $input ) {
	return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'mining_industry_loop_columns');
	if (!function_exists('mining_industry_loop_columns')) {
	function mining_industry_loop_columns() {
		return get_theme_mod( 'mining_industry_products_per_row', 4 );
		// 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'mining_industry_products_per_page' );
function mining_industry_products_per_page( $cols ) {
  	return  get_theme_mod( 'mining_industry_products_per_page',9);
}

function mining_industry_logo_title_hide_show(){
	if(get_theme_mod('mining_industry_logo_title_hide_show') == '1' ) {
		return true;
	}
	return false;
}

function mining_industry_tagline_hide_show(){
	if(get_theme_mod('mining_industry_tagline_hide_show',0) == '1' ) {
		return true;
	}
	return false;
}

function mining_industry_blog_post_featured_image_dimension(){
	if(get_theme_mod('mining_industry_blog_post_featured_image_dimension') == 'custom' ) {
		return true;
	}
	return false;
}

if (!function_exists('mining_industry_edit_link')) :

    function mining_industry_edit_link($view = 'default')
    {
        global $post;
        edit_post_link(
            sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __('Edit <span class="screen-reader-text">%s</span>', 'mining-industry'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ),
            '<span class="edit-link"><i class="fas fa-edit"></i>',
            '</span>'
        );
    }
endif;


function mining_industry_setup_features() {
	define('MINING_INDUSTRY_FREE_THEME_DOC',__('https://preview.vwthemesdemo.com/docs/free-mining-industry/','mining-industry'));
	define('MINING_INDUSTRY_SUPPORT',__('https://wordpress.org/support/theme/mining-industry/','mining-industry'));
	define('MINING_INDUSTRY_REVIEW',__('https://wordpress.org/support/theme/mining-industry/reviews/','mining-industry'));
	define('MINING_INDUSTRY_BUY_NOW',__('https://www.vwthemes.com/products/mining-wordpress-theme','mining-industry'));
	define('MINING_INDUSTRY_LIVE_DEMO',__('https://www.vwthemes.net/mining-industry-pro/','mining-industry'));
	define('MINING_INDUSTRY_PRO_DOC',__('https://preview.vwthemesdemo.com/docs/mining-industry-pro/','mining-industry'));
	define('MINING_INDUSTRY_FAQ',__('https://www.vwthemes.com/faqs/','mining-industry'));
	define('MINING_INDUSTRY_CHILD_THEME',__('https://developer.wordpress.org/themes/advanced-topics/child-themes/','mining-industry'));
	define('MINING_INDUSTRY_CONTACT',__('https://www.vwthemes.com/contact/','mining-industry'));
	define('MINING_INDUSTRY_CREDIT',__('https://www.vwthemes.com/products/free-mining-industry-wordpress-theme','mining-industry'));
	define('MINING_INDUSTRY_THEME_BUNDLE_BUY_NOW',__('https://www.vwthemes.com/products/wp-theme-bundle','mining-industry'));
	define('MINING_INDUSTRY_THEME_BUNDLE_DOC',__('https://preview.vwthemesdemo.com/docs/theme-bundle/','mining-industry'));

	if ( ! function_exists( 'mining_industry_credit' ) ) {
		function mining_industry_credit(){
			echo "<a href=".esc_url(MINING_INDUSTRY_CREDIT)." target='_blank'>".esc_html__('Mining Industry WordPress Theme','mining-industry')."</a>";
		}
	}

	/* Plugin Activation */
	require get_template_directory() . '/inc/getstart/plugin-activation.php';

	/* Implement the Custom Header feature. */
    require get_template_directory() . '/inc/custom-header.php';

	/* Custom template tags for this theme. */
	require get_template_directory() . '/inc/template-tags.php';

	/* Customizer additions. */
	require get_template_directory() . '/inc/customizer.php';

	/* Typography */
	require get_template_directory() . '/inc/typography/ctypo.php';

	/* Webfonts */
	require get_template_directory() . '/inc/wptt-webfont-loader.php';

	/* Implement the About theme page */
	require get_template_directory() . '/inc/getstart/getstart.php';

	/* Block Pattern */
	require get_template_directory() . '/inc/block-patterns/block-patterns.php';

	/* TGM Plugin Activation */
	require get_template_directory() . '/inc/tgm/tgm.php';

	/* Social Icons */
	require get_template_directory() . '/inc/themes-widgets/social-icon.php';

	/* Customizer additions. */
	require get_template_directory() . '/inc/themes-widgets/about-us-widget.php';

	/* Customizer additions. */
	require get_template_directory() . '/inc/themes-widgets/contact-us-widget.php';

}
add_action( 'after_setup_theme', 'mining_industry_setup_features' );

// Admin notice code START
add_action('wp_ajax_mining_industry_dismiss_notice', 'mining_industry_dismiss_notice');
function mining_industry_dismiss_notice() {
    update_option('mining_industry_admin_notice', 1);
    wp_die();
}

//After Switch theme function
add_action('after_switch_theme', 'mining_industry_getstart_setup_options');
function mining_industry_getstart_setup_options () {
    delete_option('mining_industry_admin_notice');
}
// Admin notice code END

add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );