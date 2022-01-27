<?php
/**
 * it-company-pro functions and definitions
 *
 * @package it-company-pro
 */

if ( ! function_exists( 'it_company_pro_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function it_company_pro_setup() {
	$GLOBALS['content_width'] = apply_filters( 'it_company_pro_content_width', 640 );
	if ( ! isset( $content_width ) ) $content_width = 640;
	load_theme_textdomain( 'it-company-pro', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('it-company-pro-homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'it-company-pro' ),
		'footer'   => __( 'Footer Menu', 'it-company-pro' )
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_editor_style( array( 'assets/css/editor-style.css') );
}
endif;
add_action( 'after_setup_theme', 'it_company_pro_setup' );

/* Theme Widgets Setup */
function it_company_pro_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'it-company-pro' ),
		'description'   => __( 'Appears on blog page sidebar', 'it-company-pro' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Blog Right Sidebar', 'it-company-pro' ),
		'description'   => __( 'Appears on blog page sidebar', 'it-company-pro' ),
		'id'            => 'sidebar-blog-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="headthree widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'it-company-pro' ),
		'description'   => __( 'Appears on page sidebar', 'it-company-pro' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Page Right Sidebar', 'it-company-pro' ),
		'description'   => __( 'Appears on page sidebar', 'it-company-pro' ),
		'id'            => 'sidebar-page-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="headthree widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 1', 'it-company-pro' ),
		'description'   => __( 'Appears on footer', 'it-company-pro' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 2', 'it-company-pro' ),
		'description'   => __( 'Appears on footer', 'it-company-pro' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 3', 'it-company-pro' ),
		'description'   => __( 'Appears on footer', 'it-company-pro' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 4', 'it-company-pro' ),
		'description'   => __( 'Appears on footer', 'it-company-pro' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'it_company_pro_widgets_init' );

/* Theme Font URL */
function it_company_pro_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Poppins';
	$font_family[] = 'PT Serif';
	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function it_company_pro_scripts() {
	wp_enqueue_style( 'it-company-pro-font', it_company_pro_font_url(), array() );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'it-company-pro-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'it-company-pro-style', 'rtl', 'replace' );

	/* Inline style sheet */
	require get_parent_theme_file_path( '/inline_style.php' );
	wp_add_inline_style( 'it-company-pro-basic-style',$custom_css );

	if(is_rtl()){
	    wp_enqueue_style( 'rtl-style', get_template_directory_uri().'/rtl.css',true, null,'all');
	    wp_add_inline_style( 'rtl-style',$custom_css );
	    wp_enqueue_script( 'it-company-pro-customscripts-rtl', get_template_directory_uri() . '/assets/js/custom-rtl.js', array('jquery'),'', true );
  	}

  	else{
      // ---------- CSS Enqueue -----------
			wp_enqueue_style( 'home-page-style', get_template_directory_uri().'/assets/css/main-css/home-page.css',true, null,'all');
			wp_add_inline_style( 'home-page-style',$custom_css );
			wp_enqueue_style( 'other-page-style', get_template_directory_uri() . '/assets/css/main-css/other-pages.css',true, null,'all');
      wp_add_inline_style( 'other-page-style',$custom_css );

      if('post' == get_post_type() && is_home()){
        wp_enqueue_style( 'other-page-style', get_template_directory_uri() . '/assets/css/main-css/other-pages.css',true, null,'all');
        wp_add_inline_style( 'other-page-style',$custom_css );
      }
      wp_enqueue_style( 'header-footer-style', get_template_directory_uri().'/assets/css/main-css/header-footer.css',true, null,'all' );

      wp_enqueue_style( 'responsive-style', get_template_directory_uri().'/assets/css/main-css/mobile-main.css',true, null,'screen and (max-width: 2500px) and (min-width: 320px)' );

      wp_add_inline_style( 'header-footer-style',$custom_css );
      wp_add_inline_style( 'responsive-media-style',$custom_css );
  	}

	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/fontawesome-all.min.css' );

	if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
      wp_enqueue_style( 'amp-style', get_template_directory_uri().'/assets/css/main-css/amp-style.css',true, null,'all' );
      wp_enqueue_script( 'amp-sidebar', get_template_directory_uri() . '/assets/js/amp-sidebar-0.1.js', array('jquery'), '',true);
	} else{
	    wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri().'/assets/css/owl.carousel.css' );
  	}

		wp_enqueue_script( 'vanimation-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), true);
		wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), true);
		wp_enqueue_script( 'tether', get_template_directory_uri() . '/assets/js/tether.js', array('jquery'), '',true);
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array('jquery'),'',true);
		wp_enqueue_script( 'superfsh', get_template_directory_uri() . '/assets/js/jquery.superfish.js',array('jquery'),'',true);
		wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js',array('jquery'),'',true);
		wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js',array('jquery'),'',true);
		wp_enqueue_script( 'it-company-pro-customscripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'),'', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style('it-company-pro-ie', get_template_directory_uri().'/assets/css/ie.css', array('it-company-pro-basic-style'));
	wp_style_add_data( 'it-company-pro-ie', 'conditional', 'IE' );
}
add_action( 'wp_enqueue_scripts', 'it_company_pro_scripts' );

/* Implement the Custom Header feature. */
require get_parent_theme_file_path( '/inc/custom-header.php' );
/* Custom template tags for this theme. */
require get_parent_theme_file_path( '/inc/template-tags.php' );
/* Customizer additions. */
require get_parent_theme_file_path( '/inc/customize/customizer.php' );
/* key-activation. */
require get_parent_theme_file_path( 'theme-wizard/key-activation.php' );

/** Functions which enhance the theme by hooking into WordPress */
require get_parent_theme_file_path( 'inc/custom-functions.php');

/* Theme Wizard */
require get_parent_theme_file_path('/theme-wizard/config.php' );

 //about us
require get_template_directory() . '/inc/widget/about-us-widget.php';

// Contact-Widgets
require get_parent_theme_file_path( 'inc/widget/contact-widget.php');

// social-widgets
require get_parent_theme_file_path( 'inc/widget/socail-widget.php');

/* Breadcrumbs class. */
require_once get_parent_theme_file_path( '/inc/breadcrumbs.php' );

/* URL DEFINES */
define('it_company_pro_SITE_URL','https://www.themesglance.com/');
define('it_company_pro_LIVE_DEMO','https://themesglance.com/it-company-pro/');
define('it_company_pro_DOC','https://themesglance.com/docs/it-company-pro/');
define('it_company_pro_SUPPORT','https://www.themesglance.com/support/');
define('it_company_pro_PLUGINS','https://themesglance.com/docs/it-company-pro/');
define('it_company_pro_RATING','https://www.themesglance.com/support/forum/reviews/');
