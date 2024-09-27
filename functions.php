<?php
define("CSS_PATH", get_template_directory_uri() . '/assets/css/');
define("JS_PATH", get_template_directory_uri() . '/assets/js/');
define("IMG_PATH", get_template_directory_uri() . '/assets/images/');

if (!function_exists('theme_setup')) :
	function theme_setup()
	{
		load_theme_textdomain('theme', get_template_directory() . '/languages');

		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary-menu' => esc_html__('Primary', 'theme'),
			)
		);

		add_theme_support(
			'html5',
			array('search-form', 'gallery', 'caption', 'style', 'script',)
		);
		add_theme_support('editor-styles');
		add_theme_support(
			'custom-background',
			apply_filters(
				'theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'theme_setup');

function wp_theme_enqueues()
{
	global $wp_query;
	/*enque styles*/
	// wp_enqueue_style('style', get_template_directory_uri(  ). '/assets/dest/style.css');
	wp_enqueue_style('slick-style', CSS_PATH . 'library/slick.css');
	wp_enqueue_style('magnific-style', CSS_PATH . 'library/magnific-popup.css');
	wp_enqueue_style('main-style', CSS_PATH . 'main.css', '', '1.1');

	wp_enqueue_script('jquery');
	$local_data['ajaxurl'] = admin_url('admin-ajax.php');
	$local_data['siteurl'] = site_url();
	$local_data['themeuri'] = get_template_directory_uri();
	$local_data['query_vars'] = json_encode($wp_query->query);
	$local_data['current_page'] = $wp_query->query_vars['paged'] ? $wp_query->query_vars['paged'] : 1;
	$local_data['max_page'] = $wp_query->max_num_pages;
	wp_localize_script('jquery', 'ajax_var', $local_data);

	/*enque scripts*/
	wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', '', '', true);
	wp_enqueue_script('magnific-popup-js', JS_PATH . 'library/jquery.magnific-popup.min.js', '', '', true);
	wp_enqueue_script('masonry-js', JS_PATH . 'library/masonry.pkgd.min.js', '', '', true);
	wp_enqueue_script('theme', JS_PATH . 'theme.js', '', '1.4', true);
	wp_enqueue_script('general-js', JS_PATH . 'general.js', '', '', true);

	$ajax_vars = array('templateUrl' => get_stylesheet_directory_uri());
}
add_action('wp_enqueue_scripts', 'wp_theme_enqueues');
require get_template_directory() . '/inc/wp-admin-page.php';
require get_template_directory() . '/inc/acf-settings.php';

/* ACF Options Page */
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => __('Theme General Settings', 'theme_slug'),
		'menu_title' => __('Theme Options', 'theme_slug'),
		'menu_slug' => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect' => false,
		'icon_url' => ' dashicons-art',
		'position' => 100,
	));
}