<?php
/**
 * @package 	WordPress
 * @subpackage 	Pet Rescue
 * @version 	1.1.7
 * 
 * Admin Panel Appearance
 * Created by CMSMasters
 * 
 */


function cmsms_options_style_tabs() {
	$cmsms_option = cmsms_get_global_options();
	
	$tabs = array();
	
	$tabs['logo'] = esc_attr__('Logo', 'pet-rescue');
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'pet-rescue');
	}
	
	$tabs['header'] = esc_attr__('Header', 'pet-rescue');
	$tabs['content'] = esc_attr__('Content', 'pet-rescue');
	$tabs['footer'] = esc_attr__('Footer', 'pet-rescue');
	$tabs['icon'] = esc_attr__('Social Icons', 'pet-rescue');
	
	return $tabs;
}


function cmsms_options_style_sections() {
	$tab = cmsms_get_the_tab();
	
	switch ($tab) {
	case 'logo':
		$sections = array();
		
		$sections['logo_section'] = esc_attr__('Logo Options', 'pet-rescue');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'pet-rescue');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'pet-rescue');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'pet-rescue');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'pet-rescue');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'pet-rescue');
		
		break;
	}
	
	return $sections;
} 


function cmsms_options_style_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'logo':
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_type', 
			'title' => __('Logo Type', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'image', 
			'choices' => array( 
				__('Image', 'pet-rescue') . '|image', 
				__('Text', 'pet-rescue') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_url', 
			'title' => __('Logo Image', 'pet-rescue'), 
			'desc' => __('Choose your website logo image.', 'pet-rescue'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_url_retina', 
			'title' => __('Retina Logo Image', 'pet-rescue'), 
			'desc' => __('Choose logo image for retina displays.', 'pet-rescue'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_title', 
			'title' => __('Logo Title', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => ((get_bloginfo('name')) ? get_bloginfo('name') : CMSMS_FULLNAME), 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_subtitle', 
			'title' => __('Logo Subtitle', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_custom_color', 
			'title' => __('Custom Text Colors', 'pet-rescue'), 
			'desc' => __('enable', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_title_color', 
			'title' => __('Logo Title Color', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_subtitle_color', 
			'title' => __('Logo Subtitle Color', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_favicon', 
			'title' => __('Favicon', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_favicon_url', 
			'title' => __('Favicon URL', 'pet-rescue'), 
			'desc' => __('Choose your website favicon image url.', 'pet-rescue'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/favicon.ico', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_col', 
			'title' => __('Background Color', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#e3ded2' 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_img_enable', 
			'title' => __('Background Image Visibility', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_img', 
			'title' => __('Background Image', 'pet-rescue'), 
			'desc' => __('Choose your custom website background image url.', 'pet-rescue'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/bg.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_rep', 
			'title' => __('Background Repeat', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				__('No Repeat', 'pet-rescue') . '|no-repeat', 
				__('Repeat Horizontally', 'pet-rescue') . '|repeat-x', 
				__('Repeat Vertically', 'pet-rescue') . '|repeat-y', 
				__('Repeat', 'pet-rescue') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_pos', 
			'title' => __('Background Position', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'top center', 
			'choices' => array( 
				__('Top Left', 'pet-rescue') . '|top left', 
				__('Top Center', 'pet-rescue') . '|top center', 
				__('Top Right', 'pet-rescue') . '|top right', 
				__('Center Left', 'pet-rescue') . '|center left', 
				__('Center Center', 'pet-rescue') . '|center center', 
				__('Center Right', 'pet-rescue') . '|center right', 
				__('Bottom Left', 'pet-rescue') . '|bottom left', 
				__('Bottom Center', 'pet-rescue') . '|bottom center', 
				__('Bottom Right', 'pet-rescue') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_att', 
			'title' => __('Background Attachment', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				__('Scroll', 'pet-rescue') . '|scroll', 
				__('Fixed', 'pet-rescue') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_size', 
			'title' => __('Background Size', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'auto', 
			'choices' => array( 
				__('Auto', 'pet-rescue') . '|auto', 
				__('Cover', 'pet-rescue') . '|cover', 
				__('Contain', 'pet-rescue') . '|contain' 
			) 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_fixed_header', 
			'title' => __('Fixed Header', 'pet-rescue'), 
			'desc' => __('enable', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_heading_position', 
			'title' => __('Heading/Slider/Content Position', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'after_header', 
			'choices' => array( 
				__('Heading/Slider/Content After Header', 'pet-rescue') . '|after_header', 
				__('Heading/Slider/Content Under Header', 'pet-rescue') . '|under_header' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line', 
			'title' => __('Top Line', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_height', 
			'title' => __('Top Height', 'pet-rescue'), 
			'desc' => __('pixels', 'pet-rescue'), 
			'type' => 'number', 
			'std' => '35', 
			'min' => '30' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line_short_info', 
			'title' => __('Top Short Info', 'pet-rescue'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'pet-rescue') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line_add_cont', 
			'title' => __('Top Additional Content', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				__('None', 'pet-rescue') . '|none', 
				__('Top Line Social Icons', 'pet-rescue') . '|social', 
				__('Top Line Navigation', 'pet-rescue') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_styles', 
			'title' => __('Header Styles', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'r_nav', 
			'choices' => array( 
				__('Default Style', 'pet-rescue') . '|default', 
				__('Compact Style Left Navigation', 'pet-rescue') . '|l_nav', 
				__('Compact Style Right Navigation', 'pet-rescue') . '|r_nav', 
				__('Compact Style Center Navigation', 'pet-rescue') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_mid_height', 
			'title' => __('Header Middle Height', 'pet-rescue'), 
			'desc' => __('pixels', 'pet-rescue'), 
			'type' => 'number', 
			'std' => '110', 
			'min' => '80' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_bot_height', 
			'title' => __('Header Bottom Height', 'pet-rescue'), 
			'desc' => __('pixels', 'pet-rescue'), 
			'type' => 'number', 
			'std' => '46', 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_search', 
			'title' => __('Header Search', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_add_cont', 
			'title' => __('Header Additional Content', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cust_html', 
			'choices' => array( 
				__('None', 'pet-rescue') . '|none', 
				__('Header Social Icons', 'pet-rescue') . '|social', 
				__('Header Custom HTML', 'pet-rescue') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_add_cont_cust_html', 
			'title' => __('Header Custom HTML', 'pet-rescue'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'pet-rescue') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_layout', 
			'title' => __('Layout Type by Default', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				__('Right Sidebar', 'pet-rescue') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				__('Left Sidebar', 'pet-rescue') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				__('Full Width', 'pet-rescue') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_alignment', 
			'title' => __('Heading Alignment by Default', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'left', 
			'choices' => array( 
				__('Left', 'pet-rescue') . '|left', 
				__('Right', 'pet-rescue') . '|right', 
				__('Center', 'pet-rescue') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_scheme', 
			'title' => __('Heading Custom Color Scheme by Default', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'first', 
			'choices' => cmsms_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_image_enable', 
			'title' => __('Heading Background Image Visibility by Default', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_image', 
			'title' => __('Heading Background Image by Default', 'pet-rescue'), 
			'desc' => __('Choose your custom heading background image by default.', 'pet-rescue'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_repeat', 
			'title' => __('Heading Background Repeat by Default', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				__('No Repeat', 'pet-rescue') . '|no-repeat', 
				__('Repeat Horizontally', 'pet-rescue') . '|repeat-x', 
				__('Repeat Vertically', 'pet-rescue') . '|repeat-y', 
				__('Repeat', 'pet-rescue') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_attachment', 
			'title' => __('Heading Background Attachment by Default', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				__('Scroll', 'pet-rescue') . '|scroll', 
				__('Fixed', 'pet-rescue') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_size', 
			'title' => __('Heading Background Size by Default', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				__('Auto', 'pet-rescue') . '|auto', 
				__('Cover', 'pet-rescue') . '|cover', 
				__('Contain', 'pet-rescue') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_color', 
			'title' => __('Heading Background Color Overlay by Default', 'pet-rescue'), 
			'desc' => __('color transparency (percentage)', 'pet-rescue'),  
			'type' => 'rgba', 
			'std' => '#8e393d|100' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_height', 
			'title' => __('Heading Height by Default', 'pet-rescue'), 
			'desc' => __('pixels', 'pet-rescue'), 
			'type' => 'number', 
			'std' => '70', 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_breadcrumbs', 
			'title' => __('Breadcrumbs Visibility by Default', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_breadcrumbs_alignment', 
			'title' => __('Breadcrumbs Alignment by Default', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'left', 
			'choices' => array( 
				__('Left', 'pet-rescue') . '|left', 
				__('Right', 'pet-rescue') . '|right', 
				__('Center', 'pet-rescue') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_scheme', 
			'title' => __('Bottom Custom Color Scheme', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'default', 
			'choices' => cmsms_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_sidebar', 
			'title' => __('Bottom Sidebar Visibility by Default', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_sidebar_layout', 
			'title' => __('Bottom Sidebar Layout by Default', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => '131313', 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_scheme', 
			'title' => __('Footer Custom Color Scheme', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsms_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_type', 
			'title' => __('Footer Type', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'default', 
			'choices' => array( 
				__('Default', 'pet-rescue') . '|default', 
				__('Small', 'pet-rescue') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_additional_content', 
			'title' => __('Footer Additional Content', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				__('None', 'pet-rescue') . '|none', 
				__('Footer Navigation', 'pet-rescue') . '|nav', 
				__('Social Icons', 'pet-rescue') . '|social', 
				__('Custom HTML', 'pet-rescue') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_fixed_footer', 
			'title' => __('Fixed Footer', 'pet-rescue'), 
			'desc' => __('enable', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_height', 
			'title' => __('Footer Height', 'pet-rescue'), 
			'desc' => __('pixels', 'pet-rescue'), 
			'type' => 'number', 
			'std' => '450', 
			'min' => '200' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_logo', 
			'title' => __('Footer Logo', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_logo_url', 
			'title' => __('Footer Logo', 'pet-rescue'), 
			'desc' => __('Choose your website footer logo image.', 'pet-rescue'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_logo_url_retina', 
			'title' => __('Footer Logo for Retina', 'pet-rescue'), 
			'desc' => __('Choose your website footer logo image for retina.', 'pet-rescue'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_nav', 
			'title' => __('Footer Navigation', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_social', 
			'title' => __('Footer Social Icons', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_html', 
			'title' => __('Footer Custom HTML', 'pet-rescue'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'pet-rescue') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_copyright', 
			'title' => __('Copyright Text', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => CMSMS_FULLNAME . ' &copy; 2014 | ' . __('All Rights Reserved', 'pet-rescue'), 
			'class' => 'nohtml' 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => CMSMS_SHORTNAME . '_social_icons', 
			'title' => __('Social Icons', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => array( 
				'cmsms-icon-twitter-circled|#|' . __('Twitter', 'pet-rescue') . '|true', 
				'cmsms-icon-facebook-circled|#|' . __('Facebook', 'pet-rescue') . '|true', 
				'cmsms-icon-gplus-circled|#|' . __('Google+', 'pet-rescue') . '|true', 
				'cmsms-icon-vimeo-circled|#|' . __('Vimeo', 'pet-rescue') . '|true', 
				'cmsms-icon-skype-circled|#|' . __('Skype', 'pet-rescue') . '|true' 
			) 
		);
		
		break;
	}
	
	return $options;	
}

