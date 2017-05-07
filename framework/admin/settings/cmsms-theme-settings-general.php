<?php 
/**
 * @package 	WordPress
 * @subpackage 	Pet Rescue
 * @version 	1.1.7
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function cmsms_options_general_tabs() {
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'pet-rescue');
	$tabs['sidebar'] = esc_attr__('Sidebars', 'pet-rescue');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'pet-rescue');
	$tabs['error'] = esc_attr__('404', 'pet-rescue');
	$tabs['lightbox'] = esc_attr__('Lightbox', 'pet-rescue');
	$tabs['code'] = esc_attr__('Custom Codes', 'pet-rescue');
	
	if (class_exists('Cmsms_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'pet-rescue');
	}
	
	return $tabs;
}


function cmsms_options_general_sections() {
	$tab = cmsms_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'pet-rescue');
		
		break;
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'pet-rescue');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'pet-rescue');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'pet-rescue');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'pet-rescue');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'pet-rescue');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'pet-rescue');
		
		break;
	}
	
	return $sections;	
} 


function cmsms_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_theme_layout', 
			'title' => __('Theme Layout', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'boxed', 
			'choices' => array( 
				__('Liquid', 'pet-rescue') . '|liquid', 
				__('Boxed', 'pet-rescue') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_responsive', 
			'title' => __('Responsive Layout', 'pet-rescue'), 
			'desc' => __('enable', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_retina', 
			'title' => __('High Resolution', 'pet-rescue'), 
			'desc' => __('enable', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_preload', 
			'title' => __('Ajax Preloader', 'pet-rescue'), 
			'desc' => __('enable', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_preload_bg', 
			'title' => __('Preloader Background Color', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_preload_color', 
			'title' => __('Preloader Bar Color', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#dadada' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_preload_effect', 
			'title' => __('Preloader Animation Effect', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'grow', 
			'choices' => array( 
				__('Grow', 'pet-rescue') . '|grow', 
				__('Fade', 'pet-rescue') . '|fade', 
				__('Minimal', 'pet-rescue') . '|minimal', 
				__('Flash', 'pet-rescue') . '|flash', 
				__('Barber Shop', 'pet-rescue') . '|barber-shop', 
				__('Mac OSX', 'pet-rescue') . '|mac-osx', 
				__('Fill Left', 'pet-rescue') . '|fill-left', 
				__('Flat Top', 'pet-rescue') . '|flat-top', 
				__('Big Counter', 'pet-rescue') . '|big-counter', 
				__('Corner Indicator', 'pet-rescue') . '|corner-indicator', 
				__('Bounce', 'pet-rescue') . '|bounce', 
				__('Loading Bar', 'pet-rescue') . '|loading-bar', 
				__('Center Circle', 'pet-rescue') . '|center-circle', 
				__('Center Atom', 'pet-rescue') . '|center-atom', 
				__('Center Radar', 'pet-rescue') . '|center-radar', 
				__('Center Simple', 'pet-rescue') . '|center-simple' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_preload_percentage', 
			'title' => __('Preloader Percentage', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		break;
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => CMSMS_SHORTNAME . '_sidebar', 
			'title' => __('Custom Sidebars', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => '' 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_nav', 
			'title' => __('Website Pages', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_categs', 
			'title' => __('Blog Archives by Categories', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_tags', 
			'title' => __('Blog Archives by Tags', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_month', 
			'title' => __('Blog Archives by Month', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_pj_categs', 
			'title' => __('Portfolio Archives by Categories', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_pj_tags', 
			'title' => __('Portfolio Archives by Tags', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_color', 
			'title' => __('Background Color', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#3d3d3d|100' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_image', 
			'title' => __('Background Image', 'pet-rescue'), 
			'desc' => __('Choose your custom error page background image.', 'pet-rescue'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_search', 
			'title' => __('Search Line', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_sitemap_button', 
			'title' => __('Sitemap Button', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_sitemap_link', 
			'title' => __('Sitemap Page URL', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_skin', 
			'title' => __('Skin', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'dark', 
			'choices' => array( 
				__('Dark', 'pet-rescue') . '|dark', 
				__('Light', 'pet-rescue') . '|light', 
				__('Mac', 'pet-rescue') . '|mac', 
				__('Metro Black', 'pet-rescue') . '|metro-black', 
				__('Metro White', 'pet-rescue') . '|metro-white', 
				__('Parade', 'pet-rescue') . '|parade', 
				__('Smooth', 'pet-rescue') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_path', 
			'title' => __('Path', 'pet-rescue'), 
			'desc' => __('Sets path for switching windows', 'pet-rescue'), 
			'type' => 'radio', 
			'std' => 'vertical', 
			'choices' => array( 
				__('Vertical', 'pet-rescue') . '|vertical', 
				__('Horizontal', 'pet-rescue') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_infinite', 
			'title' => __('Infinite', 'pet-rescue'), 
			'desc' => __('Sets the ability to infinite the group', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_aspect_ratio', 
			'title' => __('Keep Aspect Ratio', 'pet-rescue'), 
			'desc' => __('Sets the resizing method used to keep aspect ratio within the viewport', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_mobile_optimizer', 
			'title' => __('Mobile Optimizer', 'pet-rescue'), 
			'desc' => __('Make lightboxes optimized for giving better experience with mobile devices', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_max_scale', 
			'title' => __('Max Scale', 'pet-rescue'), 
			'desc' => __('Sets the maximum viewport scale of the content', 'pet-rescue'), 
			'type' => 'number', 
			'std' => 1, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_min_scale', 
			'title' => __('Min Scale', 'pet-rescue'), 
			'desc' => __('Sets the minimum viewport scale of the content', 'pet-rescue'), 
			'type' => 'number', 
			'std' => 0.2, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_inner_toolbar', 
			'title' => __('Inner Toolbar', 'pet-rescue'), 
			'desc' => __('Bring buttons into windows, or let them be over the overlay', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_smart_recognition', 
			'title' => __('Smart Recognition', 'pet-rescue'), 
			'desc' => __('Sets content auto recognize from web pages', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_fullscreen_one_slide', 
			'title' => __('Fullscreen One Slide', 'pet-rescue'), 
			'desc' => __('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_fullscreen_viewport', 
			'title' => __('Fullscreen Viewport', 'pet-rescue'), 
			'desc' => __('Sets the resizing method used to fit content within the fullscreen mode', 'pet-rescue'), 
			'type' => 'select', 
			'std' => 'center', 
			'choices' => array( 
				__('Center', 'pet-rescue') . '|center', 
				__('Fit', 'pet-rescue') . '|fit', 
				__('Fill', 'pet-rescue') . '|fill', 
				__('Stretch', 'pet-rescue') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_toolbar', 
			'title' => __('Toolbar Controls', 'pet-rescue'), 
			'desc' => __('Sets buttons be available or not', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_arrows', 
			'title' => __('Arrow Controls', 'pet-rescue'), 
			'desc' => __('Enable the arrow buttons', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_fullscreen', 
			'title' => __('Fullscreen Controls', 'pet-rescue'), 
			'desc' => __('Sets the fullscreen button', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_thumbnail', 
			'title' => __('Thumbnails Controls', 'pet-rescue'), 
			'desc' => __('Sets the thumbnail navigation', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_keyboard', 
			'title' => __('Keyboard Controls', 'pet-rescue'), 
			'desc' => __('Sets the keyboard navigation', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_mousewheel', 
			'title' => __('Mouse Wheel Controls', 'pet-rescue'), 
			'desc' => __('Sets the mousewheel navigation', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_swipe', 
			'title' => __('Swipe Controls', 'pet-rescue'), 
			'desc' => __('Sets the swipe navigation', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_slideshow', 
			'title' => __('Slideshow Controls', 'pet-rescue'), 
			'desc' => __('Enable the slideshow feature and button', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_google_analytics', 
			'title' => __('Google Analytics', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_custom_css', 
			'title' => __('Custom CSS', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_custom_js', 
			'title' => __('Custom JavaScript', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_gmap_api_key', 
			'title' => __('Google Maps API key', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_api_key', 
			'title' => __('Twitter API key', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_api_secret', 
			'title' => __('Twitter API secret', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_access_token', 
			'title' => __('Twitter Access token', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_access_token_secret', 
			'title' => __('Twitter Access token secret', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => CMSMS_SHORTNAME . '_recaptcha_public_key', 
			'title' => __('reCAPTCHA Public Key', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => CMSMS_SHORTNAME . '_recaptcha_private_key', 
			'title' => __('reCAPTCHA Private Key', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

