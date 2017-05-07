<?php 
/**
 * @package 	WordPress
 * @subpackage 	Pet Rescue
 * @version 	1.1.7
 * 
 * Admin Panel Post, Project, Profile & Donations Campaign Settings
 * Created by CMSMasters
 * 
 */


function cmsms_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'pet-rescue');
	
	if (class_exists('Cmsms_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'pet-rescue');
	}
	
	if (class_exists('Cmsms_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'pet-rescue');
	}
	
	if (class_exists('Cmsms_Donations')) {
		$tabs['campaign'] = esc_attr__('Campaign', 'pet-rescue');
	}
	
	
	return $tabs;
}


function cmsms_options_single_sections() {
	$tab = cmsms_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'pet-rescue');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'pet-rescue');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'pet-rescue');
		
		
		break;
	case 'campaign':
		$sections = array();
		
		$sections['campaign_section'] = esc_attr__('Donations Campaign Options', 'pet-rescue');
		
		
		break;
	}
	
	
	return $sections;
} 


function cmsms_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_layout', 
			'title' => __('Layout Type', 'pet-rescue'), 
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
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_title', 
			'title' => __('Post Title', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_date', 
			'title' => __('Post Date', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_cat', 
			'title' => __('Post Categories', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_author', 
			'title' => __('Post Author', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_comment', 
			'title' => __('Post Comments', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_tag', 
			'title' => __('Post Tags', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_like', 
			'title' => __('Post Likes', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_nav_box', 
			'title' => __('Posts Navigation Box', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_share_box', 
			'title' => __('Sharing Box', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_author_box', 
			'title' => __('About Author Box', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_more_posts_box', 
			'title' => __('More Posts Box', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'multi-checkbox', 
			'std' => array( 
				'related' => 'true', 
				'popular' => 'true', 
				'recent' => 'true' 
			), 
			'choices' => array( 
				__('Show Related Tab', 'pet-rescue') . '|related', 
				__('Show Popular Tab', 'pet-rescue') . '|popular', 
				__('Show Recent Tab', 'pet-rescue') . '|recent' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_r_p_l_number', 
			'title' => __('Related, Popular & Latest Posts Boxes Items Number', 'pet-rescue'), 
			'desc' => __('posts', 'pet-rescue'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '10', 
			'step' => '2' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_title', 
			'title' => __('Project Title', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_details_title', 
			'title' => __('Project Details Title', 'pet-rescue'), 
			'desc' => __('Enter a project details block title', 'pet-rescue'), 
			'type' => 'text', 
			'std' => 'Project details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_date', 
			'title' => __('Project Date', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_cat', 
			'title' => __('Project Categories', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_author', 
			'title' => __('Project Author', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_comment', 
			'title' => __('Project Comments', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_tag', 
			'title' => __('Project Tags', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_like', 
			'title' => __('Project Likes', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_link', 
			'title' => __('Project Link', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_share_box', 
			'title' => __('Sharing Box', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_nav_box', 
			'title' => __('Projects Navigation Box', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_author_box', 
			'title' => __('About Author Box', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_more_projects_box', 
			'title' => __('More Projects Box', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'multi-checkbox', 
			'std' => array( 
				'related' => 'true', 
				'popular' => 'true', 
				'recent' => 'true' 
			), 
			'choices' => array( 
				__('Show Related Tab', 'pet-rescue') . '|related', 
				__('Show Popular Tab', 'pet-rescue') . '|popular', 
				__('Show Recent Tab', 'pet-rescue') . '|recent' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_r_p_l_number', 
			'title' => __('Related, Popular & Latest Projects Boxes Items Number', 'pet-rescue'), 
			'desc' => __('projects', 'pet-rescue'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '10', 
			'step' => '2' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_slug', 
			'title' => __('Project Slug', 'pet-rescue'), 
			'desc' => __('Enter a page slug that should be used for your projects single item', 'pet-rescue'), 
			'type' => 'text', 
			'std' => 'project', 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_title', 
			'title' => __('Profile Title', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_details_title', 
			'title' => __('Profile Details Title', 'pet-rescue'), 
			'desc' => __('Enter a profile details block title', 'pet-rescue'), 
			'type' => 'text', 
			'std' => 'Profile details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_cat', 
			'title' => __('Profile Categories', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_comment', 
			'title' => __('Profile Comments', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_nav_box', 
			'title' => __('Profiles Navigation Box', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_share_box', 
			'title' => __('Sharing Box', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_slug', 
			'title' => __('Profile Slug', 'pet-rescue'), 
			'desc' => __('Enter a page slug that should be used for your profiles single item', 'pet-rescue'), 
			'type' => 'text', 
			'std' => 'profile', 
			'class' => '' 
		);
		
		
		break;
	case 'campaign':
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_title', 
			'title' => __('Campaign Title', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_date', 
			'title' => __('Campaign Date', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_cat', 
			'title' => __('Campaign Categories', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_comment', 
			'title' => __('Campaign Comments', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_tag', 
			'title' => __('Campaign Tags', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_like', 
			'title' => __('Campaign Likes', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_share_box', 
			'title' => __('Sharing Box', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_nav_box', 
			'title' => __('Campaign Navigation Box', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_author_box', 
			'title' => __('About Author Box', 'pet-rescue'), 
			'desc' => __('show', 'pet-rescue'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_more_campaigns_box', 
			'title' => __('More Campaigns Box', 'pet-rescue'), 
			'desc' => '', 
			'type' => 'multi-checkbox', 
			'std' => array( 
				'related' => 'true', 
				'popular' => 'true', 
				'recent' => 'true' 
			), 
			'choices' => array( 
				__('Show Related Tab', 'pet-rescue') . '|related', 
				__('Show Popular Tab', 'pet-rescue') . '|popular', 
				__('Show Recent Tab', 'pet-rescue') . '|recent' 
			) 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_r_p_l_number', 
			'title' => __('Related, Popular & Latest Campaigns Boxes Items Number', 'pet-rescue'), 
			'desc' => __('campaigns', 'pet-rescue'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '10', 
			'step' => '2' 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_slug', 
			'title' => __('Campaign Slug', 'pet-rescue'), 
			'desc' => __('Enter a page slug that should be used for your donations campaign single item', 'pet-rescue'), 
			'type' => 'text', 
			'std' => 'campaign', 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return $options;
}

