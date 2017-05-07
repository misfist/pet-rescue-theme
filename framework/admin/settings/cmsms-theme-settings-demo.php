<?php 
/**
 * @package 	WordPress
 * @subpackage 	Pet Rescue
 * @version		1.1.7
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by CMSMasters
 * 
 */


function cmsms_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'pet-rescue');
	$tabs['export'] = esc_attr__('Export', 'pet-rescue');
	
	
	return $tabs;
}


function cmsms_options_demo_sections() {
	$tab = cmsms_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'pet-rescue');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'pet-rescue');
		
		
		break;
	}
	
	
	return $sections;
} 


function cmsms_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => CMSMS_SHORTNAME . '_demo_import', 
			'title' => __('Theme Settings', 'pet-rescue'), 
			'desc' => __("Enter your theme settings data here and click 'Import' button", 'pet-rescue'), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => CMSMS_SHORTNAME . '_demo_export', 
			'title' => __('Theme Settings', 'pet-rescue'), 
			'desc' => __("Click here to export your theme settings data to the file", 'pet-rescue'), 
			'type' => 'button', 
			'std' => __('Export Theme Settings', 'pet-rescue'), 
			'class' => 'cmsms-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

