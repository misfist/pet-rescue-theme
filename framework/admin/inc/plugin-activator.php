<?php
/**
 * @package 	WordPress
 * @subpackage 	Pet Rescue
 * @version 	1.1.8
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 * 
 */


locate_template('framework/class/class-tgm-plugin-activation.php', true);


function cmsms_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Contact Form Builder', 'pet-rescue'), 
			'slug'					=> 'cmsms-contact-form-builder', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsms-contact-form-builder.zip', 
			'required'				=> false, 
			'version'				=> '1.3.3', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Content Composer', 'pet-rescue'), 
			'slug'					=> 'cmsms-content-composer', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsms-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '1.5.0', 
			'force_activation'		=> true, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Mega Menu', 'pet-rescue'), 
			'slug'					=> 'cmsms-mega-menu', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsms-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.4', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> true 
		), 
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'pet-rescue'), 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '6.3.0', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'pet-rescue'), 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '5.4.1', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('WooCommerce', 'pet-rescue'), 
			'slug' 					=> 'woocommerce', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'pet-rescue'), 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('PayPal Donations', 'pet-rescue'), 
			'slug' 					=> 'paypal-donations', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WordPress SEO by Yoast', 'pet-rescue'), 
			'slug' 					=> 'wordpress-seo', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('The Events Calendar', 'pet-rescue'), 
			'slug' 					=> 'the-events-calendar', 
			'required'				=> false 
		) 
	);
	
	
	$config = array( 
		'id' => 				'pet-rescue', 
		'default_path' => 		'', 
		'menu' => 				'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	__('Theme Required & Recommended Plugins', 'pet-rescue'), 
			'menu_title' => 	__('Theme Plugins', 'pet-rescue'), 
			'return' => 		__('Return to Theme Required & Recommended Plugins', 'pet-rescue') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

add_action('tgmpa_register', 'cmsms_register_theme_plugins');

