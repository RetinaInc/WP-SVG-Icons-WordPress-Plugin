<?php/************************************	SCRIPT CONTROLS***********************************/function wordpress_svg_icon_plugin_load_style($hook) {	wp_register_style( 'svg-icon-set1-style',  plugin_dir_url(__FILE__).'css/wordpress-svg-icon-plugin-style.css');		wp_enqueue_style( 'svg-icon-set1-style' );	wp_register_style( 'svg-icon-set1-expansion-style',  plugin_dir_url(__FILE__).'css/wordpress-svg-icon-plugin-expansion-style.css');		wp_enqueue_style( 'svg-icon-set1-expansion-style' );			$dest = wp_upload_dir();		$dest_path = $dest['path'];				$customFontPackPath = $dest_path.'/wp-svg-icons/custom-pack/';		$customFontPackPath = str_replace('2014/01/','',$customFontPackPath);		$customPackStyles = '/style.css';					// Check if there is a custom pack style file			// if there is enqueue it			if ( file_exists($customFontPackPath.$customPackStyles)) {				wp_register_style('wp_svg_custom_pack_style', '/wp-content/uploads/wp-svg-icons/custom-pack'.$customPackStyles );				wp_enqueue_style( 'wp_svg_custom_pack_style' );			} }add_action( 'wp_enqueue_scripts', 'wordpress_svg_icon_plugin_load_style' );function wordpress_svg_icon_plugin_load_style_dashboard() {	wp_register_style( 'svg-icon-set1-style-dashboard',  plugin_dir_url(__FILE__).'css/wordpress-svg-icon-plugin-style.css');	wp_enqueue_style( 'svg-icon-set1-style-dashboard' );	wp_register_style( 'svg-icon-set1-expansion-style-dashboard',  plugin_dir_url(__FILE__).'css/wordpress-svg-icon-plugin-expansion-style.css');	wp_enqueue_style( 'svg-icon-set1-expansion-style-dashboard' );}add_action( 'admin_enqueue_scripts', 'wordpress_svg_icon_plugin_load_style_dashboard' );function wordpress_svg_icon_plugin_custom_icon_pack_scripts($hook) {		if ($hook == 'wp-svg-icons_page_wp-svg-icons-upload-custom-pack') {				wp_register_script( 'wp-svg-delete-custom-pack',  plugin_dir_url(__FILE__).'js/wp_svg_delete_custom_pack_ajax.js');			wp_enqueue_script( 'wp-svg-delete-custom-pack' );				wp_register_script( 'wp-svg-jquery-dropdown',  plugin_dir_url(__FILE__).'js/jquery.dropdown.min.js');			wp_enqueue_script( 'wp-svg-jquery-dropdown' );				wp_register_style( 'wp-svg-jquery-dropdown-style',  plugin_dir_url(__FILE__).'css/jquery.dropdown.css');			wp_enqueue_style( 'wp-svg-jquery-dropdown-style' );				$dest = wp_upload_dir();		$dest_path = $dest['path'];		$customFontPackPath = $dest_path;		$customPackStyles = '/style.css';				// Check if there is a custom pack style file		// if there is enqueue it		if ( file_exists($customFontPackPath.$customPackStyles)) {			wp_register_style('wp_svg_custom_pack_style', '/wp-content/uploads/wp-svg-icons/custom-pack'.$customPackStyles );			wp_enqueue_style( 'wp_svg_custom_pack_style' );		} 			}}add_action( 'admin_enqueue_scripts', 'wordpress_svg_icon_plugin_custom_icon_pack_scripts' );