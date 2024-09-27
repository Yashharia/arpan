<?php
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => __('Theme options','theme'),
		'menu_title' => __('Theme options','theme'),
		'redirect' => false,
		'icon_url' => 'dashicons-admin-generic',
        'menu_slug' 	=> 'theme-settings',
	));
}