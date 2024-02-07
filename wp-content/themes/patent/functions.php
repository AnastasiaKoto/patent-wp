<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

defined( 'CHLD_THM_CFG_IGNORE_PARENT' ) or define( 'CHLD_THM_CFG_IGNORE_PARENT', TRUE );

// END ENQUEUE PARENT ACTION

//подключаем стили и скрипты
function all_styles() {
	wp_enqueue_style('css-norm', '/wp-content/themes/patent/css/normalize.css' );
	wp_enqueue_style( 'slick_css', '/wp-content/themes/patent/slick/slick.css' );
	wp_enqueue_style( 'slicktheme_css', '/wp-content/themes/patent/slick/slick-theme.css' );
	wp_enqueue_style( 'style_css', '/wp-content/themes/patent/css/style.css' );
	wp_enqueue_style( 'landing_css', '/wp-content/themes/patent/css/landing.css' );
    wp_enqueue_style( 'contacts_css', '/wp-content/themes/patent/css/contacts.css' );
}
function all_js() {
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js');
	wp_enqueue_script('slick', '/wp-content/themes/patent/slick/slick.min.js');
	wp_enqueue_script('main', '/wp-content/themes/patent/js/main.js');
	wp_enqueue_script('landing', '/wp-content/themes/patent/js/landing.js');
}
add_action('wp_enqueue_scripts', 'all_styles');
add_action('wp_enqueue_scripts', 'all_js');

//страница опций
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

	// Check function exists.
	if( function_exists('acf_add_options_page') ) {

		// Register options page.
		acf_add_options_page(array(
			'page_title'    => __('Страница настроек'),
			'menu_title'    => __('Настройки темы'),
			'menu_slug'     => 'theme-general-settings',
			'capability'    => 'edit_posts',
			'redirect'      => false
		));

        acf_add_options_page(array(
			'page_title'    => __('Страница настроек формы-квиза'),
			'menu_title'    => __('Настройки формы-квиза'),
			'menu_slug'     => 'theme-quize-settings',
			'capability'    => 'edit_posts',
			'redirect'      => false
		));
	}
}

//меню
add_action( 'after_setup_theme', 'theme_register_nav_header_menu' );

function theme_register_nav_header_menu() {
	register_nav_menu( 'header', 'Header Menu');
}

add_action( 'after_setup_theme', 'theme_register_nav_footer_menu' );

function theme_register_nav_footer_menu() {
	register_nav_menu( 'footer', 'Footer Menu');
}

// тип записи

function create_custom_post_type() {
    register_post_type('services',
        array(
            'labels' => array(
                'name' => __('Услуги'),
                'singular_name' => __('Услуги')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
        )
    );
    register_post_type('keyses',
        array(
            'labels' => array(
                'name' => __('Кейсы'),
                'singular_name' => __('Кейсы')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'keyses'),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
        )
    );
    register_post_type('news',
        array(
            'labels' => array(
                'name' => __('Новости'),
                'singular_name' => __('Новости')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'news'),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
        )
    );

    register_post_type('articles',
        array(
            'labels' => array(
                'name' => __('Статьи'),
                'singular_name' => __('Статьи')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'articles'),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
        )
    );
}
add_action('init', 'create_custom_post_type');

// таксономии

function create_custom_taxonomies() {
    register_taxonomy(
        'services_category',
        'services',
        array(
            'label' => __('Категории услуг'),
            'hierarchical' => true,
            'rewrite' => array('slug' => 'services-category'),
        )
    );
}
add_action('init', 'create_custom_taxonomies');

require __DIR__ . '/inc/main_form.php';